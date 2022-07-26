<?php
    include('connect.php');


    $aname = $_POST['Name'];
    $eyear = $_POST['Enroll'];
    $gyear = $_POST['Graduation'];
    $hmaster = $_POST['Headmaster'];
    $teacher = $_POST['Famous_teacher'];
    $result = $_POST['Results'];
    $tel = $_POST['Mobile'];
    $email = $_POST['Email'];
    $occpxn = $_POST['Occupation'];
    $address = $_POST['Address'];

    $query = "INSERT INTO `alumni`(`Name`,`Enroll`,`Graduation`,`Headmaster`,`Famous_teacher`,`Results`,`Occupation`,`Address`,`Email`,`Mobile`) VALUES ('$aname','$eyear','$gyear','$hmaster','$teacher','$result','$occpxn','$address','$email','$tel')";
    $results = mysqli_query($connect,$query);

    if($results){
        // redirect to alumni page;
        header('location:http://localhost/IS181-Mandy/Alumni.php');
    }
?>