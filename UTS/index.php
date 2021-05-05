<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
  <title>Game Penjumlahan Sederhana</title>
</head>

<body>
  <?php
  if (isset($_COOKIE['email'])) {
    $nama = $_COOKIE['nama'];
  ?>
    <div class="container mt-5">
      <div class="row">
        <div class="col-md-12">
          <h3 class="text-center">Hallo <?= $nama; ?>, selamat datang kembali di permainan ini!!!</h3>
          <a href="game.php" class="btn btn-outline-primary d-block mt-5">Start Game</a>
          <p class="mt-5 text-center">Bukan Anda? <a href="logout.php" class="btn btn-outline-warning">klik di sini</a></p>
        </div>
      </div>
    </div>
  <?php
  } else {
  ?>
    <div class="container mt-5">
      <div class="row d-flex justify-content-center">
        <div class="col-md-6">
          <h3>Welcome to The Game</h3>
          <form action="login.php" method="POST">
            <div class="form-group">
              <label for="nama">Masukkan Nama: </label>
              <input type="text" name="nama" id="nama" class="form-control">
            </div>
            <div class="form-group">
              <label for="email">Masukkan Email: </label>
              <input type="email" name="email" id="email" class="form-control">
            </div>
            <input type="submit" name="submit" value="Submit" class="btn btn-primary">
          </form>
        </div>
      </div>
    </div>
  <?php
  }
  ?>
</body>

</html>