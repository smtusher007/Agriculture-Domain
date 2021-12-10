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
					<td><input type="text" id="name" name="name" value=""></td>
				</tr>
				<tr>
					<td>Email:</td>
					<td><input type="email" id="emaiemaill" name="email" value=""></td>
				</tr>
				<tr>
					<td>UserName:</td>
					<td><input type="text" id="username" name="username" value=""></td>
				</tr>
				<tr>
					<td>Password:</td>
					<td><input type="password" id="password" name="password" value=""></td>
				</tr>
				<tr>
					<td>Confirm Password:</td>
					<td><input type="password" id="confirmpassword" name="confirmpassword" value=""></td>
				</tr>
				<tr>
					<td>Gender:</td>
					<td>
						<input type="radio" id="gender" name="gender" value="male">Male
						<input type="radio" id="gender" name="gender" value="female">Female
						<input type="radio" id="gender" name="gender" value="other">Other
					</td>
				</tr>
				<tr>
					<td>Date of Birth:</td>
					<td><input type="date" id="date" name="date" value=""></td>
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
	<script type="text/javascript">
		function ajax(){
	let name = document.getElementById('name').value;
	let email = document.getElementById('email').value;
	let username = document.getElementById('username').value;
	let password = document.getElementById('password').value;
	let gender = document.getElementById('gender').value;
	let date = document.getElementById('date').value;

	let xhttp = new XMLHttpRequest();
	xhttp.open('POST', '../Controller/RegistrationCheck.php', false);
	xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xhttp.send('name='+name);
	xhttp.send('email='+email);
	xhttp.send('username='+username);
	xhttp.send('password='+password);
	xhttp.send('gender='+gender);
	xhttp.send('date='+date);
	
}
	</script>
</body>
</html>