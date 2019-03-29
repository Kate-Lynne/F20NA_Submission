-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 29, 2019 at 09:16 AM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `f20na_login`
--

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `url` text NOT NULL,
  `name` text NOT NULL,
  `userID` int(11) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`url`, `name`, `userID`, `timestamp`) VALUES
('https://i.imgur.com/PgycsnA.jpg', 'Cruising in the Mystery Machine.', 18, '2019-03-29 01:49:49'),
('https://i.imgur.com/t2pmuem.jpg', 'Scooby snacks are for Scooby Doo', 18, '2019-03-29 01:50:57'),
('https://i.imgur.com/Kq15gjY.jpg', 'Hard night on the kryptonite, regretting it this morning', 17, '2019-03-29 01:52:05'),
('https://i.imgur.com/8AgMeI5.jpg', 'Much love for this one', 19, '2019-03-29 01:53:20'),
('https://i.imgur.com/taXxSwf.jpg', '23-19 in work today', 16, '2019-03-29 01:55:00'),
('https://i.imgur.com/JmtlLnW.png', 'Another day at the top #dreamteam', 16, '2019-03-29 01:55:57'),
('https://i.imgur.com/2s1eNPk.jpg', 'Bad hair day = New hat day', 20, '2019-03-29 01:57:49'),
('https://i.imgur.com/7vi5LWk.jpg', 'Good..... but not gold..', 20, '2019-03-29 01:59:34'),
('https://i.imgur.com/YrKbR1m.jpg', 'Stuck with these muppets today', 19, '2019-03-29 02:01:27'),
('https://i.imgur.com/lAcuB2a.jpg', 'Throwback Pic', 17, '2019-03-29 02:03:19');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
