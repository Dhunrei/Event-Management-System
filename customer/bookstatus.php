<?php
session_start();
include 'dbcon.php';
if(isset($_SESSION['id_customer'])){
    $rp = $_SESSION['id_customer'];
    $sql = "SELECT * FROM tblbookings z,tblcustomer x WHERE z.id_customer='$rp' AND x.id_customer='$rp'";
    $result = mysqli_query($conn, $sql);
    if(!$result){ 
            echo "fail" . die (mysqli_error($conn));
        } else{
        function zxc(){
           
      while($row=mysqli_fetch_array($result,MYSQLI_NUM)){
            $id =   $row[0];
            $type =   $row[1];
            $place =   $row[2];
            $guest =   $row[3];
            $date =   $row[4];
            $status =   $row[5];
              
            echo "<tr>
            
             <td>$id</td>
             <td>$type</td>
             <td>$place</td>
             <td>$guest</td>
             <td>$date</td>
             <td>$status</td>
            </tr>";  
          }
              
              
          }
 
      }
    
    
    
    
}

?>