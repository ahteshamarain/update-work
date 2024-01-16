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
        <header>Employee login</header>
       
        <form action="newuser.php" method="POST">
          <input name="email" class="input" id="email" type="text" placeholder="Email address" required />
          <input name="pass" class="input" id="password" type="password" placeholder="Password" required />

         
         <button id="sign" type="submit" value="register" name="register">Signup</button> 
        </form>
      </div>

    

    </section>
</div>

</div>


    <?php 
include("include/footer.php");
    
    ?>