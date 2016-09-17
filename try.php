<?php
require 'dbcon.php';

$email = $_POST['email'];

$checkemail = mysqli_query("SELECT username FROM tblcustomer WHERE email='$email'");
if(mysqli_num_rows($checkemail) > 0){
    header("Location: registration.php"); 
}else{
     

echo "YEEE";



}


?>
<!DOCTYPE html>
<html>
<head><title>
    </title>
    </head>
    
    <form id="try" method="post" action="try.php" name="try">
    <input type="text" name="email" />
    <input type="submit" 
    </form>
</html>