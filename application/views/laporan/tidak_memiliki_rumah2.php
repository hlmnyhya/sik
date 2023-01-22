<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>TIDAK MEMILIKI RUMAH</title>
	<link rel="stylesheet" href="<?php echo base_url('assets/vendor/bootstrap/css/bootstrap.min.css') ?>">
	<script>
		window.print()
	</script>
</head>

<body>
	<?php
	$header = base_url('assets/c.png');
	echo "<center><img src='" . $header . "' width=100%></center>" ?>

	<u>
		<h2 align="center">LAPORAN DATA TIDAK MEMILIKI RUMAH</h2>
	</u>

	<table class="table">
		<tbody>
			<tr>
				<th>nik</th>
				<td><?php echo $data['nik'] ?></td>
			</tr>
			<tr>
				<th>nama</th>
				<td><?php echo $data['nama'] ?></td>
			</tr>

			<tr>
				<th>ket rt</th>
				<td><?php echo $data['ket_rt'] ?></td>
			</tr>

			<tr>
				<th>no surat pengantar rt</th>
				<td><?php echo $data['no_surat_pengantar_rt'] ?></td>
			</tr>

			<tr>
				<th>keperluan</th>
				<td><?php echo $data['keperluan'] ?></td>
			</tr>


			<tr>
				<th>tanggal</th>
				<td><?php echo $data['tanggal'] ?></td>
			</tr>
		</tbody>

	</table>
	<h6 align='right'>
		Pelaihari, 2020<br>Lurah, </h6><br><br><br>
	<h6 align='right'>
		<u>Raisha Dewina Sari, S.IP </u><br>
		NIP. 19930814 201507 2 001
	</h6>
</body>

</html>