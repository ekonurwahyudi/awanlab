-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 11, 2021 at 04:22 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `awanlab`
--

-- --------------------------------------------------------

--
-- Table structure for table `artikels`
--

CREATE TABLE `artikels` (
  `artikel_id` int(10) UNSIGNED NOT NULL,
  `artikel_gambar` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `artikel_judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `artikel_deskripsi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `artikel_editor` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `artikel_date` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `artikels`
--

INSERT INTO `artikels` (`artikel_id`, `artikel_gambar`, `artikel_judul`, `artikel_deskripsi`, `artikel_editor`, `artikel_date`, `created_at`, `updated_at`) VALUES
(6, 'i4gDwzdXyeHRsBU7gzM5MhKOETJvnAEeHxXbYIjZ.jpeg', 'Bagaimana cara merawat alat?', '<p style=\"font-family: Poppins, Helvetica, sans-serif;\"><span style=\"color: rgb(0, 0, 0); font-family: monospace; font-size: medium; white-space: pre;\">Cara agar alat kita tetap terjaga kestabilan kalibrasinya ialah, ada beberapa hal yang harus kita </span></p><p style=\"font-family: Poppins, Helvetica, sans-serif;\"><span style=\"color: rgb(0, 0, 0); font-family: monospace; font-size: medium; white-space: pre;\">perhatikan. Mulai dari lingkungan yang terjaga.</span></p>', 'admin', '2020-12-04', '2020-12-04 03:28:49', '2020-12-22 08:23:23'),
(7, 'DahGO86vwTMbyvdK11DsivIXmXzLBgKTJ5BWrhkc.jpeg', 'Kalibrasi Menentukan Kesuksesan Bisnis Anda', '<span style=\"color: rgb(0, 0, 0); font-family: monospace; font-size: medium; white-space: pre;\">Dalam hal lain, kalibrasi sangat menunjang kebutuhan bisnis perusahaan kita, mulai dari sertifikasi alat yang sesuai dengan standar.</span>', 'admin', '2020-12-04', '2020-12-04 06:56:27', '2020-12-04 06:56:27'),
(8, 'i0GbWN5F4Q1MbZ6AMUSP0cTx3S4mDrpP08mwb2DJ.jpeg', 'Lab Kalibrasi Telkom sedang melaksanakan KUM Nasional', '<span style=\"color: rgb(0, 0, 0); font-family: monospace; font-size: medium; white-space: pre;\">Pada tanggal 26 November 2020 kemarin, Lab kalibrasi Telkom telah melaksanakan Kaji Ulang Mutu (KUM) secara nasional.</span>', 'admin', '2020-11-26', '2020-12-04 06:57:31', '2020-12-04 06:57:31'),
(9, 'UDlwwV8nuCYMIYqSp1SySwV2uHgxpUyZr5n0Uv4U.jpeg', 'Mengapa Harus kalibrasi', '<span style=\"color: rgb(0, 0, 0); font-family: monospace; font-size: medium; white-space: pre;\">Kalibrasi diwajibkan agar alat kita tetap berkerja sesuai dengan standar yang telah ditetapkan, oleh karena itu kita diharuskan ketika telah jatuh tempo.</span>', 'admin', '2020-12-04', '2020-12-04 06:58:42', '2020-12-04 06:58:42');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `faqs`
--

CREATE TABLE `faqs` (
  `faq_id` int(10) UNSIGNED NOT NULL,
  `faq_pertayaan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `faq_jawaban` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `faqs`
--

INSERT INTO `faqs` (`faq_id`, `faq_pertayaan`, `faq_jawaban`, `created_at`, `updated_at`) VALUES
(6, 'Berapa lama penyelesaian kalibrasi alat ukur saya?', ' Lama penyelesaian kalibrasi alat ukur tergantung dari banyak titik yang diukur dan alat pengukurannya.', '2020-12-28 08:38:31', '2020-12-28 08:38:31'),
(10, 'Berapakah tarif untuk jasa kalibrasi alat ukur?', 'Biaya jasa kalibrasi untuk masing-masing peralatan ditentukan berdasarkan PP tariff yang berlaku.', '2020-12-28 08:50:08', '2020-12-28 08:50:08'),
(11, 'Kenapa alat ukur kami tidak dapat diterima?', 'Ada kemungkinan alat ukur tersebut tidak masuk dalam ruang lingkup kami, sebagaimana ketentuan oleh KAN sendiri. Adapaun ruang lingkup yang kami tawarkan memiliki 3 kategori, kelistrikan, frekuensi & wantu, serta Fiber Optic.', '2020-12-28 08:52:46', '2020-12-28 08:52:46'),
(12, 'Apakah saya bisa kalibrasi secara Onsite?', 'Ya bisa, kami juga menerima jasa kalibrasi secara Onsite dan InHouse. Namu jasa kalibrasi secara Onsite akan menambah beban biaya transportasi. ', '2020-12-28 08:56:24', '2020-12-28 08:56:24'),
(13, 'Bagaimana cara saya Tracking orderan kalibrasi saya?', 'Saat ini tracking order dapat dilakukan melalui Wa atau bisa mengklik tombol  icon Whastapp di pojok kanan bawah. Dan untuk tracking order secara otomatis sedang dalam tahap pengembangan. ', '2020-12-28 08:58:24', '2020-12-28 08:58:24');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `feedback_id` int(10) UNSIGNED NOT NULL,
  `feedback_nama` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `feedback_perusahaan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `feedback_lab` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `feedback_pesan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`feedback_id`, `feedback_nama`, `feedback_perusahaan`, `feedback_lab`, `feedback_pesan`, `created_at`, `updated_at`) VALUES
(1, 'eko', NULL, 'Medan', 'Pelayanan sudah bagus, hanya saja lama kalibrasinya', NULL, NULL),
(2, 'Eko Wahyudi', 'PT. Inovasi Anak Bangsa', 'Jakarta', 'Invoicenya lama, padahal tinggal keluarin invoice apa susahnya sih', NULL, NULL),
(3, NULL, NULL, 'Surabaya', 'Perlu adanya sistem untuk tracking order', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `konsultasis`
--

CREATE TABLE `konsultasis` (
  `konsultasi_id` int(10) UNSIGNED NOT NULL,
  `konsultasi_nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `konsultasi_hp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `konsultasi_email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `konsultasi_pesan` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `konsultasis`
--

INSERT INTO `konsultasis` (`konsultasi_id`, `konsultasi_nama`, `konsultasi_hp`, `konsultasi_email`, `konsultasi_pesan`, `created_at`, `updated_at`) VALUES
(1, 'Eko Nurwayudi', '081361364480', 'eko@mhs.unsyiah.ac.id', 'Apakah kalibrasi fiber optic mempunyai logo KAN?', NULL, NULL),
(2, 'Chandra Fitra', '08121555423', 'chandra1234@gmail.com', 'Berapa lama alat saya akan siap, jika kalibrasi hari ini?', NULL, NULL);

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_12_01_131127_create_permission_tables', 1),
(5, '2020_12_04_015527_create_artikels_table', 2),
(6, '2020_12_12_122111_create_konsultasis_table', 3),
(7, '2020_12_15_065652_create_ruanglingkups_table', 4),
(8, '2020_12_22_093701_create_slides_table', 5),
(9, '2020_12_28_065357_create_faqs_table', 6),
(10, '2020_12_29_074238_create_feedback_table', 6),
(11, '2021_01_08_070054_create_perusahaans_table', 6);

-- --------------------------------------------------------

--
-- Table structure for table `model_has_permissions`
--

CREATE TABLE `model_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `model_has_roles`
--

CREATE TABLE `model_has_roles` (
  `role_id` bigint(20) UNSIGNED NOT NULL,
  `model_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `model_has_roles`
--

INSERT INTO `model_has_roles` (`role_id`, `model_type`, `model_id`) VALUES
(1, 'App\\Models\\User', 1),
(1, 'App\\Models\\User', 4),
(2, 'App\\Models\\User', 2),
(2, 'App\\Models\\User', 5),
(2, 'App\\Models\\User', 6),
(2, 'App\\Models\\User', 7),
(2, 'App\\Models\\User', 8),
(2, 'App\\Models\\User', 9),
(2, 'App\\Models\\User', 10),
(2, 'App\\Models\\User', 11),
(2, 'App\\Models\\User', 12),
(2, 'App\\Models\\User', 13),
(2, 'App\\Models\\User', 14),
(2, 'App\\Models\\User', 15),
(2, 'App\\Models\\User', 16),
(2, 'App\\Models\\User', 17),
(2, 'App\\Models\\User', 18),
(2, 'App\\Models\\User', 19),
(2, 'App\\Models\\User', 20),
(2, 'App\\Models\\User', 21),
(2, 'App\\Models\\User', 22),
(2, 'App\\Models\\User', 23),
(2, 'App\\Models\\User', 24),
(2, 'App\\Models\\User', 25),
(2, 'App\\Models\\User', 26),
(2, 'App\\Models\\User', 27),
(2, 'App\\Models\\User', 29),
(2, 'App\\Models\\User', 30),
(2, 'App\\Models\\User', 31),
(2, 'App\\Models\\User', 32),
(2, 'App\\Models\\User', 34);

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
-- Table structure for table `permissions`
--

CREATE TABLE `permissions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `perusahaans`
--

CREATE TABLE `perusahaans` (
  `id_perusahaan` int(10) UNSIGNED NOT NULL,
  `nama_perusahaan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `telepon_perusahaan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamat_perusahaan` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `npwp_perusahaan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `perusahaans`
--

INSERT INTO `perusahaans` (`id_perusahaan`, `nama_perusahaan`, `telepon_perusahaan`, `alamat_perusahaan`, `npwp_perusahaan`, `created_at`, `updated_at`) VALUES
(1, 'PT. Telkom Indonesia', 'AFGIOAN', 'GIOARN', 'KLERNGOL', '2021-01-10 04:43:43', '2021-01-10 04:43:43'),
(2, 'PT. Yamaha Music', 'ekrgj', 'enrgkl', 'eklgns', '2021-01-10 04:44:09', '2021-01-10 04:44:09'),
(3, 'PT. Cahaya Sinar ', 'erngj', 'erklgn', 'serjn', '2021-01-10 04:44:19', '2021-01-10 04:44:19'),
(4, 'PT. Indosat Mega Media', 'klgnlq', 'erjklgn', 'lerlgnkl', '2021-01-10 04:44:30', '2021-01-10 04:44:30'),
(5, 'PT. Mitra Inti Media', 'ernkgio', 'gnl', 'n', '2021-01-10 04:44:40', '2021-01-10 04:44:40'),
(6, 'PT. Tirta Bumi', 'erkn', 'ajkbfv', 'jrbk', '2021-01-10 04:44:56', '2021-01-10 04:44:56'),
(7, 'PT. Rotamak', 'dgv', 'ebgj', 'jse', '2021-01-10 04:45:06', '2021-01-10 04:45:06'),
(8, 'PT. Huawei', '0812', 'jl. Bpaeris', 'egnfkj', '2021-01-10 05:13:30', '2021-01-10 05:13:30'),
(9, 'PT. Gasby', '67890', 'jl', 'awejk', '2021-01-10 05:15:31', '2021-01-10 05:15:31'),
(10, 'PT. Kaliman Indonesia', '08', 'kldnal', 'nqlnfafkl', '2021-01-10 08:15:34', '2021-01-10 08:15:34'),
(11, 'PT. Bangun Prima', '08', 'wjefna', 'anwjf', '2021-01-10 17:11:31', '2021-01-10 17:11:31');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `guard_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `guard_name`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'web', '2020-12-01 07:09:18', '2020-12-01 07:09:18'),
(2, 'customer', 'web', '2020-12-01 07:09:18', '2020-12-01 07:09:18');

-- --------------------------------------------------------

--
-- Table structure for table `role_has_permissions`
--

CREATE TABLE `role_has_permissions` (
  `permission_id` bigint(20) UNSIGNED NOT NULL,
  `role_id` bigint(20) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ruanglingkups`
--

CREATE TABLE `ruanglingkups` (
  `ruanglingkup_id` int(10) UNSIGNED NOT NULL,
  `ruanglingkup_lokasi` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ruanglingkup_kelompokukur` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ruanglingkup_instrument` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ruanglingkup_frekuensi` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `ruanglingkup_rentangukur` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `ruanglingkup_ketidakpastian` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ruanglingkups`
--

INSERT INTO `ruanglingkups` (`ruanglingkup_id`, `ruanglingkup_lokasi`, `ruanglingkup_kelompokukur`, `ruanglingkup_instrument`, `ruanglingkup_frekuensi`, `ruanglingkup_rentangukur`, `ruanglingkup_ketidakpastian`, `created_at`, `updated_at`) VALUES
(4, '1', 'kelistrikan', 'AC Current Source', 'f: 10 Hz ~ 1 kHz\r\nf: 1 kHz ~ 5 kHz\r\nf: 40 Hz ~ 5 kHz\r\nf: 5 kHz ~ 100 kHz\r\nf: 55 Hz ~ 10 kHz  ', '0.00001 A ~ 1 A\r\n0.00001 A ~ 1 A\r\n1 A ~ 11 A\r\n0.00001 A ~ 10 A\r\n10 A ~ 20 A', '0.58 mA/A\r\n6.2 mA/A\r\n0.66 mA/A\r\n0.79 mA/A\r\n0.29 mA/A', '2020-12-15 08:51:56', '2020-12-15 08:51:56'),
(5, '1', 'kelistrikan', 'DC Current Source', ' ', '0.0001 A ~ 10 A\r\n10 A ~ 20 A', '0.10 mA/A\r\n0.02 mA/A', '2020-12-15 08:53:04', '2020-12-15 08:53:04'),
(7, '1', 'kelistrikan', 'AC Amperemeter', 'f: 20 Hz ~ 40 Hz\r\nf: 40 Hz ~ 1 kHz\r\n\r\nf: 1 kHz ~ 5 kHz\r\n\r\nf: 5 kHz ~ 10 kHz\r\n', '0.00001 A ~ 2.2 A\r\n0.00001 A ~ 2.2 A\r\n2.2 A ~ 11 A\r\n0.00001 A ~ 2.2 A\r\n2.2 A ~ 11 A\r\n0.00001 A ~ 2.2 A\r\n2.2 A ~ 11 A', '0.74 mA/A\r\n0.60 mA/A\r\n0.77 mA/A\r\n1.04 mA/A\r\n1.2 mA/A\r\n2.1 mA/A\r\n4.2 mA/A', '2020-12-16 07:19:12', '2020-12-16 07:19:12'),
(8, '1', 'kelistrikan', 'DC Amperemeter', ' ', '0.00001 A ~ 2.2 A\r\n2.2 A ~ 11 A', '0.12 mA/A\r\n0.44 mA/A', '2020-12-16 07:27:26', '2020-12-16 07:27:26'),
(9, '1', 'kelistrikan', 'AC Clampmeter', 'f: 20 Hz ~ 10 kHz', '10 A ~ 1000 A', '8.3 mA/A', '2020-12-16 07:29:12', '2020-12-16 07:29:12'),
(10, '1', 'kelistrikan', 'DC Clampmeter', ' ', '10 A ~ 1000 A', '5.04 mA/A', '2020-12-16 07:30:21', '2020-12-16 07:30:21'),
(11, '1', 'kelistrikan', 'AC Voltage Source', 'f: 20 Hz ~ 1 kHz\r\nf: 1 kHz ~ 20 kHz\r\nf: 20 kHz ~ 100 kHz\r\nf: 50 Hz', '0.001 V ~ 1100 V\r\n0.001 V ~ 1100 V\r\n0.001 V ~ 1100 V\r\n0.1 kV ~ 10 kV', '0.18 mV/V\r\n0.3 mV/V\r\n0.54 mV/V\r\n6.5 mV/V', '2020-12-16 07:33:35', '2020-12-16 07:33:35'),
(12, '1', 'kelistrikan', 'DC Voltage Source', ' ', '0.00001 V ~ 1100 V\r\n0.1 kV ~ 10 kV', '0.01 mV/V\r\n9.0 mV/V', '2020-12-16 07:35:54', '2020-12-16 07:35:54'),
(13, '1', 'kelistrikan', 'AC Voltmeter', 'f: 20 Hz ~ 20 kHz\r\nf: 20 kHz ~ 100 kHz\r\nf: 50 Hz', '0.0022 V ~ 1100 V\r\n0.0022 V ~ 1100 V\r\n0.1 kV ~ 10 kV', '0.24 mV/V\r\n1.4 mV/V\r\n34 mV/V', '2020-12-16 07:39:24', '2020-12-16 07:39:24'),
(14, '1', 'kelistrikan', 'DC Voltmeter', ' ', '0.0022 V ~ 1100 V\r\n0.1 kV ~ 10 kV', '0.02 mV/V\r\n47 mV/V', '2020-12-16 07:42:31', '2020-12-16 07:42:31'),
(15, '1', 'kelistrikan', 'AC Voltage Recorder', 'f: 45 Hz ~ 1 kHz', '0.0022 V ~ 1100 V', '1.1 mV/V', '2020-12-16 07:43:30', '2020-12-16 07:43:30'),
(16, '1', 'kelistrikan', 'DC Voltage Recorder', ' ', '0.0022 V ~ 1100 V', '0.02 mV/V', '2020-12-16 07:44:09', '2020-12-16 07:44:09'),
(17, '1', 'kelistrikan', 'DC High Voltage Source', ' ', '0.1 kV ~ 10 kV', '9.0 mV/V', '2020-12-16 07:46:43', '2020-12-16 07:46:43'),
(18, '1', 'kelistrikan', 'AC High Voltage Source', 'f: 50 Hz ', '0.1 kV ~ 10 kV', '4.5 mV/V', '2020-12-16 07:48:03', '2020-12-16 07:48:03'),
(19, '1', 'kelistrikan', 'Standar Resistor', ' ', '1 Ω\r\n10 Ω\r\n0.1 kΩ ~ 10 kΩ\r\n10 MΩ\r\n100 MΩ', '0.02 mΩ/Ω\r\n0.01 mΩ.Ω\r\n0.01 mΩ/Ω\r\n0.03 mΩ/Ω\r\n0.53 mΩ/Ω', '2020-12-16 07:50:37', '2020-12-16 07:50:37'),
(20, '1', 'kelistrikan', 'Decade Resistor Box', ' ', '1 mΩ ~ 1 Ω\r\n1 Ω ~ 10 MΩ\r\n10 MΩ ~ 100 MΩ\r\n0.1 GΩ ~ 10 GΩ\r\n10 GΩ ~ 100 GΩ', '0.02 mΩ/Ω\r\n0.03 mΩ/Ω\r\n0.07 mΩ/Ω\r\n5.7 mΩ/Ω\r\n11 mΩ/Ω', '2020-12-16 07:54:06', '2020-12-16 07:54:06'),
(21, '1', 'kelistrikan', 'Ohmmeter', ' ', '1 mΩ ~ 1 Ω\r\n1 Ω  ~ 100 MΩ', '0.02 mΩ/Ω\r\n0.07 mΩ/Ω', '2020-12-16 07:57:20', '2020-12-16 07:57:20'),
(22, '1', 'kelistrikan', 'Megaohm Tester, Insulation Tester', ' ', '100 MΩ ~ 1 GΩ\r\n0.1 GΩ ~ 100 GΩ', '0.61 mΩ/Ω\r\n2.4 mΩ/Ω', '2020-12-16 07:58:47', '2020-12-16 07:58:47'),
(23, '1', 'kelistrikan', 'Wheatstone Bridge, Earth Tester, Surge Protector', ' ', '1E-08 MΩ ~ 100 MΩ', '5.4 mΩ/Ω', '2020-12-16 19:47:57', '2020-12-16 19:47:57'),
(24, '1', 'kelistrikan', 'Standard Capacitor', 'f: 1 kHz', '1E-06 µF ~ 1000 µF', '0.91 mF/F', '2020-12-16 19:59:51', '2020-12-16 19:59:51'),
(25, '1', 'kelistrikan', 'Decade Capacitor', 'f: 1 kHz ', '1E-06 µF ~ 1000 µF', '0.91 mF/F', '2020-12-16 20:02:21', '2020-12-16 20:02:21'),
(26, '1', 'kelistrikan', 'Capacitance Meter', 'f: 100 Hz ~ 1 kHz', '1E-06 µF ~ 10 µF', '0.13 mF/F', '2020-12-16 20:04:45', '2020-12-16 20:04:45'),
(27, '1', 'kelistrikan', 'Capacitance Bridge', 'f: 100 Hz ~ 1 kHz', '1E-06 µF ~ 1100 µF', '3.5 mF/F', '2020-12-16 20:11:18', '2020-12-16 20:11:18'),
(28, '1', 'kelistrikan', 'Standar Inductor', 'f: 1 kHz', '1E-06 H ~ 10 H', '0.24 mH/H', '2020-12-16 20:12:17', '2020-12-16 20:12:17'),
(29, '1', 'kelistrikan', 'Decade Inductor', 'f: 1 kHz', '1E-06 H ~ 10 H', '0.24 mH/H', '2020-12-16 20:14:22', '2020-12-16 20:14:22'),
(30, '1', 'kelistrikan', 'Inductance Meter', 'f: 1 kHz ~ 100 kHz ', '1E-04 H ~ 10 H', '0.49 mH/H', '2020-12-16 20:15:07', '2020-12-16 20:15:07'),
(31, '1', 'kelistrikan', 'DC Powermeter', ' ', '1E-04 kVA ~ 11 kVA', '0.18 mVA/VA', '2020-12-16 20:15:52', '2020-12-16 20:15:52'),
(32, '1', 'kelistrikan', 'AC Powermeter', ' f: 40 Hz ~ 100 kHz', '1E-04 kVA ~ 11 kVA', '4.7 mVA/VA', '2020-12-16 20:17:00', '2020-12-16 20:17:00'),
(33, '1', 'frekuensi dan Waktu', 'Rubidium Frequency Standard', ' ', '5 MHz ~ 10 MHz', '88 pHz/Hz', '2020-12-16 20:28:51', '2020-12-16 20:28:51'),
(34, '1', 'frekuensi dan Waktu', 'X-Tal Frequency Standard', ' ', '1E-04 MHz ~ 100 MHz', '86 pHz/Hz', '2020-12-16 20:31:01', '2020-12-16 20:31:01'),
(35, '1', 'frekuensi dan Waktu', 'Frequency Counter, Universal Time Counter, Microwave Frequency Counter', ' ', '10 Hz ~ 26.5 GHz', '86 pHz/Hz', '2020-12-17 00:28:15', '2020-12-17 00:28:15'),
(36, '1', 'frekuensi dan Waktu', 'Frequency Meter', ' ', '1E-08 GHz ~ 26.5 GHz', '5.7 nHz/Hz', '2020-12-16 20:33:57', '2020-12-16 20:33:57'),
(37, '1', 'frekuensi dan Waktu', 'RF Oscillator', 'Frequency \r\nlevel\r\nf: 500 kHz ~ 6.9 GHz\r\nf: 7 GHz ~ 12.9 GHz\r\nf: 13 GHz ~ 13.9 GHz\r\nf: 14 GHz ~ 18 GHz\r\nf: 18 GHz ~ 26.5 GHz', '1E-04 MHz ~ 30 MHz\r\n\r\n-110 dBm ~ 20 dBm\r\n-110 dBm ~ 20 dBm\r\n-110 dBm ~ 20 dBm\r\n-110 dBm ~ 20 dBm\r\n-110 dBm ~ 20 dBm', '86 pHz/Hz\r\n\r\n0.22 dB\r\n0.22 dB\r\n0.22 dB\r\n0.22 dB\r\n0.57 dB', '2020-12-16 20:37:23', '2020-12-16 20:37:23'),
(38, '1', 'frekuensi dan Waktu', 'Function Generator, Pulse Generator', 'Frequency\r\nVoltage level', '100 Hz ~ 100 MHz\r\n0.02 V ~ 30 V', '5.7 nHz/Hz\r\n0.55 nV/V', '2020-12-16 20:40:25', '2020-12-16 20:40:25'),
(39, '1', 'frekuensi dan Waktu', 'Synthesized Signal Generator, Synthesized Sweeper', 'Frequency\r\nlevel\r\nf: 500 kHz ~ 6.9 GHz\r\nf: 7 GHz ~ 12.9 GHz\r\nf: 13 GHz ~ 13.9 GHz\r\nf: 14 GHz ~ 18 GHz\r\nf: 18 GHz ~ 26.5 GHz', '10 MHz ~ 26.5 GHz\r\n\r\n-110 dBM ~ 20 dBm\r\n-110 dBM ~ 20 dBm\r\n-110 dBM ~ 20 dBm\r\n-110 dBM ~ 20 dBm\r\n-110 dBM ~ 20 dBm', '86 nHz/Hz\r\n\r\n0.22 dB\r\n0.22 dB\r\n0.22 dB\r\n0.22 dB\r\n0.57 dB', '2020-12-16 20:43:27', '2020-12-16 20:43:27'),
(40, '1', 'frekuensi dan Waktu', 'AM/FM Signal Generator', 'Frequency\r\nlevel\r\nf: 500 kHz ~ 6.9 GHz\r\nf: 7 GHz ~ 12.9 GHz\r\nf: 13 GHz ~ 13.9 GHz\r\nf: 14 GHz ~ 18 GHz\r\nf: 18 GHz ~ 26.5 GHz\r\nModulation AM\r\nModulation FM', '10 MHz ~ 26.5 GHz\r\n\r\n-110 dBm ~ 20 dBm\r\n-110 dBm ~ 20 dBm\r\n-110 dBm ~ 20 dBm\r\n-110 dBm ~ 20 dBm\r\n-110 dBm ~ 20 dBm\r\n1 % ~ 99 %\r\n2 kHz ~ 200 kHz', '86 nHz/Hz\r\n\r\n0.22 dB\r\n0.22 dB\r\n0.22 dB\r\n0.22 dB\r\n0.22 dB\r\n1.17 %\r\n1.2 %', '2020-12-16 20:46:58', '2020-12-16 20:46:58'),
(41, '1', 'frekuensi dan Waktu', 'RF Power Meter', 'Level\r\nf: 500 kHz ~ 6.9 GHz\r\nf: 7 GHz ~ 12.9 GHz\r\nf: 13 GHz ~ 13.9 GHz\r\nf: 14 GHz ~ 18 GHz', '\r\n-70 dBm ~ 20 dBm\r\n-70 dBm ~ 20 dBm\r\n-70 dBm ~ 20 dBm\r\n-70 dBm ~ 20 dBm', '\r\n0.22 dB\r\n0.22 dB\r\n0.22 dB\r\n0.22 dB', '2020-12-16 21:31:06', '2020-12-16 21:31:06'),
(42, '1', 'frekuensi dan Waktu', 'RF Power Sensor', 'Level\r\nf: 500 kHz ~ 6.9 GHz\r\nf: 7 GHz ~ 12.9 GHz\r\nf: 13 GHz ~ 13.9 GHz\r\nf: 14 GHz ~ 18 GHz', ' \r\n-70 dBm ~ 20 dBm\r\n-70 dBm ~ 20 dBm\r\n-70 dBm ~ 20 dBm\r\n-70 dBm ~ 20 dBm', '0.22 dB\r\n0.22 dB\r\n0.22 dB\r\n0.22 dB', '2020-12-16 21:36:14', '2020-12-16 21:36:14'),
(43, '1', 'frekuensi dan Waktu', 'RF Power Sensor Thermocouple', 'Level\r\nf: 500 kHz ~ 6.9 GHz\r\nf: 7 GHz ~ 12.9 GHz\r\nf: 13 GHz ~ 13.9 GHz\r\nf: 14 GHz ~ 18 GHz', ' \r\n-70 dBm ~ 20 dBm\r\n-70 dBm ~ 20 dBm\r\n-70 dBm ~ 20 dBm\r\n-70 dBm ~ 20 dBm', ' \r\n0.22 dB\r\n0.22 dB\r\n0.22 dB\r\n0.22 dB', '2020-12-16 21:39:20', '2020-12-16 21:39:20'),
(44, '1', 'frekuensi dan Waktu', 'RF Attenuator, RF Step Attenuator', 'Attenuation\r\nf: 500 kHz ~ 6.9 GHz\r\nf: 7 GHz ~ 12.9 GHz\r\nf: 13 GHz ~ 13.9 GHz\r\nf: 14 GHz ~ 18 GHz', ' \r\n0 dB ~ 110 dB\r\n0 dB ~ 110 dB\r\n0 dB ~ 110 dB\r\n0 dB ~ 110 dB', ' \r\n0.22 dB\r\n0.24 dB\r\n0.24 dB\r\n0.24 dB', '2020-12-16 21:41:22', '2020-12-16 21:41:22'),
(45, '1', 'frekuensi dan Waktu', 'Coupler', ' ', '0 dB ~ 60 dB', '0.24 dB', '2020-12-16 21:42:06', '2020-12-16 21:42:06'),
(46, '1', 'frekuensi dan Waktu', 'Distortion Analyzer, Distortion Meter', 'f: 50 Hz ~ 100 kHz\r\nAC Voltage\r\nDistortion', ' \r\n0.05 V ~ 30 V\r\n0.1 % ~ 30 %', ' \r\n1.2 mV/V\r\n0.07 dB', '2020-12-16 21:44:40', '2020-12-16 21:44:40'),
(47, '1', 'frekuensi dan Waktu', 'Modulation Analyzer, Modulation Meter', 'AM Modulation\r\nFM Modulation', '1 % ~ 99 %\r\n2 kHz ~ 200 kHz', '1.7 % of reading\r\n17 mHz/Hz', '2020-12-16 21:46:12', '2020-12-16 21:46:12'),
(48, '1', 'frekuensi dan Waktu', 'Spectrum Analyzer', 'Frequency\r\nlevel', '10 MHz ~ 26.5 GHz\r\n-100 dBm ~ 20 dBm ', '0.57 nHz/hz\r\n0.22 dB ', '2020-12-16 21:47:54', '2020-12-16 21:47:54'),
(50, '1', 'frekuensi dan Waktu', 'Audio Analyzer', 'AC Voltage\r\nDistortion\r\nFrequency', '0.05 V ~ 30 V\r\n0.1 % ~ 30 %\r\n0.02 kHz ~ 100 kHz', '1.5  µV/V\r\n0.07 %\r\n57 µHz/Hz', '2020-12-17 00:31:52', '2020-12-17 00:31:52'),
(51, '1', 'frekuensi dan Waktu', 'Network Analyzer, Site master', 'Frequency\r\nPower Level', '10 Mhz ~ 26.5 GHz\r\n-100 dBm ~ 20 dBm', '0.57 nHz/Hz\r\n0.22 dB', '2020-12-17 00:33:10', '2020-12-17 00:33:10'),
(52, '1', 'frekuensi dan Waktu', 'Oscilloscope, Digitizing Oscilloscope Storage Oscilloscope, Plug in Oscilloscope', 'Vertical Deflection\r\nHorizontal Deflection\r\nVertical Flatness', '0.01 V ~ 220 V\r\n1E-09 s ~ 5 s\r\n10 mVpp ~ 5.5 Vpp', '3.0 mV/V\r\n5.8 µs/s\r\n2.4 mV/V  ', '2020-12-17 00:37:55', '2020-12-17 00:37:55'),
(53, '1', 'frekuensi dan Waktu', 'Bit Error Rate (BER) Tester', 'Rate ', '0.704 MBps ~ 140 MBps ', '5.7 nHz/Hz ', '2020-12-17 00:38:45', '2020-12-17 00:38:45'),
(54, '1', 'fiber optic', 'Optical Fibers', 'ʎ: 1310 nm\r\nLength\r\nAttenuation\r\nʎ: 1550 nm\r\nLength\r\nAttenuation', ' \r\n200 m ~ 24 km\r\n0.1 dB ~ 1 dB\r\n\r\n200 m ~ 24 km\r\n0.1 dB ~ 1 dB', ' \r\n1.7 m\r\n0.096 dB\r\n\r\n1.7 m\r\n0.094 dB', '2020-12-17 00:42:30', '2020-12-17 00:42:30'),
(55, '2', 'kelistrikan', 'AC Amperemeter', 'f: 40 Hz ~ 1 kHz ', '0.1 mA ~ 1 mA\r\n1 mA ~ 100 mA\r\n0.1 A ~ 1 A\r\n1 A ~ 10 A ', '1.0 mA/A\r\n1.0 mA/A\r\n1.0 mA/A\r\n0.7 mA/A ', '2020-12-17 00:45:22', '2020-12-17 00:45:22'),
(56, '2', 'kelistrikan', 'DC Amperemeter', ' ', '0.1 mA ~ 1 mA\r\n1 mA ~ 100 mA\r\n0.1 A ~ 1 A\r\n1 A ~ 10 A ', '0.5 mA/A\r\n0.1 mA/A\r\n0.2 mA/A\r\n0.14 mA/A', '2020-12-17 00:46:37', '2020-12-17 00:46:37'),
(57, '2', 'kelistrikan', 'AC Voltmeter', 'f: 50 Hz', '10 mV ~ 100 mV\r\n0.1 V ~ 1 V\r\n1 V ~ 100 V\r\n100 V ~ 1000 V', '0.5 mV/V\r\n0.40 mV/V\r\n0.3 mV/V\r\n0.3 mV/V', '2020-12-17 00:49:28', '2020-12-17 00:49:28'),
(58, '2', 'kelistrikan', 'DC Voltmeter', ' ', '0.1 V ~ 1 V\r\n1 V ~ 100 V\r\n100 V ~ 1100 V', '0.1 mV/V\r\n0.01 mV/V\r\n0.01 mV/V ', '2020-12-17 00:50:37', '2020-12-17 00:50:37'),
(59, '2', 'kelistrikan', 'Decade Resistance Box', ' ', '1  Ω ~ 20 Ω\r\n0.02 kΩ ~ 200 kΩ\r\n0.2 MΩ ~ 20 MΩ\r\n20 MΩ ~ 100 MΩ', '0.05 mΩ/Ω\r\n0.13 mΩ/Ω\r\n0.53 mΩ/Ω\r\n0.53 mΩ/Ω ', '2020-12-17 00:52:36', '2020-12-17 00:52:36'),
(60, '2', 'kelistrikan', 'Ohmmeter', ' ', '0.01 Ω ~ 0.1 Ω\r\n0.1 Ω ~ 1 Ω\r\n1 Ω ~ 20 Ω\r\n20 Ω ~ 1 MΩ\r\n1 MΩ ~ 10 MΩ\r\n10 MΩ ~ 100 MΩ ', '6 mΩ/Ω\r\n2.4 mΩ/Ω\r\n1.2 mΩ/Ω\r\n0.33 mΩ/Ω\r\n0.4 mΩ/Ω\r\n0.6 mΩ/Ω', '2020-12-17 00:56:43', '2020-12-17 00:56:43'),
(61, '2', 'kelistrikan', 'Capacitancemeter', ' f: 1 kHz', '10 pF ~ 100 pF\r\n100 pF ~ 1 µf\r\n1 µf ~ 100 µf', '0.57 mF/F\r\n0.58 mF/F\r\n0.64 mF/F', '2020-12-17 00:58:47', '2020-12-17 00:58:47'),
(62, '2', 'kelistrikan', 'Inductance Meter', ' ', '100 µH ~ 10 mH\r\n10 mH ~ 100 mH\r\n100 mH ~10 H', '27 mH/H\r\n27 mH/H\r\n24 mH/H', '2020-12-17 00:59:50', '2020-12-17 00:59:50'),
(63, '2', 'frekuensi dan Waktu', 'Osciloscope', 'Horizontal Defl. (Time/div)\r\nVertical Defl. (V/div) ', '10 ns ~ 10 ms\r\n10 mV ~ 50 V', '0.10 ms/s\r\n2.5 mV/V', '2020-12-17 01:01:10', '2020-12-17 01:01:10'),
(64, '2', 'frekuensi dan Waktu', 'Signal Generator', 'Frequency\r\nLevel', '10 MHz ~ 20 GHz\r\n-30 dBm ~ 20 dBm', '1.9 nHz/Hz\r\n0.44 dB', '2020-12-17 01:02:18', '2020-12-17 01:02:18'),
(65, '2', 'frekuensi dan Waktu', 'Signal Generator (lanjutan)', 'FM Modulasi\r\nAM Modulasi ', '9 kHz ~ 100 kHz\r\n1 %mod ~ 90 %mod ', '1.6 % of reading\r\n1.2 % of reading', '2020-12-17 01:04:05', '2020-12-17 01:04:05'),
(66, '2', 'frekuensi dan Waktu', 'Oscilator', 'Frequency\r\nLevel', '10 MHz ~ 10 GHz\r\n-60 dBm ~ 7 dBm', '57 nHz/Hz\r\n0.18 dB', '2020-12-17 01:05:05', '2020-12-17 01:05:05'),
(67, '2', 'frekuensi dan Waktu', 'Frequency Standard', ' ', '1 MHz ~ 10 MHz', '1.9 nHz/Hz ', '2020-12-17 01:05:55', '2020-12-17 01:05:55'),
(68, '2', 'frekuensi dan Waktu', 'Frequency Counter', ' ', '10 MHz ~ 10 GHz ', '1.9 nHz/Hz ', '2020-12-17 01:06:37', '2020-12-17 01:06:37'),
(69, '2', 'frekuensi dan Waktu', 'Power Meter without Sensor', ' ', '3 mW ~ 100 mW ', '0.6 µW ', '2020-12-17 01:07:25', '2020-12-17 01:07:25'),
(70, '2', 'frekuensi dan Waktu', 'Powe Meter with Sensor', ' ', '-30 dBm ~ 20 dBm ', '0.44 dB ', '2020-12-17 01:08:07', '2020-12-17 01:08:07'),
(71, '2', 'frekuensi dan Waktu', 'Spectrum Analyzer', 'Frequency\r\nLevel\r\nFM Modulasi\r\nAM Modulasi ', '10 Mhz ~ 20 GHz\r\n-50 dBm ~ 20 dBm\r\n20 kHz ~ 50 kHz\r\n10 % ~ 90 % Mod ', '1.9 nHz/Hz\r\n0.30 dB\r\n0.58 % of reading\r\n0.58 % of reading ', '2020-12-17 01:10:07', '2020-12-17 01:10:07'),
(72, '2', 'frekuensi dan Waktu', 'Audio Analyzer', 'Frequency\r\nDC Voltage ', '20 kHz ~ 100 kHz\r\n5 mV ~ 300 V\r\n50 mV ~ 300 V', '5.7 µHz/Hz\r\n0.67 mV/V\r\n0.31 mV/V', '2020-12-17 01:13:14', '2020-12-17 01:13:14'),
(73, '2', 'frekuensi dan Waktu', 'selective Level Meter', 'Frequency\r\nLevel\r\nFM Modulasi\r\nAM Modulasi', '200 Hz ~ 20 MHz\r\n-50 dBm ~ 20 dBm\r\n20 kHz ~ 50 kHz\r\n10 % ~ 90 % Mod', '1.9 nHz/Hz\r\n0.30 dB\r\n0.58 mHz/Hz\r\n0.92 % of reading', '2020-12-17 01:15:04', '2020-12-17 01:15:04'),
(74, '2', 'frekuensi dan Waktu', 'Bit Error Rate (BER) Tester', ' ', '64 bps ~ 140 Mbps', '1.9 Hz/Hz', '2020-12-17 01:15:37', '2020-12-17 01:15:37'),
(75, '4', 'kelistrikan', 'AC Current Source', 'f: 10 Hz ~ 5 kHz\r\nf: 45 Hz ~ 5 kHz', '100 µA ~ 1000 mA\r\n200 µA ~ 2000 mA', '1.0 mA/A\r\n6.0 mA/A', '2020-12-17 01:18:06', '2020-12-17 01:18:06'),
(76, '4', 'kelistrikan', 'DC Current Source', ' ', '100 µA ~ 1000 mA\r\n1 A ~ 2 A', '0.32 mA/A\r\n1.3 mA/A', '2020-12-17 01:18:53', '2020-12-17 01:18:53'),
(77, '4', 'kelistrikan', 'AC Amperemeter', 'f: 45 Hz ~ 1 kHz', '0.03 mA ~ 0.33 mA\r\n0.33 mA ~ 3.3 mA\r\n3.3 mA ~ 33 mA\r\n33 mA ~ 330 mA\r\n0.33 A ~ 2.2 A\r\n2.2 A ~ 11 A', '2.5 mA/A\r\n1.4 mA/A\r\n1.3 mA/A\r\n1.3 mA/A\r\n1.9 mA/A\r\n2.8 mA/A', '2020-12-17 01:20:56', '2020-12-17 01:20:56'),
(78, '4', 'kelistrikan', 'DC Amperemeter', ' ', '0.00001 mA ~ 3.3 mA\r\n3.3 mA ~ 330 mA\r\n0.33 A ~ 2.2 A\r\n2.2 A ~ 11 A', '0.21 mA/A\r\n0.16 mA/A\r\n1.3 mA/A\r\n2.7 mA/A', '2020-12-17 01:22:15', '2020-12-17 01:22:15'),
(79, '4', 'kelistrikan', 'AC Voltmeter', 'f: 45 Hz ~ 10 kHz', '1 mV ~ 33 mV\r\n33 mV ~ 330 mV', '2..5 mV/V\r\n0.69 mV/V ', '2020-12-17 01:23:15', '2020-12-17 01:23:15'),
(80, '4', 'kelistrikan', 'AC Voltmeter (Lanjutan)', 'f: 45 Hz ~ 10 kHz ', '0.33 V ~ 3.3 V\r\n3.3 V ~ 33 V\r\n33 V ~ 330 V\r\n330 V ~ 1020 V', '0.45 mV/V\r\n0.55 mV/V\r\n0.65 mV/V\r\n0.71 mV/V', '2020-12-17 01:24:33', '2020-12-17 01:24:33'),
(81, '4', 'kelistrikan', 'DC Voltmeter', ' ', '0 mV ~ 330 mV\r\n0.33 V ~ 3.3 V\r\n3.3 V ~ 33 V\r\n33 V ~ 330 V\r\n330 V ~ 1020 V', '0.08 mV/V\r\n0.06 mV/V\r\n0.06 mV/V\r\n0.07 mV/V\r\n0.07 mV/V', '2020-12-17 01:26:28', '2020-12-17 01:26:28'),
(82, '4', 'kelistrikan', 'AC Voltage Source', 'f: 10 Hz ~ 10 kHz', '10 mV ~ 1000 V', '0.24 mV/V ', '2020-12-17 01:29:24', '2020-12-17 01:29:24'),
(83, '4', 'kelistrikan', 'DC Voltage Source', ' ', '10 mV ~ 1000 V ', '13 mV/V ', '2020-12-17 01:30:08', '2020-12-17 01:30:08'),
(84, '4', 'kelistrikan', 'Ohmmeter Wheatstone Bridge', ' ', '0 Ω ~ 330 MΩ\r\n330 MΩ ~ 10 GΩ', '9.6 mΩ/Ω\r\n8.6 mΩ/Ω', '2020-12-17 01:31:36', '2020-12-17 01:31:36'),
(85, '4', 'kelistrikan', 'DC Resistor', ' ', '1 Ω ~ 100 MΩ', '2.3 mΩ/Ω ', '2020-12-17 01:32:44', '2020-12-17 01:32:44'),
(86, '4', 'kelistrikan', 'Capacitance Meter', ' ', '1 pF  ~ 1 µF\r\n1 µF ~ 1.1 mF', '2.9 mF/F\r\n3.0 mF/F ', '2020-12-17 01:33:49', '2020-12-17 01:33:49'),
(87, '4', 'frekuensi dan Waktu', 'Frequency Counter', ' ', '1 MHz ~ 5 MHz\r\n10 MHZ\r\n10 Hz ~ 100 kHz\r\n100 kHz ~ 9 MHz\r\n9 MHz ~ 26.5 MHz', '0.28 nHz/Hz\r\n1.2 nHz/Hz\r\n28 µHz/Hz\r\n0.28 nHz/Hz\r\n1.2 nHz/Hz', '2020-12-17 01:35:43', '2020-12-17 01:35:43'),
(88, '4', 'frekuensi dan Waktu', 'Osciloscope', ' ', '1 mV ~ 130 V\r\n5 s ~ 2 ns ', '1.2 nV/V\r\n36 µS/S ', '2020-12-17 01:36:29', '2020-12-17 01:36:29'),
(89, '4', 'frekuensi dan Waktu', 'Signal Generator', ' ', '-70 dBm ~ -20 dBm\r\n10 Hz ~ 26.5 GHz\r\n1 MHz; 5 MHz; 10 MHz ', '0.35 dB\r\n1.2 nHz/Hz\r\n1.2 nHz/Hz', '2020-12-17 01:37:41', '2020-12-17 01:37:41'),
(90, '4', 'frekuensi dan Waktu', 'Spectrum Analyzer', 'Frequency\r\nLevel\r\nFrequency\r\nLevel\r\nFrequency\r\nFrequency\r\nLevel', '10 MHz ~ 26.5 GHz\r\n-110 dBm ~ 20 dBm\r\n9 kHz ~ 3.2 GHz\r\n-136 dBm ~ 10 dBm\r\n1 MHz; 5 MHz; 10 MHz\r\n10 Hz ~ 26.5 GHz\r\n-70 dBm ~ 20 dBm', '3.1 nHz/Hz\r\n1.2 dB\r\n3.1 nHz/Hz\r\n1.2 dB\r\n3.1 nHz/Hz\r\n3.1 nHz/Hz\r\n0.35 dB', '2020-12-17 01:41:05', '2020-12-17 01:41:05'),
(91, '4', 'frekuensi dan Waktu', 'Bit Error Rate (BER) Tester', 'Frequency\r\nFrequency\r\nDC Voltage', '1 MHz; 5 MHz; 10 MHz\r\n10 Hz ~ 26 GHz\r\n0.1 mV ~ 250 V', '3.1 nHz/Hz\r\n3.1 nHz/Hz\r\n18 mV/V', '2020-12-17 01:44:02', '2020-12-17 01:44:02'),
(92, '4', 'frekuensi dan Waktu', 'Powermeter, Power Attenuator', 'Frequency\r\nLevel\r\nFrequency\r\nLevel ', '10 MHz ~ 26.5 GHz\r\n-110 dBm  ~ 20 dBm\r\n10 Hz ~ 26.5 GHz\r\n-70 dBm ~ 20 dBm', '3.1 nHz/Hz\r\n1.2 dB\r\n3.1 nHz/Hz\r\n0.35 dB', '2020-12-17 01:45:48', '2020-12-17 01:45:48'),
(93, '4', 'frekuensi dan Waktu', 'TIMS/TTS Level Meter', 'Level\r\nFrequency\r\nLevel ', '-70 dBm ~ 13 dBm\r\n20 Hz ~ 110 Hz\r\n-40 dBm  ~ 13 dBm', '0.25 dB\r\n15 µHz/Hz\r\n0.25 dB', '2020-12-17 01:47:20', '2020-12-17 01:47:20'),
(94, '4', 'frekuensi dan Waktu', 'Level Measurement Test', 'Level\r\nFrequency\r\nLevel ', '-70 dBm ~ 9 dBm\r\n50 Hz ~ 32 MHz\r\n-40 dBm ~ 13 dBm  ', '0.51 dB\r\n2.4 µHz/Hz\r\n0.46 dB ', '2020-12-17 01:50:17', '2020-12-17 01:50:17'),
(95, '3', 'kelistrikan', 'AC Current Source', 'f: 10 Hz ~ 1 kHz\r\n\r\nf: 1 kHz ~ 10 kHz ', ' 0.01 mA ~ 1 A\r\n1 A ~ 10 A\r\n0.01 mA ~ 1 A\r\n1 A ~ 10 A', '0.74 mA/A\r\n1.6 mA/A\r\n0.08 mA/A\r\n2.6 mA/A ', '2020-12-17 01:52:01', '2020-12-17 01:52:01'),
(96, '3', 'kelistrikan', 'DC Current Source', ' ', '0.1 mA ~ 2.2 A\r\n2.2 A ~ 10 A ', '0.22 mA/A\r\n0.69 mA/A ', '2020-12-17 01:53:32', '2020-12-17 01:53:32'),
(97, '3', 'kelistrikan', 'AC Amperemeter', 'f: 40 Hz ~ 1 kHz\r\n\r\nf: 1 kHz ~ 10 kHz\r\n ', '0.01 mA ~ 2.2 A\r\n2.2 A ~ 10 A\r\n0.01 mA ~ 2.2 A\r\n2.2 A ~ 10 A ', '0.69 mA/A\r\n0.74 mA/A\r\n5.8 mA/A\r\n1.0 mA/A ', '2020-12-17 01:55:04', '2020-12-17 01:55:04'),
(98, '3', 'kelistrikan', 'DC Amperemeter', ' ', '0.01 mA ~ 2.2 A\r\n2.2 A ~ 10 A ', '0.16 mA/A\r\n0.67 mA/A ', '2020-12-17 01:55:55', '2020-12-17 01:55:55'),
(99, '3', 'kelistrikan', 'AC Clampmeter', 'f: 20 Hz ~ 10 kHz', '10 A ~ 1000 A ', '2.9 mA/A ', '2020-12-17 01:56:39', '2020-12-17 01:56:39'),
(100, '3', 'kelistrikan', 'DC Clampmeter', ' ', '10 A ~ 1000 A', '4.5 mA/A ', '2020-12-17 01:57:19', '2020-12-17 01:57:19'),
(101, '3', 'kelistrikan', 'AC Voltage Source', 'f: 20 Hz ~ 20 kHz\r\nf: 20 Hz ~ 100 kHz', '0.001 V ~ 1100 V\r\n0.001 V ~ 1100 V ', '0.25 mV/V\r\n0.90 mV/V ', '2020-12-17 01:58:39', '2020-12-17 01:58:39'),
(102, '3', 'kelistrikan', 'DC Voltage Source', ' ', '0.01 mV ~ 0.1 V\r\n0.1 V  ~ 100 V\r\n100 V ~ 1100 V', '67 mV/V\r\n0.027 mV/V\r\n0.29 mV/V ', '2020-12-17 02:00:28', '2020-12-17 02:00:28'),
(103, '3', 'kelistrikan', 'AC Voltmeter', 'f: 20 Hz ~ 20 kHz\r\nf: 20 Hz ~ 100 kHz ', '0.0022 V ~ 1100 V\r\n0.0022 V ~ 1100 V ', '0.5 mV/V\r\n1.5 mV/V ', '2020-12-17 02:02:16', '2020-12-17 02:02:16'),
(104, '3', 'kelistrikan', 'DC Voltmeter', ' ', '0.0022 V ~ 1100 V ', '0.62 mV/V ', '2020-12-17 02:02:53', '2020-12-17 02:02:53'),
(105, '3', 'kelistrikan', 'DC High Voltage Source', ' ', '0.1 kV ~ 10 kV ', '48 mV/V ', '2020-12-17 02:03:25', '2020-12-17 02:03:25'),
(106, '3', 'kelistrikan', 'AC High Voltage Source', 'f: 50 Hz ', '0.1 kV ~ 10 kV ', '36 mV/V ', '2020-12-17 02:03:57', '2020-12-17 02:03:57'),
(107, '3', 'kelistrikan', 'Standar Resistor', ' ', '1  Ω\r\n10 Ω\r\n0.1 kΩ ~ 100 kΩ\r\n10 MΩ\r\n100 MΩ', '0.043 mΩ/Ω\r\n0.044 mΩ/Ω\r\n0.053 mΩ/Ω\r\n0.073 mΩ/Ω\r\n5.8 mΩ/Ω', '2020-12-17 02:05:16', '2020-12-17 02:05:16'),
(108, '3', 'kelistrikan', 'Ohmmeter', ' ', '1 mΩ ~ 1 Ω\r\n1 Ω ~ 100 kΩ\r\n100 kΩ ~ 10 MΩ\r\n10 MΩ ~ 100 MΩ', '0.17 mΩ/Ω\r\n0.06 mΩ/Ω\r\n0.06 mΩ/Ω\r\n0.14 mΩ/Ω', '2020-12-17 02:06:26', '2020-12-17 02:06:26'),
(109, '3', 'kelistrikan', 'Megaohm Tester, Insulation Tester', ' ', '100 MΩ ~ 1 GΩ\r\n1 GΩ ~ 10 GΩ', '1.5 mΩ/Ω\r\n2.5 mΩ/Ω', '2020-12-17 02:08:08', '2020-12-17 02:08:08'),
(110, '3', 'kelistrikan', 'Wheatstone Bridge, Earth Tester, Surge Protector', ' ', '0.01 mΩ ~ 100 MΩ', '2.6 mΩ/Ω', '2020-12-17 02:08:45', '2020-12-17 02:08:45'),
(111, '3', 'kelistrikan', 'Standard Capacitor', 'f: 1 kHz', '1 pF ~ 1 mF', '0.62 mF/F', '2020-12-17 02:09:28', '2020-12-17 02:09:28'),
(112, '3', 'kelistrikan', 'Decade Capacitor', 'f: 1 kHz', '1 pF ~ 1 mF ', '0.62 mF/F ', '2020-12-17 02:10:21', '2020-12-17 02:10:21'),
(113, '3', 'kelistrikan', 'Capacitance Meter', 'f: 100 Hz ~ 1 kHz', '1 pF\r\n10 pF\r\n100 pF\r\n`1 µF\r\n10 µF\r\n100 µF', '0.15 pF/F\r\n0.17 pF/F\r\n0.92 pF/F\r\n0.31 nF/F\r\n0.10 µF/F\r\n0.11 µF/F', '2020-12-17 02:12:45', '2020-12-17 02:12:45'),
(114, '3', 'kelistrikan', 'Standar Inductor', 'f: 1 kHz ', '1 µH ~ 10 H ', '3.4 mH/H ', '2020-12-17 02:13:45', '2020-12-17 02:13:45'),
(115, '3', 'kelistrikan', 'Decade Inductor', 'f: 1 kHz ', '1 µH ~ 10 H ', '3.4 mH/H ', '2020-12-17 02:14:21', '2020-12-17 02:14:21'),
(116, '3', 'kelistrikan', 'Inductance Meter', ' ', '100 µH\r\n1 mH\r\n10 mH', '5.7 mH/H\r\n0.057 mH/H\r\n0.094 mH/H ', '2020-12-17 02:15:15', '2020-12-17 02:15:15'),
(117, '3', 'kelistrikan', 'Inductance Meter (lanjutan)', ' ', '100 mH\r\n1 H\r\n10 H ', '0.95 mH/H\r\n9.5 mH/H\r\n96 mH/H ', '2020-12-17 02:16:25', '2020-12-17 02:16:25'),
(118, '3', 'kelistrikan', 'DC Powermeter', ' ', '0.1 VA ~ 11 kVA ', '1.04 mVA/VA ', '2020-12-17 02:17:02', '2020-12-17 02:17:02'),
(119, '3', 'kelistrikan', 'AC Powermeter', 'f: 40 Hz ~ 1 kHz', '0.1 VA ~ 11 kVA ', '0.95 mVA/VA ', '2020-12-17 02:17:50', '2020-12-17 02:17:50'),
(120, '3', 'frekuensi dan Waktu', 'Frequency Counter, Universal Time Counter, Microwave Frequency Counter', ' ', '10 Hz ~ 26.5 GHz', '0.017 µHz/Hz ', '2020-12-17 02:18:44', '2020-12-17 02:18:44'),
(121, '3', 'frekuensi dan Waktu', 'RF Oscillator', 'Frequency\r\nLevel\r\nf: 500 kHz ~ 8.9 GHz\r\nf: 9 GHz ~ 12.3 GHz\r\nf: 12.4 GHz ~ 15.9 GHz\r\nf: 16 GHz ~ 18 GHz\r\nf: 18 GHz ~ 26.5 GHz', '10 Hz ~ 26.5 GHz\r\n\r\n-110 dBm ~ 20 dBm\r\n-110 dBm ~ 20 dBm\r\n-110 dBm ~ 20 dBm\r\n-110 dBm ~ 20 dBm\r\n-110 dBm ~ 20 dBm ', ' 0.016 µHz/Hz\r\n\r\n0.29 dB\r\n0.43 dB\r\n0.43 dB\r\n0.44 dB\r\n0.44 dB', '2020-12-17 02:21:52', '2020-12-17 02:21:52'),
(122, '3', 'frekuensi dan Waktu', 'Function Generator, Pulse Generator', 'Frequency\r\nAC Voltage ', '100 Hz ~ 100 MHz\r\n0.02 V ~ 30 V ', '17 nHz/Hz\r\n5.8 nV/V ', '2020-12-17 02:22:49', '2020-12-17 02:22:49'),
(123, '3', 'frekuensi dan Waktu', 'Synth Signal Generator, Synth Sweeper', ' Frequency', '10 MHz ~ 26.5 GHz  ', ' 16 nHz/Hz', '2020-12-17 02:24:07', '2020-12-17 02:24:07'),
(124, '3', 'frekuensi dan Waktu', 'Synth Signal Generator, Synth Sweeper (lanjutan)', 'Level\r\nf: 500 kHz ~ 8.9 GHz\r\nf: 9 GHz ~ 12.3 GHz\r\nf: 12.4 GHz ~ 15.9 GHz\r\nf: 16 GHz ~ 18 GHz\r\nf: 18 GHz ~ 26.5 GHz', ' \r\n-110 dBm ~ 20 dBm\r\n-110 dBm ~ 20 dBm\r\n-110 dBm ~ 20 dBm\r\n-110 dBm ~ 20 dBm\r\n-110 dBm ~ 20 dBm', ' \r\n0.36 dB\r\n0.37 dB\r\n0.37 dB\r\n0.38 dB\r\n0.38 dB', '2020-12-17 02:26:29', '2020-12-17 02:26:29'),
(125, '3', 'frekuensi dan Waktu', 'AM/FM Signal Generator', 'Frequency\r\nLevel\r\nf: 500 kHz ~ 8.9 GHz\r\nf: 9 GHz ~ 12.3 GHz\r\nf: 12.4 GHz ~ 15.9 GHz\r\nf: 16 GHz ~ 18 GHz\r\nf: 18 GHz ~ 26.5 GHz \r\nAM Modulation\r\nFM Modulation', ' 10 MHz ~ 26.5 GHz\r\n\r\n-110 dBm ~ 20 dBm\r\n-110 dBm ~ 20 dBm\r\n-110 dBm ~ 20 dBm\r\n-110 dBm ~ 20 dBm\r\n-110 dBm ~ 20 dBm\r\n1 %mod ~ 100 %mod\r\n2 kHz ~ 200 kHz', '16 nHz/Hz\r\n\r\n0.41 dB\r\n0.41 dB\r\n0.41 dB\r\n0.41 dB\r\n0.41 dB\r\n1.4 % of reading\r\n1.4 % of reading ', '2020-12-17 02:29:48', '2020-12-17 02:29:48'),
(126, '3', 'frekuensi dan Waktu', 'RF Power Meter', 'Level f: 10 MHz ~ 26.5 GHz\r\nLevel f: 14 GHz ~ 18 GHz ', '-70 dBm ~ 20 dBm\r\n0 dB ~ 110 dB ', '0.51 dB\r\n0.47 dB ', '2020-12-17 02:31:13', '2020-12-17 02:31:13'),
(127, '3', 'frekuensi dan Waktu', 'RF Attenuator, RF Step Attenuator', 'f: 500 KHz ~ 8.9 GHz\r\nf: 9 GHz ~ 12.3 GHz', '0 dB ~ 110 dB\r\n0 dB ~ 110 dB', '0.47 dB\r\n0.48 dB ', '2020-12-17 02:32:45', '2020-12-17 02:32:45'),
(128, '3', 'frekuensi dan Waktu', 'RF Attenuator, RF Step Attenuator (lanjutan)', 'f: 12.4 GHz ~ 15.9 GHz\r\nf: 16 GHz ~ 18 GHz ', '0 dB ~ 110 dB\r\n0 dB ~ 110 dB ', '0.48 dB\r\n0.49 dB ', '2020-12-17 03:24:35', '2020-12-17 03:24:35'),
(129, '3', 'frekuensi dan Waktu', 'Distortion Analyzer, Distortion Meter', 'Distotion\r\nAC Voltage', '0.1 %mod ~ 30 %mod\r\n0.05 V ~ 30 V ', '0.12 %\r\n5.7 mV/V ', '2020-12-17 03:26:23', '2020-12-17 03:26:23'),
(130, '3', 'frekuensi dan Waktu', 'Modulation Analyzer, Modulation Meter', 'Carrier freq: 100 kHz ~ 18 GHz\r\nmod. freq: 100 kHz ~ 18 GHz\r\nAM Modulation\r\nFM Modulation ', ' \r\n \r\n0.1 %mod ~ 30 %mod\r\n2 kHz ~ 200 kHz', '1.7 %\r\n1.7 % ', '2020-12-17 03:27:50', '2020-12-17 03:27:50'),
(131, '3', 'frekuensi dan Waktu', 'Spectrum Analyzer', 'Frequency\r\nLevel ', '10 MHz ~ 26.5 GHz\r\n-100 dBm ~ 20 dBm ', '60 nHz/Hz\r\n0.41 dB ', '2020-12-17 03:28:59', '2020-12-17 03:28:59'),
(132, '3', 'frekuensi dan Waktu', 'Audio Analyzer', 'Frequency\r\nAC Voltage\r\nDistortion ', '0.02 kHz ~ 100 kHz\r\n0.05 V  ~ 30 V\r\n0.1 %mod ~ 30 %mod', '57  µHz/Hz\r\n1.01 µV/V\r\n0.07 mV/V', '2020-12-17 03:30:53', '2020-12-17 03:30:53'),
(133, '3', 'frekuensi dan Waktu', 'Network Analyzer, Site master', 'Frequency\r\nLevel ', '10 mHz ~ 26.5 GHz\r\n-100 dBm ~ 20 dBm ', '0.57 nHz/Hz\r\n0.41 dB ', '2020-12-17 03:31:56', '2020-12-17 03:31:56'),
(134, '3', 'frekuensi dan Waktu', 'Osciloscope', 'Vertical Deflection (V/div)\r\nHorizontal Deflection (Time/div)\r\nVertical Flatness (ACV) ', '0.01 V ~ 220 V\r\n1E-09 s ~ 5 s\r\n10 mV ~ 5.5. V ', '5.7 mV/V\r\n1.9 ms/s\r\n5.7 mV/V ', '2020-12-17 03:33:59', '2020-12-17 03:33:59'),
(135, '3', 'frekuensi dan Waktu', 'Bit Error Rate (BER) Tester', 'Rate\r\nAmplitude ', '0.704 Mbps ~ 140 Mbps\r\n0.7 V ~ 3 V ', '17 nHz/Hz\r\n8.2 mV/V ', '2020-12-17 03:35:04', '2020-12-17 03:35:04');

-- --------------------------------------------------------

--
-- Table structure for table `slides`
--

CREATE TABLE `slides` (
  `slide_id` int(10) UNSIGNED NOT NULL,
  `slide_judul` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slide_gambar_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slide_gambar_en` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slide_link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `slides`
--

INSERT INTO `slides` (`slide_id`, `slide_judul`, `slide_gambar_id`, `slide_gambar_en`, `slide_link`, `created_at`, `updated_at`) VALUES
(15, 'slide 1', 'slideid_slide 1.png', 'slideen_slide 1.png', '/fiberoptic', '2021-01-05 18:01:24', '2021-01-05 18:01:24');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `alamat` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `no_hp` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_perusahaan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `alamat`, `no_hp`, `email`, `email_verified_at`, `password`, `nama_perusahaan`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', '', '', 'admin@awanlab.com', NULL, '$2y$10$8yUTTf8cFJXp0e862FH14.zjN4jnUqHzurzqiKpT55qOd1fnh3Pba', '', NULL, '2020-12-01 07:09:19', '2020-12-01 07:09:19'),
(2, 'customer', '', '', 'customer@awanlab.com', NULL, '$2y$10$WaIxAwKUToiu5A9VYllbNO9AZPuZtZ/GowDQLsuHckbGY96Jrf4HS', '', NULL, '2020-12-01 07:09:19', '2020-12-01 07:09:19'),
(4, 'Eko Nurwayudi', '', '', 'eko@awanlab.com', '2021-01-07 21:10:53', '$2y$10$w.l62VPZX3rOLVVchxt.xet3jmxW6RQ00ZjDZWTz0O.yrfbzQP8wG', '', NULL, '2020-12-01 07:42:05', '2020-12-01 07:42:05');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `artikels`
--
ALTER TABLE `artikels`
  ADD PRIMARY KEY (`artikel_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `faqs`
--
ALTER TABLE `faqs`
  ADD PRIMARY KEY (`faq_id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`feedback_id`);

--
-- Indexes for table `konsultasis`
--
ALTER TABLE `konsultasis`
  ADD PRIMARY KEY (`konsultasi_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`model_id`,`model_type`),
  ADD KEY `model_has_permissions_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD PRIMARY KEY (`role_id`,`model_id`,`model_type`),
  ADD KEY `model_has_roles_model_id_model_type_index` (`model_id`,`model_type`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `permissions`
--
ALTER TABLE `permissions`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `perusahaans`
--
ALTER TABLE `perusahaans`
  ADD PRIMARY KEY (`id_perusahaan`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD PRIMARY KEY (`permission_id`,`role_id`),
  ADD KEY `role_has_permissions_role_id_foreign` (`role_id`);

--
-- Indexes for table `ruanglingkups`
--
ALTER TABLE `ruanglingkups`
  ADD PRIMARY KEY (`ruanglingkup_id`);

--
-- Indexes for table `slides`
--
ALTER TABLE `slides`
  ADD PRIMARY KEY (`slide_id`);

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
-- AUTO_INCREMENT for table `artikels`
--
ALTER TABLE `artikels`
  MODIFY `artikel_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `faqs`
--
ALTER TABLE `faqs`
  MODIFY `faq_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `feedback_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `konsultasis`
--
ALTER TABLE `konsultasis`
  MODIFY `konsultasi_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `permissions`
--
ALTER TABLE `permissions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `perusahaans`
--
ALTER TABLE `perusahaans`
  MODIFY `id_perusahaan` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ruanglingkups`
--
ALTER TABLE `ruanglingkups`
  MODIFY `ruanglingkup_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=136;

--
-- AUTO_INCREMENT for table `slides`
--
ALTER TABLE `slides`
  MODIFY `slide_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `model_has_permissions`
--
ALTER TABLE `model_has_permissions`
  ADD CONSTRAINT `model_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `model_has_roles`
--
ALTER TABLE `model_has_roles`
  ADD CONSTRAINT `model_has_roles_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `role_has_permissions`
--
ALTER TABLE `role_has_permissions`
  ADD CONSTRAINT `role_has_permissions_permission_id_foreign` FOREIGN KEY (`permission_id`) REFERENCES `permissions` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `role_has_permissions_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
