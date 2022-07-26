<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <link rel="stylesheet" href="homepage.css">
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
       </div>
          <div id="c1">
            <h1><b>HELSING'S BOYS SECONDARY SCHOOL</b></h1>
            <h2>"Success is not final; failure is not fatal: It is the courage to continue that counts."</h2>
            <p>At Helsing's Boys Secondary School, we aim to provide the highest standards of education within a caring and stimulating environment.<br>
              Our students are well behaved and eager to learn. Academic success is at the core of our work and we are committed tostudents achieving<br>
              the highest levels of progress and success. We welcome you all.</p>
          </div>
        <!-- <script>
          
        </script> -->
    </body>
</html>