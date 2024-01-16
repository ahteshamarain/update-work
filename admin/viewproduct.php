<?php 
session_start();

if(!isset($_SESSION['admin_email'])){
  header('location:login.php');
}
include("include/header.php");
include("include/navbar.php");
include("include/sidebar.php");
include("config.php");




?>

  <main id="main" class="main">

    <div class="pagetitle">
      <h1>products</h1>

    </div><!-- End Page Title -->
    <br><br>
    
<!-- Modal -->

<div class="modal fade" id="updatedata" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel">Modal title</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
      <form class="user" action="pupdate.php" method="POST">
    <div class="form-group row">
 
    <input id="pid" type="text" class="form-control form-control-user input1" 
       placeholder="id" name="pid" required>
 


        <div class="col-sm-6">
            <input id="pname"  style="border-radius: 100px;" type="text" class="form-control form-control-user input1" 
                placeholder="product Name" name="pname" required>
        </div>
        <div class="col-sm-6">
            <input id="pdes"  style="border-radius: 100px;" type="text" class="form-control form-control-user input1" 
                placeholder="product description" name="pdes" required>
         </div>
      
    </div>
    <br>
    <div class="form-group row">
    <div class="col-sm-6">
            <input id="pcode"  style="border-radius: 100px;" type="text" class="form-control form-control-user input1" 
                placeholder="product code" name="pcode" required>
         </div>
         <div class="col-sm-6">
        <input id="pprice"  style="border-radius: 100px;" type="number" class="form-control form-control-user input1" 
            placeholder="price" name="pprice" required>
    </div>
         </div>
    <!-- <div class="form-group mt-3">
        <input id="pimage"  style="border-radius: 100px;" type="file" class="form-control form-control-user input1" 
            placeholder="image" name="pimage" required>
    </div> -->
   
    
    <br>
    <!-- <a class="btn btn-primary btn-user btn-block" name="register">
        Register Account
    </a> -->
    
    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
    <input type="submit" name="pupdate" value="register" class="btn btn-primary btn-user btn-block" >
    <br><br>
 
 
                        
</form>


      </div>
  
    </div>
  </div>
</div>
    <!-- modaal End -->
    <section class="section">
      <div class="row">
        <div class="col-lg-12">

          <div class="card">
            <div class="card-body">
              <br><br>
              <h3 class="card-title">Products data</h3>
              <br>

         <!-- table -->
         <div class="table-responsive">
         <table class="table table-warning">
                <thead class="bg-warning p-2 text-dark bg-opacity-10" style="opacity: 75%;">
                         <th>Id</th>
                        <th>Name</th>
                        <th>Description</th>
                        <th>code</th>
                        <th>Category</th>
                        <th>Price</th>
                        <th>Image</th>
                        <th>Update</th>
                        <th>Delete</th>
                </thead>
                
                <tbody id="ptab">
            
                
                </tbody>
            </table>
                      
                </div>
                </div>
          </div>

        </div>
      </div>
    </section>
  

  </main><!-- End #main -->
  <?php 

include("include/footer.php");


?>