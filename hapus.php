<?php
include "config.php";

if (isset($_GET['id'])) {
    $id = $_GET['id'];

    // Hapus data dari database
    $koneksi->query("DELETE FROM antrian WHERE id=$id");
}

header("Location: admin.php");
exit();
?>
