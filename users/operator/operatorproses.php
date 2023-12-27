<?php
session_start();
include "../../config/connection.php";

$Nama_Alat=$_POST['Nama_Alat'];
$No_Alat=$_POST['No_Alat'];
$NIK_Operator=$_POST['NIK_Operator'];
$Nama_Scaler=$_POST['Nama_Scaler'];

// Cek apakah nilai NoPetak sudah ada di database
$cekNIK=mysqli_query($connect, "SELECT NIK_Operator FROM operator WHERE NIK_Operator='$NIK_Operator'");
if (mysqli_num_rows($cekNIK)>0) {
echo '<script>
alert("NIK Operator Sudah Diinput Silahkan Input NIK Operator Lainnya");
window.location.href="operator.php"
</script>';
} else {

$query=mysqli_query($connect, "INSERT INTO operator VALUES ('$Nama_Alat','$No_Alat','$NIK_Operator','$Nama_Scaler')");
if ($query)
	 {
		echo '<script>
		alert("Data Berhasil Disimpan");
		window.location.href="operator.php"
	</script>';
	}
	else{
	echo '<script>
		alert("Data Gagal Disimpan");
		window.location.href="operator.php"
	</script>';	
	}
}
?>