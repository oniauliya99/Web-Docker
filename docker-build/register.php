<!DOCTYPE html>
<html>
<head>
	
	<style type="text/css">
		body{
			margin: 0;
			padding: 0;
			background: url(pri.jpg);
			background-size: cover;
			height: 100vh;
			background-position: center;
			font-family: sans-serif;
		}
		.loginbox{
			width: 320px;
			height: 420px;
			background: url(pri.jpg) width=20 ;
			color: #fff;
			top: 50%;
			left: 50%;
			position: absolute;
			transform: translate(-50%,-50%);
			box-sizing: border-box;
			padding: 80px 30px;
			border-radius: 20px;
		}
		.avatar{
			width: 100px;
			height: 100px;
			border-radius: 50%;
			position: absolute;
			top: -50px;
			left: calc(50% - 50px);
		}

		h1{
			color: black;
			margin: 0;
			padding: 0 0 20px;
			text-align: center;
			font-size: 22px;
		}

		.loginbox p{
			color: black;
			margin: 0;
			padding: 0;
			font-weight: bold;
		}

		.loginbox input{
			font-color:black;
			width: 100%;
			margin-bottom: 20px;
		}

		.loginbox input[type="text"], input[type="password"]{
			border: none;
			color: black;
			border-bottom: 1px solid #fff;
			background: transparent;
			outline: none;
			height: 40px;
			color: black;
			font-size: 16px;
		}
		.loginbox input[type="submit"]{
			border: none;
			color: black;
			outline: none;
			height: 40px;
			background: grey;
			color: black;
			font-size: 18px;
			border-radius: 20px;
		}
		.loginbox input[type="submit"]:hover{
			cursor: pointer;
			color: black;
			background: #00FFFF;
			color: black;
		}
		.loginbox a{
			color: black;
			text-decoration: none;
			font-size: 12px;
			line-height: 20px;
			color: black;

		}
		#here{
			color: black;
			text-decoration: none;
			font-size: 12px;
			line-height: 20px;
			color: blue;
			font-style: bold;
		}
		#here:hover{
			color: blue;
		}
		.loginbox a: hover{
			color: blue;
		}
	</style>		
	<body>

		<header>
		</header>
		<div class="loginbox">
			<img src="ac.png" class="avatar">
			<h1>Register Now</h1>
			<form action="insertProses.php" method="post">
				<p>Username</p>
				<input type="text" name="nama" placeholder="Username">
				<p>Password</p>
				<input type="password" name="password" placeholder="Enter Password">
				<p>E-mail</p>
				<input type="text" name="email" placeholder="Your E-mail">
				<p>No hp</p>
				<input type="text" name="no" placeholder="NoHP">
				<input type="submit" name="Login" value="Confirm">
				<a><font color="black">Have an account?</font> <a href="loginq.php" id="here"><font color="black"><b>Login</b></font></a></a>
			</form>
		</div>
		<?php 
	if(isset($_GET['nama'])){
		if($_GET['nama'] == "kosong"){
			echo "<h1 style='color:red'>Data yang dimasukkan Harus Lengkap !</h1>";
		}
	}
	elseif(isset($_GET['password'])){
		if($_GET['password'] == "kosong"){
			echo "<h1 style='color:red'>Data yang dimasukkan Harus Lengkap !</h1>";
		}
	} 
	elseif(isset($_GET['email'])){
		if($_GET['email'] == "kosong"){
			echo "<h1 style='color:red'>Data yang dimasukkan Harus Lengkap !</h1>";
		}
	}
	?>
	</head>
</body>

</html>