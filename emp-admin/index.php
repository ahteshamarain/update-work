<?php 
session_start();

if(!isset($_SESSION['emp_email'])){
  header('location:login.php');
}




include("include/header.php");
include("include/navbar.php");
include("include/sidebar.php");
include("include/main.php");
include("include/footer.php");


?>



