<?php

$servername = 'localhost';
$username = 'root';
$password = '';
$database = 'webmilk_';

// Membuat koneksi
$koneksi = mysqli_connect($servername, $username, $password, $database);

// Mengecek koneksi
if (!$koneksi) {
    die('Koneksi Gagal: ' . mysqli_connect_error());
}

?>