<?php session_start() ?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="styledetail.css" type="text/css"/>
    </head>
    
    
<body>    
    

    
    
  <div id="container">  
      <div id="header" class="menuheader">

      <nav><ul>
          <li class="active"><a href="#">My Details</a>
          <li><a href="bookevent.php">Book Events</a></li>
          <li ><a href="#">Booking Status</a></li>
          <li><a href="#">Booking History</a></li>
          <li><a href="#">Feedback</a></li>
          <li><a href="#">View Venus</a></li>
          <li><a href="#">Logout</a></li>
		</ul></nav>
      </div>
      <?php
    
    if(isset($_SESSION['id'])){
        echo "<br><br> Hello!~  ",$_SESSION['name'];
        echo "<br><br> UserName:  ",$_SESSION['username'];
        echo "<br><br> Email:  ", $_SESSION['email'];
        echo "<br><br> Gender:  ",$_SESSION['gender'];
        echo "<br><br> Phone No.:  ",$_SESSION['mobileno'];
    }
    
    
  
    ?>
      
      <div id="content">    
        <div  class="form">
    
            <form id="contactform">
          
                <h1>Your Details Account</h1>
                <p class="contact"><label for="name">Name</label></p>

                <input id="name" name="name" placeholder="First and last name" required="" tabindex="1" type="text">
                
                <p class="contact"><label for="email">Email</label></p>

                <input id="email" name="email" placeholder="example@domain.com" required="" type="email">


                <p class="contact"><label for="username">Create a username</label></p>

                <input id="username" name="username" placeholder="username" required="" tabindex="2" type="text">

 
                <p class="contact"><label for="password">Create a password</label></p>

                <input type="password" id="password" name="password" required="" type="text">

                <p class="contact"><label for="repassword">Confirm your password</label></p>

                <input type="password" id="password" name="password" required="" type="text">
                <br>

 
                <label>Select Gender:</label>
                
            <select class="select-style gender" name="gender">
 
            <option value="select">I Am..</option>
 
            <option value="m">Male</option>
 
            <option value="f">Female</option>
 
            <option value="others">Other</option>

            </select><br><br>
 
            <p class="contact"><label for="phone">Mobile phone</label></p>

            <input id="phone" name="phone" placeholder="phone number" required="" type="text"> <br>

            <input class="buttom" name="submit" id="submit" tabindex="5" value="Update!" type="submit">   
              
   </form>

</div>

          </div>
        </div>
    
    <div id="footer"></div>
</body>   
</html>    

<?php
   // $conn = mysql_connect("localhost", "root" "");

   // if(!$conn) {
       // echo "conn";
       // exit;
  //  }

   // if(!mysql_select_db("dbevent")) {
       // echo "err";
       // exit;
   // }

   // $sql = "SELECT * FROM tbllogin";

   // $result = mysql_query($sql);
    
    //if(!$result) {
        //echo "err" . mysql_error();
   // }

   // if (mysql_num_rows($result) > 0) {
        
        //while ($row = mysql_fetch_assoc($result)) {
           // echo $row['username'];
           // echo $row['password'];
      /// }
        
   // }

//?>

