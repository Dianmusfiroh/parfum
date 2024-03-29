-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 24, 2019 at 02:01 AM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_parfum`
--

-- --------------------------------------------------------

--
-- Table structure for table `t_parfum`
--

CREATE TABLE `t_parfum` (
  `id_parfum` int(30) NOT NULL,
  `merek` varchar(100) NOT NULL,
  `gender` enum('wanita','laki-laki') NOT NULL,
  `ukuran` varchar(100) NOT NULL,
  `jenis` varchar(100) NOT NULL,
  `kekuatan_aroma` varchar(100) NOT NULL,
  `klarifikasi_aroma` varchar(100) NOT NULL,
  `tahun` year(4) NOT NULL,
  `harga` int(100) NOT NULL,
  `stok` int(100) NOT NULL,
  `nama_foto` varchar(500) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
-- Error reading data for table db_parfum.t_parfum: #1064 - You have an error in your SQL syntax; check the manual that corresponds to your MariaDB server version for the right syntax to use near 'FROM `db_parfum`.`t_parfum`' at line 1

--
-- Indexes for dumped tables
--

--
-- Indexes for table `t_parfum`
--
ALTER TABLE `t_parfum`
  ADD PRIMARY KEY (`id_parfum`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
