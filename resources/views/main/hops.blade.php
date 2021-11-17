@extends('main.app')

@section('content')
    <section class="hero-wrap hero-wrap-2" style="background-image: url('assets_main/images/bg_about.jpg');" data-stellar-background-ratio="0.5">
      <div class="overlay"></div>
      <div class="container">
        <div class="row no-gutters slider-text align-items-end justify-content-center">
          <div class="col-md-9 ftco-animate pb-5 text-center">
            <h1 class="mb-3 bread">Casas de Paz</h1>
            <p class="breadcrumbs"><span class="mr-2"><a href="index.php">Inicio <i class="ion-ios-arrow-forward"></i></a></span> <span>Casas de Paz <i class="ion-ios-arrow-forward"></i></span></p>
          </div>
        </div>
      </div>
    </section>

    <section class="ftco-section contact-section">
      <div class="container">
        <div class="row d-flex mb-5 contact-info">
          <div class="col-md-12 mb-4">
            <h2 class="h3">Te invitamos a localizar una casa de Paz</h2>
          </div>
          <div class="w-100"></div>
          <div class="col-md-12">
            <p>Actualmente hay mas de 100 casas de paz bajo la cobertura de El Rey Jesús Punto Fijo, y acá puedes filtrar todas las casas de paz disponibles para poder encontrar la que quede más cerca de tí.</p>
          </div>
        </div>
          <div class="row mb-5">
            <div class="col-lg-4">
                <select id="municipio" class="form-control">
                    <option value="-">- Municipio -</option>
                </select>
            </div>
            <div class="col-lg-4">
                <select id="sector" class="form-control">
                    <option value="-" disabled>- Sector -</option>
                </select>
            </div>
            <div class="col-lg-4">
                <button type="button" class="btn btn-primary btn-block" style="height: 50px !important" disabled><span class="icon icon-search"></span> BUSCAR</button>
            </div>
          </div>
        <div class="row block-9">
            <div class="col-md-12">
                <table class="table table-striped table-bordered">
                    <thead class="text-center">
                        <tr>
                            <th>Sector</th>
                            <th>Lider</th>
                            <th>Dirección</th>
                            <th>Horario</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>1</td>
                            <td>1</td>
                            <td>1</td>
                            <td>1</td>
                        </tr>
                        <tr>
                            <td>1</td>
                            <td>1</td>
                            <td>1</td>
                            <td>1</td>
                        </tr>
                    </tbody>
                </table>
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
<script src="{{ asset('assets_main/js/sembrar.js') }}"></script>
@endsection