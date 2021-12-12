<?php

	include('../Controller/Header.php');
	require_once('../Model/transModel.php');
	$result = payStatus();
	$count = mysqli_num_rows();
?>
<html>
<head>
	<title>Transaction</title>
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
				<h1 align="center"><font face="Garamond" color="blue">Transaction</font></h1>
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
			<td><center>
				<h3>Add Transaction Status:</h3>
				<script type="text/javascript">
					function validate()
					{
 						let oId = document.getElementById("oId");
 						let status = document.getElementById( "status" );
 						if(oId.value == "" || status.value == "")
 						{
  						alert("Please fill the empty field");
  						return false;
						 }
						 else{
						 	return true;
						 }

					}
				</script>
				<form method="post" name="TransactionStatus" onsubmit="return validate();" action="../Controller/transaction.php">
					<h3>Order ID:
					<input type="text" id="oId" name="oId" placeholder="Type Order ID" ><br>
					Status:
					<input type="radio" id="status" name="status" value="paid">PAID
					<input type="radio" id="status" name="status" value="pending">PENDING
					<input type="submit" name="submit" value="Submit">
				</h3>

				</form>
				</center>

				<table border="1" align="center">
						<tr>
							<th>ORDER ID</th>
							<th>STATUS</th>
						</tr>
				<?php while($data = mysqli_fetch_assoc($result)){?>
						<tr>
							<td><?=$data['id']?></td>
							<td><?=$data['status']?></td>
						</tr>
				<?php } ?>
				</table>
			</td>
		</tr>
	</table>
			</td>
		</tr>
	</table>

	<script type="text/javascript">
		function ajax(){
	let oId = document.getElementById('oId').value;
	let status = document.getElementById('status').value;
	

	let xhttp = new XMLHttpRequest();
	xhttp.open('POST', '../Controller/transaction.php', false);
	xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xhttp.send('oId='+oId);
	xhttp.send('status='+status);
	
	
}
	</script>


</body>
</html>