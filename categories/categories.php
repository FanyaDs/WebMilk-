<!DOCTYPE html>
<html lang="id" dir="ltr">
  <head>
    <meta charset="UTF-8" />
    <link rel="icon" href="../assets/logo.jpg" />
    <link rel="stylesheet" href="../css/admin.css" />
    <!-- Boxicons CDN Link -->
    <link
      href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css"
      rel="stylesheet"
    />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>webmilk: Penjualan Susu | Kategori</title>
  </head>
  <body>
    <div class="sidebar">
      <div class="logo-details">
        <!-- <i class="bx bx-category"></i> -->
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
          <a href="../categories/categories.php">
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
          <a href="#">
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
              <th scope="col" style="width: 30%">Foto</th>
              <th>Kategori</th>
              <th scope="col" style="width: 20%">Harga</th>
              <th scope="col" style="width: 30%">Aksi</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>
                <img
                  src="../assets/susu sapi.jpg" 
                  alt=""
                  width=""
                  height="200"
                />
              </td>
              <td>Susu Sapi</td>
              <td>100000</td>
              <td><a href="">Edit</a> | <a href="">Hapus</a></td>
            </tr>
          </tbody>
        </table>
      </div>
    </section>
    <script>
      let sidebar = document.querySelector(".sidebar");
      let sidebarBtn = document.querySelector(".sidebarBtn");
      sidebarBtn.onclick = function () {
        sidebar.classList.toggle("active");
        if (sidebar.classList.contains("active")) {
          sidebarBtn.classList.replace("bx-menu", "bx-menu-alt-right");
        } else sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
      };
    </script>
  </body>
</html>