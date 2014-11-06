<?php
/**
Plugin Name: WStools.nl Chat
Plugin URI: https://wstools.nl/
Description: Chat module van WStools.nl
Version: 1.1
Author: WStools.nl
Author URI: https://wstools.nl/
*/
	if(session_id() == "") {
		session_start();
	}
	function WStools_chat() {
    echo '<script src="https://apps.wstools.nl/chat/WSchat.js"></script>';
	}
	add_action('wp_head', 'WStools_chat');
?>