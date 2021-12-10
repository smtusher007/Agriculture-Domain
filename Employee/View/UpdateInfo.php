<?php

	include('../Controller/Header.php');
	require_once('../Model/infoModel.php');
	$result = showInfo();
	$count = mysqli_num_rows($result);
?>
<html>
<head>
	<title>Information</title>
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
				<h1 align="center"><font face="Garamond" color="blue">Information</font></h1>
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
				<h3>Add Information:</h3>
				<script type="text/javascript">
					function validate()
					{
 						let info = document.getElementById("info");
 						if(info.value == "")
 						{
  						alert("Please fill the empty field");
  						return false;
						 }
						 else{
						 	return true;
						 }

					}
				</script>
				<form method="post" name="TransactionStatus" onsubmit="return validate();" action="../Controller/update.php">

					<input type="text" id="info" name="info" placeholder="write some Agricultural Informations" style="height:50px;width: 250px;" ><br>
					<input type="submit" name="submit" value="Insert">
					<div id="print">
						
					</div>

				</form>
				<table border="1" align="center">
						<tr>
							<th>INFORMATION</th>
							<th>ACTION</th>
						</tr>
				<?php while($data = mysqli_fetch_assoc($result)){?>
						<tr>
							<td><?=$data['info']?></td>
							<td>
								<a href="../Controller/editInfo.php?id=<?=$data['id']?>">Edit</a>
								<a href="../Controller/deleteInfo.php?id=<?=$data['id']?>" onclick="return confirm('Are you sure?')">Delete</a>
							</td>
						</tr>
				<?php } ?>
				</table>

				<img src="../Asset/Info1.jpg" height="300px" width="550px">
				<img src="../Asset/Info2.jpg" height="300px" width="550px">
				<img src="../Asset/Info3.png" height="300px" width="550px">
				<img src="../Asset/Info4.jpg" height="300px" width="550px">
			</td>
		</tr>
	</table>
	<script type="text/javascript">
		function ajax(){
	let info = document.getElementById('info').value;
	
	let json = {
		'info'  : info,
	}
	let myjson = JSON.stringify(json);


	let xhttp = new XMLHttpRequest();
	xhttp.open('POST', '../Controller/update.php', true);
	xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xhttp.send('data='+myjson);
	xhttp.onreadystatechange = function(){

		if(this.readyState == 4 && this.status == 200){
			document.getElementById('print').innerHTML = this.responseText;
		}
	}
	
	
}
	</script>

</body>
</html>