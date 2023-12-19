<?php
session_start();
include '../config/connection.php';
$Username=$_SESSION['Username'];
if(isset($Username))
{
session_destroy();

echo '<script>
	alert("Anda Telah Logout");
	document.location="login.html"
</script>';
}
?>