<!DOCTYPE html>
<html>
<head>
</head>
<body>
	<?php
		session_start();

		if($_SESSION['status'] == 'login'){
			?>
			<br><a href="sessionLogout.php">Log Out</a>
		<?php	
		}else{
			echo "anda belum login. silahkan "?>
			<a href="sessionLoginForm.html">Log In</a>
		<?php	
		}
		?>
</body>
</html>