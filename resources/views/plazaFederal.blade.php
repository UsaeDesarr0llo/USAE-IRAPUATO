@extends('layout')

@section('titulo','USAE Irapuato')
@section('css')

@endsection

@section('content')

@include('includes.navbar')

<main>

  
<!-- TEMA 1 -->
  <div class="album py-5 bg-light" id="abajo">
    <div class="container">

      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        <div class="col">
          <div class="card shadow-sm">
            <!--<svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/>im<text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>-->
            
            <img src="img/Imagen28.jpg" alt=""class="bd-placeholder-img card-img-top" width="100%" height="225">

            <div class="card-body"> 
              <p class="card-text text-center">SEGURIDAD SOCIAL Y SERVICIO MÉDICO</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  @foreach ($pdfF1 as $p)
                  <a role="button" target="_blank" class="btn btn-primary" href="Archivos/{{$p->imagen}}" target="_self">Ver</a>
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
            <img src="img/Imagen29.jpg" alt=""class="bd-placeholder-img card-img-top" width="100%" height="225">


            <div class="card-body">
              <p class="card-text text-center">PENSIÓN Y RETIRO</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  @foreach ($pdfF2 as $p1)
                  <a role="button" target="_blank" class="btn btn-primary" href="Archivos/{{$p1->imagen}}" target="_self">Ver</a>
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
              <img src="img/Imagen30.jpg" alt=""class="bd-placeholder-img card-img-top" width="100%" height="225">
  
  
              <div class="card-body">
                <p class="card-text text-center">FORTE</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                  @foreach ($pdfF3 as $p2)
                  <a role="button" target="_blank" class="btn btn-primary" href="Archivos/{{$p2->imagen}}" target="_self">Ver</a>
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
              <img src="img/Imagen31.jpg" alt=""class="bd-placeholder-img card-img-top" width="100%" height="225">
  
  
              <div class="card-body">
                <p class="card-text text-center">PRÉSTAMOS PERSONALES</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                  @foreach ($pdfF4 as $p3)
                  <a role="button" target="_blank" class="btn btn-primary" href="Archivos/{{$p3->imagen}}" target="_self">Ver</a>
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
              <img src="img/Imagen32.jpg" alt=""class="bd-placeholder-img card-img-top" width="100%" height="225">
  
  
              <div class="card-body">
                <p class="card-text text-center">DESIGNACIÓN DE BENEFICIARIOS</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                  @foreach ($pdfF5 as $p4)
                  <a role="button" target="_blank" class="btn btn-primary" href="Archivos/{{$p3->imagen}}" target="_self">Ver</a>
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
              <img src="img/Imagen33.jpg" alt=""class="bd-placeholder-img card-img-top" width="100%" height="225">
  
  
              <div class="card-body">
                <p class="card-text text-center">NÓMINA ELECTRÓNICA</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                  @foreach ($pdfF6 as $p5)
                  <a role="button" target="_blank" class="btn btn-primary" href="Archivos/{{$p3->imagen}}" target="_self">Ver</a>
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
              <img src="img/Imagen34.jpg" alt=""class="bd-placeholder-img card-img-top" width="100%" height="225">
  
  
              <div class="card-body">
                <p class="card-text text-center">VACACIONES Y AGUINALDO</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                  @foreach ($pdfF7 as $p6)
                  <a role="button" target="_blank" class="btn btn-primary" href="Archivos/{{$p6->imagen}}" target="_self">Ver</a>
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
              <!--<svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>-->
              <img src="img/Imagen35.jpg" alt=""class="bd-placeholder-img card-img-top" width="100%" height="225">
  
  
              <div class="card-body">
                <p class="card-text text-center">DÍAS DE DESCANSO</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                  @foreach ($pdfF8 as $p7)
                  <a role="button" target="_blank" class="btn btn-primary" href="Archivos/{{$p7->imagen}}" target="_self">Ver</a>
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
            
            <img src="img/Imagen36.jpg" alt=""class="bd-placeholder-img card-img-top" width="100%" height="225">

            <div class="card-body">
              <p class="card-text text-center">SEGURO DE VIDA METTLIFE</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                @foreach ($pdfF9 as $p8)
                  <a role="button" target="_blank" class="btn btn-primary" href="Archivos/{{$p8->imagen}}" target="_self">Ver</a>
                  @endforeach
                </div>
                <small class="text-muted"></small>
              </div>
            </div>
          </div>
        </div>

       

</main>

@include('includes.footer')
@endsection
