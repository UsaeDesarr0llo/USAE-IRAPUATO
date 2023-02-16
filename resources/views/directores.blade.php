@extends('layout')

@section('titulo','USAE Irapuato')
@section('css')

@endsection

@section('content')

@include('includes.navbar')



<!-- CUERPO INFORMACIÓN USAE IRAPUATO -->
<main>

  <section class="text-center">
    <div class="navbar navbar-dark bg-dark">
      <div class="col-lg-6 col-md-8 mx-auto">
        <h1 class="text-white">UNIDAD DE SERVICIOS DE APOYO A LA EDUCACIÓN.</h1> <br>
        <h2 class="text-white">IRAPUATO</h2>
        <p class="lead text-white">Delagación Regional de Educacion IV Irapuato</p>
        <h3 class="text-white">Directores</h3>

      </div>
    </div>
  </section>

  <!-- TEMAS USAE IRAPUATO -->

        <!-- TEMA 1 -->

        <div class="album py-5 bg-light" id="abajo">
          <div class="container">
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
              <div class="col">
                <div class="card shadow-sm">
                  <!--<svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/>im<text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>-->

                  <img src="img/Imagen1.jpg" alt="" class="bd-placeholder-img card-img-top" width="100%" height="225">

                  <div class="card-body">
                    <p class="card-text text-center">Consejos de Participación</p>
                    <div class="d-flex justify-content-between align-items-center">
                      <div class="btn-group">
                        @foreach ($pdfDoc1 as $Doc1)
                          <a role="button" target="_blank" class="btn btn-primary" href="Archivos/{{$Doc1->imagen}}" target="_self">Ver</a>
                        @endforeach
                      </div>
                      <small class="text-muted"></small>
                    </div>
                  </div>
                </div>
              </div>

              <!-- TEMA 2 -->
              <div class="col">
                <div class="card shadow-sm">
                  <!--<svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>-->
                  <img src="img/Imagen2.jpg" alt="" class="bd-placeholder-img card-img-top" width="100%" height="225">


                  <div class="card-body">
                    <p class="card-text text-center">Control Escolar</p>
                    <div class="d-flex justify-content-between align-items-center">
                      <div class="btn-group">
                        @foreach ($pdfDoc2 as $Doc2)
                          <a role="button" target="_blank" class="btn btn-primary" href="Archivos/{{$Doc2->imagen}}" target="_self">Ver</a>
                        @endforeach
                      </div>
                      <small class="text-muted"></small>
                    </div>
                  </div>
                </div>
              </div>
              <!-- TEMA 3 -->
              <div class="col">
                <div class="card shadow-sm">
                  <!--<svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>-->

                  <img src="img/Imagen3.jpg" alt="" class="bd-placeholder-img card-img-top" width="100%" height="225">

                  <div class="card-body">
                    <p class="card-text text-center">Correo Electrónico Institucional </p>
                    <div class="d-flex justify-content-between align-items-center">
                      <div class="btn-group">
                        @foreach ($pdfDoc3 as $Doc3)
                          <a role="button" target="_blank" class="btn btn-primary" href="Archivos/{{$Doc3->imagen}}" target="_self">Ver</a>
                        @endforeach
                      </div>
                      <small class="text-muted"></small>
                    </div>
                  </div>
                </div>
              </div>
              <!-- TEMA 4 -->

              <div class="col">
                <div class="card shadow-sm">
                  <!--<svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>-->


                  <img src="img/Imagen4.jpg" alt="" class="bd-placeholder-img card-img-top" width="100%" height="225">
                  <div class="card-body">
                    <p class="card-text text-center">Cuenta Personal de Correo Electrónico</p>
                    <div class="d-flex justify-content-between align-items-center">
                      <div class="btn-group">
                        @foreach ($pdfDoc4 as $Doc4)
                          <a role="button" target="_blank" class="btn btn-primary" href="Archivos/{{$Doc4->imagen}}" target="_self">Ver</a>
                        @endforeach
                      </div>
                      <small class="text-muted"></small>
                    </div>
                  </div>
                </div>
              </div>
              <!-- TEMA 5 -->
              <div class="col">
                <div class="card shadow-sm">
                  <!--<svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>-->
                  <img src="img/Imagen5.jpg" alt="" class="bd-placeholder-img card-img-top" width="100%" height="225">


                  <div class="card-body">
                    <p class="card-text text-center">Entrega Recepción</p>
                    <div class="d-flex justify-content-between align-items-center">
                      <div class="btn-group">
                        @foreach ($pdfDoc5 as $Doc5)
                          <a role="button" target="_blank" class="btn btn-primary" href="Archivos/{{$Doc5->imagen}}" target="_self">Ver</a>
                        @endforeach
                      </div>
                      <small class="text-muted"></small>
                    </div>
                  </div>
                </div>
              </div>
              <!-- TEMA 6 -->
              <div class="col">
                <div class="card shadow-sm">
                  <!--<svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>-->
                  <img src="img/Imagen6.jpg" alt="" class="bd-placeholder-img card-img-top" width="100%" height="225">

                  <div class="card-body">
                    <p class="card-text text-center">Mantenimiento Infraestructura Escolar</p>
                    <div class="d-flex justify-content-between align-items-center">
                      <div class="btn-group">
                        @foreach ($pdfDoc6 as $Doc6)
                          <a role="button" target="_blank" class="btn btn-primary" href="Archivos/{{$Doc6->imagen}}" target="_self">Ver</a>
                        @endforeach
                      </div>
                      <small class="text-muted"></small>
                    </div>
                  </div>
                </div>
              </div>
              <!-- TEMA 7 -->

              <div class="col">
                <div class="card shadow-sm">
                  <!--<svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>-->
                  <img src="img/Imagen7.jpg" alt="" class="bd-placeholder-img card-img-top" width="100%" height="225">

                  <div class="card-body">
                    <p class="card-text text-center">Sistema de Ingresos y Egresos Escolares</p>
                    <div class="d-flex justify-content-between align-items-center">
                      <div class="btn-group">
                        @foreach ($pdfDoc7 as $Doc7)
                          <a role="button" target="_blank" class="btn btn-primary" href="Archivos/{{$Doc7->imagen}}" target="_self">Ver</a>
                        @endforeach
                      </div>
                      <small class="text-muted"></small>
                    </div>
                  </div>
                </div>
              </div>
              <!-- TEMA 8 -->
              <div class="col">
                <div class="card shadow-sm">
                  <!-- <svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>-->
                  <img src="img/Imagen8.jpg" alt="" class="bd-placeholder-img card-img-top" width="100%" height="225">


                  <div class="card-body">
                    <p class="card-text text-center">Sistema de Inventarios</p>
                    <div class="d-flex justify-content-between align-items-center">
                      <div class="btn-group">
                        @foreach ($pdfDoc8 as $Doc8)
                          <a role="button" target="_blank" class="btn btn-primary" href="Archivos/{{$Doc8->imagen}}" target="_self">Ver</a>
                        @endforeach
                      </div>
                      <small class="text-muted"></small>
                    </div>
                  </div>
                </div>
              </div>
              <!-- TEMA 9 -->
              <div class="col">
                <div class="card shadow-sm">
                  <!--<svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>-->
                  <img src="img/Imagen9.jpg" alt="" class="bd-placeholder-img card-img-top" width="100%" height="225">

                  <div class="card-body">
                    <p class="card-text text-center">Libros de Texto Gratuitos</p>
                    <div class="d-flex justify-content-between align-items-center">
                      <div class="btn-group">
                        @foreach ($pdfDoc9 as $Doc9)
                          <a role="button" target="_blank" class="btn btn-primary" href="Archivos/{{$Doc9->imagen}}" target="_self">Ver</a>
                        @endforeach
                      </div>
                      <small class="text-muted"></small>
                    </div>
                  </div>
                </div>
              </div>
              <!-- TEMA 10 -->
              <div class="col">
                <div class="card shadow-sm">
                  <!--<svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>-->
                  <img src="img/Imagen10.jpg" alt="" class="bd-placeholder-img card-img-top" width="100%" height="225">

                  <div class="card-body">
                    <p class="card-text text-center">Aprender a Convivir</p>
                    <div class="d-flex justify-content-between align-items-center">
                      <div class="btn-group">
                        @foreach ($pdfDoc10 as $Doc10)
                          <a role="button" target="_blank" class="btn btn-primary" href="Archivos/{{$Doc10->imagen}}" target="_self">Ver</a>
                        @endforeach
                      </div>
                      <small class="text-muted"></small>
                    </div>
                  </div>
                </div>
              </div>
              <!-- TEMA 11 -->
              <div class="col">
                <div class="card shadow-sm">
                  <!--<svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>-->
                  <img src="img/Imagen11.jpg" alt="" class="bd-placeholder-img card-img-top" width="100%" height="225">

                  <div class="card-body">
                    <p class="card-text text-center">Procedimiento ante siniestros</p>
                    <div class="d-flex justify-content-between align-items-center">
                      <div class="btn-group">
                        @foreach ($pdfDoc11 as $Doc11)
                          <a role="button" target="_blank" class="btn btn-primary" href="Archivos/{{$Doc11->imagen}}" target="_self">Ver</a>
                        @endforeach
                      </div>
                      <small class="text-muted"></small>
                    </div>
                  </div>
                </div>
              </div>
              <!-- TEMA 12 -->
              <div class="col">
                <div class="card shadow-sm">
                  <!--<svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>-->
                  <img src="img/Imagen12.jpg" alt="" class="bd-placeholder-img card-img-top" width="100%" height="225">

                  <div class="card-body">
                    <p class="card-text text-center">Solicitud Personal</p>
                    <div class="d-flex justify-content-between align-items-center">
                      <div class="btn-group">
                        @foreach ($pdfDoc12 as $Doc12)
                          <a role="button" target="_blank" class="btn btn-primary" href="Archivos/{{$Doc12->imagen}}" target="_self">Ver</a>
                        @endforeach
                      </div>
                      <small class="text-muted"></small>
                    </div>
                  </div>
                </div>
              </div>
              <!-- TEMA 13 -->
              <div class="col">
                <div class="card shadow-sm">
                  <!--<svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>-->
                  <img src="img/Imagen86.jpg" alt="" class="bd-placeholder-img card-img-top" width="100%" height="225">

                  <div class="card-body">
                    <p class="card-text text-center">Licencias Médicas</p>
                    <div class="d-flex justify-content-between align-items-center">
                      <div class="btn-group">
                        @foreach ($pdfDoc13 as $Doc13)
                          <a role="button" target="_blank" class="btn btn-primary" href="Archivos/{{$Doc13->imagen}}" target="_self">Ver</a>
                        @endforeach
                      </div>
                      <small class="text-muted"></small>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
</main>

@include('includes.footer')

@endsection