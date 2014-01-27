<html>
    <head>
        <title>Contoh NuSOAP Web Service </title>
    </head>
    <body border = '1' bgcolor = 'yellow'>
    <center><p><head><tittle><td><b>SELAMAT DATANG DI HALAMAN SEARCH DATA MAHASISWA</p></b></tittle></head></td></center></br>
<center><p><img src='welcome.gif' alt='nama alternatif gambar' width='300' height='180'></p></center></br>
        <!-- form pencarian data -->
    <center><form method="post" action="client.php?op=search">
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
                    echo "<tr><th>NIM</th><th>NAMA</th><th>ALAMAT</th></tr>";
                    foreach ($result as $data) 
                    {
                        echo "<tr><td>" . $data['nim'] . "</td><td>" . $data['nama'] . "</td><td>" . $data['alamat'] . "</td></tr>";
                    }
                    echo "</table>";
// menampilkan jumlah data hasil pencarian
                    echo "<p>Ditemukan " . count($result) . " data terkait kata kunci '" . $key . "'</p>";
                }
                else
                    echo "<p>Data tidak ditemukan</p>";
            }
        }
       if(isset($_POST['nim']))
        if($konek=mysql_connect("localhost","root","")) {
                if ($db=mysql_select_db("pemrograman")) {
                        $nim=$_POST['nim'];
                        $nama=$_POST['nama'];
                        $alamat=$_POST['alamat'];
                        
                      
                        if(!empty($nim) and !empty($nama) and !empty($alamat) ) {
                                $query = @mysql_query("INSERT INTO mhs (nim, nama, alamat) VALUES ('$nim','$nama','$alamat')");
                               
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
    <center>
    <body <center><p><head><tittle><td><b>SILAHKAN INPUTKAN DATA ANDA</p></b></tittle></head></td></center></br>
        <form id="form1" name="form1" method="post" action="">
            <table width="300" border="0" cellspacing="2" cellpadding="3">
                <tr>
                    <td>NIM</td>
                    <td><label>
                            <input name="nim" type="text" id="nim" />
                        </label></td>
                </tr>
                <tr>
                    <td>Name</td>
                    <td><label>
                            <input name="nama" type="text" id="nama" />
                        </label></td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td><label>
                            <input name="alamat" type="text" id="alamat" />
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
</html></center>