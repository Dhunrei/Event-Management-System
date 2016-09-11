<?php
//if(isset($_POST['submit'])){
//$message=
        //'Your name:'.$_POST['name'].'<br />
        // Your Email'.$_POST['email'].'<br / >    
       // Your Message'.$_POST['message'].'<br/ >';
    
require_once 'libs/phpmailer/class.phpmailer.php';      
    //initiate class  
  // $mail= new PHPMailer();
    
//set up smtp 
   // $mail->IsSMTP();                      //sets up a smtp connection
   // $mail->SMTPAuth = true;               //connection with the smtp does require authorization
   // $mail->SMTPSecure ="ssl";             //connecting using a tls connection
   // $mail->Host="smtp.gmail.com";         //gmail smtp server address
   // $mail->Port =465;                       //gmail smtp port
   // $mail->Encoding ='7bit'
        
    //$mail->Username   = "youremail@gmail.com"; // Your full Gmail address
    //$mail->Password   = "yourpassword"; // Your Gmail password
      
    // Compose
  //  $mail->SetFrom($_POST['emailid'], $_POST['fullname']);
   // $mail->AddReplyTo($_POST['emailid'], $_POST['fullname']);
   // $mail->Subject = "New Contact Form Enquiry";      // Subject (which isn't required)  
  //  $mail->MsgHTML($message);
 //
    // Send To  
   // $mail->AddAddress("recipientemail@gmail.com", "Recipient Name"); // Where to send it - Recipient
    //$result = $mail->Send();		// Send!  
	//$message = $result ? 'Successfully Sent!' : 'Sending Failed!';      
	//unset($mail);
//;
//}
?>

<!DOCTYPE html>
<html>
    <head>

    </head>
<body>    

      <div id="content">  
         

           <div class="panel">
               Errors will go here.
        <form action="contact1.php" method="post">
            
    <p><label>Yourname     
     <input type="text" name="name"></label>   
    
    <p><label>Your email 
    <input type="text" name="email"></label>  
        
     <p><label>Your Message 
         <textarea name="message" rows="8"></textarea></label>
         
         
    <input type="submit" value="Send">
            <p class="muted">Means a required field</p>         
         
</form>
               <p><?php if(!empty($message)) echo $message; ?></p> 
         </div>
    

     <div id="footer"></div>
    </div>
</body>   
</html>  