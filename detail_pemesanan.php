<?php
include "koneksi.php";

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    $query = mysqli_query($con, "SELECT * FROM pemesanan WHERE id_pemesanan = '$id'");
    $data = mysqli_fetch_array($query);

    echo "<h2>Detail Pemesanan</h2>";
    echo "Nama Tamu: " . $data['nama_tamu'] . "<br>";
    echo "Tanggal Masuk: " . $data['tanggal_masuk'] . "<br>";
    echo "Tanggal Keluar: " . $data['tanggal_keluar'] . "<br>";
    echo "Total Harga: " . $data['total_harga'] . "<br>";
    echo "Status: " . $data['status'] . "<br><br>";

    echo '<a href="daftar_pemesanan.php">Kembali ke daftar</a>';
}
?>
