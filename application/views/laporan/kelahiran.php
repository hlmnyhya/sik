<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Kelahiran</title>
	<link rel="stylesheet" href="<?php echo base_url('assets/vendor/bootstrap/css/bootstrap.min.css')?>">
	<script>window.print()</script>
</head>
<body>
<?php
    $header = base_url('assets/c.png');
    echo "<center><img src='".$header."' width=100%></center>" ?>

    <u><h2 align="center">LAPORAN DATA KELAHIRAN</h2></u>

<table class="table">
	<thead>
		
		<th>Nik Wali</th>
		<th>Nama Wali</th>
		<th>NIK Anak</th>
		<th>Nama</th>
		<th>Jenis Kelamin</th>
		<th>Tempat Kepengurusan</th>
		<th>Tempat Dilahirkan</th>
		<th>Tempat Lahir</th>
		<th>Tanggal Lahir</th>
		<th>Jam Lahir</th>
		<th>Jenis Kelahiran</th>
		<th>Kelahiran Ke</th>
		<th>Penolong Kelahiran</th>
		<th>Berat Bayi</th>
		<th>Panjang Bayi</th>
		
	</thead>
	<tbody>
	<?php $no=1; foreach($data as $key){ ?>
		<tr>
			
			<td><?php echo $key->n?></td>
			<td><?php echo $key->na?></td>
			<td><?php echo $key->nik?></td>
			<td><?php echo $key->nama_lengkap_bayi?></td>
			<td><?php echo $key->jenis_kelamin?></td>
			<td><?php echo $key->tempat_kepengurusan?></td>
			<td><?php echo $key->tempat_dilahirkan?></td>
			<td><?php echo $key->tempat_lahir?></td>
			<td><?php echo $key->tanggal_lahir?></td>
			<td><?php echo $key->jam_lahir?></td>
			<td><?php echo $key->jenis_kelahiran?></td>
			<td><?php echo $key->kelahiran_ke?></td>
			<td><?php echo $key->penolong_kelahiran?></td>
			<td><?php echo $key->berat_bayi?></td>
			<td><?php echo $key->panjang_bayi?></td>
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