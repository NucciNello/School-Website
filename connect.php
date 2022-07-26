<?php
$connect = mysqli_connect("localhost","root","","helsing's_database");
   if(!$connect){
    echo die("Can't connect to the database").mysqli_error();
   }
?>