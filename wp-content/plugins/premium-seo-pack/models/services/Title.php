<?php

class PSP_Models_Services_Title extends PSP_Models_Abstract_Seo {


    public function __construct() {
        parent::__construct();

        if ($this->_post->psp->doseo) {
            add_filter('psp_title', array($this, 'generateTitle'));
            add_filter('psp_title', array($this, 'clearTitle'), 98);
            add_filter('psp_title', array($this, 'packTitle'), 99);
        } else {
            add_filter('psp_title', array($this, 'returnFalse'));
        }

        if ($this->_sq_use) {
            add_filter('psp_title', array($this, 'generateSquirrlyTitle'), 11);
        }

    }

    public function generateTitle($title = '') {

        if ( $this->_post->psp->title <> '') {
            $title = $this->_post->psp->title;
        } else {
            $title = $this->_post->post_title = get_the_title();
        }

        return $title;
    }

    public function generateSquirrlyTitle($title = '') {
        if ((int)$this->_post->ID > 0) {
             if($sqtitle = SQ_ObjController::getModel('SQ_Frontend')->getAdvancedMeta((int)$this->_post->ID, 'title')){
                 if ($sqtitle <> '') {
                     return $sqtitle;
                 }
             }
        }elseif($this->_post->post_type == 'home'){
            if ($sqtitle = SQ_Tools::$options['sq_fp_title']){
                if ($sqtitle <> '') {
                    return $sqtitle;
                }
            }
        }

        return $title;
    }

    public function packTitle($title = '') {
        if ($title <> '') {
            return sprintf("<title>%s</title>", $title);
        }

        return false;
    }

}