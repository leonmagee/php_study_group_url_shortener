<?php 

include 'func.inc.php';

if ( isset( $_GET['redirect'] ) && ! empty( $_GET['redirect'] ) ) {
	
	$redirect = $_GET['redirect'];
	
	redirect( $redirect );
	
	die();
}

?>

<!DOCTYPE html>

<html lang="en">
    
<head>
    
	<meta charset="utf-8">
        
	<title>Simple. Short. Min.bz</title>
        
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
        
	<meta name="description" content="Min.bz is a free to use URL shortening service.">
        
	<meta name="keywords" content="min.bz, url short, url shortener">
        
	<meta name="author" content="phpacademy.org">
        
	<link href="style.css" rel="stylesheet">
        
	<script src="http://code.jquery.com/jquery.min.js"></script>
        
	<script src="shortener_javascript.js"></script>
        
</head>

<body>
	<div class="container">
            
            <?php
            
            // echo phpinfo();
            
            // version 5.3.1
             
            ?>
            
		<div class="logo">It's simple. It's short. It's min.bz.</div>
                
			<br>
                        
		<p>Go ahead, enter a long URL and have it shortened.</p>
                
			<br>
		<p>
			<input type="text" name="url" id="url_id" class="textfield" onkeydown="if(event.keyCode == 13 || event.which == 				13){ go($('#url_id').val()); }">
                        
			<input type="button" value="Shorten" class="button" onclick="go($('#url_id').val());">
		</p>
			<br>
                        
		<div id="message"><p>&nbsp;</p></div>
                
			<br>
                        
		<div class="footer">
     
			<p>Brought to you by <a href="http://phpacademy.org/">phpacademy.org</a>.</p>
                        
		</div>
	</div>
    
</body>

</html>