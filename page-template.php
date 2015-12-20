<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <meta http-equiv="content-type" content="text/html; charset=utf-8">
  <meta name="description" content="Jack of All Trades: Bikes, metal, craft, art.">
  <link rel="shortcut icon" href="favicon.ico" type="image/x-icon">
  <link rel="stylesheet" href="styles.css">
  <link rel="stylesheet" href="icons/styles.css">
  <link href='https://fonts.googleapis.com/css?family=Lato:400,300,700,300italic' rel='stylesheet' type='text/css'>

  <!-- bootstrap stuff -->
  <link rel="stylesheet" href="bs/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="bs/js/bootstrap.min.js"></script>

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

  <title>Jack Of All Trades: Blacksmith, Craftsman, Artist, Explorer</title>

</head>
<body>

<!-- mobile navbar -->

    <div class="container-fluid navbar-inverse hidden-sm hidden-md hidden-lg">
      <div class="collapse navbar-collapse" id="navbar">
        <ul class="nav navbar-nav">
          <li><a href="index.html">Home</a></li>
          <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="index.html">Portfolio
            <span class="caret"></span></a>
            <ul class="dropdown-menu">
              <li><a href="#">Metal</a></li>
              <li><a href="#">Bikes</a></li>
              <li><a href="#">Sculpture</a></li>
              <li><a href="#">Wood</a></li>
            </ul>
          </li>
          <li><a href="page-template.html">About</a></li>
          <li><a href="page-template.html">Contact</a></li>
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
    <a href="index.html"><div class="head-logo"></div></a>
    <div class="nav-group">
    <strong><a href="index.html">Portfolio</a></strong><br />
    <a href="#">Metal</a><br />
    <a href="#">Bikes</a><br />
    <a href="#">Sculpture</a><br />
    <a href="#">Wood</a><br />
  </div>
  <div class="nav-group">
    <strong><a href="page-template.html">About</a></strong><br />
    <strong><a href="page-template.html">Contact</a></strong><br />
</div>
  </div>

    <!-- begin content -->

  <div class="col-sm-10 content-container">
    <div class="col-sm-10 gallery-container">

      <!-- gallery row -->
      <!-- gallery item -->
      <div class="col-sm-12 gallery-item-container">
          <div class="page-content">
            <img src="assets/bio-portrait.jpg" class="img-responsive"/><br />
            <h1 class="pagehead">About the Jack of All Trades</h1><br />
            <p>
              Jack Sutter is obsessed with making dreams into reality.
              His projects begin merely as conceptual ideas, and progress into one of a kind works.
              With his creative design process, Jack works one step at a time until the final product
              is aesthetically and functionally complete, with the highest industry standards.
              Creativity is just as important as craft in Jack's creations.  His work combines a
              variety of traditional and contemporary methods of craftsmanship to make Jack of All
              Trades originals.  He loves working with his clients to evolve ideas into fruition.
              Experienced in many trades, Jack works mostly with metal because of its strength,
              versatility, and natural beauty.<br /><br />

              <span class="block-quote">"I work with my hands and my mind.  I pursue beauty in what I produce. I see art in science and science in art."</span>
            </p>
      <h1 class="pagehead" style="margin-bottom:30px;margin-top:50px;">Recent Projects</h1>
          </div>
      </div>

<div id="instafeed"></div>

  <!-- gallery row -->
  <!-- gallery item -->
  <div class="col-sm-4 gallery-item-container">
    <div class="gallery-item">
      <div><a href="gallery-item.html"><img src="assets/gallery-placeholder.jpg" class="img-responsive"/></a></div>
      <div class="gallery-info"><strong>Project Name</strong><br />Project Category - 2015</div>
    </div>
  </div>
  <!-- /gallery item -->

  <!-- gallery item -->
  <div class="col-sm-4 gallery-item-container">
    <div class="gallery-item">
      <div><a href="gallery-item.html"><img src="assets/gallery-placeholder.jpg" class="img-responsive"/></a></div>
      <div class="gallery-info"><strong>Project Name</strong><br />Project Category - 2015</div>
    </div>
  </div>
  <!-- /gallery item -->

  <!-- gallery item -->
  <div class="col-sm-4 gallery-item-container">
    <div class="gallery-item">
      <div><a href="gallery-item.html"><img src="assets/gallery-placeholder.jpg" class="img-responsive"/></a></div>
      <div class="gallery-info"><strong>Project Name</strong><br />Project Category - 2015</div>
    </div>
  </div>
  <!-- /gallery item -->
<!-- end gallery row -->

    </div> <!-- /gallery-container -->

    <!-- embellishment -->
    <div class="col-sm-2 embellish-container" id="stick">
        <img src="assets/embellish-icon@2x.png" class="embellish-icon"/><br />
    </div>
    <!-- /embellishment -->
  </div><!-- /content-container -->

  <div class="container footer-wrap">
    <div class="col-sm-2"></div>
      <div class="col-sm-10 footer-container">
        <div class="col-sm-10 footer-fix">
        <div class="col-sm-4 foot-item">
          Projects by <strong>Jack Sutter</strong><br />
          Site designed by <strong>Peter Laxalt</strong><br />
          © 2015
        </div>
        <div class="col-sm-4 foot-item">
          <strong>Contact</strong><br />
          create@jacksutterma.de<br />
          +1 775 830 3747
        </div>
        <div class="col-sm-4 foot-item">
          <strong>Follow</strong><br />
          Facebook<br />
          Instagram
        </div>
        </div> <!-- /footer-fix -->
      </div> <!-- /footer-container -->

</body>
</html>
