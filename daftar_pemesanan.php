<?php
include "koneksi.php";

$query = mysqli_query($con, "SELECT * FROM pemesanan");

echo "<h2>Daftar Pemesanan</h2>";

while ($row = mysqli_fetch_array($query)) {
    echo "Nama Tamu: " . $row['nama_tamu'] . "<br>";
    echo "Tanggal Masuk: " . $row['tanggal_masuk'] . "<br>";
    echo "Tanggal Keluar: " . $row['tanggal_keluar'] . "<br>";
    echo "Total Harga: " . $row['total_harga'] . "<br>";

    echo '<a href="detail_pemesanan.php?id=' . $row['id_pemesanan'] . '">Lihat Detail</a>';
    echo "<hr>";
}
?>
