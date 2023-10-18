<?php
include "../../config/connection.php";

$Username=$_POST['Username'];
$User_Password=md5($_POST['User_Password']);
$NIK=$_POST['NIK'];
$Jabatan=$_POST['Jabatan'];
$Otoritas=$_POST['Otorisasi'];

$search=mysqli_query($connect, "SELECT * FROM user WHERE NIK='$NIK' OR Username='$Username'");
if(mysqli_num_rows($search) >= 1)
{
	echo '<script>
		alert("NIK/USERNAME SUDAH TERPAKAI");
		window.location.href="index.php"
	</script>';

}
else
{
	$query = mysqli_query($connect,"INSERT INTO user VALUES ('$Username','$User_Password','$NIK','$Jabatan','2')");
	if ($query)
	 {
		echo '<script>
		alert("User Berhasil Dibuat");
		window.location.href="index.php"
	</script>';
	}
	else{
	echo '<script>
		alert("User Gagal");
		window.location.href="index.php"
	</script>';	
	}
}

?>