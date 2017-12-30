<?php

/*
 * Pages controller class.
*/

class Pages extends Controller{
    
    public function index(){
        
        $data = array( 
            'title' => 'Welcome to the homepage' 
        );
    
        $this->view( 'pages/index' , $data );
    
    }
    
}