<!DOCTYPE html>
<html>
<head>
	<title>CETAK MAHASISWA UAD</title>
</head>
<body>

	<center>

		<h2>MAHASISWA UAD AKTIF</h2>
		<h4>uad.ac.id</h4>

	</center>

	<?php 
	include 'koneksi.php';
	?>

	<table border="1" style="width: 100%">
		<tr>
			<th width="1%">No</th>
			<th>NIM</th>
			<th>Nama</th>
            <th>JENIS KELAMIN</th>
            <th>ALAMAT</th>
			<th width="5%">TGL LAHIR</th>
		</tr>
		<?php 
		$no = 1;
		$sql = mysqli_query($con, "SELECT * from mahasiswa");
		while($data = mysqli_fetch_array($sql)){
		?>
		<tr>
			<td><?php echo $no++; ?></td>
			<td><?php echo $data['nim']; ?></td>
			<td><?php echo $data['nama']; ?></td>
			<td><?php echo $data['jkelamin']; ?></td>
            <td><?php echo $data['alamat']; ?></td>
            <td><?php echo $data['tgl_lahir']; ?></td>
		</tr>
		<?php 
		}
		?>
	</table>

    <script>
		window.print();
	</script>

</body>
</html>