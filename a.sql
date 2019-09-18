-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 08, 2019 at 04:13 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `a`
--

-- --------------------------------------------------------

--
-- Table structure for table `biodata_dosen`
--

CREATE TABLE `biodata_dosen` (
  `biodata_id` int(12) NOT NULL,
  `nip` varchar(20) NOT NULL,
  `nama_dosen` varchar(60) NOT NULL,
  `alamat_dosen` varchar(60) NOT NULL,
  `status_dosen` varchar(60) NOT NULL,
  `tanggal_lahir_dosen` date NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

--
-- Dumping data for table `biodata_dosen`
--

INSERT INTO `biodata_dosen` (`biodata_id`, `nip`, `nama_dosen`, `alamat_dosen`, `status_dosen`, `tanggal_lahir_dosen`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '12345678910', 'Prof. Einstein', 'Jl. Waru no. 9 Surabaya', 'Aktif', '2017-05-07', '2017-05-07 09:01:01', NULL, NULL),
(2, '12345678911', 'John PhD', 'Jl. Mawar No.9 Surabaya', 'Aktif', '2017-05-07', '2017-05-07 09:01:01', NULL, NULL),
(3, '12345678912', 'Kayla S.Kom.,M.Kom.', 'Jalan Mulyorejo 124', 'Aktif', '2017-05-07', '2017-05-07 09:01:01', NULL, NULL),
(6, '0799667799', 'Renold', 'kepanjen gang 1', 'Dosen Tetap', '2000-12-13', '2017-06-14 02:43:39', '2017-06-14 02:43:39', NULL),
(7, '123456', '12345', 'lapangan', 'Dosen Tetap', '2017-06-15', '2017-06-14 15:02:05', '2017-06-14 15:02:05', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `biodata_resipien`
--

CREATE TABLE `biodata_resipien` (
  `biodata_id` int(12) NOT NULL,
  `nir` varchar(22) NOT NULL,
  `nama_bayi_resipien` varchar(60) NOT NULL,
  `tanggal_lahir_bayi` date NOT NULL,
  `jenis_kelamin` varchar(60) NOT NULL,
  `agama` varchar(20) NOT NULL,
  `nama_ibu_resipien` varchar(60) NOT NULL,
  `alamat_resipien` varchar(60) NOT NULL,
  `kriteria` varchar(20) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `dosen`
--

CREATE TABLE `dosen` (
  `nip` varchar(20) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dosen`
--

INSERT INTO `dosen` (`nip`, `created_at`, `updated_at`, `deleted_at`) VALUES
('0799667799', '2017-06-14 02:43:39', '2017-06-14 02:43:39', NULL),
('123456', '2017-06-14 15:02:05', '2017-06-14 15:02:05', NULL),
('12345678910', '2017-05-07 08:58:51', NULL, NULL),
('12345678911', '2017-05-30 13:16:56', NULL, NULL),
('12345678912', '2017-05-30 13:16:56', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `resipien`
--

CREATE TABLE `resipien` (
  `nir` varchar(20) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(20) CHARACTER SET latin1 NOT NULL,
  `name` varchar(255) CHARACTER SET latin1 NOT NULL,
  `role` varchar(20) CHARACTER SET latin1 DEFAULT NULL,
  `email` varchar(255) CHARACTER SET latin1 NOT NULL,
  `password` varchar(255) CHARACTER SET latin1 NOT NULL,
  `remember_token` varchar(100) CHARACTER SET latin1 DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `name`, `role`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'aldi', 'admin', 'karyawan', 'admin@skripsi.com', '$2y$10$gvZNVNdajJSXmkN6v0GJce37lulTrfQcwlZPsRwXxwkJ4mib0cq52', 'Va1ia7oBila1LCqqQVD1l2yaKDU77iuH6MlZqHMr3StvLcmJZNmdkfMrVBaR', '2019-09-05 23:57:50', '2019-09-05 23:57:50');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `biodata_dosen`
--
ALTER TABLE `biodata_dosen`
  ADD PRIMARY KEY (`biodata_id`,`nip`),
  ADD KEY `nip` (`nip`);

--
-- Indexes for table `biodata_resipien`
--
ALTER TABLE `biodata_resipien`
  ADD PRIMARY KEY (`biodata_id`,`nir`),
  ADD KEY `nir` (`nir`);

--
-- Indexes for table `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`nip`),
  ADD KEY `nip` (`nip`);

--
-- Indexes for table `resipien`
--
ALTER TABLE `resipien`
  ADD PRIMARY KEY (`nir`),
  ADD KEY `nir` (`nir`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`) USING BTREE;

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `biodata_dosen`
--
ALTER TABLE `biodata_dosen`
  MODIFY `biodata_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `biodata_resipien`
--
ALTER TABLE `biodata_resipien`
  MODIFY `biodata_id` int(12) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
