<?php
session_start();
include 'dbcon.php';


$type = $_POST['type'];
$place = $_POST['ep'];
$noguest = $_POST['guest'];
$date = $_POST['date'];




 if(isset($_SESSION['id_customer'])){

     echo $date;
     $_SESSION['username'];
     $_SESSION['name'];
     $_SESSION['email'];
     $_SESSION['gender'];
     $_SESSION['mobileno'];
     
//$sql = "INSERT INTO tblbookings(type,place,no_of_guest,date)";     
     
     
     
     
     
     
     
     
     
     
     
     
 }

?>