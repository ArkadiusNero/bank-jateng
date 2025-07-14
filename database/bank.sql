-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 14, 2025 at 11:21 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bank`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `IdAdmin` varchar(6) NOT NULL,
  `namaAdmin` varchar(30) NOT NULL,
  `usernameAdmin` varchar(20) NOT NULL,
  `passwordAdmin` varchar(20) NOT NULL,
  `level` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`IdAdmin`, `namaAdmin`, `usernameAdmin`, `passwordAdmin`, `level`) VALUES
('ADM001', 'Admin 1', 'admin', 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `berita`
--

CREATE TABLE `berita` (
  `idBerita` varchar(6) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `isi` text NOT NULL,
  `gambar` varchar(100) NOT NULL,
  `sumber` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `berita`
--

INSERT INTO `berita` (`idBerita`, `judul`, `isi`, `gambar`, `sumber`) VALUES
('BRT001', 'Bank Jateng Syariah Raih Penghargaan di 7th TOP Digital Corporate Brand Award 2025', 'JAKARTA - Bank Jateng Syariah menorehkan capaian membanggakan di ajang nasional dengan meraih penghargaan 7th TOP Digital Corporate Brand Award 2025 untuk kategori Unit Usaha Syariah Bank Pembangunan Daerah, yang diselenggarakan oleh INFOEKONOMI.ID dan TRAS N CO Indonesia di Golden Ballroom, The Sultan Hotel &amp; Residence, Jakarta pada Kamis (20/3/2025)', '6867dfa833a5a.jpg', 'https://www.bankjateng.co.id/bank-jateng-syariah-raih-penghargaan-di-7th-top-digital-corporate-brand-award-2025'),
('BRT002', 'Bank Jateng Syariah, The Best Unit Usaha Syariah Infobank-Isentia Digital Brand Appreciation 2025', 'Jakarta - Bank Jateng Syariah kembali mencatatkan prestasi gemilang dalam industri perbankan nasional pada ajang 14th Infobank-Isentia Digital Brand Appreciation 2025 yang diselenggarakan oleh Infobank Media Group.', '6867d6dc26e82.jpg', 'https://www.rmoljawatengah.id/bank-jateng-syariah-the-best-unit-usaha-syariah-infobank-isentia-digital-brand-appreciation-2025'),
('BRT003', 'Bank Jateng Syariah resmikan kantor baru di Pekalongan, fokus layani UMKM', 'Direktur Bisnis Kelembagaan, Tresuri, dan Unit Usaha Syariah Bank Jateng Ony Suharsono (kiri) mendampingi Asisten Administrasi Sekda Kota Pekalongan Agust Marhaendayana yang menggunting rangkaian bunga saat meresmikan kantor baru Bank Jateng Syariah Cabang Pekalongan di Jalan Pemuda Nomor 50 Pekalongan, Jumat (17/1). Dok. Bank Jateng', '6867ec87ce674.jpg', 'https://jateng.antaranews.com/berita/567598/bank-jateng-syariah-resmikan-kantor-baru-di-pekalongan-fokus-layani-umkm?utm_source=chatgpt.com'),
('BRT004', 'Gubernur Minta Bank Jateng Berikan Kemudahan Akses Perbankan bagi Pelaku UMKM ', ' Gubernur Jawa Tengah, Komjen Pol (P) Drs. Ahmad Luthfi, S.H., S.St.M.K., meminta Bank Jateng memberikan kemudahan akses bagi pelaku usaha mikro, kecil, dan menengah (UMKM). Sebab, sektor tersebut menjadi salah satu tulang punggung perekonomian daerah.', '6867f1005f83a.png', 'https://humas.jatengprov.go.id/detail_berita_gubernur?id=9509&amp;utm_source=chatgpt.com');

-- --------------------------------------------------------

--
-- Table structure for table `proses_pengajuan`
--

CREATE TABLE `proses_pengajuan` (
  `id_pengajuan` int(11) NOT NULL,
  `nama_lengkap` varchar(255) NOT NULL,
  `nik` varchar(255) NOT NULL,
  `ktp` varchar(128) NOT NULL,
  `alamat` text NOT NULL,
  `nama_ibu_kandung` varchar(128) NOT NULL,
  `jenis_tabungan` varchar(128) NOT NULL,
  `username` varchar(123) NOT NULL,
  `password` varchar(123) NOT NULL,
  `telepon` int(11) NOT NULL,
  `password2` varchar(225) NOT NULL,
  `gambar` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `idUser` varchar(6) NOT NULL,
  `namaUser` varchar(30) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `nik` varchar(20) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `telepon` varchar(13) NOT NULL,
  `username` varchar(20) NOT NULL,
  `passwordUser` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`idUser`, `namaUser`, `gambar`, `nik`, `alamat`, `telepon`, `username`, `passwordUser`) VALUES
('USR007', 'kucengmangan', '68735bd9ac574.jpg', '3319051706060002', 'Kirig Rt03 Rw01 Mejobo Kudus', '08666535634', 'kuceng', 'kuceng');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`IdAdmin`);

--
-- Indexes for table `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`idBerita`);

--
-- Indexes for table `proses_pengajuan`
--
ALTER TABLE `proses_pengajuan`
  ADD PRIMARY KEY (`id_pengajuan`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`idUser`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `proses_pengajuan`
--
ALTER TABLE `proses_pengajuan`
  MODIFY `id_pengajuan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
