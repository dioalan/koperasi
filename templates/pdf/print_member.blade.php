<!DOCTYPE html>
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
<html>
<head>
	<link rel="stylesheet" type="text/css" href="{{ Theme::base('css/doc.css') }}">
	<style type="text/css">
	body	{

		font-family: Arial, "Helvetica Neue", Helvetica, sans-serif;
	}
	</style>
	<title></title>
</head>
<body>
	<table style="width: 100%; font-size: 8pt" border="">
		<tr>
			<td style="width: 5px;"">
				<img src="{{ dirname(__DIR__).'/www/assets/pages/img/kopkar.jpg' }}" style="width: 70px">
			</td>
			<td style="width: 410px; text-align: left;">
				<img src="{{ dirname(__DIR__).'/www/img/sagara-logo.jpg' }}" style="width: 200px;">
			</td>
		</tr>
		<tr><td></td></tr>
		<tr>
			<td colspan="2">PT Sagara Xinix Solusitama</td>
		</tr>
		<tr>
			<td colspan="2">Adress : Komplek Buncit Mas blok C-03A LT 2 dan 3 
			<br>
			Jln. Mampang Prapatan Raya No.108</td>
			<br>
			Kel. Duren Tiga Kec. Pancoran
		</tr>
		<tr>
			<td colspan="2">Telp : 021-79170400</td>
		</tr>
	</table>
	<br>
	<br>
	<table style="width: 100%; font-weight: bold;">
		<tr><td colspan="2" align="center"><?php echo "FORMULIR ANGGOTA KOPERASI KARYAWAN" ; ?></td></tr>
		<tr><td colspan="2" align="center"><?php echo "PT. SAGARA XINIX SOLUSITAMA"; ?></td></tr>
	</table>
	<br>
	<p  style="padding-left:15px; font-size: 10pt">Bersama ini Anggota dengan data berikut :</p>
	<br>
	<table style="width: 100%; font-size: 10pt" border=""  >
		<tr>
			<td style="text-align: left; padding-left :115px; width: 30%;">Nama</td>
			<td style="padding-left:10px;">: <?php echo $collection['first_name']." ".$collection['last_name']; ?></td>
		</tr>
		<tr>
			<td style="text-align: left; padding-left :115px; width: 30%;">Tanggal Lahir</td>
			<td style="padding-left:10px;">: <?php echo date('d/m/y',strtotime( $collection['birthday']));?></td>
		</tr>
		<tr>
			<td style="text-align: left; padding-left :115px; width: 30%;">Jenis Kelamin</td>
			<?php if($collection['gender']==1): ?>
				<td style="padding-left:10px;">: Laki-laki</td>
			<?php elseif($collection['gender']==2) :?>
				<td style="padding-left:10px;">: Perempuan</td>
			<?php endif ?>
		</tr>
		<tr>
			<td style="text-align: left; padding-left :115px; width: 30%;">Email</td>
			<td style="padding-left:10px;">: <?php echo $collection['email']?></td>
		</tr>
		<tr>
			<td style="text-align: left; padding-left :115px; width: 30%;">No HP</td>
			<td style="padding-left:10px;">: <?php echo $collection['mobile_phone']?></td>
		</tr>
		<tr>
			<td style="text-align: left; padding-left :115px; width: 30%; font-weight: bold">Username</td>
			<td style="padding-left:10px;">: <?php echo $collection['username']?></td>
		</tr>
		<tr>
			<td style="text-align: left; padding-left :115px; width: 30%; font-weight: bold">Password</td>
			<td style="padding-left:10px;">: 123</td>
		</tr>
		<tr>
			<td style="text-align: left; padding-left :115px; width: 30%;">Previlage</td>
			<td style="padding-left:10px;">: Member</td>
		</tr>
	</table>
	<br>
	<p style="font-size: 10pt">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Telah memenuhi permohonan masuk menjadi anggota Koperasi Karyawan PT. Sagara Xinix Solusitama dan bersedia memenuhi ketentuan-ketentuan dan persyaratan yang ada, yaitu :</p>
	<table border="" style="font-size: 10pt">
		<tr>
			<td>1.</td><td>Anggota harus Karyawan PT. Sagara Xinix Solusitama.</td>
		</tr>
		<tr>
			<td>2.</td><td>Membayar Simpanan Wajib saat awal menjadi anggota koperasi sebesar Rp. 100.000.</td>
		</tr>
		<tr>
			<td>3.</td><td>Membayar Simpanan Pokok setiap awal bulan sejak diterima menjadi anggota sebesar Rp. 10.000.</td>
		</tr>
		<tr>
			<td>4.</td><td>Anggota Melakukan login berdasarkan data yang telah tertera.</td>
		</tr>
		<tr>
			<td>5.</td><td>Setelah login Anggota wajib mengganti sandi demi keamanan data anggota.</td>
		</tr>
	</table>
	<br>
	<div style="font-size: 10pt"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Pembayaran Simpanan Pokok melalui bagian keuangan pembayar gaji unit kerja.</div>
	<div style="font-size: 10pt"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Demikian surat ini dibuat untuk keperluan anggota melakukan login di aplikasi Sistem Pengelolaan data koperasi karyawan PT. Sagara Xinix Solusitama.</div>
	<br>
	<div class="row" style="text-align: right; font-size: 10pt">
		Jakarta, <?php echo $hari[date('D')].' '.date('d').' '.(ucwords(strtolower($bulan[date('m')]))).' '.date('Y') ?>
	</div>
	<table border="" width="100%" style="font-size: 10pt">
		<tr>
			<td style="margin: 0px!important; width: 70%; height: 90px"> &nbsp;</td>
			<td style="text-align: center;">Petugas</td>
		</tr>
		<tr>
			<td style="width: 70%;  height: 55px"> &nbsp;</td>
			<td style="text-align: center;"><u><b><?php echo $_SESSION['user']['first_name'].' '. $_SESSION['user']['last_name']; ?></b></u></td>
		</tr>
	</table>
	<!-- <div style="text-align: right;"></div>
	<div style="text-align: right;">/div>
 -->
</body>
</html>