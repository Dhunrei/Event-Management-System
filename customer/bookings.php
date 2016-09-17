<?php
session_start();
include 'dbcon.php';


$type = $_POST['type'];
$place = $_POST['ep'];
$noguest = $_POST['guest'];
$date = $_POST['date'];




 if(isset($_SESSION['id_customer'])){

     echo $date;
   
     
$sql = "INSERT INTO tblbookings(type,(place,no_of_guest,date)
VALUE('$type','$place','$noguest','$date')"; 
     
     $result = mysqli_query($sql);
     
     if(!$result){
         echo "fail".die (mysqli_error($conn));
     }else{
         echo "ye";
         
         header("Location: ../../login.php");
     }
     
     
     
     
     
     
     
     
     
     
 }

?>