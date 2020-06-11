<?php /*
Plugin Name: Chapter 3 - Multi Level Admin Menu
Plugin URI:
Description: Delcares a plugin that will create a Multi Level Admin Menu
Version: 1.0
Author: coder dog
Author URI: https://trznt.com
License: GPLv2
*/

add_action('admin_menu','ch3mlm_admin_menu');

function ch3mlm_admin_menu() {
  add_menu_page('My Complex Plugin Configuration Page',
                'My Complex Plugin','manage_options',
                'ch3mlm-main-menu','ch3mlm_my_complex_main',
                plugins_url('20x20.png',__FILE__));

  add_submenu_page('ch3mlm-main-menu',
                   'My Complex menu Sub-Config Page',
                   'Sub-Config Page',
                   'manage_options','ch3mlm-sub-menu',
                   'ch3mlm_my_complex_sub_menu');
}

?>
