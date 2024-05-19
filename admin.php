<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <link rel="icon" href="assets/logo.jpg" />
    <link rel="stylesheet" href="css/admin.css" />
    <link href="https://unpkg.com/boxicons@2.0.7/css/boxicons.min.css" rel="stylesheet" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Webmilk: Penjualan Susu</title>
</head>

<body>
    <div class="sidebar">
        <div class="logo-details">
            <img src="assets/logo.jpg" alt="Webmilk Logo" width="20" height="auto" />
            <span class="logo_name"> Webmilk</span>
        </div>
        <ul class="nav-links">
            <li>
                <a href="admin.php" class="active">
                    <i class="bx bx-grid-alt"></i>
                    <span class="links_name">Dashboard</span>
                </a>
            </li>
            <li>
                <a href="categories/categories.php">
                    <i class="bx bx-box"></i>
                    <span class="links_name">Produk</span>
                </a>
            </li>
            <li>
                <a href="transaction/transaction.php">
                    <i class="bx bx-list-ul"></i>
                    <span class="links_name">Pesanan</span>
                </a>
            </li>
            <li>
                <a href="logout.php">
                    <i class="bx bx-log-out"></i>
                    <span class="links_name">Log out</span>
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
                <span class="admin_name">Webmilk Admin</span>
                <i class="bx bx-user"></i>
            </div>
        </nav>
        <div class="home-content">
            <h1>Selamat Datang Admin di Webmilk</h1>
            <p>
                Webmilk adalah platform penjualan susu yang menyediakan berbagai produk susu murni berkualitas.
            </p>
            <img src="assets/jenis susu.jpg" alt="Jenis Susu" height="500" />
            <div id="text"></div>
            <div id="date"></div>
        </div>
    </section>
    <script>
    document.addEventListener("DOMContentLoaded", () => {
        const sidebar = document.querySelector(".sidebar");
        const sidebarBtn = document.querySelector(".sidebarBtn");
        sidebarBtn.onclick = () => {
            sidebar.classList.toggle("active");
            if (sidebar.classList.contains("active")) {
                sidebarBtn.classList.replace("bx-menu", "bx-menu-alt-right");
            } else {
                sidebarBtn.classList.replace("bx-menu-alt-right", "bx-menu");
            }
        };

        const months = ["Januari", "Februari", "Maret", "April", "Mei",
            "Juni", "Juli", "Agustus", "September",
            "Oktober", "November", "Desember"
        ];
        const days = ["Minggu", "Senin", "Selasa", "Rabu", "Kamis",
            "Jumat", "Sabtu"
        ];

        function updateTime() {
            const date = new Date();
            const jam = date.getHours();
            const tanggal = date.getDate();
            const hari = days[date.getDay()];
            const bulan = months[date.getMonth()];
            const tahun = date.getFullYear();
            let m = date.getMinutes();
            let s = date.getSeconds();
            m = checkTime(m);
            s = checkTime(s);
            document.getElementById("date").innerHTML =
                `${hari}, ${tanggal} ${bulan} ${tahun}, ${jam}:${m}:${s}`;
            requestAnimationFrame(updateTime);
        }

        function checkTime(i) {
            return (i < 10) ? "0" + i : i;
        }

        function setGreeting() {
            const date = new Date();
            const jam = date.getHours();
            let greetingText = '';
            if (jam >= 4 && jam <= 10) {
                greetingText = 'Selamat Pagi, Admin!';
            } else if (jam >= 11 && jam <= 14) {
                greetingText = 'Selamat Siang, Admin!';
            } else if (jam >= 15 && jam <= 18) {
                greetingText = 'Selamat Sore, Admin!';
            } else {
                greetingText = 'Selamat Malam, Admin!. Jangan lupa istirahat yaaa :*';
            }
            document.getElementById("text").innerText = greetingText;
        }

        setGreeting();
        updateTime();
    });
    </script>
</body>

</html>