<?php /*
Plugin Name: Chapter 2 - Favicon
Plugin URI:
Description: Delcares a plugin that will deliver a Favicon
Version: 1.0
Author: coder dog
Author URI: https://trznt.com
License: GPLv2
*/
add_action('wp_head','ch2fi_page_header_output',2);

function ch2fi_page_header_output() {

  $site_icon_url = get_site_icon_url();
  if( !empty( $site_icon_url)){
    wp_site_icon();
  } else {
    $icon_url = plugins_url('favicon.ico', __FILE__);
    ?>
    <link rel="shortcut icon" href="<? echo $icon_url; ?>?v=2" />
    <?php }
  }

?>
