
<!DOCTYPE html>
<html>
    <head>
      
        <link rel="stylesheet" href="css/stylereg.css" type="text/css">

    </head>
   
<body>    
  <div id="container">  
      <div id="header" class="menuheader">

      <nav><ul>
          <li ><a href="index.php">Home</a>
          <li><a href="#">About</a></li>
          <li class="active"><a href="registration.php">Registration</a></li>
          <li><a href="contact.php">Contact</a></li>
          <li><a href="login.php">Login</a></li>
		</ul></nav>
      </div>
    
      <div id="content">
 <div  class="form">
    
            <form id="reg" action="reg.php" method="post" >
          
                <h1>Customer Registration</h1>
                <p class="contact"><label for="name">Name</label></p>

                <input id="name" name="name" placeholder="First and last name" required tabindex="1" type="text" />
                
                <p class="contact"><label for="emaill">Email</label></p>

                <input id="email" name="email" placeholder="example@domain.com" required type="email" />


                <p class="contact"><label for="usernamee">Create a username</label></p>

                <input id="username" name="username" placeholder="username" required tabindex="2" type="text" />

 
                <p class="contact"><label for="passwordd">Create a password</label></p>

                <input type="password" id="password" name="password" required type="text" />

                <p class="contact"><label for="repassword">Confirm your password</label></p>

                <input type="password" id="password" name="repassword" required type="text" />
                <br>

 
                <label>Select Gender:</label>
                
            <select class="select-style gender" name="gender">
 
            <option value="">I Am..</option>
 
            <option value="Male">Male</option>
 
            <option value="Female">Female</option>
 

            </select><br><br>
 
            <p class="contact"><label for="phone">Mobile phone</label></p>

            <input id="phone" name="phone" placeholder="phone number" required type="text"> <br>

            <input class="buttom" name="submit" id="submit" tabindex="5" value="Sign me up!" type="submit" onclick="regg()" />   
              
   </form>

</div>

          </div>
        </div>

   
     <div id="footer"></div>
</body>    
</html>    