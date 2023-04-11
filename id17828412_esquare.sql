-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 13, 2022 at 02:06 PM
-- Server version: 10.5.12-MariaDB
-- PHP Version: 7.3.32

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `id17828412_esquare`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `ID` int(11) NOT NULL,
  `Names` varchar(255) NOT NULL,
  `Uname` varchar(255) NOT NULL,
  `Pwd` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ID`, `Names`, `Uname`, `Pwd`) VALUES
(1, 'System administrator', 'museveni', 'museveni');

-- --------------------------------------------------------

--
-- Table structure for table `applicants`
--

CREATE TABLE `applicants` (
  `ApplicantID` int(11) NOT NULL,
  `userID` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `dob` varchar(10) NOT NULL,
  `education` varchar(50) NOT NULL,
  `school` varchar(50) NOT NULL,
  `acyear` varchar(10) NOT NULL,
  `rec` varchar(50) NOT NULL,
  `province` varchar(50) NOT NULL,
  `district` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `applicants`
--

INSERT INTO `applicants` (`ApplicantID`, `userID`, `fname`, `lname`, `phone`, `gender`, `dob`, `education`, `school`, `acyear`, `rec`, `province`, `district`) VALUES
(5, 2, 'UWIMANA', 'Jeanne', '+250786441086', 'Male', '1998', 'University', 'RP-IPRC-HUYE', '', 'escravage.jpg', 'kigali', 'Kicukiro'),
(6, 4, 'MUREKATETE', 'Judith', '+250786441086', 'Female', '1990', 'University', 'AUCA', '', 'vlcsnap-2017-09-28-12h18m10s215.png', 'kigali', 'Kicukiro'),
(7, 4, 'MUREKATETE', 'Judith', '+250786441086', 'Female', '1990', 'University', 'RP-IPRC-HUYE', '', 'vlcsnap-2017-08-29-01h53m02s234.png', 'kigali', 'Kicukiro'),
(8, 4, 'MUREKATETE', 'Judith', '+250786441086', 'Female', '2003', 'Secondary', 'EAV ', '', 'vlcsnap-2017-08-29-01h53m02s234.png', 'kigali', 'Kicukiro'),
(9, 5, 'BUGINGO', 'Eric', '+250787303500', 'Male', '2004', 'Secondary', 'EAV ', '', 'Practice.docx', 'south', 'Huye'),
(10, 7, 'MUPENZI', 'Benson', '+250722397708', 'Male', '2003', 'Secondary', 'GSOB BUTARE', '', 'practicecollection.docx', 'south', 'Huye'),
(11, 7, 'MUPENZI', 'Benson', '+250722397708', 'Male', '1999', 'University', 'UR-CST', '', 'practicecollection.docx', 'west', 'Karongi'),
(12, 8, 'MUREKETETE', 'Judith', '+250782248421', 'Female', '2004', 'Secondary', 'EAV ', '', 'CECILE.pdf', 'east', 'Gatsibo'),
(13, 8, 'MUREKETETE', 'Judith', '+250782248421', 'Female', '1999', 'University', 'RP-IPRC-HUYE', '', 'internship all chapters.docx', 'south', 'Huye'),
(14, 8, 'MUREKETETE', 'Judith', '+250739121960', 'Female', '2004', 'University', 'UR-CST', '', 'internship all chapters.zip', 'kigali', 'Kicukiro'),
(15, 8, 'MUREKETETE', 'Judith', '+250782248421', 'Female', '2003', 'University', 'UR-CST', '', 'abstract.docx', 'kigali', 'Kicukiro'),
(16, 9, 'BENINKA', 'Benitha', '+250784463070', 'Female', '2004', 'Secondary', 'EAV ', '', 'IMG_20171026_095338.jpg', 'south', 'Gisagara'),
(17, 11, 'kanyange', 'Liliose', '+250787057530', 'Male', '1986', 'University', 'RP-IPRC-HUYE', '', 'IMG_20171026_095344.jpg', 'kigali', 'Gasabo'),
(18, 8, 'MUREKETETE', 'Judith', '+250722397708', 'Female', '2001', 'University', 'UR-CST', '', 'â€ª+250 788 862 319â€¬ 20160705_151843.jpg', 'south', 'Huye');

-- --------------------------------------------------------

--
-- Table structure for table `applications`
--

CREATE TABLE `applications` (
  `AppID` int(11) NOT NULL,
  `ApplicantID` int(11) NOT NULL,
  `organization` varchar(100) NOT NULL,
  `department` varchar(255) NOT NULL,
  `EnCom` varchar(13) NOT NULL,
  `status` varchar(255) NOT NULL,
  `DateFrom` varchar(255) NOT NULL,
  `DateTo` varchar(255) NOT NULL,
  `dates` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `applications`
--

INSERT INTO `applications` (`AppID`, `ApplicantID`, `organization`, `department`, `EnCom`, `status`, `DateFrom`, `DateTo`, `dates`) VALUES
(5, 5, '3', '1', '+250727034334', 'Approved', '2018-08-01', '2018-08-31', '2018-07-19 02:51:40'),
(6, 6, '6', '4', '+250727034334', 'Rejected', '2018-08-15', '2018-09-20', '2018-07-19 07:14:52'),
(7, 7, '3', '1', '+250727034334', 'Approved', '2018-10-01', '2018-11-30', '2018-07-19 07:18:56'),
(8, 8, '8', '', '+250727034334', 'Pending', '2018-07-01', '2018-07-28', '2018-07-19 08:29:07'),
(9, 9, '7', '7', '+250727034334', 'Rejected', '2018-07-19', '2018-10-18', '2018-07-19 08:44:51'),
(10, 10, '9', '10', '+250727034334', 'Approved', '2018-09-17', '2018-07-17', '2018-07-19 09:29:06'),
(11, 11, '10', '13', '+250727034334', 'Approved', '2018-07-27', '2018-09-21', '2018-07-19 09:43:15'),
(12, 12, '7', '7', '+250727034334', 'Approved', '2018-07-20', '2018-08-30', '2018-07-19 10:19:10'),
(13, 13, '10', '13', '+250727034334', 'Rejected', '2018-06-05', '2018-07-30', '2018-07-20 01:42:31'),
(14, 14, '6', '4', '+250727034334', 'Approved', '2018-06-15', '2018-07-15', '2018-07-20 01:45:48'),
(15, 15, '10', '12', '+250727034334', 'Approved', '2018-11-10', '2018-10-11', '2018-07-20 10:01:23'),
(16, 16, '16', '29', '+250727034334', 'Rejected', '2018-08-02', '2018-09-03', '2018-07-20 10:48:04'),
(17, 17, '11', '', '+250727034334', 'Approved', '2018-12-11', '2019-12-11', '2018-07-20 12:48:42'),
(18, 18, '22', '36', '+250727034334', 'Approved', '2018-07-20', '2018-08-24', '2018-07-26 06:05:04');

-- --------------------------------------------------------

--
-- Table structure for table `applied`
--

CREATE TABLE `applied` (
  `id` int(11) NOT NULL,
  `applicant_code` int(11) DEFAULT NULL,
  `Applicant_Firstname` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Applicant_Lastname` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Task_Name` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Task_Type` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Required_Skills` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Start_Date` date DEFAULT NULL,
  `end_of_Project` date DEFAULT NULL,
  `Reward` varchar(50) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `applied`
--

INSERT INTO `applied` (`id`, `applicant_code`, `Applicant_Firstname`, `Applicant_Lastname`, `Task_Name`, `Task_Type`, `Required_Skills`, `Start_Date`, `end_of_Project`, `Reward`) VALUES
(31, 96, 'Eugenie', 'Habimana', 'Create admin dashboard for magasine website', 'Programming', 'php,mysql,bootstrap4', '2021-11-24', '2021-12-25', '30$'),
(33, 96, 'Eugenie', 'Habimana', 'Create payment ms for school', 'programming', 'C#,PHP,Laravel PHP Framework', '2021-12-13', '2022-01-28', '150000rwf'),
(35, 100, 'Bunani', 'Joseph', 'Network cables 100', 'Networking', 'LAN Cabling', '2022-01-07', '2022-02-09', '100000rwf'),
(36, 101, 'Shyaka', 'leonce', 'Develop school report mis', 'programming', 'Java,Python,PHP,Laravel PHP Framework', '2022-01-09', '2022-03-09', '100000rwf');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `names` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `message` varchar(1000) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` int(11) NOT NULL,
  `OrgID` int(11) NOT NULL,
  `Dep_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `OrgID`, `Dep_name`) VALUES
(1, 3, 'ICT'),
(2, 3, 'TELECOMMUNICATION'),
(4, 6, 'ROAD CONSTRUCTION'),
(5, 6, 'CONSTRUCTION'),
(6, 7, 'ICT'),
(7, 7, 'Veterinary Technology'),
(8, 9, 'ICT'),
(10, 9, 'BIOMEDICAL ENGENEERING'),
(11, 9, 'MECHANICAL ENGENEERING'),
(12, 10, 'ICT'),
(13, 10, 'TELECOMMUNICATION'),
(14, 10, 'Management'),
(15, 11, 'crop prodaction'),
(16, 11, 'civil engenerring'),
(17, 11, 'MEC'),
(18, 5, 'ICT'),
(19, 5, 'civil engenerring'),
(20, 5, 'ELECTICAL ENGENEERING'),
(21, 3, 'MANAGMENT'),
(22, 17, 'ICT'),
(23, 17, 'MANAGMENT'),
(24, 15, 'education'),
(25, 15, 'ICT'),
(26, 12, 'ICT'),
(27, 12, 'Telcommunication'),
(28, 16, 'MANAGMENT'),
(29, 16, 'ICT'),
(31, 16, 'education'),
(32, 7, 'civil engenerring'),
(33, 7, 'Mecanical Engeneering'),
(34, 7, 'ELECTICAL ENGENEERING'),
(35, 7, 'Hospitality'),
(36, 22, 'ICT'),
(37, 22, 'civil engenerring'),
(38, 22, 'Hospitality'),
(39, 22, 'vet');

-- --------------------------------------------------------

--
-- Table structure for table `organizations`
--

CREATE TABLE `organizations` (
  `userID` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `PhoneNumber` varchar(100) NOT NULL,
  `userEmail` varchar(100) NOT NULL,
  `userPass` varchar(100) NOT NULL,
  `userStatus` enum('Y','N') NOT NULL DEFAULT 'Y',
  `tokenCode` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `organizations`
--

INSERT INTO `organizations` (`userID`, `fname`, `lname`, `PhoneNumber`, `userEmail`, `userPass`, `userStatus`, `tokenCode`) VALUES
(1, 'Rwanda Air Company', 'RWANDA AIR', 'Private_Institutions', 'iwebportal72@gmail.com', '76af15911db910d58328e81e2c491551', 'Y', '548674e2c3592ee0f53ba9b116de8b94'),
(2, 'DIRECTOR OF TRAINING', 'UR', 'ur', 'ur@gmail.com', '202cb962ac59075b964b07152d234b70', 'Y', '38ca30bc252b93d8562fa9e4e628bba9'),
(8, 'ENG', 'REAL CONSTRUCTORS', '0786441086', 'real@gmail.com', '202cb962ac59075b964b07152d234b70', 'Y', 'ade921e761bd0fa17ba64ffe933fbc44'),
(9, 'PUBLIC', 'IPRC-KIGALI', '0722397708', 'iprc-kigali@gmail.com', '202cb962ac59075b964b07152d234b70', 'Y', '16060b0c7b4ed7aa381d4fb6f0d48088'),
(10, 'ICTL', 'TIGO RWANDA', '0727034334', 'tigo@gmail.com', '202cb962ac59075b964b07152d234b70', 'Y', 'baa5758036e08ffc0bca17014b914eb7'),
(11, 'PRIVATE', 'AFFORD TECHNOLOGY SERVICES', '0722397708', 'afford@gmail.com', '202cb962ac59075b964b07152d234b70', 'Y', 'e09d4a1d7f1ebe56c31684f01d93896d'),
(12, 'ICTL', 'MTN', '0782248421', 'mtn@gmail.com', '202cb962ac59075b964b07152d234b70', 'Y', '266caef2650b56383bbad31a1577c279'),
(13, 'ENG', 'PLAMBING', '0782248421', 'plambing@gmail.com', '202cb962ac59075b964b07152d234b70', 'Y', '35f89c32e8183f1dc30028b6e167448e'),
(14, 'PUBLIC', 'asanyagatre', '0782248421', 'asanyatare@gmail.com', '202cb962ac59075b964b07152d234b70', 'Y', 'fa77befe33fb0080a220e9d7cf74f16e'),
(15, 'PUBLIC', 'KIE', '0782248421', 'kie@gmail.com', '202cb962ac59075b964b07152d234b70', 'Y', 'c02f57a63bc6d225dd41207a7d917ec8'),
(16, 'PRIVATE', 'CUR', '0722397708', 'cur@gmail.com', '202cb962ac59075b964b07152d234b70', 'Y', 'db2d51891eeee8b4b21ee823e421a5c0'),
(17, 'PRIVATE', 'ULK', '0722397708', 'ulk@gmail.com', '202cb962ac59075b964b07152d234b70', 'Y', '1943892b7ac02cadf6c2e7992b70e66c'),
(18, 'PRIVATE', 'UNLK', '0722397708', 'unlk@gmail.com', '202cb962ac59075b964b07152d234b70', 'Y', 'c4e712e9f55067077ad8b5d3d1dec8b9'),
(19, 'ENG', 'HORIZON CONSTRUCTORS', '0782248421', 'horizon@gmail.com', '202cb962ac59075b964b07152d234b70', 'Y', '174a54f70ba6e15d573f840c523d3c37'),
(20, 'ICTL', 'New Artel', '0782248421', 'new_artel@gmail.com', '202cb962ac59075b964b07152d234b70', 'Y', 'd16b2a1ffb01bd3ea25d148abd0bbf0f'),
(21, 'PUBLIC', 'URNIVERSITY OF RWANDA', '0782248421', 'uni_rwanda@gmail.com', '202cb962ac59075b964b07152d234b70', 'Y', '753b3475f07f98b944760474473f032f'),
(22, 'PUBLIC', 'IPRC-HUYE', '0782248421', 'iprc-huye@gmail.com', '202cb962ac59075b964b07152d234b70', 'Y', 'afb8b99d88e35fea002ad04748f59217');

-- --------------------------------------------------------

--
-- Table structure for table `task`
--

CREATE TABLE `task` (
  `TaskID` int(11) NOT NULL,
  `User_ID` int(11) NOT NULL,
  `Task_Name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Task_Type` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Required_Skills` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Start_Date` date DEFAULT NULL,
  `End_of_project` date DEFAULT NULL,
  `Reward` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `task`
--

INSERT INTO `task` (`TaskID`, `User_ID`, `Task_Name`, `Task_Type`, `Required_Skills`, `Start_Date`, `End_of_project`, `Reward`) VALUES
(9, 96, 'Create e commerce system', 'programming ', 'js,html5,php', '2021-11-21', '2021-12-23', '300$'),
(15, 96, 'Create admin dashboard for magasine website', 'Programming', 'php,mysql,bootstrap4', '2021-11-24', '2021-12-25', '30$'),
(18, 96, 'patty', 'Programming', 'C#,PHP,Laravel PHP Framework', '2021-11-24', '2021-11-27', '30$'),
(21, 96, 'Create payment ms for school', 'programming', 'C#,PHP,Laravel PHP Framework', '2021-12-13', '2022-01-28', '150000rwf'),
(23, 100, 'Network cables 100', 'Networking', 'LAN Cabling', '2022-01-07', '2022-02-09', '100000rwf'),
(24, 101, 'Develop school report mis', 'programming', 'Java,Python,PHP,Laravel PHP Framework', '2022-01-09', '2022-03-09', '100000rwf');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fname` varchar(75) NOT NULL,
  `lname` varchar(75) NOT NULL,
  `contact` varchar(10) NOT NULL,
  `uname` varchar(75) NOT NULL,
  `userEmail` varchar(75) NOT NULL,
  `userPass` varchar(75) NOT NULL,
  `educationlevel` varchar(75) NOT NULL,
  `field_of_study` varchar(75) NOT NULL,
  `familiar_with_programming` varchar(63) NOT NULL,
  `programming_lang` varchar(125) NOT NULL,
  `other_familiar_with` varchar(75) NOT NULL,
  `experience` varchar(75) NOT NULL,
  `proven_experience` varchar(75) NOT NULL,
  `expected_salary` varchar(75) NOT NULL,
  `userStatus` enum('Y','N','C') NOT NULL,
  `tokenCode` varchar(75) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `contact`, `uname`, `userEmail`, `userPass`, `educationlevel`, `field_of_study`, `familiar_with_programming`, `programming_lang`, `other_familiar_with`, `experience`, `proven_experience`, `expected_salary`, `userStatus`, `tokenCode`) VALUES
(96, 'Eugenie', 'Habimana', '0783434022', '', 'eugeniehabimana@gmail.com', '1eee7e566c5e608fa3a769ba1cdacfa6', 'Master\'s', 'ICT', 'Yes', 'C#,PHP,Laravel PHP Framework', '--Please Select ---', '1-3years', 'Field Vist (1).pdf', '123$', 'C', '7fceecd3256731fd5c7ed42313d0b4ad'),
(99, 'Nibishaka', 'Eric', '0783434006', '', 'nibishakae@gmail.com', 'af8cb0d9862520114929a21102201add', 'Advanced level A1', 'ICT', 'No', 'None', 'Network Security', '0-1year', 'Google certfcate.pdf', '123$', 'Y', 'c07f1e7ef1bd38fb7e606508e3c6f907'),
(100, 'Bunani', 'Joseph', '0788569790', '', 'bunanijo101@gmail.com', 'e3c33f94e4646ea97c32864a29c0039e', 'Advanced level A1', 'ICT', 'No', 'None', 'LAN Cabling', '0-1year', 'Nibishaka volunteering.pdf', '100000RWF', 'C', '9b7a8722b86b151dd6f65f7863f9bc1c'),
(101, 'Shyaka', 'leonce', '0788704082', '', 'shyakalee@gmail.com', 'f625406738e030498f6bcb5dc8912069', 'Advanced level A1', 'IT', 'Yes', 'Java,Python,PHP,Laravel PHP Framework', 'Programming is Enough', '1-3years', 'computing-and-it-programs.pdf', '12000', 'N', '9c72adb1ef9d52ce6aa9b2e291ad84d0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `applicants`
--
ALTER TABLE `applicants`
  ADD PRIMARY KEY (`ApplicantID`),
  ADD KEY `userID` (`userID`);

--
-- Indexes for table `applications`
--
ALTER TABLE `applications`
  ADD PRIMARY KEY (`AppID`),
  ADD KEY `ApplicantID` (`ApplicantID`),
  ADD KEY `organization` (`organization`),
  ADD KEY `organization_2` (`organization`),
  ADD KEY `organization_3` (`organization`);

--
-- Indexes for table `applied`
--
ALTER TABLE `applied`
  ADD PRIMARY KEY (`id`),
  ADD KEY `applicant_code` (`applicant_code`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `organizations`
--
ALTER TABLE `organizations`
  ADD PRIMARY KEY (`userID`),
  ADD UNIQUE KEY `userEmail` (`userEmail`);

--
-- Indexes for table `task`
--
ALTER TABLE `task`
  ADD PRIMARY KEY (`TaskID`),
  ADD KEY `User_ID` (`User_ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `contact` (`contact`),
  ADD UNIQUE KEY `userEmail` (`userEmail`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `applicants`
--
ALTER TABLE `applicants`
  MODIFY `ApplicantID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `applications`
--
ALTER TABLE `applications`
  MODIFY `AppID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `applied`
--
ALTER TABLE `applied`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `organizations`
--
ALTER TABLE `organizations`
  MODIFY `userID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23;

--
-- AUTO_INCREMENT for table `task`
--
ALTER TABLE `task`
  MODIFY `TaskID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `applications`
--
ALTER TABLE `applications`
  ADD CONSTRAINT `applications_ibfk_1` FOREIGN KEY (`ApplicantID`) REFERENCES `applicants` (`ApplicantID`);

--
-- Constraints for table `applied`
--
ALTER TABLE `applied`
  ADD CONSTRAINT `applied_ibfk_1` FOREIGN KEY (`applicant_code`) REFERENCES `users` (`id`);

--
-- Constraints for table `task`
--
ALTER TABLE `task`
  ADD CONSTRAINT `task_ibfk_1` FOREIGN KEY (`User_ID`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
