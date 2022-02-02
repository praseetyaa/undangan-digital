<?php
/**
 * Functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage Spandiv
 * @since Spandiv 1.0
 */

if (!function_exists('spandiv_setup')) {
  /**
   * Sets up theme defaults and registers support for various WordPress features.
   *
   * Note that this function is hooked into the after_setup_theme hook, which
   * runs before the init hook. The init hook is too late for some features, such
   * as indicating support for post thumbnails.
   *
   * @since spandiv 1.0
   *
   * @return void
   */
  function spandiv_setup() {
        // Add theme support for some HTML5
        add_theme_support('html5', [
            'comment-form', 'comment-list'
        ]);

        // Add theme support for post thumbnails
        add_theme_support('post-thumbnails');
    }
}

add_action('after_setup_theme', 'spandiv_setup');

function comment_support_for_my_custom_post_type() {
     add_post_type_support( 'my_post_type', 'comments' );
}
add_action( 'init', 'comment_support_for_my_custom_post_type' );
function my_wpdiscuz_shortcode() {
    $html = "";
    if (file_exists(ABSPATH . "wp-content/plugins/wpdiscuz/themes/default/comment-form.php")) {
        ob_start();
        include_once ABSPATH . "wp-content/plugins/wpdiscuz/themes/default/comment-form.php";
        $html = ob_get_clean();
    }
    return $html;
}
add_shortcode("wpdiscuz_comments", "my_wpdiscuz_shortcode");