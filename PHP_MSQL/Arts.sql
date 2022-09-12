-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: fdb27.runhosting.com
-- Generation Time: Jun 16, 2021 at 02:01 PM
-- Server version: 5.7.20-log
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `3797345_vasilogamvros`
--

-- --------------------------------------------------------

--
-- Table structure for table `Arts`
--

CREATE TABLE `Arts` (
  `Code` int(6) UNSIGNED NOT NULL,
  `Artist` varchar(30) NOT NULL,
  `Title` varchar(30) NOT NULL,
  `Year` float NOT NULL,
  `Price` float NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Arts`
--

INSERT INTO `Arts` (`Code`, `Artist`, `Title`, `Year`, `Price`) VALUES
(455, 'Rafael', 'Deposition of Christ', 1507, 900),
(556, 'Michelangelo', 'The Last Judgement', 1541, 8000),
(355, 'Sandro Botticelli', 'Divine Comedy', 1485, 1900),
(155, 'Sandro Botticelli', 'The Birth of Venus', 1485, 2900),
(560, 'Titian', 'Bacchus and Ariadne', 1523, 3955),
(880, 'Leonardo da Vinci', 'Mona Lisa', 1517, 650),
(888, 'Leonardo ', 'THE SEA', 2005, 50),
(999, 'Bansky', 'Dolphins', 2015, 600);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Arts`
--
ALTER TABLE `Arts`
  ADD PRIMARY KEY (`Code`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Arts`
--
ALTER TABLE `Arts`
  MODIFY `Code` int(6) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=1000;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
