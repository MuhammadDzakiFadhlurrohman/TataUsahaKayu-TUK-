<?php
include "../../../config/connection.php";

// Retrieve the current total
$currentTotalQuery = mysqli_query($connect, "SELECT COUNT(*) as total FROM hauling");
$currentTotalRow = mysqli_fetch_assoc($currentTotalQuery);
$currentTotal = $currentTotalRow['total'];

// Decrement the current total by 1
$newTotal = $currentTotal - 1;

$NoPetak = $_POST['NoPetak'];
$Kontraktor_Harvesting = $_POST['Kontraktor_Harvesting'];
$NoSPK_Harvesting = $_POST['NoSPK_Harvesting'];
$NoSPK_Hauling = $_POST['NoSPK_Hauling'];
$Tanggal_Hauling = $_POST['Tanggal_Hauling'];
$Jenis_Kayu = $_POST['Jenis_Kayu'];
$Sortimen = $_POST['Sortimen'];
$NoTumpukan = $_POST['NoTumpukan'];
$NoBatang = $_POST['NoBatang'];
$Panjang = $_POST['Panjang'];
$Lebar = $_POST['Lebar'];
$Nama_Operator = $_POST['Nama_Operator'];
$NoAlat = $_POST['NoAlat'];
$Driver = $_POST['Driver'];
$NoTruck = $_POST['NoTruck'];
$NoTrip_Angkutan = $_POST['NoTrip_Angkutan'];
$Nama_Sceller = $_POST['Nama_Sceller'];
$Nama_Pengawas = $_POST['Nama_Pengawas'];

// Calculate m3
$lp = 1 / 4 * 22 / 7 * (($Lebar / 100) ** 2);
$m3 = $lp * $Panjang * 0.6;

// Insert data into hauling table along with updating the total
$query = mysqli_query($connect, "INSERT INTO hauling (NoPetak, Kontraktor_Harvesting, NoSPK_Harvesting, NoSPK_Hauling, Tanggal_Hauling, Jenis_Kayu, Sortimen, NoTumpukan, NoBatang, Panjang, Lebar, m3, Nama_Operator, NoAlat, Driver, NoTruck, NoTrip_Angkutan, Nama_Sceller, Nama_Pengawas, total) 
VALUES ('$NoPetak', '$Kontraktor_Harvesting', '$NoSPK_Harvesting', '$NoSPK_Hauling', '$Tanggal_Hauling', '$Jenis_Kayu', '$Sortimen', '$NoTumpukan', '$NoBatang', '$Panjang', '$Lebar', '$m3', '$Nama_Operator', '$NoAlat', '$Driver', '$NoTruck', '$NoTrip_Angkutan', '$Nama_Sceller', '$Nama_Pengawas', '$newTotal')");

if ($query) {
    echo '<script>
        alert("Data Berhasil Disimpan. Total Data: ' . $newTotal . '");
        window.location.href="index42.php"
    </script>';
} else {
    echo '<script>
        alert("Data Gagal Disimpan");
        window.location.href="index42.php"
    </script>';
}
?>
