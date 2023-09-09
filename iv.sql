-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 09, 2023 at 04:20 PM
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
('admin', 'admin');

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
('ap Dhillion', 'ap new', 2023);

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `msg` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`name`, `email`, `msg`) VALUES
('Uday', 'uday@sheth.com', 'I want to join your compnay');

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
('sheth', 'shethuday505@gmail.com', 'this is nice looking website'),
('ums', 'shethuday8@gmail.com', 'this website is working without ads');

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
(51, '7 bantaiz', 'White Collar', '3:06', '../admin/upload/White Collar.mp3'),
(52, 'Random', 'Pirates of the Caribbean (FROTO Remix)', '5:30', '../admin/upload/Pirates of the Caribbean (FROTO Remix).mp3'),
(55, 'Random', 'BALLER X BROWN MUNDE X DOGAR', '3:02', '../admin/upload/BALLER X BROWN MUNDE X DOGAR.mp3'),
(56, 'Random', 'Dancing - [ Slowed + Reverb ]', '4:15', '../admin/upload/Dancin - [ Slowed + reverbed ].mp3'),
(57, 'Random', 'Bella Ciao - La Casa De Papel (CrazyDaniel Remix)', '3:12', '../admin/upload/Bella Ciao - La Casa De Papel (CrazyDaniel Remix).mp3'),
(58, 'Random', 'DARKSIDE (slowed + reverb)', '3:30', '../admin/upload/DARKSIDE (slowed + reverb).mp3'),
(59, 'Random', 'Fairytale (Extended Mix)', '2:46', '../admin/upload/Fairytale (Extended Mix).mp3'),
(60, 'Random', 'Clandestina ( slowed )', '3:33', '../admin/upload/Clandestina ( slowed ).mp3'),
(61, 'Random', 'Rubicon Drill Slo-Fi', '3:43', '../admin/upload/Rubicon Drill Slo-Fi.mp3'),
(62, 'Random', 'Habibi X Safari (Mashup)', '2:09', '../admin/upload/Habibi X Safari (Mashup).mp3'),
(63, 'Mc Stan', 'NUMBERKARI', '4:08', '../admin/upload/NUMBERKARI.mp3'),
(64, 'Mc Stan', 'BROKE IS A JOKE', '3:35', '../admin/upload/BROKE IS A JOKE.mp3'),
(65, 'Mc Stan', 'AMIN TADIPAAR', '6:33', '../admin/upload/AMIN TADIPAAR.mp3'),
(66, 'Mc Stan', 'Basti Ka Hasti', '3:15', '../admin/upload/Basti Ka Hasti.mp3'),
(67, 'Mc Stan', 'Ek Din Pyar (Slowed Reverb)', '4:03', '../admin/upload/Ek Din Pyar (Slowed Reverb).mp3');

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
('admin', 'admin', 'admin'),
('shethuday505@gmail.com', 'ums', 'ums'),
('tanush@gmail.com', 'tanush', 'tanush');

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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=68;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
