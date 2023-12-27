<?php
include "../../config/connection.php";
$id= $_GET['id'];
$hapus = mysqli_query($connect, "DELETE FROM scaler where NIK_Scaler = '$id'");

if($hapus)
{
	echo '<script>alert("Data Berhasil Dihapus");
	window.location.href="scaler.php"</script>';
}
else
{
	echo '<script> alert("Data Gagal Dihapus");
	window.location.href="scaler.php"</script>';
}

?>