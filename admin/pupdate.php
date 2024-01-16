<?php 
include("config.php");

if(isset($_POST["pupdate"])){
    $pid = $_POST["pid"];
    $pname = $_POST["pname"];
    $pdes = $_POST["pdes"];
    $pcode = $_POST["pcode"];
    $pprice = $_POST["pprice"];

    $update = "UPDATE `products` SET `pname` = '$pname', `pdes`='$pdes', `pnumber`= CONCAT('$pcode', '-', FLOOR(10000 + RAND() * 90000)), `pprice` = '$pprice' WHERE `pid` = '$pid'";
    $res = mysqli_query($connection, $update);

    if($res){
        echo '<script>
        alert("Update data successful");
        window.location.href="viewproduct.php";
        </script>';
    } else {
        echo '<script>
        alert("Error updating data: ' . mysqli_error($connection) . '");
        </script>';
    }
}
?>
