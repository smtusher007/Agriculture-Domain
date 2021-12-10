<?php

	include('../Controller/Header.php');
	require_once('../Model/itemModel.php');
	$result = ListedItem();
	$count = mysqli_num_rows($result);
?>
<html>
<head>
	<title>ListedItems</title>
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
				<h1 align="center"><font face="Garamond" color="blue">Listed Items</font></h1>
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
				<h3>Add Items:</h3>
				<script type="text/javascript">
					function validate()
					{
 						let iName = document.getElementById( "iName" );
 						let sName = document.getElementById("sName");
 						let iInfo = document.getElementById("iInfo");
 						if( iName.value == "" || sName.value=="" || iInfo.value=="")
 						{
  						alert("Please fill the empty field");
  						return false;
						 }
						 else{
						 	return true;
						 }

					}
				</script>
				<form method="post" onsubmit="return validate();" action="../Controller/itemList.php">
					Item Name:
					<input type="text" id="iName" name="iName" placeholder="Type a Item Name" >
					Seller's Name:
					<input type="text" id="sName" name="sName" placeholder="Type Seller's Name">
					Item Information:
					<input type="text" id="iInfo" name="iInfo" placeholder="Type Item Info">
					<input type="submit" name="submit" value="Add">

				</form>
				<table border="1" align="center">
						<tr>
							<th>ITEM NAME</th>
							<th>SELLER'S NAME</th>
							<th>ITEM INFORMATIONS</th>
							<th>ACTION</th>
						</tr>
			<?php while($data = mysqli_fetch_assoc($result)){?>
						<tr>
							<td><?=$data['itemName']?></td>
							<td><?=$data['sellerName']?></td>
							<td><?=$data['itemInfo']?></td>
							<td>
								<a href="../Controller/editList.php?id=<?=$data['id']?>">Edit</a>
								<a href="../Controller/deleteList.php?id=<?=$data['id']?>" onclick="return confirm('Are you sure?')">Delete</a>
							</td>
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
	let iName = document.getElementById('iName').value;
	let sName = document.getElementById('sName').value;
	let iInfo = document.getElementById('iInfo').value;

	let xhttp = new XMLHttpRequest();
	xhttp.open('POST', '../Controller/itemList.php', false);
	xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xhttp.send('iName='+iName);
	xhttp.send('sName='+sName);
	xhttp.send('iInfo='+iInfo);
	
}
	</script>

</body>
</html>