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

   echo '<div class="all portfolio-item '. $tax .'">';
   echo '<a href="'. the_permalink() .'" title="'. the_title_attribute() .'">';
   echo '<div class="thumbnail">'. the_post_thumbnail() .'</div>';
   echo '</a>';
   echo '<h2>'. the_title() .'</h2>';
   echo '<div>'. the_excerpt() .'</div>';
   echo '</div>';
 endwhile;
 ?>

</div> <!-- /gallery-container -->

<!-- sidebar -->
<div class="col-sm-2 embellish-container" id="stick">
<?php get_sidebar(); ?>
</div>
<!-- /sidebar -->

<?php get_footer(); ?>
