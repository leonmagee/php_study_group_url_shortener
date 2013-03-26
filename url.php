<?php

//echo "I should be using AJAX on STM!";

include 'func.inc.php';

if ( isset( $_POST['url_post'] ) ) {
    
    $url = trim( $_POST['url_post'] );
    
    
    if ( empty( $url ) ) {
        
        echo "error_no_url";
    }
    
    elseif ( filter_var( $url, FILTER_VALIDATE_URL ) === false ) {
        
        echo "error_invalid_url";
    }
    
    elseif ( is_min( $url ) ) {
        
        echo "error_is_min";
    }
    
    else {
        
        // find a different way to write this? 
        
/*
        $code = gen_code();
        
        while ( code_exists( $code) ) {
            
            $code = gen_code();
         
        }
*/
        
        while ( ! code_exists( $code = gen_code() ) ) {
            
            echo 'http://phptest.dev/' . shorten( $url, $code );
            
            //echo 'http://min.bz/' . $code;
            
            break 1;
        }
   
    }  
}

?>