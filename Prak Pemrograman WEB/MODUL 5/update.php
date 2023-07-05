<?php
	$conn= mysqli_connect('localhost', 'root', '','perpustakaan');
	
	$nomer=$_POST['nomer'];
	$judul=$_POST['judul'];
	$pengarang=$_POST['pengarang'];
	$submit=$_POST['submit'];
	$update="UPDATE buku set Nomer='$nomer', Judul='$judul', Pengarang='$pengarang' WHERE nomer='$nomer' ";
	
	if($submit){
		if ($nomer=''){
			echo "Nomer tidak boleh kosong, diisi dulu";
		}elseif ($judul=''){
			echo "Judul tidak boleh kosong";
		}elseif ($pengarang=''){
			echo "Pengarang tidak boleh kosong";
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