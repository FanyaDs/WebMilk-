// JavaScript for carousel
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

// Set interval to automatically switch images every 3 seconds
setInterval(nextImage, 3000);

// Set image size to match container size
const containerWidth = carouselContainer.offsetWidth;
const containerHeight = carouselContainer.offsetHeight;
imageElement.style.width = containerWidth + "px";
imageElement.style.height = containerHeight + "px";

// Event listener for "Mulai Belanja" button
const shopButton = document.getElementById("shop-button");
shopButton.addEventListener("click", function () {
  const result = confirm("Apakah Anda ingin mulai berbelanja?");
  if (result) {
    // Action taken if the user clicks "OK"
    alert("Selamat datang di toko susu kami!");
  } else {
    // Action taken if the user clicks "Cancel" or closes the dialog
    alert("Terima kasih telah berkunjung!");
  }
});

// Event listener for "Beli" buttons in category cards
const buyButtons = document.querySelectorAll(".btn_belanja");
buyButtons.forEach(function (button) {
  button.addEventListener("click", function () {
    var categoryId = this.getAttribute("data-id");
    var categoryName = this.getAttribute("data-name");
    var price = this.getAttribute("data-price");
    bukaModal(categoryId, categoryName, price);
  });
});

// Modified bukaModal function to accept category information directly as arguments
function bukaModal(categoryId, categoryName, price) {
  // Display modal and fill it with the corresponding category information
  document.getElementById("category_id").value = categoryId;
  document.getElementById("category_name").value = categoryName;
  document.getElementById("price").value = price;
  document.getElementById("myModal").style.display = "flex";
}

// Other modal-related functions remain unchanged
function tutupModal() {
  document.getElementById("myModal").style.display = "none";
}

function tutupModal2() {
  document.getElementById("myModal2").style.display = "none";
}

function bukaModal2() {
  tutupModal();
  document.getElementById("myModal2").style.display = "flex";

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

function kembaliKeModalPertama() {
  tutupModal2();
  document.getElementById("myModal").style.display = "flex";
}

function lakukanPembayaran() {
  alert("Pembayaran berhasil!");
  tutupModal2();

  document.getElementById("recipient-name").value = "";
  document.getElementById("handphone").value = "";
  document.getElementById("alamat-text").value = "";
}
