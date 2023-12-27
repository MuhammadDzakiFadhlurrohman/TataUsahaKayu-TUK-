<?php
session_start();
include "../config/connection.php";

$Nama_Kontraktor=$_POST['Nama_Kontraktor'];
$Jenis_Badan_Usaha=$_POST['Jenis_Badan_Usaha'];
$Nama_Direktur=$_POST['Nama_Direktur'];
$Alamat=$_POST['Alamat'];
$NPWP=$_POST['NPWP'];
$NoRekening=$_POST['NoRekening'];
$Jenis_Pekerjaan=$_POST['Jenis_Pekerjaan'];
$NoPetak=$_POST['NoPetak'];
$Jenis_Tanaman=$_POST['Jenis_Tanaman'];
$Nama_Driver=$_POST['Nama_Driver'];
$NoAlat_Angkut=$_POST['NoAlat_Angkut'];
$Sortimen_Kayu = isset($_POST['Sortimen_Kayu']) ? json_encode($_POST['Sortimen_Kayu']) : null;
$NoPBPH=$_POST['NoPBPH'];
$NoSPK=$_POST['NoSPK'];
$Tanggal_Berlaku=$_POST['Tanggal_Berlaku'];
$Tanggal_Berakhir=$_POST['Tanggal_Berakhir'];

$cekNoPetak=mysqli_query($connect, "SELECT NoPetak FROM rekanan WHERE NoPetak='$NoPetak'");
if (mysqli_num_rows($cekNoPetak) > 0 && $NoPetak !== null) {
// Nilai NoPetak sudah ada
echo '<script>
alert("NoPetak Sudah Diinput Silahkan Input NoPetak Lainnya");
window.location.href="index.php"
</script>';
} else {
$query=mysqli_query($connect, "INSERT INTO rekanan VALUES ('','$Nama_Kontraktor','$Jenis_Badan_Usaha','$Nama_Direktur','$Alamat','$NPWP','$NoRekening','$Jenis_Pekerjaan','$NoPetak','$Jenis_Tanaman','$Nama_Driver','$NoAlat_Angkut','$Sortimen_Kayu','$NoPBPH','$NoSPK','$Tanggal_Berlaku','$Tanggal_Berakhir')");
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