<?php 
//koneksi
$koneksi=new mysqli("10.0.0.68","admin","Tanyaoni123_","gas")
 ?>
<?php
switch($_GET['item']){
case "strix";
$id = 1;
break;
case "ladies";
$id = 11;
break;
case "ht";
$id = 12;
break;
case "ht2";
$id = 13;
break;
case "ht3";
$id = 14;
break;
case "ht4";
$id = 15;
break;
case "ht5";
$id = 16;
break;
case "l1";
$id = 2;
break;
case "l2";
$id = 21;
break;
case "l3";
$id = 22;
break;
case "l4";
$id = 23;
break;
case "l5";
$id = 24;
break;
case "l6";
$id = 25;
break;
case "l7";
$id = 26;
break;
case "l8";
$id = 27;
break;
case "m1";
$id = 3;
break;
case "m2";
$id = 31;
break;
case "m3";
$id = 32;
break;
case "m4";
$id = 33;
break;
case "m5";
$id = 34;
break;
case "m6";
$id = 35;
break;
case "m7";
$id = 36;
break;
case "m8";
$id = 37;
break;
case "k1";
$id = 41;
break;
case "k2";
$id = 42;
break;
case "k3";
$id = 43;
break;
case "k4";
$id = 44;
break;
case "k5";
$id = 45;
break;
case "k6";
$id = 46;
break;
case "k7";
$id = 47;
break;
case "k8";
$id = 48;
break;
case "r1";
$id = 51;
break;
case "r2";
$id = 52;
break;
case "r3";
$id = 53;
break;
case "r4";
$id = 54;
break;
case "r5";
$id = 55;
break;
case "r6";
$id = 56;
break;
case "r7";
$id = 57;
break;
case "r8";
$id = 58;
break;

}
  ?>
  <!DOCTYPE html>
<html>
<head>
	<title>Tugas Besar</title>
	<link rel="stylesheet" type="text/css" href="styleBeranda.css">
</head>
<body background="bg.png">
<table border="0" width="100%" cellpadding="0" cellspacing="0" bgcolor="">
	<tr>
		<td height="5">
			<table border="0" background="bg.png">
				<tr>
					<td width="30%"></td>
					<td><func class="a b" ><strong>Prii Computer |</strong></td>
					<td><font face="arial" size="4">&nbsp;</td></font>
					<td><func class="a b" >&nbsp;<img src="krj.png" height="11" align="bottom"><a href="ad.php">Beranda</a></td>
					<td><func class="a b" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="bendera indonesia.jpg" height="11" align="bottom"><a href="#">Indonesia</a></td>
					<td><func class="a b" >&nbsp;&nbsp;<img src="cs.png" height="11" align="bottom">
						<a href="contactus.php">Contact us</a></td>
						<td><func class="a b" >&nbsp;&nbsp;<img src="ab.jpg" height="11" align="bottom">
						<a href="aboutus.php">About us</a></td>					<td><func class="a b" >&nbsp;&nbsp;<img src="ac.jpg" height="11" align="bottom"><a href="homeuser.php">My Account</a></td>
						<td><func class="a b" >&nbsp;&nbsp;<img src="login.png" height="11" align="bottom">
						<a href="sessionLogout.php">Logout</a></td>
				</tr>
			</table>
		</td>
	</tr>
	
<tr>
		<td background="bg.png"><img src="banner.png" width="100%" height="70"></td>
	</tr>
	<tr><h2 align="center">DATA PEMBELIAN</h2></tr>
	<tr><table class="table table-bordered" border="0" align="center" background="pri.png">
	<thead>
		
	</thead>
	<tbody>
		<?php $ambil=$koneksi->query("SELECT * FROM item where id='$id' ") ;?>
		<?php while($pecah=$ambil->fetch_assoc()){ ;?>
		<table border="	0" width="	20%" align="center">	
			<tr>
				<th width="200px" height="50" align="center">ID Barang :</th>
				<td align="center	" width="200px"><?php echo $pecah['id']; ?></td>
			</tr>
			<tr>
				<th width="200px" height="50" align="center">Nama Barang :</th>
				<td align="center	" width="	200px"><?php echo $pecah['nama']; ?></td>
			</tr>
			<tr>
				<th width=200px height="50" align="center">Harga Barang :</th>
				<td align="center" width="	200px"><?php echo "Rp. ".$pecah['harga']; ?></td>
			</tr>
			<tr><td colspan="3" align="center"><a href="formUpload.php"><font color="red"> Lanjut?</font></td></a></tr>
		</table>
		
	
	<?php } ?>
	</tbody>
</table></tr>
	<tr valign="top">
		<td><img src="banner.png" width="100%" height="70"></td>
	</tr>
<tr>
	<td><img src="tagline.jpg" width="100%" height="70"></td>
</tr>
<tr>
	<td><img src="legit.jpg" width="100%" height="70"></td>
</tr>

<tr>	
<td>	
<table>	
	<tr>
		<td width="	130"></td>
		<td class="content" style="border-radius: 5px"><a href="ram.html"><input type="image"  src="ram.png" width="	250" height="260"></a></td>
		<td width="	7">	</td>
		<td class="content" style="border-radius: 5px"><a href="mouse.html"><input type="image" src="mouse.jpg" width="	250" height="260"></a></td>
		<td width="	7">	</td>
		<td class="content" style="border-radius: 5px"><a href="ram.html"><input type="image" src="ssd.jpg" width="	250" height="260"></a></td>
		<td width="	7">	</td>
		<td class="content" style="border-radius: 5px"><a href="ketboard.html"><input type="image" src="keyboard.jpeg" width="	250" height="260"></a></td>
	</tr>
</table>




