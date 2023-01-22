<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>IMB</title>
	<link rel="stylesheet" href="<?php echo base_url('assets/vendor/bootstrap/css/bootstrap.min.css')?>">
	<script>window.print()</script>
</head>
<body>
<?php
    $header = base_url('assets/c.png');
    echo "<center><img src='".$header."' width=100%></center>" ?>
    <u><h2 align="center">LAPORAN DATA IMB</h2></u>
<table class="table">
<tbody>
	<tr>
		<th>nik</th>
		<td><?php echo $data['nik']?></td>
	</tr>
	<tr>
		<th>nama</th>
		<td><?php echo $data['nama']?></td>
	</tr>

	<tr>
		<th>lokasi</th>
		<td><?php echo $data['lokasi']?></td>
	</tr>

	<tr>
		<th>kelurahan</th>
		<td><?php echo $data['kelurahan']?></td>
	</tr>

	<tr>
		<th>kecamatan</th>
		<td><?php echo $data['kecamatan']?></td>
	</tr>

	<tr>
		<th>jenis bangunan</th>
		<td><?php echo $data['jenis_bangunan']?></td>
	</tr>

	<tr>
		<th>jumlah lantai</th>
		<td><?php echo $data['jumlah_lantai']?></td>
	</tr>
	<tr>
		<th>ukuran</th>
		<td><?php echo $data['ukuran']?></td>
	</tr>
	<tr>
		<th>kelengkapan administrasi</th>
		<td><?php echo $data['kelengkapan_administrasi']?></td>
	</tr>
	<tr>
		<th>keterangan</th>
		<td><?php echo $data['ket']?></td>
	</tr>
	<tr>
		<th>tanggal</th>
		<td><?php echo $data['tanggal']?></td>
	</tr>
</tbody>
	
</table>
	<h6 align='right'>
	Pelaihari,   2020<br>Lurah, </h6><br><br><br>
	<h6 align='right'>
	<u>Raisha Dewina Sari, S.IP </u><br>
	NIP. 19930814 201507 2 001
	</h6>
</body>
</html>