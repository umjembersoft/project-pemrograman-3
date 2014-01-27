<?php

require("../nusoap/lib/nusoap.php");





$client=new nusoap_client('http://localhost/Tb_Mhs/coba4/ws.php');





$result=$client->call("deleteTb",

array("id"=>$_GET['id']));

$err=$client->getError();

if($err){

echo "error";

}

header("location:wsclientphp.php");

?>