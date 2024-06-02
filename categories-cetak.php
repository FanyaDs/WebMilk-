<?php
include('koneksi.php');  // Sesuaikan jalurnya jika file ini berada di root folder
require_once("dompdf/autoload.inc.php");  // Sesuaikan jalurnya sesuai struktur direktori

use Dompdf\Dompdf;

$dompdf = new Dompdf();
$query = mysqli_query($koneksi, "SELECT * FROM tb_categories");

$html = '<center><h3>Data Kategori</h3></center><hr/><br>';
$html .= '<table border="1" width="100%">
            <tr>
                <th>No</th>
                <th>Foto</th>
                <th>Jenis Susu</th>
                <th>Harga</th>
                <th>Deskripsi</th>
            </tr>';
$no = 1;
while ($category = mysqli_fetch_array($query)) {
    $html .= "<tr>
                <td>" . $no . "</td>
                <td><img src='img_categories/" . $category['photo'] . "' alt='" . $category['categories'] . "' width='50px'></td>
                <td>" . $category['categories'] . "</td>
                <td>Rp. " . number_format($category['price']) . "</td>
                <td>" . $category['description'] . "</td>
            </tr>";
    $no++;
}
$html .= "</table>";

$dompdf->loadHtml($html);
// Setting ukuran dan orientasi kertas
$dompdf->setPaper('A4', 'portrait');
// Rendering dari HTML ke PDF
$dompdf->render();
// Melakukan output file PDF
$dompdf->stream('laporan-kategori.pdf');
?>