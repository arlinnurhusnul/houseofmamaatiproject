-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 25, 2017 at 05:06 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tasha`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(30) NOT NULL,
  `password` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('Admin', '1234');

-- --------------------------------------------------------

--
-- Table structure for table `perencanaandata`
--

CREATE TABLE `perencanaandata` (
  `nomor_kain` varchar(20) NOT NULL,
  `jenis_kain` varchar(20) NOT NULL,
  `panjang_kain` int(11) NOT NULL,
  `harga_kain` int(11) NOT NULL,
  `jenis_barang` varchar(1000) NOT NULL,
  `detail_barang` varchar(1000) NOT NULL,
  `hasil_jumlah_barang` int(11) NOT NULL,
  `harga_tiap_barang` int(11) NOT NULL,
  `path` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `perencanaandata`
--

INSERT INTO `perencanaandata` (`nomor_kain`, `jenis_kain`, `panjang_kain`, `harga_kain`, `jenis_barang`, `detail_barang`, `hasil_jumlah_barang`, `harga_tiap_barang`, `path`) VALUES
('2', 'Cutton', 12, 70000, 'Mukenah', '', 8, 130000, '/image/281535922fa3e0dfaf.JPG'),
('4', 'rayon', 8, 60000, 'Mukenah', 'mukenah untuk anak-anak', 5, 121000, '/image/16104592392dda7023.JPG'),
('5', 'rd', 14, 60000, 'Mukenah', 'blablabla', 6, 165000, '/image/18328592394403e731.JPG');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `perencanaandata`
--
ALTER TABLE `perencanaandata`
  ADD PRIMARY KEY (`nomor_kain`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
