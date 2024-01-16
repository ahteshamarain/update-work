<?php 
session_start();

if(isset($_SESSION['emp_email'])){
    header('location:login.php');
  }



session_unset();
session_destroy();
?>