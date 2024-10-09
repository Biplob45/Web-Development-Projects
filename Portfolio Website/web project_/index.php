<?php
$insert = false;
$loggedIn = false;
session_start();

// Check if the session variable 'email' is set
if (!isset($_SESSION['email']) || $_SESSION['loggedIn'] != true) {
    $loggedIn = false;
} else {
    $loggedIn = true;
} ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MD Bijoy</title>
    <link rel="stylesheet" href="rabbi.css">
    <link rel="stylesheet" href="css/all.min.css">
    <link rel="stylesheet" href="css/fontawesome.min.css">

<body>



    <div class="hero">
        <nav>
            <h2 class="logo">Portfo<span>lio</span></h2>
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="#About">About</a></li>
                <li><a href="#Services">Services</a></li>

                <li><a href="#Contact">Contact Us</a></li>
            </ul>
            <?php
            if ($loggedIn == true) {
                echo "<a  class='text-white'>{$_SESSION['username']}</a> <a href='logout.php' class='btn'>Logout</a>";
            } else {
                echo "<a href='login.php' class='btn '>Subscribe</a>";
            }
            ?>

        </nav>
        <div class="coutent">
            <h4>Hello, my name is</h4>
            <h1>Fazle <span>Rabbi</span> </h1>
            <h3>I'am a Master Trainer</h3>
            <div class="newslatter">
                <form action="#">
                    <input type="email" name="email" id="mail" placeholder="Enter Your Email">
                    <input type="submit" name="submit" value="Lets start">
                </form>
            </div>
        </div>
    </div>
    <section class="about" id="About">
        <div class="main">
            <img src="myphoto.jpg" alt="2nd photo">
            <div class="about-text">
                <h2>About Me</h2>
                <h5>Trainer & <span> Physio</span></h5>
                <p>I am a master trainer,nutritionist and Physio.I provide cardio training balking training and also weight burning training. So need any kind of muscle building training or transformation body contact with me.</p>
                <form action="mailto:frbijoy982@gmail"><button type="submit">Let's Talk</button></form>

                </p>
            </div>
        </div>
    </section>
    <div class="service" id="Services">
        <div class="title">
            <h2>Our Services</h2>
        </div>
        <div class="box">
            <div class="card">
                <i class="fa-solid fa-bars"></i>
                <h5>Suppliments </h5>
                <div class="pra">
                    <p>Any kind of suppliments.you need like fat burn, muscular body, barking body. We provide every kind of suppliments for you needs
                    </p>

                </div>
            </div>
            <div class="card">
                <i class="fa-regular fa-user"></i>
                <h5>Hoodies</h5>
                <div class="pra">
                    <p>Every kind of gym fashion Hoodi comfort for your workout,
                    </p>

                </div>
            </div>
            <div class="card">
                <i class="fa-regular fa-bell"></i>
                <h5>Belt & Grips</h5>
                <div class="pra">
                    <p>It reduces stress on the lower back while the person is lifting in an upright position, and it prevents back hyperextension during overhead lifts.
                    </p>

                </div>
            </div>
        </div>
    </div>
    <div class="contact-me" id="Contact">
        <p>Let Me Get You A Beautiful Body.</p>

        <a class="button-tow" href="mailto:frbijoy982@gmail">Hire Me</a>
    </div>
    <footer>
        <p>Fazle Rabbi</p>
        <p>Follow Me On Social Media & Stay Connected </p>
        <div class="social">
            <a href="#"><i class="fa-brands fa-facebook"></i></a>
            <a href="#"> <i class="fa-brands fa-instagram"></i></a>
            <a haref="#"><i class="fa-brands fa-dribbble"></i></a>

        </div>
        <p class="end">CopyRight By Fazle Rabbi</p>
    </footer>

</body>

</html>