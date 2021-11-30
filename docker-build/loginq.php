<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="styleLogin.css">
	</style>		
	<body>
		<header>
 		<div class="loginbox">
			<img src="ac.png" class="avatar">
			<h1>Login Here</h1>
			<form action="loginProses.php" method="post">
				
				<p>Username</p>
				<input type="text" name="nama" placeholder="Username">
				<p>Password</p>
				<input type="password" name="password" placeholder="Enter Password">
				<input type="submit" name="Login" value="Sign in">
				<?php 	 
				if(isset($_GET['proses'])){
				echo "<p>Invalid username or password</p>";
				}
				?>
				<a><font color="black">Dont have an account?</font> <a href="register.php" id="here" target="_blank"><font color="black"><b>Register</b></font></a></a>

			</form>
		</div>
	</head>

</body>

</html>