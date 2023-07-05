<html>
<head><title>Data Perpustakaan</title></head>
<?php
$conn=mysqli_connect('localhost','root','','perpustakaan');
?>
<body>
<center>
<h3>Masukan Data Buku Perpustakaan :</h3>
<table border='0' width='30%'>
<form method='post' action='form.php'>
<tr>
<td width='25%'>Nomer</td>
<td width='5%'>:</td>
<td width='65%'><input type='text' name='nomer' size='10'></td>
</tr>
<tr>
<td width='25%'>Judul Buku</td>
<td width='5%'>:</td>
<td width='65%'><input type='text' name='judul' size='30'></td>
</tr>
<tr>
<td width='25%'>Nama Pengarang</td>
<td width='5%'>:</td>
<td width='65%'><input type='text' name='pengarang' size='40'></td>
</tr>
</table>
<input type='submit' value='Masukan' name='submit'>
</form>
<?php
error_reporting(E_ALL^E_NOTICE);
$nomer = $_POST['nomer'];
$judul = $_POST['judul'];
$pengarang = $_POST['pengarang'];
$submit = $_POST['submit'];
$input = "insert into buku (nomer, judul, pengarang)values
('$nomer', '$judul', '$pengarang')";
if ($submit){
if ($nomer=''){
echo "Nomer tidak boleh kosong";
}elseif ($judul=''){
echo "Judul tidak boleh kosong";
}elseif ($pengarang=''){
echo "Pengarang tidak boleh kosong";
}else {
mysqli_query($conn, $input);
echo "Data Berhasil dimasukkan";
}
}
?>
<hr>
<h3>Data Buku</h3>
<table border='1' width='50%'>
<tr>
<td align='center' width='20%'><b>Nomer</b></td>
<td align='center' width='30%'><b>Judul Buku</b></td>
<td align='center' width='30%'><b>Nama Pengarang</b></td>
<td colspan= 2 align='center' width='30%'><b>Keterangan</b></td>
</tr>
<?php
$cari = "select * from buku order by nomer";
$hasil_cari = mysqli_query($conn,$cari);
while ($data = mysqli_fetch_row($hasil_cari)){
echo"
<tr>
<td width='20%'>$data[0]</td>
<td width='30%'>$data[1]</td>
<td width='30%'>$data[2]</td>
<td><a href='update_form.php?Nomer=$data[0]'>ubah</a></td>
<td><a href='delete.php?Nomer=$data[0]'>hapus</a></td>
</tr>";
}
?>
</table>
</center>
</body>
</html>