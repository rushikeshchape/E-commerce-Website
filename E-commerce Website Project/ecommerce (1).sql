-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 26, 2022 at 08:21 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `acc-collection`
--

CREATE TABLE `acc-collection` (
  `id` int(11) NOT NULL,
  `category` varchar(255) NOT NULL,
  `prodtype` varchar(255) NOT NULL,
  `brand` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image1` varchar(255) NOT NULL,
  `image2` varchar(255) NOT NULL,
  `image3` varchar(255) NOT NULL,
  `image4` varchar(255) NOT NULL,
  `description` varchar(400) NOT NULL,
  `price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `acc-collection`
--

INSERT INTO `acc-collection` (`id`, `category`, `prodtype`, `brand`, `name`, `image1`, `image2`, `image3`, `image4`, `description`, `price`) VALUES
(17, '', 'shoes', 'NIKE', 'Sport Shoes', 'Ultraboost_21.jpg', 'Ultraboost_21_3.jpg', 'Ultraboost_21_2.jpg', 'Ultraboost_21_3.jpg', 'Nice sport shoes for playing sport running. nice quality', 999),
(18, '', 'shoes', 'NIKE', 'Sport Shoes', 'Ultraboost_21.jpg', 'Ultraboost_21_3.jpg', 'Ultraboost_21_2.jpg', 'Ultraboost_21_3.jpg', 'Nice sport shoes for playing sport running. nice quality', 999);

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`) VALUES
(1, 'admin@gmail.com', 'admin1234');

-- --------------------------------------------------------

--
-- Table structure for table `featureproduct`
--

CREATE TABLE `featureproduct` (
  `id` int(11) NOT NULL,
  `prodtype` varchar(255) NOT NULL,
  `brand` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image1` varchar(255) NOT NULL,
  `image2` varchar(255) NOT NULL,
  `image3` varchar(255) NOT NULL,
  `image4` varchar(255) NOT NULL,
  `description` varchar(400) NOT NULL,
  `price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `featureproduct`
--

INSERT INTO `featureproduct` (`id`, `prodtype`, `brand`, `name`, `image1`, `image2`, `image3`, `image4`, `description`, `price`) VALUES
(3, 'T-shirt', 'calvin klein', 'Color T-shirt', 'g18bulk.jpg', 'g18bulk2.jpg', 'g18bulk3.jpg', 'g18bulk2.jpg', 'bf h th thrit thrh ', 1099);

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `namefeed` varchar(30) NOT NULL,
  `emailfeed` varchar(50) NOT NULL,
  `feedback` varchar(5000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `namefeed`, `emailfeed`, `feedback`) VALUES
(18, 'Rushikesh Chape', 'user1@yahoo.com', 'bfb ivunofijoi fihh fhiuef fvbiuve oivhov b uvnvn');

-- --------------------------------------------------------

--
-- Table structure for table `men-collection`
--

CREATE TABLE `men-collection` (
  `id` int(11) NOT NULL,
  `category` varchar(255) NOT NULL,
  `prodtype` varchar(255) NOT NULL,
  `brand` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image1` varchar(255) NOT NULL,
  `image2` varchar(255) NOT NULL,
  `image3` varchar(255) NOT NULL,
  `image4` varchar(255) NOT NULL,
  `description` varchar(400) NOT NULL,
  `price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `men-collection`
--

INSERT INTO `men-collection` (`id`, `category`, `prodtype`, `brand`, `name`, `image1`, `image2`, `image3`, `image4`, `description`, `price`) VALUES
(2, '', 'Shirt', 'Rebook', 'T shirt', 'product-1.jpg', 'product-3.jpg', 'product-2.jpg', 'product-3.jpg', 'Nice shirtguwc rkhtv h thh vt rushi', 1099);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `prodname` varchar(255) NOT NULL,
  `size` varchar(255) NOT NULL,
  `quantity` varchar(255) NOT NULL,
  `price` varchar(255) NOT NULL,
  `image1` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `id` int(11) NOT NULL,
  `firstname` varchar(30) NOT NULL,
  `lastname` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` varchar(10) NOT NULL,
  `password` varchar(10) NOT NULL,
  `cpassword` varchar(255) NOT NULL,
  `address` text NOT NULL,
  `gender` enum('male','female') NOT NULL,
  `profile` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`id`, `firstname`, `lastname`, `email`, `phone`, `password`, `cpassword`, `address`, `gender`, `profile`) VALUES
(0, 'xyz', 'abc', 'demo11@gmail.com', '1234567890', '$2y$10$p.S', '$2y$10$C/plbOlutyFVO4OEuOR5y.kS1ti/1nRHvb9KEtAavggwQvgSw3w6q', 'patharad', 'male', 'product image 1.png');

-- --------------------------------------------------------

--
-- Table structure for table `women-collection`
--

CREATE TABLE `women-collection` (
  `id` int(11) NOT NULL,
  `prodtype` varchar(255) NOT NULL,
  `brand` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `image1` varchar(255) NOT NULL,
  `image2` varchar(255) NOT NULL,
  `image3` varchar(255) NOT NULL,
  `image4` varchar(255) NOT NULL,
  `description` varchar(400) NOT NULL,
  `price` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `women-collection`
--

INSERT INTO `women-collection` (`id`, `prodtype`, `brand`, `name`, `image1`, `image2`, `image3`, `image4`, `description`, `price`) VALUES
(1, 'clothes', 'calvin klein', 'top', 'Black Blouse Versace Coat1.jpg', 'Black Blouse Versace Coat2.jpg', 'Black Blouse Versace Coat3.jpg', 'card4.png', 'nice top \r\ncomfortable\r\nred and black in color', 866);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `acc-collection`
--
ALTER TABLE `acc-collection`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `featureproduct`
--
ALTER TABLE `featureproduct`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `men-collection`
--
ALTER TABLE `men-collection`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `women-collection`
--
ALTER TABLE `women-collection`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `acc-collection`
--
ALTER TABLE `acc-collection`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `featureproduct`
--
ALTER TABLE `featureproduct`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `men-collection`
--
ALTER TABLE `men-collection`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `women-collection`
--
ALTER TABLE `women-collection`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
