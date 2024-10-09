<?php
$isInvalid = "false";
$loggedIn = false;
session_start();
if (!isset($_SESSION['loggedIn']) || $_SESSION['loggedIn'] != true) {
  // Check if the form has been submitted
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Include the database connection file
    include './DB_Connection.php';
    $email = $_POST['email'];
    $password = $_POST['password'];

    $loginSql = "SELECT * FROM `rabbi`.`user` WHERE email='$email' AND password='$password'";
    $loginResult = $conn->query($loginSql);
    if ($loginResult->num_rows == 1) {
      // echo $loginResult->num_rows;
      $isInvalid = 'false';
      $row = $loginResult->fetch_assoc();

      // Set a session variable and redirect the user to the dashboard

      $_SESSION['loggedIn'] = true;
      $_SESSION['email'] = $email;
      $_SESSION['username'] = $row['username'];
      header('Location: index.php');
    } else {
      // Print an error message if the login fails
      $isInvalid = "true";
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
  <title>Sign in Form</title>

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
    <h1>Sign In Now</h1>
    <form action="" method="post"><?php
                                  if ($isInvalid == 'true') {
                                    echo "<div class='alert alert-danger my-2 mx-auto w-75' role='alert'>
                            <i class='fa-solid fa-circle-exclamation'></i> Email/Password is Invalid
                    </div>";
                                  }
                                  ?>
      <input required type="email" class="input-box" name="email" placeholder="Your Email or Phone" /><br /><br />
      <input required type="password" class="input-box" name="password" placeholder="Your Password" /><br /><br />
      <p>
        <span><input required type="checkbox" /></span> I agree to the terms of service
      </p>
      <br />
      <input type="submit" value="SIGN IN" class="sign-up-btn" /><br />
      <br>
      <p>Don't have an account? <a href="signup.php">Sign Up</a></p>
      <a href="index.php">Go Back to Home</a>
    </form>
  </div>
</body>

</html>