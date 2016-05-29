<?php
  /* need to improve */
  $banner_url = '';
  $title = '';
  $subtitle = '';
  $custom_css = '';

  if ( is_home() ) {
    $home_url = esc_url( home_url( '/' ) );
    $title = get_bloginfo( 'name' );
    $subtitle = get_bloginfo( 'description' );

  } else {
    $post_id = get_the_ID();
    $banner_url = get_wpfeatured_image_url( $post_id );

    if ( is_null_or_empty_string( $banner_url ) ) {
      $custom_css = 'default';  
    }
  }
?>

<header class="banner <?php echo $custom_css; ?>"
  <?php the_background_image_style( $banner_url ); ?>>
  <div class="container">
    <nav class="nav-primary">
      <?php
      if ( has_nav_menu( 'primary_navigation' ) ) :
        wp_nav_menu( [
          'theme_location'  => 'primary_navigation',
          'menu_class'      => 'nav'
        ] );
      endif;
      ?>
    </nav>

    <div class="heading">
      <h1 class="sitename italiana">
        <a class="brand italiana nounderline"
          href="<?php echo $home_url; ?>">
          <?php echo $title; ?>
        </a>
      </h1><!-- .sitename -->

      <div class="sitedesc">
        <?php echo $subtitle; ?>
      </div><!-- .sitedesc -->
    </div>
  </div>
</header><!-- .banner -->
