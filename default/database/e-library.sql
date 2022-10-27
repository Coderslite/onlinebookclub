-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 27, 2022 at 11:02 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `e-library`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `id` int(11) NOT NULL,
  `book_name` varchar(50) NOT NULL,
  `book_author` varchar(50) NOT NULL,
  `book_url` varchar(500) NOT NULL,
  `category` varchar(50) NOT NULL,
  `description` varchar(500) NOT NULL,
  `recommended` int(1) NOT NULL,
  `date` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`id`, `book_name`, `book_author`, `book_url`, `category`, `description`, `recommended`, `date`) VALUES
(6, 'The Great Adventure4', 'Ossai Abraham', '1665406521.pdf', 'Computer Science', 'This is just for a test', 1, 'Monday 10th of October 2022'),
(7, 'The Great Adventure 2', 'Ossai Abraham', '1666893948.pdf', 'Electrical Engineering', 'this is just for a test', 0, 'Thursday 27th of October 2022');

-- --------------------------------------------------------

--
-- Table structure for table `book_category`
--

CREATE TABLE `book_category` (
  `id` int(11) NOT NULL,
  `department` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `book_category`
--

INSERT INTO `book_category` (`id`, `department`) VALUES
(2, 'Electrical Engineering'),
(3, 'Computer Science'),
(4, 'Mechanical Engineering');

-- --------------------------------------------------------

--
-- Table structure for table `chat`
--

CREATE TABLE `chat` (
  `id` int(11) NOT NULL,
  `message` varchar(5000) NOT NULL,
  `sender_id` int(50) NOT NULL,
  `date` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `chat`
--

INSERT INTO `chat` (`id`, `message`, `sender_id`, `date`) VALUES
(11, 'how are you today', 1, 'Thu Sep 22 2022 00:54:48 GMT+0100 (West Africa Sta'),
(12, 'Nice one sir', 1, 'Thu Sep 22 2022 01:02:21 GMT+0100 (West Africa Sta');

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` int(11) NOT NULL,
  `book_id` int(50) NOT NULL,
  `comment` varchar(50) NOT NULL,
  `senderEmail` varchar(50) NOT NULL,
  `date` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `book_id`, `comment`, `senderEmail`, `date`) VALUES
(3, 6, 'am fine', 'abrahamgreatebele@gmail.com', 'Tuesday 25th of October 2022'),
(4, 6, 'great', 'abrahamgreatebele@gmail.com', 'Tuesday 25th of October 2022'),
(5, 6, 'nice', 'abrahamgreatebele@gmail.com', 'Tuesday 25th of October 2022'),
(6, 6, 'nice oga', 'abrahamgreatebele@gmail.com', 'Tuesday 25th of October 2022'),
(7, 6, 'let me comment mine oo', 'ossaijoy430@gmail.com', 'Thursday 27th of October 2022'),
(8, 6, 'thank you', 'ossaijoy430@gmail.com', 'Thursday 27th of October 2022'),
(9, 6, 'nice', 'ossaijoy430@gmail.com', 'Thursday 27th of October 2022'),
(10, 6, 'thank you', 'abrahamgreatebelejumia@gmail.com', 'Thursday 27th of October 2022');

-- --------------------------------------------------------

--
-- Table structure for table `download_list`
--

CREATE TABLE `download_list` (
  `id` int(11) NOT NULL,
  `book_id` varchar(50) NOT NULL,
  `book_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `download_list`
--

INSERT INTO `download_list` (`id`, `book_id`, `book_name`, `email`) VALUES
(2, '6', 'The Great Adventure4.pdf', 'ossaijoy430@gmail.com'),
(3, '6', 'The Great Adventure4.pdf', 'ossaijoy430@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `full_name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `department` varchar(50) NOT NULL,
  `profile_pic` varchar(50) NOT NULL,
  `status` varchar(50) NOT NULL,
  `role` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `full_name`, `email`, `password`, `department`, `profile_pic`, `status`, `role`) VALUES
(4, 'Ossai Abraham', 'abrahamgreatebele@gmail.com', 'Mesomorph', 'computer science', '', 'active', ''),
(7, 'Ossai Abraham Great', 'ossaijoy430@gmail.com', 'Mesomorph1', 'Electrical Engineering', '', 'active', 'user'),
(8, 'Ossai Joy', 'abrahamgreatebelejumia@gmail.com', 'Mesomorph', 'Mechanical Engineering', '', 'active', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `book_category`
--
ALTER TABLE `book_category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chat`
--
ALTER TABLE `chat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `download_list`
--
ALTER TABLE `download_list`
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
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `book_category`
--
ALTER TABLE `book_category`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `chat`
--
ALTER TABLE `chat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `download_list`
--
ALTER TABLE `download_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
