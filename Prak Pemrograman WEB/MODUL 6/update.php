<?php
	$conn= mysqli_connect('localhost', 'root', '','rumahsakit');
	
	$nomer=$_POST['nomer'];
	$nama=$_POST['nama'];
	$alamat=$_POST['alamat'];
	$submit=$_POST['submit'];
	$update="UPDATE pasien set Nomer='$nomer', Nama='$nama', Alamat='$alamat' WHERE nomer='$nomer' ";
	
	if($submit){
		if ($nomer=''){
			echo "Nomer tidak boleh kosong, diisi dulu";
		}elseif ($nama=''){
			echo "Nama tidak boleh kosong";
		}elseif ($alamat=''){
			echo "Alamat tidak boleh kosong";
		}if ($nomer=''){
			echo "Nomer tidak boleh kosong, diisi dulu";
		}else
			mysqli_query($conn,$update);
			echo "
			<script>
			alert('data berhasil di update');
			document.location.href='form.php';
			</script>";
		}
	
?>