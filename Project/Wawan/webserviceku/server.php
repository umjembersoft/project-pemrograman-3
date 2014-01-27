<?php

require_once('nusoap/lib/nusoap.php');
$server = new soap_server;

#registrasi method 'search'
$server->register('search');

#detail method 'search' dengan parameter $key
function search($key)
{
     #koneksi ke database
     mysql_connect('localhost', 'root', '');
     mysql_select_db('ws'); #nama database

     #query pencarian data mahasiswa
     $query = "SELECT * FROM mhs WHERE nim = '$key' OR nama LIKE '%$key%' OR alamat LIKE '%$key%'";
     $hasil = mysql_query($query);
     while ($data = mysql_fetch_array($hasil))
     {
          #menyimpan data hasil pencarian dalam array
          $result[] = array('nim' => $data['nim'], 'nama' => $data['nama'], 'alamat' => $data['alamat'],
		  'nohp'=>$data['nohp'],'fakultas'=>$data['fakultas'],'jurusan'=>$data['jurusan']);
     }
     #mereturn array hasil pencarian
     return $result;
}

$HTTP_RAW_POST_DATA = isset($HTTP_RAW_POST_DATA) ? $HTTP_RAW_POST_DATA : '';
$server->service($HTTP_RAW_POST_DATA);
?>
