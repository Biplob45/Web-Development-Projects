<?php
session_start();
if (!isset($_SESSION['loggedIn']) || $_SESSION['loggedIn'] != true) {
  $insert = 'false';
  $passNotMatch = 'false';
  $emailExist = 'false';
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    include './DB_Connection.php';

    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    if ($password === $_POST["cPass"]) {
      $passNotMatch = 'false';

      $checkEmailSql = "SELECT * FROM `lucied`.`user` WHERE email='$email'";
      $checkEmailResult = $conn->query($checkEmailSql);

      if ($checkEmailResult->num_rows == 0) {
        $sql = "INSERT INTO `lucied`.`user` (`username`, `email`, `password`) VALUES ( '$username',  '$email','$password')";

        if ($conn->query($sql) == true) {
          // echo 'successfully'; 
          $insert = 'true';

          $_SESSION['loggedIn'] = true;
          $_SESSION['email'] = $email;
          $_SESSION['username'] = $username;
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
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Sign up Form</title>
  <!-- style.css -->
  <link rel="stylesheet" href="css/style.css" />
  <!-- fontawosme -->
  <link rel="stylesheet" href="css/font-awesome.min.css" />
  <!-- google fonts -->
  <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:wght@300;400;600;700;900&display=swap" rel="stylesheet" />
  <!-- Bootstrap CSS -->
  <link href="css/bootstrap.min.css" rel="stylesheet" />

  <style>
    @import url("https://fonts.googleapis.com/css2?family=Open+Sans:wght@500&display=swap");

    body {
      height: 90vh;
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
    }

    .signUpForm {
      width: 500px;
      text-align: center;
      background: #fff;
      padding: 30px;
      margin: 18% auto 0;
      box-shadow: 5px 7px 25px 6px rgba(26, 25, 25, .5);
      border-radius: 20px;
      margin-top: 100px;
    }

    .signUpForm h1 {
      color: #1977cc;
      margin-bottom: 20px;
    }

    .signUpForm .input-box {
      border-radius: 20px;
      margin-top: 10px;
      font-size: 15px;
      padding: 10px;
      width: 90%;
    }

    .sign-up-btn {
      color: #fff;
      background-color: #1977cc;
      border: none;
      padding: 10px;
      border-radius: 20px;
      font-size: 1.1rem;
      width: 95%;
      cursor: pointer;
    }

    .sign-up-btn:hover {
      background-color: #3fbbc0;
    }

    p {
      font-size: 1.1rem;
    }
  </style>
</head>

<body>
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
              <a class="nav-link active" aria-current="page" href="index.php#home">Home</a>
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


          </ul>
        </div>
      </div>
    </nav>
  </div>
  <div class="signUpForm">
    <h1>Sign Up</h1>
    <form action="createId.php" method="post"><?php
                                              if ($insert == 'true') {
                                                echo "<div class='alert w-75 mx-auto alert-success my-2' role='alert'>
                    <i class='fa-solid fa-circle-check'></i>  Signup Success
                    </div>";
                                              }
                                              ?>
      <?php
      if ($passNotMatch == 'true') {
        echo "<div class='alert w-75 mx-auto alert-danger my-2' role='alert'>
                    <i class='fa-solid fa-triangle-exclamation'></i> PassWord Do Not Match!
                    </div>";
      }
      ?>
      <?php
      if ($emailExist == 'true') {
        echo "<div class='alert w-75 mx-auto alert-warning my-2' role='alert'>
                    <i class='fa-solid fa-face-frown'></i> Email is already in use!
                    </div>";
      }
      ?>
      <input type="username" class="input-box" name="username" placeholder="Username" /><br /><br />
      <input type="email" class="input-box" name="email" placeholder="Email or Phone" /><br /><br />
      <input type="password" class="input-box" name="password" placeholder="Password" /><br /><br />
      <input type="password" class="input-box" name="cPass" placeholder="Confirm Password" /><br /><br /><br />
      <input type="submit" value="SIGN UP" class="sign-up-btn" /><br /><br />

      <p>Already have an account? <a href="login.php">Sign In</a></p>
      <a href="index.php">Go Back To Home</a>
    </form>
  </div>
</body>

</html>