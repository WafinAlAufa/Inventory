-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 20 Jul 2023 pada 08.46
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_inventory`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `access`
--

CREATE TABLE `access` (
  `id` int(11) NOT NULL,
  `role` varchar(50) NOT NULL,
  `feature` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `access`
--

INSERT INTO `access` (`id`, `role`, `feature`) VALUES
(1, 'admin', 'edit,from'),
(3, 'admin', 'ssssssssss');

-- --------------------------------------------------------

--
-- Struktur dari tabel `client`
--

CREATE TABLE `client` (
  `id` int(11) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `kontak` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `tb_barang`
--

CREATE TABLE `tb_barang` (
  `id_barang` int(11) NOT NULL,
  `nama_barang` varchar(100) NOT NULL,
  `ukuran` varchar(30) NOT NULL,
  `kategori` varchar(100) NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `harga` int(11) NOT NULL,
  `stock` int(11) NOT NULL,
  `id_vendor` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `tb_barang`
--

INSERT INTO `tb_barang` (`id_barang`, `nama_barang`, `ukuran`, `kategori`, `gambar`, `harga`, `stock`, `id_vendor`) VALUES
(20, 'aaaaaaaaaaaaaaaaaaaa', '39', 'sepatu', '64991ab8e1899.png_20230717105641', 2147483647, 1111, 33);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `nama`, `username`, `password`, `role`) VALUES
(113, 'Daily UI - Monitoring Dashboard.png', 'wafin', '123', 'admin'),
(131, 'waf', 'wafin2', '$2y$10$36i1bMmL7NRKkWZ9C.o1eerdcsXT6MTCghfZawtY7mdVvUmFlx7HO', 'Admin'),
(142, 'waf', 'Array', '$2y$10$SCDFEki/iWOBLzou6.AurOr4efvdWKhnnKS02JtuicokwWUv5Nwfu', 'Admin'),
(143, 'waf', 'Array', '$2y$10$Ar7w0ldVKmYgRBXZ3Mx0Gu47n9etyY9RMaFRYsdbCEbSVni/2QYES', 'Admin'),
(144, 'waf', 'Array', '$2y$10$7Waey0HWgY04rgWwwTmSQOI1yQL5bVF/I47FYwLpr6TSNeHKzOoCO', 'Admin'),
(145, 'waf', 'Array', '$2y$10$vUUNFxDELMO4ZA7lMpEyYe5QATOvYdVvFljJqJhI8G4wtXdmwAQ6y', 'Operator'),
(146, 'waf', 'Array', '$2y$10$RqDJe.CKPU2SiLfN0xGBY.CrKOgmJLeUyUZh6XfVfF5O/CWf4qytS', 'Operator'),
(147, 'waf', 'Array', '$2y$10$FU8gvmXqn3yomlpX4qBDsOvo2b6kiiVj6CDQyniRe7/NneiYnhT7G', 'Operator'),
(148, 'waf', 'Array', '$2y$10$6K3U4Y7AXGnIHEzQ82NRH.1XvoLBb2Fpc93uga5WDPbjWh0jBQ./6', 'Operator'),
(149, 'waf', 'wafin', '$2y$10$p1b1RU4KFnYHvjSHW4jtCeY9NtwRnc1Px3bdHL2JTg9kG4sAHyal2', 'Operator'),
(150, 'waf', 'wafin', '$2y$10$PBPYegb8/74kwMGnqx6Xd.p0Era.RJLxbtQTW9PE/cmPTu3L2gQ5u', 'Operator'),
(151, 'waf', 'wafin', '$2y$10$xAVsc.iQDiQFjY4lZCVO5OR2L7o2D6kg21pjwWHAIkUJy.L7R7gy2', 'Operator');

-- --------------------------------------------------------

--
-- Struktur dari tabel `vendor`
--

CREATE TABLE `vendor` (
  `id` int(11) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `kontak` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `vendor`
--

INSERT INTO `vendor` (`id`, `gambar`, `nama`, `alamat`, `kontak`) VALUES
(33, '64991ab8e1899.png_20230711135356', 'fddd', 'Jalan Tole Iskandar adala', '+622 222 222 22'),
(34, '64991c1b5736f.png_20230713092555', 'c', 'Jalan Tole Iskandar adala', '+622 222 222 22'),
(35, '64991c1b5736f.png_20230713140605', 'fddd', 'sssssssssssssssssssssssss', '+622 222 222 22');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `access`
--
ALTER TABLE `access`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `client`
--
ALTER TABLE `client`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `tb_barang`
--
ALTER TABLE `tb_barang`
  ADD PRIMARY KEY (`id_barang`),
  ADD KEY `tb_barang_ibfk_1` (`id_vendor`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `vendor`
--
ALTER TABLE `vendor`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `access`
--
ALTER TABLE `access`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `client`
--
ALTER TABLE `client`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `tb_barang`
--
ALTER TABLE `tb_barang`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=152;

--
-- AUTO_INCREMENT untuk tabel `vendor`
--
ALTER TABLE `vendor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- Ketidakleluasaan untuk tabel pelimpahan (Dumped Tables)
--

--
-- Ketidakleluasaan untuk tabel `tb_barang`
--
ALTER TABLE `tb_barang`
  ADD CONSTRAINT `tb_barang_ibfk_1` FOREIGN KEY (`id_vendor`) REFERENCES `vendor` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
