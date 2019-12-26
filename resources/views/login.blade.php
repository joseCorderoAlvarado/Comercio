@include('layouts.plantilla')
@include('layouts.menunavegacion')
<div id="login-page" class="row">
   <div class="col s0 m2 l2 xl4"></div>
    <div class="col s12 m8 l8 xl4 z-depth-4 card-panel">
	<h5 align="center">!Hola¡ para seguir, ingresa tu Correo eléctronico y contraseña</h5>
      <form class="login-form">
        <div class="row margin">
          <div class="input-field col s12">
            <i class="material-icons prefix light-blue-text text-darken-4">account_box</i>
            <input id="username" type="text">
            <label for="username" class=" light-blue-text text-darken-4 center-align" ><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Nombre de usuario</font></font></label>
          </div>
        </div>
        <div class="row margin">
          <div class="input-field col s12">
            <i class="material-icons prefix light-blue-text text-darken-4">lock</i>
            <input id="password" type="password">
            <label for="password" class="light-blue-text text-darken-4"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Contraseña</font></font></label>
          </div>
        </div>
        <div class="row">          
          <div class="input-field col s12 m12 l12  login-text">
		<label>
		  <input type="checkbox" id="remember-me" /> 
          <span>Recuerdame</span>
      </label>  
          </div>
        </div>
        <div class="row">
          <div class="input-field col s12">
            <a href="index.html" class="btn waves-effect waves-light  light-blue darken-4 col s12"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">Iniciar sesión</font></font></a>
          </div>
        </div>
        <div class="row">
          <div class="input-field col s6 m6 l6">
            <p class="margin medium-small"><a href="{{ url('registro')}}" class="light-blue-text text-darken-4"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">¡Regístrate ahora!</font></font></a></p>
          </div>
          <div class="input-field col s6 m6 l6">
              <p class="margin right-align medium-small"><a href="page-forgot-password.html" class="light-blue-text text-darken-4"><font style="vertical-align: inherit;"><font style="vertical-align: inherit;">¿Se te olvidó tu contraseña?</font></font></a></p>
          </div>          
        </div>
      </form>
    </div>
	<div class="col s0 m2 l2 xl4"></div>
  </div>
@include('layouts.footer')
