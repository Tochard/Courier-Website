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
    $password = $_POST['password'];
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

    if (empty($fullname) || empty($email) || empty($phone) || empty($country) || empty($address) || empty($password))  
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
            $query = "INSERT INTO users(fullname, email, phone, country, address, password, regdate) 
                        VALUES ('$fullname', '$email', '$phone', '$country', '$address', '$password', '$regdate')";
            $query_run = mysqli_query($conn, $query);
            

            // sending successful registration email


            $to = "tochardcp@gmail.com";

            $subject = "REGISTRATION SUCCESSFULL";

            $headers = array(
                "MIME-Version" => "1.0",
                "Content-Type" => "text/html;charset=UTF-8",
                "From" => "support@website.com",
                "Reply-To" => "support@website.com"
            );

            $message = '
            <!DOCTYPE html>
            <html>

            <body style="padding: 10% 0; font-family: sans-serif;">
                <div class="container" style="width:95%; background: #f2f2f2; margin: auto;">
                    
                    <div class="header" style="padding: 20px 5%; background: #f2f2f2;">
                        <a href="#"><img src="sitelogo.PNG" style="height: 60px; width: auto;"></a>
                        
                    </div>
                    <div class="show" style="padding: 5px 5%; background: #17509F;">
                        <p style="font-size: 14px; text-align: center; color: #fff;">Thank You for registering with Us</p>
                    </div>

                    <div style="padding: 20px 5%;">
                        <p style="font-size: 10px; padding: 0; margin: 0;">Dear ,</p>
                        <br>
                        <p style="font-size: 10px; padding: 0; margin: 0;">Thank you for registering with website./p>
                        <br>
                        
                        <br>
                        <p style="font-size: 10px; padding: 0; margin: 0;">If you have any question about Website, send an email to the company support email address: support@website.com or get in touch through our live support in our website.</p><br>
                        <p style="font-size: 10px; padding: 0; margin: 0;">With best regards, </p>
                        <br>
                        <p style="font-size: 10px; padding: 0; margin: 0;">My website Team.</p>
                        <br>
                    </div>
                    <div style="padding: 10px 5%; background: #adadad; text-align: center;">
                        <a href="#" style="color: #000; text-decoration: none;"><small style="font-size: 10px;">www.website.com <br>© 2022</small></a>
                    </div>

                </div>
            </body>
            </html>';

            mail($to, $subject, $message, $headers);

                          
            
            if($query_run){
                $_SESSION['success'] = 'Registration Successful';
            header("location:  ../signup.php?Successful");
            exit(); 
            }

            
        }




}
