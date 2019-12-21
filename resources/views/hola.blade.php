@include('layouts.plantilla')
@include('layouts.menunavegacion')
@include('layouts.buscador')
@include('layouts.carrusel')
<script>
//modales de ver productos
 $(document).ready(function(){
   $('.modal').modal();
 });
</script>
<div class="container">
<div class="row">

  <!-- Structure card -->
  <div class="col s12 m4 l4">
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
                  <div class="col s12 m6  l6">
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
                  <div class="col l6 m6 s12">
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
                    <a class="waves-effect waves-light btn light-blue darken-4 mt-2 mr-2">Añadir al carrito</a>
                    <a class="waves-effect waves-light btn light-blue darken-4 mt-2">Comprar Ahora</a>
                  </div>
                </div>
              </div>
            </div>
            <!--Fin de Structure Modal -->
  </div>
</div>
</div>
@include('layouts.footer')
