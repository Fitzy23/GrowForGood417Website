-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Dec 04, 2024 at 04:27 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `grow_for_good_417`
--

-- --------------------------------------------------------

--
-- Table structure for table `PRODUCTS`
--

CREATE TABLE `PRODUCTS` (
  `productID` int(11) NOT NULL,
  `productName` varchar(350) NOT NULL,
  `productPrice` decimal(10,2) DEFAULT NULL,
  `productDesc` varchar(1000) NOT NULL,
  `productImage` varchar(350) NOT NULL,
  `inStock` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `PRODUCTS`
--

INSERT INTO `PRODUCTS` (`productID`, `productName`, `productPrice`, `productDesc`, `productImage`, `inStock`) VALUES
(1, 'AHHHHHHHHHHHH', 1.00, 'Plant', '../img/plant-placeholder.jpg', 1),
(2, 'This has a different nam,e now', 3000.00, 'this has a different description now', '../img/plant-placeholder.jpg', 0),
(3, 'Aloe Vera', 12.50, 'A succulent plant known for its soothing gel and medicinal properties.', '../img/plant-placeholder.jpg', 1),
(4, 'Fiddle Leaf Fig', 45.00, 'A popular indoor plant with large, glossy leaves.', '../img/plant-placeholder.jpg', 0),
(5, 'Spider Plant', 8.99, 'An easy-to-grow plant that produces little \"spiderettes.\"', '../img/plant-placeholder.jpg', 1),
(6, 'Lucky Bamboo', NULL, 'An indoor plant believed to bring good fortune and positive energy.', '../img/plant-placeholder.jpg', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `PRODUCTS`
--
ALTER TABLE `PRODUCTS`
  ADD PRIMARY KEY (`productID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `PRODUCTS`
--
ALTER TABLE `PRODUCTS`
  MODIFY `productID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
