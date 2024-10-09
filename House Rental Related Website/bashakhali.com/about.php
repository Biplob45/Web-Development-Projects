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
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Authentication</title>
    <link rel="icon" href="./images/favicon.ico" sizes="16x16" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous" />
    <link rel="stylesheet" href="./css/style.css" />
</head>

<body>
    <header class="header border-bottom border-second">
        <nav class="navbar navbar-expand-lg bg-main my-0">
            <div class="container">
                <a class="navbar-brand" href="index.php"><img src="./images/logo.png" width="55px" height="55px" alt="" /></a>
                <button class="navbar-toggler bg-white" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a class="nav-link text-white" aria-current="page" href="index.php">হোম</a> <a class="nav-link text-white active" aria-current="page" href="about.php">আমাদের সম্পর্কে</a>
                        <a class="nav-link text-white" href="allAd.php">সকল বিজ্ঞাপন </a>
                        <a class="nav-link text-white" href="postAd.php">বিজ্ঞাপন পোস্ট করুন
                        </a>
                        <?php
                        if ($loggedIn == true) {
                            echo "<a class='nav-link  text-white' href='#'>{$_SESSION['name']}
                            </a> <a class='nav-link  text-white' href='logout.php'>লগ আউট
                </a>";
                        } else {
                            echo "<a class='nav-link  text-white' href='login.php'>লগ ইন/রেজিস্ট্রেশন
                </a>";
                        }

                        ?>
                    </div>
                </div>
            </div>
        </nav>
    </header>
    <section class=" my-3">
        <div class="container">
            <div class="row">
                <div class="col-8 offset-2 pt-1">
                    <h3 class="text-main text-center about-title-border">বাসাখালি.কম ডিজিটাল প্লাটফর্ম সম্পর্কে
                    </h3>
                    <p class="text-main text-justify"> বাড়িবদল বাসা ভাড়া দেওয়া এবং বাসা ভাড়া খোঁজার একটি ডিজিটাল প্লাটফর্ম। বাড়িবদল ওয়েবসাইট এবং অ্যাপ এর মাধ্যমে আপনি কয়েক মিনিটেই দিয়ে দিতে পারেন আপনার বাসা ভাড়ার বিজ্ঞাপন অথবা আপনি যদি ভাড়াটিয়া হয়ে থাকেন তাহলে খুঁজে পেতে পারেন আপনার পছন্দের বাসা।
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section class=" my-3 ">
        <div class="container">
            <div class="row">
                <div class="col-8 offset-2 pt-1 bg-main rounded">
                    <h3 class="text-white text-center py-2 about-title-border">About US

                    </h3>
                    <p class="text-white text-justify"> Bashakhali.com is the digital platform for a rental property in Digital Bangladesh.
                        Our platform is easier and smarter. You can find flat rents in Bangladesh, sublet rents in Bangladesh, seat rents in Bangladesh including all sorts of rents like Bachelor rents, family flat rents, small family flat rents, rents for male students, rents for female students, rent for jobholders, and others.

                    </p>
                </div>
            </div>
        </div>
    </section>
    <section class=" my-3">
        <div class="container">
            <div class="row">
                <div class="col-8 offset-2 pt-1">
                    <h3 class="text-main text-center about-title-border">Our Goal
                    </h3>
                    <p class="text-main text-justify"> Bashakhali, a digital rental platform, is working as a part in building Bangladesh. Every day thousand of people walk in the sun and walk to find the desired home. The house shifting platform is constantly working to solve this problem. Bahsakhali Platform is committed to improving the quality of service.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section class=" my-3">
        <div class="container">
            <div class="row">
                <div class="col-8 offset-2 pt-1">
                    <h3 class="text-main text-center about-title-border">Our Service Area
                    </h3>
                    <p class="text-main text-justify"> Bashakhali.com website and rental mobile application ensure you the easiest way to find any kinds of property rent in Bangladesh in a few mins.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <section class=" my-5 ">
        <div class="container">
            <h3 class="text-main text-center about-title-border">Our Team
            </h3>
            <div class="row g-3 mt-2">
                <div class="col-12 col-sm-12 offset-md-2 offset-lg-2 col-md-8 col-lg-8">
                    <div class="card h-100  ">
                        <div class="row g-3">
                            <div class="col-3 d-flex justify-content-center align-items-center"><img class="card-img" src="./images/kazi.png" alt=""></div>
                            <div class="col-9 d-flex justify-content-center  flex-column">
                                <h6 class="fw-bold text-main mt-2">Kazi Moinul Ahsan
                                </h6>
                                <p class="fw-bold text-main">Roll: 590959
                                </p>
                                <p>This is our first project for our 4th semester of computer technology coursework at the Daffodil Institute of IT.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                    <div class="card h-100  ">
                        <div class="row ">
                            <div class="col-4 d-flex justify-content-center align-items-center"><img class="card-img" src="./images/rabbani.jpg" alt=""></div>
                            <div class="col-8 d-flex justify-content-center  flex-column">
                                <h6 class="fw-bold text-main mt-2">Golam Rabbani

                                </h6>
                                <p class="fw-bold text-main">Roll: 590921

                                </p>
                                <p>This is our first project for our 4th semester of computer technology coursework at the Daffodil Institute of IT.

                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-6 col-lg-6">
                    <div class="card h-100  ">
                        <div class="row ">
                            <div class="col-4 d-flex justify-content-center align-items-center"><img class="card-img" src="./images/koli.jpg" alt=""></div>
                            <div class="col-8 d-flex justify-content-center  flex-column">
                                <h6 class="fw-bold text-main mt-2">Nazmun Nahar


                                </h6>
                                <p class="fw-bold text-main">Roll: 590953

                                </p>
                                <p>This is our first project for our 4th semester of computer technology coursework at the Daffodil Institute of IT.


                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
    <footer class="footer bg-light pt-3 pb-5">
        <div class="container">
            <div class="row">
                <div class="col-12 col-sm-12 col-md-3 col-lg-3">
                    <div class="aboute">
                        <h4 class="fs-6 text-justify">
                            <span class="text-second">bashakhali.com</span> বাসা ভাড়া, অফিস
                            ভাড়ার অনলাইন পোর্টাল। খুব সহজেই এখনই খুজে নিন আপনার নতুন বাসা
                            অথবা অফিস।
                        </h4>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-3 col-lg-3 d-flex justify-content-center">
                    <div class="">
                        <h4 class="fs-6 text-second">সোশ্যাল নেটওয়ার্কে আমরা</h4>
                        <ul>
                            <li>
                                <i class="fas fa-chevron-right"></i> <a href="#">Facebook</a>
                            </li>
                            <li>
                                <i class="fas fa-chevron-right"></i> <a href="#">Youtube</a>
                            </li>
                            <li>
                                <i class="fas fa-chevron-right"></i> <a href="#">Twitter</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-12 col-sm-12 col-md-2 col-lg-2">
                    <h4 class="fs-6 text-second">আমাদের সম্পর্কে</h4>
                    <a href="/">শর্তাবলী এবং নীতিমালা </a>
                </div>
                <div class="col-12 col-sm-12 col-md-4 col-lg-34">
                    <h4 class="fs-6 text-second">স্বশরীরে ভিজিট করুন!</h4>
                    <iframe class="border" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3688.604703470872!2d91.83208189999999!3d22.406254800000003!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30ad270a69e9d8bb%3A0x780a42aef6e9755f!2sKazi%20Kutir!5e0!3m2!1sen!2sbd!4v1672674076071!5m2!1sen!2sbd" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</body>

</html>