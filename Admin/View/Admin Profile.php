<?php

	include('../Controller/Header.php');
?>
<html>
<head>
	<title>Admin Profile</title>
</head>
<body>
	<div style="background-image: url('../Asset/img1.jpg');">
	<table border="1" width="100%">
		<tr height="100px">
			<td><h2 align="center"><font face="Garamond"> Agricultural Bangladesh </font></h2><br>
				<a href="https://www.google.com/" target="_blank">google |</a>
				<a href="https://www.facebook.com/" target="_blank">facebook |</a>
				<a href="https://twitter.com/" target="_blank">twitter |</a>
				<a href="https://www.yahoo.com/" target="_blank">yahoo |</a>
				<a href="https://www.linkedin.com/" target="_blank">linkdin</a>

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
				<a href="Admin Profile.php">Admin Profile</a><br>
		<a href="Employee Information.php">Employee Information</a><br>
        <a href="Employee Salary.php">Employee Salary</a><br>
        <a href="Seller Info.php">Seller Info</a><br>
        <a href="Verified Seller List.php">Verified Seller List</a><br>
        <a href="Seller Feedback.php">Seller Feedback</a><br>
        <a href="Customer Info.php">Customer Info</a><br>
        <a href="Approve New Registration.php">Approve New Registration</a><br>
        <a href="Customer Order.php">Customer Order</a><br>
        <a href="Transaction.php">Transaction</a><br>
        <a href="Customer Feedback.php">Customer Feedback</a><br>
        <a href="News & Info.php">News & Info</a><br>
   
			</h3>
			</td>

			<td>
				<table align="center" border="1">
					<tr>
						<td colspan="2"> 
							<h1 align="center"> Abir Raihan </h1>
							<center><img src="../Asset/Abir.jpg" alt="Abir" width="300" height="300" >
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
						<td><h3 align="center">19-41278-3</h3></td>
					</tr>
					<tr>
						<td><h3>Address</h3></td>
						<td><h3 align="center">Dhanmondi,Dhaka</h3></td>
					</tr>
					<tr>
						<td><h3>Email</h3></td>
						<td><h3 align="center">abirraihan82@yahoo.com</h3></td>
					</tr>
					<tr>
						<td><h3>Phone No.</h3></td>
						<td><h3 align="center">+8801772958160, +8801715716440</h3></td>
					</tr>
					<tr>
						<td><h3>Date of Birth</h3></td>
						<td><h3 align="center">22-10-1998</h3></td>
					</tr>
					<tr>
						<td><h3>Maretial Status</h3></td>
						<td><h3 align="center">Single</h3></td>
					</tr>
					<tr>
						<td><h3>Joined on</h3></td>
						<td><h3 align="center">01-10-2019</h3></td>
					</tr>
					<tr>
						<td><h3>Salary</h3></td>
						<td><h3 align="center">65,000tk</h3></td>
					</tr>

				</table>

			</td>
		</tr>
	</table>

</body>
</html>