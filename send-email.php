<?php

$name = $_POST['name'];
$email = $_POST['email'];

$to = "enis-okic@hotmail.com";

$subject = "Mail from subject";

$txt ="Name = ". $name . "\r\n Email = " . $email ;

$headers = "From: noreply@yoursite.com";

if($email!=NULL){
    mail($to,$subject,$txt,$headers);
}
// redirect
header("Location:google.com");
?>
