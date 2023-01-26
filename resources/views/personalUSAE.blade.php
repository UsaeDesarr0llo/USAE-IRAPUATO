@extends('layout')

@section('titulo','USAE Irapuato')
@section('css')

@endsection

@section('content')

@include('includes.navbar')
<!-- CUERPO INFORMACIÓN USAE -->
<main>

  <section class="text-center">
    <div class="navbar navbar-dark bg-dark">
      <div class="col-md-8 mx-auto">
        <h1 class="text-white">DELEGACIÓN REGIONAL IV IRAPUATO.</h1>
        <h2 class="text-muted">USAE IRAPUATO</h2> <br>
        <h3 class="text-white">DIRECTORIO</h3>
        <p class="lead text-muted fs-4">CATÁLOGO DIGITAL DE TRÁMITES Y SERVICIOS 2022</p>
        <p>
          <!--<a href="#" class="btn btn-primary my-2">botton</a>
          <a href="#" class="btn btn-secondary my-2">botton</a> -->
          
        </p>
      </div>
    </div>
  </section>
<!-- CAMPO 1 -->
  <div class="album py-5 bg-light" id="abajo">
    <div class="container">

      <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
        <div class="col">
          <div class="card shadow-sm">
            <!--<svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/>im<text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>-->
            
            <img src="img/Imagen78.jpg" alt=""class="bd-placeholder-img card-img-top" width="100%" height="225">

            <div class="card-body"> 
              <p class="card-text fs-5 fw-bold text-center">María Guadalupe Padilla Macías</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group text-center mx-auto">
                  <!-- Button trigger modal -->
<button type="button" class="btn btn-primary position-relative top-100 start-50 translate-middle mt-3" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Consultar
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Jefatura</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <img src="img/Imagne87.jpg" class="img-fluid text-center" alt="" width="900">
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
        <!-- CAMPO 2 -->
        <div class="col">
          <div class="card shadow-sm">
            <!--<svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>-->
            <img src="img/Imagen79.jpg" alt=""class="bd-placeholder-img card-img-top" width="100%" height="225">


            <div class="card-body">
              <p class="card-text fs-5 fw-bold text-center"> Abelardo Zamora Olmos</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group position-relative top-100 start-50 translate-middle mt-3">
                  <a role ="button" class="btn btn-primary"href="/AI" target="_self">Consultar</a>
                  
                </div>
                <small class="text-muted"></small>
              </div>
            </div>
          </div>
        </div>
        <!-- CAMPO 3 -->
        <div class="col">
          <div class="card shadow-sm">
            <!--<svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>-->
            
            <img src="img/Imagen80.jpg" alt=""class="bd-placeholder-img card-img-top" width="100%" height="225">

            <div class="card-body">
              <p class="card-text fs-5 fw-bold text-center">Luis Gerardo González Vela</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group position-relative top-100 start-50 translate-middle mt-3">
                  <a role ="button" class="btn btn-primary"href="/EA" target="_self">Consultar</a>
                  
                </div>
                <small class="text-muted"></small>
              </div>
            </div>
          </div>
        </div>
        <!-- CAMPO 4 -->

        <div class="col">
          <div class="card shadow-sm">
            <!--<svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>-->
            
            
            <img src="img/Imagen81.jpg" alt=""class="bd-placeholder-img card-img-top" width="100%" height="225">
            <div class="card-body">
              <p class="card-text fs-5 fw-bold text-center"> Ramiro Dimas Castillo</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group position-relative top-100 start-50 translate-middle mt-3">
                  <a role ="button" class="btn btn-primary"href="/INF" target="_self">Consultar</a>
                  
                  
                </div>
                <small class="text-muted"></small>
              </div>
            </div>
          </div>
        </div>
        <!-- CAMPO 5 -->
        <div class="col">
          <div class="card shadow-sm">
            <!--<svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>-->
            <img src="img/Imagen82.jpg" alt=""class="bd-placeholder-img card-img-top" width="100%" height="225">
            

            <div class="card-body">
              <p class="card-text fs-5 fw-bold text-center">Silvia Paulina Padilla Morales</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group text-center mx-auto">
                   <!-- Button trigger modal -->
<button type="button" class="btn btn-primary position-relative top-100 start-50 translate-middle mt-3" data-bs-toggle="modal" data-bs-target="#exampleModa2">
  Consultar
</button>

<!-- Modal -->
<div class="modal fade" id="exampleModa2" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-xl">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Mejora de procesos</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <img src="img/Imagen88.jpg" class="img-fluid text-center" alt="" width="900">
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
        <!-- CAMPO 6 -->
        <div class="col">
          <div class="card shadow-sm">
            <!--<svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>-->
            <img src="img/Imagen83.jpg" alt=""class="bd-placeholder-img card-img-top" width="100%" height="225">

            <div class="card-body">
              <p class="card-text fs-5 fw-bold text-center">María Guadalupe Ávalos Sotomayor</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group position-relative top-100 start-50 translate-middle mt-3">
                    <a role ="button" class="btn btn-primary"href="/PL" target="_self">Consultar</a>
                  
                </div>
                <small class="text-muted"></small>
              </div>
            </div>
          </div>
        </div>
        <!-- CAMPO 7 -->

        <div class="col">
          <div class="card shadow-sm">
            <!--<svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>-->
            <img src="img/Imagen84.jpg" alt=""class="bd-placeholder-img card-img-top" width="100%" height="225">

            <div class="card-body">
              <p class="card-text fs-5 fw-bold text-center">Víctor Villela Villavicencio</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group position-relative top-100 start-50 translate-middle mt-3">
                    <a role ="button" class="btn btn-primary"href="/PDPD" target="_self">Consultar</a>
                  
                </div>
                <small class="text-muted"></small>
              </div>
            </div>
          </div>
        </div>
        <!-- CAMPO 8 -->
        
        <div class="col">
          <div class="card shadow-sm">
            <!--<svg class="bd-placeholder-img card-img-top" width="100%" height="225" xmlns="http://www.w3.org/2000/svg" role="img" aria-label="Placeholder: Thumbnail" preserveAspectRatio="xMidYMid slice" focusable="false"><title>Placeholder</title><rect width="100%" height="100%" fill="#55595c"/><text x="50%" y="50%" fill="#eceeef" dy=".3em">Thumbnail</text></svg>-->
            <img src="img/Imagen85.jpg" alt=""class="bd-placeholder-img card-img-top" width="100%" height="225">

            <div class="card-body">
              <p class="card-text fs-5 fw-bold text-center"> Ana María Vaca Mosqueda</p>
              <div class="d-flex justify-content-between align-items-center">
                <div class="btn-group position-relative top-100 start-50 translate-middle mt-3">
                  <a role ="button" class="btn btn-primary"href="/SP" target="_self">Consultar</a>
                  
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