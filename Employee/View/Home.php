<?php

	include('../Controller/Header.php');
?>
<html>
<head>
	<title>Employee</title>
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
				<h1 align="center"><font face="Garamond" color="blue">Welcome to Agricultural Bangladesh</font></h1>
				<?php

					echo "Today is " . date("d.m.Y")." ";
					echo  "(".date("l").")";
				?>
				<h5>
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
				
    			<h3> 
    				<?php
					$file = fopen("../Asset/Home.txt","r");

					while(! feof($file))
  					{
  					echo fgets($file). "<br />";
  					}

 					fclose($file);
					?> 
				</h3>
				<img src="../Asset/Home1.jpg" height="200" width="295">
				<img src="../Asset/Home2.jpg" height="200" width="295">
				<img src="../Asset/Home3.jpg" height="200" width="295">
				<img src="../Asset/Home4.jpg" height="200" width="295">
				<marquee direction="right" behavior="alternate" bgcolor="#d1820a">
        			**This site has been developed by S M TUSHER MUSTAKIM as WebTech project**
    			</marquee>
			</td>
		</tr>
	</table>

</body>
</html>