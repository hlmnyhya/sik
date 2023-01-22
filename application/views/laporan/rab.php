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
	<thead>
		<th>No</th>
		<th>Bidang</th>
		<th>Kegiatan</th>
		<th>Waktu Pelaksanaan</th>
		<th>Sumber Dana</th>
		<th>Output</th>
		<th>Kode</th>
		<th>Program Kerja</th>
		<th>Jenis Belanja</th>
		<th>Kategori Uraian</th>
		<th>Isi Uraian</th>
		<th>Volume</th>
	</thead>
	<tbody>
	<?php $no=1; foreach($data as $key){ ?>
		<tr>
			<td><?php echo $no++?></td>
			<td><?php echo $key->bidang?></td>
			<td><?php echo $key->kegiatan?></td>
			<td><?php echo $key->waktu_pelaksanaan?></td>
			<td><?php echo $key->sumber_dana?></td>
			<td><?php echo $key->output?></td>
			<td><?php echo $key->kode?></td>
			<td><?php echo $key->proker ?></td>
			<td><?php echo $key->jenis_belanja?></td>
			<td><?php echo $key->kategori_uraian?></td>
			<td><?php echo $key->isi_uraian?></td>
			<td><?php echo $key->volume?></td>
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