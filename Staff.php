
<!DOCTYPE html>
<html>
<head>
    <title>Staff</title>
    <link rel="stylesheet" href="Staff.css" />
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

  <div id="main">
    <div class="staff">
      <p>Staff</p>
    </div>
      <hr class="hoo">
      <div id="cont0">
         <div class="staff1">
           <img src="st01.jpg" alt="director">
           <h4>Dr. Nuhu Mandy</h4>
           <p id="p1">Director of the school. Doctarate in
           <br>Human Psychology and Assets 
           <br>Management. Owner the school.
           </p>
         </div>
         <div class="staff2">
           <img src="st2.JPG" alt="Headmaster">
           <h4>Mr. Ruben Mchicha</h4>
           <p id="p2">Headmaster of the school. Doctarate in
            <br>Physics. Head of the teachers. Head of
            <br>school managerial committee.
            <br>Physics Teacher.
          </p>
         </div>
         <div class="staff3">
           <img src="st3.JPG" alt="Second master">
           <h4>Mr. Shabani</h4>
           <p id="p3">Second master. Masters in Artistical Science. Head of academic commitee and parents committee.
            <br>Civics and History Teacher.
           </p>
         </div>
      </div>
      <div id="cont1">
         <div class="staff4">
           <img src="st4.JPG" alt="Academic">
           <h4>Ms. Bethsebba</h4>
           <p id="p4">Academic mistress. Bsc in Psychology
            <br>Science. Head of discipline commitee
            <br>and advisor of Student's government.
            <br>Biology Teacher.
          </p>
         </div>
         <div class="staff5">
           <img src="st5.JPG" alt="Discipline">
           <h4>Mr. Hafilibafi</h4>
           <p id="p5">Discipline master. Masters in Artistical
            <br>Science. Head of academic commitee
            <br>and parents committee.
            <br>Kiswahili and English Teacher.
          </p>
        </div>
        </div>
        <div id="cont2">
          <h1 class="hone">Other staff members</h1>
          <div id="tab">
          <table class="members">
            <tr>
              <th>Work</th>
              <th>Number</th>
            </tr>
            <tr>
              <th>Language</th>
              <th>20</th>
            </tr>
            <tr>
              <th>Mathematics</th>
              <th>5</th>
            </tr>
            <tr>
              <th>General Studies</th>
              <th>20</th>
            </tr>
            <tr>
              <th>physics</th>
              <th>7</th>
            </tr>
            <tr>
              <th>Chemistry</th>
              <th>5</th>
            </tr>
            <tr>
              <th>Biology</th>
              <th>10</th>
            </tr>
            <tr>
              <th>Sports</th>
              <th>10</th>
            </tr>
            <tr>
              <th>Non-Teaching Staff</th>
              <th>30</th>
            </tr>
          </table>
        </div>
        <div class="final">
          <h1>Total Staff = 112</h1>
        <div class="a1">
          <a href="Homepage.php">Home</a>
          <hr>
        </div>
        </div>
      </diV>
  </div>
</body>
</html>