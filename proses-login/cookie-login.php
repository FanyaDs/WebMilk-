<?php
// Memeriksa apakah data login telah disubmit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Pastikan bahwa Anda memeriksa dan membersihkan data yang diterima
    $username = clean_input($_POST["username"]);
    $password = clean_input($_POST["password"]);
    
    // Lakukan validasi login, misalnya dengan memeriksa di database
    // Di sini, untuk keperluan contoh, kita akan memeriksa apakah username dan password adalah "admin"
    if ($username === "admin" && $password === "admin") {
        // Jika login berhasil, atur cookie
        // Contoh cookie berisi ID pengguna
        $user_id = 123; // Anda dapat menggantinya dengan ID pengguna yang sesuai dari database
        setcookie("user_id", $user_id, time() + (86400 * 30), "/"); // Cookie berlaku selama 30 hari
        header("Location: index.php"); // Redirect ke halaman dashboard atau halaman setelah login
        exit;
    } else {
        // Jika login gagal, mungkin Anda ingin menampilkan pesan kesalahan
        echo "Username atau password salah. Silakan coba lagi.";
    }
}
?>