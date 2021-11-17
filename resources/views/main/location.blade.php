@extends('main.app')

@section('content')
    <section class="hero-wrap hero-wrap-2" style="background-image: url('assets_main/images/bg_about.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center">
          <div class="col-md-9 ftco-animate pb-5 text-center">
            <h1 class="mb-3 bread">Localizanos</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="index.php">Inicio <i class="ion-ios-arrow-forward"></i></a></span> <span>Localizanos <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section contact-section">
      <div class="container">
        <div class="row d-flex mb-5 contact-info">
          <div class="col-md-12 mb-4">
            <h2 class="h3">Información de Contacto</h2>
          </div>
          <div class="w-100"></div>
          <div class="col-md-6">
            <p><span class="icon icon-map-marker"></span> <span>Dirección:</span> Av. Puma Rosa, Edif. Bracho Motors. Punto Fijo</p>
          </div>
          <div class="col-md-6">
            <p><span class="icon icon-envelope"></span> <span>Email:</span> <a href="mailto:media@elreyjesuspf.com">media@elreyjesuspf.com</a></p>
          </div>
        </div>
        <div class="row block-9">
          <div class="col-lg-6 order-md-last d-flex">
            <form action="#" class="bg-light p-5 contact-form">
              <h4 class="text-center">Escribenos</h4>
              <div class="form-group">
                <input type="text" name="name" class="form-control" placeholder="Nombre y Apellido">
              </div>
              <div class="form-group">
                <input type="text" name="email" class="form-control" placeholder="Correo Electrónico">
              </div>
              <div class="form-group">
                <input type="text" name="subject" class="form-control" placeholder="Asunto">
              </div>
              <div class="form-group">
                <textarea name="message" id="message" cols="30" rows="7" class="form-control" placeholder="Escribe acá tu mensaje..."></textarea>
              </div>
              <div class="form-group">
				<button type="submit" class="btn btn-primary py-3 px-5">Enviar Mensaje</button>
              </div>
            </form>
          
          </div>

          <div class="col-lg-6 d-flex">
          	<div id2="map" class="bg-white"><iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d7813.8415103323505!2d-70.20229476140747!3d11.700025093503799!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xa3774a013d00cebe!2sIglesia%20El%20Rey%20Jes%C3%BAs%20Punto%20Fijo!5e0!3m2!1ses!2sve!4v1581129277837!5m2!1ses!2sve" width="600" height="450" frameborder="0" style="height: 600px; max-width: 520px; border: 1px solid #eaeaea; box-shadow: 0 0 20px #eaeaea" allowfullscreen=""></iframe></div>
          </div>
        </div>
      </div>
    </section>
		
		<section class="ftco-casadepaz ftco-section img" style="background-image: url(assets_main/images/hops_bg.jpg); height: 100%">
			<div class="overlay"></div>
    	<div class="container">
    		<div class="row d-md-flex justify-content-end">
    			<div class="col-md-6 half p-3 p-md-5 ftco-animate heading-section">
						<img src="assets_main/images/cdp_img.png">
    				<h2 class="mb-4 text-white">Visite una Casa de Paz esta semana</h2>
						<p class="text-white">
							Una Casa de Paz (CPz) es una reunión semanal en diferentes hogares por toda la ciudad de Chicago. Allí usted podrá conocer gente de su vecindario y encontrar a Dios, escuchar un mensaje poderoso y orar con otros por diferentes necesidades.
						</p>
						<a href="hops.php" target="_blank" class="btn btn-primary py-3 px-4">Encuentre su CdPz</a>
    			</div>
    		</div>
    	</div>
    </section>

    <section class="ftco-section bg-light index-2nd-section">
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
@endsection

@section('scripts')
@endsection