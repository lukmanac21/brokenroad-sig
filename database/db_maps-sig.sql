-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 09, 2019 at 10:47 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_maps-sig`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_admin`
--

CREATE TABLE `tbl_admin` (
  `id_admin` int(11) NOT NULL,
  `email_admin` varchar(50) NOT NULL,
  `name_admin` varchar(100) NOT NULL,
  `pass_admin` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_admin`
--

INSERT INTO `tbl_admin` (`id_admin`, `email_admin`, `name_admin`, `pass_admin`) VALUES
(3, 'lukmanarief@enddev,com', 'Lukman Arief', '21232f297a57a5a743894a0e4a801fc3');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_arus`
--

CREATE TABLE `tbl_arus` (
  `id_arus` int(11) NOT NULL,
  `nama_arus` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_arus`
--

INSERT INTO `tbl_arus` (`id_arus`, `nama_arus`) VALUES
(1, 'Satu Arah'),
(2, 'Dua Arah');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_jalan`
--

CREATE TABLE `tbl_jalan` (
  `id_jalan` int(11) NOT NULL,
  `nama_jalan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_jalan`
--

INSERT INTO `tbl_jalan` (`id_jalan`, `nama_jalan`) VALUES
(1, 'Aspal'),
(2, 'Batuan'),
(3, 'Tanah');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_keramaian`
--

CREATE TABLE `tbl_keramaian` (
  `id_keramaian` int(11) NOT NULL,
  `nama_keramaian` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_keramaian`
--

INSERT INTO `tbl_keramaian` (`id_keramaian`, `nama_keramaian`) VALUES
(1, 'Keramaian Rendah'),
(2, 'Keramaian Sedang'),
(3, 'Keramaian Tinggi');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_maps`
--

CREATE TABLE `tbl_maps` (
  `id_maps` int(11) NOT NULL,
  `nama_wilayah` varchar(50) NOT NULL,
  `arus_jalan` varchar(50) NOT NULL,
  `kondisi_jalan` varchar(50) NOT NULL,
  `keramaian_jalan` varchar(50) NOT NULL,
  `panjang_lubang` varchar(50) NOT NULL,
  `lebar_lubang` varchar(50) NOT NULL,
  `lattitude` varchar(100) NOT NULL,
  `longitude` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_maps`
--

INSERT INTO `tbl_maps` (`id_maps`, `nama_wilayah`, `arus_jalan`, `kondisi_jalan`, `keramaian_jalan`, `panjang_lubang`, `lebar_lubang`, `lattitude`, `longitude`) VALUES
(1, 'Belimbing', 'Satu Arah', 'Aspal', 'Keramaian Rendah', '90 Cm', '30 Cm', '-6.161432', '106.737876');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_wilayah`
--

CREATE TABLE `tbl_wilayah` (
  `id_wilayah` int(11) NOT NULL,
  `nama_wilayah` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_wilayah`
--

INSERT INTO `tbl_wilayah` (`id_wilayah`, `nama_wilayah`) VALUES
(1, 'Blimbing'),
(2, 'Kedung kandang'),
(3, 'Klojen'),
(4, 'Lowokwaru'),
(5, 'Sukun');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `tbl_arus`
--
ALTER TABLE `tbl_arus`
  ADD PRIMARY KEY (`id_arus`);

--
-- Indexes for table `tbl_jalan`
--
ALTER TABLE `tbl_jalan`
  ADD PRIMARY KEY (`id_jalan`);

--
-- Indexes for table `tbl_keramaian`
--
ALTER TABLE `tbl_keramaian`
  ADD PRIMARY KEY (`id_keramaian`);

--
-- Indexes for table `tbl_maps`
--
ALTER TABLE `tbl_maps`
  ADD PRIMARY KEY (`id_maps`);

--
-- Indexes for table `tbl_wilayah`
--
ALTER TABLE `tbl_wilayah`
  ADD PRIMARY KEY (`id_wilayah`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_admin`
--
ALTER TABLE `tbl_admin`
  MODIFY `id_admin` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_arus`
--
ALTER TABLE `tbl_arus`
  MODIFY `id_arus` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_jalan`
--
ALTER TABLE `tbl_jalan`
  MODIFY `id_jalan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_keramaian`
--
ALTER TABLE `tbl_keramaian`
  MODIFY `id_keramaian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_maps`
--
ALTER TABLE `tbl_maps`
  MODIFY `id_maps` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_wilayah`
--
ALTER TABLE `tbl_wilayah`
  MODIFY `id_wilayah` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
