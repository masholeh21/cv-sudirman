-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 05, 2018 at 04:34 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_cvsudirman`
--

-- --------------------------------------------------------

--
-- Table structure for table `config`
--

CREATE TABLE `config` (
  `id_config` int(11) NOT NULL,
  `namaweb` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `telepon` varchar(255) NOT NULL,
  `logo` varchar(255) NOT NULL,
  `icon` varchar(255) NOT NULL,
  `keyword` text NOT NULL,
  `metatext` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `config`
--

INSERT INTO `config` (`id_config`, `namaweb`, `email`, `telepon`, `logo`, `icon`, `keyword`, `metatext`) VALUES
(1, 'test', 'info@cv-sudirman.coms', '085725629333', 'eatrepeat6.jpg', 'eatrepeat7.jpg', 'ggggggggggg', '');

-- --------------------------------------------------------

--
-- Table structure for table `galeri_foto`
--

CREATE TABLE `galeri_foto` (
  `id_galeri_foto` int(11) NOT NULL,
  `slug_galeri_foto` varchar(255) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `galeri_video`
--

CREATE TABLE `galeri_video` (
  `id_galeri_video` int(11) NOT NULL,
  `slug_galeri_video` varchar(255) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `link_video` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `industri_besar`
--

CREATE TABLE `industri_besar` (
  `id_industri_besar` int(11) NOT NULL,
  `slug_industri_besar` varchar(255) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `industri_kecil`
--

CREATE TABLE `industri_kecil` (
  `id_industri_kecil` int(11) NOT NULL,
  `slug_industri_kecil` varchar(255) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 ROW_FORMAT=COMPACT;

-- --------------------------------------------------------

--
-- Table structure for table `karyawan`
--

CREATE TABLE `karyawan` (
  `id_karyawan` int(11) NOT NULL,
  `slug_karyawan` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `jabatan` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `kontak`
--

CREATE TABLE `kontak` (
  `id_kontak` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kontak`
--

INSERT INTO `kontak` (`id_kontak`, `name`, `email`, `subject`, `message`, `date`) VALUES
(1, 'test', 'test@cv-sudirman.com', 'test', 'tested', '2018-06-04'),
(2, 'testing', 'testing@cv-sudirman.com', 'testing', 'testing', '2018-06-04');

-- --------------------------------------------------------

--
-- Table structure for table `pesan_direktur`
--

CREATE TABLE `pesan_direktur` (
  `id_pesan_direktur` int(11) NOT NULL,
  `slug_pesan_direktur` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pesan_direktur`
--

INSERT INTO `pesan_direktur` (`id_pesan_direktur`, `slug_pesan_direktur`, `image`, `deskripsi`) VALUES
(1, 'pesan-direktur', 'eatrepeat.jpg', 'pesan direktur');

-- --------------------------------------------------------

--
-- Table structure for table `sekilas_perusahaan`
--

CREATE TABLE `sekilas_perusahaan` (
  `id_sekilas_perusahaan` int(11) NOT NULL,
  `slug_sekilas_perusahaan` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sekilas_perusahaan`
--

INSERT INTO `sekilas_perusahaan` (`id_sekilas_perusahaan`, `slug_sekilas_perusahaan`, `image`, `deskripsi`) VALUES
(1, 'sekilas-perusahaan', 'eatrepeat5.jpg', 'fff');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id_slider` int(11) NOT NULL,
  `slug_slider` varchar(255) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `sub_judul` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id_slider`, `slug_slider`, `judul`, `sub_judul`, `image`) VALUES
(1, 'test', 'test', 'tested', 'eatrepeat4.jpg'),
(2, '2-testin2', 'testin2', 'testing', 'stevejobs.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `slug_user` varchar(255) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `slug_user`, `username`, `password`, `email`) VALUES
(1, '', 'admin', 'd033e22ae348aeb5660fc2140aec35850c4da997', 'info@cv-sudirman.com'),
(2, 'test', 'test', 'a94a8fe5ccb19ba61c4c0873d391e987982fbbd3', 'test@cv-sudirman.com');

-- --------------------------------------------------------

--
-- Table structure for table `visi_misi`
--

CREATE TABLE `visi_misi` (
  `id_visi_misi` int(11) NOT NULL,
  `slug_visi_misi` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `visi_misi`
--

INSERT INTO `visi_misi` (`id_visi_misi`, `slug_visi_misi`, `image`, `deskripsi`) VALUES
(1, 'visi-misi', 'logo.png', 'visi misi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `config`
--
ALTER TABLE `config`
  ADD PRIMARY KEY (`id_config`);

--
-- Indexes for table `galeri_foto`
--
ALTER TABLE `galeri_foto`
  ADD PRIMARY KEY (`id_galeri_foto`);

--
-- Indexes for table `galeri_video`
--
ALTER TABLE `galeri_video`
  ADD PRIMARY KEY (`id_galeri_video`);

--
-- Indexes for table `industri_besar`
--
ALTER TABLE `industri_besar`
  ADD PRIMARY KEY (`id_industri_besar`);

--
-- Indexes for table `industri_kecil`
--
ALTER TABLE `industri_kecil`
  ADD PRIMARY KEY (`id_industri_kecil`);

--
-- Indexes for table `karyawan`
--
ALTER TABLE `karyawan`
  ADD PRIMARY KEY (`id_karyawan`);

--
-- Indexes for table `kontak`
--
ALTER TABLE `kontak`
  ADD PRIMARY KEY (`id_kontak`);

--
-- Indexes for table `pesan_direktur`
--
ALTER TABLE `pesan_direktur`
  ADD PRIMARY KEY (`id_pesan_direktur`);

--
-- Indexes for table `sekilas_perusahaan`
--
ALTER TABLE `sekilas_perusahaan`
  ADD PRIMARY KEY (`id_sekilas_perusahaan`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id_slider`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `visi_misi`
--
ALTER TABLE `visi_misi`
  ADD PRIMARY KEY (`id_visi_misi`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `config`
--
ALTER TABLE `config`
  MODIFY `id_config` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `galeri_foto`
--
ALTER TABLE `galeri_foto`
  MODIFY `id_galeri_foto` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `galeri_video`
--
ALTER TABLE `galeri_video`
  MODIFY `id_galeri_video` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `industri_besar`
--
ALTER TABLE `industri_besar`
  MODIFY `id_industri_besar` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `industri_kecil`
--
ALTER TABLE `industri_kecil`
  MODIFY `id_industri_kecil` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `karyawan`
--
ALTER TABLE `karyawan`
  MODIFY `id_karyawan` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kontak`
--
ALTER TABLE `kontak`
  MODIFY `id_kontak` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `pesan_direktur`
--
ALTER TABLE `pesan_direktur`
  MODIFY `id_pesan_direktur` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sekilas_perusahaan`
--
ALTER TABLE `sekilas_perusahaan`
  MODIFY `id_sekilas_perusahaan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id_slider` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `visi_misi`
--
ALTER TABLE `visi_misi`
  MODIFY `id_visi_misi` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
