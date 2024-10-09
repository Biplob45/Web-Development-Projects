<?php
$loggedIn = false;
session_start();

// Check if the session variable 'email' is set
if (!isset($_SESSION['email']) || $_SESSION['loggedIn'] != true) {
    $loggedIn = false;
} else {
    $loggedIn = true;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>lucied | Home Page</title>
    <!-- style.css -->
    <link rel="stylesheet" href="css/style.css" />
    <!-- fontawosme -->
    <link rel="stylesheet" href="css/font-awesome.min.css" />
    <!-- google fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@300;400;600;700;900&display=swap" rel="stylesheet" />
    <!-- Bootstrap CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet" />
    <!-- owl carosel -->
    <link rel="stylesheet" href="css/owl.carousel.min.css" />
    <link rel="stylesheet" href="css/owl.theme.default.min.css" />
    <style>
        body {
            background-color: #f7f7f7;
        }
    </style>
</head>

<body>
    <!---Header section start--->
    <header class="header-section">
        <!-- mainmenu start -->
        <div class="mainmenu fixed-top ">
            <nav class="navbar navbar-expand-lg navbar-light ">
                <div class="container">
                    <a class="navbar-brand" href="#">
                        <img src="image/logo.png" alt="Lucied" />
                    </a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                            <li class="nav-item">
                                <a class="nav-link active" aria-current="page" href="index.php">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="index.php#features"> Features </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="about.php"> About </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="index.php#Testimonials"> Testimonials </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="index.php#pricing"> Pricing </a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="index.php#Contact"> Contact </a>
                            </li>
                            <?php
                            if ($loggedIn == true) {
                                echo "<li class='nav-item d-flex'> <a  class='nav-link'>{$_SESSION['username']}</a>
        <a href='logout.php' class=' nav-link  btn    '>Log Out</a>
      </li>";
                            } else {
                                echo "<li class='nav-item'>
              <a href='login.php' class=' nav-link  btn  '>Login</a>
            </li>";
                            }
                            ?>

                        </ul>
                    </div>
                </div>
            </nav>
        </div>
    </header>
    <main>
        <section id="about-us" class="py-5">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-12 my-3  text-center">
                        <h1 class="display-4 mb-3">About Us</h1>
                        <p class="lead mb-4">We are a small team of dedicated individuals who are passionate about providing high-quality products and services to our customers. Our goal is to create innovative solutions that make your life easier and more enjoyable.</p>
                    </div>
                </div>
                <div class="row text-center">
                    <div class="col-lg-12 col-12 my-3">
                        <h2 class="mb-3">Our Mission</h2>
                        <p class="lead mb-4">Our mission is to provide our customers with the best possible experience when using our products and services. We strive to deliver excellent customer service, top-quality products, and innovative solutions that meet your needs.</p>
                    </div>
                    <div class="col-lg-12 col-12 my-3">
                        <h2 class="mb-3">Our Team</h2>
                        <p class="lead mb-4">Our team consists of experienced professionals who are experts in their respective fields. We are committed to delivering the highest level of service and quality to our customers. Our team members are dedicated to staying up-to-date with the latest industry trends and technologies to ensure that we are providing you with the best possible solutions.</p>
                    </div>
                </div>
                <div class="row d-flex flex-wrap justify-content-center">

                    <div class="col-lg-6">
                        <div class="card mb-4 h-100">
                            <div class="img-box  text-center ">
                                <img src="./image/alvee.jpg" class="card-img-top " alt="...">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title fw-bold">Mehrab Al Hasin Alvi</h5>
                                <p class="card-text text-justified ">As the lead designer, Mr. Mehrab Al Hasin Alvi is responsible for overseeing the design team and ensuring that all design projects are completed to the highest standard. He plays a crucial role in shaping the overall design vision and direction of the company.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="card mb-4 h-100">
                            <div class="img-box text-center ">
                                <img src="./image/siam.jpg" class="card-img-top " alt="...">
                            </div>
                            <div class="card-body">
                                <h5 class="card-title fw-bold">Siam Alam</h5>
                                <p class="card-text text-justified ">Mr. Siam Alam is a skilled backend developer who plays a vital role in developing and maintaining the company's website and web applications. He is responsible for designing, developing, and testing server-side components to ensure the smooth functioning of the website and to provide a seamless user experience.</p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </section>
    </main>
</body>

</html>