<?php
include "../config/connection.php";
$id= $_GET['id'];
$hapus = mysqli_query($connect, "DELETE FROM rkt where NoPetak = '$id'");

if($hapus)
{
	echo '<script>alert("Data Berhasil Dihapus");
	window.location.href="index.php"</script>';
}
else
{
	echo '<script> alert("Data Gagal Dihapus");
	window.location.href="index.php"</script>';
}
?>