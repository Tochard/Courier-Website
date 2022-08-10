<?php
require_once "adminlogin.php";
if (!$_SESSION['sessionId']) {
    header("location: ../adminlogin.php");
}
