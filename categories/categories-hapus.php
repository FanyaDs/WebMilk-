<?php
include '../koneksi.php';
session_start();

if (!isset($_SESSION['username'])) {
    header('location:../login.php');
    exit;
}

$id = $_GET['id'];
if (!$id) {
    echo "
    <script>
        alert('Tidak ada ID yang Terdeteksi');
        window.location = 'categories.php';
    </script>
    ";
    exit;
}

$sql = "SELECT * FROM tb_categories WHERE id = '$id'";
$result = mysqli_query($koneksi, $sql);
$data = mysqli_fetch_assoc($result);

if (!$data) {
    echo "
    <script>
        alert('Data tidak ditemukan');
        window.location = 'categories.php';
    </script>
    ";
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <link rel="icon" href="../assets/icon.png" />
    <link rel="stylesheet" href="../css/admin.css" />
    <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Catshop Admin | Hapus Categories</title>
</head>

<body>
    <div class="sidebar">
        <div class="logo-details">
            <i class="bx bx-category"></i>
            <span class="logo_name">CatShop</span>
        </div>
        <ul class="nav-links">
            <li><a href="../admin.php"><i class="bx bx-grid-alt"></i><span class="links_name">Dashboard</span></a></li>
            <li><a href="categories.php" class="active"><i class="bx bx-box"></i><span
                        class="links_name">Categories</span></a></li>
            <li><a href="../transaction/transaction.php"><i class="bx bx-list-ul"></i><span
                        class="links_name">Transaction</span></a></li>
            <li><a href="../logout.php"><i class="bx bx-log-out"></i><span class="links_name">Log out</span></a></li>
        </ul>
    </div>
    <section class="home-section">
        <nav>
            <div class="sidebar-button"><i class="bx bx-menu sidebarBtn"></i></div>
            <div class="profile-details"><span class="admin_name">Catshop Admin</span></div>
        </nav>
        <div class="home-content">
            <h3>Hapus Categories</h3>
            <div class="form-login">
                <form action="categories-proses.php" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="id" value="<?= $data['id'] ?>">
                    <p>Apakah Anda yakin ingin menghapus kategori <b><?= $data['categories'] ?></b>?</p>
                    <button type="submit" class="btn btn-simpan" name="hapus">Hapus</button>
                    <a href="categories.php" class="btn btn-batal">Batal</a>
                </form>
            </div>
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