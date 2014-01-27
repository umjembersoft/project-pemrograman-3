<?php
function RamalanZodiakInfo($ramalid)
{
	mysql_connect("localhost","root","");
	mysql_select_db("zodiak");
	$result = mysql_query("select * from ramalan where nama_zodiak = '".$ramalid."'");
	$index = 0;
	while($data=mysql_fetch_array($result)){
		$inforamal=array
		(
		"nama_zodiak"=>$data['nama_zodiak'],
		"tanggal"=>$data['tanggal'],
		"ramalan"=>$data['ramalan'],
		"keuangan"=>$data['keuangan'],
		"kesehatan"=>$data['kesehatan'],
		"angka_keberuntungan"=>$data['angka_keberuntungan']
		);
		
	}
	mysql_close();
	return $inforamal;
}
    require("lib/nusoap.php");
	$server=new soap_server();
	$server->configureWSDL("Ramalan","urn:RamalanService");
	$server->wsdl->addComplexType(
	"inforamal",
	"complexType",
	"struct",
	"all",
	"",
	array(
		"nama_zodiak"=>array("name"=>"nama_zodiak","type"=>"xsd:string"),
		"tanggal"=>array("name"=>"tanggal","type"=>"xsd:string"),
		"ramalan"=>array("name"=>"ramalan","type"=>"xsd:string"),
		"keuangan"=>array("name"=>"keuangan","type"=>"xsd:string"),
		"kesehatan"=>array("name"=>"kesehatan","type"=>"xsd:string"),
		"angka_keberuntungan"=>array("name"=>"angka_keberuntungan","type"=>"xsd:string"))
	);
		
	$server->register("RamalanZodiakInfo",array("ramalid"=>"xsd:string"),
	array("return"=>"tns:inforamal"),"urn:RamalanService","urn:RamalanService#RamalanZodiakInfo");
	
	$HTTP_RAW_POST_DATA=isset($HTTP_RAW_POST_DATA)?$HTTP_RAW_POST_DATA:'';
	$server->service($HTTP_RAW_POST_DATA);
?>