-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 10, 2021 at 07:51 AM
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
('Ring', 'Chloe Jepson', 90, 'jepsoc@rpi.edu'),
('Book', 'Lubna', 32, 'lubna@rpi.edu'),
('Hat', 'Rex', 80, 'rex@rpi.edu'),
('Black Tshirt', 'Michelle', 78, 'michelle@rpi.edu'),
('Pencil', 'Tom', 34, 'tom@rpi.edu');

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
('Lubna', 'lubna@rpi.edu', 'we fixed it ', 90, '34/34/34'),
('Erin', 'erin@rpi.edu', 'working on midterms!', 90, '1/1/1'),
('Chloe Jepson', 'jepsoc@rpi.edu', 'Has anyone seen a blue book in the union?', 661993521, '12/10/21'),
('Rex', 'rex@rpi.edu', 'I found a key on the ground near the Rahps Dorms', 78, '12/11/21');

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
('Textbook', 'Chloe Jepson', 'imageOfBook.png', 'Blue bio textbook', 661993521, 'jepsoc@rpi.edu', 'Union', 'Found'),
('Ring', 'Lubna Ismail', 'imageOfRing.jpg', 'Diamond ring', 661995683, 'lubna@rpi.edu', 'Folsom Library', 'Found'),
('IPhone', 'Paul Jang', 'imageOfPhone.png', 'Black IPhone XR', 661993233, 'paul@rpi.edu', 'Lally', 'found');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `username` varchar(100) NOT NULL,
  `password` text NOT NULL,
  `name` varchar(100) NOT NULL,
  `id` varchar(100) NOT NULL,
  `is_admin` tinyint(4) NOT NULL,
  `email` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`username`, `password`, `name`, `id`, `is_admin`, `email`) VALUES
('user1', 'password1', 'bob', '90', 0, ''),
('user2', 'password2', 'bob2', '90', 0, ''),
('chloej', '$2y$10$ZdXTMCPMrahtDd9nCfXJVOAB2TYLXT628cAsPz6vjAs4iOHzDXl3i', 'Chloe Jepson', '', 0, 'jepsoc@rpi.edu'),
('user3', '$2y$10$RGfhC8fD31A1e.3AeArJju0KwkKXXnOgzas.67FxW9FGVylJblZWK', 'Michelle', '', 0, 'michelle@rpi.edu');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
