<html>
<head>
	<title>ForgetPassword</title>
</head>
<body>
	<div style="background-image: url('../Asset/img1.jpg');">
		<center>
			<form method="post" action="">
			Enter you email here<br><input type="email" name="email" value=""><br>
			Enter the last password you have entered<br><input type="text" name="forgetpass" value=""><br>
			<input type="submit" name="submit" value="Submit">
			<h4 align="right"><a href = "../View/Login.php">go back</a></h4>
		</form>
	</center>
</body>
</html>
<?php

	if(isset($_POST['submit']))
	{
		$email = $_POST['email'];
		$password = $_POST['forgetpass'];

		if($email != ""){
			if($password != ""){
				$myfile = fopen('../Model/forgetpass.txt', 'a');
						$myuser = $email."|".$password."|"."\r\n";
						fwrite($myfile, $myuser);
						fclose($myfile);


						
						echo "Your reponse has been recored please wait for the email";
						
					}else{
						echo "Email field can not be empty";
					}
				}else{
					echo "Password field can not be empty";
				}



			}
	


?>