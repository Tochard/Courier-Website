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
					<li><a href="#">Dashbord</a></li>
					<li><a href="#">Shipments</a></li>
					<li  class="active"><a href="registershipment.php">Register Shipment</a></li>
					<li><a href="#">Update Shipment</a></li>
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
                                    <option selected="selected" >--Select Sender--</option>
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
                                <input type="text"  name="recName" placeholder="Receiver's Name" required="">
                            </div>
                            <div  class="inp">
                            	<label>Receiver's Email:</label>
                                <input type="email"  name="recEmail" placeholder="Receiver's Email" required="">
                            </div>
                            <div  class="inp">
                            	<label>Receiver's Phone:</label>
                                <input type="text"  name="recPhone" placeholder="Receiver's Phone Number" required="">
                            </div>

                            <div  class="inp">
                            	<label>Country:</label>
                                <input type="text"  name="recCountry" placeholder="Receiver's Country" required="">
                            </div>
                            <div  class="inp">
                            	<label>Address:</label>
                                <input type="text"  name="recAddress" placeholder="Receiver's Location" required="">
                            </div>
                            
						<div class="b-heading">
							<h3>Other Details</h3>
						</div>
						<div>
                            <div class="inp">
                            	<label>Parcel Description:</label>
                                <input type="text"  name="parcel" placeholder="Parcel Description" required="">
                            </div>
                            <div  class="inp">
                            	<label>Departure Date:</label>
                                <input type="date"  name="departureDate" placeholder="date" required="">
                            </div>
                            <div  class="inp">
                            	<label>Delivery Date:</label>
                                <input type="date"  name="deliveryDate" placeholder="date" required="">
                            </div>
                            <div  class="inp">
                            	<label>Shipping From:</label>
                                <input type="text"  name="shippingLocation" placeholder="Shipping Location" required="">
                            </div>
                            <div  class="inp">
                            	<label>Current Location:</label>
                                <input type="text"  name="CurrentLocation" placeholder="Current Location" required="">
                            </div>
                            <div  class="inp">
                            	<label>Parcel Weight:</label>
                                <input type="text"  name="parcelWeight" placeholder="Parcel Weight in Kg" required="">
                            </div>
                            <div class="inp">
                            	<label>Freight Type:</label>
                            	<select data-width="100%" name="freightType">
                                    <option selected="selected" >--Select Freight Type--</option>
                                    <option>Land Transport</option>
                                    <option>Air Transport</option>
                                    <option>Sea Transport</option>
                                   
                                </select>
                            </div>
                            <div class="inp">
                            	<label>Parcel Status:</label>
                            	<select data-width="100%" name="parcelStatus">
                                    <option selected="selected" >--Select Parcel Status--</option>
                                    <option>Order Placed</option>
                                    <option>Processing</option>
                                    <option>Shipping</option>
                                    <option>Hold</option>
                                    <option>Pickup</option>
                                    <option>Delivered</option>
                                   
                                </select>
                            </div>
                            <div  class="inp">
                            	<label>Amount Paid:</label>
                                <input type="text"  name="amount" placeholder="Amount Paid" required="">
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