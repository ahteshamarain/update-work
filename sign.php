<?php 
include("include/header.php");
include("include/navbar.php");

?>
	

    <div id="main1">
    <br><br><br><br><br><br>

<div id="container">
<section class="wrapper" id="formm">
      <div class="form signup">
        <header>Signup</header>
        <form action="newuser.php" method="POST">
          <input name="fname" class="input" id="fname" type="text" placeholder="Full name" required />
          <input name="lname" class="input" id="lname" type="text" placeholder="last name" required />
          <input name="email" class="input" id="email" type="text" placeholder="Email address" required />
          <input name="pass" class="input" id="password" type="password" placeholder="Password" required />
          <input name="rpass" class="input" id="rpassword" type="text" placeholder="Repeat password" required />
          <div class="checkbox">
            <input type="checkbox" id="signupCheck" />
            <label for="signupCheck">I accept all terms & conditions</label>
         </div>
         <button id="sign" type="submit" value="register" name="register">Signup</button> 
        </form>
      </div>

      <div class="form login">
        <header>Login</header>
        <form action="login.php" method="POST">
          <input name="email" type="text" placeholder="Email address" required />
          <input name="pass" type="password" placeholder="Password" required />
         
          <button id="sign" type="submit" name="login" value="login">Login</button> 
        </form>
      </div>

      <script>
        const wrapper = document.querySelector(".wrapper"),
          signupHeader = document.querySelector(".signup header"),
          loginHeader = document.querySelector(".login header");

        loginHeader.addEventListener("click", () => {
          wrapper.classList.add("active");
        });
        signupHeader.addEventListener("click", () => {
          wrapper.classList.remove("active");
        });
      </script>
    </section>
</div>

</div>


    <?php 
include("include/footer.php");
    
    ?>
  