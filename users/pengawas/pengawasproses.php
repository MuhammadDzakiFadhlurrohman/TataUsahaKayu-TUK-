<?php
include "../../config/connection.php";

$Jenis_Pengawas=$_POST['Jenis_Pengawas'];
$NIK_Pengawas=$_POST['NIK_Pengawas'];
$Nama_Pengawas=$_POST['Nama_Pengawas'];

$query=mysqli_query($connect, "INSERT INTO pengawas VALUES ('$Jenis_Pengawas','$NIK_Pengawas','$Nama_Pengawas')");
if ($query)
	 {
		echo '<script>
		alert("Data Berhasil Disimpan");
		window.location.href="pengawas.php"
	</script>';
	}
	else{
	echo '<script>
		alert("Data Gagal Disimpan");
		window.location.href="pengawas.php"
	</script>';	
	}

?>