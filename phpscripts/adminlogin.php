<?php
session_start();
require 'dbconn.php';
if (isset($_POST['login'])) {

    //fetch info from database 
    $username = $_POST['username'];
    $password = $_POST['password'];

    // check error
    if (empty($username) || empty($password)) {
        $_SESSION['status'] = 'Fields Are Empty';
        header("location: ../adminlogin.php?error=emptyfields");
        exit();
    } else {
        $query = "SELECT * FROM Admin WHERE username = '$username' ";
        $query_run = mysqli_query($conn, $query);

        if (!$query_run) {
            $_SESSION['status'] = 'Username does not exist';
            header("location: ../adminlogin.php?error=invalid username");
            exit();
        } else {
            if (mysqli_num_rows($query_run) > 0) {
                while ($row = mysqli_fetch_assoc($query_run)) {

                    $cpassword = $row['password'];

                    if ($password !== $cpassword) {
                        $_SESSION['status'] = 'Password Incorrect';
                        header("location: ../adminlogin.php?error=incorrectPassword");
                        exit();
                    } elseif ($password == $cpassword) {
                        // create a session to identify user;
                        $_SESSION['sessionId'] = $row['id'];
                        $_SESSION['sessionUser'] = $row['username'];
                        // login message session
                        $_SESSION['adminsuccess'] = 'success';
                        header("location: ../dashboard/admin.php");
                        exit();
                    }
                }
            } else {
                $_SESSION['status'] = 'Admin does not exist';
                header("location: ../adminlogin.php?error=AdminDoesNotExist");
                exit();
            }
        }
    }
}
