-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 12, 2017 at 08:46 AM
-- Server version: 10.1.8-MariaDB
-- PHP Version: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_simalin`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(110) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_jenis` int(11) NOT NULL,
  `nip` varchar(110) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(110) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(110) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `nama`, `id_jenis`, `nip`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Nur Raga', 1, '', 'raga356@yahoo.co.id', '$2y$10$Qoou5yTXEcszaHdrXkacCePch/EKUe1lX7DYv5RmWqDWBF1VDHu36', NULL, '2017-10-11 03:05:32', '2017-10-11 03:05:32'),
(2, 'Romi Ramadhani', 2, '', 'romiramadhani@gmail.com', '$2y$10$nZ3BKhu8JzOImnGCE2XRxeJUtWk0gJHu4GrM8bOwUl9aYHnkzSxym', NULL, '2017-10-11 03:05:32', '2017-10-11 03:05:32'),
(3, 'Ryan Alva Sandy', 2, '', 'ryanalvasandy@gmail.com', '$2y$10$28XZlX/mpbfumLVV5h5l8OHoQ.FPLUyjUk4boJUgp.2nZoQmNG/Lu', NULL, '2017-10-11 03:05:32', '2017-10-11 03:05:32'),
(4, 'Andres Boni Fakio', 2, '', 'andresbonifakio@gmail.com', '$2y$10$YMl1EZ1eO8rKIm4jgBH7reOSIOSda9jPVpqvIOYJPNcKuWTcYoeeC', NULL, '2017-10-11 03:05:32', '2017-10-11 03:05:32');

-- --------------------------------------------------------

--
-- Table structure for table `data_aplikasi`
--

CREATE TABLE `data_aplikasi` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama_aplikasi` varchar(110) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_pengembang` varchar(110) COLLATE utf8mb4_unicode_ci NOT NULL,
  `kontak_pengembang` varchar(110) COLLATE utf8mb4_unicode_ci NOT NULL,
  `deskripsi_aplikasi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `data_aplikasi`
--

INSERT INTO `data_aplikasi` (`id`, `nama_aplikasi`, `nama_pengembang`, `kontak_pengembang`, `deskripsi_aplikasi`, `created_at`, `updated_at`) VALUES
(1, 'SIWARTA', 'DISKOMINFO', '+6282284119014', 'Aplikasi SIWARTA', '2017-10-11 03:05:33', '2017-10-11 03:05:33'),
(2, 'EKLIPING', 'DISKOMINFO', '+628566334206', 'Aplikasi DISKOMINFO', '2017-10-11 03:05:34', '2017-10-11 03:05:34'),
(3, 'SIKOPAY', 'DISKOMINFO', '+628566334206', 'Aplikasi DISKOMINFO', '2017-10-11 03:05:34', '2017-10-11 03:05:34'),
(4, 'SICANTIK', 'Kementrian KOMINFO', '+628566334206', 'Aplikasi Cerdas Layanan Perizinan Terpadu untuk Publik', '2017-10-11 03:05:34', '2017-10-11 03:05:34'),
(5, 'SIPPD', 'PT Usadi Sistemindo Intermetika', '+628566334206', 'Sistem Informasi perencanaan pembangunan daerah', '2017-10-11 03:05:34', '2017-10-11 03:05:34'),
(6, 'SIPKD', 'PT Usadi Sistemindo Intermetika', '+628566334206', 'Sistem Informasi Keuangan Daerah', '2017-10-11 03:05:34', '2017-10-11 03:05:34');

-- --------------------------------------------------------

--
-- Table structure for table `data_asal`
--

CREATE TABLE `data_asal` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama_asal` varchar(110) COLLATE utf8mb4_unicode_ci NOT NULL,
  `singkat` varchar(110) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(110) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `data_asal`
--

INSERT INTO `data_asal` (`id`, `nama_asal`, `singkat`, `alamat`, `created_at`, `updated_at`) VALUES
(1, 'Masyarakat', 'Masyarakat', 'Payakumbuh', '2017-10-11 03:05:32', '2017-10-11 03:05:32'),
(2, 'Sekretariat Daerah Bagian Pemerintahan', 'Sekretariat Daerah Bagian Pemerintahan', 'Payakumbuh', '2017-10-11 03:05:32', '2017-10-11 03:05:32'),
(3, 'Sekretariat Daerah Bagian Kesejahteraan Rakyat', 'Sekretariat Daerah Bagian Kesejahteraan Rakyat', 'Payakumbuh', '2017-10-11 03:05:32', '2017-10-11 03:05:32'),
(4, 'Sekretariat Daerah Bagian Hukum', 'Sekretariat Daerah Bagian Hukum', 'Payakumbuh', '2017-10-11 03:05:32', '2017-10-11 03:05:32'),
(5, 'Sekretariat Daerah Bagian Perekonomian', 'Sekretariat Daerah Bagian Perekonomian', 'Payakumbuh', '2017-10-11 03:05:32', '2017-10-11 03:05:32'),
(6, 'Sekretariat Daerah Bagian Pengendalian Pembangunan', 'Sekretariat Daerah Bagian Pengendalian Pembangunan', 'Payakumbuh', '2017-10-11 03:05:32', '2017-10-11 03:05:32'),
(7, 'Sekretariat Daerah Bagian Perencanaan dan Anggaran', 'Sekretariat Daerah Bagian Perencanaan dan Anggaran', 'Payakumbuh', '2017-10-11 03:05:32', '2017-10-11 03:05:32'),
(8, 'Sekretariat Daerah Bagian Organisasi', 'Sekretariat Daerah Bagian Organisasi', 'Payakumbuh', '2017-10-11 03:05:32', '2017-10-11 03:05:32'),
(9, 'Sekretariat Daerah Bagian Umum', 'Sekretariat Daerah Bagian Umum', 'Payakumbuh', '2017-10-11 03:05:32', '2017-10-11 03:05:32'),
(10, 'Sekretariat Daerah Bagian Protokoler', 'Sekretariat Daerah Bagian Protokoler', 'Payakumbuh', '2017-10-11 03:05:32', '2017-10-11 03:05:32'),
(11, 'Sekretariat DPRD', 'Sekretariat DPRD', 'Payakumbuh', '2017-10-11 03:05:32', '2017-10-11 03:05:32'),
(12, 'Inspektorat', 'Inspektorat', 'Payakumbuh', '2017-10-11 03:05:32', '2017-10-11 03:05:32'),
(13, 'Dinas Pendidikan', 'Dinas Pendidikan', 'Payakumbuh', '2017-10-11 03:05:32', '2017-10-11 03:05:32'),
(14, 'Dinas Kesehatan', 'Dinas Kesehatan', 'Payakumbuh', '2017-10-11 03:05:32', '2017-10-11 03:05:32'),
(15, 'Dinas Pekerjaan Umum dan Penataan Ruang', 'Dinas Pekerjaan Umum dan Penataan Ruang', 'Payakumbuh', '2017-10-11 03:05:32', '2017-10-11 03:05:32'),
(16, 'Dinas Perumahan Rakyat dan Kawasan Pemukiman', 'Dinas Perumahan Rakyat dan Kawasan Pemukiman', 'Payakumbuh', '2017-10-11 03:05:33', '2017-10-11 03:05:33'),
(17, 'Satpol PP dan Pemadam Kebakaran', 'Satpol PP dan Pemadam Kebakaran', 'Payakumbuh', '2017-10-11 03:05:33', '2017-10-11 03:05:33'),
(18, 'Dinas Sosial', 'Dinas Sosial', 'Payakumbuh', '2017-10-11 03:05:33', '2017-10-11 03:05:33'),
(19, 'Dinas Tenaga Kerja dan Perindustrian', 'Dinas Tenaga Kerja dan Perindustrian', 'Payakumbuh', '2017-10-11 03:05:33', '2017-10-11 03:05:33'),
(20, 'Dinas Pemberdayaan Perempuan, Perlindungan Anak dan Pengendalian Penduduk, Keluarga Berencana', 'DP3 dan APPKB', 'Payakumbuh', '2017-10-11 03:05:33', '2017-10-11 03:05:33'),
(21, 'Dinas Ketahanan Pangan', 'Dinas Ketahanan Pangan', 'Payakumbuh', '2017-10-11 03:05:33', '2017-10-11 03:05:33'),
(22, 'Dinas Lingkungan Hidup', 'Dinas Lingkungan Hidup', 'Payakumbuh', '2017-10-11 03:05:33', '2017-10-11 03:05:33'),
(23, 'Dinas Kependudukan dan Pencatatan Sipil', 'Dinas Kependudukan dan Pencatatan Sipil', 'Payakumbuh', '2017-10-11 03:05:33', '2017-10-11 03:05:33'),
(24, 'Dinas Perhubungan', 'DISHUB', 'Payakumbuh', '2017-10-11 03:05:33', '2017-10-11 03:05:33'),
(25, 'Dinas Koperasi dan UKM', 'Dinas Koperasi dan UKM', 'Payakumbuh', '2017-10-11 03:05:33', '2017-10-11 03:05:33'),
(26, 'Dinas Penanaman Modal dan PTSP', 'DPMPTSP', 'Payakumbuh', '2017-10-11 03:05:33', '2017-10-11 03:05:33'),
(27, 'Dinas Pariwisata, Pemuda & Olah Raga', 'Dinas Pariwisata, Pemuda & Olah Raga', 'Payakumbuh', '2017-10-11 03:05:33', '2017-10-11 03:05:33'),
(28, 'Dinas Perpustakaan dan Kearsipan', 'Dinas Perpustakaan dan Kearsipan', 'Payakumbuh', '2017-10-11 03:05:33', '2017-10-11 03:05:33'),
(29, 'Dinas Pertanian', 'Dinas Pertanian', 'Payakumbuh', '2017-10-11 03:05:33', '2017-10-11 03:05:33'),
(30, 'Badan Keuangan Daerah', 'BKD', 'Payakumbuh', '2017-10-11 03:05:33', '2017-10-11 03:05:33'),
(31, 'Badan Kepegawaian dan Pengembangan SDM', 'BKPSDM', 'Payakumbuh', '2017-10-11 03:05:33', '2017-10-11 03:05:33'),
(32, 'BAPPEDA', 'BAPPEDA', 'Payakumbuh', '2017-10-11 03:05:33', '2017-10-11 03:05:33'),
(33, 'BPBD', 'BPBD', 'Payakumbuh', '2017-10-11 03:05:33', '2017-10-11 03:05:33'),
(34, 'KESBANGPOL', 'KESBANGPOL', 'Payakumbuh', '2017-10-11 03:05:33', '2017-10-11 03:05:33'),
(35, 'Kantor Camat Payakumbuh Barat', 'Kantor Camat Payakumbuh Barat', 'Payakumbuh', '2017-10-11 03:05:33', '2017-10-11 03:05:33'),
(36, 'Kantor Camat Payakumbuh Timur', 'Kantor Camat Payakumbuh Timur', 'Payakumbuh', '2017-10-11 03:05:33', '2017-10-11 03:05:33'),
(37, 'Kantor Camat Payakumbuh Utara', 'Kantor Camat Payakumbuh Utara', 'Payakumbuh', '2017-10-11 03:05:33', '2017-10-11 03:05:33'),
(38, 'Kantor Camat Payakumbuh Selatan', 'Kantor Camat Payakumbuh Selatan', 'Payakumbuh', '2017-10-11 03:05:33', '2017-10-11 03:05:33'),
(39, 'Kantor Camat Lamposi Tigo Nagori', 'Kantor Camat Lamposi Tigo Nagori', 'Payakumbuh', '2017-10-11 03:05:33', '2017-10-11 03:05:33'),
(40, 'Dinas Komunikasi dan Informatika', 'DISKOMINFO', 'Payakumbuh', '2017-10-11 03:05:33', '2017-10-11 03:05:33');

-- --------------------------------------------------------

--
-- Table structure for table `data_jaringan`
--

CREATE TABLE `data_jaringan` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama_jaringan` varchar(110) COLLATE utf8mb4_unicode_ci NOT NULL,
  `koordinat` varchar(110) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `data_jaringan`
--

INSERT INTO `data_jaringan` (`id`, `nama_jaringan`, `koordinat`, `created_at`, `updated_at`) VALUES
(1, 'SKPD', 'SKPD', '2017-10-11 03:05:34', '2017-10-11 03:05:34'),
(2, 'WiFi ID Jembatan Panasonic Dekat CCTV', '-0.225171.100.632368', '2017-10-11 03:05:34', '2017-10-11 03:05:34'),
(3, 'WiFi ID Taman Jembatan Ratapan Ibu', '-0.229448.100.636293', '2017-10-11 03:05:34', '2017-10-11 03:05:34'),
(4, 'WiFi ID Taman Rumah Dinas DPRD Kota Payakumbuh', '-0.207179.100.618624', '2017-10-11 03:05:34', '2017-10-11 03:05:34'),
(5, 'WiFi ID RSUD Adnan WD', '-0.223049.100.639168', '2017-10-11 03:05:34', '2017-10-11 03:05:34'),
(6, 'WiFi ID Jembatan Panasonic Dekat Pasar Buah', '-0.225516.100.632630', '2017-10-11 03:05:34', '2017-10-11 03:05:34'),
(7, 'WiFi ID Kantor Walikota Baru', '-0.222350.100.630989', '2017-10-11 03:05:34', '2017-10-11 03:05:34'),
(8, 'WiFi ID Depan Kantor POS', '-0.224090.100.632440', '2017-10-11 03:05:34', '2017-10-11 03:05:34'),
(9, 'WiFi ID Kolam Renang Ngalau Indah', '-0.256194.100.607145', '2017-10-11 03:05:34', '2017-10-11 03:05:34'),
(10, 'WiFi ID Kantor Walikota Lama', '-0.259709.100.608802', '2017-10-11 03:05:34', '2017-10-11 03:05:34'),
(11, 'WiFi ID SMPN 1 / Depan Mesjid Muhammdadiyah', '-0.223986.100.633193', '2017-10-11 03:05:34', '2017-10-11 03:05:34');

-- --------------------------------------------------------

--
-- Table structure for table `data_jenis_admin`
--

CREATE TABLE `data_jenis_admin` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama_jenis` varchar(110) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `data_jenis_admin`
--

INSERT INTO `data_jenis_admin` (`id`, `nama_jenis`, `keterangan`, `created_at`, `updated_at`) VALUES
(1, 'ADMINISTRATOR', 'Admin level Tertinggi', '2017-10-11 03:05:34', '2017-10-11 03:05:34'),
(2, 'Tim Teknis', 'Admin yang bertanggungjawab untuk memperbaiki setiap gangguan', '2017-10-11 03:05:34', '2017-10-11 03:05:34'),
(3, 'Koordinator Lapangan', 'Admin yang bertugas mengkoordinir Tim Teknis', '2017-10-11 03:05:34', '2017-10-11 03:05:34'),
(4, 'Kasi Infrastruktur', 'Admin Kepala Seksi Infrastruktur', '2017-10-11 03:05:35', '2017-10-11 03:05:35'),
(5, 'Kasi Aplikasi', 'Admin Kepala Seksi Pemberdayaan Informatika', '2017-10-11 03:05:35', '2017-10-11 03:05:35'),
(6, 'Kabid', 'Admin Kepala Bidang', '2017-10-11 03:05:35', '2017-10-11 03:05:35');

-- --------------------------------------------------------

--
-- Table structure for table `data_jenis_layanan`
--

CREATE TABLE `data_jenis_layanan` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama_jenis` varchar(110) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `data_jenis_layanan`
--

INSERT INTO `data_jenis_layanan` (`id`, `nama_jenis`, `created_at`, `updated_at`) VALUES
(1, 'Jaringan', '2017-10-11 03:05:35', '2017-10-11 03:05:35'),
(2, 'Aplikasi', '2017-10-11 03:05:35', '2017-10-11 03:05:35');

-- --------------------------------------------------------

--
-- Table structure for table `data_kategori`
--

CREATE TABLE `data_kategori` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama_kategori` varchar(110) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `data_kategori`
--

INSERT INTO `data_kategori` (`id`, `nama_kategori`, `created_at`, `updated_at`) VALUES
(1, 'Kerusakan Perangkat', '2017-10-11 03:05:35', '2017-10-11 03:05:35'),
(2, 'Gangguan akses Internet', '2017-10-11 03:05:35', '2017-10-11 03:05:35'),
(3, 'Tidak ada Jaringan', '2017-10-11 03:05:35', '2017-10-11 03:05:35'),
(4, 'Kehilangan Perangkat', '2017-10-11 03:05:35', '2017-10-11 03:05:35'),
(5, 'Force Majure(Bencana Alam)', '2017-10-11 03:05:35', '2017-10-11 03:05:35'),
(6, 'Aplikasi crash', '2017-10-11 03:05:35', '2017-10-11 03:05:35'),
(7, 'Data tidak tersimpan', '2017-10-11 03:05:35', '2017-10-11 03:05:35'),
(8, 'Data tidak tampil', '2017-10-11 03:05:35', '2017-10-11 03:05:35');

-- --------------------------------------------------------

--
-- Table structure for table `data_media`
--

CREATE TABLE `data_media` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama_media` varchar(110) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `data_media`
--

INSERT INTO `data_media` (`id`, `nama_media`, `keterangan`, `created_at`, `updated_at`) VALUES
(1, 'SiMALIN', 'Sistem Informasi Manajemen Laporan Gangguan Infrastruktur', '2017-10-11 03:05:35', '2017-10-11 03:05:35'),
(2, 'Telpon', 'Laporan yang disampaikan melalui Media Telepon', '2017-10-11 03:05:35', '2017-10-11 03:05:35'),
(3, 'SMS', 'Laporan yang disampaikan melalui Media SMS', '2017-10-11 03:05:35', '2017-10-11 03:05:35'),
(4, 'Laporan Langsung', 'Laporan yang disampaikan secara langsung ke kantor DISKOMINFO Kota Payakumbuh', '2017-10-11 03:05:35', '2017-10-11 03:05:35'),
(5, 'Email', 'Laporan yang disampaikan melalui E-Mail', '2017-10-11 03:05:35', '2017-10-11 03:05:35'),
(6, 'Media Sosial', 'Laporan yang disampaikan melalui Media Social', '2017-10-11 03:05:35', '2017-10-11 03:05:35'),
(7, 'Surat', 'Laporan yang disampaikan melalui Surat', '2017-10-11 03:05:35', '2017-10-11 03:05:35');

-- --------------------------------------------------------

--
-- Table structure for table `data_status`
--

CREATE TABLE `data_status` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama_status` varchar(110) COLLATE utf8mb4_unicode_ci NOT NULL,
  `keterangan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `data_status`
--

INSERT INTO `data_status` (`id`, `nama_status`, `keterangan`, `created_at`, `updated_at`) VALUES
(1, 'Laporan baru', 'laporan baru yang belum diproses', '2017-10-11 03:05:35', '2017-10-11 03:05:35'),
(2, 'Penanganan Online', 'Laporan gangguan yang akan/sedang ditindaklanjuti secara Online', '2017-10-11 03:05:35', '2017-10-11 03:05:35'),
(3, 'Penanganan Offline', 'Laporan gangguan yang akan/sedang ditindaklanjuti secara Offline/tindakan langsung ke lapangan', '2017-10-11 03:05:35', '2017-10-11 03:05:35'),
(4, 'Penanganan Selesai', 'Laporan gangguan yang telah selesai ditindaklanjuti', '2017-10-11 03:05:35', '2017-10-11 03:05:35');

-- --------------------------------------------------------

--
-- Table structure for table `gangguan`
--

CREATE TABLE `gangguan` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_jenis` int(11) NOT NULL,
  `id_kategori` int(11) NOT NULL,
  `id_jar_atau_app` int(11) NOT NULL,
  `id_media` int(11) NOT NULL,
  `detail_info` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_status` int(11) NOT NULL,
  `no_track` varchar(110) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `gangguan`
--

INSERT INTO `gangguan` (`id`, `id_jenis`, `id_kategori`, `id_jar_atau_app`, `id_media`, `detail_info`, `id_user`, `id_status`, `no_track`, `created_at`, `updated_at`) VALUES
(1, 1, 2, 6, 1, 'Gangguan akses internet', 1, 4, '11006', '2017-10-11 03:06:58', '2017-10-11 03:10:02'),
(2, 1, 2, 6, 1, 'Gangguan akses internet', 1, 3, '21006', '2017-10-11 03:06:59', '2017-10-11 03:10:29');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(110) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(52, '2014_10_12_000000_create_users_table', 1),
(53, '2014_10_12_100000_create_password_resets_table', 1),
(54, '2017_09_19_124650_create_umpan_balik_table', 1),
(55, '2017_09_19_125728_create_data_asal_table', 1),
(56, '2017_09_19_130015_create_gangguan_table', 1),
(57, '2017_09_19_130631_create_data_jenis_layanan_table', 1),
(58, '2017_09_19_130653_create_petugas_gangguan_table', 1),
(59, '2017_09_19_130713_create_status_gangguan_table', 1),
(60, '2017_09_19_130731_create_perbaikan_gangguan_table', 1),
(61, '2017_09_19_130828_create_data_kategori_table', 1),
(62, '2017_09_19_130847_create_admin_table', 1),
(63, '2017_09_19_130910_create_data_status_table', 1),
(64, '2017_09_19_130927_create_data_jaringan_table', 1),
(65, '2017_09_19_130944_create_data_jenis_admin_table', 1),
(66, '2017_09_19_131002_create_data_aplikasi_table', 1),
(67, '2017_09_19_131017_create_data_media_table', 1),
(68, '2017_10_01_005805_create_pemakai_aplikasi_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(110) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(110) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pemakai_aplikasi`
--

CREATE TABLE `pemakai_aplikasi` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_aplikasi` int(11) NOT NULL,
  `id_pemakai` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pemakai_aplikasi`
--

INSERT INTO `pemakai_aplikasi` (`id`, `id_aplikasi`, `id_pemakai`, `created_at`, `updated_at`) VALUES
(1, 1, 40, NULL, NULL),
(2, 2, 40, NULL, NULL),
(3, 3, 40, NULL, NULL),
(4, 4, 32, NULL, NULL),
(5, 5, 32, NULL, NULL),
(6, 6, 32, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `penanganan_gangguan`
--

CREATE TABLE `penanganan_gangguan` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_gangguan` int(11) NOT NULL,
  `id_status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `penanganan_gangguan`
--

INSERT INTO `penanganan_gangguan` (`id`, `id_gangguan`, `id_status`, `created_at`, `updated_at`) VALUES
(1, 1, 1, '2017-10-11 03:06:58', '2017-10-11 03:06:58'),
(2, 2, 1, '2017-10-11 03:06:59', '2017-10-11 03:06:59'),
(3, 1, 2, '2017-10-11 03:09:35', '2017-10-11 03:09:35'),
(4, 2, 3, '2017-10-11 03:10:29', '2017-10-11 03:10:29');

-- --------------------------------------------------------

--
-- Table structure for table `perbaikan_gangguan`
--

CREATE TABLE `perbaikan_gangguan` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_gangguan` int(11) NOT NULL,
  `hasil` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `perbaikan_gangguan`
--

INSERT INTO `perbaikan_gangguan` (`id`, `id_gangguan`, `hasil`, `created_at`, `updated_at`) VALUES
(1, 1, 'Hasil Perbaikan', '2017-10-11 03:10:02', '2017-10-11 03:10:02');

-- --------------------------------------------------------

--
-- Table structure for table `petugas_gangguan`
--

CREATE TABLE `petugas_gangguan` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_gangguan` int(11) NOT NULL,
  `id_admin` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `petugas_gangguan`
--

INSERT INTO `petugas_gangguan` (`id`, `id_gangguan`, `id_admin`, `created_at`, `updated_at`) VALUES
(1, 1, 2, '2017-10-11 03:09:35', '2017-10-11 03:09:35'),
(2, 1, 3, '2017-10-11 03:09:35', '2017-10-11 03:09:35'),
(3, 2, 2, '2017-10-11 03:10:29', '2017-10-11 03:10:29'),
(4, 2, 3, '2017-10-11 03:10:29', '2017-10-11 03:10:29'),
(5, 2, 4, '2017-10-11 03:10:29', '2017-10-11 03:10:29');

-- --------------------------------------------------------

--
-- Table structure for table `umpan_balik`
--

CREATE TABLE `umpan_balik` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_user` int(11) NOT NULL,
  `umpan_balik` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `nik` varchar(110) COLLATE utf8mb4_unicode_ci NOT NULL,
  `id_asal` int(11) NOT NULL,
  `nama` varchar(110) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(110) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(110) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(110) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pelapor.png',
  `password` varchar(110) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nik`, `id_asal`, `nama`, `alamat`, `email`, `foto`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, '1301092005130105', 40, 'Nur Raga', 'Payakumbuh', 'nurraga.11@gmail.com', 'pelapor.png', '$2y$10$8WlBYVYlho7KvOZIyvwjYeyyRJ3IUS.7nTqPm7s89fQXv7l45SVMe', 'HRq28bgwtCg4BjOgaL8Lom6ZtvfPC4w4KK2sXjCpOovfIB3fL5hWMXnu0FbU', '2017-10-11 03:06:26', '2017-10-11 03:06:26');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admin_email_unique` (`email`);

--
-- Indexes for table `data_aplikasi`
--
ALTER TABLE `data_aplikasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_asal`
--
ALTER TABLE `data_asal`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_jaringan`
--
ALTER TABLE `data_jaringan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_jenis_admin`
--
ALTER TABLE `data_jenis_admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_jenis_layanan`
--
ALTER TABLE `data_jenis_layanan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_kategori`
--
ALTER TABLE `data_kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_media`
--
ALTER TABLE `data_media`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `data_status`
--
ALTER TABLE `data_status`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gangguan`
--
ALTER TABLE `gangguan`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `pemakai_aplikasi`
--
ALTER TABLE `pemakai_aplikasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `penanganan_gangguan`
--
ALTER TABLE `penanganan_gangguan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `perbaikan_gangguan`
--
ALTER TABLE `perbaikan_gangguan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `petugas_gangguan`
--
ALTER TABLE `petugas_gangguan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `umpan_balik`
--
ALTER TABLE `umpan_balik`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `data_aplikasi`
--
ALTER TABLE `data_aplikasi`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `data_asal`
--
ALTER TABLE `data_asal`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;
--
-- AUTO_INCREMENT for table `data_jaringan`
--
ALTER TABLE `data_jaringan`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `data_jenis_admin`
--
ALTER TABLE `data_jenis_admin`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `data_jenis_layanan`
--
ALTER TABLE `data_jenis_layanan`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `data_kategori`
--
ALTER TABLE `data_kategori`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `data_media`
--
ALTER TABLE `data_media`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `data_status`
--
ALTER TABLE `data_status`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `gangguan`
--
ALTER TABLE `gangguan`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;
--
-- AUTO_INCREMENT for table `pemakai_aplikasi`
--
ALTER TABLE `pemakai_aplikasi`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `penanganan_gangguan`
--
ALTER TABLE `penanganan_gangguan`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `perbaikan_gangguan`
--
ALTER TABLE `perbaikan_gangguan`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `petugas_gangguan`
--
ALTER TABLE `petugas_gangguan`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `umpan_balik`
--
ALTER TABLE `umpan_balik`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
