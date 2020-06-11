<?php /*
Plugin Name: Chapter 2 - Nav-Menu-Filter
Plugin URI:
Description: Delcares a plugin that will deliver a Nav Menu Filter
Version: 1.0
Author: coder dog
Author URI: https://trznt.com
License: GPLv2
*/
add_filter('wp_nav_menu_objects','ch2nmf_new_nav_menu_items',10,2);

function ch2nmf_new_nav_menu_items($sorted_menu_items,$args){
  //print_r($sorted_menu_items);
 if (is_user_logged_in() == FALSE) {
    foreach($sorted_menu_items as $key => $sorted_menu_item) {
      if ('Private Area' == $sorted_menu_item->title){
        unset($sorted_menu_items[$key]);
      }
    }
  }
  return $sorted_menu_items;
}

?>
