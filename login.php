
<?php
session_start();


if(!isset($_SESSION['admin_email'])){
  header('location:login.php');
}

include("config.php");
if(isset($_POST["login"])){
$email = mysqli_real_escape_string($connection,$_POST['email']);
$pass = mysqli_real_escape_string($connection,$_POST['pass']);

$verify = "SELECT * from `userdata` where `email` = '$email'";
$result = mysqli_query($connection, $verify);
if($result){
if(mysqli_num_rows($result) == 1){
    $row = mysqli_fetch_array($result);
    $dbpass = $row["password"];
    $_SESSION['user_id'] = $row['id'];
    $_SESSION['user_email'] = $row['email'];
    $_SESSION['user_fname'] = $row['fname'];
    $_SESSION['user_lname'] = $row['lname'];
    $verifypass = password_verify($pass , $dbpass);
    if($verifypass){
        echo '<script>
        alert("login succesfull")
        window.location.href="index.php"
        </script>';
    }
    else{
        echo '<script>
        alert("Inavlid password")
        window.location.href="sign.php"
        </script>';
    }


}  else{
    echo '<script>
    alert("Inavlid email")
    window.location.href="sign.php"
    </script>';
}
}
}
?>