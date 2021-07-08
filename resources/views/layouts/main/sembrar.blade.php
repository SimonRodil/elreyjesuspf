@extends('layouts.main.app')

@section('content')
    <section class="hero-wrap hero-wrap-2" style="background-image: url('https://content2.kingjesus.org/wp-content/uploads/2019/11/diezmo.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center">
          <div class="col-md-9 ftco-animate pb-5 text-center">
            <h1 class="mb-3 bread">¡Quiero sembrar!</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="index.php">Inicio <i class="ion-ios-arrow-forward"></i></a></span> <span>Sembrar <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>
   	
    <section class="ftco-section">
    	<div class="container">
    		<div class="row">
    			<div class="col-md-12 mb-3">
						<h2 class="text-blue">Restaurar. Transformar. Empoderar.</h2>
						<p>Al realizar una siembra, usted nos ayuda a traer la solución para las aflicciones de nuestra generación: El Poder Sobrenatural de Dios. Juntos, estamos alcanzando lugares del mundo donde el cristianismo y el Evangelio no son comunes y rara vez se escuchan. Su participación como socio es la que trae avivamiento a comunidades, estados y gobiernos. Es lo que trae el mensaje de Dios para el ahora, a personas que nunca han tenido un encuentro personal e íntimo con el amor del Padre Celestial.</p>
    			</div>
          <div class="col-lg-6">
            <div class="row">
              <div class="col-md-12">
                <div class="box-founding">
                  <img src="https://image.flaticon.com/icons/svg/197/197580.svg">
                  <hr>
                  <p>A.C. Iglesia El Rey Jesús Punto Fijo<br>
                    RIF J403896003<br>
                    BANCO BOD: 01160112070021755086 
                  </p>
                </div>
              </div>
              <div class="col-md-12">
                <div class="box-founding">
                  <img src="https://image.flaticon.com/icons/svg/323/323310.svg">
                  <hr>
                  <p>
                    BANK OF AMERICA / ZELLE <br>
                     Gisela Bracho <br>
                      giselabracho@hotmail.com 
                  </p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-6">
            <form class="row" id="form-nueva-siembra">
              <div class="col-md-12">
                <h4 class="text-center mb-4">Introduce la información de la siembra</h4>
              </div>
              <div class="form-group col-md-6">
                <input type="text" name="name" class="form-control" placeholder="Nombre y Apellido" required>
              </div>
              <div class="form-group col-md-6">
                <input type="text" name="email" class="form-control" placeholder="Correo Electrónico" required>
              </div>
              <div class="form-group col-md-12">
                <input type="text" name="telephone" class="form-control" placeholder="Teléfono" required>
              </div>
              <div class="col-md-4 form-group">
                <select class="form-control" name="denomination" required>
                  <option readonly selected>-- Denom. --</option>
                  <option>USD</option>
                  <option>VEF</option>
                </select>
              </div>
              <div class="form-group col-md-8">
                <input type="text" name="voucher" class="form-control" placeholder="Número de Referencia / Confirmación" required>
              </div>
              <div class="form-group col-md-12">
                <input type="text" name="date" class="form-control" placeholder="Fecha de la Siembra" required>
              </div>
              <div class="form-group col-md-12 mt-3">
				        <button type="submit" class="btn btn-primary py-3 px-5">Enviar Información</button>
              </div>
            </form>
          </div>
        </div>
        <hr>
        <div class="row">
          <div class="col-md-12 text-center">
            <img src="{{asset('assets_main/images/unete_construccion_templo.jpg')}}">
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