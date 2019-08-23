<?php

class PSP_Controllers_Login extends PSP_Classes_FrontController {


    public function action() {
        parent::action();

        switch (PSP_Classes_Tools::getValue('action')) {
            case 'psp_login':
                $this->squirrlyLogin();

                break;
            //sign-up action
            case 'psp_register':
                $this->squirrlyRegister();
                break;

            //reset the token action
            case 'psp_reset':
                PSP_Classes_Tools::saveOptions('psp_api', '');
                $return = array();
                $return['reset'] = 'success';

                //Set the header for json reply
                PSP_Classes_Tools::setHeader('json');
                echo json_encode($return);
                //force exit
                exit();
        }
    }


    /**
     * Register a new user to Squirrly and get the token
     * @global string $current_user
     */
    public function squirrlyRegister() {
        global $current_user;
        //set return to null object as default
        $return = (object) NULL;
        //api responce variable
        $responce = '';
        //post arguments
        $args = array();

        //Check if email is set
        if (PSP_Classes_Tools::getValue('email') <> '') {
            $args['name'] = '';
            $args['user'] = PSP_Classes_Tools::getValue('email');
            $args['email'] = PSP_Classes_Tools::getValue('email');
        }

        //if email is set
        if ($args['email'] <> '') {
            $responce = PSP_Classes_Action::apiCall('sq/register', $args);

            //create an object from json responce
            if (is_object(json_decode($responce)))
                $return = json_decode($responce);

            //add the responce in msg for debugging in case of error
            $return->msg = $responce;

            //check if token is set and save it
            if (isset($return->token)) {
                PSP_Classes_Tools::saveOptions('psp_api', $return->token);
            } elseif (!empty($return->error)) {
                //if an error is throw then ...
                switch ($return->error) {
                    case 'alreadyregistered':
                        $return->info = sprintf(__('We found your email, so it means you already have a Squirrly.co account. Please login with your Squirrly Email. If you forgot your password click %shere%s', _PSP_PLUGIN_NAME_), '<a href="' . _PSP_DASH_URL_ . 'login/?action=lostpassword" target="_blank">', '</a>');
                        break;
                }
            } else {
                //if unknown error
                $return->error = sprintf(__('Error: Couldn\'t connect to host :( . Please contact your site\'s webhost (or webmaster) and request them to add http://api.squirrly.co/ to their  IP whitelist.', _PSP_PLUGIN_NAME_), _SQ_API_URL_);
            }
        } else
            $return->error = sprintf(__('Could not send your informations to squirrly. Please register %smanually%s.', _PSP_PLUGIN_NAME_), '<a href="' . _PSP_DASH_URL_ . 'login/?action=register" target="_blank">', '</a>');

        //Set the header to json
        PSP_Classes_Tools::setHeader('json');
        echo json_encode($return); //transform object in json and show it

        exit();
    }

    /**
     * Login a user to Squirrly and get the token
     */
    public function squirrlyLogin() {
        //set return to null object as default
        $return = (object) NULL;
        //api responce variable
        $responce = '';

        //get the user and password
        $args['user'] = PSP_Classes_Tools::getValue('user', null, true);
        $args['password'] = PSP_Classes_Tools::getValue('password', null, true);

        if ($args['user'] <> '' && $args['password'] <> '') {
            //get the responce from server on login call
            $responce = PSP_Classes_Action::apiCall('sq/login', $args);

            //create an object from json responce
            if (is_object(json_decode($responce)))
                $return = json_decode($responce);

            //add the responce in msg for debugging in case of error
            $return->msg = $responce;

            //check if token is set and save it
            if (isset($return->token)) {
                PSP_Classes_Tools::saveOptions('psp_api', $return->token);
            } elseif (!empty($return->error)) {
                //if an error is throw then ...
                switch ($return->error) {
                    case 'badlogin':
                        $return->error = __('Wrong email or password!', _PSP_PLUGIN_NAME_);
                        break;
                    case 'multisite':
                        $return->error = __('You can use this account only for the URL you registered first!', _PSP_PLUGIN_NAME_);
                        break;
                }
            } else
            //if unknown error
                $return->error = __('An error occured.', _PSP_PLUGIN_NAME_);
        } else
            $return->error = __('Both fields are required.', _PSP_PLUGIN_NAME_);

        //Set the header to json
        PSP_Classes_Tools::setHeader('json');
        echo json_encode($return);

        exit();
    }

}
