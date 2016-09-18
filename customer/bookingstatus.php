
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
          <li ><a href="bookevent.php">Book Events</a></li>
          <li class="active"><a href="bookingstatus.php">Booking Status</a></li>
          <li><a href="bookinghistory.php">Booking History</a></li>
          <li><a href="feedback.php">Feedback</a></li>
          <li><a href="view.php">View Venus</a></li>
          <li><a href="logout.php">Logout</a></li>
		</ul></nav>
      </div>
    
      <div id="content">    
  <table border="2" width="600">
        <tr>
             <th>ID</th>
            <th>Event Type</th>
             <th>Event Place</th>
             <th>No. of Guest</th>
             <th>Event Date</th>
             <th>Status</th>
        </tr> 
      <?php

        include 'bookstatus.php';
       ?>


    </table>
          
          
          
    
</div>

    
     <div id="footer"></div>
    </div>
</body>   
</html>    