<?php
$conn = mysqli_connect('localhost', 'root','','rumahsakit');
$nomer = $_GET['Nomer'];
$cari = "select * from pasien where Nomer= '$nomer'";
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
		<title>Data Pasien</title>
	</head>				
			<body>
				<h3>FORM PASIEN</h3>
				<table>
					<form method="POST" action="update.php">
					<tr>
						<td>Nomer</td>
						<td>:</td>
						<td><input type="text" name="nomer" size="10" value="<?php echo $data['Nomer']?>"></td>
					</tr>
					<tr>
						<td>Nama</td>
						<td>:</td>
						<td><input type="text" name="nama" size="30" value="<?=$data['Nama']?>"></td>
					</tr>
					<tr>
						<td>Alamat</td>
						<td>:</td>
						<td><input type="text" name="alamat" size="40" value="<?=$data['Alamat']?>"></td>
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