<?php
include "../../config/connection.php";

$Jenis_Sceller=$_POST['Jenis_Sceller'];
$NIK_Sceller=$_POST['NIK_Sceller'];
$Nama_Sceller=$_POST['Nama_Sceller'];

$query=mysqli_query($connect, "INSERT INTO sceller VALUES ('$Jenis_Sceller','$NIK_Sceller','$Nama_Sceller')");
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