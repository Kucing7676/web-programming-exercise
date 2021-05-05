<?php
if(!isset($_COOKIE['email'])){
  header("Location: index.php");
}
include('config.php');
$query = 'SELECT nama,score FROM `leaderboard` ORDER BY score DESC LIMIT 10';
$result = mysqli_query($conn, $query);
$i = 1;
?>
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

  <title>Klasmen Game</title>
</head>

<body>
  <div class="container text-center">
    <h1>Klasmen Game</h1>
    <table class="table table-dark">
      <thead>
        <tr>
          <th scope="col">No</th>
          <th scope="col">Nama</th>
          <th scope="col">Score</th>
        </tr>
      </thead>
      <tbody>
        <?php while ($peoples = mysqli_fetch_array($result)) { ?>
          <tr>
            <th scope="row"><?= $i; ?></th>
            <td><?= $peoples['nama']; ?></td>
            <td><?= $peoples['score']; ?></td>
          </tr>
        <?php
          $i++;
        } ?>
      </tbody>
    </table>
    <a href="game.php" class="btn btn-primary">Main Lagi</a>
    <a href="logout.php" class="btn btn-danger">Keluar</a>
  </div>
</body>

</html>