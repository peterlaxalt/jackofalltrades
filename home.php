<?php get_header(); ?>

<div class="col-sm-10 gallery-container">
      <div class="col-sm-12 page-container">
          <div class="page-content">

						<!-- start wp-loop (page content) -->
					<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

            <!-- display portfolio content -->

            <!-- gallery item -->
            <div class="col-sm-4 gallery-item-container">
             <a href="<?php the_permalink(); ?>">
              <div class="gallery-item">
                <div class="gallery-img-container"><?php
$feat_image = wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); echo '<div style="background-image:url('. $feat_image .');" class="gallery-img gallery-grid-item img-responsive"></div>'; ?>
                </div>
                <div class="gallery-info"><strong><?php the_title(); ?></strong><br />
                   <?php the_time('Y'); ?></div>
              </div>
             </a>
            </div>
            <!-- /gallery item -->

						<!-- end wp-loop (page content) -->
				<?php endwhile; else: ?>
					<p><?php _e('Portfolio is empty.'); ?></p>
				<?php endif; ?>

          </div> <!-- /page-content -->
        </div><!-- /page-container -->
</div><!-- /gallery-container (page wrapper because pete is dumb) -->

    <!-- embellishment (sidebar) -->
    <div class="col-sm-2 embellish-container" id="stick">
				<?php get_sidebar(); ?>
    </div>
    <!-- /embellishment -->

<?php get_footer(); ?>
