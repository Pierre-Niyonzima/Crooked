<?php

//include 'functions.php';

if (!empty($_POST)){

  $data['success'] = true;
  //$_POST  = multiDimensionalArrayMap('cleanEvilTags', $_POST);
  //$_POST  = multiDimensionalArrayMap('cleanData', $_POST);

  //your email adress 
  $emailTo ="koulouf@hotmail.fr"; //"yourmail@yoursite.com";

  //from email adress
  $emailFrom ="noreply@movement-practice-crooked.com"; //"noreply@movement-practice-crooked.com";

  //email subject
  $emailSubject = "Mail from movement-practice-crooked";

  $name = $_POST["name"];
  $email = $_POST["email"];
  $comment = $_POST["comment"];
  if($name == "")
   $data['success'] = false;
 
 if (!preg_match("/^[_\.0-9a-zA-Z-]+@([0-9a-zA-Z][0-9a-zA-Z-]+\.)+[a-zA-Z]{2,6}$/i", $email)) 
   $data['success'] = false;


 if($comment == "")
   $data['success'] = false;

 if($data['success'] == true){

  $message = "NAME: ".$name."<br>
  EMAIL: ".$email."<br>
  COMMENT: ".$comment."";


  $headers = "MIME-Version: 1.0" . "\r\n"; 
  $headers .= "Content-type:text/html; charset=utf-8" . "\r\n"; 
  $headers .= "From: <$emailFrom>" . "\r\n";
  $result = mail($emailTo, $emailSubject, $message, $headers);

  $data['success'] = true;
  // Le contenu sera renvoyé au format JSON
header('Content-Type: application/json');
echo json_encode([
    'result' => $result
]);
}
}
?>