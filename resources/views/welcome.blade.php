@extends('layout')

@section('titulo','USAE Irapuato')
@section('css')
@endsection

@section('content')
<header>
  <div class="collapse bg-dark" id="navbarHeader">
    <div class="container">
      <div class="row">
        <div class="col-sm-8 col-md-7 py-4">
          <h4 class="text-white text-center">USAE IRAPUATO</h4>
          <p class="text-white text-center">La USAE es una Unidad Administrativa de la Secretaría de Educación de Guanajuato, SEG dependiente del Gobierno del Estado de Guanajuato, con función de enlace administrativo en el municipio de Irapuato. Encargada de atender a la comunidad educativa de educación básica del municipio de Irapuato.
          </p>
        </div>
        <div class="col-sm-4 offset-md-1 py-4">
          <h4 class="text-white text-center">CONTÁCTANOS</h4>
          <ul class="list-unstyled text-center">
            <li><a href="mailto:modulousaeirapuato@seg.guanajuato.gob.mx" class="text-white btn"><svg xmlns="http://www.w3.org/2000/svg" width="50" height="30" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
                  <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z" />
                </svg></a></li>
            <i class="bi bi-envelope"></i>
            <li><a href="tel:+52462 6074500" class="text-white btn"><svg xmlns="http://www.w3.org/2000/svg" width="50" height="30" fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">
                  <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
                </svg></a></li>
            <i class="bi bi-telephone"></i>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <!-- NAVBAR -->
  <div class="navbar navbar-dark bg-primary">
    <div class="container">
      <a href="#abajo" class="navbar-brand d-flex align-items-center">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="90" fill="none" stroke="" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" aria-hidden="true" class="me-2" viewBox="0 0 24 24">
          <path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z" />
          <circle cx="12" cy="13" r="4" />
        </svg>
        <p class="float-end mb-1">
          <img src="img/Imagen15.png" class="img-fluid" alt="..." width="80">
        </p>
        <p class="float-end mb-1">
          <img src="img/Imagen90.png" class="img-fluid" alt="" width="750">
        </p>
        <ul class="list-unstyled">
          <li><a href="" class="text-white"> </a></li>
          <li><a href="" class="text-white"> </a></li>
          <li><a href="" class="text-white"></a></li>
        </ul>
      </a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      @if (Route::has('login'))
      @auth
      <a href="{{ url('/home') }}" class="text-white btn">Home</a>
      @else
      <a href="{{ route('login') }}" class="text-white btn"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-circle" viewBox="0 0 16 16">
          <path d="M11 6a3 3 0 1 1-6 0 3 3 0 0 1 6 0z" />
          <path fill-rule="evenodd" d="M0 8a8 8 0 1 1 16 0A8 8 0 0 1 0 8zm8-7a7 7 0 0 0-5.468 11.37C3.242 11.226 4.805 10 8 10s4.757 1.225 5.468 2.37A7 7 0 0 0 8 1z" />
        </svg> Iniciar Sesión</a>
      <i class="bi bi-person-circle"></i>
      @if (Route::has('register'))
      <a href="{{ route('register') }}" class="text-white btn">Register</a>
      @endif
      @endauth
      @endif
    </div>
  </div>
</header>
<main>
<br>
<br>

<main>
<!-- CAMPO AVISOS -->

<div class="container">
<div id="carouselExampleIndicators" class="carousel slide">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
    @foreach ($img1 as $imagen)
          <img class="d-block w-100" src="/imagen/{{$imagen->imagen}}" alt="First slide" height="720">
        @endforeach
    </div>
    <div class="carousel-item">
    @foreach ($img2 as $img)
          <img class="d-block w-100" src="/imagen/{{$img->imagen}}" alt="Second slide" height="720">
        @endforeach
    </div>
    <div class="carousel-item">
    @foreach ($img3 as $imag)
          <img class="d-block w-100" src="/imagen/{{$imag->imagen}}" alt="Third slide" height="720">
        @endforeach
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
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
                  <a role="button" class="btn btn-primary" href="/directores" target="_self">CONSULTAR INFORMACIÓN</a>

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
                  <a role="button" class="btn btn-primary" href="/docentes" target="_self">CONSULTAR INFORMACIÓN</a>

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
                  <a role="button" class="btn btn-primary" href="/personalApoyo" target="_self">CONSULTAR INFORMACIÓN</a>

                </div>
                <small class="text-muted"></small>
              </div>
            </div>
          </div>
        </div>
        <!-- CAMPO CONOCE AL PERSONAL USAE-->
        <div class="col mx-auto row g-3">
          <div class="card mx-auto row g-0" style="width: 17rem;">
            <img src="img/Imagen89.jpg" class="card-img-top" alt="">
            <div class="card-body">
              <h5 class="card-title"></h5>
              <p class="card-text"></p>
              <div class="d-flex justify-content-between align-items-center"></div>
              <div class="btn-group position-relative top-20 start-50 translate-middle mt-0">
                <a role="button" class="btn btn-primary" href="/personalUSAE" target="_self">CONSULTAR</a>

              </div>
            </div>
          </div>



</main>

<!-- FOOTER FINAL SITIO -->
<footer class="bg-primary text-white text-center text-lg-start">
  <!-- Grid container -->
  <div class="container p-5">
    <!--Grid row-->
    <div class="row">
      <!--Grid column-->
      <div class="col-lg-3 col-md-12 mb-4 mb-md-0">
        <h5 class="text-uppercase"></h5>

        <p>
          <img src="img/Imagen46.png" class="img-fluid" alt="..." width="240">
        </p>
      </div>
      <!--Grid column-->
      <div class="col-lg-6 col-md-12 mb-4 mb-md-0 text-center fs-3">

        <p>
          <img src="img/Imagen95.png" class="img-fluid" alt="..." width="240">
        </p>
      </div>


      <!--Grid column-->
      <div class="col-lg-3 col-md-12 mb-4 mb-md-0">
        <h5 class="text-uppercase mb-0 text-center fs-4">CONTACTOS</h5>

        <ul class="list-unstyled text-center">
          <li>
            <a href="mailto:modulousaeirapuato@seg.guanajuato.gob.mx" class="text-white btn fs-2"><svg xmlns="http://www.w3.org/2000/svg" width="50" height="30" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
                <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z" />
              </svg></a>
            <i class="bi bi-envelope"></i>
          </li>
          <li>
            <a href="tel:+52462 6074500" class="text-white btn"><svg xmlns="http://www.w3.org/2000/svg" width="50" height="30" fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">
                <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z" />
              </svg></a>
            <i class="bi bi-telephone"></i>
          </li>

        </ul>
      </div>
      <!--Grid column-->
    </div>
    <!--Grid row-->
  </div>
  <!-- Grid container -->

  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    USAE IRAPUATO.
  </div>

</footer>



<script src="../assets/dist/js/bootstrap.bundle.min.js"></script>



@endsection