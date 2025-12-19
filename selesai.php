<?php
include "config.php";

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Update status menjadi 'selesai'
    $koneksi->query("UPDATE antrian SET status='selesai' WHERE id=$id");
}

header("Location: admin.php");
exit();
?>
