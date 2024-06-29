-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 28, 2024 at 04:49 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `amazon_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin-signin`
--

CREATE TABLE `admin-signin` (
  `Id` int(50) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `admin-signup`
--

CREATE TABLE `admin-signup` (
  `Id` int(50) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Mobile` varchar(15) NOT NULL,
  `Password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `product-add`
--

CREATE TABLE `product-add` (
  `Id` int(50) NOT NULL,
  `Name` varchar(30) NOT NULL,
  `Description` varchar(100) NOT NULL,
  `Price` varchar(50) NOT NULL,
  `Stock` varchar(20) NOT NULL,
  `Image` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `product-add`
--

INSERT INTO `product-add` (`Id`, `Name`, `Description`, `Price`, `Stock`, `Image`) VALUES
(1, 'Laptop', 'HP laptop with processor I5 intel 10th gen\r\n                        ', '55000', '5', 'amazon.png');

-- --------------------------------------------------------

--
-- Table structure for table `signin-form`
--

CREATE TABLE `signin-form` (
  `Id` int(50) NOT NULL,
  `Email` varchar(15) NOT NULL,
  `Password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `signup_form`
--

CREATE TABLE `signup_form` (
  `Id` int(50) NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Mobile` varchar(15) NOT NULL,
  `Password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `signup_form`
--

INSERT INTO `signup_form` (`Id`, `Email`, `Mobile`, `Password`) VALUES
(2, 'monali shah', '7666353864', 'monalisa'),
(3, 'khushalidudhabde27@gmail.com', '7682786787', ''),
(4, 'khushalidudhabde27@gmail.com', '7682786787', 'khushi'),
(5, 'rutika@gmail.com', '8970987656', 'rutika@123'),
(6, 'khushalidudhabde27@gmail.com', '9404313103', 'pk123'),
(11, 'mona@gmail.com', '9898989898', 'mona98'),
(12, 'admin@gmail.com', '9996669990', 'admin@123');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin-signin`
--
ALTER TABLE `admin-signin`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `admin-signup`
--
ALTER TABLE `admin-signup`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `product-add`
--
ALTER TABLE `product-add`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `signin-form`
--
ALTER TABLE `signin-form`
  ADD PRIMARY KEY (`Id`);

--
-- Indexes for table `signup_form`
--
ALTER TABLE `signup_form`
  ADD PRIMARY KEY (`Id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin-signin`
--
ALTER TABLE `admin-signin`
  MODIFY `Id` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `admin-signup`
--
ALTER TABLE `admin-signup`
  MODIFY `Id` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `product-add`
--
ALTER TABLE `product-add`
  MODIFY `Id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `signin-form`
--
ALTER TABLE `signin-form`
  MODIFY `Id` int(50) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `signup_form`
--
ALTER TABLE `signup_form`
  MODIFY `Id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
