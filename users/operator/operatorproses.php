<?php
include "../../config/connection.php";

$Nama_Alat=$_POST['Nama_Alat'];
$No_Alat=$_POST['No_Alat'];
$NIK_Operator=$_POST['NIK_Operator'];
$Nama_Sceller=$_POST['Nama_Sceller'];

$query=mysqli_query($connect, "INSERT INTO operator VALUES ('$Nama_Alat','$No_Alat','$NIK_Operator','$Nama_Sceller')");
if ($query)
	 {
		echo '<script>
		alert("Data Berhasil Disimpan");
		window.location.href="operator.php"
	</script>';
	}
	else{
	echo '<script>
		alert("Data Gagal Disimpan");
		window.location.href="operator.php"
	</script>';	
	}

?>