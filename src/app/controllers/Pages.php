<?php

/*
 * Pages controller class.
*/

class Pages extends Controller{    
    
    public function __construct(){
        
        $this->postModel = $this->model( 'Post' );
        
    }
    
    public function index(){
        
        $posts = $this->postModel->getPosts();
        
        $data = array( 
            'title' => 'Welcome to the homepage',
            'posts' => $posts
        );
   
        $this->view( 'pages/index' , $data );
    
    }
    
}