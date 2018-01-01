<?php 

require INCLUDESROOT . '/header.php' ;

echo '<h1>' . $data[ 'title' ]. '</h1>';



foreach( $data[ 'posts' ] as $post ){
    
    echo $post->title . '<br/>';
        
}


require INCLUDESROOT . '/footer.php' ;