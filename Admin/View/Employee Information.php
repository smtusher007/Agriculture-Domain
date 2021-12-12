<?php

	include('../Controller/Header.php');
	require_once('../Model/employeeModel.php');
	$result = AllEmployees();
	$count = mysqli_num_rows($result);
	

?>
<html>
<head>
	<title>Employee Information</title>
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
				<h1 align="center"><font face="Garamond" color="blue">Employee Information</font></h1>
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
				<h3>Add Employee info:</h3>
				<script type="text/javascript">
					function validate()
					{
 						let EmpName = document.getElementById( "EmpName" );
 						let EmpNId = document.getElementById("EmpId");
 						let EmpEmail = document.getElementById("EmpEmail");
 						let EmpPhone = document.getElementById("EmpPhone");
 						let EmpAddress = document.getElementById("EmpAddress");
 						if( EmpName.value == "" || EmpNId.value=="" || EmpEmail.value=="" ||EmpPhone.value=="" ||EmpAddress.value=="")
 						{
  						alert("Please fill the empty field");
  						return false;
						 }
						 else{
						 	return true;
						 }

					}
				</script>
				<form method="post" name="AddEmployee" onsubmit="return validate();" action="../Controller/employee.php">
					Name:
					<input type="text" id="EmpName" name="EmpName" placeholder="Type Full Name" >
					NID:
					<input type="text" id="EmpId" name="EmpId" placeholder="Type NID Number">
					Email:
					<input type="email" id="EmpEmail" name="EmpEmail" placeholder="Type valid email">
					PhoneNo:
					<input type="text" id="EmpPhone" name="EmpPhone" placeholder="Type PhoneNo">
					Address:
					<input type="text" id="EmpAddress" name="EmpAddress" placeholder="Type Adress">
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
								<a href="../Controller/editEmployee.php?id=<?=$data['id']?>">Edit</a>
								<a href="../Controller/deleteEmployee.php?id=<?=$data['id']?>" onclick="return confirm('Are you sure?')">Delete</a>
							</td>
						</tr>
<?php } ?>
				</table>
			</td>
		</tr>
	</table>

</body>
</html>