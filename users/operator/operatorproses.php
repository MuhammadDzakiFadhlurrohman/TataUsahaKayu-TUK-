<?php
session_start();
include "../../config/connection.php";

$Nama_Alat=$_POST['Nama_Alat'];
$No_Alat=$_POST['No_Alat'];
$NIK_Operator=$_POST['NIK_Operator'];
$Nama_Scaler=$_POST['Nama_Scaler'];

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

?>