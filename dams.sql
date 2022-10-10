-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 10, 2022 at 07:26 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dams`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `a_ID` int(11) NOT NULL,
  `a_email` varchar(50) NOT NULL,
  `a_password` varchar(50) NOT NULL,
  `a_name` varchar(50) NOT NULL,
  `hosp_name` varchar(100) NOT NULL,
  `hosp_address` varchar(100) NOT NULL,
  `hosp_contact` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`a_ID`, `a_email`, `a_password`, `a_name`, `hosp_name`, `hosp_address`, `hosp_contact`) VALUES
(1, 'admin@gmail.com', 'admin', 'System Admini', 'Benjamini Mkapa', 'P O BOX 2021, DODOMA', '+255 26 2789 2378');

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `appointment_ID` int(11) NOT NULL,
  `d_ID` int(11) NOT NULL,
  `p_ID` int(11) NOT NULL,
  `doctor_schedule_ID` int(11) NOT NULL,
  `appointment_No` int(11) NOT NULL,
  `reason_for_appointment` mediumtext NOT NULL,
  `appointment_time` time NOT NULL,
  `status` varchar(30) NOT NULL,
  `patient_come` enum('YES','NO') NOT NULL,
  `d_comment` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `dams_doctors`
--

CREATE TABLE `dams_doctors` (
  `dID` int(11) NOT NULL,
  `d_profimage` varchar(100) NOT NULL,
  `d_email` varchar(50) NOT NULL,
  `d_password` varchar(50) NOT NULL,
  `d_name` varchar(50) NOT NULL,
  `d_phoneNo` varchar(14) NOT NULL,
  `d_address` mediumtext NOT NULL,
  `d_dob` date NOT NULL,
  `d_degree` varchar(50) NOT NULL,
  `d_expertIn` varchar(50) NOT NULL,
  `d_status` enum('Active','Inactive') NOT NULL,
  `d_hospital` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dams_doctors`
--

INSERT INTO `dams_doctors` (`dID`, `d_profimage`, `d_email`, `d_password`, `d_name`, `d_phoneNo`, `d_address`, `d_dob`, `d_degree`, `d_expertIn`, `d_status`, `d_hospital`) VALUES
(1, 'Array', 'skin@gmail.com', 'skin', 'Ema', '12345678', '10095 Dar es Salaam', '2022-10-09', 'PHD', 'expert', 'Active', 'Benjamini Mkapa'),
(2, 'Array', 'bones@gmail.com', 'bones', 'Ema', '1234567890', '23 Dodoma', '2022-10-09', 'PHD', 'bones', 'Active', 'Benjamin Mkapa');

-- --------------------------------------------------------

--
-- Table structure for table `dams_patient`
--

CREATE TABLE `dams_patient` (
  `p_ID` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(70) NOT NULL,
  `firstname` varchar(50) NOT NULL,
  `lastname` varchar(50) NOT NULL,
  `DOB` varchar(50) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `phone` int(10) NOT NULL,
  `marital_status` varchar(20) NOT NULL,
  `complete_address` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dams_patient`
--

INSERT INTO `dams_patient` (`p_ID`, `email`, `password`, `firstname`, `lastname`, `DOB`, `gender`, `phone`, `marital_status`, `complete_address`) VALUES
(1, 'patient@gmail.com', 'patient', 'Patii', 'Enti', '2022-10-09', 'male', 1234567890, 'single', '            \r\n8 PA ENDI');

-- --------------------------------------------------------

--
-- Table structure for table `doctors_schedule`
--

CREATE TABLE `doctors_schedule` (
  `scheduleID` int(11) NOT NULL,
  `d_ID` int(11) NOT NULL,
  `schedule_date` date NOT NULL,
  `schedule_day` enum('Monda','Tuesday','Wednesday','Thursday','Friday','Saturday','Sunday') NOT NULL,
  `start_time` varchar(20) NOT NULL,
  `end_time` varchar(20) NOT NULL,
  `average_consulting_time` int(5) NOT NULL,
  `d_schedule_status` enum('Active','Inactive') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `doctors_schedule`
--

INSERT INTO `doctors_schedule` (`scheduleID`, `d_ID`, `schedule_date`, `schedule_day`, `start_time`, `end_time`, `average_consulting_time`, `d_schedule_status`) VALUES
(1, 1, '2022-10-05', '', '06:00 am', '12:00 pm', 2, 'Active'),
(2, 1, '2022-10-05', 'Tuesday', '06:00 am', '06:00 pm', 2, 'Active');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`a_ID`);

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`appointment_ID`);

--
-- Indexes for table `dams_doctors`
--
ALTER TABLE `dams_doctors`
  ADD PRIMARY KEY (`dID`);

--
-- Indexes for table `dams_patient`
--
ALTER TABLE `dams_patient`
  ADD PRIMARY KEY (`p_ID`);

--
-- Indexes for table `doctors_schedule`
--
ALTER TABLE `doctors_schedule`
  ADD PRIMARY KEY (`scheduleID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `a_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `appointments`
--
ALTER TABLE `appointments`
  MODIFY `appointment_ID` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `dams_doctors`
--
ALTER TABLE `dams_doctors`
  MODIFY `dID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `dams_patient`
--
ALTER TABLE `dams_patient`
  MODIFY `p_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `doctors_schedule`
--
ALTER TABLE `doctors_schedule`
  MODIFY `scheduleID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
