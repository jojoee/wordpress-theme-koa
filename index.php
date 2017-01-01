<?php get_template_part( 'templates/page', 'header' ); ?>

<?php if ( ! have_posts() ) : ?>
  <article class="not-found">
    <div class="container">
      <div class="alert alert-warning">
        <?php _e( 'Sorry, no results were found.', 'koa' ); ?>
        <?php get_search_form(); ?>
      </div>
    </div>
  </article>
<?php endif; ?>

<?php while ( have_posts() ) : the_post(); ?>
  <?php get_template_part( 'templates/content', get_post_type() != 'post' ? get_post_type() : get_post_format() ); ?>
<?php endwhile; ?>

<?php koa_posts_navigation(); ?>
