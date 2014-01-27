<?php

function tambah($nilai1, $nilai2) {
    return $nilai1 + $nilai2;
}

function kali($nilai1, $nilai2) {
    return $nilai1 * $nilai2;
}

function bagi($nilai1, $nilai2) {
    return $nilai1 / $nilai2;
}

function kurang($nilai1, $nilai2) {
    return $nilai1 - $nilai2;
}

require_once('nusoap/lib/nusoap.php');

$server = new nusoap_server(); //membuat contoh server
// Initialize WSDL support
$server->configureWSDL('kalkulator', 'urn:kalkulator'); //menginisialisasi dukungan WSDL
// Register the method to expose
$server->register('tambah', // method nama
        array('nilai1' => 'xsd:int', 'nilai2' => 'xsd:int'), array('return' => 'xsd:int'), 'urn:kalkulator', 'urn:kalkulator#tambah');
$server->register('kurang', // method nama
        array('nilai1' => 'xsd:int', 'nilai2' => 'xsd:int'), array('return' => 'xsd:int'), 'urn:kalkulator', 'urn:kalkulator#kurang');
$server->register('bagi', // method nama
        array('nilai1' => 'xsd:int', 'nilai2' => 'xsd:int'), array('return' => 'xsd:int'), 'urn:kalkulator', 'urn:kalkulator#bagi');
$server->register('kali', // method nama
        array('nilai1' => 'xsd:int', 'nilai2' => 'xsd:int'), array('return' => 'xsd:int'), 'urn:kalkulator', 'urn:kalkulator#kali');

$HTTP_RAW_POST_DATA = isset($HTTP_RAW_POST_DATA) ? $HTTP_RAW_POST_DATA : '';
$server->service($HTTP_RAW_POST_DATA);
?>
