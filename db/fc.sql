-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 16, 2019 at 01:42 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `fc`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `bid` int(11) NOT NULL,
  `lid` int(11) NOT NULL,
  `carid` int(11) NOT NULL,
  `fromdate` varchar(30) NOT NULL,
  `todate` varchar(30) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`bid`, `lid`, `carid`, `fromdate`, `todate`, `status`) VALUES
(71, 32, 56, '05/09/2019', '05/11/2019', 1),
(72, 32, 41, '05/15/2019', '05/16/2019', 1),
(73, 33, 42, '05/08/2019', '05/08/2019', 1),
(74, 33, 60, '05/15/2019', '05/25/2019', 1),
(77, 16, 60, '05/08/2019', '05/09/2019', 1),
(85, 16, 42, '05/17/2019', '05/17/2019', 1),
(100, 32, 60, '06/15/2019', '06/15/2019', 1),
(105, 16, 53, '05/16/2019', '05/16/2019', 1);

-- --------------------------------------------------------

--
-- Table structure for table `cars`
--

CREATE TABLE `cars` (
  `cid` int(11) NOT NULL,
  `lid` int(11) NOT NULL,
  `model` varchar(80) NOT NULL,
  `name` varchar(80) NOT NULL,
  `millege` int(30) NOT NULL,
  `seats` int(30) NOT NULL,
  `aprice` int(10) NOT NULL,
  `rprice` text NOT NULL,
  `fuel` varchar(20) NOT NULL,
  `ac` varchar(30) NOT NULL,
  `music` varchar(11) NOT NULL,
  `steering` varchar(50) NOT NULL,
  `centerlock` varchar(50) NOT NULL,
  `cimage` text NOT NULL,
  `regimage` text NOT NULL,
  `regno` varchar(30) NOT NULL,
  `place` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `cstatus` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cars`
--

INSERT INTO `cars` (`cid`, `lid`, `model`, `name`, `millege`, `seats`, `aprice`, `rprice`, `fuel`, `ac`, `music`, `steering`, `centerlock`, `cimage`, `regimage`, `regno`, `place`, `date`, `cstatus`) VALUES
(39, 1, 'Maruti Suzuki', 'Ciaz', 15, 5, 10000, '4000', 'petrol', 'Yes', 'No', 'Yes', 'Yes', '1556815375maruti suzuki dezire black.jpg', '1556815800rc.jpeg', 'KL 50 2702', '2', '2019-04-10', 2),
(40, 1, 'Honda', 'Civic', 15, 5, 5000, '20005', 'petrol', 'Yes', 'Yes', 'Yes', 'Yes', '1554917845Honda Civic.jpeg', '1556815800rc.jpeg', 'KL 50 7845', '1', '2019-04-10', 0),
(41, 7, 'Jeep', 'Compass', 10, 7, 10000, '3500', 'petrol', 'Yes', 'Yes', 'Yes', '', '1556520463kuv.png', '1556815800rc.jpeg', '', '2', '2019-04-10', 0),
(42, 1, 'Maruti Suzuki', 'Ciaz', 12, 5, 16000, '1500', 'diesel', 'No', 'Yes', 'No', 'Yes', '1556817253maruti suzuki dezire maroon.jpg', '1556815800rc.jpeg', 'kl 50 4578', '1', '2019-04-26', 0),
(43, 7, 'Honda', 'bcd', 10, 5, 1000, '1000', 'petrol', 'Yes', 'Yes', 'Yes', 'Yes', '1557126266maruti suzuki dezire red.jpg', '1556815800rc.jpeg', 'KL 50 2701', '2', '2019-04-26', 0),
(52, 7, 'BMW', 'Sedan', 11, 5, 19000, '5000', 'diesel', 'Yes', 'Yes', 'Yes', 'Yes', '1557134867bmw_sedan.jpg', '1557134867rc.jpeg', 'KL50C1254', '1', '2019-05-06', 0),
(53, 1, 'Maruti Suzuki', 'Wagnor', 12, 5, 10000, '3000', 'petrol', 'Yes', 'Yes', 'Yes', 'Yes', '1557214068maruti suzuki wagnor.jpg', '1557214068rc.jpeg', 'KL10C2714', '2', '2019-05-07', 0),
(56, 1, 'BMW', 'Sedan', 8, 5, 20000, '5000', 'petrol', 'Yes', 'Yes', 'Yes', 'Yes', '1557214375bmw_sedan.jpg', '1557214376rc.jpeg', 'KL50D1456', '2', '2019-05-07', 0),
(57, 7, 'Toyota', 'LandCruiser', 14, 6, 12000, '4500', 'petrol', 'Yes', 'Yes', 'Yes', 'Yes', '1557223603toyota-land-cruiser-015.jpg', '1557223603rc.jpeg', 'KL50B8748', '2', '2019-05-07', 1),
(58, 7, 'Volkswagen', 'Wilcox', 12, 5, 12700, '1500', 'petrol', 'Yes', 'Yes', 'Yes', 'Yes', '1557223711byron-wilcox-e30-318i-title.jpg', '1557223711rc.jpeg', 'KL18F1456', '1', '2019-05-07', 1),
(59, 7, 'Ford', 'Taurus', 16, 5, 14000, '1800', 'diesel', 'Yes', 'Yes', 'Yes', 'Yes', '1557223792ford. Taurus.jpg', '1557223793rc.jpeg', 'KL50C4563', '2', '2019-05-07', 1),
(60, 34, 'Hyundai', 'Sonata', 14, 5, 15000, '4000', 'petrol', 'Yes', 'Yes', 'Yes', 'Yes', '1557227558hyundai sonata.jpg', '1557227558rc.jpeg', 'KL50B2145', '2', '2019-05-07', 0),
(61, 26, 'Ford', 'Aspire', 12, 5, 5000, '1500', 'diesel', 'Yes', 'Yes', 'Yes', 'Yes', '1557937851maruti suzuki dezire maroon.jpg', '1557937851rc.jpeg', 'KL50C2401', '2', '2019-05-15', 0),
(62, 7, 'Jeep', 'Compass', 10, 5, 5000, '1000', 'diesel', 'Yes', 'Yes', 'Yes', 'Yes', '1557938406jeep-compass-3d.jpg', '1557938406rc.jpeg', 'KL50B6325', '1', '2019-05-15', 1),
(63, 8, 'Hyundai', 'Sonata', 14, 5, 8000, '2500', 'diesel', 'Yes', 'Yes', 'Yes', 'Yes', '1557938756hyundai sonatajpg.jpg', '1557938756rc.jpeg', 'KL50V4565', '2', '2019-05-15', 1);

-- --------------------------------------------------------

--
-- Table structure for table `driverreg`
--

CREATE TABLE `driverreg` (
  `drid` int(11) NOT NULL,
  `dname` varchar(50) NOT NULL,
  `demail` varchar(100) NOT NULL,
  `dmobile` varchar(30) NOT NULL,
  `dpassword` varchar(50) NOT NULL,
  `imglicence` text NOT NULL,
  `dgender` varchar(30) NOT NULL,
  `dstatus` int(11) NOT NULL,
  `dplace` varchar(50) NOT NULL,
  `dprofile_img` text,
  `age` int(11) DEFAULT NULL,
  `amount` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `driverreg`
--

INSERT INTO `driverreg` (`drid`, `dname`, `demail`, `dmobile`, `dpassword`, `imglicence`, `dgender`, `dstatus`, `dplace`, `dprofile_img`, `age`, `amount`) VALUES
(11, 'MATHAN', 'mathan@gmail.com', '8714939585', 'Mathan@123', '1557734251picture.jpg', 'male', 3, '', 'index.jpeg', 38, 1000),
(12, 'DIVER', 'driver1@gmail.com', '8714939585', 'Driver@123', '1557734251picture.jpg', 'male', 3, '2', '1557948794d5jA8OZv.jpg', 35, 1200),
(13, 'SHAM', 'sham12@gmail.com', '8714969685', 'Sham@123', '1557734251picture.jpg', 'male', 3, '2', '1557949286picture.jpg', 40, 900),
(14, 'ABC', 'abcd@gmail.com', '8714939585', 'Abc@123', '1557734251picture.jpg', 'male', 3, '', 'index.jpeg', 29, 1100),
(15, 'AJIL', 'ajilsunny@gmail.com', '8714939585', 'Ajil@123', '1557734251picture.jpg', 'male', 3, '', 'index.jpeg', 41, 1000),
(16, 'ALBIN', 'salu@gmail.com', '8714939585', 'Salu@123', '1557734251picture.jpg', 'male', 3, '', 'index.jpeg', 24, 500),
(17, 'NANI', 'nani@gmail.com', '8714939585', 'Nani@123', '1557734251picture.jpg', 'male', 3, '', 'index.jpeg', 26, 900),
(18, 'ANANDHU', 'anandhu@gmail.com', '7485969858', 'Anandhu@123', '1557734251picture.jpg', 'male', 3, '2', '1557948794d5jA8OZv.jpg', 25, 800),
(19, 'ARUN', 'arun@gmail.com', '8714939585', 'Arun@123', '1557734251picture.jpg', 'male', 3, '1', 'index.jpeg', 29, 400),
(20, 'ANANDHU123', 'anandhu1@gmail.com', '8714939585', 'Anandhu@123', '1557734251picture.jpg', 'male', 3, '2', '1557949286picture.jpg', 32, 650),
(21, 'NIKZ', 'nikz@gmail.com', '8754636525', 'Nikz@123', '15579816011557734251picture.jpg', 'male', 3, '1', 'index.jpeg', 45, 800),
(22, 'PLASTI', 'plasti@gmail.com', '8714939585', '26688a86207b300ad6a154372b1a5519', '155800426215579816011557734251picture.jpg', 'male', 3, '1', 'index.jpeg', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `rid` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `type` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `rid`, `email`, `password`, `type`, `status`) VALUES
(1, 0, 'admin', '21232f297a57a5a743894a0e4a801fc3', 1, 1),
(6, 6, 'ansaantony@mca.ajce.in', 'Ansa@123', 2, 1),
(7, 1, 'owner@gmail.com', '4381a72f77cc5e0002808a6e9267a90c', 4, 3),
(8, 2, 'sulu@gmail.com', 'Sulu@123', 4, 1),
(10, 11, 'mathan@gmail.com', 'Mathan@123', 3, 4),
(13, 7, 'abc@gmail.com', 'Abc@123', 2, 1),
(14, 8, 'jithu@gmail.com', 'Jithu@123', 2, 1),
(15, 9, 'sneha1@gmail.com', 'Sneha@123', 2, 1),
(16, 10, 'user@gmail.com', '448ddd517d3abb70045aea6929f02367', 2, 1),
(17, 3, 'owner1@gmail.com', '4381a72f77cc5e0002808a6e9267a90c', 4, 1),
(18, 12, 'driver1@gmail.com', 'Driver@123', 3, 1),
(19, 13, 'sham12@gmail.com', 'Sham@14', 3, 1),
(20, 11, 'albi@gmail.com', 'Albi@123', 2, 1),
(21, 12, 'shamshadt@mca.ajce.in', '244c1fbed6140ad6c5ff640fe5577d24', 2, 1),
(22, 13, 'jkikku@gmail.com', 'Jikku@123', 2, 1),
(23, 14, 'sanjay@mca.ajce.in', '5f1c5342818bf8c161d8ff4e18ff1720', 2, 1),
(24, 14, 'abcd@gmail.com', 'Abc@123', 3, 1),
(25, 15, 'shammu@gmail.com', 'Sham@1996', 2, 1),
(26, 4, 'sa@g.com', 'Sanj@123', 4, 1),
(27, 5, 'hij@gmail.com', 'Hij@123', 4, 1),
(28, 6, 'ajil@gmail.com', 'Ajil@123', 4, 1),
(29, 16, '', '', 2, 1),
(30, 17, 'teenuvtherese@amaljyothi.ac.in', 'Teenu@123', 2, 1),
(31, 7, 'anit@gmail.com', 'Teenu@123', 4, 1),
(32, 18, 'sham@gmail.com', 'Sham@123', 2, 1),
(33, 19, 'jobin@gmail.com', 'Jobin@123', 2, 1),
(34, 8, 'shiyas@gmail.com', 'Shiyas@123', 4, 1),
(35, 20, 'ansu@gmail.com', 'Ansu@123', 2, 1),
(36, 21, 'lino@gmail.com', 'Lino@123', 2, 1),
(37, 15, 'ajilsunny@gmail.com', 'Ajil@123', 3, 1),
(38, 16, 'salu@gmail.com', 'Salu@123', 3, 1),
(39, 17, 'nani@gmail.com', 'Nani@123', 3, 3),
(40, 9, 'Jikkuabc@gmail.com', 'Jikku@123', 4, 3),
(41, 18, 'anandhu@gmail.com', 'Anandhu@123', 3, 1),
(42, 19, 'arun@gmail.com', 'Arun@123', 3, 1),
(43, 22, 'lifna@gmail.com', 'Lifna@123', 2, 1),
(44, 23, 'jikkuu@gmail.com', 'Jikku@123', 2, 1),
(45, 20, 'anandhu1@gmail.com', 'Anandhu@123', 3, 1),
(46, 21, 'nikz@gmail.com', 'Nikz@123', 3, 1),
(47, 24, 'samson@gmail.com', 'f76742fa2a122885c943ad33e83f3905', 2, 1),
(48, 22, 'plasti@gmail.com', '26688a86207b300ad6a154372b1a5519', 3, 3),
(49, 10, 'prodo@gmail.com', '7ea7dabedb0f6ec473ead0ce9dd324c2', 4, 3);

-- --------------------------------------------------------

--
-- Table structure for table `models`
--

CREATE TABLE `models` (
  `mid` int(11) NOT NULL,
  `m_name` varchar(50) NOT NULL,
  `creation_date` date NOT NULL,
  `updation_date` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `models`
--

INSERT INTO `models` (`mid`, `m_name`, `creation_date`, `updation_date`) VALUES
(13, 'Maruti Suzuki', '2019-04-10', NULL),
(14, 'Jeep', '2019-04-10', NULL),
(15, 'Ford', '2019-04-10', NULL),
(16, 'BMW', '2019-04-10', NULL),
(17, 'Hyundai', '2019-04-10', NULL),
(18, 'Toyota', '2019-04-10', NULL),
(19, 'Tata', '2019-04-10', NULL),
(20, 'Volkswagen', '2019-04-10', NULL),
(21, 'Datsun', '2019-04-10', NULL),
(22, 'Fiat', '2019-04-10', NULL),
(23, 'Abc', '2019-05-15', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `ownerreg`
--

CREATE TABLE `ownerreg` (
  `oid` int(11) NOT NULL,
  `oname` varchar(50) NOT NULL,
  `oaddress` varchar(80) NOT NULL,
  `oemail` varchar(30) NOT NULL,
  `omobile` varchar(30) NOT NULL,
  `opassword` varchar(50) NOT NULL,
  `gender` varchar(30) NOT NULL,
  `oadhar` varchar(50) NOT NULL,
  `oplace` varchar(50) NOT NULL,
  `ostatus` varchar(30) NOT NULL,
  `oprofile` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ownerreg`
--

INSERT INTO `ownerreg` (`oid`, `oname`, `oaddress`, `oemail`, `omobile`, `opassword`, `gender`, `oadhar`, `oplace`, `ostatus`, `oprofile`) VALUES
(1, 'OWNER', '', 'owner@gmail.com', '8714858585', 'Owner@123', 'male', '5456454564', '1', '3', 'index.jpeg'),
(2, 'SULU', '', 'sulu@gmail.com', '8714939548', 'Sulu@123', 'male', '51115', '2', '3', ''),
(3, 'OWNER', '', 'owner1@gmail.com', '8714939585', 'Owner@123', 'male', '54564564', '1', '3', '1558001664d5jA8OZv.jpg'),
(4, 'SANJAY', '', 'sa@g.com', '8748599685', 'Sanj@123', 'male', '564543', '2', '3', ''),
(5, 'HIJ', '', 'hij@gmail.com', '8714939585', 'Hij@123', 'male', '2133223', '1', '3', ''),
(6, 'AJIL', '', 'ajil@gmail.com', '8714939585', 'Ajil@123', 'male', '161545456454', '2', '3', ''),
(7, 'TEENU V', '', 'anit@gmail.com', '7894561230', 'Teenu@123', 'female', '161545456454', '1', '3', ''),
(8, 'SHIYAS', '', 'shiyas@gmail.com', '8714939585', 'Shiyas@123', 'male', '161545456454', '1', '3', ''),
(9, 'JIKKU', '', 'Jikkuabc@gmail.com', '8745998585', 'Jikku@123', 'male', '145268745895', '0', '3', ''),
(10, 'PRODO', '', 'prodo@gmail.com', '8714939585', '7ea7dabedb0f6ec473ead0ce9dd324c2', 'male', '161545456454', '1', '3', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `state`
--

CREATE TABLE `state` (
  `id` int(11) NOT NULL,
  `sname` varchar(100) NOT NULL,
  `status` varchar(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `state`
--

INSERT INTO `state` (`id`, `sname`, `status`) VALUES
(1, 'Andhra Pradesh', '1'),
(2, 'Arunachal Pradesh', '1'),
(3, 'Assam', '1'),
(4, 'Bihar', '1'),
(5, 'Chhattisgarh', '1'),
(6, 'Goa', '1'),
(7, 'Gujarat', '1'),
(8, 'Haryana', '1'),
(9, 'Himachal Pradesh', '1'),
(10, 'Jammu and Kashmir', '1'),
(11, 'Jharkhand', '1'),
(12, 'Karnataka', '1'),
(13, 'Kerala', '1'),
(14, 'Madhya Pradesh', '1'),
(15, 'Maharashtra', '1'),
(16, 'Manipur', '1'),
(17, 'Meghalaya', '1'),
(18, 'Mizoram', '1'),
(19, 'Nagaland', '1'),
(20, 'Odisha', '1'),
(21, 'Punjab', '1'),
(22, 'Rajasthan', '1'),
(23, 'Sikkim', '1'),
(24, 'Tamil Nadu', '1'),
(25, 'Telangana', '1');

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `statusid` int(11) NOT NULL,
  `status` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`statusid`, `status`) VALUES
(0, 'unaviailiable'),
(1, 'okay'),
(2, 'approve'),
(3, 'not approve'),
(4, 'block'),
(5, 'unaviailiable');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_bank`
--

CREATE TABLE `tbl_bank` (
  `bid` int(11) NOT NULL,
  `bank_name` varchar(50) NOT NULL,
  `banktype` varchar(10) NOT NULL,
  `account_no` varchar(16) NOT NULL,
  `card_no` varchar(16) NOT NULL,
  `month` varchar(10) NOT NULL,
  `year` int(11) NOT NULL,
  `cvv` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_bank`
--

INSERT INTO `tbl_bank` (`bid`, `bank_name`, `banktype`, `account_no`, `card_no`, `month`, `year`, `cvv`, `name`, `status`) VALUES
(1, 'Federal Bank', 'FDC', '11740100106648', '1234567891234567', 'Nov', 2022, 123, 'AJIL SUNNY', 1),
(2, 'SBI', 'ODC', '9630852074107894', '9630852074107894', 'May', 2023, 789, 'AMAL SUNNY', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_district`
--

CREATE TABLE `tbl_district` (
  `did` int(11) NOT NULL,
  `dname` varchar(50) NOT NULL,
  `sid` int(11) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_district`
--

INSERT INTO `tbl_district` (`did`, `dname`, `sid`, `status`) VALUES
(5, 'Kasaragod', 13, 1),
(4, 'Kannur', 13, 1),
(3, 'Idukki', 13, 1),
(2, 'Ernakulam', 13, 1),
(1, 'Alappuzha', 13, 1),
(6, 'Kollam', 13, 1),
(7, 'Kottayam', 13, 1),
(8, 'Kozhikode', 13, 1),
(9, 'Malappuram', 13, 1),
(10, 'Palakkad', 13, 1),
(11, 'Pathanamthitta', 13, 1),
(12, 'Thiruvananthapuram', 13, 1),
(13, 'Thrissur', 13, 1),
(14, 'Wayanad', 13, 1),
(15, 'Bagalkot', 12, 1),
(16, 'Bangalore', 12, 1),
(17, 'Bangalore Rural', 12, 1),
(18, 'Belgaum', 12, 1),
(19, 'Bellary', 12, 1),
(20, 'Bidar', 12, 1),
(21, 'Bijapur', 12, 1),
(22, 'Chamarajanagar', 12, 1),
(23, 'Chikkaballapura', 12, 1),
(24, 'Chikmagalur', 12, 1),
(25, 'Chitradurga', 12, 1),
(26, 'Dakshina Kannada', 12, 1),
(27, 'Davanagere', 12, 1),
(28, 'Dharwad', 12, 1),
(29, 'Gadag', 12, 1),
(30, 'Gulbarga', 12, 1),
(31, 'Hassan', 12, 1),
(32, 'Haveri', 12, 1),
(33, 'Kodagu', 12, 1),
(34, 'Kolar', 12, 1),
(35, 'Koppal', 12, 1),
(36, 'Mandya', 12, 1),
(37, 'Mysore', 12, 1),
(38, 'Raichur', 12, 1),
(39, 'Ramanagara', 12, 1),
(40, 'Shimoga', 12, 1),
(41, 'Tumkur', 12, 1),
(42, 'Udupi', 12, 1),
(43, 'Uttara Kannada', 12, 1),
(44, 'Yadgir', 12, 1),
(45, 'Anantapur', 1, 1),
(46, 'Chittoor', 1, 1),
(47, 'East Godavari', 1, 1),
(48, 'Guntur', 1, 1),
(49, 'Krishna', 1, 1),
(50, 'Kurnool', 1, 1),
(51, 'Prakasam', 1, 1),
(52, 'Sri Potti Sriramulu Nellore', 1, 1),
(53, 'Srikakulam', 1, 1),
(54, 'Visakhapatnam', 1, 1),
(55, 'Vizianagaram', 1, 1),
(56, 'West Godavari', 1, 1),
(57, 'YSR (Kadapa)', 1, 1),
(58, 'Anjaw', 2, 1),
(59, 'Changlang', 2, 1),
(60, 'Dibang Valley', 2, 1),
(61, 'East Kameng', 2, 1),
(62, 'East Siang', 2, 1),
(63, 'Kurung Kumey', 2, 1),
(64, 'Lohit', 2, 1),
(65, 'Longding', 2, 1),
(66, 'Lower Dibang Valley', 2, 1),
(67, 'Lower Subansiri', 2, 1),
(68, 'Papum Pare', 2, 1),
(69, 'Tawang', 2, 1),
(70, 'Tirap', 2, 1),
(71, 'Upper Siang', 2, 1),
(72, 'Upper Subansiri', 2, 1),
(73, 'West Kameng', 2, 1),
(74, 'West Siang', 2, 1),
(75, 'Baksa', 3, 1),
(76, 'Barpeta', 3, 1),
(77, 'Bongaigaon', 3, 1),
(78, 'Cachar', 3, 1),
(79, 'Chirang', 3, 1),
(80, 'Darrang', 3, 1),
(81, 'Dhemaji', 3, 1),
(82, 'Dhubri', 3, 1),
(83, 'Dibrugarh', 3, 1),
(84, 'Dima Hasao', 3, 1),
(85, 'Goalpara', 3, 1),
(86, 'Golaghat', 3, 1),
(87, 'Hailakandi', 3, 1),
(88, 'Jorhat', 3, 1),
(89, 'Kamrup', 3, 1),
(90, 'Kamrup Metropolitan', 3, 1),
(91, 'Karbi Anglong', 3, 1),
(92, 'Karimganj', 3, 1),
(93, 'Kokrajhar', 3, 1),
(94, 'Lakhimpur', 3, 1),
(95, 'Morigaon', 3, 1),
(96, 'Nagaon', 3, 1),
(97, 'Nalbari', 3, 1),
(98, 'Sivasagar', 3, 1),
(99, 'Sonitpur', 3, 1),
(100, 'Tinsukia', 3, 1),
(101, 'Udalguri', 3, 1),
(102, 'Biswanath', 3, 1),
(103, 'Charaideo', 3, 1),
(104, 'Hojai', 3, 1),
(105, 'Majuli', 3, 1),
(106, 'South Salamara-Mankachar', 3, 1),
(107, 'West Karbi Anglong', 3, 1),
(108, 'Araria', 4, 1),
(109, 'Arwal', 4, 1),
(110, 'Aurangabad', 4, 1),
(111, 'Banka', 4, 1),
(112, 'Begusarai', 4, 1),
(113, 'Bhagalpur', 4, 1),
(114, 'Bhojpur', 4, 1),
(115, 'Buxar', 4, 1),
(116, 'Darbhanga', 4, 1),
(117, 'East Champaran', 4, 1),
(118, 'Gaya', 4, 1),
(119, 'Gopalganj', 4, 1),
(120, 'Jamui', 4, 1),
(121, 'Jehanabad', 4, 1),
(122, 'Kaimur', 4, 1),
(123, 'Katihar', 4, 1),
(124, 'Khagaria', 4, 1),
(125, 'Kishanganj', 4, 1),
(126, 'Lakhisarai', 4, 1),
(127, 'Madhepura', 4, 1),
(128, 'Madhubani', 4, 1),
(129, 'Munger', 4, 1),
(130, 'Muzaffarpur', 4, 1),
(131, 'Nalanda', 4, 1),
(132, 'Nawada', 4, 1),
(133, 'Patna', 4, 1),
(134, 'Purnia', 4, 1),
(135, 'Rohtas', 4, 1),
(136, 'Saharsa', 4, 1),
(137, 'Samastipur', 4, 1),
(138, 'Saran', 4, 1),
(139, 'Sheikhpura', 4, 1),
(140, 'Sheohar', 4, 1),
(141, 'Sitamarhi', 4, 1),
(142, 'Siwan', 4, 1),
(143, 'Supaul', 4, 1),
(144, 'Vaishali', 4, 1),
(145, 'West Champaran', 4, 1),
(146, 'Balod', 5, 1),
(147, 'Baloda Bazar', 5, 1),
(148, 'Balrampur', 5, 1),
(149, 'Bastar', 5, 1),
(150, 'Bemetara', 5, 1),
(151, 'Bijapur', 5, 1),
(152, 'Bilaspur', 5, 1),
(153, 'Dantewada', 5, 1),
(154, 'Dhamtari', 5, 1),
(155, 'Durg', 5, 1),
(156, 'Gariaband', 5, 1),
(157, 'Janjgir Champa', 5, 1),
(158, 'Jashpur', 5, 1),
(159, 'Kabirdham', 5, 1),
(160, 'Kanker', 5, 1),
(161, 'Kondagaon', 5, 1),
(162, 'Korba', 5, 1),
(163, 'Koriya', 5, 1),
(164, 'Mahasamund', 5, 1),
(165, 'Mungeli', 5, 1),
(166, 'Narayanpur', 5, 1),
(167, 'Raigarh', 5, 1),
(168, 'Raipur', 5, 1),
(169, 'Rajnandgaon', 5, 1),
(170, 'Sukma', 5, 1),
(171, 'Surajpur', 5, 1),
(172, 'Surguja', 5, 1),
(173, 'North Goa', 6, 1),
(174, 'South Goa', 6, 1),
(175, 'Ahmedabad', 7, 1),
(176, 'Amreli', 7, 1),
(177, 'Anand', 7, 1),
(178, 'Aravalli', 7, 1),
(179, 'Banaskantha', 7, 1),
(180, 'Botad', 7, 1),
(181, 'Bharuch', 7, 1),
(182, 'Bhavnagar', 7, 1),
(183, 'Chhota Udaipur', 7, 1),
(184, 'Dahod', 7, 1),
(185, 'Devbhoomi Dwarka', 7, 1),
(186, 'Gandhinagar', 7, 1),
(187, 'Gir Somnath', 7, 1),
(188, 'Jamnagar', 7, 1),
(189, 'Junagadh', 7, 1),
(190, 'Kheda', 7, 1),
(191, 'Kutch', 7, 1),
(192, 'Mahisagar', 7, 1),
(193, 'Mahesana', 7, 1),
(194, 'Morbi', 7, 1),
(195, 'Narmada', 7, 1),
(196, 'Navsari', 7, 1),
(197, 'Panchmahal', 7, 1),
(198, 'Patan', 7, 1),
(199, 'Porbandar', 7, 1),
(200, 'Rajkot', 7, 1),
(201, 'Sabarkantha', 7, 1),
(202, 'Surat', 7, 1),
(203, 'Surendranagar', 7, 1),
(204, 'Tapi', 7, 1),
(205, 'The Dangs', 7, 1),
(206, 'Vadodara', 7, 1),
(207, 'Valsad', 7, 1),
(208, 'Ambala', 8, 1),
(209, 'Bhiwani', 8, 1),
(210, 'Faridabad', 8, 1),
(211, 'Fatehabad', 8, 1),
(212, 'Gurgaon', 8, 1),
(213, 'Hisar', 8, 1),
(214, 'Jhajjar', 8, 1),
(215, 'Jind', 8, 1),
(216, 'Kaithal', 8, 1),
(217, 'Karnal', 8, 1),
(218, 'Kurukshetra', 8, 1),
(219, 'Mahendragarh', 8, 1),
(220, 'Mewat', 8, 1),
(221, 'Palwal', 8, 1),
(222, 'Panchkula', 8, 1),
(223, 'Panipat', 8, 1),
(224, 'Rewari', 8, 1),
(225, 'Rohtak', 8, 1),
(226, 'Sirsa', 8, 1),
(227, 'Sonipat', 8, 1),
(228, 'Yamunanagar', 8, 1),
(229, 'Charkhi Dadri', 8, 1),
(230, 'Bilaspur', 9, 1),
(231, 'Chamba', 9, 1),
(232, 'Hamirpur', 9, 1),
(233, 'Kangra', 9, 1),
(234, 'Kinnaur', 9, 1),
(235, 'Kullu', 9, 1),
(236, 'Lahaul and Spiti', 9, 1),
(237, 'Mandi', 9, 1),
(238, 'Shimla', 9, 1),
(239, 'Sirmaur', 9, 1),
(240, 'Solan', 9, 1),
(241, 'Una', 9, 1),
(242, 'Anantnag', 10, 1),
(243, 'Badgam', 10, 1),
(244, 'Bandipora', 10, 1),
(245, 'Baramulla', 10, 1),
(246, 'Doda', 10, 1),
(247, 'Ganderbal', 10, 1),
(248, 'Jammu', 10, 1),
(249, 'Kargil', 10, 1),
(250, 'Kathua', 10, 1),
(251, 'Kishtwar', 10, 1),
(252, 'Kulgam', 10, 1),
(253, 'Kupwara', 10, 1),
(254, 'Leh', 10, 1),
(255, 'Poonch', 10, 1),
(256, 'Pulwama', 10, 1),
(257, 'Rajouri', 10, 1),
(258, 'Ramban', 10, 1),
(259, 'Reasi', 10, 1),
(260, 'Samba', 10, 1),
(261, 'Shopian', 10, 1),
(262, 'Srinagar', 10, 1),
(263, 'Udhampur', 10, 1),
(264, 'Bokaro', 11, 1),
(265, 'Chatra', 11, 1),
(266, 'Deoghar', 11, 1),
(267, 'Dhanbad', 11, 1),
(268, 'Dumka', 11, 1),
(269, 'East Singhbhum', 11, 1),
(270, 'Garhwa', 11, 1),
(271, 'Giridih', 11, 1),
(272, 'Godda', 11, 1),
(273, 'Gumla', 11, 1),
(274, 'Hazaribagh', 11, 1),
(275, 'Jamtara', 11, 1),
(276, 'Khunti', 11, 1),
(277, 'Koderma', 11, 1),
(278, 'Latehar', 11, 1),
(279, 'Lohardaga', 11, 1),
(280, 'Pakur', 11, 1),
(281, 'Palamu', 11, 1),
(282, 'Ramgarh', 11, 1),
(283, 'Ranchi', 11, 1),
(284, 'Sahibganj', 11, 1),
(285, 'Saraikela Kharsawan', 11, 1),
(286, 'Simdega', 11, 1),
(287, 'West Singhbhum', 11, 1),
(288, 'Agar Malwa', 14, 1),
(289, 'Alirajpur', 14, 1),
(290, 'Anuppur', 14, 1),
(291, 'Ashoknagar', 14, 1),
(292, 'Balaghat', 14, 1),
(293, 'Barwani', 14, 1),
(294, 'Betul', 14, 1),
(295, 'Bhind', 14, 1),
(296, 'Bhopal', 14, 1),
(297, 'Burhanpur', 14, 1),
(298, 'Chhatarpur', 14, 1),
(299, 'Chhindwara', 14, 1),
(300, 'Damoh', 14, 1),
(301, 'Datia', 14, 1),
(302, 'Dewas', 14, 1),
(303, 'Dhar', 14, 1),
(304, 'Dindori', 14, 1),
(305, 'East Nimar', 14, 1),
(306, 'Guna', 14, 1),
(307, 'Gwalior', 14, 1),
(308, 'Harda', 14, 1),
(309, 'Hoshangabad', 14, 1),
(310, 'Indore', 14, 1),
(311, 'Jabalpur', 14, 1),
(312, 'Jhabua', 14, 1),
(313, 'Katni', 14, 1),
(314, 'Mandla', 14, 1),
(315, 'Mandsaur', 14, 1),
(316, 'Morena', 14, 1),
(317, 'Narsinghpur', 14, 1),
(318, 'Neemuch', 14, 1),
(319, 'Panna', 14, 1),
(320, 'Raisen', 14, 1),
(321, 'Rajgarh', 14, 1),
(322, 'Ratlam', 14, 1),
(323, 'Rewa', 14, 1),
(324, 'Sagar', 14, 1),
(325, 'Satna', 14, 1),
(326, 'Sehore', 14, 1),
(327, 'Seoni', 14, 1),
(328, 'Shahdol', 14, 1),
(329, 'Shajapur', 14, 1),
(330, 'Sheopur', 14, 1),
(331, 'Shivpuri', 14, 1),
(332, 'Sidhi', 14, 1),
(333, 'Singrauli', 14, 1),
(334, 'Tikamgarh', 14, 1),
(335, 'Ujjain', 14, 1),
(336, 'Umaria', 14, 1),
(337, 'Vidisha', 14, 1),
(338, 'West Nimar', 14, 1),
(339, 'Ahmednagar', 15, 1),
(340, 'Akola', 15, 1),
(341, 'Amravati', 15, 1),
(342, 'Aurangabad', 15, 1),
(343, 'Beed', 15, 1),
(344, 'Bhandara', 15, 1),
(345, 'Buldhana', 15, 1),
(346, 'Chandrapur', 15, 1),
(347, 'Dhule', 15, 1),
(348, 'Gadchiroli', 15, 1),
(349, 'Gondia', 15, 1),
(350, 'Hingoli', 15, 1),
(351, 'Jalgaon', 15, 1),
(352, 'Jalna', 15, 1),
(353, 'Kolhapur', 15, 1),
(354, 'Latur', 15, 1),
(355, 'Mumbai City', 15, 1),
(356, 'Mumbai Suburban', 15, 1),
(357, 'Nagpur', 15, 1),
(358, 'Nanded', 15, 1),
(359, 'Nandurbar', 15, 1),
(360, 'Nashik', 15, 1),
(361, 'Osmanabad', 15, 1),
(362, 'Parbhani', 15, 1),
(363, 'Pune', 15, 1),
(364, 'Raigad', 15, 1),
(365, 'Ratnagiri', 15, 1),
(366, 'Sangli', 15, 1),
(367, 'Satara', 15, 1),
(368, 'Sindhudurg', 15, 1),
(369, 'Solapur', 15, 1),
(370, 'Thane', 15, 1),
(371, 'Wardha', 15, 1),
(372, 'Washim', 15, 1),
(373, 'Yavatmal', 15, 1),
(374, 'Palghar', 15, 1),
(375, 'Bishnupur', 16, 1),
(376, 'Chandel', 16, 1),
(377, 'Churachandpur', 16, 1),
(378, 'Imphal East', 16, 1),
(379, 'Imphal West', 16, 1),
(380, 'Senapati', 16, 1),
(381, 'Tamenglong', 16, 1),
(382, 'Thoubal', 16, 1),
(383, 'Ukhrul', 16, 1),
(384, 'Jiribam', 16, 1),
(385, 'Kangpokpi', 16, 1),
(386, 'Kakching district', 16, 1),
(387, 'Tengnoupal', 16, 1),
(388, 'Kamjong', 16, 1),
(389, 'Noney', 16, 1),
(390, 'Pherzawl', 16, 1),
(391, 'East Garo Hills', 17, 1),
(392, 'West Garo Hills', 17, 1),
(393, 'North Garo Hills', 17, 1),
(394, 'South Garo Hills', 17, 1),
(395, 'South West Garo Hills', 17, 1),
(396, 'East Jaintia Hills', 17, 1),
(397, 'West Jaintia Hills', 17, 1),
(398, 'East Khasi Hills', 17, 1),
(399, 'South West Khasi Hills', 17, 1),
(400, 'West Khasi Hills', 17, 1),
(401, 'Ri-Bhoi', 17, 1),
(402, 'Aizawl', 18, 1),
(403, 'Champhai', 18, 1),
(404, 'Kolasib', 18, 1),
(405, 'Lawngtlai', 18, 1),
(406, 'Lunglei', 18, 1),
(407, 'Mamit', 18, 1),
(408, 'Saiha', 18, 1),
(409, 'Serchhip', 18, 1),
(410, 'Dimapur', 19, 1),
(411, 'Kiphire', 19, 1),
(412, 'Kohima', 19, 1),
(413, 'Longleng', 19, 1),
(414, 'Mokokchung', 19, 1),
(415, 'Mon', 19, 1),
(416, 'Peren', 19, 1),
(417, 'Phek', 19, 1),
(418, 'Tuensang', 19, 1),
(419, 'Wokha', 19, 1),
(420, 'Zunheboto', 19, 1),
(421, 'Angul', 20, 1),
(422, 'Balangir', 20, 1),
(423, 'Baleshwar', 20, 1),
(424, 'Bargarh', 20, 1),
(425, 'Bhadrak', 20, 1),
(426, 'Boudh', 20, 1),
(427, 'Cuttack', 20, 1),
(428, 'Debagarh', 20, 1),
(429, 'Dhenkanal', 20, 1),
(430, 'Gajapati', 20, 1),
(431, 'Ganjam', 20, 1),
(432, 'Jagatsinghpur', 20, 1),
(433, 'Jajpur', 20, 1),
(434, 'Jharsuguda', 20, 1),
(435, 'Kalahandi', 20, 1),
(436, 'Kandhamal', 20, 1),
(437, 'Kendrapara', 20, 1),
(438, 'Kendujhar', 20, 1),
(439, 'Khordha', 20, 1),
(440, 'Koraput', 20, 1),
(441, 'Malkangiri', 20, 1),
(442, 'Mayurbhanj', 20, 1),
(443, 'Nabarangapur', 20, 1),
(444, 'Nayagarh', 20, 1),
(445, 'Nuapada', 20, 1),
(446, 'Puri', 20, 1),
(447, 'Rayagada', 20, 1),
(448, 'Sambalpur', 20, 1),
(449, 'Subarnapur', 20, 1),
(450, 'Sundergarh', 20, 1),
(451, 'Amritsar', 21, 1),
(452, 'Barnala', 21, 1),
(453, 'Bathinda', 21, 1),
(454, 'Fazilka', 21, 1),
(455, 'Faridkot', 21, 1),
(456, 'Fatehgarh Sahib', 21, 1),
(457, 'Firozpur', 21, 1),
(458, 'Gurdaspur', 21, 1),
(459, 'Hoshiarpur', 21, 1),
(460, 'Jalandhar', 21, 1),
(461, 'Kapurthala', 21, 1),
(462, 'Ludhiana', 21, 1),
(463, 'Mansa', 21, 1),
(464, 'Moga', 21, 1),
(465, 'Mohali', 21, 1),
(466, 'Muktsar', 21, 1),
(467, 'Pathankot', 21, 1),
(468, 'Patiala', 21, 1),
(469, 'Rupnagar', 21, 1),
(470, 'Sangrur', 21, 1),
(471, 'Shahid Bhagat Singh Nagar', 21, 1),
(472, 'Tarn Taran', 21, 1),
(473, 'Ajmer', 22, 1),
(474, 'Alwar', 22, 1),
(475, 'Banswara', 22, 1),
(476, 'Baran', 22, 1),
(477, 'Barmer', 22, 1),
(478, 'Bharatpur', 22, 1),
(479, 'Bhilwara', 22, 1),
(480, 'Bikaner', 22, 1),
(481, 'Bundi', 22, 1),
(482, 'Chittaurgarh', 22, 1),
(483, 'Churu', 22, 1),
(484, 'Dausa', 22, 1),
(485, 'Dhaulpur', 22, 1),
(486, 'Dungarpur', 22, 1),
(487, 'Ganganagar', 22, 1),
(488, 'Hanumangarh', 22, 1),
(489, 'Jaipur', 22, 1),
(490, 'Jaisalmer', 22, 1),
(491, 'Jalor', 22, 1),
(492, 'Jhalawar', 22, 1),
(493, 'Jhunjhunun', 22, 1),
(494, 'Jodhpur', 22, 1),
(495, 'Karauli', 22, 1),
(496, 'Kota', 22, 1),
(497, 'Nagaur', 22, 1),
(498, 'Pali', 22, 1),
(499, 'Pratapgarh', 22, 1),
(500, 'Rajsamand', 22, 1),
(501, 'Sawai Madhopur', 22, 1),
(502, 'Sikar', 22, 1),
(503, 'Sirohi', 22, 1),
(504, 'Tonk', 22, 1),
(505, 'Udaipur', 22, 1),
(506, 'East Sikkim', 23, 1),
(507, 'North Sikkim', 23, 1),
(508, 'South Sikkim', 23, 1),
(509, 'West Sikkim', 23, 1),
(510, 'Ariyalur', 24, 1),
(511, 'Chennai', 24, 1),
(512, 'Coimbatore', 24, 1),
(513, 'Cuddalore', 24, 1),
(514, 'Dharmapuri', 24, 1),
(515, 'Dindigul', 24, 1),
(516, 'Erode', 24, 1),
(517, 'Kanchipuram', 24, 1),
(518, 'Kanyakumari', 24, 1),
(519, 'Karur', 24, 1),
(520, 'Krishnagiri', 24, 1),
(521, 'Madurai', 24, 1),
(522, 'Nagapattinam', 24, 1),
(523, 'Namakkal', 24, 1),
(524, 'Perambalur', 24, 1),
(525, 'Pudukkottai', 24, 1),
(526, 'Ramanathapuram', 24, 1),
(527, 'Salem', 24, 1),
(528, 'Sivaganga', 24, 1),
(529, 'Thanjavur', 24, 1),
(530, 'The Nilgiris', 24, 1),
(531, 'Theni', 24, 1),
(532, 'Thiruvallur', 24, 1),
(533, 'Thiruvarur', 24, 1),
(534, 'Thoothukudi', 24, 1),
(535, 'Tiruchirappalli', 24, 1),
(536, 'Tirunelveli', 24, 1),
(537, 'Tirupur', 24, 1),
(538, 'Tiruvannamalai', 24, 1),
(539, 'Vellore', 24, 1),
(540, 'Viluppuram', 24, 1),
(541, 'Virudhunagar', 24, 1),
(542, 'Dhalai', 26, 1),
(543, 'Gomati', 26, 1),
(544, 'Khowai', 26, 1),
(545, 'North Tripura', 26, 1),
(546, 'Sepahijala', 26, 1),
(547, 'South Tripura', 26, 1),
(548, 'Unakoti', 26, 1),
(549, 'West Tripura', 26, 1),
(550, 'Agra', 27, 1),
(551, 'Aligarh', 27, 1),
(552, 'Allahabad', 27, 1),
(553, 'Ambedkar Nagar', 27, 1),
(554, 'Amethi', 27, 1),
(555, 'Amroha', 27, 1),
(556, 'Auraiya', 27, 1),
(557, 'Azamgarh', 27, 1),
(558, 'Baghpat', 27, 1),
(559, 'Bahraich', 27, 1),
(560, 'Ballia', 27, 1),
(561, 'Balrampur', 27, 1),
(562, 'Banda', 27, 1),
(563, 'Barabanki', 27, 1),
(564, 'Bareilly', 27, 1),
(565, 'Basti', 27, 1),
(566, 'Bijnor', 27, 1),
(567, 'Budaun', 27, 1),
(568, 'Bulandshahr', 27, 1),
(569, 'Chandauli', 27, 1),
(570, 'Chitrakoot', 27, 1),
(571, 'Deoria', 27, 1),
(572, 'Etah', 27, 1),
(573, 'Etawah', 27, 1),
(574, 'Faizabad', 27, 1),
(575, 'Farrukhabad', 27, 1),
(576, 'Fatehpur', 27, 1),
(577, 'Firozabad', 27, 1),
(578, 'Gautam Buddha Nagar', 27, 1),
(579, 'Ghaziabad', 27, 1),
(580, 'Ghazipur', 27, 1),
(581, 'Gonda', 27, 1),
(582, 'Gorakhpur', 27, 1),
(583, 'Hamirpur', 27, 1),
(584, 'Hardoi', 27, 1),
(585, 'Hathras (Mahamaya Nagar)', 27, 1),
(586, 'Jalaun', 27, 1),
(587, 'Jaunpur', 27, 1),
(588, 'Jhansi', 27, 1),
(589, 'Jyotiba Phule Nagar', 27, 1),
(590, 'Kannauj', 27, 1),
(591, 'Kanpur Dehat (Ramabai Nagar)', 27, 1),
(592, 'Kanpur Nagar', 27, 1),
(593, 'Kanshiram Nagar', 27, 1),
(594, 'Kaushambi', 27, 1),
(595, 'Kheri', 27, 1),
(596, 'Kushinagar', 27, 1),
(597, 'Lalitpur', 27, 1),
(598, 'Lucknow', 27, 1),
(599, 'Maharajganj', 27, 1),
(600, 'Mahoba', 27, 1),
(601, 'Mainpuri', 27, 1),
(602, 'Mathura', 27, 1),
(603, 'Mau', 27, 1),
(604, 'Meerut', 27, 1),
(605, 'Mirzapur', 27, 1),
(606, 'Moradabad', 27, 1),
(607, 'Muzaffarnagar', 27, 1),
(608, 'Panchsheel Nagar district (Hapur)', 27, 1),
(609, 'Pilibhit', 27, 1),
(610, 'Pratapgarh', 27, 1),
(611, 'Raebareli', 27, 1),
(612, 'Rampur', 27, 1),
(613, 'Saharanpur', 27, 1),
(614, 'Sant Kabir Nagar', 27, 1),
(615, 'Sant Ravidas Nagar', 27, 1),
(616, 'Shahjahanpur', 27, 1),
(617, 'Shamli', 27, 1),
(618, 'Shravasti', 27, 1),
(619, 'Siddharthnagar', 27, 1),
(620, 'Sitapur', 27, 1),
(621, 'Sonbhadra', 27, 1),
(622, 'Sultanpur', 27, 1),
(623, 'Unnao', 27, 1),
(624, 'Varanasi', 27, 1),
(625, 'Almora', 28, 1),
(626, 'Bageshwar', 28, 1),
(627, 'Chamoli', 28, 1),
(628, 'Champawat', 28, 1),
(629, 'Dehradun', 28, 1),
(630, 'Haridwar', 28, 1),
(631, 'Nainital', 28, 1),
(632, 'Pauri Garhwal', 28, 1),
(633, 'Pithoragarh', 28, 1),
(634, 'Rudraprayag', 28, 1),
(635, 'Tehri Garhwal', 28, 1),
(636, 'Udham Singh Nagar', 28, 1),
(637, 'Uttarkashi', 28, 1),
(638, 'Bankura', 29, 1),
(639, 'Bardhaman', 29, 1),
(640, 'Birbhum', 29, 1),
(641, 'Cooch Behar', 29, 1),
(642, 'Dakshin Dinajpur', 29, 1),
(643, 'Darjeeling', 29, 1),
(644, 'Hooghly', 29, 1),
(645, 'Howrah', 29, 1),
(646, 'Jalpaiguri', 29, 1),
(647, 'Kolkata', 29, 1),
(648, 'Malda', 29, 1),
(649, 'Murshidabad', 29, 1),
(650, 'Nadia', 29, 1),
(651, 'North 24 Parganas', 29, 1),
(652, 'Paschim Medinipur', 29, 1),
(653, 'Purba Medinipur', 29, 1),
(654, 'Purulia', 29, 1),
(655, 'South 24 Parganas', 29, 1),
(656, 'Uttar Dinajpur', 29, 1),
(657, 'Alipurduar', 29, 1),
(658, 'Burdwan', 29, 1),
(659, 'Jhargram', 29, 1),
(660, 'Kalimpong', 29, 1),
(661, 'West Burdwan', 29, 1),
(662, 'Adilabad', 25, 1),
(663, 'Bhadradri Kothagudem', 25, 1),
(664, 'Hyderabad', 25, 1),
(665, 'Jagtial', 25, 1),
(666, 'Jangaon', 25, 1),
(667, 'Jayashankar Bhupalpally', 25, 1),
(668, 'Jogulamba Gadwal', 25, 1),
(669, 'Kamareddy', 25, 1),
(670, 'Karimnagar', 25, 1),
(671, 'Khammam', 25, 1),
(672, 'Kumuram Bheem', 25, 1),
(673, 'Mahabubabad', 25, 1),
(674, 'Mahabubnagar', 25, 1),
(675, 'Mancherial', 25, 1),
(676, 'Medak', 25, 1),
(677, 'Medchal', 25, 1),
(678, 'Mulugu', 25, 1),
(679, 'Nagarkurnool', 25, 1),
(680, 'Nalgonda', 25, 1),
(681, 'Narayanpet', 25, 1),
(682, 'Nirmal', 25, 1),
(683, 'Nizamabad', 25, 1),
(684, 'Peddapalli', 25, 1),
(685, 'Rajanna Sircilla', 25, 1),
(686, 'Rangareddy', 25, 1),
(687, 'Sangareddy', 25, 1),
(688, 'Siddipet', 25, 1),
(689, 'Suryapet', 25, 1),
(690, 'Vikarabad', 25, 1),
(691, 'Wanaparthy', 25, 1),
(692, 'Warangal (Rural)', 25, 1),
(693, 'Warangal (Urban)', 25, 1),
(694, 'Yadadri Bhuvanagiri', 25, 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_otp`
--

CREATE TABLE `tbl_otp` (
  `oid` int(11) NOT NULL,
  `email` varchar(100) NOT NULL,
  `otp` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_otp`
--

INSERT INTO `tbl_otp` (`oid`, `email`, `otp`) VALUES
(47, 'sanjay@mca.ajce.in', 545921),
(51, 'user@gmail.com', 964816),
(60, 'shamshad2t@gmail.com', 587721),
(61, 'teenuvtherese@amaljyothi.ac.in', 541289),
(64, 'sachinjose@mca.ajce.in', 586551),
(68, 'shamshadt@mca.ajce.in', 467805);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_place`
--

CREATE TABLE `tbl_place` (
  `pid` int(11) NOT NULL,
  `did` int(11) NOT NULL,
  `pname` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_place`
--

INSERT INTO `tbl_place` (`pid`, `did`, `pname`) VALUES
(1, 7, 'Kanjirapally'),
(2, 10, 'Mannarkkad');

-- --------------------------------------------------------

--
-- Table structure for table `type`
--

CREATE TABLE `type` (
  `typeid` int(11) NOT NULL,
  `type` varchar(50) NOT NULL,
  `status` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `type`
--

INSERT INTO `type` (`typeid`, `type`, `status`) VALUES
(1, 'admin', 1),
(2, 'user', 1),
(3, 'driver', 1),
(4, 'carowner', 1);

-- --------------------------------------------------------

--
-- Table structure for table `userreg`
--

CREATE TABLE `userreg` (
  `uid` int(11) NOT NULL,
  `fname` text NOT NULL,
  `phone` varchar(12) NOT NULL,
  `adhar` varchar(50) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `place` varchar(50) NOT NULL,
  `prof_img` text,
  `did` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `userreg`
--

INSERT INTO `userreg` (`uid`, `fname`, `phone`, `adhar`, `gender`, `place`, `prof_img`, `did`) VALUES
(6, 'ANSA', '8714939585', '161545456454', 'female', '', '', 0),
(7, 'ABC', '8714939585', '161545456454', 'male', '', '', 0),
(8, 'JITHU', '8714939585', '161545456454', 'male', '', '', 0),
(9, 'SNEHA', '8714939585', '161545456454', 'male', '', '', 0),
(10, 'USER', '9447622541', '161545456454', 'male', 'Kanjirapally', '1557722284user-4.jpg', 0),
(11, 'ALBI', '8714939585', '161545456454', 'male', '', '', 0),
(12, 'sachin', '8714939585', '161545456454', 'male', '', '', 0),
(13, 'JIKKU', '8714939585', '161545456454', 'male', 'mkd', '', 10),
(14, 'SANJAY', '', '', 'male', '', '', 10),
(15, 'SHAMSHAD', '8714939585', '145687458961', 'male', 'abc', '', 11),
(16, '35215KLJJK', '', '', 'male', '', '', 0),
(17, 'TEENU V ', '7894561230', '161545456454', 'female', 'kply', '', 7),
(18, 'SHAM', '8745698575', '564645464546', 'male', 'Alanallur', '1557949114picture.jpg', 10),
(19, 'JOBIN', '8714939585', '161545456454', 'male', 'Koovapally', '', 10),
(20, 'ANSUss12', '8714939585', '161545456454', 'male', 'Moozhoor', '1557308146d5jA8OZv.jpg', 7),
(21, 'LINO mown', '8714939585', '15165565656456', 'male', 'Manarkkad', '1557301068Steven_Hallam-slide.jpg', 10),
(22, 'LIFNA', '8714939585', '161545456454', 'male', 'mannarkkad', '1557738804d5jA8OZv.jpg', 10),
(23, 'JIKKU', '8714939585', '161545456454', 'male', 'mannarkkad', 'index.jpeg', 10),
(24, 'SAMSON', '8714939585', '161545456454', 'male', 'mannarkkad', 'index.jpeg', 10);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`bid`);

--
-- Indexes for table `cars`
--
ALTER TABLE `cars`
  ADD PRIMARY KEY (`cid`);

--
-- Indexes for table `driverreg`
--
ALTER TABLE `driverreg`
  ADD PRIMARY KEY (`drid`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `models`
--
ALTER TABLE `models`
  ADD PRIMARY KEY (`mid`);

--
-- Indexes for table `ownerreg`
--
ALTER TABLE `ownerreg`
  ADD PRIMARY KEY (`oid`);

--
-- Indexes for table `state`
--
ALTER TABLE `state`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`statusid`);

--
-- Indexes for table `tbl_bank`
--
ALTER TABLE `tbl_bank`
  ADD PRIMARY KEY (`bid`);

--
-- Indexes for table `tbl_district`
--
ALTER TABLE `tbl_district`
  ADD PRIMARY KEY (`did`);

--
-- Indexes for table `tbl_otp`
--
ALTER TABLE `tbl_otp`
  ADD PRIMARY KEY (`oid`),
  ADD KEY `email` (`email`);

--
-- Indexes for table `tbl_place`
--
ALTER TABLE `tbl_place`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `type`
--
ALTER TABLE `type`
  ADD PRIMARY KEY (`typeid`);

--
-- Indexes for table `userreg`
--
ALTER TABLE `userreg`
  ADD PRIMARY KEY (`uid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `bid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=106;

--
-- AUTO_INCREMENT for table `cars`
--
ALTER TABLE `cars`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=64;

--
-- AUTO_INCREMENT for table `driverreg`
--
ALTER TABLE `driverreg`
  MODIFY `drid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=50;

--
-- AUTO_INCREMENT for table `models`
--
ALTER TABLE `models`
  MODIFY `mid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `ownerreg`
--
ALTER TABLE `ownerreg`
  MODIFY `oid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `state`
--
ALTER TABLE `state`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `statusid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_bank`
--
ALTER TABLE `tbl_bank`
  MODIFY `bid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_district`
--
ALTER TABLE `tbl_district`
  MODIFY `did` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=695;

--
-- AUTO_INCREMENT for table `tbl_otp`
--
ALTER TABLE `tbl_otp`
  MODIFY `oid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT for table `tbl_place`
--
ALTER TABLE `tbl_place`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `type`
--
ALTER TABLE `type`
  MODIFY `typeid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `userreg`
--
ALTER TABLE `userreg`
  MODIFY `uid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
