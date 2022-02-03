<?php

function crudAdminPage() {
  global $wpdb;
  $table_settings = $wpdb->prefix . 'spandiv';
  if (isset($_POST['newsubmit_settings'])) {
    $s_address = $_POST['newaddress'];
    $s_telephone = $_POST['newtelephone'];
    $s_message = $_POST['newmessage'];
    $s_email = $_POST['newemail'];
    $s_facebook = $_POST['facebook'];
    $s_twitter = $_POST['twitter'];
    $s_instagram = $_POST['instagram'];
    $s_youtube = $_POST['youtube'];
    $s_about = $_POST['about'];
    $s_maps = $_POST['maps'];
    $wpdb->query("INSERT INTO $table_settings(address,telephone,message,email,facebook,twitter,instagram,youtube,about,maps) VALUES('$s_address','$s_telephone','$s_message','$s_email','$s_facebook','$s_twitter','$s_instagram','$s_youtube','$s_about','$s_maps')");
    echo "<script>location.replace('admin.php?page=spandiv%2Fcrud.php');</script>";
  }
  if (isset($_POST['uptsubmit_settings'])) {
    $s_address = $_POST['uptaddress'];
    $s_telephone = $_POST['upttelephone'];
    $s_message = $_POST['uptmessage'];
    $s_email = $_POST['uptemail'];
    $s_facebook = $_POST['uptfacebook'];
    $s_twitter = $_POST['upttwitter'];
    $s_instagram = $_POST['uptinstagram'];
    $s_youtube = $_POST['uptyoutube'];
    $s_about = $_POST['uptabout'];
    $s_maps = $_POST['uptmaps'];
    $wpdb->query("UPDATE $table_settings SET address='$s_address',telephone='$s_telephone',message='$s_message',email='$s_email',facebook='$s_facebook',twitter='$s_twitter',instagram='$s_instagram',youtube='$s_youtube',about='$s_about',maps='$s_maps' ");
    echo "<script>location.replace('admin.php?page=spandiv%2Fcrud.php');</script>";
  }

  include(WP_PLUGIN_DIR .'/spandiv/partials/app.php');
  
}

?>