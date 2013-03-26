<?php

// *** Warning: mysql_result is deprecated ***

/*
 *  *** Warning: Deprecated Functions ***
 * 
 *      mysql_real_escape_string
 * 
 *      mysql_query
 * 
 *      mysql_result
 * 
 *      add_slashes vs. strip_slashes
 */

include 'db.inc.php';


function is_min( $var ) {
       
   return( preg_match( "/phptest\.dev/i", $var ) ) ? true : false; 

}

function gen_code() {
    
    $charset = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789';
    
    return substr( str_shuffle( $charset ), 0, 6 );
}

function code_exists( $code ) {
    
    $code = mysql_real_escape_string( $code );
    
    $code_exists = mysql_query( "SELECT COUNT(`url_id`) FROM `urls` WHERE `code` = '$code' LIMIT 1" );
    
    return ( mysql_result( $code_exists, 0 ) == 1 ) ? true : false;
}

function shorten( $url, $code ) {
	
	$url = mysql_real_escape_string( $url );
	
	$code = mysql_real_escape_string( $code );
	
	mysql_query( "INSERT INTO `php_test_db`.`urls` VALUES ('', '$url', '$code' )" );
	
	return $code;
}

function redirect( $code ) {
	
	$code = mysql_real_escape_string( $code );
	
	if ( code_exists( $code ) ) {
		
		$url_query = mysql_query( "SELECT `url` FROM `php_test_db`.`urls` WHERE `code`='$code'" );
		
		$url = mysql_result( $url_query, 0, 'url' );
		
		header( 'Location: ' . $url );
	}
	
	
}







?>