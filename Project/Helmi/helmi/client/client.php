
<head>

    <title>Web Serviceku </title>

</head>

<body>

<center>
    <h2 >Form Data Barang</h2>

    <table width="700" border="1" cellspacing="2" cellpadding="3">
        <tr>
            <td>No</td>
            <td>Nama</td>
            <td>Kategori</td>
            <td>Tanggal</td>
            <td>Harga</td>
            <td>Aksi</td>
        </tr>
</center>

<?php
require("../nusoap/lib/nusoap.php");





$client = new nusoap_client('http://localhost/helmi/server/server.php');

$result = $client->call("ambil", array());



if ($result != null) {

    for ($i = 0; $i < sizeof($result); $i++) {
        ?>

        <tr>

            <td><?php echo $result[$i]['id']; ?>&nbsp;</td>

            <td><?php echo $result[$i]['nama']; ?>&nbsp;</td>

            <td><?php echo $result[$i]['kategori']; ?>&nbsp;</td>

            <td><?php echo $result[$i]['tanggal']; ?>&nbsp;</td>

            <td><?php echo $result[$i]['harga']; ?>&nbsp;</td>

            <td>
                <a href="clientedit.php?id=<?php echo $result[$i]['id']; ?>"><input type="submit" name="submit" value="Edit"></a> 
                <a href="clientdelete.php?id=<?php echo $result[$i]['id']; ?>"><input type="submit" name="submit" value="Delete"></a> 
            </td>

        </tr>

        <?php
    }
}
?>





</table>



<br />
<center>
    <a href="clienttambah.php"><input type="submit" name="submit" value="Tambah"> </a>

   
</center>

</body>

</html>

</style>




