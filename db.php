<?php
$conn = new mysqli("localhost", "root", "", "antrian_etle");
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>