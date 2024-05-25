<?php

require_once '../config/database.php'; // Memanggil file konfigurasi database

// Fungsi untuk menjalankan query SELECT
function executeQuery($query) {
    global $conn;

    $result = mysqli_query($conn, $query);

    if (!$result) {
        die("Error executing query: " . mysqli_error($conn));
    }

    $rows = [];
    while ($row = mysqli_fetch_assoc($result)) {
        $rows[] = $row;
    }

    return $rows;
}

// Fungsi untuk menjalankan query INSERT, UPDATE, atau DELETE
function executeNonQuery($query) {
    global $conn;

    $result = mysqli_query($conn, $query);

    if (!$result) {
        die("Error executing query: " . mysqli_error($conn));
    }

    return mysqli_affected_rows($conn);
}

// Fungsi untuk membersihkan input dari karakter yang berpotensi berbahaya (mencegah SQL Injection)
function cleanInput($data) {
    global $conn;

    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    $data = mysqli_real_escape_string($conn, $data);

    return $data;
}


// contoh penggunaan
require_once 'functions/database.php';
// Mendapatkan data semua user
$users = executeQuery("SELECT * FROM users");

// Menambahkan user baru
$username = cleanInput($_POST['username']);
$password = password_hash(cleanInput($_POST['password']), PASSWORD_DEFAULT); // Hash password
executeNonQuery("INSERT INTO users (username, password) VALUES ('$username', '$password')");
