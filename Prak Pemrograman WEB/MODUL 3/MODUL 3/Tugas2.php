<html>
    <head>
        <title>Tugas 3</title>
    </head>
    <body>
        <form action="Tugas2.php" method="post">
            <p>Masukan Nilai : <input type="text" name="nilai" size="3"></p>
            <p><input type="submit" value="Proses" name="submit"></p>
        </form>
        <?php
        error_reporting(E_ALL ^ E_NOTICE);
        $nilai = $_POST['nilai'];
        $submit = $_POST['submit'];
        if($submit){
            if($nilai%2==0){
                $hasil = "Bilangan Genap";
            }else{
                $hasil = "Bilangan Ganjil";
            }
        }
        echo "Nilai yang dimasukkan adalah $nilai</br>";
        echo "Maka $nilai adalah $hasil";
        ?>
    </body>
</html>