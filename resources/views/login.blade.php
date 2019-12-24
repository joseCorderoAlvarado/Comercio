@include('layouts.plantilla')
@include('layouts.menunavegacion')
<div class="container-fluid">
<div id="register-page" class="row">
<div class="col s0 m3 l3 xl3"></div>
<div class="col s12 m6 l6 xl6">
	<div class="col s12 z-depth-6 card-panel">
	<h4 align="center"> Completa tus datos</h4>
		<form class="register-form">        
		<div class="row margin">
              <div class="input-field col s12 m6 l6 xl5">
                <i class="material-icons prefix light-blue-text text-darken-4">account_box</i>
                <input id="icon_prefix1" type="text" class="validate light-blue-text text-darken-4">
                <label for="icon_prefix1" class="light-blue-text text-darken-4">Nombre</label>
              </div>
			 
              <div class="input-field col m6 s12 m6 l6 xl7">
			 <i class=" hide-on-med-and-up material-icons prefix light-blue-text text-darken-4">account_box</i>
                <input id="icon_prefix2" type="text" class="validate light-blue-text text-darken-4">
                <label for="icon_prefix2" class="light-blue-text text-darken-4">Apellidos</label>
              </div>
		</div>
			<div class="row margin">
				<div class="input-field col s12">
					<i class="material-icons prefix light-blue-text text-darken-4">email</i>
					<input id="user_email" type="email" class="validate  light-blue-text text-darken-4">
					<label for="user_email" class="center-align  light-blue-text text-darken-4">Correo eléctronico</label>
				</div>
			</div>
			<div class="row margin">
				<div class="input-field col s12">
					<i class="material-icons prefix light-blue-text text-darken-4">lock</i>
					<input id="user_passw" type="password" class="validate  light-blue-text text-darken-4">
					<label for="user_passw" class=" light-blue-text text-darken-4">Contraseña</label>
				</div>
			</div>
			<div class="row margin center">
				<div class="input-field col s12 margin center medium-small sign-up">
					<a href="#" class=" btn waves-effect waves-light col s12 light-blue darken-4">Crear cuenta</a>
				</div>
				<div class="input-field col s12">
					<p class="margin center medium-small sign-up">¿Ya tienes una cuenta? <a href="#">Inicia sesión</a></p>
				</div>
			</div>
		</form>
</div>
</div>
<div class="col s0 m3 l3 xl3"></div>
</div>
@include('layouts.footer')
