<?php
include "../../config/connection.php";
$id= $_GET['id'];
$hapus = mysqli_query($connect, "DELETE FROM pengawas where NIK_Pengawas = '$id'");

if($hapus)
{
	echo '<script>alert("Data Berhasil Dihapus");
	window.location.href="pengawas.php"</script>';
}
else
{
	echo '<script> alert("Data Gagal Dihapus");
	window.location.href="pengawas.php"</script>';
}

?>