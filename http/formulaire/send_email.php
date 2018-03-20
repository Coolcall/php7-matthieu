<?php
    $email = $_POST['contact_email'];
    $message = $_POST['contact_message'];

    // mail('contact@gabrielpillet.com', 'Message de contact de '.$email, $message);

    header('Location: /php7-matthieu/http/formulaire/success.php?email='.$email);
?>
