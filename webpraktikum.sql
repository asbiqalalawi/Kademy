-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 16, 2021 at 02:32 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webpraktikum`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `price` int(255) NOT NULL,
  `id_user` int(10) NOT NULL,
  `slug` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`id`, `name`, `price`, `id_user`, `slug`) VALUES
(3, 'nama1', 1000, 19, 'nama1'),
(4, 'nama2', 2000, 19, 'nama2'),
(5, 'nama1', 1000, 21, 'nama1'),
(6, 'nama1', 1000, 22, '');

-- --------------------------------------------------------

--
-- Table structure for table `course`
--

CREATE TABLE `course` (
  `id` int(10) UNSIGNED NOT NULL,
  `description` varchar(255) NOT NULL,
  `price` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `course`
--

INSERT INTO `course` (`id`, `description`, `price`, `name`, `slug`) VALUES
(1, 'deskirpsi1', 1000, 'nama1', 'nama1'),
(2, 'deskripsi2', 2000, 'nama2', 'nama2');

-- --------------------------------------------------------

--
-- Table structure for table `lesson`
--

CREATE TABLE `lesson` (
  `id` int(10) UNSIGNED NOT NULL,
  `course_id` int(10) NOT NULL,
  `name` varchar(255) NOT NULL,
  `content` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `version` varchar(255) NOT NULL,
  `class` text NOT NULL,
  `group` varchar(255) NOT NULL,
  `namespace` varchar(255) NOT NULL,
  `time` int(11) NOT NULL,
  `batch` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `version`, `class`, `group`, `namespace`, `time`, `batch`) VALUES
(1, '2020-12-22-085511', 'App\\Database\\Migrations\\UserRole', 'default', 'App', 1609296576, 1),
(2, '2020-12-22-120112', 'App\\Database\\Migrations\\User', 'default', 'App', 1609296576, 1),
(3, '2020-12-22-121446', 'App\\Database\\Migrations\\Subscription', 'default', 'App', 1609296576, 1),
(4, '2020-12-22-121852', 'App\\Database\\Migrations\\Payment', 'default', 'App', 1609296576, 1),
(5, '2020-12-22-122417', 'App\\Database\\Migrations\\Course', 'default', 'App', 1609296576, 1),
(6, '2020-12-22-122720', 'App\\Database\\Migrations\\Lesson', 'default', 'App', 1609296576, 1),
(7, '2021-01-13-101535', 'App\\Database\\Migrations\\Cart', 'default', 'App', 1610701626, 2);

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `id` int(10) UNSIGNED NOT NULL,
  `no_rekening` int(20) NOT NULL,
  `nama_rekening` varchar(255) NOT NULL,
  `id_user` varchar(255) NOT NULL,
  `nominal` int(100) NOT NULL,
  `course_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`id`, `no_rekening`, `nama_rekening`, `id_user`, `nominal`, `course_id`) VALUES
(1, 123, 'Fikri', '19', 0, 0),
(2, 123, 'Fikri', '22', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `subscription`
--

CREATE TABLE `subscription` (
  `course_id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `payment_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(10) UNSIGNED NOT NULL,
  `nama` varchar(255) NOT NULL,
  `password` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `role_id` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `password`, `email`, `role_id`) VALUES
(3, 'fikri', '$2y$10$73HvCmBIe5bpE8pnQHPbaeo0JNUIO4WSBKunIA/Y4IQvSJpVeMBY2', 'fikri@gmail.com', '1'),
(4, 'admin', '$2y$10$KyQ1c1WAJyl2bJe2nar6XeLisgqM04xbsVJ3o2c3fyL0LYbj0y8TW', 'admin@gmail.com', '2'),
(16, 'fikrimulya23', '$2y$10$pTbN2VAWeIyfMaufzSwNUuu8qlFlRYUuefFuRN3AzzXaPjjSCsXLG', '', '1'),
(17, 'fikrimulya', '$2y$10$n//wqyhzXUNs5vpNij318O1vcTHIAY/BgNgSo6KtOJjxwGl.s6Gqm', '', '1'),
(18, 'fikrimulya1', '$2y$10$ZiEAw4XgytfUr4RlHp/Kpewccj9fAXCijJBID9OVdUlGpP/iQ6yry', '', '1'),
(19, '', '$2y$10$VIdbDqgXTSsAVZH6KKzzued4jLgWSdMGHyRFCrNofEtzHSP75Jph.', 'fikrimulya@gmail.com', '1'),
(20, '', '$2y$10$gFmNS2QtV/n.NTAeHhxDmeFj7Q90.nj08BKg6lhyuhpvgrIUD0/R6', 'fikrimulya2@gmail.com', '1'),
(21, '', '$2y$10$iaZRDyVQ7n6sei3BophQZewS11dJYCI3cMJZnNYmqet/eBiHFOLzi', 'fikrimulya3@gmail.com', '1'),
(22, '', '$2y$10$lWgGBL.5fmEYH9zet2wdL.lzTXR9sfoRqDUIlvMdxTozAgF7vhtBq', 'fikrimulyapermana@gmail.com', '1');

-- --------------------------------------------------------

--
-- Table structure for table `user_role`
--

CREATE TABLE `user_role` (
  `id` int(10) UNSIGNED NOT NULL,
  `role` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `course`
--
ALTER TABLE `course`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lesson`
--
ALTER TABLE `lesson`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_role`
--
ALTER TABLE `user_role`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `course`
--
ALTER TABLE `course`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `lesson`
--
ALTER TABLE `lesson`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `user_role`
--
ALTER TABLE `user_role`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
