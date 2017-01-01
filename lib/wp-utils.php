<?php

/*================================================================ Featured image
*/

function get_wpfeatured_image_url( $post_id = 0 ) {
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
 * [the_category_list description]
 *
 * @see https://codex.wordpress.org/Function_Reference/get_the_category_list
 * 
 * @return [type] [description]
 */
function the_category_list() {
  $categories_list = get_the_category_list( __( ', ', 'koa' ) );

  if ( ! is_null_or_empty_string( $categories_list ) ) {
    echo '<div class="category-list">';
    echo 'Category: ' . $categories_list;
    echo '</div>';
  }
}

/*================================================================ Archive - Tag
*/

/**
 * [the_tag_list description]
 *
 * @see https://codex.wordpress.org/Function_Reference/get_the_tag_list
 * 
 * @return [type] [description]
 */
function the_tag_list() {
  $tag_list = get_the_tag_list( '', __( ', ', 'koa' ), '' );

  if ( ! is_null_or_empty_string( $tag_list ) ) {
    echo '<div class="tag-list">';
    echo 'Tag: ' . $tag_list;
    echo '</div>';
  }
}
