<?php
    session_start();
    $conn = mysqli_connect("localhost", "root", "", "dbevent");

    $name=$_POST['nm'];
    $email=$_POST['el'];
    $username=$_POST['un'];
    $password= $_POST['ps'];
    $repassword=$_POST['rp'];
    $gender=$_POST['gr'];
    $mobilen=$_POST['mb'];
    
    if($password != $repassword){
        echo 'Password did not Match!';
    }else{
        
    $sqlqry = "SELECT * FROM tbllogin WHERE username='$username'".
              "SELECT * FROM tblcustomer WHERE email='$email'";
    $result = mysqli_multi_query($conn, $sqlqry);
    if (mysqli_num_rows($result) > 0) {
       //header("Location: registration.php");
        echo 'Ye';
    }
         if(!$row = $result -> fetch_assoc()){
              echo 'no';
          }
        $_SESSION['username'] = $row['username'];
         $_SESSION['email'] = $row['email'];
         echo 'e',$_SESSION['username'];
         echo 'a',$_SESSION['email'];
    }
        
        
?>
        