-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 25, 2020 at 09:22 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phpdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `mentees`
--

CREATE TABLE `mentees` (
  `menteeId` int(11) NOT NULL,
  `firstName` varchar(255) NOT NULL,
  `lastName` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `mentor` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mentees`
--

INSERT INTO `mentees` (`menteeId`, `firstName`, `lastName`, `email`, `password`, `description`, `mentor`) VALUES
(1, 'A', 'A', 'A', 'A', 'A', 1),
(2, 'Kester', 'kes', 'kes@2.com', 'password', 'intresting', 0),
(3, 'trust', 'trusty', 'trust@2.com', 'password', 'PHP Beginner Class', 2),
(4, 'trust', 'trusty', 'trust@2.com', 'password', 'PHP Beginner Class', 2),
(5, 'trustee', 'trusty', 'trust@3.com', 'password', 'PHP Beginner Class', 1),
(6, 'Kester', 'testing', 'admin@test.com', 'pgste', 'First course', 6);

-- --------------------------------------------------------

--
-- Table structure for table `mentors`
--

CREATE TABLE `mentors` (
  `mentorId` int(11) NOT NULL,
  `firstName` varchar(255) NOT NULL,
  `lastName` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `phoneNumber` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `expertise` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `mentors`
--

INSERT INTO `mentors` (`mentorId`, `firstName`, `lastName`, `email`, `password`, `phoneNumber`, `description`, `expertise`) VALUES
(1, 'A', 'A', 'A', 'A', 'A', 'A', 'A'),
(2, 'B', 'B', 'B', 'B', 'B', 'B', 'B'),
(3, 'Test', 'testing', 'test@2.com', 'password', '0703976543', 'intresting', 'science'),
(4, 'Test', 'trusty', 'test@2.com', 'password', '07030832197', 'intresting', 'science'),
(5, 'Test', 'trusty', 'test@2.com', 'password', '07030832197', 'intresting', 'science'),
(6, 'r', 'r', 'emmanuel@test.com', 'def', '432222', 'intresting', 'science'),
(7, 'r', 'r', 'emmanuel@test.com', 'def', '432222', 'intresting', 'science'),
(8, 'r', 'r', 'emmanuel@test.com', 'def', '432222', 'intresting', 'science'),
(9, 'r', 'r', 'emmanuel@test.com', 'def', '432222', 'intresting', 'science'),
(10, 'r', 'r', 'emmanuel@test.com', 'def', '432222', 'intresting', 'science'),
(11, 'r', 'r', 'emmanuel@test.com', 'test', '432222', 'intresting', 'science');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mentees`
--
ALTER TABLE `mentees`
  ADD PRIMARY KEY (`menteeId`);

--
-- Indexes for table `mentors`
--
ALTER TABLE `mentors`
  ADD PRIMARY KEY (`mentorId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `mentees`
--
ALTER TABLE `mentees`
  MODIFY `menteeId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `mentors`
--
ALTER TABLE `mentors`
  MODIFY `mentorId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
