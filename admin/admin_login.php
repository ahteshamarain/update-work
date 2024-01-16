
<?php 
session_start();


include("config.php");
if(isset($_POST["login"])){
$email = $_POST['email'];
$pass = $_POST['pass'];

$verify = "SELECT * from `admin` where `admin_email` = '$email'";
$result = mysqli_query($connection, $verify);
if($result){
if(mysqli_num_rows($result) > 0){
    $row = mysqli_fetch_assoc($result);
    
    $dbpass = $row["admin_password"];
    $_SESSION['admin_email'] = $row['admin_email'];
    $_SESSION['admin_pass'] = $row['admin_password'];

    // $verifypass = password_verify($pass , $dbpass);
    if($dbpass == $pass){
        echo "<script>
        alert('login succesfull');
        window.location.href='index.php'
        </script>";
    }else{
        echo '<script>
        alert("Inavlid password");
        window.location.href="login.php"
        </script>';
    }

  }else{
      echo '<script>
      alert("Inavlid email")
      window.location.href="login.php"
      </script>';

}
}
}

?>