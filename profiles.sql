-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 22, 2023 at 05:09 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `crud1`
--

-- --------------------------------------------------------

--
-- Table structure for table `profiles`
--

CREATE TABLE `profiles` (
  `id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `full_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `age` varchar(10) NOT NULL,
  `bio` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `profiles`
--

INSERT INTO `profiles` (`id`, `user_id`, `full_name`, `email`, `age`, `bio`) VALUES
(17, 0, 'Elena', 'iana_private@yahoo.com', '35', 'iana_private@yahoo.com'),
(19, 0, 'Luiza Stefanescu', 'luizy@yahoo.com', '41', 'luizy@yahoo.com'),
(20, 0, 'iana mihai', 'mihai_vl_2010@yahoo.com', '22', 'mihai_vl_2010@yahoo.com'),
(21, 0, 'Tipolisu Mageon', 'tipolis@yahoo.com', '45', 'tipolis@yahoo.com'),
(22, 0, 'Tipolisu Mageon', 'tipolis@yahoo.com', '45', 'tipolis@yahoo.com'),
(23, 0, 'PITI PITI', 'mihai_vl_2010@yahoo.com', '62', 'mihai_vl_2010@yahoo.com'),
(24, 0, 'Iana Marin', 'mihai@yahoo.com', '68', 'mihai@yahoo.com'),
(25, 0, 'Iana', 'mihai@yahoo.com', '72', 'mihai@yahoo.com'),
(26, 0, 'Marinescu Cristian', 'mary@yahoo.com', '56', 'mary@yahoo.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `profiles`
--
ALTER TABLE `profiles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `user_id` (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `profiles`
--
ALTER TABLE `profiles`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
