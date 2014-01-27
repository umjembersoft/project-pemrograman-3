<html>
    <head>
        <title>Laptop</title>
    </head>       
<p align="center"> <img src="index.jpg" alt="" width="300" height="200" /></p>
    <center>

        <center>
            <h2>"Daftar Harga Laptop Ricky COM"</h2>
        </center>
        
        
        <body>
            <!-- form pencarian data -->
            <b><form method="post" action="client.php?op=search">
                    Masukan Nama Laptop <input type="text" name="key"> <input type="submit" name="submit" value="Cari">
                </form></b>



            <?php
            
            if (isset($_GET['op'])) {
                if ($_GET['op'] == 'search') {
                    require_once('nusoap/lib/nusoap.php');
                    
                    $key = $_POST['key'];

                    
                    $client = new nusoap_client('http://localhost/ricky1/server.php');

                    
                    $result = $client->call('search', array('key' => $key));

                    
                    if (is_array($result)) {
                        echo "<table border='1'>";
                        echo "<tr><th>ID BARANG</th>
								<th>NAMA BARANG</th>
								<th>TAHUN PRODUKSI</th>
								<th>HARGA</th>
								<th>TYPE</th>								
								</tr>";
                        foreach ($result as $data) {
                            echo "<tr><td>" 
							. $data['idbarang'] . 
							"</td><td>" 
							. $data['namabarang'] . 
							"</td><td>" 
							. $data['tahunproduksi'] . 
							"</td><td>" 
							. $data['harga'] . 
							"</td><td>" 
							. $data['type'] . 							
							"</td></tr>";
                        }
                        echo "</table>";
                        
                        echo "<p>Ditemukan " . count($result) . " data terkait kata kunci '" . $key . "'</p>";
                    }
                    else
                        echo "<p>Data tidak ditemukan</p>";
                }
            }
            ?>
                    
    </center>

</body>
</html>
