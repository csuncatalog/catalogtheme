<?php
/*
Author: CSUN CatalogCatalog functions
*/
//Begin Catalog Functions
//1. Admin: Custom admin footer
	function remove_footer_admin () {
  		echo 'Powered by the Office of Undergraduate Studies.';
	}
	add_filter('admin_footer_text', 'remove_footer_admin');
//2. Login: Custom login Screen
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
	}	add_action('login_head', 'new_custom_login_logo');
//3. Login redirect to dashpage
	function csun_login($redirect_to)
	{
		return admin_url('index.php');
	}
	add_filter( 'login_redirect', 'csun_login');

//4. Admin Style Sheet
	//remove wordpress-blogging tools in admin header
		//moved to admin plugin
?>