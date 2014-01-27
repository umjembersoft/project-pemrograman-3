<?php

require_once('../nusoap/lib/nusoap.php');
$server = new soap_server;


// registrasi method 'search'
$server->register('search');


// detail method 'search' dengan parameter $key
function search($key)
{
     // koneksi ke database
     mysql_connect('localhost', 'root', '');
     mysql_select_db('buku');

     // query pencarian data mahasiswa
     $query = "SELECT * FROM buku WHERE noBuku = '$key' OR namaBuku LIKE '%$key%' OR harga LIKE '%$key%'";
     $hasil = mysql_query($query);
     while ($data = mysql_fetch_array($hasil))
     {
          // menyimpan data hasil pencarian dalam array
          $result[] = array('noBuku' => $data['noBuku'], 'namaBuku' => $data['namaBuku'], 'harga' => $data['harga']);
     }
     // mereturn array hasil pencarian
     return $result;
}



$HTTP_RAW_POST_DATA = isset($HTTP_RAW_POST_DATA) ? $HTTP_RAW_POST_DATA : '';
$server->service($HTTP_RAW_POST_DATA);
?>