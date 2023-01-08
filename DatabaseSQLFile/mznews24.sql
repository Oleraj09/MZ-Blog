-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 08, 2023 at 08:05 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.1.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mznews24`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` text NOT NULL,
  `body` text NOT NULL,
  `image` text DEFAULT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `views` int(11) DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `body`, `image`, `category_id`, `user_id`, `views`, `status`, `created_at`, `updated_at`) VALUES
(1, 'এনআইডিতে মায়ের চেয়ে ১৩ বছরের বড় ছেলে, গেল চাকরিও', 'রানি দ্বিতীয় এলিজাবেথের পুরো নাম এলিজাবেথ আলেকজান্দ্রা মেরি উইন্ডসর। তিনি ১৯২৬ সালের ২১ এপ্রিল লন্ডনের বার্কলে স্কয়ারের কাছে একটি বাড়িতে জন্মগ্রহণ করেন। রানি দ্বিতীয় এলিজাবেথ ব্রিটিশ রাজা জর্জ ও রানি এলিজাবেথের প্রথম সন্তান। তাঁর বাবা ১৯৩৬ সালে সিংহাসনে আরোহণ করেছিলেন। সেই সময় থেকেই এলিজাবেথ সিংহাসনের উত্তরাধিকারী ছিলেন।  ১৯৪৭ সালে প্রিন্স ফিলিপকে বিয়ে করেন রানি দ্বিতীয় এলিজাবেথ। ১৯৫২ সালের ফেব্রুয়ারিতে বাবা রাজা জর্জ মারা গেলে রানি দ্বিতীয় এলিজাবেথ সিংহাসনে বসেন এবং কমনওয়েলথের প্রধান হন। যুক্তরাজ্যসহ ১৫টি কমনওয়েলথভুক্ত দেশ ও অঞ্চলের আলংকারিক প্রধান ছিলেন তিনি।  এলিজাবেথ-ফিলিপ দম্পতির চার সন্তান। তাঁরা হলেন—ওয়েলসের যুবরাজ চার্লস (তিনি এখন ব্রিটেনের রাজা); প্রিন্সেস অ্যান; ইয়র্কের ডিউক যুবরাজ অ্যান্ড্রু এবং আর্ল অব ওয়েসেক্স যুবরাজ এডওয়ার্ড। ৭৪ বছরের বিবাহিত জীবনে রানি এলিজাবেথ বেশির ভাগ সময়ই ব্যস্ত থেকেছেন রাজকীয় দায়িত্ব পালনে। রানিকে তাঁর রাজকীয় দায়িত্ব পালনে সহায়তা করেছিলেন প্রিন্স ফিলিপ। রানি তাঁর রাজকীয় নিয়মের কর্মপরিধির বাইরেও সক্রিয় ছিলেন নানাবিধ সেবা ও মানবিক কাজে। পৃষ্ঠপোষকতা করেছেন ছয় শতাধিক দাতব্য প্রতিষ্ঠান বা সংস্থার।', 'PostImage/Post_1672051678_900.webp', 1, 1, 5, 1, '2022-12-26 04:47:58', '2023-01-08 00:57:47'),
(2, 'উখিয়ায় গুলি করে আরেক রোহিঙ্গা নেতাকে হত্যা', 'আশ্রয়শিবিরের নিরাপত্তার দায়িত্বে থাকা ৮ আর্মড পুলিশ ব্যাটালিয়নের (এপিবিএন) মুখপাত্র ও সহকারী পুলিশ সুপার (অপারেশন ও মিডিয়া) মো. ফারুক আহমেদ প্রথম আলোকে বলেন, আজ সকাল ১০টার দিকে আশ্রয়শিবিরের একটি মাদ্রাসার বার্ষিক অনুষ্ঠান শেষে বাড়ি ফেরার পথে আরসা নামধারী কয়েকজন রোহিঙ্গা সন্ত্রাসী মোহাম্মদ হোসেনকে লক্ষ্য করে গুলি ছুড়তে থাকে। এতে তিনি গুলিবিদ্ধ হয়ে মাটিতে লুটিয়ে পড়েন। তাঁর বুকে ও গলায় গুলি লাগে। গুরুতর আহত অবস্থায় মোহাম্মদ হোসেনকে উদ্ধার করে আশ্রয়শিবিরের ব্র্যাক হাসপাতালে নেওয়া হয়। সেখান থেকে কক্সবাজার সদর হাসপাতালে নেওয়া হলে চিকিৎসক তাঁকে মৃত ঘোষণা করেন।\r\n\r\nপুলিশ ও রোহিঙ্গা সূত্রে জানা যায়, এর আগে বৃহস্পতিবার বিকেলে আরসা সন্ত্রাসীদের হামলায় একই আশ্রয়শিবিরের আরও চার রোহিঙ্গা গুলিবিদ্ধ হয়েছে। আশ্রয়শিবিরের বি-৬৪ ব্লকের খালপাড় এলাকায় গোলাগুলির ঘটনা ঘটে। গুলিবিদ্ধ চার রোহিঙ্গা (ক্যাম্প-৮ (পশ্চিম) বি-৩৫ ব্লকের বসিন্দা মোহাম্মদ সালাম (৩২), বি-৫৪ ব্লকের বাসিন্দা মো. শফি (৬৩), বি-৫০ ব্লকের বাসিন্দা মো. শরীফ (৫৫) ও বি-৫৫ ব্লকের বাসিন্দা মো. নাসের (১২)। বর্তমানে তাঁরা কক্সবাজার সদর ও উখিয়া উপজেলা স্বাস্থ্য কমপ্লেক্সে চিকিৎসাধীন।\r\n\r\nরোহিঙ্গা প্রতিরোধ ও প্রত্যাবাসন সংগ্রাম কমিটির মহাসচিব এবং উখিয়ার পালংখালী ইউনিয়ন পরিষদের চেয়ারম্যান গফুর উদ্দিন চৌধুরী বলেন, ক্যাম্পের অভ্যন্তরে এবং বাইরে ১৫টির বেশি রোহিঙ্গাদের সশস্ত্র গোষ্ঠী সক্রিয় রয়েছে। আশ্রয়শিবিরে আধিপত্য বিস্তার, মিয়ানমার থেকে আনা মাদকের (ইয়াবা ও আইস) ব্যবসা নিয়ন্ত্রণ, মুক্তিপণ আদায়ের জন্য লোকজনকে অপহরণ, লোকজনের ঘরবাড়ি, দোকানপাটে ডাকাতিসহ নানা অপরাধে জড়িয়েছে সন্ত্রাসীরা। সন্ত্রাসীদের ধরতে যৌথ অভিযান পরিচালনা জরুরি।', 'PostImage/Post_1672051718_10458.webp', 1, 1, 5, 1, '2022-12-26 04:48:38', '2023-01-08 00:58:23'),
(3, 'ব্রিটিশ রাজতন্ত্র: উদ্‌যাপনে শুরু হওয়া বছরটির কান্নাভেজা বিদায়', 'যুক্তরাজ্যে ২০২২ সালটি শুরু হয়েছিল আনন্দ, উচ্ছ্বাস আর উদ্‌যাপনের মধ্য দিয়ে। এ বছরের ফেব্রুয়ারিতে ব্রিটিশ রানি দ্বিতীয় এলিজাবেথের সিংহাসনে অভিষেকের ৭০ বছর পূর্তি হয়। যুক্তরাজ্যের রাজতন্ত্রের ইতিহাসে তিনিই সবচেয়ে দীর্ঘ সময় সিংহাসনে অধিষ্ঠিত থেকেছেন।\r\n\r\nএ উপলক্ষে গত জুনে ব্রিটেনে এবং কমনওয়েলথভুক্ত বিভিন্ন দেশে চার দিন নানা রাজকীয় অনুষ্ঠানের আয়োজন ছিল। তবে গত ৮ সেপ্টেম্বর সে আনন্দের মাঝে বেজে ওঠে বিষাদের সুর। এদিন স্কটল্যান্ডের বালমোরাল প্যালেসে শেষনিশ্বাস ত্যাগ করেন রানি দ্বিতীয় এলিজাবেথ। আর এর মধ্য দিয়ে ব্রিটিশ রাজশাসনের একটি বর্ণাঢ্য অধ্যায়ের ইতি ঘটে। তাই বলা চলে, ব্রিটিশ রাজতন্ত্রের ইতিহাসে ২০২২ সালটি একই সঙ্গে উদ্‌যাপনের এবং কান্নার।\r\n\r\nমাত্র ২৫ বছর বয়সে ব্রিটিশ রাজত্বের দায়িত্ব নিয়েছিলেন রানি দ্বিতীয় এলিজাবেথ। আর তাঁর জীবনাবসান হয় ৯৬ বছর বয়সে।', 'PostImage/Post_1672051749_47343.webp', 1, 1, 4, 1, '2022-12-26 04:49:09', '2022-12-26 04:59:10'),
(4, '‘আলভারেজ এমবাপ্পে-হলান্ডের চেয়েও ভালো’', 'সময়ের সেরা স্ট্রাইকার বললে ম্যানচেস্টার সিটির আর্লিং হলান্ড আর পিএসজির কিলিয়ান এমবাপ্পেকে এগিয়ে রাখেন অনেকে। যদিও এমবাপ্পে পুরোপুরি স্ট্রাইকার নন, খেলেন বাঁ উইংয়ে। সব মিলিয়ে এমবাপ্পেকে বলা যায় ফরোয়ার্ড। আগামীতে ফুটবলে এ দুজনই রাজত্ব করবেন বলে ভবিষ্যদ্বাণী অনেকের।\r\n\r\nতবে চিলির সাবেক ফরোয়ার্ড ইভান জামোরানো মনে করছেন, এমবাপ্পে–হলান্ডের চেয়েও ভালো স্ট্রাইকার হুলিয়ান আলভারেজ। রিয়াল মাদ্রিদ ও ইন্টার মিলানে খেলা সাবেক এই চিলিয়ান আর্জেন্টিনার পত্রিকা ওলেকে দেওয়া সাক্ষাৎকারে বলেছেন, ‘একজন সনাতন ঘরানার সেন্টার ফরোয়ার্ড হিসেবে বলছি, এই সময়ের স্ট্রাইকারদের মধ্যে সবচেয়ে আক্রমণাত্মক স্ট্রাইকার হুলিয়ান আলভারেজ।’', 'PostImage/Post_1672051960_4797.webp', 2, 2, 12, 1, '2022-12-26 04:52:40', '2023-01-08 00:58:32');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `image` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `user_id`, `status`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Bangladesh News', 1, 1, 'no-image.jpg', '2022-12-26 04:46:35', '2022-12-26 04:46:35'),
(2, 'Sports', 1, 1, 'CategoryImage/1672051623_46080.jpg', '2022-12-26 04:47:03', '2022-12-26 04:47:03');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `comments` text NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `blog_id` varchar(255) NOT NULL,
  `replies` bigint(20) UNSIGNED DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `comments`, `user_id`, `blog_id`, `replies`, `created_at`, `updated_at`) VALUES
(1, 'My Frist Post', '2', '4', NULL, '2022-12-26 04:53:11', '2022-12-26 04:53:11'),
(2, 'My Comment', '2', '1', NULL, '2022-12-26 04:57:41', '2022-12-26 04:57:41'),
(3, 'Is it serious?', '4', '2', NULL, '2022-12-26 05:01:15', '2022-12-26 05:01:15'),
(4, 'Etai Bangladesh', '4', '1', NULL, '2022-12-26 05:01:33', '2022-12-26 05:01:33'),
(5, 'Boss', '4', '4', NULL, '2022-12-26 05:01:51', '2022-12-26 05:01:51'),
(6, 'Love you Boss', '5', '4', NULL, '2022-12-26 05:02:23', '2022-12-26 05:02:23'),
(7, 'That good', '5', '2', NULL, '2022-12-26 05:03:04', '2022-12-26 05:03:04');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
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
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2014_10_12_200000_add_two_factor_columns_to_users_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(6, '2022_12_20_093533_create_sessions_table', 1),
(7, '2022_12_23_010006_create_blogs_table', 1),
(8, '2022_12_23_010359_create_categories_table', 1),
(9, '2022_12_23_011116_create_comments_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
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
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('MK7opJuz8PuXJTOA8Dh76q4jiF5BbrLVnNkEPpQu', NULL, '127.0.0.1', 'Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/108.0.0.0 Mobile Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiMGxVaHphYzkzeG14Tk9lMkJQZnE4Y2JFTmxYMHlFN0RDbmR4aWhySCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjY6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9ob21lIjt9fQ==', 1673161483),
('rNmUBQDa6npmRNrYwmIbIssBY4cQVxGCfZGgwL2l', 5, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/108.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiVnY0Q0RENDdDOUVPSmRtRGtBMGU0WEo5OGV5OFpXNk1qV3REMnVFWiI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjY6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9ob21lIjt9czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6NTtzOjIxOiJwYXNzd29yZF9oYXNoX3NhbmN0dW0iO3M6NjA6IiQyeSQxMCRDMy4zRm9nM2psUWs0MWJxWW1NOGxlS2xadzJzSTJFWVlHV3JwdFVhZnNnL1FRajRjSS5wbSI7fQ==', 1672052617),
('Tiuf3RVs0y3PlJPbpNuZ63txPEfnsDUkgleqqPY5', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/108.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiMWFXbXVod0JNb1JzZ0tEWHhxckpBTlh6Q1R2NzdtZzVrbzA3WDVMcSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjE6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMCI7fX0=', 1672052952),
('xfvI6MP3iwgzKydiBywgQv9v1R2uu2DiCZnmNxri', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/108.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiQldxT0NicHY5NXlNT1o0cWI1dVFMRnBpQ0dyMThVWGJyUk8ySEFPQSI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MjY6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9ob21lIjt9fQ==', 1672052352);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `two_factor_secret` text DEFAULT NULL,
  `two_factor_recovery_codes` text DEFAULT NULL,
  `two_factor_confirmed_at` timestamp NULL DEFAULT NULL,
  `gender` varchar(255) NOT NULL,
  `age` varchar(255) NOT NULL,
  `division` varchar(255) NOT NULL,
  `district` varchar(255) NOT NULL,
  `thana` varchar(255) NOT NULL,
  `post` varchar(255) NOT NULL,
  `zip` varchar(255) NOT NULL,
  `adress` varchar(255) NOT NULL,
  `image` text DEFAULT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `role` varchar(255) NOT NULL DEFAULT '2' COMMENT '1 Admin,2 User, 3 Need Accept',
  `remember_token` varchar(100) DEFAULT NULL,
  `current_team_id` bigint(20) UNSIGNED DEFAULT NULL,
  `profile_photo_path` varchar(2048) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `email`, `email_verified_at`, `password`, `two_factor_secret`, `two_factor_recovery_codes`, `two_factor_confirmed_at`, `gender`, `age`, `division`, `district`, `thana`, `post`, `zip`, `adress`, `image`, `status`, `role`, `remember_token`, `current_team_id`, `profile_photo_path`, `created_at`, `updated_at`) VALUES
(1, 'Oleraj', 'Hossin', 'olerajhossin@gmail.com', NULL, '$2y$10$gL8TrY.NdCgwKB6EUALZOuhYnla3B5Pl5exBp1T2w22JeABef476O', NULL, NULL, NULL, 'Male', '22/343/3434', 'Dhaka', 'Dhaka', 'Mirpur', 'সারদাহ', '6762', 'Mirpur-10, Dhaka', 'UserImage/Oleraj_Hossin_18339.jpg', 1, '4', NULL, NULL, NULL, '2022-12-26 04:34:44', '2022-12-26 04:36:35'),
(2, 'Rajkoly', 'Hossin', 'rajkoly@gmail.com', NULL, '$2y$10$vg7bz9BHDWel9C4VHdufMOs8qaO5yUpiFv0SYKOdvmuDJ8juzwsqO', NULL, NULL, NULL, 'Male', '22/343/3434', 'Dhaka', 'Dhaka', 'Mirpur', 'Mirpur', '6762', 'DHOS, Mirpur', 'UserImage/Rajkoly_Hossin_95335.jpg', 1, '1', NULL, NULL, NULL, '2022-12-26 04:40:43', '2022-12-26 04:40:43'),
(4, 'Fahmida', 'Ahmed Feha', 'feha@gmail.com', NULL, '$2y$10$Mf4PRLVlTs1.gdCI5CCgsOG6N/dRFgylhBOi8281us957dflvojgC', NULL, NULL, NULL, 'FeMale', '22/343/3434', 'Dhaka', 'Dhaka', 'Mirpur', 'Mirpur', '6762', 'DHOS, Mirpur', 'UserImage/Fahmida_Ahmed Feha_13417.jpg', 1, '3', NULL, NULL, NULL, '2022-12-26 04:44:25', '2022-12-26 04:44:51'),
(5, 'Dipto', 'Sutradhar', 'dipto@gmail.com', NULL, '$2y$10$C3.3Fog3jlQk41bqYmM8leKlZw2sI2EYYGWrptUafsg/QQj4cI.pm', NULL, NULL, NULL, 'Male', '22/343/3434', 'Dhaka', 'Dhaka', 'Mirpur', 'Mirpur', '1216', 'Mirpur-10, Dhaka', 'UserImage/Dipto_Sutradhar_3755.png', 1, '2', NULL, NULL, NULL, '2022-12-26 04:45:38', '2022-12-26 04:45:38');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
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
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

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
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
