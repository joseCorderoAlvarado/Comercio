<nav class="nav-extended light-blue darken-4">
   <div class="nav-wrapper">
     <a  href="{{ url('/')}}" class="brand-logo"><img src="images/iravi.png" alt="" width="50px" heigth="50px">Artesanias iravi</a>
     <a href="#" data-target="mobile-demo" class="sidenav-trigger"><i class="material-icons">menu</i></a>
     <ul id="nav-mobile" class="right hide-on-med-and-down">
       <li><a href="{{ url('registro')}}">Crea tu cuenta</a></li>
       <li><a href="{{ url('login')}}">Ingresa</a></li>
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
      window.location.href = "/Comercio/public/login";
      }
    })
   }
   function alertaCarrito() {
    M.toast({html: 'No puedes ingresar a tu carrito sino estas registrado', 
    classes: 'rounded grey lighten-3 black-text',
    displayLength: 1500,
    completeCallback: function(){
      window.location.href = "/Comercio/public/login";
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
   <li><a href="sass.html">Crear tu cuenta</a></li>
   <li><a href="badges.html">Ingresa</a></li>
   <li><a href="collapsible.html">Mis compras</a></li>
 </ul>
 <script>
 //menu lateral cuando se hace pequeña la pantalla
 $(document).ready(function(){
   $('.sidenav').sidenav();
 });
 </script>
