<?php 	
session_start();
include "koneksi.php";
$aku = $_SESSION['user'];
$pwlama=$_POST['passwordlama'];
$pwbaru=$_POST['passwordbaru'];
$query="SELECT password FROM log WHERE nama='$aku' ";
$rquery=mysqli_query($connect,$query);
$row = mysqli_fetch_array($rquery);
if (empty($_POST['passwordbaru'])) {
header('Location: ubahpasswd.php?page=passwdbarukosong');		
}elseif (empty($_POST['passwordlama'])) {
header('Location: ubahpasswd.php?page=passwdlamakosong');		
}elseif ($row['password'] != $_POST['passwordlama']){
header('Location: ubahpasswd.php?page=tidakcocok');		
}else{
$update="UPDATE log SET password='$pwbaru' WHERE nama='$aku'";
$result=mysqli_query($connect,$update);
header('Location:loginq.php');
}

 ?>
