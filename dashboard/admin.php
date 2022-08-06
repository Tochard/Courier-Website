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
					<li class="active"><a href="#">Dashbord</a></li>
					<li><a href="shipments.php">Shipments</a></li>
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
                                $query = "SELECT * FROM users ORDER BY id ASC";
                                $query_run = mysqli_query($conn, $query);

                            ?>	
                            
					     <thead>
					     	<tr>
					     	 <th>S.No</th>
					     	 <th>Name</th>
					     	 <th>Email</th>
					     	 <th>Phone</th>
					     	 <th>Country</th>
					     	 <th>Address</th>
					     	 <th>SignUp date</th>
					     	 <th>Action</th>
					     	</tr>
					     </thead>
					     <tbody>
					     	<?php
                            if (mysqli_num_rows($query_run) > 0) {
                                while ($row = mysqli_fetch_assoc($query_run)) {
                            ?>
                            <tr>
                                <td data-label="S.No"><?php echo $row['id'] ?></td>
                                <td  data-label="Fullname"><?php echo $row['fullname'] ?></td>
                                <td  data-label="Email"><?php echo $row['email'] ?></td>
                                <td  data-label="Phone"><?php echo $row['phone'] ?></td>
                                <td  data-label="Country"><?php echo $row['country'] ?></td>
                                <td  data-label="Address"><?php echo $row['address'] ?></td>
                                <td  data-label="Signup Date"><?php echo $row['regdate'] ?></td>
                                <td  data-label="Action">
                                    <form action="../phpscripts/deleteusers.php" method="post">
                                        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                                        <button type="submit" name="delete_user" class="delete-btn">DELETE</button>
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