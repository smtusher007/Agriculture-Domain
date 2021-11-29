<?php

	include_once('../Controller/Header.php');
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
 						let cName = document.getElementById("cName");
 						if( oID.value == "" || dDate.value=="" || Address.value=="" || cName=="")
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
					Customer Name:
					<input type="text" id="cName" name="cName" placeholder="Type Full name">
					<input type="submit" name="submit" value="Add">

				</form>
			</td>
		</tr>
	</table>

</body>
</html>