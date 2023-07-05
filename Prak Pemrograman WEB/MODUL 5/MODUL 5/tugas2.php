<html>

<head>
    <title>CRUD Gudang</title>
</head>
<?php
$conn = mysqli_connect("localhost", "root", "", "gudang");
?>

<body>
    <!-- INPUT DATA GUDANG -->
    <h3>Input Data Gudang</h3>
    <table border='0' width='30%'>
        <form action='tugas2.php' method='post'>
            <tr>
                <td width='25%'>Kode Gudang</td>
                <td width='5%'>:</td>
                <td width='65%'><input type='text' name='kode' size='10'></td>
            </tr>
            <tr>
                <td width='25%'>Nama Gudang</td>
                <td width='5%'>:</td>
                <td width='65%'><input type='text' name='nama' size='30'></td>
            </tr>
            <tr>
                <td width='25%'>Lokasi</td>
                <td width='5%'>:</td>
                <td width='65%'><input type='text' name='lokasi' size='10'></td>
            </tr>
    </table>
    <input type='submit' name='submit' value='Masukan'>
    </form>
    <?php
    error_reporting(E_ALL ^ E_NOTICE);
    $kode = (int) $_POST['kode'];
    $nama = $_POST['nama'];
    $lokasi = $_POST['lokasi'];
    $submit = $_POST['submit'];
    $input = "insert into gudang (kode_gudang, nama_gudang, lokasi) values ($kode,'$nama','$lokasi')";
    if ($submit) {
        if ($kode == '') {
            echo "</br>Kode tidak boleh kosong, diisi dulu";
        } elseif ($nama == '') {
            echo "</br>Nama tidak boleh kosong, diisi dulu";
        } elseif ($lokasi == '') {
            echo "</br>Lokasi tidak boleh kosong, diisi dulu";
        } else {
            mysqli_query($conn, $input);
            echo "</br>Data berhasil dimasukan";
        }
    }
    ?>
    <hr>


    <!-- EDIT DATA GUDANG -->
    <?php
    $kode = $_GET['edit'];
    $cari = "select * from gudang where kode_gudang='$kode'";
    $hasil_cari = mysqli_query($conn, $cari);
    $data = mysqli_fetch_row($hasil_cari);
    $kd = $data[0];
    $nm = $data[1];
    $lk = $data[2];
    ?>
    <h3>Edit Data Gudang</h3>
    <table border='0' width='30%'>
        <form action='tugas2.php' method='post'>
            <tr>
                <td width='25%'>Kode Gudang</td>
                <td width='5%'>:</td>
                <td width='65%'><input type='text' name='kode' size='10' value='<?php echo $kd; ?>'></td>
            </tr>
            <tr>
                <td width='25%'>Nama Gudang</td>
                <td width='5%'>:</td>
                <td width='65%'><input type='text' name='nama' size='30' value='<?php echo $nm; ?>'></td>
            </tr>
            <tr>
                <td width='25%'>Lokasi</td>
                <td width='5%'>:</td>
                <td width='65%'><input type='text' name='lokasi' size='10' value='<?php echo $lk; ?>'></td>
            </tr>
    </table>
    <input type='submit' name='edit' value='Edit'>
    </form>
    <?php
    error_reporting(E_ALL ^ E_NOTICE);
    $kode = (int) $_POST['kode'];
    $nama = $_POST['nama'];
    $lokasi = $_POST['lokasi'];
    $edit = $_POST['edit'];
    $query = "UPDATE gudang SET nama_gudang='$nama', lokasi='$lokasi' WHERE kode_gudang='$kode'";
    if ($edit) {
        if ($kode == '') {
            echo "</br>Kode tidak boleh kosong, diisi dulu";
        } elseif ($nama == '') {
            echo "</br>Nama tidak boleh kosong, diisi dulu";
        } elseif ($lokasi == '') {
            echo "</br>Lokasi tidak boleh kosong, diisi dulu";
        } else {
            mysqli_query($conn, $query);
            echo "</br>Data berhasil diubah";
        }
    }
    ?>

    <!-- HAPUS GUDANG -->
    <?php
    $kode = $_GET['hapus'];
    if ($kode) {
        echo "data kode $kode akan dihapus";
        $hapus = "delete from gudang where kode_gudang='$kode'";
        $hasil_hapus = mysqli_query($conn, $hapus);
        if ($hasil_hapus) {
            echo "</br>Data berhasil dihapus";
        }
    }
    ?>

    <!-- TAMPIL DATA GUDANG -->
    <h3>Data Gudang</h3>
    <table border='1' width='50%'>
        <tr>
            <th>Kode  Gudang</th>
            <th>Nama Gudang</th>
            <th>Lokasi</th>
            <th>Aksi</th>
        </tr>
        <?php
        $cari = "select * from gudang";
        $hasil_cari = mysqli_query($conn, $cari);
        while ($data = mysqli_fetch_row($hasil_cari)) {
            echo "<tr>
        <td>$data[0]</td>
        <td>$data[1]</td>
        <td>$data[2]</td>
        <td><a href='tugas2.php?edit=$data[0]'>Edit</a> |
        <a href='tugas2.php?hapus=$data[0]'>Hapus</a></td>
        </tr>";
        }
        ?>
    </table>
    <hr>


</body>

</html>ty6p;