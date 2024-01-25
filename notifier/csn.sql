-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 24, 2024 at 10:29 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `csn`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `phoneNumber` varchar(20) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `phoneNumber`, `email`, `password`) VALUES
(1, 'admin', '+255628152309', 'admin@gmail.com', '$2y$10$6iL7dIwVk4/fczuHMMtAI.SUS5JYPDPfeFZ1oCbm5eQXFtpSG/dQy');

-- --------------------------------------------------------

--
-- Table structure for table `lecturers`
--

CREATE TABLE `lecturers` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `lecturers`
--

INSERT INTO `lecturers` (`id`, `name`, `email`, `password`) VALUES
(2, 'lucas nestory', 'lucasscrew@gmail.com', '$2y$10$FOzTPsMnnQC3fHQnmlk.6.zv.MzhPBVNn81qUs0pJv9JAs18r/6Q.'),
(3, 'nancile', 'gosbertnancy@gmail.com', '$2y$10$QiHxA9ud2pnjcNKEd46TxOYlbIKIJYcnzW6Fow23sNEhMbUDDWGKC');

-- --------------------------------------------------------

--
-- Table structure for table `students`
--

CREATE TABLE `students` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `session` varchar(300) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `students`
--

INSERT INTO `students` (`id`, `name`, `email`, `password`, `session`) VALUES
(15, 'lucas joseph', 'lucasscrew16@gmail.com', '$2y$10$UirVmga7FlfTI7rzt/GPkuQfUN3k1gLMR49Je6XxtCZ5jTYMOqCri', NULL),
(16, '', '', '', NULL),
(17, '', '', '', NULL),
(18, 'jemes', 'james@gmail.com', '$2y$10$t9ULsIi5EdZ8S290rWsfke29hKcIzDwapkLjgdmEIG2m4KXpBUuwu', NULL),
(19, 'jemes', 'james@gmail.com', '$2y$10$ax4fDOAMB0wowEcfkqSR7OUB7IgT4ju1CMVVurcC36ePT.jOoed8m', NULL),
(20, 'nancy gosbert bilaija', 'gosbertnancy11@gmail.com', '$2y$10$O8hnfFMH7YsYHxK2Y3wmvOPglBzEs.4poTrCBY3lJLc0w4wpri1OK', NULL),
(21, 'nancy gosbert bilaija', 'gosbertnancy11@gmail.com', '$2y$10$sQQS1Zi10E8OK3iUT030yudBk4c/PGe9uN7fJNAbg1b/QdRSVyOGG', NULL),
(22, 'nancy gosbert bilaija', 'gosbertnancy11@gmail.com', '$2y$10$VIL2fsJqE2WULpSxdD6/QuZXTxdWuNLzWgV0YT8ZqsXqjji9g.DGy', NULL),
(23, 'nancy gosbert bilaija', 'gosbertnancy11@gmail.com', '$2y$10$5JPWfRJ36ALyeMLaTECB..g2btcH5blJyDYaBnwxkVkRpIeBS/2iq', NULL),
(24, 'nancy gosbert bilaija', 'gosbertnancy11@gmail.com', '$2y$10$MN/CjzzF/ooLY2GTtsyaMu9dHauTkFg.eJOstm2Yhr7yxICx7oNpC', NULL),
(25, 'nancy gosbert bilaija', 'gosbertnancy11@gmail.com', '$2y$10$az8BzoZT6rfobktVADDz6.EaklZafBOzHf/3D.7gII1TbUNjx9/6q', NULL),
(26, '', '', '', 'i will be there');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `lecturers`
--
ALTER TABLE `lecturers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `students`
--
ALTER TABLE `students`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `lecturers`
--
ALTER TABLE `lecturers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `students`
--
ALTER TABLE `students`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
