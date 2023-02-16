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
            
            <img src="img/Imagen63.jpg" alt=""class="bd-placeholder-img card-img-top" width="100%" height="225">

            <div class="card-body"> 
              <p class="card-text text-center">SEGURIDAD SOCIAL Y SERVICIO MÉDICO</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  @foreach ($pdfDo1 as $doc1)
                    <a role="button" target="_blank" class="btn btn-primary" href="Archivos/{{$doc1->pdf}}" target="_self">Ver</a>
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
            <img src="img/Imagen64.jpg" alt=""class="bd-placeholder-img card-img-top" width="100%" height="225">


            <div class="card-body">
              <p class="card-text text-center">PENSIÓN Y RETIRO</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  @foreach ($pdfDo2 as $doc2)
                    <a role="button" target="_blank" class="btn btn-primary" href="Archivos/{{$doc2->pdf}}" target="_self">Ver</a>
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
              <img src="img/Imagen65.jpg" alt=""class="bd-placeholder-img card-img-top" width="100%" height="225">
  
  
              <div class="card-body">
                <p class="card-text text-center">Ahorro Solidario</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    @foreach ($pdfDo3 as $doc3)
                      <a role="button" target="_blank" class="btn btn-primary" href="Archivos/{{$doc3->pdf}}" target="_self">Ver</a>
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
              <img src="img/Imagen66.jpg" alt=""class="bd-placeholder-img card-img-top" width="100%" height="225">
  
  
              <div class="card-body">
                <p class="card-text text-center">Forte</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    @foreach ($pdfDo4 as $doc4)
                      <a role="button" target="_blank" class="btn btn-primary" href="Archivos/{{$doc4->pdf}}" target="_self">Ver</a>
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
              <img src="img/Imagen67.jpg" alt=""class="bd-placeholder-img card-img-top" width="100%" height="225">
  
  
              <div class="card-body">
                <p class="card-text text-center">Seguro de Vida METLIFE</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    @foreach ($pdfDo5 as $doc5)
                      <a role="button" target="_blank" class="btn btn-primary" href="Archivos/{{$doc5->pdf}}" target="_self">Ver</a>
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
              <img src="img/Imagen68.jpg" alt=""class="bd-placeholder-img card-img-top" width="100%" height="225">
  
  
              <div class="card-body">
                <p class="card-text text-center">Préstamos Personales</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    @foreach ($pdfDo6 as $doc6)
                      <a role="button" target="_blank" class="btn btn-primary" href="Archivos/{{$doc6->pdf}}" target="_self">Ver</a>
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
              <img src="img/Imagen32.jpg" alt=""class="bd-placeholder-img card-img-top" width="100%" height="225">
  
  
              <div class="card-body">
                <p class="card-text text-center">Designación de Beneficiarios</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    @foreach ($pdfDo7 as $doc7)
                      <a role="button" target="_blank" class="btn btn-primary" href="Archivos/{{$doc7->pdf}}" target="_self">Ver</a>
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
              <img src="img/Imagen69.jpg" alt=""class="bd-placeholder-img card-img-top" width="100%" height="225">
  
  
              <div class="card-body">
                <p class="card-text text-center">Nómina Electrónica</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    @foreach ($pdfDo8 as $doc8)
                      <a role="button" target="_blank" class="btn btn-primary" href="Archivos/{{$doc8->pdf}}" target="_self">Ver</a>
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
              <img src="img/Imagen70.jpg" alt=""class="bd-placeholder-img card-img-top" width="100%" height="225">
  
  
              <div class="card-body">
                <p class="card-text text-center">DÍAS DE DESCANSO</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    @foreach ($pdfDo9 as $doc9)
                      <a role="button" target="_blank" class="btn btn-primary" href="Archivos/{{$doc9->pdf}}" target="_self">Ver</a>
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
              <img src="img/Imagen71.jpg" alt=""class="bd-placeholder-img card-img-top" width="100%" height="225">
  
  
              <div class="card-body">
                <p class="card-text text-center">Permisos</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    @foreach ($pdfDo10 as $doc10)
                      <a role="button" target="_blank" class="btn btn-primary" href="Archivos/{{$doc10->pdf}}" target="_self">Ver</a>
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
              <img src="img/Imagen72.jpg" alt=""class="bd-placeholder-img card-img-top" width="100%" height="225">
  
  
              <div class="card-body">
                <p class="card-text text-center">Salarios y Descansos</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    @foreach ($pdfDo11 as $doc11)
                      <a role="button" target="_blank" class="btn btn-primary" href="Archivos/{{$doc11->pdf}}" target="_self">Ver</a>
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
            
            <img src="img/Imagen73.jpg" alt=""class="bd-placeholder-img card-img-top" width="100%" height="225">

            <div class="card-body">
              <p class="card-text text-center">Vacaciones y Aguinaldo</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  @foreach ($pdfDo12 as $doc12)
                    <a role="button" target="_blank" class="btn btn-primary" href="Archivos/{{$doc12->pdf}}" target="_self">Ver</a>
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