<?php
$insert = 'false';
$passNotMatch = 'false';
$emailExist = 'false';
session_start();
if (!isset($_SESSION['loggedIn']) || $_SESSION['loggedIn'] != true) {
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        include './DB_Connection.php';

        $name = $_POST['name'];
        $email = $_POST['email'];
        $mobileNum = $_POST['mobileNum'];
        $password = $_POST['password'];

        if ($password === $_POST["cPass"]) {
            $passNotMatch = 'false';

            $checkEmailSql = "SELECT * FROM `bashakhali`.`users` WHERE email='$email'";
            $checkEmailResult = $conn->query($checkEmailSql);
            if ($checkEmailResult->num_rows == 0) {
                $sql = "INSERT INTO `bashakhali`.`users`(`name`,`email`,`mobileNum`,`password`) VALUES ('$name','$email','$mobileNum','$password')";

                if ($conn->query($sql) == true) {
                    // echo 'successfully'; 
                    $insert = 'true';
                    $_SESSION['loggedIn'] = true;
                    $_SESSION['email'] = $email;
                    $_SESSION['name'] = $name;
                    header('Location: index.php');
                } else {
                    echo "ERROR: $sql <br> $conn->error";
                }
            } else {
                // Print an error message if the email is already in use
                $emailExist = 'true';
            }
        } else {
            $passNotMatch = 'true';
        }
    }
} else {
    header('Location: index.php');
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
                        <a class="nav-link text-white" aria-current="page" href="index.php">হোম</a> <a class="nav-link text-white" aria-current="page" href="about.php">আমাদের সম্পর্কে</a>
                        <a class="nav-link text-white" href="allAd.php">সকল বিজ্ঞাপন </a>
                        <a class="nav-link text-white" href="postAd.php">বিজ্ঞাপন পোস্ট করুন
                        </a>
                        <a class="nav-link text-white active" href="login.php">লগ ইন/রেজিস্ট্রেশন
                        </a>
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
                        <h4 class="text-center my-3 mb-2 text-main fw-bold ">
                            রেজিস্ট্রেশন
                        </h4>

                        <div class="auth-icon rounded-circle mx-auto text-center "><i class="fas fa-user-plus text-main fs-4"></i>
                        </div>
                        <?php
                        if ($insert == 'true') {
                            echo "<div class='alert alert-success my-2' role='alert'>
                রেজিস্ট্রেশন সম্পন্ন হয়েছে
                    </div>";
                        }
                        ?>
                        <?php
                        if ($passNotMatch == 'true') {
                            echo "<div class='alert alert-danger my-2' role='alert'>
                            <i class='fa-solid fa-triangle-exclamation'></i> পাসওয়ার্ড মেলেনি
                    </div>";
                        }
                        ?>
                        <?php
                        if ($emailExist == 'true') {
                            echo "<div class='alert alert-danger my-2' role='alert'>
                            <i class='fa-solid fa-face-frown'></i> ইমেইলটি ইতোমধ্যে ব্যবহৃত হয়েছে!
                    </div>";
                        }
                        ?>
                        <form action="signup.php" method="post">
                            <div class="mb-3 mt-3 d-flex flex-column flex-md-row ">
                                <div class="w-100 me-2"><label for="exampleFormControlInput1" class="form-label">
                                        নাম
                                    </label>
                                    <input required type="text" class="form-control" id="exampleFormControlInput1" placeholder="নাম" name="name" />
                                </div>
                                <div class="w-100 "><label for="exampleFormControlInput2" class="form-label">মেইল আইডি
                                    </label>
                                    <input required type="email" class="form-control" id="exampleFormControlInput2" placeholder="মেইল আইডি" name="email" />
                                </div>
                            </div>
                            <div class="mb-3 ">

                                <label for="exampleFormControlInput3" class="form-label">মোবাইল নম্বর
                                </label>
                                <input required type="tel" class="form-control" id="exampleFormControlInput3" placeholder="মোবাইল নম্বর
                  " name="mobileNum" />

                            </div>

                            <div class="mb-3">
                                <label for="exampleFormControlInput4" class="form-label">পাসওয়ার্ড
                                </label>
                                <input required type="password" class="form-control" id="exampleFormControlInput4" placeholder="পাসওয়ার্ড
                  " name="password" />
                            </div>
                            <div class="mb-3">
                                <label for="exampleFormControlInput4" class="form-label"> কনফার্ম পাসওয়ার্ড
                                </label>
                                <input required type="password" name="cPass" class="form-control" id="exampleFormControlInput4" placeholder="পাসওয়ার্ড কনফার্ম করুন
                  " name="cPass" />
                            </div>
                            <button class="btn btn-success my-2 px-3 fw-bold " type="submit">
                                সাবমিট <i class="fa-solid fa-paper-plane"></i></button>
                        </form>
                    </div>
                </div>
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