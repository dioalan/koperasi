<!DOCTYPE html>
<html>
<head>
	<title>Laporan Pinjaman</title>
</head>
<?php 
	$bulan = array(
	                '01' => 'JANUARI',
	                '02' => 'FEBRUARI',
	                '03' => 'MARET',
	                '04' => 'APRIL',
	                '05' => 'MEI',
	                '06' => 'JUNI',
	                '07' => 'JULI',
	                '08' => 'AGUSTUS',
	                '09' => 'SEPTEMBER',
	                '10' => 'OKTOBER',
	                '11' => 'NOVEMBER',
	                '12' => 'DESEMBER',
	        );
 ?>
<body style="text-align: center;" >
	<p style="text-align: center;"><h1>LAPORAN PINJAMAN</h1></p>
	<table  border="1" width="100%" style="text-align: center;">
		<tr style="background-color: grey">
			<td>NIK</td>
			<td>Jumlah Pinjam</td>
			<td>Tenor</td>
			<td>Biaya Adm</td>
			<td>Keterangan</td>
			<td>Tanggal Transaksi</td>
			<td>Status</td>
		</tr>
		<?php foreach ($model_pinjaman as $key => $value): ?>
			<tr>
				<td><?php echo $value['nik']; ?></td>
				<td style="text-align: left;"> Rp. <?php echo number_format($value['jumlah_pinjam'],2) ; ?></td>
				<?php if ($value['tenor']=='01'): ?>
					<td>6 Bulan</td>
				<?php elseif ($value['tenor']=='02'): ?>
					<td>12 Bulan</td>
				<?php elseif ($value['tenor']=='03'): ?>
					<td>18 Bulan</td>
				<?php elseif ($value['tenor']=='04'): ?>
					<td>24 Bulan</td>
				<?php elseif ($value['tenor']=='05'): ?>
					<td>36 Bulan</td>
				<?php elseif ($value['tenor']=='06'): ?>
					<td>48 Bulan</td>
				<?php endif ?>
				<td>Rp. <?php echo number_format($value['biaya_adm'],2); ?></td>
				<td style="text-align: left;"><?php echo $value['ket']; ?></td>
				<td><?php echo date('d-m-Y', strtotime($value['tanggal'])); ?></td>
				<td><?php echo $value['status']; ?></td>

			</tr>
		<?php endforeach ?>
	</table>
	<div style="width: 100%">
		<p style="text-align: center; float: right;">
			Jakarta, <?php echo date('d').' '.(strtolower($bulan[date('m')])).' '.date('Y') ?> <br>
			Mengetahui <br><br><br><br><br>
			Ketua Koperasi
		</p>
	</div>
	
</body>
</html>