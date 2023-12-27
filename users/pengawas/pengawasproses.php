<?php
session_start();
include "../../config/connection.php";

$Jenis_Pengawas=$_POST['Jenis_Pengawas'];
$NIK_Pengawas=$_POST['NIK_Pengawas'];
$Nama_Pengawas=$_POST['Nama_Pengawas'];

// Cek apakah nilai NoPetak sudah ada di database
$cekNIK=mysqli_query($connect, "SELECT NIK_Pengawas FROM pengawas WHERE NIK_Pengawas='$NIK_Pengawas'");
if (mysqli_num_rows($cekNIK)>0) {
echo '<script>
alert("NIK Pengawas Sudah Diinput Silahkan Input NIK Pengawas Lainnya");
window.location.href="pengawas.php"
</script>';
} else {
	
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
}
?>