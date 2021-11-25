<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="../Model/LoginStyle.css">
</head>
<body>
	
	<form class="box" method="post" action="../Controller/LoginCheck.php">
		
		<h1>Login</h1>
		<input type="text" name="username" placeholder="Username">
		<input type="password" name="password" placeholder="Password">
		<input type="submit" name="submit" value="Login">
		<h4 align="left"><a href="Registration.php">Registration</a></h4>
		<h4 align="right"><a href="../Controller/ForgetPassword.php">Forget Password</a></h4>

	</form>
</body>
</html>