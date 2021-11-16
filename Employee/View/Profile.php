<?php

	include('../Controller/Header.php');
?>
<html>
<head>
	<title>Employee Profile</title>
</head>
<body>
	<div style="background-image: url('../Asset/img1.jpg');">
	<table border="1" width="100%">
		<tr height="100px">
			<td><h2 align="center"><font face="Garamond"> Agricultural Bangladesh </font></h2><br>
				<a href="https://www.google.com/" target="_blank">google |</a>
				<a href="https://www.facebook.com/sm.tusher.avoid/" target="_blank">facebook |</a>
				<a href="https://twitter.com/?lang=en" target="_blank">twitter |</a>
				<a href="https://www.yahoo.com/" target="_blank">yahoo |</a>
				<a href="https://www.linkedin.com/in/s-m-tusher-mustakim-20522718b/" target="_blank">linkdin</a>

			</td>
			<td width="80%" colspan="2">
				<h1 align="center"><font face="Garamond" color="blue">Profile</font></h1>
				<h4 align="right">
					<a href="Home.php">Home || </a>
					<a href="Logout.php">Logout</a>
				</h4>				
			</td>
		</tr>
		<tr height="600px">
			<td  rowspan="3">
				<h3>
				<a href="Profile.php">Profile</a><br>
				<a href="CustomerInfo.php">Customer Information</a><br>
				<a href="Sellers.php">Seller's Information</a><br>
				<a href="Contact.php">Contact</a><br>
				<a href="OrderList.php">Order List</a><br>
				<a href="ListedItems.php">Listed Items</a><br>
				<a href="Transaction.php">Transaction</a><br>
				<a href="ManageOrder.php">Manage Order</a><br>
				<a href="PaymentInfo.php">Payment Info</a><br>
				<a href="Report.php">Send Report</a><br>
				<a href="History.php">History</a><br>
				<a href="UpdateInfo.php">Information</a><br>
				<a href="News.php">News</a>
			</h3>
			</td>

			<td>
				<table align="center" border="1">
					<tr>
						<td colspan="2"> 
							<h1 align="center"> William Russie </h1>
							<center><img src="../Asset/Willam.jpg" alt="William" width="300" height="300" >
							<form method="POST" action="../Controller/Fileupload.php" enctype="multipart/form-data">
								<fieldset>
									Image Upload: <input type="file" name="myfile"/>
									<input type="submit" name="submit" value="Submit"/>
								</fieldset>
							</form>

						</td>
					</tr>
					<tr>
						<td><h3>ID</h3></td>
						<td><h3 align="center">66-54345-0</h3></td>
					</tr>
					<tr>
						<td><h3>Adress</h3></td>
						<td><h3 align="center">Columbus Street,San Francisco, CA, USA</h3></td>
					</tr>
					<tr>
						<td><h3>Email</h3></td>
						<td><h3 align="center">willrussie@yahoo.com</h3></td>
					</tr>
					<tr>
						<td><h3>Phone No.</h3></td>
						<td><h3 align="center">+854685421, +880176235123</h3></td>
					</tr>
					<tr>
						<td><h3>Date of Birth</h3></td>
						<td><h3 align="center">25-05-1994</h3></td>
					</tr>
					<tr>
						<td><h3>Maretial Status</h3></td>
						<td><h3 align="center">Single</h3></td>
					</tr>
					<tr>
						<td><h3>Joined on</h3></td>
						<td><h3 align="center">02-07-2019</h3></td>
					</tr>
					<tr>
						<td><h3>Salary</h3></td>
						<td><h3 align="center">30,000tk</h3></td>
					</tr>

				</table>

			</td>
		</tr>
	</table>

</body>
</html>