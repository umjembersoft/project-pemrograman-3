<?php
 function kurs($dollar)
 {
     return 9200*$dollar;
 } 
 require("lib/nusoap.php");
 $server=new soap_server();
 $server->configureWSDL("Kurs","urn:kursService");
 $server->register("kurs",array("dollar"=>"xsd:int"),
 array("return"=>"xsd:long"),"urn:kursService","urn:kursService#kurs");
 $HTTP_RAW_POST_DATA=isset ($HTTP_RAW_POST_DATA)?$HTTP_RAW_POST_DATA
 :'';
 $server->service($HTTP_RAW_POST_DATA);
 ?>
   