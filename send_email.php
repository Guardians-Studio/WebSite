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
    header('Location: https://guardiansstudio.000webhostapp.com/contact.php');
    exit();
}

?>