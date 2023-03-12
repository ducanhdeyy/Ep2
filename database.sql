-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 12, 2023 at 12:22 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ep2`
--

-- --------------------------------------------------------

--
-- Table structure for table `albums`
--

CREATE TABLE `albums` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image_path` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `singer_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `albums`
--

INSERT INTO `albums` (`id`, `name`, `description`, `image_path`, `singer_id`, `created_at`, `updated_at`) VALUES
(1, 'Nhạc chill', 'hay luôn', 'Sơn Tùng.jfif', 1, '2023-03-07 00:18:50', '2023-03-12 03:40:37'),
(9, 'Nhạc đám cưới', 'Yêu đời luôn', 'OIP.jfif', 1, '2023-03-12 04:07:39', '2023-03-12 04:07:39'),
(10, 'Nhạc buồn', 'buồn đấy', 'OIP (3).jfif', 8, '2023-03-12 04:32:39', '2023-03-12 04:32:39');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Trữ tình', 'Nghe và cảm thụ', '2023-03-07 00:17:23', '2023-03-12 04:04:58'),
(8, 'Nhạc buồn', 'nghe xong buồn mày chết', '2023-03-12 04:31:27', '2023-03-12 04:31:27');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(11, '2014_10_12_000000_create_users_table', 1),
(12, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(13, '2019_08_19_000000_create_failed_jobs_table', 1),
(14, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(15, '2023_02_28_143928_create_categories_table', 1),
(16, '2023_02_28_144148_create_singers_table', 1),
(17, '2023_02_28_153054_create_albums_table', 1),
(18, '2023_02_28_153317_create_songs_table', 1),
(19, '2023_02_28_153425_create_transactions_table', 1),
(20, '2023_02_28_153654_create_playlists_table', 1),
(21, '2023_03_08_124053_update_users_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `playlists`
--

CREATE TABLE `playlists` (
  `id` bigint UNSIGNED NOT NULL,
  `song_id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `singers`
--

CREATE TABLE `singers` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `dob` date NOT NULL,
  `introduction` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `image_path` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `singers`
--

INSERT INTO `singers` (`id`, `name`, `dob`, `introduction`, `image_path`, `created_at`, `updated_at`) VALUES
(1, 'Sơn Tùng MTP', '1997-07-04', 'đẹp trai, hát hay', 'Sơn Tùng.jfif', '2023-03-07 00:18:05', '2023-03-12 03:28:40'),
(8, 'Andiez', '1991-02-02', 'Cũng đẹp trai', 'OIP.jfif', '2023-03-12 04:06:13', '2023-03-12 04:06:13'),
(9, 'Đức Phúc và những người bạn', '1997-03-31', 'đẹp trai phết', 'OIP (2).jfif', '2023-03-12 04:24:59', '2023-03-12 04:24:59'),
(10, 'Mr Siro', '1989-02-02', 'đẹp trai, hơi béo tí', 'mr siro.jfif', '2023-03-12 04:42:49', '2023-03-12 04:42:49'),
(11, 'Khải Đăng', '1989-11-01', 'cưới đê', 'hom nay em cuoi roi.jfif', '2023-03-12 04:56:16', '2023-03-12 04:56:16'),
(12, '2T Chang C', '2002-02-03', 'xinh đẹp', 'cuoi di.jfif', '2023-03-12 05:00:00', '2023-03-12 05:00:00'),
(13, 'Bùi Trương Linh', '1996-03-03', 'đẹp trai lắm', 'BuiTruonglinh.jfif', '2023-03-12 05:03:18', '2023-03-12 05:03:18');

-- --------------------------------------------------------

--
-- Table structure for table `songs`
--

CREATE TABLE `songs` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `introduction` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `music_path` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double(8,2) NOT NULL,
  `singer_id` bigint UNSIGNED NOT NULL,
  `albums_id` bigint UNSIGNED NOT NULL,
  `category_id` bigint UNSIGNED NOT NULL,
  `image_path` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `songs`
--

INSERT INTO `songs` (`id`, `name`, `introduction`, `music_path`, `price`, `singer_id`, `albums_id`, `category_id`, `image_path`, `created_at`, `updated_at`) VALUES
(9, 'Muộn rồi mà sao còn', 'hay lắm, nghe đi là nghiện', 'MuonRoiMaSaoCon-SonTungMTP-7011803.mp3', 10000.00, 1, 1, 1, 'Sơn Tùng.jfif', '2023-03-12 03:39:35', '2023-03-12 03:39:35'),
(10, 'Có chắc yêu là đây', 'tặng các anh em độc thân thôi nhé', 'CoChacYeuLaDayOnionnRemix-SonTungMTPOnionn-7022615.mp3', 5000.00, 1, 1, 1, 'co-chac-yeu-la-day-son-tung-mtp.jpg', '2023-03-12 03:42:41', '2023-03-12 03:42:41'),
(11, 'Yêu em hơn mỗi ngày', 'nghe là muốn cưới', 'Yêu Em Hơn Mỗi Ngày.mp3', 2000.00, 8, 9, 1, 'OIP (1).jfif', '2023-03-12 04:21:46', '2023-03-12 04:21:46'),
(12, 'Em đồng ý', 'cưới ngay thôi', 'EmDongYIDo-DucPhucx911-8679310.mp3', 7500.00, 9, 9, 1, 'OIP (2).jfif', '2023-03-12 04:25:42', '2023-03-12 04:25:42'),
(13, 'Chờ đợi có đáng sợ', 'cũng không buồn lắm. Đúng là bịp', 'ChoDoiCoDangSo-Andiez-6332589.mp3', 2500.00, 8, 10, 8, 'OIP (4).jfif', '2023-03-12 04:34:24', '2023-03-12 04:34:24'),
(14, 'Suýt nữa thì', 'buồn đâu mà buồn', 'SuytNuaThi-Andiez-7625469.mp3', 3000.00, 8, 10, 8, 'tải xuống.jfif', '2023-03-12 04:38:22', '2023-03-12 04:38:22'),
(15, '1 phút', 'buồn buồn', '1Phut-Andiez-7632303.mp3', 3123.00, 8, 10, 8, '1 phut.jfif', '2023-03-12 04:39:56', '2023-03-12 04:39:56'),
(16, 'Về với anh đi', 'buồn', 'VeVoiAnhDi-Andiez-5598284.mp3', 3333.00, 8, 10, 8, 've voi anh di.jfif', '2023-03-12 04:41:25', '2023-03-12 04:41:25'),
(17, 'Day dứt nỗi đau', 'buồn lắm', 'DayDutNoiDau-MrSiro-3569331.mp3', 1500.00, 10, 10, 8, 'day dut noi dau.jfif', '2023-03-12 04:45:50', '2023-03-12 04:45:50'),
(18, 'Lặng lẽ tổn thương', 'buồn buồn', 'LangLeTonThuong-MrSiro-3569337.mp3', 1400.00, 10, 10, 8, 'langletonthuong.jfif', '2023-03-12 04:48:24', '2023-03-12 04:48:24'),
(19, 'Ngày đầu tiên', 'hay', 'NgayDauTien-DucPhuc-7129810.mp3', 2000.00, 9, 9, 1, 'ngaydautien.jfif', '2023-03-12 04:50:45', '2023-03-12 04:50:45'),
(20, 'Hơn cả yêu', 'remix', 'HonCaYeuEntidiRemix-DucPhuc-6229851.mp3', 1699.00, 9, 9, 1, 'honcayeu.jfif', '2023-03-12 04:53:06', '2023-03-12 04:53:06'),
(21, 'Ngày hôm nay em cưới rồi', 'buồn nhiều hơn vui', 'HomNayEmCuoiRoiOrinnVinahouseRemix-KhaiDang-6882169.mp3', 400.00, 11, 9, 1, 'hom nay em cuoi roi.jfif', '2023-03-12 04:57:16', '2023-03-12 04:57:16'),
(22, 'Cưới đi', 'cưới đê', 'CuoiDi-2TChangC-6560962.mp3', 400.00, 12, 9, 1, 'cuoi di.jfif', '2023-03-12 05:00:58', '2023-03-12 05:00:58'),
(23, 'Đường tôi chở em về', 'chill chill', 'DuongToiChoEmVeLofiVersion-buitruonglinhFreakD-7025960.mp3', 999.00, 13, 1, 1, 'duong toi cho em ve.jfif', '2023-03-12 05:04:28', '2023-03-12 05:04:28'),
(24, 'See you again', 'nghe ok phết', 'Wiz Khalifa  See You Again ft Charlie Puth Official Video Furious 7 Soundtrack.mp3', 20000.00, 9, 1, 8, '313412571_1267547394085499_3463034447625979803_n.jpg', '2023-03-12 05:10:59', '2023-03-12 05:10:59'),
(25, 'Love Story', 'Love Story', 'aylor Swift  Love Story.mp3', 500.00, 9, 1, 1, 'Taylor-Swift-Love-Story-1200x1200.jpg', '2023-03-12 05:13:01', '2023-03-12 05:13:01'),
(26, 'Perfect', 'Perfect', 'Ed Sheeran  Perfect Duet with Beyoncé Official Audio.mp3', 3000.00, 9, 1, 1, 'Avicii-Wallpapers-9.jpg', '2023-03-12 05:14:42', '2023-03-12 05:14:42'),
(27, 'Đến bao giờ', 'Đến bao giờ?', '2G18 Đến Bao Giờ  Datmaniac ft Cá Hồi Hoang  Video Lyric.mp3', 5000.00, 9, 1, 1, 'Avicii-Wallpapers-9.jpg', '2023-03-12 05:17:13', '2023-03-12 05:17:13'),
(28, 'Tada koe Rokuden', 'yamate kudashai', 'y2mate.com - Tada koe hitotsu  RokudenashiLyrics  Vietsub TikTok .mp3', 4500.00, 9, 1, 1, '264x264.jpg', '2023-03-12 05:19:04', '2023-03-12 05:19:04'),
(29, 'Hết mực', 'Hết mực', 'Hết Mực.mp3', 3500.00, 11, 1, 1, 'uecUgTQAJnoQVxzjUNACaal3AJD.jpg', '2023-03-12 05:20:22', '2023-03-12 05:20:22'),
(30, 'Castle on the hill', 'Castle', 'Ed Sheeran  Castle On The Hill Official Lyric Video.mp3', 6000.00, 9, 1, 1, 'Avicii-Wallpapers-9.jpg', '2023-03-12 05:21:34', '2023-03-12 05:21:34');

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `id` bigint UNSIGNED NOT NULL,
  `cost` int NOT NULL,
  `date` date NOT NULL,
  `song_id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` int NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `wallet` int DEFAULT NULL,
  `role` int NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `phone_number`, `password`, `wallet`, `role`, `created_at`, `updated_at`, `image`) VALUES
(8, 'Đức Anh', 'anh@gmail.com', 336065900, '$2y$10$sxCsYhwbb2JYNLjBn.zW0.AhHbz7Q8ID6fKg9jDgCKe9PQ9XKE04u', NULL, 0, '2023-03-12 03:11:32', '2023-03-12 04:02:15', '1.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `albums`
--
ALTER TABLE `albums`
  ADD PRIMARY KEY (`id`),
  ADD KEY `albums_singer_id_foreign` (`singer_id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `playlists`
--
ALTER TABLE `playlists`
  ADD PRIMARY KEY (`id`),
  ADD KEY `playlists_song_id_foreign` (`song_id`),
  ADD KEY `playlists_user_id_foreign` (`user_id`);

--
-- Indexes for table `singers`
--
ALTER TABLE `singers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `songs`
--
ALTER TABLE `songs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `songs_singer_id_foreign` (`singer_id`),
  ADD KEY `songs_albums_id_foreign` (`albums_id`),
  ADD KEY `songs_category_id_foreign` (`category_id`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `transactions_song_id_foreign` (`song_id`),
  ADD KEY `transactions_user_id_foreign` (`user_id`);

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
-- AUTO_INCREMENT for table `albums`
--
ALTER TABLE `albums`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `playlists`
--
ALTER TABLE `playlists`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `singers`
--
ALTER TABLE `singers`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `songs`
--
ALTER TABLE `songs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `albums`
--
ALTER TABLE `albums`
  ADD CONSTRAINT `albums_singer_id_foreign` FOREIGN KEY (`singer_id`) REFERENCES `singers` (`id`);

--
-- Constraints for table `playlists`
--
ALTER TABLE `playlists`
  ADD CONSTRAINT `playlists_song_id_foreign` FOREIGN KEY (`song_id`) REFERENCES `songs` (`id`),
  ADD CONSTRAINT `playlists_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `songs`
--
ALTER TABLE `songs`
  ADD CONSTRAINT `songs_albums_id_foreign` FOREIGN KEY (`albums_id`) REFERENCES `albums` (`id`),
  ADD CONSTRAINT `songs_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`),
  ADD CONSTRAINT `songs_singer_id_foreign` FOREIGN KEY (`singer_id`) REFERENCES `singers` (`id`);

--
-- Constraints for table `transactions`
--
ALTER TABLE `transactions`
  ADD CONSTRAINT `transactions_song_id_foreign` FOREIGN KEY (`song_id`) REFERENCES `songs` (`id`),
  ADD CONSTRAINT `transactions_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
