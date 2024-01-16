<?php 
include('config.php');

$catid = $_POST['cat_id'];

$result  = mysqli_query($connection, "SELECT * from products where `pcategory` = '$catid'");

if(mysqli_num_rows($result) > 0){
    while($data = mysqli_fetch_assoc($result)){
        echo '
        <div class="col-lg-4 col-md-6 text-center my-5" > 
        <div class="single-product-item">
            <div class="product-image">
                <a href="single-product.php"><img style="height: 300px;" src="'.'admin/upload/'.  $data['pimage'].'" alt=""></a>
            </div>
            <h3>'.$data['pname'].'</h3>
            <p class="product-price"><span>Per Kg</span>'.$data['pprice'].'</p>
            <a href="cart.php" class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
            </div>
			</div>
            </div>
   
        ';
    }
}
?>




