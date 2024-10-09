<?php
$insert = false;
$loggedIn = false;
session_start();

// Check if the session variable 'email' is set
if (!isset($_SESSION['email']) || $_SESSION['loggedIn'] != true) {
  $loggedIn = false;
} else {
  $loggedIn = true;
}

if (isset($_POST['name'])) {
  include './DB_Connection.php';
  $name = $_POST['name'];
  $email = $_POST['email'];
  $phone = $_POST['phone'];
  $birthdate = date('Y-m-d', strtotime($_POST['birthdate']));
  $age = $_POST['age'];
  $doctor = $_POST['doctor'];
  $message = $_POST['message'];

  $sql = "INSERT INTO `daffodilcare`.`appointment` (`name`,`email`,`phone`,`birthdate`,`age`,`doctor`,`message`) VALUES ( '$name', '$email', '$phone', '$birthdate', '$age','$doctor','$message')";
  if ($conn->query($sql)) {
    // echo 'successfully'; 
    $insert = true;
  } else {
    echo "ERROR: $sql <br> $conn->error";
  }
}



?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>WEB DEVELOPMENT PROJECT</title>

  <!-- FAVICON -->
  <link rel="icon" type="image/png" href="img/logo.png">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="vendor/animate.css/animate.min.css" rel="stylesheet">
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet">
  <link href="vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="css/style.css" rel="stylesheet">
</head>

<body>

  <!-- TOP BAR -->
  <div id="topbar" class="d-flex align-items-center fixed-top">
    <div class="container d-flex justify-content-between">
      <div class="contact-info d-flex align-item-center">
        <i class="bi bi-envelope"></i><a href="mailto:contact@example.com"></a>hasslefreecare@example.com</a>
        <i class="bi bi-phone">01792312650</i>
      </div>

      <div class="d-none d-lg-flex social-links align-items-center">
        <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
        <a href="#" class="facebook"><i class="bi bi-instagram"></i></a>
        <a href="#" class="facebook"><i class="bi bi-twitter"></i></a>
        <a href="#" class="facebook"><i class="bi bi-linkedin"></i></a>
      </div>
    </div>
  </div>

  <!-- Header -->
  <header id="header" class="fixed-top">
    <div class="container d-flex align-items-center">
      <h1 class="logo me-auto"><a href="index.php">HASSLE-FREE CARE</a></h1>

      <nav id="navbar" class="navbar order-last order-lg-0">
        <ul>
          <li><a href="#home" class="nav-link scrollto active">Home</a></li>
          <li><a href="#about" class="nav-link scrollto">About</a></li>
          <li><a href="#services" class="nav-link scrollto">Services</a></li>
          <li><a href="#doctors" class="nav-link scrollto">Doctors</a></li>
          <li><a href="#contact" class="nav-link scrollto">Contact</a></li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav>

      <a href="#appointment" class="appointment-btn scrollto"><span class="d-none d-md-inline">
          Make an
        </span>Appointment</a>
      <?php
      if ($loggedIn == true) {
        echo "<a  class='ms-3 scrollto'>{$_SESSION['username']}</a> <a href='logout.php' class='appointment-btn scrollto'>Logout</a>";
      } else {
        echo "<a href='login.php' class='appointment-btn scrollto'>Sign In</a>";
      }
      ?>
    </div>
  </header> <!-- END HEADER -->

  <!-- HOME SECTION -->

  <section id="home" class="d-flex align-items-center">
    <div class="container">
      <h1>Welcome to Hassle Free <br>Healthcare</h1>
      <h2>We are team of Specialized Doctors. <br>"Your devotion and care brings healing,
        comfort and hope."</h2>
      <a href="#about" class="btn-get-started scrollto">Learn More</a>
    </div>
  </section> <!--END HOME-->



  <!-- FEATURED SERVICE SECTION -->
  <section id="featured-section" class="featured-services">
    <div class="container" data-aos="fade-up">

      <div class="row">
        <div class="col md 6 col-lg-3 d-flex align-items-stretch mb-lg-0">
          <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
            <div class="icon"><i class="fas fa-heartbeat"></i></div>
            <h4 class="title"><a href="">Normal Checkup</a></h4>
            <p class="description">Regular health checks can identify any early signs of health issues. </p>
          </div>
        </div>

        <div class="col md 6 col-lg-3 d-flex align-items-stretch mb-lg-0">
          <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
            <div class="icon"><i class="fas fa-dna"></i></div>
            <h4 class="title"><a href="">Blood Test</a></h4>
            <p class="description"> Blood tests have a wide range of uses and are one of the most common types of medical test.</p>
          </div>
        </div>

        <div class="col md 6 col-lg-3 d-flex align-items-stretch mb-lg-0">
          <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
            <div class="icon"><i class="fas fa-temperature-high"></i></div>
            <h4 class="title"><a href="">Body Temperature</a></h4>
            <p class="description">Taking a patient's temperature with a thermometer is the most traditional method of monitoring body temperature.</p>
          </div>
        </div>

        <div class="col md 6 col-lg-3 d-flex align-items-stretch mb-lg-0">
          <div class="icon-box" data-aos="fade-up" data-aos-delay="100">
            <div class="icon"><i class="fas fa-hand-holding-medical"></i></div>
            <h4 class="title"><a href="">Medicine Use</a></h4>
            <p class="description">Medicines are chemicals or compounds used to cure, halt, or prevent disease; ease symptoms; or help in the diagnosis of illnesses. </p>
          </div>
        </div>
      </div>
    </div>
  </section> <!-- END FEATURED SERVICE -->

  <!-- ABOUT SECTION -->
  <section id="about" class="about">
    <div class="container" data-aos="fade-up">
      <div class="section-title">
        <h2>About us</h2>
        <p>Hassle-Free Health Care is the best health care in Chattogram, Bangladesh,
          confidently providing comprehensive diagnostic health care services.
          These services are provided by expert medical professionals, skilled technologists using state-of-the-art technology. The mission of Hassle-Free Health Care is to provide high quality international standard diagnostic healthcare which will meet the needs and exceed the expectations of the people of Bangladesh.</p>
      </div>

      <div class="row">
        <div class="col-xl-5 col-lg-6 video-box d-flex justify-content-center
            align-items-stretch position-relative">
          <a href="https://youtu.be/Fft5igeEIEM" class="glightbox play-btn mb-4"></a>
        </div>

        <div class="col-xl-7 col-lg-6 icon-boxes d-flex flex-column 
          align-items-stretch justify-content-center py-5 px-lg-5">
          <div class="icon-box">
            <div class="icon"><i class="bx bx-heart"></i></div>
            <h4 class="title"><a href="">HEALTH IS WEALTH</a></h4>
            <p class="description">Our good health is the real Wealth of our life which gives us a good physique and mind and enables us to enjoy our whole life by managing all our challenges.</p>
          </div>
          <div class="icon-box">
            <div class="icon"><i class="bx bx-health"></i></div>
            <h4 class="title"><a href="">EMERGENCY</a></h4>
            <p class="description">An emergency is an urgent, unexpected, and usually dangerous situation that poses an immediate risk to health, life, property, or environment and requires</p>
          </div>
          <div class="icon-box">
            <div class="icon"><i class="bx bx-help-circle"></i></div>
            <h4 class="title"><a href="">SERVICES</a></h4>
            <p class="description">Healthcare services and devices that help a patient keep, learn or improve skills and functioning for daily living.</p>
          </div>

        </div>
      </div>
    </div>
  </section> <!-- END ABOUT SECTION -->

  <!-- COUNT SECTION -->
  <section id="counts" class="counts">
    <div class="container" data-aos="fade-up">

      <div class="row no-gutters">

        <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
          <div class="count-box">
            <i class="fas fa-user-md"></i>
            <span data-purecounter-start="0" data-purecounter-end="95" data-purecounter-duration="1" class="purecounter"></span>
            <p><strong>Doctors </strong> Our Doctors are ready to give the best health support for patient,</p><br>
            <a href="doctors.html">Find out more &raquo;</a>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
          <div class="count-box">
            <i class="fas fa-hospital"></i>
            <span data-purecounter-start="0" data-purecounter-end="55" data-purecounter-duration="1" class="purecounter"></span>
            <p><strong>Department </strong>Definitions of the most common hospital departments and the services provided by each section.</p>
            <a href="department.html">Find out more &raquo;</a>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
          <div class="count-box">
            <i class="fas fa-flask"></i>
            <span data-purecounter-start="0" data-purecounter-end="45" data-purecounter-duration="1" class="purecounter"></span>
            <p><strong>Research </strong>This type of investigation is known as medical/health research.</p><br>
            <a href="research.html">Find out more &raquo;</a>
          </div>
        </div>
        <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
          <div class="count-box">
            <i class="fas fa-award"></i>
            <span data-purecounter-start="0" data-purecounter-end="225" data-purecounter-duration="1" class="purecounter"></span>
            <p><strong>Awards </strong>deleniti is atque corrupti 2 times per month quas molestias</p><br>
            <a href="awards.html">Find out more &raquo;</a>
          </div>
        </div>
      </div>
    </div>
  </section> <!-- END OF COUNT -->

  <!-- SERVICES SECTION -->
  <section id="services" class="services">
    <div class="container">

      <div class="section-title">
        <h2>Services</h2>
        <p><b> Healthcare services and devices that help a patient keep, learn or improve skills and functioning for daily living.</b></p>
      </div>

      <div class="row">
        <div class="col-lg-4 col-md-6 d-flex align-items-stretch">
          <div class="icon-box">
            <div class="icon"><i class="fas fa-heartbeat"></i></div>
            <h4><a href="">Regular Checkup</a></h4>
            <p>Regular health checks can identify any early signs of health issues. 
Finding problems early means that your chances for effective treatment are increased.</p>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-md-0">
          <div class="icon-box">
            <div class="icon"><i class="fas fa-pills"></i></div>
            <h4><a href="">Medicine</a></h4>
            <p>Medicines are chemicals or compounds used to cure, halt, or prevent disease; ease symptoms; or help in the diagnosis of illnesses. 
Advances in medicines have enabled doctors to cure many diseases and save lives.
</p>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4 mt-lg-0">
          <div class="icon-box">
            <div class="icon"><i class="fas fa-hospital-user"></i></div>
            <h4><a href="">Pharmeologist</a></h4>
            <p>Pharmacology is a branch of medicine, biology, and pharmaceutical sciences concerned with drug or medication action.</p>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
          <div class="icon-box">
            <div class="icon"><i class="fas fa-dna"></i></div>
            <h4><a href="">Blood Test</a></h4>
            <p>Most blood tests only take a few minutes to complete and are carried out at your GP surgery or local hospital by a doctor, nurse or phlebotomist (a specialist in taking blood samples).</p>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
          <div class="icon-box">
            <div class="icon"><i class="fas fa-wheelchair"></i></div>
            <h4><a href="">Disabled Person</a></h4>
            <p>They have a physical or mental impairment, and. the impairment has a substantial and long-term adverse effect on the person's ability to carry out normal day-to-day activities.</p>
          </div>
        </div>
        <div class="col-lg-4 col-md-6 d-flex align-items-stretch mt-4">
          <div class="icon-box">
            <div class="icon"><i class="fas fa-notes-medical"></i></div>
            <h4><a href="">Health Post</a></h4>
            <p>A health post is a healthcare centre that is similar to a clinic.</p>
          </div>
        </div>
      </div>
    </div>
  </section> <!-- END SERVICES SECTION -->

  <!-- APPOINTMENT SECTION -->
  <section id="appointment" class="appointment section-bg">
    <div class="container">

      <div class="section-title">
        <h2>Make an Appointment</h2>
        <p><b> We Review And Accept Patient’s Requests On A 24/7 Basis. Please, Contact Us Now:</b></p>
      </div>

      <form action="" method="post" role="form" class="php-email-form">
        <?php if ($insert == true) {
          echo "<div class='alert alert-success' role='alert'>
          Appointment Submitted
        </div>";
        }
        ?>
        <div class="row">
          <div class="col-md-4 form-group">
            <input required type="text" name="name" class="form-control" id="name" placeholder="Your Name">
          </div>
          <div class="col-md-4 form-group mt-3 mt-md-0">
            <input required type="email" class="form-control" name="email" id="email" placeholder="Your Email">
          </div>

          <div class="col-md-4 form-group mt-3 mt-md-0">
            <input required type="tel" class="form-control" name="phone" id="phone" placeholder="Your phone">
          </div>


        </div>

        <div class="row">
          <div class="col-md-4 form-group mt-3">
            <input required type="date" name="birthdate" class="form-control datepicker" id="date" placeholder="Appointment Date">
          </div>

          <div class="col-md-4 form-group mt-3">
            <select required name="age" id="age" class="form-select">
              <option value="">Select Age</option>
              <option value="age 1">Below 18</option>
              <option value="age 2">18-40</option>
              <option value="age 3">40 above</option>
            </select>
          </div>

          <div class="col-md-4 form-group mt-3">
            <select required name="doctor" id="doctor" class="form-select">
              <option value="">Select Doctor</option>
              <option value="Doctor 1">Doctor 1</option>
              <option value="Doctor 2">Doctor 2</option>
              <option value="Doctor 3">Doctor 3</option>
              <option value="Doctor 3">Doctor 4</option>
              <option value="Doctor 3">Doctor 5</option>
              <option value="Doctor 3">Doctor 6</option>
            </select>
          </div>
        </div>

        <div class="form-group mt-3">
          <textarea name="message" class="form-control" rows="5" placeholder="Message(optional)"></textarea>
        </div>
        <div class="text-center"><button type="submit">Make an Appointment</button></div>
      </form>
    </div>
  </section> <!-- END OF APPOINTMENT -->

  <!-- DOCTORS SECTION -->
  <section id="doctors" class="doctors">
    <div class="container">

      <div class="section-title">
        <h2>Doctors</h2>
        <h6>Our Doctors are ready to give the best health support for patient,<br>
          because they are providing the better health care with latest medical technologies.</h6>
      </div>

      <div class="row">
        <div class="col-lg-6">
          <div class="member d-flex align-items-start">
            <div class="pic"><img src="img/doctors/10.jpg" class="img-fluid w-75 h-100"></div>
            <div class="member-info">
              <h4>Dr. Mohammed Nasir Uddin</h4>
              <span>Degree – MBBS, BCS(Health), MCPS (Radiotherapy)</span>
              <p>Chamber Name & Address: Hassle-Free Health Care
                Agrabad, Chittagong, Bangladesh .</p>
              <div class="social">
                <a href=""><i class="ri-twitter-fill"></i></a>
                <a href=""><i class="ri-facebook-fill"></i></a>
                <a href=""><i class="ri-instagram-fill"></i></a>
                <a href=""><i class="ri-linkedin-fill"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-6 mt-4 mt-lg-0">
          <div class="member d-flex align-items-start">
            <div class="pic"><img src="img/doctors/2.jpg" class="img-fluid"></div>
            <div class="member-info">
              <h4>Pratikshya Rai</h4>
              <span>Anesthesiologist</span>
              <p>Chamber Name & Address: Hassle-Free Health Care
                Agrabad, Chittagong, Bangladesh .</p>
              <div class="social">
                <a href=""><i class="ri-twitter-fill"></i></a>
                <a href=""><i class="ri-facebook-fill"></i></a>
                <a href=""><i class="ri-instagram-fill"></i></a>
                <a href=""><i class="ri-linkedin-fill"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-6 mt-4">
          <div class="member d-flex align-items-start">
            <div class="pic"><img src="img/doctors/8.png" class="img-fluid w-75 h-100"></div>
            <div class="member-info">
              <h4>Dr. Mohammad Abdur Rahim</h4>
              <span>MBBS, BCS (HEALTH), FCPS (MEDICINE)
              </span>
              <p>Chamber Name & Address: Hassle-Free Health Care
                Agrabad, Chittagong, Bangladesh .</p>
              <div class="social">
                <a href=""><i class="ri-twitter-fill"></i></a>
                <a href=""><i class="ri-facebook-fill"></i></a>
                <a href=""><i class="ri-instagram-fill"></i></a>
                <a href=""><i class="ri-linkedin-fill"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-6 mt-4">
          <div class="member d-flex align-items-start">
            <div class="pic"><img src="img/doctors/4.jpg" class="img-fluid"></div>
            <div class="member-info">
              <h4>Lauren Jones</h4>
              <span>Neurologist</span>
              <p>Chamber Name & Address: Hassle-Free Health Care
                Agrabad, Chittagong, Bangladesh .</p>
              <div class="social">
                <a href=""><i class="ri-twitter-fill"></i></a>
                <a href=""><i class="ri-facebook-fill"></i></a>
                <a href=""><i class="ri-instagram-fill"></i></a>
                <a href=""><i class="ri-linkedin-fill"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-6 mt-4">
          <div class="member d-flex align-items-start">
            <div class="pic"><img src="img/doctors/1.png" class="img-fluid"></div>
            <div class="member-info">
              <h4>Lauren Jones</h4>
              <span>Neurologist</span>
              <p>Chamber Name & Address: Hassle-Free Health Care
                Agrabad, Chittagong, Bangladesh .</p>
              <div class="social">
                <a href=""><i class="ri-twitter-fill"></i></a>
                <a href=""><i class="ri-facebook-fill"></i></a>
                <a href=""><i class="ri-instagram-fill"></i></a>
                <a href=""><i class="ri-linkedin-fill"></i></a>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-6 mt-4">
          <div class="member d-flex align-items-start">
            <div class="pic"><img src="img/doctors/3.jpg" class="img-fluid"></div>
            <div class="member-info">
              <h4>Lauren Jones</h4>
              <span>Neurologist</span>
              <p>Chamber Name & Address: Hassle-Fre Health Care
                Agrabad, Chittagong, Bangladesh .</p>
              <div class="social">
                <a href=""><i class="ri-twitter-fill"></i></a>
                <a href=""><i class="ri-facebook-fill"></i></a>
                <a href=""><i class="ri-instagram-fill"></i></a>
                <a href=""><i class="ri-linkedin-fill"></i></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section> <!-- END OF DOCTORS SECTION -->


  <!-- CONTACT SECTION -->
  <section id="contact" class="contact">
    <div class="container">

      <div class="section-title">
        <h2>Contact</h2>
        <p><b>Your email address will not be published. Required fields are marked.</b></p>
      </div>
    </div>
    <!-- GOOGLE MAP -->
    <div class="mapouter"><div class="gmap_canvas"><iframe class="gmap_iframe" width="100%" frameborder="0" scrolling="no" marginheight="0" marginwidth="0" src="https://maps.google.com/maps?width=600&amp;height=400&amp;hl=en&amp;q=Agrabad, Chittagong&amp;t=&amp;z=14&amp;ie=UTF8&amp;iwloc=B&amp;output=embed"></iframe><a href="https://embed-googlemap.com">google maps code generator</a></div><style>.mapouter{position:relative;text-align:right;width:100%;height:400px;}.gmap_canvas {overflow:hidden;background:none!important;width:100%;height:400px;}.gmap_iframe {height:400px!important;}</style></div>
      <style>
        .mapouter {
          position: relative;
          text-align: right;
          width: 100%;
          height: 400px;
        }

        .gmap_canvas {
          overflow: hidden;
          background: none !important;
          width: 100%;
          height: 400px;
        }

        .gmap_iframe {
          height: 400px !important;
        }
      </style>
    </div>

    <div class="container">
      <div class="row mt-5">

        <div class="col-lg-4">
          <div class="info">
            <div class="address">
              <i class="bi bi-geo-alt"></i>
              <h4>Location:</h4>
              <p>Agrabad Road, Chattogram</p>
            </div>

            <div class="email">
              <i class="bi bi-envelope"></i>
              <h4>Email:</h4>
              <p>hasslefreecare@example.com</p>
            </div>

            <div class="phone">
              <i class="bi bi-phone"></i>
              <h4>Phone no:</h4>
              <p>01792-312650</p>
            </div>
          </div>
        </div>

        <div class="col-lg-8 mt-5 mt-lg-0">
          <form action="" role="form" class="php-email-form">
            <div class="row">
              <div class="col-md-6 form-group">
                <input type="text" name="" class="form-control" id="name" placeholder="Your name" required>
              </div>


              <div class=" col-md-6 form-group mt-3 mt-md-0">
                <input type="email" name="email" class="form-control" id="email" placeholder="Your email" required>
              </div>

              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required>
              </div>

              <div class="form-group mt-3">
                <textarea name="message" rows="5" class="form-control" placeholder="Message(optional)"></textarea><br>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
          </form>
        </div>
      </div>
    </div>

  </section> <!-- END OF CONTACT SECTION -->
  </main> <!-- END OF MAIN -->

  <!-- FOOTER SECTION -->
  <footer id="footer">
    <div class="footer-top">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-6">
            <div class="footer-info">
              <h3>HASSLE-FREE CARE</h3>
              <p>Agrabad Road <br>
                Chattogram <br><br>
                <strong>Phone: </strong>01792-312650 <br>
                <strong>Email: </strong>hasslecare@example.com <br>
              </p>

              <div class="social-links mt-3">
                <a href="#"><i class="bx bxl-facebook"></i></a>
                <a href="#"><i class="bx bxl-instagram"></i></a>
                <a href="#"><i class="bx bxl-twitter"></i></a>
                <a href="#"><i class="bx bxl-skype"></i></a>
                <a href="#"><i class="bx bxl-linkedin"></i></a>
              </div>
            </div>
          </div>

          <div class="col-lg-2 col-md-6 footer-links">
            <h4>Useful links</h4>
            <ul>
              <li><i class="bx bx-chevron-right"><a href="#">Home</a></i></li>
              <li><i class="bx bx-chevron-right"><a href="#about">About</a></i></li>
              <li><i class="bx bx-chevron-right"><a href="#services">Services</a></i></li>
              <li><i class="bx bx-chevron-right"><a href="#doctor">Doctor</a></i></li>
              <li><i class="bx bx-chevron-right"><a href="#contact">Contact</a></i></li>
            </ul>
          </div>

          <div class="col-lg-3 col-md-6 footer-links">
            <h4>Our Services</h4>
            <ul>
              <li><i class="bx bx-chevron-right"><a href="#">Dental Care</a></i></li>
              <li><i class="bx bx-chevron-right"><a href="#">Mesasge Therapy</a></i></li>
              <li><i class="bx bx-chevron-right"><a href="#">Cardiology</a></i></li>
              <li><i class="bx bx-chevron-right"><a href="#">Diagnosis</a></i></li>
              <li><i class="bx bx-chevron-right"><a href="#">Ambulance Service</a></i></li>
            </ul>
          </div>

          <div class="col-lg-4 col-md-6 footer-newsletter">
            <h4>Our Newsletter</h4>
            <p>Your email address will not be published. Required fields are marked.</p>
            <form action="" method="POST">
              <input type="email" name="email"><input type="submit" value="Subscribe">
            </form>
          </div>
        </div>
      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong><span>HASSLE-FREE CARE</span></strong>. All Right Reserved.
      </div>
      <div class="credits">
        Designed by <a href="#">Arif & Tasnia</a>
      </div>
    </div>
  </footer> <!-- END OF FOOTER SECTION -->

  <!-- PRELOADER -->
  <div class="preloader">
    <a href="#" class="back-to-top d-flex align-items-center justify-content-center">
      <i class="bi bi-arrow-up-short"></i>
    </a>
  </div>




  <!-- Vendor JS Files -->
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="vendor/glightbox/js/glightbox.min.js"></script>
  <!-- <script src="vendor/php-email-form/validate.js"></script> -->
  <script src="vendor/purecounter/purecounter.js"></script>
  <script src="vendor/swiper/swiper-bundle.min.js"></script>

  <!-- Template Main JS File -->
  <script src="js/main.js"></script>

</body>

</html>