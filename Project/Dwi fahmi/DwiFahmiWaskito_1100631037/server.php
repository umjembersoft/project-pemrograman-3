<?php
function hotelinfo($hotelid)
{
	mysql_connect("localhost","root","");
	mysql_select_db("daftar_kamar_hotel_kosong");
	$result = mysql_query("select * from kamar_hotel where No_Kamar = '".$hotelid."'");
	$index = 0;
	while($data=mysql_fetch_array($result)){
		$infokamar=array
		(
		"No_Kamar"=>$data['No_Kamar'],
		"Nama"=>$data['Nama'],
		"Check_In"=>$data['Check_In'],
		"Check_Out"=>$data['Check_Out'],
		);

	}
	mysql_close();
	return $infokamar;
}
    require("lib/nusoap.php");
	$server=new soap_server();
	$server->configureWSDL("DataKamar","urn:DataKamarService");
	$server->wsdl->addComplexType(
	"infokamar",
	"complexType",
	"struct",
	"all",
	"",
	array(
		"No_Kamar"=>array("name"=>"No_Kamar","type"=>"xsd:string"),
		"Nama"=>array("name"=>"Nama","type"=>"xsd:string"),
		"Check_In"=>array("name"=>"Check_In","type"=>"xsd:string"),
		"Check_Out"=>array("name"=>"Check_Out","type"=>"xsd:string"),)
	);

	$server->register("hotelInfo",array("hotelid"=>"xsd:string"),
	array("return"=>"tns:infokamar"),"urn:DataKamarService","urn:DataKamarService#hotelInfo");

	$HTTP_RAW_POST_DATA=isset($HTTP_RAW_POST_DATA)?$HTTP_RAW_POST_DATA:'';
	$server->service($HTTP_RAW_POST_DATA);
?>