<?php
    include('connect.php');

    $usname = $_POST['Username'];
    $pass = $_POST['Password'];

    $creds = "SELECT Username, Password FROM students WHERE Username ='$usname' AND Password ='$pass'";
    $results = mysqli_query($connect,$creds);

    if($results){       
        while( $data = mysqli_fetch_assoc($results)){
            if(($data['Username'] == $usname) && ( $data['Password'] == $pass)){
                session_start();
                $_SESSION['Username'] = $usname;
                 header("location:http://localhost/IS181-Mandy/Homepage.php");
            }
        }

    if(empty($_SESSION['Username'])){
        die('Wrong username or password');
    }
    }
    
?>