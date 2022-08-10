<?php
session_start();
require_once 'dbconn.php';

if(isset($_POST['shipment'])){
      //fetch out information from input field
    $sender = $_POST['sender'];

    $recName = $_POST['recName'];
    $recEmail = $_POST['recEmail'];
    $recPhone = $_POST['recPhone'];
    $recCountry = $_POST['recCountry'];
    $recAddress = $_POST['recAddress'];


    $parcel = $_POST['parcel'];
    $departureDate = $_POST['departureDate'];
    $deliveryDate = $_POST['deliveryDate'];
    $shippingLocation = $_POST['shippingLocation'];
    $CurrentLocation = $_POST['CurrentLocation'];
    $parcelWeight = $_POST['parcelWeight'];
    $freightType = $_POST['freightType'];
    $parcelStatus = $_POST['parcelStatus'];
    $amount = $_POST['amount'];

    $trackingId = uniqid();


    
    $query = "SELECT * FROM users WHERE fullname = '$sender'";
    $query_run = mysqli_query($conn, $query);

    if (mysqli_num_rows($query_run) > 0) {
        while ($row = mysqli_fetch_assoc($query_run)) {
            $fullname = $row['fullname'];
            $email = $row['email'];
            $phone = $row['phone'];
            $country = $row['country'];
            $address  = $row['address'];


    }
    

    //Email validation Function
    function invalidEmail($recEmail) {
        $result = '';
        if (!filter_var($recEmail, FILTER_VALIDATE_EMAIL)) {
                $result =true;
        }
        else{
            $result = false;
        }
        return $result;
    }


    //Form validation

    if (empty($recName) || empty($recEmail) || empty($recPhone) || empty($recCountry) || empty($recAddress) 
        || empty($parcel) || empty($departureDate) || empty($deliveryDate) || empty($shippingLocation) || empty($CurrentLocation) || empty($parcelWeight) || empty($freightType) || empty($parcelStatus) || empty($amount))  
    {
        $_SESSION['status'] = 'Fields Are Empty';
        header("location:  ../dashboard/admin.php?error=emptyfields  username=$username");
        exit();
    }

    elseif (invalidEmail($recEmail) !== false) {
        $_SESSION['status'] = 'invalid Email Format';
        header("location:  ../dashboard/admin.php?error=invalidEmail");
        exit();
    }


   else{

            $query = "INSERT INTO shipments(sname, semail, sphone, scountry, saddress, recName, recEmail, recPhone, recCountry, recAddress, parcel, departureDate, deliveryDate, shippingLocation, CurrentLocation, parcelWeight, freightType, parcelStatus, amount, trackingId) 
                        VALUES ('$fullname', '$email', '$phone', '$country', ' $address', '$recName', '$recEmail', '$recPhone', '$recCountry', '$recAddress', '$parcel', '$departureDate', '$deliveryDate', '$shippingLocation', '$CurrentLocation', '$parcelWeight', '$freightType', '$parcelStatus', '$amount', '$trackingId')";
            $query_run = mysqli_query($conn, $query);
            

            // sending email to sender
              //   $mailTo = $email;
              //   $header = "From:support@deliverycompany.com";
              //   $subject = "TRACKING CODE NOTIFICATION";    
              
              // $text="Hi ".$fullname ."\n\n"."Your shipment has been successfully registered and  your tracking  code is ".$trackingId."\n\n"."Please keep it safe because, loss of it will make you lose sight of location of your parcel at any given moment. "."Thank you for choosing deliverycompany."."\n\n"."\n\n"."From deliverycompany.";
              
              // mail($mailTo,$subject,$text,$header);

              // sending email to Receiver
              //   $mailTo = $recEmail;
              //   $header = "From: support@deliverycompany.com";
              //   $subject = "TRACKING CODE NOTIFICATION";    
              
              // $text="Hi ".$recName ."\n\n"."A shipment has been successfully registered and sent to you through our company, your tracking  code is ".$trackingId."\n\n"."Please keep it safe because, loss of it will make you lose sight of location of your parcel at any given moment. "."Thank you for choosing deliverycompany."."\n\n"."\n\n"."From deliverycompany.";
              
              // mail($mailTo,$subject,$text,$header);
              
            
            if($query_run){  
                $_SESSION['success'] = 'Registration Successful';
            header("location:  ../dashboard/admin.php?Successful");
            exit(); 
            }

            
        }




}


}
