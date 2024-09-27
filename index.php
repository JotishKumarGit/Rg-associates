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


        /* THis is  tesimonials image */
        .testimonial::after {
            content: "";
            width: 100%;
            height: 100%;
            position: absolute;
            top: 0;
            left: 0;
            background-image: url(./image/product/peanuts.webp);
            background-position: center center;
            background-repeat: no-repeat;
            background-size: cover;
            z-index: -2;
            animation-name: image-zoom;
            animation-duration: 10s;
            animation-delay: 1s;
            animation-iteration-count: infinite;
            animation-direction: alternate;
            transition: 1s;
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



    <!-- Carousel End -->
    <div id="carouselExample" class="carousel slide">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="image/banner/penutes-baner.jpeg" class="d-block w-100" alt="..." height="500px" width="100%" style="object-fit: cover;">
            </div>
            <div class="carousel-item">
                <img src="image/banner/makhana-baner.jpeg" class="d-block w-100" alt="..." height="500px" width="100%" style="object-fit: cover;">
            </div>

        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>

    <!-- Feature Start -->
    <div class="container-fluid feature py-5">
        <div class="container py-5">
            <div class="row g-4">
                <div class="col-lg-4 wow fadeInUp my-5" data-wow-delay="0.2s">
                    <div class="feature-item h-100">
                        <img src="image/product/quility.jpg" class="h-100 rounded w-100" style="object-fit: cover;"
                            alt="Image">
                        <div class="feature-content p-4 h-100">
                            <div class="feature-content-inner">
                                <h4 class="text-white">Quality Assurance</h4>
                                <p class="text-white">We meticulously select our products to ensure they meet the
                                    highest standards of quality and freshness.
                                </p>
                                <a href="about.php" class="btn btn-primary rounded-pill py-2 px-4">Read More <i
                                        class="fa fa-arrow-right ms-1"></i></a>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-lg-4 wow fadeInUp my-5" data-wow-delay="0.4s">
                    <div class="feature-item h-100">
                        <img src="image/product/call.jpg" class="h-100 rounded w-100" style="object-fit: cover;"
                            alt="Image">
                        <div class="feature-content p-4">
                            <div class="feature-content-inner">
                                <h4 class="text-white">Customer Support</h4>
                                <p class="text-white">Our friendly team is here to assist you with any inquiries or
                                    concerns, ensuring a seamless shopping experience.
                                </p>
                                <a href="about.php" class="btn btn-primary rounded-pill py-2 px-4">Read More <i
                                        class="fa fa-arrow-right ms-1"></i></a>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-lg-4 wow fadeInUp my-5" data-wow-delay="0.6s">
                    <div class="feature-item h-100">
                        <img src="image/product/shipping.jpg" class="h-100 rounded w-100" style="object-fit: cover;"
                            alt="Image">
                        <div class="feature-content p-4">
                            <div class="feature-content-inner">
                                <h4 class="text-white">Fast Shipping</h4>
                                <p class="text-white">We offer prompt and reliable shipping options to get your favorite
                                    products to you as quickly as possible.
                                </p>
                                <a href="about.php" class="btn btn-primary rounded-pill py-2 px-4">Read More <i
                                        class="fa fa-arrow-right ms-1"></i></a>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Feature End -->

    <!-- About Start -->
    <div class="container-fluid about pb-5">
        <div class="container pb-5">
            <div class="row g-5">
                <div class="col-xl-6 wow fadeInUp" data-wow-delay="0.2s">
                    <div>
                        <h4 class="text-primary">About RG Associates </h4>
                        <p class="  mb-4">Welcome to <a href="/">RG Associates</a> where we bring you the finest
                            selection of quality products to enhance your lifestyle. Our journey began with a passion
                            for wholesome foods and comfortable living, and we’re proud to offer a range of items that
                            cater to both health-conscious consumers and those looking for quality home essentials.
                        </p>
                        <p>The idea for RG Associates arose from a deep appreciation for wholesome living and the belief
                            that what we consume and use in our daily lives significantly impacts our well-being. Our
                            founders, passionate about natural ingredients and comfortable living, set out to create a
                            brand that embodies these values. Today, we proudly present a diverse range of products that
                            reflect our commitment to quality and the well-being of our customers. <a href="">Read
                                More...</a> </p>
                        <div class="row g-4">
                            <div class="col-md-12">
                                <div class="d-flex">
                                    <div class="me-3"><i class="fas fa-envelope fa-3x text-primary"></i></div>
                                    <div>
                                        <h4>Mail Now</h4>
                                        <p><a href="mailto:richasarudost@ gmail.com"> richasarudost@ gmail.com</a></p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="d-flex">
                                    <div class="me-3"><i class="fa fa-phone-alt fa-3x text-primary"></i></div>
                                    <div>

                                        <h4>Call Us Now</h4>
                                        <p><a href="tel:7830246000">+91 7830246000</a></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-6 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="position-relative rounded">
                        <div class="rounded" style="margin-top: 40px;">
                            <div class="row g-0">
                                <div class="col-lg-12">
                                    <div class="rounded mb-4 shadow-lg">
                                        <img src="image/product/pro-img.jpeg" class="img-fluid rounded w-100" alt="">
                                    </div>
                                    <div class="row gx-4 gy-0">
                                        <div class="col-6">
                                            <div class="counter-item bg-primary rounded text-center p-4 h-100">
                                                <div class="counter-item-icon mx-auto mb-3">
                                                    <i class="fas fa-thumbs-up fa-3x text-white"></i>
                                                </div>
                                                <div class="counter-counting mb-3">
                                                    <span class="text-white fs-2 fw-bold"
                                                        data-toggle="counter-up">150</span>
                                                    <span class="h1 fw-bold text-white">K +</span>
                                                </div>
                                                <h5 class="text-white mb-0">Happy Clients</h5>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <div class="counter-item bg-dark rounded text-center p-4 h-100">
                                                <div class="counter-item-icon mx-auto mb-3">
                                                    <i class="fas fa-certificate fa-3x text-white"></i>
                                                </div>
                                                <div class="counter-counting mb-3">
                                                    <span class="text-white fs-2 fw-bold"
                                                        data-toggle="counter-up">122</span>
                                                    <span class="h1 fw-bold text-white"> +</span>
                                                </div>
                                                <h5 class="text-white mb-0">Export</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="rounded bg-primary p-4 position-absolute d-flex justify-content-center"
                            style="width: 90%; height: 80px; top: -40px; left: 50%; transform: translateX(-50%);">
                            <h3 class="mb-0 text-white">Established in 2024</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Service Start -->
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
    </div>
    <!-- Service End -->


    <!-- Product sections  -->
    <div class="container  " style="margin-top: 6rem;margin-bottom:6rem">
        <div class="text-center mx-auto mb-5" style="max-width: 600px;">
            <h1 class="display-5 mb-0">Our Products</h1>
            <hr class="w-25 mx-auto bg-primary">
        </div>
        <div class="row justify-content-center">
            <?php
            include('config.php');
            $sel = "SELECT * FROM `products` ";
            $data = mysqli_query($con, $sel);
            $result = mysqli_num_rows($data);
            if ($result) {
                while ($row = mysqli_fetch_array($data)) {
            ?>
                    <div class="col-md-4 col-sm-12 col-lg-4 col-12 mb-5 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="card shadow-lg h-100" style="border: 1px solid green;">

                            <img src="<?php echo $row['pro_image']; ?>" class="card-img-top" alt="..." height="250px" width="100%" style="object-fit:cover; border:1px solid green">
                            <div class="card-body mt-3 text-center">
                                <h5 class="card-title"><?php echo $row['pro_name']; ?></h5>
                                <div class="mt-4">
                                    <a href="" class="btn btn-primary   py-2" data-bs-toggle="modal" data-bs-target="#exampleModal">Enquiry</a>
                                    <a href="single.php?pro_id=<?php echo $row['pro_id']; ?>" class="btn btn-primary  py-2">Details</a>
                                </div>
                            </div>
                        </div>
                    </div>
            <?php
                }
            }
            ?>

        </div>
    </div>

    <!-- Testimonial Start -->
    <div class="container-fluid testimonial py-5">
        <div class="container py-5">
            <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                <h4 class="text-primary">Testimonials</h4>
                <h1 class="display-5 text-white mb-4">Our Clients Reviews</h1>

            </div>
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.2s">
                <div class="testimonial-item p-4">
                    <p class="text-white fs-4 mb-4">"The makhana from RG Associates is simply the best! It's my go-to
                        snack for late-night cravings—healthy and delicious!"
                    </p>
                    <div class="testimonial-inner">

                        <div class="ms-4">

                            <p class="text-start text-white">Aarav Sharma</p>
                            <div class="d-flex text-primary">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star text-white"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="testimonial-item p-4">
                    <p class="text-white fs-4 mb-4">"I love the dehydrated onion and garlic! They save me so much time
                        in the kitchen without sacrificing flavor."
                    </p>
                    <div class="testimonial-inner">

                        <div class="ms-4">

                            <p class="text-start text-white">Priya Mehta</p>
                            <div class="d-flex text-primary">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star text-white"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="testimonial-item p-4">
                    <p class="text-white fs-4 mb-4">"The bedsheets are incredibly soft and comfortable. I sleep so much
                        better now!"
                    </p>
                    <div class="testimonial-inner">

                        <div class="ms-4">

                            <p class="text-start text-white">Karan Gupta</p>
                            <div class="d-flex text-primary">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star text-white"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->


    <!-- Contact Start -->
    <div class="container-fluid contact py-5">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-12 col-xl-6 wow fadeInUp" data-wow-delay="0.2s">
                    <div>
                        <div class="pb-5">
                            <h4 class="text-primary">Get in Touch</h4>
                            <p class="mb-0">We love to hear from you! Whether you have questions, feedback, or just want to say hello, feel free to reach out. Your thoughts and inquiries are important to us.
                            </p>
                        </div>
                        <div class="row g-4">
                            <div class="col-lg-6">
                                <div class="contact-add-item rounded bg-light p-4 100">
                                    <div class="contact-icon text-primary mb-4">
                                        <i class="fas fa-map-marker-alt fa-2x"></i>
                                    </div>
                                    <div class="h-100">
                                        <h4>Address</h4>
                                        <p class="mb-0">H.n - 3, Biharman nagla, opposite Tandan Provision Store, F Munshi nagar , Bareilly , Uttar Pradesh , India-243122</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6 ">
                                <div class="contact-add-item rounded bg-light p-4 h-100">
                                    <div class="contact-icon text-primary mb-4">
                                        <i class="fas fa-envelope fa-2x"></i>
                                    </div>
                                    <div >
                                        <h4>Mail Us</h4>
                                        <p class="mb-0 ">richasarudost@gmail.com</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="contact-add-item rounded bg-light p-4 100">
                                    <div class="contact-icon text-primary mb-4">
                                        <i class="fa fa-phone-alt fa-2x"></i>
                                    </div>
                                    <div >
                                        <h4>Telephone</h4>
                                        <p class="mb-0">+91 7830246000</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="contact-add-item rounded bg-light p-4 100">
                                    <div class="contact-icon text-primary mb-4">
                                        <i class="fab fa-firefox-browser fa-2x"></i>
                                    </div>
                                    <div >
                                        <h4>Our Website</h4>
                                        <a href="https://www.rgassociates.co.in/">RG Associates</a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="d-flex justify-content-around bg-light rounded p-4">
                                    <a class="btn btn-xl-square btn-primary rounded-circle" href="#"><i class="fab fa-facebook-f"></i></a>
                                    <a class="btn btn-xl-square btn-primary rounded-circle" href="#"><i class="fab fa-twitter"></i></a>
                                    <a class="btn btn-xl-square btn-primary rounded-circle" href="#"><i class="fab fa-instagram"></i></a>
                                    <a class="btn btn-xl-square btn-primary rounded-circle" href="#"><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!--  -->
                <div class="col-xl-6 wow fadeInUp " data-wow-delay="0.4s">
                    <div class="bg-light p-5 rounded h-100" >
                        <h4 class="text-primary mb-4 " style="margin-top: 90px;">Send Your Message</h4>
                        <form>
                            <div class="row g-4 ">
                                <div class="col-lg-12 col-xl-12">
                                    <div class="form-floating">
                                        <input type="text" class="form-control border-0 name" name="" id="name" placeholder="Your Name">
                                        <label for="name">Your Name</label>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-xl-6">
                                    <div class="form-floating">
                                        <input type="email" name="" class="form-control border-0 email" id="email" placeholder="Your Email">
                                        <label for="email">Your Email</label>
                                    </div>
                                </div>
                                <div class="col-lg-12 col-xl-6">
                                    <div class="form-floating">
                                        <input type="phone" name="" class="form-control border-0 phone" id="phone" placeholder="Phone">
                                        <label for="phone">Your Phone</label>
                                    </div>
                                </div>
                                
                                <div class="col-12">
                                    <div class="form-floating">
                                        <textarea name="message" class="form-control border-0 message" placeholder="Leave a message here" id="message" style="height: 160px"></textarea>
                                        <label for="message">Message</label>
                                    </div>

                                </div>
                                <div class="col-12">
                                    <button class="btn btn-primary w-100 py-3 " type="button" onclick="contact()">Send Message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!--  -->
                <div class="col-12 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="rounded">
                       
                        <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d1794185.9122921494!2d77.1078564067179!3d28.561673182944162!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1sH.n%20-%203%2C%20Biharman%20nagla%2C%20opposite%20Tandan%20Provision%20Store%2C%20F%20Munshi%20nagar%20%2C%20Bareilly%20%2C%20Uttar%20Pradesh%20%2C%20India-243122!5e0!3m2!1sen!2sin!4v1727255644383!5m2!1sen!2sin" class="rounded w-100"
                            style="height: 400px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->


    <?php include('footer.php'); ?>