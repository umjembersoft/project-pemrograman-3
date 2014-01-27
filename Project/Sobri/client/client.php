
<head>

    <title>Tugas Besar Web Service </title>

</head>

<body>

<center>
    <h2 >Restoran Cikiciw</h2>

    <table width="700" border="1" cellspacing="2" cellpadding="3">
        <tr>
            <td>No</td>

            <td>Nama</td>

            <td>Harga</td>
            
            
        </tr>
</center>

<?php
require("../nusoap/lib/nusoap.php");





$client = new nusoap_client('http://localhost/sobri/server/server.php');

$result = $client->call("getTb", array());



if ($result != null) {

    for ($i = 0; $i < sizeof($result); $i++) {
        ?>

        <tr>

            <td><?php echo $result[$i]['id']; ?>&nbsp;</td>

            <td><?php echo $result[$i]['nama']; ?>&nbsp;</td>


            <td><?php echo $result[$i]['harga']; ?>&nbsp;</td>

            

        </tr>

        <?php
    }
}
?>





</table>



<br />
<center>
    <a href="clientadd.php"><input type="submit" name="submit" value="Tambah"> </a>

    <a href="clientsearch.php"><input type="submit" name="submit" value="Pencarian"> </a>
</center>

</body>

</html>

</style>

<!--  fungsi background-->
<style type="text/css"> 
    body{

        color:black;   
        margin:10px auto;
        padding:20px;
        width:800px;
        border:2px solid #888;
        background:url('http://localhost/sobri/gambar/images12.jpg') repeat top left;
    }

</style>



