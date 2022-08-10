<?php
session_start();
require 'dbconn.php';
if (isset($_POST['login'])) {

    //fetch info from database 
    $email = $_POST['email'];
    $password = $_POST['password'];

    // check error
    if (empty($email) || empty($password)) {
        $_SESSION['status'] = 'Fields Are Empty';
        header("location: ../login.php?error=emptyfields");
        exit();
    } else {
        $query = "SELECT * FROM users WHERE email = '$email' ";
        $query_run = mysqli_query($conn, $query);

        if (!$query_run) {
            $_SESSION['status'] = 'email does not exist';
            header("location: ../login.php?error=invalid email");
            exit();
        } else {
            if (mysqli_num_rows($query_run) > 0) {
                while ($row = mysqli_fetch_assoc($query_run)) {

                    $cpassword = $row['password'];

                    if ($password !== $cpassword) {
                        $_SESSION['status'] = 'Password Incorrect';
                        header("location: ../login.php?error=incorrectPassword");
                        exit();
                    } elseif ($password == $cpassword) {
                        // create a session to identify user;
                        $_SESSION['sessionId'] = $row['id'];
                        $_SESSION['sessionUser'] = $row['email'];
                        // login message session
                        $_SESSION['success'] = 'WELCOME' . $row['fullname'];
                        header("location: ../dashboard/userdashboard.php");
                        exit();
                    }
                }
            } else {
                $_SESSION['status'] = 'User does not exist';
                header("location: ../login.php?error=UserDoesNotExist");
                exit();
            }
        }
    }
}
