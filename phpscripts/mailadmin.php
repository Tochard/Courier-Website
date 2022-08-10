<?php

if (isset($_POST['send'])){

    $name = trim($_POST['name']);
    $email = trim($_POST['email']);
    $subject = trim($_POST['subject']);
    $message = trim($_POST['message']);
    

   

    $emailto = 'ssupport@website.com';
    $header = "from Delivery Company";
    $messageto = "You have received a mail from deliverycompany.". "\n". $subject. "\n\n" . $message;

    mail($emailto, $subject, $messageto, $header);
    header("location: ../dashboard/emailadmin.php?Successful");



}
