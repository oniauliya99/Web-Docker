	<!DOCTYPE html>
<html>
<head>
	<title>Tugas Besar</title>
	<link rel="stylesheet" type="text/css" href="styleBeranda.css">
</head>
<body background="bg.png">
<table border="0" width="100%" cellpadding="0" cellspacing="0" >
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
						<a href="contactus.php">About us</a></td>
					<td><func class="a b" >&nbsp;&nbsp;<img src="ac.jpg" height="11" align="bottom"><a href="homeuser.php">My Account</a></td>
						<td><func class="a b" >&nbsp;&nbsp;<img src="login.png" height="11" align="bottom">
						<a href="sessionLogout.php">Logout</a></td>
				</tr>
			</table>
		</td>
	</tr>
	<tr>
		<td background="bg.png"><img src="banner.png" width="100%" height="70"></td>
	</tr>
	<tr><h2 align="center">UPLOAD BUKTI TRANSFER</h2></tr>
	<tr>
		<td align="center"><form enctype="multipart/form-data" action="fileUpload.php" method="POST">
	choose a file to uploaad:
	<input name="uploadedfile" type="file"><br><br>
	<input type="submit"  value="Upload File">
	<p>No Rek Mandiri/Bri/Bca: 1931710119 </p>
	<p><b>CATATAN : Batas waktu 2x24jam</b></p>
	<p><?php 	 
				if(isset($_GET['proses'])){
				echo "<p>Gagal mengupload</p>";
				}
				?></p>
</form></td>
	</tr>

	<tr>
	<td><img src="tagline.jpg" width="100%" height="70"></td>
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
<tr>
<tr bgcolor="black">	
<td>	
<table align="center" width="80%">
<tr>	
<td colspan="4" ><aul class="a b">PEMBAYARAN SANGAT MUDAH DAN AMAN</aul>
	<br><img src="visa.png" width="	60" height="30">
	<img src="	bca.png" width="50" height="30">
	<img src="	mandiri.png" width="50" height="30">
	<img src="	bri.jpg" width="50" height="30">
	</td>
	<td colspan="4" ><aul class="a b">Unduh apl</aul>
	<br><img src="gp.png" width="	60" height="30">
	<img src="	toped.png" width="50" height="30">
	<img src="	sp.jpg" width="50" height="30">
	<img src="	bl.jpg" width="50" height="30">
	</td>
	<td colspan="3" ><aul class="a b">Hubungi kami</aul>
	<br>
	<img src="	fb.png" width="50" height="30">
	<img src="	wa.png" width="50" height="30">
	<img src="	ig.jpg" width="50" height="30">
	</td>
</tr>
	</table>
</td>
</tr>
</body>
</html>
