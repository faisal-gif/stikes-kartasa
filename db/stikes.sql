-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 29 Okt 2023 pada 17.47
-- Versi server: 10.4.28-MariaDB
-- Versi PHP: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `stikes`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `berita`
--

CREATE TABLE `berita` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `cover` varchar(255) NOT NULL,
  `judul` varchar(255) NOT NULL,
  `isi` longtext NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `dosen`
--

CREATE TABLE `dosen` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `img` varchar(255) DEFAULT NULL,
  `nama` varchar(255) NOT NULL,
  `nip` varchar(255) NOT NULL,
  `pendidikan` varchar(255) DEFAULT NULL,
  `jurusan` varchar(255) DEFAULT NULL,
  `linkedln` varchar(255) DEFAULT NULL,
  `facebook` varchar(255) DEFAULT NULL,
  `twiter` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `dosen`
--

INSERT INTO `dosen` (`id`, `img`, `nama`, `nip`, `pendidikan`, `jurusan`, `linkedln`, `facebook`, `twiter`, `created_at`, `updated_at`) VALUES
(3, '1698241475_Rahma Diyan Martha.jpg', 'Rahma Diyan Martha, SSi., M.Sc', '19910124', 's2', 'farmasi', NULL, NULL, NULL, '2023-10-25 06:44:35', '2023-10-29 09:26:36'),
(4, '1698241526_Reni Rizkyana.jpg', 'Reny Rizkyana, Amd, Farm', '17920111', NULL, NULL, NULL, NULL, NULL, '2023-10-25 06:45:26', '2023-10-25 06:45:26'),
(5, '1698241594_Mutia Hariani.jpg', 'Mutia Hariani N., S.Tr, M.Imun', '17840112', 's2', 'tlm', NULL, NULL, NULL, '2023-10-25 06:46:34', '2023-10-29 09:31:48'),
(6, '1698241664_Afidatul Muadifah.jpg', 'Afidatul Muadifah, S.Si., M.Si., MSc', '18910116', 's2', 'farmasi', NULL, NULL, NULL, '2023-10-25 06:47:44', '2023-10-29 09:25:13'),
(7, '1698241718_Novintan Alistya Dyah.jpg', 'Novintan Alistya Dyah P.,S. Tr.A.K', '15920105', NULL, NULL, NULL, NULL, NULL, '2023-10-25 06:48:38', '2023-10-25 06:48:38'),
(8, '1698241759_Amalia Eka Putri.jpg', 'Amalia Eka Putri M.Farm,.Apt', '17920109', 's2', 'farmasi', NULL, NULL, NULL, '2023-10-25 06:49:19', '2023-10-29 09:26:49'),
(9, '1698241908_Fatimah.jpg', 'Fatimah, S.Si., M. Biotech', '19900127', 's2', 'tlm', NULL, NULL, NULL, '2023-10-25 06:51:48', '2023-10-29 09:35:56'),
(10, '1698241996_Dyah Retno.jpg', 'Dyah Retno, S.Farm', '16940110', 'tenaga_pendidik', NULL, NULL, NULL, NULL, '2023-10-25 06:53:16', '2023-10-29 09:33:56'),
(11, '1698242053_Nurul Chamidah Kumalasari.jpg', 'Nurul Chamidah Kumalasari. AMAK., ST', '19739123', 's2', 'tlm', NULL, NULL, NULL, '2023-10-25 06:54:13', '2023-10-29 09:30:20'),
(12, '1698242090_Nur Faizah.jpg', 'Nur Faizah, A.md', '16870107', NULL, NULL, NULL, NULL, NULL, '2023-10-25 06:54:50', '2023-10-25 06:54:50'),
(13, '1698242158_Astri Narumalina.jpg', 'Astri Narumalina, Amd.', '16780209', 'tenaga_pendidik', NULL, NULL, NULL, NULL, '2023-10-25 06:55:58', '2023-10-29 09:33:31'),
(14, '1698242195_Tri Anita Sari.jpg', 'Tri Anita Sari S.Farm.Apt', '15860103', 's2', 'farmasi', NULL, NULL, NULL, '2023-10-25 06:56:35', '2023-10-29 09:29:46'),
(15, '1698242231_Retno Winarni.jpg', 'Retno Winarni, ST', '15750106', 'tenaga_pendidik', NULL, NULL, NULL, NULL, '2023-10-25 06:57:11', '2023-10-29 09:34:09'),
(16, '1698242310_Pristy Okta Nila Saputri.jpg', 'Pristy Okta Nila Saputri, Amd.AK', '18960128', 'tenaga_pendidik', NULL, NULL, NULL, NULL, '2023-10-25 06:58:30', '2023-10-29 09:34:24'),
(17, '1698242349_Arif Santosa.jpg', 'Arif Santosa, S. Farm., Apt', '16860104', 'tenaga_pendidik', 'farmasi', NULL, NULL, NULL, '2023-10-25 06:59:09', '2023-10-29 09:24:46'),
(18, '1698242382_Anugrah Widiasari.jpg', 'Anugrah Widiasari, S.Kom', '17920207', 'tenaga_pendidik', NULL, NULL, NULL, NULL, '2023-10-25 06:59:42', '2023-10-29 09:32:47'),
(19, '1698242572_Choirul Huda.jpg', 'Choirul Huda, S.Farm., Apt', '15850101', 's2', 'farmasi', NULL, NULL, NULL, '2023-10-25 07:02:52', '2023-10-29 09:29:24'),
(20, '1698242614_Dana Pranidyatilarso.jpg', 'Dara Pranidyatilarso S, Farm.m, Apt', '18890115', 's2', 'farmasi', NULL, NULL, NULL, '2023-10-25 07:03:34', '2023-10-29 09:29:06'),
(21, '1698242657_Yunita Diyah Safitri.jpg', 'Yunita Diyah Safitri, SSi., M.Si', '19930126', 's2', 'tlm', NULL, NULL, NULL, '2023-10-25 07:04:17', '2023-10-29 09:30:49'),
(22, '1698242694_Sri Hartatik.jpg', 'Sri Hartatik, S.I.Pus', '05720205', NULL, NULL, NULL, NULL, NULL, '2023-10-25 07:04:54', '2023-10-25 07:04:54');

-- --------------------------------------------------------

--
-- Struktur dari tabel `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `kalender_akademik`
--

CREATE TABLE `kalender_akademik` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `img` varchar(255) NOT NULL,
  `file` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2023_10_02_021450_create_berita_table', 1),
(7, '2023_10_17_045527_create_dosen_table', 1),
(8, '2023_10_17_072103_create_prestasi_table', 1),
(9, '2023_10_17_102715_create_kalender_akademik_table', 1);

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `prestasi`
--

CREATE TABLE `prestasi` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `keterangan` varchar(255) DEFAULT NULL,
  `lampiran` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', NULL, '$2y$10$EeMPKQGSPbulC5BAgDaB3eDSLUf4USIxgpj/gG.U3.A3V0v3zBeki', NULL, '2023-10-22 23:25:48', '2023-10-22 23:25:48');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `berita`
--
ALTER TABLE `berita`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `dosen`
--
ALTER TABLE `dosen`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `kalender_akademik`
--
ALTER TABLE `kalender_akademik`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indeks untuk tabel `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indeks untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indeks untuk tabel `prestasi`
--
ALTER TABLE `prestasi`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `berita`
--
ALTER TABLE `berita`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `dosen`
--
ALTER TABLE `dosen`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `kalender_akademik`
--
ALTER TABLE `kalender_akademik`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `prestasi`
--
ALTER TABLE `prestasi`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
