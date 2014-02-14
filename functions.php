<?php
/*
Author: CSUN CatalogCatalog functions
*/
function get_csun_archive($post_type, $dept_name){	$base = get_bloginfo('url')	if($post_type === 'departments'){		$post_type = 'overview';	}	$url = $base . 'academics/'.$dept_name.'/'.$post_type;	return $url;}
?>