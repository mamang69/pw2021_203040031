-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 18 Bulan Mei 2021 pada 04.20
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
(29, '60a2836546125.jpeg', 'tamvan dan pemveranii', 'Eldi Anugrah Pratama', '500000 iq');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`) VALUES
(3, 'pw', '$2y$10$FgdRlDo38Ome3s71M0hKoOMxS10clNvrqXTxgJrxUJi1yltBMyvdK'),
(4, 'admin', '$2y$10$v7x6gMs/y77hdiS/wk.OpuqOFzNfZjoXcsAcrmaVzOuibxbgWm3GG'),
(7, 'mamang123', '$2y$10$CF7TzVJ7e2VUlXef9iNm..vcTVi/vM1uR6mxtFMuyIKk9zdBTuF7y');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `anime`
--
ALTER TABLE `anime`
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
-- AUTO_INCREMENT untuk tabel `anime`
--
ALTER TABLE `anime`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT untuk tabel `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
