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
            
            <img src="img/Imagen21.jpg" alt=""class="bd-placeholder-img card-img-top" width="100%" height="225">

            <div class="card-body"> 
              <p class="card-text text-center">SERVICIO MÉDICO ISSSTE</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  @foreach ($pdfE1 as $pdf)
                  <a role="button" target="_blank" class="btn btn-primary" href="Archivos/{{$pdf->imagen}}" target="_self">Ver</a>
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
            <img src="img/Imagen22.jpg" alt=""class="bd-placeholder-img card-img-top" width="100%" height="225">


            <div class="card-body">
              <p class="card-text text-center">ISSEG</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  @foreach ($pdfE2 as $pdf1)
                  <a role="button" target="_blank" class="btn btn-primary" href="Archivos/{{$pdf1->imagen}}" target="_self">Ver</a>
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
              <img src="img/Imagen23.jpg" alt=""class="bd-placeholder-img card-img-top" width="100%" height="225">
  
  
              <div class="card-body">
                <p class="card-text text-center">FORTE</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                  @foreach ($pdfE3 as $pdf2)
                  <a role="button" target="_blank" class="btn btn-primary" href="Archivos/{{$pdf2->imagen}}" target="_self">Ver</a>
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
              <img src="img/Imagen24.jpg" alt=""class="bd-placeholder-img card-img-top" width="100%" height="225">
  
  
              <div class="card-body">
                <p class="card-text text-center">PRÉSTAMOS PERSONALES</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                  @foreach ($pdfE4 as $pdf3)
                  <a role="button" target="_blank" class="btn btn-primary" href="Archivos/{{$pdf3->imagen}}" target="_self">Ver</a>
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
              <img src="img/Imagen25.jpg" alt=""class="bd-placeholder-img card-img-top" width="100%" height="225">
  
  
              <div class="card-body">
                <p class="card-text text-center">DESIGNACIÓN DE BENEFICIARIOS</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                  @foreach ($pdfE5 as $pdf4)
                  <a role="button" target="_blank" class="btn btn-primary" href="Archivos/{{$pdf4->imagen}}" target="_self">Ver</a>
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
              <img src="img/Imagen26.jpg" alt=""class="bd-placeholder-img card-img-top" width="100%" height="225">
  
  
              <div class="card-body">
                <p class="card-text text-center">NÓMINA ELECTRÓNICA</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                  @foreach ($pdfE6 as $pdf5)
                  <a role="button" target="_blank" class="btn btn-primary" href="Archivos/{{$pdf5->imagen}}" target="_self">Ver</a>
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
            
            <img src="img/Imagen27.jpg" alt=""class="bd-placeholder-img card-img-top" width="100%" height="225">

            <div class="card-body">
              <p class="card-text text-center">VACACIONES Y AGUINALDO</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  @foreach ($pdfE7 as $pdf6)
                  <a role="button" target="_blank" class="btn btn-primary" href="Archivos/{{$pdf6->imagen}}" target="_self">Ver</a>
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