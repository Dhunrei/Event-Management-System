<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="styledetail.css" type="text/css"/>
    </head>
<body>    
  <div id="container">  
      <div id="header" class="menuheader">

      <nav><ul>
          <li ><a href="details.php">My Details</a>
          <li class="active"><a href="bookevent.php">Book Events</a></li>
          <li ><a href="bookingstatus.php">Booking Status</a></li>
          <li><a href="bookinghistory.php">Booking History</a></li>
          <li><a href="feedback.php">Feedback</a></li>
          <li><a href="view.php">View Venus</a></li>
          <li><a href="logout.php">Logout</a></li>
		</ul></nav>
      </div>
    
      <div id="content">    
        <div  class="form">
    
            <form id="contactform" action="bookings.php" method="post">
          
                <h1>Book Events</h1>
                <p class="contact"><label for="type">Event Type</label></p>
               
                <select name="type">
                    <option>-Select-</option>
                    <option>Marriage</option>
                    <option>Birthday Party</option>
                    <option>College Events</option>
                    <option>Family Party</option>
                    
                </select>
                <br>
                <br>
                <p class="contact"><label for="ep">Event Place</label></p>
                
                <input id="eventplace" name="ep" required="" type="text">


                <p class="contact"><label for="guest">No Of Guest</label></p>

                <input id="noguest" name="guest" required="" tabindex="2" type="text">

 
                <p class="contact"><label for="date">Date</label></p>

                <input type="date" name="date"/>
                
                <br>
          
                
                 <br>
                <input type="submit" name="okay" id="okay" tabindex="5" value="Submit" class="buttom" >
                
                
                
                
                
        
         
              
   </form>

</div>

          </div>
    
     <div id="footer"></div>
    </div>
</body>   
</html>    