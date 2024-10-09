<?php
$insert = 'false';

$loggedIn = false;
session_start();

// Check if the session variable 'email' is set
if (!isset($_SESSION['email']) || $_SESSION['loggedIn'] != true) {
    $loggedIn = false;
} else {
    $loggedIn = true;
}

if (isset($_POST['category'])) {
    include './DB_Connection.php';

    $category = $_POST['category'];
    $address = $_POST['address'];
    $img = $_POST['img'];
    $description = $_POST['description'];

    $sql = "INSERT INTO `bashakhali`.`ad`(`category`,`address`,`img`,`description`) VALUES ('$category','$address','$img','$description')";


    // echo $sql;

    if ($conn->query($sql) == true) {
        // echo 'successfully'; 
        $insert = 'true';
    } else {
        echo "ERROR: $sql <br> $conn->error";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>Post AD</title>
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
                        <a class="nav-link text-white" aria-current="page" href="index.php">হোম</a> <a class="nav-link text-white" aria-current="page" href="about.php">আমাদের সম্পর্কে</a>
                        <a class="nav-link text-white" href="allAd.php">সকল বিজ্ঞাপন
                        </a>
                        <a class="nav-link text-white active" href="postAd.php">বিজ্ঞাপন পোস্ট করুন
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
    <section class="form">
        <div class="container">
            <div class="row py-4">
                <div class="col-12">
                    <div class="w-75 mx-auto">
                        <h4 class="text-center my-3 mb-4 text-main fw-bold">
                            বিজ্ঞাপন পোস্ট করুন
                        </h4>
                        <?php
                        if ($insert == 'true') {
                            echo "<div class='alert alert-success' role='alert'>
                বিজ্ঞাপন পোস্ট করা সম্পন্ন হয়েছে
                    </div>";
                        }
                        ?>
                        <form action="postAd.php" method="post">
                            <div class="mb-3">
                                <label for="exampleFormControlInput0" class="form-label">ক্যাটাগরি</label>
                                <input required type="text" class="form-control" id="exampleFormControlInput0" placeholder="ক্যাটেগরি" name="category" />
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput1" class="form-label">ঠিকানা</label>
                                <input required type="text" class="form-control" id="exampleFormControlInput1" placeholder="ঠিকানা" name="address" />
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput2" class="form-label">ছবি
                                </label>
                                <input required type="url" class="form-control" id="exampleFormControlInput2" placeholder="ছবির লিংক প্রদান করুন
                  " name="img" />
                                <small class="text-secondary ms-1">**<a target="_blank" href="https://postimages.org/">postimages.org</a>
                                    ওয়েব সাইটে ছবি আপলোড করে ডিরেক্ট লিংক ইনপুট করুন</small>
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlTextarea3" class="form-label">বিবরণ</label>
                                <textarea required class="form-control" id="exampleFormControlTextarea3" rows="3" name="description"></textarea>
                                <button class="btn btn-success my-3 fw-bold" type="submit">Post AD <i class="fas fa-ad"></i></button>
                            </div>
                        </form>
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