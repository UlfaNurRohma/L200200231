<html>
<head><title>Data Rumah Sakit</title></head>
<?php
$conn=mysqli_connect('localhost','root','','rumahsakit');
?>
<body>
<center>
<h3>Masukan Data Rumah Sakit :</h3>
<table border='0' width='30%'>
<form method='post' action='form.php'>
<tr>
<td width='25%'>Nomer</td>
<td width='5%'>:</td>
<td width='65%'><input type='text' name='nomer' size='10'></td>
</tr>
<tr>
<td width='25%'>Nama</td>
<td width='5%'>:</td>
<td width='65%'><input type='text' name='nama' size='30'></td>
</tr>
<tr>
<td width='25%'>Alamat</td>
<td width='5%'>:</td>
<td width='65%'><input type='text' name='alamat' size='40'></td>
</tr>
</table>
<input type='submit' value='Masukan' name='submit'>
</form>
<?php
error_reporting(E_ALL^E_NOTICE);
$nomer = $_POST['nomer'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$submit = $_POST['submit'];
$input = "insert into pasien (nomer, nama, alamat)values
('$nomer', '$nama', '$alamat')";
if ($submit){
if ($nomer=''){
echo "Nomer tidak boleh kosong";
}elseif ($nama=''){
echo "Nama tidak boleh kosong";
}elseif ($alamat=''){
echo "Alamat tidak boleh kosong";
}else {
mysqli_query($conn, $input);
echo "Data Berhasil dimasukkan";
}
}
?>
<hr>
<h3>Data Pasien</h3>
<table border='1' width='50%'>
<tr>
<td align='center' width='20%'><b>Nomer</b></td>
<td align='center' width='30%'><b>Nama</b></td>
<td align='center' width='30%'><b>Alamat</b></td>
<td colspan= 2 align='center' width='30%'><b>Keterangan</b></td>
</tr>
<?php
$cari = "select * from pasien order by nomer";
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