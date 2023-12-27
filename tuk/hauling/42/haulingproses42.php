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
$Sortimen = $_POST['Sortimen'];
$NoBatang = $_POST['NoBatang'];
$Panjang = $_POST['Panjang'];
$Diameter = $_POST['Diameter'];
$Nama_Operator = $_POST['Nama_Operator'];
$NoAlat = $_POST['NoAlat'];
$Driver = $_POST['Driver'];
$NoTruck = $_POST['NoTruck'];
$NoTrip_Angkutan = $_POST['NoTrip_Angkutan'];
$Nama_Scaler = $_POST['Nama_Scaler'];
$Nama_Pengawas = $_POST['Nama_Pengawas'];

// Calculate m3
$m3 = ((($Diameter ** 2 ) * $Panjang ) *  0.7854) / 10000;

// Cek apakah nilai NoPetak sudah ada di database
$cekNoPetak=mysqli_query($connect, "SELECT NoPetak FROM hauling42 WHERE NoPetak='$NoPetak'");
if (mysqli_num_rows($cekNoPetak)>0) {
// Nilai NoPetak sudah ada
echo '<script>
alert("No. Petak Sudah Diinput Silahkan Input No. Petak Lainnya");
window.location.href="index.php"
</script>';
} else {
$query = mysqli_query($connect, "INSERT INTO hauling42 (NoPetak, Kontraktor_Harvesting, NoSPK_Harvesting, NoSPK_Hauling, Tanggal_Hauling, Jenis_Kayu, Sortimen, NoBatang, Panjang, Diameter, m3, Nama_Operator, NoAlat, Driver, NoTruck, NoTrip_Angkutan, Nama_Scaler, Nama_Pengawas, total) 
VALUES ('$NoPetak', '$Kontraktor_Harvesting', '$NoSPK_Harvesting', '$NoSPK_Hauling', '$Tanggal_Hauling', '$Jenis_Kayu', '$Sortimen', '$NoBatang', '$Panjang', '$Diameter', '$m3', '$Nama_Operator', '$NoAlat', '$Driver', '$NoTruck', '$NoTrip_Angkutan', '$Nama_Scaler', '$Nama_Pengawas', '$newTotal')");

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
