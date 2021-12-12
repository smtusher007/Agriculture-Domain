<?php

	include_once('../Controller/Header.php');
	require_once('../Model/VerifiedSellerModel.php');
	$result = AllVerifiedSellers();
	$count = mysqli_num_rows($result);
?>
<html>
<head>
	<title>Verified Seller List</title>
</head>
<body>
	<div style="background-image: url('../Asset/img1.jpg');">
	<table border="1" width="100%">
		<tr height="100px">
			<td><h2 align="center"><font face="Garamond"> Agricultural Bangladesh </font></h2><br>
				<a href="https://www.google.com/">google |</a>
				<a href="https://www.facebook.com/">facebook |</a>
				<a href="https://twitter.com/?lang=en">twitter |</a>
				<a href="https://www.yahoo.com/">yahoo |</a>
				<a href="https://www.linkedin.com/in/">linkdin</a>

			</td>
			<td width="80%" colspan="2">
				<h1 align="center"><font face="Garamond" color="blue">Verified Seller</font></h1>
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
				<h3>Add Verified Seller:</h3>
					<script type="text/javascript">
					function validate()
					{
 						let SsName = document.getElementById( "SsName" );
 						let SsNid = document.getElementById("SsNid");
 						let SsEmail = document.getElementById("SsEmail");
 						let SsPhone = document.getElementById("SsPhone");
 						let SsAddress = document.getElementById("SsAddress");
 						if( SsName.value == "" || SsNid.value=="" || SsEmail.value=="" ||SsPhone.value=="" ||SsAddress.value=="")
 						{
  						alert("Please fill the empty field");
  						return false;
						 }
						 else{
						 	return true;
						 }

					}
				</script>
				<form method="post" onsubmit="return validate();" action="../Controller/Verified Seller.php">
					Name: 
					<input type="text" id="SsName" name="SsName" placeholder="Type Full Name">
					NID:
					<input type="text" id="SsNid" name="SsNid" placeholder="Type NID Number">
					Email:
					<input type="email" id="SsEmail" name="SsEmail" placeholder="Type valid email">
					PhoneNo:
					<input type="text"  id="SsPhone" name="SsPhone" placeholder="Type PhoneNo">
					Address:
					<input type="text" id="SsAddress" name="SsAddress" placeholder="Type Address">
					<input type="submit" name="submit" value="Submit">

				</form>
				<table border="1" align="center">
						<tr>
							<th>ID</th>
							<th>Name</th>
							<th>NID</th>
							<th>Email</th>
							<th>Phone No.</th>
							<th>Address</th>
							
						</tr>
<?php while($data = mysqli_fetch_assoc($result)){?>
						<tr>
							<td><?=$data['id']?></td>
							<td><?=$data['name']?></td>
							<td><?=$data['nid']?></td>
							<td><?=$data['email']?></td>
							<td><?=$data['phoneNo']?></td>
							<td><?=$data['address']?></td>
						
							</td>
						</tr>
<?php } ?>
				</table>
			</td>
		</tr>
	</table>

</body>
</html>