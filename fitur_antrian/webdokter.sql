-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 01, 2018 at 08:23 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webdokter`
--

-- --------------------------------------------------------

--
-- Table structure for table `nomor_urut`
--

CREATE TABLE `nomor_urut` (
  `nomor` varchar(6) NOT NULL,
  `nama` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nomor_urut`
--

INSERT INTO `nomor_urut` (`nomor`, `nama`) VALUES
('A00001', 'sasa'),
('A00002', 'reza'),
('A00003', 'retno dwi'),
('A00004', 'fery'),
('A00005', 'rizal'),
('A00006', 'dewi'),
('A00007', 'deswe');

-- --------------------------------------------------------

--
-- Table structure for table `profil_dokter`
--

CREATE TABLE `profil_dokter` (
  `id_dokter` int(11) NOT NULL,
  `foto` varchar(50) NOT NULL,
  `nama_dokter` varchar(50) NOT NULL,
  `spesialis` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(11) NOT NULL,
  `tgl_lahir` varchar(11) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `daerah_asal` varchar(50) NOT NULL,
  `no_telp` int(12) NOT NULL,
  `sertifikasi` varchar(255) NOT NULL,
  `ijin_praktek` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `riwayat`
--

CREATE TABLE `riwayat` (
  `id_user` int(11) NOT NULL,
  `nama_pasien` varchar(50) NOT NULL,
  `riwayat_penyakit` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `nomor_urut`
--
ALTER TABLE `nomor_urut`
  ADD PRIMARY KEY (`nomor`);

--
-- Indexes for table `profil_dokter`
--
ALTER TABLE `profil_dokter`
  ADD PRIMARY KEY (`id_dokter`);

--
-- Indexes for table `riwayat`
--
ALTER TABLE `riwayat`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `profil_dokter`
--
ALTER TABLE `profil_dokter`
  MODIFY `id_dokter` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `riwayat`
--
ALTER TABLE `riwayat`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
