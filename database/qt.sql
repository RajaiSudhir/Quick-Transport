-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 24, 2024 at 10:47 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `qt`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `id` int(11) NOT NULL,
  `email` varchar(30) NOT NULL,
  `pass` varchar(28) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`id`, `email`, `pass`) VALUES
(1, 'admin@mail.com', '123456');

-- --------------------------------------------------------

--
-- Table structure for table `bidnow`
--

CREATE TABLE `bidnow` (
  `bid` int(11) NOT NULL,
  `gid` int(10) NOT NULL,
  `price` int(6) NOT NULL,
  `truckno` varchar(20) NOT NULL,
  `truckcap` int(4) NOT NULL,
  `email` varchar(50) NOT NULL,
  `biddermail` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bidnow`
--

INSERT INTO `bidnow` (`bid`, `gid`, `price`, `truckno`, `truckcap`, `email`, `biddermail`) VALUES
(20, 46, 22000, 'GJ 04 XY 7725', 24, 'admin@admin.com', 'yjodadia@yopmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(25) NOT NULL,
  `mail` varchar(25) NOT NULL,
  `pno` bigint(12) NOT NULL,
  `subject` varchar(200) NOT NULL,
  `msg` varchar(1000) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `mail`, `pno`, `subject`, `msg`) VALUES
(1, 'name', 'email', 0, 'subject', 'message'),
(2, 'name', 'email', 0, 'subject', 'message'),
(3, 'test', 'masterowl@yopmail.com', 7878986969, 'test', 'test'),
(4, 'temp', 'masterowl@yopmail.com', 787878787, 'temp', 'temp'),
(5, 'temp', 'hackersmania125@gmail.com', 78788999, 'temp test', 'temp test'),
(6, 'temp', 'hackersmania125@gmail.com', 78788999, 'temp test', 'temp test'),
(7, 'sudhir', 'rajaisudhir11@gmail.com', 7049859756, 'dsds', 'dsdsadas'),
(8, '25k', 'masterowl@yopmail.com', 78788999, 'saas', 'asddqws'),
(9, '25k', 'masterowl@yopmail.com', 78788999, 'saas', 'asddqws'),
(10, '25k', 'masterowl@yopmail.com', 78788999, 'saas', 'asddqws'),
(11, '25k', 'masterowl@yopmail.com', 78788999, 'saas', 'asddqws'),
(12, 'SUdhir', 'david1218@yopmail.com', 7878986969, 'dsds', 'asdascds'),
(13, 'SUdhir', 'david1218@yopmail.com', 7878986969, 'dsds', 'asdascds'),
(14, 'SUdhir', 'david1218@yopmail.com', 7878986969, 'dsds', 'asdascds'),
(15, 'qqdsd', 'david1218@yopmail.com', 274717272, 'jfgnjfgj', 'dfhdfhdfh'),
(16, 'sudhir', 'masterowl@yopmail.com', 78788999, 'saas', 'afasfsfs'),
(17, 'sudhir', 'rajaisb22@gmail.com', 789789798, 'Migrate to new host', 'test');

-- --------------------------------------------------------

--
-- Table structure for table `goods`
--

CREATE TABLE `goods` (
  `gid` int(11) NOT NULL,
  `sloca` varchar(50) NOT NULL,
  `dloca` varchar(50) NOT NULL,
  `mname` varchar(30) NOT NULL,
  `quan` varchar(20) NOT NULL,
  `vtype` varchar(30) NOT NULL,
  `tbody` varchar(30) NOT NULL,
  `ttyre` int(3) NOT NULL,
  `cbody` varchar(25) NOT NULL,
  `trbody` varchar(30) NOT NULL,
  `htyres` int(3) NOT NULL,
  `tanbody` varchar(25) NOT NULL,
  `rates` int(8) NOT NULL,
  `postdate` date DEFAULT NULL,
  `username` varchar(50) NOT NULL,
  `lockstatus` varchar(30) NOT NULL,
  `hire` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `goods`
--

INSERT INTO `goods` (`gid`, `sloca`, `dloca`, `mname`, `quan`, `vtype`, `tbody`, `ttyre`, `cbody`, `trbody`, `htyres`, `tanbody`, `rates`, `postdate`, `username`, `lockstatus`, `hire`) VALUES
(45, 'Baroda', 'Pune', 'disel', '20 Kilo Litre', 'Tanker', '', 0, '', '', 0, 'Metal Body', 24000, '2023-02-12', 'admin@admin.com', 'Approve', 'Unhired'),
(49, 'Thane', 'Mumbai', 'petrol', '54 Tonne', 'Tanker', '', 0, '', '', 0, 'Metal Body', 20000, '2023-03-01', 'yjodadia@yopmail.com', 'Approve', 'Unhired');

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `regid` int(4) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pass` varchar(28) NOT NULL,
  `fname` char(20) NOT NULL,
  `lname` char(20) NOT NULL,
  `bname` varchar(30) NOT NULL,
  `adhar` bigint(12) NOT NULL,
  `gst` varchar(15) NOT NULL,
  `pno` varchar(10) NOT NULL,
  `gender` char(6) NOT NULL,
  `state` char(30) NOT NULL,
  `profileimg` varchar(200) NOT NULL,
  `uadd` varchar(300) NOT NULL,
  `wallet` varchar(200) NOT NULL,
  `lockstatus` varchar(6) NOT NULL,
  `secq` varchar(200) NOT NULL,
  `seca` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`regid`, `email`, `pass`, `fname`, `lname`, `bname`, `adhar`, `gst`, `pno`, `gender`, `state`, `profileimg`, `uadd`, `wallet`, `lockstatus`, `secq`, `seca`) VALUES
(10, 'yjodadia@yopmail.com', '123456', 'Yash', 'Jogadia', 'Yashraj Roadways', 123456789100, '112345678910111', '7049859756', 'male', 'Gujarat', 'profile/10.jpg', 'bharatnagar', 'paypal', 'Unlock', '', ''),
(14, 'admin@admin.com', '123456', 'Sanju', 'Rajai', 'Sanju ', 123456789, '123456789123456', '7878986969', 'female', 'Gujarat', 'profile/14.jpg', 'talav', '', 'Unlock', '', ''),
(15, 'admin12@admin.com', '123456', '', '', 'bname', 1234578912345, '12345678912345', '', 'male', '', '', '', '', 'Unlock', '', ''),
(16, 'rajaisb22@gmail.com', '12345678', 'SB', 'SBI', 'bname', 422587567512, 'Hfj785asf66a885', '', 'male', '', 'profile/16.jfif', '', '', 'Unlock', '', ''),
(19, 'rajaisb@gmail.com', '123456', '', '', 'bname', 422587567513, 'Hfj785asf66a823', '', 'male', '', '', '', '', 'Unlock', '', ''),
(32, 'rajaisb222@gmail.com', '123456', 'Pratik', 'Rajai', 'Satnam Transport', 458512542103, '45SfGJH45qf7815', '7043917381', 'male', 'Gujarat', 'profile/32.jpg', 'bharatnagar, plot 4748, bhavnagar', '', 'Unlock', '', ''),
(33, 'hackersmania125@gmail.com', 'sudhir', 'Raval', 'Yash', 'Raval Transport', 457894531287, '45678sfs578wrfs', '6358144795', 'male', 'Gujarat', '', '', '', 'Unlock', 'Favourite color?', 'Black'),
(34, 'admina@gmail.com', 'sudhir', 'raj', 'patel', 'sudhir', 704391781012, 'ritagst5656567', '6358144795', 'male', 'Gujarat', '', '', '', 'Unlock', 'Favourite color?', 'Black');

-- --------------------------------------------------------

--
-- Table structure for table `truck`
--

CREATE TABLE `truck` (
  `id` int(5) NOT NULL,
  `vno` varchar(20) NOT NULL,
  `vloca` varchar(350) NOT NULL,
  `vroute` varchar(1000) NOT NULL,
  `truck` varchar(25) NOT NULL,
  `tbody` varchar(20) NOT NULL,
  `ttyre` varchar(3) NOT NULL,
  `cbody` varchar(25) NOT NULL,
  `ctonne24` varchar(5) DEFAULT NULL,
  `ctonne32` varchar(5) DEFAULT NULL,
  `ctonne32m` varchar(5) DEFAULT NULL,
  `trbody` varchar(25) NOT NULL,
  `htyres` varchar(5) NOT NULL,
  `htonne10` varchar(5) NOT NULL,
  `htonne12` varchar(5) NOT NULL,
  `htonne14` varchar(5) NOT NULL,
  `lcap` varchar(5) NOT NULL,
  `tanbody` varchar(25) NOT NULL,
  `tancap` varchar(10) NOT NULL,
  `postdate` date DEFAULT NULL,
  `username` varchar(50) NOT NULL,
  `lockstatus` varchar(10) NOT NULL,
  `hire` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `truck`
--

INSERT INTO `truck` (`id`, `vno`, `vloca`, `vroute`, `truck`, `tbody`, `ttyre`, `cbody`, `ctonne24`, `ctonne32`, `ctonne32m`, `trbody`, `htyres`, `htonne10`, `htonne12`, `htonne14`, `lcap`, `tanbody`, `tancap`, `postdate`, `username`, `lockstatus`, `hire`) VALUES
(28, 'GJ 04 XYZ 224', 'Bhavnagar', 'Gujarat  Maharashtra                      ', 'Truck', 'Open Body', '14', '', NULL, NULL, NULL, '', '', '', '', '', '', '', '', '2023-02-25', 'yjodadia@yopmail.com', 'Disapprove', 'Hired'),
(30, 'GJ123456', 'Bhavnagar', 'Gujarat                        ', 'LCV', '', '', '', NULL, NULL, NULL, '', '', '', '', '', '2', '', '', '2023-03-01', 'yjodadia@yopmail.com', 'Approve', 'Hired'),
(32, 'GJ 04 RS 7725', 'Bhavnagar', 'Gujarat  Maharashtra                      ', 'Truck', 'Open Body', '12', '', NULL, NULL, NULL, '', '', '', '', '', '', '', '', '2023-03-16', 'rajaisb222@gmail.com', 'Approve', 'Hired'),
(33, 'GJ04XYZ2275', 'Bhavnagar', 'Gujarat  Maharashtra                      ', 'Trailer', '', '', '', NULL, NULL, NULL, '40 Ft Low Bed', '', '', '', '', '', '', '', '2023-03-16', 'rajaisb222@gmail.com', 'Approve', 'Unhired'),
(35, 'GJ12345689', 'Bhavnagar', 'Gujarat                        ', 'LCV', '', '', '', NULL, NULL, NULL, '', '', '', '', '', '6', '', '', '2023-03-16', 'rajaisb222@gmail.com', 'Approve', 'Unhired'),
(37, 'GJ04XYZ22756', 'vadodara', 'Gujarat Delhi Maharashtra                      ', 'Container', '', '', '', '18', NULL, NULL, '', '', '', '', '', '', '', '', '2023-03-19', '', 'Disapprove', 'Unhired'),
(38, 'gj 12122', 'vadodara', 'Gujarat  Maharashtra                      ', 'Container', '', '', '', '12', NULL, NULL, '', '', '', '', '', '', '', '', '2023-03-19', 'yjodadia@yopmail.com', 'Disapprove', 'Unhired'),
(39, 'GJ123456 abcd', 'Bhavnagar', 'Gujarat  Maharashtra                      ', 'Container', '', '', '', NULL, NULL, '18', '', '', '', '', '', '', '', '', '2023-03-19', 'yjodadia@yopmail.com', 'Disapprove', 'Unhired');

-- --------------------------------------------------------

--
-- Table structure for table `truckbid`
--

CREATE TABLE `truckbid` (
  `tid` int(5) NOT NULL,
  `id` int(5) NOT NULL,
  `price` int(6) NOT NULL,
  `material` varchar(30) NOT NULL,
  `quan` varchar(25) NOT NULL,
  `lcity` varchar(50) NOT NULL,
  `unlcity` varchar(50) NOT NULL,
  `email` varchar(40) NOT NULL,
  `biddermail` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `truckbid`
--

INSERT INTO `truckbid` (`tid`, `id`, `price`, `material`, `quan`, `lcity`, `unlcity`, `email`, `biddermail`) VALUES
(2, 23, 200, 'salt', '21 tonne', 'bvn', 'mumbai', 'admin@admin.com', 'yjodadia@yopmail.com'),
(3, 28, 24000, 'salt', '24', 'Surat', 'Kerala', 'yjodadia@yopmail.com', 'rajaisb22@gmail.com'),
(4, 28, 22000, 'salt', '24', 'Bhavnagar', 'Mumbai', 'yjodadia@yopmail.com', 'rajaisb222@gmail.com'),
(5, 36, 22000, 'disel', '26', 'Bhavnagar', 'Mumbai', 'rajaisb222@gmail.com', 'yjodadia@yopmail.com'),
(6, 28, 22000, 'salt', '24', 'Bhavnagar', 'Mumbai', 'yjodadia@yopmail.com', 'yjodadia@yopmail.com'),
(7, 30, 22000, 'salt', '21 tonne', 'Bhavnagar', 'mumbai', 'yjodadia@yopmail.com', 'admin@admin.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bidnow`
--
ALTER TABLE `bidnow`
  ADD PRIMARY KEY (`bid`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `goods`
--
ALTER TABLE `goods`
  ADD PRIMARY KEY (`gid`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`regid`),
  ADD UNIQUE KEY `regid` (`regid`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `adhar` (`adhar`),
  ADD UNIQUE KEY `gst` (`gst`);

--
-- Indexes for table `truck`
--
ALTER TABLE `truck`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `vno` (`vno`);

--
-- Indexes for table `truckbid`
--
ALTER TABLE `truckbid`
  ADD PRIMARY KEY (`tid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `bidnow`
--
ALTER TABLE `bidnow`
  MODIFY `bid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `goods`
--
ALTER TABLE `goods`
  MODIFY `gid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=52;

--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `regid` int(4) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `truck`
--
ALTER TABLE `truck`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `truckbid`
--
ALTER TABLE `truckbid`
  MODIFY `tid` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
