@extends('layouts.app')
@section('content')
<script>
    //modales de ver productos
     $(document).ready(function(){
       $('.modal').modal();
     });
    </script>
    <div class="container">
    <div class="row">
      <!-- Structure card -->
      <div class="col s12 m5 l5 xl4">
                <div class="card animate fadeLeft">
                  <div class="card-content">
                    <p>Nombre del producto</p>
                    <span class="card-title text-ellipsis">Modelo o especificacion corta del producto</span>
                    <img src="images/banner3.png" class="" alt="" width="200px" height="150px">
                    <div class="row">
                      <h5 class="col s12 m12 l12 mt-3">precio</h5>
                      <a class="col s12 m12 l12 mt-2 waves-effect waves-light light-blue darken-4 btn modal-trigger z-depth-4 z-depth-4 z-depth-4" href="#modalproductos">Ver producto</a>
                    </div>
                  </div>
                </div>
       <!--Fin de Structure card -->
                <!-- Modal Structure -->
                <div id="modalproductos" class="modal" tabindex="0" style="z-index: 1003; display: none; opacity: 0; top: 4%; transform: scaleX(0.8) scaleY(0.8);">
                  <div class="modal-content">
                    <a class="modal-close right"><i class="material-icons">close</i></a>
                    <div class="row" id="product-five">
                      <div class="col s12 m6  l6 xl6">
                        <img  class="materialboxed" src="images/banner4.jpg" alt="" width="200px" height="150px">
                        <p></p>
                        <img  class="materialboxed" src="images/banner4.jpg" alt="" width="200px" height="150px">
                        <script>
                        //Zoom en las fotos de los productos
                         $(document).ready(function(){
                         $('.materialboxed').materialbox();
                           });
                        </script>
                      </div>
                      <div class="col s12 xl6 l6 m6 ">
                        <p>Nombre del producto</p>
                        <h5>Modelo o especificacion corta del producto</h5>
                          Cantidad: <div class="input-field inline "> <input type="number" min="1" max="10" step="1" value="1" ></div>
                        <hr class="mb-5">
                        <span class="vertical-align-top mr-4">Especificaciones</span>
                        <ul class="list-bullet">
                          <li class="list-item-bullet">Descripción del producto: Bolsa de cuero hecha a mano con modelado rasgado, ideal para el dia a dia </li>
                          <li class="list-item-bullet">Tamaño:30 cm de altura x 50 cm de anchura</li>
                          <li class="list-item-bullet">Peso:30 gramos</li>
                          <li class="list-item-bullet">Color:Unico color cafe claro </li>
                        </ul>
                        <h5>Precio: $1,300.00</h5>
                        <a class="waves-effect waves-light btn light-blue darken-4 mt-2 mr-2" onclick="alertaAnadirCarrito()">Añadir al carrito</a>
                        <p></p>
                        <a class="waves-effect waves-light btn light-blue darken-4 mt-2" onclick="alertaComprarAhora()">Comprar Ahora</a>
                      </div>
                    </div>
                  </div>
                </div>
                <!--Fin de Structure Modal -->
      <script>
       function alertaAnadirCarrito() {
        M.toast({html: 'No se pueden añadir productos a tu compra sino estas registrado', 
        classes: 'rounded grey lighten-3 black-text',
        displayLength: 1500,
        completeCallback: function(){
          window.location.href = "/comercio2/public/login";
          }
        })
       }
       function alertaComprarAhora(){
        M.toast({html: 'No puedes realizar compras sino estas registrado', 
        classes: 'rounded grey lighten-3 black-text',
        displayLength: 1500,
        completeCallback: function(){
          window.location.href = "/comercio2/public/login";
          }
        })
       }
    </script>
      </div>
    </div>
    <div class="row">
    <div class="col s0 m3 l3 xl4 ">
    </div>
    <div class="col s12 m6 l6 xl4 ">
    <ul class="pagination">
        <li class="disabled"><a href="#!"><i class="material-icons">chevron_left</i></a></li>
        <li class="active light-blue darken-4"><a href="#!" class="white-text">1</a></li>
        <li class="waves-effect light-blue darken-4"><a href="#!" class="white-text">2</a></li>
        <li class="waves-effect light-blue darken-4"><a href="#!" class="white-text">3</a></li>
        <li class="waves-effect light-blue darken-4"><a href="#!" class="white-text">4</a></li>
        <li class="waves-effect light-blue darken-4"><a href="#!" class="white-text">5</a></li>
        <li class="waves-effect"><a href="#!"><i class="material-icons">chevron_right</i></a></li>
      </ul>
    </div>
    <div class="col s0 m3 l3 xl4">
    </div>
    </div>
    </div>
@endsection
@section('footer')
@endsection