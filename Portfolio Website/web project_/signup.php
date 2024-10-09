<?php
$loggedIn = false;
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

      $checkEmailSql = "SELECT * FROM `daffodilcare`.`user` WHERE email='$email'";
      $checkEmailResult = $conn->query($checkEmailSql);

      if ($checkEmailResult->num_rows == 0) {
        $sql = "INSERT INTO `rabbi`.`user` (`username`, `email`, `password`) VALUES ( '$username',  '$email','$password')";

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
  <link rel="stylesheet" href="rabbi.css">
  <link rel="stylesheet" href="css/all.min.css">
  <link rel="stylesheet" href="css/fontawesome.min.css">
  <style>
    body {
      font-family: "Open Sans", sans-serif;
      margin: 0;
      padding: 0;


      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
    }

    .alert {
      color: #fff;
    }

    .signUpForm {
      max-width: 550px;
      /* border: 1px solid #f9004d; */
      padding: 50px 20px;
      border-radius: 10px;
      text-align: center;
      background: #000;

      margin: 20px auto 0;


      margin-top: 100px;
    }

    .signUpForm h1 {
      color: #f9004d;
      margin-bottom: 20px;
    }

    .signUpForm .input-box {
      border-radius: 10px;
      margin-top: 10px;
      font-size: 15px;
      padding: 10px;
      width: 90%;
    }

    .sign-up-btn {
      color: #fff;
      background-color: #f9004d;
      border: none;
      padding: 10px;
      border-radius: 20px;
      font-size: 1.1rem;
      width: 95%;
      cursor: pointer;
    }

    .sign-up-btn:hover {
      background-color: #e9564e;
    }

    hr {
      margin-top: 30px;
    }

    p {
      color: #fff;
      font-size: 1.1rem;
    }
  </style>
</head>

<body>
  <div class="hero navOnly">
    <nav>
      <h2 class="logo">Portfo<span>lio</span></h2>
      <ul>
        <li><a href="index.php">Home</a></li>
        <li><a href="index.php?#About">About</a></li>
        <li><a href="index.php#Services">Services</a></li>

        <li><a href="#">Contact Us</a></li>
      </ul>
      <?php
      if ($loggedIn == true) {
        echo "<a  class='text-white'>{$_SESSION['username']}</a> <a href='logout.php' class='btn'>Logout</a>";
      } else {
        echo "<a href='login.php' class='btn '>Subscribe</a>";
      }
      ?>

    </nav>

  </div>
  <div class="signUpForm">
    <h1>Sign Up</h1>
    <form action="" method="post"><?php
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
      <input required type="username" class="input-box" name="username" placeholder="Username" /><br /><br />
      <input required type="email" class="input-box" name="email" placeholder="Email or Phone" /><br /><br />
      <input required type="password" class="input-box" name="password" placeholder="Password" /><br /><br />
      <input required type="password" class="input-box" name="cPass" placeholder="Confirm Password" /><br /><br /><br />
      <input required type="submit" value="SIGN UP" class="sign-up-btn" /><br /><br />

      <p>Already have an account? <a href="login.php">Sign In</a></p>
      <a href="index.php">Go Back To Home</a>
    </form>
  </div>
</body>

</html>