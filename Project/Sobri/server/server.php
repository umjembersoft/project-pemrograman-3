<?php





function getTb(){

mysql_connect("localhost","root","");

mysql_select_db("resto");


$result=mysql_query("SELECT * FROM resto");


$index=0;

while ($data=mysql_fetch_array($result)){

$tblist[$index]=array(

"id"=>$data['id'],

"nama"=>$data['nama'],

"harga"=>$data['harga'],


);

$index++;

}


mysql_close();

return $tblist;

}
function searchTb($key)

{

mysql_connect("localhost","root","");

mysql_select_db("resto");

$query = "SELECT * FROM resto WHERE id = '%$key%' OR nama LIKE '%$key%' OR harga LIKE '%$key%'";

 $hasil = mysql_query($query);
     while ($data = mysql_fetch_array($hasil))
     {
          // menyimpan data hasil pencarian dalam array
          $result[] = array('id' => $data['id'], 'nama' => $data['nama'], 'harga' => $data['harga']);
     }
     // mereturn array hasil pencarian
     return $result;

}

function insertTb($id,$nama,$harga)

{

mysql_connect("localhost","root","");

mysql_select_db("resto");

mysql_query("INSERT INTO resto (id, nama, harga) VALUES ('".$id."','".$nama."','".$harga."')");

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

"nama"=>array("name"=>"nama","type"=>"xsd:string"),

"harga"=>array("name"=>"harga","type"=>"xsd:string")

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

array("id"=>"xsd:string","nama"=>"xsd:string","harga"=>"xsd:string"),

array("return"=>"tns:outarray"),

"urn:WebServ",

"urn:WebServ#insertTb",

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