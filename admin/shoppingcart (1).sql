-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 12, 2024 at 01:07 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `shoppingcart`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `admin_id` int(11) NOT NULL,
  `admin_name` varchar(50) NOT NULL,
  `admin_email` varchar(50) NOT NULL,
  `admin_password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`admin_id`, `admin_name`, `admin_email`, `admin_password`) VALUES
(11, 'ali', 'ali@gmail.com', 'ali1');

-- --------------------------------------------------------

--
-- Table structure for table `adminpro`
--

CREATE TABLE `adminpro` (
  `fullname` varchar(255) NOT NULL,
  `about` varchar(255) NOT NULL,
  `company` varchar(255) NOT NULL,
  `job` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `adminpro`
--

INSERT INTO `adminpro` (`fullname`, `about`, `company`, `job`, `country`, `address`, `phone`, `email`) VALUES
('Kevin Anderson1', 'Sunt est soluta temporibus accusantium neque nam maiores cumque temporibus. Tempora libero non est unde veniam est qui dolor. Ut sunt iure rerum quae quisquam autem eveniet perspiciatis odit. Fuga sequi sed ea saepe at unde.', 'Lueilwitz, Wisoky and Leuschke', 'Web Designer', 'USA', 'A108 Adam Street, New York, NY 535022', '(436) 486-3538 x29071', 'email');

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `catid` int(11) NOT NULL,
  `catname` varchar(255) NOT NULL,
  `catdes` varchar(255) NOT NULL,
  `catstatus` varchar(255) NOT NULL,
  `catdate` date NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`catid`, `catname`, `catdes`, `catstatus`, `catdate`) VALUES
(5, 'greeting cards', 'Some greeting cards are blank inside, and you write a personal message.', '1', '2024-01-11'),
(6, 'gift articles', 'a way of showing thoughtfulness, love and affection.', '1', '2024-01-11'),
(9, 'dolls', 'A doll is a toy that looks like a small person, often a baby.', '1', '2024-01-11'),
(14, 'files', 'A file is the common storage unit in a computer,', '1', '2024-01-11'),
(19, 'hand bags', 'a bag or box of leather', '1', '2024-01-11'),
(22, 'wallets', 'a flat, folding pocketbook', '1', '2024-01-11'),
(26, 'beauty products', 'The cosmetic industry describes the industry that manufactures and distributes cosmetic products.', '1', '2024-01-11');

-- --------------------------------------------------------

--
-- Table structure for table `employeedata`
--

CREATE TABLE `employeedata` (
  `eid` int(11) NOT NULL,
  `efname` varchar(255) NOT NULL,
  `elname` varchar(255) NOT NULL,
  `eemail` varchar(255) NOT NULL,
  `epass` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `employeedata`
--

INSERT INTO `employeedata` (`eid`, `efname`, `elname`, `eemail`, `epass`) VALUES
(4, 'ahtesham1', 'arain', 'ahtesham12@gmail.com', '$2y$10$VsDfSrP175YcpZnhwQQM6uyg.3OB2e1WEasIwHARBdS/A2GLUp9Um'),
(5, 'umer', 'choudry', 'ahtesham1@gmail.com', '$2y$10$kCpNnA1gG12BRXgv30BdX.T435rEnZPUNMuGwX0z1tMlZ6x2ay4y6');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `pid` int(10) NOT NULL,
  `pname` varchar(255) NOT NULL,
  `pprice` varchar(255) NOT NULL,
  `pimage` varchar(255) NOT NULL,
  `pnumber` varchar(255) NOT NULL,
  `pcategory` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`pid`, `pname`, `pprice`, `pimage`, `pnumber`, `pcategory`) VALUES
(32, 'Birthday card', '5', 'himg.jpg', 'hb-53801', 5),
(33, 'The Gifting Tree', '25', 'ga.jpg', 'ga-43395', 6),
(34, 'Frozen', '50', 'fd.jpg', 'FD-42934', 9),
(35, 'Stationery file', '12', 'fl.jpg', 'fl-42632', 14),
(36, 'Hand bag', '350', 'handbag.jpg', 'hb-72801', 19),
(37, 'men wallet', '5', 'wallet.jpg', 'mw-49841', 22),
(38, 'business card', '20', 'bcard.jpg', 'bc-74289', 5),
(39, 'invitation card', '44', 'i.jpg', 'ic-93905', 5),
(40, 'Christmas card', '85', 'c.jpg', 'CC-77576', 5),
(41, 'Congratulations card', '45', 'cc.jpg', 'cc-45570', 5),
(42, 'Easter card', '15', 'ec.jpg', 'ec-74169', 5),
(43, 'Celebrating Milestones', '15', 'gif.jpg', 'CM-93074', 6),
(44, 'The Language of Gifts', '20', 'lg.jpg', 'lg-79678', 6),
(45, 'The Gift of Time', '25', 'gl.jpg', 'gt-15441', 6),
(46, 'Sustainable Surprises', '30', 'ss.jpg', 'ss-19508', 6),
(47, 'The Science of Surprise', '35', 'sp.jpg', 'sf-89218', 6),
(48, 'sleeping beauty', '50', 'sb.jpg', 'bb-35558', 9),
(49, 'Cinderella dolls', '20', 'cn.jpg', 'cd-69230', 9),
(50, 'Bella dolls', '120', 'bp.jpg', 'bd-23224', 9),
(51, 'Emily doll', '130', 'lc.jpg', 'ed-70929', 9),
(52, 'Logan doll', '150', 'cm.jpg', 'ld-75751', 9);

-- --------------------------------------------------------

--
-- Table structure for table `userdata`
--

CREATE TABLE `userdata` (
  `id` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `userdata`
--

INSERT INTO `userdata` (`id`, `fname`, `lname`, `email`, `password`) VALUES
(41, 'ali baba', 'Baker baba', 'ali@gmail.com', 'password18'),
(42, 'Ava1', 'Baker', 'email', 'password19'),
(43, 'Ava1', 'Baker', 'email', 'password20'),
(44, 'Ava1', 'Baker', 'email', 'password1'),
(45, 'Ava1', 'Baker', 'email', 'password2'),
(46, 'Ava1', 'Baker', 'email', 'password3'),
(47, 'Ava1', 'Baker', 'email', 'password4'),
(48, 'Ava1', 'Baker', 'email', 'password5'),
(49, 'Ava1', 'Baker', 'email', 'password6'),
(50, 'Ava1', 'Baker', 'email', 'password7'),
(51, 'Ava1', 'Baker', 'email', 'password8'),
(52, 'Ava1', 'Baker', 'email', 'password9'),
(53, 'Ava1', 'Baker', 'email', 'password10'),
(54, 'Ava1', 'Baker', 'email', 'password11'),
(55, 'Ava1', 'Baker', 'email', 'password12'),
(56, 'Ava1', 'Baker', 'email', 'password13'),
(57, 'Ava1', 'Baker', 'email', 'password14'),
(58, 'Ava1', 'Baker', 'email', 'password15'),
(59, 'Ava1', 'Baker', 'email', 'password16'),
(60, 'Ava1', 'Baker', 'email', 'password17'),
(61, 'Ava1', 'Baker', 'email', 'password18'),
(62, 'Ava1', 'Baker', 'email', 'password19'),
(63, 'Ava1', 'Baker', 'email', 'password20'),
(64, 'khan', 'wkwf', 'ahtesham@121gmail.com', '$2y$10$.inPDI/ZdgBXHQ5zE5YOhuRXAImMoq8oAtlTCA7RfeFNlkK2tJUCi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`admin_id`),
  ADD UNIQUE KEY `email` (`admin_email`,`admin_password`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`catid`);

--
-- Indexes for table `employeedata`
--
ALTER TABLE `employeedata`
  ADD PRIMARY KEY (`eid`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`pid`),
  ADD KEY `cat fk` (`pcategory`);

--
-- Indexes for table `userdata`
--
ALTER TABLE `userdata`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `admin_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `catid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;

--
-- AUTO_INCREMENT for table `employeedata`
--
ALTER TABLE `employeedata`
  MODIFY `eid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `pid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;

--
-- AUTO_INCREMENT for table `userdata`
--
ALTER TABLE `userdata`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
