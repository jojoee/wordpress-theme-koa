<?php

/* 
namespace Roots\Sage\Customizer;

use Roots\Sage\Assets;

function customize_register( $wp_customize ) {
  $wp_customize->get_setting( 'blogname' )->transport = 'postMessage';
}

add_action( 'customize_register', __NAMESPACE__ . '\\customize_register' );

function customize_preview_js() {
  wp_enqueue_script(
    'sage/customizer',
    Assets\asset_path( 'scripts/customizer.js' ),
    [ 'customize-preview' ],
    null,
    true
  );
}

add_action( 'customize_preview_init', __NAMESPACE__ . '\\customize_preview_js' );
*/

/*================================================================ Kirki
*/

$koa_text_domain = 'atcr';
$koa_kirki_key   = 'koa_kirki';

if ( class_exists( 'Kirki' ) ) {

  // configuration
  KOA_Kirki::add_config( $koa_kirki_key, [
    'capability'  => 'edit_theme_options',
    'option_type' => 'theme_mod'
  ] );

  // sections
  KOA_Kirki::add_section( 'article', [
    'title'      => __( 'Article', $koa_text_domain ),
    'priority'   => 4,
    'capability' => 'edit_theme_options'
  ] );

  /*================================================================ Article
  */

  // sticky post
  // - color
  // - background color

  KOA_Kirki::add_field( $koa_kirki_key, [
    'type'      => 'color',
    'settings'  => 'article_sticky_color',
    'label'     => __( 'Sticky Color', $koa_text_domain ),
    'section'   => 'article',
    'default'   => '#ffffff',
    'priority'  => 10,
    'output'    => [
      [
        'element'  => 'body.home main > article.post.sticky,
                       body.home main > article.post.sticky .entry-title a,
                       body.home main > article.post.sticky .author a',
        'property' => 'color'
      ]
    ],
    'transport' => 'postMessage',
    'js_vars'   => [
      [
        'element'  => 'body.home main > article.post.sticky,
                       body.home main > article.post.sticky .entry-title a,
                       body.home main > article.post.sticky .author a',
        'function' => 'css',
        'property' => 'color'
      ]
    ]
  ] );

  KOA_Kirki::add_field( $koa_kirki_key, [
    'type'      => 'color',
    'settings'  => 'article_sticky_bg_color',
    'label'     => __( 'Sticky Background Color', $koa_text_domain ),
    'section'   => 'article',
    'default'   => '#33a0c0',
    'priority'  => 10,
    'output'    => [
      [
        'element'  => 'body.home main > article.post.sticky',
        'property' => 'background-color'
      ]
    ],
    'transport' => 'postMessage',
    'js_vars'   => [
      [
        'element'  => 'body.home main > article.post.sticky',
        'function' => 'css',
        'property' => 'background-color'
      ]
    ]
  ] );
}
