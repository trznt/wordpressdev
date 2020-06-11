<?php
// Check if the uninstall constant from wordpress is set.
if (!defined(WP_UNINSTALL_PLUGIN)) {
  exit;
}

if (false != get_option('ch2pho_options')) {
  delete_option('ch2pho_options');
}

?>
