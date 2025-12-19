<?php
$koneksi = new mysqli("localhost", "root", "", "antrian_etle");
if ($koneksi->connect_error) {
    die("Koneksi gagal: " . $koneksi->connect_error);
}