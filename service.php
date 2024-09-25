<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="utf-8">
        <title>WaterLand - Water Park Website Template</title>
        <meta content="width=device-width, initial-scale=1.0" name="viewport">
        <meta content="" name="keywords">
        <meta content="" name="description">

        <!-- Google Web Fonts -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Open+Sans:ital,wdth,wght@0,75..100,300..800;1,75..100,300..800&display=swap" rel="stylesheet"> 

        <!-- Icon Font Stylesheet -->
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css"/>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

        <!-- Libraries Stylesheet -->
        <link href="lib/animate/animate.min.css" rel="stylesheet">
        <link href="lib/lightbox/css/lightbox.min.css" rel="stylesheet">
        <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">


        <!-- Customized Bootstrap Stylesheet -->
        <link href="css/bootstrap.min.css" rel="stylesheet">

        <!-- Template Stylesheet -->
        <link href="css/style.css" rel="stylesheet">


        <style>
              .bg-singleP {
            display: flex;
            background-image: linear-gradient(rgba(0, 0, 0, 50%), rgba(0, 0, 0, 50%)), url('./image/banner/baner-2.jpg');
            height: 30vh;
            width: 100%;
            object-fit: cover;
            justify-content: center;
            align-items: center;
        }
        </style>






    </head>

    <body>

        <!-- Spinner Start -->
        <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
            <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
                <span class="sr-only">Loading...</span>
            </div>
        </div>
        <!-- Spinner End -->

        <?php include('header.php');?>

        <!-- Header Start -->
        <div class="container-fluid bg-breadcrumb bg-singleP">
            <div class="container text-center py-5" style="max-width: 900px;">
                <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">Our Services</h4>
                <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                    <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                    <li class="breadcrumb-item"><a href="#">About</a></li>
                    <li class="breadcrumb-item active text-primary">Service</li>
                </ol>    
            </div>
        </div>
        <!-- Header End -->




        
    <!-- Service Start -->
     <div class="py-5">
    <div class="container-fluid service py-5">
        <div class="container service-section py-5">
            <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                <h4 class="text-primary"> Service</h4>
                <h1 class="display-5 text-white mb-4">Our Services</h1>
                <!-- <p class="mb-0 text-white">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tenetur adipisci
                facilis cupiditate recusandae aperiam temporibus corporis itaque quis facere, numquam, ad culpa
                deserunt sint dolorem autem obcaecati, ipsam mollitia hic.
            </p> -->
            </div>
            <div class="row g-4">
                <div class="col-0 col-md-1 col-lg-2 col-xl-2"></div>
                <div class="col-md-10 col-lg-8 col-xl-8 wow fadeInUp" data-wow-delay="0.2s">
                </div>
                <div class="col-0 col-md-1 col-lg-2 col-xl-2"></div>

                <div class="col-md-6 col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="service-item p-4">
                        <div class="service-content">
                            <div class="mb-4">
                                <img src="image/icon/icons8-custom-100.png" alt="">
                            </div>
                            <a href="#" class="h4 d-inline-block mb-3">Loyalty Program</a>
                            <p class="mb-0">Join our loyalty program to enjoy exclusive discounts and rewards for being
                                a valued customer. We appreciate your support and want to give back to our community
                                with special offers.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="service-item p-4">
                        <div class="service-content">
                            <div class="mb-4">
                                <img src="image/icon/icons8-logistics-100.png" alt="">

                            </div>
                            <a href="#" class="h4 d-inline-block mb-3">Custom Orders</a>
                            <p class="mb-0">For those looking to purchase in bulk or for special occasions, we offer
                                custom order options. Contact us to discuss your needs, and we’ll be happy to
                                accommodate you.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.6s">
                    <div class="service-item p-4">
                        <div class="service-content">
                            <div class="mb-4">
                                <img src="image/icon/icons8-cooking-book-100.png" alt="">

                            </div>
                            <a href="#" class="h4 d-inline-block mb-3">Recipe and Usage Tips</a>
                            <p class="mb-0">Explore our blog and social media for creative ideas on how to use our
                                products. From delicious recipes featuring our makhana to beauty tips using our Multani
                                mitti, we provide inspiration to make the most of your purchases.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div></div>
    <!-- Service End -->





<?php include('footer.php');?>






