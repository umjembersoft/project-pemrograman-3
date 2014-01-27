<html>
    <head><title>Kurs Dollar</title></head>
    <body>
        <center>
        <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST">
        <table border=0 width="40%"> 
        <td> 
        <tr>
        <td>Dollar : </td>
        <td><input type="text" name="txtdollar"></td>
        </tr>
        </td>
        </table>
        <input type="submit" name="submit" value="Hitung Kurs">
        </form>
<?php
require("lib/nusoap.php");
$url="http://localhost/Kurs/kurs.php";
if (isset($_POST['submit']))
{
    $client=new soapclient($url);
    $result=$client->call('kurs', array("dollar"=>$_POST['txtdollar']));
    $err=$client->getError();
    if ($err)
    {
        echo "<p><b>ERROR ! ".$client->getError()."</p></b>";
    }
    else
    {
        echo "<p><b>Rupiah : $result</b></p>";
    }
echo '<h2>Request</h2>';
echo  '<pre>' . htmlspecialchars($client->request, ENT_QUOTES) . '</pre>';
echo '<h2>Response</h2>';
echo  '<pre>' . htmlspecialchars($client->response, ENT_QUOTES) . '</pre>'; 
}
?>
        </center>
</body>
</html>
