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
    
            <form id="contactform">
          
                <h1>Book Events</h1>
                <p class="contact"><label for="name">Event Type</label></p>
               
                <select>
                    <option>-Select-</option>
                    <option>Marriage</option>
                    <option>Birthday Party</option>
                    <option>College Events</option>
                    <option>Family Party</option>
                    
                </select>
                <br>
                <br>
                <p class="contact"><label for="email">Event Place</label></p>
                
                <input id="eventplace" name="eventplace" required="" type="text">


                <p class="contact"><label for="guest">No Of Guest</label></p>

                <input id="noguest" name="noguest" required="" tabindex="2" type="text">

 
                <p class="contact"><label for="Date">Date</label></p>

                <input id="date" name="date" required="" type="text">
 

            <input class="buttom" name="submit" id="submit" tabindex="5" value="Submit!" type="submit">   
              
   </form>

</div>

          </div>
    
     <div id="footer"></div>
    </div>
</body>   
</html>    