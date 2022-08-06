<?php
session_start();
require_once 'dbconn.php';

if(isset($_POST['signup'])){
    
    //fetch out information from input field
    $fullname = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $country = $_POST['country'];
    $address = $_POST['address'];
    //registration Date
    $regdate = date('d/m/Y');

    

    //Email validation Function
    function invalidEmail($email) {
        $result = '';
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $result =true;
        }
        else{
            $result = false;
        }
        return $result;
    }


    //Form validation

    if (empty($fullname) || empty($email) || empty($phone) || empty($country) || empty($address))  
    {
        $_SESSION['status'] = 'Fields Are Empty';
        header("location: ../signup.php?error=emptyfields  username=$username");
        exit();
    }

    elseif (invalidEmail($email) !== false) {
        $_SESSION['status'] = 'invalid Email Format';
        header("location: ../signup.php? error=invalidEmail");
        exit();
    }


   else{


            $query = "INSERT INTO users(fullname, email, phone, country, address, regdate) 
                        VALUES ('$fullname', '$email', '$phone', '$country', ' $address', '$regdate')";
            $query_run = mysqli_query($conn, $query);
            

            // sending successful registration email
              //   $mailTo = $email;
              //   $header = "From: support@deliverycompany.com";
              //   $subject = "Registratio Successful";    
              
              // $text="Hello, you have successfully completed creating account with Delivery Company";
              
              // mail($mailTo,$subject,$text,$header);
              
            
            if($query_run){
                $_SESSION['success'] = 'Registration Successful';
            header("location:  ../signup.php?Successful");
            exit(); 
            }

            
        }




}





?>