<?php
  the_content();

  $wp_link_pages_args = [
    'before' => '<nav class="page-nav"><p>' . __( 'Pages:', 'koa' ),
    'after' => '</p></nav>'
  ];
  wp_link_pages( $wp_link_pages_args );
?>
