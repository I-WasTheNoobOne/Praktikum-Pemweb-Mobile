<?php 

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];
    $_username = strlen($username);
    $_password = strlen($password);
    $x = false;

    if ($_username > 7) {
      echo "Username harus kurang dari 7 Karakter<br>";
      $x = true;
    }

    if (!preg_match("/[A-Z]/", $password)) {
      echo "Password Wajib terdapat Huruf Kapital<br>";
      $x = true;
    }

    if (!preg_match("/[a-z]/", $password)) {
      echo "Password Wajib terdapat Huruf Kecil<br>";
      $x = true;
    }

    if (!preg_match("/[0-9]/", $password)) {
      echo "Password Wajib terdapat Karakter khusus (angka)<br>";
      $x = true;
    }

    if ($_password < 10) {
      echo "Password Wajib Lebih dari 10 Karakter<br>";
      $x = true;
    }

    if ($x == false) {
      echo "Username dan Password Telah Memenuhi Syarat";
    }
  }
  ?>
<!DOCTYPE html>
<html>
<body>
  <br>
<a href="Praktikum Modul 2 Pemrograman Web & Mobile I">Logout
</body>
</html>

        
