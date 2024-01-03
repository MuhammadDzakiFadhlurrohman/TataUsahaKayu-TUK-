<?php
session_start();
include "../../../config/connection.php";

$currentTotalQuery = mysqli_query($connect, "SELECT COUNT(*) as total FROM hauling28");
$currentTotalRow = mysqli_fetch_assoc($currentTotalQuery);
$currentTotal = $currentTotalRow['total'];

// Decrement the current total by 1
$newTotal = $currentTotal;

$NoPetak=$_POST['NoPetak'];
$Kontraktor_Harvesting=$_POST['Kontraktor_Harvesting'];
$NoSPK_Haversting=$_POST['NoSPK_Harvesting'];
$Kontraktor_Hauling=$_POST['Kontraktor_Hauling'];
$NoSPK_Hauling=$_POST['NoSPK_Hauling'];
$Tanggal_Hauling=$_POST['Tanggal_Hauling'];
$Jenis_Kayu=$_POST['Jenis_Kayu'];
$Sortimen_Kayu=$_POST['Sortimen_Kayu'];
$NoTumpukan=$_POST['NoTumpukan'];
$Nama_Operator=$_POST['Nama_Operator'];
$No_Alat=$_POST['No_Alat'];
$Nama_Driver=$_POST['Nama_Driver'];
$NoAlat_Angkut=$_POST['NoAlat_Angkut'];
$NoTrip_Angkutan=$_POST['NoTrip_Angkutan'];
$Nama_Scaler=$_POST['Nama_Scaler'];
$Nama_Pengawas=$_POST['Nama_Pengawas'];

// Cek apakah nilai NoTumpukan sudah ada di database
$cekNoTumpukan=mysqli_query($connect, "SELECT NoTumpukan FROM hauling28 WHERE NoTumpukan='$NoTumpukan'");
if (mysqli_num_rows($cekNoTumpukan)>0) {
// Nilai NoTumpukan sudah ada
echo '<script>
alert("No. Tumpukan Sudah Diinput Silahkan Input No. Tumpukan Lainnya");
window.location.href="index28.php"
</script>';
} else {
$query=mysqli_query($connect, "INSERT INTO hauling28 VALUES ('','$NoPetak','$Kontraktor_Harvesting', '$NoSPK_Haversting', '$Kontraktor_Hauling', '$NoSPK_Hauling', '$Tanggal_Hauling', '$Jenis_Kayu', '$Sortimen_Kayu', '$NoTumpukan', '$Nama_Operator', '$No_Alat', '$Nama_Driver', '$NoAlat_Angkut', '$NoTrip_Angkutan', '$Nama_Scaler', '$Nama_Pengawas', $newTotal)");
if ($query) {
    echo '<script>
        alert("Data Berhasil Disimpan. Total Data: ' . $newTotal + 1 . '");
        window.location.href="index28.php"
    </script>';
} else {
    echo '<script>
        alert("Data Gagal Disimpan");
        window.location.href="index28.php"
    </script>';
}
}
?>