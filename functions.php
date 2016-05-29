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
  'lib/debug.php',
  'lib/utils.php',
  'lib/wp-utils.php',
  'lib/theme-utils.php',
  'lib/assets.php',    // Scripts and stylesheets
  'lib/extras.php',    // Custom functions
  'lib/setup.php',     // Theme setup
  'lib/titles.php',    // Page titles
  'lib/wrapper.php',   // Theme wrapper class
  'lib/customizer.php' // Theme customizer
];

foreach ( $sage_includes as $file ) {
  if ( ! $filepath = locate_template( $file ) ) {
    trigger_error( sprintf( __( 'Error locating %s for inclusion', 'koa' ), $file ), E_USER_ERROR );
  }

  require_once $filepath;
}
unset( $file, $filepath );

/*================================================================ CUSTOM
*/

/**
 * [koa_excerpt_length description]
 *
 * @see https://codex.wordpress.org/Plugin_API/Filter_Reference/excerpt_length
 * 
 * @param  [type] $length [description]
 * @return [type]         [description]
 */
function koa_excerpt_length( $length ) {
  return 144;
}

add_filter( 'excerpt_length', 'koa_excerpt_length', 999 );
