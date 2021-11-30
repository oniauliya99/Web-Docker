<?php  
session_start();
$user = $_SESSION['user'];
?>
<?php $ambil=$koneksi->query("SELECT * FROM item where id='$id' ") ;?>
<?php while($pecah=$ambil->fetch_assoc()){ ;?>
	<tr>
		<td align="center"><?php echo $pecah['id']; ?></td>
		<td align="center"><?php echo $pecah['nama']; ?></td>
		<td align="center"><?php echo "Rp. ".$pecah['harga']; ?></td>
		<?php  
	include "koneksi.php";
	$namabrg = $pecah['nama'];
	$harga = $pecah['harga'];
	$sql="INSERT INTO history(nama,nama_brg,harga)
	VALUE('$user','$namabrg','$harga')";
	if(mysqli_query($connect, $sql)){
	echo "Record berhasil ditambahkan";
	?>
	</tr>
	<tr><td colspan="3" align="center"><a href="formUpload.php"><font color="red"> Lanjut?</font></td></a></tr>

<?php } ?>

	?>
	<table border="1" align="center">
		<tr>
			<th width="200px" align="center">Nama Barang</th>
			<th width="200px" align="center">Email Harga</th>
		</tr>
		<?php 
		include "koneksi.php";
		session_start();
		$aku = $_SESSION['user'];
		$query="SELECT * FROM history WHERE nama='$aku' "; 
		$result=mysqli_query($connect, $query);
		if (mysqli_num_rows($result) > 0){
			while($row = mysqli_fetch_array($result)){
				?>
				<tr>
					<td align="center"> <?php echo $row["nama_brg"] ?> </td>
					<td align="center"> <?php echo $row["harga"] ?> </td>
				</tr>
				<?php
			}
		}
		else {
			echo "0 results";
		}
		?>
	</table>