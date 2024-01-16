
<?php 
session_start();


include("config.php");
if(isset($_POST["login"])){
$email = $_POST['email'];
$pass = $_POST['pass'];

// echo $email, $pass;
// die();

$verify = "SELECT * from `employeedata` where `eemail` = '$email'";
$result = mysqli_query($connection, $verify);
if($result){
if(mysqli_num_rows($result) > 0){
    $row = mysqli_fetch_assoc($result);
    
    $dbpass = $row["epass"];
    $_SESSION['emp_email'] = $row['eemail'];
    $_SESSION['emp_pass'] = $row['epass'];

    // $verifypass = password_verify($pass , $dbpass);
    if($dbpass == $pass){
        echo '<script>
        alert("Login successful");
        window.location.href="viewproduct.php"
        </script>';
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