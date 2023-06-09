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
    <link rel="stylesheet" type="text/css" href="home/css/bootstrap.css" />
    <!-- font awesome style -->
    <link href="home/css/font-awesome.min.css" rel="stylesheet" />
    <!-- Custom styles for this template -->
    <link href="home/css/style.css" rel="stylesheet" />
    <!-- responsive style -->
    <link href="home/css/responsive.css" rel="stylesheet" />

    <style>
        #link {
        text-decoration: none;
        }

        .search{
       position: relative;
       box-shadow: 0 0 40px rgba(51, 51, 51, .1);
       }

       .search input{

        height: 60px;
        text-indent: 25px;
        border: 2px solid #d6d4d4;
       }

       .search input:focus{

        box-shadow: none;
        border: 2px solid #002c3e;
       }

       .search .fa-search{

        position: absolute;
        top: 20px;
        left: 16px;
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
            <img src="images/slider.jpg" alt="">
        </div>

        <div class="carousel-inner">
            <div class="carousel-item-active">
                <div class="container">
                    <div class="row">
                        <div class="col-md-7 col-lg-6 ">
                            <div class="detail-box">
                                <h1 id="linea">
                                    <span>
                                    Nuestros 
                                    </span>
                                    <br>
                                    productos
                                 </h1>
                                 <p id="parrafo">
                                    Conoce la amplia gama de productos de venta libre para el cuidado de la salud y el bienestar.
                                 </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </section>
 </div>

 <section class="product_section">
    <div class="container">
        <div class="heading_container heading_center">
            <h2 class="pt-5">
                Lista de <span>productos</span>
             </h2>


             <!-- Search Bar -->

             <div class="container pt-3">
                <div class="row height d-flex justify-content-center align-items-center">
                    <div class="col-md-8">
                        <form action="{{ route('productos-view') }}" method="GET" class="search">
                            <i class="fa fa-search"></i>
                            <input type="text" class="form-control" placeholder="¿Qué estás buscando?" name="search" value="{{ Request::get('search') }}">
                        </form>
                    </div>
                </div>
            </div>

            @if(count($products)<=0)
            <div class="card">
                <div class="card-body">
                  There are no results
                </div>
              </div>   
            @else
             <section class="">
                <div class="container px-4 px-lg-5 mt-5">
                    <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                        @foreach($products as $producto)
                        <div class="col mb-5">
                            <div class="card h-100">
                                <!-- Product image-->
                                <img class="card-img-top" src="{{ asset('storage/images/' . $producto->imagen) }}" alt="Product Image">
                                <!-- Product details-->
                                <div class="card-body p-4">
                                    <div class="text-center">
                                        <!-- Product name-->
                                        <h5 class="fw-bolder"><a href="{{ route('productos-detail', $producto->id) }}" id="link">{{ $producto->nombre }}</a></h5>
                                        <!-- Product price-->
                                        RD${{ $producto->precio }}
                                    </div>
                                </div>
                                <!-- Product actions-->
                                <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                    <div class="text-center"><a class="btn btn-outline-success mt-auto" href="{{ route('carrito.agregar-producto', ['producto_id' => $producto->id, 'cantidad' => 1]) }}">Añadir al carrito</a></div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
                </div>
            </section>
            
            </section>
            @endif

        </div>
    </div>
    
 </section>


       <!-- footer start -->
       @include('home.footer')
       <!-- footer end -->
 
       <div class="cpy_">
          <p class="mx-auto">© 2023 Todos los derechos reservados <br>
          
             JEY Pharmacy
          
          </p>
       </div>
       <!-- jQery -->
       <script src="home/js/jquery-3.4.1.min.js"></script>
       <!-- popper js -->
       <script src="home/js/popper.min.js"></script>
       <!-- bootstrap js -->
       <script src="home/js/bootstrap.js"></script>
       <!-- custom js -->
       <script src="home/js/custom.js"></script>

</body>
</html>