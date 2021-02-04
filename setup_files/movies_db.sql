-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 04, 2021 at 04:28 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `movies_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(5) NOT NULL,
  `customer_name` varchar(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  `address` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `customer_name`, `username`, `password`, `address`) VALUES
(1, 'John Smith', 'js', 'password', '1 High Street'),
(2, 'Mary Jones', 'mj', 'acacia1!', '14 Acacia Avenue'),
(3, 'Johnny Smith', '', '', '23 Maple Drive');

-- --------------------------------------------------------

--
-- Table structure for table `customer_reset_requests`
--

CREATE TABLE `customer_reset_requests` (
  `request_id` int(5) NOT NULL,
  `customer_id` int(5) NOT NULL,
  `token` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `downloads`
--

CREATE TABLE `downloads` (
  `id` int(5) NOT NULL,
  `customer_id` int(5) NOT NULL,
  `movie_id` int(5) NOT NULL,
  `date` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `downloads`
--

INSERT INTO `downloads` (`id`, `customer_id`, `movie_id`, `date`) VALUES
(9, 1, 1, 1426777200),
(10, 1, 2, 1426777200),
(11, 2, 2, 1426777200),
(12, 2, 3, 1426777200),
(13, 2, 4, 1426777200),
(14, 3, 4, 1426777200),
(15, 3, 5, 1426777200);

-- --------------------------------------------------------

--
-- Table structure for table `genres`
--

CREATE TABLE `genres` (
  `genre_id` int(5) NOT NULL,
  `genre` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `genres`
--

INSERT INTO `genres` (`genre_id`, `genre`) VALUES
(1, 'Comedy'),
(2, 'Children'),
(3, 'Sci-Fi'),
(4, 'Drama');

-- --------------------------------------------------------

--
-- Table structure for table `movies`
--

CREATE TABLE `movies` (
  `id` int(5) NOT NULL,
  `title` varchar(50) NOT NULL,
  `genre_id` int(5) NOT NULL,
  `type_id` int(5) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `movies`
--

INSERT INTO `movies` (`id`, `title`, `genre_id`, `type_id`) VALUES
(1, 'The Hangover', 1, 1),
(2, '22 Jump Street', 1, 1),
(3, 'The Hunger Games', 3, 2),
(4, 'Robocop', 3, 2),
(5, 'How to Train Your Dragon', 2, 2),
(6, 'Titanic', 4, 2),
(7, 'Bridget Jones Diary', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `video_formats`
--

CREATE TABLE `video_formats` (
  `type_id` int(5) NOT NULL,
  `format` text NOT NULL,
  `file_type` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `video_formats`
--

INSERT INTO `video_formats` (`type_id`, `format`, `file_type`) VALUES
(1, 'LowRes', 'MPEG-2'),
(2, 'HiRes', 'MPEG-4');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer_reset_requests`
--
ALTER TABLE `customer_reset_requests`
  ADD PRIMARY KEY (`request_id`);

--
-- Indexes for table `downloads`
--
ALTER TABLE `downloads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `genres`
--
ALTER TABLE `genres`
  ADD PRIMARY KEY (`genre_id`);

--
-- Indexes for table `movies`
--
ALTER TABLE `movies`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `video_formats`
--
ALTER TABLE `video_formats`
  ADD PRIMARY KEY (`type_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `customer_reset_requests`
--
ALTER TABLE `customer_reset_requests`
  MODIFY `request_id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `downloads`
--
ALTER TABLE `downloads`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `genres`
--
ALTER TABLE `genres`
  MODIFY `genre_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `movies`
--
ALTER TABLE `movies`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `video_formats`
--
ALTER TABLE `video_formats`
  MODIFY `type_id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
