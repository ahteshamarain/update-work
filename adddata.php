<?php 
include('config.php');

// print_r($_POST);

$userid = $_POST['user_id'];
$proid = $_POST['pro_id'];
$pname = $_POST['pname'];
$pprice = $_POST['pprice'];

$insert="INSERT INTO `cart` (`cart_id`, `pro_name`, `pro_price`, `user_id`,) VALUES ( '$userid', '$proid', '$pname', '$pprice'";
$result=mysqli_query($connection, $insert);
if($result){
    echo "cart added successfully";
}else{
    echo "failed to add category";
}


?>