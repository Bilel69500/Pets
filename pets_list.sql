-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:8889
-- Generation Time: Apr 11, 2022 at 01:17 AM
-- Server version: 5.7.34
-- PHP Version: 7.4.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pets`
--

-- --------------------------------------------------------

--
-- Table structure for table `pets_list`
--

CREATE TABLE `pets_list` (
  `id` int(11) NOT NULL,
  `name` varchar(128) NOT NULL,
  `race` varchar(128) NOT NULL,
  `age` int(11) NOT NULL,
  `soin` varchar(128) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pets_list`
--

INSERT INTO `pets_list` (`id`, `name`, `race`, `age`, `soin`) VALUES
(2, 'chiena', 'shiba inu', 17, 'aucun'),
(3, 'eaeaeaea', 'eaeaae', 74, 'aeeae'),
(4, 'test', 'doge', 41, 'aucun'),
(5, 'cali', 'rotewiler', 74, 'aza');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `pets_list`
--
ALTER TABLE `pets_list`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `pets_list`
--
ALTER TABLE `pets_list`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
