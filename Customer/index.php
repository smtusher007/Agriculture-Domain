<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Landing Page</title>
	<link rel="stylesheet" href="css/style.css?v=<?php echo time(); ?>">

</head>
<body>
	<div class="home-header">
		<div style="background-image: url('Homepage.jpg');">	
		<strong>Farmers FoodShop</strong>
	</div>
	<br><br><br><br>
	<table align="center">
		
		<tr><td><br></td></tr>
		<tr>
			<td><a href="view/home-page.php" class="btn login-btn">
					<?php
						if(isset($_SESSION['username']))
						{
							echo $_SESSION['username'];
						}
						else
						{
							echo "Login";
						}
					?>
				</a></td>
			<td><a href="view/registration-form.php" class="btn"> Registration</a></td>
		</tr>
	</table>
	<table align="center">
		<tr><td><br><br></td></tr>
	</table>
 <?php include 'view/footer.php' ; ?>

</body>
</html>