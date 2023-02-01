@extends('layouts.app')


@section('titulo','USAE Irapuato')
@section('css')
<link href="{{ asset('css/home.css') }}" rel="stylesheet" >   
<style>
    .btn-flotante {
	font-size: 16px; /* Cambiar el tamaño de la tipografia */
	text-transform: uppercase; /* Texto en mayusculas */
	font-weight: bold; /* Fuente en negrita o bold */
	color: #ffffff; /* Color del texto */
	border-radius: 5px; /* Borde del boton */
	letter-spacing: 2px; /* Espacio entre letras */
	background-color: #E91E63; /* Color de fondo */
	padding: 18px 30px; /* Relleno del boton */
	position: fixed;
	bottom: 40px;
	right: 40px;
	transition: all 300ms ease 0ms;
	box-shadow: 0px 8px 15px rgba(0, 0, 0, 0.1);
	z-index: 99;
}
.btn-flotante:hover {
	background-color: #2c2fa5; /* Color de fondo al pasar el cursor */
	box-shadow: 0px 15px 20px rgba(0, 0, 0, 0.3);
	transform: translateY(-7px);
}
@media only screen and (max-width: 600px) {
 	.btn-flotante {
		font-size: 14px;
		padding: 12px 20px;
		bottom: 20px;
		right: 20px;
	}
} 
</style>
@endsection

@section('content')

@if (session('status'))
    <div class="alert alert-success" role="alert">
        {{ session('status') }}
    </div>
@endif
<main>
<div class="chat">
<a href="https://app.crisp.chat/initiate/login/" target="_blank" class="btn-flotante"><svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-chat-dots-fill" viewBox="0 0 16 16">
  <path d="M16 8c0 3.866-3.582 7-8 7a9.06 9.06 0 0 1-2.347-.306c-.584.296-1.925.864-4.181 1.234-.2.032-.352-.176-.273-.362.354-.836.674-1.95.77-2.966C.744 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7zM5 8a1 1 0 1 0-2 0 1 1 0 0 0 2 0zm4 0a1 1 0 1 0-2 0 1 1 0 0 0 2 0zm3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
</svg></a>
<i class="bi bi-chat-dots-fill"></i>
</div> 
<!-- CAMPO DIRECTORES -->
<div class="album py-5 bg-light" id="abajo">
    <div class="container">

      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        <div class="col">
          <div class="card shadow-sm">
            <!--<svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/>im<text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>-->

            <img src="img/Imagen44.jpg" alt="" class="bd-placeholder-img card-img-top" width="100%" height="225">

            <div class="card-body">
              <p class="card-text"></p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group position-relative top-100 start-50 translate-middle mt-3">
                  <a role="button" class="btn btn-primary" href="{{ route('Director') }}" target="_self">CAMBIAR INFORMACIÓN</a>

                </div>
                <small class="text-muted"></small>
              </div>
            </div>
          </div>
        </div>
        <!-- CAMPO DOCENTES -->
        <div class="col">
          <div class="card shadow-sm">
            <!--<svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>-->
            <img src="img/Imagen43.jpg" alt="" class="bd-placeholder-img card-img-top" width="100%" height="225">


            <div class="card-body">
              <p class="card-text"></p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group position-relative top-100 start-50 translate-middle mt-3">
                  <a role="button" class="btn btn-primary" href="{{ route('Docente') }}" target="_self">CAMBIAR INFORMACIÓN</a>

                </div>
                <small class="text-muted"></small>
              </div>
            </div>
          </div>
        </div>
        <!-- CAMPO PERSONAL DE APOYO -->
        <div class="col">
          <div class="card shadow-sm">
            <!--<svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>-->

            <img src="img/Imagen45.jpg" alt="" class="bd-placeholder-img card-img-top" width="100%" height="225">

            <div class="card-body">
              <p class="card-text"></p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group position-relative top-100 start-50 translate-middle mt-3">
                  <a role="button" class="btn btn-primary" href="{{ route('Personal') }}" target="_self">CAMBIAR INFORMACIÓN</a>

                </div>
                <small class="text-muted"></small>
              </div>
            </div>
          </div>
        </div>
         <!-- CAMPO AVISOS -->
         <div class="col">
          <div class="card shadow-sm">
            <img src="img/Aviso.png" alt="" class="bd-placeholder-img card-img-top" width="100%" height="225">
            <div class="card-body">
              <p class="card-text"></p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group position-relative top-100 start-50 translate-middle mt-3">
                  <a role="button" class="btn btn-primary" href="{{ route('avisos') }}" target="_self">CAMBIAR INFORMACIÓN</a>
                </div>
                <small class="text-muted"></small>
              </div>
            </div>
          </div>
        </div>
</main>
@endsection