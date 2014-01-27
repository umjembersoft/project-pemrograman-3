<?php

function ambil() {

    mysql_connect("localhost", "root", "");

    mysql_select_db("yunus");


    $result = mysql_query("SELECT * FROM yunus");


    $index = 0;

    while ($data = mysql_fetch_array($result)) {

        $tblist[$index] = array(
            "id" => $data['id'],
            "nama" => $data['nama'],
            "kategori" => $data['kategori'],
            "tanggal" => $data['tanggal'],
            "harga" => $data['harga']
        );

        $index++;
    }


    mysql_close();

    return $tblist;
}

function tambah($id, $nama, $kategori, $tanggal, $harga) {

    mysql_connect("localhost", "root", "");

    mysql_select_db("yunus");

    mysql_query("INSERT INTO yunus (id, nama, kategori, tanggal, harga) VALUES ('" . $id . "','" . $nama . "','" . $kategori . "','" . $tanggal . "','" . $harga . "')");

    return "Succeed";
}

function edit($id, $nama, $kategori, $tanggal, $harga) {

    mysql_connect("localhost", "root", "");

    mysql_select_db("yunus");

    mysql_query("UPDATE tb SET nama='" . $nama . "',kategori='" . $kategori . "',tanggal='" . $tanggal . "',harga='" . $harga . "' WHERE id='" . $id . "'");

    return "Succeed";
}
function searchTb($key)

{

mysql_connect("localhost","root","");

mysql_select_db("yunus");

$query = "SELECT * FROM yunus WHERE id = '%$key%' OR nama LIKE '%$key%' OR harga LIKE '%$key%'";

 $hasil = mysql_query($query);
     while ($data = mysql_fetch_array($hasil))
     {
          // menyimpan data hasil pencarian dalam array
          $result[] = array('id' => $data['id'], 'nama' => $data['nama'],'kategori' => $data['kategori'],'tanggal' => $data['tanggal'], 'harga' => $data['harga']);
     }
     // mereturn array hasil pencarian
     return $result;

}


function hapus($id) {

    mysql_connect("localhost", "root", "");

    mysql_select_db("yunus");

    mysql_query("DELETE FROM yunus WHERE id = '" . $id . "'");

    return "Succeed";
}

require("nusoap/lib/nusoap.php");

$server = new soap_server();

$server->configureWSDL("Serv", "urn:WebServ");



$server->wsdl->addcomplextype(
        "outputarray", "complextype", "struct", "all", "", array(
    "id" => array("name" => "id", "type" => "xsd:string"),
    "nama" => array("name" => "nama", "type" => "xsd:string"),
    "kategori" => array("name" => "kategori", "type" => "xsd:string"),
    "tanggal" => array("name" => "tanggal", "type" => "xsd:string"),
    "harga" => array("name" => "harga", "type" => "xsd:string")
        )
);


$server->wsdl->addcomplextype(
        "outarray", "complextype", "array", "", "SOAP-ENC:Array", array(), array(
    array("ref" => "SOAP-ENC:arrayType",
        "wsdl:arrayType" => "tns:outputarray[]")
        ), "tns:outputarray"
);


$server->register(
        "ambil", array(), array("return" => "tns:outarray"), "urn:WebServ", "urn:WebServ#getTb", "rpc", "encoded", ""
);


$server->register(
        "tambah", array("id" => "xsd:string", "nama" => "xsd:string", "kategori" => "xsd:string",
    "tanggal" => "xsd:string", "harga" => "xsd:string"), array("return" => "tns:outarray"), "urn:WebServ", "urn:WebServ#insertTb", "rpc", "encoded", ""
);

$server->register(
        "edit", array("id" => "xsd:string", "nama" => "xsd:string", "kategori" => "xsd:string",
    "tanggal" => "xsd:string", "harga" => "xsd:string"), array("return" => "tns:outarray"), "urn:WebServ", "urn:WebServ#updateTb", "rpc", "encoded", ""
);
$server->register(

"searchTb",

array("id"=>"xsd:string"),

array("return"=>"tns:outarray"),

"urn:WebServ",

"urn:WebServ#searchTb",

"rpc",

"encoded",

""

);



$server->register(
        "hapus", array("id" => "xsd:string"), array("return" => "tns:outarray"), "urn:WebServ", "urn:WebServ#deleteTb", "rpc", "encoded", ""
);

$HTTP_RAW_POST_DATA = isset($HTTP_RAW_POST_DATA) ? $HTTP_RAW_POST_DATA : "";


$server->service($HTTP_RAW_POST_DATA);
?>