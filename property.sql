-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 30, 2020 at 07:17 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `property`
--

-- --------------------------------------------------------

--
-- Table structure for table `properties`
--

CREATE TABLE `properties` (
  `PROPERTY_ID` int(20) NOT NULL,
  `PROPERTY_ADDRESS` varchar(255) NOT NULL,
  `PROPERTY_PRICE` int(10) NOT NULL,
  `DATE_CREATED` varchar(255) NOT NULL,
  `status` varchar(10) NOT NULL,
  `owner_name` varchar(255) NOT NULL,
  `owner_mobile` varchar(10) NOT NULL,
  `IMAGE` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `properties`
--

INSERT INTO `properties` (`PROPERTY_ID`, `PROPERTY_ADDRESS`, `PROPERTY_PRICE`, `DATE_CREATED`, `status`, `owner_name`, `owner_mobile`, `IMAGE`) VALUES
(2, '3293 John F. Kennedy Blvd\r\nJersey City, NJ 07307', 400000, '2020-11-29', 'active', 'vamshi', '2012384414', 'images/3293.jpg'),
(16, '3394, John F kennedy boulevard, jersey city, New jersey', 650000, '2020-11-29', 'active', 'vamshi', '2012384414', 'Images/3394.jpg'),
(17, '3628, John F kennedy boulevard, jersey city, New jersey', 500000, '2020-11-29', 'active', 'vamshi', '2012384414', 'Images/3628.jpg'),
(18, '3134, John F Kennedy Boulevard, jersey city, New Jersey.', 750000, '2020-11-29', 'active', 'vamshi', '2012384414', 'Images/3134.jpg'),
(19, '3162 Adams St, Hoboken, NJ 07030', 700000, '2020-11-30', 'active', 'Akhilkumar', '2012345678', 'Images/3162.jpg'),
(20, '4314, groove St, Hoboken, NJ 07030', 630000, '2020-11-30', 'active', 'Akhilkumar', '2012345678', 'Images/4314.jpg'),
(21, '4768, queens St, Hoboken, NJ 07030', 87000, '2020-11-30', 'active', 'Akhilkumar', '2012345678', 'Images/4768.jpg'),
(23, '5142 Kapkowski Rd, Elizabeth, NJ 07201', 120000, '2020-11-30', 'active', 'Akhilkumar', '2012345678', 'Images/5142.jpg'),
(24, '7136 Kapkowski Rd, Elizabeth, NJ 07201', 93000, '2020-11-30', 'active', 'Akhilkumar', '2012345678', 'Images/7136.jpg'),
(25, '9134 jfk boulevard, jersey city, New jersey.', 99000, '2020-11-30', 'active', 'Akhilkumar', '2012345678', 'Images/9134.jpg'),
(26, '6312 Kapkowski Rd, Elizabeth, NJ 07201', 99000, '2020-11-30', 'active', 'Akhilkumar', '2012345678', 'Images/6312.jpg'),
(27, '3294 John F. Kennedy Blvd\r\nJersey City, NJ 07307', 400000, '2020-11-30', 'active', 'Akhilkumar', '2012345678', 'Images/3294.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `user_details`
--

CREATE TABLE `user_details` (
  `UserID` int(20) NOT NULL,
  `UserName` varchar(10) NOT NULL,
  `FirstName` varchar(50) NOT NULL,
  `LastName` varchar(50) NOT NULL,
  `Password` varchar(30) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `MobileNumber` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user_details`
--

INSERT INTO `user_details` (`UserID`, `UserName`, `FirstName`, `LastName`, `Password`, `Email`, `MobileNumber`) VALUES
(326253, 'vamshi', 'vamshi', 'krishna', '2705', 'vamshi@gmail.com', 2012384414),
(764695, 'Akhilkumar', 'Akhil', 'Kumar', 'rishi', 'akhilkumar@gmail.com', 2012345678),
(829721, 'rishi1', 'Rishi', 'kumar', 'akhil', 'rishi@gmail.com', 2012342738),
(861343, 'scotty', 'Scotty', 'R', 'scotty', 'scotty@gmail.com', 2147483647);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `properties`
--
ALTER TABLE `properties`
  ADD PRIMARY KEY (`PROPERTY_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `properties`
--
ALTER TABLE `properties`
  MODIFY `PROPERTY_ID` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
