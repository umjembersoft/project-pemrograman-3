<?php

if ($_POST['button'] == 'Simpan')

{

require("../nusoap/lib/nusoap.php");





$client=new nusoap_client('http://localhost/Tb_Mhs/coba4/ws.php');

$result=$client->call("insertTb",

array("id"=>$_POST['id'],"nm"=>$_POST['nm'],"dsc"=>$_POST['dsc'],"dt"=>$_POST['dt'],"prc"=>$_POST['prc']));

$err=$client->getError();

if($err){

echo "error";

}

header("location:wsclientphp.php");

}

?>

<!--fungsi background-->
 <center> <h2>Tambah Data</h2> </center>
<style type="text/css"> 
body{
  
color:red;   
margin:10px auto;
padding:20px;
width:300px;
border:2px solid #888;
background:url('http://localhost/Tb_Mhs/fileGambar/car.jpg') repeat top left;
}

</style>


<html>

<head></head>

<body>

<form id="form1" name="form1" method="post" action="">

<table width="300" border="1" cellspacing="2" cellpadding="3">

<tr>

<td>No</td>

<td><label>

<input name="id" type="text" id="id" />

</label></td>

</tr>

<tr>

<td>Nama Mobil</td>

<td><label>

<input name="nm" type="text" id="nm" />

</label></td>

</tr>

<tr>

<td>Merk</td>

<td><label>

<input name="dsc" type="text" id="dsc" />

</label></td>

</tr>

<tr>

<td>Tanggal Pembuatan</td>

<td><label>

<input name="dt" type="text" id="dt" />

</label></td>

</tr>

<tr>

<td>Harga</td>

<td><label>

<input name="prc" type="text" id="prc" />

</label></td>

</tr>

<tr>

<td>Aksi</td>

<td><label>

<input name="button" type="submit" id="button" value="Simpan" />

</label></td>

</tr>

</table>

</form>

</body>

</html>
