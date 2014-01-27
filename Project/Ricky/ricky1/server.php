<?php

require_once('nusoap/lib/nusoap.php');
$server = new soap_server;


$server->register('search');


function search($key)
{

     mysql_connect('localhost', 'root', '');
     mysql_select_db('laptop');


     $query = "SELECT * FROM barang WHERE idbarang = '$key' OR namabarang LIKE '%$key%'";
     $hasil = mysql_query($query);
     while ($data = mysql_fetch_array($hasil))
     {

          $result[] = array('idbarang' => $data['idbarang'], 'namabarang' => $data['namabarang'], 'tahunproduksi' => $data['tahunproduksi'],'harga'=>$data['harga'],'type'=>$data['type']);
     }

     return $result;
}

$HTTP_RAW_POST_DATA = isset($HTTP_RAW_POST_DATA) ? $HTTP_RAW_POST_DATA : '';
$server->service($HTTP_RAW_POST_DATA);
?>
