<?php
include "../../config/connection.php";
$id= $_GET['id'];
$hapus = mysqli_query($connect, "DELETE FROM sceller where NIK_Sceller = '$id'");

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