-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 23, 2023 at 08:20 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `employeeleavedb`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `UserName` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `email` varchar(55) NOT NULL,
  `updationDate` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `Se_id` varchar(255) NOT NULL,
  `addedby` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `UserName`, `Password`, `fullname`, `email`, `updationDate`, `Se_id`, `addedby`) VALUES
(1, 'Balu', 'd00f5d5217896fb7fd601412cb890830', 'SPBN', 'admin@mail.com', '2023-04-13 10:08:57', 'Academics FIC', ''),
(2, 'bruno', '5f4dcc3b5aa765d61d8327deb882cf99', 'Bruno', 'itsbruno@mail.com', '2023-04-20 05:06:24', 'Student Affairs FIC', 'Balu'),
(3, 'greenwood', '5f4dcc3b5aa765d61d8327deb882cf99', 'Johnny', 'greenwood@mail.com', '2023-04-20 05:06:24', 'Developer Admin', 'Balu'),
(4, 'pss', '81dc9bdb52d04dc20036dbd8313ed055', 'Deepthi Pothuraju', 'dee@gmail.com', '2023-04-20 05:06:24', 'Student Affairs FIC', 'Balu'),
(5, 'AK', '6caab07c45cc3c643c5240c3a17730a7', 'Prof. Akthar Khan', 'AK@gmail.com', '2023-04-20 05:06:24', 'Academics FIC', 'Balu'),
(6, 'AKI', '202cb962ac59075b964b07152d234b70', 'Prof. AK', 'AK12@gmail.com', '2023-04-13 10:42:02', 'Academics FIC', 'Balu');

-- --------------------------------------------------------

--
-- Table structure for table `club_members`
--

CREATE TABLE `club_members` (
  `id` int(11) NOT NULL,
  `EmpId` varchar(100) NOT NULL,
  `FirstName` varchar(150) NOT NULL,
  `LastName` varchar(150) NOT NULL,
  `EmailId` varchar(200) NOT NULL,
  `Password` varchar(180) NOT NULL,
  `Gender` varchar(100) NOT NULL,
  `Dob` varchar(100) NOT NULL,
  `Department` varchar(255) NOT NULL,
  `Phonenumber` char(11) NOT NULL,
  `Status` int(1) NOT NULL,
  `RegDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `p_email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `club_members`
--

INSERT INTO `club_members` (`id`, `EmpId`, `FirstName`, `LastName`, `EmailId`, `Password`, `Gender`, `Dob`, `Department`, `Phonenumber`, `Status`, `RegDate`, `p_email`) VALUES
(9, '119me0023', 'Bhargav ', 'PVS', 'bhargav060702@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'Male', '2002-07-06', 'Mechanical Engineering in Design and Manufacturing', '9390639097', 1, '2022-10-12 08:06:56', 'bhargav06070@gmail.com'),
(13, '530016', 'as', 'ac', 'asdf@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'Male', '2022-10-14', 'Artificial Intelligence & Data Science', '6305118580', 1, '2022-10-24 10:32:56', 'asd@gmail.com'),
(14, '119ME0014', 'Indra Sena', 'Akki', '119me0014@iiitk.ac.in', '6af237aa72e89a9230caed680e347908', 'Male', '2002-03-08', 'Mechanical Engineering in Design and Manufacturing', '6305118580', 1, '2023-01-02 14:13:38', 'akki@gmail.com'),
(15, '531116', 'Venkata Sai Bhargav', 'hlo', 'jk@gmail.com', 'f7abbdb7e4ad134186c4a5e131900f19', 'Male', '2023-04-12', 'Artificial Intelligence & Data Science', '6305118580', 1, '2023-04-12 07:32:07', 'jk@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `club_type`
--

CREATE TABLE `club_type` (
  `id` int(11) NOT NULL,
  `ClubType` varchar(200) DEFAULT NULL,
  `ClubName` mediumtext DEFAULT NULL,
  `CreationDate` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `club_type`
--

INSERT INTO `club_type` (`id`, `ClubType`, `ClubName`, `CreationDate`) VALUES
(1, 'Drama Club', 'Narthanashala', '2020-11-01 12:07:56'),
(2, 'Fun Club', 'Masti Mazah Samooh', '2020-11-06 13:16:09'),
(3, 'Music Club', 'Roohaniyat', '2020-11-06 13:16:38'),
(5, 'Art Club', 'Art Fibres', '2021-03-03 10:46:31'),
(19, 'Cultural', 'Cultural', '2023-01-02 12:53:22'),
(20, 'Photography Club', 'Apertura', '2023-04-20 04:35:06'),
(21, 'Film and Media Club', 'FMC', '2023-04-20 04:36:55'),
(22, 'Astronomy Club', 'Khagolanveshan', '2023-04-20 04:37:34'),
(23, 'Mechanical Core Club', 'Mech-an-Idea ', '2023-04-20 04:38:31'),
(24, 'ECE Core Club', 'Electrophiles', '2023-04-20 04:38:54'),
(25, 'Google Developer Students Code', 'GDSC', '2023-04-20 04:39:21');

-- --------------------------------------------------------

--
-- Table structure for table `employeetype`
--

CREATE TABLE `employeetype` (
  `S.No` int(255) NOT NULL,
  `type_id` int(255) NOT NULL,
  `type` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `employeetype`
--

INSERT INTO `employeetype` (`S.No`, `type_id`, `type`) VALUES
(1, 1, 'Regular Faculty'),
(2, 2, 'Visiting Faculty'),
(3, 3, 'Outsourcing Faculty'),
(4, 4, 'Regular Staff'),
(5, 5, 'Outsourcing Staff');

-- --------------------------------------------------------

--
-- Table structure for table `primary_roles`
--

CREATE TABLE `primary_roles` (
  `S.No` int(255) NOT NULL,
  `Pr_id` int(255) NOT NULL,
  `role_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `primary_roles`
--

INSERT INTO `primary_roles` (`S.No`, `Pr_id`, `role_name`) VALUES
(1, 1, 'faculty'),
(2, 2, 'staff'),
(3, 3, 'outsourcing staff');

-- --------------------------------------------------------

--
-- Table structure for table `requests`
--

CREATE TABLE `requests` (
  `id` int(11) NOT NULL,
  `Club` varchar(110) NOT NULL,
  `ToDate` varchar(120) NOT NULL,
  `FromDate` varchar(120) NOT NULL,
  `RequestedVenue` varchar(255) NOT NULL,
  `Description` mediumtext NOT NULL,
  `ExpOccu` int(255) NOT NULL,
  `Fromtime` time NOT NULL,
  `Totime` time NOT NULL,
  `PostingDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `AcademicsRemark` mediumtext DEFAULT NULL,
  `AcademicsRemarkDate` varchar(120) DEFAULT NULL,
  `Status` int(1) NOT NULL,
  `IsRead` int(1) NOT NULL,
  `empid` int(11) DEFAULT NULL,
  `FICremark` mediumtext NOT NULL,
  `FICremarkdate` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `requests`
--

INSERT INTO `requests` (`id`, `Club`, `ToDate`, `FromDate`, `RequestedVenue`, `Description`, `ExpOccu`, `Fromtime`, `Totime`, `PostingDate`, `AcademicsRemark`, `AcademicsRemarkDate`, `Status`, `IsRead`, `empid`, `FICremark`, `FICremarkdate`) VALUES
(38, 'Music Club', '2023-01-10', '2023-01-08', 'CR2', 'hi', 0, '00:00:00', '00:00:00', '2023-01-07 05:50:26', NULL, NULL, 0, 1, 9, '', ''),
(39, 'Art Club', '2023-01-21', '2023-01-16', 'Seminar Hall', 'practice', 0, '00:00:00', '00:00:00', '2023-01-14 09:11:48', NULL, NULL, 0, 1, 9, '', ''),
(40, 'Fun Club', '2023-01-20', '2023-01-16', 'CR2', 'Cultural Event', 0, '00:00:00', '00:00:00', '2023-01-15 01:21:22', NULL, NULL, 0, 1, 9, '', ''),
(41, 'Fun Club', '2023-01-20', '2023-01-16', 'CR2', 'Cultural Event', 0, '00:00:00', '00:00:00', '2023-01-15 01:23:48', NULL, NULL, 0, 1, 9, '', ''),
(42, 'Fun Club', '2023-01-20', '2023-01-16', 'CR2', 'Cultural Event', 0, '00:00:00', '00:00:00', '2023-01-15 01:24:12', NULL, NULL, 0, 1, 9, '', ''),
(43, 'Fun Club', '2023-01-20', '2023-01-16', 'CR2', 'Cultural Event', 0, '00:00:00', '00:00:00', '2023-01-15 01:25:59', NULL, NULL, 0, 1, 9, '', ''),
(44, 'Fun Club', '2023-01-20', '2023-01-16', 'CR2', 'Cultural Event', 0, '00:00:00', '00:00:00', '2023-01-15 01:26:46', NULL, NULL, 0, 1, 9, '', ''),
(45, 'Fun Club', '2023-01-20', '2023-01-16', 'CR2', 'Cultural Event', 0, '00:00:00', '00:00:00', '2023-01-15 01:27:01', NULL, NULL, 0, 1, 9, '', ''),
(46, 'Fun Club', '2023-01-20', '2023-01-16', 'CR2', 'Cultural Event', 0, '00:00:00', '00:00:00', '2023-01-15 01:27:20', NULL, NULL, 0, 1, 9, '', ''),
(47, 'Fun Club', '2023-01-20', '2023-01-16', 'CR2', 'Cultural Event', 0, '00:00:00', '00:00:00', '2023-01-15 01:27:39', NULL, NULL, 0, 1, 9, '', ''),
(48, 'Fun Club', '2023-01-20', '2023-01-16', 'CR2', 'Cultural Event', 0, '00:00:00', '00:00:00', '2023-01-15 01:27:58', NULL, NULL, 0, 1, 9, '', ''),
(49, 'Fun Club', '2023-01-20', '2023-01-16', 'CR2', 'Cultural Event', 0, '00:00:00', '00:00:00', '2023-01-15 01:28:12', NULL, NULL, 0, 1, 9, '', ''),
(50, 'Fun Club', '2023-01-20', '2023-01-16', 'CR2', 'Cultural Event', 0, '00:00:00', '00:00:00', '2023-01-15 01:28:20', NULL, NULL, 0, 1, 9, '', ''),
(51, 'Fun Club', '2023-01-20', '2023-01-16', 'CR2', 'Cultural Event', 0, '00:00:00', '00:00:00', '2023-01-15 01:28:29', NULL, NULL, 0, 1, 9, '', ''),
(52, 'Fun Club', '2023-01-20', '2023-01-16', 'CR2', 'Cultural Event', 0, '00:00:00', '00:00:00', '2023-01-15 15:36:42', NULL, NULL, 0, 1, 9, '', ''),
(53, 'Fun Club', '2023-01-20', '2023-01-16', 'CR2', 'Cultural Event', 0, '00:00:00', '00:00:00', '2023-01-15 15:39:48', NULL, NULL, 0, 1, 9, '', ''),
(54, 'Art Club', '2023-01-22', '2023-01-20', 'Seminar Hall', 'hlo', 0, '00:00:00', '00:00:00', '2023-01-20 17:22:52', NULL, NULL, 0, 1, 9, '', ''),
(55, 'Art Club', '2023-01-22', '2023-01-20', 'Seminar Hall', 'hlo', 0, '00:00:00', '00:00:00', '2023-01-20 17:26:24', NULL, NULL, 0, 1, 9, '', ''),
(56, 'Cultural', '2023-01-23', '2023-01-21', 'CR2', 'Event', 0, '00:00:00', '00:00:00', '2023-01-20 17:26:50', NULL, NULL, 0, 1, 9, '', ''),
(57, 'Fun Club', '2023-01-22', '2023-01-22', 'CR1', 'jkli', 0, '00:00:00', '00:00:00', '2023-01-20 17:29:55', NULL, NULL, 0, 1, 9, '', ''),
(58, 'Music Club', '2023-01-22', '2023-01-20', 'CR2', 'Concert', 0, '00:00:00', '00:00:00', '2023-01-20 17:42:56', NULL, NULL, 0, 1, 9, '', ''),
(59, 'Music Club', '2023-01-22', '2023-01-20', 'CR2', 'Concert', 0, '00:00:00', '00:00:00', '2023-01-20 17:43:21', NULL, NULL, 0, 1, 9, '', ''),
(60, 'Drama Club', '2023-01-22', '2023-01-20', 'CR1', 'Stand up', 0, '00:00:00', '00:00:00', '2023-01-20 17:43:55', NULL, NULL, 0, 1, 9, '', ''),
(61, 'Fun Club', '2023-01-22', '2023-01-20', 'CR1', 'Masti', 0, '00:00:00', '00:00:00', '2023-01-20 17:44:57', NULL, NULL, 0, 0, 9, '', ''),
(62, 'Music Club', '2023-01-22', '2023-01-21', 'CR1', 'Concert', 0, '00:00:00', '00:00:00', '2023-01-20 17:54:16', NULL, NULL, 0, 1, 9, '', ''),
(63, 'Music Club', '2023-01-22', '2023-01-21', 'CR1', 'Concert', 0, '00:00:00', '00:00:00', '2023-01-20 18:04:04', NULL, NULL, 0, 0, 9, '', ''),
(64, 'Music Club', '2023-01-22', '2023-01-21', 'CR1', 'Concert', 0, '00:00:00', '00:00:00', '2023-01-20 18:05:42', NULL, NULL, 0, 0, 9, '', ''),
(65, 'Drama Club', '2023-01-29', '2023-01-21', 'CR2', 'Folk', 0, '00:00:00', '00:00:00', '2023-01-20 18:06:01', NULL, NULL, 0, 1, 9, '', ''),
(66, 'Drama Club', '2023-01-23', '2023-01-21', 'Seminar Hall', 'Stand Up', 250, '02:45:00', '04:48:00', '2023-01-20 18:13:41', NULL, NULL, 0, 1, 9, '', ''),
(67, 'Drama Club', '2023-01-23', '2023-01-21', 'Seminar Hall', 'Stand Up', 250, '02:45:00', '04:48:00', '2023-01-20 18:14:23', NULL, NULL, 4, 1, 9, 'No Permission', '2023-01-21 0:00:28 '),
(68, 'Art Club', '2023-01-25', '2023-01-24', 'CR2', 'Painting', 250, '13:15:00', '14:15:00', '2023-01-23 05:44:36', 'Approved', '2023-01-23 11:17:12 ', 1, 1, 9, 'Recomending this', '2023-01-23 11:16:27 '),
(69, 'Cultural', '2023-02-11', '2023-02-10', 'CR1', 'Freshers Day', 50, '17:30:00', '18:30:00', '2023-02-09 10:00:05', NULL, NULL, 3, 1, 9, 'Approved', '2023-02-09 15:36:47 '),
(70, 'Drama Club', '2023-04-09', '2023-04-09', 'CR1', 'Practice', 250, '10:00:00', '09:59:00', '2023-04-09 09:37:16', 'Good to go', '2023-04-13 10:32:03 ', 1, 1, 9, 'go ahead', '2023-04-12 13:10:54 '),
(72, 'Drama Club', '2023-04-14', '2023-04-13', 'CR2', 'lol', 250, '17:02:00', '18:02:00', '2023-04-13 11:32:28', NULL, NULL, 0, 0, 15, '', ''),
(73, 'Art Club', '2023-04-30', '2023-04-13', 'CR1', 'klo', 50, '17:09:00', '17:10:00', '2023-04-13 11:34:53', NULL, NULL, 0, 1, 15, '', ''),
(74, 'Art Club', '2023-04-30', '2023-04-13', 'CR1', 'klo', 50, '17:09:00', '17:10:00', '2023-04-13 12:25:32', NULL, NULL, 0, 1, 15, '', ''),
(75, 'Fun Club', '2023-04-18', '2023-04-17', 'Seminar Hall', 'Event', 50, '18:20:00', '19:20:00', '2023-04-17 11:50:45', 'Good to go', '2023-04-17 17:29:52 ', 1, 1, 9, 'Go ahead', '2023-04-17 17:26:30 ');

-- --------------------------------------------------------

--
-- Table structure for table `secondary_roles`
--

CREATE TABLE `secondary_roles` (
  `S.No` int(255) NOT NULL,
  `Se_id` int(255) NOT NULL,
  `Se_role` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `secondary_roles`
--

INSERT INTO `secondary_roles` (`S.No`, `Se_id`, `Se_role`) VALUES
(1, 1, 'Director'),
(2, 2, 'HOD'),
(3, 3, 'Dean'),
(4, 4, 'Associate Dean'),
(5, 5, 'Registrar'),
(6, 6, 'Assistant Registrar'),
(7, 7, 'Chairman');

-- --------------------------------------------------------

--
-- Table structure for table `tbldepartments`
--

CREATE TABLE `tbldepartments` (
  `id` int(11) NOT NULL,
  `DepartmentName` varchar(150) DEFAULT NULL,
  `DepartmentShortName` varchar(100) NOT NULL,
  `DepartmentCode` varchar(50) DEFAULT NULL,
  `CreationDate` timestamp NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbldepartments`
--

INSERT INTO `tbldepartments` (`id`, `DepartmentName`, `DepartmentShortName`, `DepartmentCode`, `CreationDate`) VALUES
(1, 'Computer Science', 'CSE', 'CSE', '2020-11-01 07:16:25'),
(2, 'Artificial Intelligence & Data Science', 'AI&DS', 'AI&DS', '2020-11-01 07:19:37'),
(3, 'Electronics and Communication Engineering', 'ECE', 'ECE', '2020-12-02 21:28:56'),
(4, 'Mechanical Engineering in Design and Manufacturing', 'Mech', 'MDM', '2021-03-03 08:27:52'),
(5, 'College Adminstration', 'Adminstration', 'Admin block', '2021-03-03 10:53:52');

-- --------------------------------------------------------

--
-- Table structure for table `tblemployees`
--

CREATE TABLE `tblemployees` (
  `id` int(11) NOT NULL,
  `EmpId` varchar(100) NOT NULL,
  `FirstName` varchar(150) NOT NULL,
  `LastName` varchar(150) NOT NULL,
  `EmailId` varchar(200) NOT NULL,
  `Password` varchar(180) NOT NULL,
  `Gender` varchar(100) NOT NULL,
  `Dob` varchar(100) NOT NULL,
  `Department` varchar(255) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `City` varchar(200) NOT NULL,
  `Country` varchar(150) NOT NULL,
  `Phonenumber` char(11) NOT NULL,
  `Status` int(1) NOT NULL,
  `RegDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `f_name` varchar(255) NOT NULL,
  `m_name` varchar(255) NOT NULL,
  `Maritalstatus` varchar(100) NOT NULL,
  `Spousename` varchar(255) NOT NULL,
  `Aadharno` int(255) NOT NULL,
  `PANno` varchar(255) NOT NULL,
  `PRANno` int(255) NOT NULL,
  `Religion` varchar(255) NOT NULL,
  `Nationality` varchar(255) NOT NULL,
  `MotherTongue` varchar(255) NOT NULL,
  `caste` varchar(255) NOT NULL,
  `SubCategory` varchar(255) NOT NULL,
  `pwd` varchar(255) NOT NULL,
  `ex` varchar(255) NOT NULL,
  `under` varchar(255) NOT NULL,
  `paylevel` varchar(255) NOT NULL,
  `paycell` varchar(255) NOT NULL,
  `b_pay` int(255) NOT NULL,
  `specialization` varchar(255) NOT NULL,
  `r_inter` varchar(255) NOT NULL,
  `p_email` varchar(255) NOT NULL,
  `o_phone` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblemployees`
--

INSERT INTO `tblemployees` (`id`, `EmpId`, `FirstName`, `LastName`, `EmailId`, `Password`, `Gender`, `Dob`, `Department`, `Address`, `City`, `Country`, `Phonenumber`, `Status`, `RegDate`, `f_name`, `m_name`, `Maritalstatus`, `Spousename`, `Aadharno`, `PANno`, `PRANno`, `Religion`, `Nationality`, `MotherTongue`, `caste`, `SubCategory`, `pwd`, `ex`, `under`, `paylevel`, `paycell`, `b_pay`, `specialization`, `r_inter`, `p_email`, `o_phone`) VALUES
(9, '119me0023', 'Bhargav ', 'PVS', 'bhargav060702@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'Male', '2002-07-06', 'Mechanical Engineering in Design and Manufacturing', 'Vizag', 'Vizag', 'India', '9390639098', 1, '2022-10-12 08:06:56', '', '', '0', '', 0, '', 0, '', '', '', '', '', '0', '0', '', '', '', 0, '', '', '', 0),
(13, '530016', 'as', 'ac', 'asdf@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'Male', '2022-10-14', 'Artificial Intelligence & Data Science', '50-64-11,kanakammavari Street,Seethammapeta', 'visakhapatnam', 'India', '6305118580', 1, '2022-10-24 10:32:56', 'ace', 'aev', 'Single', 'aC', 2147483647, '7647328272', 2147483647, 'tsdb', 'Indian', 'rth', 'ST', 'stb', 'Non-PWD', 'Non-Ex-Servicemen', 'sb', 'sbdb', 'bfs', 72782, 'stgfnj', 'dfzb', 'asd@gmail.com', 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `tblemployes`
--

CREATE TABLE `tblemployes` (
  `id` int(11) NOT NULL,
  `EmpId` varchar(100) NOT NULL,
  `FirstName` varchar(150) NOT NULL,
  `LastName` varchar(150) NOT NULL,
  `EmailId` varchar(200) NOT NULL,
  `Password` varchar(180) NOT NULL,
  `Gender` varchar(100) NOT NULL,
  `Dob` varchar(100) NOT NULL,
  `Department` varchar(255) NOT NULL,
  `Address` varchar(255) NOT NULL,
  `City` varchar(200) NOT NULL,
  `Country` varchar(150) NOT NULL,
  `Phonenumber` char(11) NOT NULL,
  `Status` int(1) NOT NULL,
  `RegDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `f_name` varchar(255) NOT NULL,
  `m_name` varchar(255) NOT NULL,
  `Maritalstatus` varchar(100) NOT NULL,
  `Spousename` varchar(255) NOT NULL,
  `Aadharno` int(255) NOT NULL,
  `PANno` varchar(255) NOT NULL,
  `PRANno` int(255) NOT NULL,
  `Religion` varchar(255) NOT NULL,
  `Nationality` varchar(255) NOT NULL,
  `MotherTongue` varchar(255) NOT NULL,
  `caste` varchar(255) NOT NULL,
  `SubCategory` varchar(255) NOT NULL,
  `pwd` varchar(255) NOT NULL,
  `under` varchar(255) NOT NULL,
  `ex` varchar(255) NOT NULL,
  `paylevel` varchar(255) NOT NULL,
  `paycell` varchar(255) NOT NULL,
  `b_pay` int(255) NOT NULL,
  `specialization` varchar(255) NOT NULL,
  `r_inter` varchar(255) NOT NULL,
  `p_email` varchar(255) NOT NULL,
  `o_phone` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tblemployes`
--

INSERT INTO `tblemployes` (`id`, `EmpId`, `FirstName`, `LastName`, `EmailId`, `Password`, `Gender`, `Dob`, `Department`, `Address`, `City`, `Country`, `Phonenumber`, `Status`, `RegDate`, `f_name`, `m_name`, `Maritalstatus`, `Spousename`, `Aadharno`, `PANno`, `PRANno`, `Religion`, `Nationality`, `MotherTongue`, `caste`, `SubCategory`, `pwd`, `under`, `ex`, `paylevel`, `paycell`, `b_pay`, `specialization`, `r_inter`, `p_email`, `o_phone`) VALUES
(1, '1234', 'Bha', 'rgav', 'bh@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'Male', '2002-07-06', 'Electronics and Communication Engineering', '6-7, gurralabeedu, pedaboddepalli', 'VISAKHAPATNAM', 'India', '9390639098', 1, '2022-10-23 10:13:20', '', '', '', '', 0, '0', 0, '', '', '', '', '', '', '', '', '', '', 0, '', '', '', 0),
(5, '123', 'b', 'h', 'b@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'Male', '2002-07-06', 'Computer Science', '50-64-11,kanakammavari Street,Seethammapeta', 'visakhapatnam', 'India', '6305118580', 1, '2022-10-23 10:18:31', '', '', '', '', 0, '0', 0, '', '', '', '', '', '', '', '', '', '', 0, '', '', '', 0),
(6, '123', 'bhu', 'g', 't@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'Female', '2002-07-06', 'Computer Science', '50-64-11,kanakammavari Street,Seethammapeta', 'visakhapatnam', 'India', '6305118580', 1, '2022-10-23 10:24:47', 'hi', '', '', '', 0, '0', 0, '', '', '', '', '', '', '', '', '', '', 0, '', '', '', 0),
(7, '531116', '06305118580', 'Deepthi', 's@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'Male', '2022-10-22', 'Artificial Intelligence & Data Science', '6-7, gurralabeedu, pedaboddepalli', 'VISAKHAPATNAM', 'India', '6305118580', 1, '2022-10-24 04:53:51', 'sdv', 'avc', '', '', 0, '0', 0, '', '', '', '', '', '', '', '', '', '', 0, '', '', '', 0),
(8, '531116', '06305118580', 'Deepthi', 'a@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'Female', '2022-10-24', 'Electronics and Communication Engineering', '6-7, gurralabeedu, pedaboddepalli', 'VISAKHAPATNAM', 'India', '6305118580', 1, '2022-10-24 05:12:37', 'asd', 'qwe', 'Married', '', 0, '0', 0, '', '', '', '', '', '', '', '', '', '', 0, '', '', '', 0),
(10, '531116', '06305118580', 'Deepthi', 'q@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'Female', '2022-10-24', 'Mechanical Engineering in Design and Manufacturing', '6-7, gurralabeedu, pedaboddepalli', 'VISAKHAPATNAM', 'India', '6305118580', 1, '2022-10-24 05:18:14', 'cvb', 'bvc', 'Divorced', 'bvc', 0, '0', 0, '', '', '', '', '', '', '', '', '', '', 0, '', '', '', 0),
(19, '531116', '06305118580', 'Deepthi', 'sd@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'Female', '2022-09-29', 'Computer Science', '6-7, gurralabeedu, pedaboddepalli', 'VISAKHAPATNAM', 'India', 'ax', 1, '2022-10-24 06:50:54', 'za', 'ax', 'Single', 'ax', 0, '0', 0, '', '', '', '', '', '', '', '', '', '', 0, '', '', '', 0),
(20, 'sz ', 'sdv', 'sv', 'd@gamil.com', '81dc9bdb52d04dc20036dbd8313ed055', 'Female', '2022-10-01', 'Computer Science', '50-64-11,kanakammavari Street,Seethammapeta', 'visakhapatnam', 'India', '6305118580', 1, '2022-10-24 09:48:42', 'zxc ', 'xz c', 'Single', 'cd', 2147483647, '4874895274', 2147483647, 'Cd', 'Indian', 'qef', 'ST', 'ds', 'Non-PWD', 'cAD', 'Non-Ex-Servicemen', '', '', 0, '', '', '', 0),
(21, '531116', '06305118580', 'df', 'qwe@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055', 'Male', '2022-10-29', 'Computer Science', '50-64-11,kanakammavari Street,Seethammapeta', 'visakhapatnam', 'India', '6305118580', 1, '2022-10-24 10:19:36', 'cs', 'asc', 'Single', 'ca', 2147483647, '8949658146', 2147483647, 'Sv', 'NRI', 'svd', 'OC', 'svd', 'Non-PWD', 'VS', 'Non-Ex-Servicemen', 'sac', 'asvd', 0, 'ASDV', 'Avd', 'asd@gmail.com', 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `tblleaves`
--

CREATE TABLE `tblleaves` (
  `id` int(11) NOT NULL,
  `LeaveType` varchar(110) NOT NULL,
  `ToDate` varchar(120) NOT NULL,
  `FromDate` varchar(120) NOT NULL,
  `Description` mediumtext NOT NULL,
  `PostingDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `AdminRemark` mediumtext DEFAULT NULL,
  `AdminRemarkDate` varchar(120) DEFAULT NULL,
  `Status` int(1) NOT NULL,
  `IsRead` int(1) NOT NULL,
  `empid` int(11) DEFAULT NULL,
  `recremark` mediumtext NOT NULL,
  `recremarkdate` varchar(120) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblleaves`
--

INSERT INTO `tblleaves` (`id`, `LeaveType`, `ToDate`, `FromDate`, `Description`, `PostingDate`, `AdminRemark`, `AdminRemarkDate`, `Status`, `IsRead`, `empid`, `recremark`, `recremarkdate`) VALUES
(30, 'Hospital Leave ', '2022-10-26', '2022-10-27', '', '2022-10-24 10:48:04', NULL, NULL, 3, 1, 9, 'nil', '2022-10-24 23:39:34 '),
(31, 'Paternity Leave', '2022-10-25', '2022-10-28', '', '2022-10-24 10:50:44', '-', '2022-10-24 17:53:28 ', 1, 1, 9, '', ''),
(32, 'Sabbatical Leave', '2022-10-27', '2022-10-29', '', '2022-10-24 10:50:56', 'Nope', '2022-10-24 17:51:23 ', 1, 1, 9, '', ''),
(33, 'Half-Pay Leave', '2022-10-26', '2022-10-26', '', '2022-10-25 06:30:25', 'Have a Leave', '2022-10-25 12:23:49 ', 1, 1, 9, 'All Good', '2022-10-25 12:22:18 '),
(34, 'Commuted Leave', '2022-10-04', '2022-10-08', '', '2022-10-25 07:22:44', NULL, NULL, 0, 1, 9, '', ''),
(35, 'Commuted Leave', '2022-10-04', '2022-10-08', '', '2022-10-25 18:10:12', NULL, NULL, 4, 1, 9, 'can\'t give leave now', '2022-10-25 23:56:06 '),
(36, 'Casual Leave', '2022-10-28', '2022-10-30', 'Health issues', '2022-10-27 02:14:29', NULL, NULL, 0, 1, 9, '', ''),
(37, 'Half-Pay Leave', '2022-12-24', '2022-12-27', '', '2022-12-23 15:06:12', NULL, NULL, 0, 1, 9, '', ''),
(38, 'Hospital Leave ', '2023-01-21', '2023-01-22', 'jk', '2023-01-20 17:55:20', NULL, NULL, 0, 0, 9, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tblleavetype`
--

CREATE TABLE `tblleavetype` (
  `id` int(11) NOT NULL,
  `LeaveType` varchar(200) DEFAULT NULL,
  `Description` mediumtext DEFAULT NULL,
  `CreationDate` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tblleavetype`
--

INSERT INTO `tblleavetype` (`id`, `LeaveType`, `Description`, `CreationDate`) VALUES
(1, 'Casual Leave', 'Personal Work etc.', '2020-11-01 12:07:56'),
(2, 'Special Casual Leave', 'Visit in connection with consultancy & sponsored research activities or any national/international conferences to present a paper/chairing a session or to attend committe meetings or to attend Ph.D Viva', '2020-11-06 13:16:09'),
(3, 'Half-Pay Leave', 'Medical Grounds/Private Affairs', '2020-11-06 13:16:38'),
(5, 'Commuted Leave', 'Medical Grounds or Study Purpose', '2021-03-03 10:46:31'),
(6, 'Earned Leave', 'Any purpose', '2021-03-03 10:47:48'),
(7, 'Academic Leave', 'For academic work such as visit on accounts of collaboration, conference, talks, seminars, invited lectures and visit to field stations.', '2021-03-03 10:48:37'),
(8, 'Maternity Leave', 'Maternity leave form to be filled up and submitted to Chairperson of School with medical certificate.', '2021-03-03 10:50:17'),
(9, 'Paternity Leave', 'Paternity', '2021-03-03 10:51:26'),
(10, 'Child Care Leave', 'For taking care of Child', '2021-03-03 13:18:26'),
(11, 'Leave not Due', 'Medical grounds/private affairs', '2021-03-03 13:19:06'),
(12, 'Sabbatical Leave', 'Research work, Teaching in an institution in India and abroad, writing text books monographs or other books, any other purpose for the academic development of the staff & visiting industrial concerns of Govt. University, Industry or Govt. Research Laboratories in India/Abroad.', '2021-03-03 13:19:48'),
(13, 'Duty Leave', 'Intended for visiting institutions like CERN and such institution where NISER is a participating member pertaining to multi institutional experiments or Intended for research in projects.', '2021-03-03 13:21:10'),
(14, 'Hospital Leave ', 'Injury/illness directly due to risk incurred in the course of official duty', '2022-10-17 05:54:13'),
(15, 'Short Leave on Foreign Service ', 'To serve elsewhere in which the employee receives pay from another organization', '2022-10-17 05:54:13'),
(16, 'Long Leave on Foreign Service', 'To serve elsewhere in which the employee receives pay from another organization', '2022-10-17 05:54:13'),
(17, 'Extraordinary Leave', '1. Short/Long term assignments in India/abroad\r\n2. Higher Studies\r\n3. Research Activities\r\n4. Fellowship\r\n5. Sickness/medical certificate', '2022-10-17 05:54:13');

-- --------------------------------------------------------

--
-- Table structure for table `venue`
--

CREATE TABLE `venue` (
  `id` int(11) NOT NULL,
  `RequestedVenue` varchar(200) DEFAULT NULL,
  `CreationDate` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `venue`
--

INSERT INTO `venue` (`id`, `RequestedVenue`, `CreationDate`) VALUES
(1, 'CR1', '2023-01-06 15:30:41'),
(2, 'CR2', '2023-01-06 15:30:41'),
(3, 'Seminar Hall', '2023-01-06 15:30:41');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `club_members`
--
ALTER TABLE `club_members`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personalemail` (`p_email`);

--
-- Indexes for table `club_type`
--
ALTER TABLE `club_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employeetype`
--
ALTER TABLE `employeetype`
  ADD PRIMARY KEY (`S.No`);

--
-- Indexes for table `primary_roles`
--
ALTER TABLE `primary_roles`
  ADD PRIMARY KEY (`S.No`);

--
-- Indexes for table `requests`
--
ALTER TABLE `requests`
  ADD PRIMARY KEY (`id`),
  ADD KEY `UserEmail` (`empid`);

--
-- Indexes for table `tbldepartments`
--
ALTER TABLE `tbldepartments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tblemployees`
--
ALTER TABLE `tblemployees`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personalemail` (`p_email`);

--
-- Indexes for table `tblemployes`
--
ALTER TABLE `tblemployes`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `EmailId` (`EmailId`);

--
-- Indexes for table `tblleaves`
--
ALTER TABLE `tblleaves`
  ADD PRIMARY KEY (`id`),
  ADD KEY `UserEmail` (`empid`);

--
-- Indexes for table `tblleavetype`
--
ALTER TABLE `tblleavetype`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `venue`
--
ALTER TABLE `venue`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `club_members`
--
ALTER TABLE `club_members`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `club_type`
--
ALTER TABLE `club_type`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `employeetype`
--
ALTER TABLE `employeetype`
  MODIFY `S.No` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `primary_roles`
--
ALTER TABLE `primary_roles`
  MODIFY `S.No` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `requests`
--
ALTER TABLE `requests`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=76;

--
-- AUTO_INCREMENT for table `tbldepartments`
--
ALTER TABLE `tbldepartments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `tblemployees`
--
ALTER TABLE `tblemployees`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tblemployes`
--
ALTER TABLE `tblemployes`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `tblleaves`
--
ALTER TABLE `tblleaves`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `tblleavetype`
--
ALTER TABLE `tblleavetype`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `venue`
--
ALTER TABLE `venue`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
