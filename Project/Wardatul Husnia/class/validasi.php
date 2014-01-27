<?php
	//<form id="form2" name="form2" method="post" action="index.php">
session_start();
//require('lib/nusoap.php');
require_once "class/class_captcha.php";
$captcha = new Captcha();

$jawaban = $_POST['jawaban'];
$validasi= $captcha->validasiCaptcha($jawaban);
if($index==false){
	echo "<center>Jawaban yang anda masukan salah<br>
	<a href='index.php'>Ulangi</a>";
} else {
	echo "Nama: $_POST[nama]<br />
	Email: $_POST[email]<br />
	Pesan: $_POST[pesan]<br />";
}
?>