<!-- header + overlay -->

<div class="container-fluid">
  <?php /* ************************************************************************************* */ ?>
  <?php /* display featured image on page or post */ ?>
  <?php /* ************************************************************************************* */ ?>
  <?php if (has_post_thumbnail( $post->ID ) ): ?>
    <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
        <div class="row head-row" style="background-image:url('<?php echo $image[0]; ?>');"></div>
  <?php endif; ?>
  <div class="row head-overlay" style="/*background-color: rgba(0, 0, 0, 0.5);*/">
