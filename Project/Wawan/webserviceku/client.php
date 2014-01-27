<html>
<!-- header1-->
    <head>
        <title>Sistem Informasi Pencarian Data Mahasiswa</title>
    </head>
	<!--background & image-->
    <body bgcolor="red"></body>
    <p align="center"> <img src="unmuh.gif" alt="" width="300" height="300" /></p>

    <center>
        <center>
		<!-- <header2--marquee/tulisan berjalan> -->
            <h2><marquee
                    bgcolor="red" width="70%" scrollamount="2" behavior="alternate"><font size=“100” face=“TimesNewRoman” color="black"><big>
					"Sistem Informasi Pencarian Data Mahasiswa Berbasis Webservice"</big></font>

                </marquee>
            </h2>
        </center>
        
        
        <body>
            <!-- form pencarian data -->
            <b><form method="post" action="client.php?op=search"><p>*****************************</p>
                    Masukan Keyword Pencarian <br>
					<input type="text" name="key"> <input type="submit" name="submit" value="Search"><br>
					<p>*****************************</p>
					<marquee
                    bgcolor="red" width="30%" scrollamount="2" behavior="alternate"><font size=“100” face=“TimesNewRoman” color="black"><big>Gunakan Keyword : NIM | NAMA | ALAMAT</big></font>
					</marquee>
                </form></b>



            <?php
            #proses pencarian data
            if (isset($_GET['op'])) {
                if ($_GET['op'] == 'search') {
                    require_once('nusoap/lib/nusoap.php');
                    #baca keyword pencarian dari form
                    $key = $_POST['key'];

                    #instansiasi obyek untuk class nusoap client, arahkan URL ke script server.php
                    $client = new nusoap_client('http://localhost/webserviceku/server.php');

                    #proses memanggil method 'search' dengan parameter key di script server.php
                    $result = $client->call('search', array('key' => $key));

                    #jika data hasil pencarian ($result) ada, maka akan ditampilkan
                    if (is_array($result)) {
                        echo "<table border='1'>";#menampilkan tabel border yang isinya nim,nama,alamat,nohp,fakultas,jurusan
                        echo "<tr><th>NIM</th><th>NAMA</th><th>ALAMAT</th><th>NO HP</th><th>FAKULTAS</th><th>JURUSAN</th></tr>";
                        foreach ($result as $data) {
                            echo "<tr><td>" . $data['nim'] . "</td><td>" . $data['nama'] . "</td><td>" . $data['alamat'] . "</td><td>" . $data['nohp'] . "</td><td>" . $data['fakultas'] . "</td><td>" . $data['jurusan'] . "</td></tr>";
                        }
                        echo "</table>";
                        #menampilkan jumlah data hasil pencarian
                        echo "<p>Ditemukan " . count($result) . " data terkait kata kunci '" . $key . "'</p>";
                    }
                    else
                        echo "<p>Data tidak ditemukan</p>";
                }
            }
            ?>
			<!--marquee/tulisan berjalan & link ke fb,twitter,blogger-->
            <marquee onmouseover="this.stop()" onmouseout="this.start()" scrollamount="2" 
            direction="up" width="100%" height="100" align="center"> 
            <a href=" http://www.facebook.com/waone.dangers">My Facebook</a><br/> 
            <a href="http://www.twitter.com/waone_dangers">My Twitter</a><br/> 
            <a href="http://www.wawan-kurniawan888.blogspot.com/">My Blogger</a><br/> 
            </marquee>
                            
    </center>

</body>
</html>
