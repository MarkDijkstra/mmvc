<?php

/*
 * Pages controller class.
*/

class Pages extends Controller{    
    
    public function __construct(){
                
    }
    
    public function index(){

        $data = array( 
            'title' => 'Welcome to the homepage'
        );
   
        $this->view( 'pages/index' , $data );
    
    }
    
}