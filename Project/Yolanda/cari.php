<?php
if (isset($_GET['keywords'])){ #jika value dari keywords ada maka munculkan result untuk keywords tesrsebut
include("koneksi.php"); #memanggil file koneksi.php
$keywords = $_GET['keywords']; #dapatkan data apa yang di cari
$sql_cari = mysql_query("select * from mahasiswa where id like '%$keywords%' or nama like '%$keywords%' or jurusan like '%$keywords%' or kelamin like '%$keywords%' or lahir like '%$keywords%'");
$jumlah_hasil = mysql_num_rows($sql_cari);
echo "<center>
<form action='cari.php'>
<input type='text' name='keywords' value='$keywords' style='width:90%'/><input type='submit' value='Cari'/>
</form>
</center>
"; #form cari
echo "<center><h2>Di Temukan $jumlah_hasil Data Berdasarkan Keywords '$keywords'</h2></center>";
echo "
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
"; #muncukan stucture tabelnya
$no = 1;
while($data = mysql_fetch_array($sql_cari)){
$id_mahasiswa = $data['id']; #dapatkan id mahasiswa dari data array (row) 'id'
$nm_mahasiswa = $data['nama']; #dapatkan nama mahasiswa dari data array (row) 'nama'
$jurusan = $data['jurusan']; #dapatkan jurusan mahasiswa dari data array (row) 'jurusan' 
$kelamin = $data['kelamin']; #dapatkan kelamin mahasiswa dari data array (row) 'kelamin' 
$lahir = $data['lahir']; #dapatkan kelamin mahasiswa dari data array (row) 'lahir'
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
"; #munculkan data dalam bentuk tabel
$no++;
}
}
else{ #jika keywords kosong maka tampilkan form cari
echo "<option>$cari</option>
<title>Cari Mahasiswa</title>
<center>
<form action='cari.php'>
<input type='text' name='keywords' style='width:90%'/><input type='submit' value='Cari'/>
</form>
</center>
"; #tampilan Form Cari
}

?>
