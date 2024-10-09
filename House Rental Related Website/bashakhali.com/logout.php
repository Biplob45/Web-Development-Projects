<?php 
session_start() ;
if(!isset($_SESSION['loggedIn']) || $_SESSION['loggedIn']!= true){
    header("Location:login.php");
    exit;
}else{
    session_start();
    session_destroy();
    header("Location:index.php");
    exit;
}

?>
