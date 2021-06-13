-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 12, 2021 at 12:28 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_restaurant`
--

-- --------------------------------------------------------

--
-- Table structure for table `coupon`
--

CREATE TABLE `coupon` (
  `cou_id` varchar(30) NOT NULL,
  `discount` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `coupon`
--

INSERT INTO `coupon` (`cou_id`, `discount`) VALUES
('3DDY-WNAB-WT6N-8QG5', 1),
('3WWY-WNAB-WT6N-7QG5', 0.66),
('A99B-GFJZ-SZMG-AFG8', 0.55),
('D70B-MCJZ-SZNW-JUR4', 0.4),
('D70B-MCJZ-SZNW-JUR5', 0.66);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `cus_tel` varchar(10) NOT NULL,
  `name` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`cus_tel`, `name`) VALUES
('0123456789', 'Babara'),
('0789456123', 'Clint'),
('0888888888', 'Willsmith'),
('0987654321', 'Kenji');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `emp_id` varchar(10) NOT NULL,
  `name` varchar(40) NOT NULL,
  `role_id` varchar(10) NOT NULL,
  `salary` float NOT NULL,
  `email` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`emp_id`, `name`, `role_id`, `salary`, `email`) VALUES
('5006001914', 'blacksnow', 'GM', 30000, 'blcksnow@test.com'),
('5006001917', 'babaron', 'CS', 45000, 'baba_baba@test.com'),
('5006001918', 'NumNumNum', 'GM', 20000, 'NumNumNum@test.com'),
('5006001920', 'Sakura', 'BS', 99999, 'sakura@test.com');

-- --------------------------------------------------------

--
-- Table structure for table `fooditems`
--

CREATE TABLE `fooditems` (
  `item_id` varchar(10) NOT NULL,
  `name` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `fooditems`
--

INSERT INTO `fooditems` (`item_id`, `name`) VALUES
('01', 'basil Crispy Pork'),
('02', 'basil minced pork'),
('03', 'basil beef');

-- --------------------------------------------------------

--
-- Table structure for table `invoice`
--

CREATE TABLE `invoice` (
  `invoice_id` varchar(10) NOT NULL,
  `emp_id` varchar(10) NOT NULL,
  `cus_tel` varchar(10) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `invoice`
--

INSERT INTO `invoice` (`invoice_id`, `emp_id`, `cus_tel`, `date`) VALUES
('1', '5006001920', '0123456789', '2021-06-03'),
('2', '5006001920', '0789456123', '2021-05-21');

-- --------------------------------------------------------

--
-- Table structure for table `listreservetable`
--

CREATE TABLE `listreservetable` (
  `listReserveTable_NO` int(11) NOT NULL,
  `invoice_id` varchar(10) CHARACTER SET utf8 NOT NULL,
  `table_id` varchar(10) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `listreservetable`
--

INSERT INTO `listreservetable` (`listReserveTable_NO`, `invoice_id`, `table_id`) VALUES
(1, '1', '03'),
(2, '2', '04');

-- --------------------------------------------------------

--
-- Table structure for table `listsale`
--

CREATE TABLE `listsale` (
  `listSale_NO` int(11) NOT NULL,
  `invoice_id` varchar(10) CHARACTER SET utf8 NOT NULL,
  `item_id` varchar(10) CHARACTER SET utf8 NOT NULL,
  `number` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `listsale`
--

INSERT INTO `listsale` (`listSale_NO`, `invoice_id`, `item_id`, `number`) VALUES
(1, '2', '03', 10),
(2, '1', '02', 5);

-- --------------------------------------------------------

--
-- Table structure for table `listusingcoupon`
--

CREATE TABLE `listusingcoupon` (
  `listUsingCoupon_NO` int(11) NOT NULL,
  `invoice_id` varchar(10) CHARACTER SET utf8 NOT NULL,
  `cou_id` varchar(30) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `listusingcoupon`
--

INSERT INTO `listusingcoupon` (`listUsingCoupon_NO`, `invoice_id`, `cou_id`) VALUES
(1, '1', 'A99B-GFJZ-SZMG-AFG8'),
(2, '2', 'D70B-MCJZ-SZNW-JUR4'),
(3, '1', '3WWY-WNAB-WT6N-7QG5');

-- --------------------------------------------------------

--
-- Table structure for table `reservetable`
--

CREATE TABLE `reservetable` (
  `table_id` varchar(10) NOT NULL,
  `zone` varchar(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `reservetable`
--

INSERT INTO `reservetable` (`table_id`, `zone`) VALUES
('01', 'A'),
('02', 'B'),
('03', 'C'),
('04', 'D');

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `role_id` varchar(10) NOT NULL,
  `name` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`role_id`, `name`) VALUES
('BS', 'Barista'),
('BT', 'Bartender'),
('CS', 'Cashier'),
('DS', 'Dishwasher'),
('EC', 'Executive Chef'),
('FS', 'Front Staff'),
('GM', 'General Manager');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `coupon`
--
ALTER TABLE `coupon`
  ADD PRIMARY KEY (`cou_id`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`cus_tel`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`emp_id`),
  ADD KEY `role_id` (`role_id`);

--
-- Indexes for table `fooditems`
--
ALTER TABLE `fooditems`
  ADD PRIMARY KEY (`item_id`);

--
-- Indexes for table `invoice`
--
ALTER TABLE `invoice`
  ADD PRIMARY KEY (`invoice_id`),
  ADD KEY `cus_tel` (`cus_tel`),
  ADD KEY `emp_id` (`emp_id`);

--
-- Indexes for table `listreservetable`
--
ALTER TABLE `listreservetable`
  ADD PRIMARY KEY (`listReserveTable_NO`),
  ADD KEY `listreservetable_ibfk_1` (`invoice_id`),
  ADD KEY `listreservetable_ibfk_2` (`table_id`);

--
-- Indexes for table `listsale`
--
ALTER TABLE `listsale`
  ADD PRIMARY KEY (`listSale_NO`),
  ADD KEY `invoice_id` (`invoice_id`),
  ADD KEY `item_id` (`item_id`);

--
-- Indexes for table `listusingcoupon`
--
ALTER TABLE `listusingcoupon`
  ADD PRIMARY KEY (`listUsingCoupon_NO`),
  ADD KEY `listusingcoupon_ibfk_1` (`invoice_id`),
  ADD KEY `cou_id` (`cou_id`);

--
-- Indexes for table `reservetable`
--
ALTER TABLE `reservetable`
  ADD PRIMARY KEY (`table_id`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`role_id`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `employee`
--
ALTER TABLE `employee`
  ADD CONSTRAINT `employee_ibfk_1` FOREIGN KEY (`role_id`) REFERENCES `role` (`role_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `invoice`
--
ALTER TABLE `invoice`
  ADD CONSTRAINT `invoice_ibfk_1` FOREIGN KEY (`cus_tel`) REFERENCES `customer` (`cus_tel`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `invoice_ibfk_2` FOREIGN KEY (`emp_id`) REFERENCES `employee` (`emp_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `listreservetable`
--
ALTER TABLE `listreservetable`
  ADD CONSTRAINT `listreservetable_ibfk_1` FOREIGN KEY (`invoice_id`) REFERENCES `invoice` (`invoice_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `listreservetable_ibfk_2` FOREIGN KEY (`table_id`) REFERENCES `reservetable` (`table_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `listsale`
--
ALTER TABLE `listsale`
  ADD CONSTRAINT `listsale_ibfk_1` FOREIGN KEY (`invoice_id`) REFERENCES `invoice` (`invoice_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `listsale_ibfk_2` FOREIGN KEY (`item_id`) REFERENCES `fooditems` (`item_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `listusingcoupon`
--
ALTER TABLE `listusingcoupon`
  ADD CONSTRAINT `listusingcoupon_ibfk_1` FOREIGN KEY (`invoice_id`) REFERENCES `invoice` (`invoice_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `listusingcoupon_ibfk_2` FOREIGN KEY (`cou_id`) REFERENCES `coupon` (`cou_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
