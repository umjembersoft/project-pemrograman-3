<html>
   
   <body>
   <center>
      <h2>Ria Com</h2>
      <form method="post" action="search.php?op=search">
          Cari <input type="text" name="key"> <input type="submit" name="submit" value="Search">
      </form>
      </center>
   <center>
	
      <?php
        // proses pencarian data
        if (isset($_GET['op']))
        {
            if ($_GET['op'] == 'search')
            {
                require_once('../nusoap/lib/nusoap.php');
                // baca keyword pencarian dari form
                $key = $_POST['key'];

                // instansiasi obyek untuk class nusoap client, arahkan URL ke script server.php di server A
                $client = new nusoap_client('http://localhost/Tb_Mhs/coba4/server.php');

                // proses call method 'search' dengan parameter key di script server.php yang ada di server A
                $result = $client->call('searchTb', array('key' => $key));

                // jika data hasil pencarian ($result) ada, maka tampilkan
                if (is_array($result))
                {
                    echo "<table border='1'>";
                    echo "<tr><th>ID</th><th>Name</th><th>Description</th><th>Date</th><th>Price</th></tr>";
                    foreach($result as $data)
                    {
                        echo "<tr><td>".$data['id']."</td><td>".$data['nm']."</td><td>".$data['dsc']."</td><td>".$data['dt']."</td><td>".$data['prc']."</td></tr>";
                    }
                    echo "</table>";
                    // menampilkan jumlah data hasil pencarian
                    echo "<p>Ditemukan ".count($result)." data terkait kata kunci '".$key."'</p>";
                }
                else echo "<p>Data tidak ditemukan</p>";
            }
        }
        ?>
       <?php
  $url = isset($_SERVER['HTTP_REFERER']) ? htmlspecialchars($_SERVER['HTTP_REFERER']) : '';
?>
       <form method="post" action="client.php">
       <input type="submit" name="submit" value="Back"> 
 
 
<!--fungsi background       -->
<style type="text/css"> 
body{
  
color:purple;   
margin:10px auto;
padding:20px;
width:400px;
border:2px solid #888;
background:url('http://localhost/Tb_Mhs/fileGambar/car3.jpg') repeat top left;
}

</style>

       
       </center>

    </body>
</html>


