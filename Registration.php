<?php    
    include("connect.php");
    $fname = $_POST['Firstname'];
    $sname = $_POST['Secondname'];
    $suname = $_POST['Surname'];
    $usname = $_POST['Username'];
    $date = $_POST['DOB'];
    $ema = $_POST['Email'];
    $mob = $_POST['Mobile'];
    $face = $_POST['FB'];
    $twit = $_POST['Twitter'];
    $insta = $_POST['IG'];
    $pass = $_POST['Password'];
    $carr = $_POST['CV'];

    $existingCredsQuery = 'SELECT Username, Email FROM students';
    $results = mysqli_query($connect, $existingCredsQuery);


    if($results){
        while($data = mysqli_fetch_assoc($results)){
            if($data['Email'] == $ema){
                die('Email already exists');
            }
            if($data['Username'] == $usname){
                die('Username already exists');
            }
        }

        $query = "INSERT INTO `students`(`Firstname`,`Secondname`,`Surname`,`Username`,`Email`,`Password`,`DOB`,`Mobile`,`CV`,`IG`,`FB`,`Twitter`) VALUES ('$fname','$sname','$suname','$usname','$ema','$pass','$date','$mob','$carr','$insta','$face','$twit')";

        if(mysqli_query($connect,$query)){
            session_start();
            $_SESSION['Email'] = $ema;
            header('location:http://localhost/IS181-Mandy/Homepage.php');
        }else{
            echo "Failed!! ".mysqli_error($connect);
        }
    }


?>