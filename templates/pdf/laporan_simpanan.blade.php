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
	<p style="text-align: center;"><h1>LAPORAN SIMPANAN</h1></p>
	<table  border="1" width="100%" style="text-align: center;">
		<tr style="background-color: grey">
			<td>NIK</td>
			<td>Jumlah Simpanan</td>
			<td>Jenis Simpanan</td>
			<td>Tanggal Transaksi</td>
		</tr>
		<?php foreach ($model_simpanan as $key => $value): ?>
			<tr>
				<td><?php echo $value['nik']; ?></td>
				<td style="text-align: left;"> Rp. <?php echo number_format($value['jumlah'],2) ; ?></td>
				<?php if ($value['jenis']=='1'): ?>
					<td>Wajib</td>
				
				<?php elseif ($value['jenis']=='2'): ?>
					<td>Sukarela</td>
				<?php elseif ($value['jenis']=='3'): ?>
					<td>Qurban</td>
				<?php elseif ($value['jenis']=='4'): ?>
					<td>Umrah</td>
				<?php elseif ($value['jenis']=='5'): ?>
					<td>Haji</td>
				<?php endif ?>

				<td><?php echo date('d-m-Y', strtotime($value['tanggal'])); ?></td>
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