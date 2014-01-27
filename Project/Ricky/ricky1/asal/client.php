<?php

require_once('nusoap/lib/nusoap.php');
 
// dua bilangan yang akan dijumlahkan atau dikurangi
$bil1 = 10;
$bil2 = 25;
 
// instansiasi obyek untuk class nusoap client
$client = new nusoap_client('http://localhost/ricky1/server.php');
// proses call method 'jumlahkan' di script server.php yang ada di komputer B
$result = $client->call('jumlahkan', array('x' => $bil1, 'y' => $bil2));
echo "<p>Hasil penjumlahan ".$bil1." dan ".$bil2." adalah = ".$result."</p>";
 
// proses call method 'kurangi' di script server.php yang ada di komputer B
$result = $client->call('kurangi', array('x' => $bil1, 'y' => $bil2));
echo "<p>Hasil pengurangan ".$bil1." dan ".$bil2." adalah = ".$result."</p>";


// proses call method 'kurangi' di script server.php yang ada di komputer B
$result = $client->call('kali', array('x' => $bil1, 'y' => $bil2));
echo "<p>Hasil perkalian ".$bil1." dan ".$bil2." adalah = ".$result."</p>";

// proses call method 'kurangi' di script server.php yang ada di komputer B
$result = $client->call('bagi', array('x' => $bil1, 'y' => $bil2));
echo "<p>Hasil pembagian ".$bil1." dan ".$bil2." adalah = ".$result."</p>"; 

?>