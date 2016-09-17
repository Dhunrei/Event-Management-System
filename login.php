<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="css/stylelog.css" type="text/css"/>
    </head>
<body>    
  <div id="container">  
      <div id="header" class="menuheader">

      <nav><ul>
          <li ><a href="index.php">Home</a>
          <li><a href="#">About</a></li>
          <li ><a href="registration.php">Registration</a></li>
          <li><a href="contact.php">Contact</a></li>
          <li class="active"><a href="login.php">Login</a></li>
		</ul></nav>
      </div>
    
      <div id="content">
        <div class="login-form">
            
            <h3>Customer Login</h3>
            
            <fieldset>
            
            <form action="test.php" method="POST" >
                
            <p><label>Username:</label></p>
            <input type="text" name="username" placeholder="username" required="username"  >
            
             <p><label>Password:</label></p>
            <input type="password" name="password" placeholder="password" required="password" >
            
            <br>
            <input type="submit" value="Login"/>
    
                
                <p><span class="reg">Not a member yet?</span><a href="registration.php">Register Now</a></p>
            
                
                
                </form>
                </fieldset> 
          </div>    
    </div>  
     <div id="footer"></div>
    </div>
</body>   
</html>    