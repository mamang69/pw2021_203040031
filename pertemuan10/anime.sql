-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 30 Apr 2021 pada 09.00
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
-- Database: `pw_203040031`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `anime`
--

CREATE TABLE `anime` (
  `id` int(11) NOT NULL,
  `gambar` varchar(64) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `skill` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `anime`
--

INSERT INTO `anime` (`id`, `gambar`, `judul`, `nama`, `skill`) VALUES
(1, 'anos.png', 'Maou Gakuin Futekigosha', 'Anos Voldigoad', 'Sword Derstoyer'),
(2, 'rim.png', 'Tensei Shitara Slime Datta Ken', 'Rimuru Tempest', 'Turn null'),
(3, 'gojo.jpg', 'Jujutsu Kaisen', 'Gojo Satoru', 'Infinity'),
(4, 'sin.jpg', 'Magi: The Labyrinth of Magic', 'Sinbad', 'DJin Equipmen'),
(5, 'sai.jpg', 'One Punch Man', 'Saitama', 'Serious Punch'),
(6, 'aya.jpg', 'Class Room Elite', 'Kiyotaka Ayanokoji', 'Super Human'),
(7, 'gil.jpg', 'Fate/grand Order', 'Gilgamesh', 'Enuma Elish'),
(8, 'jin.jpg', 'God Of High School', 'Jin Mori', 'Monkey King wukong'),
(9, 'iza.png', 'Mondaiji Tachi', 'Sakamaki Izayoi', 'Unkwon'),
(10, 'meli.jpg', 'Nanatsu No Taizai', 'Meliodas', 'Asault Demon Mode'),
(11, '', 'OverLord', 'Ainz Oowlgown', 'Magic Tier 10+'),
(12, 'fdsfsd', 'dfssd', 'dfsdf', 'sdfsd'),
(13, 'sadas', 'asdas', 'sadasd', 'sad'),
(14, 'fbgb', 'nvb', 'bvnvb', 'bvn');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `anime`
--
ALTER TABLE `anime`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `anime`
--
ALTER TABLE `anime`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
