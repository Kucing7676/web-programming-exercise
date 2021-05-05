<?php
if(!isset($_COOKIE['email'])){
  header("Location: index.php");
}
include('config.php');
session_start();
$score = $_SESSION['score'];
$nama = $_COOKIE['nama'];

$query = "SELECT nama, score FROM `leaderboard` WHERE nama='$nama' AND score=$score";
$cek = mysqli_query($conn, $query);
if (mysqli_num_rows($cek) <= 0) {
  $result = mysqli_query($conn, "INSERT INTO leaderboard (nama, score) VALUES('$nama','$score')");
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
  <title>GAME OVER | SEMANGAT!!!</title>
</head>

<body>
  <div class="container text-center mt-5">
    <div class="row">
      <div class="col-md-12">
        <h4 class="mb-5">Hello,<?= $nama; ?>... Sayang permainan sudah selesai. Semoga kali lain bisa lebih baik.</h4>
        <h2 class="mb-5 text-uppercase">Score Anda: <?= $score; ?></h2>
        <div class="row">
          <div class="col-md-3">
            <a href="game.php" class="btn btn-primary d-block">Main Lagi</a>
          </div>
          <div class="col-md-6">
            <a href="leaderboard.php" class="btn btn-info d-block">Klasmen</a>
          </div>
          <div class="col-md-3">
            <a href="logout.php" class="btn btn-danger d-block">Keluar</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</body>

</html>