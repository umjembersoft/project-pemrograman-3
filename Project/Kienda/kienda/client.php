<html>
    <head>
        <title>Buku</title>
    </head>

    <body bgcolor="purple"></body>
    <!--<p align="center"> <img src="unmuh.gif" alt="" width="300" height="300" /></p>-->

    <center>

        <center>
            <h2>" Pencarian Buku Berbasis Webservice"</h2>
        </center>
        
        
        <body>
            <!-- form pencarian data -->
            <b><form method="post" action="client.php?op=search">
                    Masukan Keyword <input type="text" name="key"> <input type="submit" name="submit" value="Cari">
                </form></b>



            <?php
            // proses pencarian data
            if (isset($_GET['op'])) {
                if ($_GET['op'] == 'search') {
                    require_once('nusoap/lib/nusoap.php');
                    // baca keyword pencarian dari form
                    $key = $_POST['key'];

                    // instansiasi obyek untuk class nusoap client, arahkan URL ke script server.php di server A
                    $client = new nusoap_client('http://localhost/kienda1/server.php');

                    // proses call method 'search' dengan parameter key di script server.php yang ada di server A
                    $result = $client->call('search', array('key' => $key));

                    // jika data hasil pencarian ($result) ada, maka tampilkan
                    if (is_array($result)) {
                        echo "<table border='1'>";
                        echo "<tr><th>ID BUKU</th>
								<th>JUDUL BUKU</th>
								<th>NAMA PENGARANG</th>
								<th>GENRE</th>
								<th>TAHUN TERBIT</th>
								<th>PENERBIT</th>
								</tr>";
                        foreach ($result as $data) {
                            echo "<tr><td>" 
							. $data['idbuku'] . 
							"</td><td>" 
							. $data['judulbuku'] . 
							"</td><td>" 
							. $data['pengarang'] . 
							"</td><td>" 
							. $data['genre'] . 
							"</td><td>" 
							. $data['tahunterbit'] . 
							"</td><td>" .
							$data['penerbit'] .
							"</td></tr>";
                        }
                        echo "</table>";
                        // menampilkan jumlah data hasil pencarian
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
