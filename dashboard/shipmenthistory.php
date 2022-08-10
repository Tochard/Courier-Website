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
						<li class="active">Shipment History</li>
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
						<h2>Shipment History</h2>

					</div>

					<div class="outer-wrapper">
						<div class="table-wrapper">
							<table class="table">
								<?php
								include_once "../phpscripts/dbconn.php";
								$query = "SELECT * FROM shipments WHERE parcelStatus = 'Delivered' ORDER BY id DESC";
								$query_run = mysqli_query($conn, $query);

								?>

								<thead>
									<tr>
										<th>Shipment date</th>
										<th>Delivery date</th>
										<th>Track ID</th>
										<th>Sender Name</th>
										<th>Receiver's Name</th>
										<th>Receiver's Email</th>
										<th>Receiver's Phone</th>
										<th>Address</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									<?php
									if (mysqli_num_rows($query_run) > 0) {
										while ($row = mysqli_fetch_assoc($query_run)) {
									?>
											<tr>
												<td data-label="Delivery Date"><?php echo $row['deliveryDate'] ?></td>
												<td data-label="Departure Date"><?php echo $row['departureDate'] ?></td>
												<td data-label="Track ID"><?php echo $row['trackingId'] ?></td>
												<td data-label="sender name"><?php echo $row['sname'] ?></td>
												<td data-label="sender name"><?php echo $row['recName'] ?></td>
												<td data-label="R Email"><?php echo $row['recEmail'] ?></td>
												<td data-label="R Phone"><?php echo $row['recPhone'] ?></td>
												<td data-label="Address"><?php echo $row['recAddress'] ?></td>
												<td data-label="Action">
													<form action="../phpscripts/deleteusers.php" method="post">
														<button type="submit" name="delete_user" class="status-btn"><?php echo $row['parcelStatus'] ?></button>
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
		</div>
	</div>


</body>

</html>