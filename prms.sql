-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 03, 2017 at 02:18 PM
-- Server version: 10.1.8-MariaDB
-- PHP Version: 5.6.14

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `prms`
--

-- --------------------------------------------------------

--
-- Table structure for table `acr_detail`
--

CREATE TABLE `acr_detail` (
  `ACR_Submitted` varchar(20) NOT NULL,
  `Assessment_Year` varchar(10) NOT NULL,
  `Assest_Liabilities` varchar(5) NOT NULL,
  `Assessment_From` varchar(15) NOT NULL,
  `Assessment_To` varchar(15) NOT NULL,
  `Remarks` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `acr_detail`
--

INSERT INTO `acr_detail` (`ACR_Submitted`, `Assessment_Year`, `Assest_Liabilities`, `Assessment_From`, `Assessment_To`, `Remarks`) VALUES
('modi', '2017', 'Filed', '2017-12-31', '2018-12-31', 'ab');

-- --------------------------------------------------------

--
-- Table structure for table `address`
--

CREATE TABLE `address` (
  `PresentAddress` varchar(225) NOT NULL,
  `State` varchar(10) NOT NULL,
  `Block` varchar(50) NOT NULL,
  `PinCode` varchar(10) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `District` varchar(50) NOT NULL,
  `Panchayat` varchar(50) NOT NULL,
  `phone_no` int(15) NOT NULL,
  `mobile_no` int(15) NOT NULL,
  `PermanentAddress` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `address`
--

INSERT INTO `address` (`PresentAddress`, `State`, `Block`, `PinCode`, `Email`, `District`, `Panchayat`, `phone_no`, `mobile_no`, `PermanentAddress`) VALUES
('c-1/15', 'NewDelhi', 'north', '11063', '', 'new delhi', 'ndmc', 123466, 0, ''),
('h150', 'chicago', 'north', '110063', 'nd@gmail.com', 'new york', 'USA', 123466, 45631, 'H no.542');

-- --------------------------------------------------------

--
-- Table structure for table `dependent`
--

CREATE TABLE `dependent` (
  `Member_Name` varchar(30) NOT NULL,
  `Relation` varchar(10) NOT NULL,
  `dependent` varchar(5) NOT NULL,
  `employed` varchar(10) NOT NULL,
  `same_deptt` varchar(20) NOT NULL,
  `Employee_Code` varchar(20) NOT NULL,
  `deptt_name` varchar(20) NOT NULL,
  `E_Salary_Code` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dependent`
--

INSERT INTO `dependent` (`Member_Name`, `Relation`, `dependent`, `employed`, `same_deptt`, `Employee_Code`, `deptt_name`, `E_Salary_Code`) VALUES
('', '', 'NO', 'Unemployed', '', '', '', ''),
('', '', 'NO', 'Unemployed', '', '', '', ''),
('sofi', 'wife', 'NO', 'Unemployed', 'NO', '11', '12', '1');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `Employee_No` int(10) NOT NULL,
  `FirstName` varchar(20) NOT NULL,
  `MiddleName` varchar(20) NOT NULL,
  `LastName` varchar(20) NOT NULL,
  `Birth_date` date NOT NULL,
  `Spouse` varchar(40) NOT NULL,
  `sex` varchar(10) NOT NULL,
  `Identity_Mark` varchar(50) NOT NULL,
  `Height` int(5) NOT NULL,
  `Caste` varchar(20) NOT NULL,
  `Religion` varchar(20) NOT NULL,
  `State` varchar(50) NOT NULL,
  `Office_Type` varchar(20) NOT NULL,
  `Remarks` varchar(500) NOT NULL,
  `Martial_Status` varchar(10) NOT NULL,
  `Category` varchar(10) NOT NULL,
  `Blood_type` varchar(10) NOT NULL,
  `District` varchar(30) NOT NULL,
  `Office_Name` varchar(30) NOT NULL,
  `LTC_Home_Town` varchar(50) NOT NULL,
  `Station` varchar(30) NOT NULL,
  `Designation` varchar(30) NOT NULL,
  `Curr_Office` varchar(30) NOT NULL,
  `Cadre` varchar(20) NOT NULL,
  `location` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`Employee_No`, `FirstName`, `MiddleName`, `LastName`, `Birth_date`, `Spouse`, `sex`, `Identity_Mark`, `Height`, `Caste`, `Religion`, `State`, `Office_Type`, `Remarks`, `Martial_Status`, `Category`, `Blood_type`, `District`, `Office_Name`, `LTC_Home_Town`, `Station`, `Designation`, `Curr_Office`, `Cadre`, `location`) VALUES
(1107, 'toyta', 'for', 'rich', '2016-12-31', 'am', 'Female', '', 170, '', 'christian', 'NewDelhi', 'Delhi', 'ab', 'UnMarried', 'General', 'o+', 'chicago', 'parliament', 'Delhi', 'chicago', 'sto', 'chicago', 'ias', 0x75706c6f61642f6472646f6c6f676f2e4a504547);

-- --------------------------------------------------------

--
-- Table structure for table `history`
--

CREATE TABLE `history` (
  `history_id` int(11) NOT NULL,
  `date` varchar(50) NOT NULL,
  `data` varchar(50) NOT NULL,
  `action` varchar(50) NOT NULL,
  `user` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `history`
--

INSERT INTO `history` (`history_id`, `date`, `data`, `action`, `user`) VALUES
(1, '2017-04-15 11:33:42', ' ', 'Login', 'User'),
(2, '2017-04-15 11:33:46', 'user user', 'Logout', 'User'),
(3, '2017-04-15 11:33:53', 'admin admin', 'Login', 'Admin'),
(4, '2017-04-15 11:33:58', 'admin admin', 'Logout', 'Admin'),
(5, '2017-04-15 11:34:03', ' ', 'Login', 'User'),
(6, '2017-04-15 11:34:09', 'user user', 'Logout', 'User'),
(7, '2017-04-15 11:34:15', ' ', 'Login', 'User'),
(8, '2017-04-15 11:34:32', 'admin admin', 'Login', 'Admin'),
(9, '2017-04-15 11:41:59', 'admin admin', 'Logout', 'Admin'),
(10, '2017-04-15 11:42:05', 'admin admin', 'Login', 'Admin'),
(11, '2017-04-15 11:53:31', 'admin admin', 'Logout', 'Admin'),
(12, '2017-04-15 11:53:45', 'admin admin', 'Login', 'Admin'),
(13, '2017-04-15 12:05:48', 'admin admin', 'Logout', 'Admin'),
(14, '2017-04-15 12:05:56', 'admin admin', 'Login', 'Admin'),
(15, '2017-04-15 16:17:47', 'admin admin', 'Login', 'Admin'),
(16, '2017-04-16 09:53:04', 'admin admin', 'Login', 'Admin'),
(17, '2017-04-18 11:05:36', 'admin admin', 'Login', 'Admin'),
(18, '2017-04-18 11:55:18', 'admin admin', 'Logout', 'Admin'),
(19, '2017-04-18 11:55:43', 'admin admin', 'Login', 'Admin'),
(20, '2017-04-18 12:14:16', 'admin admin', 'Logout', 'Admin'),
(21, '2017-04-18 12:21:32', 'admin admin', 'Login', 'Admin'),
(22, '2017-04-18 12:26:44', 'admin admin', 'Login', 'Admin'),
(23, '2017-04-18 12:28:13', 'admin admin', 'Logout', 'Admin'),
(24, '2017-04-18 12:28:20', 'admin admin', 'Login', 'Admin'),
(25, '2017-04-18 12:48:13', 'admin admin', 'Login', 'Admin'),
(26, '2017-04-18 13:11:48', 'admin admin', 'Logout', 'Admin'),
(27, '2017-04-18 13:11:55', 'admin admin', 'Login', 'Admin'),
(28, '2017-04-19 10:40:01', 'admin admin', 'Login', 'Admin'),
(29, '2017-04-21 12:07:55', 'admin admin', 'Login', 'Admin'),
(30, '2017-04-21 12:08:07', 'admin admin', 'Login', 'Admin'),
(31, '2017-04-21 12:08:35', 'admin admin', 'Login', 'Admin'),
(32, '2017-04-21 12:09:52', ' ', 'Login', 'User'),
(33, '2017-04-21 12:10:40', ' ', 'Login', 'User'),
(34, '2017-04-21 12:10:53', 'admin admin', 'Login', 'Admin'),
(35, '2017-04-21 12:13:14', 'admin admin', 'Logout', 'Admin'),
(36, '2017-04-21 12:15:01', 'admin admin', 'Login', 'Admin'),
(37, '2017-04-21 12:16:47', 'admin admin', 'Login', 'Admin'),
(38, '2017-04-21 12:16:49', 'admin admin', 'Logout', 'Admin'),
(39, '2017-04-21 12:16:54', 'admin admin', 'Login', 'Admin'),
(40, '2017-04-21 15:37:41', 'admin admin', 'Logout', 'Admin'),
(41, '2017-04-21 18:09:06', 'admin admin', 'Login', 'Admin'),
(42, '2017-04-21 18:09:06', 'admin admin', 'Login', 'Admin'),
(43, '2017-04-22 10:41:54', 'admin admin', 'Login', 'Admin'),
(44, '2017-04-22 11:04:24', 'admin admin', 'Logout', 'Admin'),
(45, '2017-04-22 11:04:29', 'admin admin', 'Login', 'Admin'),
(46, '2017-04-22 11:18:19', 'admin admin', 'Logout', 'Admin'),
(47, '2017-04-22 11:18:35', 'admin admin', 'Login', 'Admin'),
(48, '2017-04-22 11:47:14', 'admin admin', 'Logout', 'Admin'),
(49, '2017-04-22 11:47:24', 'admin admin', 'Login', 'Admin'),
(50, '2017-04-22 13:55:15', 'admin admin', 'Logout', 'Admin'),
(51, '2017-04-22 16:10:04', 'admin admin', 'Login', 'Admin'),
(52, '2017-04-22 16:58:46', 'admin admin', 'Logout', 'Admin'),
(53, '2017-04-22 16:58:52', 'admin admin', 'Login', 'Admin'),
(54, '2017-04-22 17:27:25', 'admin admin', 'Login', 'Admin'),
(55, '2017-04-22 17:27:56', 'admin admin', 'Logout', 'Admin'),
(56, '2017-04-23 10:05:37', 'admin admin', 'Login', 'Admin'),
(57, '2017-04-24 12:47:03', 'admin admin', 'Login', 'Admin'),
(58, '2017-04-24 14:09:04', 'admin admin', 'Logout', 'Admin'),
(59, '2017-04-24 18:35:27', 'admin admin', 'Login', 'Admin'),
(60, '2017-04-24 21:43:17', 'admin admin', 'Logout', 'Admin'),
(61, '2017-04-25 14:51:38', 'admin admin', 'Login', 'Admin'),
(62, '2017-04-25 15:21:40', 'admin admin', 'Logout', 'Admin'),
(63, '2017-04-26 10:10:59', 'admin admin', 'Login', 'Admin'),
(64, '2017-04-26 10:40:15', 'admin admin', 'Login', 'Admin'),
(65, '2017-04-26 15:53:35', 'admin admin', 'Login', 'Admin'),
(66, '2017-04-26 17:00:10', 'admin admin', 'Logout', 'Admin'),
(67, '2017-04-26 17:00:40', 'admin admin', 'Login', 'Admin'),
(68, '2017-04-26 17:03:10', 'admin admin', 'Logout', 'Admin'),
(69, '2017-04-26 17:03:42', 'admin admin', 'Login', 'Admin'),
(70, '2017-04-26 17:07:11', 'admin admin', 'Logout', 'Admin'),
(71, '2017-04-26 17:08:26', 'admin admin', 'Login', 'Admin'),
(72, '2017-04-26 17:26:23', 'admin admin', 'Logout', 'Admin'),
(73, '2017-04-27 10:00:38', 'admin admin', 'Login', 'Admin'),
(74, '2017-04-27 11:29:39', 'admin admin', 'Logout', 'Admin'),
(75, '2017-05-02 10:53:42', 'admin admin', 'Login', 'Admin'),
(76, '2017-05-02 12:34:00', 'admin admin', 'Logout', 'Admin'),
(77, '2017-05-03 11:10:16', 'admin admin', 'Login', 'Admin'),
(78, '2017-05-03 12:42:31', 'admin admin', 'Logout', 'Admin');

-- --------------------------------------------------------

--
-- Table structure for table `loan`
--

CREATE TABLE `loan` (
  `Loan_Type` varchar(15) NOT NULL,
  `Loan_Account` varchar(30) NOT NULL,
  `Letter_NO` varchar(10) NOT NULL,
  `Sanction_Date` date NOT NULL,
  `Sanction_Amount` varchar(30) NOT NULL,
  `Return_Date` varchar(15) NOT NULL,
  `Remark` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `nomination`
--

CREATE TABLE `nomination` (
  `Nominee_Name` varchar(30) NOT NULL,
  `Relation` varchar(20) NOT NULL,
  `Nomination_Age` varchar(20) NOT NULL,
  `Nomination_Type` varchar(30) NOT NULL,
  `PresentAddress` varchar(255) NOT NULL,
  `State` varchar(15) NOT NULL,
  `Block` varchar(15) NOT NULL,
  `PinCode` int(10) NOT NULL,
  `District` varchar(15) NOT NULL,
  `Panchayat` varchar(15) NOT NULL,
  `phone_no` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nomination`
--

INSERT INTO `nomination` (`Nominee_Name`, `Relation`, `Nomination_Age`, `Nomination_Type`, `PresentAddress`, `State`, `Block`, `PinCode`, `District`, `Panchayat`, `phone_no`) VALUES
('toyat', 'wife', '40', 'dependent', 'h152', 'NewDelhi', 'north', 11063, 'new delhi', 'ndmc', 123456);

-- --------------------------------------------------------

--
-- Table structure for table `professional`
--

CREATE TABLE `professional` (
  `Appointment` varchar(15) NOT NULL,
  `Order_Number` varchar(20) NOT NULL,
  `Office_Name` varchar(30) NOT NULL,
  `Initial_Designation` varchar(15) NOT NULL,
  `Joining_Date` varchar(15) NOT NULL,
  `class` varchar(5) NOT NULL,
  `Type` varchar(15) NOT NULL,
  `Recruitment_Mode` varchar(15) NOT NULL,
  `Employee_Type` varchar(20) NOT NULL,
  `Basic_Pay` varchar(50) NOT NULL,
  `Retirement_Date` varchar(15) NOT NULL,
  `Deduction_Type` varchar(5) NOT NULL,
  `GIS_Member` varchar(15) NOT NULL,
  `GPF_CPS_Number` varchar(20) NOT NULL,
  `E_Salary_Code` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `professional`
--

INSERT INTO `professional` (`Appointment`, `Order_Number`, `Office_Name`, `Initial_Designation`, `Joining_Date`, `class`, `Type`, `Recruitment_Mode`, `Employee_Type`, `Basic_Pay`, `Retirement_Date`, `Deduction_Type`, `GIS_Member`, `GPF_CPS_Number`, `E_Salary_Code`) VALUES
('2017-02-01', '12', 'webyog', 'employee', '2017-02-06', 'C', 'Non-Gazetted', 'offline', '', '20000', '', 'CPS', '123', '0123456', '213'),
('2017-02-01', '12', 'webyog', 'employee', '2017-02-05', 'C', 'Non-Gazetted', 'offline', '', '20000', '2036-12-31', 'CPS', '123', '0123456', '213');

-- --------------------------------------------------------

--
-- Table structure for table `qualification`
--

CREATE TABLE `qualification` (
  `Employee` varchar(50) NOT NULL,
  `Qualification` varchar(50) NOT NULL,
  `Institute` varchar(100) NOT NULL,
  `Start_Date` date NOT NULL,
  `Completed_On` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `qualification`
--

INSERT INTO `qualification` (`Employee`, `Qualification`, `Institute`, `Start_Date`, `Completed_On`) VALUES
('toyta', 'bachelors degree', 'MIT', '2016-11-30', '2017-11-30');

-- --------------------------------------------------------

--
-- Table structure for table `service_history`
--

CREATE TABLE `service_history` (
  `Transaction_Type` varchar(50) NOT NULL,
  `Office` varchar(50) NOT NULL,
  `Position` varchar(30) NOT NULL,
  `Class` varchar(10) NOT NULL,
  `Order_Number` varchar(30) NOT NULL,
  `Order_Date` date NOT NULL,
  `Increment_Date` date NOT NULL,
  `Pay_Scale` int(50) NOT NULL,
  `Name_Deptt` varchar(50) NOT NULL,
  `Area_Type` varchar(15) NOT NULL,
  `Remark` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `service_history`
--

INSERT INTO `service_history` (`Transaction_Type`, `Office`, `Position`, `Class`, `Order_Number`, `Order_Date`, `Increment_Date`, `Pay_Scale`, `Name_Deptt`, `Area_Type`, `Remark`) VALUES
('12', 'air india', 'clerical', 'b', '325', '2017-12-31', '2017-11-30', 35000, 'hospitality', 'None', 'p');

-- --------------------------------------------------------

--
-- Table structure for table `skills`
--

CREATE TABLE `skills` (
  `employee` varchar(50) NOT NULL,
  `skill` varchar(100) NOT NULL,
  `details` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `skills`
--

INSERT INTO `skills` (`employee`, `skill`, `details`) VALUES
(' sang', 'nodejs', '9 month experience'),
('atlas', 'android developer', '18 month experince'),
('atlo', 'php developer', '6month expereince'),
('hung', 'c++', 'fresher'),
('kane', 'html front end', 'three year expereince. build six projects'),
('nano', 'buisness development', 'one year experince'),
('Rift johnson', 'software developer', 'Four year Experince'),
('ski', 'c++', 'fresher');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `User_id` int(11) NOT NULL,
  `UserName` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `FirstName` varchar(50) NOT NULL,
  `LastName` varchar(50) NOT NULL,
  `User_Type` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`User_id`, `UserName`, `Password`, `FirstName`, `LastName`, `User_Type`) VALUES
(1, 'admin', 'admin', 'admin', 'admin', 'Admin'),
(4, 'user', 'user', 'user', 'user', 'User');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `address`
--
ALTER TABLE `address`
  ADD PRIMARY KEY (`PresentAddress`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`Employee_No`);

--
-- Indexes for table `history`
--
ALTER TABLE `history`
  ADD PRIMARY KEY (`history_id`);

--
-- Indexes for table `loan`
--
ALTER TABLE `loan`
  ADD PRIMARY KEY (`Loan_Account`);

--
-- Indexes for table `nomination`
--
ALTER TABLE `nomination`
  ADD PRIMARY KEY (`Nominee_Name`);

--
-- Indexes for table `service_history`
--
ALTER TABLE `service_history`
  ADD PRIMARY KEY (`Transaction_Type`);

--
-- Indexes for table `skills`
--
ALTER TABLE `skills`
  ADD PRIMARY KEY (`employee`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`User_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `history`
--
ALTER TABLE `history`
  MODIFY `history_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=79;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `User_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
