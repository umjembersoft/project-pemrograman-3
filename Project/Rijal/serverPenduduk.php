<?php
function pendudukinfo($pendudukid)
{
	mysql_connect("localhost","root","");
	mysql_select_db("penduduk");
	$result = mysql_query("select * from info_penduduk_propinsi where prop_nama = '".$pendudukid."'");
	$index = 0;
	while($data=mysql_fetch_array($result)){
		$infopenduduk=array
		(
		"prop_kode"=>$data['prop_kode'],
		"prop_nama"=>$data['prop_nama'],
		"prop_ibukota"=>$data['prop_ibukota'],
                "prop_jml_penduduk_pria"=>$data['prop_jml_penduduk_pria'],
		"prop_jml_penduduk_wanita"=>$data['prop_jml_penduduk_wanita'],
		"prop_website"=>$data['prop_website'],
		"prop_map_latitude"=>$data['prop_map_latitude'],
                "prop_map_longitude"=>$data['prop_map_longitude'],
		);

	}
	mysql_close();
	return $infopenduduk;
}
    require("lib/nusoap.php");
	$server=new soap_server();
	$server->configureWSDL("DataPenduduk","urn:DataPendudukService");
	$server->wsdl->addComplexType(
	"infopenduduk",
	"complexType",
	"struct",
	"all",
	"",
	array(
		"prop_kode"=>array("name"=>"prop_kode","type"=>"xsd:string"),
		"prop_nama"=>array("name"=>"prop_nama","type"=>"xsd:string"),
		"prop_ibukota"=>array("name"=>"prop_ibukota","type"=>"xsd:string"),
                "prop_jml_penduduk_pria"=>array("name"=>"prop_jml_penduduk_pria","type"=>"xsd:string"),
		"prop_jml_penduduk_wanita"=>array("name"=>"prop_jml_penduduk_wanita","type"=>"xsd:string"),
		"prop_website"=>array("name"=>"prop_website","type"=>"xsd:string"),
		"prop_map_latitude"=>array("name"=>"prop_map_latitude","type"=>"xsd:string"),
                "prop_map_longitude"=>array("name"=>"prop_map_longitude","type"=>"xsd:string"),
            )
	);

	$server->register("pendudukinfo",array("pendudukid"=>"xsd:string"),
	array("return"=>"tns:infopenduduk"),"urn:DataPendudukService","urn:DataPendudukService#pendudukinfo");

	$HTTP_RAW_POST_DATA=isset($HTTP_RAW_POST_DATA)?$HTTP_RAW_POST_DATA:'';
	$server->service($HTTP_RAW_POST_DATA);
?>