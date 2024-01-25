-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 24, 2024 at 06:45 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.2

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
-- Table structure for table `register_student`
--

CREATE TABLE `register_student` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `profession` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `image_path` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register_student`
--

INSERT INTO `register_student` (`id`, `name`, `profession`, `email`, `password`, `image_path`) VALUES
(23, 'Allan Manoah', 'front end developer', 'allan@gmail.com', '$2y$10$rBspvUOGzX03VjS8eg/gJeBxYVl.Hx1ATyaAhMOWI1KwP0gVs9AZS', 'uploads/chainsaw-man-bloody-makima-jk6xs8rc4zqibr8f.jpg'),
(28, 'Arun Nair', 'backend developer', 'arun@gmail.com', '$2y$10$1qQstdOTfZV6W4tD2kchTOB5lC348Linui0zI7aIqh0l7ctyMxsN6', 'uploads/kakashi.jpg'),
(29, 'Joseph Damo', 'Analyst', 'joseph@gmail.com', '$2y$10$nPEaaenBkl4byXt7pHI/Du1OIJuD/79ygOb8fyPdDDdiIsEVfCMAu', 'uploads/makima1.png'),
(30, 'Monika Sharma', 'full stack developer', 'monika@gmail.com', '$2y$10$8ACP00XQv0uPQesOCUS1J.b5cJ8adaA9oibYPNmFLKZ4Lubyucp.O', 'uploads/pexels-giorgio-de-angelis-1413412.jpg'),
(31, 'Mitali H', 'backend developer', 'mitali@gmail.com', '$2y$10$ZIRKFDCkQGGlXBrSPF0RN.mr1wwf6d9bWH6h6X9C1LNfICZ21ti5O', 'uploads/Makima.600.3804369.jpg'),
(32, 'Kalpana Pandey', 'full stack developer', 'kalpana@gmail.com', '$2y$10$7Tbu6mLO3VWmRUhHgO.NJ.hB4I/MgqjSZpfQxn82p3/NsOwj.qF8m', 'uploads/makima2.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `register_student`
--
ALTER TABLE `register_student`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `register_student`
--
ALTER TABLE `register_student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
