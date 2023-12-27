<?php
session_start();
include "../../../config/connection.php";

$currentTotalQuery = mysqli_query($connect, "SELECT COUNT(*) as total FROM pengukuran42");
$currentTotalRow = mysqli_fetch_assoc($currentTotalQuery);
$currentTotal = $currentTotalRow['total'];

// Decrement the current total by 1
$newTotal = $currentTotal;

$NoPetak=$_POST['NoPetak'];
$Kontraktor_Harvesting=$_POST['Kontraktor_Harvesting'];
$NoSPK_Harvesting=$_POST['NoSPK_Harvesting'];
$Tanggal_Ukur=$_POST['Tanggal_Ukur'];
$Jenis_Kayu=$_POST['Jenis_Kayu'];
$Sortimen_Kayu=$_POST['Sortimen_Kayu'];
$NoBatang=$_POST['NoBatang'];
$Diameter=$_POST['Diameter'];
$Panjang=$_POST['Panjang'];
$Nama_Scaler=$_POST['Nama_Scaler'];
$Nama_Pengawas=$_POST['Nama_Pengawas'];

$m3 = (((($Diameter ** 2 ) * $Panjang ) *  0.7854) / 10000);

$cekNoPetak=mysqli_query($connect, "SELECT NoPetak FROM pengukuran42 WHERE NoPetak='$NoPetak'");
if (mysqli_num_rows($cekNoPetak)>0) {
// Nilai NoPetak sudah ada
echo '<script>
alert("No. Petak Sudah Diinput Silahkan Input No. Petak Lainnya");
window.location.href="index.php"
</script>';
} else {

$query=mysqli_query($connect, "INSERT INTO pengukuran42 VALUES ('','$NoPetak','$Kontraktor_Harvesting','NoSPK_Harvesting','$Tanggal_Ukur','$Jenis_Kayu','$Sortimen_Kayu','$NoBatang','$Diameter','$Panjang','$m3, 2','$Nama_Scaler','$Nama_Pengawas')");
if ($query) {
    echo '<script>
        alert("Data Berhasil Disimpan. Total Data: ' . $newTotal + 1 . '");
        window.location.href="index42.php"
    </script>';
} else {
    echo '<script>
        alert("Data Gagal Disimpan");
        window.location.href="index42.php"
    </script>';
}
}
?>
