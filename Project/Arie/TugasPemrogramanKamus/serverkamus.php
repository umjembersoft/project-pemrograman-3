<?php
function KamuskuInfo($kamusid)
{
	mysql_connect("localhost","root","");
	mysql_select_db("translite");
	$result = mysql_query("select * from kamuskecil where Abjad = '".$kamusid."'");
	$index = 0;
	while($data=mysql_fetch_array($result)){
		$infokamus=array
		(
		"Abjad"=>$data['Abjad'],
		"B_Indonesia"=>$data['B_Indonesia'],
		"B_Inggris"=>$data['B_Inggris'],
		"JumlahKata"=>$data['JumlahKata'],
		);

	}
	mysql_close();
	return $infokamus;
}
    require("lib/nusoap.php");
	$server=new soap_server();
	$server->configureWSDL("DataKamus","urn:DataKamusService");
	$server->wsdl->addComplexType(
	"infokamus",
	"complexType",
	"struct",
	"all",
	"",
	array(
		"Abjad"=>array("name"=>"Abjad","type"=>"xsd:string"),
		"B_Indonesia"=>array("name"=>"B_Indonesia","type"=>"xsd:string"),
		"B_Inggris"=>array("name"=>"B_Inggris","type"=>"xsd:string"),
		"JumlahKata"=>array("name"=>"JumlahKata","type"=>"xsd:string"),)
	);

	$server->register("KamuskuInfo",array("kamusid"=>"xsd:string"),
	array("return"=>"tns:infokamus"),"urn:DataKamusService","urn:DataKamusService#KamuskuInfo");

	$HTTP_RAW_POST_DATA=isset($HTTP_RAW_POST_DATA)?$HTTP_RAW_POST_DATA:'';
	$server->service($HTTP_RAW_POST_DATA);
?>