<html>
<head>
	<title>Registration</title>
</head>
<body>
	<div style="background-image: url('../Asset/img1.jpg');">
	<form method="post" action="../Controller/RegistrationCheck.php">
		<fieldset>
			<legend>Registration</legend>
			<table>
				<tr>
					<td>Name:</td>
					<td><input type="text" name="name" value=""></td>
				</tr>
				<tr>
					<td>Email:</td>
					<td><input type="email" name="email" value=""></td>
				</tr>
				<tr>
					<td>UserName:</td>
					<td><input type="text" name="username" value=""></td>
				</tr>
				<tr>
					<td>Password:</td>
					<td><input type="password" name="password" value=""></td>
				</tr>
				<tr>
					<td>Confirm Password:</td>
					<td><input type="password" name="confirmpassword" value=""></td>
				</tr>
				<tr>
					<td>Gender:</td>
					<td>
						<input type="radio" name="gender" value="male">Male
						<input type="radio" name="gender" value="female">Female
						<input type="radio" name="gender" value="other">Other
					</td>
				</tr>
				<tr>
					<td>Date of Birth:</td>
					<td><input type="date" name="date" value=""></td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" name="submit" value="Register"></td>
					<td><input type="reset" name="reset" value="Reset">
						<br><a href="Login.php">Login here</a></td>
				</tr>
			</table>
		</fieldset>
	</form>
</body>
</html>