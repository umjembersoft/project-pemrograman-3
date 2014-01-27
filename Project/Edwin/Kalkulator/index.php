<html>
    <head>
    
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>Client Kalkulator</title>
        <center>
        <h2>calculator</h2>
        <p align="center"><img src="calculator.jpg" alt="" width="200" heigth="200"/></p>
<?php
    require_once ('nusoap/lib/nusoap.php');
    $client = new nusoap_client('http://localhost/Kalkulator/KalkulatorNB.php?wsdl', true);

    $err = $client->getError();

    if ($err)
    {
        echo '<h2>Constructor error</h2><pre>' . $err . '</pre>';
    }

    //panggil method SOAP
    $nilai1 = $_GET["nilai1"];
    $nilai2 = $_GET["nilai2"];

    switch($_GET["opr"])
    {
       case "+":
       $result = $client->call('tambah', array('nilai1' => $nilai1, 'nilai2' => $nilai2));
       break;
       case "-":
       $result = $client->call('kurang', array('nilai1' => $nilai1, 'nilai2' => $nilai2));
       break;
       case "*":
       $result = $client->call('kali', array('nilai1' => $nilai1, 'nilai2' => $nilai2));
       break;
       case ":":
       $result = $client->call('bagi', array('nilai1' => $nilai1, 'nilai2' => $nilai2));
       break;
    }

    // check bila terjadi kesalahan
    if ($client->fault)
    {
       echo '<h2>Fault</h2><pre>';
       print_r($result);
       echo '</pre>';
    }
    else
    {
       $err = $client->getError();
       if ($err)
       {
          //Tampilkan error
          echo '<h2>Error</h2><pre>' . $err . '</pre>';
       }
       else
       {
          //Tampilkan hasil
          echo '<h2>jawaban</h2><pre>';
          echo ($result);
          echo '</pre>';
       }
    }
?>
    </center>
  </head>
    <body>
        <center>

    <form action="index.php">
    <table>
        <tr>
            <td>Nilai 1</td>
            <td><input type="text" name="nilai1" id="nilai1" /></td>
        </tr>
        <tr>
            <td>Nilai 2</td>
            <td><input type="text" name="nilai2" id="nilai2" /></td>
        </tr>

        <td colspan="2">
            <input type="submit" value="+" name="opr"/>
            <input type="submit" value="-" name="opr"/>
            <input type="submit" value=":" name="opr"/>
            <input type="submit" value="*" name="opr"/>
        </td>
    </table>
    </form>
        </center>

    </body>

</html>
