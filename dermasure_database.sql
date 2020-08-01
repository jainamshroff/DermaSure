-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 01, 2020 at 02:09 AM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dermasure_database`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `productname` varchar(25) NOT NULL,
  `productprice` int(25) NOT NULL,
  `productquantity` int(25) NOT NULL,
  `productid` int(25) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`productname`, `productprice`, `productquantity`, `productid`) VALUES
('Face Toner', 25, 6, NULL),
('Face Wash', 12, 4, NULL),
('Moisturizer', 15, 1, NULL),
('Sun Screen', 10, 2, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cartforid21`
--

CREATE TABLE `cartforid21` (
  `productname` varchar(25) NOT NULL,
  `productprice` int(20) NOT NULL,
  `productquantity` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `cartforid21`
--

INSERT INTO `cartforid21` (`productname`, `productprice`, `productquantity`) VALUES
('', 0, 0),
('Face Scrub', 20, 1),
('Face Toner', 25, 1);

-- --------------------------------------------------------

--
-- Table structure for table `login_signup`
--

CREATE TABLE `login_signup` (
  `id` int(11) NOT NULL,
  `Name` varchar(20) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `login_signup`
--

INSERT INTO `login_signup` (`id`, `Name`, `Email`, `Password`) VALUES
(23, 'Jainam Shroff', 'jainam.shroff@outlook.com', 'Jainam123'),
(24, 'Hello World', 'helloworld@gmail.com', 'helloworld');

-- --------------------------------------------------------

--
-- Table structure for table `myguests`
--

CREATE TABLE `myguests` (
  `id` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `myguests20`
--

CREATE TABLE `myguests20` (
  `id` int(6) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`productname`);

--
-- Indexes for table `login_signup`
--
ALTER TABLE `login_signup`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `myguests`
--
ALTER TABLE `myguests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `myguests20`
--
ALTER TABLE `myguests20`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `login_signup`
--
ALTER TABLE `login_signup`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `myguests`
--
ALTER TABLE `myguests`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `myguests20`
--
ALTER TABLE `myguests20`
  MODIFY `id` int(6) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
