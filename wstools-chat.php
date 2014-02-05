<?php
/**
Plugin Name: WStools.nl Chat
Plugin URI: http://wstools.nl/
Description: Chat module van WStools.nl
Version: 1.0
Author: WStools.nl
Author URI: http://wstools.nl/
*/
	if(session_id() == "") {
		session_start();
	}
	function WStools_chat() {
    echo '<script src="http://apps.wstools.nl/chat/WSchat.js"></script>';
	}
	add_action('wp_head', 'WStools_chat');
?>