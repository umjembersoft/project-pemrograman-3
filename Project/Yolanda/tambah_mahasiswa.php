<html>
<head>
<title>Tambah Mahasiswa Baru</title>
</head>
<body> 
<center>
<a href='index.php'>Beranda</a> <a href='semua_mahasiswa.php'>Lihat Semua Mahasiswa</a>
<form action='proses_tambah_mahasiswa.php' method='post'>
<table>
<h2>Tambah Mahasiswa Baru</h2>
	<tr>
		<td>ID Mahasiswa</td>
		<td>:</td>
		<td><input type='text' name='id_mahasiswa' style="width:200px"></td>
	</tr>
	<tr>
		<td>Nama Mahasiswa</td>
		<td>:</td>
		<td><input type='text' name='nama_mahasiswa' style="width:200px"></td>
	</tr>
	<tr>

                <td>Jurusan Mahasiswa</td>
		<td>:</td>
		<td><input type='text' name='jurusan_mahasiswa' style="width:200px"></td>
	</tr>
	<tr>
		<td>Jenis Kelamin</td>
		<td>:</td>
		<td><input type='text' name='jenis_kelamin' style="width:200px"></td>
	</tr>
	<tr>
		<td>Tanggal Lahir Mahasiswa</td>
		<td>:</td>
		<td><input type='text' name='tanggal_lahir_mahasiswa' style="width:200px"></td>
			
		
	</tr>
	<tr>
	<td></td>
	<td></td>
	<td><input type='submit' value='Tambahkan'/></td>
	</tr>
</table>
</form>
</center>
</body>
</html>