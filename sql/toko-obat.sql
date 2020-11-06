-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 06, 2020 at 08:00 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
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
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `id_obat` int(11) NOT NULL,
  `nama_obat` varchar(255) NOT NULL,
  `harga` int(255) NOT NULL,
  `qty` int(255) NOT NULL,
  `total` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cart_id`, `user_id`, `id_obat`, `nama_obat`, `harga`, `qty`, `total`) VALUES
(13, 4, 7, 'Paracetamol', 10000, 1, 10000);

-- --------------------------------------------------------

--
-- Table structure for table `obat`
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
-- Dumping data for table `obat`
--

INSERT INTO `obat` (`id`, `nama`, `harga`, `stock`, `deskripsi`, `gambar`) VALUES
(5, 'Mefinal', 16000, 100, 'Mefinamic Acid 500 Gram', '52c166241e304bbd3db740445dad30bb.jpg'),
(6, 'Amoxcillin', 7000, 100, 'Antibiotik Membunuh Bakteri', '1ffe29722d3144bd3c88d05b45b15c91.jpg'),
(7, 'Paracetamol', 10000, 100, 'Obat Meredakan Sakit Kepala', '4b62a5e96bdcf47b4ca39b9dbfd67b20.jpg'),
(8, 'Komik', 5000, 100, 'obat batuk ', 'f9ee923d06e6b908eef2b5f9443a25b6.jpg'),
(9, 'Betadine', 10000, 100, 'Obat luka', 'c7f421e2b58f6c9f51254428262a23bd.jpg'),
(10, 'Hansaplast', 5000, 100, 'Penutup luka ', 'b47690527b82f907713e7ece6b3d4d69.jpg'),
(11, 'Tolak Angin', 18000, 100, 'Tolak Angin bermanfaat untuk mengatasi masuk angin, dengan gejala berupa mual, perut kembung, serta demam atau meriang.', '568cd60dfa06ed86b407e4b4412562c3.jpeg'),
(12, 'Promag', 9000, 100, 'Promag bermanfaat untuk mengatasi sakit maag, penyakit asam lambung naik, dan perut kembung', '8e798668cdf5d70b2e9886c3fef21651.jpg'),
(13, 'Acyclovir ', 5000, 100, 'untuk mengobati infeksi yang disebabkan oleh virus seperti varisela zoster (penyebab herpes zoster atau cacar api) dan herpes simpleks (penyebab herpes genital dan cold sore atau luka melepuh di sekitar bibir).', 'bb1a638425bd843695f08c691c0ebb0e.jpg'),
(14, 'Bedak Salicyl Kimia Farma', 6000, 100, 'Bedak yang digunakan untuk membantu meredakan gatal-gatal pada kulit akibat biang keringat atau gangguan kulit lainnya', 'a638a25a99c565eadce5e56ac4bf4a4b.jpg'),
(15, 'Ramipril OGB Dexa Medica', 12000, 100, 'Untuk terapi hipertensi, gagal jantung kongestif sesudah infark miokard akut, terapi tambahan pada diuretik dengan atau tanpa glikosida jantung, untuk menurunkan risiko infark miokard, stroke, kematian KV atau kebutuhan akan prosedur revaskularisasi pada pasien DM dan usia lanjut, perokok, diketahui mikroalbuminuria atau adanya penyakit vaskular sebelumnya.', '3884962540dca82274f831977d784b4e.jpg'),
(16, 'Tensivask', 17000, 100, 'Untuk pengobatan hipertensi (tekanan darah tinggi), angina stabil kronik, pengobatan pasien yang pasti atau diduga menderita angina vasospastik (angina varian)', '32faede295020f03a7b9b356d5216316.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `reset_token`
--

CREATE TABLE `reset_token` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `date_created` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `reset_token`
--

INSERT INTO `reset_token` (`id`, `email`, `token`, `date_created`) VALUES
(1, 'sam.ali42069@gmail.com', 'SO/uY+67xiWmd/j96vizHA7x2FxtWg/8kM4PBlbF7Lc=', 1604384975),
(2, 'sam.ali42069@gmail.com', 'SQ2Ox+xuxD/K0h0GOSaU9wiTsXjsEaKEVvsRTS8zphk=', 1604385088),
(3, 'sam.ali42069@gmail.com', 'inuVUDrHquXyz+X3NUMrBnIP51vvLp0ISQMfUdhm4cw=', 1604385323);

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `id` int(11) NOT NULL,
  `role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
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
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nama`, `username`, `password`, `email`, `role_id`, `gambar`) VALUES
(1, 'Jamal', 'jamal', '$2y$10$//9jEARMDpUz5Rr6OF9Q8.8S27CaHk0x4bUXN/EZEAH/84sua1zIS', 'sam.ali42069@gmail.com', 1, 'default.jpeg'),
(2, 'Didi', 'didi', '$2y$10$//9jEARMDpUz5Rr6OF9Q8.8S27CaHk0x4bUXN/EZEAH/84sua1zIS', 'abdillah1965didiokey@gmail.com', 2, 'default.jpeg'),
(3, 'Igoy', 'igoy', '$2y$10$tdbF4o/WPvZqaw1BeIrMm.pLGkwEuDSDmLPzVa4ThLbTHQZNoEDre', 'igoy@gmail.com', 2, 'default.jpeg'),
(4, 'Aisyah', 'aisyah', '$2y$10$vDndtWXriF03uxarSc48LuiVuBQLP/IwgV.IgR6zWOaTjdthqdnHa', 'asiyah@email.com', 2, 'default.jpeg'),
(5, 'egi sofyan haryadi', 'egi', '$2y$10$672xu8g46Wgvh2tWXlbfKeImy0uqMaEpKsNXmcW0leHBmp9WWzj2i', 'egisofyanharyadi@gmail.com', 2, 'default.jpeg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`),
  ADD KEY `user_id` (`user_id`),
  ADD KEY `id_obat` (`id_obat`);

--
-- Indexes for table `obat`
--
ALTER TABLE `obat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reset_token`
--
ALTER TABLE `reset_token`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `obat`
--
ALTER TABLE `obat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `reset_token`
--
ALTER TABLE `reset_token`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON UPDATE CASCADE,
  ADD CONSTRAINT `cart_ibfk_2` FOREIGN KEY (`id_obat`) REFERENCES `obat` (`id`) ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
