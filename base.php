<?php

use Roots\Sage\Setup;
use Roots\Sage\Wrapper;

?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<?php get_template_part( 'templates/head' ); ?>
<body <?php body_class(); ?>>
<!--[if IE]>
<div class="alert alert-warning">
  <?php _e( 'You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your
  browser</a> to improve your experience.', 'koa' ); ?>
</div>
<![endif]-->
<?php
  do_action( 'get_header' );
  get_template_part( 'templates/header' );
?>
<div class="wrap clearfix" role="document">
  <div class="content">
    <main class="main">
      <?php include Wrapper\template_path(); ?>
    </main><!-- .main -->
  </div><!-- .content -->  
</div><!-- .wrap -->

<div class="footer-sidebar">
  <?php if ( Setup\display_sidebar() ) : ?>
    <aside class="sidebar">
      <?php include Wrapper\sidebar_path(); ?>
    </aside><!-- .sidebar -->
  <?php endif; ?>
</div>

<?php
  do_action( 'get_footer' );
  get_template_part( 'templates/footer' );
  get_template_part( 'templates/foot' );
  wp_footer();
?>
</body>
</html>
