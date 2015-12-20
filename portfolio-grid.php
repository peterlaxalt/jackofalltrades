<?php
/*
Template Name: Portfolio grid
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
?>

<div class="all portfolio-item <?php echo $tax; ?>">
<a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>">
<div class="thumbnail"><?php the_post_thumbnail(); ?></div>
</a>
<h2><?php the_title();</h2>
<div><?php the_excerpt(); ?></div>
</div>

<?php endwhile; ?>

</div> <!-- /gallery-container -->

<!-- sidebar -->
<div class="col-sm-2 embellish-container" id="stick">
<?php get_sidebar(); ?>
</div>
<!-- /sidebar -->

<?php get_footer(); ?>
