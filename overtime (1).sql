-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 25 Des 2022 pada 16.32
-- Versi server: 10.4.27-MariaDB
-- Versi PHP: 7.4.33

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
-- Struktur dari tabel `barchart`
--

CREATE TABLE `barchart` (
  `ID` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Tanggal` varchar(255) NOT NULL,
  `Tahun` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `chart`
--

CREATE TABLE `chart` (
  `ID` int(11) NOT NULL,
  `Name` varchar(255) NOT NULL,
  `Values` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `chart`
--

INSERT INTO `chart` (`ID`, `Name`, `Values`) VALUES
(1, 'Plastik Injection & Assy', 22),
(2, 'Painting', 6),
(3, 'Setting Assy', 0),
(4, 'Maintenance Dandory', 0),
(5, 'Delivery, FGWH & Supporting Facility', 3781),
(6, 'Planning, FG & SFGWH', 807),
(7, 'Receiving, MRP & RMCWH', 322),
(8, 'Digitalisasi', 76),
(9, 'Quality Assurance', 3674),
(10, 'Process Engineering', 858),
(11, 'Mouldshop', 0),
(12, 'Project Engineering', 958),
(13, 'Finance & Accounting', 182),
(14, 'HRGA - IR & EHS - CSR', 54),
(15, 'Procurement', 163),
(16, 'Marketing', 14);

-- --------------------------------------------------------

--
-- Struktur dari tabel `dataovt`
--

CREATE TABLE `dataovt` (
  `id` int(11) NOT NULL,
  `npk` varchar(255) DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `dept` varchar(255) DEFAULT NULL,
  `section` varchar(255) NOT NULL,
  `instansi` varchar(255) NOT NULL,
  `tgl` date DEFAULT NULL,
  `jam_mulai` time DEFAULT NULL,
  `jam_selesai` time DEFAULT NULL,
  `m_istirahat_a` time DEFAULT NULL,
  `m_istirahat_b` time DEFAULT NULL,
  `s_istirahat_a` time DEFAULT NULL,
  `s_istirahat_b` time DEFAULT NULL,
  `jam_lembur` varchar(100) DEFAULT NULL,
  `hari_lk` varchar(255) DEFAULT NULL,
  `total_tuul` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `dataovt`
--

INSERT INTO `dataovt` (`id`, `npk`, `nama`, `dept`, `section`, `instansi`, `tgl`, `jam_mulai`, `jam_selesai`, `m_istirahat_a`, `m_istirahat_b`, `s_istirahat_a`, `s_istirahat_b`, `jam_lembur`, `hari_lk`, `total_tuul`) VALUES
(2, 'H21312', 'Satriadi', 'Production', '', '', '2022-11-03', '11:24:36', '12:24:36', '13:24:36', '14:24:36', '15:24:36', '16:24:36', '4', 'Work Day', '10'),
(3, 'H192731', 'Alief', 'Quality', '', '', '2022-11-03', '14:12:00', '15:30:00', '16:12:00', '17:12:00', '17:12:00', '17:12:00', '5', 'Off Day', '12'),
(4, 'H102319', 'Aqsal', 'Production', '', '', '2022-11-04', '14:15:00', '15:00:00', '16:00:00', '16:00:00', '17:00:00', '18:00:00', '6', 'Off Day', '4'),
(6, 'H2401284', 'Salma', 'HR/GA', '', '', '2022-11-04', '07:00:00', '16:00:00', '08:30:00', '09:00:00', '11:30:00', '13:00:00', '7', 'Work Day', '8'),
(9, '20020510', 'Raden Rara Salma L.P', 'Keuangan', '', '', '2022-09-11', '19:00:00', '16:00:00', '15:28:00', '15:28:00', '15:28:00', '21:00:00', '8', 'Work Day', '6'),
(19, '312313', 'adriani', 'produksi', '', '', '0000-00-00', '12:00:00', '13:31:00', '14:41:00', '15:12:00', '12:12:00', '12:12:00', '8', 'tidak ada', '6'),
(20, '312314', 'adriani', 'produksi', '', '', '0000-00-00', '12:00:00', '13:31:00', '14:41:00', '15:12:00', '12:12:00', '12:12:00', '8', 'tidak ada', '6'),
(21, '312315', 'adriani', 'produksi', '', '', '0000-00-00', '12:00:00', '13:31:00', '14:41:00', '15:12:00', '12:12:00', '12:12:00', '8', 'tidak ada', '6'),
(22, '312312', 'adriani', 'produksi', '', '', '0000-00-00', '12:00:00', '13:31:00', '14:41:00', '15:12:00', '12:12:00', '12:12:00', '8', 'tidak ada', '6'),
(23, '312313', 'adriani', 'produksi', '', '', '0000-00-00', '12:00:00', '13:31:00', '14:41:00', '15:12:00', '12:12:00', '12:12:00', '8', 'tidak ada', '6'),
(24, '312314', 'adriani', 'produksi', '', '', '0000-00-00', '12:00:00', '13:31:00', '14:41:00', '15:12:00', '12:12:00', '12:12:00', '8', 'tidak ada', '6'),
(25, '312315', 'adriani', 'produksi', '', '', '0000-00-00', '12:00:00', '13:31:00', '14:41:00', '15:12:00', '12:12:00', '12:12:00', '8', 'tidak ada', '6'),
(26, '312312', 'adriani', 'produksi', '', '', '0000-00-00', '12:00:00', '13:31:00', '14:41:00', '15:12:00', '12:12:00', '12:12:00', '8', 'tidak ada', '6'),
(27, '312313', 'adriani', 'produksi', '', '', '0000-00-00', '12:00:00', '13:31:00', '14:41:00', '15:12:00', '12:12:00', '12:12:00', '8', 'tidak ada', '6'),
(28, '312314', 'adriani', 'produksi', '', '', '0000-00-00', '12:00:00', '13:31:00', '14:41:00', '15:12:00', '12:12:00', '12:12:00', '8', 'tidak ada', '6'),
(29, '312315', 'adriani', 'produksi', '', '', '0000-00-00', '12:00:00', '13:31:00', '14:41:00', '15:12:00', '12:12:00', '12:12:00', '8', 'tidak ada', '6'),
(30, '312312', 'adriani', 'produksi', '', '', '2022-02-22', '12:00:00', '13:31:00', '14:41:00', '15:12:00', '12:12:00', '12:12:00', '8', 'tidak ada', '6'),
(31, '312313', 'adriani', 'produksi', '', '', '2022-02-23', '12:00:00', '13:31:00', '14:41:00', '15:12:00', '12:12:00', '12:12:00', '8', 'tidak ada', '6'),
(32, '312314', 'adriani', 'produksi', '', '', '2022-02-24', '12:00:00', '13:31:00', '14:41:00', '15:12:00', '12:12:00', '12:12:00', '8', 'tidak ada', '6'),
(33, '312315', 'adriani', 'produksi', '', '', '2022-02-25', '12:00:00', '13:31:00', '14:41:00', '15:12:00', '12:12:00', '12:12:00', '8', 'tidak ada', '6'),
(39, '312312', 'adriani', 'produksi', '', '', '2022-02-22', '12:00:00', '13:31:00', '14:41:00', '15:12:00', '12:12:00', '12:12:00', '8', 'tidak ada', '6'),
(40, '312313', 'adriani', 'produksi', '', '', '2022-02-23', '12:00:00', '13:31:00', '14:41:00', '15:12:00', '12:12:00', '12:12:00', '8', 'tidak ada', '6'),
(41, '312314', 'adriani', 'produksi', '', '', '2022-02-24', '12:00:00', '13:31:00', '14:41:00', '15:12:00', '12:12:00', '12:12:00', '8', 'tidak ada', '6'),
(42, '312315', 'adriani', 'produksi', '', '', '2022-02-25', '12:00:00', '13:31:00', '14:41:00', '15:12:00', '12:12:00', '12:12:00', '8', 'tidak ada', '6'),
(0, '7654321', NULL, NULL, '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL),
(0, '4567890', NULL, NULL, '', '', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nik` varchar(10) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `telepon` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `level` varchar(25) NOT NULL DEFAULT 'member'
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `nik`, `nama`, `telepon`, `username`, `password`, `level`) VALUES
(26, '1001123', 'Superadmin', '08999444000', 'superadmin', 'superadmin', 'superadmin'),
(28, '1234563245', 'Admin', '082132435623', 'admin', 'admin', 'admin'),
(29, '1234567896', 'Petugas', '08312324553', 'petugas', 'petugas', 'petugas'),
(33, '12345678', 'LPK MONAS', '123456789', 'lpkmonas', 'lpkmonas', 'lpkmonas'),
(36, '1234', 'Propacific', '081328352029', 'propacific', 'propacific', 'propacific'),
(37, '1234567', 'Esseo Perbama', '12345678', 'esseiperbama', 'esseiperbama', 'esseiperbama'),
(38, '12345', 'LPK Mitra Industri', '123456', 'lpkmitraindustri', 'lpkmitraindustri', 'lpkmitraindustri'),
(39, '123456', 'Maju Jaya Leksana', '123456', 'majujayaleksana', 'majujayaleksana', 'majujayaleksana');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `barchart`
--
ALTER TABLE `barchart`
  ADD PRIMARY KEY (`ID`);

--
-- Indeks untuk tabel `chart`
--
ALTER TABLE `chart`
  ADD PRIMARY KEY (`ID`) USING BTREE;

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `barchart`
--
ALTER TABLE `barchart`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `chart`
--
ALTER TABLE `chart`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
