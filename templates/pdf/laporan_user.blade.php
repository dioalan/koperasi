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
			Jakarta, <?php echo date('d').' '.(strtolower($bulan[date('m')])).' '.date('Y') ?> <br>
			Mengetahui <br><br><br><br><br>
			Ketua Koperasi
		</p>
	</div>
	
</body>
</html>