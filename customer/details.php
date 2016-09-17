<?php session_start() ?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="styledetail.css" type="text/css"/>
    </head>
    
    
<body>    
    
<?php
    function zxc(){
    if(isset($_SESSION['id_customer'])){
        echo 'Welcome! ',$_SESSION['username'];
        
        
        
    }

}
    
    ?>
    
    
  <div id="container">  
      <div id="header" class="menuheader">
          

      <nav><ul>
         
          <li class="active"><a href="#">My Details</a>
          <li><a href="bookevent.php">Book Events</a></li>
          <li ><a href="#">Booking Status</a></li>
          <li><a href="#">Booking History</a></li>
          <li><a href="#">Feedback</a></li>
          <li><a href="#">View Venus</a></li>
          <li><a href="logout.php">Logout</a></li>
         
		</ul></nav>
      </div>
   <div id="content">  
        <div  class="form">
        
   <?php zxc(); echo '<br />'; ?>
            <?php
        if(isset($_SESSION['id_customer'])){
             
            echo 'Hi! ',$_SESSION['name'];
            echo '<br />email: ',$_SESSION['email'];
            echo '<br />gender: ',$_SESSION['gender'];
            echo '<br />Mobile No.: ',$_SESSION['mobileno'];
         
        }  else{
            echo "You are not Logged in!";
        }
        ?>

</div>

          </div>
        </div>
    
    <div id="footer"></div>
</body>   
</html>    

