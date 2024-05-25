<?php

// Fungsi untuk format tanggal Indonesia
function formatTanggal($tanggal) {
    $bulan = [
        1 => 'Januari', 2 => 'Februari', 3 => 'Maret', 4 => 'April',
        5 => 'Mei', 6 => 'Juni', 7 => 'Juli', 8 => 'Agustus',
        9 => 'September', 10 => 'Oktober', 11 => 'November', 12 => 'Desember'
    ];
    $pecah = explode('-', $tanggal);
    return $pecah[2] . ' ' . $bulan[(int)$pecah[1]] . ' ' . $pecah[0];
}

// Fungsi untuk format rupiah
function formatRupiah($angka) {
    return 'Rp ' . number_format($angka, 0, ',', '.');
}

// Fungsi untuk membuat slug (URL friendly)
function createSlug($text) {
    // Ubah menjadi huruf kecil
    $text = strtolower($text);
    // Ganti spasi dengan tanda hubung
    $text = str_replace(' ', '-', $text);
    // Hapus karakter selain huruf, angka, dan tanda hubung
    $text = preg_replace('/[^a-z0-9-]/', '', $text);
    return $text;
}

// Fungsi untuk redirect ke halaman lain
function redirect($url) {
    header("Location: $url");
    exit();
}

// Contoh penggunaan
// Format tanggal
$tanggal_servis = '2024-05-25';
echo formatTanggal($tanggal_servis); // Output: 25 Mei 2024

// Format rupiah
$harga_jasa = 150000;
echo formatRupiah($harga_jasa); // Output: Rp 150.000

// Membuat slug
$nama_jasa = 'Servis Motor Berkala';
$slug = createSlug($nama_jasa);
echo $slug; // Output: servis-motor-berkala

// Redirect ke halaman lain
redirect('pages/admin/dashboard.php');

