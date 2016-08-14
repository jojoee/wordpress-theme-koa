<?php

// TGM Plugin Activation

add_action( 'tgmpa_register', 'koa_register_required_plugins' );

function koa_register_required_plugins() {
  $plugins = [
    [
      'name'      => 'Kirki',
      'slug'      => 'kirki',
      'required'  => false
    ]
  ];
  
  $config = [
    'id'           => 'koa',
    'default_path' => '',
    'menu'         => 'tgmpa-install-plugins',
    'has_notices'  => true,
    'dismissable'  => true,
    'dismiss_msg'  => '',
    'is_automatic' => false,
    'message'      => ''
  ];

  tgmpa( $plugins, $config );
}
