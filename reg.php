 <script>
        
    function regg(){
         if(reg.password.value == reg.repassword.value){
        alert("Password did not Match!");
        }

    }
    </script>
<?php
session_start();

require 'dbcon.php';

$name=$_POST['nm'];
$email=$_POST['el'];
$username=$_POST['un'];
$password= $_POST['ps'];
$repassword=$_POST['rp'];
$gender=$_POST['gr'];
$mobilen=$_POST['mb'];

if($password != $repassword){
  echo 'Your Password is not the same';  
}
else{
//$checkemail = mysqli_query("SELECT username FROM tblcustomer WHERE email='$email'");
//if(mysqli_num_rows($checkemail) > 0){
    //header("Location: registration.php"); 
//}else{
     
 
  //$checkuser = mysqli_query("SELECT username FROM tbllogin WHERE username='$username'");
//
  //if(mysqli_num_rows($check) > 0){
      //header("Location: registration.php");  
           // }    
          // else{
          $sql="INSERT INTO tblcustomer(name,email,gender,mobileno)
                VALUES('$name', '$email','$gender','$mobilen'); ". 
                "INSERT INTO tbllogin (username, password) 
                VALUES('$username', '$password') ";
    
            $result = mysqli_multi_query($conn, $sql);
            //$result=$conn->query($sql.$sql2);
if(!$result){ 
    echo "fail" . die (mysqli_error($conn));
}else{
            header("Location: index.php"); 
              
   }
           }
    
  // }}

          
//mysqli_close();
    
?>