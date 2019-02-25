-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 25, 2019 at 09:21 PM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `iphoto`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `ctitle` varchar(255) NOT NULL,
  `carticle` longtext NOT NULL,
  `curl` varchar(255) NOT NULL,
  `cimage` varchar(255) NOT NULL,
  `updated_at` datetime NOT NULL,
  `created_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `ctitle`, `carticle`, `curl`, `cimage`, `updated_at`, `created_at`) VALUES
(14, 'Nature', '<p>Nature</p>', 'nature', '2019.01.05.13.07.37-2.jpg', '2019-01-05 13:07:38', '2019-01-05 13:07:38'),
(15, 'Animals', '<p>Animals</p>', 'animals', '2019.01.05.13.08.36-4.jpg', '2019-01-05 13:08:36', '2019-01-05 13:08:36'),
(16, 'Travel', '<p>Travel</p>', 'travel', '2019.01.05.13.09.08-2.jpg', '2019-01-05 13:09:09', '2019-01-05 13:09:09');

-- --------------------------------------------------------

--
-- Table structure for table `contents`
--

CREATE TABLE `contents` (
  `id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `article` longtext NOT NULL,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contents`
--

INSERT INTO `contents` (`id`, `menu_id`, `title`, `article`, `updated_at`, `created_at`) VALUES
(1, 1, 'Contact Us', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2018-08-18 14:39:18', '2018-08-18 14:39:18'),
(2, 1, 'What is Lorem Ipsum?', 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.', '2018-08-18 14:40:52', '2018-08-18 14:40:52'),
(3, 1, 'Mor2', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a <span style=\"background-color: rgb(0, 255, 255);\">Lorem Ipsum</span> passage, and going through the cites of the word in classical literature, discovered the undoubtable source.', '2018-09-19 12:48:29', '2018-08-18 14:43:44');

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` int(11) NOT NULL,
  `link` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `mtitle` varchar(255) NOT NULL,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`id`, `link`, `url`, `mtitle`, `updated_at`, `created_at`) VALUES
(1, 'Contact', 'contact-us', 'Contact Us', '2018-08-18 13:39:25', '2018-08-18 13:39:25'),
(2, 'Guy', 'guy', 'Hi Guy', '2019-02-25 19:57:28', '2019-02-25 19:57:28');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `data` text NOT NULL,
  `total` decimal(10,2) NOT NULL,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `user_id`, `data`, `total`, `updated_at`, `created_at`) VALUES
(1, 7, 'a:2:{i:4;a:6:{s:2:\"id\";s:1:\"4\";s:4:\"name\";s:6:\"Wild 2\";s:5:\"price\";d:100;s:8:\"quantity\";i:1;s:10:\"attributes\";a:2:{s:5:\"image\";s:9:\"wild2.jpg\";s:4:\"size\";s:1:\"M\";}s:10:\"conditions\";a:0:{}}i:2;a:6:{s:2:\"id\";s:1:\"2\";s:4:\"name\";s:5:\"Art 2\";s:5:\"price\";d:100;s:8:\"quantity\";i:1;s:10:\"attributes\";a:2:{s:5:\"image\";s:8:\"art2.jpg\";s:4:\"size\";s:1:\"M\";}s:10:\"conditions\";a:0:{}}}', '200.00', '2018-08-18 09:54:44', '2018-08-18 09:54:44'),
(2, 8, 'a:1:{i:2;a:6:{s:2:\"id\";s:1:\"2\";s:4:\"name\";s:5:\"Art 2\";s:5:\"price\";d:100;s:8:\"quantity\";i:1;s:10:\"attributes\";a:2:{s:5:\"image\";s:8:\"art2.jpg\";s:4:\"size\";s:1:\"M\";}s:10:\"conditions\";a:0:{}}}', '100.00', '2018-08-18 09:56:44', '2018-08-18 09:56:44'),
(3, 8, 'a:1:{i:4;a:6:{s:2:\"id\";s:1:\"4\";s:4:\"name\";s:6:\"Wild 2\";s:5:\"price\";d:100;s:8:\"quantity\";i:1;s:10:\"attributes\";a:2:{s:5:\"image\";s:9:\"wild2.jpg\";s:4:\"size\";s:1:\"M\";}s:10:\"conditions\";a:0:{}}}', '100.00', '2018-08-18 10:26:12', '2018-08-18 10:26:12'),
(4, 4, 'a:1:{i:4;a:6:{s:2:\"id\";s:1:\"4\";s:4:\"name\";s:6:\"Wild 2\";s:5:\"price\";d:100;s:8:\"quantity\";i:1;s:10:\"attributes\";a:2:{s:5:\"image\";s:9:\"wild2.jpg\";s:4:\"size\";s:1:\"M\";}s:10:\"conditions\";a:0:{}}}', '100.00', '2018-08-20 19:14:03', '2018-08-20 19:14:03'),
(5, 4, 'a:1:{i:2;a:6:{s:2:\"id\";s:1:\"2\";s:4:\"name\";s:5:\"Art 2\";s:5:\"price\";d:100;s:8:\"quantity\";i:3;s:10:\"attributes\";a:2:{s:5:\"image\";s:8:\"art2.jpg\";s:4:\"size\";s:1:\"M\";}s:10:\"conditions\";a:0:{}}}', '300.00', '2018-09-01 12:08:03', '2018-09-01 12:08:03'),
(6, 4, 'a:1:{i:8;a:6:{s:2:\"id\";s:1:\"8\";s:4:\"name\";s:4:\"mkmk\";s:5:\"price\";d:554;s:8:\"quantity\";i:1;s:10:\"attributes\";a:2:{s:5:\"image\";s:11:\"defulte.png\";s:4:\"size\";s:1:\"M\";}s:10:\"conditions\";a:0:{}}}', '554.00', '2018-09-19 15:35:22', '2018-09-19 15:35:22');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `ptitle` varchar(255) NOT NULL,
  `particle` longtext NOT NULL,
  `price` decimal(8,2) NOT NULL,
  `pimage` varchar(255) NOT NULL,
  `purl` varchar(255) NOT NULL,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `ptitle`, `particle`, `price`, `pimage`, `purl`, `updated_at`, `created_at`) VALUES
(10, 14, 'Flower', '<p>Flower</p>', '53.99', '2019.01.05.13.10.53-1.jpg', 'flower', '2019-01-05 13:10:53', '2019-01-05 13:10:36'),
(11, 14, 'Bee', '<p>Bee</p>', '64.00', '2019.01.07.19.20.23-2.jpg', 'bee', '2019-01-07 19:20:24', '2019-01-07 19:19:15'),
(12, 14, 'Bee Pink', '<p>Bee Pink<br></p>', '64.00', '2019.01.07.19.21.25-3.jpg', 'bee-pink', '2019-01-07 19:21:25', '2019-01-07 19:21:25'),
(13, 14, 'Blossom', '<p>Blossom<br></p>', '70.00', '2019.01.07.19.23.10-4.jpg', 'blossom', '2019-01-07 19:23:10', '2019-01-07 19:23:10'),
(14, 14, 'Field', '<p>Field<br></p>', '55.00', '2019.01.07.19.24.26-5.jpg', 'field', '2019-01-07 19:24:26', '2019-01-07 19:24:26'),
(15, 15, 'Lions', '<p>Lions</p>', '78.00', '2019.01.07.19.27.15-1.jpg', 'lions', '2019-01-07 19:27:15', '2019-01-07 19:27:15'),
(16, 15, 'Squirrel', '<p>Squirrel<br></p>', '55.00', '2019.01.07.19.28.34-2.jpg', 'squirrel', '2019-01-07 19:28:34', '2019-01-07 19:28:34'),
(17, 15, 'Fish', '<p>Fish</p>', '70.00', '2019.01.07.19.29.51-4.jpg', 'fish', '2019-01-07 19:29:51', '2019-01-07 19:29:51'),
(18, 15, 'Fox', '<p>Fox</p>', '64.00', '2019.01.07.19.30.21-6.jpg', 'fox', '2019-01-07 19:30:21', '2019-01-07 19:30:21'),
(19, 15, 'Monkey', '<p>Monkey<br></p>', '55.00', '2019.01.07.19.31.59-3.jpg', 'monkey', '2019-01-07 19:31:59', '2019-01-07 19:31:59'),
(20, 16, 'Mountains', '<p>Mountains<br></p>', '78.00', '2019.01.07.19.33.45-1.jpg', 'mountains', '2019-01-07 19:33:46', '2019-01-07 19:33:46'),
(21, 16, 'Sunset', '<p>Sunset</p>', '99.99', '2019.01.07.19.34.57-2.jpg', 'sunset', '2019-01-07 19:34:57', '2019-01-07 19:34:57'),
(22, 16, 'Trees', '<p>Trees</p>', '53.99', '2019.01.07.19.36.01-3.jpg', 'trees', '2019-01-07 19:36:01', '2019-01-07 19:36:01'),
(23, 16, 'Cliff', '<p>Cliff</p>', '64.00', '2019.01.07.19.36.56-4.jpg', 'cliff', '2019-01-07 19:36:56', '2019-01-07 19:36:56'),
(24, 16, 'Road', '<p>Road</p>', '53.99', '2019.01.07.19.38.19-5.jpg', 'road', '2019-01-07 19:38:20', '2019-01-07 19:38:20');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `avatar` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `updated_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_at` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `avatar`, `email`, `password`, `updated_at`, `created_at`) VALUES
(1, '-', '', '-', '-', '2018-07-28 23:05:43', '2018-07-28 23:05:43'),
(2, '--', '', '--', '--', '2018-07-28 23:05:43', '2018-07-28 23:05:43'),
(3, '---', '', '---', '---', '2018-07-28 23:06:30', '2018-07-28 23:06:30'),
(4, 'Admin', '', 'admin@gmail.com', '$2y$10$h/rV4Bcd2MnKe8Qb6L13yO0sasB5.j5Al7bhm0I29ZmZwSrXfYg1a', '2018-08-11 14:45:57', '2018-08-11 14:45:57'),
(5, 'Avi Cohen', '', 'avi@gmail.com', '$2y$10$h/rV4Bcd2MnKe8Qb6L13yO0sasB5.j5Al7bhm0I29ZmZwSrXfYg1a', '2018-08-11 14:47:11', '2018-08-11 14:47:11'),
(6, 'Moshe Levi', '', 'moshe@gmail.com', '$2y$10$h/rV4Bcd2MnKe8Qb6L13yO0sasB5.j5Al7bhm0I29ZmZwSrXfYg1a', '2018-08-11 14:48:51', '2018-08-11 14:48:51'),
(7, 'popeye', '', 'popeye@gmail.com', '$2y$10$MwScAGTv4dGcdjRlgZ9Plu9UfTYNy3b8ZFqYkJbdBAAU7z/aNaRJO', '2018-08-17 12:00:38', '2018-08-17 12:00:38'),
(8, 'Olive', '', 'olive@gmail.com', '$2y$10$BT1zRoJljIQnHkV7HPLAFu7byOvSoo4GMUjF2GaKdbGvrTbx0Bpau', '2018-08-17 12:02:37', '2018-08-17 12:02:37');

-- --------------------------------------------------------

--
-- Table structure for table `users_rules`
--

CREATE TABLE `users_rules` (
  `uid` int(11) NOT NULL,
  `rid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users_rules`
--

INSERT INTO `users_rules` (`uid`, `rid`) VALUES
(4, 6),
(5, 7),
(6, 7),
(7, 7),
(8, 7);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `curl` (`curl`);

--
-- Indexes for table `contents`
--
ALTER TABLE `contents`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `url` (`url`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `purl` (`purl`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `contents`
--
ALTER TABLE `contents`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
