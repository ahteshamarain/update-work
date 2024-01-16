<?php 
include("include/header.php");
include("include/navbar.php");

?>
	

    <div id="main3">
    <br><br><br><br><br><br>

<div id="container">
<section class="wrapper" id="formm">
      <div class="form signup">
        <br>
        <header>Change password</header>
       
        <form action="newuser.php" method="POST">
          <input name="pass" class="input" type="text" placeholder="Current password" required />
          <input name="npass" class="input"  type="password" placeholder="New password" required />

         
         <button id="sign" type="submit" value="register" name="register">submit</button> 
        </form>
      </div>

    

    </section>
</div>

</div>


    <?php 
include("include/footer.php");
    
    ?>