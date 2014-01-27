<?php

require_once('nusoap/lib/nusoap.php');
$server = new soap_server;

// registrasi method 'search'
$server->register('search');

// detail method 'search' dengan parameter $key
function search($key)
{
     // koneksi ke database
     mysql_connect('localhost', 'root', '');
     mysql_select_db('film');

     // query pencarian data mahasiswa
     $query = "SELECT * FROM film WHERE idfilm = '$key' OR namafilm LIKE '%$key%' OR produser LIKE '%$key%'";
     $hasil = mysql_query($query);
     while ($data = mysql_fetch_array($hasil))
     {
          // menyimpan data hasil pencarian dalam array
          $result[] = array('idfilm' => $data['idfilm'], 'namafilm' => $data['namafilm'], 'produser' => $data['produser']);
     }
     // mereturn array hasil pencarian
     return $result;
}
function insert ($idfilm, $namafilm, $produser){
	mysql_connect ("localhost", "root", "");
	mysql_select_db("film");
	mysql_query("INSERT INTO film (idfilm, namafilm, produser) VALUES ('". $idfilm . "','" . $namafilm . "','" . $produser ."')");
	return "Succeed";
}
$HTTP_RAW_POST_DATA = isset($HTTP_RAW_POST_DATA) ? $HTTP_RAW_POST_DATA : '';
$server->service($HTTP_RAW_POST_DATA);
?>
