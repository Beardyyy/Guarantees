-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 01, 2021 at 10:47 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `guarantees`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Penalty', 'penalty', '2021-11-11 10:48:39', '2021-11-11 10:48:39');

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
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2021_11_08_085219_create_posts_table', 1),
(6, '2021_11_08_114016_create_categories_table', 1);

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
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `slug` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `excerpt` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `body` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `published_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `category_id`, `user_id`, `slug`, `title`, `excerpt`, `body`, `created_at`, `updated_at`, `published_at`) VALUES
(1, 1, 1, 'accusantium-minima-qui', 'Vero vel sit sint.', 'Voluptatum adipisci provident dolores et labore autem laborum. Odio voluptas unde perferendis eum aspernatur.', 'Esse et possimus optio eos sint ratione illum. Vero dolorem magnam labore omnis officiis quidem quod. Corporis dolorem non veritatis ab eos. Facere porro ut esse ea facilis illum. Culpa harum eum accusamus eos dolorem expedita blanditiis quia. Id repellat voluptatibus dolores ipsum ut libero. Nostrum corporis fugit doloremque totam rerum velit fugiat vel. Voluptatem iste deserunt harum atque ea eos. Sed minus nisi voluptatem doloremque explicabo corporis praesentium.', '2021-11-11 10:48:39', '2021-11-11 10:48:39', NULL),
(2, 1, 1, 'voluptatem-quia-modi-accusantium-quam', 'Ut esse assumenda.', 'Ut tempora sapiente itaque unde et dolores illo. Alias est exercitationem maxime ea voluptatum culpa occaecati.', 'Placeat dicta et nobis ipsum. Similique eligendi dolorum et iste qui odit quibusdam. Exercitationem velit sed dicta earum dignissimos recusandae ut. Eum aliquam officiis repellendus voluptatem accusantium. Ea repellat totam nostrum. Fugiat voluptas cupiditate aperiam incidunt voluptatibus tenetur. Saepe et architecto aut nam. Velit et asperiores reiciendis minus delectus aut. Aut in nobis nostrum enim distinctio. Neque vitae est est eveniet sapiente doloribus laudantium expedita.', '2021-11-11 10:48:39', '2021-11-11 10:48:39', NULL),
(3, 1, 1, 'voluptate-enim-fugiat', 'Omnis nam officia voluptatem.', 'Et vero ut asperiores suscipit ea similique. Hic omnis ut ut harum voluptas. Neque ea accusamus dolorem voluptas quibusdam officia.', 'Nesciunt blanditiis sit voluptatibus sed. Aut itaque est et vero. Quod et voluptatem velit a porro ex. Alias tenetur sapiente sint aliquam. Numquam voluptatum iste architecto sunt ea ea fugiat. Neque maiores id inventore possimus eveniet. Qui aspernatur et magni delectus. Vel impedit autem est accusamus ullam. Corporis ratione deserunt earum voluptatem necessitatibus ullam eos. Recusandae architecto iste tempore nihil rerum officiis quae ipsa. Blanditiis modi distinctio aut. Deserunt incidunt porro perspiciatis autem. Temporibus sed cum repudiandae numquam repellendus sunt. Neque ducimus assumenda libero ratione debitis similique.', '2021-11-11 10:48:39', '2021-11-11 10:48:39', NULL),
(4, 1, 1, 'voluptatibus-doloremque', 'Voluptatum sit cum.', 'Nostrum magnam dicta placeat aut facere consequatur iure. A ipsam aut fugit voluptatem rerum vero. Voluptatem repellendus hic consequatur consequatur voluptatibus occaecati.', 'Sint cupiditate consectetur corporis ipsam. Sint aut esse ea qui quae aliquid in. Quia enim ad molestiae a earum fuga cumque. Et suscipit et assumenda ea officiis sed officiis. Est aut atque modi. Enim sunt rerum voluptas ex sed. Assumenda ullam in est quia tempore neque. Est nam labore ea accusantium sit. Labore consequatur enim itaque dicta. Ut labore esse molestias. Reiciendis iusto iusto sequi debitis hic consequatur. Dolore sint adipisci voluptatum nemo. Et culpa et dignissimos cum.', '2021-11-11 10:48:39', '2021-11-11 10:48:39', NULL),
(5, 1, 1, 'ullam-tenetur-vitae-et', 'Facilis deserunt praesentium voluptas.', 'Culpa voluptatem earum iste vel quo dolor ipsa. Reiciendis cum provident vitae blanditiis ut.', 'Ut placeat voluptatum sit ad aliquid. Nostrum laboriosam repudiandae qui recusandae. Tempore eos voluptatem placeat laudantium quibusdam. Unde unde aut ea. Nisi esse qui blanditiis autem. Maiores reprehenderit fuga dolores qui. Veniam itaque dolore quod enim sit. Ipsum rem voluptas architecto. Consequatur quibusdam ab illum error alias vitae.', '2021-11-11 10:48:39', '2021-11-11 10:48:39', NULL);

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
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Punisher', 'punisher@punishment.com', NULL, 'kjadkfbdfkj', NULL, '2021-11-11 10:48:39', '2021-11-11 10:48:39');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `categories_name_unique` (`name`),
  ADD UNIQUE KEY `categories_slug_unique` (`slug`);

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
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `posts_slug_unique` (`slug`);

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
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
