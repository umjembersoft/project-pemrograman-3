<?php

if ($_POST['button'] == 'Save')

{

require("../nusoap/lib/nusoap.php");





$client=new nusoap_client('http://localhost/Tb_Mhs/coba4/ws.php');





$result=$client->call("updateTb",

array("id"=>$_POST['id'],"nm"=>$_POST['nm'],"dsc"=>$_POST['dsc'],"dt"=>$_POST['dt'],"prc"=>$_POST['prc']));

$err=$client->getError();

if($err){

echo "error";

}

header("location:wsclientphp.php");

}

?>
<!--fungsi background -->
<center> <h2>Edit Data</h2> </center>
<style type="text/css"> 
body{
  
color:yellowgreen;   
margin:10px auto;
padding:20px;
width:300px;
border:2px solid #888;
background:url('http://localhost/Tb_Mhs/fileGambar/car1.jpg') repeat top left;
}

</style>


<html>

<head></head>

<body>

<?php

require("../nusoap/lib/nusoap.php");





$client=new nusoap_client('http://localhost/Tb_Mhs/coba4/ws.php');





$result=$client->call("getTb",array());



if($result!=null){

for($i=0;$i<sizeof($result);$i++){

if ($result[$i]['id'] == $_GET['id'])

{

$id = $result[$i]['id'];

$nm = $result[$i]['nm'];

$dsc = $result[$i]['dsc'];

$dt = $result[$i]['dt'];

$prc = $result[$i]['prc'];

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

<td>Nama Mobil</td>

<td><label>

<input name="nm" type="text" id="nm" value="<?php echo $nm; ?>" />

</label></td>

</tr>

<tr>

<td>Merk</td>

<td><label>

<input name="dsc" type="text" id="dsc" value="<?php echo $dsc; ?>" />

</label></td>

</tr>

<tr>

<td>Tanggal</td>

<td><label>

<input name="dt" type="text" id="dt" value="<?php echo $dt; ?>" />

</label></td>

</tr>

<tr>

<td>Harga</td>

<td><label>

<input name="prc" type="text" id="prc" value="<?php echo $prc; ?>" />

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