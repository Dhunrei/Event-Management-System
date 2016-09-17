<?php
    session_start();
    $conn = mysqli_connect("localhost", "root", "", "dbevent");

    $isValid = false;

//    $email = 'user@gmsfail.com';
//    $username = 'usedfr';
    

    $name=$_POST['nm'];
    $email=$_POST['el'];
    $username=$_POST['un'];
    $password= $_POST['ps'];
    $repassword=$_POST['rp'];
    $gender=$_POST['gr'];
    $mobilen=$_POST['mb'];
    




    // check if username already exists
    $sqlqry = "SELECT * FROM tbllogin WHERE username='$username'";
    $result = mysqli_query($conn, $sqlqry);
    if (mysqli_num_rows($result) > 0) {
        echo "There's an existing username!";
    }

    // check if email already exists
    $sqlqry = "SELECT * FROM tblcustomer WHERE email='$email'";
    $result = mysqli_query($conn, $sqlqry);
    if (mysqli_num_rows($result) > 0) {
        echo "There's an existing email!";
    }

    

    if($password= $_POST['ps'] != $repassword=$_POST['rp']){
      echo 'Your Password is not the same';  
    }
    else{

        $sql="INSERT INTO tblcustomer(name,email,gender,mobileno)
        VALUES('$name', '$email','$gender','$mobilen'); ". 
        "INSERT INTO tbllogin (username, password) 
        VALUES('$username', '$password') ";

        $result = mysqli_multi_query($conn, $sql);

        if(!$result){ 
            echo "fail" . die (mysqli_error($conn));
        } else{
            echo 'z';
            session_unset();
            //  header("Location: login.php"); 
        } 
    }
        
?>

 <script>
        
    function regg(){
         if(reg.password.value != reg.repassword.value){
        alert("Password did not Match!");
        }

    }
    </script>