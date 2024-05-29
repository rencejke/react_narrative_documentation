-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 29, 2024 at 02:19 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_react_documentation`
--

-- --------------------------------------------------------

--
-- Table structure for table `intro`
--

CREATE TABLE `intro` (
  `intro_aid` int(11) NOT NULL,
  `intro_article` text NOT NULL,
  `intro_publish_date` varchar(20) NOT NULL,
  `intro_is_active` tinyint(1) NOT NULL,
  `intro_datetime` varchar(20) NOT NULL,
  `intro_created` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `intro`
--

INSERT INTO `intro` (`intro_aid`, `intro_article`, `intro_publish_date`, `intro_is_active`, `intro_datetime`, `intro_created`) VALUES
(2, 'fdlaajlkfjkdjfkjdkfjkdjfkjdkf', '2024-05-08', 0, '2024-05-29 13:09:50', '2024-05-29 11:51:51'),
(3, 'pdsgpjkdfljgkfjgkjfkgjkfg', '2024-05-29', 0, '2024-05-29 13:09:56', '2024-05-29 11:52:09'),
(4, 'hsgdhsgdhgshdg', '2024-05-31', 0, '2024-05-29 13:09:54', '2024-05-29 12:00:52'),
(5, '# **H1**\n\n*italicized text*\n\n# Test Markdown Table\n\n| Syntax | Description |\n| --- | --- |\n| Header | Title |\n| Paragraph | Text |\n\n> This is a blockquote\n\nHere is a sentence with a footnote. [^1]\n\n[^1]: This is the footnote.\n\n# Sample Blockquote\n\n> This is a blockquote', '2024-05-29', 1, '2024-05-29 20:04:29', '2024-05-29 13:01:43');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_aid` int(11) NOT NULL,
  `user_is_active` tinyint(1) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `user_key` varchar(255) NOT NULL,
  `user_password` varchar(255) NOT NULL,
  `user_created` varchar(20) NOT NULL,
  `user_datetime` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_aid`, `user_is_active`, `user_name`, `user_email`, `user_key`, `user_password`, `user_created`, `user_datetime`) VALUES
(6, 1, 'clarence', 'bonillaclarencejake@gmail.com', '', '$2y$10$/Q41wt2yq2acCfrua7WbVO5WJH1RanLIN9k3rCC4O3rR9cf4ZC9nK', '2024-05-20 13:34:25', '2024-05-21 12:27:39');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `intro`
--
ALTER TABLE `intro`
  ADD PRIMARY KEY (`intro_aid`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_aid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `intro`
--
ALTER TABLE `intro`
  MODIFY `intro_aid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_aid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
