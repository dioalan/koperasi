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
			Jakarta, <?php echo $hari[date('D')].' '.date('d').' '.(ucwords(strtolower($bulan[date('m')]))).' '.date('Y') ?> <br>
			Mengetahui <br><br><br><br><br>
			Ketua Koperasi
		</p>
	</div>
	
</body>
</html>