-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 15, 2023 at 11:21 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_mlteam`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id_admin` int(11) NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id_admin`, `username`, `password`) VALUES
(1, 'admin', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `deployment`
--

CREATE TABLE `deployment` (
  `id_deploy` int(11) NOT NULL,
  `id_sistem` int(11) NOT NULL,
  `komponen_deployment1` text NOT NULL,
  `komponen_deployment2` text NOT NULL,
  `komponen_deployment3` text NOT NULL,
  `komponen_deployment4` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `deployment`
--

INSERT INTO `deployment` (`id_deploy`, `id_sistem`, `komponen_deployment1`, `komponen_deployment2`, `komponen_deployment3`, `komponen_deployment4`) VALUES
(1, 3, 'website', 'link ss deploy', 'hasil uji deploy', 'performa\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `hasil_akhir`
--

CREATE TABLE `hasil_akhir` (
  `id_hasil` int(11) NOT NULL,
  `id_sistem` int(11) NOT NULL,
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `hasil_akhir`
--

INSERT INTO `hasil_akhir` (`id_hasil`, `id_sistem`, `status`) VALUES
(2, 3, 'DISETUJUI');

-- --------------------------------------------------------

--
-- Table structure for table `interpretasi_hasil`
--

CREATE TABLE `interpretasi_hasil` (
  `id_hasil` int(11) NOT NULL,
  `id_sistem` int(11) NOT NULL,
  `komponen_hasil1` text NOT NULL,
  `komponen_hasil2` text NOT NULL,
  `komponen_hasil3` text NOT NULL,
  `komponen_hasil4` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `interpretasi_hasil`
--

INSERT INTO `interpretasi_hasil` (`id_hasil`, `id_sistem`, `komponen_hasil1`, `komponen_hasil2`, `komponen_hasil3`, `komponen_hasil4`) VALUES
(2, 3, 'link ss uji model', 'iya', 'link uji model', 'link model');

-- --------------------------------------------------------

--
-- Table structure for table `kebutuhan_bisnis`
--

CREATE TABLE `kebutuhan_bisnis` (
  `id_kebutuhan` int(11) NOT NULL,
  `id_sistem` int(11) NOT NULL,
  `komponen_bisnis1` text NOT NULL,
  `komponen_bisnis2` text NOT NULL,
  `komponen_bisnis3` text NOT NULL,
  `komponen_bisnis4` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kebutuhan_bisnis`
--

INSERT INTO `kebutuhan_bisnis` (`id_kebutuhan`, `id_sistem`, `komponen_bisnis1`, `komponen_bisnis2`, `komponen_bisnis3`, `komponen_bisnis4`) VALUES
(2, 3, 'kesehatan', 'ceita sistem', 'masalah dipecahkan', 'bagaimana memecahkan');

-- --------------------------------------------------------

--
-- Table structure for table `laporan`
--

CREATE TABLE `laporan` (
  `id_laporan` int(11) NOT NULL,
  `id_sistem` int(11) NOT NULL,
  `komponen_laporan1` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `laporan`
--

INSERT INTO `laporan` (`id_laporan`, `id_sistem`, `komponen_laporan1`) VALUES
(2, 3, 'laporan');

-- --------------------------------------------------------

--
-- Table structure for table `latarbelakang_sistem`
--

CREATE TABLE `latarbelakang_sistem` (
  `id_latarbelakang` int(11) NOT NULL,
  `id_sistem` int(11) NOT NULL,
  `nama_sistem` text NOT NULL,
  `organisasi` text NOT NULL,
  `nama_penanggungjawab` text NOT NULL,
  `tujuan_sistem` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `latarbelakang_sistem`
--

INSERT INTO `latarbelakang_sistem` (`id_latarbelakang`, `id_sistem`, `nama_sistem`, `organisasi`, `nama_penanggungjawab`, `tujuan_sistem`) VALUES
(3, 3, 'BrainDiverseX', 'universitas Sumatera utara', 'iqbal', 'Tujuan sistem');

-- --------------------------------------------------------

--
-- Table structure for table `pelatihan_model`
--

CREATE TABLE `pelatihan_model` (
  `id_pelatihan` int(11) NOT NULL,
  `id_sistem` int(11) NOT NULL,
  `komponen_model1` text NOT NULL,
  `komponen_model2` text NOT NULL,
  `komponen_model3` text NOT NULL,
  `komponen_model4` text NOT NULL,
  `komponen_model5` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pelatihan_model`
--

INSERT INTO `pelatihan_model` (`id_pelatihan`, `id_sistem`, `komponen_model1`, `komponen_model2`, `komponen_model3`, `komponen_model4`, `komponen_model5`) VALUES
(2, 3, '20', '20', 'iya', '90%', 'link pelatihan model');

-- --------------------------------------------------------

--
-- Table structure for table `pemilihan_algoritma`
--

CREATE TABLE `pemilihan_algoritma` (
  `id_algoritma` int(11) NOT NULL,
  `id_sistem` int(11) NOT NULL,
  `komponen_algoritma1` text NOT NULL,
  `komponen_algoritma2` text NOT NULL,
  `komponen_algoritma3` text NOT NULL,
  `komponen_algoritma4` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pemilihan_algoritma`
--

INSERT INTO `pemilihan_algoritma` (`id_algoritma`, `id_sistem`, `komponen_algoritma1`, `komponen_algoritma2`, `komponen_algoritma3`, `komponen_algoritma4`) VALUES
(2, 3, 'dependen', 'independen', 'svm', 'link algoritma');

-- --------------------------------------------------------

--
-- Table structure for table `persiapan_data`
--

CREATE TABLE `persiapan_data` (
  `id_data` int(11) NOT NULL,
  `id_sistem` int(11) NOT NULL,
  `komponen_data1` text NOT NULL,
  `komponen_data2` text NOT NULL,
  `komponen_data3` text NOT NULL,
  `komponen_data4` text NOT NULL,
  `komponen_data5` text NOT NULL,
  `komponen_data6` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `persiapan_data`
--

INSERT INTO `persiapan_data` (`id_data`, `id_sistem`, `komponen_data1`, `komponen_data2`, `komponen_data3`, `komponen_data4`, `komponen_data5`, `komponen_data6`) VALUES
(2, 3, 'survey', 'gambar', 'link setuju data', '60:40', '1500', 'link cleaning data');

-- --------------------------------------------------------

--
-- Table structure for table `sistem`
--

CREATE TABLE `sistem` (
  `id_sistem` int(11) NOT NULL,
  `nama_sistem` text NOT NULL,
  `organisasi` text NOT NULL,
  `email` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sistem`
--

INSERT INTO `sistem` (`id_sistem`, `nama_sistem`, `organisasi`, `email`, `password`) VALUES
(3, 'BrainDiverseX', 'universitas Sumatera utara', 'iqbal123@gmail.com', 'e0b93403c1e9af87e5866b3a56bac52a'),
(4, 'DiabetaKu', 'PT DIABETAKU', 'iqbal@gmail.com', 'e0b93403c1e9af87e5866b3a56bac52a');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `deployment`
--
ALTER TABLE `deployment`
  ADD PRIMARY KEY (`id_deploy`),
  ADD KEY `id_sistem` (`id_sistem`);

--
-- Indexes for table `hasil_akhir`
--
ALTER TABLE `hasil_akhir`
  ADD PRIMARY KEY (`id_hasil`),
  ADD KEY `id_sistem` (`id_sistem`);

--
-- Indexes for table `interpretasi_hasil`
--
ALTER TABLE `interpretasi_hasil`
  ADD PRIMARY KEY (`id_hasil`),
  ADD KEY `id_sistem` (`id_sistem`);

--
-- Indexes for table `kebutuhan_bisnis`
--
ALTER TABLE `kebutuhan_bisnis`
  ADD PRIMARY KEY (`id_kebutuhan`),
  ADD KEY `id_sistem` (`id_sistem`);

--
-- Indexes for table `laporan`
--
ALTER TABLE `laporan`
  ADD PRIMARY KEY (`id_laporan`),
  ADD KEY `id_sistem` (`id_sistem`);

--
-- Indexes for table `latarbelakang_sistem`
--
ALTER TABLE `latarbelakang_sistem`
  ADD PRIMARY KEY (`id_latarbelakang`),
  ADD KEY `id_sistem` (`id_sistem`);

--
-- Indexes for table `pelatihan_model`
--
ALTER TABLE `pelatihan_model`
  ADD PRIMARY KEY (`id_pelatihan`),
  ADD KEY `id_sistem` (`id_sistem`);

--
-- Indexes for table `pemilihan_algoritma`
--
ALTER TABLE `pemilihan_algoritma`
  ADD PRIMARY KEY (`id_algoritma`),
  ADD KEY `id_sistem` (`id_sistem`);

--
-- Indexes for table `persiapan_data`
--
ALTER TABLE `persiapan_data`
  ADD PRIMARY KEY (`id_data`),
  ADD KEY `id_sistem` (`id_sistem`);

--
-- Indexes for table `sistem`
--
ALTER TABLE `sistem`
  ADD PRIMARY KEY (`id_sistem`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `deployment`
--
ALTER TABLE `deployment`
  MODIFY `id_deploy` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `hasil_akhir`
--
ALTER TABLE `hasil_akhir`
  MODIFY `id_hasil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `interpretasi_hasil`
--
ALTER TABLE `interpretasi_hasil`
  MODIFY `id_hasil` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `kebutuhan_bisnis`
--
ALTER TABLE `kebutuhan_bisnis`
  MODIFY `id_kebutuhan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `laporan`
--
ALTER TABLE `laporan`
  MODIFY `id_laporan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `latarbelakang_sistem`
--
ALTER TABLE `latarbelakang_sistem`
  MODIFY `id_latarbelakang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pelatihan_model`
--
ALTER TABLE `pelatihan_model`
  MODIFY `id_pelatihan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pemilihan_algoritma`
--
ALTER TABLE `pemilihan_algoritma`
  MODIFY `id_algoritma` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `persiapan_data`
--
ALTER TABLE `persiapan_data`
  MODIFY `id_data` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `sistem`
--
ALTER TABLE `sistem`
  MODIFY `id_sistem` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `deployment`
--
ALTER TABLE `deployment`
  ADD CONSTRAINT `deployment_ibfk_1` FOREIGN KEY (`id_sistem`) REFERENCES `sistem` (`id_sistem`);

--
-- Constraints for table `hasil_akhir`
--
ALTER TABLE `hasil_akhir`
  ADD CONSTRAINT `hasil_akhir_ibfk_1` FOREIGN KEY (`id_sistem`) REFERENCES `sistem` (`id_sistem`);

--
-- Constraints for table `interpretasi_hasil`
--
ALTER TABLE `interpretasi_hasil`
  ADD CONSTRAINT `interpretasi_hasil_ibfk_1` FOREIGN KEY (`id_sistem`) REFERENCES `sistem` (`id_sistem`);

--
-- Constraints for table `kebutuhan_bisnis`
--
ALTER TABLE `kebutuhan_bisnis`
  ADD CONSTRAINT `kebutuhan_bisnis_ibfk_1` FOREIGN KEY (`id_sistem`) REFERENCES `sistem` (`id_sistem`);

--
-- Constraints for table `laporan`
--
ALTER TABLE `laporan`
  ADD CONSTRAINT `laporan_ibfk_1` FOREIGN KEY (`id_sistem`) REFERENCES `sistem` (`id_sistem`);

--
-- Constraints for table `latarbelakang_sistem`
--
ALTER TABLE `latarbelakang_sistem`
  ADD CONSTRAINT `latarbelakang_sistem_ibfk_1` FOREIGN KEY (`id_sistem`) REFERENCES `sistem` (`id_sistem`);

--
-- Constraints for table `pelatihan_model`
--
ALTER TABLE `pelatihan_model`
  ADD CONSTRAINT `pelatihan_model_ibfk_1` FOREIGN KEY (`id_sistem`) REFERENCES `sistem` (`id_sistem`);

--
-- Constraints for table `pemilihan_algoritma`
--
ALTER TABLE `pemilihan_algoritma`
  ADD CONSTRAINT `pemilihan_algoritma_ibfk_1` FOREIGN KEY (`id_sistem`) REFERENCES `sistem` (`id_sistem`);

--
-- Constraints for table `persiapan_data`
--
ALTER TABLE `persiapan_data`
  ADD CONSTRAINT `persiapan_data_ibfk_1` FOREIGN KEY (`id_sistem`) REFERENCES `sistem` (`id_sistem`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
