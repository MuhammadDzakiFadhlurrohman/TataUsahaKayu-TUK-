<?php
include "../../config/connection.php";

$NoPetak=$_POST['NoPetak'];
$Kontraktor_Harvesting=$_POST['Kontraktor_Harvesting'];
$NoSPK_Haversting=$_POST['NoSPK_Harvesting'];
$NoSPK_Hauling=$_POST['NoSPK_Hauling'];
$Tanggal_Hauling=$_POST['Tanggal_Hauling'];
$Jenis_Kayu=$_POST['Jenis_Kayu'];
$Sortimen=$_POST['Sortimen'];
$NoTumpukan=$_POST['NoTumpukan'];
$NoBatang=$_POST['NoBatang'];
$Panjang=$_POST['Panjang'];
$Lebar=$_POST['Lebar'];
$Tinggi=$_POST['Tinggi'];
$Nama_Operator=$_POST['Nama_Operator'];
$NoAlat=$_POST['NoAlat'];
$Driver=$_POST['Driver'];
$NoTruck=$_POST['NoTruck'];
$NoTrip_Angkutan=$_POST['NoTrip_Angkutan'];
$Nama_Sceller=$_POST['Nama_Sceller'];
$Nama_Pengawas=$_POST['Nama_Pengawas'];
$m3=($Panjang*$Lebar*$Tinggi)*0.6;
$total = $m3/$Sortimen;

$query=mysqli_query($connect, "INSERT INTO hauling VALUES ('','$NoPetak','$Kontraktor_Harvesting', '$NoSPK_Haversting', '$Kontraktor_Hauling', '$NoSPK_Hauling', '$Tanggal_Hauling', '$Jenis_Kayu', '$Sortimen', '$NoTumpukan', '$NoBatang', '$Panjang', '$Lebar', '$Tinggi', '$m3', '$Nama_Operator', '$NoAlat', '$Driver', '$NoTruck', '$NoTrip_Angkutan', '$Nama_Sceller', '$Nama_Pengawas', $total)");
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