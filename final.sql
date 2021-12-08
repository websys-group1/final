-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 08, 2021 at 06:04 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.4.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `final`
--

-- --------------------------------------------------------

--
-- Table structure for table `claimed`
--

CREATE TABLE `claimed` (
  `item` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `rin` int(9) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `claimed`
--

INSERT INTO `claimed` (`item`, `name`, `rin`, `email`) VALUES
('me', 'Chloe Jepson', 90, 'jepsoc@rpi.edu'),
('me', 'Chloe Jepson', 90, 'jepsoc@rpi.edu'),
('me', 'Chloe Jepson', 90, 'jepsoc@rpi.edu'),
('me', 'Chloe Jepson', 90, 'jepsoc@rpi.edu'),
('book', 'lubna', 90, 'lubna@rpi.edu'),
('book', 'Chloe Jepson', 90, 'jepsoc@rpi.edu'),
('book', 'Chloe Jepson', 90, 'jepsoc@rpi.edu'),
('me', 'Chloe Jepson', 90, 'jepsoc@rpi.edu'),
('me', 'Chloe Jepson', 90, 'jepsoc@rpi.edu'),
('me', 'Chloe Jepson', 90, 'jepsoc@rpi.edu');

-- --------------------------------------------------------

--
-- Table structure for table `discussion`
--

CREATE TABLE `discussion` (
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `discription` varchar(10000) NOT NULL,
  `rin` int(9) NOT NULL,
  `date` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `discussion`
--

INSERT INTO `discussion` (`name`, `email`, `discription`, `rin`, `date`) VALUES
('Chloe Jepson', 'jepsoc@rpi.edu', 'hi!', 90, '1/11/12'),
('Lubna', 'lubna@rpi.edu', 'we fixed it ', 90, '34/34/34'),
('Michelle Lynn Jepson', 'mjepson@rpi.edu', 'lost book', 90, '2/3/4'),
('Erin', 'erin@rpi.edu', 'working on midterms!', 90, '1/1/1');

-- --------------------------------------------------------

--
-- Table structure for table `found`
--

CREATE TABLE `found` (
  `item` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL,
  `description` varchar(2000) NOT NULL,
  `rin` int(9) NOT NULL,
  `email` varchar(100) NOT NULL,
  `location` varchar(1000) NOT NULL,
  `LorF` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `found`
--

INSERT INTO `found` (`item`, `name`, `image`, `description`, `rin`, `email`, `location`, `LorF`) VALUES
('me', 'Chloe Jepson', 'profilepic.jpg', 'picture of me', 90, 'jepsoc@rpi.edu', 'union', 'found'),
('me', 'Chloe Jepson', 'profilepic.jpg', 'picture of me', 90, 'jepsoc@rpi.edu', 'union', 'found'),
('me', 'Chloe Jepson', 'profilepic.jpg', 'picture of me', 90, 'jepsoc@rpi.edu', 'union', 'found'),
('me', 'Chloe Jepson', 'profilepic.jpg', 'picture of me', 90, 'jepsoc@rpi.edu', 'union', 'found'),
('book', 'Chloe Jepson', 'pie-chart.png', 'bio textbook', 90, 'jepsoc@rpi.edu', 'folsom', 'found'),
('book', 'xhloe', 'pie-chart.png', 'pie chart image', 32, 'jepsoc@rpi.edu', 'union', 'lost');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(100) NOT NULL,
  `password` text NOT NULL,
  `name` varchar(100) NOT NULL,
  `id` varchar(100) NOT NULL,
  `is_admin` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `password`, `name`, `id`, `is_admin`) VALUES
('user1', 'password1', 'bob', '90', 0),
('user2', 'password2', 'bob2', '90', 0);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
