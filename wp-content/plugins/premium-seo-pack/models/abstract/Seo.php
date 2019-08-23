<?php

abstract class PSP_Models_Abstract_Seo {
    protected $_post;
    protected $_patterns;
    protected $_sq_use;

    public function __construct() {
        PSP_Classes_Tools::dump("apply post");
        $this->_post = PSP_Classes_ObjController::getClass('PSP_Models_Frontend')->getPost();
        if (class_exists('SQ_Tools')) {
            $this->_sq_use = SQ_Tools::$options['sq_use'];
        }
    }

    /**************************** CLEAR THE VALUES *************************************/
    /***********************************************************************************/
    /**
     * Clear and format the title for all languages
     * @param $title
     * @return string
     */
    public function clearTitle($title) {
        if ($title <> '') {
            $title = PSP_Classes_Tools::i18n(trim(esc_html(ent2ncr(strip_tags($title)))));
            $title = addcslashes($title, '$');

            $title = preg_replace('/\s{2,}/',' ',$title);
        }
        return $title;
    }

    /**
     * Clear and format the descrition for all languages
     * @param $description
     * @return mixed|string
     */
    public function clearDescription($description) {
        if ($description <> '') {
            $search = array("'<script[^>]*?>.*?<\/script>'si", // strip out javascript
                "/<form.*?<\/form>/si",
                "/<iframe.*?<\/iframe>/si");

            if (function_exists('preg_replace')) {
                $description = preg_replace($search, "", $description);
                $description = str_replace("\n", " ", $description);
            }

            $description = PSP_Classes_Tools::i18n(trim(esc_html(ent2ncr(strip_tags($description)))));
            $description = addcslashes($description, '$');
            $description = preg_replace('/\s{2,}/',' ',$description);
        }

        return $description;
    }

    /**
     * Get the image from post
     *
     * @return array
     */
    public function getPostImages() {
        $images = array();

        if ((int)$this->_post->ID == 0) {
            return $images;
        }

        if (has_post_thumbnail($this->_post->ID)) {
            $attachment = get_post(get_post_thumbnail_id($this->_post->ID));
            $url = wp_get_attachment_image_src($attachment->ID, 'full');
            $images[] = array(
                'src' => esc_url($url[0]),
                'title' => $this->clearTitle($this->_post->post_title),
                'description' => $this->clearDescription($this->_post->post_excerpt),
                'width' => $url[1],
                'height' => $url[2],
            );
        }

        if (empty($images)) {
            if (isset($this->_post->post_content)) {
                preg_match('/<img[^>]*src="([^"]*)"[^>]*>/i', $this->_post->post_content, $match);

                if (!empty($match)) {
                    preg_match('/alt="([^"]*)"/i', $match[0], $alt);

                    if (strpos($match[1], '//') === false) {
                        $match[1] = get_bloginfo('url') . $match[1];
                    }

                    $images[] = array(
                        'src' => esc_url($match[1]),
                        'title' => $this->clearTitle(!empty($alt[1]) ? $alt[1] : ''),
                        'description' => '',
                        'width' => '500',
                        'height' => null,
                    );
                }
            }
        }


        return $images;
    }

    /**
     * Get the video from content
     * @return array
     */
    public function getPostVideos() {
        $videos = array();

        if ((int)$this->_post->ID == 0) {
            return $videos;
        }

        if (isset($this->_post->post_content)) {
            preg_match('/(?:http(?:s)?:\/\/)?(?:www\.)?(?:youtu\.be\/|youtube\.com\/(?:embed)\/)([^\?&\"\'>\s]+)/si', $this->_post->post_content, $match);

            if (isset($match[0])) {
                if (strpos($match[0], '//') !== false && strpos($match[0], 'http') === false) {
                    $match[0] = 'http:' . $match[0];
                }
                $videos[] = esc_url($match[0]);
            }

            preg_match('/(?:http(?:s)?:\/\/)?(?:fwd4\.wistia\.com\/(?:medias)\/)([^\?&\"\'>\s]+)/si', $this->_post->post_content, $match);

            if (isset($match[0])) {
                $videos[] = esc_url('http://fast.wistia.net/embed/iframe/' . $match[1]);
            }

            preg_match('/class=["|\']([^"\']*wistia_async_([^\?&\"\'>\s]+)[^"\']*["|\'])/si', $this->_post->post_content, $match);

            if (isset($match[0])) {
                $videos[] = esc_url('http://fast.wistia.net/embed/iframe/' . $match[2]);
            }

            preg_match('/src=["|\']([^"\']*(.mpg|.mpeg|.mp4|.mov|.wmv|.asf|.avi|.ra|.ram|.rm|.flv)["|\'])/i', $this->_post->post_content, $match);

            if (isset($match[1])) {
                $videos[] = esc_url($match[1]);
            }
        }

        return $videos;
    }

    /**
     * Check if is the homepage
     *
     * @return bool
     */
    public function isHomePage() {
        return PSP_Classes_ObjController::getClass('PSP_Models_Frontend')->isHomePage();
    }

    public function getPost() {
        return PSP_Classes_ObjController::getClass('PSP_Models_Frontend')->getPost();
    }

    public function returnFalse() {
        return false;
    }

    public function truncate($text, $min = 100, $max = 110) {
        if ($text <> '' && strlen($text) > $max) {
            if (function_exists('strip_tags')) {
                $text = strip_tags($text);
            }
            $text = str_replace(']]>', ']]&gt;', $text);
            $text = @preg_replace('|\[(.+?)\](.+?\[/\\1\])?|s', '', $text);
            $text = strip_tags($text);

            if ($max < strlen($text)) {
                while ($text[$max] != ' ' && $max > $min) {
                    $max--;
                }
            }
            $text = substr($text, 0, $max);
            return trim(stripcslashes($text));
        }

        return $text;
    }
}