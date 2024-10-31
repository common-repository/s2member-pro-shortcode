<?php
/**
 * Plugin Name: s2member Pro Login Shortcode
 * Plugin URI: 
 * Description: Adds shortcode to s2member Pro plugin
 * Version: 1.2.1
 * Author: Colin J. Hahn
 * Author URI:
 * License: GPLv2 or later
 */

/*
Official documentation for s2member Pro Login widget is at:
http://www.s2member.com/codex/stable/s2member/api_functions/package-functions/#src_doc_s2member_pro_login_widget%28%29

N.B. HTML tags do not display properly when editing the post in the Visual Editor
If you need to use HTML tags, edit the post in the Text Editor
*/

if( !function_exists( 'cjh_s2member_pro_login_widget_shortcode') ) {

	function cjh_s2member_pro_login_widget_shortcode( $atts, $content = null ) {

		if( !function_exists( 's2member_pro_login_widget' ) ) {
			return '<b>Error:</b> Login widget not found.';
		}

		$options = shortcode_atts( array(
			'title' => 'Membership Login', // Title when NOT logged in, or leave this blank if you'd prefer not to show a title.
			'signup_url' => '%%automatic%%', // Full Signup URL, or use %%automatic%% for the Membership Options Page. If you leave this blank, it will not be shown.
			'login_redirect' => '', // Empty ( i.e. "" ) = Login Welcome Page, %%previous%% = Previous Page, %%home%% = Home Page, or use a full URL of your own.
			'logged_out_code' => '', // HTML/PHP code to display when logged out. May also contain WP Shortcodes if you like. (CJH - shortcodes not tested)
			'profile_title' => 'My Profile Summary', // Title when a User is logged in. Or you can leave this blank if you'd prefer not to show a title.
			'display_gravatar' => '1', // Display Gravatar image when logged in? 1 = yes, 0 = no. Gravatars are based on email address.
			'link_gravatar' => '1', // Link Gravatar image to Gravatar.com? 1 = yes, 0 = no. Allows Users to setup a Gravatar.
			'display_name' => '1', // Display the current User's WordPress® "Display Name" when logged in? 1 = yes, 0 = no.
			'logged_in_code' => '', // HTML/PHP code to display when logged in. May also contain WP Shortcodes if you like. (CJH - shortcodes not tested)
			'logout_redirect' => '%%home%%', // Empty ( i.e. "" ) = Login Screen, %%previous%% = Previous Page, %%home%% = Home Page, or use a full URL of your own.
			'my_account_url' => '%%automatic%%', // Full URL of your own, or use %%automatic%% for the Login Welcome Page. Leave empty to not show this at all.
			'my_profile_url' => '%%automatic%%' // Full URL of your own, or use %%automatic%% for a JavaScript popup. Leave empty to not show this at all.
		), $atts );
		
		$args = shortcode_atts( array(
			'before_widget' => '', // HTML code to display before the widget.
			'before_title' => '<h3>', // HTML code to display before the title.
			'after_title' => '</h3>', // HTML code to display after the title.
			'after_widget' => '' // HTML code to display after the widget.
		), $atts );

		$login_widget = s2member_pro_login_widget( $options, $args );

		return $login_widget;
	}

	add_shortcode( 's2member_pro_login_widget', 'cjh_s2member_pro_login_widget_shortcode' );

}

?>