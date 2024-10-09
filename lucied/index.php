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
                <a class="nav-link active" aria-current="page" href="#">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#features"> Features </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="about.php"> About </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#Testimonials"> Testimonials </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#pricing"> Pricing </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#Contact"> Contact </a>
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
    <!-- mainmenu end -->
    <!-- banner section start -->
    <div class="banner">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="inner-banner">
              <h6>introducing lucied theme</h6>
              <h1>
                Carefully crafted and <br />
                beautiful landing page.
              </h1>
              <p>
                Etiam ullamcorper et turpis eget hendrerit. Praesent varius
                risus <br />
                mi, at elementum magna ultricies accumsan. Cras venenatis
                <br />
                lacus sed dolor placerat tempus. Morbi blandit at neque ut
                <br />
                imperdiet.
              </p>
              <div class="inner-btn">
                <a href="#" target="blank" class="btn btn-primary">Download now
                </a>
                <a href="#" target="blank" class="btn btn-light">view Features</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- banner section end -->
  </header>
  <!-- header section end -->
  <!--Features section start -->
  <section class="Features mt-3" id="features">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <p class="product-overview">product overview</p>
          <h4 class="amazing-features">List of amazing features</h4>
          <img src="image/underline.png" alt="" />
        </div>
      </div>
      <div class="row">
        <div class="col-md-3">
          <div class="features-des">
            <div class="feat-icon">
              <img src="image/Monitor.png" alt="fff" class="f2" />
            </div>
            <h6>Responsive</h6>
            <p>
              Fusce fermentum placerat <br />
              magna ac pharetra. Aliquam <br />
              euismod elit non ipsum lacinia <br />
              consectetur.
            </p>
          </div>
        </div>
        <div class="col-md-3">
          <div class="features-des">
            <div class="feat-icon">
              <img src="image/Settings.png" alt="fff" class="f2" />
            </div>
            <h6>Customizable</h6>
            <p>
              Fusce fermentum placerat <br />
              magna ac pharetra. Aliquam <br />
              euismod elit non ipsum lacinia <br />
              consectetur.
            </p>
          </div>
        </div>
        <div class="col-md-3">
          <div class="features-des">
            <div class="feat-icon">
              <img src="image/Like.png" alt="fff" />
            </div>
            <h6>Customizable</h6>
            <p>
              Fusce fermentum placerat <br />
              magna ac pharetra. Aliquam <br />
              euismod elit non ipsum lacinia <br />
              consectetur.
            </p>
          </div>
        </div>
        <div class="col-md-3">
          <div class="features-des">
            <div class="feat-icon">
              <img src="image/Phone.png" alt="fff" />
            </div>
            <h6>Mobile Friendly</h6>
            <p>
              Fusce fermentum placerat <br />
              magna ac pharetra. Aliquam <br />
              euismod elit non ipsum lacinia <br />
              consectetur.
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!--Features section end -->
  <!-- about long start -->
  <section class="about-long">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <img src="image/devices.png" alt="fff" />
        </div>
        <div class="col-md-6">
          <p class="details">Dip into the details</p>
          <h1>Beautiful on every device</h1>
          <img src="image/underline.png" alt="fff" class="underline" />
          <p class="full-details">
            Duis sed odio sit amet nibh vulputate cursus a sit amet mauris
            .<br />
            Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt <br />
            auctor a ornare odio. Sed non mauris vitae erat consequat <br />
            auctor eu in elit.
          </p>
          <div class="list">
            <p class="key-features">
              <img src="image/Cup.png" alt="key-features" />Awesome design<br />
              <img src="image/Mouse.png" alt="key-features" />Fully
              responsive<br />
              <img src="image/Energy.png" alt="key-features" />Retina ready<br />
              <img src="image/Speedometer.png" alt="key-features" />Tons of
              features and easy to use<br />
            </p>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- about long end -->
  <!-- about short start -->
  <section class="about-short">
    <div class="container">
      <div class="row">
        <div class="col-md-5">
          <div class="dip-details">
            <p>dip into the details</p>
          </div>
          <h1>Super easy to customize</h1>
          <div class="hr">
            <img src="image/underline.png" alt="underline img" />
          </div>
          <p>
            Duis sed odio sit amet nibh vulputate cursus a sit amet mauris.
            Morbi accumsan ipsum velit. Nam nec tellus a odio tincidunt auctor
            a ornare odio. Sed non mauris vitae erat consequat auctor eu in
            elit. Class aptent taciti sociosqu ad litora torquent per conubia
            nostra, per inceptos himenaeos.
          </p>
        </div>
        <div class="col-md-7">
          <img src="image/iphone5.png" alt="iphone" />
        </div>
      </div>
    </div>
  </section>
  <!-- about short end -->
  <!-- pagination start -->
  <section class="pagination" id="Testimonials">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="head-docu">
            <p>Testimonials</p>
            <h1>Client Thoughts</h1>
            <img src="image/underline.png" alt="" />
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12">
          <div class="owl-carousel owl-theme">
            <div class="item">
              <h4>
                Once upon a time all the Rivers combined to protest <br />
                against the action of the Sea in making their waters salt.<br />
                “When we come to you,” said they to the Sea.
              </h4>
              <div class="d-flex position-relative mar">
                <img src="image/Warstwa 7.png" class="flex-shrink-0 me-3" alt="..." />
                <div>
                  <p>John Doe</p>
                  <h5 class="mt-0">CEO, THE RIVERS COMPANY</h5>
                </div>
              </div>
            </div>
            <div class="item">
              <h4>
                A shoe is not only a design, but it's a part of your body
                <br />
                language, the way you walk. The way you're going to <br />
                move is quite dictated by your shoes.
              </h4>
              <div class="d-flex position-relative mar">
                <img src="image/Warstwa 16.png" class="flex-shrink-0 me-3" alt="..." />
                <div>
                  <p>Dean Winchester</p>
                  <h5 class="mt-0">UX DESIGNER, GOOGLE INC.</h5>
                </div>
              </div>
            </div>
            <div class="item">
              <h4>
                Once upon a time all the Rivers combined to protest <br />
                against the action of the Sea in making their waters salt.<br />
                “When we come to you,” said they to the Sea.
              </h4>
              <div class="d-flex position-relative mar">
                <img src="image/Warstwa 7.png" class="flex-shrink-0 me-3" alt="..." />
                <div>
                  <p>John Doe</p>
                  <h5 class="mt-0">CEO, THE RIVERS COMPANY</h5>
                </div>
              </div>
            </div>
            <div class="item">
              <h4>
                A shoe is not only a design, but it's a part of your body
                <br />
                language, the way you walk. The way you're going to <br />
                move is quite dictated by your shoes.
              </h4>
              <div class="d-flex position-relative mar">
                <img src="image/Warstwa 16.png" class="flex-shrink-0 me-3" alt="..." />
                <div>
                  <p>Dean Winchester</p>
                  <h5 class="mt-0">UX DESIGNER, GOOGLE INC.</h5>
                </div>
              </div>
            </div>
            <div class="item">
              <h4>
                Once upon a time all the Rivers combined to protest <br />
                against the action of the Sea in making their waters salt.<br />
                “When we come to you,” said they to the Sea.
              </h4>
              <div class="d-flex position-relative mar">
                <img src="image/Warstwa 7.png" class="flex-shrink-0 me-3" alt="..." />
                <div>
                  <p>John Doe</p>
                  <h5 class="mt-0">CEO, THE RIVERS COMPANY</h5>
                </div>
              </div>
            </div>
            <div class="item">
              <h4>
                A shoe is not only a design, but it's a part of your body
                <br />
                language, the way you walk. The way you're going to <br />
                move is quite dictated by your shoes.
              </h4>
              <div class="d-flex position-relative mar">
                <img src="image/Warstwa 16.png" class="flex-shrink-0 me-3" alt="..." />
                <div>
                  <p>Dean Winchester</p>
                  <h5 class="mt-0">UX DESIGNER, GOOGLE INC.</h5>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- pagination end -->

  <!-- pagination fotter strat -->
  <section class="pagination-fotter">
    <div class="container">
      <div class="row">
        <div class="col-md-8">
          <h1><span>Like what you see?</span> Get this great theme now!</h1>
        </div>
        <div class="col-md-4">
          <div class="inner-btn2">
            <a href="#" target="blank" class="btn btn-light">view Features</a>
            <a href="#" target="blank" class="btn btn-primary">Download now
            </a>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- pagination fotter end -->
  <!-- pricing start -->
  <sention class="pricing" id="pricing">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="head-price">
            <p>quality has its price</p>
            <h4>Pricings & Plans</h4>
            <img src="image/underline.png" alt="" />
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-3">
          <div class="main-price">
            <div class="price-head">
              <h2>Free</h2>
            </div>
            <div class="price-inner">
              <h1><sup>$</sup>0</h1>
              <p>/pre month</p>
            </div>
            <div class="price-content">
              <p>
                Fusce fermentum placerat <br />
                br magna ac pharetra. <br />
                Aliquam euismod elit non <br />
                ipsum <span>lacinia </span> consectetur
              </p>
              <a href="#" class="btn btn-info">Order now</a>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="main-price">
            <div class="price-head">
              <h2>Personal</h2>
            </div>
            <div class="price-inner">
              <h1><sup>$</sup>25</h1>
              <p>/pre month</p>
            </div>
            <div class="price-content">
              <p>
                Fusce fermentum placerat <br />
                br magna ac pharetra. <br />
                Aliquam euismod elit non <br />
                ipsum <span>lacinia </span> consectetur
              </p>
              <a href="#" class="btn btn-info">Order now</a>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="main-price">
            <div class="price-head">
              <h2>Business</h2>
            </div>
            <div class="price-inner">
              <h1><sup>$</sup>50</h1>
              <p>/pre month</p>
            </div>
            <div class="price-content">
              <p>
                Fusce fermentum placerat <br />
                br magna ac pharetra. <br />
                Aliquam euismod elit non <br />
                ipsum <span>lacinia </span> consectetur
              </p>
              <a href="#" class="btn btn-info">Order now</a>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="main-price">
            <div class="price-head">
              <h2>Ultimate</h2>
            </div>
            <div class="price-inner">
              <h1><sup>$</sup>99</h1>
              <p>/pre month</p>
            </div>
            <div class="price-content">
              <p>
                Fusce fermentum placerat <br />
                br magna ac pharetra. <br />
                Aliquam euismod elit non <br />
                ipsum <span>lacinia </span> consectetur
              </p>
              <a href="#" class="btn btn-info">Order now</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </sention>
  <!-- pricing end -->
  <!-- contact section start -->
  <section class="contact" id="Contact">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="contact-header">
            <p>STAY IN TOUCH</p>
            <h4>Contact us</h4>
            <img src="image/underline.png" alt="" />
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4">
          <div class="contact-mid">
            <i class="fa fa-mobile" aria-hidden="true"></i>
            <p>
              Phone: (415) 124-5678 <br />
              Fax: (412) 123-8290
            </p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="contact-mid">
            <i class="fa fa-map-marker" aria-hidden="true"></i>
            <p>
              1001 Brickell Bay Dr. <br />
              Suite 1900 <br />
              Miami, FL 33131
            </p>
          </div>
        </div>
        <div class="col-md-4">
          <div class="contact-mid">
            <i class="fa fa-envelope-o" aria-hidden="true"></i>
            <p>support@yourname.com</p>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-8 offset-md-2">
          <form class="row main-form">
            <div class="col">
              <div class="mb-3">
                <input type="name" class="form-control" placeholder="NAME*" aria-label="First name" />
              </div>
              <div class="mb-3">
                <input type="email" class="form-control" placeholder="EMAIL*" aria-label="First name" />
              </div>
              <div class="mb-3">
                <input type="text-box" class="form-control" placeholder="SUBJECT*" aria-label="First name" />
              </div>
            </div>
            <div class="col">
              <div class="mb-3">
                <textarea class="form-control" placeholder="MESSAGE*" cols="10" rows="9"></textarea>
              </div>
              <div class="mb-3 text-right">
                <a href="#" class="btn btn-info">SEND MESSAGE</a>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>
  <!-- contact section end -->
  <!-- map section start -->
  <section class="map">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14757.86895298279!2d91.81170722995525!3d22.373736714565954!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30acd862e449484f%3A0x799a3910706b4ad4!2sNasirabad%2C%20Chattogram!5e0!3m2!1sen!2sbd!4v1610031018612!5m2!1sen!2sbd" width="100%" height="700" frameborder="0" style="border: 0" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
  </section>
  <!-- map section end -->
  <section class="fotter">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <ul>
            <li>
              <a href="#"><i class="fa fa-behance" aria-hidden="true"></i></a>
            </li>
            <li>
              <a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a>
            </li>
            <li>
              <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
            </li>
            <li>
              <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
            </li>
            <li>
              <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
            </li>
          </ul>
          <p>copyright © 2014 lucied onepage theme</p>
        </div>
      </div>
    </div>
  </section>
  <!-- Optional JavaScript; choose one of the two! -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="js/bootstrap.bundle.min.js"></script>
  <!-- owlcarousel -->
  <script src="js/owl.carousel.min.js"></script>
  <script>
    $(".owl-carousel").owlCarousel({
      loop: true,
      margin: 10,
      nav: false,
      autoplay: true,
      autoplayTimeout: 5000,
      responsive: {
        0: {
          items: 1,
        },
        600: {
          items: 1,
        },
        1000: {
          items: 2,
        },
      },
    });
  </script>
  <!-- Option 2: Separate Popper and Bootstrap JS -->
  <!--
		<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" 	integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
		-->
</body>

</html>