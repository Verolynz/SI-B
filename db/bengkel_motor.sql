-- Membuat database (jika belum ada)
CREATE DATABASE IFNOT EXISTS bengkel_motor;

-- Menggunakan database
USE bengkel_motor;

-- Tabel users
CREATE TABLE users (
    id INT PRIMARY KEY AUTO_INCREMENT,
    username VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    role ENUM('admin', 'kasir', 'gudang') NOT NULL
);

-- Tabel spareparts
CREATE TABLE spareparts (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nama VARCHAR(100) NOT NULL,
    harga_beli DECIMAL(10,2) NOT NULL,
    harga_jual DECIMAL(10,2) NOT NULL,
    stok INT NOT NULL
);

-- Tabel jasa
CREATE TABLE jasa (
    id INT PRIMARY KEY AUTO_INCREMENT,
    nama VARCHAR(100) NOT NULL,
    harga DECIMAL(10,2) NOT NULL
);

-- Tabel transaksi
CREATE TABLE transaksi (
    id INT PRIMARY KEY AUTO_INCREMENT,
    tanggal DATE NOT NULL,
    jenis ENUM('pembelian', 'penjualan') NOT NULL,
    total DECIMAL(10,2) NOT NULL,
    id_user INT NOT NULL,
    FOREIGN KEY (id_user) REFERENCES users(id)
);

-- Tabel detail_transaksi
CREATE TABLE detail_transaksi (
    id INT PRIMARY KEY AUTO_INCREMENT,
    id_transaksi INT NOT NULL,
    id_item INT NOT NULL,
    jenis_item ENUM('sparepart', 'jasa') NOT NULL,
    jumlah INT NOT NULL,
    harga DECIMAL(10,2) NOT NULL,
    FOREIGN KEY (id_transaksi) REFERENCES transaksi(id)
);

--Insert data ke tabel users
INSERT INTO users (username, password, role) VALUES
('admin', '$2y$10$f.d1h3423423423423423423423423423423', 'admin'),
('kasir1', '$2y$10$f.d1h3423423423423423423423423423423', 'kasir'),
('gudang1', '$2y$10$f.d1h3423423423423423423423423423423', 'gudang'),
('mekanik1', '$2y$10$f.d1h3423423423423423423423423423423', 'kasir'),
('mekanik2', '$2y$10$f.d1h3423423423423423423423423423423', 'kasir'),
('supervisor', '$2y$10$f.d1h3423423423423423423423423423423', 'admin'),
('kasir2', '$2y$10$f.d1h3423423423423423423423423423423', 'kasir'),
('gudang2', '$2y$10$f.d1h3423423423423423423423423423423', 'gudang'),
('mekanik3', '$2y$10$f.d1h3423423423423423423423423423423', 'kasir'),
('kepala_mekanik', '$2y$10$f.d1h3423423423423423423423423423423', 'admin');

-- Insert data ke tabel spareparts
INSERT INTO spareparts (nama, harga_beli, harga_jual, stok) VALUES
('Oli Mesin 1L', 45000, 55000, 50),
('Kampas Rem Depan', 80000, 100000, 30),
('Busi Standar', 15000, 20000, 100),
('Ban Dalam 14"', 60000, 75000, 25),
('Rantai Motor', 120000, 150000, 20),
('Aki Kering', 250000, 300000, 15),
('Filter Udara', 30000, 40000, 40),
('Bohlam Lampu', 10000, 15000, 80),
('V-Belt', 70000, 90000, 18),
('Kabel Gas', 25000, 35000, 35);

-- Insert data ke tabel jasa
INSERT INTO jasa (nama, harga) VALUES
('Ganti Oli', 20000),
('Ganti Kampas Rem', 35000),
('Servis Ringan', 80000),
('Servis Besar', 150000),
('Tune Up', 50000),
('Ganti Ban Dalam', 25000),
('Ganti Rantai', 40000),
('Ganti Aki', 30000),
('Perbaikan Kelistrikan', 75000),
('Cuci Motor', 15000);

-- Insert data ke tabel transaksi
INSERT INTO transaksi (tanggal, jenis, total, id_user) VALUES
('2024-05-20', 'penjualan', 350000, 2),
('2024-05-21', 'pembelian', 850000, 3),
('2024-05-22', 'penjualan', 120000, 4),
('2024-05-23', 'penjualan', 535000, 7),
('2024-05-24', 'pembelian', 210000, 8),
('2024-05-19', 'penjualan', 90000, 2),
('2024-05-18', 'pembelian', 500000, 3),
('2024-05-17', 'penjualan', 280000, 4),
('2024-05-16', 'penjualan', 150000, 7),
('2024-05-15', 'pembelian', 380000, 8);

-- Insert data ke tabel detail_transaksi
INSERT INTO detail_transaksi (id_transaksi, id_item, jenis_item, jumlah, harga) VALUES
(1, 1, 'sparepart', 2, 55000),
(1, 3, 'jasa', 1, 150000),
(2, 5, 'sparepart', 5, 120000),
(2, 6, 'sparepart', 2, 250000),
(3, 2, 'jasa', 1, 35000),
(3, 8, 'sparepart', 2, 10000),
(4, 1, 'sparepart', 3, 55000),
(4, 4, 'jasa', 1, 80000),
(5, 9, 'sparepart', 2, 70000),
(5, 7, 'sparepart', 3, 30000);
