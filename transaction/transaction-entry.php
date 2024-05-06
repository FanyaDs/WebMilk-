<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="UTF-8" />
    <link rel="icon" href="../assets/logo.jpg" />
    <link rel="stylesheet" href="../css/admin.css" />
    <!-- Tautan CDN Boxicons -->
    <link
      href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css"
      rel="stylesheet"
    />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>webmilk: Penjualan Susu | Entri Transaksi</title>
  </head>
  <body>
    <div class="sidebar">
      <div class="logo-details">
        <!-- <i class="bx bx-category"></i> -->
        <img src="assets/logo.jpg" alt="" width="20" height="auto" />
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
        <h3>Entri Transaksi</h3>
        <div class="form-login">
          <form action="">
            <label for="nama">Nama</label>
            <input
              class="input"
              type="text"
              name="nama"
              id="nama"
              placeholder="Nama"
            />
            <label for="jenis">Jenis</label>
            <input
              class="input"
              type="text"
              name="jenis"
              id="jenis"
              placeholder="Jenis"
            />
            <label for="harga">Harga</label>
            <input
              class="input"
              type="text"
              name="harga"
              id="harga"
              placeholder="Harga"
            />
            <label for="tgl">Tanggal</label>
            <input
              class="input"
              type="date"
              name="tgl"
              id="tgl"
              style="margin-bottom: 20px"
            />
            <button type="submit" class="btn btn-simpan" name="simpan">
              Simpan
            </button>
          </form>
        </div>
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
