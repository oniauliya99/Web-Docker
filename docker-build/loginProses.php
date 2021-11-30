<?php
	include "koneksi.php";
	
$username=$_POST['nama'];	
$password=$_POST['password'];

	$query="SELECT * FROM log WHERE nama='$username' and password='$password'";
	$result=mysqli_query($connect, $query);
	$cek=mysqli_num_rows($result);

	if($cek){
		session_start();
		$_SESSION['status'] = 'login';
		$_SESSION['user'] = $_POST['nama'];

		echo "Anda berhasil Login, silahkan menuju ";
		header('location: ad.php');?>

		<?php
	}else{
		echo "Invalid username or password";
		 header('location: loginq.php?proses=Gagal');?>
		<?php
		echo mysqli_error($connect);
	}
	
	?>

	
