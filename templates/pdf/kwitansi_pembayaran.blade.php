<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<table>
		<tr>
			<td>
				<table  border="" width="100%">
					<tr>
						<td style="width: 50px;"">
							<img src="{{ dirname(__DIR__).'/www/assets/pages/img/kopkar.jpg' }}" style="width: 70px">
						</td>
						<td style="width: 410px; text-align: left;">
							<img src="{{ dirname(__DIR__).'/www/img/sagara-logo.jpg' }}" style="width: 200px;">
						</td>
						<td>
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
					<tr>
						<td style="padding-right: 300px; padding-top: 10px">Koperasi:</td>
						<td style="padding-right: 300px; padding-top: 10px">To:</td><td></td>
					</tr>
					<tr>
						<td><b>KOPERASI KARYAWAN SAGARA</b></td>
						<td><b><?php echo $model_user['first_name']; ?></b></td>
					</tr>
					<tr>
						<td>Alamat: Rukan Buncit Mas 108 </td>
						<td>NIK : <?php echo $model_user['nik']; ?></td>
					</tr>
					<tr>
						<td>Phone: 021 982 789</td>
						<td>Phone: <?php echo $model_user['mobile_phone']; ?></td>
					</tr>
					<tr>
						<td>Email : halo@sagara.id</td>
						<td>Email : <?php echo $model_user['email']; ?></td>
					</tr>
					<tr >
						<td style="height: 100px !important"></td>
						<td></td>
					</tr>
					<tr>
						<td >Sisa Kredit :</td>
						<td>Untuk Pembayaran:</td>
					</tr>
					<tr>
						<td><b><?php echo 'Rp. '.number_format($data_pinjaman['credit'],2,',','.'); ?></b></td>
						<td><?php echo $data_pinjaman['ket']; ?></td>
					</tr>
					<tr>
						<td>Status : <b><?php echo $data_pinjaman['status']; ?></b> </td>
						<td ><b>Jumlah Bayar :</b> IDR <?php echo number_format($model_pembayaran['jumlah_pembayaran'],2,',','.');; ?></td>
					</tr>
					<tr>
						<td>&nbsp;</td>
						<td style="text-align: center; height: 40px">Petugas</td>
						<td>&nbsp;</td>
					</tr>
					<tr>
						<td>&nbsp;</td>
						<td  style="text-align: center; height: 120px">(<?php echo($session); ?>)</td>
						<td>&nbsp;</td>
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