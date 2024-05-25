<?php
// Konfigurasi database
$db_host = 'localhost'; // Ganti dengan host database Anda
$db_user = 'root';      // Ganti dengan username database Anda
$db_pass = '';          // Ganti dengan password database Anda
$db_name = 'bengkel_motor'; // Ganti dengan nama database Anda

// Membuat koneksi
$conn = mysqli_connect($db_host, $db_user, $db_pass, $db_name);

// Memeriksa koneksi
if (!$conn) {
    die("Koneksi database gagal: " . mysqli_connect_error());
}

// cara penggunaan
require_once 'config/database.php';
