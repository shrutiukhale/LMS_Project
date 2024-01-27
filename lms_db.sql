-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 27, 2024 at 02:43 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lms_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(255) NOT NULL,
  `profile_image` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`, `profile_image`) VALUES
(3, 'rahul', 'rahul@g.com', '$2y$10$ZtMASAIz4T/RW', 'uploads/51f07a9274c577f6df844fe1f579fe0c.jpg'),
(4, 'ram', 'ram@g.com', '$2y$10$xV.4EPkj2QwTw', 'uploads/51f07a9274c577f6df844fe1f579fe0c.jpg'),
(14, 'shiv thakre', 's@gmail.com', '$2y$10$FpfDrfuiz0cdnh4t20QwTueG8KF4iR1waoj1hIFUGcVT.W5zTfenm', 'uploads/51f07a9274c577f6df844fe1f579fe0c.jpg'),
(16, 'steve jobs', 'steve@gmail.com', '$2y$10$OJ3TvsoJncMjHVoq5lSLt.TEg0KdZgO5cQsZPZENrO13p3hAENLeW', 'uploads/51f07a9274c577f6df844fe1f579fe0c.jpg'),
(18, 'Shrutika Munde', 'admin@gmail.com', '$2y$10$.l2aYqRBZV.Jqv3SzcPRdeM7NJLAI1yg1SScOMUiRZT30vNoiPfEG', 'uploads/wallpaperflare.com_wallpaper (2).jpg');

-- --------------------------------------------------------

--
-- Table structure for table `profileupdate`
--

CREATE TABLE `profileupdate` (
  `id` int(10) NOT NULL,
  `name` varchar(25) NOT NULL,
  `email` varchar(25) NOT NULL,
  `phone` varchar(25) NOT NULL,
  `password` varchar(25) NOT NULL,
  `profile_image` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `profileupdate`
--

INSERT INTO `profileupdate` (`id`, `name`, `email`, `phone`, `password`, `profile_image`) VALUES
(1, 'Shrutika Ramdas Munde', 'mundesarutika@gmail.com', '9067137698', 'shrutika', ''),
(2, 'Shrutika Ramdas Munde', 'mundesarutika@gmail.com', '9067137698', 'shrutika', ''),
(3, '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `register_student`
--

CREATE TABLE `register_student` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `profession` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `image_path` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `register_student`
--

INSERT INTO `register_student` (`id`, `name`, `profession`, `email`, `password`, `image_path`) VALUES
(23, 'Allan Manoah', 'backend developer', 'allan@gmail.com', '$2y$10$rBspvUOGzX03VjS8eg/gJeBxYVl.Hx1ATyaAhMOWI1KwP0gVs9AZS', 'uploads/chainsaw-man-bloody-makima-jk6xs8rc4zqibr8f.jpg'),
(28, 'Arun Nair', 'backend developer', 'arun@gmail.com', '$2y$10$1qQstdOTfZV6W4tD2kchTOB5lC348Linui0zI7aIqh0l7ctyMxsN6', 'uploads/wallpaperflare.com_wallpaper (2).jpg'),
(29, 'Joseph Damo', 'Analyst', 'joseph@gmail.com', '$2y$10$nPEaaenBkl4byXt7pHI/Du1OIJuD/79ygOb8fyPdDDdiIsEVfCMAu', 'uploads/makima1.png'),
(30, 'Monika Sharma', 'full stack developer', 'monika@gmail.com', '$2y$10$8ACP00XQv0uPQesOCUS1J.b5cJ8adaA9oibYPNmFLKZ4Lubyucp.O', 'uploads/pexels-giorgio-de-angelis-1413412.jpg'),
(31, 'Mitali H', 'backend developer', 'mitali@gmail.com', '$2y$10$ZIRKFDCkQGGlXBrSPF0RN.mr1wwf6d9bWH6h6X9C1LNfICZ21ti5O', 'uploads/Makima.600.3804369.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`) VALUES
(1, 'superadmin@gmail.com', '12345678'),
(2, 'admin@gmail.com', '12345678'),
(3, 'student@gmail.com', '12345678');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `profileupdate`
--
ALTER TABLE `profileupdate`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register_student`
--
ALTER TABLE `register_student`
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
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `profileupdate`
--
ALTER TABLE `profileupdate`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `register_student`
--
ALTER TABLE `register_student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
