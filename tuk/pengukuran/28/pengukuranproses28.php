<?php
session_start();
include "../../../config/connection.php";

$currentTotalQuery = mysqli_query($connect, "SELECT COUNT(*) as total FROM pengukuran28");
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
$NoTumpukan=$_POST['NoTumpukan'];
$Panjang=$_POST['Panjang'];
$Lebar=$_POST['Lebar'];
$Tinggi=$_POST['Tinggi'];
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

$cekNoPetak28=mysqli_query($connect, "SELECT NoPetak FROM pengukuran28 WHERE NoPetak='$NoPetak'");
if (mysqli_num_rows($cekNoPetak28)>0) {
// Nilai NoPetak sudah ada
echo '<script>
alert("No. Petak Sudah Diinput Silahkan Input No. Petak Lainnya");
window.location.href="index28.php"
</script>';
} else{

$query=mysqli_query($connect, "INSERT INTO pengukuran28 VALUES ('','$NoPetak','$Kontraktor_Harvesting', 'NoSPK_Harvesting', '$Tanggal_Ukur','$Jenis_Kayu','$Sortimen_Kayu','$NoTumpukan','$Panjang','$Lebar','$Tinggi','$m3','$Nama_Scaler','$Nama_Pengawas')");
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