<!-- Navbar & Hero Start -->
<div class="container-fluid nav-bar sticky-top px-4 py-2 py-lg-0">
    <nav class="navbar navbar-expand-lg navbar-light">
        <a href="" class="navbar-brand p-0">

            <img src="image/logo/logo.jpg" height="" alt="Logo">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="fa fa-bars"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav mx-auto py-0">
                <a href="index.php" class="nav-item nav-link">Home</a>
                <a href="about.php" class="nav-item nav-link">About</a>
                <!-- <a href="product.php" class="nav-item nav-link">Products</a> -->
                <a href="service.php" class="nav-item nav-link">Service</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Catagory</a>
                    <div class="dropdown-menu m-0">

                        <?php
                        include('config.php');
                        $sel = "SELECT * FROM  `category`";
                        $data = mysqli_query($con, $sel);
                        $result = mysqli_num_rows($data);
                        if ($result) {
                            while ($row = mysqli_fetch_array($data)) {
                        ?>
                                <a href="singlePage.php?cat_name=<?php echo $row['cat_name'];?>" class="dropdown-item"><?php echo $row['cat_name']; ?></a>
                        <?php
                            }
                        }
                        ?>
                    </div>
                </div>
                <a href="contact.php" class="nav-item nav-link">Contact</a>
            </div>
            <div class="team-icon d-none d-xl-flex justify-content-center me-3">
                <a class="btn btn-square btn-light rounded-circle mx-1" href=""><i
                        class="fab fa-facebook-f"></i></a>
                <a class="btn btn-square btn-light rounded-circle mx-1" href=""><i class="fab fa-twitter"></i></a>
                <a class="btn btn-square btn-light rounded-circle mx-1" href=""><i class="fab fa-instagram"></i></a>
                <a class="btn btn-square btn-light rounded-circle mx-1" href=""><i
                        class="fab fa-linkedin-in"></i></a>
            </div>
            <a href="#" class="btn btn-primary rounded-pill py-2 px-4 flex-shrink-0" data-bs-toggle="modal" data-bs-target="#exampleModal">Enquiry Now</a>
        </div>
    </nav>
</div>
<!-- Navbar & Hero End -->