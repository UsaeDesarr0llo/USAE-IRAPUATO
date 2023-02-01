<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>@yield('titulo')</title>
    <link href="{{ asset('css/layout.css') }}" rel="stylesheet">      
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css" rel="stylesheet">
    <link rel="shortcut icon" href="/img/Imagen15.png" type="image/x.icon">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous">
    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/album/">

    <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }

      /* -- import Bootstrap v3 ----------------------------- */
      @import "//maxcdn.bootstrapcdn.com/bootstrap/3.2.0/css/bootstrap.min.css";

      /* -- import Roboto Font ------------------------------ */
      @import "//fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic&subset=latin,cyrillic";

      /* -- body styles ------------------------------------- */

      body {
        font-family: "Roboto", 'Helvetica Neue, Helvetica, Arial', sans-serif; 
        background: #0277bd; // Light Blue 800
      }

      /* -- button styles ------------------------------------- */
      // imported from https://codepen.io/zavoloklom/pen/Gubja

      /*-- signin-card animation ---------------------------------------- */
      .signin-card {
      -webkit-animation: cardEnter 0.75s ease-in-out 0.5s;
      animation: cardEnter 0.75s ease-in-out 0.5s;
      -webkit-animation-fill-mode: both;
      animation-fill-mode: both;
      opacity: 0;
      }

      /* -- login paper styles ------------------------------ */
      .signin-card {
      max-width: 350px;
      border-radius: 2px;
      margin: 20px auto;
      padding: 20px;   
      background-color: #eceff1; // Blue Grey 50
      box-shadow: 0 10px 20px rgba(0, 0, 0, .19),
      0 6px 6px rgba(0, 0, 0, .23); // shadow depth 3
      }

      .signin-card { 
      .logo-image, h1, p {
      text-align: center;
      }    
      }

      /* -- font styles ------------------------------------- */
      .display1 {
        font-size: 28px;
        font-weight: 100;
        line-height: 1.2;
        color: #757575;
        text-transform: inherit;
        letter-spacing: inherit;
      }

      .subhead {
        font-size: 16px;
        font-weight: 300;
        line-height: 1.1;
        color: #212121;
        text-transform: inherit;
        letter-spacing: inherit;
      }

      /* card animation from Animate.css -------------------- */
      @-webkit-keyframes cardEnter {
        0%, 20%, 40%, 60%, 80%, 100% {
          -webkit-transition-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
          transition-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
        }
        0% {
          opacity: 0;
          -webkit-transform: scale3d(0.3, 0.3, 0.3);
          -ms-transform: scale3d(0.3, 0.3, 0.3);
          transform: scale3d(0.3, 0.3, 0.3);
        }
        20% {
          -webkit-transform: scale3d(1.1, 1.1, 1.1);
          -ms-transform: scale3d(1.1, 1.1, 1.1);
          transform: scale3d(1.1, 1.1, 1.1);
        }
        40% {
          -webkit-transform: scale3d(0.9, 0.9, 0.9);
          -ms-transform: scale3d(0.9, 0.9, 0.9);
          transform: scale3d(0.9, 0.9, 0.9);
        }
        60% {
          opacity: 1;
          -webkit-transform: scale3d(1.03, 1.03, 1.03);
          -ms-transform: scale3d(1.03, 1.03, 1.03);
          transform: scale3d(1.03, 1.03, 1.03);
        }
        80% {
          -webkit-transform: scale3d(0.97, 0.97, 0.97);
          -ms-transform: scale3d(0.97, 0.97, 0.97);
          transform: scale3d(0.97, 0.97, 0.97);
        }
        100% {
          opacity: 1;
          -webkit-transform: scale3d(1, 1, 1);
          -ms-transform: scale3d(1, 1, 1);
          transform: scale3d(1, 1, 1);
        }
      }
      @keyframes cardEnter {
        0%, 20%, 40%, 60%, 80%, 100% {
          -webkit-transition-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
          transition-timing-function: cubic-bezier(0.215, 0.61, 0.355, 1);
        }
        0% {
          opacity: 0;
          -webkit-transform: scale3d(0.3, 0.3, 0.3);
          -ms-transform: scale3d(0.3, 0.3, 0.3);
          transform: scale3d(0.3, 0.3, 0.3);
        }
        20% {
          -webkit-transform: scale3d(1.1, 1.1, 1.1);
          -ms-transform: scale3d(1.1, 1.1, 1.1);
          transform: scale3d(1.1, 1.1, 1.1);
        }
        40% {
          -webkit-transform: scale3d(0.9, 0.9, 0.9);
          -ms-transform: scale3d(0.9, 0.9, 0.9);
          transform: scale3d(0.9, 0.9, 0.9);
        }
        60% {
          opacity: 1;
          -webkit-transform: scale3d(1.03, 1.03, 1.03);
          -ms-transform: scale3d(1.03, 1.03, 1.03);
          transform: scale3d(1.03, 1.03, 1.03);
        }
        80% {
          -webkit-transform: scale3d(0.97, 0.97, 0.97);
          -ms-transform: scale3d(0.97, 0.97, 0.97);
          transform: scale3d(0.97, 0.97, 0.97);
        }
        100% {
          opacity: 1;
          -webkit-transform: scale3d(1, 1, 1);
          -ms-transform: scale3d(1, 1, 1);
          transform: scale3d(1, 1, 1);
        }
      }
      .hasImage:hover section {
        background-color: rgba(5, 5, 5, 0.4);
      }
      .hasImage:hover button:hover {
        background: rgba(5, 5, 5, 0.45);
      }

      #overlay p,
      i {
        opacity: 0;
      }

      #overlay.draggedover {
        background-color: rgba(255, 255, 255, 0.7);
      }
      #overlay.draggedover p,
      #overlay.draggedover i {
        opacity: 1;
      }

      .group:hover .group-hover\:text-blue-800 {
        color: #2b6cb0;
      }
    </style>

    @yield('css')
    @yield('script')
    
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'USAEIrapuato') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
</head>
<body>
<header>
  <div class="collapse bg-dark" id="navbarHeader">
    <div class="container">
      <div class="row">
        <div class="col-sm-8 col-md-7 py-4">
          <h4 class="text-white text-center">USAE IRAPUATO</h4>
          <p class="text-muted text-center">La USAE es una Unidad Administrativa de la Secretaría de Educación de Guanajuato, SEG dependiente del Gobierno del Estado de Guanajuato, con función de enlace administrativo en el municipio de Irapuato. Encargada de atender a la comunidad educativa de educación básica del municipio de Irapuato.
          </p>
        </div>
        <div class="col-sm-4 offset-md-1 py-4">
          <h4 class="text-white text-center">CONTÁCTANOS</h4>
          <ul class="list-unstyled text-center">
            <li><a href="mailto:modulousaeirapuato@seg.guanajuato.gob.mx" class="text-white btn"><svg xmlns="http://www.w3.org/2000/svg" width="50" height="30" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
              <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z"/>
            </svg></a></li>
            <i class="bi bi-envelope"></i>
            <li><a href="tel:+52462 6074500" class="text-white btn"><svg xmlns="http://www.w3.org/2000/svg" width="50" height="30" fill="currentColor" class="bi bi-telephone" viewBox="0 0 16 16">
              <path d="M3.654 1.328a.678.678 0 0 0-1.015-.063L1.605 2.3c-.483.484-.661 1.169-.45 1.77a17.568 17.568 0 0 0 4.168 6.608 17.569 17.569 0 0 0 6.608 4.168c.601.211 1.286.033 1.77-.45l1.034-1.034a.678.678 0 0 0-.063-1.015l-2.307-1.794a.678.678 0 0 0-.58-.122l-2.19.547a1.745 1.745 0 0 1-1.657-.459L5.482 8.062a1.745 1.745 0 0 1-.46-1.657l.548-2.19a.678.678 0 0 0-.122-.58L3.654 1.328zM1.884.511a1.745 1.745 0 0 1 2.612.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
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
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="90" fill="none" stroke="" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" aria-hidden="true" class="me-2" viewBox="0 0 24 24"><path d="M23 19a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2h4l2-3h6l2 3h4a2 2 0 0 1 2 2z"/><circle cx="12" cy="13" r="4"/></svg>
        <p class="float-end mb-1">
        <img src="img/Imagen15.png" class="img-fluid" alt="..." width="65">
        </p>
        <p class="float-end mb-1">
          <img src="img/Imagen90.png" class="img-fluid" alt="750" width="630">
        </p></a>
        <ul class="navbar navbar-dark bg-primary">
            <!-- Authentication Links -->
            @guest
                @if (Route::has('login'))
                    <a class="navbar-brand" href="{{ url('/') }}">{{ __('Inicio') }}</a>
                @endif
            @else
                <a id="navbarDropdown" class="navbar-brand dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                    {{ Auth::user()->name }}
                </a>
                <div class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ route('welcome') }}">Inicio</a>
                    <a class="dropdown-item" href="{{ route('home') }}">Vista Administrador</a>
                    <a class="dropdown-item" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                        {{ __('Cerrar Sesión') }}
                    </a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                        @csrf
                    </form>
                </div>
                @endguest
        </ul>
    </div>
  </div>
</header>
    <div id="app">
        <main class="py-4">
            @yield('content')
        </main>
    </div>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>
</html>
