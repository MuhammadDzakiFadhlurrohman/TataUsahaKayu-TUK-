<?php
include "../../../config/connection.php";

$currentTotalQuery = mysqli_query($connect, "SELECT COUNT(*) as total FROM pengukuran42");
$currentTotalRow = mysqli_fetch_assoc($currentTotalQuery);
$currentTotal = $currentTotalRow['total'];

// Decrement the current total by 1
$newTotal = $currentTotal;

$NoPetak=$_POST['NoPetak'];
$Nama_Kontraktor=$_POST['Nama_Kontraktor'];
$NoSPK_Harvesting=$_POST['NoSPK_Harvesting'];
$Tanggal_Ukur=$_POST['Tanggal_Ukur'];
$Jenis_Tanaman=$_POST['Jenis_Tanaman'];
$Sortimen_Kayu=$_POST['Sortimen_Kayu'];
$NoBatang=$_POST['NoBatang'];
$Diameter=$_POST['Diameter'];
$Panjang=$_POST['Panjang'];
$m3=$_POST['m3'];
$Nama_Sceller=$_POST['Nama_Sceller'];
$Nama_Pengawas=$_POST['Nama_Pengawas'];

$lp = 1 / 4 * 22 / 7 * (($Diameter / 100) ** 2);
$m3 = $lp * $Panjang * 0.6;
$query=mysqli_query($connect, "INSERT INTO pengukuran42 VALUES ('','$NoPetak','$Nama_Kontraktor','NoSPK_Harvesting','$Tanggal_Ukur','$Jenis_Tanaman','$Sortimen_Kayu','$NoBatang','$Diameter','$Panjang','$m3','$Nama_Sceller','$Nama_Pengawas','$newTotal')");
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
?>
