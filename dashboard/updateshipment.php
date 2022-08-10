<?php
require_once "../phpscripts/adminsecurity.php";
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
			<div class="body-content">

				<div class="b-content">

					<?php
					include_once "../phpscripts/dbconn.php";
					if (isset($_POST['update'])) {
						$t_id = $_POST['t-id'];
						$query = "SELECT * FROM shipments WHERE trackingId = '$t_id' ";
						$query_run = mysqli_query($conn, $query);

						if (mysqli_num_rows($query_run) > 0) {
							while ($row = mysqli_fetch_assoc($query_run)) {

					?>
								<div class="b-heading">
									<h2>Update Shipment with Tracking ID: <span><?php echo $row['trackingId'] ?></span> </h2>
									<br><br>
								</div>

								<div class="shipment">

									<div>
										<form method="post" action="../phpscripts/updateshipment.php" class="form">
											<div class="b-heading">
												<h3>Sender's Detail</h3>
											</div>

											<div class="inp">
												<label>Sender Name:</label>
												<input type="text" name="sName" value="<?php echo $row['sname'] ?>" required="">
											</div>
											<div class="inp">
												<label>Sender Email:</label>
												<input type="email" name="sEmail" value="<?php echo $row['semail'] ?>" required="">
											</div>
											<div class="inp">
												<label>Sender Phone:</label>
												<input type="text" name="sPhone" value="<?php echo $row['sphone'] ?>" required="">
											</div>

											<div class="b-heading">
												<h3>Receiver's Details</h3>
											</div>
											<div>
												<div class="inp">
													<label>Receiver's Name:</label>
													<input type="text" name="recName" value="<?php echo $row['recName'] ?>" required="">
												</div>
												<div class="inp">
													<label>Receiver's Email:</label>
													<input type="email" name="recEmail" value="<?php echo $row['recEmail'] ?>" required="">
												</div>
												<div class="inp">
													<label>Receiver's Phone:</label>
													<input type="text" name="recPhone" value="<?php echo $row['recPhone'] ?>" required="">
												</div>

												<div class="inp">
													<label>Country:</label>
													<input type="text" name="recCountry" value="<?php echo $row['recCountry'] ?>" required="">
												</div>
												<div class="inp">
													<label>Address:</label>
													<input type="text" name="recAddress" value="<?php echo $row['recAddress'] ?>" required="">
												</div>

												<div class="b-heading">
													<h3>Other Details</h3>
												</div>
												<div>
													<div class="inp">
														<label>Parcel Description:</label>
														<input type="text" name="parcel" value="<?php echo $row['parcel'] ?>" required="">
													</div>
													<div class="inp">
														<label>Departure Date:</label>
														<input type="date" name="departureDate" value="<?php echo $row['departureDate'] ?>" required="">
													</div>
													<div class="inp">
														<label>Delivery Date:</label>
														<input type="date" name="deliveryDate" value="<?php echo $row['deliveryDate'] ?>" required="">
													</div>
													<div class="inp">
														<label>Shipping From:</label>
														<input type="text" name="shippingLocation" value="<?php echo $row['shippingLocation'] ?>" required="">
													</div>
													<div class="inp">
														<label>Current Location:</label>
														<input type="text" name="CurrentLocation" value="<?php echo $row['CurrentLocation'] ?>" required="">
													</div>
													<div class="inp">
														<label>Parcel Weight:</label>
														<input type="text" name="parcelWeight" value="<?php echo $row['parcelWeight'] ?>" required="">
													</div>
													<div class="inp">
														<label>Freight Type:</label>
														<input type="text" name="freightType" value="<?php echo $row['freightType'] ?>" required="">
													</div>
													<div class="inp">
														<label>Parcel Status:</label>
														<select data-width="100%" name="parcelStatus" value="<?php echo $row['parcelStatus'] ?>">
															<option selected="selected">--Select Parcel Status--</option>
															<option>Order Placed</option>
															<option>Processing</option>
															<option>Shipping</option>
															<option>Hold</option>
															<option>Pickup</option>
															<option>Delivered</option>

														</select>
													</div>
													<div class="inp">
														<label>Amount Paid:</label>
														<input type="text" name="amount" value="<?php echo $row['amount'] ?>" required="">
													</div>
													<div class="inp">
														<input type="hidden" name="t-id" value="<?php echo $row['trackingId'] ?>" required="">
														<button type="submit" name="updateshipment">Update Shipment</button>
													</div>

										</form>
									</div>
								</div>
					<?php
							}
						} else {
							echo "no result";
						}
					}
					?>

				</div>
			</div>
		</div>
	</div>


</body>

</html>