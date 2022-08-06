<?php
session_start();
?>


<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Admin Dashboard</title>
	<link rel="stylesheet" type="text/css" href="./css/adminstyle.css">
</head>
<body>

	<div class="wrapper">
		
		<div class="side_bar">
			<div class="logo">
				<img src="logo.png">
			</div>
			<div class="navigation">
				<ul>
					<li><a href="admin.php">Dashbord</a></li>
					<li class="active"><a href="shipments.php">Shipments</a></li>
					<li><a href="registershipment.php">Register Shipment</a></li>
					<li><a href="updateshipment.php">Update Shipment</a></li>
					<li><a href="shipmenthistory.php">Shipment History</a></li>
					<li><a href="#">Email User</a></li>
					<li><a href="#">Track</a></li>
					<li class="logout"><a href="#">LogOut</a></li>
				</ul>
			</div>
		</div>

		<div class="contents">
			<div class="header">
				<h1>Admin Dashboard</h1>
			</div>
			<div class="body-content">
				<!-- <div class="b-content">
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
				</div> -->





				<div class="b-content">
					<div class="b-heading">
						<h2>Registered Users</h2>

					</div>

					<table class="table">
							<?php
							include_once "../phpscripts/dbconn.php";
                                $query = "SELECT * FROM shipments ORDER BY id DESC";
                                $query_run = mysqli_query($conn, $query);

                            ?>	
                            
					     <thead>
					     	<tr>
					     	 <th>Track ID</th>
					     	 <th>Sender Name</th>
					     	 <th>Receiver's Name</th>
					     	 <th>Receiver's Email</th>
					     	 <th>Receiver's Phone</th>
					     	 <th>Address</th>
					     	 <th>Shipment date</th>
					     	 <th>Delivery date</th>
					     	 <th>Current Location</th>
					     	 <th>Status</th>
					     	</tr>
					     </thead>
					     <tbody>
					     	<?php
                            if (mysqli_num_rows($query_run) > 0) {
                                while ($row = mysqli_fetch_assoc($query_run)) {
                            ?>
                            <tr>
                                <td data-label="Track ID"><?php echo $row['trackingId'] ?></td>
                                <td  data-label="sender name"><?php echo $row['sname'] ?></td>
                                <td  data-label="sender name"><?php echo $row['recName'] ?></td>
                                <td  data-label="R Email"><?php echo $row['recEmail'] ?></td>
                                <td  data-label="R Phone"><?php echo $row['recPhone'] ?></td>
                                <td  data-label="Address"><?php echo $row['recAddress'] ?></td>
                                <td  data-label="Delivery Date"><?php echo $row['deliveryDate'] ?></td>
                                <td  data-label="Departure Date"><?php echo $row['departureDate'] ?></td>

                                <td  data-label="Current Location"><?php echo $row['CurrentLocation'] ?></td>
                                <td  data-label="Status">
                                    <form action="../phpscripts/deleteusers.php" method="post">
                                        <button type="submit" name="delete_user" class="delete-btn"><?php echo $row['parcelStatus'] ?></button>
                                    </form>

                                </td>
                            </tr>
                            <?php
                                }
                            } else {
                                echo "no result";
                            }
                            ?>

					     </tbody>
					   </table>
				</div>
			</div>
		</div>
	</div>


</body>
</html>