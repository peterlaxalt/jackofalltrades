<?php get_header(); ?>

<!-- gallery item header -->
  <div class="container-fluid">

    <!-- start wp-loop (page content) -->
  <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

    <!-- display featured -->
    <?php if (has_post_thumbnail( $post->ID ) ): ?>
      <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
    <div class="row gallery-head" style="background-image:url('<?php echo $image[0]; ?>')">
      <?php endif; ?>
      <div class="gallery-head-content">
        <h1><?php the_title(); ?></h1>
        <span class="breadcrumbs"><?php the_time('F j, Y'); ?> - <?php foreach((get_the_category()) as $category) { echo $category->cat_name . ' '; } ?></span><br />
        <!-- <p class="description">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Cras vestibulum libero at lacus accumsan consequat.</p> -->
      </div>
    </div>
  </div> <!-- /gallery item header -->

  <!-- start page content -->
  <div class="col-sm-10 page-container">
    <div class="col-sm-12 page-content">

            <!-- display page content -->
            <p>
              <?php the_content(); ?>
            </p>

						<!-- end wp-loop (page content) -->
				<?php endwhile; else: ?>
					<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>
				<?php endif; ?>
  </div> <!-- /page-content -->
</div> <!-- /page-container -->

    <!-- embellishment (sidebar) -->
    <div class="col-sm-2 embellish-container" id="stick">
				<?php get_sidebar(); ?>
    </div>
    <!-- /embellishment -->

<?php get_footer(); ?>
