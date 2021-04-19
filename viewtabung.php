<?php
$namaFile = "datatabung.dat";
$myfile = fopen($namaFile, "r") or die("Tidak bisa buka file!");
echo "<center>";
echo "<h1>DATA UKURAN TABUNG</h1>";
echo "</center>";
echo "<div class='container'>";
echo "<table border='1'>";
echo "<tr>
<th>NAMA TABUNG</th>
<th>DIAMETER</th>
<th>TINGGI</th>
<th>LUAS</th>

</tr>";
while (!feof($myfile)) {
  $listData = fgets($myfile);
  $data = explode(",", $listData);
  echo "<tr>";
  for ($i = 0; $i < 3; $i++) {
      echo "<td>$data[$i]</td>";
      if($i == 2){
        echo "<td><a href='hitungluas.php?n=$data[0]&d=$data[1]&t=$data[2]'>view</a></td>";
      }
  }
  echo "</tr>";
}
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
  <title>Hitung Luas Tabel</title>
  <style>
    .container{
      display: flex;
      justify-content: center;
      align-items: center;
    }
    td,th{
      text-align: center;
      padding: 20px;
    }
    a{
      text-decoration: none;
      padding: 10px 18px;
      border-radius: 4px;
      border: 2px solid blue;
      color: blue;
      transition: all 250ms ease-in-out;
    }
    a:hover{
      background-color: blue;
      color: white;
    }
  </style>
</head>
<body>

</body>
</html>
