<?php
function BeritaInfo($beritaid)
{
	mysql_connect("localhost","root","");
	mysql_select_db("berita");
	$result = mysql_query("select * from sumber_berita where Hari = '".$beritaid."'");
	$index = 0;
	while($data = mysql_fetch_array($result)){
		$infoberita = array
		(
		"Hari"=>$data['Hari'],
		"Tanggal"=>$data['Tanggal'],
		"Berita"=>$data['Berita'],
		"Penerbit"=>$data['Penerbit'],
		);
		
	}
	mysql_close();
	return $infoberita;
}
    require("lib/nusoap.php");
	$server=new soap_server();
	$server->configureWSDL("Berita","urn:BeritaService");
	$server->wsdl->addComplexType(
	"infoberita",
	"complexType",
	"struct",
        "all",
	"",
	array(
		"Hari"=>array("name"=>"Hari","type"=>"xsd:string"),
		"Tanggal"=>array("name"=>"Tanggal","type"=>"xsd:string"),
		"Berita"=>array("name"=>"Berita","type"=>"xsd:string"),
		"Penerbit"=>array("name"=>"Penerbit","type"=>"xsd:string"))
	);
		
	$server->register("BeritaInfo",array("beritaid"=>"xsd:string"),
	array("return"=>"tns:infoberita"),"urn:BeritaService","urn:BeritaService#BeritaInfo");
	
	$HTTP_RAW_POST_DATA=isset($HTTP_RAW_POST_DATA)?$HTTP_RAW_POST_DATA:'';
	$server->service($HTTP_RAW_POST_DATA);
?>