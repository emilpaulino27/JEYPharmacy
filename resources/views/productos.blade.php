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

             <section class="">
                <div class="container px-4 px-lg-5 mt-5">
                    <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                        <div class="col mb-5">
                            <div class="card h-100">
                                <!-- Product image-->
                                <img class="card-img-top" src="images/medicamento1.png" alt="..." />
                                <!-- Product details-->
                                <div class="card-body p-4">
                                    <div class="text-center">
                                        <!-- Product name-->
                                        <h5 class="fw-bolder"><a href="" id="link">Producto 1</a></h5>
                                        <!-- Product price-->
                                        $40.00 - $80.00
                                    </div>
                                </div>
                                <!-- Product actions-->
                                <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                    <div class="text-center"><a class="btn btn-outline-success mt-auto" href="#">Añadir al carrito</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="col mb-5">
                            <div class="card h-100">
                                <!-- Sale badge-->
                               <!-- <div class="badge bg-success text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale</div>-->
                                <!-- Product image-->
                                <img class="card-img-top" src="images/medicamento2.png" alt="..." />
                                <!-- Product details-->
                                <div class="card-body p-4">
                                    <div class="text-center">
                                        <!-- Product name-->
                                        <h5 class="fw-bolder"><a href="" id="link">Producto 2</a></h5>
                                        <!-- Product reviews-->
                                        <div class="d-flex justify-content-center small text-warning mb-2">
                                            <div class="bi-star-fill"></div>
                                            <div class="bi-star-fill"></div>
                                            <div class="bi-star-fill"></div>
                                            <div class="bi-star-fill"></div>
                                            <div class="bi-star-fill"></div>
                                        </div>
                                        <!-- Product price-->
                                        <!--<span class="text-muted text-decoration-line-through">$20.00</span>-->
                                        $18.00
                                    </div>
                                </div>
                                <!-- Product actions-->
                                <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                    <div class="text-center"><a class="btn btn-outline-success mt-auto" href="#">Añadir al carrito</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="col mb-5">
                            <div class="card h-100">
                                <!-- Sale badge-->
                               <!-- <div class="badge bg-success text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale</div>-->
                                <!-- Product image-->
                                <img class="card-img-top" src="images/medicamento3.png" alt="..." />
                                <!-- Product details-->
                                <div class="card-body p-4">
                                    <div class="text-center">
                                        <!-- Product name-->
                                        <h5 class="fw-bolder"><a href="" id="link">Producto 3</a></h5>
                                        <!-- Product price-->
                                        <!--<span class="text-muted text-decoration-line-through">$50.00</span>-->
                                        $25.00
                                    </div>
                                </div>
                                <!-- Product actions-->
                                <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                    <div class="text-center"><a class="btn btn-outline-success mt-auto" href="#">Añadir al carrito</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="col mb-5">
                            <div class="card h-100">
                                <!-- Product image-->
                                <img class="card-img-top" src="images/medicamento4.png" alt="..." />
                                <!-- Product details-->
                                <div class="card-body p-4">
                                    <div class="text-center">
                                        <!-- Product name-->
                                        <h5 class="fw-bolder"><a href="" id="link">Producto 4</a></h5>
                                        <!-- Product reviews-->
                                        <div class="d-flex justify-content-center small text-warning mb-2">
                                            <div class="bi-star-fill"></div>
                                            <div class="bi-star-fill"></div>
                                            <div class="bi-star-fill"></div>
                                            <div class="bi-star-fill"></div>
                                            <div class="bi-star-fill"></div>
                                        </div>
                                        <!-- Product price-->
                                        $40.00
                                    </div>
                                </div>
                                <!-- Product actions-->
                                <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                    <div class="text-center"><a class="btn btn-outline-success mt-auto" href="#">Añadir al carrito</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="col mb-5">
                            <div class="card h-100">
                                <!-- Sale badge-->
                                <!--<div class="badge bg-success text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale</div>-->
                                <!-- Product image-->
                                <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="..." />
                                <!-- Product details-->
                                <div class="card-body p-4">
                                    <div class="text-center">
                                        <!-- Product name-->
                                        <h5 class="fw-bolder"><a href="" id="link">Producto 5</a></h5>
                                        <!-- Product price-->
                                        <!--<span class="text-muted text-decoration-line-through">$50.00</span>-->
                                        $25.00
                                    </div>
                                </div>
                                <!-- Product actions-->
                                <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                    <div class="text-center"><a class="btn btn-outline-success mt-auto" href="#">Añadir al carrito</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="col mb-5">
                            <div class="card h-100">
                                <!-- Product image-->
                                <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="..." />
                                <!-- Product details-->
                                <div class="card-body p-4">
                                    <div class="text-center">
                                        <!-- Product name-->
                                        <h5 class="fw-bolder"><a href="" id="link">Producto 6</a></h5>
                                        <!-- Product price-->
                                        $120.00 - $280.00
                                    </div>
                                </div>
                                <!-- Product actions-->
                                <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                    <div class="text-center"><a class="btn btn-outline-success mt-auto" href="#">Añadir al carrito</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="col mb-5">
                            <div class="card h-100">
                                <!-- Sale badge-->
                               <!-- <div class="badge bg-success text-white position-absolute" style="top: 0.5rem; right: 0.5rem">Sale</div>-->
                                <!-- Product image-->
                                <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="..." />
                                <!-- Product details-->
                                <div class="card-body p-4">
                                    <div class="text-center">
                                        <!-- Product name-->
                                        <h5 class="fw-bolder"><a href="" id="link">Producto 8</a></h5>
                                        <!-- Product reviews-->
                                        <div class="d-flex justify-content-center small text-warning mb-2">
                                            <div class="bi-star-fill"></div>
                                            <div class="bi-star-fill"></div>
                                            <div class="bi-star-fill"></div>
                                            <div class="bi-star-fill"></div>
                                            <div class="bi-star-fill"></div>
                                        </div>
                                        <!-- Product price-->
                                       <!-- <span class="text-muted text-decoration-line-through">$20.00</span>-->
                                        $18.00
                                    </div>
                                </div>
                                <!-- Product actions-->
                                <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                    <div class="text-center"><a class="btn btn-outline-success mt-auto" href="#">Añadir al carrito</a></div>
                                </div>
                            </div>
                        </div>
                        <div class="col mb-5">
                            <div class="card h-100">
                                <!-- Product image-->
                                <img class="card-img-top" src="https://dummyimage.com/450x300/dee2e6/6c757d.jpg" alt="..." />
                                <!-- Product details-->
                                <div class="card-body p-4">
                                    <div class="text-center">
                                        <!-- Product name-->
                                        <h5 class="fw-bolder"><a href="" id="link">Producto 9</a></h5>
                                        <!-- Product reviews-->
                                        <div class="d-flex justify-content-center small text-warning mb-2">
                                            <div class="bi-star-fill"></div>
                                            <div class="bi-star-fill"></div>
                                            <div class="bi-star-fill"></div>
                                            <div class="bi-star-fill"></div>
                                            <div class="bi-star-fill"></div>
                                        </div>
                                        <!-- Product price-->
                                        $40.00
                                    </div>
                                </div>
                                <!-- Product actions-->
                                <div class="card-footer p-4 pt-0 border-top-0 bg-transparent">
                                    <div class="text-center"><a class="btn btn-outline-success mt-auto" href="#">Añadir al carrito</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

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