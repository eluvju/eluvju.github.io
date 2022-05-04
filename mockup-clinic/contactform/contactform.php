<?php

if(isset($_POST['email']) && !empty($_POST['email']));

$name = addcslashes($_POST['name']);
$email = addcslashes($_POST['email']);
$subject = addcslashes($_POST['subject']);
$message = addcslashes($_POST['message']);

$to =       "eluvju@gmail.com";
$sub =      "Contact - Clinic";
$body =     "Nome: ".$name. "\r\n"
            "Email: ".$email. "\r\n"
            "Message: " .$message;
$header =   "From: "."\r\n"
            ."reply-to".$email."\r\n"
            ."X=Mailer:PHP/".phpversion();

if (mail($to,$sub,$body,$header)){

    echo("Email Enviado com Sucesso");

}else{
    echo("Failed");
}       


?php>