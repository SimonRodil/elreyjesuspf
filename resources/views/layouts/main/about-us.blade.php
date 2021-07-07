@extends('layouts.main.app')

@section('content')
    <section class="hero-wrap hero-wrap-2" style="background-image: url('assets_main/images/bg_about.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center">
          <div class="col-md-9 ftco-animate pb-5 text-center">
            <h1 class="mb-3 bread">Sobre Nosotros</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="index.php">Inicio <i class="ion-ios-arrow-forward"></i></a></span> <span>Sobre Nosotros <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>
   	
    <section class="ftco-section ftco-no-pt ftco-no-pb">
    	<div class="container">
    		<div class="row d-flex">
    			<div class="col-md-6 d-flex hidden-sm show-md">
    				<div class="img d-flex align-self-stretch align-items-center justify-content-end" style="background-image:url(assets_main/images/pastores-aboutus.jpg);">
    					<!-- <a href="https://vimeo.com/45830194" class="icon-video popup-vimeo d-flex justify-content-center align-items-center">
    						<span class="icon-play"></span>
    					</a> -->
    				</div>
    			</div>
            <div class="col-sm-12 show-sm hidden-md">
                <img class="img-responsive" src="assets_main/images/pastores-aboutus.jpg" style="max-width: 100%" alt="Pastores">
            </div>
    			<div class="col-md-6 px-5 py-5">
    				<div class="row justify-content-start pt-3 pb-3">
              <div class="col-md-12 heading-section ftco-animate">
                <span class="subheading">Pra. Gisela Bracho</span>
                <p class="mb-4">La pastora Gisela Revilla de Bracho, fundadora y directora del Ministerio y Fundación "Mujeres de Valor" y la iglesia El Rey Jesús Punto Fijo. Actualmente ministra en las iglesias de la región y de su país. Ha visitado otras naciones en calidad de invitada, donde le ha tocado ministrar en diferentes iglesias. Es una mujer reconocida por la autoridad y testimonio en la palabra, así como el respaldo y unción de guerra que la caracterizan. Tiene un fuerte llamado a formar una nueva generación de líderes con principios y valores de fe para así transformar la cultura de una ciudad y una nación. Con la visión específica de: evangelizar, afirmar,  discípular y enviar. Esta bajo la cobertura de sus mentores y padres espirituales, Guillermo y Ana Maldonado.</p>
              </div>
            </div>
	        </div>
    			<div class="col-md-12 px-5 py-5">
    				<div class="row justify-content-start pt-3 pb-3">
              <div class="col-md-12 heading-section ftco-animate">
                <h3 class="text-center">Nuestra Iglesia</h3>
                <p>El Rey Jesús Punto Fijo es una iglesia que promueve los principios del evangelio de Dios en todos los espacios y dimensiones sociales: personas, familias, instituciones, empresas, sector público o privado bajo cuatro principios fundamentales.</p>
              </div>
            </div>
	        </div>
        </div>
    	</div>
    </section>
      
    <section class="ftco-section bg-light ftco-no-pb">
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h2>La Visión en Acción</h2>
                </div>
            </div>
        </div>
    </section>

    <section class="ftco-section bg-light for-timeline ftco-no-pt">
        <div class="timeline">
          <div class="container left">
            <div class="content">
              <h2>EVANGELIZAR</h2>
              <p>Es aquella etapa del proceso de la visión en la que ganamos almas para Cristo. TODO miembro de la iglesia debe ser un ganador de almas. Nuestro evangelismo es sobrenatural, pues no sólo predicamos la Palabra y testificamos, sino que también manifestamos pruebas del poder de Dios a través de milagros, sanidades, palabras proféticas y de ciencia.</p>
            </div>
          </div>
          <div class="container right">
            <div class="content">
              <h2>AFIRMAR</h2>
              <p>Es aquella etapa del proceso de la visión mediante la cual se cimenta, asegura, consolida la decisión del nuevo creyente (NC) y se le da el seguimiento apropiado hasta que desarrolle los fundamentos básicos de su nueva vida en Cristo, para que luego forme parte de un  grupo de discipulado.</p>
            </div>
          </div>
          <div class="container left">
            <div class="content">
              <h2>DISCIPULAR</h2>
              <p>El objetivo de discipular es  enseñar, entrenar, equipar, activar y pastorear ya que se busca el crecimiento constante y continuo de la persona.</p>
            </div>
          </div>
          <div class="container right">
            <div class="content">
              <h2>ENVIAR</h2>
              <p>Líderes son enviados dentro de la iglesia local, con el ADN de esa Casa y equipados con el poder y los dones necesarios para extender el Reino de Dios por medio de desarrollar cada una de las tareas que se le encargan. También, a medida que crecen espiritualmente, pueden ser promovidos y enviados como diácono, anciano o ministro, según el llamado que Dios tenga para su vida.</p>
            </div>
          </div>
        </div> 
    </section>
@endsection

@section('scripts')
<script>
    $('.practice-area').parent().addClass('col-sm-12');
</script>
@endsection