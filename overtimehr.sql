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
-- Database: `overtimehr`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `dataovt`
--

CREATE TABLE `dataovt` (
  `dataovt` varchar(128) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data untuk tabel `dataovt`
--

INSERT INTO `dataovt` (`dataovt`) VALUES
('id;npk;nama;dept;tgl;jam_mulai;jam_selesai;m_istirahat_a;s_istirahat_a;m_istirahat_b;s_istirahat_b;jam_lembur;hari_lk;total_tuul'),
('1;H21312;Satriadi;Production;03/11/2022;11:24:36;12:24:36;13:24:36;14:24:36;15:24:36;16:24:36;4;Work Day;10'),
('2;H192731;Alief;Quality;03/11/2022;14:12:00;15:30:00;16:12:00;17:12:00;17:12:00;17:12:00;5;Off Day;12'),
('3;H102319;Aqsal;HRGA;04/11/2022;14:15:00;15:00:00;16:00:00;16:00:00;17:00:00;18:00:00;6;Off Day;4'),
(';;;;;;;;;;;;;'),
(';;;;;;;;;;;;;'),
(';;;;;;;;;;;;;'),
(';;;;;;;;;;;;;'),
(';;;;;;;;;;;;;'),
(';;;;;;;;;;;;;'),
(';;;;;;;;;;;;;'),
(';;;;;;;;;;;;;'),
(';;;;;;;;;;;;;'),
(';;;;;;;;;;;;;'),
(';;;;;;;;;;;;;'),
(';;;;;;;;;;;;;'),
(';;;;;;;;;;;;;'),
(';;;;;;;;;;;;;'),
(';;;;;;;;;;;;;'),
(';;;;;;;;;;;;;'),
(';;;;;;;;;;;;;'),
(';;;;;;;;;;;;;'),
(';;;;;;;;;;;;;'),
(';;;;;;;;;;;;;'),
(';;;;;;;;;;;;;'),
(';;;;;;;;;;;;;'),
(';;;;;;;;;;;;;'),
(';;;;;;;;;;;;;'),
(';;;;;;;;;;;;;'),
('id;npk;nama;dept;tgl;jam_mulai;jam_selesai;m_istirahat_a;s_istirahat_a;m_istirahat_b;s_istirahat_b;jam_lembur;hari_lk;total_tuul'),
('1;H21312;Satriadi;Production;03/11/2022;11:24:36;12:24:36;13:24:36;14:24:36;15:24:36;16:24:36;4;Work Day;10\r'),
('2;H192731;Alief;Quality;03/11/2022;14:12:00;15:30:00;16:12:00;17:12:00;17:12:00;17:12:00;5;Off Day;12\r'),
('3;H102319;Aqsal;HRGA;04/11/2022;14:15:00;15:00:00;16:00:00;16:00:00;17:00:00;18:00:00;6;Off Day;4\r'),
(';;;;;;;;;;;;;\r'),
(';;;;;;;;;;;;;\r'),
(';;;;;;;;;;;;;\r'),
(';;;;;;;;;;;;;\r'),
(';;;;;;;;;;;;;\r'),
(';;;;;;;;;;;;;\r'),
(';;;;;;;;;;;;;\r'),
(';;;;;;;;;;;;;\r'),
(';;;;;;;;;;;;;\r'),
(';;;;;;;;;;;;;\r'),
(';;;;;;;;;;;;;\r'),
(';;;;;;;;;;;;;\r'),
(';;;;;;;;;;;;;\r'),
(';;;;;;;;;;;;;\r'),
(';;;;;;;;;;;;;\r'),
(';;;;;;;;;;;;;\r'),
(';;;;;;;;;;;;;\r'),
(';;;;;;;;;;;;;\r'),
(';;;;;;;;;;;;;\r'),
(';;;;;;;;;;;;;\r'),
(';;;;;;;;;;;;;\r'),
(';;;;;;;;;;;;;\r'),
(';;;;;;;;;;;;;\r'),
(';;;;;;;;;;;;;\r'),
(';;;;;;;;;;;;;\r');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `npk` varchar(100) DEFAULT NULL,
  `nama` varchar(100) DEFAULT NULL,
  `dept` varchar(15) DEFAULT NULL,
  `tgl` date NOT NULL,
  `jam_mulai` time NOT NULL,
  `jam_selesai` time NOT NULL,
  `m_istirahat_a` time NOT NULL,
  `s_istirahat_a` time NOT NULL,
  `m_istirahat_b` time NOT NULL,
  `s_istirahat_b` time NOT NULL,
  `jam_lembur` varchar(255) NOT NULL,
  `hari_lk` varchar(255) NOT NULL,
  `total_tuul` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `npk`, `nama`, `dept`, `tgl`, `jam_mulai`, `jam_selesai`, `m_istirahat_a`, `s_istirahat_a`, `m_istirahat_b`, `s_istirahat_b`, `jam_lembur`, `hari_lk`, `total_tuul`) VALUES
(34, 'H251', 'Teguh Iman Septiaji', 'Hrga-Ir & Ehs-C', '2022-08-02', '15:00:00', '23:00:00', '18:00:00', '19:00:00', '00:00:00', '00:00:00', '7', 'DAY OFF', '16'),
(35, 'H169', 'Luthfianto', 'Quality Assuran', '2022-08-01', '15:30:00', '18:30:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '3', 'WORK DAY', '5,5'),
(36, 'H159', 'Iqbal Hidayat', 'Quality Assuran', '2022-08-01', '15:30:00', '18:30:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '3', 'WORK DAY', '5,5'),
(37, 'H171', 'Erwan Fahmi', 'Quality Assuran', '2022-08-01', '15:30:00', '18:30:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '3', 'WORK DAY', '5,5'),
(38, 'H169', 'Luthfianto', 'Quality Assuran', '2022-08-04', '15:00:00', '18:00:00', '00:00:00', '00:00:00', '00:00:00', '00:00:00', '3', 'WORK DAY', '5,5');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
