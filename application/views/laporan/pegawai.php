<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Pegawai</title>
	<link rel="stylesheet" href="<?php echo base_url('assets/vendor/bootstrap/css/bootstrap.min.css')?>">
	<script>window.print()</script>
</head>
<body>
<?php
    $header = base_url('assets/c.png');
    echo "<center><img src='".$header."' width=100%></center>" ?>

    <u><h2 align="center">LAPORAN DATA PEGAWAI</h2></u>

<table class="table">
	<thead>
		<th>No</th>
		<th>NIP</th>
		<th>Nama</th>
		<th>Jenis Kelamin</th>
		<th>No HP</th>
		<th>Email</th>
		<th>Alamat</th>
		
	</thead>
	<tbody>
	<?php $no=1; foreach($data as $key){ ?>
		<tr>
			<td><?php echo $no++?></td>
			<td><?php echo $key->nip?></td>
			<td><?php echo $key->nama?></td>
			<td><?php echo $key->jenis_kelamin?></td>
			<td><?php echo $key->no_hp?></td>
			<td><?php echo $key->email?></td>
			<td><?php echo $key->alamat?></td>
			
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