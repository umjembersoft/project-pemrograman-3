<?php
session_start();
require('lib/nusoap.php');
require_once "class/class_captcha.php";
$ns = "http://localhost/c1/index.php";
$server = new soap_server;
$server->configureWSDL('submit',$ns);
$server->wsdl->SchemaTargetNamespace = $ns;
$server->register('nama', array('username' => 'xsd:string'),
array('return'=>'xsd:string'), $ns);
$server->register('email', array('password' => 'xsd:string'),
array('return'=>'xsd:string'), $ns);
$server->register('pesan', array('password' => 'xsd:string'),
array('return'=>'xsd:string'), $ns);
$captcha = new Captcha();
$captcha->setCaptcha();
$getCaptcha = $captcha->getCaptcha();


?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Captcha Soal</title>
</head>

<body>
<div style="width: 300px;">
<form id="form1" name="form1" method="post" action="index.php">
	<label>Nama :</label><br />
	<input type="text" name="nama" /><br />
	
	<label>Email :</label><br />
	<input type="text" name="email" /><br />
	
	<label>Pesan :</label><br />
	<textarea name="pesan"></textarea><br />
	
	<fieldset><legend>Pertanyaan Keamanan</legend>
		<?php echo $getCaptcha['soal'];?> ?<br />
		<input type="text" name="jawaban" />
	</fieldset><br /><br />
	
	<input type="submit" value="Submit" />
<div style="width: 300px;">
<form id="form2" name="form2" method="post" action="index.php">

<label>jawaban anda:</label><br/>
<?php
session_start();
//require('lib/nusoap.php');
require_once "class/class_captcha.php";
$captcha = new Captcha();

$jawaban = $_POST['jawaban'];
$index = $captcha->indexCaptcha($jawaban);

if($index==false){
	echo "<center>Jawaban yang anda masukan salah<br>
	<a href='index.php'>Ulangi</a>";
} else {
	echo "Nama: $_POST[nama]<br />
	Email: $_POST[email]<br />
	Pesan: $_POST[pesan]<br />";
}
$HTTP_RAW_POST_DATA = isset ($HTTP_RAW_POST_DATA)? $HTTP_RAW_POST_DATA: '';
            $ws_srv->service{$HTTP_RAW_POST_DATA};
?>
</form>
</div>

</body>
</html>
