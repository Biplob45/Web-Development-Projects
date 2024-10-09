<?php
$server = "localhost";
$Username = "root";
$password = "";
$datebase = "users";

$conn = mysqli_connect ($server, $Username, $password ,$datebase);
if ($conn){

  echo "success";
}
else {
die("error". mysqli_connect_error());
}




?>