<?php

	include('../Controller/Header.php');
?>
<html>
<head>
	<title>Admin</title>
	<link rel="stylesheet" type="text/css" href="style.css">
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
				<h1 align="center"><font face="Garamond" color="Black">Welcome to Agricultural Bangladesh</font></h1>
				<?php

					echo "Today is " . date("d.m.Y")." ";
					echo  "(".date("l").")";
				?>
				<h5>
				<h4 align="right">
					<a href="Home.php" class="button">Home</a>
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
				<div class="bg-image">
					<img src="../Asset/Home1.jpg" height="450" width="350" >
					
				<img src="../Asset/Home2.jpg"height="450" width="350">
				
				
				<img src="../Asset/Home3.jpg" height="450" width="350" >
				
				<img src="../Asset/Home4.jpg" height="450" width="350">
				</div>
			</td>
			
		</tr>
	</table>

</body>
</html>