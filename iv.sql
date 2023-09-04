-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 04, 2023 at 08:41 AM
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
-- Database: `iv`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminlog`
--

CREATE TABLE `adminlog` (
  `id` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `adminlog`
--

INSERT INTO `adminlog` (`id`, `pass`) VALUES
('ums', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `album`
--

CREATE TABLE `album` (
  `artist` varchar(255) NOT NULL,
  `album_name` varchar(255) NOT NULL,
  `year` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `album`
--

INSERT INTO `album` (`artist`, `album_name`, `year`) VALUES
('jay', 'jay album', 2023);

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `feedback` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`name`, `email`, `feedback`) VALUES
('admin', 'admin', 'this is admin testing'),
('Sheth Uday Mayurbhai', 'pafeye6598@jobbrett.com', 'Hu');

-- --------------------------------------------------------

--
-- Table structure for table `music`
--

CREATE TABLE `music` (
  `id` int(11) NOT NULL,
  `artist_name` varchar(255) NOT NULL,
  `music_name` varchar(255) NOT NULL,
  `time` varchar(255) NOT NULL,
  `music_path` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `music`
--

INSERT INTO `music` (`id`, `artist_name`, `music_name`, `time`, `music_path`) VALUES
(40, '7 bantaiz', 'Achanak Bhayanak', '3:37', '../admin/upload/Achanak Bhayanak.mp3'),
(41, '7 bantaiz', 'EL Chapo', '3:47', '../admin/upload/EL Chapo.mp3'),
(42, '7 bantaiz', 'In My Head', '4:26', '../admin/upload/In My Head.mp3'),
(43, '7 bantaiz', 'Jhoom Zara', '4:15', '../admin/upload/Jhoom Zara.mp3'),
(46, 'Ap Dhillion', 'Brown munde', '4:27', '../admin/upload/BROWN MUNDE.mp3'),
(47, 'Ap Dhillion', 'Goat', '2:39', '../admin/upload/GOAT.mp3'),
(48, 'Ap Dhillion', 'TakeOver', '3:33', '../admin/upload/TAKEOVER.mp3'),
(49, 'Ap Dhillion', 'True Stories', '2:01', '../admin/upload/True Stories.mp3'),
(50, 'Ap Dhillion', 'Insane', '3:23', '../admin/upload/INSANE.mp3'),
(51, '7 bantaiz', 'White Collar', '3:06', '../admin/upload/White Collar.mp3');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `email` varchar(255) NOT NULL,
  `pass` varchar(255) NOT NULL,
  `repass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`email`, `pass`, `repass`) VALUES
('shethuday8@gmail.com', 'sheth', 'sheth'),
('shethuday505@gmail.com', 'ums', 'ums'),
('admin', 'admin', 'admin'),
('ajdaksg@gmail.com', 'abc', 'abc');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `music`
--
ALTER TABLE `music`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `music`
--
ALTER TABLE `music`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
