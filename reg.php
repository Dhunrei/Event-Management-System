 <script>
        
    function regg(){
         if(reg.password.value == reg.repassword.value){
        alert("Password did not Match!");
        }

    }
    </script>
<?php
session_start();

include 'dbcon.php';

$name = $_POST['name'];
$email = $_POST['email'];
$username = $_POST['username'];
$password = $_POST['password'];
$repassword = $_POST['repassword'];
$gender = $_POST['gender'];
$mobileno = $_POST['phone'];
if(!$password == $repassword){
    header("Location: registration.php"); 
}else{
$checkemail = mysqli_query("SELECT username FROM tbllregister WHERE email='$email'");
    if(mysqli_num_rows($checkemail) > 0){
        header("Location: registration.php"); 
    }else{
        
 
    $checkuser = mysqli_query("SELECT username FROM tbllregister WHERE username='$username'");

    if(mysqli_num_rows($check) > 0){
                header("Location: registration.php");  
            }    
            else{
            $sql="INSERT INTO tbllregister(name,email,username,password,gender,mobileno) 
            VALUES('$name','$email','$username','$password','$gender','$mobileno')";
            header("Location: index.php"); 
            }  
    }
   }  

mysqli_close();
    
?>