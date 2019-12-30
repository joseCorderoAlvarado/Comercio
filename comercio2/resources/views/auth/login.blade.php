@extends('layouts.app')
@section('content')
<div class="container-fluid">
    <div id="login-page" class="row">
        <div class="col s0 m2 l2 xl4"></div>
         <div class="col s12 m8 l8 xl4 z-depth-4 card-panel">
         <h5 align="center">!Hola¡ para seguir, ingresa tu Correo eléctronico y contraseña</h5>
           <form class="login-form" method="POST" action="{{ route('login') }}">
            @csrf
             <div class="row margin">
               <div class="input-field col s12">
                 <i class="material-icons prefix light-blue-text text-darken-4">account_box</i>
                 <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                 <label for="email" class=" light-blue-text text-darken-4 center-align" ><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Correo eléctronico</font></font></label>
                 @error('email')
                 <span  class="invalid-feedback" role="alert">
                     <strong>{{ $message }}</strong>
                 </span>
             @enderror
               </div>
             </div>
             <div class="row margin">
               <div class="input-field col s12">
                 <i class="material-icons prefix light-blue-text text-darken-4">lock</i>
                 <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                 <label for="password" class="light-blue-text text-darken-4"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Contraseña</font></font></label>
                 @error('password')
                  <span class="invalid-feedback" role="alert">
                  <strong>{{ $message }}</strong>
                  </span>
                 @enderror
               </div>
             </div>
             <div class="row">          
               <div class="input-field col s12 m12 l12  login-text">
             <label>
               <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }} /> 
               <span>Recuerdame</span>
           </label>  
               </div>
             </div>
             <div class="row">
               <div class="input-field col s12">
                 <button type="submit" class="btn waves-effect waves-light  light-blue darken-4 col s12"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Iniciar sesión</font></font></a>
               </div>
             </div>
             <div class="row">
               <div class="input-field col s6 m6 l6">
                 <p class="margin medium-small"><a href="{{ route('register') }}" class="light-blue-text text-darken-4"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">¡Regístrate ahora!</font></font></a></p>
               </div>
               <div class="input-field col s6 m6 l6">
                   <p class="margin right-align medium-small"><a href="page-forgot-password.html" class="light-blue-text text-darken-4"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">¿Se te olvidó tu contraseña?</font></font></a></p>
               </div>          
             </div>
           </form>
         </div>
         <div class="col s0 m2 l2 xl4"></div>
       </div>
@endsection
@section('footer')
@endsection