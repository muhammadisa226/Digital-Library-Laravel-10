-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 23 Jul 2023 pada 05.19
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
-- Database: `db_digitallibrary`
--
CREATE DATABASE IF NOT EXISTS `db_digitallibrary` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;
USE `db_digitallibrary`;

-- --------------------------------------------------------

--
-- Struktur dari tabel `books`
--

CREATE TABLE `books` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `amount` int(11) NOT NULL,
  `cover` varchar(255) NOT NULL,
  `filebook` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `books`
--

INSERT INTO `books` (`id`, `title`, `category_id`, `user_id`, `amount`, `cover`, `filebook`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Developing 2D Games With Unity', 4, 2, 12, 'cover-images/jDidigVzWspcHM83dKSDS7vEt4TxemUWRBCNC7fO.jpg', 'filebook/ywQdB0BnMBtnv0uOOix14i4t2NsBZyCcLOUBYXzR.pdf', 'My video game “history” started in the public library when I discovered a series of beat-up, paperback books with titles resembling, “How to Write Your Own Computer Games in BASIC.” By copying code from the book into an editor, I was able to create rudimentary adventure games.', '2023-07-22 13:35:22', '2023-07-22 13:35:55'),
(2, 'MATLAB Object-Oriented Programming', 4, 2, 1, 'cover-images/sOEiz7cl2hnNW2wLA5OIQKl6KWnXgyB12x6hHZMw.jpg', 'filebook/u8TeRTpiyLt0S3MB6pSSE39urDIpAW0wscwSWPIz.pdf', 'Creating software applications typically involves designing the application data and implementing operations performed on that data. Procedural programs pass data to functions, which perform the necessary operations on the data.', '2023-07-22 13:37:42', '2023-07-22 13:37:42'),
(3, 'Adventures Of Huckleberry Finn', 1, 2, 2, 'cover-images/EgehxgrE2JFZbFmZwSXDiXkxY6FlUkedg3vtJO1o.jpg', 'filebook/zflJ4lns0kcuJvYej8Jeq7TbUBslI5YI2QQM75xT.pdf', 'The drifting journey of Huck and his friend Jim, a runaway slave, down the Mississippi River on their raft may be one of the most enduring images of escape and freedom in all of American literature. Although the society it satirized was already history at the time of publication, the book was quite controversial, and has remained so to this day.', '2023-07-22 13:38:46', '2023-07-22 13:38:46'),
(4, 'Handbook Of Medicinal Herbs', 2, 2, 1, 'cover-images/P3Fo1BiwJgPYEHzBARiIUnUvOyndbP4NMJfUrztW.jpg', 'filebook/KY1pqdwuAzviFI1PLzDvkfcTmnnZMn7rtJpdSQWU.pdf', 'Introduction By the time this second edition is published, the first edition of the Handbook of Medicinal Herbs will have been out more than 15 years. The second edition is designed to present most of the old information plus new information on the more important of those original 365 herbs.', '2023-07-22 13:44:38', '2023-07-22 13:44:38'),
(5, 'Abs Diet Cookbook', 2, 3, 3, 'cover-images/oMfUGQcdoG4erxfzk4FuzUmpTQkcqa2ggtqMuE1R.jpg', 'filebook/mlMzlO2IXoeVcTHMpLnkiGjVeTUG6ZxvAvK35h3X.pdf', 'THIS IS NOT YOUR standard cookbook. A simple flip through the following pages will tell you that. Among the words you will not find in these pages: au jus, glacée, ragout, béchamel, bouquet garni, and coq au vin. Among the words you will find in the following pages: lean, abs, strong, fit, healthy, body.', '2023-07-22 13:46:19', '2023-07-22 13:46:19'),
(6, 'The Count Of Monte Cristo', 1, 3, 5, 'cover-images/BqeoICqSwPpPkpcokstw1DxxC9gvU7DEz48LFVUI.jpg', 'filebook/swQuCJM3EdfDyRC5CnvjXGKeZ96mr81enCPV3g7n.pdf', 'A classic adventure novel, often considered Dumas\' best work, and frequently included on lists of the best novels of all time. Completed in 1844, and released as an 18-part series over the next two years, Dumas collaborated with other authors throughout. The story takes place in France, Italy, and the Mediterranean from the end of the rule of Napoleon I through the reign of Louis-Philippe.', '2023-07-22 13:48:06', '2023-07-22 13:48:06'),
(7, 'Antonina Or, The Fall Of Rome', 3, 4, 1, 'cover-images/RPZxtqO6iwKGn7WfT0mmw7t5astLF0pcYtsfjh0H.jpg', 'filebook/ukdii0FybwHN3hibAWCHI1yCVqemZYwXHf0Sn072.pdf', 'A romance of the fifth century, in which many of the scenes described in the \'Decline and Fall of the Roman Empire \' are reset to suit the purpose of the author. Only two historical personages are introduced into the story,— the Emperor Honorius, and Alaric the Goth; and these attain only a secondary importance. Among the historical incidents used are the arrival of the Goths at the gates of Rome, the Famine, the last efforts of the besieged, the Treaty of Peace, the introduction of the Dragon of Brass, and the collection of the ransom most of these accounts being founded on the chronicles of Zosimus.', '2023-07-22 13:52:09', '2023-07-22 13:52:09'),
(8, 'Web Animation Using JavaScript', 4, 4, 4, 'cover-images/aEWm4d70FH91LKYmdgalkP954yxOlk4gXkqVKdE0.jpg', 'filebook/64V7HsMiIxlK12jKkgfI30DiV3RtYniM6Af14zSE.pdf', 'In the early days of the web, animation was primarily used by novice developers as a last-ditch effort to call attention to important parts of a page. And even if they wanted animation to transcend its niche, it couldn’t: browsers (and computers) were simply too slow to deliver smooth web-based animation. We’ve come a long way since the days of flashing banner ads, scrolling news tickers, and Flash intro videos.', '2023-07-22 13:53:32', '2023-07-22 13:53:32');

-- --------------------------------------------------------

--
-- Struktur dari tabel `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `categories`
--

INSERT INTO `categories` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Adventure', '2023-07-22 13:33:13', '2023-07-22 13:33:13'),
(2, 'Health', '2023-07-22 13:33:19', '2023-07-22 13:33:19'),
(3, 'History', '2023-07-22 13:33:25', '2023-07-22 13:33:25'),
(4, 'Programming', '2023-07-22 13:33:31', '2023-07-22 13:33:31');

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
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_07_19_235553_create_books_table', 1),
(6, '2023_07_20_015805_create_categories_table', 1);

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
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `role`, `created_at`, `updated_at`) VALUES
(1, 'Administrator', 'admin@admin.com', '$2y$10$AyVQwbgADtpCz9pjfh/bpOR4OtOdoOg6Pmn4xZPjsXxASHNapCLSa', 'admin', '2023-07-22 13:31:39', '2023-07-22 13:31:39'),
(2, 'Muhammad Isa Nuruddin', 'muhammadisa226@gmail.com', '$2y$10$2lAOaGUNmGMtO7DsEtKxT.VvhuUSEbgs6EDyZyKxmCKRdPwgVSJQW', 'user', '2023-07-22 13:32:11', '2023-07-22 13:32:11'),
(3, 'Faisal Ali M', 'faisalali2858@gmail.com', '$2y$10$Hh6UdfeYK/W2oj6IHiNTSu7vU4uEUIbVU9SS4ok2SBEZCN0kWRd2C', 'user', '2023-07-22 13:32:22', '2023-07-22 13:32:22'),
(4, 'Fajar Sidiq', 'fajarfc27@gmail.com', '$2y$10$PCRgE9o5HIC1/Sw9PCRKuejwvoPO9QP5vwu14px4P23X1RNMT3kBG', 'user', '2023-07-22 13:32:31', '2023-07-22 13:32:31');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indeks untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indeks untuk tabel `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

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
-- Indeks untuk tabel `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `books`
--
ALTER TABLE `books`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT untuk tabel `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT untuk tabel `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT untuk tabel `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT untuk tabel `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
