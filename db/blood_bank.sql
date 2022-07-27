-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 13, 2017 at 06:37 AM
-- Server version: 5.6.12-log
-- PHP Version: 5.4.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `blood_bank`
--
CREATE DATABASE IF NOT EXISTS `blood_bank` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `blood_bank`;

-- --------------------------------------------------------

--
-- Table structure for table `area`
--

CREATE TABLE IF NOT EXISTS `area` (
  `AREA_ID` int(11) NOT NULL AUTO_INCREMENT,
  `CITY_ID` int(11) NOT NULL,
  `STATE_ID` int(11) NOT NULL,
  `AREA_NAME` varchar(150) NOT NULL,
  PRIMARY KEY (`AREA_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=368 ;

--
-- Dumping data for table `area`
--

INSERT INTO `area` (`AREA_ID`, `CITY_ID`, `STATE_ID`, `AREA_NAME`) VALUES
(1, 1, 1, 'New Bus Stand'),
(2, 2, 1, 'Annur'),
(3, 3, 1, 'Adhanakurichi 621719'),
(5, 3, 1, 'Adhikudikadu 621714'),
(6, 3, 1, 'Alagapuram 608901'),
(7, 3, 1, 'Adhikudikadu 621714'),
(8, 3, 1, 'Alagiamanavalam 621715'),
(9, 3, 1, 'Alathipallam 612903'),
(10, 3, 1, 'Alathiyur 621719'),
(11, 3, 1, 'Ambapur 621701');


-- --------------------------------------------------------

--
-- Table structure for table `blood_donor`
--

CREATE TABLE IF NOT EXISTS `blood_donor` (
  `DONOR_ID` int(11) NOT NULL AUTO_INCREMENT,
  `NAME` varchar(150) NOT NULL,
  `FATHER_NAME` varchar(150) NOT NULL,
  `GENDER` varchar(150) NOT NULL,
  `DOB` date NOT NULL,
  `BLOOD` varchar(150) NOT NULL,
  `BODY_WEIGHT` int(11) NOT NULL,
  `EMAIL` varchar(150) NOT NULL,
  `ADDRESS` text NOT NULL,
  `AREA` varchar(150) NOT NULL,
  `CITY` varchar(150) NOT NULL,
  `PINCODE` varchar(150) NOT NULL,
  `STATE` varchar(150) NOT NULL,
  `COUNTRY` varchar(150) NOT NULL,
  `CONTACT_1` varchar(150) NOT NULL,
  `CONTACT_2` varchar(150) NOT NULL,
  `VOLUNTARY` text NOT NULL,
  `VOLUNTARY_GROUP` text NOT NULL,
  `NEW_DONOR` varchar(150) NOT NULL,
  `LAST_D_DATE` date NOT NULL,
  `DONOR_PIC` varchar(150) NOT NULL,
  `STATUS` int(11) NOT NULL,
  PRIMARY KEY (`DONOR_ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `city`
--

CREATE TABLE IF NOT EXISTS `city` (
  `CITY_ID` int(11) NOT NULL AUTO_INCREMENT,
  `STATE_ID` int(11) NOT NULL,
  `CITY_NAME` varchar(150) NOT NULL,
  PRIMARY KEY (`CITY_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=75 ;

--
-- Dumping data for table `city`
--

INSERT INTO `city` (`CITY_ID`, `STATE_ID`, `CITY_NAME`) VALUES
(3, 1, 'Ariyalur'),
(4, 1, 'Chennai'),
(5, 1, 'Coimbatore'),
(7, 1, 'Cuddalore'),
(8, 1, 'Dharmapuri'),
(9, 1, 'Dindigul'),
(10, 1, 'Erode'),
(11, 1, 'Kanchipuram'),
(12, 1, 'Kanyakumari'),
(13, 1, 'Karur'),
(14, 1, 'Krishnagiri'),
(15, 1, 'Madurai'),
(16, 1, 'Nagapattinam'),
(17, 1, 'Namakkal'),
(18, 1, 'Nilgiris and Ooty'),
(19, 1, 'Perambalur'),
(20, 1, 'Pudukkottai'),
(21, 1, 'Ramanathapuram'),
(22, 1, 'Salem'),
(23, 1, 'Sivaganga'),
(24, 1, 'Thanjapur'),
(25, 1, 'Theni'),
(26, 1, 'Thoothukudi'),
(27, 1, 'Tiruchirappalli'),
(28, 1, 'Tirunelveli'),
(29, 1, 'Tiruppur'),
(30, 1, 'Tiruvallur'),
(31, 1, 'Tiruvannamalai'),
(32, 1, 'Tiruvarur'),
(33, 1, 'Vellore'),
(34, 1, 'Viluppuram'),
(35, 1, 'Virudhunagar'),
(36, 40, 'Mali'),
(37, 37, 'Canada'),
(38, 38, 'Kwait'),
(39, 39, 'Malaysia & Brunei'),
(40, 41, 'Nepal'),
(41, 42, 'Oman'),
(42, 43, 'Pakistan'),
(43, 44, 'Qater'),
(44, 45, 'Russia'),
(45, 46, 'Saudi Arabia'),
(46, 47, 'Singapore'),
(47, 46, 'Saudi Arabia'),
(48, 2, 'Kerala'),
(49, 2, 'Alappuzha'),
(50, 2, 'Alleppey'),
(51, 2, 'Alwaye'),
(52, 2, 'Bekal'),
(53, 2, '  Fort Kochi'),
(54, 2, 'Kochi'),
(55, 2, 'Kollam'),
(56, 2, 'Thrissur'),
(57, 2, 'Ernakulam'),
(58, 2, 'Kottayam'),
(59, 2, 'Kovalam'),
(60, 2, 'Kozikode'),
(61, 2, 'Kumarakom'),
(62, 2, 'Malampuzha'),
(63, 2, 'Munnar'),
(64, 2, 'Palakkad'),
(65, 2, 'Pathanamthitta'),
(66, 2, 'Thoppumpaddy'),
(67, 2, 'Ponnani'),
(68, 2, 'Punalur'),
(69, 2, 'Thalassery'),
(70, 2, 'Thekkady'),
(71, 2, 'Thiruvananthapuram'),
(72, 2, 'Thrippunithura'),
(73, 2, 'Varkala'),
(74, 2, 'Perinthalamanna');

-- --------------------------------------------------------

--
-- Table structure for table `country`
--

CREATE TABLE IF NOT EXISTS `country` (
  `COUNTRY_ID` int(11) NOT NULL AUTO_INCREMENT,
  `COUNTRY_NAME` varchar(150) NOT NULL,
  PRIMARY KEY (`COUNTRY_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `country`
--

INSERT INTO `country` (`COUNTRY_ID`, `COUNTRY_NAME`) VALUES
(1, 'India'),
(2, 'Saudi Arabia'),
(4, 'Kwait'),
(5, 'Qatar'),
(6, 'Singapore'),
(7, 'Russia'),
(8, 'Pakistan'),
(10, 'Nepal'),
(11, 'Mali'),
(12, 'Malaysia & Brunei'),
(13, 'Canada');

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE IF NOT EXISTS `messages` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `NAME` varchar(150) NOT NULL,
  `CONTACT` text NOT NULL,
  `EMAIL` varchar(200) NOT NULL,
  `MESSAGE` text NOT NULL,
  `STATUS` text NOT NULL,
  `LOGS` datetime NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`ID`, `NAME`, `CONTACT`, `EMAIL`, `MESSAGE`, `STATUS`, `LOGS`) VALUES
(2, 'Gokul', '9087876788', 'gokul@gmail.com', 'Test Message', '0', '2016-07-11 19:56:43'),
(3, 'ram', '345345', 'rawfw@dfg.v', 'gdgreg', '0', '2017-01-22 11:11:46'),
(4, 'sam', '9876543212', 'sam@gmail.com', 'hai', '1', '2017-03-16 10:40:34');

-- --------------------------------------------------------

--
-- Table structure for table `request_blood`
--

CREATE TABLE IF NOT EXISTS `request_blood` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `NAME` varchar(150) NOT NULL,
  `GENDER` varchar(150) NOT NULL,
  `BLOOD` varchar(150) NOT NULL,
  `BUNIT` int(11) NOT NULL,
  `HOSP` text NOT NULL,
  `CITY` varchar(150) NOT NULL,
  `PIN` varchar(150) NOT NULL,
  `DOC` varchar(150) NOT NULL,
  `RDATE` date NOT NULL,
  `CNAME` varchar(150) NOT NULL,
  `CADDRESS` text NOT NULL,
  `EMAIL` varchar(150) NOT NULL,
  `CON1` varchar(150) NOT NULL,
  `CON2` varchar(150) NOT NULL,
  `REASON` text NOT NULL,
  `PIC` varchar(150) NOT NULL,
  `STATUS` int(11) NOT NULL,
  `CDATE` date NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

CREATE TABLE IF NOT EXISTS `state` (
  `STATE_ID` int(11) NOT NULL AUTO_INCREMENT,
  `STATE_NAME` varchar(150) NOT NULL,
  `COUNTRY_ID` int(11) NOT NULL,
  PRIMARY KEY (`STATE_ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=49 ;

--
-- Dumping data for table `state`
--

INSERT INTO `state` (`STATE_ID`, `STATE_NAME`, `COUNTRY_ID`) VALUES
(1, 'Tamilnadu', 1),
(2, 'Kerala', 1),
(3, 'Andra Pradesh', 1),
(4, 'Arunacha Pradesh', 1),
(5, 'Assam', 1),
(6, 'Bihar', 1),
(7, 'Chhattisgarh', 1),
(8, 'Goa', 1),
(9, 'Gujarat', 1),
(10, 'Haryana', 1),
(11, 'Himachal Pradesh', 1),
(12, 'Jammu And Kashmir', 1),
(13, 'Jharkhand', 1),
(14, 'Karnataka', 1),
(15, 'Madya Pradesh', 1),
(16, 'Maharashtra', 1),
(17, 'Manipur', 1),
(18, 'Meghalaya', 1),
(19, 'Mizoram', 1),
(20, 'Nagaland', 1),
(21, 'Orissa', 1),
(22, 'Punjab', 1),
(23, 'Rajasthan', 1),
(24, 'sikkim', 1),
(25, 'Tripura', 1),
(26, 'Uttaranchal', 1),
(27, 'Utter Pradesh', 1),
(28, 'West Bengal', 1),
(29, 'Andaman and Nicobar Islands', 1),
(30, 'Chandigarh ', 1),
(31, 'Daddy and Nagar Haveli', 1),
(32, 'Daman and Diu', 1),
(33, 'Delhi', 1),
(34, 'Lakshadweep', 1),
(35, 'Puducherry', 1),
(36, 'Telangana', 1),
(37, 'Canada', 13),
(38, 'Kwait', 4),
(39, 'Malaysia & Brunei', 12),
(40, 'Mali', 11),
(41, 'Nepal', 10),
(42, 'Oman', 9),
(43, 'Pakistan', 8),
(45, 'Russia', 7),
(46, 'Saudi Arabia', 2),
(47, 'Singapore', 6),
(48, 'Saudi Arabia', 2);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
