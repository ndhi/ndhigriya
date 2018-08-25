-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 25, 2018 at 10:37 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ndhigriy_ndhigriya`
--

-- --------------------------------------------------------

--
-- Table structure for table `partner`
--

CREATE TABLE `partner` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `image` varchar(255) NOT NULL,
  `jabatan` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `partner`
--

INSERT INTO `partner` (`id`, `name`, `image`, `jabatan`) VALUES
(5, 'Gandhi', 'abbe4e9b7aca5437d310821097274066.jpg', 'Full-Stack Development'),
(6, 'Anggie', '8afb395986a75f9885de5062cde4faa3.jpg', 'Marketing And Design'),
(7, 'Acerudyn', '13a40c7fd507f4822c75a9f9f80df363.jpg', 'Full-Stack Development'),
(8, 'Agung setyawan', '40ec47f1deb7f97eabe158089c13112e.jpg', 'Analyst And Marketing');

-- --------------------------------------------------------

--
-- Table structure for table `portfolio`
--

CREATE TABLE `portfolio` (
  `id` int(11) NOT NULL,
  `title` varchar(128) NOT NULL,
  `slug` varchar(128) NOT NULL,
  `text` text NOT NULL,
  `image` varchar(255) NOT NULL,
  `linkpage` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `portfolio`
--

INSERT INTO `portfolio` (`id`, `title`, `slug`, `text`, `image`, `linkpage`) VALUES
(1, 'ndhiGriya', 'ndhigriya', '                                                                                ndhigriya                                                                                      ', '11.jpg', 'http://ndhigriya.com/'),
(2, 'greenpro', 'greenpro', '                                     greenpro bersinergi untuk perubahan                                       ', 'c2a9da3dd0628e2f09e2982e6011a664.png', 'http://greenpro.id/'),
(3, 'mitra greenpro', 'mitra-greenpro', '                                                          Bersama mengembangkan bank sampah profesional                   ', 'aebc721202354a3aea5d4b8d2a59e1ad.png', 'http://mitra.greenpro.id/');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` tinyint(4) NOT NULL DEFAULT '0',
  `status` enum('user','admin') NOT NULL,
  `token` varchar(100) NOT NULL,
  `create_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `update_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `role`, `status`, `token`, `create_at`, `update_at`) VALUES
(7, 'gandhi', 'gandhisetyawan1.gs@gmail.com', '$2y$10$ddUqVw0LkNbpbtftCNwGau6pNLtGkctgjNBa5ItUiZI.9uePuISJa', 1, 'user', 't6FvGbp3Rh54aSI8', '2018-06-27 06:18:50', NULL),
(8, 'gandhi', 'gandhisetyawan1@gmail.com', '$2y$10$VReLYCavFhYbuibePIedieISBakgq2KwbIbE3eCw/5XPq4.ef5mgi', 1, 'admin', 'omHqLFVsnjwZvX0g', '2018-08-22 04:14:27', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `partner`
--
ALTER TABLE `partner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `portfolio`
--
ALTER TABLE `portfolio`
  ADD PRIMARY KEY (`id`),
  ADD KEY `slug` (`slug`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `partner`
--
ALTER TABLE `partner`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `portfolio`
--
ALTER TABLE `portfolio`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
