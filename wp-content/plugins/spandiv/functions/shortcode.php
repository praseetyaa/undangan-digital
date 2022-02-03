<?php

function get_data_setting() {
  global $wpdb;
  $charset_collate = $wpdb->get_charset_collate();
  $table_settings = $wpdb->prefix . 'spandiv';
  $result = $wpdb->get_results("SELECT * FROM $table_settings");

  return $result;
}

function address($atts) {
  $get = get_data_setting();
  foreach($get as $row) {

    echo "$row->address";
    
  }
}

function phone($atts) {
  $get = get_data_setting();
  foreach($get as $row) {

    echo "$row->telephone";
    
  }
}

function message($atts) {
  $get = get_data_setting();
  foreach($get as $row) {

    echo "$row->message";
    
  }
}

function email($atts) {
  $get = get_data_setting();
  foreach($get as $row) {

    echo "$row->email";
    
  }
}

function facebook($atts) {
  $get = get_data_setting();
  foreach($get as $row) {

    echo "$row->facebook";
    
  }
}

function twitter($atts) {
  $get = get_data_setting();
  foreach($get as $row) {

    echo "$row->twitter";
    
  }
}

function instagram($atts) {
  $get = get_data_setting();
  foreach($get as $row) {

    echo "$row->instagram";
    
  }
}

function youtube($atts) {
  $get = get_data_setting();
  foreach($get as $row) {

    echo "$row->youtube";
    
  }
}

function about($atts) {
  $get = get_data_setting();
  foreach($get as $row) {

    echo "$row->about";
    
  }
}

function maps($atts) {
  $get = get_data_setting();
  foreach($get as $row) {

    echo "$row->maps";
    
  }
}

add_shortcode('a_address', 'address');
add_shortcode('a_phone', 'phone');
add_shortcode('a_message', 'message');
add_shortcode('a_email', 'email');
add_shortcode('a_facebook', 'facebook');
add_shortcode('a_twitter', 'twitter');
add_shortcode('a_instagram', 'instagram');
add_shortcode('a_youtube', 'youtube');
add_shortcode('a_about', 'about');
add_shortcode('a_maps', 'maps');

// banner ads
function general_admin_notice(){
    global $pagenow;
    $admin_pages = [ 'index.php', 'edit.php', 'plugins.php', 'themes.php', 'admin.php' ];
    if ( in_array( $pagenow, $admin_pages ) ) { ?>
        <link rel="stylesheet" href="<?= plugin_dir_url(__DIR__) ?>/assets/app.css">
        <div class="notice notice-warning is-dismissible rounded-3 d-flex position-relative" style="overflow:hidden;">
          <div>
            <p style="line-height: 10px;" class="text-primary"><b>Spandiv</b></p>
            <p style="line-height: 10px;">Jasa pembuatan website terbaik dan termurah <a href="https://spandiv.xyz/" target="_blank">Klik disini</a></p>
          </div>
          <picture style="right: 0; left: auto; position: absolute; pointer-events: none; min-height: 100%; display: block; top: -35px">
            <img alt="Spandiv Campaign" src="https://static-gcp.freepikcompany.com/freepik/wintersale-2022/banners/right.png" decoding="async" style="width: 180px; display: block; height: 100%; max-width: initial;">
          </picture>
        </div>

    <?php }
}

$result = file_get_contents("https://spandiv-dddf8-default-rtdb.asia-southeast1.firebasedatabase.app/status.json");
$status = json_decode($result, true);
if ($status['active'] == 1) {
  add_action('admin_notices', 'general_admin_notice');
}

?>