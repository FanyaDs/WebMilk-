<?php
include '../koneksi.php';
session_start();

if (!isset($_SESSION['username'])) {
    header('location:../login.php');
    exit;
}

// Mendapatkan data kategori dari database
$sql = "SELECT * FROM tb_categories";
$result = mysqli_query($koneksi, $sql);

if (!$result) {
    die("Query Error: " . mysqli_error($koneksi));
}
?>

<!DOCTYPE html>
<html lang="id" dir="ltr">

<head>
    <meta charset="UTF-8" />
    <link rel="icon" href="../assets/logo.jpg" />
    <link rel="stylesheet" href="../css/admin.css" />
    <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>webmilk: Penjualan Susu | Kategori</title>
</head>

<body>
    <div class="sidebar">
        <div class="logo-details">
            <span class="logo_name">webmilk</span>
        </div>
        <ul class="nav-links">
            <li>
                <a href="../admin.php" class="active">
                    <i class="bx bx-grid-alt"></i>
                    <span class="links_name">Dasbor</span>
                </a>
            </li>
            <li>
                <a href="categories.php">
                    <i class="bx bx-box"></i>
                    <span class="links_name">Kategori</span>
                </a>
            </li>
            <li>
                <a href="../transaction/transaction.php">
                    <i class="bx bx-list-ul"></i>
                    <span class="links_name">Transaksi</span>
                </a>
            </li>
            <li>
                <a href="../logout.php">
                    <i class="bx bx-log-out"></i>
                    <span class="links_name">Keluar</span>
                </a>
            </li>
        </ul>
    </div>
    <section class="home-section">
        <nav>
            <div class="sidebar-button">
                <i class="bx bx-menu sidebarBtn"></i>
            </div>
            <div class="profile-details">
                <span class="admin_name">webmilk: Penjualan Susu</span>
            </div>
        </nav>
        <div class="home-content">
            <h3>Kategori</h3>
            <button type="button" class="btn btn-tambah">
                <a href="categories-entry.php">Tambah Data</a>
            </button>
            <table class="table-data">
                <thead>
                    <tr>
                        <th scope="col" style="width: 20%">Foto</th>
                        <th scope="col" style="width: 20%">Jenis Susu</th>
                        <th scope="col" style="width: 20%">Harga</th>
                        <th scope="col" style="width: 20%">Deskripsi</th>
                        <th scope="col" style="width: 20%">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php while ($row = mysqli_fetch_assoc($result)) { ?>
                    <tr>
                        <td>
                            <img src="../img_categories/<?= $row['photo'] ?>" alt="<?= $row['categories'] ?>"
                                width="100px">
                        </td>
                        <td><?= $row['categories'] ?></td>
                        <td><?= $row['price'] ?></td>
                        <td><?= $row['description'] ?></td>
                        <td><a href="categories-edit.php?id=<?= $row['id'] ?>">Edit</a> | <a
                                href="categories-hapus.php?id=<?= $row['id'] ?>"
                                onclick="return confirm('Yakin ingin menghapus data ini?')">Hapus</a></td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </section>
    <script>
    let sidebar = document.querySelector(".sidebar");
    let sidebarBtn = document.querySelector(".sidebarBtn");
    sidebarBtn.onclick = function() {
        sidebar.classList.toggle("active");
        if (sidebar.classList.contains("active")) {
            sidebarBtn.classList.replace("bx-menu", "bx-menu-alt-right");
        } else sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
    };
    </script>
</body>

</html>