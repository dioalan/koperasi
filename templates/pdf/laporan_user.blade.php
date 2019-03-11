<!DOCTYPE html>
<html>
<head>
	<title>Laporan Data User</title>
</head>
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
	<p style="text-align: center;"><h1>LAPORAN DAFTAR PENGGUNA </h1></p>
	<table  border="1" width="100%" style="text-align: center;">
		<tr style="background-color: grey">
			<td>NIK</td>
			<td>Nama</td>
			<td>Username</td>
			<td>Email</td>
			
			<td>Gender</td>
			<td>Mobile Phone</td>
			<td>Role</td>
		</tr>
		<?php foreach ($model_user as $key => $value): ?>
			<tr>
				<td><?php echo $value['nik']; ?></td>
				<td><?php echo $value['first_name']; ?></td>
				<td><?php echo $value['username']; ?></td>
				<td><?php echo $value['email']; ?></td>
				<?php if ($value['gender']=='1'): ?>
					<td>Laki-Laki</td>
				<?php elseif ($value['gender']=='2'): ?>
					<td>Perempuan</td>
				<?php endif ?>
				<td><?php echo $value['mobile_phone']; ?></td>
				<?php if ($value['role']['0']=='1'): ?>
					<td>Admin</td>
				<?php elseif ($value['role']['0']=='2'): ?>
					<td>Member</td>
				<?php endif ?>
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