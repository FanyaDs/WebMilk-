<?php
include '../koneksi.php';
session_start();

if (!isset($_SESSION['username'])) {
    header('location:../login.php');
    exit;
}

if (isset($_POST['simpan'])) {
    $categories = mysqli_real_escape_string($koneksi, $_POST['categories']);
    $price = mysqli_real_escape_string($koneksi, $_POST['price']);
    $description = mysqli_real_escape_string($koneksi, $_POST['description']);
    $photo = $_FILES['photo']['name'];
    $target = "../img_categories/" . basename($photo);

    // Validasi bahwa price adalah angka
    if (!is_numeric($price)) {
        die("Harga harus berupa angka.");
    }

    // Proses upload file
    if (move_uploaded_file($_FILES['photo']['tmp_name'], $target)) {
        $sql = "INSERT INTO tb_categories (categories, price, description, photo) VALUES ('$categories', '$price', '$description', '$photo')";
        $result = mysqli_query($koneksi, $sql);

        if ($result) {
            header('location:categories.php');
        } else {
            die("Query Error: " . mysqli_error($koneksi));
        }
    } else {
        die("Gagal mengupload gambar.");
    }
} else {
    header('location:categories-entry.php');
}
?>