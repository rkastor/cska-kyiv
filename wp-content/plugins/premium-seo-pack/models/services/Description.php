<?php

class PSP_Models_Services_Description extends PSP_Models_Abstract_Seo {


    public function __construct() {
        parent::__construct();
        if ($this->_post->psp->doseo) {
            add_filter('psp_description', array($this, 'generateDescription'));
            add_filter('psp_description', array($this, 'clearDescription'), 98);
            add_filter('psp_description', array($this, 'packDescription'), 99);
        } else {
            add_filter('psp_description', array($this, 'returnFalse'));
        }

        if ($this->_sq_use) {
            add_filter('psp_description', array($this, 'generateSquirrlyDescription'), 11);
        }
    }

    public function generateDescription($description = '') {

        if ( $this->_post->psp->description <> '') {
            $description = $this->_post->psp->description;
        }

        return $description;
    }

    public function generateSquirrlyDescription($description = '') {
        if ((int)$this->_post->ID > 0) {
            if($sqdescription = SQ_ObjController::getModel('SQ_Frontend')->getAdvancedMeta((int)$this->_post->ID, 'description')){
                if ($sqdescription <> '') {
                    return $sqdescription;
                }
            }
        }elseif($this->_post->post_type == 'home'){
            if ($sqdescription = SQ_Tools::$options['sq_fp_description']){
                if ($sqdescription <> '') {
                    return $sqdescription;
                }
            }
        }

        return $description;
    }

    public function packDescription($description) {
        if ($description <> '') {
            return sprintf("<meta name=\"description\" content=\"%s\" />", $description);
        }
        return false;
    }
}