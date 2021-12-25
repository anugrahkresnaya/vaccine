-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 24, 2021 at 05:04 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vaccine`
--

-- --------------------------------------------------------

--
-- Table structure for table `data_vac`
--

CREATE TABLE `data_vac` (
  `id_user` int(20) NOT NULL,
  `nik` varchar(20) DEFAULT NULL,
  `nama` varchar(30) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `tgl_vac1` date DEFAULT NULL,
  `tgl_vac2` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `data_vac`
--

INSERT INTO `data_vac` (`id_user`, `nik`, `nama`, `alamat`, `tgl_vac1`, `tgl_vac2`) VALUES
(1, '3216021712010016', 'Anugrah Onion', 'Perum Babelan Mas Indah', '2021-12-23', '2022-01-23'),
(3, '3216021712010014', 'Lino Thomas', 'Perum Indah', '2021-12-02', '2022-01-26'),
(6, '3216021712010019', 'asd', 'Gunung Eskimo', '2021-12-24', '2022-01-20');

-- --------------------------------------------------------

--
-- Table structure for table `user_data`
--

CREATE TABLE `user_data` (
  `id_user` int(11) NOT NULL,
  `username` varchar(12) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_data`
--

INSERT INTO `user_data` (`id_user`, `username`, `password`) VALUES
(1, 'admin', '$2y$10$.jjWex4fJT0S45T4lz9ko.ARrTpmxsn7WeXW6yPmcYyuK6z.c3BCa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_vac`
--
ALTER TABLE `data_vac`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `user_data`
--
ALTER TABLE `user_data`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_vac`
--
ALTER TABLE `data_vac`
  MODIFY `id_user` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `user_data`
--
ALTER TABLE `user_data`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
