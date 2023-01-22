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
	<thead>
		<th>No</th>
		<th>Nik</th>
		<th>Nama</th>
		<th>Lokasi</th>
		<th>Kelurahan</th>
		<th>Kecamatan</th>
		<th>Jenis Bangunan</th>
		<th>Jumlah Lantai</th>
		<th>Ukuran</th>
		<th>Kelengkapan Administrasi</th>
		<th>Keterangan</th>
		<th>Tanggal</th>
	</thead>
	<tbody>
	<?php $no=1; foreach($data as $key){ ?>
		<tr>
			<td><?php echo $no++?></td>
			<td><?php echo $key->nik?></td>
			<td><?php echo $key->nama?></td>
			<td><?php echo $key->lokasi?></td>
			<td><?php echo $key->kelurahan?></td>
			<td><?php echo $key->kecamatan?></td>
			<td><?php echo $key->jenis_bangunan?></td>
			<td><?php echo $key->jumlah_lantai?></td>
			<td><?php echo $key->ukuran?></td>
			<td><?php echo $key->kelengkapan_administrasi?></td>
			<td><?php echo $key->ket?></td>
			<td><?php echo $key->tanggal?></td>
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