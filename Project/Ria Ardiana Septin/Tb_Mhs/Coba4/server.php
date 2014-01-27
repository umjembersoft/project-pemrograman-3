<?php

function getTb(){

mysql_connect("localhost","root","");

mysql_select_db("tb");


$result=mysql_query("SELECT * FROM tb");


$index=0;

while ($data=mysql_fetch_array($result)){

$tblist[$index]=array(

"id"=>$data['id'],

"nm"=>$data['nm'],

"dsc"=>$data['dsc'],

"dt"=>$data['dt'],

"prc"=>$data['prc']

);

$index++;

}


mysql_close();

return $tblist;

}
function searchTb($key)

{

mysql_connect("localhost","root","");

mysql_select_db("tb");

$query = "SELECT * FROM tb WHERE id = '%$key%' OR nm LIKE '%$key%' OR dsc LIKE '%$key%'OR dt LIKE '%$key%'OR prc LIKE '%$key%'";

 $hasil = mysql_query($query);
     while ($data = mysql_fetch_array($hasil))
     {
          // menyimpan data hasil pencarian dalam array
          $result[] = array('id' => $data['id'], 'nm' => $data['nm'], 'dsc' => $data['dsc'], 'dt' => $data['dt'], 'prc' => $data['prc']);
     }
     // mereturn array hasil pencarian
     return $result;

}

function insertTb($id,$nm,$dsc,$dt,$prc)

{

mysql_connect("localhost","root","");

mysql_select_db("tb");

mysql_query("INSERT INTO tb (id, nm, dsc, dt, prc) VALUES ('".$id."','".$nm."','".$dsc."','".$dt."','".$prc."')");

return "Succeed";

}


function updateTb($id,$nm,$dsc,$dt,$prc)

{

mysql_connect("localhost","root","");

mysql_select_db("tb");

mysql_query("UPDATE tb SET nm='".$nm."',dsc='".$dsc."',dt='".$dt."',prc='".$prc."' WHERE id='".$id."'");

return "Succeed";

}


function deleteTb($id)

{

mysql_connect("localhost","root","");

mysql_select_db("tb");

mysql_query("DELETE FROM tb WHERE id = '".$id."'");

return "Succeed";

}




require("../nusoap/lib/nusoap.php");

$server= new soap_server();

$server->configureWSDL("Serv","urn:WebServ");



$server->wsdl->addcomplextype(

"outputarray",

"complextype",

"struct",

"all",

"",

array(

"id"=>array("name"=>"id","type"=>"xsd:string"),

"nm"=>array("name"=>"nm","type"=>"xsd:string"),

"dsc"=>array("name"=>"dsc","type"=>"xsd:string"),

"dt"=>array("name"=>"dt","type"=>"xsd:string"),

"prc"=>array("name"=>"prc","type"=>"xsd:string")

)

);


$server->wsdl->addcomplextype(

"outarray",

"complextype",

"array",

"",

"SOAP-ENC:Array",

array(),

array(

array("ref"=>"SOAP-ENC:arrayType",

"wsdl:arrayType"=>"tns:outputarray[]")

),

"tns:outputarray"

);


$server->register(

"getTb",

array(),

array("return"=>"tns:outarray"),

"urn:WebServ",

"urn:WebServ#getTb",

"rpc",

"encoded",

""

);


$server->register(

"insertTb",

array("id"=>"xsd:string","nm"=>"xsd:string","dsc"=>"xsd:string",

"dt"=>"xsd:string","prc"=>"xsd:string"),

array("return"=>"tns:outarray"),

"urn:WebServ",

"urn:WebServ#insertTb",

"rpc",

"encoded",

""

);


$server->register(

"updateTb",

array("id"=>"xsd:string","nm"=>"xsd:string","dsc"=>"xsd:string",

"dt"=>"xsd:string","prc"=>"xsd:string"),

array("return"=>"tns:outarray"),

"urn:WebServ",

"urn:WebServ#updateTb",

"rpc",

"encoded",

""

);


$server->register(

"deleteTb",

array("id"=>"xsd:string"),

array("return"=>"tns:outarray"),

"urn:WebServ",

"urn:WebServ#deleteTb",

"rpc",

"encoded",

""

);
$server->register(

"searchTb",

array("id"=>"xsd:string"),

array("return"=>"tns:outarray"),

"urn:WebServ",

"urn:WebServ#searchTb",

"rpc",

"encoded",

""

);


$HTTP_RAW_POST_DATA=isset($HTTP_RAW_POST_DATA)? $HTTP_RAW_POST_DATA : "";

$server->service($HTTP_RAW_POST_DATA);

?>