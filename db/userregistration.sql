-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 18, 2022 at 07:34 PM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 7.4.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `userregistration`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `password`) VALUES
(1, 'Adelodun', '123'),
(2, 'admin1', 'admin1'),
(3, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `logbook`
--

CREATE TABLE `logbook` (
  `id` int(11) NOT NULL,
  `week` varchar(50) NOT NULL,
  `day` varchar(50) NOT NULL,
  `topic` varchar(255) NOT NULL,
  `note` varchar(2000) NOT NULL,
  `image` blob NOT NULL,
  `date` date NOT NULL,
  `user` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `logbook`
--

INSERT INTO `logbook` (`id`, `week`, `day`, `topic`, `note`, `image`, `date`, `user`) VALUES
(1, 'Week One', 'Monday', 'Introduction to web design class', 'Introduction to web design class', 0x62727573682e6a7067, '2022-06-02', 'aaa'),
(2, 'Week One', 'Monday', 'Web design', 'Working on my profile page', '', '2022-07-04', 'abeyjoe'),
(3, 'Week One', 'Tuesday', 'Vehicle repair service', 'Vehicle repair service', '', '2022-07-01', 'jhazper'),
(4, 'Week Two', 'Tuesday', 'Ignition', 'How to ignite a vehicle', '', '2022-07-02', 'jhazper'),
(5, 'Week Three', 'Tuesday', 'How to maintain a vehicle', '1. Proper cleaning of the exterior \r\n2. Regular cleaning of the interor parts of the vehicle\r\n3. Regulart servicing', '', '2022-07-04', 'jhazper'),
(6, 'Week Four', 'Tuesday', 'LUBRICANT', 'How to lubricate motor engin', '', '2022-07-05', 'jhazper'),
(7, 'Week Five', 'Tuesday', 'Spark plug', 'How to fix spark plug in a vehicle\r\n', '', '2022-07-05', 'jhazper'),
(8, 'Week Six', 'Tuesday', 'Breack pad', 'step-by-step on how to fix break pad of a vehicle', '', '2022-07-06', 'jhazper'),
(9, 'Week Seven', 'Tuesday', 'Motor repair', 'How to put a vehicle on motion', '', '2022-07-07', 'jhazper'),
(10, 'Week Eight', 'Tuesday', 'Engine oil replacement', 'How to check oil level and replace with a new oil\r\n', '', '2022-07-07', 'jhazper'),
(11, 'Week Two', 'Tuesday', 'Holiday', 'Holiday', '', '2022-08-01', 'abeyjoe');

-- --------------------------------------------------------

--
-- Table structure for table `usertable`
--

CREATE TABLE `usertable` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `surname` varchar(20) NOT NULL,
  `lastName` varchar(20) NOT NULL,
  `matricNumber` varchar(20) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `program` varchar(50) NOT NULL,
  `department` varchar(50) NOT NULL,
  `level` varchar(10) NOT NULL,
  `phoneNumber` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `picture` varchar(200) NOT NULL,
  `trade` varchar(50) NOT NULL,
  `studentship` varchar(50) NOT NULL,
  `semester` varchar(50) NOT NULL,
  `session` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `usertable`
--

INSERT INTO `usertable` (`id`, `name`, `password`, `surname`, `lastName`, `matricNumber`, `gender`, `program`, `department`, `level`, `phoneNumber`, `email`, `picture`, `trade`, `studentship`, `semester`, `session`) VALUES
(1, 'abeyjoe', '123', 'Abiodun', 'Adedapo', '2019235020021', 'Male', 'FT', 'Computer Science', 'ND2', '09024056004', 'abeyjoe18@gmail.com', 'profile.jpg', 'Web Design', 'Regular', 'First Semester', '2020/2021'),
(2, 'boris', '123', 'Boris', 'Johnson', '20190705050081', 'Female', 'DPP', 'Civil Engineering', 'HND1', '0808234229', 'borisjohn@gmail.com', 'Eagke hand.jpg', 'Pure Water Factory', 'Regular', 'Second Semester', '2020/2021'),
(3, 'jhazper', '123', 'komolafe ', 'Ifeoluwa', '20190705010147', 'Male', 'DPP', 'Micro Biology', 'ND2', '080233424456', 'jhazper@gmail.com', 'jhazper.jpg', 'Modern Car Repairs and Servicing', 'Regular', 'Second Semester', '2020/2021'),
(4, '', '', '', '', '', '', '', '', '', '', '', '', '', '', '', ''),
(5, 'pre', '123', 'Precious', 'Daniel', '201907050100', 'Male', 'DPP', 'Computer Science', 'ND2', '09012342456', 'predev@gmail.com', 'FB_IMG_16287047439387063.jpg', 'Brick/Block Moulding and Concreting', 'Regular', 'Second Semester', '2020/2021'),
(6, 'www', 'wqww', 'qqq', 'qqq', 'sdvcbv', 'Male', 'FT', 'Computer Science', 'ND1', '3247895634', 'dhsh@dd.b', 'drum stick.jpg', 'Beading Works', 'Rerunner', 'Second Semester', '2017/2018'),
(7, 'adeola', '1234', 'adeola', 'adeshina', '20190705010167', 'Female', 'DPP', 'Computer Science', 'ND2', '090235346387', 'adeola@gmail.com', 'FB_IMG_16217163666600491.jpg', 'Leather Works', 'Regular', 'Second Semester', '2020/2021');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logbook`
--
ALTER TABLE `logbook`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `usertable`
--
ALTER TABLE `usertable`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `logbook`
--
ALTER TABLE `logbook`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `usertable`
--
ALTER TABLE `usertable`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
