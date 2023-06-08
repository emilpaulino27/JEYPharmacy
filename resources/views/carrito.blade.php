<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <!-- Mobile Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <!-- Site Metas -->
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <link rel="icon" href="{{ asset('images/favicon.ico') }}" type="image/x-icon">
    <title>JEY Pharmacy</title>
    <!-- bootstrap core css -->
    <link rel="stylesheet" type="text/css" href="home/css/bootstrap.css" />
    <!-- font awesome style -->
    <link href="home/css/font-awesome.min.css" rel="stylesheet" />
    <!-- Custom styles for this template -->
    <link href="home/css/style.css" rel="stylesheet" />
    <!-- responsive style -->
    <link href="home/css/responsive.css" rel="stylesheet" />

    <style>
        
    body{margin-top:20px;}
    .cart-item-thumb {
        display: block;
        width: 10rem
    }

    .cart-item-thumb>img {
        display: block;
        width: 100%
    }

    .product-card-title>a {
        color: #222;
    }

    .font-weight-semibold {
        font-weight: 600 !important;
    }

    .product-card-title {
        display: block;
        margin-bottom: .75rem;
        padding-bottom: .875rem;
        border-bottom: 1px dashed #e2e2e2;
        font-size: 1rem;
        font-weight: normal;
    }

    .text-muted {
        color: #888 !important;
    }

    .bg-secondary {
        background-color: #f7f7f7 !important;
    }

    .accordion .accordion-heading {
        margin-bottom: 0;
        font-size: 1rem;
        font-weight: bold;
    }
    .font-weight-semibold {
        font-weight: 600 !important;
    }

    #product {
        background-color: #002c3e;
        color: #81cc12;
    }
    </style>

</head>

<body>
    <div class="hero_area">

        <!-- header section strats -->
        @include('home.header')
        <!-- end header section -->

        <!-- slider -->
        <section class="slider_section">
            <div class="slider_bg_box">
                <img src="images/arrival.jpg" alt="">
            </div>
            </section>
        <!-- end slider -->

        <div class="container pb-5 mt-n2 mt-md-n3 mt-4">
            <div class="row">
                <div class="col-xl-9 col-md-8">
                    <h3 class="h6 d-flex flex-wrap justify-content-between align-items-center px-4 py-3" id="product"><span>Products</span><a class="font-size-sm" href="#" style="color:#81cc12;"><svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-chevron-left" style="width: 1rem; height: 1rem; color:#81cc12;"><polyline points="15 18 9 12 15 6"></polyline></svg>Continue shopping</a></h3>
                    @foreach($detallesCarrito as $item)

                    <!-- Item-->
                    <div class="d-sm-flex justify-content-between my-4 pb-4 border-bottom">
                        <div class="media d-block d-sm-flex text-center text-sm-left">
                            <a class="cart-item-thumb mx-auto mr-sm-4" href="{{ route('productos-detail', $item->producto->id) }}"><img src="{{ asset('storage/images/' . $item->producto->imagen) }}" alt="Product"></a>
                            <div class="media-body ml-3 pt-3">
                                <h3 class="product-card-title font-weight-semibold border-0 pb-0 ml-3"><a href="{{ route('productos-detail', $item->producto->id) }}">{{$item->producto->nombre}}</a></h3>
                                <div class="font-size-sm"><span class="text-muted mr-2">Presentación:</span>{{$item->producto->presentacion}}</div>
                                <div class="font-size-sm"><span class="text-muted mr-2">Marca/Laboratorio:</span>{{$item->producto->marca}}</div>
                                <div class="font-size-sm"><span class="text-muted mr-2">Restricciones (Edad):</span>{{$item->producto->restriccion}}+</div>
                                <div class="font-size-lg text-primary pt-2">RD${{ $item->Cantidad_producto * $item->Precio_unitario }}.00</div>
                            </div>
                        </div>
                        <div class="pt-2 pt-sm-0 pl-sm-3 mx-auto mx-sm-0 text-center text-sm-left" style="max-width: 10rem;">
                            <form action="{{ route('carrito.actualizar-cantidad', $item->id) }}" method="POST">
                            <div class="form-group mb-2">
                                <label for="quantity1">Cantidad</label>
                                <input class="form-control form-control-sm" type="number" name="cantidad" value="{{$item->Cantidad_producto}}">
                            </div>
                                @csrf
                                @method('PUT')
                            <button class="btn btn-outline-secondary btn-sm btn-block mb-2" type="submit">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-refresh-cw mr-1">
                                    <polyline points="23 4 23 10 17 10"></polyline>
                                    <polyline points="1 20 1 14 7 14"></polyline>
                                    <path d="M3.51 9a9 9 0 0 1 14.85-3.36L23 10M1 14l4.64 4.36A9 9 0 0 0 20.49 15"></path>
                                </svg>Update cart</button>
                            </form>
                            <form action="{{ route('carrito.eliminar-producto', $item->Id_producto) }}" method="POST">
                                @csrf
                                @method('DELETE')
                            <button class="btn btn-outline-danger btn-sm btn-block mb-2" type="submit">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-trash-2 mr-1">
                                    <polyline points="3 6 5 6 21 6"></polyline>
                                    <path d="M19 6v14a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V6m3 0V4a2 2 0 0 1 2-2h4a2 2 0 0 1 2 2v2"></path>
                                    <line x1="10" y1="11" x2="10" y2="17"></line>
                                    <line x1="14" y1="11" x2="14" y2="17"></line>
                                </svg>Remove</button>
                            </form>
                        </div>
                    </div>
                    @endforeach

                </div>
                <!-- Sidebar-->
                <div class="col-xl-3 col-md-4 pt-3 pt-md-0">
                    <h4 class="h6 px-4 py-3 text-center" id="product">Subtotal</h4>
                    <div class="h3 font-weight-semibold text-center py-3">RD${{$subtotal}}.00</div>
                    <hr>
                    <h4 class="h6 px-4 py-3 text-center" id="product">ITBIS</h4>
                    <div class="h3 font-weight-semibold text-center py-3">RD${{$subtotal * 0.18}}</div>
                    <hr>
                    <h4 class="h6 px-4 py-3 text-center" id="product">Total</h4>
                    <div class="h3 font-weight-semibold text-center py-3">RD${{($subtotal)+($subtotal * 0.18)}}</div>
                    <hr>

                    <form action="{{ route('carrito.realizar-pedido') }}" method="POST">

                    <h3 class="h6 pt-4 font-weight-semibold"><span class="badge badge-success mr-2">Note</span>Additional comments</h3>
                    <textarea class="form-control mb-3" id="order-comments" name="Comentarios" rows="5"></textarea>

                    <div class="pt-4">
                        <div class="accordion" id="cart-accordion">
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="accordion-heading font-weight-semibold"><a>Datos del Cliente</span></a></h3>
                                </div>
                                <div class="collapse show" id="promocode" data-parent="#cart-accordion">
                                    <div class="card-body">
                                        <label for="Name">Nombre:</label>
                                        <input class="form-control mb-3" type="text" name="nombre" id="nombre" readonly value="{{  auth()->user()->name }}">
                                        <label for="Name">Número de Teléfono:</label>
                                        <input class="form-control mb-3" type="text" name="telefono" id="telefono" readonly value="{{  auth()->user()->telefono }}">
                                        <label for="Name">Dirección:</label>
                                        <input class="form-control mb-3" type="text" name="Direccion" id="Direccion" placeholder="Ingresa tu dirección" required>
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="card-header">
                                    <h3 class="accordion-heading font-weight-semibold"><a>Detalles del Pago</a></h3>
                                </div>
                                
                                    <div class="card-body">
                                            <!-- Campos del formulario de pago -->
                                            <!-- ... -->
                                    
                                            <div class="form-group">
                                                <label for="payment-option">Opción de Pago:</label>
                                                <select id="payment-option" name="payment_option" class="form-control">
                                                    <option value="">Seleccionar</option>
                                                    <option value="tarjeta">Tarjeta de Crédito</option>
                                                    <option value="efectivo">Pago contra Entrega</option>
                                                </select>
                                            </div>
                                    
                                            <!-- Campos adicionales para el pago con tarjeta -->
                                            <div id="tarjeta-fields">
                                                <!-- Campos para el pago con tarjeta -->
                                                <input class="form-control" type="text" name="titular" id="" placeholder="Titular de la Tarjeta">
                                                <input class="form-control" type="text" name="credit_card_num" id="" placeholder="Número de Tarjeta">
                                                <input class="form-control" type="number" name="cvv" id="" placeholder="CVV">
                                                <input class="form-control" type="text" name="expiracion" id="" placeholder="MM/AA">
                                                <!-- ... -->
                                            </div>
                                    
                                            <!-- Campos adicionales para el pago en efectivo -->
                                            <div id="efectivo-fields">
                                                <!-- Campos para el pago en efectivo -->
                                                <input class="form-control" type="number" name="Cantidad" id="" placeholder="Cantidad a pagar">
                                                <!-- ... -->
                                            </div>
                                    
                                            @csrf
                                    
                                    
                                        <!-- JavaScript/jQuery -->
                                        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
                                        <script>
                                            $(document).ready(function() {
                                                // Ocultar campos adicionales al cargar la página
                                                $('#tarjeta-fields').hide();
                                                $('#efectivo-fields').hide();
                                    
                                                // Mostrar/ocultar campos adicionales según la opción de pago seleccionada
                                                $('#payment-option').on('change', function() {
                                                    var selectedOption = $(this).val();
                                    
                                                    if (selectedOption === 'tarjeta') {
                                                        $('#tarjeta-fields').show();
                                                        $('#efectivo-fields').hide();
                                                    } else if (selectedOption === 'efectivo') {
                                                        $('#tarjeta-fields').hide();
                                                        $('#efectivo-fields').show();
                                                    } else {
                                                        $('#tarjeta-fields').hide();
                                                        $('#efectivo-fields').hide();
                                                    }
                                                });
                                            });
                                        </script>
                                    </div>

                            </div>
                            <button class="btn btn-primary btn-block mt-3" type="submit">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-credit-card mr-2">
                                    <rect x="1" y="4" width="22" height="16" rx="2" ry="2"></rect>
                                    <line x1="1" y1="10" x2="23" y2="10"></line>
                                </svg>Proceed to Checkout</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>


</body>