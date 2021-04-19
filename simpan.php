<?php
if (!isset($_POST['submit'])) {
  die;
} else {
  $nim = $_POST['nim'];
  $nama = $_POST['nama'];
  $tgllhr = $_POST['tgllhr'];
  $tmptlhr = $_POST['tmptlhr'];
  $data = "$nim|$nama|$tgllhr|$tmptlhr\n";

  $filename = "datamhs2.dat";
  $theFile = fopen($filename, "a") or die("Tidak bisa buka file!");
  fwrite($theFile, $data);
  fclose($theFile);
  // redirect URLnya menyesuaikan komputer masing-masing
  // header('Location: http://localhost/Web%20Programming%20Exercise/tampilkandata.php');

  $namaFile = "datamhs2.dat";
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
    if ($daftar == "") {
      break;
    }
    $mhs = explode("|", $daftar);
    echo "<tr>";
    echo "<td>$no</td>";
    for ($i = 0; $i < 5; $i++) {
      if ($i == 2) {
        $tgl = explode("-", $mhs[$i]);
        $yearBorn = date($tgl[0]);
        $yearNow = date("Y");
        $result = $yearNow - $yearBorn;
        array_push($mhs, $result);
        echo "<td>$mhs[$i]</td>";
      } else {
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
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tabel Mahasiswa</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    .container {
      display: flex;
      flex-direction: column;
      margin: 50px 200px 0px;
    }

    h1 {
      margin-top: 100px;
    }

    .container td,
    th {
      text-align: center;
      padding: 10px;
      margin: 0;
    }

    .tambah {
      margin-top: 20px;
      margin-left: 200px;
    }

    .btn {
      display: block;
      /* margin-top: 20px; */
      text-decoration: none;
      padding: 10px 20px;
      color: blue;
      border-radius: 10px;
      text-align: center;
      border: 1px solid blue;
      transition: all 0.25s ease-in-out;
    }

    .btn:hover {
      background-color: blue;
      color: white;
    }
  </style>
</head>

<body>
  <div class="tambah">
    <p>Jumlah Data: <?= $jumlah - 1; ?></p>
  </div>
  <!-- Alamat menyesuaikan komputer masing-masing -->
  <a href="http://localhost/Web%20Programming%20Exercise/tambahdata.html" class="btn container">Tambah Data</a>
</body>

</html>