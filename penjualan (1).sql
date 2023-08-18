-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 16, 2022 at 05:33 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `penjualan`
--

-- --------------------------------------------------------

--
-- Table structure for table `barangs`
--

CREATE TABLE `barangs` (
  `id` int(11) NOT NULL,
  `gambar` varchar(255) DEFAULT NULL,
  `nama` varchar(255) DEFAULT NULL,
  `deskripsi` varchar(255) DEFAULT NULL,
  `stok` int(11) DEFAULT NULL,
  `satuan` varchar(50) DEFAULT NULL,
  `harga_beli` int(11) DEFAULT NULL,
  `harga` int(11) DEFAULT NULL,
  `harga_diskon` int(11) DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `id_kategori` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `barangs`
--

INSERT INTO `barangs` (`id`, `gambar`, `nama`, `deskripsi`, `stok`, `satuan`, `harga_beli`, `harga`, `harga_diskon`, `status`, `id_kategori`, `created_at`, `updated_at`, `deleted_at`) VALUES
(56, '80a53d1c-8cc6-4f4d-91df-1b8ddaa73cf5.jpg', 'Chuck 70', 'original 100%', 6, 'picis', 350000, 400000, 380000, '1', 3, '2022-07-09 05:48:15', '2022-08-16 05:22:51', NULL),
(57, '7f4b4133-6692-49ea-a724-f64f29011d2d.jpg', 'Chuck 70 Taylor', 'original 100%', 3, 'picis', 250000, 300000, 280000, '0', 3, '2022-07-09 07:05:25', '2022-08-16 05:37:02', NULL),
(58, 'ad036e6f-5f52-479b-a7d7-574e33f857c1.jpg', 'sk8 Hi New Mailmo', 'original 100%', 8, 'picis', 250000, 350000, 325000, '1', 1, '2022-07-09 07:07:12', '2022-08-16 05:37:15', NULL),
(59, '94fb0615-a693-46f5-8602-0427b38e7657.jpg', 'sk8 Hi New chackerboard', 'original 100%', 5, 'picis', 250000, 350000, 325000, '0', 1, '2022-07-09 07:08:27', '2022-08-16 05:21:45', NULL),
(60, '4fda9558-f84f-4c61-bd96-20ccf359fa01.jpg', 'Chuck 70 (Size 41)', 'original 100%', 6, 'picis', 450000, 550000, 500000, '0', 3, '2022-07-15 04:18:06', '2022-08-16 05:51:47', NULL),
(61, '25ef7840-cc80-4188-a4a9-7d6b3ccdc78c.jpg', 'Air Force 1 th17', 'original 100%', 7, 'picis', 225000, 350000, 325000, '1', 2, '2022-08-16 05:24:38', '2022-08-16 05:39:33', NULL),
(62, '53b79e14-a45e-4430-a90a-edf1ed1e6249.jpg', 'Air Force 1 New th19', 'original 100%', 8, 'picis', 225000, 350000, 325000, '0', 2, '2022-08-16 05:26:21', '2022-08-16 05:26:21', NULL),
(63, '25da4158-b682-4657-9150-591840454097.jpg', 'Chuck 70 Taylor White', 'original 100%', 7, 'picis', 225000, 300000, 275000, '0', 3, '2022-08-16 05:27:57', '2022-08-16 07:28:02', NULL),
(64, '11a93a04-c9a2-47b4-88ad-254a506c84b1.jpg', 'Authentic Checkerboar', 'original 100%', 9, 'picis', 225000, 300000, 275000, '0', 1, '2022-08-16 05:29:28', '2022-08-16 05:29:28', NULL),
(65, '30f604d0-8c95-40b5-8c2c-c02dde959463.jpg', 'sk8 Hi New white', 'original 100%', 6, 'picis', 235000, 350000, 325000, '0', 1, '2022-08-16 05:30:37', '2022-08-16 05:30:37', NULL),
(66, 'c21e9ed1-4894-41d6-b0a2-96110e5e2946.jpg', 'Air Force 1 Red th17', 'original 100%', 6, 'picis', 235000, 350000, 325000, '0', 2, '2022-08-16 05:32:01', '2022-08-16 05:32:01', NULL),
(67, '94a5f565-35f3-45de-973e-191d2d1ca937.jpg', 'Air Force 1 th17', 'original 100%', 8, 'picis', 235000, 350000, 325000, '0', 2, '2022-08-16 05:32:54', '2022-08-16 05:32:54', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `beban`
--

CREATE TABLE `beban` (
  `id` int(11) NOT NULL,
  `keterangan` varchar(50) DEFAULT NULL,
  `harga` int(11) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `beban`
--

INSERT INTO `beban` (`id`, `keterangan`, `harga`, `tanggal`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Pembayaran Air', 53000, '2022-08-12', '2022-08-11 09:22:27', '2022-08-11 09:22:27', NULL),
(2, 'Gaji Karyawan', 4000000, '2022-08-12', '2022-08-11 09:23:48', '2022-08-11 09:23:48', NULL),
(3, 'Pembayaran Listrik', 65000, '2022-08-12', '2022-08-11 09:24:10', '2022-08-11 09:24:10', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cities`
--

CREATE TABLE `cities` (
  `id` int(11) NOT NULL,
  `province_id` int(11) DEFAULT NULL,
  `city_name` varchar(50) DEFAULT NULL,
  `type` varchar(50) DEFAULT NULL,
  `postal_code` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cities`
--

INSERT INTO `cities` (`id`, `province_id`, `city_name`, `type`, `postal_code`, `created_at`, `updated_at`, `deleted_at`) VALUES
(19, 15, 'Balikpapan', 'Kota', 76111, '2022-07-31 11:08:44', '2022-07-31 11:08:44', NULL),
(35, 13, 'Banjarbaru', 'Kota', 70712, '2022-07-31 11:08:44', '2022-07-31 11:08:44', NULL),
(36, 13, 'Banjarmasin', 'Kota', 70117, '2022-07-31 11:08:44', '2022-07-31 11:08:44', NULL),
(43, 13, 'Barito Kuala', 'Kabupaten', 70511, '2022-07-31 11:08:44', '2022-07-31 11:08:44', NULL),
(44, 14, 'Barito Selatan', 'Kabupaten', 73711, '2022-07-31 11:08:44', '2022-07-31 11:08:44', NULL),
(45, 14, 'Barito Timur', 'Kabupaten', 73671, '2022-07-31 11:08:44', '2022-07-31 11:08:44', NULL),
(46, 14, 'Barito Utara', 'Kabupaten', 73881, '2022-07-31 11:08:44', '2022-07-31 11:08:44', NULL),
(61, 12, 'Bengkayang', 'Kabupaten', 79213, '2022-07-31 11:08:44', '2022-07-31 11:08:44', NULL),
(66, 15, 'Berau', 'Kabupaten', 77311, '2022-07-31 11:08:44', '2022-07-31 11:08:44', NULL),
(89, 15, 'Bontang', 'Kota', 75313, '2022-07-31 11:08:44', '2022-07-31 11:08:44', NULL),
(96, 16, 'Bulungan (Bulongan)', 'Kabupaten', 77211, '2022-07-31 11:08:44', '2022-07-31 11:08:44', NULL),
(136, 14, 'Gunung Mas', 'Kabupaten', 74511, '2022-07-31 11:08:44', '2022-07-31 11:08:44', NULL),
(143, 13, 'Hulu Sungai Selatan', 'Kabupaten', 71212, '2022-07-31 11:08:44', '2022-07-31 11:08:44', NULL),
(144, 13, 'Hulu Sungai Tengah', 'Kabupaten', 71313, '2022-07-31 11:08:44', '2022-07-31 11:08:44', NULL),
(145, 13, 'Hulu Sungai Utara', 'Kabupaten', 71419, '2022-07-31 11:08:44', '2022-07-31 11:08:44', NULL),
(167, 14, 'Kapuas', 'Kabupaten', 73583, '2022-07-31 11:08:44', '2022-07-31 11:08:44', NULL),
(168, 12, 'Kapuas Hulu', 'Kabupaten', 78719, '2022-07-31 11:08:44', '2022-07-31 11:08:44', NULL),
(174, 14, 'Katingan', 'Kabupaten', 74411, '2022-07-31 11:08:45', '2022-07-31 11:08:45', NULL),
(176, 12, 'Kayong Utara', 'Kabupaten', 78852, '2022-07-31 11:08:45', '2022-07-31 11:08:45', NULL),
(195, 12, 'Ketapang', 'Kabupaten', 78874, '2022-07-31 11:08:45', '2022-07-31 11:08:45', NULL),
(203, 13, 'Kotabaru', 'Kabupaten', 72119, '2022-07-31 11:08:45', '2022-07-31 11:08:45', NULL),
(205, 14, 'Kotawaringin Barat', 'Kabupaten', 74119, '2022-07-31 11:08:45', '2022-07-31 11:08:45', NULL),
(206, 14, 'Kotawaringin Timur', 'Kabupaten', 74364, '2022-07-31 11:08:45', '2022-07-31 11:08:45', NULL),
(208, 12, 'Kubu Raya', 'Kabupaten', 78311, '2022-07-31 11:08:45', '2022-07-31 11:08:45', NULL),
(214, 15, 'Kutai Barat', 'Kabupaten', 75711, '2022-07-31 11:08:45', '2022-07-31 11:08:45', NULL),
(215, 15, 'Kutai Kartanegara', 'Kabupaten', 75511, '2022-07-31 11:08:45', '2022-07-31 11:08:45', NULL),
(216, 15, 'Kutai Timur', 'Kabupaten', 75611, '2022-07-31 11:08:45', '2022-07-31 11:08:45', NULL),
(221, 14, 'Lamandau', 'Kabupaten', 74611, '2022-07-31 11:08:45', '2022-07-31 11:08:45', NULL),
(228, 12, 'Landak', 'Kabupaten', 78319, '2022-07-31 11:08:45', '2022-07-31 11:08:45', NULL),
(257, 16, 'Malinau', 'Kabupaten', 77511, '2022-07-31 11:08:45', '2022-07-31 11:08:45', NULL),
(279, 12, 'Melawi', 'Kabupaten', 78619, '2022-07-31 11:08:45', '2022-07-31 11:08:45', NULL),
(296, 14, 'Murung Raya', 'Kabupaten', 73911, '2022-07-31 11:08:45', '2022-07-31 11:08:45', NULL),
(311, 16, 'Nunukan', 'Kabupaten', 77421, '2022-07-31 11:08:45', '2022-07-31 11:08:45', NULL),
(326, 14, 'Palangka Raya', 'Kota', 73112, '2022-07-31 11:08:45', '2022-07-31 11:08:45', NULL),
(341, 15, 'Paser', 'Kabupaten', 76211, '2022-07-31 11:08:45', '2022-07-31 11:08:45', NULL),
(354, 15, 'Penajam Paser Utara', 'Kabupaten', 76311, '2022-07-31 11:08:45', '2022-07-31 11:08:45', NULL),
(365, 12, 'Pontianak', 'Kota', 78112, '2022-07-31 11:08:45', '2022-07-31 11:08:45', NULL),
(371, 14, 'Pulang Pisau', 'Kabupaten', 74811, '2022-07-31 11:08:45', '2022-07-31 11:08:45', NULL),
(387, 15, 'Samarinda', 'Kota', 75133, '2022-07-31 11:08:45', '2022-07-31 11:08:45', NULL),
(388, 12, 'Sambas', 'Kabupaten', 79453, '2022-07-31 11:08:45', '2022-07-31 11:08:45', NULL),
(391, 12, 'Sanggau', 'Kabupaten', 78557, '2022-07-31 11:08:45', '2022-07-31 11:08:45', NULL),
(395, 12, 'Sekadau', 'Kabupaten', 79583, '2022-07-31 11:08:45', '2022-07-31 11:08:45', NULL),
(405, 14, 'Seruyan', 'Kabupaten', 74211, '2022-07-31 11:08:45', '2022-07-31 11:08:45', NULL),
(415, 12, 'Singkawang', 'Kota', 79117, '2022-07-31 11:08:45', '2022-07-31 11:08:45', NULL),
(417, 12, 'Sintang', 'Kabupaten', 78619, '2022-07-31 11:08:45', '2022-07-31 11:08:45', NULL),
(432, 14, 'Sukamara', 'Kabupaten', 74712, '2022-07-31 11:08:45', '2022-07-31 11:08:45', NULL),
(446, 13, 'Tabalong', 'Kabupaten', 71513, '2022-07-31 11:08:45', '2022-07-31 11:08:45', NULL),
(450, 16, 'Tana Tidung', 'Kabupaten', 77611, '2022-07-31 11:08:45', '2022-07-31 11:08:45', NULL),
(452, 13, 'Tanah Bumbu', 'Kabupaten', 72211, '2022-07-31 11:08:45', '2022-07-31 11:08:45', NULL),
(454, 13, 'Tanah Laut', 'Kabupaten', 70811, '2022-07-31 11:08:45', '2022-07-31 11:08:45', NULL),
(466, 13, 'Tapin', 'Kabupaten', 71119, '2022-07-31 11:08:45', '2022-07-31 11:08:45', NULL),
(467, 16, 'Tarakan', 'Kota', 77114, '2022-07-31 11:08:45', '2022-07-31 11:08:45', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `couriers`
--

CREATE TABLE `couriers` (
  `id` int(11) NOT NULL,
  `code` varchar(50) DEFAULT NULL,
  `title` varchar(50) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `couriers`
--

INSERT INTO `couriers` (`id`, `code`, `title`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'jne', 'JNE', NULL, NULL, NULL),
(2, 'pos', 'POS', NULL, NULL, NULL),
(3, 'tiki', 'TIKI', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id` int(11) NOT NULL,
  `name` varchar(45) DEFAULT NULL,
  `email` varchar(45) DEFAULT NULL,
  `nohp` varchar(255) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id`, `name`, `email`, `nohp`, `alamat`, `password`, `created_at`, `updated_at`, `deleted_at`) VALUES
(4, 'Bayu Sai\'in Basran', 'bayusaiinbasran14@gmail.com', '0895409330506', 'Jalan. Karya Baru Rt.09 No.42', '$2y$10$vVsNgKcWDJJOKUAmX4f3reJ4jW.qPACM.qJ.wlVdeVwsF1c.j0I3y', '2022-07-11 09:05:10', '2022-07-11 11:13:05', NULL),
(8, 'fauzul adzhim', 'uzuladzhim31@gmail.com', '081256322707', 'jln.rapak indah dekat kosan riian', '$2y$10$bBOmgaErzTkh9ebNlk/0sOB8JixBIBBdeInpK59dx1vWFW3vyglx2', '2022-07-11 14:49:58', '2022-07-11 14:51:37', NULL),
(9, 'teguh suyitno', 'teguh@gmail.com', NULL, NULL, '$2y$10$Nzca4GTMTBt9dC6G36av2OggMsWWAT1fuOebtSqQx9EndUhZRjhjC', '2022-07-11 23:09:15', '2022-07-11 23:09:15', NULL),
(10, 'bayu saiin basran', 'bayusaiin00@gmail.com', '081256322707', 'jln karya baru 1 Rt.09 NO.42', '$2y$10$ienKvUUlxXJubwJAjLs9N.LBbMm40UJG/FbN54jO9UaJ/vDvPMewO', '2022-07-28 22:25:35', '2022-07-28 22:27:35', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `detail_pembelians`
--

CREATE TABLE `detail_pembelians` (
  `id` int(11) NOT NULL,
  `qty` int(11) DEFAULT NULL,
  `subtotal` int(11) DEFAULT NULL,
  `tanggal_beli` date DEFAULT NULL,
  `keterangan` varchar(255) DEFAULT NULL,
  `harga_beli` int(11) DEFAULT NULL,
  `qty_terjual` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `pembelians_id` int(11) NOT NULL,
  `barangs_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `detail_pembelians`
--

INSERT INTO `detail_pembelians` (`id`, `qty`, `subtotal`, `tanggal_beli`, `keterangan`, `harga_beli`, `qty_terjual`, `created_at`, `updated_at`, `deleted_at`, `pembelians_id`, `barangs_id`) VALUES
(66, 3, 1050000, NULL, NULL, 350000, NULL, '2022-07-09 06:17:56', '2022-07-09 06:17:56', NULL, 74, 56),
(67, 2, 900000, NULL, NULL, 450000, NULL, '2022-07-09 07:11:21', '2022-07-09 07:11:21', NULL, 75, 59),
(68, 4, 1400000, NULL, NULL, 350000, NULL, '2022-07-11 21:37:03', '2022-07-11 21:37:03', NULL, 76, 57),
(69, 2, 900000, NULL, NULL, 450000, NULL, '2022-07-12 00:06:00', '2022-07-12 00:06:00', NULL, 77, 56),
(70, 5, 1750000, NULL, NULL, 350000, NULL, '2022-07-28 22:32:56', '2022-07-28 22:32:56', NULL, 78, 56);

-- --------------------------------------------------------

--
-- Table structure for table `detail_penjualans`
--

CREATE TABLE `detail_penjualans` (
  `id` int(11) NOT NULL,
  `qty` int(11) DEFAULT NULL,
  `subtotal` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `penjualans_id` int(11) NOT NULL,
  `barangs_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `detail_penjualans`
--

INSERT INTO `detail_penjualans` (`id`, `qty`, `subtotal`, `created_at`, `updated_at`, `deleted_at`, `penjualans_id`, `barangs_id`) VALUES
(33, 4, 2000000, '2022-07-09 06:16:47', '2022-07-09 06:16:47', NULL, 147, 56),
(34, 4, 2000000, '2022-07-11 21:35:20', '2022-07-11 21:35:20', NULL, 148, 57),
(35, 2, 1000000, '2022-07-12 00:04:48', '2022-07-12 00:04:48', NULL, 149, 56),
(36, 1, 500000, '2022-07-28 22:32:01', '2022-07-28 22:32:01', NULL, 150, 56),
(37, 2, 1000000, '2022-07-29 07:06:45', '2022-07-29 07:06:45', NULL, 151, 57),
(38, 1, 500000, '2022-08-09 00:43:41', '2022-08-09 00:43:41', NULL, 152, 56),
(39, 1, 500000, '2022-08-09 00:43:41', '2022-08-09 00:43:41', NULL, 152, 56);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `gaji_karyawan`
--

CREATE TABLE `gaji_karyawan` (
  `id` int(11) NOT NULL,
  `nama_karyawan` varchar(255) DEFAULT NULL,
  `gaji` int(11) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `keterangan` varchar(50) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gaji_karyawan`
--

INSERT INTO `gaji_karyawan` (`id`, `nama_karyawan`, `gaji`, `tanggal`, `keterangan`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Lisman Saputra', 1200000, '2022-07-09', 'Gaji Karyawan', '2022-07-09 06:22:33', '2022-08-11 08:46:30', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id` int(11) NOT NULL,
  `nama` varchar(50) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id`, `nama`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Vans', '2022-07-09 05:46:17', '2022-07-09 05:46:17', NULL),
(2, 'Nike', '2022-07-09 05:46:27', '2022-07-09 05:46:27', NULL),
(3, 'Converse', '2022-07-09 05:46:44', '2022-07-09 05:46:44', NULL);

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
(7, '2014_10_12_000000_create_users_table', 1),
(8, '2014_10_12_100000_create_password_resets_table', 1),
(9, '2019_08_19_000000_create_failed_jobs_table', 1);

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
-- Table structure for table `pembayaran_air`
--

CREATE TABLE `pembayaran_air` (
  `id` int(11) NOT NULL,
  `no_ref` varchar(50) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `instansi` varchar(255) DEFAULT NULL,
  `nama_kepemilikan` varchar(255) DEFAULT NULL,
  `keterangan` varchar(255) DEFAULT NULL,
  `jumlah_bayar` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pembayaran_air`
--

INSERT INTO `pembayaran_air` (`id`, `no_ref`, `tanggal`, `instansi`, `nama_kepemilikan`, `keterangan`, `jumlah_bayar`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '500796088718', '2022-07-09', 'PDAM Kota Samarinda', 'KRISTIONO', 'Pembayaran Air', 53134, '2022-07-09 06:32:00', '2022-07-09 06:32:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `pembayaran_listrik`
--

CREATE TABLE `pembayaran_listrik` (
  `id` int(11) NOT NULL,
  `no_tujuan` varchar(255) DEFAULT NULL,
  `keterangan` varchar(255) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `token` varchar(255) DEFAULT NULL,
  `jumlah_bayar` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pembayaran_listrik`
--

INSERT INTO `pembayaran_listrik` (`id`, `no_tujuan`, `keterangan`, `tanggal`, `token`, `jumlah_bayar`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '231001295131', 'Pembayaran Listrik', '2022-07-09', '3393-1290-0024-6164', 53000, '2022-07-09 06:28:05', '2022-07-09 06:28:05', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `pembelians`
--

CREATE TABLE `pembelians` (
  `id` int(11) NOT NULL,
  `tempat` varchar(45) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `total` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `supliers_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pembelians`
--

INSERT INTO `pembelians` (`id`, `tempat`, `tanggal`, `total`, `created_at`, `updated_at`, `deleted_at`, `supliers_id`) VALUES
(74, NULL, '2022-07-09', 1050000, '2022-07-09 06:17:56', '2022-07-09 06:17:56', NULL, 8),
(75, NULL, '2022-07-09', 900000, '2022-07-09 07:11:21', '2022-07-09 07:11:21', NULL, 7),
(76, NULL, '2022-07-12', 1400000, '2022-07-11 21:37:03', '2022-07-11 21:37:03', NULL, 7),
(77, NULL, '2022-07-12', 900000, '2022-07-12 00:06:00', '2022-07-12 00:06:00', NULL, 8),
(78, NULL, '2022-07-29', 1750000, '2022-07-28 22:32:56', '2022-07-28 22:32:56', NULL, 8);

-- --------------------------------------------------------

--
-- Table structure for table `penjualans`
--

CREATE TABLE `penjualans` (
  `id` int(11) NOT NULL,
  `tanggal` date DEFAULT NULL,
  `pembayaran` int(11) DEFAULT NULL,
  `total` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `penjualans`
--

INSERT INTO `penjualans` (`id`, `tanggal`, `pembayaran`, `total`, `created_at`, `updated_at`, `deleted_at`) VALUES
(147, '2022-07-09', NULL, 2000000, '2022-07-09 06:16:47', '2022-07-09 06:16:47', NULL),
(148, '2022-07-12', NULL, 2000000, '2022-07-11 21:35:20', '2022-07-11 21:35:20', NULL),
(149, '2022-07-12', NULL, 1000000, '2022-07-12 00:04:48', '2022-07-12 00:04:48', NULL),
(150, '2022-07-29', NULL, 500000, '2022-07-28 22:32:01', '2022-07-28 22:32:01', NULL),
(151, '2022-07-29', NULL, 1000000, '2022-07-29 07:06:45', '2022-07-29 07:06:45', NULL),
(152, '2022-08-09', NULL, 1000000, '2022-08-09 00:43:41', '2022-08-09 00:43:41', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `pesanan`
--

CREATE TABLE `pesanan` (
  `id` int(11) NOT NULL,
  `customer_id` int(11) DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `status` varchar(255) DEFAULT NULL,
  `kode` varchar(255) DEFAULT NULL,
  `jumlah_harga` varchar(255) DEFAULT NULL,
  `created_at` varchar(255) DEFAULT NULL,
  `updated_at` varchar(255) DEFAULT NULL,
  `deleted_at` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pesanan`
--

INSERT INTO `pesanan` (`id`, `customer_id`, `tanggal`, `status`, `kode`, `jumlah_harga`, `created_at`, `updated_at`, `deleted_at`) VALUES
(28, 4, '2022-08-16', '1', '290', '300000', '2022-08-16 15:27:19', '2022-08-16 15:28:02', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `pesanan_details`
--

CREATE TABLE `pesanan_details` (
  `id` int(11) NOT NULL,
  `barang_id` int(11) DEFAULT NULL,
  `pesanan_id` int(11) DEFAULT NULL,
  `size` int(11) DEFAULT NULL,
  `jumlah` int(11) DEFAULT NULL,
  `jumlah_harga` int(11) DEFAULT NULL,
  `layanan` int(11) DEFAULT NULL,
  `status_pembayaran` int(11) DEFAULT NULL,
  `b_pembayaran` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `pesanan_details`
--

INSERT INTO `pesanan_details` (`id`, `barang_id`, `pesanan_id`, `size`, `jumlah`, `jumlah_harga`, `layanan`, `status_pembayaran`, `b_pembayaran`, `created_at`, `updated_at`, `deleted_at`) VALUES
(50, 63, 28, 40, 1, 300000, 15000, 2, 'e231e8c4-f95e-423d-96c0-0e22b4227fce.png', '2022-08-16 07:27:19', '2022-08-16 07:32:58', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `profile`
--

CREATE TABLE `profile` (
  `id` int(11) NOT NULL,
  `visi` text DEFAULT NULL,
  `tentang_kami` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `profile`
--

INSERT INTO `profile` (`id`, `visi`, `tentang_kami`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Menjadi toko sepatu Online yang mampu memberikan kesan puas dan nyaman di hati pelanggannya', 'Kami dalam melakukan usaha penjualan Sepatu dengan tujuan utama untuk memudahkan pelanggan dalam segala urusan berbelanja sepatu', '2022-07-09 06:01:12', '2022-07-15 16:39:13', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `provinces`
--

CREATE TABLE `provinces` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `provinces`
--

INSERT INTO `provinces` (`id`, `name`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Bali', '2022-08-04 10:48:14', '2022-08-04 10:48:14', NULL),
(2, 'Bangka Belitung', '2022-08-04 10:48:15', '2022-08-04 10:48:15', NULL),
(3, 'Banten', '2022-08-04 10:48:15', '2022-08-04 10:48:15', NULL),
(4, 'Bengkulu', '2022-08-04 10:48:15', '2022-08-04 10:48:15', NULL),
(5, 'DI Yogyakarta', '2022-08-04 10:48:15', '2022-08-04 10:48:15', NULL),
(6, 'DKI Jakarta', '2022-08-04 10:48:15', '2022-08-04 10:48:15', NULL),
(7, 'Gorontalo', '2022-08-04 10:48:15', '2022-08-04 10:48:15', NULL),
(8, 'Jambi', '2022-08-04 10:48:15', '2022-08-04 10:48:15', NULL),
(9, 'Jawa Barat', '2022-08-04 10:48:15', '2022-08-04 10:48:15', NULL),
(10, 'Jawa Tengah', '2022-08-04 10:48:15', '2022-08-04 10:48:15', NULL),
(11, 'Jawa Timur', '2022-08-04 10:48:15', '2022-08-04 10:48:15', NULL),
(12, 'Kalimantan Barat', '2022-07-31 11:12:57', '2022-07-31 11:12:57', NULL),
(13, 'Kalimantan Selatan', '2022-07-31 11:12:57', '2022-07-31 11:12:57', NULL),
(14, 'Kalimantan Tengah', '2022-07-31 11:12:57', '2022-07-31 11:12:57', NULL),
(15, 'Kalimantan Timur', '2022-07-31 11:12:57', '2022-07-31 11:12:57', NULL),
(16, 'Kalimantan Utara', '2022-07-31 11:12:57', '2022-07-31 11:12:57', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `slide_show`
--

CREATE TABLE `slide_show` (
  `id` int(11) NOT NULL,
  `gambar` varchar(50) DEFAULT NULL,
  `label` varchar(50) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `slide_show`
--

INSERT INTO `slide_show` (`id`, `gambar`, `label`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, '8c9b8538-eeff-4499-b2fb-1827f645dfbf.jpg', 'vans', '2022-07-09 06:04:32', '2022-07-10 16:42:12', NULL),
(2, '4be9bc79-9835-49dd-bf65-ca0de22f4afa.jpg', 'vans2', '2022-07-09 06:04:51', '2022-07-10 16:42:30', NULL),
(3, '82c818f2-5066-4898-9718-ff8765ad938d.jpeg', 'vans3', '2022-07-10 16:42:53', '2022-07-11 21:34:35', '2022-07-11 21:34:35');

-- --------------------------------------------------------

--
-- Table structure for table `supliers`
--

CREATE TABLE `supliers` (
  `id` int(11) NOT NULL,
  `name` varchar(50) DEFAULT NULL,
  `alamat` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `supliers`
--

INSERT INTO `supliers` (`id`, `name`, `alamat`, `created_at`, `updated_at`, `deleted_at`) VALUES
(7, 'Johan', 'jln. M.yamin Rt.09 No.42', '2022-07-09 06:14:00', '2022-07-09 06:14:00', NULL),
(8, 'Marwan', 'jln.Bengkuring Raya Dalam RT.009', '2022-07-09 06:15:06', '2022-07-09 06:15:06', NULL),
(9, 'boye', 'jln. pasundan', '2022-07-15 17:36:09', '2022-07-15 17:36:09', NULL),
(10, 'kun', 'kos mama', '2022-07-28 22:34:06', '2022-07-28 22:34:06', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'admin', 'admin@gmail.com', NULL, '$2y$10$CcylgYezJA84aNMK1rK8hOu34P/sqOJqkTcxIoIqX7Y6HbZR3YBOu', NULL, '2022-07-31 09:33:30', '2022-07-31 09:33:30', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barangs`
--
ALTER TABLE `barangs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_kategori` (`id_kategori`);

--
-- Indexes for table `beban`
--
ALTER TABLE `beban`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cities`
--
ALTER TABLE `cities`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `couriers`
--
ALTER TABLE `couriers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `detail_pembelians`
--
ALTER TABLE `detail_pembelians`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_detail_pembelians_pembelians1_idx` (`pembelians_id`),
  ADD KEY `fk_detail_pembelians_barangs1_idx` (`barangs_id`);

--
-- Indexes for table `detail_penjualans`
--
ALTER TABLE `detail_penjualans`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_detail_penjualans_penjualans1_idx` (`penjualans_id`),
  ADD KEY `fk_detail_penjualans_barangs1_idx` (`barangs_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gaji_karyawan`
--
ALTER TABLE `gaji_karyawan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
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
-- Indexes for table `pembayaran_air`
--
ALTER TABLE `pembayaran_air`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pembayaran_listrik`
--
ALTER TABLE `pembayaran_listrik`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pembelians`
--
ALTER TABLE `pembelians`
  ADD PRIMARY KEY (`id`),
  ADD KEY `fk_pembelians_supliers1_idx` (`supliers_id`);

--
-- Indexes for table `penjualans`
--
ALTER TABLE `penjualans`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`customer_id`) USING BTREE;

--
-- Indexes for table `pesanan_details`
--
ALTER TABLE `pesanan_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `barang_id` (`barang_id`),
  ADD KEY `pesanan_id` (`pesanan_id`);

--
-- Indexes for table `profile`
--
ALTER TABLE `profile`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `provinces`
--
ALTER TABLE `provinces`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slide_show`
--
ALTER TABLE `slide_show`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `supliers`
--
ALTER TABLE `supliers`
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
-- AUTO_INCREMENT for table `barangs`
--
ALTER TABLE `barangs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;

--
-- AUTO_INCREMENT for table `beban`
--
ALTER TABLE `beban`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `cities`
--
ALTER TABLE `cities`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=502;

--
-- AUTO_INCREMENT for table `couriers`
--
ALTER TABLE `couriers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `detail_pembelians`
--
ALTER TABLE `detail_pembelians`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;

--
-- AUTO_INCREMENT for table `detail_penjualans`
--
ALTER TABLE `detail_penjualans`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gaji_karyawan`
--
ALTER TABLE `gaji_karyawan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `pembayaran_air`
--
ALTER TABLE `pembayaran_air`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pembayaran_listrik`
--
ALTER TABLE `pembayaran_listrik`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pembelians`
--
ALTER TABLE `pembelians`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;

--
-- AUTO_INCREMENT for table `penjualans`
--
ALTER TABLE `penjualans`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=153;

--
-- AUTO_INCREMENT for table `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `pesanan_details`
--
ALTER TABLE `pesanan_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `profile`
--
ALTER TABLE `profile`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `provinces`
--
ALTER TABLE `provinces`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `slide_show`
--
ALTER TABLE `slide_show`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `supliers`
--
ALTER TABLE `supliers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `barangs`
--
ALTER TABLE `barangs`
  ADD CONSTRAINT `FK_barangs_kategori` FOREIGN KEY (`id_kategori`) REFERENCES `kategori` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `detail_pembelians`
--
ALTER TABLE `detail_pembelians`
  ADD CONSTRAINT `fk_detail_pembelians_barangs1` FOREIGN KEY (`barangs_id`) REFERENCES `barangs` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_detail_pembelians_pembelians1` FOREIGN KEY (`pembelians_id`) REFERENCES `pembelians` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `detail_penjualans`
--
ALTER TABLE `detail_penjualans`
  ADD CONSTRAINT `fk_detail_penjualans_barangs1` FOREIGN KEY (`barangs_id`) REFERENCES `barangs` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `fk_detail_penjualans_penjualans1` FOREIGN KEY (`penjualans_id`) REFERENCES `penjualans` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `pembelians`
--
ALTER TABLE `pembelians`
  ADD CONSTRAINT `fk_pembelians_supliers1` FOREIGN KEY (`supliers_id`) REFERENCES `supliers` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD CONSTRAINT `FK_pesanan_customer` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `pesanan_details`
--
ALTER TABLE `pesanan_details`
  ADD CONSTRAINT `FK_pesanan_details_barangs` FOREIGN KEY (`barang_id`) REFERENCES `barangs` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `FK_pesanan_details_pesanan` FOREIGN KEY (`pesanan_id`) REFERENCES `pesanan` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
