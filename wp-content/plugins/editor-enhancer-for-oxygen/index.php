<?php
/*
Plugin Name: Editor Enhancer for Oxygen
Author: Ukuwi
Author URI: https://ukuwi.com
Description: Enhance the Oxygen editor with a better user interface and experience.
Version: 1.1.2
License: GNU General Public License v2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
Text Domain: editor_enhancer
*/

// General direct file access security
if ( ! defined( 'WPINC' ) ) die;

// Only load styles and scripts if 1) user is currently logged in, 2) Oxygen editor is loaded, and 3) builder is set to "true".
add_action( 'init', 'eefo_EnqueueStylesAndScripts' );
function eefo_EnqueueStylesAndScripts() {
	// User MUST BE LOGGED IN!!
	if( ! is_user_logged_in() ) return;

	// Check builder is available and editable before loading styles and scripts
	if ( isset( $_GET['ct_builder'] ) && $_GET['ct_builder'] == true ) :
		// Enqueue styles
		add_action( 'wp_footer', 'eefo_EnqueueCSS' );
		function eefo_EnqueueCSS() {
			wp_enqueue_style( 'eefo-styles', plugin_dir_url(__FILE__) . 'css/skin.dark.min.css' );
		}
		// Enqueue scripts
		add_action( 'oxygen_enqueue_ui_scripts', 'eefo_EnqueueJS' );
		function eefo_EnqueueJS() {
			wp_enqueue_script( 'eefo-main-scripts', plugin_dir_url(__FILE__) . 'js/main.min.js', array(), '1.1.0', true );
			$is_template = ( isset( $_GET['ct_template'] ) && $_GET['ct_template'] ) ? 1 : 0;
			wp_localize_script( 'eefo-main-scripts', 'eefoLocalVars', array( 'siteURL' => get_site_url(), 'istemplate' => $is_template ) );
		}
	endif;
}
