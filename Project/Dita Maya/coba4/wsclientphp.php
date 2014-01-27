
<head>
  
      <title>Tugas Besar Web Service </title>
   
</head>

<body>
     
<center>
<h2>Form Penjualan Album</h2>
<table width="700" border="1" cellspacing="2" cellpadding="3">
<tr>
<td>No</td>

<td>Nama Album</td>

<td>Label</td>

<td>Tanggal Pembelian</td>

</tr>
</center>

<?php

require("lib/nusoap.php");





$client=new nusoap_client('http://localhost//coba4/ws.php');

$result=$client->call("getTb",array());



if($result!=null){

for($i=0;$i<sizeof($result);$i++){

?>

<tr>

<td><?php echo $result[$i]['id']; ?>&nbsp;</td>

<td><?php echo $result[$i]['nm']; ?>&nbsp;</td>

<td><?php echo $result[$i]['dsc']; ?>&nbsp;</td>

<td><?php echo $result[$i]['dt']; ?>&nbsp;</td>

</tr>

<?php

}

}

?>





</table>



<br />
<center>
</center>

</body>

</html>

</style>

<!--  fungsi background-->
<style type="text/css"> 
body{
  
color:blue;   
margin:10px auto;
padding:20px;
width:800px;
border:2px solid #888;


}

</style>

        