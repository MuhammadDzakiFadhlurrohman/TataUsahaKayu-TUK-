<?php
include "../config/connection.php";

$NoPetak=$_POST['NoPetak'];
$Luasan_Petak=$_POST['Luasan_Petak'];
$Jenis_Tanaman=$_POST['Jenis_Tanaman'];
$Tanggal_Tanam=$_POST['Tanggal_Tanam'];
$Kontraktor_Harvesting=$_POST['Kontraktor_Harvesting'];
$NoSPK=$_POST['NoSPK'];
$Luasan_Tebangan=$_POST['Luasan_Tebangan'];
$Tanggal_Mulai=$_POST['Tanggal_Mulai'];
$Tanggal_Berakhir=$_POST['Tanggal_Berakhir'];

$query=mysqli_query($connect, "INSERT INTO harvesting VALUES ('','$NoPetak','$Luasan_Petak','$Jenis_Tanaman','$Tanggal_Tanam','$Kontraktor_Harvesting','$NoSPK','$Luasan_Tebangan','$Tanggal_Mulai','$Tanggal_Berakhir')");
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