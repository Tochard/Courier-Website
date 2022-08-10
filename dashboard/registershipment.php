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
						<li class="active">Register Shipment</li>
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
					<div class="b-heading">
						<h2>Register Shipment</h2>

					</div>

					<div class="shipment">
						<?php
						include_once "../phpscripts/dbconn.php";
						$query = "SELECT * FROM users ORDER BY id ASC";
						$query_run = mysqli_query($conn, $query);

						?>
						<div>
							<form method="post" action="../phpscripts/registershipment.php" class="form">
								<div class="b-heading">
									<h3>Sender's Detail</h3>
								</div>
								<div class="inp">
									<label>Select Sender:</label>
									<select data-width="100%" name="sender">
										<option selected="selected">--Select Sender--</option>
										<?php
										if (mysqli_num_rows($query_run) > 0) {
											while ($row = mysqli_fetch_assoc($query_run)) {
										?>

												<option><?php echo $row['fullname'] ?></option>
										<?php
											}
										} else {
											echo "no result";
										}
										?>
									</select>

								</div>

								<div class="b-heading">
									<h3>Receiver's Details</h3>
								</div>
								<div>
									<div class="inp">
										<label>Receiver's Name:</label>
										<input type="text" name="recName" placeholder="Receiver's Name" required="">
									</div>
									<div class="inp">
										<label>Receiver's Email:</label>
										<input type="email" name="recEmail" placeholder="Receiver's Email" required="">
									</div>
									<div class="inp">
										<label>Receiver's Phone:</label>
										<input type="text" name="recPhone" placeholder="Receiver's Phone Number" required="">
									</div>

									<div class="inp">
										<label>Country:</label>
										<input type="text" name="recCountry" placeholder="Receiver's Country" required="">
									</div>
									<div class="inp">
										<label>Address:</label>
										<input type="text" name="recAddress" placeholder="Receiver's Location" required="">
									</div>

									<div class="b-heading">
										<h3>Other Details</h3>
									</div>
									<div>
										<div class="inp">
											<label>Parcel Description:</label>
											<input type="text" name="parcel" placeholder="Parcel Description" required="">
										</div>
										<div class="inp">
											<label>Departure Date:</label>
											<input type="date" name="departureDate" placeholder="date" required="">
										</div>
										<div class="inp">
											<label>Delivery Date:</label>
											<input type="date" name="deliveryDate" placeholder="date" required="">
										</div>
										<div class="inp">
											<label>Shipping From:</label>
											<input type="text" name="shippingLocation" placeholder="Shipping Location" required="">
										</div>
										<div class="inp">
											<label>Current Location:</label>
											<input type="text" name="CurrentLocation" placeholder="Current Location" required="">
										</div>
										<div class="inp">
											<label>Parcel Weight:</label>
											<input type="text" name="parcelWeight" placeholder="Parcel Weight in Kg" required="">
										</div>
										<div class="inp">
											<label>Freight Type:</label>
											<select data-width="100%" name="freightType">
												<option selected="selected">--Select Freight Type--</option>
												<option>Land Transport</option>
												<option>Air Transport</option>
												<option>Sea Transport</option>

											</select>
										</div>
										<div class="inp">
											<label>Parcel Status:</label>
											<select data-width="100%" name="parcelStatus">
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
											<input type="text" name="amount" placeholder="Amount Paid" required="">
										</div>
										<div class="inp">
											<button type="submit" name="shipment">Register Shipment</button>
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