<?php
    session_start();
    include "../config/connection.php";
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        $Username = mysqli_real_escape_string($connect, $_POST['Username']);
        $User_Password = md5($_POST['User_Password']); // Tanpa mengubah kata sandi
        $query = "SELECT * FROM user WHERE Username = '".$Username."'"; //<-- ditambah ". ."
        $result = mysqli_query($connect, $query);
        if ($result) {
            if (mysqli_num_rows($result) === 1) {
                $row = mysqli_fetch_assoc($result);
                if ($User_Password === $row['User_Password']) { //<-- password masukannya gak boleh hasnya dan password uji hasnya pake algo bcrypt (dari dokumentasi)
                    // Login berhasil
                    $_SESSION['Username'] = $row['Username'];
                    $_SESSION['NIK'] = $row['NIK'];
                    $_SESSION['Jabatan'] = $row['Jabatan'];
                    $_SESSION['Otorisasi'] = $row['Otorisasi'];
                    ?>
                    <script>
		            alert("SELAMAT DATANG <?= $row['Username'];?> ANDA TELAH LOGIN");
                    window.location.href="../dashboard.php"
                    </script>
                    <?php
                } else {
                    // Password tidak cocok
                    $error_message = "Password salah.";
                }
            } else {
                // Pengguna tidak ditemukan
                $error_message = "Username tidak ditemukan.";
            }
        } else {
            // Kesalahan kueri SQL
            $error_message = "Terjadi kesalahan dalam proses login.";
        }
    } else {
        // Permintaan tidak valid
        $error_message = "Permintaan tidak valid.";
    }

    if (isset($error_message)) {
        echo "<script>alert('$error_message'); window.location.href='login.html';</script>";
    }
?>
