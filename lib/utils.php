<?php

/*================================================================ Domain
*/

function koa_get_site_domain() {
  $sitename = get_site_url();
  $pattern = '/^(\/\/|http:\/\/|https:\/\/)/';
  $replace = '';

  $result = preg_replace( $pattern, $replace, $sitename );

  return $result;
}

function koa_the_site_domain() {
  echo koa_get_site_domain();
}

/*================================================================ String
*/

/**
 * Check variable is null or empty string or not
 *
 * @see http://stackoverflow.com/questions/381265/better-way-to-check-variable-for-null-or-empty-string
 * 
 * @param string|null $str
 * @return boolean
 */
function koa_is_null_or_empty_string( $str ) {
  return ( ! isset( $str ) || trim( $str ) === '' );
}

/*================================================================ Image
*/

function koa_get_background_image_style( $url = '' ) {
  $result = ( ! koa_is_null_or_empty_string( $url ) )
    ? 'style="background-image: url(\'' . $url . '\');"'
    : '';

  return $result;
}

function koa_the_background_image_style( $url = '' ) {
  echo koa_get_background_image_style( $url );
}

function koa_get_default_banner_url() {
  return KOA_DEFAULT_BANNER_PATH;
}
