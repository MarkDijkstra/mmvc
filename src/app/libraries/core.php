<?php

/*
 * App Core class
 * Creates the URL & loads the core controller
 * URL FORMAT - /controller/methode/params
 *
 */

class Core {
    
    /*
     * Set default.
    */
    
    protected $currentController = 'Pages';
    protected $currentMethode    = 'index';
    protected $params            = array();// php 5.3.0
    //protected $params          = [];// > php 5.4.0 
    
    /*
     * Construct function.
    */
    
    public function __construct(){

        $url = $this->getUrl();

        /*
         * Look in controllers for the first value.
         * $url[0] needs to start wit a capital letter.
         * This will set the controller value.
        */
        
        if( file_exists( '../app/controllers/' . ucwords( $url[0] ) . '.php' ) ){
                        
            $this->currentController = ucwords( $url[0] );
            
            unset( $url[0] );
            
        }
        
        /*
         * Require the controller.
         * If $currentController value is not set use default value.
        */
        
        require_once '../app/controllers/' . $this->currentController . '.php';
        
        /*
         * Instantiate controller class.
        */
        
        $this->currentController = new $this->currentController;

        
    }
    
    /*
     * Get URL function, which will get the 
     * params from the url
    */
    
    public function getUrl(){
        
        if( isset( $_GET['url'] ) ){
           
            $url = rtrim( $_GET['url'] , '/' );
            
            $url = filter_var( $url , FILTER_SANITIZE_URL );
            
            $url = explode( '/' , $url);
            
            return $url;
            
        }
 
    }
    
}