<!doctype html>
<head> 
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>
    <!-- Scripts -->
    <script type="text/javascript" src="{{ asset('js/app.js')}}"></script>
    <script type="text/javascript" src="{{ asset('js/materialize.min.js')}}"></script>
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
     <!--Import Google Icon Font-->
     <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!-- Styles -->
     <!--Import materialize.css-->
     <link type="text/css" rel="stylesheet" href="{{ asset('css/materialize.min.css')}}"  media="screen,projection"/>
     <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
</head>
<body class="blue-grey lighten-5">
    <div id="app">
        <nav class="nav-extended light-blue darken-4">
            <div class="nav-wrapper">
              <a  href="{{ url('/')}}" class="brand-logo"><img src="images/iravi.png" alt="" width="50px" heigth="50px">Artesanias iravi</a>
              <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
              <ul id="nav-mobile" class="right hide-on-med-and-down">
                <li><a href="{{ route('register') }}">Crea tu cuenta</a></li>
                <li><a href="{{ route('login') }}">Ingresa</a></li>
                <li><a  onclick="alertaCompras()" >Mis compras</a></li>
                <li><a onclick="alertaCarrito()"><i class="small material-icons">shopping_cart</i></a></li>
              </ul>
            </div>
            <script>
            function alertaCompras() {
             M.toast({html: 'No se pueden ver tus compras sino estas registrado', 
             classes: 'rounded grey lighten-3 black-text',
             displayLength: 1500,
             completeCallback: function(){
               window.location.href = "/comercio2/public/login";
               }
             })
            }
            function alertaCarrito() {
             M.toast({html: 'No puedes ingresar a tu carrito sino estas registrado', 
             classes: 'rounded grey lighten-3 black-text',
             displayLength: 1500,
             completeCallback: function(){
               window.location.href = "/comercio2/public/login";
               }
             })
            }
         </script>
            <div class="nav-content">
              <ul class="tabs tabs-transparent">
                <li class="tab"><a href="#">Accesorios</a></li>
                <li class="tab"><a class="active" href="#">Dulces</a></li>
                <li class="tab"><a href="#">Muebles</a></li>
                <li class="tab"><a href="#">Todos</a></li>
              </ul>
            </div>
          </nav>
          <ul class="sidenav blue lighten-5" id="mobile-demo">
            <li><a href="{{ route('register') }}">Crear tu cuenta</a></li>
            <li><a href="{{ route('login') }}">Ingresa</a></li>
            <li><a onclick="alertaCompras()">Mis compras</a></li>
          </ul>
          <script>
          //menu lateral cuando se hace pequeña la pantalla
          $(document).ready(function(){
            $('.sidenav').sidenav();
          });
          </script>
        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
    <footer class="page-footer footer footer-static footer-dark light-blue darken-4 navbar-border navbar-shadow">
        @yield('footer')
        <div class="footer-copyright  light-blue darken-3">
          <div class="container"><span>© 2019
        <a href="http://themeforest.net/user/pixinvent/portfolio?ref=pixinvent" target="_blank" class="black-text">Artesanias Iravi</a>
         Todos los derechos reservados.</span><span class="right hide-on-small-only">Venta de artensanias en todo el pais
           <a href="https://pixinvent.com/" class="black-text">Encuentranos en facebook</a></span></div>
        </div>
      </footer>
</html>
