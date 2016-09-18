<?php
include 'dbcon.php';
session_start();

if(isset($_SESSION['id_customer'];)){
    
    $comment = $_POST['comments'];
    $id=$_SESSION['id_customer'];
$sql = "INSERT INTO tblfeedback(feedback,id_customer) VALUES('$comment','$id') ";
$result = mysqli_query($conn, $sql);
If(!$result){
     echo "fail" . die (mysqli_error($conn));
}else{
           
            header("Location: feedback.php"); 
}
?
