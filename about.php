<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>About</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Open+Sans:ital,wdth,wght@0,75..100,300..800;1,75..100,300..800&display=swap" rel="stylesheet">

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
        /* THis is for about btn */
        .btn a {
            border-radius: 50px;
            border: 1px solid grey;
        }

        .btn a:hover {
            background-color: black;
            color: white;
        }

        /* THis is  */
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
    <div id="spinner" class="show bg-white bg position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->

    <?php include('header.php'); ?>

    <!-- Header Start -->
    <div class="container-fluid bg-breadcrumb bg-singleP">
        <div class="container text-center py-5" style="max-width: 900px;">
            <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">About Us</h4>
        </div>
    </div>
    <!-- Header End -->


    <!-- THis is ab section  -->
    <section class="py-5">
        <div class="container ">
            <div class="row py-5 px-4 justify-content-center align-items-center shadow-lg">
                <div class="col-md-6 pb-5 wow fadeInUp" data-wow-delay="0.2s">
                    <h2>Welcome To RG Associates</h2>
                    <p class="lh-lg">Welcome to RG Associates where we bring you the finest selection of quality products to enhance your lifestyle. Our journey began with a passion for wholesome foods and comfortable living, and we’re proud to offer a range of items that cater to both health-conscious consumers and those looking for quality home essentials.</p>
                    <div class="btn">
                        <a href="contact.php" class="px-4 py-2 ">Contact Us</a>
                    </div>
                </div>
                <div class="col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                    <img src="./image/product/onion-flakes-22.jpeg" alt="" height="auto" width="100%" style="object-fit:cover; border:2px solid green">
                </div>
            </div>
        </div>
    </section>

    <!-- THis is ab section  -->
    <section class="py-5">
        <div class="container ">
            <div class="row py-5 px-4 justify-content-center align-items-center shadow-lg">
                <div class="col-md-6 pb-5 wow fadeInUp" data-wow-delay="0.2s">
                    <img src="./image/product/mission.png" alt="" height="auto" width="100%" style="object-fit:cover; border:2px solid green">
                </div>
                <div class="col-md-6  wow fadeInUp" data-wow-delay="0.2s">
                    <h2>Our Mission</h2>
                    <p class="lh-lg">
                    At RG Associates, our mission is to deliver premium quality onion, garlic, and makhana products that enhance culinary experiences. We prioritize sustainable sourcing and innovative practices to support our farmers and communities. Our commitment to excellence ensures that every product meets the highest standards of flavor and nutrition. Together, we aim to nourish lives and promote healthy eating.</p>
                    <div class="btn">
                        <a href="contact.php" class="px-4 py-2 ">Contact Us</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- THis is ab section  -->
    <section class="py-5">
        <div class="container ">
            <div class="row py-5 px-4 justify-content-center align-items-center shadow-lg">
                <div class="col-md-6 pb-5 wow fadeInUp" data-wow-delay="0.2s">
                    <h2>Our Vission</h2>
                    <p class="lh-lg">At RG Associates, our vision is to be a leading provider of onion, garlic, and makhana, recognized for our quality and integrity. We aspire to cultivate lasting partnerships with farmers and customers while promoting sustainable agricultural practices. By innovating in product offerings, we aim to enrich diets and elevate culinary traditions worldwide. Our goal is to inspire a healthier future through the power of nature’s finest ingredients.</p>
                    <div class="btn">
                        <a href="contact.php" class="px-4 py-2 ">Contact Us</a>
                    </div>
                </div>
                <div class="col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                    <img src="./image/product/vission.png" alt="" height="auto" width="100%" style="object-fit:cover; border:2px solid green">
                </div>
            </div>
        </div>
    </section>

   

    <?php include('footer.php'); ?>