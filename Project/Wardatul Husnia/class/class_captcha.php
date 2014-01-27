<?php
require_once "lib/nusoap.php";
require_once "class/class_soal.php";

class Captcha extends Soal
{
	private $soal;
	private $jawaban;
	private $captcha_soal;
	private $captcha_jawaban;
	private $cnt;
	
	function __construct()
	{
		parent:: Soal();
		$this->cnt = rand(0, count($this->array_soal)-1);
		$this->soal = $this->array_soal;
		$this->jawaban = $this->array_jawaban;
	}
	
	function setCaptcha()
	{
		$_SESSION['captcha_soal'] = $this->soal[$this->cnt];
		$_SESSION['captcha_jawaban'] = $this->jawaban[$this->cnt];
		
		return true;
	}
	
	function getCaptcha()
	{	
		$this->captcha_soal = $_SESSION['captcha_soal'];
		$this->captcha_jawaban = $_SESSION['captcha_jawaban'];
		
		$captcha['soal'] = $this->captcha_soal;
		$captcha['jawaban'] = $this->captcha_jawaban;
		
		return $captcha;
	}
	
	function indexCaptcha($jawaban)
	{
		$this->getCaptcha();
		
		if(strtolower($jawaban)!=strtolower($this->captcha_jawaban)) {	
			return false;
		} else {
			unset($_SESSION['captcha_soal']);
			unset($_SESSION['captcha_jawaban']);
			
			return true;
		}
	}
	
}
?>