<?php
/*
  Plugin Name: MarcTV Bigger Fullscreen Font
  Plugin URI: http://www.marctv.de/blog/marctv-wordpress-plugins/
  Description: Increases the font size in fullscreen mode of the tinymce editor.
  Version: 1.1.6
  Author: Marc Tönsing
  Author URI: http://www.marctv.de
  License: GPL2
 */

function marctv_admin_head() {
  wp_enqueue_style( 'marctv-100e2w-style', WP_PLUGIN_URL . "/" . dirname( plugin_basename( __FILE__ ) ) . "/marctv-100e2w-style.css" );
  add_editor_style( WP_PLUGIN_URL . "/" . dirname( plugin_basename( __FILE__ ) ) . "/marctv-100e2w-style.css" );
}

add_action('admin_head', 'marctv_admin_head');
?>