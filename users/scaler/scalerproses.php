<?php
session_start();
include "../../config/connection.php";

$Jenis_Scaler=$_POST['Jenis_Scaler'];
$NIK_Scaler=$_POST['NIK_Scaler'];
$Nama_Scaler=$_POST['Nama_Scaler'];

$query=mysqli_query($connect, "INSERT INTO scaler VALUES ('$Jenis_Scaler','$NIK_Scaler','$Nama_Scaler')");
if ($query)
	 {
		echo '<script>
		alert("Data Berhasil Disimpan");
		window.location.href="scaler.php"
	</script>';
	}
	else{
	echo '<script>
		alert("Data Gagal Disimpan");
		window.location.href="scaler.php"
	</script>';	
	}

?>