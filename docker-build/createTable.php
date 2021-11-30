<?php
	$namaHost = "localhost";
	$username = "root";
	$password = "tanyaoni";
	$database = "gas";
	
	$connect = mysqli_connect($namaHost, $username, $password, $database);
	
	if($connect){
		echo "Koneksi dengan MySQL berhasil";
	}
	else{
		echo "Koneksi dengan MYSQL gagal" . mysqli_connect_error();
	}
	
	$sql = "create table log(
			nama varchar(30) not null ,
			password varchar(50) not null,
			email varchar(30),
			no_hp int )";
			
	if (mysqli_query($connect, $sql)){
		echo " Tabel User berhasil dibuat";
	}
	else{
		echo "Tabel User gagal dibuat <br>" . mysqli_error($connect);
	}
	
	mysqli_close($connect);
?>