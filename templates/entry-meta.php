<div class="article-meta">
  <time class="updated" datetime="<?= get_post_time( 'c', true ); ?>">
    <?php echo get_the_date(); ?>
  </time>

  <p class="byline author vcard">
    <?php echo __( 'By', 'koa' ); ?>
    <a href="<?= get_author_posts_url( get_the_author_meta( 'ID' ) ); ?>"
      rel="author"
      class="fn">
      <?php echo get_the_author(); ?>
    </a>
  </p>  
</div>
