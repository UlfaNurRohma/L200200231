<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>variable</title>
</head>
<body>
    <h1>Nilai</h1>
    <form action="kendali.php" method="post">
        <p>Masukkan nilai angka (0-100) : <input type="text" name="nilai" size="3"></p>
        <p><input type="submit" value="Proses" name="submit"></p>
    </form>
    <?php
    error_reporting(E_ALL ^ E_NOTICE);
    $nilai = $_POST['nilai'];
    $submit = $_POST['submit'];
    if($submit){
        if($nilai==""){
            $huruf='"Nilai kosong/belum diisi"';
        }elseif($nilai<=20){
            $huruf='E';
        }elseif($nilai<=40){
            $huruf='D';
        }elseif($nilai<=60){
            $huruf='C';
        }elseif($nilai<=80){
            $huruf='B';
        }elseif($nilai<=100){
            $huruf='A';
        }else{
            $huruf='"Nilai yang dimasukkan salah!"';
        }
        echo "Nilai angka adalah $nilai</br>";
        echo "Maka nilai huruf adalah $huruf";
    }
    ?>
</body>
</html>