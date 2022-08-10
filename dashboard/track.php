<?php
require_once "../phpscripts/adminsecurity.php";
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
                    <li class="logout">
                        <form action="../phpscripts/adminlogout.php" method="post">
                            <button type="submit" name="adminlogout">Logout</button>
                        </form>
                    </li>
                </ul>
            </div>
        </div>

        <div class="contents">
            <div class="header">

                <div><button class="menu"><i class="fa fa-bars"></i></button></div>
                <div>
                    <h1>Admin Dashboard</h1>
                </div>

            </div>

            <div class="dropdown-list">
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
                        <li>Track</li>
                    </a>
                    <li class="logout">
                        <form action="../phpscripts/adminlogout.php" method="post">
                            <button type="submit" name="adminlogout">Logout</button>
                        </form>
                    </li>
                </ul>

            </div>

            <script src="https://kit.fontawesome.com/a81368914c.js"></script>
            <script type="text/javascript">
                const mobile = document.querySelector(".menu"),
                    mobile_navs = document.querySelector(".dropdown-list")


                mobile.addEventListener('click', () => {
                    if (mobile_navs.style.display === 'none') {
                        mobile_navs.style.display = 'block';
                    } else {
                        mobile_navs.style.display = 'none';
                    }
                })
            </script>





            <?php

            if (isset($_POST['track'])) {
                $t_id = trim($_POST['tracking_id']);

                include_once "../phpscripts/dbconn.php";
                $query = "SELECT * FROM shipments WHERE trackingId = '$t_id' ";
                $query_run = mysqli_query($conn, $query);
                if (mysqli_num_rows($query_run) > 0) {
                    while ($row = mysqli_fetch_assoc($query_run)) {
            ?>


                        <div class="body-content">

                            <div class="b-content" id="InvoicePage">
                                <div class="b-heading">
                                    <h2>Shipment Invoice</h2>
                                </div>
                                <div class="t-grid">
                                    <div class="b-heading">
                                        <p><span>Tracking ID:</span> <?php echo $row['trackingId'] ?></p>
                                        <p><span>Shipment Date:</span> <?php echo $row['departureDate'] ?></p>
                                        <p><span>Estimated Delivery Date:</span> <?php echo $row['deliveryDate'] ?></p>
                                    </div>
                                    <div class="logo2">
                                        <img src="logo.png">
                                    </div>
                                </div>

                                <hr>
                                <div class="t-grid">
                                    <div class="t-sender">
                                        <h3>Sender Information</h3>
                                        <p>Name: <?php echo $row['sname'] ?></p>
                                        <p>Email: <?php echo $row['semail'] ?></p>
                                        <p>Phone: <?php echo $row['sphone'] ?></p>
                                        <p>Address: <?php echo $row['saddress'] ?></p>
                                    </div>
                                    <div class="t-rec">
                                        <h3>Shipped To</h3>
                                        <p>Name: <?php echo $row['recName'] ?></p>
                                        <p>Email: <?php echo $row['recEmail'] ?></p>
                                        <p>Phone: <?php echo $row['recPhone'] ?></p>
                                        <p>Address: <?php echo $row['recAddress'] ?></p>
                                    </div>
                                </div>

                                <hr>


                                <div>
                                    <h3>Item(s) Description</h3>
                                    <p>Parcel(s): <?php echo $row['parcel'] ?></p>
                                    <p>Weight: <?php echo $row['parcelWeight'] ?></p>
                                </div>

                                <hr>

                                <div>
                                    <h3>Shipment Information</h3>
                                    <p>Freight Type: <?php echo $row['freightType'] ?></p>
                                    <p>Amount Paid: <?php echo $row['amount'] ?></p>
                                    <p>Current Location: <?php echo $row['CurrentLocation'] ?></p>
                                </div>

                                <hr>


                                <div class="b-heading">
                                    <h3><span>Shipment Status:</span> <?php echo $row['parcelStatus'] ?></h3>
                                </div>

                                <hr>
                                <div>
                                    <button class="printBtn" onclick="window.print()">Print Page</button>
                                </div>


                            </div>
                        </div>

                    <?php
                    }
                } else { ?>


                    <div class="body-content">

                        <div class="b-content" id="InvoicePage">
                            <div class="b-heading">
                                <h2>Shipment Invoice</h2>
                            </div>
                            <div class="b-heading">
                                <h3>Tracking ID Invalid</h3>
                            </div>
                        </div>
                    </div>

            <?php
                }
            }

            ?>



        </div>
    </div>




</body>

</html>