<?php

if ($_POST['button'] == 'Simpan')

{

require("../nusoap/lib/nusoap.php");





$client=new nusoap_client('http://localhost/sobri/server/server.php');

$result=$client->call("insertTb",

array("id"=>$_POST['id'],"nama"=>$_POST['nama'],"harga"=>$_POST['harga']));

$err=$client->getError();

if($err){

echo "error";

}

header("location:client.php");

}

?>
<center> <h2>Tambah Data</h2> </center>
<!--  fungsi background-->
<style type="text/css"> 
    body{

        color:black;   
        margin:10px auto;
        padding:20px;
        width:800px;
        border:2px solid #888;
        background:url('http://localhost/sobri/gambar/images12.jpg') repeat top left;
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

<td>Nama</td>

<td><label>

<input name="nama" type="text" id="nama" />

</label></td>

</tr>

<tr>

<td>Harga</td>

<td><label>

<input name="harga" type="text" id="harga" />

</label></td>

</tr>

<td>Aksi</td>

<td><label>

<input name="button" type="submit" id="button" value="Simpan" />

</label></td>

</tr>

</table>

</form>

</body>

</html>
