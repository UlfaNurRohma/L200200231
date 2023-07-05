<?php
$conn = mysqli_connect('localhost', 'root','','perpustakaan');
$nomer = $_GET['Nomer'];
$cari = "select * from buku where Nomer= '$nomer'";
$hasil_cari = mysqli_query($conn,$cari);
$data = mysqli_fetch_array($hasil_cari);
function active_radio_button($value,$input){
$result = $value==$input? 'checked':'';
return $result;
}
			
			if($data > 0){
				
			
		?>
<html>
	<head>
		<title>Data Buku</title>
	</head>				
			<body>
				<h3>FORM BUKU</h3>
				<table>
					<form method="POST" action="update.php">
					<tr>
						<td>Nomer</td>
						<td>:</td>
						<td><input type="text" name="nomer" size="10" value="<?php echo $data['Nomer']?>"></td>
					</tr>
					<tr>
						<td>Judul Buku</td>
						<td>:</td>
						<td><input type="text" name="judul" size="30" value="<?=$data['Judul']?>"></td>
					</tr>
					<tr>
						<td>Nama Pengarang</td>
						<td>:</td>
						<td><input type="text" name="pengarang" size="40" value="<?=$data['Pengarang']?>"></td>
					</tr>
					<tr>
						<td><input type="submit" name="submit" value="UPDATE DATA"></td>
					</tr>
					</form>
				</table>
			<?php
			}
			?>
				
			</body>
	</html>