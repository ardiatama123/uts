-- phpMyAdmin SQL Dump
-- version 4.7.9
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 27, 2020 at 04:22 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `daftar_mamber`
--

-- --------------------------------------------------------

--
-- Table structure for table `tblkritik`
--

CREATE TABLE `tblkritik` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(25) DEFAULT NULL,
  `email` varchar(20) DEFAULT NULL,
  `kritik` varchar(200) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblkritik`
--

INSERT INTO `tblkritik` (`id`, `nama`, `email`, `kritik`) VALUES
(6, 'Ananda Lakunti Ardiatama', 'anandalakuntiardiatm', 'Pelayanan baik tetepi  harga  agak sedikit mahal');

-- --------------------------------------------------------

--
-- Table structure for table `tblmamber`
--

CREATE TABLE `tblmamber` (
  `id_mamber` int(10) UNSIGNED NOT NULL,
  `nama` varchar(25) DEFAULT NULL,
  `alamat` varchar(40) DEFAULT NULL,
  `nik` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblmamber`
--

INSERT INTO `tblmamber` (`id_mamber`, `nama`, `alamat`, `nik`) VALUES
(1, 'Ananda Lakunti Ardiatama', 'Bangsri,Sukodono-Sidoarjo-Jawa Timur', '18082010010'),
(2, 'Dyah Nava Aprilia', 'Jl Bohar Timur 2 Gg 3, Bohar, Taman Sido', '3515151515151'),
(3, 'rizal', 'KRIAM KOTA', '1808201001111');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tblkritik`
--
ALTER TABLE `tblkritik`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblmamber`
--
ALTER TABLE `tblmamber`
  ADD PRIMARY KEY (`id_mamber`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tblkritik`
--
ALTER TABLE `tblkritik`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `tblmamber`
--
ALTER TABLE `tblmamber`
  MODIFY `id_mamber` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
