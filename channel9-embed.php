<?php
/*
Plugin Name: Channel 9 Embed
Plugin URI: https://github.com/blobaugh/WordPress-channel9-embed
Description: Adds the ability to embed videos from http://channel9.msdn.com to the Embed services
Author: Ben Lobaugh
Version: 0.6
Author URI: http://ben.lobaugh.net
*/

wp_embed_register_handler( 'forbes', '#http://channel9\.msdn\.com/(.*)#i', 'channel9_embed_handler' );

function channel9_embed_handler( $matches, $attr, $url, $rawattr ) {
//die( var_dump( $matches ) );
//	$embed = sprintf(
//			'<iframe src="http://channel9.msdn.com/%1$splayer?w=512&h=288" width="512px" height="288px" frameborder="0" scrolling="no" marginwidth="0" marginheight="0"></iframe>',
//			esc_attr($matches[1])
//			);

        $embed = '<iframe src="' . $matches[0] . '/player?w=512&h=288" width="512px" height="288px" frameborder="0" scrolling="no" marginwidth="0" marginheight="0"></iframe>';
			
	return apply_filters( 'embed_channel9', $embed, $matches, $attr, $url, $rawattr );
}