<?php
	include "koneksi.php";
	
	$nama=$_POST['nama'];
	$password=$_POST['password'];
	$email=$_POST['email'];
	$no_hp=$_POST['no'];
	

 
if($nama == ""){
	header("location:register.php?nama=kosong");
}elseif($password == ""){
header("location:register.php?nama=kosong");
}elseif($email == ""){
header("location:register.php?nama=kosong");
}elseif($no_hp == ""){
header("location:register.php?nama=kosong");
}
else{
	$sql="INSERT INTO log(nama,password,email,no_hp)
		VALUE('$nama','$password','$email','$no_hp')";
		if(mysqli_query($connect, $sql)){
		echo "Record berhasil ditambahkan";
		header('location:index.php');
	}
	else{
		echo "Record gagal ditambahkan <br>" . mysqli_error($connect);
		header('location:register.php');
	}
	
	mysqli_close($connect);
}	
		
	
?>
