<?php
include('config.php');
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>RG Associates</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="RG Associates" name="keywords">
    <meta content="RG Associates" name="description">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Open+Sans:ital,wdth,wght@0,75..100,300..800;1,75..100,300..800&display=swap"
        rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.4/css/all.css" />
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
        .sticky-top .navbar-light .navbar-brand img {
            max-height: 100px;
        }

        .owl-carousel .owl-stage-outer {
            height: 70vh;
        }


        /* This is for bg-singleP */

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
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->

    <?php include('header.php'); ?>

    <div class="bg-singleP">
        <div>
            <h2 class="text-white">Product Details</h2>
        </div>
    </div>

    <!-- This is section  -->
    <section class="py-5">
        <div class="container">
            <div class="row py-5 px-4 justify-content-center align-items-center shadow-lg">
                <!-- Hare i am making logic  -->
                <?php

                 $pro_id = $_GET['pro_id'];
                include('config.php');

                $sel = "SELECT * FROM `products` where `pro_id`='$pro_id' ";
                $data = mysqli_query($con, $sel);
                $result = mysqli_num_rows($data);
                if ($result) {
                    while ($row = mysqli_fetch_array($data)) {
                ?>
                        <div class="col-md-5 mb-4 wow fadeInUp" data-wow-delay="0.2s">
                            <div class="card h-100 shadow-lg">
                                <img src="<?php echo $row['pro_image']; ?>" class="card-img-top" alt="" height="250px" width="100%" style="onject-fit:cover; border:1px solid green;">
                                <div class="card-body">
                                    <h5 class="card-title mt-3 text-center"><?php echo $row['pro_name']; ?></h5>
                                    <div class="mt-3 text-center">
                                        <a href="#" class="btn btn-primary px-4 py-2" data-bs-toggle="modal" data-bs-target="#exampleModal">Enquiry</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-7 wow fadeInUp" data-wow-delay="0.2s">
                            <h5 class="card-title mt-3 px-5 text-start"><?php echo $row['pro_name']; ?></h5>
                            <p class="px-5 lh-lg"><?php echo $row['title']; ?></p>
                        </div>
                <?php
                    }
                }
                ?>
            </div>

        </div>
    </section>
    <?php include('footer.php'); ?>