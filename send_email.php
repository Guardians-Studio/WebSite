<?php
if (isset($_POST['submit']))
{
    $to = "raphael.heng@protonmail.com";
    $from = $_POST['email'];
    $subject = "Mail de formulaire";
    $name = $_POST['name'];
    $message = $name . ' ' . $from . ' a écrit ' . "\n\n" . $_POST['message'];  
    $headers = 'From: ' . $name . ' ' . $from . ' ' . "\n\n";    
    mail($to,$subject,$message,$headers);

    $headers_back = 'From: Guardians Studio \n\n';
    $message_to_user = 'Merci ' . $name . ' pour votre message.';
    $subject_user = "Confirmation d'envoi de mail";
    mail($from,$subject_user,$message_to_user,$headers_back);

    header('Location: https://guardiansstudio.000webhostapp.com/contact.php');
    exit();
}

?>