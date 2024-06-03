<?php
session_start(); // Mulai session di awal file

// Sertakan file koneksi database (database.php)
require_once 'config/database.php'; // Sesuaikan path jika perlu

// Fungsi validasi input (contoh sederhana)
function validateInput($input) {
    $input = trim($input);
    $input = stripslashes($input);
    $input = htmlspecialchars($input);
    return $input;
}

// Fungsi login (menggunakan POST jika didukung)
function login() {
    global $conn;

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $username = validateInput($_POST['username']);
        $password = validateInput($_POST['password']); // Tidak ada enkripsi

        $query = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
        $result = mysqli_query($conn, $query);

        if (mysqli_num_rows($result) == 1) {
            $user = mysqli_fetch_assoc($result);
            $_SESSION['id'] = $user['id'];
            $_SESSION['role'] = $user['role'];
            $_SESSION['username'] = $user['username'];
            return true;
        }
    }
    return false; 
}

// Fungsi registrasi (menggunakan POST jika didukung)
function register() {
    global $conn;

    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $username = validateInput($_POST['username']);
        $password = validateInput($_POST['password']); // Tidak ada enkripsi
        $role = validateInput($_POST['role']);

        // Validasi role (pastikan hanya nilai yang diizinkan)
        $validRoles = ['admin', 'kasir', 'gudang'];
        if (!in_array($role, $validRoles)) {
            return false; // Atau berikan pesan kesalahan yang sesuai
        }

        $query = "INSERT INTO users (username, password, role) VALUES ('$username', '$password', '$role')";
        return mysqli_query($conn, $query);
    }
    return false;
}

// Fungsi pengecekan pengguna login
function isLoggedIn() {
    return isset($_SESSION['id']);
    return isset($_SESSION['username']);
    return isset($_SESSION['role']);
}

// Fungsi untuk mendapatkan informasi pengguna yang sedang login (opsional)
function getCurrentUser() {
    if (isLoggedIn()) {
        global $conn;
        $id = $_SESSION['id'];
        $username = $_SESSION['username'];
        $role = $_SESSION['role'];
        $query = "SELECT * FROM users WHERE id = $id AND username = '$username' AND role = '$role'";
        $result = mysqli_query($conn, $query);
        return mysqli_fetch_assoc($result);
    } else {
        return null;
    }
}
// Fungsi untuk memeriksa apakah pengguna sudah login dan memiliki peran yang diizinkan
function checkRole($allowedRoles) {
    if (!isLoggedIn()) {
        header('Location: login.php'); // Redirect ke halaman login jika belum login
        exit();
    }

    if (!in_array($_SESSION['role'], $allowedRoles)) {
        // Jika pengguna tidak memiliki akses, arahkan ke halaman lain (misalnya, 403.php)
        header('Location: 403.php'); // Redirect ke halaman error jika tidak memiliki akses
        exit();
    }
}

function logout() {
    session_unset();
    session_destroy();
    header('Location: login.php'); // Arahkan ke halaman login setelah logout
    exit();
}

// Fungsi untuk mendapatkan daftar sparepart (contoh)
function getSpareparts() {
    global $conn;
    checkRole(['admin', 'gudang', 'kasir']); 
    $query = "SELECT * FROM spareparts";
    $result = mysqli_query($conn, $query);
    return mysqli_fetch_all($result, MYSQLI_ASSOC);
}

// Fungsi untuk mendapatkan daftar jasa (contoh)
function getJasa() {
    global $conn;
    checkRole(['admin', 'gudang', 'kasir']); 
    $query = "SELECT * FROM jasa";
    $result = mysqli_query($conn, $query);
    return mysqli_fetch_all($result, MYSQLI_ASSOC);
}

// Fungsi untuk mendapatkan daftar pelanggan (contoh)
function getPelanggan() {
    global $conn;
    checkRole(['admin', 'gudang', 'kasir']); 
    $query = "SELECT * FROM pelanggan";
    $result = mysqli_query($conn, $query);
    return mysqli_fetch_all($result, MYSQLI_ASSOC);
}

// Fungsi untuk mendapatkan daftar kendaraan (contoh)
function getKendaraan() {
    global $conn;
    checkRole(['admin', 'gudang', 'kasir']); 
    $query = "SELECT * FROM kendaraan";
    $result = mysqli_query($conn, $query);
    return mysqli_fetch_all($result, MYSQLI_ASSOC);
}

// Fungsi untuk mendapatkan daftar transaksi (contoh)
function getTransaksi() {
    global $conn;
    checkRole(['admin', 'gudang', 'kasir']); 
    $query = "SELECT * FROM transaksi";
    $result = mysqli_query($conn, $query);
    return mysqli_fetch_all($result, MYSQLI_ASSOC);
}

// Fungsi untuk mendapatkan detail transaksi berdasarkan ID transaksi (contoh)
function getDetailTransaksi($id_transaksi) {
    global $conn;
    checkRole(['admin', 'gudang', 'kasir']); 
    $query = "SELECT * FROM detail_transaksi WHERE id_transaksi = $id_transaksi";
    $result = mysqli_query($conn, $query);
    return mysqli_fetch_all($result, MYSQLI_ASSOC); }