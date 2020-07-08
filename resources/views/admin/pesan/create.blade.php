<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Asta98 Restaurant - Home</title>
	<link rel="icon" href="img/Fevicon.png" type="image/png">

  <link rel="stylesheet" href="vendors/bootstrap/bootstrap.min.css">
  <link rel="stylesheet" href="vendors/themify-icons/themify-icons.css">
  <link rel="stylesheet" href="vendors/owl-carousel/owl.theme.default.min.css">
  <link rel="stylesheet" href="vendors/owl-carousel/owl.carousel.min.css">
  <link rel="stylesheet" href="vendors/Magnific-Popup/magnific-popup.css">

  <link rel="stylesheet" href="css/style.css">
</head>
<body>

  <!--================ Header Menu Area start =================-->
  <header class="header_area">
    <div class="main_menu">
      <nav class="navbar navbar-expand-lg navbar-light">
        <div class="container box_1620">
          <a class="navbar-brand logo_h" href="#"><img src="img/logo.png" alt=""></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>

          <div class="collapse navbar-collapse offset" id="navbarSupportedContent">
            <ul class="nav navbar-nav menu_nav justify-content-end">
              <li class="nav-item active"><a class="nav-link" href="/">Home</a></li>
              <li class="nav-item"><a class="nav-link" href="{{ route('pesan.create')}}">Pesan Menu</a>
            </ul>
          </div> 
        </div>
      </nav>
    </div>
  </header>
  <!--================Header Menu Area =================-->

  <!--================Hero Banner Section start =================-->
  <section class="hero-banner">
    <div class="hero-wrapper">
      <div class="hero-left">
        <h1 class="hero-title">Asta98 <br> Restaurant <br></h1><h3>Harmonisasi-Sensasi-Lesehan</h3>
        <ul class="hero-info d-none d-lg-block">
          <li>
            <img src="img/banner/fas-service-icon.png" alt="">
            <h4>Fast Service</h4>
          </li>
          <li>
            <img src="img/banner/fresh-food-icon.png" alt="">
            <h4>Fresh Food</h4>
          </li>
          <li>
            <img src="img/banner/support-icon.png" alt="">
            <h4>24/7 Support</h4>
          </li>
        </ul>
      </div>
      <div class="hero-right">
        <div class="owl-carousel owl-theme hero-carousel">
          <div class="hero-carousel-item">
            <img class="img-fluid" src="img/banner/hero-banner1.png" alt="">
          </div>
          <div class="hero-carousel-item">
            <img class="img-fluid" src="img/banner/hero-banner2.png" alt="">
          </div>
          <div class="hero-carousel-item">
            <img class="img-fluid" src="img/banner/hero-banner1.png" alt="">
          </div>
          <div class="hero-carousel-item">
            <img class="img-fluid" src="img/banner/hero-banner2.png" alt="">
          </div>
        </div>
      </div>
      <ul class="social-icons d-none d-lg-block">
        <li><a href="#"><i class="ti-facebook"></i></a></li>
        <li><a href="#"><i class="ti-twitter"></i></a></li>
        <li><a href="#"><i class="ti-instagram"></i></a></li>
      </ul>
    </div>
  </section>
  <!--================Hero Banner Section end =================-->

  <!--================Food menu section start =================--> 

  <!-- ================ start footer Area ================= -->
  <footer class="footer-area section-gap">
		<div class="container">
			<div class="row">
				<div class="col-xl-2 col-sm-6 mb-4 mb-xl-0 single-footer-widget">
					<h4>Top</h4>
					<ul>
						<li>Miya</li>
					</ul>
				</div>
				<div class="col-xl-2 col-sm-6 mb-4 mb-xl-0 single-footer-widget">
					<h4>Quick Links</h4>
					<ul>
						<li>Jhon</li>
					</ul>
				</div>
				<div class="col-xl-2 col-sm-6 mb-4 mb-xl-0 single-footer-widget">
					<h4>Features</h4>
					<ul>
						<li>akai</li>
					</ul>
				</div>
				<div class="col-xl-2 col-sm-6 mb-4 mb-xl-0 single-footer-widget">
					<h4>Resources</h4>
					<ul>
						<li>Grock</li>
					</ul>
				</div>
			</div>
			<div class="footer-bottom row align-items-center text-center text-lg-left">
				<p class="footer-text m-0 col-lg-8 col-md-12"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="ti-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
				<div class="col-lg-4 col-md-12 text-center text-lg-right footer-social">
					<a href="#"><i class="ti-facebook"></i></a>
					<a href="#"><i class="ti-twitter-alt"></i></a>
					<a href="#"><i class="ti-dribbble"></i></a>
					<a href="#"><i class="ti-linkedin"></i></a>
				</div>
			</div>
		</div>
	</footer>
  <!-- ================ End footer Area ================= -->




  <script src="vendors/jquery/jquery-3.2.1.min.js"></script>
  <script src="vendors/bootstrap/bootstrap.bundle.min.js"></script>
  <script src="vendors/owl-carousel/owl.carousel.min.js"></script>
  <script src="vendors/nice-select/jquery.nice-select.min.js"></script>
  <script src="vendors/Magnific-Popup/jquery.magnific-popup.min.js"></script>
  <script src="js/jquery.ajaxchimp.min.js"></script>
  <script src="js/mail-script.js"></script>
  <script src="js/main.js"></script>
</body>
</html>