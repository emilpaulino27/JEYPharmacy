<!DOCTYPE html> 
<html>

    <head>
    <!-- Basic -->
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
    <link rel="stylesheet" type="text/css" href="{{ asset('home/css/bootstrap.css') }}" />
    <!-- font awesome style -->
    <link href="{{ asset('home/css/font-awesome.min.css') }}" rel="stylesheet" />
    <!-- Custom styles for this template -->
    <link href="{{ asset('home/css/style.css') }}" rel="stylesheet" />
    <!-- responsive style -->
    <link href="{{ asset('home/css/responsive.css') }}" rel="stylesheet" />
    <!--bootstrap-->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">

    <style>
        .card {
            margin-bottom: 30px;
        }
        .card {
            position: relative;
            display: flex;
            flex-direction: column;
            min-width: 0;
            word-wrap: break-word;
            background-color: #fff;
            background-clip: border-box;
            border: 0 solid transparent;
            border-radius: 0;
        }
        .card .card-subtitle {
            font-weight: 300;
            margin-bottom: 10px;
            color: #8898aa;
        }
        .table-product.table-striped tbody tr:nth-of-type(odd) {
            background-color: #f3f8fa!important
        }
        .table-product td{
            border-top: 0px solid #dee2e6 !important;
            color: #728299!important;
        }
        .quantity {
            width: 120px;
        }

        #btn {
            background-color: #002c3e;
            color: white;
        }

        #btn:hover {
            background-color: #81cc12;
            color: white;
        }

        #btn2 {
            background-color: #81cc12;
            border-color: #81cc12;
            color: white;

        }

        #btn2:hover {
            background-color: #002c3e;
            border-color: #002c3e;
            color: white;

        }

    </style>

    </head>

    <body>
        <div class="hero_area">

            <!-- header section strats -->
            @include('home.header')
            <!-- end header section -->

            <section class="slider_section">
                <div class="slider_bg_box">
                    <img src="{{ asset('images/fondo3.jpeg') }}" alt="">
                </div>
            </section>
            
            
        </div>
        
            <div class="container pt-3">
                <div class="card">
                    <div class="card-body">
                        <h3 class="card-title">{{$producto->nombre}}</h3>
                        <h6 class="card-subtitle pb-2">Producto de farmacia</h6>
                        <div class="row">
                            <div class="col-lg-5 col-md-5 col-sm-6">
                                <div class="white-box text-center"><img src="{{ asset('storage/images/' . $producto->imagen) }}" class="img-responsive" width="400"></div>
                            </div>
                            <div class="col-lg-7 col-md-7 col-sm-6">
                                <h4 class="box-title mt-5">Descripcion del producto</h4>
                                <p>{{$producto->descripcion}}</p>
                                <h2 class="mt-5">
                                    RD${{$producto->precio}}.00 p/u
                                </h2>
                                <div class="form-group">
                                    <form action="{{ route('carrito.agregar-producto-con-cantidad') }}" method="POST">
                                    <input type="hidden" name="producto_id" value="{{ $producto->id }}">
                                    @csrf
                                    <label>Cantidad</label>
                                    <input type="number" name="cantidad" placeholder="1" class="form-control mb-2" style="width: 100px;" value="1">
                                </div>
                                <button type="submit" class="btn btn-rounded mr-1" id="btn" data-toggle="tooltip" title="" data-original-title="Add to cart">
                                    <i class="fa fa-shopping-cart"></i>
                                </button>
                                </form>
                                <button class="btn btn-primary btn-rounded" id="btn2">Comprar ahora</button>
                                <h3 class="box-title mt-5">Calidad de los productos asegurada</h3>
                                <ul class="list-unstyled">
                                    <li><i class="fa fa-check text-success"></i>Estándares altos para calidad</li>
                                    <li><i class="fa fa-check text-success"></i>Garantía de calidad farmacéutica</li>
                                    <li><i class="fa fa-check text-success"></i>Eficacia y seguridad comprobadas</li>
                                </ul>
                            </div>
                            <div class="col-lg-12 col-md-12 col-sm-12">
                                <h3 class="box-title mt-5">Informaciones generales</h3>
                                <div class="table-responsive">
                                    <table class="table table-striped table-product">
                                        <tbody>
                                            <tr>
                                                <td width="390">Marca/Laboratorio</td>
                                                <td>{{$producto->marca}}</td>
                                            </tr>
                                            <tr>
                                                <td>Categoría</td>
                                                <td>{{$producto->categoria->nombre}}</td>
                                            </tr>
                                            <tr>
                                                <td>Presentación</td>
                                                <td>{{$producto->presentacion}}</td>
                                            </tr>
                                            <tr>
                                                <td>Restricciones (Edad)</td>
                                                <td>{{$producto->restriccion}}+</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <section class="">
                <div class="container px-4 px-lg-5 mt-5">
                    <h3 >Otros productos que te pueden interesar</h3>
                    <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 ">
                        @foreach ($moreProducts as $item)
                            
                        <div class="col mb-5 pt-2">

                            <div class="card h-100">

                                <!-- Product image-->
                                <img class="card-img-top" src="{{ asset('storage/images/' . $item->imagen) }}" alt="Product Image">
                                <!-- Product details-->
                                <div class="card-body p-4">
                                    <div class="text-center">
                                        <!-- Product name-->
                                        <h5 class="fw-bolder"><a href="{{ route('productos-detail', $item->id) }}" id="link">{{$item->nombre}}</a></h5>

                                    </div>
                                </div>

                            </div>
                        </div>
                        @endforeach

                    </div>

                </div>
            </div>
            </section>


    </body>

</html>