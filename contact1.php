<?php

session_start();//transfering information

require_once 'libs/phpmailer/PHPMailerAutoload.php';

$errors = []; //store the errors
$fields=[];
if(isset($_POST['name'],$_POST['email'],$_POST['message'])){ //check if name email message posted true set
  $field=[ //checking if the fieldset is empty
      'name' => $_POST['name'],
      'email' => $_POST['email'],
      'message' => $_POST['message']
        ];
      foreach($fields as $fields => $data){
          if(empty($data)){
              $errors[]='The '.$fields. ' field is required.';
      } 
}
  // echo '<pre>', print_r($errors),'<pre>';  
    //die();

}else{
    $errors[]='something went wrong.'; 

}

$_SESSION['errors']=$errors; //superglobal
$_SESSION['fields']=$fields; //superglobal
header('Location:contact.php');