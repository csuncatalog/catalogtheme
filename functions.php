<?php

/*
Author: CSUN Catalog
Catalog functions
*/

/* * * * * * * * * * * * * * * * * * *
 * Archive Retrival Link
 * Use this function to get the link to the department page,
 * and the lists of programs, courses, and faculty
 *
 *	@param string $post_type post type of page trying to access
 *	@param string $dept_name slug of department name
 * * * * * * * * * * * * * * * * * * */
function get_csun_archive($post_type, $dept_name){	$base = get_bloginfo('url')
	//renamed departments to overview as standard link	if($post_type === 'departments'){			$post_type = 'overview';	}
	//link format based on CSUN Types	$url = $base . 'academics/'.$dept_name.'/'.$post_type;	return $url;}
?>

