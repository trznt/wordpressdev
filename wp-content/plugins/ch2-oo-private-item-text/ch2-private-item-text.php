<?php /*
Plugin Name: Chapter 2 - Private Item
Plugin URI:
Description: Delcares a plugin that will create private Item Tag
Version: 1.0
Author: coder dog
Author URI: https://trznt.com
License: GPLv2
*/
add_shortcode('private','ch2pit_private_shortcode');

function ch2pit_private_shortcode( $atts, $content = null) {
  if (is_user_logged_in()) {
    return '<div class="private">'. $content . '</div>';
  } else {
    $output = '<div class="register">' . 'You need to become a member to access this content' .'</div>';
  }
  return $output;
}

add_action('wp_enqueue_scripts', 'ch2pit_queue_stylesheet');

function ch2pit_queue_stylesheet() {
  wp_enqueue_style('privateshortcodestyle',plugins_url('stylesheet.css',__FILE__));
}
?>
