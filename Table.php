<!DOCTYPE html>
<html lang="en">
<head>
    <title>Table</title>
    <link rel="stylesheet" href="Table.css" />
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




      <div class="alumni">
      <p>Our Alumni List</p>
      <hr>
      <table class="last">
        <tr>
          <th>Alumnus Name</th>
          <th>Year of Enrollemnt</th>
          <th>Year of Graduation</th>
          <th>Headmaster</th>
          <th>Famous Teacher</th>
          <th>Results</th>
          <th>Occupation</th>
          <th>Address</th>
          <th>Email</th>
          <th>Mobile Number</th> 
        </tr>
        <hr id="hl">
        
<?php
      $query = 'SELECT * FROM alumni';
      $results = mysqli_query($connect,$query);

      if($results){ 
        while($data = mysqli_fetch_assoc($results)){
    
   
          ?>
          <tr>
            <td><?php echo $data['Name'];?></td>
            <td><?php echo $data['Enroll'];?></td>
            <td><?php echo $data['Graduation'];?></td>
            <td><?php echo $data['Headmaster'];?></td>
            <td><?php echo $data['Famous_teacher'];?></td>
            <td><?php echo $data['Results'];?></td>
            <td><?php echo $data['Occupation'];?></td>
            <td><?php echo $data['Address'];?></td>
            <td><?php echo $data['Email'];?></td>
            <td><?php echo $data['Mobile'];?></td>
          </tr>

        <?php 
 }
      }else{
        echo "No alumni";
      }
    ?>
    </div>
    
</body>
</html>