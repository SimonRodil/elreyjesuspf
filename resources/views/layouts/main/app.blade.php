<!DOCTYPE html>
<html lang="es">
  <head>
    <title>El Rey Jesús Punto Fijo</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700,800,900" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,400i,700,700i,900,900i&display=swap" rel="stylesheet">
	
    <meta name="theme-color" content="#2141aa">
    <link rel="icon" sizes="192x192" type="image/png" href="{{ asset('assets_main/images/icon-192x192.png') }}">
    <link rel="icon" sizes="228x228" type="image/png" href="{{ asset('assets_main/images/icon-228x228.png') }}">

    <meta name="mobile-web-app-capable" content="yes">

    <!-- For IE 11, Chrome, Firefox, Safari, Opera -->
    <link rel="icon" href="{{ asset('assets_main/images/icon-16x16.png') }}" sizes="16x16" type="image/png">
    <link rel="icon" href="{{ asset('assets_main/images/icon-32x32.png') }}" sizes="32x32" type="image/png">
    <link rel="icon" href="{{ asset('assets_main/images/icon-48x48.png') }}" sizes="48x48" type="image/png">
    <link rel="icon" href="{{ asset('assets_main/images/icon-62x62.png') }}" sizes="62x62" type="image/png">

    <link rel="stylesheet" href="{{ asset('assets_main/css/open-iconic-bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets_main/css/animate.css') }}">
    
    <link rel="stylesheet" href="{{ asset('assets_main/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets_main/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('assets_main/css/magnific-popup.css') }}">

    <link rel="stylesheet" href="{{ asset('assets_main/css/aos.css') }}">

    <link rel="stylesheet" href="{{ asset('assets_main/css/ionicons.min.css') }}">
    
    <link rel="stylesheet" href="{{ asset('assets_main/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('assets_main/css/icomoon.css') }}">
    <link rel="stylesheet" href="{{ asset('assets_main/css/style.css') }}">

	@yield('styles')

  </head>
  <body>
    
	  <nav class="navbar px-md-0 navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container-fluid px-md-5">
	      <a class="navbar-brand" href="./"><img id="logotipo" src="{{ asset('assets_main/images/logo-v2.png') }}" height="60"></a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menú
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
	          <li class="nav-item active"><a href="index.html" class="nav-link">Home</a></li>
	          <li class="nav-item"><a href="about.html" class="nav-link">About Us</a></li>
	          <li class="nav-item"><a href="practice-areas.html" class="nav-link">Practice Areas</a></li>
	          <li class="nav-item"><a href="case.html" class="nav-link">Case Studies</a></li>
	          <li class="nav-item"><a href="attorneys.html" class="nav-link">Attorneys</a></li>
	          <li class="nav-item"><a href="blog.html" class="nav-link">Blog</a></li>
	          <li class="nav-item"><a href="contact.html" class="nav-link">Contact</a></li>
	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->
	
	@yield('content')

    <section class="ftco-gallery">
    	<div class="container-wrap">
    		<div class="row no-gutters">
					<div class="col-md-2 ftco-animate">
						<a href="images/image_1.jpg" class="gallery image-popup img d-flex align-items-center" style="background-image: url(assets_main/images/image_1.jpg);">
							<div class="icon mb-4 d-flex align-items-center justify-content-center">
    						<span class="icon-instagram"></span>
    					</div>
						</a>
					</div>
					<div class="col-md-2 ftco-animate">
						<a href="images/image_2.jpg" class="gallery image-popup img d-flex align-items-center" style="background-image: url(assets_main/images/image_2.jpg);">
							<div class="icon mb-4 d-flex align-items-center justify-content-center">
    						<span class="icon-instagram"></span>
    					</div>
						</a>
					</div>
					<div class="col-md-2 ftco-animate">
						<a href="images/image_3.jpg" class="gallery image-popup img d-flex align-items-center" style="background-image: url(assets_main/images/image_3.jpg);">
							<div class="icon mb-4 d-flex align-items-center justify-content-center">
    						<span class="icon-instagram"></span>
    					</div>
						</a>
					</div>
					<div class="col-md-2 ftco-animate">
						<a href="images/image_4.jpg" class="gallery image-popup img d-flex align-items-center" style="background-image: url(assets_main/images/image_4.jpg);">
							<div class="icon mb-4 d-flex align-items-center justify-content-center">
    						<span class="icon-instagram"></span>
    					</div>
						</a>
					</div>
					<div class="col-md-2 ftco-animate">
						<a href="images/image_4.jpg" class="gallery image-popup img d-flex align-items-center" style="background-image: url(assets_main/images/image_5.jpg);">
							<div class="icon mb-4 d-flex align-items-center justify-content-center">
    						<span class="icon-instagram"></span>
    					</div>
						</a>
					</div>
					<div class="col-md-2 ftco-animate">
						<a href="images/image_4.jpg" class="gallery image-popup img d-flex align-items-center" style="background-image: url(assets_main/images/image_6.jpg);">
							<div class="icon mb-4 d-flex align-items-center justify-content-center">
    						<span class="icon-instagram"></span>
    					</div>
						</a>
					</div>
        </div>
    	</div>
    </section>

    <section class="ftco-section ftco-no-pt ftco-no-pb bg-primary">
      <div class="container py-4">
        <div class="row d-flex justify-content-center">
          <div class="col-md-7 ftco-animate d-flex align-items-center">
            <h2 class="mb-0" style="color:white; font-size: 28px;">Subcribe to our Newsletter</h2>
          </div>
          <div class="col-md-5 d-flex align-items-center">
            <form action="#" class="subscribe-form">
              <div class="form-group d-flex">
                <input type="text" class="form-control" placeholder="Enter email address">
                <input type="submit" value="Subscribe" class="submit px-3">
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>

    <footer class="ftco-footer ftco-bg-dark ftco-section">
      <div class="container">
        <div class="row mb-5">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">About Judge</h2>
              <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4 ml-md-5">
              <h2 class="ftco-heading-2">Practice Areas</h2>
              <ul class="list-unstyled">
                <li><a href="#" class="py-1 d-block"><span class="ion-ios-arrow-forward mr-3"></span>Family Law</a></li>
                <li><a href="#" class="py-1 d-block"><span class="ion-ios-arrow-forward mr-3"></span>Business Law</a></li>
                <li><a href="#" class="py-1 d-block"><span class="ion-ios-arrow-forward mr-3"></span>Insurance Law</a></li>
                <li><a href="#" class="py-1 d-block"><span class="ion-ios-arrow-forward mr-3"></span>Criminal Law</a></li>
                <li><a href="#" class="py-1 d-block"><span class="ion-ios-arrow-forward mr-3"></span>Drug Offenses</a></li>
                <li><a href="#" class="py-1 d-block"><span class="ion-ios-arrow-forward mr-3"></span>Fire Accident</a></li>
                <li><a href="#" class="py-1 d-block"><span class="ion-ios-arrow-forward mr-3"></span>Employment Law</a></li>
                <li><a href="#" class="py-1 d-block"><span class="ion-ios-arrow-forward mr-3"></span>Property Law</a></li>

              </ul>
            </div>
          </div>
          <div class="col-md">
             <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Business Hours</h2>
              <div class="opening-hours">
              	<h4>Opening Days:</h4>
              	<p class="pl-3">
              		<span>Monday – Friday : 9am to 20 pm</span>
              		<span>Saturday : 9am to 17 pm</span>
              	</p>
              	<h4>Vacations:</h4>
              	<p class="pl-3">
              		<span>All Sunday Days</span>
              		<span>All Official Holidays</span>
              	</p>
              </div>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2">Have a Questions?</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><span class="icon icon-map-marker"></span><span class="text">203 Fake St. Mountain View, San Francisco, California, USA</span></li>
	                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+2 392 3929 210</span></a></li>
	                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">info@yourdomain.com</span></a></li>
	              </ul>
	            </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
  Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart color-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
  <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
          </div>
        </div>
      </div>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="{{ asset('assets_main/js/jquery.min.js') }}"></script>
  <script src="{{ asset('assets_main/js/jquery-migrate-3.0.1.min.js') }}"></script>
  <script src="{{ asset('assets_main/js/popper.min.js') }}"></script>
  <script src="{{ asset('assets_main/js/bootstrap.min.js') }}"></script>
  <script src="{{ asset('assets_main/js/jquery.easing.1.3.js') }}"></script>
  <script src="{{ asset('assets_main/js/jquery.waypoints.min.js') }}"></script>
  <script src="{{ asset('assets_main/js/jquery.stellar.min.js') }}"></script>
  <script src="{{ asset('assets_main/js/owl.carousel.min.js') }}"></script>
  <script src="{{ asset('assets_main/js/jquery.magnific-popup.min.js') }}"></script>
  <script src="{{ asset('assets_main/js/aos.js') }}"></script>
  <script src="{{ asset('assets_main/js/jquery.animateNumber.min.js') }}"></script>
  <script src="{{ asset('assets_main/js/scrollax.min.js') }}"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="{{ asset('assets_main/js/google-map.js') }}"></script>
  <script src="{{ asset('assets_main/js/main.js') }}"></script>
    
  </body>
</html>