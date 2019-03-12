<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<table>
		<tr>
			<td>
				<table border="" width="100%">
					<tr>
						<td style="width: 50px;"">
							<img src="{{ dirname(__DIR__).'/www/assets/pages/img/kopkar.jpg' }}" style="width: 70px">
						</td>
						<td style="width: 410px; text-align: left;">
							<img src="{{ dirname(__DIR__).'/www/img/sagara-logo.jpg' }}" style="width: 200px;">
						</td>

						<td></td>
						<td colspan="5">
							<?php 
								$bulan = array(
			                    '01' => 'Januari',
			                    '02' => 'Febuari', 
			                    '03' => 'Maret',
			                    '04' => 'April',
			                    '05' => 'Mei',
			                    '06' => 'Juni',
			                    '07' => 'Juli',
			                    '08' => 'Agustus',
			                    '09' => 'September',
			                    '10' => 'Oktober',
			                    '11' => 'Nopember',
			                    '12' => 'Desember',
			                	) ; 
			                	$hari = array(
									'Sun' => 'Minggu',
									'Mon' => 'Senin',
									'Tue' => 'Selasa',
									'Wed' => 'Rabu',
									'Thu' => 'Kamis',
									'Fri' => 'Jumat',
									'Sat' => 'Sabtu'
								);

			                	$day = date('D');
			                	$date = date('d');
			                	$month = date('m');
			                	$year = date('Y');
			                ?>
							Tanggal Transaksi : <?php echo $hari[$day].", ".$date." ".$bulan[$month]." ".$year; ?>
						</td>
					</tr>
				</table>
			</td>
		</tr>
		<tr>
			<td>
				<table border="" style="border: 1px solid black; border-collapse:">
					<tr >
						<td  style="padding-right: 100px; padding-top: 10px">Koperasi:</td>
						<td></td>
						<td></td>
						<td></td>
						<td colspan="5" style="padding-right: 100px; padding-top: 10px">To:</td>
					</tr>
					<tr>
						<td ><b>KOPERASI KARYAWAN SAGARA</b></td>
						<td></td>
						<td></td>
						<td></td>
						<td  colspan="5" ><b><?php echo $model_user['first_name']; ?></b></td>
					</tr>
					<tr>
						<td>Alamat: Rukan Buncit Mas 108 </td>
						<td></td>
						<td></td>
						<td></td>
						<td colspan="5">NIK : <?php echo $model_user['nik']; ?></td>
					</tr>
					<tr>
						<td>Phone: 021 982 789</td>
						<td></td>
						<td></td>
						<td></td>
						<td colspan="5">Phone: <?php echo $model_user['mobile_phone']; ?></td>
					</tr>
					<tr>
						<td>Email : halo@sagara.id</td>
						<td></td>
						<td></td>
						<td></td>
						<td colspan="5">Email : <?php echo $model_user['email']; ?></td>
					</tr>
					<tr >
						<td style="height: 100px !important"></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
					</tr>
					<tr>
						<td >Jumlah Kredit :</td>
						<td>&nbsp;</td>
						<td>Tenor :</td>
						<td>&nbsp;</td>
						<td>Biaya Adm Perbulan :</td>
						<td>&nbsp;</td>
						<td>Angsuran :</td>
						<td>&nbsp;</td>
						<td>Untuk Pinjaman:</td>
					</tr>
					<tr>
						<td><b><?php echo 'Rp. '.number_format($data_pinjaman['credit'],2,',','.'); ?></b></td>
						<td>&nbsp;</td>
						<?php if($data_pinjaman['tenor']=='01') :?>
							<td><?php echo('6') ?> Bulan</td>
						<?php elseif($data_pinjaman['tenor']=='02'):?>
							<td><?php echo('12') ?> Bulan</td>
						<?php elseif($data_pinjaman['tenor']=='03'): ?>
							<td><?php echo('18') ?> Bulan</td>
						<?php elseif($data_pinjaman['tenor']=='04'): ?>
							<td><?php echo('24') ?> Bulan</td>
						<?php elseif($data_pinjaman['tenor']=='05'): ?>
							<td><?php echo('36') ?> Bulan</td>
						<?php elseif($data_pinjaman['tenor']=='06'): ?>
							<td><?php echo('48') ?> Bulan</td>
						<?php endif ?>
						<td>&nbsp;</td>
						<td><?php echo 'Rp. '.number_format($data_pinjaman['biaya_adm'],2,',','.'); ?></td>
						<td></td>
						<td><?php echo 'Rp. '.number_format($data_pinjaman['angsuran'],2,',','.'); ?></td>
						<td>&nbsp;</td>

						<td><?php echo $data_pinjaman['ket']; ?></td>
					</tr>
					<tr>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td colspan="5" ><b>Jumlah Pinjam :</b> IDR <b><?php echo number_format($model_pinjaman['jumlah_pinjam'],2,',','.');; ?></b></td>
					</tr>
					<tr>
						<td>&nbsp;</td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>

						<td  style="text-align: center; height: 40px">Petugas</td>
					</tr>
					<tr>
						<td>&nbsp;</td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>
						<td></td>

						<td  style="text-align: center; height: 120px">(<?php echo($session); ?>)</td>
					</tr>
				</table>
			</td>
		</tr>
		<!-- <tr>
			<td>
				<table border="1">
					<tr>
						<td>&nbsp;</td>
						<td>&nbsp;</td>
						<td  style="text-align: right; height: 120px">(<?php echo($session); ?>)</td>
					</tr>
				</table>
			</td>
		</tr> -->
	</table>

</body>
</html>