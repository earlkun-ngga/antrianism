-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 13, 2021 at 12:47 PM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.0.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_antrianism`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id_admin` int(16) NOT NULL,
  `username` varchar(64) DEFAULT NULL,
  `password` varchar(128) DEFAULT NULL,
  `nama_lengkap` text,
  `tanggal_buat` text,
  `file_foto_profil` text,
  `status_akun` varchar(16) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id_admin`, `username`, `password`, `nama_lengkap`, `tanggal_buat`, `file_foto_profil`, `status_akun`) VALUES
(1, 'earlangga12', '5511870', 'Earl Angga', '9 Juli 2021', 'use_ffc240fc1_1_fp.png', 'Aktif'),
(2, 'dindin12', '5511870', 'Dina Fajriah', '9 Juli 2021', 'use_ecf563150_2_fp.png', 'Aktif'),
(3, 'ujang32', '123123', 'muhammad Syahroni', '12 - Jul - 2021 16:52:03', 'default.png', 'Aktif'),
(4, 'alanwalker', '5511870', 'Arlan Fahrezi', '12 - Jul - 2021 16:54:15', 'use_d79199b86_4_fp.png', 'Aktif'),
(5, 'lindawati', '123321', 'Linda Indahwati', '12 - Jul - 2021 17:11:36', 'default.png', 'Aktif'),
(6, 'anggaajie32', '321321', 'Angga Ajie', '12 - Jul - 2021 19:38:06', 'default.png', 'Aktif');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_antrian_live`
--

CREATE TABLE `tbl_antrian_live` (
  `id_data` int(26) NOT NULL,
  `no_antrian` int(128) DEFAULT NULL,
  `waktu_buat` text,
  `waktu_selesai_dilayani` text,
  `status_dilayani` text,
  `id_admin_melayani` int(64) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_antrian_live`
--

INSERT INTO `tbl_antrian_live` (`id_data`, `no_antrian`, `waktu_buat`, `waktu_selesai_dilayani`, `status_dilayani`, `id_admin_melayani`) VALUES
(214, 0, NULL, NULL, 'dummy_data', NULL),
(215, 1, '13 - Jul - 2021 17:41:36', '13 - Jul - 2021 17:42:06', 'sudah dilayani', 1),
(216, 2, '13 - Jul - 2021 17:41:37', '13 - Jul - 2021 17:42:08', 'sudah dilayani', 1),
(217, 3, '13 - Jul - 2021 17:41:38', '13 - Jul - 2021 17:43:15', 'sudah dilayani', 1),
(218, 4, '13 - Jul - 2021 17:41:41', '13 - Jul - 2021 17:43:16', 'sudah dilayani', 1),
(219, 5, '13 - Jul - 2021 17:41:47', '13 - Jul - 2021 17:43:17', 'sudah dilayani', 1),
(220, 6, '13 - Jul - 2021 17:41:47', '13 - Jul - 2021 17:43:18', 'sudah dilayani', 1),
(221, 7, '13 - Jul - 2021 17:43:26', '13 - Jul - 2021 17:43:46', 'sudah dilayani', 1),
(222, 8, '13 - Jul - 2021 17:43:29', '13 - Jul - 2021 17:43:47', 'sudah dilayani', 1),
(223, 9, '13 - Jul - 2021 17:43:30', '13 - Jul - 2021 17:43:48', 'sudah dilayani', 1),
(224, 10, '13 - Jul - 2021 17:43:30', '13 - Jul - 2021 17:43:49', 'sudah dilayani', 1),
(225, 11, '13 - Jul - 2021 17:43:31', '13 - Jul - 2021 17:43:50', 'sudah dilayani', 1),
(226, 12, '13 - Jul - 2021 17:43:33', '13 - Jul - 2021 17:43:51', 'sudah dilayani', 1),
(227, 13, '13 - Jul - 2021 17:43:37', '13 - Jul - 2021 17:43:52', 'sudah dilayani', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_info_instansi`
--

CREATE TABLE `tbl_info_instansi` (
  `id_data` int(16) NOT NULL,
  `nama_instansi` varchar(128) DEFAULT NULL,
  `alamat_instansi` text,
  `info_loket` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_info_instansi`
--

INSERT INTO `tbl_info_instansi` (`id_data`, `nama_instansi`, `alamat_instansi`, `info_loket`) VALUES
(1, 'NUSA KAMBANGAN JAYA', 'Jl. Abdul Wahab', 'Loket 1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `tbl_antrian_live`
--
ALTER TABLE `tbl_antrian_live`
  ADD PRIMARY KEY (`id_data`);

--
-- Indexes for table `tbl_info_instansi`
--
ALTER TABLE `tbl_info_instansi`
  ADD PRIMARY KEY (`id_data`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id_admin` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tbl_antrian_live`
--
ALTER TABLE `tbl_antrian_live`
  MODIFY `id_data` int(26) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=228;

--
-- AUTO_INCREMENT for table `tbl_info_instansi`
--
ALTER TABLE `tbl_info_instansi`
  MODIFY `id_data` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
