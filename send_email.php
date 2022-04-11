<?php
if (isset($_POST['submit']))
{
    $to = "raphael.heng@protonmail.com";
    $from = $_POST['email'];
    $subject = "Mail de formulaire";
    $name = $_POST['name'];
    $message = $name . ' ' . $from . ' a écrit '  . "\n\n" . $_POST['message'];  
    $headers = 'From: ' . $name . ' ' . $from . ' ' . "\n\n";
    
    mail($to, $subject, $message, $headers);

    $name_to_user = "Guardians Studio";
    $email_to_user = "no-reply@guardians-studio.com";
    $headers_back = 'From: ' . $name_to_user . ' ' . $email_to_user . ' ' . "\n\n";
    
    $message_to_user = 'Merci ' . $name . ' pour votre message. Voici une copie' . "\n\n" . $message;
    $subject_to_user = "Confirmation d'envoi de mail";
    mail($from, $subject_to_user, $message_to_user, $headers_back);

    header('Location: https://guardiansstudio.000webhostapp.com/contact.php');
    exit();
}

?>