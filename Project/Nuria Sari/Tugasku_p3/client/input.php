<?php
 if(isset($_POST['id']))
        if($konek=mysql_connect("localhost","root","")) {
                if ($db=mysql_select_db("kuliah")) {
                        $id=$_POST['id'];
                        $nama=$_POST['nama'];
                        $alamat=$_POST['alamat'];
                        $gelar=$_POST['gelar'];
                        
                      
                        if(!empty($id) and !empty($nama) and !empty($alamat) and !empty($gelar)) {
                                $query = @mysql_query("INSERT INTO dosen (id, nama, alamat, gelar) VALUES ('$id','$nama','$alamat','$gelar')");
                               
                        }         
                } else {
                echo "Database tidak konek";
                }
        } else {
                echo "Database tidak konek";
        }
		

?>
<div align="center">
<form action='' method='POST' >
        <table align='center'>
                <tr>
                        <td width='130'>Id Dosen </td>
                        <td width='10'>:</td>
                        <td><input type='text' name='id' size='10' id="id"/></td>
                </tr>
                <tr>
                        <td>Nama</td>
                        <td>:</td>
                        <td><input type='text' name='nama' size='25' id="nama"/></td>
                </tr>
                <tr>
                        <td>Alamat</td>
                        <td>:</td>
                        <td><input name='alamat' type='text' id="alamat" size='30'/></td>
                </tr>
                <tr>
                        <td>Gelar</td>
                        <td>:</td>
                        <td><input type='text' name='gelar' size='10' id="gelar"/></td>
                </tr>
                <tr>
                        <td>&nbsp;</td>
                        <td>&nbsp;</td>
                        <td>
                                <input type='submit' name='Tambah' value='Tambah'>
                                <input type='reset' name='Reset'>
                        </td>
                </tr>
        </table>
</form>
</div>