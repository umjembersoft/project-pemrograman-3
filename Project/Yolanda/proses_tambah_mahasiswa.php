<?php
/**function datamahasiswa($mahasiswaid)
{
    mysql_connect("localhost","root","");
    mysql_select_db("mahasiswa");
    $result = mysql_query("insert into tambah_mahasiswa_baru where id = '".$mahasiswaid."'");
	$index = 0;
}
**/
include("koneksi.php"); #memanggil file koneksi.php

$id_mahasiswa = $_POST['id_mahasiswa']; #mendapatkan data id_mahasiswa dari form sebelumya
$nm_mahasiswa = $_POST['nama_mahasiswa']; #mendapatkan data nm_mahasiswa dari form sebelumya
$jurusan = $_POST['jurusan_mahasiswa']; #mendapatkan data nm_mahasiswa dari form sebelumya
$kelamin = $_POST['jenis_kelamin']; #mendapatkan data j_kelamin dari form sebelumya
$lahir = $_POST['tanggal_lahir_mahasiswa']; #mendapatkan data tanggal, bulan, dan tahun dari form sebelumya
/**if (empty($id_mahasiswa)){ #jika id_mahasiswa kosong maka munculkan pesan error
echo "ID Mahasiswa Harus Di Isi <a href='javascript:history.back()'>BACK</a>";
exit(); #akhiri semua script cukup sampai disini
}
if (empty($nm_mahasiswa)){ #jika nm_mahasiswa kosong maka munculkan pesan error
echo "Nama Mahasiswa Harus Di Isi <a href='javascript:history.back()'>BACK</a>";
exit(); #akhiri semua script cukup sampai disini
}
##############################Proses Pengecekkan ID Mahasiswa... sudah ada apa belum??#############################
//$sql = mysql_query("select * from mahasiswa where id='$id_mahasiswa'"); #query sql -> select berdasarkan idnya
//$hasil = mysql_num_rows($sql); #mendapatkan jumlah data yang ada berdasarkan $sql di atas
//if ($hasil > 0){ #jika hasilnya di atas 0 maka id tersebut sudah di gunakan mahasiswa lainnya
//echo "Maaf id <b>$id_mahasiswa</b> sudah di gunakan oleh mahasiswa lain <a href='javascript:history.back()'>BACK</a>"; #munculkan message
//exit(); #akhiri semua script cukup sampai disini
//}
###################################################################################################################

############################Proses Pemasukan data mahasiswa ke tabel mahasiswa#####################################
**/
$sql = "insert into tambah_mahasiswa_baru(id_mahasiswa, nama_mahasiswa, jurusan_mahasiswa, jenis_kelamin, tanggal_lahir_mahasiswa) values('$id_mahasiswa', '$nm_mahasiswa', '$jurusan', '$kelamin', '$lahir')";
if (mysql_query($sql)){ #jika proses query $sql di atas berhasil maka munculkan pesan berhasil
echo "Proses Pemasukan Data Mahasiswa Baru Berhasil dengan Nama : <b>$nm_mahasiswa</b> dan ID : <b>$id_mahasiswa</b>
<br><a href='semua_mahasiswa.php'>Lihat Semua Mahasiswa</a> <a href='tambah_mahasiswa.php'>Tambah_Mahasiswa_Baru</a>";
}
else{ #kebalikanya (jika proses query $sql gagal maka munculkan pesan gagal
echo "Proses Pemasukan Data Mahasiswa Baru Gagal <a href='javascript:history.back()'>BACK</a>";
}
###################################################################################################################
?>
