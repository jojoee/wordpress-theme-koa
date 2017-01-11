<?php

namespace Jojoee\Koa\Customizer;

use Jojoee\Koa\Assets;

function customize_register( $wp_customize ) {
  $wp_customize->get_setting( 'blogname' )->transport = 'postMessage';
}

add_action( 'customize_register', __NAMESPACE__ . '\\customize_register' );

function customize_preview_js() {
  wp_enqueue_script(
    'koa-sage/customizer',
    Assets\asset_path( 'scripts/customizer.js' ),
    [ 'customize-preview' ],
    null,
    true
  );
}

add_action( 'customize_preview_init', __NAMESPACE__ . '\\customize_preview_js' );
