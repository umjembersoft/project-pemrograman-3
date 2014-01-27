<?php
include("koneksi.php"); #memanggil file koneksi.php
$id_mahasiswa = $_POST['id_mahasiswa']; #mendapatkan data id_mahasiswa dari form sebelumya
$id_mahasiswa_lama = $_POST['id_mahasiswa_lama'];
$nm_mahasiswa = $_POST['nm_mahasiswa']; #mendapatkan data nm_mahasiswa dari form sebelumya
$jurusan = $_POST['jurusan']; #mendapatkan data nm_mahasiswa dari form sebelumya
$kelamin = $_POST['j_kelamin']; #mendapatkan data j_kelamin dari form sebelumya
$lahir = $_POST['tanggal']."-".$_POST['bulan']."-".$_POST['tahun']; #mendapatkan data tanggal, bulan, dan tahun dari form sebelumya
if (empty($id_mahasiswa)){ #jika id_mahasiswa kosong maka munculkan pesan error
echo "ID Mahasiswa Harus Di Isi <a href='javascript:history.back()'>BACK</a>";
exit(); #akhiri semua script cukup sampai disini
}
if (empty($nm_mahasiswa)){ #jika nm_mahasiswa kosong maka munculkan pesan error
echo "Nama Mahasiswa Harus Di Isi <a href='javascript:history.back()'>BACK</a>";
exit(); #akhiri semua script cukup sampai disini
}
######################################proses pengubahan data#####################################################
$sql = mysql_query("update mahasiswa set id='$id_mahasiswa', nama='$nm_mahasiswa', jurusan='$jurusan', kelamin='$kelamin', lahir='$lahir' where id='$id_mahasiswa_lama'");
if ($sql){
echo "Proses pengubahan data mahasiswa dengan id $id_mahasiswa berhasil <br><a href='semua_mahasiswa.php'>Lihat Semua Mahasiswa</a> <a href='tambah_mahasiswa.php'>Tambah Mahasiswa Baru</a>";
}
else{
echo "Proses Pengubahan Data Mahasiswa Gagal <a href='javascript:history.back()'>BACK</a>";
}
#################################################################################################################


?>
