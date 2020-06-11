<?php /*
Plugin Name: Chapter 2 - Filter Callback
Plugin URI:
Description: Delcares a plugin that will deliver a Filter Callback
Version: 1.0
Author: coder dog
Author URI: https://trznt.com
License: GPLv2
*/
add_filter('the_generator','ch2gf_generator_filter',10,2);

function ch2gf_generator_filter($html,$type){
  if ($type == 'xhtml'){
    $html = preg_replace('("WordPress.*?")','"Coder Dog"',$html);
  }
  return $html;
}

?>
