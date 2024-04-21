// JavaScript untuk carousel
const images = [
  "assets/milk.jpg",
  "assets/milk 2.jpg",
  "assets/milk 3.jpg",
  "assets/milk 4.jpg",
];
const carouselContainer = document.getElementById("carousel-container");
const imageElement = carouselContainer.querySelector("img");
let currentIndex = 0;

function nextImage() {
  currentIndex = (currentIndex + 1) % images.length;
  imageElement.src = images[currentIndex];
}

function prevImage() {
  currentIndex = (currentIndex - 1 + images.length) % images.length;
  imageElement.src = images[currentIndex];
}

setInterval(nextImage, 3000);

// Menetapkan ukuran gambar sesuai dengan ukuran container
const containerWidth = carouselContainer.offsetWidth;
const containerHeight = carouselContainer.offsetHeight;
imageElement.style.width = containerWidth + "px";
imageElement.style.height = containerHeight + "px";

// Event listener untuk tombol "Mulai Belanja"
const shopButton = document.getElementById("shop-button");
shopButton.addEventListener("click", function () {
  alert("Selamat datang di toko susu kami!");
});

shopButton.addEventListener("click", function () {
  const result = confirm("Apakah Anda ingin mulai berbelanja?");
  if (result) {
    // Aksi yang diambil jika pengguna menekan "OK"
    alert("Selamat datang di toko susu kami!");
  } else {
    // Aksi yang diambil jika pengguna menekan "Cancel" atau menutup dialog
    alert("Terima kasih telah berkunjung!");
  }
});

shopButton.addEventListener("click", function () {
  const name = prompt("Masukkan nama Anda:");
  if (name !== null) {
    alert("Selamat datang, " + name + "! Silakan mulai berbelanja.");
  } else {
    alert("Terima kasih telah berkunjung!");
  }
});
