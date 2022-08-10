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
						<li class="active">Email User</li>
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
						<h2>Email Users</h2>

					</div>

					<div class="shipment">

						<div>
							<form method="post" action="../phpscripts/mail.php" class="form">

								<div>
									<div class="inp">
										<label>Name</label><br>
										<input type="text" name="name" placeholder="Name" required="">
									</div>
									<div class="inp">
										<label>Email Address:</label>
										<input type="email" name="email" placeholder="Email Address" required="">
									</div>
									<div class="inp">
										<label>Subject:</label>
										<input type="text" name="subject" placeholder="Subject" required="">
									</div>
									<div class="inp">
										<label>Message:</label>
										<textarea name="message" placeholder="Message" required=""></textarea>
									</div>

									<div class="inp">
										<button type="submit" name="send">Send</button>
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