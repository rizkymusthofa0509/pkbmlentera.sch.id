-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 12, 2021 at 07:16 AM
-- Server version: 5.7.30
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";

--
-- Database: `md_pkbm`
--

-- --------------------------------------------------------

--
-- Table structure for table `mst_gelombang`
--

CREATE TABLE `mst_gelombang` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` text,
  `date_start` varchar(11) DEFAULT NULL,
  `date_end` varchar(11) DEFAULT NULL,
  `is_active` int(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mst_gelombang`
--

INSERT INTO `mst_gelombang` (`id`, `name`, `date_start`, `date_end`, `is_active`) VALUES
(1, 'Gelombang 1\n', '2021-05-05', '2021-05-06', 1);

-- --------------------------------------------------------

--
-- Table structure for table `mst_paket`
--

CREATE TABLE `mst_paket` (
  `id` int(11) UNSIGNED NOT NULL,
  `name` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `mst_paket`
--

INSERT INTO `mst_paket` (`id`, `name`) VALUES
(1, 'Paket A (SD)'),
(2, 'Paket B (SMP)'),
(3, 'Paket C (SMA)');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_blog`
--

CREATE TABLE `tbl_blog` (
  `id` int(11) UNSIGNED NOT NULL,
  `title` text,
  `file` text,
  `is_active` int(1) DEFAULT NULL,
  `description` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_blog`
--

INSERT INTO `tbl_blog` (`id`, `title`, `file`, `is_active`, `description`) VALUES
(1, 'Judul Berita', 'foto.png', 1, 'Deskripsi berita');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_gallery`
--

CREATE TABLE `tbl_gallery` (
  `id` int(11) UNSIGNED NOT NULL,
  `title` text,
  `file` text,
  `tipe` enum('video','image') DEFAULT NULL,
  `is_active` int(1) DEFAULT NULL,
  `description` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_gallery`
--

INSERT INTO `tbl_gallery` (`id`, `title`, `file`, `tipe`, `is_active`, `description`) VALUES
(1, 'Ujian Nasional', 'foto.png', 'image', 1, NULL),
(2, 'Ujian Nasional', 'video.mp4', 'video', 1, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pembayaran`
--

CREATE TABLE `tbl_pembayaran` (
  `id` int(11) UNSIGNED NOT NULL,
  `siswa_id` int(11) DEFAULT NULL,
  `name` text,
  `nominal` int(50) DEFAULT NULL,
  `description` text,
  `from_name_bank` varchar(255) DEFAULT NULL,
  `from_number_bank` varchar(255) DEFAULT NULL,
  `to_name_bank` varchar(255) DEFAULT NULL,
  `to_number_bank` varchar(255) DEFAULT NULL,
  `lampiran` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_pembayaran`
--

INSERT INTO `tbl_pembayaran` (`id`, `siswa_id`, `name`, `nominal`, `description`, `from_name_bank`, `from_number_bank`, `to_name_bank`, `to_number_bank`, `lampiran`) VALUES
(1, 1, 'Termin 1', 100000, 'Pembayaran 1', 'BCA', '98120380', 'BCA', '092830123', 'file.pdf'),
(2, 1, 'Termin 2', 120000, 'Pembayaran Tahap 2', 'BCA', '1238912830', 'BCA', '123123123', 'file.pdf');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_siswa`
--

CREATE TABLE `tbl_siswa` (
  `id` int(11) UNSIGNED NOT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` char(50) DEFAULT NULL,
  `username` text,
  `password` text,
  `email` varchar(255) DEFAULT NULL,
  `paket_id` int(11) DEFAULT NULL,
  `gelombang_id` int(11) DEFAULT NULL,
  `gender` enum('L','P') DEFAULT NULL,
  `pob` text,
  `dob` date DEFAULT NULL,
  `religion` enum('islam','konghucu','katholik','protestan','hindu','buddha') DEFAULT NULL,
  `kewarganegaraan` text,
  `akta` text,
  `nik` text,
  `nis` text,
  `nisn` text,
  `skhun` text,
  `address` text,
  `status_tempat_tinggal` text,
  `is_kip` text,
  `kip_number` text,
  `nomor_telp` text,
  `ayah_nama` text,
  `ayah_pob` text,
  `ayah_dob` text,
  `ayah_religion` text,
  `ayah_contack` text,
  `ayah_education` text,
  `ayah_work` text,
  `ayah_penghasilan` text,
  `ayah_kebutuhan_khusus` text,
  `ayah_hidup` text,
  `ibu_nama` text,
  `ibu_pob` text,
  `ibu_dob` text,
  `ibu_religion` text,
  `ibu_contack` text,
  `ibu_education` text,
  `ibu_work` text,
  `ibu_penghasilan` text,
  `ibu_kebutuhan_khusus` text,
  `lampiran_kk` text,
  `lampiran_akta` text,
  `lampiran_foto` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_siswa`
--

INSERT INTO `tbl_siswa` (`id`, `first_name`, `last_name`, `username`, `password`, `email`, `paket_id`, `gelombang_id`, `gender`, `pob`, `dob`, `religion`, `kewarganegaraan`, `akta`, `nik`, `nis`, `nisn`, `skhun`, `address`, `status_tempat_tinggal`, `is_kip`, `kip_number`, `nomor_telp`, `ayah_nama`, `ayah_pob`, `ayah_dob`, `ayah_religion`, `ayah_contack`, `ayah_education`, `ayah_work`, `ayah_penghasilan`, `ayah_kebutuhan_khusus`, `ayah_hidup`, `ibu_nama`, `ibu_pob`, `ibu_dob`, `ibu_religion`, `ibu_contack`, `ibu_education`, `ibu_work`, `ibu_penghasilan`, `ibu_kebutuhan_khusus`, `lampiran_kk`, `lampiran_akta`, `lampiran_foto`) VALUES
(1, 'Rizky', 'Musthofa', 'admin', 'admin', 'rizkymusthofa0509@gmail.com', 1, 1, 'L', 'Klaten\n', '1999-09-05', 'islam', 'Indonesia', '32120201010100', '32120201010100', '32120201010100', '32120201010100', '32120201010100', 'Jakarta indornsia', 'Ngekos', '1', '321129830123', '0895367330194', 'Junawari', 'Indramayu', '1974-06-09', 'islam', '0895367330194', 'SMA', 'Wiraswasta', '1000000', 'Tidak', 'YES', 'Surani', 'Indramayu', '1977-08-08', 'islam', '0895367330194', 'SMP', 'Wiraswasta', '1000000', 'YES', 'file.pdf', 'file.pdf', 'foto.png');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_web`
--

CREATE TABLE `tbl_web` (
  `id` int(11) UNSIGNED NOT NULL,
  `school_name` text,
  `address` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbl_web`
--

INSERT INTO `tbl_web` (`id`, `school_name`, `address`) VALUES
(1, 'PKBM LENTERA', 'jalan raya bogor');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mst_gelombang`
--
ALTER TABLE `mst_gelombang`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `mst_paket`
--
ALTER TABLE `mst_paket`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_blog`
--
ALTER TABLE `tbl_blog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_gallery`
--
ALTER TABLE `tbl_gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_pembayaran`
--
ALTER TABLE `tbl_pembayaran`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_siswa`
--
ALTER TABLE `tbl_siswa`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_web`
--
ALTER TABLE `tbl_web`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mst_gelombang`
--
ALTER TABLE `mst_gelombang`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `mst_paket`
--
ALTER TABLE `mst_paket`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_blog`
--
ALTER TABLE `tbl_blog`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_gallery`
--
ALTER TABLE `tbl_gallery`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_pembayaran`
--
ALTER TABLE `tbl_pembayaran`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_siswa`
--
ALTER TABLE `tbl_siswa`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_web`
--
ALTER TABLE `tbl_web`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
