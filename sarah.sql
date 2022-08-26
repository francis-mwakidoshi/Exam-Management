-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 26, 2022 at 03:22 PM
-- Server version: 8.0.23
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sarah`
--

-- --------------------------------------------------------

--
-- Table structure for table `examroomdetails`
--

CREATE TABLE `examroomdetails` (
  `id` int NOT NULL,
  `department` varchar(55) COLLATE utf8mb4_unicode_ci NOT NULL,
  `venue` varchar(55) COLLATE utf8mb4_unicode_ci NOT NULL,
  `examName` varchar(55) COLLATE utf8mb4_unicode_ci NOT NULL,
  `examCode` varchar(55) COLLATE utf8mb4_unicode_ci NOT NULL,
  `studentsPresent` varchar(155) COLLATE utf8mb4_unicode_ci NOT NULL,
  `collectedBy` varchar(55) COLLATE utf8mb4_unicode_ci NOT NULL,
  `examdaytime` varchar(155) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `examroomdetails`
--

INSERT INTO `examroomdetails` (`id`, `department`, `venue`, `examName`, `examCode`, `studentsPresent`, `collectedBy`, `examdaytime`) VALUES
(2, 'IT', 'Marron', 'CIT', 'qwe3', '55', 'Sarah', '2022-08-26T12:31');

-- --------------------------------------------------------

--
-- Table structure for table `scriptscollection`
--

CREATE TABLE `scriptscollection` (
  `id` int NOT NULL,
  `lecturesName` varchar(55) COLLATE utf8mb4_unicode_ci NOT NULL,
  `examName` varchar(55) COLLATE utf8mb4_unicode_ci NOT NULL,
  `examCode` varchar(55) COLLATE utf8mb4_unicode_ci NOT NULL,
  `numberOfScripts` varchar(55) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `LecturerContact` varchar(55) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(55) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `scriptscollection`
--

INSERT INTO `scriptscollection` (`id`, `lecturesName`, `examName`, `examCode`, `numberOfScripts`, `LecturerContact`, `status`) VALUES
(1, 'king', 'bmcs', 'fk2', '20', '080999', 'returned'),
(2, 'francis', 'maths', 'bmcs23', '75', '080999', 'picked');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int NOT NULL,
  `fullName` varchar(55) COLLATE utf8mb4_unicode_ci NOT NULL,
  `userName` varchar(55) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(155) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password_confirm` varchar(155) COLLATE utf8mb4_unicode_ci NOT NULL,
  `department` varchar(55) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(55) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fullName`, `userName`, `password`, `password_confirm`, `department`, `role`) VALUES
(1, 'Admin Admin', 'admin', '$2y$10$mfE520LEu6rPHpNFd0F7AecseWNniapun99Pr0oQuLthYJBH4DVG6', '$2y$10$mwWYtJYzXROKlGs1nI8ja.PkijHH5w83VkxtnI5dWVso8j42lV9DW', 'IT', 'Exam Officer'),
(2, 'user', 'user', '$2y$10$jcQgvvEJ.FwflMa/pNOCJuaWAtvJYVUcsSv8qbEZntbAAOaCC4b/m', '$2y$10$QTXsb9kPRobkoEMAzH25TenlXcyHDsY8ZbCl4ktgzqNmiQYAJAKvu', 'BCOM', 'Lecturer');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `examroomdetails`
--
ALTER TABLE `examroomdetails`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `scriptscollection`
--
ALTER TABLE `scriptscollection`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `examroomdetails`
--
ALTER TABLE `examroomdetails`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `scriptscollection`
--
ALTER TABLE `scriptscollection`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
