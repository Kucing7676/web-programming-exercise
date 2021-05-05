<?php
session_start();
$lives = $_SESSION['lives'];
$score = $_SESSION['score'];
$nama = $_COOKIE['nama'];
$jawaban = $_POST['jawaban'];
$hasil = $_SESSION['hasil'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Game Penjumlahan Sederhana</title>
</head>

<body>


  <?php
  if (isset($_POST['submit'])) {
    if ($lives == 0) {
        header('Location: gameover.php');
    } else {
      if ($jawaban == $hasil) {
        $_SESSION['score'] = $score + 10;
        header("Location: trueanswer.php");
      } else {
        $_SESSION['lives'] = $lives - 1;
        $_SESSION['score'] = $score - 2;
        header("Location: falseanswer.php");
      }
    }
  } else {
    header("Location: game.php");
  }
  ?>
</body>

</html>