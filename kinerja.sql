-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: 07 Jan 2018 pada 15.19
-- Versi Server: 10.1.28-MariaDB
-- PHP Version: 5.6.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kinerja`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `form`
--

CREATE TABLE `form` (
  `id` int(100) NOT NULL,
  `jk` varchar(100) NOT NULL,
  `status` varchar(100) NOT NULL,
  `pekerjaan` varchar(100) NOT NULL,
  `tahun` varchar(100) NOT NULL,
  `sopan_puas` varchar(100) NOT NULL,
  `sopan_penting` varchar(100) NOT NULL,
  `kecepatan_puas` varchar(100) NOT NULL,
  `kecepatan_penting` varchar(100) NOT NULL,
  `kemampuan_puas` varchar(100) NOT NULL,
  `kemampuan_penting` varchar(100) NOT NULL,
  `ketepatan_puas` varchar(100) NOT NULL,
  `ketepatan_penting` varchar(100) NOT NULL,
  `jaringan_puas` varchar(100) NOT NULL,
  `jaringan_penting` varchar(100) NOT NULL,
  `permintaan_puas` varchar(100) NOT NULL,
  `permintaan_penting` varchar(100) NOT NULL,
  `pembuatan_puas` varchar(100) NOT NULL,
  `pembuatan_penting` varchar(100) NOT NULL,
  `AIS_puas` varchar(100) NOT NULL,
  `AIS_penting` varchar(100) NOT NULL,
  `penyelesaian_puas` varchar(100) NOT NULL,
  `penyelesaian_penting` varchar(100) NOT NULL,
  `penanganan_puas` varchar(100) NOT NULL,
  `penanganan_penting` varchar(100) NOT NULL,
  `pemeliharaan_puas` varchar(100) NOT NULL,
  `pemeliharaan_penting` varchar(100) NOT NULL,
  `informasi_puas` varchar(100) NOT NULL,
  `informasi_penting` varchar(100) NOT NULL,
  `account_puas` varchar(100) NOT NULL,
  `account_penting` varchar(100) NOT NULL,
  `akun_puas` varchar(100) NOT NULL,
  `akun_penting` varchar(100) NOT NULL,
  `helpdesk_puas` varchar(100) NOT NULL,
  `helpdesk_penting` varchar(100) NOT NULL,
  `saran` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `form`
--

INSERT INTO `form` (`id`, `jk`, `status`, `pekerjaan`, `tahun`, `sopan_puas`, `sopan_penting`, `kecepatan_puas`, `kecepatan_penting`, `kemampuan_puas`, `kemampuan_penting`, `ketepatan_puas`, `ketepatan_penting`, `jaringan_puas`, `jaringan_penting`, `permintaan_puas`, `permintaan_penting`, `pembuatan_puas`, `pembuatan_penting`, `AIS_puas`, `AIS_penting`, `penyelesaian_puas`, `penyelesaian_penting`, `penanganan_puas`, `penanganan_penting`, `pemeliharaan_puas`, `pemeliharaan_penting`, `informasi_puas`, `informasi_penting`, `account_puas`, `account_penting`, `akun_puas`, `akun_penting`, `helpdesk_puas`, `helpdesk_penting`, `saran`) VALUES
(1, 'laki-laki', 'Mahasiswa', 'ass', '> 1Thn - 5Thn', 'Puas', '', '', '', 'sangat tidak puas', '', 'puas', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(2, '', 'Mahasiswa', 'h', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(3, 'laki-laki', 'Pejabat Struktural', 'ass', '< 1Thn', '1', '', '1', '', '1', '', '1', '', '1', '', '1', '', '1', '', '1', '', '1', '', '1', '', '1', '', '1', '', '1', '', '1', '', '1', '', ''),
(5, '', 'Dosen', '', '< 1Thn', '2', '2', '', '2', '2', '2', '2', '4', '', '', '', '', '', '', '', '1', '', '1', '4', '', '3', '', '', '1', '4', '', '4', '', '', '1', ''),
(7, '', 'Tenaga Kependidikan', '', '> 5Thn - 10Thn', '2', '2', '4', '2', '3', '1', '3', '2', '4', '1', '1', '2', '2', '3', '3', '4', '4', '1', '', '3', '', '3', '', '1', '2', '', '4', '', '', '1', 'yyyy');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `username` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `level` enum('user','admin','','') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id`, `username`, `password`, `level`) VALUES
(1, 'putri', '12345', 'admin'),
(2, 'ade', '12345', 'user'),
(3, 'nate', '12345', 'user'),
(4, 'cool', '221', 'user'),
(10, 'eee', '123', 'user'),
(11, '1', '1', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `form`
--
ALTER TABLE `form`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `form`
--
ALTER TABLE `form`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
