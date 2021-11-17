@extends('main.app')

@section('content')
    <section class="hero-wrap hero-wrap-2" style="background-image: url('http://content.kingjesus.org/landings/wp-content/uploads/sites/9/2017/09/imgpsh_fullsize-1-1024x683.jpeg');" data-stellar-background-ratio="0.5">
      <!-- <div class="overlay"></div> -->
      <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center">
          <div class="col-md-9 ftco-animate pb-5 text-center">
            <h1 class="mb-3 bread">Solicitud de Oración</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="index.php">Inicio <i class="ion-ios-arrow-forward"></i></a></span> <span>Solicitud de Oración <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>
   	
    <section class="ftco-section">
    	<div class="container">
    		<div class="row">
    			<div class="col-md-12 mb-3">
						<h2 class="text-blue text-center">Y todo lo que pidiereis en oración, creyendo, lo recibiréis.</h2>
						<p class="text-center">Mateo 21:22</p>
            <form class="row mt-5" id="form-solicitud-oracion">
              <div class="col-md-12">
                <h3>Datos Básicos</h3>
              </div>
              <div class="form-group col-md-4">
                <input type="text" name="name" class="form-control" placeholder="Nombre y Apellido" required>
              </div>
              <div class="form-group col-md-4">
                <input type="text" name="telephone" class="form-control" placeholder="Teléfono" required>
              </div>
              <div class="form-group col-md-4">
                <input type="text" name="email" class="form-control" placeholder="Correo Electrónico" required>
              </div>
              <div class="col-md-12 mt-5">
                <h3>Tu petición de oración</h3>
              </div>
              <div class="form-group col-md-12">
                <label>Tipo de Oración:</label>
                <select class="form-control" name="tipo_oracion">
                  <option>Milagro Creativo</option>
                  <option>Sanidad</option>
                  <option>Liberación</option>
                  <option>Finanzas</option>
                  <option>Familias</option>
                  <option>Otro...</option>
                </select>
              </div>
              <div class="form-group col-md-12">
                <textarea class="form-control" name="message" placeholder="Cuentenos su petición de oración..." rows="5"></textarea>
              </div>
              <div class="form-group col-md-12 mt-3">
				        <button type="submit" class="btn btn-primary py-3 px-5">Enviar Información</button>
              </div>
            </form>
    			</div>
        </div>
    	</div>
    </section>
@endsection

@section('scripts')
<script src="{{ asset('assets_main/js/solicitar-oracion.js') }}"></script>
@endsection