<?php

/*================================================================ Featured image
*/

/**
 * Get Wordpress featured image
 * if it does not has, then return empty string
 *
 * @param int $post_id
 *
 * @return string
 */
function koa_get_wpfeatured_image_url( $post_id = 0 ) {
  $thumbnail_id = get_post_thumbnail_id( $post_id );
  $wpfeatured_image = wp_get_attachment_image_src( $thumbnail_id, 'full' ); // return array
  $wpfeatured_image_url = '';

  if ( ! empty( $wpfeatured_image ) ) {
    $wpfeatured_image_url = $wpfeatured_image[0];
  }

  return $wpfeatured_image_url;
}

/*================================================================ Archive - Category
*/

/**
 * Category_list
 *
 * @see https://codex.wordpress.org/Function_Reference/get_the_category_list
 */
function koa_the_category_list() {
  $categories_list = get_the_category_list( __( ', ', 'koa' ) );

  if ( ! koa_is_null_or_empty_string( $categories_list ) ) {
    echo '<div class="category-list">';
    echo 'Category: ' . $categories_list;
    echo '</div>';
  }
}

/*================================================================ Archive - Tag
*/

/**
 * Tag list
 *
 * @see https://codex.wordpress.org/Function_Reference/get_the_tag_list
 */
function koa_the_tag_list() {
  $tag_list = get_the_tag_list( '', __( ', ', 'koa' ), '' );

  if ( ! koa_is_null_or_empty_string( $tag_list ) ) {
    echo '<div class="tag-list">';
    echo 'Tag: ' . $tag_list;
    echo '</div>';
  }
}
