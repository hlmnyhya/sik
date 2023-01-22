<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Kematian</title>
	<link rel="stylesheet" href="<?php echo base_url('assets/vendor/bootstrap/css/bootstrap.min.css')?>">
	<script>window.print()</script>
</head>
<body>
<?php
    $header = base_url('assets/c.png');
    echo "<center><img src='".$header."' width=100%></center>" ?>

    <u><h2 align="center">LAPORAN DATA KEMATIAN</h2></u>

<table class="table">
	<thead>
		<th>No</th>
		<th>Nik</th>
		<th>Nama</th>
		<th>Tanggal Kematian</th>
		<th>Jam Kematian</th>
		<th>Sebab Kematian</th>
		<th>Tempat Kematian</th>
		<th>Yang Menerangkan</th>
		<th>Nama Pelapor</th>
		
	</thead>
	<tbody>
	<?php $no=1; foreach($data as $key){ ?>
		<tr>
			<td><?php echo $no++?></td>
			<td><?php echo $key->nik?></td>
			<td><?php echo $key->nama?></td>
			<td><?php echo $key->tanggal_kematian?></td>
			<td><?php echo $key->jam_kematian?></td>
			<td><?php echo $key->sebab_kematian?></td>
			<td><?php echo $key->tempat_kematian?></td>
			<td><?php echo $key->yang_menerangkan?></td>
			<td><?php echo $key->nama_pelapor?></td>
			
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