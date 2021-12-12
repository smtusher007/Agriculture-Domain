<html>
<head>
	<title>Login</title>
</head>
<body>
	<div style="background-image: url('../Asset/img1.jpg');">
	<form method="post" action="../Controller/LoginCheck.php">
		<fieldset>
			<legend>LogIn</legend>
			<table>
				<script type="text/javascript">
					function validate()
					{
 						let username = document.getElementById("username");
 						let password = document.getElementById("password");
 						if( username.value == "" || password.value=="" )
 						{
  						alert("Please fill the empty field");
  						return false;
						 }
						 else{
						 	return true;
						 }

					}
				</script>
				<tr>
					<td>Username:</td>
					<td><input type="text" id="username" name="username" value=""></td>
				</tr>
				<tr>
					<td>Password:</td>
					<td><input type="password" id="password" name="password" value=""></td>
				</tr>
				<tr>
					<td><input type="checkbox" name="remember" value="">Remember Me</td>
				</tr>
				<tr>
					<td></td>
					<td><input type="submit" name="submit" value="Login" onclick="validate()"></td>
					<td><a href ="../Controller/ForgetPassword.php">Forget Password</a></td>
				</tr>
				<tr>
					<td><a href ="Registration.php">Registration</a></td>
				</tr>
			</table>
		</fieldset>
	</form>
	<script type="text/javascript">
		function ajax(){
	let username = document.getElementById('username').value;
	let password = document.getElementById('password').value;

	let xhttp = new XMLHttpRequest();
	xhttp.open('POST', '../Controller/LoginCheck.php', false);
	xhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xhttp.send('username='+username);
	xhttp.send('password='+password);
	
}
	</script>
</body>
</html>