<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="assets/logo.jpg" />
    <link rel="stylesheet" type="text/css" href="css/style.css" />
    <title>WebMilk: Penjualan Susu</title>
    <style>
    /* CSS untuk carousel */
    .carousel-container {
        max-width: 700px;
        /* Atur lebar maksimum sesuai kebutuhan Anda */
        margin: 0 auto;
        /* Ini akan membuat container berada di tengah */
        overflow: hidden;
        position: relative;
        /* Tambahkan ini */
    }

    .carousel-container img {
        width: 100%;
        height: auto;
        display: block;
    }

    .arrow {
        position: absolute;
        top: 50%;
        transform: translateY(-50%);
        width: 40px;
        height: 40px;
        background-color: rgba(255, 255, 255, 0.5);
        color: #333;
        font-size: 24px;
        line-height: 40px;
        text-align: center;
        cursor: pointer;
        z-index: 2;
    }

    .arrow-left {
        left: 10px;
        /* Sesuaikan posisi panah kiri */
    }

    .arrow-right {
        right: 10px;
        /* Sesuaikan posisi panah kanan */
    }
    </style>
</head>

<body style="text-align: center">
    <header>
        <nav>
            <div class="logo">
                <img src="assets/logo.jpg" alt="" width="150" height="auto" />
            </div>
            <div class="navbar">
                <a href="#" id="home-link">Beranda</a>
                <a href="#" id="category-link">Kategori</a>
                <a href="login.php" id="login-link">Masuk</a>
            </div>
        </nav>
    </header>
    <main id="main-content">
        <div class="jumbotron">
            <h1>Cari Produk Susu Murni Terbaik, Nikmati Hidup Sehatmu</h1>
            <p>
                Dapatkan susu murni berkualitas terbaik langsung ke pintu rumah Anda
            </p>
            <div class="carousel-container" id="carousel-container">
                <img src="assets/milk.jpg" alt="" />
                <div class="arrow arrow-left" onclick="prevImage()">&lt;</div>
                <div class="arrow arrow-right" onclick="nextImage()">&gt;</div>
            </div>
            <div class="center">
                <button id="shop-button" type="button">Mulai Belanja</button>
            </div>
        </div>
        <div class="cards-categories">
            <div class="card">
                <img src="assets/susu sapi.jpg" alt="" />
            </div>
            <div class="card">
                <img src="assets/susu kambing.jpg" alt="" />
            </div>
            <div class="card">
                <img src="assets/susu kedelai.jpg" alt="" />
            </div>
        </div>
    </main>
    <footer>
        <h4>&copy; WebMilk - Enjoy the Creamy Goodness</h4>
    </footer>
    <script src="js/index.js"></script> <!-- Menambahkan skrip JavaScript terpisah -->
</body>

</html>