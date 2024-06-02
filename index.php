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
        margin: 0 auto;
        overflow: hidden;
        position: relative;
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
    }

    .arrow-right {
        right: 10px;
    }

    /* CSS for category cards */
    .card-categories {
        display: flex;
        flex-wrap: wrap;
        justify-content: center;
        margin-top: 20px;
    }

    .card {
        width: calc(33.33% - 20px);
        margin: 10px;
        text-align: center;
        border: 1px solid #ddd;
        border-radius: 5px;
        padding: 10px;
        box-sizing: border-box;
        position: relative;
    }

    .card-image img {
        max-width: 100%;
        height: auto;
    }

    .card-content {
        margin-top: 10px;
    }

    .btn_belanja {
        background-color: #007bff;
        color: #fff;
        border: none;
        padding: 8px 16px;
        border-radius: 5px;
        cursor: pointer;
        display: inline-block;
        margin-top: 10px;
    }

    @media screen and (max-width: 768px) {
        .card {
            width: calc(50% - 20px);
        }
    }

    @media screen and (max-width: 480px) {
        .card {
            width: calc(100% - 20px);
        }
    }

    .modal-container {
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.5);
        justify-content: center;
        align-items: center;
    }

    .modal-dialog {
        background: #fff;
        border-radius: 5px;
        overflow: hidden;
        max-width: 500px;
        width: 100%;
        padding: 20px;
        box-sizing: border-box;
    }

    .modal-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
    }

    .modal-header .btn-close {
        background: none;
        border: none;
        font-size: 20px;
        cursor: pointer;
    }

    .modal-body {
        margin-top: 20px;
    }

    .modal-footer {
        margin-top: 20px;
        text-align: right;
    }

    .btn-secondary,
    .btn-yellow {
        padding: 8px 16px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
    }

    .btn-secondary {
        background: #ccc;
        color: #333;
    }

    .btn-yellow {
        background: #ffb72b;
        color: #fff;
    }

    .modal-container {
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background: rgba(0, 0, 0, 0.5);
        justify-content: center;
        align-items: center;
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
        <div class="card-categories">
            <?php
    include 'koneksi.php';
    $sql = "SELECT * FROM tb_categories";
    $result = mysqli_query($koneksi, $sql);
    if (mysqli_num_rows($result) == 0) {
        echo "<h3 style='text-align: center; color: red;'>Data Kosong</h3>";
    }
    while ($data = mysqli_fetch_assoc($result)) {
        // Tambahkan tombol beli di atas div card
        echo "<button class='btn_belanja' type='button' 
                  data-id='$data[id]' 
                  data-name='$data[categories]' 
                  data-price='$data[price]' 
                  onclick='bukaModal($data[id], \"$data[categories]\", $data[price])'>Beli</button>";
        // Tampilkan widget card
        echo "
            <div class='card'>
                <div class='card-image'>
                    <img src='img_categories/$data[photo]' alt='tidak ada gambar' />
                </div>
                <div class='card-content'>
                    <h2>$data[categories]</h2>
                    <p class='description'>$data[description]</p>
                    <p class='price'>$data[price]</p>
                    <button class='btn_belanja' type='button' 
                        data-id='$data[id]' 
                        data-name='$data[categories]' 
                        data-price='$data[price]' 
                        onclick='bukaModal($data[id], \"$data[categories]\", $data[price])'>Beli</button>
                </div>
            </div>";
    }
    ?>
        </div>

        <div id="myModal" class="modal-container">
            <div class="modal-dialog">
                <div class="modal-header">
                    <h2>Detail Pesanan</h2>
                    <button class="btn-close" onclick="tutupModal()">&times;</button>
                </div>
                <div class="modal-body">
                    <input type="hidden" id="category_id" name="category_id">
                    <input type="hidden" id="category_name" name="category_name">
                    <input type="hidden" id="price" name="price">
                    <p>Kategori: <span id="detail-kategori"></span></p>
                    <p>Harga: <span id="detail-harga"></span></p>
                    <hr>
                    <h3>Isi Informasi Pembeli</h3>
                    <form>
                        <div>
                            <label for="recipient-name">Nama:</label>
                            <input type="text" id="recipient-name" name="recipient-name">
                        </div>
                        <div>
                            <label for="handphone">Nomor HP:</label>
                            <input type="text" id="handphone" name="handphone">
                        </div>
                        <div>
                            <label for="alamat-text">Alamat:</label>
                            <textarea id="alamat-text" name="alamat-text"></textarea>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button class="btn-secondary" onclick="tutupModal()">Batal</button>
                    <button class="btn-yellow" onclick="bukaModal2()">Lanjutkan</button>
                </div>
            </div>
        </div>

        <div id="myModal2" class="modal-container">
            <div class="modal-dialog">
                <div class="modal-header">
                    <h2>Konfirmasi Pesanan</h2>
                    <button class="btn-close" onclick="tutupModal2()">&times;</button>
                </div>
                <div class="modal-body">
                    <h3>Detail Pesanan:</h3>
                    <p>Nama: <span id="detail-nama"></span></p>
                    <p>Nomor HP: <span id="detail-nomorhp"></span></p>
                    <p>Alamat: <span id="detail-alamat"></span></p>
                    <p>Kategori: <span id="detail-kategori2"></span></p>
                    <p>Harga: <span id="detail-harga2"></span></p>
                </div>
                <div class="modal-footer">
                    <button class="btn-secondary" onclick="kembaliKeModalPertama()">Kembali</button>
                    <button class="btn-yellow" onclick="lakukanPembayaran()">Bayar</button>
                </div>
            </div>
        </div>


        </form>
        </div>
        </div>
        </div>
    </main>
    <footer>
        <h4>&copy; WebMilk - Enjoy the Creamy Goodness</h4>
    </footer>

    <script>
    // Fungsi untuk membuka modal
    function bukaModal(categoryId, categoryName, price) {
        // Tampilkan modal dan isi dengan informasi kategori yang sesuai
        document.getElementById('category_id').value = categoryId;
        document.getElementById('category_name').value = categoryName;
        document.getElementById('price').value = price;
        document.getElementById("myModal").style.display = "flex";
    }

    // Fungsi untuk menutup modal pertama
    function tutupModal() {
        document.getElementById("myModal").style.display = "none";
    }

    // Fungsi untuk menutup modal kedua
    function tutupModal2() {
        document.getElementById("myModal2").style.display = "none";
    }

    // Fungsi untuk membuka modal kedua
    function bukaModal2() {
        tutupModal();
        document.getElementById("myModal2").style.display = "flex";

        // Mengambil nilai dari inputan modal pertama dan menampilkannya di modal kedua
        var nama = document.getElementById("recipient-name").value;
        var nomorhp = document.getElementById("handphone").value;
        var alamat = document.getElementById("alamat-text").value;
        var kategori = document.getElementById("category_name").value;
        var harga = document.getElementById("price").value;

        document.getElementById("detail-nama").value = nama;
        document.getElementById("detail-nomorhp").value = nomorhp;
        document.getElementById("detail-alamat").value = alamat;
        document.getElementById("detail-kategori").value = kategori;
        document.getElementById("detail-harga").value = harga;
    }

    // Fungsi untuk kembali ke modal pertama dari modal kedua
    function kembaliKeModalPertama() {
        tutupModal2();
        document.getElementById("myModal").style.display = "flex";
    }

    // Fungsi untuk menangani pembayaran dan menampilkan pesan berhasil
    function lakukanPembayaran() {
        alert("Pembayaran berhasil!");
        tutupModal2();

        // Mengosongkan nilai inputan di modal pertama setelah pembayaran berhasil
        document.getElementById("recipient-name").value = "";
        document.getElementById("handphone").value = "";
        document.getElementById("alamat-text").value = "";
    }

    // Event listener untuk tombol "Beli" di setiap widget
    var buttons = document.querySelectorAll('.btn_belanja');
    buttons.forEach(function(button) {
        button.addEventListener('click', function() {
            var categoryId = this.getAttribute('data-id');
            var categoryName = this.getAttribute('data-name');
            var price = this.getAttribute('data-price');
            bukaModal(categoryId, categoryName, price);
        });

        // Fungsi untuk melakukan permintaan AJAX ke categories.php
        function fetchDataFromCategoriesPHP() {
            var xhr = new XMLHttpRequest();
            xhr.onreadystatechange = function() {
                if (xhr.readyState === XMLHttpRequest.DONE) {
                    if (xhr.status === 200) {
                        // Tangkap respons dari categories.php
                        var response = xhr.responseText;
                        // Perbarui konten HTML yang sesuai dengan respons
                        document.querySelector('.card-categories').innerHTML = response;
                    } else {
                        // Tangani kesalahan jika terjadi
                        console.error('Terjadi kesalahan: ' + xhr.status);
                    }
                }
            };
            // Lakukan permintaan GET ke categories.php
            xhr.open('GET', 'categories.php', true);
            xhr.send();
        }

        // Panggil fungsi fetchDataFromCategoriesPHP saat halaman dimuat
        document.addEventListener('DOMContentLoaded', function() {
            fetchDataFromCategoriesPHP();
        });

    });
    </script>
</body>

</html>