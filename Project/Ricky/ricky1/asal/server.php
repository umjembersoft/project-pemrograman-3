<?php
 
// mengincludekan file berisi class nusoap
require_once('nusoap/lib/nusoap.php');
// instansiasi class soap untuk server
$server = new soap_server;
// meregistrasi 'method' untuk proses penjumlahan dengan nama 'jumlahkan' dan 'kurangi'
$server->register('jumlahkan');
$server->register('kurangi');

$server->register('kali');
$server->register('bagi');

 
// detil isi method 'jumlahkan'
function jumlahkan($x, $y) {
return $x + $y;
}
 
// detil isi method 'kurangi'
function kurangi($x, $y) {
return $x - $y;
}

function kali($x, $y) {
return $x * $y;
}

function bagi($x, $y) {
return $x / $y;
}
 
// memberikan response service
$HTTP_RAW_POST_DATA = isset($HTTP_RAW_POST_DATA) ? $HTTP_RAW_POST_DATA : '';
$server->service($HTTP_RAW_POST_DATA);
?>