<?php
session_start();
include_once "login.php";

if (isset($_POST['logout'])) {
    session_destroy();
    unset($_SESSION['sessionId']);
    header("location: ../login.php");
}
