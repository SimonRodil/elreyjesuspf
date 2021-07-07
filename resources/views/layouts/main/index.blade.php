@extends('layouts.main.app')

@section('content')
    <div class="hero-wrap js-fullheight" style="background-image: url('assets_main/images/bg_3.jpg')" data-stellar-background-ratio="0.5" id="index-top">
      <div id="video" style="max-height: 100%"></div>
      <div class="overlay"></div>
      <div class="container-fluid px-md-5">
        <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-start" data-scrollax-parent="true">
          <div class="col-md-12 ftco-animate text-center">
          	<h2 class="subheading">¡Te damos la bienvenida!</h2>
            <h4 class="mb-4"><img src="assets_main/images/live-all-weeks.png" width="300"></h4>
          	<h4 class="subheading">Chequea en nuestras redes sociales para mas información.</h4><br>
            <p hidden><a href="/live" class="btn-custom mr-md-4">Ver mas <span class="ion-ios-arrow-forward"></span></a> <!-- <a href="#" class="btn-custom">Request A Quote <span class="ion-ios-arrow-forward"></span></a> --></p>
            <a href="https://facebook.com/elreyjesuspuntofijo" target="_blank" style="background: white; padding: 5px 120px; color: black; border-radius: 20px">Haz Clic Aquí</a>
          </div>
        </div>
      </div>
    </div>
   	
		<section class="bg-light">
			<div class="container">
        <a href="comience-aqui.php">
				<div class="row center-browsers">
					<div class="col-md-12">
						<div class="box_welcome row">
							<div class="col-md-4 col-sm-4 col-5 text-center image-box">
								<img src="assets_main/images/new-here.jpg">
							</div>
							<div class="col-md-8 col-sm-8 col-7 text-box text-left">
								<h4>Soy Nuevo Aquí</h4>
								<p>Bienvenido a El Rey Jesús Punto Fijo, si esta es su primera vez visitándonos, haga clic aquí para conocer más sobre nosotros.</p>
							</div>
						</div>
					</div>
				</div>
        </a>
			</div>
		</section>
		
    <section class="ftco-section bg-light index-2nd-section" style="padding-top: 0">
      <div class="container">
        <div class="row d-flex">
          <div class="col-md-4 d-flex ftco-animate">
          	<div class="blog-entry justify-content-end">
              <a href="planee-visita.php" class="block-20" style="background-image: url('assets_main/images/thumb-youth.jpg');">
              </a>
              <div class="text p-4 float-right d-block" style="height: 100%">
                <h3 class="heading mt-2"><a href="planee-visita.php">Planee Su Visita</a></h3>
                <p>Obtenga direcciones, vea nuestros horarios de servicios, y descubra lo que puede esperar durante su visita.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 d-flex ftco-animate">
          	<div class="blog-entry justify-content-end">
              <a href="empiece-aqui.php" class="block-20" style="background-image: url('assets_main/images/thumb-family.jpg');">
              </a>
              <div class="text p-4 float-right d-block">
                <h3 class="heading mt-2"><a href="empiece-aqui.php">Empiece Aquí</a></h3>
                <p>Estamos muy contentos de que esté interesado(a) en hacerse parte de nuestra familia. Conozca más sobre los primeros pasos para involucrarse.</p>
              </div>
            </div>
          </div>
          <div class="col-md-4 d-flex ftco-animate">
          	<div class="blog-entry">
              <a href="crezca-aqui.php" class="block-20" style="background-image: url('assets_main/images/thumb-girl.jpg');">
              </a>
              <div class="text p-4 float-right d-block">
                <h3 class="heading mt-2"><a href="crezca-aqui.php">Crezca Aquí</a></h3>
                <p>Dios tiene un propósito para su vida. Conozca todas las maneras en que podemos ayudarle a descubrirlo, desarrollarlo y a caminar en él.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
		
	<section class="ftco-casadepaz ftco-section img" style="background-image: url(assets_main/images/hops_bg.jpg); height: 100%">
		<div class="overlay" style="opacity: .25"></div>
    	<div class="container">
    		<div class="row d-md-flex justify-content-end">
    			<div class="col-md-6 half p-3 p-md-5 ftco-animate heading-section">
					<img src="assets_main/images/cdp_img.png">
    				<h2 class="mb-4 text-white">Visite una Casa de Paz esta semana</h2>
					<p class="text-white">
						Una Casa de Paz (CPz) es una reunión semanal en diferentes hogares por toda la ciudad de Chicago. Allí usted podrá conocer gente de su vecindario y encontrar a Dios, escuchar un mensaje poderoso y orar con otros por diferentes necesidades.
					</p>
					<a href="location.php" target="_blank" class="btn btn-primary py-3 px-4">Encuentre su CdPz</a>
    			</div>
    		</div>
    	</div>
    </section>
@endsection