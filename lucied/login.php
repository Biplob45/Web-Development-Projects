<?php
$isInvalid = "false";
session_start();
if (!isset($_SESSION['loggedIn']) || $_SESSION['loggedIn'] != true) {
  // Check if the form has been submitted
  if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Include the database connection file
    include './DB_Connection.php';
    $email = $_POST['email'];
    $password = $_POST['password'];

    $loginSql = "SELECT * FROM `lucied`.`user` WHERE email='$email' AND password='$password'";
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

    hr {
      margin-top: 30px;
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
    <h1>Sign In Now</h1>
    <form action="" method="post"><?php
                                  if ($isInvalid == 'true') {
                                    echo "<div class='alert alert-danger my-2 mx-auto w-75' role='alert'>
                            <i class='fa-solid fa-circle-exclamation'></i> Email/Password is Invalid
                    </div>";
                                  }
                                  ?>
      <input type="email" class="input-box" name="email" placeholder="Your Email or Phone" /><br /><br />
      <input type="password" class="input-box" name="password" placeholder="Your Password" /><br /><br />
      <p>
        <span><input type="checkbox" /></span> I agree to the terms of service
      </p>
      <br />
      <input type="submit" value="SIGN IN" class="sign-up-btn" /><br />
      <hr />
      <p class="or">Or</p>
      <input type="button" class="sign-up-btn" value="Login with Google" />
      <br /><br />
      <p>Do you have an account? <a href="createId.php"> Sign up Now</a></p>
      <a href="index.php">Go Back to Home</a>
    </form>
  </div>
</body>

</html>