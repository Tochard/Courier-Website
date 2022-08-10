<?php
session_start();
include_once "adminlogin.php";

if (isset($_POST['adminlogout'])) {
    session_destroy();
    unset($_SESSION['sessionId']);
    header("location: ../adminlogin.php");
}
