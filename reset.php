<?php
include 'config.php';

$sql = "TRUNCATE TABLE antrian"; // hapus semua isi tabel dan reset ID ke 1
if ($koneksi->query($sql) === TRUE) {
    header("Location: index.php"); // kembali ke halaman utama
} else {
    echo "Gagal reset antrian: " . $koneksi->error;
}
?>
