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
    <title>Home</title>
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
                        <a class="nav-link active text-white" aria-current="page" href="index.php">হোম</a>
                        <a class="nav-link text-white" aria-current="page" href="about.php">আমাদের সম্পর্কে</a>
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
    <section class="bg-main py-3">
        <div class="container">
            <div class="title-box">
                <h1 class="text-white text-center fs-5 mt-0 py-2">
                    বাসা খোঁজার সবচেয়ে সহজ উপায় আপনার পছন্দের বাসাটি এখনি খুঁজুন
                </h1>
                <div class="input-group mb-3 mx-auto w-75">

                    <input required type="text" class="form-control border-start-0 px-4" placeholder="খুঁজুন" aria-label="search" aria-describedby="basic-addon1" id="search-field" />
                    <button class="input-group-text bg-white" id="basic-addon1"><i class="fas fa-search"></i></button>
                </div>
            </div>
        </div>
    </section>
    <section class="popular-category container py-3">
        <h2 class="text-second text-center fs-5 mt-0 py-2">জনপ্রিয় ক্যাটেগরি</h2>
        <div class="row row-cols-1 gx- row-cols-md-2 row-cols-lg-3 justify-content-center">
            <div class="col my-2 text-center">
                <a href="allAd.php?query=ফ্ল্যাট ভাড়া" class="card mx-auto" style="max-width: 18rem">
                    <img src="./images/flat-rent.png" class="card-img-top w-30 mx-auto p-2" alt="..." />
                    <div class="card-body">
                        <p class="card-title text-main fw-bold">ফ্ল্যাট ভাড়া</p>
                    </div>
                </a>
            </div>
            <div class="col my-2 text-center">
                <a href="allAd.php?query=সিট ভাড়া" class="card mx-auto" style="max-width: 18rem">
                    <img src="./images/seat-rent.png" class="card-img-top w-30 mx-auto p-2" alt="..." />
                    <div class="card-body">
                        <p class="card-title text-main fw-bold">সিট ভাড়া</p>
                    </div>
                </a>
            </div>
            <div class="col my-2 text-center">
                <a href="allAd.php?query=সাবলেট" class="card mx-auto" style="max-width: 18rem">
                    <img src="./images/sublate.png" class="card-img-top w-30 mx-auto p-2" alt="..." />
                    <div class="card-body">
                        <p class="card-title text-main fw-bold">সাবলেট</p>
                    </div>
                </a>
            </div>
            <div class="col my-2 text-center">
                <a href="allAd.php?query=ব্যাচেলর" class="card mx-auto" style="max-width: 18rem">
                    <img src="./images/bachelor_mess.png" class="card-img-top w-30 mx-auto p-2" alt="..." />
                    <div class="card-body">
                        <p class="card-title text-main fw-bold">ব্যাচেলর</p>
                    </div>
                </a>
            </div>
            <div class="col my-2 text-center">
                <a href="allAd.php?query=ফ্যামিলি" class="card mx-auto" style="max-width: 18rem">
                    <img src="./images/family.png" class="card-img-top w-30 mx-auto p-2" alt="..." />
                    <div class="card-body">
                        <p class="card-title text-main fw-bold">ফ্যামিলি</p>
                    </div>
                </a>
            </div>
        </div>
    </section>
    <section class=" py-3 text-center my-3">
        <div class="container bg-main p-3 rounded">
            <h2 class="text-second fs-5 mt-0">
                আপনার বাসা ভাড়া দিতে চান? খুব সহজেই আপনার বিজ্ঞাপনটি ফ্রি পোস্ট করুন
            </h2>
            <a href="postAd.php" class="btn btn-danger my-2 px-3">
                বিজ্ঞাপন পোস্ট করুন
            </a>
        </div>

    </section>
    <section class=" my-3">
        <div class="container">
            <div class="row">
                <div class="col-12  pt-1">
                    <h3 class="text-main text-center about-title-border">জিজ্ঞাসা ?

                    </h3>
                    <p class="text-main text-justify">প্রতিদিনই নতুন নতুন বাসা ভাড়ার বিজ্ঞাপন প্রকাশ করছেন আমাদের সন্মানিত ব্যাবহারকারিগন। ওয়েবসাইট এর মাধ্যমে বাসা ভাড়ার বিজ্ঞাপন প্রকাশ করা একদমই সোজা। মাত্র কয়েক ক্লিকেই প্রকাশ করতে পারেন আপনার বাসা ভাড়ার বিজ্ঞাপনটি। ওয়েবসাইট সম্পূর্ণ ফ্রিতে আপনি ব্যাবহার করতে পারবেন। ডিজিটাল প্লাটফর্ম এর মাধ্যমে আপনি পছন্দের বাসা খোঁজা, বুকমার্ক করা, বন্ধুদের সাথে শেয়ার করা, বিজ্ঞাপন দাতাদের সাথে সরাসরি যোগাযোগ করা সহ বাসা ভাড়া সংক্রান্ত আরও অনেক ডিজিটাল সেবা পেয়ে যাবেন।

                    </p>
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
    <script type="text/javascript">
        const searchBtn = document.getElementById("basic-addon1")
        const search_field = document.getElementById("search-field")
        searchBtn.addEventListener('click', function() {
            // console.log(search_field.value);
            location.href = `allAd.php?query=${search_field.value}`
        })
    </script>
</body>

</html>