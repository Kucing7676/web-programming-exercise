<?php
if(!isset($_COOKIE['email'])){
  header("Location: index.php");
}
session_start();
$lives = $_SESSION['lives'];
$score = $_SESSION['score'];
$nama = $_COOKIE['nama'];
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
  <title>ANDA SALAH | SEMANGAT</title>
</head>

<body>
  <div class="container text-center mt-5">
    <div class="row">
      <div class="col-md-12">
        <h3>Hello <?= $nama; ?>, Sayang jawaban Anda <span class="badge badge-danger">salah</span>... tetap semangat</h3>
        <h4 class="mb-5"><span class="badge badge-warning p-2">Lives: <?= $_SESSION['lives']; ?></span> | <span class="badge badge-success p-2">Score: <?= $_SESSION['score']; ?></span></h4>
      </div>
    </div>
    <div class="row">
      <?php if ($lives == 0) {
        header("Location: gameover.php");
      } else {
      ?>
        <div class="col-md-3"></div>
        <div class="col-md-6">
          <a href='game.php' class="btn btn-outline-primary d-block">Soal Selanjutnya</a>
        </div>
        <div class="col-md-3"></div>
      <?php
      }
      ?>
    </div>
  </div>
</body>

</html>