<?php

require("nusoap/lib/nusoap.php");





$client=new nusoap_client('http://localhost/yunus/server.php');





$result=$client->call("hapus",

array("id"=>$_GET['id']));

$err=$client->getError();

if($err){

echo "error";

}

header("location:client.php");

?>