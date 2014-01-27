<?php
require_once("lib/nusoap.php");
?>

<html>
<center><p><head><tittle><td><b>Data Jumlah Penduduk Propinsi di Indonesia </p></b></tittle></head></td></center>
<center><img src='indonesia.jpg' alt='nama alternatif gambar' width='300' height='180'></center>
<body border ='1' bgcolor='white' >

	<center>
        <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
	<table border=0  width="25%">
	<td>
	<tr>
	<td><p>Masukan Nama Provinsi:</td></p>
	<td><input type="text" name="prop_id"></td>
	</tr>
	</td>
	</center>
	</table>
	<center><p><input type="submit"  name="submit"  value="Cari "></p></center>
	</form>

<?php
$url="http://localhost/TugasRijalWS/serverPenduduk.php";
if (isset($_POST['submit']))
{
	$client=new soapclient($url);
	$result=$client->call('pendudukinfo',
	array("pendudukid"=>$_POST['prop_id']));
	$err=$client->getError();
	if ($err)
	{
		echo "<p><b>ERROR ! ".$client->getError()."</p></b>";
	}
	else
	{
		if ($result!=null)
		{
			echo "<p><b>Berdasarkan dari Nama Provinsi yang di cari  :</p></b>";
			echo "<p>

			<b>Prop_Kode</b> : ".$result['prop_kode']."<br>
			<b>Prop_Nama</b> : ".$result['prop_nama']."<br>
			<b>Prop_Ibukota</b> : ".$result['prop_ibukota']."<br>
                        <b>Prop_Jml_penduduk_pria</b> : ".$result['prop_jml_penduduk_pria']."<br>
			<b>Prop_Jml_penduduk_wanita</b> : ".$result['prop_jml_penduduk_wanita']."<br>
			<b>Prop_Website</b> : ".$result['prop_website']."<br>
			<b>Prop_Map_latitude</b> : ".$result['prop_map_latitude']."<br>
                        <b>Prop_Map_longitude</b> : ".$result['prop_map_longitude']."</p>";
		}
		else
		{
			echo "<p><b>Nama Provinsi yang di cari tidak di temukan</b></p>";

		}

	}
	echo '<h2>Request</h2>';
	echo '<pre>'  . htmlspecialchars($client->request, ENT_QUOTES) . '</pre>';
	echo '<h2>Response</h2>';
	echo '<pre>'  . htmlspecialchars($client->response, ENT_QUOTES) . '</pre>';

}
?>
</body>
</html>
