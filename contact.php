<!DOCTYPE html>
<html>
<head>
       <title>Contact Us</title>
    <link rel="stylesheet" href="contact.css">
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
    <div id="c1">
    <div id="cont0"><h1>Contact Us</h1>
        <hr>
    </div>
        &nbsp;
    <div id="cont1">
        <img src="Location.png">
        <a href="https://www.google.ro/maps/place/College+of+Information+and+Communication+Technologies+(CoICT)
        +-+University+of+Dar+es+salaam/@-6.7714228,39.2377657,17z/data=!4m12!1m6!3m5!1s0x185c4e9e55555555:0x31c
        34ce3703cc9eb!2sCollege+of+Information+and+Communication+Technologies+(CoICT)+-+University+of+Dar+es+sa
        laam!8m2!3d-6.7714281!4d39.2399597!3m4!1s0x185c4e9e55555555:0x31c34ce3703cc9eb!8m2!3d-6.7714281!4d39.23
        99597?hl=en-GB">CoICT, Dar es Salaam Tanzania</a>
    </div>
    <div id="cont2">
        <img src="mail.png">
        <a href="mailto:caljr9301@gmail.com">caljr9301@gmail.com</a>
    </div>
    <div id="cont3">
        <img src="phone.png">
        <p>+255 759 027 671</p>
    </div>
    <div id="cont4">
        <a href="https://twitter.com/MandyNuhu"><img src="twitter.png" width="30px" height="30px"></a>
        &nbsp;&nbsp;
        <a href="https://www.instagram.com/iam_nuhu_mandy"><img src="instagram.png" width="30px" height="30px"></a>
        &nbsp;&nbsp;
        <a href="https://github.com/NucciNello"><img src="github.png" width="30px" height="30px"></a>      
    </div>
    <div id="cont5">
        <a href="Homepage.php">Home</a>
    </div>
    </div>
</body>
</html>
