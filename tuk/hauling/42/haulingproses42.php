<?php
session_start();
include "../../../config/connection.php";

// Retrieve the current total
$currentTotalQuery = mysqli_query($connect, "SELECT COUNT(*) as total FROM hauling42");
$currentTotalRow = mysqli_fetch_assoc($currentTotalQuery);
$currentTotal = $currentTotalRow['total'];

// Decrement the current total by 1
$newTotal = $currentTotal;

$NoPetak = $_POST['NoPetak'];
$Kontraktor_Harvesting = $_POST['Kontraktor_Harvesting'];
$NoSPK_Harvesting = $_POST['NoSPK_Harvesting'];
$NoSPK_Hauling = $_POST['NoSPK_Hauling'];
$Tanggal_Hauling = $_POST['Tanggal_Hauling'];
$Jenis_Kayu = $_POST['Jenis_Kayu'];
$NoBatang = $_POST['NoBatang'];
$Nama_Operator = $_POST['Nama_Operator'];
$No_Alat = $_POST['No_Alat'];
$Nama_Driver = $_POST['Nama_Driver'];
$NoAlat_Angkut = $_POST['NoAlat_Angkut'];
$NoTrip_Angkutan = $_POST['NoTrip_Angkutan'];
$Nama_Scaler = $_POST['Nama_Scaler'];
$Nama_Pengawas = $_POST['Nama_Pengawas'];

// Cek apakah nilai NoBatang sudah ada di database
$cekNoBatang=mysqli_query($connect, "SELECT NoBatang FROM hauling42 WHERE NoBatang='$NoBatang'");
if (mysqli_num_rows($cekNoBatang)>0) {
// Nilai NoBatang sudah ada
echo '<script>
alert("No. Batang Sudah Diinput Silahkan Input No. Batang Lainnya");
window.location.href="index42.php"
</script>';
} else {
$query = mysqli_query($connect, "INSERT INTO hauling42 (NoPetak, Kontraktor_Harvesting, NoSPK_Harvesting, NoSPK_Hauling, Tanggal_Hauling, Jenis_Kayu, NoBatang, Nama_Operator, No_Alat, Nama_Driver, NoAlat_Angkut, NoTrip_Angkutan, Nama_Scaler, Nama_Pengawas, total) 
VALUES ('$NoPetak', '$Kontraktor_Harvesting', '$NoSPK_Harvesting', '$NoSPK_Hauling', '$Tanggal_Hauling', '$Jenis_Kayu', '$NoBatang', '$Nama_Operator', '$No_Alat', '$Nama_Driver', '$NoAlat_Angkut', '$NoTrip_Angkutan', '$Nama_Scaler', '$Nama_Pengawas', '$newTotal')");

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
