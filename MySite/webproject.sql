-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 13, 2021 at 06:30 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `webproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `username` varchar(200) NOT NULL,
  `password` varchar(200) NOT NULL,
  `datetime` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `username`, `password`, `datetime`) VALUES
(6, 'rishabhtiwari1702@gmail.com', 'rishabh', '2021-05-12 23:27:58'),
(7, 'rishabhtiwari1702@gmail.com', 'rishabh', '2021-05-12 23:27:58'),
(8, 'rishabhtiwari1702@gmail.com', 'rishabh', '2021-05-12 23:27:58'),
(9, 'rishabhtiwari1702@gmail.com', 'rishabh', '2021-05-12 23:27:58'),
(10, 'rishabhtiwari1702@gmail.com', 'rishabh', '2021-05-12 23:27:58'),
(11, 'rishabhtiwari1702@gmail.com', 'rishabh', '2021-05-12 23:27:58'),
(12, 'rishabhtiwari1702@gmail.com', 'rishabh', '2021-05-12 23:27:58'),
(13, 'rishabhtiwari1702@gmail.com', 'rishabh', '2021-05-12 23:28:32');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `fathername` varchar(200) NOT NULL,
  `collegename` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `mobileno` int(11) NOT NULL,
  `dob` date NOT NULL,
  `password` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `name`, `fathername`, `collegename`, `email`, `mobileno`, `dob`, `password`) VALUES
(1, 'Rishabh tiwari', 'Ganga prasad tiwari', 'AITM', 'rishabhtiwari1702@gmail.com', 2147483647, '2021-05-11', 'rishabh');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
