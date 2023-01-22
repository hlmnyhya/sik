<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>RAB</title>
	<link rel="stylesheet" href="<?php echo base_url('assets/vendor/bootstrap/css/bootstrap.min.css')?>">
	<script>window.print()</script>
</head>
<body>
<?php
    $header = base_url('assets/c.png');
    echo "<center><img src='".$header."' width=100%></center>" ?>

        <u><h2 align="center">LAPORAN DATA RANCANGAN ANGGARAN BULANAN</h2></u>

<table class="table">
<tbody>
	<tr>
		<th>bidang</th>
		<td><?php echo $data['bidang']?></td>
	</tr>
	<tr>
		<th>kegiatan</th>
		<td><?php echo $data['kegiatan']?></td>
	</tr>

	<tr>
		<th>waktu pelaksanaan</th>
		<td><?php echo $data['waktu_pelaksanaan']?></td>
	</tr>

	<tr>
		<th>sumber dana</th>
		<td><?php echo $data['sumber_dana']?></td>
	</tr>

	<tr>
		<th>output</th>
		<td><?php echo $data['output']?></td>
	</tr>

	<tr>
		<th>kode</th>
		<td><?php echo $data['kode']?></td>
	</tr>

	<tr>
		<th>jenis belanja</th>
		<td><?php echo $data['jenis_belanja']?></td>
	</tr>

	<tr>
		<th>kategori uraian</th>
		<td><?php echo $data['kategori_uraian']?></td>
	</tr>

	<tr>
		<th>isi uraian</th>
		<td><?php echo $data['isi_uraian']?></td>
	</tr>

	<tr>
		<th>volume</th>
		<td><?php echo $data['volume']?></td>
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