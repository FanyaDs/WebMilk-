<?php
include 'koneksi.php';

if (isset($_POST['register'])) {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    if (empty($email) || empty($username) || empty($password)) {
        echo "<script>
                alert('Pastikan Anda mengisi semua data');
                window.location = 'register.php';
              </script>";
    } else {
        $sql = "INSERT INTO tb_admin (email, password, username) VALUES ('$email', '$password', '$username')";
        if (mysqli_query($koneksi, $sql)) {
            echo "<script>
                    alert('Registrasi berhasil, silahkan login');
                    window.location = 'login.php';
                  </script>";
        } else {
            echo "<script>
                    alert('Terjadi kesalahan, silahkan coba lagi');
                    window.location = 'register.php';
                  </script>";
        }
    }
}
?>