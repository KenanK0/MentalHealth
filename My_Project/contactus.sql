-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 24, 2021 at 12:30 PM
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
-- Database: `contactus`
--

-- --------------------------------------------------------

--
-- Table structure for table `usermessages`
--

CREATE TABLE `usermessages` (
  `Email` varchar(50) NOT NULL,
  `Messages` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `usermessages`
--

INSERT INTO `usermessages` (`Email`, `Messages`) VALUES
('jujf@gmail.com', 'Awesome stuff mate!'),
('gg67@gmail.com', 'Very helpful. Keep it up!'),
('peee56@gmail.com', 'Please include Borderline Personality Disorder.'),
('swrt8@gmail.com', 'This helped a ton!'),
('56tyy@hotmail.com', 'Learned a lot'),
('peee56@gmail.com', 'Please add a section for OCD'),
('jujf@gmail.com', 'Eye opening!');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
