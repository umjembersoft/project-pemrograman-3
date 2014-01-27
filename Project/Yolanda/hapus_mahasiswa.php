<?php

include("koneksi.php"); #memanggil file koneksi.php
$id_mahasiswa = $_GET['id']; #mendapatkan data id  dari method get
if (empty($id_mahasiswa)){ #jika id mahasiswany kosong maka alihkan ke halaman semua_mahasiswa.php
header("location:semua_mahasiswa.php"); #proses pengalihan ke semua_mahasiswa.php
exit(); #akhiri semua script cukup sampai di sini
}
$sql = mysql_query("select * from mahasiswa where id='$id_mahasiswa'");
$hasil = mysql_num_rows($sql);
if ($hasil == 0){ #jik $hasil 0 (tidak ada rows) maka munculkan pesan error
echo "Maaf Mahasiswa Dengan ID <b>$id_mahasiswa</b> Tidak Ada Di Database";
exit(); #akhiri semua script cukup sampai di sini
}
$sql_hapus = mysql_query("delete from mahasiswa where id='$id_mahasiswa'"); #perintah sql untuk menghapus data yang ada di tabel mahasiswa dengan id $id_mahasiswa
if ($sql_hapus){ #jika sql_hapus berhasil di jalankan maka munculkan sukses menghapus data
echo "berhasil Menghapus Mahasiswa dengan id <b>$id_mahasiswa</b> <br><a href='semua_mahasiswa.php'>Lihat Semua Mahasiswa</a> <a href='tambah_mahasiswa.php'>Tambah Mahasiswa Baru</a>";
}
else{
echo "Gagal menghapus data mahasiswa dengan id <b>$id_mahasiswa</b> Karena ".mysql_error;
}

?>
