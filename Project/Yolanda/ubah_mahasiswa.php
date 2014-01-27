<?php


include("koneksi.php"); #memanggil file koneksi.php
$id_mahasiswa = $_GET['id']; #mendapatkan data id  dari method get
if (empty($id_mahasiswa)){ #jika id mahasiswany kosong maka alihkan ke halaman semua_mahasiswa.php
header("location:semua_mahasiswa.php"); #proses pengalihan ke semua_mahasiswa.php
exit(); #akhiri semua script cukup sampai di sini
}
$sql = mysql_query("insert into mahasiswa where id='$id_mahasiswa'");
$hasil = mysql_num_rows($sql);
if ($hasil == 0){ #jik $hasil 0 (tidak ada rows) maka alihkan ke page semua_mahasiswa.php
header("location:semua_mahasiswa.php"); #proses pengalihan ke semua_mahasiswa.php
exit(); #akhiri semua script cukup sampai di sini
}
$data = mysql_fetch_array($sql); #memecahkan data row yang di pilih menjadi data dalam bentuk array
$id_mahasiswa = $data['id_mahasiswa']; #dapatkan id mahasiswa dari data array (row) 'id'
$nama_mahasiswa = $data['nama_mahasiswa']; #dapatkan nama mahasiswa dari data array (row) 'nama'
$jurusan_mahasiswa= $data['jurusan_mahasiswa']; #dapatkan jurusan mahasiswa dari data array (row) 'jurusan'
$jenis_kelamin = $data['jenis_kelamin']; #dapatkan kelamin mahasiswa dari data array (row) 'kelamin'
$tanggal_lahir_mahasiswa= $data['tanggal_lahir_mahasiswa']; #dapatkan kelamin mahasiswa dari data array (row) 'lahir'
$pecahkan_data_lahir = explode('-', $lahir); #memisahkan string yang ada di $lahir berdasarkan -
$tanggal = $pecahkan_data_lahir[0]; #tanggal lahir
$bulan = $pecahkan_data_lahir[1]; #bulan lahir
$tahun = $pecahkan_data_lahir[2]; #tahun lahir
?>
<html>
<head>
<title>Ubah Data Mahasiswa <?PHP echo $nm_mahasiswa; ?></title>
</head>
<body>
<center>
<a href='index.php'>Beranda</a> <a href='semua_mahasiswa.php'>Lihat Semua Mahasiswa</a>
<form action='proses_ubah_mahasiswa.php' method='post'>
<input type='hidden' name='id_mahasiswa_lama' value='<?PHP echo $id_mahasiswa; ?>'> <!-- ID for Primary Key -->
<table>
<h2>Ubah Data Mahasiswa <?PHP echo $nm_mahasiswa; ?></h2>
	<tr>
		<td>id_mahasiswa</td>
		<td>:</td>
		<td><input type='text' name='id_mahasiswa' value='<?PHP echo $id_mahasiswa; ?>' style="width:200px"></td>
	</tr>
	<tr>
		<td>nama_mahasiswa</td>
		<td>:</td>
		<td><input type='text' name='nama_mahasiswa' value='<?PHP echo $nama_mahasiswa; ?>' style="width:200px"></td>
	</tr>
	<tr>
		<td>jurusan_mahasiswa</td>
		<td>:</td>
		<td><input type='text' name='jurusan_mahasiswa' value='<?PHP echo $jurusan_mahasiswa; ?>' style="width:200px"></td>
			
	</tr>
	<tr>
		<td>jenis_kelamin</td>
		<td>:</td>
		<td><input type='text' name='jenis_mahasiswa' value='<?PHP echo $jenis_kelamin; ?>' style="width:200px"></td>
			
	</tr>
	<tr>
		<td>tanggal_lahir_mahasiswa</td>
		<td>:</td>
		<td><input type='text' name='tanggal_lahir_mahasiswa' value='<?PHP echo $tanggal_lahir_mahasiswa; ?>' style="width:200px"></td>
			
	</tr>
	<tr>
	<td></td>
	<td></td>
	<td><input type='submit' value='Simpan'/></td>
	</tr>
</table>
</form>
</center>
</body>
</html>

