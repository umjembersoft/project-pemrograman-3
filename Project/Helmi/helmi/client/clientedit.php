<?php

if ($_POST['button'] == 'Save')

{

require("../nusoap/lib/nusoap.php");





$client=new nusoap_client('http://localhost/helmi/server/server.php');





$result=$client->call("edit",

array("id"=>$_POST['id'],"nama"=>$_POST['nama'],"kategori"=>$_POST['kategori'],"tanggal"=>$_POST['tanggal'],"harga"=>$_POST['harga']));

$err=$client->getError();

if($err){

echo "error";

}

$header = header("location:client.php");

}

?>




<html>

<head></head>

<body>

<?php

require("../nusoap/lib/nusoap.php");





$client=new nusoap_client('http://localhost/helmi/server/server.php');





$result=$client->call("ambil",array());



if($result!=null){

for($i=0;$i<sizeof($result);$i++){

if ($result[$i]['id'] == $_GET['id'])

{

$id = $result[$i]['id'];

$nama = $result[$i]['nama'];

$kategori = $result[$i]['kategori'];

$tanggal = $result[$i]['tanggal'];

$harga = $result[$i]['harga'];

}

}

}

?>

<form id="form1" name="form1" method="post" action="">

<table width="300" border="1" cellspacing="2" cellpadding="3">

<tr>

<td>No</td>

<td><label>

<input name="id" type="text" id="id" value="<?php echo $id; ?>" readonly />

</label></td>

</tr>

<tr>

<td>Nama</td>

<td><label>

<input name="nama" type="text" id="nama" value="<?php echo $nama; ?>" />

</label></td>

</tr>

<tr>

<td>Kategori</td>

<td><label>

<input name="kategori" type="text" id="kategori" value="<?php echo $kategori; ?>" />

</label></td>

</tr>

<tr>

<td>Tanggal</td>

<td><label>

<input name="tanggal" type="text" id="tanggal" value="<?php echo $tanggal; ?>" />

</label></td>

</tr>

<tr>

<td>Harga</td>

<td><label>

<input name="harga" type="text" id="harga" value="<?php echo $harga; ?>" />

</label></td>

</tr>

<tr>

<td>Aksi</td>
    
<td><label>

<input name="button" type="submit" id="button" value="Save" />

</label></td>

</tr>

</table>

</form>

</body>

</html>