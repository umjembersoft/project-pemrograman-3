<html>
    <head>
        <title>Contoh NuSOAP Web Service </title>
    </head>
    <body border = '1' bgcolor = 'white'>
    <p><head><tittle><td><b>SEARCH DATA TOKO</p></b></tittle></head></td></br>
<p><img src='welcome.jpg' alt='nama alternatif gambar' width='300' height='180'></p></br>
        <!-- form pencarian data -->
    <form method="post" action="client.php?op=search">
            Keyword Pencarian <input type="text" name="key"> <input type="submit" name="submit" value="Search">
        </form>
        <?php
// proses pencarian data
error_reporting(E_ALL ^ E_NOTICE);
        if (isset($_GET['op'])) {
            if ($_GET['op'] == 'search') {
                require_once('nusoap/lib/nusoap.php');
// baca keyword pencarian dari form
               $key = $_POST['key'];
// instansiasi obyek untuk class nusoap client, arahkan URL ke script server.php di server A
                $client = new nusoap_client('http://localhost/mencoba/server.php');
// proses call method 'search' dengan parameter key di script server.php yang ada di server A
                $result = $client->call('search', array('key' => $key));
// jika data hasil pencarian ($result) ada, maka tampilkan
                if (is_array($result))
                {
                    echo "<table border='1'>";
                    echo "<tr><th>kodeBarang</th><th>namaBarang</th><th>stockBarang</th></tr>";
                    foreach ($result as $data) 
                    {
                        echo "<tr><td>" . $data['kodeBarang'] . "</td><td>" . $data['namaBarang'] . "</td><td>" . $data['stockBarang'] . "</td></tr>";
                    }
                    echo "</table>";
// menampilkan jumlah data hasil pencarian
                    echo "<p>Ditemukan " . count($result) . " data terkait kata kunci '" . $key . "'</p>";
                }
                else
                    echo "<p>Data tidak ditemukan</p>";
            }
        }
       if(isset($_POST['kodeBarang']))
        if($konek=mysql_connect("localhost","root","")) {
                if ($db=mysql_select_db("pemograman")) {
                        $kodeBarang=$_POST['kodeBarang'];
                        $namaBarang=$_POST['namaBarang'];
                        $stockBarang=$_POST['stockBarang'];
                        
                      
                        if(!empty($kodeBarang) and !empty($namaBarang) and !empty($stockBarang) ) {
                                $query = @mysql_query("INSERT INTO mhs (kodeBarang, namaBarang, stockBarang) VALUES ('$kodeBarang','$namaBarang','$stockBarang')");
                               
                        }         
                } else {
                echo "Database tidak konek";
                }
        } else {
                echo "Database tidak konek";
        }
        ?>
<html>
    <head></head>
    
    <body<head><tittle><td><b>MASUKKAN DATA BARANG</b></tittle></head></td></br>
        <form id="form1" name="form1" method="post" action="">
            <table width="300" border="1" cellspacing="2" cellpadding="3">
                <tr>
                    <td>kode Barang</td>
                    <td><label>
                            <input name="kodeBarang" type="text" id="kodeBarang" />
                        </label></td>
                </tr>
                <tr>
                    <td>Nama Barang</td>
                    <td><label>
                            <input name="namaBarang" type="text" id="namaBarang" />
                        </label></td>
                </tr>
                <tr>
                    <td>Stock Barang</td>
                    <td><label>
                            <input name="stockBarang" type="text" id="stockBarang" />
                        </label></td>
                </tr>
            
                <tr>
                    <td>&nbsp;</td>
                    <td><label>
                            <input name="button" type="submit" id="button" value="Save" />
                        </label></td>
                </tr>
            </table>
        </form>
    </body>
</html>