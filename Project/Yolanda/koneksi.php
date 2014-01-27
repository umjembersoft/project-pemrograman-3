<?php
$host = "localhost"; #host for your database
$user = "root"; #username database
$pswd = ""; #password database
$db = "mahasiswa"; #nama database
$con = mysql_connect($host, $user, $pswd); #for do connection to host
if (!$con){ #jika koneksi gagal maka munculkan pesan error
echo "Koneksi Gagal Karena ".mysql_error();
}
else{ #kebalikannya (jika koneksi berhasil maka lakukan pemilhan database)
mysql_select_db($db);
date_default_timezone_set("Asia/Jakarta"); #untuk settingan default time zone (zona waktu yang di pakai)
}


?>
