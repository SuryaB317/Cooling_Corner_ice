<?php
session_start();
$em=$_SESSION['uname'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Index File</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Styling File -->
    <link href="./assets/css/style.css" rel="stylesheet" type="text/css">
     <link rel="stylesheet" href="./assets/css/style1.css">

     
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">



    <!--bootstrap -->
    <link rel="stylesheet" href="./assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="./assets/js/bootstrap.min.js">

    <!-- CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/css/bootstrap.min.css">

    <!-- JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.2/js/bootstrap.min.js"></script>


    <!-- bootstrap with the weblinks -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

</head>

<body>
    <!-- Header starts -->
    <header>
        <nav class="navbar navbar-expand-md navbar-dark bg-primary">
            <div class="container">
                <a href="/" class="navbar-brand">
                    <img src="logo2.png" alt="img" width="60" height="30" loading="lazy" class="d-inline-block align-top"> Cooling Corner</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#myNavBar" aria-controls="myNavBar" aria-expanded="false" aria-label="Toggle navigation"> 
                <span class="navbar-toggler-icon"></span>
            </button>

                <div class="collapse navbar-collapse" id="myNavBar">
                    <ul class="navbar-nav ms-auto">
                        <!-- <li class="nav-item active"><a href="index.php" class="nav-link">Home</a></li> -->
                        <li class="nav-item"><a href="user-about.php" class="nav-link">About</a></li>
                        <li class="nav-item"><a href="user-contact.php" class="nav-link">Contact</a></li>
                        <li class="nav-item"><a href="user-service.php" class="nav-link">Service</a></li>
                        <li class="nav-item"><a href="flavour.php?uname=<?php echo $em; ?>" class="nav-link">Buy Now</a></li>
                        <li class="nav-item"><a href="gallary.php" class="nav-link">gallary</a></li>
                        <li class="nav-item"><a href="user-logout.php" class="nav-link">Log Out</a></li>
                       
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <!-- Header ends -->

    <!-- carousel starts -->
    <div id="carouselExampleControls" class="carousel faded" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item carousel-image bg-img-1 active">
            <img class="w-100" src="img/carousel-1.jpg" alt="Image">
            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h4 class="text-white text-uppercase mb-md-3">Cooling Corner</h4>
                            <h1 class="display-3 text-white mb-md-4">Worldwide Flavours</h1>
                            <a href="register.php" class="btn btn-light py-md-3 px-md-5 mt-2 rounded-pill">Load More</a>
                        </div>
                    </div>
                <!-- <img src="img1.jpg" class="d-block" style="width:100%;height:75%;" alt="..."> -->
            </div>
            <div class="carousel-item carousel-image bg-img-1 ">
            <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h4 class="text-white text-uppercase mb-md-3">Cooling Corner</h4>
                            <h1 class="display-3 text-white mb-md-4">Made From Our Own Organic Milk</h1>
                            <a href="gallary.php" class="btn btn-light py-md-3 px-md-5 mt-2 rounded-pill">Load More</a>
                        </div>
                    </div>
                <!-- <img src="img2.jpg" class="d-block" style="width:100%;height:25%;" alt="..."> -->
            </div>
            <div class="carousel-item carousel-image bg-img-2">
                <!-- <img src="img3.jpg" class="d-block w-50" style="height:15%;" alt="...">-->
            </div>
            <div class="carousel-item carousel-image bg-img-3">
                <!-- <img src="img3.jpg" class="d-block w-50" style="height:15%;" alt="...">-->
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
    </div>
    </div>
    <!-- carousel ends -->


    <!-- Services Start -->
    
     <div class="container-fluid py-5 ">
        <div class="container py-5" style="background-color: #eb5fac;">   
     <div class="container">
     <div class="row">
                <div class="col-lg-6">
                    <h1 class="section-title position-relative mb-5 text-light">Best Services We Provide For Our Clients</h1>
                </div>
                <div class="col-lg-6 mb-5 mb-lg-0 pb-5 pb-lg-0"></div>
            </div>
    <div class="row">
        <div class="col-md-3">
            <div class="service-item">
                <!-- Content for service item 1 -->
                <div class="service-item p-2">
                            <div class="service-img mx-auto">
                                <img class="rounded-circle w-100 h-100 bg-light p-3" src="img/service-1.jpg" style="object-fit: cover;">
                            </div>
                            <div class="position-relative text-center bg-light rounded p-4 pb-5" style="margin-top: -75px;">
                                <h5 class="font-weight-semi-bold mt-5 mb-3 pt-5">Different Flavours</h5>
                                <p>Dolor nonumy sed eos sed lorem diam amet eos magna. Dolor kasd lorem duo stet kasd justo</p>
                                <a href="service.php" class="border-bottom border-secondary text-decoration-none text-secondary">Learn More</a>
                            </div>
                        </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="service-item">
                <!-- Content for service item 2 -->
                <div class="service-item p-2">
                            <div class="service-img mx-auto">
                                <img class="rounded-circle w-100 h-100 bg-light p-3" src="img/service-2.jpg" style="object-fit: cover;">
                            </div>
                            <div class="position-relative text-center bg-light rounded p-4 pb-5" style="margin-top: -75px;">
                                <h5 class="font-weight-semi-bold mt-5 mb-3 pt-5">Variety of Toppings</h5>
                                <p>Dolor nonumy sed eos sed lorem diam amet eos magna. Dolor kasd lorem duo stet kasd justo</p>
                                <a href="service.php" class="border-bottom border-secondary text-decoration-none text-secondary">Learn More</a>
                            </div>
                        </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="service-item">
                <!-- Content for service item 3 -->
                <div class="service-item p-2">
                            <div class="service-img mx-auto">
                                <img class="rounded-circle w-100 h-100 bg-light p-3" src="img/service-3.jpg" style="object-fit: cover;">
                            </div>
                            <div class="position-relative text-center bg-light rounded p-4 pb-5" style="margin-top: -75px;">
                                <h5 class="font-weight-semi-bold mt-5 mb-3 pt-5">Best Price</h5>
                                <p>Dolor nonumy sed eos sed lorem diam amet eos magna. Dolor kasd lorem duo stet kasd justo</p>
                                <a href="service.php" class="border-bottom border-secondary text-decoration-none text-secondary">Learn More</a>
                            </div>
                        </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="service-item">
                <!-- Content for service item 4 -->
                <div class="service-item p-2">
                            <div class="service-img mx-auto">
                                <img class="rounded-circle w-100 h-100 bg-light p-3" src="img/service-4.jpg" style="object-fit: cover;">
                            </div>
                            <div class="position-relative text-center bg-light rounded p-4 pb-5" style="margin-top: -75px;">
                                <h5 class="font-weight-semi-bold mt-5 mb-3 pt-5">Rich in Quality</h5>
                                <p>Dolor nonumy sed eos sed lorem diam amet eos magna. Dolor kasd lorem duo stet kasd justo</p>
                                <a href="service.php" class="border-bottom border-secondary text-decoration-none text-secondary">Learn More</a>
                            </div>
                        </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="service-item">
                <!-- Content for service item 5 -->
                <div class="service-item p-2">
                            <div class="service-img mx-auto">
                                <img class="rounded-circle w-100 h-100 bg-light p-3" src="img/service-3.jpg" style="object-fit: cover;">
                            </div>
                            <div class="position-relative text-center bg-light rounded p-4 pb-5" style="margin-top: -75px;">
                                <h5 class="font-weight-semi-bold mt-5 mb-3 pt-5">High in Quantity</h5>
                                <p>Dolor nonumy sed eos sed lorem diam amet eos magna. Dolor kasd lorem duo stet kasd justo</p>
                                <a href="service.php" class="border-bottom border-secondary text-decoration-none text-secondary">Learn More</a>
                            </div>
                        </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="service-item">
                <!-- Content for service item 6 -->
                <div class="service-item p-2">
                            <div class="service-img mx-auto">
                                <img class="rounded-circle w-100 h-100 bg-light p-3" src="img/service-1.jpg" style="object-fit: cover;">
                            </div>
                            <div class="position-relative text-center bg-light rounded p-4 pb-5" style="margin-top: -75px;">
                                <h5 class="font-weight-semi-bold mt-5 mb-3 pt-5">Variety of Flavours</h5>
                                <p>Dolor nonumy sed eos sed lorem diam amet eos magna. Dolor kasd lorem duo stet kasd justo</p>
                                <a href="service.php" class="border-bottom border-secondary text-decoration-none text-secondary">Learn More</a>
                            </div>
                        </div>
            </div>
        </div>
        <div class="col-md-3">
            <div class="service-item">
                <!-- Content for service item 7 -->
                <div class="service-item p-2">
                            <div class="service-img mx-auto">
                                <img class="rounded-circle w-100 h-100 bg-light p-3" src="img/product-3.jpg" style="object-fit: cover;">
                            </div>
                            <div class="position-relative text-center bg-light rounded p-4 pb-5" style="margin-top: -75px;">
                                <h5 class="font-weight-semi-bold mt-5 mb-3 pt-5">Variety of Toppings</h5>
                                <p>Dolor nonumy sed eos sed lorem diam amet eos magna. Dolor kasd lorem duo stet kasd justo</p>
                                <a href="service.php" class="border-bottom border-secondary text-decoration-none text-secondary">Learn More</a>
                            </div>
                        </div>
            </div>
        </div>
    </div>
</div>

    <script>
   $(document).ready(function() {
      $('#service-carousel').carousel();
   });
</script>

    <!-- Services End -->


    <!-- Gallary Start -->
    <div class="container-fluid py-5">
    <div class="container py-5 ">
        <div class="row justify-content-center m-0">
            <div class="col-lg-5">
                <h1 class="section-title position-relative text-center text-light mb-5">Delicious Ice Cream Made From Our Very Own Organic Milk</h1>
            </div>
        </div>
        <div class="row m-0 portfolio-container ">
            <div class="col-lg-4 col-md-6 p-2 portfolio-item">
                <div class="position-relative overflow-hidden">
                    <img class="img-fluid w-100" src="img/portfolio-1.jpg" alt="">
                    <a class="portfolio-btn" href="img/portfolio-1.jpg" data-lightbox="portfolio" target="_blank">
                        <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 p-2 portfolio-item">
                <div class="position-relative overflow-hidden">
                    <img class="img-fluid w-100" src="img/portfolio-2.jpg" alt="">
                    <a class="portfolio-btn" href="img/portfolio-2.jpg" data-lightbox="portfolio" target="_blank">
                        <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 p-2 portfolio-item">
                <div class="position-relative overflow-hidden">
                    <img class="img-fluid w-100" src="img/portfolio-3.jpg" alt="">
                    <a class="portfolio-btn" href="img/portfolio-3.jpg" data-lightbox="portfolio" target="_blank">
                        <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                    </a>
                </div>
            </div>
            <div class="col-12 text-center">
                    <a href="gallary.php" class="btn btn-light py-3 px-5 rounded-pill">Load More &nbsp;
                        <i class="fa fa-camera-retro" aria-hidden="true"></i></a>
                </div>
                </div>
        </div>
    </div>

    <!-- Gallary Ends -->

    <!-- Buy Now Starts -->
        
<div class="container-fluid py-5">
    <div class="container py-5">
        <div class="row">
            <div class="col-6">
                <h1 class="section-title position-relative mb-5 text-light">Best Prices We Offer For Ice Cream Folks</h1>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="owl-carousel  product-carousel d-flex flex-wrap justify-content-center">
                    <div class="product-item d-flex flex-column align-items-center text-center bg-light rounded py-5 px-4 m-4">
                        <!-- Product 1 content -->
                        <div class="product-item d-flex flex-column align-items-center text-center bg-light rounded py-5 px-4">
                            <div class="bg-primary mt-n5 py-3" style="width: 80px;">
                                <h4 class="font-weight-bold text-white mb-0">Rs.99</h4>
                             </div>
                        <div class="position-relative bg-primary rounded-circle mt-n3 mb-4 p-3" style="width: 150px; height: 150px;">
                                <img class="rounded-circle w-100 h-100" src="img/product-1.jpg" style="object-fit: cover;">
                        </div>
                            <h5 class="font-weight-bold mb-4">Vanilla Ice Cream</h5>
                             
                        </div>
                    </div>

                    <div class="product-item d-flex flex-column align-items-center text-center bg-light rounded py-5 px-4 m-4">
                        <!-- Product 2 content -->
                        <div class="product-item d-flex flex-column align-items-center text-center bg-light rounded py-5 px-4">
                            <div class="bg-primary mt-n5 py-3" style="width: 80px;">
                                <h4 class="font-weight-bold text-white mb-0">Rs.125</h4>
                             </div>
                        <div class="position-relative bg-primary rounded-circle mt-n3 mb-4 p-3" style="width: 150px; height: 150px;">
                                <img class="rounded-circle w-100 h-100" src="img/product-2.jpg" style="object-fit: cover;">
                        </div>
                            <h5 class="font-weight-bold mb-4">Vanilla Ice Cream</h5>
                        </div>
                    </div>
                    <div class="product-item d-flex flex-column align-items-center text-center bg-light rounded py-5 px-4 m-4">
                        <!-- Product 3 content -->
                        <div class="product-item d-flex flex-column align-items-center text-center bg-light rounded py-5 px-4">
                            <div class="bg-primary mt-n5 py-3" style="width: 80px;">
                                <h4 class="font-weight-bold text-white mb-0">Rs.50</h4>
                             </div>
                        <div class="position-relative bg-primary rounded-circle mt-n3 mb-4 p-3" style="width: 150px; height: 150px;">
                                <img class="rounded-circle w-100 h-100" src="img/product-3.jpg" style="object-fit: cover;">
                        </div>
                            <h5 class="font-weight-bold mb-4">Vanilla Ice Cream</h5>
                        </div>
                    </div>
                    <div class="col-12 text-center">
                    <a href="flavour.php" class="btn btn-light py-3 px-5 rounded-pill">Buy Now &nbsp;
                        <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                    </a>
                </div>
                </div>
            </div>   
        </div>
    </div>    
    <!-- Buy now Ends -->

   <!-- Footer Start -->
   <div class="container-fluid footer bg-light py-5" style="margin-top: 90px;">
        <div class="text-center">
            <div class="row">
                <div class="col-12 mb-4">
                    <a href="contact.php" class="navbar-brand m-0">
                        <h1 class="m-0 mt-n2 display-4 text-primary"><span class="text-secondary">Cooling</span>CORNER</h1>
                    </a>
                </div>
                <!-- Twitter logo -->
                <div class="col-12 mb-4">
                    <a class="btn btn-outline-primary btn-social mr-2" href="https://www.twitter.com" target="_blank">
                    <i class="fab fa-twitter"></i>
                    </a>

                    <!-- FaceBook logo -->
                <a class="btn btn-outline-primary btn-social mr-2" href="https://www.facebook.com" target="_blank">
                <i class="fab fa-facebook-f"></i>
                    
                </a>
                    <!-- linkedin logo -->
                <a class="btn btn-outline-primary btn-social mr-2" href="https://www.linkedin.com/in/surya-b-9a343a225" target="_blank"> 
                <i class="fab fa-linkedin-in"></i>
                </a>
                    <!-- instagram logo -->
                <a class="btn btn-outline-primary btn-social" href="https://www.youtube.com" target="_blank">
                <i class="fab fa-youtube"></i>
                    </a>
            </div>
                <div class="col-12 mt-2 mb-4">
                    <div class="row">
                        <div class="col-sm-6 text-center text-sm-right border-right mb-3 mb-sm-0">
                            <h5 class="font-weight-bold mb-2">Get In Touch</h5>
                            <p class="mb-2">31/33, Palakkarai, Trichy-1.</p>
                            <p class="mb-0">+91 8248755137</p>
                        </div>
                        <div class="col-sm-6 text-center text-sm-left">
                            <h5 class="font-weight-bold mb-2">Opening Hours</h5>
                            <p class="mb-2">Mon – Sat, 8AM – 5PM</p>
                            <p class="mb-0">Sunday: Closed</p>
                        </div>
                    </div>
                </div>
               
            </div>
        </div>

    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-success px-2 back-to-top">
    <i class="fa fa-angle-double-up"></i>
    </a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/isotope/isotope.pkgd.min.js"></script>
    <script src="lib/lightbox/js/lightbox.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>
</html>
