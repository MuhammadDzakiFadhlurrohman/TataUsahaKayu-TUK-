<?php
include "../../config/connection.php";
$id= $_GET['id'];
$hapus = mysqli_query($connect, "DELETE FROM operator where No_Alat = '$id'");

if($hapus)
{
	echo '<script>alert("Data Berhasil Dihapus");
	window.location.href="operator.php"</script>';
}
else
{
	echo '<script> alert("Data Gagal Dihapus");
	window.location.href="operator.php"</script>';
}

?>