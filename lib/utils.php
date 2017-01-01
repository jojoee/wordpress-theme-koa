<?php

/*================================================================ Domain
*/

function get_site_domain() {
  $result = '';
  $sitename = get_site_url();
  $pattern = '/^(\/\/|http:\/\/|https:\/\/)/';
  $replace = '';

  $result = preg_replace( $pattern, $replace, $sitename );

  return $result;
}

function the_site_domain() {
  echo get_site_domain();
}

/*================================================================ String
*/

function get_limited_string( $str, $length ) {
  $str_length = strlen( $str );

  if ( $str_length > $length ) {
    $str = substr( $str, 0, $length );
    $str = substr( $str, 0, -3 ) . '...';
  }

  return $str;
}

/**
 * [is_null_or_empty_string description]
 *
 * @see http://stackoverflow.com/questions/381265/better-way-to-check-variable-for-null-or-empty-string
 * 
 * @param  [type]  $str [description]
 * @return boolean      [description]
 */
function is_null_or_empty_string( $str ) {
  return ( ! isset( $str ) || trim( $str ) === '' );
}

/*================================================================ Image
*/

function get_background_image_style( $url = '' ) {
  $result = ( ! is_null_or_empty_string( $url ) )
    ? 'style="background-image: url(\'' . $url . '\');"'
    : '';

  return $result;
}

function the_background_image_style( $url = '' ) {
  echo get_background_image_style( $url );
}

function koa_get_default_banner_url() {
  return KOA_DEFAULT_BANNER_PATH;
}
