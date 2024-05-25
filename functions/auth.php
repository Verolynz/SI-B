<?php
session_start(); // Memulai sesi

// Fungsi untuk menangani login
function login($username, $password) {
    global $conn; // Menggunakan koneksi database dari file config/database.php

    // Query untuk mendapatkan data user berdasarkan username
    $query = "SELECT * FROM users WHERE username = ?";
    $stmt = mysqli_prepare($conn, $query);
    mysqli_stmt_bind_param($stmt, "s", $username);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);

    if (mysqli_num_rows($result) == 1) {
        $user = mysqli_fetch_assoc($result);

        // Verifikasi password (menggunakan password_verify jika password disimpan dalam bentuk hash)
        if (password_verify($password, $user['password'])) {
            // Login berhasil
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['username'] = $user['username'];
            $_SESSION['role'] = $user['role'];
            return true;
        }
    }

    // Login gagal
    return false;
}

// Fungsi untuk menangani logout
function logout() {
    session_destroy(); // Menghapus semua data sesi
    header("Location: index.php"); // Redirect ke halaman login
    exit();
}

// Fungsi untuk memeriksa apakah user sudah login
function isLoggedIn() {
    return isset($_SESSION['user_id']);
}

// Fungsi untuk mendapatkan data user yang sedang login
function getCurrentUser() {
    if (isLoggedIn()) {
        return [
            'id' => $_SESSION['user_id'],
            'username' => $_SESSION['username'],
            'role' => $_SESSION['role']
        ];
    } else {
        return null;
    }
}
