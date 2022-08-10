<?php
session_start();
require_once 'dbconn.php';

if(isset($_POST['updateshipment'])){
      //fetch out information from input field
    $fullname = $_POST['sName'];
    $email = $_POST['sEmail'];
    $phone = $_POST['sPhone'];
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
    $t_id = $_POST['t-id'];

        $query = "UPDATE shipments SET sname = '$fullname', semail = '$email', sphone = '$phone', recName = '$recName', recEmail = '$recEmail', recPhone = '$recPhone', recCountry = '$recCountry', recAddress = '$recAddress', parcel = '$parcel', departureDate = '$departureDate', deliveryDate = '$deliveryDate', shippingLocation = '$shippingLocation', CurrentLocation = '$CurrentLocation', parcelWeight = '$parcelWeight', freightType = '$freightType', parcelStatus = '$parcelStatus', amount = '$amount' WHERE trackingId = '$t_id'";
        $query_run = mysqli_query($conn, $query);
            

            if($query_run){  
                $_SESSION['success'] = 'Registration Successful';
                header("location:  ../dashboard/shipments.php?Successful");
                exit(); 
            }
            
}
