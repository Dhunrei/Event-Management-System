<?php
session_start();
include 'dbcon.php';

    $userid = $_POST['username'];
    $pwd = $_POST['password'];
    $sql = "SELECT * FROM tbllogin WHERE username='$userid' AND  password='$pwd'";
    $result = $conn->query($sql);
    if(!$row = mysqli_fetch_assoc($result)){
        header("Location: login.php");
    }else{
        $_SESSION['ID'] = $row['ID'];
        
    }
    header("Location: ./customer/details.php");
?>