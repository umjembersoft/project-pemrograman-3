<?php
include("koneksi.php"); #memanggil file koneksi.php
?>
<html>
<head>
<title>Daftar Semua Mahasiswa</title>
</head>
<body>
<center>
<a href='index.php'>Beranda</a> <a href='tambah_mahasiswa.php'>Tambahkan Mahasiswa Baru</a>
<table border='1'>
	<tr>
		<td bgcolor='yellow' style='width:30px' align='center'>No</td>
		<td bgcolor='yellow' style='width:200px' align='center'>ID Mahasiswa</td>
		<td bgcolor='yellow' style='width:200px' align='center'>Nama Mahasiswa</td>
		<td bgcolor='yellow' style='width:200px' align='center'>Jurusan Mahasiswa</td>
		<td bgcolor='yellow' style='width:100px' align='center'>Jenis Kelamin</td>
		<td bgcolor='yellow' style='width:150px' align='center'>Tanggal Lahir</td>
		<td bgcolor='yellow' style='width:80px' align='center'>Action</td>
	</tr>
	<?PHP
	$sql = mysql_query("insert into tambah_mahasiswa_baru"); #mengambil semua data mahasiswa dari tabel mahasiswa
	$no = 1; #nomor awal
	while($data = mysql_fetch_array($sql)){ #ketika data tabel mahasiswa di array kan maka lakukan perulangan hingga mahasiswa terakhir
	$id_mahasiswa = $data['id_mahasiswa']; #dapatkan id mahasiswa dari data array (row) 'id'
	$nm_mahasiswa = $data['nama_mahasiswa']; #dapatkan nama mahasiswa dari data array (row) 'nama'
	$jurusan = $data['jurusan_mahasiswa']; #dapatkan jurusan mahasiswa dari data array (row) 'jurusan'
	$kelamin = $data['jenis_kelamin']; #dapatkan kelamin mahasiswa dari data array (row) 'kelamin'
	$lahir = $data['tanggal_lahir_mahasiswa']; #dapatkan kelamin mahasiswa dari data array (row) 'lahir'
	echo "
	<tr>
		<td align='center'>$no</td>
		<td align='center'>$id_mahasiswa</td>
		<td align='center'>$nm_mahasiswa</td>
		<td align='center'>$jurusan</td>
		<td align='center'>$kelamin</td>
		<td align='center'>$lahir</td>
		<td align='center'><a href='ubah_mahasiswa.php?id=$id_mahasiswa'>Ubah</a> <a href='hapus_mahasiswa.php?id=$id_mahasiswa'>Hapus</a></td>
	</tr>
	"; #muculkan semua data mahasiswa dalam bentuk tabel
	$no++; #$no bertambah 1
	}
	?>
</table>
</center>
</body>
</html>
