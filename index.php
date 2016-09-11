<?php
session_start();
?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="css/style.css" type="text/css"/>
    </head>
<body>    
  <div id="container">  
      <div id="header" class="menuheader">

      <nav><ul>
          <li class="active"><a href="#">Home</a>
          <li><a href="#">About</a></li>
          <li ><a href="registration.php">Registration</a></li>
          <li><a href="contact.php">Contact</a></li>
          <li><a href="login.php">Login</a></li>
		</ul></nav>
      </div>
    
      <div id="content">    
        <?php
        if(isset($_SESSION['ID'])){
            echo $_SESSION['ID'];
        }  else{
            echo "You are not Logged in!";
        }
        ?>
    
   
    
     
    </div>  
     <div id="footer"></div>
    </div>
</body>   
</html>    