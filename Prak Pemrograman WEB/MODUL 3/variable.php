<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Latihan 3</title>
  </head>
  <body>
    <h1>Buku Tamu</h1>
    <form action="variable.php" method="post">
      <p>Nama : <input type="text" name="nama" size="20" /></p>
      <p>Email : <input type="text" name="email" size="30" /></p>
      <p>Komentar : <textarea name="komentar" cols="30" rows="3"></textarea></p>
      <p><input type="submit" value="Kirim" /></p>
    </form>
    <?php
      error_reporting(E_ALL ^ E_NOTICE);
      $nama = $_POST['nama'];
      $email = $_POST['email'];
      $komentar = $_POST['komentar'];
      $submit = $_POST['submit'];
      if ($submit) {
        echo "<br>Nama : $nama"; 
        echo "<br />Email : $email"; 
        echo "<br />Komentar: $komentar"; } ?>
  </body>
</html>
