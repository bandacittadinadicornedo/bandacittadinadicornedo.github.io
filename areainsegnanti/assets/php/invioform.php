<?php
$miamail = "lucabee@libero.it";
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$messaggio = "Nome: " . $name . "\nEmail: " . $email . "\nMessaggio: " . $message;
$headers = "From: " . $miamail . "\r\n" . "Reply-To: " . $miamail;
mail($miamail,"Messaggio dal sito",$messaggio,$headers);
header("location: " . $successo);
?>