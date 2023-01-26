@extends('layouts.app')

@section('titulo','USAE Irapuato')
@section('css')

@endsection

@section('content')

<div class="container">
    <div id="login" class="signin-card">
        <div class="logo-image">
            <center><img src="img/Imagen15.png" class="img-fluid" alt="..." width="65"></center>
        </div>
        <center><h1 class="display1">USAE Irapuato</h1></center>
        <center><p class="subhead">{{ __('Iniciar Sesión') }}</p></center>
        <form method="POST" action="{{ route('login') }}" class="" role="form">
        @csrf
        <div id="form-login-username" class="form-group">
            <label for="email" class="float-label">{{ __('Correo Electronico') }}</label>
            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror               
        </div>
        <div id="form-login-password" class="form-group">
            <label for="password" class="float-label">{{ __('Contraseña') }}</label>
            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
            @error('password')
                <span class="invalid-feedback" role="alert">
                    <strong>{{ $message }}</strong>
                </span>
            @enderror
        </div>
        <div id="form-login-remember" class="form-group">
            <div class="checkbox checkbox-default">       
                <input class="" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                <label class="" for="remember">
                    {{ __('Recordar Contraseña') }}
                </label>    
            </div>
        </div>
        <div>
            <button class="btn btn-block btn-info ripple-effect" type="submit" name="Submit" alt="sign in">{{ __('Acceder') }}</button>
            @if (Route::has('password.request'))
                <center><a class="btn btn-link" href="{{ route('password.request') }}">
                    {{ __('Olvidaste tu contraseña') }}
                </a></center>
            @endif
	    </div>
    </div>
    </div>
  </form>
</div>
</div>

@endsection
