-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 11, 2019 at 09:06 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `courier`
--

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `address` varchar(60) NOT NULL,
  `phone` bigint(20) NOT NULL,
  `email` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `username`, `password`, `address`, `phone`, `email`) VALUES
(1, 'vinay', 'fghfgh456', 'No.6/7, Kamalanagar, Bangalore-79', 9066770327, 'abc@gmail.com'),
(2, 'Yashas', 'yash3695', 'No.10, Rajajinagar Main Road, Bangalore-10', 9876543211, 'yashas0308@gmail.com'),
(3, 'abcd', 'abcd9876', 'No 3, Basaveshnagar, Bangalore-91', 934315756, 'example@gmail.com'),
(4, 'Rakesh', 'rakeshak6547', 'No.89, Indranagar, Bangalore-12', 7865544214, 'rakesh134@gmail.com'),
(5, 'Rekha', 'rekha875', 'No.6/7, Kamalanagar, Bangalore-79', 9071236353, 'rekhashok522@gmail.com'),
(6, 'Keerthi', 'keer785634', 'No.6/7, Kamalanagar, Bangalore-79', 7515845313, 'keerthi26@gmail.com'),
(7, 'sudarshan', 'asgd65144', 'No.30, gangnagar,Kolar-63', 578418644, 'sudh@gmail.com'),
(8, 'Gagana', 'gag456', 'Killari Road', 564654654, 'gagana@gmail.com'),
(9, 'jhdgfkbs', 'ahdg45', 'No.6/7, Kamalanagar, Bangalore-79', 9876543211, 'y@gmail.com'),
(10, 'yasha', 'yas4567', 'No.6/7, Kamalanagar, Bangalore-79', 9876543211, 'yashas@gmail.com'),
(11, 'yash', 'yas789', 'No.6/7, Kamalanagar, Bangalore-79', 0, 'yashas008@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `id` int(11) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `education` varchar(40) NOT NULL,
  `designation` varchar(20) NOT NULL,
  `address` varchar(60) NOT NULL,
  `phone` bigint(20) NOT NULL,
  `email` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`id`, `username`, `password`, `education`, `designation`, `address`, `phone`, `email`) VALUES
(1, 'Ganesha', 'gane2345', 'SSLC', 'Delivery Service', 'No.6/7, Kamalanagar, Bangalore-79', 7865544214, 'gane948@gmail.com'),
(2, 'Rahul', 'rahu958476', 'B.COM', 'Director', 'No.10, Basavangudi, Bangalore-54', 654541842, 'rahul1976@gmail.com'),
(3, 'Rambo', 'an7587', '2nd PUC', 'Non Working Staff', 'No.6/7, Kamalanagar, Bangalore-79', 7846464621, 'rambo12@gmail.com'),
(4, 'Raidj', 'uadc654', 'B.E', 'Technical Engineer', 'rajajinagar', 7865544214, 'jhdb@gmail.com'),
(5, 'ashok', 'ash456', 'B.E', 'Technical Engineer', 'No 3, Basaveshnagar, Bangalore-91', 9876543211, 'ashokumar912@gmail'),
(6, 'asd', 'asd456', 'B.E', 'Technical Engineer', 'rajajinagar', 2147483647, 'asd@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` int(11) NOT NULL,
  `toname` varchar(255) NOT NULL,
  `toaddress` varchar(255) NOT NULL,
  `tophone` int(11) NOT NULL,
  `weight` varchar(100) NOT NULL,
  `price` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `name`, `address`, `phone`, `toname`, `toaddress`, `tophone`, `weight`, `price`) VALUES
(1, 'Rekha', 'No.6/7, Kamalanagar, Bangalore-79', 2147483647, ' Rahul', ' No.10, Rajajinagar, Bangalore-91', 2147483647, ' 3kg', 0),
(2, 'Daiana', 'No.6/7, Kamalanagar, Bangalore-79', 785411554, ' Siddram', ' No.10, Rajajinagar, Bangalore-91', 2147483647, ' 5kg', 0),
(3, 'yashas', 'No.6/7, Kamalanagar, Bangalore-79', 2147483647, ' Siddram', ' No.10, Basaveshwaranagar, Bangalore-91', 2147483645, ' 5kg', 0),
(5, 'yashasss', 'No.6/7, Kamalanagar, Bangalore-79', 2147483647, ' Siddramw', ' No.10, Basaveshwaranagar, Bangalore-91', 2147483647, ' 5Kg', 0),
(6, 'Noobie', 'Pochinki', 2147483647, ' ProNoobie', ' Prison', 656565665, ' 15Kg', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
