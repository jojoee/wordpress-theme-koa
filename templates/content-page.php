<?php if ( function_exists( 'yoast_breadcrumb' ) ) : ?>
  <div class="koabreadcrumb-wrap">
    <div class="container">
      <div class="koabreadcrumb">
        <?php yoast_breadcrumb(); ?>
      </div>
    </div>
  </div>
<?php endif; ?>

<article>
  <div class="container">
    <div class="entry-content">
      <?php the_content(); ?>
    </div>

    <footer>
      <?php
        wp_link_pages( [
        'before' => '<nav class="page-nav"><p>' . __( 'Pages:', 'koa' ),
        'after' => '</p></nav>'
        ] );
      ?>
    </footer>
  </div>
</article>
