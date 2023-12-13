<?php
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
$Sortimen=$_POST['Sortimen'];
$NoTumpukan=$_POST['NoTumpukan'];
$Panjang=$_POST['Panjang'];
$Lebar=$_POST['Lebar'];
$Tinggi=$_POST['Tinggi'];
$Nama_Operator=$_POST['Nama_Operator'];
$NoAlat=$_POST['NoAlat'];
$Driver=$_POST['Driver'];
$NoTruck=$_POST['NoTruck'];
$NoTrip_Angkutan=$_POST['NoTrip_Angkutan'];
$Nama_Scaler=$_POST['Nama_Scaler'];
$Nama_Pengawas=$_POST['Nama_Pengawas'];

// Menentukan faktor pengali berdasarkan jenis tanaman
$faktorPengali = 1.0; // Nilai default jika tidak ada faktor khusus
if ($Jenis_Kayu === 'Eucalyptus') {
    $faktorPengali = 0.67;
} elseif ($Jenis_Kayu === 'Accacia') {
    $faktorPengali = 0.59;
}
elseif ($Jenis_Kayu === ' Rimba Campuran') {
    $faktorPengali = 0.63;
}

$m3=$Panjang*$Lebar*$Tinggi*$faktorPengali;

$query=mysqli_query($connect, "INSERT INTO hauling28 VALUES ('','$NoPetak','$Kontraktor_Harvesting', '$NoSPK_Haversting', '$Kontraktor_Hauling', '$NoSPK_Hauling', '$Tanggal_Hauling', '$Jenis_Kayu', '$Sortimen', '$NoTumpukan', '$Panjang', '$Lebar', '$Tinggi', '$m3', '$Nama_Operator', '$NoAlat', '$Driver', '$NoTruck', '$NoTrip_Angkutan', '$Nama_Scaler', '$Nama_Pengawas', $newTotal)");
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
?>