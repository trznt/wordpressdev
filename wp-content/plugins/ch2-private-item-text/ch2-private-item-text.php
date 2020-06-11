<?php /*
Plugin Name: Chapter 2 - Private Item OO
Plugin URI:
Description: Delcares a plugin that will create private Item Tag OO
Version: 1.0
Author: coder dog
Author URI: https://trznt.com
License: GPLv2
*/

class CH2_OO_Private_item_text {
  function __construct() {
    add_shortcode('private',array($this,'ch2pit_private_shortcode'));
    add_action('wp_enqueue_scripts', array($this,'ch2pit_queue_stylesheet'));
  }

  function ch2pit_private_shortcode( $atts, $content = null) {
    if (is_user_logged_in()) {
      return '<div class="private">'. $content . '</div>';
    } else {
      $output = '<div class="register">' . 'You need to become a member to access this content' .'</div>';
    }
    return $output;
  }



  function ch2pit_queue_stylesheet() {
    wp_enqueue_style('privateshortcodestyle',plugins_url('stylesheet.css',__FILE__));
  }
}

$my_ch2_oo_private_item_text = new CH2_OO_Private_item_text();



?>
