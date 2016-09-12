<?php
session_start();
include 'dbcon.php';

    $userid = $_POST['username'];
    $pwd = $_POST['password'];
    $sql = "SELECT * FROM tbllregister WHERE username='$userid' AND  password='$pwd'";
    $result = $conn->query($sql);
    if(!$row = mysqli_fetch_assoc($result)){
        header("Location: login.php");
    }else{
        $_SESSION['id'] = $row['id'];
        $_SESSION['name'];
         $_SESSION['email'];
         $_SESSION['username'];
         $_SESSION['gender']; 
         $_SESSION['mobileno'];
        header("Location: ./customer/details.php");
        
    }
   
?>