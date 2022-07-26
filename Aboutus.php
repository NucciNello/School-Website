<!DOCTYPE html>
<html>
<head>
    <title>About Us</title>
    <link rel="stylesheet" href="Aboutus.css">
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
    <div class="cont">
    <div class="ab1">
        <div class="app__about_description">
            <h1>About Helsing's Boys</h1>
            <hr>
              <p id="a">
                Helsing's Boys Secondary School was established in 1969 by His Honorable, Prof.Nucci Nello.<br>
                It started with 69 students, and until today, it has more than 3800 graduates, 800 students 
                <br>and 182 teachers. It has provided crucial elites in various organizations in Tanzania.
              </p>
              <p id="b">
                Helsing's Boys is a boys school, and is based for O-level<br> (Middle school) education with Cambrige,
                IB and NECTA caricullum as per your choice.<br>It is located at
                 <a href="https://www.google.ro/maps/place/College+of+Information
                +and+Communication+Technologies+(CoICT)+-+University+of+Dar+es+salaam/@-6.7714228,39.2377657,17z/data=!
                4m12!1m6!3m5!1s0x185c4e9e55555555:0x31c34ce3703cc9eb!2sCollege+of+Information+and+Communication+Technol
                ogies+(CoICT)+-+University+of+Dar+es+salaam!8m2!3d-6.7714281!4d39.2399597!3m4!1s0x185c4e9e55555555:0x31
                c34ce3703cc9eb!8m2!3d-6.7714281!4d39.2399597?hl=en-GB">Kijitonyama, Dar es Salaam Tanzania</a>
              </p>
              <p id="c">Our Education comes with a package of,</p>
              <div id="imgcont">
                <div id="img1">
                    <img src="AboutUs1.jpg" alt="School classes">
                    <br>
                    <p id="im1">
                        Comfortable environment for Studies
                    </p>
                </div>
                <div id="img1">
                    <img src="AboutUs2.jpg" alt="School classes">
                    <br>
                    <p id="im1">
                        100% Practical Learning
                    </p>
                </div>
                <div id="img1">
                    <img src="AboutUs3.jpeg" alt="School classes">
                    <br>
                    <p id="im1">
                        Comfortable environment for Sports
                    </p>
                </div>
              </div>
              <div id="last">
                <p id="and">
                    and much more, Welcome learn with Us.
                </p>
              </div>
        </div>
    </div>
    <div class="ab1">
        <div class="vision">
            <h1>Our Vision</h1>
            <hr>
            <p id="d">We strive to provide our graduates with an academic foundation that will enable
                <br>them to gain admission to thehigh schools, colleges or universities of their choice as well as to
                <br>succeed in those institutions.</p>
            <p id="d1">We are dedicated to a continuing tradition of excellence in an ever-changing world. 
                <br>Within a safe and supportive environment, we provide a relevant, high-quality education and prepare
                <br>our diverse student body for future endeavors.We honor achievement and
                <br>promote pride in ourselves, in our school, and in our community.
            </p>
            <p id="d2">Learning. Discovery. Engagement.</p>
          </div>
    </div>
    <div class="ab1">
        <div class="mission">
            <h1>Our Mission</h1>
            <hr>
            <p id="e">Our mission is to ensure every candidate from our school performs beyond normal.
                <br>Performance above 4.4 GPA for Cambrige and IB students is our goal for each student,
                <br>Division I for NECTA students is assurence. 
            </p>
        </div>
        <div class="tab">
            <h1>CSEE results for the past 3 years</h1>
            <table id="table">
                <tr id="row1">
                    <th>Year</th>
                    <th>Div I</th>
                    <th>Position in Nation</th>
                </tr>
                <tr>
                    <td>2021</td>
                    <td>All students</td>
                    <td>1</td>
                </tr>
                <tr>
                    <td>2020</td>
                    <td>98%</td>
                    <td>3</td>
                </tr>
                <tr>
                    <td>2019</td>
                    <td>90%</td>
                    <td>9</td>
                </tr>
            </table>
            <p id="f">Not only about academic performance,<br> we impact our Nation with competent citizens,
                who are able to transform their<br>knowledge into useful application in their societies.
            </p>
        </div>
    </div>
    <div class="bottons">
    <button class="left" onclick="plusDivs(-1)">&#10094;</button>
    <button class="right" onclick="plusDivs(+1)">&#10095;</button>
    </div>
    <div id="home">
        <a href="Homepage.php">Home</a>
    </div>
    </div>
    
    <script>
        var slideIndex = 1;
        showDivs(slideIndex);
        
        function plusDivs(n) {
          showDivs(slideIndex += n);
        }
        
        function showDivs(n) {
          var i;
          var x = document.getElementsByClassName("ab1");
          if (n > x.length) {slideIndex = 1}
          if (n < 1) {slideIndex = x.length}
          for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";  
          }
          x[slideIndex-1].style.display = "block";  
        }
        
        var myIndex = 0;
        carousel();

        function carousel() {
          var i;
          var x = document.getElementsByClassName("ab1");
          for (i = 0; i < x.length; i++) {
            x[i].style.display = "none";  
          }
          myIndex++;
          if (myIndex > x.length) {myIndex = 1}    
          x[myIndex-1].style.display = "block";  
          setTimeout(carousel, 6000); // Change image every 8 seconds
          }
        </script>
</body>
</html>