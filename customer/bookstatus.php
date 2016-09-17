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
        
           while($row = $result -> fetch_assoc()){
            $_SESSION['id_book'] = $row['id_book'];
             $_SESSION['type'] = $row['type'];
             $_SESSION['place'] = $row['place'];
             $_SESSION['no_of_guest'] = $row['no_of_guest'];
             $_SESSION['date'] = $row['date'];
             $_SESSION['status'] = $row['status'];
            
            echo "
            <tr>
<td>$_SESSION['id_book']</td>
<td>$_SESSION['type']</td>
<td>$_SESSION['place']</td>
<td>$_SESSION['no_of_guest']</td>
<td>$_SESSION['date']</td>
<td>$_SESSION['status']</td>
            </tr>
            ";
//      while($row=mysqli_fetch_array($result,MYSQLI_NUM)){
//            $id =   $row[0];
//            $type =   $row[1];
//            $place =   $row[2];
//            $guest =   $row[3];
//            $date =   $row[4];
//            $status =   $row[5];
//              
//            echo "<tr>
//            
//             <td>$id</td>
//             <td>$type</td>
//             <td>$place</td>
//             <td>$guest</td>
//             <td>$date</td>
//             <td>$status</td>
//            </tr>";  
//          }
              
              
          }
 
      }
    
    
    
    
}

?>