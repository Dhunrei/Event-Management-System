<?php
session_start();
include 'dbcon.php';

    $userid = $_POST['username'];
    $pwd = $_POST['password'];
    $sql = "SELECT * FROM tbllogin l, tblcustomer c WHERE l.id_customer = c.id_customer AND username='$userid' AND password='$pwd'";
    $result = $conn->query($sql);
    
if(!$row = $result -> fetch_assoc()){
        header("Location: login.php");
    }else{
    $_SESSION['id_customer'] = $row['id_customer'];
    $_SESSION['username'] = $row['username'];
    $_SESSION['name'] = $row['name'];
    $_SESSION['email'] = $row['email'];
    $_SESSION['gender'] = $row['gender'];
    $_SESSION['mobileno'] = $row['mobileno'];   
        
   
        header("Location: ./customer/details.php");
        
    }
   
?>