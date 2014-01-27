<?php
require_once("lib/nusoap.php");
?>

<html>
<center><p><head><tittle><td><b>KamusKecilku </p></b></tittle></head></td></center>
<center><img src='kamus.jpg' alt='nama alternatif gambar' width='300' height='180'></center>
<body border ='1' bgcolor='white' >

	<center>
        <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
	<table border=0  width="25%">
	<td>
	<tr>
	<td><p>Isikan Kata Kunci :</td></p>
	<td><input type="text" name="Abjad"></td>
	</tr>
	</td>
	</center>
	</table>
	<center><p><input type="submit"  name="submit"  value="Cari Kata"></p></center>
	</form>

<?php
$url="http://localhost/TugasPemrogramanKamus/serverkamus.php";
if (isset($_POST['submit']))
{
	$client=new soapclient($url);
	$result=$client->call('KamuskuInfo',
	array("kamusid"=>$_POST['Abjad']));
	$err=$client->getError();
	if ($err)
	{
		echo "<p><b>ERROR ! ".$client->getError()."</p></b>";
	}
	else
	{
		if ($result!=null)
		{
			echo "<p><b>Kata Abjad yang di cari Adalah  :</p></b>";
			echo "<p>

			<b>Abjad</b> : ".$result['Abjad']."<br>
			<b>B_Indonesia</b> : ".$result['B_Indonesia']."<br>
			<b>B_Inggris</b> : ".$result['B_Inggris']."<br>
			<b>JumlahKata</b> : ".$result['JumlahKata']."</p>";
		}
		else
		{
			echo "<p><b>Kata Yang di Cari Tidak di Temukan</b></p>";

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
