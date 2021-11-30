<h2>Data Produk</h2>
<table class="table table-bordered" border="1">
	<thead>
		<tr>
			<th>no</th>
			<th>nama</th>
			<th>harga</th>
			<th>berat</th>
			<th>foto</th>
			<th>aksi</th>
		</tr>
	</thead>
	<tbody>
		<?php $nomor=1; ?>
		<?php $ambil=$koneksi->query("SELECT * FROM produk") ;?>
		<?php while($pecah=$ambil->fetch_assoc()){ ;?>
		<tr>
			<td><?php echo $nomor; ?></td>
			<td><?php echo $pecah['nama_produk']; ?></td>
			<td><?php echo $pecah['harga_produk']; ?></td>
			<td><?php echo $pecah['berat']; ?></td>
			<td><?php echo $pecah['foto_produk']; ?></td>
			<td>
				<a href="" class="btn-danger btn">hapus</a>
				<a href="" class="btn btn-warning">ubah</a>
			</td>
		</tr>
		<?php $nomor++; ?>
	<?php } ?>
	</tbody>
</table>
<a href="index.php?halaman=tambahproduk" class="btn btn-primary">Tambah Data</a>