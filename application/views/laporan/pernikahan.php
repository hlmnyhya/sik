<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Pernikahan</title>
	<link rel="stylesheet" href="<?php echo base_url('assets/vendor/bootstrap/css/bootstrap.min.css')?>">
	<script>window.print()</script>
</head>
<body>
<?php
    $header = base_url('assets/c.png');
    echo "<center><img src='".$header."' width=100%></center>" ?>
    <u><h2 align="center">LAPORAN DATA PERNIKAHAN</h2></u>

<table class="table">
	<thead>
		<th>No</th>
		<th>Nama Suami</th>
		<th>Nama Istri</th>
		<th>Tanggal</th>
		<th>Keterangan</th>
		
	</thead>
	<tbody>
	<?php $no=1; foreach($data as $key){ ?>
		<tr>
			<td><?php echo $no++?></td>
			<td><?php echo $key->suami?></td>
			<td><?php echo $key->istri?></td>
			<td><?php echo $key->tanggal?></td>
			<td><?php echo $key->keterangan?></td>
			
		</tr>

	<?php } ?>
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