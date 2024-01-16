<?php

session_start();
if (isset($_SESSION['admin_email'])) {
  header('location: index.php');
 
}

?>

<link rel="stylesheet" href="assets/css/sign.css">

<div id="main1">
  <br><br><br><br><br><br>

  <div id="container">
    <section class="wrapper" id="formm">
      <div class="form signup">
        <header>Admin login</header>
        <form action="admin_login.php" method="POST">
          <!-- Change action to the appropriate login processing file (e.g., admin_login_process.php) -->

          <input name="email" class="input" id="email" type="text" placeholder="Email address" required />
          <input name="pass" class="input" id="password" type="password" placeholder="Password" required />

          <div class="checkbox">
            <input type="checkbox" id="signupCheck" />
            <label for="signupCheck">I accept all terms & conditions</label>
          </div>
          <button id="sign" type="submit" value="login" name="login">Login</button>
          <!-- Change button value and name to "login" since it's a login form -->
        </form>
      </div>
    </section>
  </div>

</div>


<link rel="stylesheet" href="assets/css/sign.css">

<div id="main1">
  <br><br><br><br><br><br>

  <div id="container">
    <section class="wrapper" id="formm">
      <div class="form signup">
        <header>Admin login</header>
        <form action="admin_login_process.php" method="POST">
          <!-- Change action to the appropriate login processing file (e.g., admin_login_process.php) -->

          <input name="email" class="input" id="email" type="text" placeholder="Email address" required />
          <input name="pass" class="input" id="password" type="password" placeholder="Password" required />

          <div class="checkbox">
            <input type="checkbox" id="signupCheck" />
            <label for="signupCheck">I accept all terms & conditions</label>
          </div>
          <button id="sign" type="submit" value="login" name="login">Login</button>
          <!-- Change button value and name to "login" since it's a login form -->
        </form>
      </div>
    </section>
  </div>

</div>
