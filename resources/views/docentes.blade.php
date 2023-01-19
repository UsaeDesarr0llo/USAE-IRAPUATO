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
        <h1 class="text-white">UNIDAD DE SERVICIOS DE APOYO A LA  EDUCACIÓN.</h1> <br>
        <h2 class="text-white">IRAPUATO</h2>
        <p class="lead text-muted">Delagación Regional de Educacion IV Irapuato</p>
        <h3 class="text-white">Docentes</h3>
        
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
            
            <img src="img/Imagen16.jpg" alt=""class="bd-placeholder-img card-img-top" width="100%" height="225">

            <div class="card-body"> 
              <p class="card-text text-center">Credencial Institucional</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <a role="button" class="btn btn-primary"href="pdf/Credencial.pdf" target="_self">Ver</a>
                  
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
            <img src="img/Imagen17.jpg" alt=""class="bd-placeholder-img card-img-top" width="100%" height="225">


            <div class="card-body">
              <p class="card-text text-center">Cuenta de Correo Electrónico Institucional</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <a role ="button" class="btn btn-primary"href="pdf/CuentaCorreo.pdf" target="_self">Ver</a>
                  
                </div>
                <small class="text-muted"></small>
              </div>
            </div>
          </div>
        </div>
        <!-- TEMA IMPLEMENTADO CON MODAL TEMAS EN PLAZA ESTATAL Y FEDERAL -->
        <div class="col">
          <div class="card shadow-sm">
            <!--<svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>-->
            
            <img src="img/Imagen18.jpg" alt=""class="bd-placeholder-img card-img-top" width="100%" height="225">

            <div class="card-body">
              <p class="card-text text-center">Prestaciones</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  
                  <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Ver
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Prestaciones</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <div class="row row-cols-1 row-cols-sm-2">
        <div class="col">
          <div class="card shadow-sm">
            <!--<svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>-->
            
            
            <img src="img/Imagen19.jpg" alt=""class="bd-placeholder-img card-img-top" width="100%" height="225">
            <div class="card-body">
              <p class="card-text text-center">Plaza Estatal</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <a role ="button" class="btn btn-primary"href="/plazaEstatal" target="_self">Ver</a>
                  
                  
                </div>
                <small class="text-muted"></small>
              </div>
            </div>
          </div>
        </div>

        <div class="col">
          <div class="card shadow-sm">
            <!--<svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>-->
            
            
            <img src="img/Imagen20.jpg" alt=""class="bd-placeholder-img card-img-top" width="100%" height="225">
            <div class="card-body">
              <p class="card-text text-center">Plaza Federal</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <a role ="button" class="btn btn-primary"href="/plazaFederal" target="_self">Ver</a>
                  
                  
                </div>
                <small class="text-muted"></small>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        
      </div>
    </div>
  </div>
</div>
</div>
                  
                </div>
                <small class="text-muted"></small>
              </div>
            </div>
          </div>
        </div>
        <!-- TEMA 4 IMPLEMENTADO CON MODAL -->

        <div class="col">
          <div class="card shadow-sm">
            <!--<svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>-->
            
            
            <img src="img/Imagen38.jpg" alt=""class="bd-placeholder-img card-img-top" width="100%" height="225">
            <div class="card-body">
              <p class="card-text text-center">Sistema Para la Carrera de las Mtras y Mtros</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <!-- Button trigger modal -->
<button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModa2">
  Ver
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModa2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Sistema Para la Carrera de las Mtras y Mtros</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <!-- TEMA 4 -->
        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
          <div class="col">
            <div class="card shadow-sm">
              <!--<svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>-->
              
              
              <img src="img/Imagen37.jpg" alt=""class="bd-placeholder-img card-img-top" width="100%" height="225">
              <div class="card-body">
                <p class="card-text text-center">Admisión</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <a role ="button" class="btn btn-primary"href="pdf/admisión.pdf" target="_self">Ver</a>
                    
                    
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
              
              
              <img src="img/Imagen39.jpg" alt=""class="bd-placeholder-img card-img-top" width="100%" height="225">
              <div class="card-body">
                <p class="card-text text-center">Promoción</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <a role ="button" class="btn btn-primary"href="pdf/promoción.pdf" target="_self">Ver</a>
                    
                    
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
              
              
              <img src="img/Imagen40.jpg" alt=""class="bd-placeholder-img card-img-top" width="100%" height="225">
              <div class="card-body">
                <p class="card-text text-center">Reconocimiento</p>
                <div class="d-flex justify-content-between align-items-center">
                  <div class="btn-group">
                    <a role ="button" class="btn btn-primary"href="pdf/reconocimiento.pdf" target="_self">Ver</a>
                    
                    
                  </div>
                  <small class="text-muted"></small>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
        
      </div>
    </div>
  </div>
</div>

                  
                  
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
            <img src="img/Imagen41.jpg" alt=""class="bd-placeholder-img card-img-top" width="100%" height="225">
            

            <div class="card-body">
              <p class="card-text text-center">Tutorías</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                    <a role ="button" class="btn btn-primary"href="pdf/tutorias.pdf" target="_self">Ver</a>
                  
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
            <img src="img/Imagen42.jpg" alt=""class="bd-placeholder-img card-img-top" width="100%" height="225">

            <div class="card-body">
              <p class="card-text text-center">Avisos Importantes</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group">
                  <a role ="button" class="btn btn-primary"href="pdf/Avisos importantes.pdf" target="_self">Ver</a>
                  
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