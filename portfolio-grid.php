<?php
/*
Template Name: Portfolio Grid
*/
get_header(); ?>

<div class="col-sm-10 gallery-container">

  <?php
  /*
  Query the post
  */
  $args = array( 'post_type' => 'portfolio', 'posts_per_page' => -1 );
  $loop = new WP_Query( $args );
    while ( $loop->have_posts() ) : $loop->the_post();

  /*
  Pull category for each unique post using the ID
  */
  $terms = get_the_terms( $post->ID, 'portfolio-categories' );
       if ( $terms && ! is_wp_error( $terms ) ) :

           $links = array();

           foreach ( $terms as $term ) {
               $links[] = $term->name;
           }

           $tax_links = join( " ", str_replace(' ', '-', $links));
           $tax = strtolower($tax_links);
       else :
  	 $tax = '';
       endif;

          /* Insert category name into portfolio-item class */
          echo '<div class="col-sm-4 gallery-item-container">
              <div class="all gallery-item '. $tax .'">';
          echo '<div><a href="'. the_permalink() .'" title="'. the_title_attribute() .'">';
          echo '<img src="'. wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), array( 60,60 ), false, '' ); .'" class="gallery-grid-item img-responsive"/>';
          echo '</a></div>';
          echo '<div class="gallery-info"><strong>'. the_title() .'</strong>';
          echo '<br />'. $tax .' - '. the_date('Y', '<span>', '</span>'); .'</div>';
          echo '</div>';
          echo '</div>';
    endwhile; ?>

</div> <!-- /gallery-container -->

<!-- sidebar -->
<div class="col-sm-2 embellish-container" id="stick">
<?php get_sidebar(); ?>
</div>
<!-- /sidebar -->

<?php get_footer(); ?>
