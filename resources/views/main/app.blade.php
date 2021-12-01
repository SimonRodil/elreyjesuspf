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

    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
    j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
    'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
    })(window,document,'script','dataLayer','GTM-TN646X8');</script>
    <!-- End Google Tag Manager -->

	  @yield('styles')
    @livewireStyles

  </head>
  <body>
    
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-TN646X8"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->
    
	  <nav class="navbar px-md-0 navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-light" id="ftco-navbar">
	    <div class="container-fluid px-md-5">
	      <a class="navbar-brand" href="./"><img id="logotipo" src="{{ asset('assets_main/images/logo-v2.png') }}" height="60"></a>
	      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
	        <span class="oi oi-menu"></span> Menú
	      </button>

	      <div class="collapse navbar-collapse" id="ftco-nav">
	        <ul class="navbar-nav ml-auto">
				<li class="nav-item"><a href="index.php" class="nav-link">Inicio</a></li>
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Descubre
					</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
						
						<a class="dropdown-item" href="about-us.php">Quienes Somos</a>
						<a class="dropdown-item" href="nuestra-cobertura.php">Nuestra Cobertura</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="https://facebook.com/elreyjesuspuntofijo">Nuestros Eventos</a>
						<a class="dropdown-item" href="articles.php" hidden>Noticias</a>
						<a class="dropdown-item" href="https://www.youtube.com/channel/UCLgZlSZ4hCM9LH_m23UbDyg">Nuestras Predicas</a>
					</div>
				</li> 
				<li class="nav-item dropdown">
					<a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
						Yo quiero
					</a>
					<div class="dropdown-menu" aria-labelledby="navbarDropdown">
						<a class="dropdown-item" href="sembrar.php">Sembrar</a>
						<a class="dropdown-item" href="hops.php">Ir a Casa de Paz</a>
						<div class="dropdown-divider"></div>
						<a class="dropdown-item" href="location.php">Localizarlos</a>
						<a class="dropdown-item" href="solicitar-oracion.php">Solicitar Oración</a>
					</div>
				</li> 
	          	<li class="nav-item live-btn"><a href="live.php" class="nav-link">En Vivo</a></li>
	        </ul>
	      </div>
	    </div>
	  </nav>
    <!-- END nav -->
	
	@yield('content')

    <section class="ftco-gallery3" hidden>
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
            <h2 class="mb-0" style="color:white; font-size: 28px;">Suscribete ahora:</h2>
          </div>
          <div class="col-md-5 d-flex align-items-center">
            <form action="#" class="subscribe-form">
              <div class="form-group d-flex">
                <input type="text" class="form-control" placeholder="Ingresa un correo electrónico">
                <button type="submit" class="btn submit px-3">Suscribirme</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </section>

    <footer class="ftco-footer ftco-bg-dark ftco-section">
      <div class="container">
        <div class="row mb-5 ftco-animate">
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">NUESTRA IGLESIA</h2>
              <p>El Rey Jesús Punto Fijo es una iglesia que promueve los principios del evangelio de Dios en todos los espacios y dimensiones sociales: personas, familias, instituciones, empresas, sector público o privado bajo cuatro principios fundamentales.</p>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                <li class="ftco-animate"><a href="mailto:media@elreyjesuspf.com"><span class="icon-envelope"></span></a></li>
                <li class="ftco-animate"><a href="https://facebook.com/elreyjesuspuntofijo"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="https://instagram.com/elreyjesuspuntofijo"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4 ml-md-5">
              <h2 class="ftco-heading-2">Navegación</h2>
              <ul class="list-unstyled">
                <li><a href="#" class="py-1 d-block"><span class="ion-ios-arrow-forward mr-3"></span>Inicio</a></li>
                <li><a href="#" class="py-1 d-block"><span class="ion-ios-arrow-forward mr-3"></span>Eventos</a></li>
                <li><a href="#" class="py-1 d-block"><span class="ion-ios-arrow-forward mr-3"></span>Noticias</a></li>
                <li><a href="#" class="py-1 d-block"><span class="ion-ios-arrow-forward mr-3"></span>Predicas</a></li>
                <li><a href="#" class="py-1 d-block"><span class="ion-ios-arrow-forward mr-3"></span>Predicas</a></li>
                <li><a href="#" class="py-1 d-block"><span class="ion-ios-arrow-forward mr-3"></span>Localizanos</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2">Localizanos</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><span class="icon icon-map-marker"></span><span class="text">Av. Puma Rosa, Edif. Bracho Motors. Punto Fijo</span></li>
	                <li><span class="icon icon-clock-o"></span><span class="text">Domingo : 09:00 am</span></li>
	                
	                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">media@elreyjesuspf.com</span></a></li>
	              </ul>
	            </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">
            <p>Copyright &copy;<script>document.write(new Date().getFullYear());</script> Todos los derechos reservados | El Rey Jesús Punto Fijo</p>
          </div>
        </div>
      </div>
    </footer>
    
  

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  @livewireScripts
  
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

  @yield('scripts')
    
  </body>
</html>