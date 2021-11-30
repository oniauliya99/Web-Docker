<?php 	
if (isset($_POST['submit'])) {
	$name =$_POST['name'];
	$email =$_POST['email'];
	$name =$_POST['message'];

	$mailTo="oniauliya99@gmail.com";
	$headers="From :".$email;
	$txt="You have received an email from ".$name."\n\n".$message;
mail($mailTo,$txt,$headers);
echo "TERKIRIM";
 header("Location : contactus.php?mailsend");
} 

 ?>