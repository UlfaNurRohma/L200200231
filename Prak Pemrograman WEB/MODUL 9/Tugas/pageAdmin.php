<?php
    session_start();
    echo "Anda berhasil login sebagai ".$_SESSION['username']." Dan anda terdaftar sebagai ".$_SESSION['status']; 

    echo "<br><br><b>Tampilan admin tidak difokuskan agar menarik, akan tetapi lebih difokuskan dalam 
    fungsionalitas dan kinerja halaman.</b>";

    echo "<br><br>Silahkan logout dengan klik link <a href='logoutTugas.php'>Disini</a>";
?>
