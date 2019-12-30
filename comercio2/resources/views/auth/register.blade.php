@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div id="register-page" class="row">
    <div class="col s0 m3 l3 xl3"></div>
    <div class="col s12 m6 l6 xl6">
        <div class="col s12 z-depth-6 card-panel">
        <h4 align="center"> Completa tus datos</h4>
            <form class="register-form" method="POST" action="{{ route('register') }}">
             @csrf            
            <div class="row margin">
                  <div class="input-field col s12">
                    <i class="material-icons prefix light-blue-text text-darken-4">account_box</i>
                    <input id="name" type="text" class="form-control  light-blue-text text-darken-4 @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>
                    <label for="icon_prefix1" class="light-blue-text text-darken-4">Nombre Completo</label>
                    @error('name')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                    @enderror
                  </div>
            </div>
                <div class="row margin">
                    <div class="input-field col s12">
                        <i class="material-icons prefix light-blue-text text-darken-4">email</i>
                        <input id="email" type="email" class="form-control light-blue-text text-darken-4 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">
                        <label for="user_email" class="center-align  light-blue-text text-darken-4">Correo eléctronico</label>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                    </div>
                </div>
                <div class="row margin">
                    <div class="input-field col s12">
                        <i class="material-icons prefix light-blue-text text-darken-4">lock</i>
                        <input id="password" type="password" class="form-control light-blue-text text-darken-4 @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                        <label for="user_passw" class=" light-blue-text text-darken-4">Contraseña</label>
                        @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                        @enderror
                    </div>
                </div>
                <div class="row margin">
                    <div class="input-field col s12">
                        <i class="material-icons prefix light-blue-text text-darken-4">lock</i>
                        <input id="password-confirm" type="password" class="form-control light-blue-text text-darken-4 " name="password_confirmation" required autocomplete="new-password">
                        <label for="user_passw" class=" light-blue-text text-darken-4">repite la contraseña</label>
                    </div>
                </div>
                <div class="row margin center">
                    <div class="input-field col s12 margin center medium-small sign-up">
                        <button type="submit"  class=" btn waves-effect waves-light col s12 light-blue darken-4">Crear cuenta</a>
                    </div>
                    <div class="input-field col s12">
                        <p class="margin center medium-small sign-up">¿Ya tienes una cuenta? <a href="{{ url('login')}}">Inicia sesión</a></p>
                    </div>
                </div>
            </form>
    </div>
    </div>
    <div class="col s0 m3 l3 xl3"></div>
    </div>
@endsection
@section('footer')
@endsection