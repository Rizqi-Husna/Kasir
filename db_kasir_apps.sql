-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 23, 2022 at 04:18 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_kasir_apps`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id_barang` int(11) NOT NULL,
  `kategori` varchar(25) NOT NULL,
  `barcode` varchar(15) NOT NULL,
  `nama_barang` varchar(100) NOT NULL,
  `nama_pd` varchar(15) NOT NULL,
  `stok` int(1) NOT NULL,
  `harga_pokok` int(1) NOT NULL,
  `harga_jual` int(1) NOT NULL,
  `harga_member` int(1) NOT NULL,
  `harga_diskon` int(1) NOT NULL,
  `last_update` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id_barang`, `kategori`, `barcode`, `nama_barang`, `nama_pd`, `stok`, `harga_pokok`, `harga_jual`, `harga_member`, `harga_diskon`, `last_update`) VALUES
(17, 'Alat Tulis', '12', 'Pensil 2B', 'Faber Castle', 89, 2, 3000, 2650, 2800, '0000-00-00 00:00:00'),
(18, 'Alat Tulis', '13', 'Buku Tulis', 'Sinar Dunia', 100, 3000, 3500, 3250, 3300, '0000-00-00 00:00:00'),
(20, 'Folder & Aksesoris', '14', 'Binder A5', 'Bantex', 20, 10000, 11000, 10500, 10650, '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `detail_transaksi`
--

CREATE TABLE `detail_transaksi` (
  `id_detail_trans` int(1) NOT NULL,
  `id_transaksi` int(1) NOT NULL,
  `id_barang` int(1) NOT NULL,
  `jumlah` int(1) NOT NULL,
  `harga` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `detail_transaksi`
--

INSERT INTO `detail_transaksi` (`id_detail_trans`, `id_transaksi`, `id_barang`, `jumlah`, `harga`) VALUES
(1, 1, 11, 12, 154000),
(2, 3, 11, 3, 1540000),
(3, 4, 11, 3, 1540000),
(4, 5, 11, 3, 1540000),
(5, 6, 11, 3, 1540000),
(6, 7, 11, 5, 1540000),
(7, 8, 11, 4, 1540000),
(8, 9, 11, 3, 1540000),
(9, 10, 11, 2, 1540000),
(10, 11, 11, 3, 1540000),
(11, 12, 11, 3, 1540000),
(12, 13, 11, 3, 1540000),
(13, 14, 11, 3, 1540000),
(14, 15, 11, 2, 1540000),
(15, 16, 11, 3, 1540000),
(16, 17, 11, 3, 1540000),
(17, 18, 11, 2, 1540000),
(18, 19, 11, 2, 1540000),
(19, 20, 11, 3, 1540000),
(20, 21, 11, 3, 1540000),
(21, 22, 11, 3, 1540000),
(22, 23, 11, 3, 1540000),
(23, 24, 11, 4, 1540000),
(24, 25, 11, 3, 1540000),
(25, 26, 16, 3, 153500),
(26, 27, 16, 2, 125000),
(27, 28, 16, 2, 125000),
(28, 29, 16, 2, 125000),
(29, 30, 16, 2, 125000),
(30, 31, 16, 2, 130000),
(31, 32, 16, 2, 130000),
(32, 34, 16, 2, 125000),
(33, 35, 16, 2, 125000),
(34, 36, 16, 2, 125000),
(35, 37, 16, 2, 125000),
(36, 38, 16, 2, 150000),
(37, 39, 16, 2, 123500),
(38, 40, 16, 2, 123500),
(39, 41, 16, 2, 123500),
(40, 42, 16, 2, 123500),
(41, 43, 16, 2, 123500),
(42, 44, 16, 2, 123500),
(43, 45, 16, 2, 123500),
(44, 46, 16, 3, 123500),
(45, 47, 16, 1, 123500),
(46, 48, 18, 3, 2650),
(47, 49, 17, 56, 3250),
(48, 50, 18, 20, 2650),
(49, 51, 20, 19, 10500),
(50, 52, 18, 5, 3250);

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id_kategori` int(1) NOT NULL,
  `nama_kategori` varchar(100) NOT NULL,
  `isParent` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id_kategori`, `nama_kategori`, `isParent`) VALUES
(6, 'Alat Tulis', 7),
(7, 'Folder & Aksesoris', 0);

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `id_member` int(1) NOT NULL,
  `nama_member` varchar(100) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `no_hp` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id_member`, `nama_member`, `alamat`, `no_hp`) VALUES
(2, 'Rizqi Husna', 'Surabaya', '082356389469'),
(3, 'Kartika Mega', 'Surabaya', '082347390428'),
(4, 'Baga Arhinza', 'Surabaya', '082343680428'),
(5, 'M. Iqbal', 'Surabaya', '082193728428');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(1) NOT NULL,
  `date_time` datetime NOT NULL,
  `id_user` int(1) NOT NULL,
  `id_member` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `date_time`, `id_user`, `id_member`) VALUES
(1, '2018-09-20 11:36:16', 9, 4),
(2, '2018-09-20 22:05:46', 9, 4),
(3, '2018-09-20 22:06:06', 9, 4),
(4, '2018-09-26 13:22:17', 9, 1),
(5, '2018-09-26 13:23:36', 9, 1),
(6, '2018-09-26 13:25:14', 9, 1),
(7, '2018-09-26 13:25:38', 9, 0),
(8, '2018-09-26 13:27:40', 9, 0),
(9, '2018-09-26 13:30:29', 9, 0),
(10, '2018-09-26 13:30:50', 9, 0),
(11, '2018-09-26 13:31:03', 9, 0),
(12, '2018-09-26 13:31:20', 9, 0),
(13, '2018-09-26 13:38:58', 9, 0),
(14, '2018-09-26 13:39:26', 9, 0),
(15, '2018-09-26 13:40:24', 9, 0),
(16, '2018-09-26 13:42:56', 9, 0),
(17, '2018-09-26 13:46:18', 9, 0),
(18, '2018-09-26 13:48:16', 9, 0),
(19, '2018-09-26 13:49:00', 9, 0),
(20, '2018-09-26 13:51:56', 9, 0),
(21, '2018-09-26 13:52:10', 9, 0),
(22, '2018-09-26 13:54:26', 9, 0),
(23, '2018-09-26 13:54:47', 9, 0),
(24, '2018-09-26 14:11:31', 9, 0),
(25, '2018-09-26 14:11:46', 9, 0),
(26, '2018-09-27 05:04:10', 9, 0),
(27, '2018-09-27 09:14:23', 9, 0),
(28, '2018-09-27 10:12:50', 9, 0),
(29, '2018-09-27 10:58:16', 9, 0),
(30, '2018-09-27 10:59:12', 9, 0),
(31, '2018-09-27 11:00:39', 9, 0),
(32, '2018-09-27 11:00:55', 9, 0),
(33, '2018-09-27 11:24:39', 9, 0),
(34, '2018-09-27 11:24:53', 9, 0),
(35, '2018-09-27 11:25:07', 9, 0),
(36, '2018-09-27 11:28:08', 9, 0),
(37, '2018-09-27 11:39:58', 9, 2),
(38, '2018-09-27 11:45:24', 9, 2),
(39, '2018-10-10 10:47:09', 9, 2),
(40, '2018-10-10 10:47:34', 9, 2),
(41, '2018-10-10 10:47:53', 9, 2),
(42, '2018-10-10 10:52:03', 9, 2),
(43, '2018-10-12 08:35:05', 9, 2),
(44, '2018-10-12 08:35:34', 9, 2),
(45, '2018-10-23 08:37:43', 2, 0),
(46, '2022-05-17 09:10:34', 0, 1),
(47, '2022-05-22 14:05:50', 0, 2),
(48, '2022-05-22 16:26:09', 0, 4),
(49, '2022-05-22 16:28:15', 0, 3),
(50, '2022-05-22 20:54:30', 0, 1),
(51, '2022-05-22 22:04:14', 0, 4),
(52, '2022-05-23 11:24:44', 0, 4);

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(1) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` text NOT NULL,
  `user_level` int(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `user_level`) VALUES
(8, 'husena', '12345', 1),
(9, 'kartika', '12345', 1),
(10, 'baga', '12345', 1),
(11, 'iqbal', '12345', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indexes for table `detail_transaksi`
--
ALTER TABLE `detail_transaksi`
  ADD PRIMARY KEY (`id_detail_trans`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id_kategori`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id_member`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `detail_transaksi`
--
ALTER TABLE `detail_transaksi`
  MODIFY `id_detail_trans` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id_kategori` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `id_member` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(1) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
