<?php
session_start();
include "../config/connection.php";


$NoPetak=$_POST['NoPetak'];
$Luasan_Petak=$_POST['Luasan_Petak'];
$Jenis_Tanaman=$_POST['Jenis_Tanaman'];
$Tanggal_Tanam=$_POST['Tanggal_Tanam'];
$Nama_Kontraktor=$_POST['Nama_Kontraktor'];
$NoSPK=$_POST['NoSPK'];
$Luasan_Tebangan=$_POST['Luasan_Tebangan'];
$Tanggal_Mulai=$_POST['Tanggal_Mulai'];
$Tanggal_Berakhir=$_POST['Tanggal_Berakhir'];

// Cek apakah nilai NoPetak sudah ada di database
$cekNoPetak=mysqli_query($connect, "SELECT NoPetak FROM harvesting WHERE NoPetak='$NoPetak'");
if (mysqli_num_rows($cekNoPetak)>0) {
// Nilai NoPetak sudah ada
echo '<script>
alert("No. Petak Sudah Diinput Silahkan Input No. Petak Lainnya");
window.location.href="index.php"
</script>';
} else {
// Nilai NoPetak unik
$query=mysqli_query($connect, "INSERT INTO harvesting VALUES ('','$NoPetak','$Luasan_Petak','$Jenis_Tanaman','$Tanggal_Tanam','$Nama_Kontraktor','$NoSPK','$Luasan_Tebangan','$Tanggal_Mulai','$Tanggal_Berakhir')");
}
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