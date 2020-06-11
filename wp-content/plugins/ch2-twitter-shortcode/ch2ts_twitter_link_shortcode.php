<?php /*
Plugin Name: Chapter 2 - Twitter Shortcode
Plugin URI:
Description: Delcares a plugin that will help to create Twitter Shortcode
Version: 1.0
Author: coder dog
Author URI: https://trznt.com
License: GPLv2
*/

add_shortcode('t1','ch2ts_twitter_link_shortcode');

function ch2ts_twitter_link_shortcode() {
  $output = '<a href="https://twitter.com/trznt"> Twitter Feed</a>';
  return $output;
}

?>
