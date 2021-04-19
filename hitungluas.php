<?php
if (!isset($_GET['n'], $_GET['d'], $_GET['t']) && $_GET['n'] == ' ') {
  header('Location: javascript://history.go(-1)');
} else {
  $namaTabung = $_GET['n'];
  $diameter = $_GET['d'];
  $tinggi = $_GET['t'];
}

$phi = 3.14;
$r = $diameter / 2;
$hasil = 2 * $phi * $r * ($r + $tinggi);
echo "<div class='container'>";
echo "<h3>Luas tabung <span>$namaTabung</span> dengan diamater <span>$diameter</span> dan tinggi <span>$tinggi</span> adalah <span>$hasil</span></h3>";
echo "<a href='javascript:history.back()'>Kembali</a>";
echo "</div>";
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hasil Hitung Luas</title>
  <style>
    .container{
      display: flex;
      justify-content: center;
      align-items: center;
      flex-direction: column;
      height: 80vh;
    }
    h3 {
      text-transform: uppercase;
      padding: 20px;
      border: 1px solid black;
      border-radius: 10px;
    }
    span{
      color: red;
      font-weight: bold;
    }
    a{
      text-decoration: none;
      padding: 10px 18px;
      border-radius: 4px;
      border: 2px solid red;
      color: red;
      transition: all 250ms ease-in-out;
    }
    a:hover{
      background-color: red;
      color: white;
    }
  </style>
</head>

<body>

</body>

</html>