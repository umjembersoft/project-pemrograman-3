<?php
require_once("lib/nusoap.php");

?>

<html>
<center><p><head><tittle><td><b>Perkiraan Cuaca </p></b></tittle></head></td></center>
<center><img src='cerah.jpg' alt='nama alternatif gambar' width='300' height='180'></center>
<body border ='1' bgcolor='white' >

	<center>
        <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
	<table border=0  width="25%">
	<td>
	<tr>
	<td><p>Isikan lokasi cuaca :</td></p>
	<td><input type="text" name="Lokasi"></td
	</tr>
	</td>
	</center>
	</table>
	<center><p><input type="submit"  name="submit"  value="Klik Perkiraan"></p></center>
	</form>

<?php
$url="http://localhost/TugasWebService/ramal.php";
if (isset($_POST['submit']))
{
	$client=new soapclient($url);
	$result=$client->call('PerkiraanCuacaInfo',
	array("ramalid"=>$_POST['Lokasi']));
	$err=$client->getError();
	if ($err)
	{
		echo "<p><b>ERROR ! ".$client->getError()."</p></b>";
	}
	else
	{
		if ($result!=null)
		{
			echo "<p><b>Perkiraan Cuaca Hari ini dan Esok Hari Untuk Lokasi  :</p></b>";
			echo "<p>

			<b>Lokasi</b> : ".$result['Lokasi']."<br>
			<b>Suhu</b> : ".$result['Suhu']."<br>
			<b>Kelembaban</b> : ".$result['Kelembaban']."<br>
			<b>Cuaca_Hari_Ini</b> : ".$result['Cuaca_Hari_Ini']."<br>
			<b>Cuaca_Esok_Hari</b> : ".$result['Cuaca_Esok_Hari']."</p>";
		}
		else
		{
			echo "<p><b>Perkiraan Cuaca Tidak di Temukan</b></p>";

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
