<?php

class SmuzForm_Ext_Templates_Loader {

    private static $instance;

    protected function __construct() {}

    public static function getInstance() {
       
        if ( null === self::$instance )
            self::$instance = new self();
        
        return self::$instance;
    }

    public function load() {
        
        $this->_filters();
        $this->_hooks();
    }

    function _filters(){}
    function _hooks(){

        add_action( "admin_menu", function() {
            add_submenu_page( "smuz-forms-main", "Add New Form", "New Form", "manage_options", "templates-screen", array( $this, "templatesPage" ), 1 );
        } );

        add_action( "wp_ajax_smuzcreatetemplate", array( $this, "populateFormTemplate" ) );

    }

    function templatesPage() {

        require_once( "views/template-screen.php" );

    }

    function populateFormTemplate( $templateNo = null ) {

        if ( ! current_user_can( "manage_options" ) )
            die( "No Access" );

        $response = array(
            "error" => False,
            "formId" => 1,
            "msg" => "Contact Form Created From Template."
        );

        if ( $templateNo == null ) {

            $templateId = esc_sql( $_GET["id"] );

        }

        if ( $templateId == 1 ) {
            $this->createContactFormTemplate( $response );
        }

        if ( $templateId == 2 ) {
            $this->createWebsiteFormTemplate( $response );
        }

        if ( $templateId == 3 ) {
            $this->createQuestionFormTemplate( $response );
        }

        if ( $templateId == 4 ) {
            $this->createFeedbackFormTemplate( $response );
        }

    }

    function createContactFormTemplate( $response ) {

        $dir = SMUZFORM_PLUGIN_PATH . "/exts/templates/forms-src/" ;

        $model = file_get_contents( $dir . "contact-form-1-model.smuz" );

        $notificationModel = file_get_contents( $dir . "contact-form-1-noti.smuz" );

        $model = maybe_unserialize( $model );

        $notificationModel = maybe_unserialize( $notificationModel );

        $model["title"] = "Contact Form #" . mt_rand(1000,10000);

        $data = $model;

        $postarr = array(
            'post_title' => sanitize_text_field( $data['title'] ),
            'post_content' => '',
            'post_type' => 'smuzform',
            'post_status' => 'publish'
        );

        $notificationModel["notifications"][0]["extraData"]["emailAddress"] = get_bloginfo( "admin_email" );
        $notificationModel["notifications"][0]["extraData"]["fromText"] = get_bloginfo( "name" );

        $form_id = wp_insert_post( $postarr );
        
        $data['id'] = $form_id;

        update_post_meta( $form_id, 'model', $data );
        update_post_meta( $form_id, 'notifications', $notificationModel );

        $response["formId"] = $form_id;

        echo json_encode( $response );
        die();

    }

    function createWebsiteFormTemplate( $response ) {

        $dir = SMUZFORM_PLUGIN_PATH . "/exts/templates/forms-src/" ;

        $model = file_get_contents( $dir . "website-form-1-model.smuz" );

        $notificationModel = file_get_contents( $dir . "contact-form-1-noti.smuz" );

        $model = maybe_unserialize( $model );

        $notificationModel = maybe_unserialize( $notificationModel );

        $model["title"] = "Website Survey #" . mt_rand(1000,10000);

        $data = $model;

        $postarr = array(
            'post_title' => sanitize_text_field( $data['title'] ),
            'post_content' => '',
            'post_type' => 'smuzform',
            'post_status' => 'publish'
        );

        $notificationModel["notifications"][0]["extraData"]["emailAddress"] = get_bloginfo( "admin_email" );
        $notificationModel["notifications"][0]["extraData"]["fromText"] = get_bloginfo( "name" );

        $form_id = wp_insert_post( $postarr );
        
        $data['id'] = $form_id;

        update_post_meta( $form_id, 'model', $data );
        update_post_meta( $form_id, 'notifications', $notificationModel );

        $response["formId"] = $form_id;

        echo json_encode( $response );
        die();

    }

    function createQuestionFormTemplate( $response ) {

        $dir = SMUZFORM_PLUGIN_PATH . "/exts/templates/forms-src/" ;

        $model = file_get_contents( $dir . "question-form-1-model.smuz" );

        $notificationModel = file_get_contents( $dir . "contact-form-1-noti.smuz" );

        $model = maybe_unserialize( $model );

        $notificationModel = maybe_unserialize( $notificationModel );

        $model["title"] = "Question Form #" . mt_rand(1000,10000);

        $data = $model;

        $postarr = array(
            'post_title' => sanitize_text_field( $data['title'] ),
            'post_content' => '',
            'post_type' => 'smuzform',
            'post_status' => 'publish'
        );

        $notificationModel["notifications"][0]["extraData"]["emailAddress"] = get_bloginfo( "admin_email" );
        $notificationModel["notifications"][0]["extraData"]["fromText"] = get_bloginfo( "name" );

        $form_id = wp_insert_post( $postarr );
        
        $data['id'] = $form_id;

        update_post_meta( $form_id, 'model', $data );
        update_post_meta( $form_id, 'notifications', $notificationModel );

        $response["formId"] = $form_id;

        echo json_encode( $response );
        die();

    }

    function createFeedbackFormTemplate( $response ) {

        $dir = SMUZFORM_PLUGIN_PATH . "/exts/templates/forms-src/" ;

        $model = file_get_contents( $dir . "feedback-form-1-model.smuz" );

        $notificationModel = file_get_contents( $dir . "contact-form-1-noti.smuz" );

        $model = maybe_unserialize( $model );

        $notificationModel = maybe_unserialize( $notificationModel );

        $model["title"] = "Feedback Form #" . mt_rand(1000,10000);

        $data = $model;

        $postarr = array(
            'post_title' => sanitize_text_field( $data['title'] ),
            'post_content' => '',
            'post_type' => 'smuzform',
            'post_status' => 'publish'
        );

        $notificationModel["notifications"][0]["extraData"]["emailAddress"] = get_bloginfo( "admin_email" );
        $notificationModel["notifications"][0]["extraData"]["fromText"] = get_bloginfo( "name" );

        $form_id = wp_insert_post( $postarr );
        
        $data['id'] = $form_id;

        update_post_meta( $form_id, 'model', $data );
        update_post_meta( $form_id, 'notifications', $notificationModel );

        $response["formId"] = $form_id;

        echo json_encode( $response );
        die();

    }
}