
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Gallary Page</title>
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
                        <li class="nav-item "><a href="registered-user.php" class="nav-link">Home</a></li>
                        <li class="nav-item"><a href="user-about.php" class="nav-link">About</a></li>
                        <li class="nav-item"><a href="user-contact.php" class="nav-link">Contact</a></li>
                        <li class="nav-item"><a href="flavour.php" class="nav-link">Buy Now</a></li>
                        <li class="nav-item active"><a href="gallary.php" class="nav-link">Gallary</a></li>
                    </ul>
                </div>
            </div>
        </nav>
    </header>
    <!-- Header ends -->

    <!-- Gallary Start -->
   <div class="container-fluid py-5 bg-light">
    <div class="container py-5" style="background-color: #eb5fac;">
        <div class="row justify-content-center m-0">
            <div class="col-lg-5">
                <h1 class="section-title position-relative text-center text-light mb-5">Delicious Ice Cream Made From Our Very Own Organic Milk</h1>
            </div>
        </div>
        <!-- Choice about the type -->
        <div class="row">
                <div class="col-12 text-center">
                    <ul class="list-inline mb-4 pb-2" id="portfolio-flters">
                        <li class="btn btn-sm btn-outline-light m-1 active"  data-filter="*">All</li>
                        <li class="btn btn-sm btn-outline-light m-1" data-filter=".first">Cone</li>
                        <li class="btn btn-sm btn-outline-light m-1" data-filter=".second">Vanilla</li>
                        <li class="btn btn-sm btn-outline-light m-1" data-filter=".third">Chocolate</li>
                    </ul>
                </div>
            </div>

        <div class="row m-0 portfolio-container ">
            <div class="col-lg-4 col-md-6 p-2 portfolio-item first">
                <div class="position-relative overflow-hidden">
                    <img class="img-fluid w-100" src="img/portfolio-1.jpg" alt="">
                    <a class="portfolio-btn" href="img/portfolio-1.jpg" data-lightbox="portfolio" target="_blank">
                        <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 p-2 portfolio-item second">
                <div class="position-relative overflow-hidden">
                    <img class="img-fluid w-100" src="img/portfolio-2.jpg" alt="">
                    <a class="portfolio-btn" href="img/portfolio-2.jpg" data-lightbox="portfolio" target="_blank">
                        <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 p-2 portfolio-item third">
                <div class="position-relative overflow-hidden">
                    <img class="img-fluid w-100" src="img/portfolio-3.jpg" alt="">
                    <a class="portfolio-btn" href="img/portfolio-3.jpg" data-lightbox="portfolio" target="_blank">
                        <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 p-2 portfolio-item second">
                <div class="position-relative overflow-hidden">
                    <img class="img-fluid w-100" src="img/portfolio-4.jpg" alt="">
                    <a class="portfolio-btn" href="img/portfolio-4.jpg" data-lightbox="portfolio" target="_blank">
                        <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 p-2 portfolio-item first">
                <div class="position-relative overflow-hidden">
                    <img class="img-fluid w-100" src="img/portfolio-5.jpg" alt="">
                    <a class="portfolio-btn" href="img/portfolio-5.jpg" data-lightbox="portfolio" target="_blank">
                        <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 p-2 portfolio-item third">
                <div class="position-relative overflow-hidden">
                    <img class="img-fluid w-100" src="img/portfolio-6.jpg" alt="">
                    <a class="portfolio-btn" href="img/portfolio-6.jpg" data-lightbox="portfolio" target="_blank">
                        <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 p-2 portfolio-item first">
                <div class="position-relative overflow-hidden">
                    <img class="img-fluid w-100" src="img/img1.jpg" alt="">
                    <a class="portfolio-btn" href="img/portfolio-6.jpg" data-lightbox="portfolio" target="_blank">
                        <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 p-2 portfolio-item third">
                <div class="position-relative overflow-hidden">
                    <img class="img-fluid w-100" src="img/img2.jpg" alt="">
                    <a class="portfolio-btn" href="img/portfolio-6.jpg" data-lightbox="portfolio" target="_blank">
                        <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 p-2 portfolio-item second">
                <div class="position-relative overflow-hidden">
                    <img class="img-fluid w-100" src="img/img3.jpg" alt="">
                    <a class="portfolio-btn" href="img/portfolio-6.jpg" data-lightbox="portfolio" target="_blank">
                        <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 p-2 portfolio-item first">
                <div class="position-relative overflow-hidden">
                    <img class="img-fluid w-100" src="img/product-1.jpg" alt="">
                    <a class="portfolio-btn" href="img/portfolio-6.jpg" data-lightbox="portfolio" target="_blank">
                        <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 p-2 portfolio-item first">
                <div class="position-relative overflow-hidden">
                    <img class="img-fluid w-100" src="img/product-5.jpg" alt="">
                    <a class="portfolio-btn" href="img/portfolio-6.jpg" data-lightbox="portfolio" target="_blank">
                        <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 p-2 portfolio-item second">
                <div class="position-relative overflow-hidden">
                    <img class="img-fluid w-100" src="img/service-1.jpg" alt="">
                    <a class="portfolio-btn" href="img/portfolio-6.jpg" data-lightbox="portfolio" target="_blank">
                        <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 p-2 portfolio-item third">
                <div class="position-relative overflow-hidden">
                    <img class="img-fluid w-100" src="img/img1.jpg" alt="">
                    <a class="portfolio-btn" href="img/portfolio-6.jpg" data-lightbox="portfolio" target="_blank">
                        <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 p-2 portfolio-item third">
                <div class="position-relative overflow-hidden">
                    <img class="img-fluid w-100" src="img/img3.jpg" alt="">
                    <a class="portfolio-btn" href="img/portfolio-6.jpg" data-lightbox="portfolio" target="_blank">
                        <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 p-2 portfolio-item second">
                <div class="position-relative overflow-hidden">
                    <img class="img-fluid w-100" src="img/img2.jpg" alt="">
                    <a class="portfolio-btn" href="img/portfolio-6.jpg" data-lightbox="portfolio" target="_blank">
                        <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 p-2 portfolio-item first">
                <div class="position-relative overflow-hidden">
                    <img class="img-fluid w-100" src="img/portfolio-6.jpg" alt="">
                    <a class="portfolio-btn" href="img/portfolio-3.jpg" data-lightbox="portfolio" target="_blank">
                        <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 p-2 portfolio-item first">
                <div class="position-relative overflow-hidden">
                    <img class="img-fluid w-100" src="img/portfolio-1.jpg" alt="">
                    <a class="portfolio-btn" href="img/portfolio-6.jpg" data-lightbox="portfolio" target="_blank">
                        <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                    </a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 p-2 portfolio-item third">
                <div class="position-relative overflow-hidden">
                    <img class="img-fluid w-100" src="img/portfolio-2.jpg" alt="">
                    <a class="portfolio-btn" href="img/portfolio-6.jpg" data-lightbox="portfolio" target="_blank">
                        <i class="fa fa-plus text-primary" style="font-size: 60px;"></i>
                    </a>
                </div>
            </div>
        </div>
  

    <!-- Gallary End -->

    
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
    </div>
    </div>
   </div>
    <!-- Footer End -->
    
    <!-- Back to Top -->
    <a href="#" class="btn btn-success px-2 back-to-top rounded-pill"><i class="fa fa-angle-double-up"></i></a>

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
