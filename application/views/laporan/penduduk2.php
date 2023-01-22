<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Penduduk</title>
	<link rel="stylesheet" href="<?php echo base_url('assets/vendor/bootstrap/css/bootstrap.min.css')?>">
	<script>window.print()</script>
</head>
<body>
<?php
    $header = base_url('assets/c.png');
    echo "<center><img src='".$header."' width=100%></center>" ?>

        <u><h2 align="center">LAPORAN DATA PENDUDUK</h2></u>

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
		<th>tempat lahir</th>
		<td><?php echo $data['tempat_lahir']?></td>
	</tr>
	<tr>
		<th>tanggal lahir</th>
		<td><?php echo $data['tanggal_lahir']?></td>
	</tr>
	<tr>
		<th>jenis kelamin</th>
		<td><?php echo $data['jenis_kelamin']?></td>
	</tr>
	<tr>
		<th>alamat</th>
		<td><?php echo $data['alamat']?></td>
	</tr>
	<tr>
		<th>agama</th>
		<td><?php echo $data['agama']?></td>
	</tr>
	<tr>
		<th>pekerjaan</th>
		<td><?php echo $data['pekerjaan']?></td>
	</tr>
	<tr>
		<th>status</th>
		<td><?php echo $data['status']?></td>
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