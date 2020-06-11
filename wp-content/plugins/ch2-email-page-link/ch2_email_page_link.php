<?php /*
Plugin Name: Chapter 2 - Email link
Plugin URI:
Description: Delcares a plugin that will email link
Version: 1.0
Author: coder dog
Author URI: https://trznt.com
License: GPLv2
*/
add_filter( 'the_content', 'ch2_email_page_link');

function ch2_email_page_link($the_content){

  $mail_icon_url = plugins_url('mail_icon.png',__FILE__);
  $new_content = $the_content;

  $new_content .= '<div class="email_link">';
  $new_content .= '<a href="mailto:someone@somewhere.com?';
  $new_content .= 'subject=Check out this interesting article';
  $new_content .= ' entitled '.get_the_title();
  $new_content .= '&body=Hi!%0A%0AI thought you would enjoy ';
  $new_content .= 'this article entitled ';
  $new_content .= get_the_title() . '.%0A%0A' . get_permalink();
  $new_content .= '%0A%0AEnjoy!">';

  if( !empty($mail_icon_url)) {
    $new_content .= '<img alt="Email Icon" ';
    $new_content .= ' src ="';
    $new_content .= $mail_icon_url. '" /></a>';
  } else {
    $new_content .= 'Email a link to this article';
  }
  $new_content .= '</div>';

  return $new_content;
}
?>
