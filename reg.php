<?php
    session_start();
    $conn = mysqli_connect("localhost", "root", "", "dbevent");

    $email = 'asdasd@gmail.com';
    $username = 'user';


    
    /*
    $name=$_POST['nm'];
    $email=$_POST['el'];
    $username=$_POST['un'];
    $password= $_POST['ps'];
    $repassword=$_POST['rp'];
    $gender=$_POST['gr'];
    $mobilen=$_POST['mb'];
    */





    $sqlqry = "SELECT * FROM tblcustomer c, tbllogin l WHERE l.username='$username' OR c.email='$email'";
    $result = mysqli_query($conn, $sqlqry);
    if (mysqli_num_rows($result) > 0) {
        echo 'yee';
    }

    //$usernamecheck= mysqli_query("SELECT * username FROM tbllogin WHERE username='$username' AND //email='$email'");
    //$userchecker = mysqli_fetch_assoc($usernamecheck);
    //if($_POST['un'] == $userchecker['username']){
    //echo 'your name is taken' ;
    //}

    //else{
    //	$query="INSERT INTO tbllogin(username) VALUES ('$username')";
    //     $result = mysqli_multi_query($conn, $query);
    //}
    //if($_POST['el'] == $userchecker['email']){
    //    echo 'your email is taken';
    //}
    //else{
    //    $qry="INSERT INTO tbllogin(username) VALUES ('$email')";
    //     $result = mysqli_multi_query($conn, $qry);
    //}

    
    /*
    if($password= $_POST['ps'] != $repassword=$_POST['rp']){
      echo 'Your Password is not the same';  
    }
    else{  	

        $sqs = $conn -> query($sqli);
        $row = $sql -> fetch_assoc();
        $_SESSION['email'] = $row['email'];
        $_SESSION['username'] = $row['username'];

        if($email=$_POST['el'] == $_SESSION['email']){
                echo 'your email is taken';
        }

        if($username=$_POST['un'] == $_SESSION['username']){
            echo 'username is taken';
        } 

        else {
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
        
        
    } */
    
?>

 <script>
        
    function regg(){
         if(reg.password.value != reg.repassword.value){
        alert("Password did not Match!");
        }

    }
    </script>