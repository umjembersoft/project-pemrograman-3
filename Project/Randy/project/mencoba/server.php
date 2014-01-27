<?php


require_once ('nusoap/lib/nusoap.php');//untuk membuka file nusoap.php pada folder nusoap
$server = new soap_server;
//registrasi method 'search'
$server->register('search');
//detail method 'search' dengan parameter $key
function search($key)
{
    //koneksi database
    mysql_connect('localhost','root','');//untuk mengkoneksikan ke mySQL
    mysql_select_db('pemograman');//umtuk mengkoneksikan kedatabase mhs_webserv
   //query pencarian data mahasiswa
    $query= "SELECT * FROM mhs WHERE kodeBarang ='$key' OR namaBarang LIKE '%$key%' OR stockBarang LIKE '%$key%'";//untuk menampilkan dan memanggil isi dari table mahasiswa
    $hasil = mysql_query($query);
    while ($data = mysql_fetch_array($hasil)){
        //menyimpan data hasil pencarian dalam array
        $result[]=array('kodeBarang'=>$data['kodeBarang'],'namaBarang'=>$data['namaBarang'],'stockBarang'=>$data['stockBarang']);   
    }
    //mereturn array hasil pencarian
    return $result;
}
function insertTb($kodeBarang, $namaBarang, $stockBarang) {
    mysql_connect("localhost", "root", "");
    mysql_select_db("pemograman");
    mysql_query("INSERT INTO mhs (kodeBarang, namaBarang, stockBarang) VALUES ('" . $kodeBarang . "','" . $namaBarang . "','" . $stockBarang . "')");
    return "Succeed";
}
$HTTP_RAW_POST_DATA = isset ($HTTP_RAW_POST_DATA) ? $HTTP_RAW_POST_DATA:'';
$server->service($HTTP_RAW_POST_DATA);


?>
