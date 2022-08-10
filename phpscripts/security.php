<?php
include_once "../phpscripts/userdata.php";
if (!$_SESSION['sessionId']) {
    header("location: ../login.php");
}
