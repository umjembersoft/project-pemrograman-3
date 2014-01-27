<?php
require_once("lib/nusoap.php");

?>
<html>
<center><img src='http://2.bp.blogspot.com/-G9nrUfrjWJk/UjFQzGaB0lI/AAAAAAAAIW4/6wBcWQyw75I/s1600/Ramalan+Zodiak+Hari+Ini.gif' alt='nama alternatif gambar' width='180' height='180'></center>
<center><p><head><tittle><td><b>RAMALAN ZODIAK  </p></b></tittle></head></td></center>
<body>
	<center>
	<form action="<?php $_SERVER['PHP_SELF']?>" method="POST">
	<table border=0  width="25%">
	<td>
	<tr>
	<td><p>Isikan Zodiak Anda </td></p>
	<td><input type="text" name="nama_zodiak"></td
	</tr>
	</td>
	</center>
	</table>
	<center><p><input type="submit"  name="submit"  value="Klik Ramal"></p></center>
	</form>
	
<?php
$url="http://localhost/LatihanHtdocs/Ramalan/ramal.php";
if (isset($_POST['submit']))
{
	$client=new soapclient($url);
	$result=$client->call('RamalanZodiakInfo',
	array("ramalid"=>$_POST['nama_zodiak']));
	$err=$client->getError();
	if ($err)
	{
		echo "<p><b>ERROR ! ".$client->getError()."</p></b>";
	}
	else 
	{
		if ($result!=null)
		{
			echo "<p><b>Ramalan Zodiak Anda Adalah :</p></b>";
			echo "<p>
			<b>Zodiak</b> : ".$result['nama_zodiak']."<br>
			<b>Tanggal</b> : ".$result['tanggal']."<br>
			<b>Ramalan</b> : ".$result['ramalan']."<br>
			<b>Keuangan</b> : ".$result['keuangan']."<br>
			<b>Kesehatan</b> : ".$result['kesehatan']."<br>
			<b>Angka_Keberuntungan</b> : ".$result['angka_keberuntungan']."</p>";
		}
		else 
		{
			echo "<p><b>Ramalan Tidak Ada</b></p>";
			
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
