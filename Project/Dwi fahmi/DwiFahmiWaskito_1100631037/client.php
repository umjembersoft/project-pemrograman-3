<?php
require_once("lib/nusoap.php");
?>

<html>
<center><p><head><tittle>    <marquee  style="font-family:Lucida Handwriting; font-size:22px; color:red;" direction="lift" width="87%">Welcome to Fams Hotel & Resto</marquee></tittle></head></td></center>
<body border ='1' bgcolor='white' >

	<center>
        <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
	<table border=0  width="25%">
	<td>
	<tr>
	<td><p>NOMER KAMAR :</td></p>
	<td><input type="text" name="No_Kamar"></td>
	</tr>
	</td>
	</center>
	</table>
	<center><p><input type="submit"  name="submit"  value="Check"></p></center>
	</form>

<?php
$url="http://localhost/DwiFahmiWaskito_1100631037/server.php";
if (isset($_POST['submit']))
{
	$client=new soapclient($url);
	$result=$client->call('hotelInfo',
	array("hotelid"=>$_POST['No_Kamar']));
	$err=$client->getError();
	if ($err)
	{
		echo "<p><b>ERROR ! ".$client->getError()."</p></b>";
	}
	else
	{
		if ($result!=null)
		{
			echo "<p><b>Kamar Ini  :</p></b>";
			echo "<p>

			<b>No_Kamar</b> : ".$result['No_Kamar']."<br>
			<b>Nama</b> : ".$result['Nama']."<br>
			<b>Check_In</b> : ".$result['Check_In']."<br>
			<b>Check_Out</b> : ".$result['Check_Out']."</p>";
		}
		else
		{
			echo "<p><b>Kamar Tidak di Temukan</b></p>";

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
