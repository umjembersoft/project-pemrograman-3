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
     mysql_select_db('motor_trail');

     // query pencarian data mahasiswa
     $query = "SELECT * FROM motor_trail WHERE noRangka = '$key' OR  ccMotor_Trail LIKE '%$key%' OR merkMotor_Trail  LIKE '%$key%'";
     $hasil = mysql_query($query);
     while ($data = mysql_fetch_array($hasil))
     {
          // menyimpan data hasil pencarian dalam array
          $result[] = array('noRangka' => $data['noRangka'], 'ccMotor_Trail' => $data['ccMotor_Trail'], 'merkMotor_Trail' => $data['merkMotor_Trail']);
     }
     // mereturn array hasil pencarian
     return $result;
}



$HTTP_RAW_POST_DATA = isset($HTTP_RAW_POST_DATA) ? $HTTP_RAW_POST_DATA : '';
$server->service($HTTP_RAW_POST_DATA);
?>