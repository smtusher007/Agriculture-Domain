<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Landing Page</title>
	<link rel="stylesheet" href="css/style.css?v=<?php echo time(); ?>">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

</head>
<body>
	<div class="home-header">
		<strong><h2> FarmersFoodbook</h2></strong>
	</div>
	<br><br><br><br>
	<center>
			<div><a href="view/home-page.php" class="btn login-btn">
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
				</a>
				<a href="view/registration-form.php" class="btn"> Registration
			</a>
			</div>

		<br><br>
		<tr>
			<td><img src="resources/food_img/veg5.jpg" alt="Food" width="280px"></td>
			<td><img src="resources/food_img/veg6.jpg" alt="Food" width="280px"></td>
			<td><img src="resources/food_img/veg4.jpg" alt="Food" width="280px"></td>
			<td><img src="resources/food_img/veg7.jpg" alt="Food" width="280px"></td>
			<td><img src="resources/food_img/veg8.jpg" alt="Food" width="280px"></td>
			<td><img src="resources/food_img/veg1.jpg" alt="Food" width="280px"></td>
			<td><img src="resources/food_img/veg2.jpg" alt="Food" width="280px"></td>
			<td><img src="resources/food_img/veg3.jpg" alt="Food" width="280px"></td>
			
		</tr>
	</center>
 <?php include 'view/footer.php' ; ?>

</body>
</html>