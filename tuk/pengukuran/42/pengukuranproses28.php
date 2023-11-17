<?php
include "../../config/connection.php";

$NoPetak=$_POST['NoPetak'];
$Nama_Kontraktor=$_POST['Nama_Kontraktor'];
$NoSPK_Harvesting=$_POST['NoSPK_Harvesting'];
$Tanggal_Ukur=$_POST['Tanggal_Ukur'];
$Jenis_Tanaman=$_POST['Jenis_Tanaman'];
$Sortimen_Kayu=$_POST['Sortimen_Kayu'];
$NoTumpukan=$_POST['NoTumpukan'];
$NoBatang=$_POST['NoBatang'];
$Diameter=$_POST['Diameter'];
$Panjang=$_POST['Panjang'];
$Lebar=$_POST['Lebar'];
$Tinggi=$_POST['Tinggi'];
$Nama_Sceller=$_POST['Nama_Sceller'];
$Nama_Pengawas=$_POST['Nama_Pengawas'];

$query=mysqli_query($connect, "INSERT INTO pengukuran_kayu VALUES ('','$NoPetak','$Nama_Kontraktor', 'NoSPK_Harvesting', '$Tanggal_Ukur','$Jenis_Tanaman','$Sortimen_Kayu','$NoTumpukan','$NoBatang','$Diameter','$Panjang','$Lebar','$Tinggi','$Nama_Sceller','$Nama_Pengawas')");
if ($query)
	 {
		echo '<script>
		alert("Data Berhasil Disimpan");
		window.location.href="index42.php"
	</script>';
	}
	else{
	echo '<script>
		alert("Data Gagal Disimpan");
		window.location.href="index42.php"
	</script>';	
	}

?>