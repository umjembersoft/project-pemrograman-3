
<head>

    <title>Tugas Besar Web Service </title>

</head>

<body>

<center>
    <h3 style="color: aqua; font-family: Algerian; font-size: 3em; font-weight: 700; line-height: 0.1em; padding: 1px 10px; text-shadow: 0.2em 0.2em 0.1em rgb(119, 119, 119);">Form Penjualan Mobil</h3>

    <table width="700" border="1" cellspacing="2" cellpadding="3">
        <tr>
            <td>No</td>

            <td>Nama Mobil</td>

            <td>Merk</td>

            <td>Tanggal Pembuatan</td>

            <td>Harga</td>

            <td>Aksi</td>

        </tr>
</center>

<?php
require("../nusoap/lib/nusoap.php");





$client = new nusoap_client('http://localhost/Tb_Mhs/coba4/ws.php');

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

            <td>
                <a href="wsclientphpedit.php?id=<?php echo $result[$i]['id']; ?>"><input type="submit" name="submit" value="Edit"></a> 
                <a href="wsclientphpdelete.php?id=<?php echo $result[$i]['id']; ?>"><input type="submit" name="submit" value="Delete"></a> 
            </td>

        </tr>

        <?php
    }
}
?>





</table>



<br />
<center>
    <a href="wsclientphpadd.php"><input type="submit" name="submit" value="Tambah"> </a>

    <a href="wsclientphpsearch.php"><input type="submit" name="submit" value="Pencarian"> </a>
</center>
<center>
    <marquee  style="font-family:Ravie; font-size:22px; color:lawngreen;" direction="right" width="87%">Ayo Buruan Pilih Mobil Yang Kamu Suka</marquee>
</center>
</body>

</html>

</style>

<!--  fungsi background-->
<style type="text/css"> 
    body{

        color:yellow;   
        margin:10px auto;
        padding:20px;
        width:800px;
        border:2px solid #888;
        background:url('http://localhost/Tb_Mhs/fileGambar/car5.jpg') repeat top left;
    }

</style>


