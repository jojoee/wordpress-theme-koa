<?php

use Jojoee\Koa\Setup;
use Jojoee\Koa\Wrapper;

?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<?php get_template_part( 'templates/head' ); ?>
<body <?php body_class(); ?>>
<style>
  /* HACK */
  html {
    margin-top: 0 !important;
  }

  * html body {
    margin-top: 0 !important;
  }
</style>
<!--[if IE]>
<div class="alert alert-warning">
  <?php _e( 'You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your
  browser</a> to improve your experience.', 'koa' ); ?>
</div>
<![endif]-->

<nav id="nav-primary" class="nav-primary clearfix">
  <?php
  if ( has_nav_menu( 'primary_navigation' ) ) {
    $nav_menu_arg = [
      'theme_location' => 'primary_navigation',
      'menu_class'     => 'nav',
    ];
    wp_nav_menu( $nav_menu_arg );
  }
  ?>
</nav>

<button class="nav-primary-btn">
  <i class="fa fa-bars"></i>
</button>

<div id="body-wrap" class="body-wrap clearfix">
  <?php
  do_action( 'get_header' );
  get_template_part( 'templates/header' );
  ?>

  <div class="wrap clearfix" role="document">
    <div class="content">
      <main class="main">
        <?php include Wrapper\template_path(); ?>
      </main>
      <!-- .main -->
    </div>
    <!-- .content -->
  </div>
  <!-- .wrap -->

  <?php
  do_action( 'get_footer' );
  get_template_part( 'templates/footer' );
  ?>
</div>
<!-- .body-wrap -->

<?php get_template_part( 'templates/foot' ); ?>
</body>
</html>
