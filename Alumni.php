<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Alumni</title>
    <link rel="stylesheet" href="Alumni.css" />
  </head>
  
  <body>

  <!-- Connect to the database -->
    <?php 
    include('connect.php');

    session_start();
  // require user to login if logged out
    if(!isset($_SESSION['Username'])){
        header('location:http://localhost/IS181-Mandy/login1.php');
    }
    if((isset($_SESSION['Username']))){?>
       <?php } ?>


       <div id="c2">
        <button class="button" onclick="parent.location='Homepage.php'">Home</button>
        <button class="button" onclick="parent.location='Aboutus.php'">About</button>
        <?php 
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
      <!-- <center> -->
<div class="main">
<h1>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  Alumni</h1>
<hr>
    <div class="but">
    <button class="button" onclick="parent.location='Table.php'"><b>View Our Alumni</b></button>
    </div>
<div class="cont0">
<p class="p1">Are you an alumnus? 

<!-- <a href="allmuni.php"><button id="alumniBtn">Join Here</button></a></p>    -->

<?php if(isset($_SESSION['Username'])){ ?>
<div class="app__alumni_form" id="alumniForm">
  <form action="./allmuni.php" method="post">
    <input type="text" placeholder="Alumnus name" name="Name" id="alname"/>
    <div class="p2">
    <p >Year of enrollment</p>
    <select name="Enroll" id="enrolYear">
    <option value="2022">2022</option>
    <option value="2021">2021</option>
    <option value="2020">2020</option>
    <option value="2019">2019</option>
    <option value="2018">2018</option>
    <option value="2017">2017</option>
    <option value="2016">2016</option>
    <option value="2015">2015</option>
    <option value="2014">2014</option>
    <option value="2013">2013</option>
    <option value="2012">2012</option>
    <option value="2011">2011</option>
    <option value="2010">2010</option>
    <option value="2009">2009</option>
    <option value="2008">2008</option>
    <option value="2007">2007</option>
    <option value="2006">2006</option>
    <option value="2005">2005</option>
    <option value="2004">2004</option>
    <option value="2003">2003</option>
    <option value="2002">2002</option>
    <option value="2001">2001</option>
    <option value="2000">2000</option>
    <option value="1999">1999</option>
    <option value="1998">1998</option>
    <option value="1997">1997</option>
    <option value="1996">1996</option>
    <option value="1995">1995</option>
    <option value="1994">1994</option>
    <option value="1993">1993</option>
    <option value="1992">1992</option>
    <option value="1991">1991</option>
    <option value="1990">1990</option>
    <option value="1989">1989</option>
    <option value="1988">1988</option>
    <option value="1987">1987</option>
    <option value="1986">1986</option>
    <option value="1985">1985</option>
    <option value="1984">1984</option>
    <option value="1983">1983</option>
    <option value="1982">1982</option>
    <option value="1981">1981</option>
    <option value="1980">1980</option>
    <option value="1979">1979</option>
    <option value="1978">1978</option>
    <option value="1977">1977</option>
    <option value="1976">1976</option>
    <option value="1975">1975</option>
    <option value="1974">1974</option>
    <option value="1973">1973</option>
    <option value="1972">1972</option>
    <option value="1971">1971</option>
    <option value="1970">1970</option>
    <option value="1969">1969</option>
  </select>
    </div>

    <div class="p3">
    <p>Year of graduation</p>
    <select name="Graduation" id="gradYear">
    <option value="2022">2022</option>
    <option value="2021">2021</option>
    <option value="2020">2020</option>
    <option value="2019">2019</option>
    <option value="2018">2018</option>
    <option value="2017">2017</option>
    <option value="2016">2016</option>
    <option value="2015">2015</option>
    <option value="2014">2014</option>
    <option value="2013">2013</option>
    <option value="2012">2012</option>
    <option value="2011">2011</option>
    <option value="2010">2010</option>
    <option value="2009">2009</option>
    <option value="2008">2008</option>
    <option value="2007">2007</option>
    <option value="2006">2006</option>
    <option value="2005">2005</option>
    <option value="2004">2004</option>
    <option value="2003">2003</option>
    <option value="2002">2002</option>
    <option value="2001">2001</option>
    <option value="2000">2000</option>
    <option value="1999">1999</option>
    <option value="1998">1998</option>
    <option value="1997">1997</option>
    <option value="1996">1996</option>
    <option value="1995">1995</option>
    <option value="1994">1994</option>
    <option value="1993">1993</option>
    <option value="1992">1992</option>
    <option value="1991">1991</option>
    <option value="1990">1990</option>
    <option value="1989">1989</option>
    <option value="1988">1988</option>
    <option value="1987">1987</option>
    <option value="1986">1986</option>
    <option value="1985">1985</option>
    <option value="1984">1984</option>
    <option value="1983">1983</option>
    <option value="1982">1982</option>
    <option value="1981">1981</option>
    <option value="1980">1980</option>
    <option value="1979">1979</option>
    <option value="1978">1978</option>
    <option value="1977">1977</option>
    <option value="1976">1976</option>
    <option value="1975">1975</option>
    <option value="1974">1974</option>
    <option value="1973">1973</option>
    <option value="1972">1972</option>
    </select>
    </div>

    <div class="p4">
    <p>Headmaster at graduation</p>
    <select name="Headmaster" id="headmasters">
    <option value="Mr. Ruben Mchicha">Mr. Ruben Mchicha</option>
    <option value="Mr. George Mendez">Mr. George Mendez</option>
    <option value="Dr. Sancho Mikuki">Dr. Sancho Mikuki</option>
    <option value="Ms. Yoruba Zehara">Ms. Youruba Zehara</option>
    <option value="Sir. Alex Mpenyunyu">Sir. Alex Mpenyunyu</option>
    <option value="Ms. Kunta Kingo">Ms. Kunta Kingo</option>
    <option value="Dr. Brian Mshanga">Dr. Brian Mshanga</option>
    <option value="Mr. Muddy Mohammed">Mr. Muddy Mohammed</option>
    <option value="Sir. Florentino Perez">Sir. Florentino Perez</option>
    <option value="Mr. Dira Daruki">Mr. Diara Daruki</option>
    <option value="Mr. Kilumbe Macho">Mr. Kilumbe Macho</option>
    </select>
    </div>

    <div class="p5">
    <p>Famous Teacher at graduation</p>
    <select name="Famous_teacher" id="teachers">
    <option value="sir. Kelvin De Bruyne">Sir. Kelvin De Bruyne</option>
    <option value="Mr. Ruben Mchicha">Mr. Ruben Mchicha</option>
    <option value="Mr. John Kairuki">Mr. John Kairuki</option>
    <option value="Dr. Bilalo Hassana">Dr. Bilalo Hassan</option>
    <option value="Ms. Yoruba Zehara">Ms. Youruba Zehara</option>
    <option value="Sir. Alex Mpenyunyu">Sir. Alex Mpenyunyu</option>
    <option value="Ms. Kunta Kingo">Ms. Kunta Kingo</option>
    <option value="Dr. Brian Mshanga">Dr. Brian Mshanga</option>
    <option value="Mr. Muddy Mohammed">Mr. Muddy Mohammed</option>
    <option value="Sir. Florentino Perez">Sir. Florentino Perez</option>
    <option value="Mr. Dira Daruki">Mr. Diara Daruki</option>
    <option value="Mr. Kilumbe Macho">Mr. Kilumbe Macho</option>
    </select>
    </div>

    <div class="p6">
    <p>Results</p>
    <select name="Results" id="results">
    <option value="Division I">Division I</option>
    <option value="Division II">Division II</option>
    <option value="Division III">Division III</option>
    <option value="Division IV">Division IV</option>
    </select>
    </div> 

    <div class="inpu">
    <input type="text" id="occ" placeholder="Occupation" name="Occupation">

    <input type="email" id="mail" placeholder="Email" required name="Email">

    <input type="text" id="add" name="Address" placeholder="Address"/>

    <input type="tel" id="num" placeholder="Mobile number" name="Mobile" required>
    <br>
    <br>
    <br>
    <br>
    <input type="submit" id="sub" value="Join">
    </div>
  </form>
</div>
<?php } ?>

    
     
</div>
<div class="a1">
          <a href="Homepage.php">Home</a>
          <hr>
        </div>
</div>
<!-- <script src="Alumni.js"></script> -->
<center>
</body>
</html>