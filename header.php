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

  <link rel="stylesheet" href="<?php bloginfo('stylesheet_url');?>">
  <link href='https://fonts.googleapis.com/css?family=Lato:400,300,700,300italic' rel='stylesheet' type='text/css'>

  <!-- load jquery -->

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

  <!-- load wp_head for plugin developers to access head-->

  <?php wp_enqueue_script("jquery"); ?>
  <?php wp_head(); ?>

  <!-- bootstrap stuff -->
  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/bs/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

  <!-- <script src=" echo get_template_directory_uri(); /bs/js/bootstrap.min.js"></script> -->

  <!-- smooth scroll to anchor -->

  <script>
  $(function() {
    $('a[href^=#][href*=to]').click(function() {
      if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {

        var target = $(this.hash);
        target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
        if (target.length) {
          $('html,body').animate({
            scrollTop: target.offset().top
          }, 1000);
          return false;
        }
      }
    });
  });
  </script>

  <!-- ############# PORTFOLIO ADJUSTMENTS ############# -->

  <!-- add modal clases -->
<script>
// .modal-backdrop classes

$(".modal-fullscreen").on('show.bs.modal', function () {
  setTimeout( function() {
    $(".modal-backdrop").addClass("modal-backdrop-fullscreen");
  }, 0);
});
$(".modal-fullscreen").on('hidden.bs.modal', function () {
  $(".modal-backdrop").addClass("modal-backdrop-fullscreen");
});
</script>

  <!-- instafeed info -->
  <!-- ig code: 02e788e3dfe14c89a1d3388f6d0a10b1 -->
  <!-- accessToken: '236529641.1753a44.857cd1a2461d4f42bf6f3df335cddcbe', -->
  <!-- ig clientID: 1753a44bb2824810af56532c0b7363f5 -->

  </script>

  <title>Jack Of All Trades: Blacksmith, Craftsman, Artist, Explorer</title>

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
    <div class="row head-row"></div>
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
