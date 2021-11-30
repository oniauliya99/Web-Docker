<?php
	session_start();
	session_destroy();

	echo "Anda berhasil logout";
	header('location: index.php');
?>
