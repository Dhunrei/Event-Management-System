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

if(empty($name = $_POST['name'])){
    echo "Insert name";
}
else{
    
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo("$email is a valid email address");
    } 
    else {
    
        $checkuser = mysqli_query("SELECT username FROM tbllregister WHERE username='$username'");
        $usercheck = mysqli_fetch_assoc($checkuser);
        if($_POST['username'] == $usercheck['username']){
        echo "Invalid Username";
        }
        else{
            if(empty($password = $_POST['password'])){
                echo "Insert password";
            }
             if(empty($repassword = $_POST['repassword'])){
                echo "Insert password";
            }
            
            if(!$password == $repassword){
                echo "Password did not match!";
            }else{
                if(empty($gender = $_POST['gender'])){
                    echo "Select Gender";
                }else{
                    if(empty($mobileno = $_POST['phone'])){
                        echo "Insert Mobile No.";
                    }else{

$sql="INSERT INTO tbllregister(name,email,username,password,gender,mobileno) 
VALUES('$name','$email','$username','$password','$gender','$mobileno')";

$result = $conn->query($sql);
if(!$result){
     echo "FAIL";
}
            else{
    header("Location: index.php");
}}}}}}}

    
?>