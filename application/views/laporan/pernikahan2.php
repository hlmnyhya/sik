<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>PERNIKAHAN</title>
	<link rel="stylesheet" href="<?php echo base_url('assets/vendor/bootstrap/css/bootstrap.min.css')?>">
	<script>window.print()</script>
</head>
<body>
<?php
    $header = base_url('assets/c.png');
    echo "<center><img src='".$header."' width=100%></center>" ?>
        <u><h2 align="center">LAPORAN DATA PERNIKAHAN</h2></u>

<table class="table">
<tbody>
	<tr>
		<th>nama_suami</th>
		<td><?php echo $data['suami']?></td>
	</tr>
	<tr>
		<th>nama istri</th>
		<td><?php echo $data['istri']?></td>
	</tr>

	<tr>
		<th>tanggal</th>
		<td><?php echo $data['tanggal']?></td>
	</tr>

	<tr>
		<th>keterangan</th>
		<td><?php echo $data['keterangan']?></td>
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