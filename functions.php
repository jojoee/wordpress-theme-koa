<?php
/**
 * Sage includes
 *
 * The $sage_includes array determines the code library included in your theme.
 * Add or remove files to the array as needed. Supports child theme overrides.
 *
 * Please note that missing files will produce a fatal error.
 *
 * @link https://github.com/roots/sage/pull/1042
 */
$sage_includes = [
  'lib/constants.php',
  'lib/utils.php',
  'lib/wp-utils.php',
  'lib/theme-utils.php',
  'lib/assets.php',
  'lib/extras.php',
  'lib/setup.php',
  'lib/titles.php',
  'lib/wrapper.php',
  'lib/customizer.php',
];

foreach ( $sage_includes as $file ) {
  require_once $filepath;
}
unset( $file, $filepath );

/*================================================================ CUSTOM
*/

function koa_excerpt_length( $length ) {
  return 144;
}

add_filter( 'excerpt_length', 'koa_excerpt_length', 999 );

// https://codex.wordpress.org/Content_Width
// https://wycks.wordpress.com/2013/02/14/why-the-content_width-wordpress-global-kinda-sucks/
if ( ! isset( $content_width ) ) {
  $content_width = 1170;
}

// post navigation
function koa_posts_navigation() {
  ?>
  <div class="posts-navigation-wrap">
    <div class="container">
      <?php
        if ( function_exists( 'wp_pagenavi' ) ) {
          wp_pagenavi();

        } else {
          the_posts_navigation();
        }
      ?>
    </div>
  </div>
  <?php
}
