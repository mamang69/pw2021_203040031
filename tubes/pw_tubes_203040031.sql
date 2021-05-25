-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 25 Bulan Mei 2021 pada 15.51
-- Versi server: 10.4.14-MariaDB
-- Versi PHP: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pw_tubes_203040031`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `ladmin`
--

CREATE TABLE `ladmin` (
  `id` int(11) NOT NULL,
  `username` varchar(64) NOT NULL,
  `password` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `ladmin`
--

INSERT INTO `ladmin` (`id`, `username`, `password`) VALUES
(1, 'mamangeldi', 'tampan\r\n');

-- --------------------------------------------------------

--
-- Struktur dari tabel `paint`
--

CREATE TABLE `paint` (
  `id` int(11) NOT NULL,
  `img` varchar(100) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `harga` varchar(100) NOT NULL,
  `deskripsi` varchar(1000) NOT NULL,
  `stok` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `paint`
--

INSERT INTO `paint` (`id`, `img`, `judul`, `harga`, `deskripsi`, `stok`) VALUES
(1, '60a797bce2789.png', 'Depressions', '80.0000', 'COD Ready - FREE ONGKIR FREE Double Tape,pemasangan mudah . Bisa langsung pasang  DROPSHIP / RESELLER WELCOME  Motif lain bisa di cek di Shop kami. Klik beli di masing-masing kode. Kita proses sesuai kode yang di klik beli, Tidak menerima pilihan kode di Chat/Noted. Untuk melihat semua motif, cek Katergori KOLEKSI SHOP kami  SEMUA PRODUK TERSEDIA, bisa langsung klik Beli Harga untuk 1set seperti di foto produk. Lukisan tangan dengan bahan kanvas, sudah ada kayu di belakangnya, bisa langsung dipasang  Ukuran set: 70x40 cm', 'Limited'),
(2, 'Flower.png', 'Flowers', 'Rp150.000', 'COD Ready - FREE ONGKIRFREE Double Tape,pemasangan mudah . Bisa langsung pasang DROPSHIP / RESELLER WELCOMEMotif lain bisa di cek di Shop kami. Klik beli di masing-masing kode. Kita proses sesuai kode yang di klik beli, Tidak menerima pilihan kode di Chat/Noted.Untuk melihat semua motif, cek Katergori KOLEKSI SHOP kamiSEMUA PRODUK TERSEDIA, bisa langsung klik BeliHarga untuk 1set seperti di foto produk.Lukisan tangan dengan bahan kanvas, sudah ada kayu di belakangnya, bisa langsung dipasang Ukuran set: 70x40 cm', 'Limited'),
(3, 'ghost.png', 'Ghost Town', 'Rp80.000\r\n', 'COD Ready - FREE ONGKIR\r\nFREE Double Tape,pemasangan mudah . Bisa langsung pasang \r\nDROPSHIP / RESELLER WELCOME\r\n\r\nMotif lain bisa di cek di Shop kami. Klik beli di masing-masing kode. Kita proses sesuai kode yang di klik beli, Tidak menerima pilihan kode di Chat/Noted.\r\nUntuk melihat semua motif, cek Katergori KOLEKSI SHOP kami\r\n\r\nSEMUA PRODUK TERSEDIA, bisa langsung klik Beli\r\nHarga untuk 1set seperti di foto produk.\r\nLukisan tangan dengan bahan kanvas, sudah ada kayu di belakangnya, bisa langsung dipasang \r\nUkuran set: 40x40 cm', 'Limited'),
(4, 'sunset.png', 'Sunset Forest', 'Rp90.000\r\n', 'COD Ready - FREE ONGKIR\r\nFREE Double Tape,pemasangan mudah . Bisa langsung pasang \r\nDROPSHIP / RESELLER WELCOME\r\n\r\nMotif lain bisa di cek di Shop kami. Klik beli di masing-masing kode. Kita proses sesuai kode yang di klik beli, Tidak menerima pilihan kode di Chat/Noted.\r\nUntuk melihat semua motif, cek Katergori KOLEKSI SHOP kami\r\n\r\nSEMUA PRODUK TERSEDIA, bisa langsung klik Beli\r\nHarga untuk 1set seperti di foto produk.\r\nLukisan tangan dengan bahan kanvas, sudah ada kayu di belakangnya, bisa langsung dipasang \r\nUkuran set: 40x40 cm', 'Limited'),
(5, 'ocean.png', 'The Ocean', 'Rp89.000\r\n', 'COD Ready - FREE ONGKIR\r\nFREE Double Tape,pemasangan mudah . Bisa langsung pasang \r\nDROPSHIP / RESELLER WELCOME\r\n\r\nMotif lain bisa di cek di Shop kami. Klik beli di masing-masing kode. Kita proses sesuai kode yang di klik beli, Tidak menerima pilihan kode di Chat/Noted.\r\nUntuk melihat semua motif, cek Katergori KOLEKSI SHOP kami\r\n\r\nSEMUA PRODUK TERSEDIA, bisa langsung klik Beli\r\nHarga untuk 1set seperti di foto produk.\r\nLukisan tangan dengan bahan kanvas, sudah ada kayu di belakangnya, bisa langsung dipasang \r\nUkuran set: 40x40 cm', 'Limited'),
(6, 'forest.png', 'Sunrise Forest', 'Rp99.000\r\n', 'COD Ready - FREE ONGKIR\r\nFREE Double Tape,pemasangan mudah . Bisa langsung pasang \r\nDROPSHIP / RESELLER WELCOME\r\n\r\nMotif lain bisa di cek di Shop kami. Klik beli di masing-masing kode. Kita proses sesuai kode yang di klik beli, Tidak menerima pilihan kode di Chat/Noted.\r\nUntuk melihat semua motif, cek Katergori KOLEKSI SHOP kami\r\n\r\nSEMUA PRODUK TERSEDIA, bisa langsung klik Beli\r\nHarga untuk 1set seperti di foto produk.\r\nLukisan tangan dengan bahan kanvas, sudah ada kayu di belakangnya, bisa langsung dipasang \r\nUkuran set: 40x40 cm', 'Limited'),
(7, 'pelabuhan.png', 'Pelabuhanratu', 'Rp120.000\r\n', 'COD Ready - FREE ONGKIR\r\nFREE Double Tape,pemasangan mudah . Bisa langsung pasang \r\nDROPSHIP / RESELLER WELCOME\r\n\r\nMotif lain bisa di cek di Shop kami. Klik beli di masing-masing kode. Kita proses sesuai kode yang di klik beli, Tidak menerima pilihan kode di Chat/Noted.\r\nUntuk melihat semua motif, cek Katergori KOLEKSI SHOP kami\r\n\r\nSEMUA PRODUK TERSEDIA, bisa langsung klik Beli\r\nHarga untuk 1set seperti di foto produk.\r\nLukisan tangan dengan bahan kanvas, sudah ada kayu di belakangnya, bisa langsung dipasang \r\nUkuran set: 40x70 cm', 'Limited'),
(8, 'curug.png', 'Curug', 'Rp130.000\r\n', 'COD Ready - FREE ONGKIR\r\nFREE Double Tape,pemasangan mudah . Bisa langsung pasang \r\nDROPSHIP / RESELLER WELCOME\r\n\r\nMotif lain bisa di cek di Shop kami. Klik beli di masing-masing kode. Kita proses sesuai kode yang di klik beli, Tidak menerima pilihan kode di Chat/Noted.\r\nUntuk melihat semua motif, cek Katergori KOLEKSI SHOP kami\r\n\r\nSEMUA PRODUK TERSEDIA, bisa langsung klik Beli\r\nHarga untuk 1set seperti di foto produk.\r\nLukisan tangan dengan bahan kanvas, sudah ada kayu di belakangnya, bisa langsung dipasang \r\nUkuran set: 40x70 cm', 'Limited'),
(9, 'sawah.png', 'rice fields', 'Rp120.000\r\n', 'COD Ready - FREE ONGKIR\r\nFREE Double Tape,pemasangan mudah . Bisa langsung pasang \r\nDROPSHIP / RESELLER WELCOME\r\n\r\nMotif lain bisa di cek di Shop kami. Klik beli di masing-masing kode. Kita proses sesuai kode yang di klik beli, Tidak menerima pilihan kode di Chat/Noted.\r\nUntuk melihat semua motif, cek Katergori KOLEKSI SHOP kami\r\n\r\nSEMUA PRODUK TERSEDIA, bisa langsung klik Beli\r\nHarga untuk 1set seperti di foto produk.\r\nLukisan tangan dengan bahan kanvas, sudah ada kayu di belakangnya, bisa langsung dipasang \r\nUkuran set: 40x70 cm', 'Limited'),
(10, 'montain.png', 'The Montain', 'Rp90.000\r\n', 'COD Ready - FREE ONGKIR\r\nFREE Double Tape,pemasangan mudah . Bisa langsung pasang \r\nDROPSHIP / RESELLER WELCOME\r\n\r\nMotif lain bisa di cek di Shop kami. Klik beli di masing-masing kode. Kita proses sesuai kode yang di klik beli, Tidak menerima pilihan kode di Chat/Noted.\r\nUntuk melihat semua motif, cek Katergori KOLEKSI SHOP kami\r\n\r\nSEMUA PRODUK TERSEDIA, bisa langsung klik Beli\r\nHarga untuk 1set seperti di foto produk.\r\nLukisan tangan dengan bahan kanvas, sudah ada kayu di belakangnya, bisa langsung dipasang \r\nUkuran set: 40x40 cm', 'Limited');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(64) NOT NULL,
  `password` varchar(256) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(47, 'aaaaa', '$2y$10$uky6wpKMEdDdsGP3VFvFhu93XgYYiFBlsGJtTg0B391pMG3Jo/ycq'),
(48, '123456', '$2y$10$vJaNNJ4sSEiFGGihvtmQyeOO3TWJqpuEyQBil6T59bgtpNzEEMbeq'),
(49, 'asu123', '$2y$10$o6r6R.SroUEW2vWIJTgJpehEIaNXluUMkQH2dKEsiWFx7Fh158yEe'),
(51, 'admintampan', '$2y$10$gKx6WdOOka7.LNVm217bqOGt7wIcd4XL7LyX5ERj4B7BfetsuM30C'),
(52, '123123', '$2y$10$lLQGD0JlHAwTm/9Dyoj/a.ZiGDpZ8UTOmE5SLbFcct80Z1D/IF9Cu');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `ladmin`
--
ALTER TABLE `ladmin`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `paint`
--
ALTER TABLE `paint`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `ladmin`
--
ALTER TABLE `ladmin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `paint`
--
ALTER TABLE `paint`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
