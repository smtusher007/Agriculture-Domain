<?php

	include_once('../Controller/Header.php');
	require_once('../Model/orderManageModel.php');
	$result = manageOrder();
	$count = mysqli_num_rows($result);
?>
<html>
<head>
	<title>Manage Order</title>
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
				<h1 align="center"><font face="Garamond" color="blue">Manage Order</font></h1>
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
				<h3>Enter Orders Details:</h3>
				<script type="text/javascript">
					function validate()
					{
 						let oID = document.getElementById( "oID" );
 						let dDate = document.getElementById("dDate");
 						let Address = document.getElementById("Address");
 						
 						if( oID.value == "" || dDate.value=="" || Address.value=="" || )
 						{
  						alert("Please fill the empty field");
  						return false;
						 }
						 else{
						 	return true;
						 }

					}
				</script>
				<form method="post" onsubmit="return validate();" action="../Controller/mOrder.php">
					Order ID:
					<input type="text" id="oID" name="oID" placeholder="Type OrderID" >
					Delivery Date:
					<input type="text" id="dDate" name="dDate" placeholder="Type Delivery Date">
					Deliver to:
					<input type="text" id="Address" name="Address" placeholder="Type Address">
					
					<input type="submit" name="submit" value="Add">

				</form>
				<table border="1" align="center">
						<tr>
							<th>ORDER ID</th>
							<th>DElIVERY DATE</th>
							<th>ADRESS</th>
							<th>ACTION</th>
						</tr>
				<?php while($data = mysqli_fetch_assoc($result)){?>
						<tr>
							<td><?=$data['id']?></td>
							<td><?=$data['dDate']?></td>
							<td><?=$data['address']?></td>
							<td>
								<a href="../Controller/editOrder.php?id=<?=$data['id']?>">Edit</a>
								<a href="../Controller/deleteOrder.php?id=<?=$data['id']?>">Delete</a>
							</td>
						</tr>
				<?php } ?>
				</table>
			</td>
		</tr>
	</table>

	<script type="text/javascript">
		function ajax(){
	let oID = document.getElementById('oID').value;
	let dDate = document.getElementById('dDate').value;
	let Address = document.getElementById('Address').value;
	
	

	let xhttp = new XMLHttpRequest();
	xhttp.open('POST', '../Controller/mOrder.php', false);
	xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xhttp.send('oID='+oID);
	xhttp.send('dDate='+dDate);
	xhttp.send('Address='+Address);
	
	
}
	</script>

</body>
</html>