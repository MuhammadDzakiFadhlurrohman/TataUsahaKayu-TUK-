<?php
include "../config/connection.php";

$NoPetak=$_POST['NoPetak'];
$Luasan_Petak=$_POST['Luasan_Petak'];
$Jenis_Tanaman=$_POST['Jenis_Tanaman'];
$Tanggal_Tanam=$_POST['Tanggal_Tanam'];
$Kontraktor_Tanam=$_POST['Kontraktor_Tanam'];
$Jarak_Tanam=$_POST['Jarak_Tanam'];

// Cek apakah nilai NoPetak sudah ada di database
$cekNoPetak=mysqli_query($connect, "SELECT NoPetak FROM rkt WHERE NoPetak='$NoPetak'");
if (mysqli_num_rows($cekNoPetak)>0) {
// Nilai NoPetak sudah ada
echo '<script>
alert("No. Petak Sudah Diinput Silahkan Input No. Petak Lainnya");
window.location.href="index.php"
</script>';
} else {
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
}

?>