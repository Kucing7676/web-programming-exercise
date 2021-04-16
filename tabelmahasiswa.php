<?php
  $namaFile = "datamhs.dat";
  $myfile = fopen($namaFile, "r") or die("Tidak bisa buka file!");
  echo "<center>";
  echo "<h1>Data Mahasiswa</h1>";
  echo "</center>";
  echo "<div class='container'>";
  echo "<table border='1'>";
  echo "<tr>
  <th>No</th>
  <th>NIM</th>
  <th>Nama Mahasiswa</th>
  <th>Tanggal Lahir</th>
  <th>Tempat Lahir</th>
  <th>Usia (Tahun)</th>

  </tr>";
  $no = 1;
  while (!feof($myfile)) {
    $daftar = fgets($myfile);
    $mhs = explode("|", $daftar);
    echo "<tr>";
    echo "<td>$no</td>";
    for ($i=0; $i < 5; $i++) {
      if($i == 2){
        $tgl = explode("-",$mhs[$i]);
        $yearBorn = date($tgl[0]);
        $yearNow = date("Y");
        $result = $yearNow - $yearBorn;
        array_push($mhs, $result);
        echo "<td>$mhs[$i]</td>";
      }else{
        echo "<td>$mhs[$i]</td>";
      }
    }
    echo "</tr>";
    $no++;
  }
  $jumlah = $no;
  fclose($myfile);

  echo "</table>";
  echo "</div>";
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tabel Mahasiswa</title>
  <style>
    *{
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }
    .container{
      display: flex;
      flex-direction: column;
      margin: 50px 200px 0px;
    }
    h1{
      margin-top: 100px;
    }
    .container td,th{
      text-align: center;
      padding: 10px;
      margin: 0;
    }
    p{
      margin-top: 20px;
      margin-left: 200px;
    }
  </style>
</head>
<body>
    <p>Jumlah Data: <?= $jumlah-1; ?></p>
</body>
</html>