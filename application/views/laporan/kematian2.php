<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>KEMATIAN</title>
	<link rel="stylesheet" href="<?php echo base_url('assets/vendor/bootstrap/css/bootstrap.min.css')?>">
	<script>window.print()</script>
</head>
<body>
<?php
    $header = base_url('assets/c.png');
    echo "<center><img src='".$header."' width=100%></center>" ?>
        <u><h2 align="center">LAPORAN DATA KEMATIAN</h2></u>

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
		<th>tanggal kematian</th>
		<td><?php echo $data['tanggal_kematian']?></td>
	</tr>

	<tr>
		<th>jam kematian</th>
		<td><?php echo $data['jam_kematian']?></td>
	</tr>

	<tr>
		<th>sebab kematian</th>
		<td><?php echo $data['sebab_kematian']?></td>
	</tr>

	<tr>
		<th>tempat kematian</th>
		<td><?php echo $data['tempat_kematian']?></td>
	</tr>

	<tr>
		<th>yang menerangkan</th>
		<td><?php echo $data['yang_menerangkan']?></td>
	</tr>
	<tr>
		<th>nama pelapor</th>
		<td><?php echo $data['nama_pelapor']?></td>
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