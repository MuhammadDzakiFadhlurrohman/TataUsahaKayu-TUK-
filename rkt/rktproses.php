<?php
include "../config/connection.php";

$NoPetak=$_POST['NoPetak'];
$Luasan_Petak=$_POST['Luasan_Petak'];
$Jenis_Tanaman=$_POST['Jenis_Tanaman'];
$Tanggal_Tanam=$_POST['Tanggal_Tanam'];
$Kontraktor_Tanam=$_POST['Kontraktor_Tanam'];
$Jarak_Tanam=$_POST['Jarak_Tanam'];

$query=mysqli_query($connect, "INSERT INTO rkt VALUES ('$NoPetak','$Luasan_Petak','$Jenis_Tanaman','$Tanggal_Tanam','$Kontraktor_Tanam','$Jarak_Tanam')");
if ($query)
	 {
		echo '<script>
		alert("Data Berhasil Disimpan");
		window.location.href="index.php"
	</script>';
	}
	else{
	echo '<script>
		alert("Data Gagal Disimpan");
		window.location.href="index.php"
	</script>';	
	}

?>