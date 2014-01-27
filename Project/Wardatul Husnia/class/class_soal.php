<?php
class Soal
{
	public $array_soal;
	public $array_jawaban;
	
	public function soal()
	{
		$this->array_soal = array("Apa bahasa inggrisnya Ayam",
							"Berapa hasil dari 5 dibagi 2 (dalam angka)",
							"Berapa hari dalam seminggu (dalam angka)",
							"Berapa bulan dalam setahun (dalam angka)"
							);

		$this->array_jawaban = array("Chicken",
								"2",
								"7",
								"12"
								);
	}

}
?>