<?php
session_start();
include 'dbcon.php';


$type = $_POST['type'];
$place = $_POST['ep'];
$noguest = $_POST['guest'];
$date = $_POST['date'];




 if(isset($_SESSION['id_customer'])){    
     $id=$_SESSION['id_customer'];
$sql = "INSERT INTO tblbookings(type,place,no_of_guest,date,status,id_customer)
VALUE('$type','$place','$noguest','$date','PENDING','$id') "; 
     
     $result = mysqli_query($conn, $sql);
     
     if(!$result){
         echo "fail".die (mysqli_error($conn));
     }else{
         header("Location: bookevent.php");
         
      
     }
    
 }

?>