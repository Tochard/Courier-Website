<?php

include "dbconn.php";
include "login.php";

if (isset($_SESSION['sessionId'])) {


    $userid = $_SESSION['sessionId'];


    $query = "SELECT * FROM users WHERE id = $userid";
    $query_run = mysqli_query($conn, $query);
    $result = mysqli_fetch_assoc($query_run);

    $email = $result['email'];
}
