-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 10, 2021 at 02:09 PM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bank`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `control` int(11) NOT NULL,
  `cunstomerId` int(11) DEFAULT NULL,
  `accNumber` int(11) DEFAULT NULL,
  `type` varchar(20) DEFAULT NULL,
  `widrawalLimit` int(11) DEFAULT NULL,
  `balance` double DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`control`, `cunstomerId`, `accNumber`, `type`, `widrawalLimit`, `balance`) VALUES
(17, 747657, 162724, 'savings', 10200, 897),
(18, 747657, 162724, 'savings', 10200, 897);

-- --------------------------------------------------------

--
-- Table structure for table `address`
--

CREATE TABLE `address` (
  `control` int(11) NOT NULL,
  `userId` int(11) DEFAULT NULL,
  `type` varchar(20) DEFAULT NULL,
  `street` varchar(100) DEFAULT NULL,
  `city` varchar(50) DEFAULT NULL,
  `country` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `address`
--

INSERT INTO `address` (`control`, `userId`, `type`, `street`, `city`, `country`) VALUES
(13, 747657, 'savings', '2092 hillside oktree', 'bulawayo', 'zimbabwe'),
(14, 747657, 'savings', '2092 hillside oktree', 'bulawayo', 'zimbabwe');

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `control` int(11) NOT NULL,
  `name` varchar(20) DEFAULT NULL,
  `surname` varchar(20) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`control`, `name`, `surname`, `email`) VALUES
(1, 'admin', 'admin', 'admin@bank.com');

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `control` int(11) NOT NULL,
  `companyId` int(11) DEFAULT NULL,
  `regnumber` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `contactnumber`
--

CREATE TABLE `contactnumber` (
  `control` int(11) NOT NULL,
  `customerID` int(11) DEFAULT NULL,
  `countryCode` int(11) DEFAULT NULL,
  `type` varchar(20) DEFAULT NULL,
  `number` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contactnumber`
--

INSERT INTO `contactnumber` (`control`, `customerID`, `countryCode`, `type`, `number`) VALUES
(11, 747657, 263, 'savings', 119915894),
(12, 747657, 263, 'savings', 119915894);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `control` int(11) NOT NULL,
  `ID` int(11) DEFAULT NULL,
  `name` varchar(20) DEFAULT NULL,
  `surname` varchar(20) DEFAULT NULL,
  `dob` varchar(15) DEFAULT NULL,
  `company` varchar(200) DEFAULT NULL,
  `age` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`control`, `ID`, `name`, `surname`, `dob`, `company`, `age`) VALUES
(25, 747657, 'jacob', 'sziba', '12 march 1998', 'steward  bank', 26),
(26, 747657, 'jacob', 'sziba', '12 march 1998', 'steward  bank', 26);

-- --------------------------------------------------------

--
-- Table structure for table `deposit`
--

CREATE TABLE `deposit` (
  `control` int(11) NOT NULL,
  `transactionNumber` varchar(50) DEFAULT NULL,
  `customerId` int(11) DEFAULT NULL,
  `account` int(11) DEFAULT NULL,
  `amount` float DEFAULT NULL,
  `type` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `deposit`
--

INSERT INTO `deposit` (`control`, `transactionNumber`, `customerId`, `account`, `amount`, `type`) VALUES
(1, '2', 334444, 0, 4556, 'deposit'),
(2, '2', 334444, 0, 223, 'deposit');

-- --------------------------------------------------------

--
-- Table structure for table `email`
--

CREATE TABLE `email` (
  `control` int(11) NOT NULL,
  `customerId` int(11) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `email`
--

INSERT INTO `email` (`control`, `customerId`, `email`) VALUES
(10, 747657, 'emailaccount@gmail.com'),
(11, 747657, 'emailaccount@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `tailor`
--

CREATE TABLE `tailor` (
  `control` int(11) NOT NULL,
  `name` varchar(20) DEFAULT NULL,
  `surname` varchar(20) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tailor`
--

INSERT INTO `tailor` (`control`, `name`, `surname`, `email`) VALUES
(1, 'tailor', 'tailor', 'tailor@bank.com');

-- --------------------------------------------------------

--
-- Table structure for table `transfer`
--

CREATE TABLE `transfer` (
  `control` int(11) NOT NULL,
  `transactionNumber` int(11) DEFAULT NULL,
  `from_customerId` int(11) DEFAULT NULL,
  `from_account` int(11) DEFAULT NULL,
  `amount` float DEFAULT NULL,
  `type` varchar(20) DEFAULT NULL,
  `to_customerId` int(11) DEFAULT NULL,
  `to_account` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `withdrawal`
--

CREATE TABLE `withdrawal` (
  `control` int(11) NOT NULL,
  `transactionNumber` int(11) DEFAULT NULL,
  `customerId` int(11) DEFAULT NULL,
  `account` varchar(20) DEFAULT NULL,
  `amount` double DEFAULT NULL,
  `type` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `withdrawal`
--

INSERT INTO `withdrawal` (`control`, `transactionNumber`, `customerId`, `account`, `amount`, `type`) VALUES
(1, 2, 334444, 'store', 34322, 'deposit');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`control`);

--
-- Indexes for table `address`
--
ALTER TABLE `address`
  ADD PRIMARY KEY (`control`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`control`);

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`control`);

--
-- Indexes for table `contactnumber`
--
ALTER TABLE `contactnumber`
  ADD PRIMARY KEY (`control`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`control`);

--
-- Indexes for table `deposit`
--
ALTER TABLE `deposit`
  ADD PRIMARY KEY (`control`);

--
-- Indexes for table `email`
--
ALTER TABLE `email`
  ADD PRIMARY KEY (`control`);

--
-- Indexes for table `tailor`
--
ALTER TABLE `tailor`
  ADD PRIMARY KEY (`control`);

--
-- Indexes for table `transfer`
--
ALTER TABLE `transfer`
  ADD PRIMARY KEY (`control`);

--
-- Indexes for table `withdrawal`
--
ALTER TABLE `withdrawal`
  ADD PRIMARY KEY (`control`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `control` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `address`
--
ALTER TABLE `address`
  MODIFY `control` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `control` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `control` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `contactnumber`
--
ALTER TABLE `contactnumber`
  MODIFY `control` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `control` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `deposit`
--
ALTER TABLE `deposit`
  MODIFY `control` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `email`
--
ALTER TABLE `email`
  MODIFY `control` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `tailor`
--
ALTER TABLE `tailor`
  MODIFY `control` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `transfer`
--
ALTER TABLE `transfer`
  MODIFY `control` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `withdrawal`
--
ALTER TABLE `withdrawal`
  MODIFY `control` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
