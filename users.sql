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
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` text NOT NULL,
  `firstname` text NOT NULL,
  `lastname` text NOT NULL,
  `password` varchar(20) NOT NULL,
  `profilepicurl` text NOT NULL,
  `job` text NOT NULL,
  `location` text NOT NULL,
  `dob` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `firstname`, `lastname`, `password`, `profilepicurl`, `job`, `location`, `dob`) VALUES
(16, 'mikewazowzki@gmail.com', 'Mike', 'Wazowzki', 'mike', 'https://i.imgur.com/yU6Qu99.jpg', 'Scare Assistant', 'USA', '2020-12-12'),
(17, 'clarkkent@gmail.com', 'Clark', 'Kent', 'superman', 'https://i.imgur.com/Btt8HI7.jpg', 'Superhero', 'USA', '1950-04-01'),
(18, 'scoobydoo@gmail.com', 'Scooby', 'Doo', 'scoobysnacks', 'https://i.imgur.com/KqoKF81.jpg', 'Live Bait', 'USA', '1958-07-22'),
(19, 'kermit@gmail.com', 'Kermit', 'The Frog', 'mrspiggy', 'https://i.imgur.com/A9WomIY.jpg', 'Muppet', 'USA', '1938-02-15'),
(20, 'sherlockholmes@gmail.com', 'Sherlock', 'Holmes', 'watson', 'https://i.imgur.com/9caO6GL.jpg', 'Private Investigator', 'United Kingdom', '1854-01-06');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `id` (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
