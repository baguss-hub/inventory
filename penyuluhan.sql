-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Nov 30, 2025 at 07:25 AM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `penyuluhan`
--

-- --------------------------------------------------------

--
-- Table structure for table `anak`
--

CREATE TABLE `anak` (
  `id_anak` int NOT NULL,
  `ortu_id` int NOT NULL,
  `nama` varchar(55) NOT NULL,
  `nik` bigint NOT NULL,
  `jenkel` varchar(10) NOT NULL,
  `bb_lahir` decimal(5,2) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `tb_lahir` decimal(5,2) NOT NULL,
  `goldar` varchar(2) NOT NULL,
  `create_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `anak`
--

INSERT INTO `anak` (`id_anak`, `ortu_id`, `nama`, `nik`, `jenkel`, `bb_lahir`, `tgl_lahir`, `tb_lahir`, `goldar`, `create_at`) VALUES
(1, 4, 'efwf', 432, 'dgff', '3.10', '2023-08-02', '20.50', 'o', '2025-11-25 03:17:15');

-- --------------------------------------------------------

--
-- Table structure for table `kunjungan`
--

CREATE TABLE `kunjungan` (
  `id_kunjungan` int NOT NULL,
  `anak_id` int NOT NULL,
  `tgl_kunjungan` date NOT NULL,
  `fasilitas` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ortu`
--

CREATE TABLE `ortu` (
  `id_ortu` int NOT NULL,
  `nama_ibu` varchar(55) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `nama_ayah` varchar(55) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `hubungan` varchar(25) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `telp` varchar(13) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `alamat` varchar(255) NOT NULL,
  `create_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `ortu`
--

INSERT INTO `ortu` (`id_ortu`, `nama_ibu`, `nama_ayah`, `hubungan`, `telp`, `alamat`, `create_at`) VALUES
(1, '', 'poy', 'sedarah', '081234567890', 'pkp', '2025-07-15 05:25:16');

-- --------------------------------------------------------

--
-- Table structure for table `pengukuran`
--

CREATE TABLE `pengukuran` (
  `id_ukur` int NOT NULL,
  `kunjungan_id` int NOT NULL,
  `tgl_ukur` date NOT NULL,
  `bb` decimal(5,2) NOT NULL,
  `tb` decimal(5,2) NOT NULL,
  `lk` decimal(5,2) NOT NULL,
  `vaksin` varchar(30) NOT NULL,
  `status_gizi` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int NOT NULL,
  `nama_user` varchar(40) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `nama_user`, `email`, `password`) VALUES
(1, 'gege', 'gege@gmail.com', '0f09f1343b14cebeb4b7651f9b1b24b6'),
(2, 'admin', 'admin@gmail.com', 'd41d8cd98f00b204e9800998ecf8427e');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `anak`
--
ALTER TABLE `anak`
  ADD PRIMARY KEY (`id_anak`);

--
-- Indexes for table `kunjungan`
--
ALTER TABLE `kunjungan`
  ADD PRIMARY KEY (`id_kunjungan`);

--
-- Indexes for table `ortu`
--
ALTER TABLE `ortu`
  ADD PRIMARY KEY (`id_ortu`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `anak`
--
ALTER TABLE `anak`
  MODIFY `id_anak` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `kunjungan`
--
ALTER TABLE `kunjungan`
  MODIFY `id_kunjungan` int NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ortu`
--
ALTER TABLE `ortu`
  MODIFY `id_ortu` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
