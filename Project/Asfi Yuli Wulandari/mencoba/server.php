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
    mysql_select_db('pemrograman');//umtuk mengkoneksikan kedatabase mhs_webserv
   //query pencarian data mahasiswa
    $query= "SELECT * FROM mhs WHERE nim ='$key' OR nama LIKE '%$key%' OR alamat LIKE '%$key%'";//untuk menampilkan dan memanggil isi dari table mahasiswa
    $hasil = mysql_query($query);
    while ($data = mysql_fetch_array($hasil)){
        //menyimpan data hasil pencarian dalam array
        $result[]=array('nim'=>$data['nim'],'nama'=>$data['nama'],'alamat'=>$data['alamat']);   
    }
    //mereturn array hasil pencarian
    return $result;
}
function insertTb($nim, $nama, $alamat) {
    mysql_connect("localhost", "root", "");
    mysql_select_db("pemrograman");
    mysql_query("INSERT INTO mhs (nim, nama, alamat) VALUES ('" . $nim . "','" . $nama . "','" . $alamat . "')");
    return "Succeed";
}
$HTTP_RAW_POST_DATA = isset ($HTTP_RAW_POST_DATA) ? $HTTP_RAW_POST_DATA:'';
$server->service($HTTP_RAW_POST_DATA);


?>
