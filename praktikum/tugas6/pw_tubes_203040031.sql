-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 25 Apr 2021 pada 18.00
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
(1, 'depression.png', 'Color Of Depressions', '$9', 'kwaokwakwoak', 'Limited'),
(2, 'flower.png', 'Flowers', '$6', 'Flowers in the center of the house', 'Limited'),
(3, 'ghost.png', 'Ghost Town', '$8', 'An abandoned city', 'Limited'),
(4, 'sunset.png', 'Sunset Forest', '$8', 'Sunset view in the forest', 'Limited'),
(5, 'ocean.png', 'The Ocean', '$8', 'Boat on the ocean', 'Limited'),
(6, 'forest.png', 'Sunrise Forest', '$8', 'Sunrise view in the forest', 'Limited'),
(7, 'pelabuhan.png', 'Pelabuhanratu', '$12', 'The View Of Pelabuhan ratu city', 'Limited'),
(8, 'curug.png', 'Curug', '$13', 'Curug of Geopark', 'Limited'),
(9, 'sawah.png', 'rice fields', '$12', 'rice fields in the village', 'Limited'),
(10, 'montain.png', 'The Montain', '$9', 'The big montain', 'Limited');

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
(1, 'admin', 'admin'),
(24, 'asu', '$2y$10$vcyocbQHQmFO8EaMVieuc.xYmO6B18f9R9ZkowUjJ8uB7lN984gxO'),
(26, 'eldi69', '$2y$10$KEWjBBEtI5ytCBBlABRxHufgiF8HoZB6t8XawfiIFuIdagbbauqUO');

--
-- Indexes for dumped tables
--

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
-- AUTO_INCREMENT untuk tabel `paint`
--
ALTER TABLE `paint`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
