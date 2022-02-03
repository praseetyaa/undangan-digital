<?php
/*
Plugin Name: Spandiv
Plugin URI: https://spandiv.xyz/
Description: Custom Wordpress Features.
Version: 1.0.0
Author: Spandiv
Author URI: https://spandiv.xyz/
License: GPL2
*/
register_activation_hook( __FILE__, 'crudOperationsTable');
function crudOperationsTable() {
  global $wpdb;
  $charset_collate = $wpdb->get_charset_collate();
  $table_settings = $wpdb->prefix . 'spandiv';

  $sql_1 = "CREATE TABLE `$table_settings` (
  `settings_id` int(11) NOT NULL AUTO_INCREMENT,
  `address` varchar(220) DEFAULT NULL,
  `telephone` varchar(220) DEFAULT NULL,
  `message` varchar(220) DEFAULT NULL,
  `email` varchar(220) DEFAULT NULL,
  `facebook` varchar(220) DEFAULT NULL,
  `twitter` varchar(220) DEFAULT NULL,
  `instagram` varchar(220) DEFAULT NULL,
  `youtube` varchar(220) DEFAULT NULL,
  `about` varchar(320) DEFAULT NULL,
  `maps` varchar(220) DEFAULT NULL,
  PRIMARY KEY(settings_id)
  ) ENGINE=MyISAM DEFAULT CHARSET=latin1;
  ";
  if ($wpdb->get_var("SHOW TABLES LIKE '$table_settings'") != $table_settings) {
    require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
    dbDelta($sql_1);
  }
}

add_action('admin_menu', 'addAdminPageContent');

function addAdminPageContent() {
  add_menu_page('Spandiv', 'Spandiv', 'manage_options' ,__FILE__, 'crudAdminPage', plugins_url( 'spandiv/assets/icon.png' ) );
}

include('partials/plugin-header.php');

include('functions/crud.php');

include('functions/shortcode.php');

?>