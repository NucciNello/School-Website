<!DOCTYPE html>
<html>
  <head>
    <title>Login</title>
    <link rel="stylesheet" href="login.css">
  </head>
  <body>
  
  <div id="c2">
        <button class="button" onclick="parent.location='Homepage.php'">Home</button>
        <button class="button" onclick="parent.location='Aboutus.php'">About</button>
        <?php 
        session_start();
        if((isset($_SESSION['Username']))){
          ?>
          <button class="button" onclick="parent.location='logout.php'">Logout</button>
        <?php } else{ ?>
          <button class="button" onclick="parent.location='Registration1.php'">Register</button>
          <button class="button" onclick="parent.location='login1.php'">Login</button>
        <?php } ?>
        <button class="button" onclick="parent.location='Alumni.php'">Alumni</button>
        <button class="button" onclick="parent.location='Staff.php'">Staff</button>
        <button class="button" onclick="parent.location='contact.php'">Contacts</button>
       <?php
        // if((isset($_SESSION['Username']))){?>
      <?php  ?>

  <div class="app__login">
    <h1>LOGIN</h1>
        <form
          action="./login.php"
          method="post"
          class="app__login_form center"
        >
          <div class="app__login_input">
            <input type="text" id="Username" placeholder="Username" name="Username" required />
          </div>
          <div class="app__login_input2">
            <input type="password" id="pass" placeholder="Password" name="Password" required/>
          </div>
  
          <!-- <button type="submit">Login</button> -->
          <input type="submit" value="Login" class="app__login_btn" />
        </form>
        <p>Not a member? <a href="Registration1.php">Register</a></p>
      </div>
      <script src="Alumni.js"></script>
    </body>
  </html>