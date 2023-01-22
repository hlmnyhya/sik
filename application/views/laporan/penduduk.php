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
	<thead>
		<th>No</th>
		<th>NIK</th>
		<th>Nama</th>
		<th>Tempat Lahir</th>
		<th>Tanggal Lahir</th>
		<th>Jenis Kelamin</th>
		<th>Alamat</th>
		<th>Agama</th>
		<th>Pekerjaan</th>
		<th>Status</th>
	</thead>
	<tbody>
	<?php $no=1; foreach($data as $key){ ?>
		<tr>
			<td><?php echo $no++?></td>
			<td><?php echo $key->nik?></td>
			<td><?php echo $key->nama?></td>
			<td><?php echo $key->tempat_lahir?></td>
			<td><?php echo $key->tanggal_lahir?></td>
			<td><?php echo $key->jenis_kelamin?></td>
			<td><?php echo $key->alamat?></td>
			<td><?php echo $key->agama?></td>
			<td><?php echo $key->pekerjaan?></td>
			<td><?php echo $key->status?></td>
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