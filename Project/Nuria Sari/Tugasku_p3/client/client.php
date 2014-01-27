<?php

require_once ('../nusoap/lib/nusoap.php');
$client = new soapclient('http://localhost/PHP/server/index.php');
$result = $client->call('ambilData');
$n=$result['count'];
$data=$result['data'];

 echo "<table  border = '1' bgcolor = 'pink'  align='left' cellspacing='1'>";
    echo "<tr><th>id</th><th>Nama</th><th>Alamat</th><th>Gelar</th></tr>";
for($i=0;$i<$n;$i++){
    echo "<tr><td>".$data[$i]['id']."</td><td>".$data[$i]['nama']."</td><td>".$data[$i]['alamat']."</td><td>".$data[$i]['gelar']."</td></tr>";
    
}

?>
