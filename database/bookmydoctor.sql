-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3307
-- Generation Time: Aug 02, 2024 at 03:23 PM
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
-- Database: `bookmydoctor`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

CREATE TABLE `adminlogin` (
  `id` int(11) NOT NULL,
  `username` varchar(250) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `adminlogin`
--

INSERT INTO `adminlogin` (`id`, `username`, `password`) VALUES
(1, 'Pratap', '9937');

-- --------------------------------------------------------

--
-- Table structure for table `citydetails`
--

CREATE TABLE `citydetails` (
  `cityid` int(11) NOT NULL,
  `cityname` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `citydetails`
--

INSERT INTO `citydetails` (`cityid`, `cityname`) VALUES
(1, 'BBSR '),
(2, 'cuttack');

-- --------------------------------------------------------

--
-- Table structure for table `dr_images`
--

CREATE TABLE `dr_images` (
  `imgid` int(11) NOT NULL,
  `imagefile` varchar(255) NOT NULL,
  `dr_name` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `dr_images`
--

INSERT INTO `dr_images` (`imgid`, `imagefile`, `dr_name`) VALUES
(2, 'doctor5.jpg', 1);

-- --------------------------------------------------------

--
-- Table structure for table `dr_registration`
--

CREATE TABLE `dr_registration` (
  `regid` int(11) NOT NULL,
  `regdate` varchar(255) NOT NULL,
  `reg_city` int(11) NOT NULL,
  `reg_loc` int(11) NOT NULL,
  `reg_special` int(11) NOT NULL,
  `drname` varchar(255) NOT NULL,
  `qualification` varchar(50) NOT NULL,
  `experience` varchar(50) NOT NULL,
  `work` varchar(255) NOT NULL,
  `drabout` varchar(500) NOT NULL,
  `draddress` varchar(300) NOT NULL,
  `drcontact` varchar(10) NOT NULL,
  `drvshr` varchar(255) NOT NULL,
  `drcharge` varchar(30) NOT NULL,
  `dremail` varchar(50) NOT NULL,
  `drpassword` varchar(20) NOT NULL,
  `fmon` varchar(20) NOT NULL,
  `tmon` varchar(20) NOT NULL,
  `ftue` varchar(20) NOT NULL,
  `ttue` varchar(20) NOT NULL,
  `fwed` varchar(20) NOT NULL,
  `twed` varchar(20) NOT NULL,
  `fthur` varchar(20) NOT NULL,
  `tthur` varchar(20) NOT NULL,
  `ffri` varchar(20) NOT NULL,
  `tfri` varchar(20) NOT NULL,
  `fsat` varchar(20) NOT NULL,
  `tsat` varchar(20) NOT NULL,
  `photo` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `dr_registration`
--

INSERT INTO `dr_registration` (`regid`, `regdate`, `reg_city`, `reg_loc`, `reg_special`, `drname`, `qualification`, `experience`, `work`, `drabout`, `draddress`, `drcontact`, `drvshr`, `drcharge`, `dremail`, `drpassword`, `fmon`, `tmon`, `ftue`, `ttue`, `fwed`, `twed`, `fthur`, `tthur`, `ffri`, `tfri`, `fsat`, `tsat`, `photo`) VALUES
(1, '31-07-2024', 1, 1, 1, 'pratap ', '31-07-2024', '2years ', 'private ', 'I am 2 yer experience ', 'i am pratap', 'bbsr', '9348756496', ' 500', 'pratap@gmail.com', '1234', '8:30 am', '2:30 pm', '8:30 am', '2:30 pm', '8:30 am', '2:30 pm', '8:30 am', '2:30 pm', '8:30 am', '2:30 pm', '8:30 am', '2:30 pm', 'doctor5.jpg'),
(2, '2024-08-02', 2, 2, 2, 'Gopi', 'mmbs', '2 year', 'pvt.ltd', 'i have worked in neurologist', 'Samalpur', '9348756498', '2:30 pm', '800', 'gopi@gmail.com', 'Gopi12', '8:30 am', '2:30 pm ', '8:30 am', '2:30 pm ', '8:30 am', '2:30 pm ', '8:30 am', '2:30 pm ', '8:30 am', '2:30 pm ', '8:30 am', '2:30 pm ', '');

-- --------------------------------------------------------

--
-- Table structure for table `locdetails`
--

CREATE TABLE `locdetails` (
  `locid` int(11) NOT NULL,
  `locname` varchar(250) NOT NULL,
  `city_name` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `locdetails`
--

INSERT INTO `locdetails` (`locid`, `locname`, `city_name`) VALUES
(1, 'Jay_dev  ', 1),
(2, 'ring road', 2);

-- --------------------------------------------------------

--
-- Table structure for table `patientdetails`
--

CREATE TABLE `patientdetails` (
  `pat_id` int(11) NOT NULL,
  `patname` varchar(255) NOT NULL,
  `patcontact` varchar(20) NOT NULL,
  `patemail` varchar(255) NOT NULL,
  `patcity` varchar(100) NOT NULL,
  `pataddress` varchar(255) NOT NULL,
  `patdate` varchar(20) NOT NULL,
  `pattime` varchar(50) NOT NULL,
  `patremark` varchar(255) NOT NULL,
  `pat_drname` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `patientdetails`
--

INSERT INTO `patientdetails` (`pat_id`, `patname`, `patcontact`, `patemail`, `patcity`, `pataddress`, `patdate`, `pattime`, `patremark`, `pat_drname`) VALUES
(1, 'gopi', '6942654187', 'abcd@gmail.com', 'bbsr', 'nuabeda', '2024-08-02', '18:07', 'headach', 1);

-- --------------------------------------------------------

--
-- Table structure for table `specialistdetails`
--

CREATE TABLE `specialistdetails` (
  `specialid` int(11) NOT NULL,
  `specialname` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `specialistdetails`
--

INSERT INTO `specialistdetails` (`specialid`, `specialname`) VALUES
(1, 'Neurologist '),
(2, ' Cardiologist');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `adminlogin`
--
ALTER TABLE `adminlogin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `citydetails`
--
ALTER TABLE `citydetails`
  ADD PRIMARY KEY (`cityid`);

--
-- Indexes for table `dr_images`
--
ALTER TABLE `dr_images`
  ADD PRIMARY KEY (`imgid`);

--
-- Indexes for table `dr_registration`
--
ALTER TABLE `dr_registration`
  ADD PRIMARY KEY (`regid`),
  ADD KEY `reg_city` (`reg_city`),
  ADD KEY `reg_loc` (`reg_loc`),
  ADD KEY `reg_special` (`reg_special`);

--
-- Indexes for table `locdetails`
--
ALTER TABLE `locdetails`
  ADD PRIMARY KEY (`locid`),
  ADD KEY `city_name` (`city_name`),
  ADD KEY `city_name_2` (`city_name`);

--
-- Indexes for table `patientdetails`
--
ALTER TABLE `patientdetails`
  ADD PRIMARY KEY (`pat_id`);

--
-- Indexes for table `specialistdetails`
--
ALTER TABLE `specialistdetails`
  ADD PRIMARY KEY (`specialid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminlogin`
--
ALTER TABLE `adminlogin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `citydetails`
--
ALTER TABLE `citydetails`
  MODIFY `cityid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `dr_images`
--
ALTER TABLE `dr_images`
  MODIFY `imgid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `dr_registration`
--
ALTER TABLE `dr_registration`
  MODIFY `regid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `locdetails`
--
ALTER TABLE `locdetails`
  MODIFY `locid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `patientdetails`
--
ALTER TABLE `patientdetails`
  MODIFY `pat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `specialistdetails`
--
ALTER TABLE `specialistdetails`
  MODIFY `specialid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
