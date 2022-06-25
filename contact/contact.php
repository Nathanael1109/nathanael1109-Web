<?php
if(!isset($_POST['submit'])){
    echo "Erreure, vous devez nous contacter via nathanael1109.com/contact";
}
$name = $_POST['name'];
$sender_email = $_POST['email'];
$message = $_POST['message'];

if(empty($name)||empty($sender_email)||empty($message)){
    echo "Veuillez remplir tous les champs";
    exit;
}

$email_from = 'nathanael.lamproye@hotmail.fr';
$email_subject = "Nouveau message de $name sur le site nathanael1109.com";
$email_body = "Vous avez reçu un nouveau message de $name.\n".
    "Voici le message:\n $message";
$to = "nathananael.lamrpoye@hotmail.fr";
$headers = "From: $email_from \r\n";

mail($to,$email_subject,$email_body,$headers);
echo "Merci pour votre message, nous vous contacterons dans les plus brefs délais.";
?>
