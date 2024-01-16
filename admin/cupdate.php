<?php 
include("config.php");

if(isset($_POST["cupdate"])){
     $id =$_POST['admin_id'];
    $cname=$_POST["cname"];
    $cdes=$_POST["cdes"];


   

    $update = "UPDATE `category` SET `catname` = '$cname',`catdes`='$cdes' where `catid` = '$id'";
$res=mysqli_query($connection,$update);
if($res){
    echo '<script>
    alert("update data succesfull")
    window.location.href="viewcategory.php"
    </script>';
}

}
?>