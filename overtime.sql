-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 14, 2022 at 01:34 AM
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
-- Database: `overtime`
--

-- --------------------------------------------------------

--
-- Table structure for table `dataovt`
--

CREATE TABLE `dataovt` (
  `id` int(11) NOT NULL,
  `npk` varchar(255) DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `dept` varchar(255) DEFAULT NULL,
  `tgl` date DEFAULT NULL,
  `jam_mulai` time DEFAULT NULL,
  `jam_selesai` time DEFAULT NULL,
  `m_istirahat_a` time DEFAULT NULL,
  `m_istirahat_b` time DEFAULT NULL,
  `s_istirahat_a` time DEFAULT NULL,
  `s_istirahat_b` time DEFAULT NULL,
  `jam_lembur` varchar(100) DEFAULT NULL,
  `hari_lk` varchar(255) DEFAULT NULL,
  `total_jam` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dataovt`
--

INSERT INTO `dataovt` (`id`, `npk`, `nama`, `dept`, `tgl`, `jam_mulai`, `jam_selesai`, `m_istirahat_a`, `m_istirahat_b`, `s_istirahat_a`, `s_istirahat_b`, `jam_lembur`, `hari_lk`, `total_jam`) VALUES
(2, 'H21312', 'Satriadi', 'Production', '2022-11-03', '11:24:36', '12:24:36', '13:24:36', '14:24:36', '15:24:36', '16:24:36', '4', 'Work Day', '10'),
(3, 'H192731', 'Alief', 'Quality', '2022-11-03', '14:12:00', '15:30:00', '16:12:00', '17:12:00', '17:12:00', '17:12:00', '5', 'Off Day', '12'),
(4, 'H102319', 'Aqsal', 'Production', '2022-11-04', '14:15:00', '15:00:00', '16:00:00', '16:00:00', '17:00:00', '18:00:00', '6', 'Off Day', '4'),
(6, 'H2401284', 'Salma', 'HR/GA', '2022-11-04', '07:00:00', '16:00:00', '08:30:00', '09:00:00', '11:30:00', '13:00:00', '7', 'Work Day', '8'),
(9, '20020510', 'Raden Rara Salma L.P', 'Keuangan', '2022-09-11', '19:00:00', '16:00:00', '15:28:00', '15:28:00', '15:28:00', '21:00:00', '8', 'Work Day', '6'),
(14, '312312', 'adriani', 'produksi', '0000-00-00', '12:00:00', '13:31:00', '14:41:00', '15:12:00', '12:12:00', '12:12:00', '8', 'tidak ada', '6'),
(15, '312313', 'adriani', 'produksi', '0000-00-00', '12:00:00', '13:31:00', '14:41:00', '15:12:00', '12:12:00', '12:12:00', '8', 'tidak ada', '6'),
(16, '312314', 'adriani', 'produksi', '0000-00-00', '12:00:00', '13:31:00', '14:41:00', '15:12:00', '12:12:00', '12:12:00', '8', 'tidak ada', '6'),
(17, '312315', 'adriani', 'produksi', '0000-00-00', '12:00:00', '13:31:00', '14:41:00', '15:12:00', '12:12:00', '12:12:00', '8', 'tidak ada', '6'),
(18, '312312', 'adriani', 'produksi', '0000-00-00', '12:00:00', '13:31:00', '14:41:00', '15:12:00', '12:12:00', '12:12:00', '8', 'tidak ada', '6'),
(19, '312313', 'adriani', 'produksi', '0000-00-00', '12:00:00', '13:31:00', '14:41:00', '15:12:00', '12:12:00', '12:12:00', '8', 'tidak ada', '6'),
(20, '312314', 'adriani', 'produksi', '0000-00-00', '12:00:00', '13:31:00', '14:41:00', '15:12:00', '12:12:00', '12:12:00', '8', 'tidak ada', '6'),
(21, '312315', 'adriani', 'produksi', '0000-00-00', '12:00:00', '13:31:00', '14:41:00', '15:12:00', '12:12:00', '12:12:00', '8', 'tidak ada', '6'),
(22, '312312', 'adriani', 'produksi', '0000-00-00', '12:00:00', '13:31:00', '14:41:00', '15:12:00', '12:12:00', '12:12:00', '8', 'tidak ada', '6'),
(23, '312313', 'adriani', 'produksi', '0000-00-00', '12:00:00', '13:31:00', '14:41:00', '15:12:00', '12:12:00', '12:12:00', '8', 'tidak ada', '6'),
(24, '312314', 'adriani', 'produksi', '0000-00-00', '12:00:00', '13:31:00', '14:41:00', '15:12:00', '12:12:00', '12:12:00', '8', 'tidak ada', '6'),
(25, '312315', 'adriani', 'produksi', '0000-00-00', '12:00:00', '13:31:00', '14:41:00', '15:12:00', '12:12:00', '12:12:00', '8', 'tidak ada', '6'),
(26, '312312', 'adriani', 'produksi', '0000-00-00', '12:00:00', '13:31:00', '14:41:00', '15:12:00', '12:12:00', '12:12:00', '8', 'tidak ada', '6'),
(27, '312313', 'adriani', 'produksi', '0000-00-00', '12:00:00', '13:31:00', '14:41:00', '15:12:00', '12:12:00', '12:12:00', '8', 'tidak ada', '6'),
(28, '312314', 'adriani', 'produksi', '0000-00-00', '12:00:00', '13:31:00', '14:41:00', '15:12:00', '12:12:00', '12:12:00', '8', 'tidak ada', '6'),
(29, '312315', 'adriani', 'produksi', '0000-00-00', '12:00:00', '13:31:00', '14:41:00', '15:12:00', '12:12:00', '12:12:00', '8', 'tidak ada', '6'),
(30, '312312', 'adriani', 'produksi', '2022-02-22', '12:00:00', '13:31:00', '14:41:00', '15:12:00', '12:12:00', '12:12:00', '8', 'tidak ada', '6'),
(31, '312313', 'adriani', 'produksi', '2022-02-23', '12:00:00', '13:31:00', '14:41:00', '15:12:00', '12:12:00', '12:12:00', '8', 'tidak ada', '6'),
(32, '312314', 'adriani', 'produksi', '2022-02-24', '12:00:00', '13:31:00', '14:41:00', '15:12:00', '12:12:00', '12:12:00', '8', 'tidak ada', '6'),
(33, '312315', 'adriani', 'produksi', '2022-02-25', '12:00:00', '13:31:00', '14:41:00', '15:12:00', '12:12:00', '12:12:00', '8', 'tidak ada', '6'),
(39, '312312', 'adriani', 'produksi', '2022-02-22', '12:00:00', '13:31:00', '14:41:00', '15:12:00', '12:12:00', '12:12:00', '8', 'tidak ada', '6'),
(40, '312313', 'adriani', 'produksi', '2022-02-23', '12:00:00', '13:31:00', '14:41:00', '15:12:00', '12:12:00', '12:12:00', '8', 'tidak ada', '6'),
(41, '312314', 'adriani', 'produksi', '2022-02-24', '12:00:00', '13:31:00', '14:41:00', '15:12:00', '12:12:00', '12:12:00', '8', 'tidak ada', '6'),
(42, '312315', 'adriani', 'produksi', '2022-02-25', '12:00:00', '13:31:00', '14:41:00', '15:12:00', '12:12:00', '12:12:00', '8', 'tidak ada', '6');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nik` varchar(10) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `telepon` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `level` varchar(25) NOT NULL DEFAULT 'member'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nik`, `nama`, `telepon`, `username`, `password`, `level`) VALUES
(37, '41241412', 'Geraldo Maesa', '0841241241', 'superadmin', '17c4520f6cfd1ab53d8745e84681eb49', 'superadmin'),
(38, '3125235823', 'Alief Arga', '084162424112', 'admin', '21232f297a57a5a743894a0e4a801fc3', 'admin'),
(39, '3148124712', 'Salma', '0847275342', 'petugas', 'afb91ef692fd08c445e8cb1bab2ccf9c', 'petugas');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `dataovt`
--
ALTER TABLE `dataovt`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `dataovt`
--
ALTER TABLE `dataovt`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
