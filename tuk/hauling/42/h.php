<?php
include "../../../config/connection.php";
$id= $_GET['id'];
$hapus = mysqli_query($connect, "DELETE FROM hauling42 where No_Hauling = '$id'");

if($hapus)
{
	echo '<script>alert("Data Berhasil Dihapus");
	window.location.href="index42.php"</script>';
}
else
{
	echo '<script> alert("Data Gagal Dihapus");
	window.location.href="index42.php"</script>';
}

?>