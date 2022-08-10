<?php

if (isset($_POST['submit'])) {

    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $subject = trim($_POST['subject']);
    $message = trim($_POST['message']);




    $emailto = "info@deliverycompany.com";
    $header = "from " . $email;
    $messageto = "You have received a mail from " . $name . "\n" . "phone:" . $email . "\n" . $subject . "\n\n" . $message;

    mail($emailto, $subject, $messageto, $header);
    header("location: ../index.php?Successful");
}
