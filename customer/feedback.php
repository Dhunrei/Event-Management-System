<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="styledetail.css" type="text/css"/>
    </head>
<body>    
  <div id="container">  
      <div id="header" class="menuheader">

      <nav><ul>
          <li><a href="details.php">My Details</a>
          <li><a href="bookevent.php">Book Events</a></li>
          <li><a href="bookingstatus.php">Booking Status</a></li>
          <li><a href="bookinghistory.php">Booking History</a></li>
          <li class="active"><a href="feedback.php">Feedback</a></li>
          <li><a href="view.php">View Venus</a></li>
          <li><a href="logout.php">Logout</a></li>
		</ul></nav>
      </div>
    
      <div id="content">    
          <div  class="form">
    
            <form id="contactform">
          
                <h1>Hi! Give Feedback.</h1>
                <br>
                <p>Comment here:</p>
                <textarea name="comments" rows="10" cols="50" maxlength="200"></textarea>
                <br>
                <input type="submit" value="Submit">
              </form>
</div>

      
      </div>
     <div id="footer"></div>
    </div>
</body>   
</html>    