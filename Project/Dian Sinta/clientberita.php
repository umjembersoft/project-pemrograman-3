<?php
require_once('lib/nusoap.php');

?>
<html>
<center><img src='http://www.sabah.gov.my/md.bln/imej/berita.jpg' alt='nama alternatif gambar' width='180' height='180'></center>
<center><p><head><tittle><td><b>Info Berita  </p></b></tittle></head></td></center>
<body>
	<center>
	<form action="<?php $_SERVER['PHP_SELF']?>" method="POST">
	<table border=0  width="25%">
	<td>
	<tr>
	<td><p>Masukkan Hari :</p></td>
	<td><input type="text" name="Hari"></td
	</tr>
	</td>
	</center>
	</table>
	<center><p><input type="submit"  name="submit"  value="Klik Berita"></p></center>
	</form>
	
<?php
$url = "http://localhost/Berita/berita.php";
if (isset($_POST['submit']))
{
	$client=new soapclient($url);
	$result=$client->call('BeritaInfo',
	array("beritaid"=>$_POST['Hari']));
	$err=$client->getError();
	if ($err)
	{
		echo "<p><b>ERROR ! ".$client->getError()."</p></b>";
	}
	else 
	{
		if ($result!=null)
		{
			echo "<p><b>Info Berita Yang Anda Cari :</p></b>";
			echo "<p>
			<b>Hari</b> : ".$result['Hari']."<br>
			<b>Tanggal</b> : ".$result['Tanggal']."<br>
			<b>Berita</b> : ".$result['Berita']."<br>
			<b>Penerbit</b> : ".$result['Penerbit']."</p>";
		}
		else 
		{
			echo "<p><b>Berita Tidak Ada</b></p>";
			
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
