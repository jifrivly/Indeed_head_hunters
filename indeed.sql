-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 16, 2018 at 07:07 PM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 7.1.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: 'indeed'
--

-- --------------------------------------------------------

--
-- Table structure for table 'tbl_company'
-- 


CREATE TABLE 'tbl_company' (
  'id' int(10) NOT NULL,
  'Register_No' char(11) NOT NULL,
  'Name' varchar(50) NOT NULL,
  'Description' text,
  'Company_Type' varchar(50) NOT NULL,
  'Address' text NOT NULL,
  'Country' varchar(25) NOT NULL,
  'State' varchar(25) NOT NULL,
  'District' varchar(25) NOT NULL,
  'City' varchar(25) NOT NULL,
  'Pin_Code' int(10) NOT NULL,
  'Email' varchar(50) NOT NULL,
  'M_Number' bigint(15) NOT NULL,
  'Web_Site' varchar(100) NOT NULL,
  'Person_Name' varchar(50) NOT NULL,
  'Person_Email' varchar(50) NOT NULL,
  'Person_Number' bigint(15) NOT NULL,
  'User_Name' varchar(15) NOT NULL,
  'secure' varchar(50) NOT NULL,
  'Register_Date' date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table 'tbl_company'
--

INSERT INTO 'tbl_company' ('id', 'Register_No', 'Name', 'Description', 'Company_Type', 'Address', 'Country', 'State', 'District', 'City', 'Pin_Code', 'Email', 'M_Number', 'Web_Site', 'Person_Name', 'Person_Email', 'Person_Number', 'User_Name', 'secure', 'Register_Date') VALUES
(1, 'COM_100001', 'LULU Mall', "HAPPINESS IS RIGHT\r\nHERE, RIGHT NOW!\r\nPlaces to visit, cuisines to enjoy, movies to watch, and fashion to try – let\'s celebrate the good things in life. Browse through our blog to stumble upon exquisite recipes, trends and much more. Welcome to our happy space!", 'MEDIA AND ENTERTAINMENT', 'LuLu International Shopping Mall Pvt. Ltd.\r\n34/1000, N.H 47, Edapally, Kochi', 'India', 'Kerala', 'Ernakulam', 'Cochin', 682024, 'lulukochi@in.lulumea.com', 2147483647, 'http://lulumall.in/', 'HR Manager', 'hr@in.lulumea.com', 0, 'LULUMALL143', '16500104d4d7cecc1a6e65feb1ee3047', '2018-02-09');

-- --------------------------------------------------------

--
-- Table structure for table 'tbl_interest'
--

CREATE TABLE 'tbl_interest' (
  'Register_no' char(10) NOT NULL,
  'Place' text NOT NULL,
  'Time' varchar(20) NOT NULL,
  'Hobbies' text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table 'tbl_job_seeker'
--

CREATE TABLE 'tbl_job_seeker' (
  'id' int(11) NOT NULL,
  'Register_No' char(11) NOT NULL,
  'Name' varchar(75) NOT NULL,
  'Gender' char(6) NOT NULL,
  'DOB' date NOT NULL,
  'Address' mediumtext NOT NULL,
  'Country' varchar(25) NOT NULL,
  'State' varchar(25) NOT NULL,
  'District' varchar(25) NOT NULL,
  'City' varchar(25) NOT NULL,
  'Pin_Code' int(10) NOT NULL,
  'Email' varchar(50) NOT NULL,
  'M_Number' bigint(15) NOT NULL,
  'secure' varchar(50) NOT NULL,
  'Register_Date' date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table "tbl_job_seeker"
--

INSERT INTO 'tbl_job_seeker' ('id', 'Register_No', 'Name', 'Gender', 'DOB', 'Address', 'Country', 'State', 'District', 'City', 'Pin_Code', 'Email', 'M_Number', 'secure', 'Register_Date') VALUES
(1, 'JS_100001', 'Sayyid MuhammedHasan Jifri', 'Male', '0000-00-00', 'Puthiya Maliyakkal (H)\r\nP.O - Edayur North\r\nNear Exchange', 'India', 'Kerala', 'Malappuram', 'Valanchery', 676552, 'jifrivly@gmail.com', 214748364, '269ae29330f93a813bc5d00a35ebb68c', '2018-02-09'),
(2, 'JS_100002', 'Jabir AliVK', 'Male', '0000-00-00', 'Vallikadan (H)\r\nMajeedum kund,karekad\r\nP.O -  Karekad', 'India', 'Kerala', 'Malappuram', 'Kadampuzha', 676553, 'jabirkrkd@gmail.com', 2147483647, '9afcf49c24f096729b8dba546c3d2d06', '2018-02-09');

-- --------------------------------------------------------

--
-- Table structure for table 'tbl_qualification'
--

CREATE TABLE 'tbl_qualification' (
  'Register_no' char(10) NOT NULL,
  'SSLC_Board' text NOT NULL,
  'SSLC_Mark' float(6,3) NOT NULL,
  'SSLC_Certificate' text NOT NULL,
  'HS_Board' text NOT NULL,
  'HS_Mark' float(6,3) NOT NULL,
  'hs_Certificate' text NOT NULL,
  'Diploma_Subject' text NOT NULL,
  'Diploma_University' text NOT NULL,
  'Diploma_Mark' float(6,3) NOT NULL,
  'Diploma_Certificate' text NOT NULL,
  'UG_Subject' text NOT NULL,
  'UG_University' text NOT NULL,
  'UG_Mark' float(6,3) NOT NULL,
  'UG_Certificate' text NOT NULL,
  'PG_Subject' text NOT NULL,
  'PG_University' text NOT NULL,
  'PG_Mark' float(6,3) NOT NULL,
  'PG_Certificate' text NOT NULL,
  'Mphill_Subject' text NOT NULL,
  'Mphill_University' text NOT NULL,
  'Mphill_Mark' float(6,3) NOT NULL,
  'Mphill_Certificate' text NOT NULL,
  'PHD_Subject' text NOT NULL,
  'PHD_University' text NOT NULL,
  'PHD_Certificate' text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table 'tbl_company'
--
ALTER TABLE 'tbl_company'
  ADD PRIMARY KEY ('Register_No'),
  ADD UNIQUE KEY 'id' ('id'),
  ADD UNIQUE KEY 'Reg_no' ('Register_No');

--
-- Indexes for table 'tbl_interest'
--
ALTER TABLE 'tbl_interest'
  ADD PRIMARY KEY ('Register_no'),
  ADD UNIQUE KEY 'Register_no' ('Register_no');

--
-- Indexes for table 'tbl_job_seeker'
--
ALTER TABLE 'tbl_job_seeker'
  ADD PRIMARY KEY ('Register_No'),
  ADD UNIQUE KEY 'id' ('id'),
  ADD UNIQUE KEY 'Reg_no' ('Register_No'),
  ADD UNIQUE KEY 'M_Number' ('M_Number'),
  ADD UNIQUE KEY 'Email' ('Email');

--
-- Indexes for table 'tbl_qualification'
--
ALTER TABLE 'tbl_qualification'
  ADD PRIMARY KEY ('Register_no'),
  ADD UNIQUE KEY 'Register_no' ('Register_no');

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table 'tbl_company'
--
ALTER TABLE 'tbl_company'
  MODIFY 'id' int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table 'tbl_job_seeker'
--
ALTER TABLE 'tbl_job_seeker'
  MODIFY 'id' int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
