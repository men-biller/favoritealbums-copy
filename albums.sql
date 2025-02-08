-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 08, 2025 at 05:22 AM
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
-- Database: `favalbums`
--

-- --------------------------------------------------------

--
-- Table structure for table `albums`
--

CREATE TABLE `albums` (
  `id` int(11) NOT NULL,
  `fav_album` varchar(100) NOT NULL,
  `fav_artist` varchar(50) NOT NULL,
  `fav_genre` varchar(30) NOT NULL,
  `worst_album` varchar(100) NOT NULL,
  `worst_artist` varchar(50) NOT NULL,
  `worst_genre` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `albums`
--

INSERT INTO `albums` (`id`, `fav_album`, `fav_artist`, `fav_genre`, `worst_album`, `worst_artist`, `worst_genre`) VALUES
(10, 'The Dark Side of the Moon', 'Pink Floyd', 'Rock', 'AM', 'Arctic Monkeys', 'Indie'),
(11, 'Amok', 'Atoms for Peace', 'Electronic', 'Beach House', 'Beach House', 'Indie'),
(12, 'Post', 'Bjork', 'Electronic', 'Red Light', 'Bladee', 'Rap'),
(13, 'Blonde on Blonde', 'Bob Dylan', 'Folk', 'Wachito Rico', 'boy pablo', 'Indie'),
(14, 'Another Green World', 'Brian Eno', 'Electronic ', 'Innerwar', 'Brighter Death Now', 'Metal');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `albums`
--
ALTER TABLE `albums`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `albums`
--
ALTER TABLE `albums`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
