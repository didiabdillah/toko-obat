-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 04 Nov 2020 pada 10.39
-- Versi server: 10.4.13-MariaDB
-- Versi PHP: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `toko-obat`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `obat`
--

CREATE TABLE `obat` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `harga` int(10) NOT NULL,
  `stock` int(11) NOT NULL,
  `deskripsi` text NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `obat`
--

INSERT INTO `obat` (`id`, `nama`, `harga`, `stock`, `deskripsi`, `gambar`) VALUES
(5, 'Mefinal', 16000, 13, 'Mefinamic Acid 500 Gram', '52c166241e304bbd3db740445dad30bb.jpg'),
(6, 'Amoxcillin', 7000, 14, 'Antibiotik Membunuh Bakteri', '1ffe29722d3144bd3c88d05b45b15c91.jpg'),
(7, 'Paracetamol', 10000, 99, 'Obat Meredakan Sakit Kepala', '4b62a5e96bdcf47b4ca39b9dbfd67b20.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `reset_token`
--

CREATE TABLE `reset_token` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `date_created` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `reset_token`
--

INSERT INTO `reset_token` (`id`, `email`, `token`, `date_created`) VALUES
(1, 'sam.ali42069@gmail.com', 'SO/uY+67xiWmd/j96vizHA7x2FxtWg/8kM4PBlbF7Lc=', 1604384975),
(2, 'sam.ali42069@gmail.com', 'SQ2Ox+xuxD/K0h0GOSaU9wiTsXjsEaKEVvsRTS8zphk=', 1604385088),
(3, 'sam.ali42069@gmail.com', 'inuVUDrHquXyz+X3NUMrBnIP51vvLp0ISQMfUdhm4cw=', 1604385323);

-- --------------------------------------------------------

--
-- Struktur dari tabel `role`
--

CREATE TABLE `role` (
  `id` int(11) NOT NULL,
  `role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `role_id` int(2) NOT NULL,
  `gambar` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `nama`, `username`, `password`, `email`, `role_id`, `gambar`) VALUES
(1, 'Jamal', 'jamal', '$2y$10$//9jEARMDpUz5Rr6OF9Q8.8S27CaHk0x4bUXN/EZEAH/84sua1zIS', 'sam.ali42069@gmail.com', 1, 'default.jpeg'),
(2, 'Didi', 'didi', '$2y$10$//9jEARMDpUz5Rr6OF9Q8.8S27CaHk0x4bUXN/EZEAH/84sua1zIS', 'abdillah1965didiokey@gmail.com', 2, 'default.jpeg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `obat`
--
ALTER TABLE `obat`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `reset_token`
--
ALTER TABLE `reset_token`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `obat`
--
ALTER TABLE `obat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT untuk tabel `reset_token`
--
ALTER TABLE `reset_token`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
