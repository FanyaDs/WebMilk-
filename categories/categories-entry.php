<?php 
session_start();
if (!isset($_SESSION['username'])) {
    header('location:../login.php');
    exit;
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
    <title>webmilk: penjualan susu | Entri Kategori</title>
</head>

<body>
    <div class="sidebar">
        <div class="logo-details">
            <span class="logo_name">webmilk</span>
        </div>
        <ul class="nav-links">
            <li><a href="../admin.php" class="active"><i class="bx bx-grid-alt"></i><span
                        class="links_name">Dasbor</span></a></li>
            <li><a href="categories.php"><i class="bx bx-box"></i><span class="links_name">Kategori</span></a></li>
            <li><a href="../transaction/transaction.php"><i class="bx bx-list-ul"></i><span
                        class="links_name">Transaksi</span></a></li>
            <li><a href="../logout.php"><i class="bx bx-log-out"></i><span class="links_name">Keluar</span></a></li>
        </ul>
    </div>
    <section class="home-section">
        <nav>
            <div class="sidebar-button"><i class="bx bx-menu sidebarBtn"></i></div>
            <div class="profile-details"><span class="admin_name">webmilk: penjualan susu</span></div>
        </nav>
        <div class="home-content">
            <h3>Entri Kategori</h3>
            <div class="form-login">
                <form action="categories-proses.php" method="post" enctype="multipart/form-data">
                    <label for="categories">Jenis Susu</label>
                    <input class="input" type="text" name="categories" id="categories" placeholder="Masukan Jenis Susu"
                        required />
                    <label for="price">Harga</label>
                    <input class="input" type="text" name="price" id="price" placeholder="Harga" required />
                    <label for="description">Deskripsi</label>
                    <input class="input" type="text" name="description" id="description" placeholder="Deskripsi Susu"
                        required />
                    <label for="photo">Foto</label>
                    <input type="file" name="photo" id="photo" style="margin-bottom: 20px" required />
                    <button type="submit" class="btn btn-simpan" name="simpan">Simpan</button>
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