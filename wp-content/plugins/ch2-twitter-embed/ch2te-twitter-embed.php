<?php /*
Plugin Name: Chapter 2 - Twitter Embed
Plugin URI:
Description: Delcares a plugin that will embed twitter
Version: 1.0
Author: coder dog
Author URI: https://trznt.com
License: GPLv2
*/
add_shortcode('twitterfeed','ch2ts_twitter_embed_shortcode');

function ch2ts_twitter_embed_shortcode($atts) {
  //extract (shortcode_atts(array('user_name'=>'trznt','whatever'=>'not_needed'),$atts));
  //extract (array($atts));
  $output = $atts;
  if (!empty($user_name)) {
    $output .= '<a class="twitter-timeline" href="';
    $output .= esc_url('https://twitter.com/'.$user_name);
    $output .= '">Tweets by '.esc_html($user_name);
    $output .= '</a><script async ';
    $output .= 'src="//platform.twitter.com/widgets.js"';
    $output .= ' charset="utf-8"></script>';
  } else {
    $output = '';
  }
  return $output;
}
?>
