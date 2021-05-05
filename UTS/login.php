<?php
session_start();
if($_POST['submit']){
  $nama = $_POST['nama'];
  $email = $_POST['email'];
  $defaultLives = 5;
  $defaultScore = 0;
  setcookie('nama', $nama,time()+3*30*24*3600, "/");
  setcookie('email', $email,time()+3*30*24*3600, "/");
  $_SESSION['lives'] = $defaultLives;
  $_SESSION['score'] = $defaultScore;
  header("Location: game.php");
}