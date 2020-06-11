<?php /*
Plugin Name: Chapter 3 - Individual Options
Plugin URI:
Description: Delcares a plugin that will Individual Options
Version: 1.0
Author: coder dog
Author URI: https://trznt.com
License: GPLv2
*/
register_activation_hook ( __FILE__, 'ch3io_set_default_options');

function ch3io_set_default_options() {
  if ( false === get_option('ch3io_ga_account_name')) {
    add_option('ch3io_ga_account_name','UA-0000000-0');
  }
}
?>
