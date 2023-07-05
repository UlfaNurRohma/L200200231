<html>
    <head>
        <title>Tugas 3</title>
    </head>
    <body>
        <form action="Tugas.php" method="post">
            <p>Nilai A adalah : <input type="text" name="nilaiA" size="3"></p>
            <p>Nilai B adalah : <input type="text" name="nilaiB" size="3"></p>
            <p><input type="submit" value="Proses" name="submit"></p>
        </form>
        <?php
        error_reporting(E_ALL ^ E_NOTICE);
        $nilaiA = $_POST['nilaiA'];
        $nilaiB = $_POST['nilaiB'];
        $submit = $_POST['submit'];
        if($submit){
            $hasil = $nilaiA + $nilaiB;
            echo "Nilai A adalah $nilaiA</br>";
            echo "Nilai B adalah $nilaiB</br>";
            echo "Jadi Nilai A ditambah Nilai B adalah $hasil";        }
        ?>
    </body>
</html>