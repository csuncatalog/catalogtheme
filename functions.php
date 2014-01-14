<?php

/*
Author: CSUN Catalog
Catalog functions
*/

//Begin Catalog Functions

//1. Login: Custom login Screen
	function new_custom_login_logo() {
	    echo '<style type="text/css">
	        h1 a { background-image:url(http://csuncatalog.com/wp-content/uploads/2013/09/logo3.png) !important; height:85px !important; background-size: auto auto !important;} 
			body.login {background-image: url(http://csuncatalog.com/wp-content/uploads/2013/09/bg.png) !important; background-size: 100%; background-repeat:no-repeat;}
			#nav, #backtoblog {display:none}	
			#loginform {opacity:0.90;}
			#loginform label {font-weight:bold;color:black}
			body.login div#login form#loginform input:focus#user_login {border-color:#990000}
			body.login div#login form#loginform input:focus#user_pass {border-color:#990000}
			</style>';
	}
	add_action('login_head', 'new_custom_login_logo');

