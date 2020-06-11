<?php /*
Plugin Name: Chapter 2 - Page Header Output
Plugin URI:
Description: Delcares a plugin that will deliver output
Version: 1.0
Author: coder dog
Author URI: https://trznt.com
License: GPLv2
*/
register_activation_hook(__FILE__,'ch2pho_set_default_options_array');
add_action('wp_head','ch2_page_header_output');
add_action('wp_footer','ch2_footer_analytics_code');
add_action('admin_menu','ch2pho_settings_menu',1);

function ch2pho_set_default_options_array() {
    ch2pho_get_options();
}

function ch2pho_settings_menu() {
  add_options_page('My google Analytics Configuration','My Google Analytics',
                    'manage_options',
                    'ch2pho-my-google-analytics',
                    'ch2pho_config_page');
}

function ch2pho_get_options() {
  $options = get_option('ch2pho_options',array());
  $new_options['ga_account_name'] = 'UA-0000000-0';
  $new_options['track_outgoing_links'] = false;

  $merged_options = wp_parse_args($options,$new_options);

  $compare_options = array_diff_key($new_options,$options);
  if (empty($options) || !empty($compare_options)) {
    update_option('ch2pho_options',$merged_options);
  }
}

function ch2_page_header_output() { ?>
  <script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;
    i[r]=i[r]||function(){
    (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();
    a=s.createElement(o),
    m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;
    m.parentNode.insertBefore(a,m)})(window,document,'script',
    'https://www.google-analytics.com/analytics.js','ga');


    ga( 'create', 'UA-0000000-0', 'auto' );
    ga( 'send', 'pageview' );
    </script>
<?php }

  add_filter('the_content','ch2_link_filter_analytics');

  function ch2_link_filter_analytics($the_content){
    $new_content = str_replace('href','onClick="recordOutboundLink(this);return false;" href',$the_content);
    return $new_content;
  }

  function ch2_footer_analytics_code() { ?>
    <script type="text/javascript">
      function recordOutboundLink(link) {
        ga('send','event','Outbound Links','Click','transport': 'beacon','hitCallback': function() {
          document.location = link.href;
        });
        }
    </script>
  <?php }
?>
