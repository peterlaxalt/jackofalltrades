<?php get_header(); ?>

<div class="col-sm-10 gallery-container">
      <div class="col-sm-12 gallery-item-container">
          <div class="page-content">

						<!-- start wp-loop (page content) -->
					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

            <!-- display featured image -->
            <?php if (has_post_thumbnail( $post->ID ) ): ?>
              <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
              <img src="<?php echo $image[0]; ?>"  class="img-responsive" /><br />
            <?php endif; ?>

            <!-- display page title -->
            <h1 class="pagehead"><?php the_title(); ?></h1><br />

            <!-- display page content -->
            <p>
              <?php the_content(); ?>
            </p>

						<!-- end wp-loop (page content) -->
				<?php endwhile; else: ?>
					<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
				<?php endif; ?>

          </div> <!-- /page-content -->

    <!-- embellishment (sidebar) -->
    <div class="col-sm-2 embellish-container" id="stick">
				<?php get_sidebar(); ?>
    </div>
    <!-- /embellishment -->

      </div><!-- /gallery-container -->

</div>

<?php get_footer(); ?>
