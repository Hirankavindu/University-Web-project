-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 25, 2022 at 04:30 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lms`
--

-- --------------------------------------------------------

--
-- Table structure for table `donationmethod`
--

CREATE TABLE `donationmethod` (
  `id` int(11) NOT NULL,
  `amount` varchar(50) NOT NULL,
  `cardnumber` int(11) NOT NULL,
  `holdername` int(11) NOT NULL,
  `month` int(11) NOT NULL,
  `year` int(11) NOT NULL,
  `cvv` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `donationmethod`
--

INSERT INTO `donationmethod` (`id`, `amount`, `cardnumber`, `holdername`, `month`, `year`, `cvv`) VALUES
(0, '15100', 125469, 0, 7, 1999, 65);

-- --------------------------------------------------------

--
-- Table structure for table `student_registration`
--

CREATE TABLE `student_registration` (
  `id` int(5) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `confirmpassword` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `student_registration`
--

INSERT INTO `student_registration` (`id`, `firstname`, `lastname`, `username`, `email`, `password`, `confirmpassword`) VALUES
(9, 'Hiran', ' Kavindu', 'Hiran', ' Hiran@gmail.com', 'Hiran1234', 'Hiran1234'),
(10, 'vishmi', ' nimasha', 'vishmi', ' vishmi@gmail.com', 'vishmi1234', 'vishmi1234'),
(11, 'sachini', ' anjana', 'sachini', ' sachini@gmail.com', 'sachini1234', 'sachini1234'),
(12, 'yashod', ' prabhashana', 'yashod', ' yashod@gmail.com', 'Yashod1234', 'Yashod1234'),
(13, 'akash', ' gamage', 'akash', ' akash@gmail.com', 'Akash1234', 'Akash1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `donationmethod`
--
ALTER TABLE `donationmethod`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student_registration`
--
ALTER TABLE `student_registration`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `student_registration`
--
ALTER TABLE `student_registration`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
