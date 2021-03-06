<?php
function is_mobile(){
    $useragents = array(
 'iPhone',          // iPhone
 'iPod',            // iPod touch
 'Android',         // 1.5+ Android
 'dream',           // Pre 1.5 Android
 'CUPCAKE',         // 1.5+ Android
 'blackberry9500',  // Storm
 'blackberry9530',  // Storm
 'blackberry9520',  // Storm v2
 'blackberry9550',  // Storm v2
 'blackberry9800',  // Torch
 'webOS',           // Palm Pre Experimental
 'incognito',       // Other iPhone browser
 'webmate'          // Other iPhone browser
 );
 $pattern = '/'.implode('|', $useragents).'/i';
 return preg_match($pattern, $_SERVER['HTTP_USER_AGENT']);
}
function add_meta_query_vars( $public_query_vars ) {
	$public_query_vars[] = 'meta_key';
	$public_query_vars[] = 'meta_value';
	return $public_query_vars;
}
add_filter( 'query_vars', 'add_meta_query_vars' );
add_theme_support( 'post-thumbnails', array( 'post' ) );
