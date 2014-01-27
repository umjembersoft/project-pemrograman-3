
<head>

    <title>Tugas Besar Web Service </title>

</head>

<body>

<center>
    <h3 style="color: black; font-family: curlz MT; font-size: 3em; font-weight: 700; line-height: 0.1em; padding: 1px 10px; text-shadow: 0.2em 0.2em 0.1em rgb(119, 119, 119);">Ria Com</h3>

    <table width="700" border="1" cellspacing="2" cellpadding="3">
        <tr>
            <td>No</td>

            <td>Nama Laptop</td>

            <td>Merk</td>

            <td>Tanggal Produksi</td>

            <td>Harga</td>

        </tr>
</center>

<?php
require("../nusoap/lib/nusoap.php");





$client = new nusoap_client('http://localhost/Tb_Mhs/coba4/server.php');

$result = $client->call("getTb", array());



if ($result != null) {

    for ($i = 0; $i < sizeof($result); $i++) {
        ?>

        <tr>

            <td><?php echo $result[$i]['id']; ?>&nbsp;</td>

            <td><?php echo $result[$i]['nm']; ?>&nbsp;</td>

            <td><?php echo $result[$i]['dsc']; ?>&nbsp;</td>

            <td><?php echo $result[$i]['dt']; ?>&nbsp;</td>

            <td><?php echo $result[$i]['prc']; ?>&nbsp;</td>

            
               
            

        </tr>

        <?php
    }
}
?>





</table>



<br />
<center>

    <a href="search.php"><input type="submit" name="submit" value="Stok Barang"> </a>
</center>
<center>
    <matrix  style="font-family:curlz MT; font-size:26px; color:black;" direction="right" width="87%">Bagus Barangnya Pas Harganya</matrix>
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
        background:url('http://localhost/Tb_Mhs/colour=yellow') repeat top left;
    }

</style>


