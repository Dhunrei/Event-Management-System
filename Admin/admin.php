<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="styleadmin.css" type="text/css"/>
    </head>
<body>    
  <div id="container">  
      <div id="header" class="menuheader">

      <nav><ul>
          <li class="active"><a href="#">Add Venue</a>
          <li><a href="newbookings.php">New Bookings</a></li>
          <li ><a href="#">View Bookings</a></li>
          <li><a href="#">View Venues</a></li>
          <li><a href="#">Feedback</a></li>
            <li><a href="#">Logout</a></li>
		</ul></nav>
      </div>
        
      <div id="content">    
         <div  class="form">
    
            <form id="contactform">
          
                <h1>Add Venue</h1>
                <p class="contact"><label for="name">Venue Name</label></p>

                <input id="name" name="name" required="" tabindex="1" type="text">
                
                <p class="contact"><label for="address">Venue Address</label></p>

                <input id="address" name="address"  required="" type="text">


                <p class="contact"><label for="number">Venue Phone no:</label></p>

                <input id="number" name="number" required="" tabindex="2" type="text">

 
                <p class="contact"><label for="capacity">Venue Capacity</label></p>

                <input id="capacity" name="capacity" required="" type="text">
                
                 <p class="contact"><label for="name">Prefered For</label></p>
               <br>
                <select>
                    <option>-Select-</option>
                    <option>Marriage</option>
                    <option>Birthday Party</option>
                    <option>College Events</option>
                    <option>Family Party</option>     
                </select><br><br><br>

            <input class="buttom" name="submit" id="submit" tabindex="5" value="Submit!" type="submit">   
              
   </form>

</div>

     
    </div>  
     <div id="footer"></div>
    </div>
</body>   
</html>    