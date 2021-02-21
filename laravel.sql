-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 21, 2021 at 06:13 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_100000_create_password_resets_table', 1),
(2, '2021_02_05_055502_tbl_ppdb', 1),
(3, '2021_02_05_055526_tbl_profile', 1),
(4, '2021_02_05_055535_tbl_artikel', 1),
(5, '2021_02_05_055542_tbl_gallery', 1),
(6, '2021_02_05_060146_tbl_info_ibu', 1),
(7, '2021_02_05_060205_tbl_info_ayah', 1),
(8, '2021_02_05_144930_tbl_ketentuan', 1),
(9, '2021_02_16_014349_tbl_akun', 1),
(12, '2021_02_21_201323_tbl_pegawai', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_ahkir_nama`
--

CREATE TABLE `tbl_ahkir_nama` (
  `id_ahkir_nama` int(11) NOT NULL,
  `last_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_ahkir_nama`
--

INSERT INTO `tbl_ahkir_nama` (`id_ahkir_nama`, `last_name`) VALUES
(1, 'Aris Sulisyanto'),
(2, 'Agus Hermanto');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_akun`
--

CREATE TABLE `tbl_akun` (
  `id_akun` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `username` varchar(15) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_akun`
--

INSERT INTO `tbl_akun` (`id_akun`, `username`, `password`, `nama`, `email`, `email_verified_at`, `remember_token`, `created_at`, `updated_at`) VALUES
('656a8a16-183f-43dd-8fc5-a549e06b1dde', 'wachidtorico', '$2y$10$NukNurCnpoZYyTc33xUo9uxYfBSDnb2hs3Vg/MMv/IdDkki34JGZ.', 'Wachidto Rico', 'geometri.datar@gmail.com', NULL, NULL, '2021-02-16 08:12:47', '2021-02-16 08:12:47'),
('735caad7-fae1-42ed-9bf4-5a61ecfe4304', 'admin', '$2y$10$FIYmgO/BGjETZPKt1E/dkOQUtMFGO8W6vlePdQG2WO5HlZecRfur2', 'Junior Nandivanka', 'inallonebear@gmail.com', NULL, NULL, '2021-02-16 07:45:06', '2021-02-16 07:45:06'),
('d508b43d-3748-44cb-bdf4-a1edc5352302', 'asdasdasdasd', '$2y$10$7/qWb9yBdMgvBlK8HzdyQeJZKTWWG/xfDC2GhQINrL7dj5RCGPcbK', 'Akun Tester', 'test@test.com', '2021-02-16 07:47:18', '7eLERhNR8d0UiwZzbbUrnXxvD26fXnc0JcokjujG09mMwbbIgXPFDfB3Gyyc', '2021-02-16 07:46:49', '2021-02-16 11:02:28');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_artikel`
--

CREATE TABLE `tbl_artikel` (
  `id_artikel` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_ketentuan` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_artikel` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sampul_artikel` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isi_artikel` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_artikel`
--

INSERT INTO `tbl_artikel` (`id_artikel`, `id_ketentuan`, `nama_artikel`, `sampul_artikel`, `isi_artikel`, `slug`, `created_at`, `updated_at`) VALUES
('7da1012a-e794-47a6-a12c-9fb304f9648d', 'A2', 'Coba Coba artikel', 'public/images/artikel/7da1012a-e794-47a6-a12c-9fb304f9648d/KrwfscOLevimMtcXD7PpSiQ4WtbreTa5XwgRlm5b.jpg', '<p>adadadasdad<br><br><img style=\"width: 243.583px;\" data-filename=\"kk-dummy.jpeg\" src=\"/images/artikel/7da1012a-e794-47a6-a12c-9fb304f9648d/kk-dummy.jpeg\"><br></p>\n', 'coba-coba-artikel', '2021-02-19 17:24:47', '2021-02-19 17:24:47'),
('cf89d5a6-b06f-44fe-9957-af1cb432ead6', 'A1', 'asdasd', 'public/images/artikel/cf89d5a6-b06f-44fe-9957-af1cb432ead6/Mf51rN6u2ih5CekKberIauoeymKakXMGKiRVHCd1.png', '<p><br></p>', 'asdasd', '2021-02-19 18:01:14', '2021-02-19 18:01:14'),
('db75a25d-f98a-4007-b0d3-c8b3aa4abed3', 'A2', 'edit edit coba', 'public/images/artikel/db75a25d-f98a-4007-b0d3-c8b3aa4abed3/I1iVzUq6GiJ6ABqHM7CPdxENM9PT6aNyiLbU6GeC.jpg', '<p>asdasdasdasdadadasdasdasd<br></p>', 'edit-edit-coba', '2021-02-20 05:53:50', '2021-02-20 06:06:00');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_gallery`
--

CREATE TABLE `tbl_gallery` (
  `id_galeri` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_ketentuan` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `judul` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `source` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_gallery`
--

INSERT INTO `tbl_gallery` (`id_galeri`, `id_ketentuan`, `judul`, `source`, `created_at`, `updated_at`) VALUES
('41b8ca92-f7b6-4390-b82a-6ea9393f8767', 'G1', 'asd1q2123', '/images/galeri/41b8ca92-f7b6-4390-b82a-6ea9393f8767/DTOE_DT.jpeg', '2021-02-20 16:33:30', '2021-02-20 16:33:30'),
('80bb9311-b83e-46b2-99b9-69118fca9e17', 'G1', 'asdasdsad', '/images/galeri/80bb9311-b83e-46b2-99b9-69118fca9e17/1914578_101172313233485_4441831_n.jpeg', '2021-02-20 16:32:41', '2021-02-20 16:32:41'),
('8d8dc2be-4f87-41a0-8220-467f51bda397', 'G1', 'stop sign', '/images/galeri/8d8dc2be-4f87-41a0-8220-467f51bda397/logo.png', '2021-02-20 17:04:02', '2021-02-20 17:05:26');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_info_ayah`
--

CREATE TABLE `tbl_info_ayah` (
  `id_info_ayah` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_ayah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_info_ibu`
--

CREATE TABLE `tbl_info_ibu` (
  `id_info_ibu` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_ibu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_ketentuan`
--

CREATE TABLE `tbl_ketentuan` (
  `id_ketentuan` varchar(5) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_ketentuan`
--

INSERT INTO `tbl_ketentuan` (`id_ketentuan`, `keterangan`) VALUES
('A1', 'Artikel Sekolah'),
('A2', 'Artikel Guru'),
('A3', 'Artikel Siswa'),
('G1', 'Galeri Foto'),
('G2', 'Galeri Video');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_nama_awal`
--

CREATE TABLE `tbl_nama_awal` (
  `id_nama_awal` int(11) NOT NULL,
  `id_ahkir_nama` int(11) NOT NULL,
  `frist_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_nama_awal`
--

INSERT INTO `tbl_nama_awal` (`id_nama_awal`, `id_ahkir_nama`, `frist_name`) VALUES
(1, 2, 'Sho'),
(2, 1, 'Junior');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pegawai`
--

CREATE TABLE `tbl_pegawai` (
  `id_pegawai` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_by` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nip` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_pegawai` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat_pegawai` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pendidikan_terakhir` varchar(7) COLLATE utf8mb4_unicode_ci NOT NULL,
  `jabatan` varchar(20) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_pegawai`
--

INSERT INTO `tbl_pegawai` (`id_pegawai`, `created_by`, `nip`, `nama_pegawai`, `alamat_pegawai`, `pendidikan_terakhir`, `jabatan`, `created_at`, `updated_at`) VALUES
('35e47d8c-2217-41dd-b2ce-e5110a132869', 'd508b43d-3748-44cb-bdf4-a1edc5352302', '15634551', 'asdadadadsasda1', 'asdasdasds1', 'SMA', 'Kepala Sekolah', '2021-02-21 17:03:04', '2021-02-21 17:05:33'),
('sTyey7j43ishdTCK736hHVK8', 'd508b43d-3748-44cb-bdf4-a1edc5352302', '126691', 'Sally Gulgowski DDS', '809 Clementina Street Apt. 946\nPort Hattieville, GA 83298', 'Mr.', 'Dr.', '2021-02-21 14:36:16', '2021-02-21 14:36:16');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_ppdb`
--

CREATE TABLE `tbl_ppdb` (
  `id_pendaftaran` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_info_ayah` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_info_ibu` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_profile`
--

CREATE TABLE `tbl_profile` (
  `id_profile` char(36) COLLATE utf8mb4_unicode_ci NOT NULL,
  `isi_artikel` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `tbl_ahkir_nama`
--
ALTER TABLE `tbl_ahkir_nama`
  ADD PRIMARY KEY (`id_ahkir_nama`);

--
-- Indexes for table `tbl_akun`
--
ALTER TABLE `tbl_akun`
  ADD PRIMARY KEY (`id_akun`),
  ADD UNIQUE KEY `tbl_akun_username_unique` (`username`);

--
-- Indexes for table `tbl_artikel`
--
ALTER TABLE `tbl_artikel`
  ADD PRIMARY KEY (`id_artikel`),
  ADD KEY `tbl_artikel_id_ketentuan_index` (`id_ketentuan`);

--
-- Indexes for table `tbl_gallery`
--
ALTER TABLE `tbl_gallery`
  ADD PRIMARY KEY (`id_galeri`);

--
-- Indexes for table `tbl_info_ayah`
--
ALTER TABLE `tbl_info_ayah`
  ADD PRIMARY KEY (`id_info_ayah`);

--
-- Indexes for table `tbl_info_ibu`
--
ALTER TABLE `tbl_info_ibu`
  ADD PRIMARY KEY (`id_info_ibu`);

--
-- Indexes for table `tbl_ketentuan`
--
ALTER TABLE `tbl_ketentuan`
  ADD PRIMARY KEY (`id_ketentuan`);

--
-- Indexes for table `tbl_nama_awal`
--
ALTER TABLE `tbl_nama_awal`
  ADD PRIMARY KEY (`id_nama_awal`),
  ADD KEY `id_ahkir_nama` (`id_ahkir_nama`);

--
-- Indexes for table `tbl_pegawai`
--
ALTER TABLE `tbl_pegawai`
  ADD PRIMARY KEY (`id_pegawai`),
  ADD KEY `tbl_pegawai_created_by_index` (`created_by`);

--
-- Indexes for table `tbl_ppdb`
--
ALTER TABLE `tbl_ppdb`
  ADD PRIMARY KEY (`id_pendaftaran`),
  ADD KEY `tbl_ppdb_id_info_ayah_index` (`id_info_ayah`),
  ADD KEY `tbl_ppdb_id_info_ibu_index` (`id_info_ibu`);

--
-- Indexes for table `tbl_profile`
--
ALTER TABLE `tbl_profile`
  ADD PRIMARY KEY (`id_profile`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tbl_ahkir_nama`
--
ALTER TABLE `tbl_ahkir_nama`
  MODIFY `id_ahkir_nama` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_nama_awal`
--
ALTER TABLE `tbl_nama_awal`
  MODIFY `id_nama_awal` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
