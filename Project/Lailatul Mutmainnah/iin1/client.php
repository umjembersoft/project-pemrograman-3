<html>
    <head>
        <title>Film</title>
    </head>      

    <center>

        <center>
            <h2>*_* Pencarian Data Film *_*</h2>
        </center>
        
        
        <body border = '1' bgcolor = 'orange'>
            <!-- form pencarian data -->
            <b><form method="post" action="client.php?op=search">
                    Masukan Keyword Film <input type="text" name="key"> <input type="submit" name="submit" value="Cari">
                </form></b>



            <?php
			error_reporting (E_ALL ^ E_NOTICE);
            // proses pencarian data
            if (isset($_GET['op'])) {
                if ($_GET['op'] == 'search') {
                    require_once('nusoap/lib/nusoap.php');
                    // baca keyword pencarian dari form
                    $key = $_POST['key'];

                    // instansiasi obyek untuk class nusoap client, arahkan URL ke script server.php di server A
                    $client = new nusoap_client('http://localhost/iin1/server.php');

                    // proses call method 'search' dengan parameter key di script server.php yang ada di server A
                    $result = $client->call('search', array('key' => $key));

                    // jika data hasil pencarian ($result) ada, maka tampilkan
                    if (is_array($result)) {
                        echo "<table border='1'>";
                        echo "<tr><th>ID FILM</th>
								<th>NAMA FILM</th>
								<th>NAMA PRODUSER</th>								
								</tr>";
                        foreach ($result as $data) {
                            echo "<tr><td>" 
							. $data['idfilm'] . 
							"</td><td>" 
							. $data['namafilm'] . 
							"</td><td>" 
							. $data['produser'] . 							
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
			if(isset($_POST['idfilm']))
			if($konek=mysql_Connect ("localhost","root","")){
				if ($db=mysql_select_db("film")){
					$idfilm=$_POST['idfilm'];
					$namafilm=$_POST['namafilm'];
					$produser=$_POST['produser'];
					
					if(!empty($idfilm) and !empty($namafilm) and !empty($produser) ) {
                                $query = @mysql_query("INSERT INTO film (idfilm, namafilm, produser) VALUES ('$idfilm','$namafilm','$produser')");
                               
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
                    <td>ID FILM</td>
                    <td><label>
                            <input name="idfilm" type="text" id="idfilm" />
                        </label></td>
                </tr>
                <tr>
                    <td>NAMA FILM</td>
                    <td><label>
                            <input name="namafilm" type="text" id="namafilm" />
                        </label></td>
                </tr>
                <tr>
                    <td>PRODUSER</td>
                    <td><label>
                            <input name="produser" type="text" id="produser" />
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
<center><p><img src='thankyou.gif' alt='nama alternatif gambar' width='300' height='180'></p></center></br>