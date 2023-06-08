<section class="product_section layout_padding">
    <div class="container">
       <div class="heading_container heading_center">
          <h2>
             Nuestros <span>productos</span>
          </h2>
       </div>
       <div class="row">
         @foreach($productos as $producto)
         <div class="col-sm-6 col-md-4 col-lg-4">
             <div class="box">
                 <div class="option_container">
                     <div class="options">
                         <a href="{{ route('carrito.agregar-producto', ['producto_id' => $producto->id, 'cantidad' => 1]) }}" class="option1">
                             Añadir al carrito
                         </a>
                         <a href="{{ route('productos-detail', $producto->id) }}" class="option2">
                             Ver más
                         </a>
                     </div>
                 </div>
                 <div class="img-box">
                     <img src="{{ asset('storage/images/' . $producto->imagen) }}" alt="{{ $producto->nombre }}">
                 </div>
                 <div class="detail-box">
                     <h5>{{ $producto->nombre }}</h5>
                     <h6>RD${{ $producto->precio }}.00 p/u</h6>
                 </div>
             </div>
         </div>
         @endforeach
     </div>
   
       <div class="btn-box">
          <a href="/products-view">
          Ver todos los productos
          </a>
       </div>
    </div>
 </section>
