<?php
if(!isset($_COOKIE['email'])){
  header("Location: index.php");
}
session_start();
$lives = $_SESSION['lives'];
$score = $_SESSION['score'];

$nilaiA = random_int(0, 20);
$nilaiB = random_int(0, 20);
$hasil = $nilaiA + $nilaiB;
$_SESSION['hasil'] = $hasil;

if ($lives == 0) {
  $_SESSION['score'] = 0;
  $_SESSION['lives'] = 5;
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
  <title>Game Penjumlahan Sederhana</title>
  <style>
    .lebar {
      width: 5%;
    }
    input[type="number"]{
      font-size: 24px;
      font-weight: bold;
    }
  </style>
</head>

<body>
  <div class="container text-center mt-5">
    <h3>Hello <?= $_COOKIE['nama']; ?>, tetap semangat ya... you can do the best!!</h3>
    <h4 class="mb-5"><span class="badge badge-warning p-2">Lives: <?= $_SESSION['lives']; ?></span> | <span class="badge badge-success p-2">Score: <?= $_SESSION['score']; ?></span></h4>
    <div class="container mt-5">
      <form action="result.php" method="POST">
        <label for="penjumlahan" class="h1"><?= $nilaiA; ?> + <?= $nilaiB; ?> = </label>
        <input type="number" name="jawaban" id="penjumlahan" class="lebar py-2 px-1">
        <input type="submit" value="Submit" name="submit" class="btn btn-primary py-2 px-3 ml-2">
      </form>
      <a href="logout.php" class="btn btn-danger mt-5">Keluar</a>
    </div>
  </div>
</body>

</html>