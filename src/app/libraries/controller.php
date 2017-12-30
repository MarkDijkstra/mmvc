<?php

/*
 * Base Controller class
 * Loads the models and views.
 *
*/

class Controller{ 
    
    /*
     * Load modules
     *
    */
    
    public function model( $model ){
        
        require_once '../app/models/' . $model . '.php';        
        
        return new $model();
        
    }
    
    /*
     * Load views
     *
    */
    
    public function view( $view , $data = array() ){
        
        if( file_exists( '../app/views/' . $view. '.php') ){
            
            require_once '../app/views/' . $view . '.php';
            
        }else{
            
            // 404 page
            die( 'View does not exists!' );
            
        }
        
    }
    
}