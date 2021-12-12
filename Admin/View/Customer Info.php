<?php

	include('../Controller/Header.php');
	require_once('../Model/customerModel.php');
	$result = AllCustomers();
	$count = mysqli_num_rows($result);
	

?>
<html>
<head>
	<title>Customer Info</title>
</head>
<body>
	<div style="background-image: url('../Asset/img1.jpg');">
	<table border="1" width="100%">
		<tr height="100px">
			<td><h2 align="center"><font face="Garamond"> Agricultural Bangladesh </font></h2><br>
				<a href="https://www.google.com/" target="_blank">google |</a>
				<a href="https://www.facebook.com/" target="_blank">facebook |</a>
				<a href="https://twitter.com/?lang=en" target="_blank">twitter |</a>
				<a href="https://www.yahoo.com/" target="_blank">yahoo |</a>
				<a href="https://www.linkedin.com/" target="_blank">linkdin</a>

			</td>
			<td width="80%" colspan="2">
				<h1 align="center"><font face="Garamond" color="blue">Customer Information</font></h1>
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
				<h3>Add Customer:</h3>
				<script type="text/javascript">
					function validate()
					{
 						let CsName = document.getElementById( "CsName" );
 						let CsNId = document.getElementById("CsId");
 						let CsEmail = document.getElementById("CsEmail");
 						let CsPhone = document.getElementById("CsPhone");
 						let CsAddress = document.getElementById("CsAddress");
 						if( CsName.value == "" || CsId.value=="" || CsEmail.value=="" ||CsPhone.value=="" ||CsAddress.value=="")
 						{
  						alert("Please fill the empty field");
  						return false;
						 }
						 else{
						 	return true;
						 }

					}
				</script>
				<form method="post" name="AddCustomer" onsubmit="return validate();" action="../Controller/customer.php">
					Name:
					<input type="text" id="CsName" name="CsName" placeholder="Type Full Name" >
					NID:
					<input type="text" id="CsId" name="CsId" placeholder="Type NID Number">
					Email:
					<input type="email" id="CsEmail" name="CsEmail" placeholder="Type valid email">
					PhoneNo:
					<input type="text" id="CsPhone" name="CsPhone" placeholder="Type PhoneNo">
					Address:
					<input type="text" id="CsAddress" name="CsAddress" placeholder="Type Adress">
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
							<th>Action</th>
						</tr>
<?php while($data = mysqli_fetch_assoc($result)){?>
						<tr>
							<td><?=$data['id']?></td>
							<td><?=$data['name']?></td>
							<td><?=$data['nid']?></td>
							<td><?=$data['email']?></td>
							<td><?=$data['phoneNo']?></td>
							<td><?=$data['address']?></td>
							<td>
							<a href="../Controller/editCustom.php?id=<?=$data['id']?>">Edit</a>
								<a href="../Controller/deleteCustom.php?id=<?=$data['id']?>" onclick="return confirm('Are you sure?')">Delete</a>
							</td>
						</tr>
<?php } ?>
				</table>
			</td>
		</tr>
	</table>

	<script type="text/javascript">
		function ajax(){
	let CsName = document.getElementById('CsName').value;
	let CsId = document.getElementById('CsId').value;
	let CsEmail = document.getElementById('CsEmail').value;
	let CsPhone = document.getElementById('CsPhone').value;
	let CsAddress = document.getElementById('CsAddress').value; 

	let xhttp = new XMLHttpRequest();
	xhttp.open('POST', '../Controller/customer.php', false);
	xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xhttp.send('CsName='+CsName);
	xhttp.send('CsId='+CsId);
	xhttp.send('CsEmail='+CsEmail);
	xhttp.send('CsPhone='+CsPhone);
	xhttp.send('CsAddress='+CsAddress);
	
}
	</script>

</body>
</html>