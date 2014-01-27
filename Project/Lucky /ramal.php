<?php
function PerkiraanCuacaInfo($ramalid)
{
	mysql_connect("localhost","root","");
	mysql_select_db("ramalancuaca");
	$result = mysql_query("select * from cuaca where Lokasi = '".$ramalid."'");
	$index = 0;
	while($data=mysql_fetch_array($result)){
		$infocuaca=array
		(
		"Lokasi"=>$data['Lokasi'],
		"Suhu"=>$data['Suhu'],
		"Kelembaban"=>$data['Kelembaban'],
		"Cuaca_Hari_Ini"=>$data['Cuaca_Hari_Ini'],
		"Cuaca_Esok_Hari"=>$data['Cuaca_Esok_Hari'],
		);

	}
	mysql_close();
	return $infocuaca;
}
    require("lib/nusoap.php");
	$server=new soap_server();
	$server->configureWSDL("Perkiraan","urn:PerkiraanService");
	$server->wsdl->addComplexType(
	"infocuaca",
	"complexType",
	"struct",
	"all",
	"",
	array(
		"Lokasi"=>array("name"=>"Lokasi","type"=>"xsd:string"),
		"Suhu"=>array("name"=>"Suhu","type"=>"xsd:string"),
		"Kelembaban"=>array("name"=>"Kelembaban","type"=>"xsd:string"),
		"Cuaca_Hari_Ini"=>array("name"=>"Cuaca_Hari_Ini","type"=>"xsd:string"),
		"Cuaca_Esok_Hari"=>array("name"=>"Cuaca_Esok_Hari","type"=>"xsd:string"),)
	);

	$server->register("PerkiraanCuacaInfo",array("ramalid"=>"xsd:string"),
	array("return"=>"tns:infocuaca"),"urn:PerkiraanService","urn:PerkiraanService#PerkiraanCuacaInfo");

	$HTTP_RAW_POST_DATA=isset($HTTP_RAW_POST_DATA)?$HTTP_RAW_POST_DATA:'';
	$server->service($HTTP_RAW_POST_DATA);
?>