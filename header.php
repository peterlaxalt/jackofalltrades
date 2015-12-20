<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta http-equiv="content-type" content="text/html; charset=utf-8">
  <meta name="description" content="Jack of All Trades: Bikes, metal, craft, art.">
  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">

    <!-- load styles + fonts-->

  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/bs/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url');?>">
  <link href='https://fonts.googleapis.com/css?family=Lato:400,300,700,300italic' rel='stylesheet' type='text/css'>

  <!-- load wp_head for plugin developers to access head & load bootstrap jquery -->

  <?php wp_enqueue_script("jquery"); ?>
  <?php wp_head(); ?>

  <title><?php wp_title('|',1,'right'); ?> <?php bloginfo('name'); ?><</title>

</head>
<body>

<!-- mobile navbar -->

    <div class="container-fluid navbar-inverse hidden-sm hidden-md hidden-lg">
      <div class="collapse navbar-collapse" id="navbar">
        <ul class="nav navbar-nav">
              <!-- display wp pages -->
          <?php wp_list_pages(array('title_li' => '')); ?>
        </ul>
      </div>
    </div>

  <!-- header + overlay -->

  <div class="container-fluid">
    <!-- display featured image -->
    <?php if (has_post_thumbnail( $post->ID ) ): ?>
      <?php $image = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'single-post-thumbnail' ); ?>
          <div class="row head-row" style="background-image:url('<?php echo $image[0]; ?>');"></div>
    <?php endif; ?>
    <div class="row head-overlay" style="/*background-color: rgba(0, 0, 0, 0.5);*/">

  <!-- mobile nav-button -->
      <div class="navbar-toggle-jack hidden-sm hidden-md hidden-lg" data-toggle="collapse" data-target="#navbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
    </div>
    <a href="index.html"><div class="mobile-head-logo hidden-sm hidden-md hidden-lg"></div></a>
  </div>

    <!-- desktop navbar -->

<div class="container content-top">
  <div class="col-sm-2 nav-side hidden-xs">
    <a href="<?php get_home_url(); ?>"><div class="head-logo"></div></a>
    <div class="nav-group">
      <ul class="jack-nav">
            <!-- display wp pages -->
        <?php wp_list_pages(array('title_li' => '')); ?>
      </ul>
</div>
  </div>

    <!-- begin content --> <!-- ends in footer.php -->

  <div class="col-sm-10 content-container">
