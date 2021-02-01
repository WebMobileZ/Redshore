<?php

class SmuzForm_Ext_Loader {

    private static $instance;

    protected function __construct() {}

    public static function getInstance() {
       
        if ( null === self::$instance )
            self::$instance = new self();
        
        return self::$instance;
    }

    public function load() {

        require_once( 'templates/loader.php' );

        SmuzForm_Ext_Templates_Loader::getInstance()->load();
       
    }
}