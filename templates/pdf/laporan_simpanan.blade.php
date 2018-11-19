<!DOCTYPE html>
<html>
<head>
	<title>Laporan Pinjaman</title>
</head>
<?php 
	$bulan = array(
	                '1' => 'Januari',
                    '2' => 'Febuari', 
                    '3' => 'Maret',
                    '4' => 'April',
                    '5' => 'Mei',
                    '6' => 'Juni',
                    '7' => 'Juli',
                    '8' => 'Agustus',
                    '9' => 'September',
                    '10' => 'Oktober',
                    '11' => 'Nopember',
                    '12' => 'Desember',
	        );
	$hari = array(
					'Sun' => 'Minggu',
					'Mon' => 'Senin',
					'Tue' => 'Selasa',
					'Wed' => 'Rabu',
					'Thu' => 'Kamis',
					'Fri' => 'Jumat',
					'Sat' => 'Sabtu'
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
			Jakarta, <?php echo $hari[date('D')].' '.date('d').' '.(ucwords(strtolower($bulan[date('m')]))).' '.date('Y') ?> <br>
			Mengetahui <br><br><br><br><br>
			Ketua Koperasi
		</p>
	</div>
	
</body>
</html>