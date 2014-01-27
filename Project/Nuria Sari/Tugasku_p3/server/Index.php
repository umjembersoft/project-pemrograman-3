<?php

require_once ('../nusoap/lib/nusoap.php');
$ws_srv = new soap_server;

$ws_srv->register('ambilData');

function tes ($param){
    $nama = $param ('nama');
    $nama = $param ('alamat');
	 $nama = $param ('gelar');
    $return_value[] = array('nama'=>$nama,'alamat'=>$alamat,'gelar'=>$gelar);
        return ($return_value);
        
}

function ambilData(){
    mysql_connect('localhost','root','');
    mysql_select_db('kuliah');
    $sql = mysql_query('SELECT * FROM dosen WHERE 1');
    $return_data_count=mysql_num_rows($sql);
    while ($row=  mysql_fetch_array($sql)){
        $return_data[]=array('id'=>$row['id'],'nama'=>$row['nama'],'alamat'=>$row['alamat'],'gelar'=>$row['gelar']);
        
    }
    $return ['count']=$return_data_count;
    $return ['data']=$return_data;
    return $return;
}

$HTTP_RAW_POST_DATA = isset ($HTTP_RAW_POST_DATA) ? $HTTP_RAW_POST_DATA:'';
$ws_srv-> service($HTTP_RAW_POST_DATA);


?>
