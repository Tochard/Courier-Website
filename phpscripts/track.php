<?php

if (isset($_POST['track'])) {

    $t_id = trim($_POST['tracking_id']);
}



?>


<?php
session_start();
?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" type="text/css" href="../dashboard/css/adminstyle.css">
</head>

<body>

    <div class="wrapper">

        <div class="side_bar">
            <div class="logo">
                <img src="logo.png">
            </div>
            <div class="navigation">
                <ul>
                    <a href="admin.php">
                        <li>Dashbord</li>
                    </a>
                    <a href="registershipment.php">
                        <li>Register Shipment</li>
                    </a>
                    <a href="shipments.php">
                        <li>Pending Shipments</li>
                    </a>
                    <a href="shipmenthistory.php">
                        <li>Shipment History</li>
                    </a>
                    <a href="email.php">
                        <li>Email User</li>
                    </a>
                    <a href="trackshipment.php">
                        <li class="active">Track</li>
                    </a>
                    <a href="#">
                        <li class="logout">LogOut</li>
                    </a>
                </ul>
            </div>
        </div>

        <div class="contents">
            <div class="header">
                <h1>Admin Dashboard</h1>
            </div>
            <div class="body-content">

                <div class="b-content">
                    <div class="b-heading">
                        <h2>Track Shipment</h2>

                    </div>

                    <div class="shipment">

                        <div>
                            <form method="post" action="../phpscripts/track.php" class="form">

                                <div>
                                    <div class="inp">
                                        <label>Enter Tracking ID:</label>
                                        <input type="text" name="tracking_id" placeholder="Tracking ID" required="">
                                    </div>


                                    <div class="inp">
                                        <button type="submit" name="track">Track</button>
                                    </div>

                            </form>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>


</body>

</html>