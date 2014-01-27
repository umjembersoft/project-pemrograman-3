<?php

if ($_POST['button'] == 'Simpan')

{

require("nusoap/lib/nusoap.php");





$client=new nusoap_client('http://localhost/yunus/server.php');

$result=$client->call("tambah",

array("id"=>$_POST['id'],"nama"=>$_POST['nama'],"kategori"=>$_POST['kategori'],"tanggal"=>$_POST['tanggal'],"harga"=>$_POST['harga']));

$err=$client->getError();

if($err){

echo "error";

}

header("location:client.php");

}

?>



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

<td>Kategori</td>

<td><label>

<input name="kategori" type="text" id="kategori" />

</label></td>

</tr>

<tr>

<td>Tanggal</td>

<td><label>

<input name="tanggal" type="text" id="tanggal" />

</label></td>

</tr>

<tr>

<td>Harga</td>

<td><label>

<input name="harga" type="text" id="harga" />

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
