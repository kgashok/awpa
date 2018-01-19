-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 19, 2018 at 07:41 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `awpa`
--

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `Sno` int(11) NOT NULL,
  `RegNo` bigint(20) NOT NULL,
  `Name` varchar(24) NOT NULL,
  `Course` varchar(7) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`Sno`, `RegNo`, `Name`, `Course`) VALUES
(1, 711714104001, 'AISHWARYA.S', 'B.E CSE'),
(2, 711714104002, 'AJITH.NM', 'B.E CSE'),
(3, 711714104003, 'AKSHAYA M', 'B.E CSE'),
(4, 711714104004, 'ALAGAMMAI.M.S', 'B.E CSE'),
(5, 711714104005, 'ANAND.S', 'B.E CSE'),
(6, 711714104006, 'ANEESHA.A', 'B.E CSE'),
(7, 711714104007, 'ANISH.R', 'B.E CSE'),
(8, 711714104008, 'ARAVIND.A', 'B.E CSE'),
(9, 711714104009, 'ARAVINDHAN.S', 'B.E CSE'),
(10, 711714104010, 'ARSHATH AHAMED SAJJATH.M', 'B.E CSE'),
(11, 711714104011, 'ARULKUMAR.T', 'B.E CSE'),
(12, 711714104012, 'ARUN PRAKASH P', 'B.E CSE'),
(13, 711714104013, 'ARUN.A', 'B.E CSE'),
(14, 711714104014, 'ARUN.C.V', 'B.E CSE'),
(15, 711714104015, 'DHANALAKSHMI.V', 'B.E CSE'),
(16, 711714104016, 'DHARSHINI.S', 'B.E CSE'),
(17, 711714104017, 'DIVYA M', 'B.E CSE'),
(18, 711714104018, 'DIVYA U', 'B.E CSE'),
(19, 711714104019, 'GANESH.M', 'B.E CSE'),
(20, 711714104020, 'GOKUL.S', 'B.E CSE'),
(21, 711714104021, 'GOWRI GAYATHRI.S', 'B.E CSE'),
(22, 711714104022, 'GOWTHAM.T', 'B.E CSE'),
(23, 711714104023, 'HARI PRAKASH.J', 'B.E CSE'),
(24, 711714104024, 'JAYACHITHRA S', 'B.E CSE'),
(25, 711714104025, 'JEYA SUNDARI.G', 'B.E CSE'),
(26, 711714104026, 'JOSE ANTONY MUTHU.S', 'B.E CSE'),
(27, 711714104027, 'KARTHIK.S', 'B.E CSE'),
(28, 711714104028, 'KAVITHA.M', 'B.E CSE'),
(29, 711714104029, 'KAVYAMALAR.V', 'B.E CSE'),
(30, 711714104030, 'KHAVYA.K', 'B.E CSE'),
(31, 711714104031, 'KOWSALYA.N', 'B.E CSE'),
(32, 711714104032, 'KOWSALYA.S', 'B.E CSE'),
(33, 711714104033, 'MOHANAKRISHNAN.S', 'B.E CSE'),
(34, 711714104034, 'MOHAMED SHARUK CM', 'B.E CSE'),
(35, 711714104035, 'MONISHA.R', 'B.E CSE'),
(36, 711714104036, 'MYTHILI.G', 'B.E CSE'),
(37, 711714104037, 'MYTHREYAN.R', 'B.E CSE'),
(38, 711714104038, 'NAGAIMUGAN.R', 'B.E CSE'),
(39, 711714104039, 'NANDHINI.P', 'B.E CSE'),
(40, 711714104040, 'NAVEEN.D', 'B.E CSE'),
(41, 711714104041, 'NISHANTHI.D', 'B.E CSE'),
(42, 711714104042, 'POORNIMA.S', 'B.E CSE'),
(43, 711714104043, 'POOVANNAN.A', 'B.E CSE'),
(44, 711714104044, 'PRABA DEVI.M', 'B.E CSE'),
(45, 711714104045, 'PRABHAKAR.G', 'B.E CSE'),
(46, 711714104046, 'PRADEEP.N', 'B.E CSE'),
(47, 711714104047, 'PRASANTH.V', 'B.E CSE'),
(48, 711714104048, 'PREMKUMAR.D', 'B.E CSE'),
(49, 711714104049, 'PRIYANKA.R', 'B.E CSE'),
(50, 711714104050, 'RADHAMANI.T', 'B.E CSE'),
(51, 711714104051, 'RAGAVI.S', 'B.E CSE'),
(52, 711714104052, 'RAJESH.E', 'B.E CSE'),
(53, 711714104053, 'RAJKUMAR.A', 'B.E CSE'),
(54, 711714104054, 'REVATHI.M', 'B.E CSE'),
(55, 711714104055, 'ROHINI.G', 'B.E CSE'),
(56, 711714104056, 'SAKTHI SREE.N', 'B.E CSE'),
(57, 711714104057, 'SAMPATH KUMAR.P.N', 'B.E CSE'),
(58, 711714104058, 'SANGAHVI.R', 'B.E CSE'),
(59, 711714104059, 'SANTHOSH.C.M', 'B.E CSE'),
(60, 711714104060, 'SANTHOSH KUMAR.K', 'B.E CSE'),
(61, 711714104061, 'SARAN.G', 'B.E CSE'),
(62, 711714104062, 'SHARATH.R', 'B.E CSE'),
(63, 711714104063, 'SIVA SIDDHESH.A.P', 'B.E CSE'),
(64, 711714104064, 'SOFIYA.M', 'B.E CSE'),
(65, 711714104065, 'SOUNDARAYAA R.K', 'B.E CSE'),
(66, 711714104066, 'SOUNDARYA.C', 'B.E CSE'),
(67, 711714104067, 'SOWMIKA.R', 'B.E CSE'),
(68, 711714104068, 'SRIRAM.B', 'B.E CSE'),
(69, 711714104069, 'SUBASHINI.U', 'B.E CSE'),
(70, 711714104070, 'SUDHARSHAN.T.R', 'B.E CSE'),
(71, 711714104071, 'SUKUMAR.P', 'B.E CSE'),
(72, 711714104072, 'SURUTHI.V', 'B.E CSE'),
(73, 711714104073, 'TAMILARASI.R', 'B.E CSE'),
(74, 711714104074, 'THENMOZHI.S', 'B.E CSE'),
(75, 711714104075, 'VEERA SIVA HARIHARAN.M', 'B.E CSE'),
(76, 711714104076, 'VIGNESH KUMAR N', 'B.E CSE'),
(77, 711714104077, 'MANOJ KUMAR.S', 'B.E CSE'),
(78, 711714104078, 'GILBERT WILLIAM.G', 'B.E CSE'),
(79, 711714104079, 'SUKUMAR.V', 'B.E CSE'),
(80, 711714104080, 'VINUPAVITHRA.N', 'B.E CSE'),
(81, 711714106001, 'AJITH KUMAR.K', 'B.E ECE'),
(82, 711714106002, 'AJITH KUMAR.S', 'B.E ECE'),
(83, 711714106003, 'ALEX.M', 'B.E ECE'),
(84, 711714106005, 'ARUL MOZHI B', 'B.E ECE'),
(85, 711714106006, 'ARUN VIGNESH.S', 'B.E ECE'),
(86, 711714106007, 'BALAKUMAR.M', 'B.E ECE'),
(87, 711714106008, 'BARANI.R', 'B.E ECE'),
(88, 711714106009, 'BRINDHA.K', 'B.E ECE'),
(89, 711714106010, 'DEEBAN CHAKraVARTHI.S', 'B.E ECE'),
(90, 711714106011, 'DEEPIKA.S', 'B.E ECE'),
(91, 711714106012, 'ELAKKIYA.V', 'B.E ECE'),
(92, 711714106013, 'FEDALIS GEOSTENA.Y', 'B.E ECE'),
(93, 711714106014, 'GIRIPRASATH.M', 'B.E ECE'),
(94, 711714106015, 'GOKUL SWAMINATHAN.M.S', 'B.E ECE'),
(95, 711714106016, 'GOPALAKRISHNAN.M', 'B.E ECE'),
(96, 711714106017, 'GUNASEKARAN.B', 'B.E ECE'),
(97, 711714106018, 'GURU PRASHANTH.P', 'B.E ECE'),
(98, 711714106019, 'HARITHAASHRI.R', 'B.E ECE'),
(99, 711714106020, 'HEMASHREE.R', 'B.E ECE'),
(100, 711714106021, 'IJAZ AHMED.U', 'B.E ECE'),
(101, 711714106022, 'ISHWARYA.S', 'B.E ECE'),
(102, 711714106024, 'JENIFER.S', 'B.E ECE'),
(103, 711714106025, 'JENISHA.S', 'B.E ECE'),
(104, 711714106026, 'JENITTA MONICA J', 'B.E ECE'),
(105, 711714106027, 'KANIMOZHI.S', 'B.E ECE'),
(106, 711714106028, 'KARTHIK.V', 'B.E ECE'),
(107, 711714106029, 'KARTHIKA.B', 'B.E ECE'),
(108, 711714106031, 'KIRTHANAA.K', 'B.E ECE'),
(109, 711714106032, 'KIRUTHIKA.R', 'B.E ECE'),
(110, 711714106033, 'KOWSIK.M', 'B.E ECE'),
(111, 711714106035, 'MADHULA DEVI.S', 'B.E ECE'),
(112, 711714106036, 'MANIKANDAN.D', 'B.E ECE'),
(113, 711714106038, 'MANIRAJ.M', 'B.E ECE'),
(114, 711714106039, 'MANISH KUMAR S', 'B.E ECE'),
(115, 711714106040, 'MEENA.C', 'B.E ECE'),
(116, 711714106041, 'MINISHA.M', 'B.E ECE'),
(117, 711714106042, 'MOHANA PRIYA.V.M', 'B.E ECE'),
(118, 711714106043, 'MONICA.S', 'B.E ECE'),
(119, 711714106044, 'MUTHUMANI.P', 'B.E ECE'),
(120, 711714106901, 'AKILA.S', 'B.E ECE'),
(121, 711714106301, 'ANGEL.A', 'B.E ECE'),
(122, 711714106045, 'NANDHINI.R', 'B.E ECE'),
(123, 711714106046, 'NAVEEN.K', 'B.E ECE'),
(124, 711714106047, 'NAVINKUMAR.R', 'B.E ECE'),
(125, 711714106048, 'PRAMITHA.P.G', 'B.E ECE'),
(126, 711714106049, 'PRANESH.R', 'B.E ECE'),
(127, 711714106050, 'PREM KUMAR.V', 'B.E ECE'),
(128, 711714106052, 'PRIYANKA.B', 'B.E ECE'),
(129, 711714106053, 'PRIYANKA P', 'B.E ECE'),
(130, 711714106051, 'PRIYA.S', 'B.E ECE'),
(131, 711714106054, 'RAGAPRIYA.R', 'B.E ECE'),
(132, 711714106055, 'RAGHUL B', 'B.E ECE'),
(133, 711714106056, 'RAMKUMAR.K', 'B.E ECE'),
(134, 711714106058, 'RANJITH.M.S', 'B.E ECE'),
(135, 711714106059, 'RATHINAKUMAR. B', 'B.E ECE'),
(136, 711714106060, 'RISWAN MOHAMED A', 'B.E ECE'),
(137, 711714106061, 'SABARI.K', 'B.E ECE'),
(138, 711714106062, 'SAJEETHA.S', 'B.E ECE'),
(139, 711714106063, 'SAKTHIVEL.S', 'B.E ECE'),
(140, 711714106064, 'SANDHRA.J', 'B.E ECE'),
(141, 711714106065, 'SANDHYA.C', 'B.E ECE'),
(142, 711714106066, 'SANGAMI.V', 'B.E ECE'),
(143, 711714106067, 'SARAVANA PRABU.V', 'B.E ECE'),
(144, 711714106068, 'SATHISHKUMAR.R', 'B.E ECE'),
(145, 711714106069, 'SATHYA PRIYA.C', 'B.E ECE'),
(146, 711714106070, 'SEENEESHANMUGAP RABHA.R', 'B.E ECE'),
(147, 711714106072, 'SINDHUJA.K', 'B.E ECE'),
(148, 711714106073, 'SIVASANKAR.S', 'B.E ECE'),
(149, 711714106074, 'SNEHAA.S', 'B.E ECE'),
(150, 711714106075, 'SOMIYA.N', 'B.E ECE'),
(151, 711714106076, 'SOWMYA.R', 'B.E ECE'),
(152, 711714106077, 'SREESHA.M.V', 'B.E ECE'),
(153, 711714106078, 'SRIBALAJIVENKATRA J.D', 'B.E ECE'),
(154, 711714106079, 'SRINATH.K', 'B.E ECE'),
(155, 711714106080, 'SRIVATSAN.R', 'B.E ECE'),
(156, 711714106081, 'SUDARSHINI.S.V', 'B.E ECE'),
(157, 711714106082, 'SUNDAR.R', 'B.E ECE'),
(158, 711714106083, 'SUNDHARAMOORTH Y.S', 'B.E ECE'),
(159, 711714106084, 'SURENDRAN.S', 'B.E ECE'),
(160, 711714106085, 'SWATHI.D', 'B.E ECE'),
(161, 711714106086, 'THANISH.J', 'B.E ECE'),
(162, 711714106087, 'VIGNESH.G', 'B.E ECE'),
(163, 711714106088, 'VIJAY SHANMUGAN.M.M', 'B.E ECE'),
(164, 711714106089, 'VISHALE RAMANATHAN', 'B.E ECE'),
(165, 711714106090, 'VISHNU KUMAR.U', 'B.E ECE');

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `SNo` int(11) NOT NULL,
  `subCode` varchar(7) NOT NULL,
  `subName` varchar(75) NOT NULL,
  `semester` int(11) NOT NULL,
  `dept` varchar(8) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`SNo`, `subCode`, `subName`, `semester`, `dept`) VALUES
(1, 'HS6151', 'Technical English - I', 1, 'CSE'),
(2, 'MA6151', 'Mathematics - I', 1, 'CSE'),
(3, 'PH6151', 'Engineering Physics - I', 1, 'CSE'),
(4, 'CY6151', 'Engineering Chemistry - I', 1, 'CSE'),
(5, 'GE6151', 'Computer Programming', 1, 'CSE'),
(6, 'GE6152', 'Engineering Graphics', 1, 'CSE'),
(7, 'GE6161', 'Computer Practices Laboratory', 1, 'CSE'),
(8, 'GE6162', 'Engineering Practices Laboratory', 1, 'CSE'),
(9, 'GE6163', 'Physics and Chemistry Laboratory - I', 1, 'CSE'),
(10, 'HS6251', 'Technical English - II', 1, 'CSE'),
(11, 'MA6251', 'Mathematics - II', 2, 'CSE'),
(12, 'PH6251', 'Engineering Physics - II', 2, 'CSE'),
(13, 'CY6251', 'Engineering Chemistry - II', 2, 'CSE'),
(14, 'CS6201', 'Digital Principles and System Design', 2, 'CSE'),
(15, 'CS6202', 'Programming and Data Structures I', 2, 'CSE'),
(16, 'GE6262', 'Physics and Chemistry Laboratory - II', 2, 'CSE'),
(17, 'CS6211', 'Digital Laboratory', 2, 'CSE'),
(18, 'CS6212', 'Programming and Data Structures\r\nLaboratory I', 2, 'CSE'),
(19, 'MA6351', 'Transforms and Partial Differential Equations', 3, 'CSE'),
(20, 'CS6301', 'Programming and Data Structure II', 3, 'CSE'),
(21, 'CS6302', 'Database Management Systems', 3, 'CSE'),
(22, 'CS6303', 'Computer Architecture', 3, 'CSE'),
(23, 'CS6304', 'Analog and Digital Communication', 3, 'CSE'),
(24, 'GE6351', 'Environmental Science and Engineering', 3, 'CSE'),
(25, 'CS6311', 'Programming and Data Structure Laboratory II', 3, 'CSE'),
(26, 'CS6312', 'Database Management Systems Laboratory', 3, 'CSE'),
(27, 'MA6453', 'Probability and Queueing Theory', 4, 'CSE'),
(28, 'CS6551', 'Computer Networks', 4, 'CSE'),
(29, 'CS6401', 'Operating Systems', 4, 'CSE'),
(30, 'CS6402', 'Design and Analysis of Algorithms', 4, 'CSE'),
(31, 'EC6504', 'Microprocessor and Microcontroller', 4, 'CSE'),
(32, 'CS6403', 'Software Engineering', 4, 'CSE'),
(33, 'CS6411', 'Networks Laboratory', 4, 'CSE'),
(34, 'CS6412', 'Microprocessor and Microcontroller Laboratory', 4, 'CSE'),
(35, 'CS6413', 'Operating Systems Laboratory', 4, 'CSE'),
(36, 'MA6566', 'Discrete Mathematics', 5, 'CSE'),
(37, 'CS6501', 'Internet Programming', 5, 'CSE'),
(38, 'CS6502', 'Object Oriented Analysis and Design', 5, 'CSE'),
(39, 'CS6503', 'Theory of Computation', 5, 'CSE'),
(40, 'CS6504', 'Computer Graphics', 5, 'CSE'),
(41, 'CS6511', 'Case Tools Laboratory', 5, 'CSE'),
(42, 'CS6512', 'Internet Programming Laboratory', 5, 'CSE'),
(43, 'CS6513', 'Computer Graphics Laboratory', 5, 'CSE'),
(44, 'CS6601', 'Distributed Systems', 6, 'CSE'),
(45, 'IT6601', 'Mobile Computing', 6, 'CSE'),
(46, 'CS6660', 'Compiler Design', 6, 'CSE'),
(47, 'IT6502', 'Digital Signal Processing', 6, 'CSE'),
(48, 'CS6659', 'Artificial Intelligence', 6, 'CSE'),
(49, 'CS6611', 'Mobile Application Development Laboratory', 6, 'CSE'),
(50, 'CS6612', 'Compiler Laboratory', 6, 'CSE'),
(51, 'GE6674', 'Communication and Soft Skills - Laboratory', 6, 'CSE'),
(52, 'CS6001', 'C# and .Net programming', 6, 'CSE'),
(53, 'GE6757', 'Total Quality Management', 6, 'CSE'),
(54, 'IT6702', 'Data Warehousing and Data Mining', 6, 'CSE'),
(55, 'CS6002', 'Network Analysis and Management', 6, 'CSE'),
(56, 'IT6004', 'Software Testing', 6, 'CSE'),
(57, 'CS6701', 'Cryptography and Network Security', 7, 'CSE'),
(58, 'CS6702', 'Graph Theory and Applications', 7, 'CSE'),
(59, 'CS6703', 'Grid and Cloud Computing', 7, 'CSE'),
(60, 'CS6704', 'Resource Management Techniques', 7, 'CSE'),
(61, 'CS6711', 'Security Laboratory', 7, 'CSE'),
(62, 'CS6712', 'Grid and Cloud Computing Laboratory', 7, 'CSE'),
(63, 'CS6003', 'Ad hoc and Sensor Networks', 7, 'CSE'),
(64, 'CS6004', 'Cyber Forensics', 7, 'CSE'),
(65, 'CS6005', 'Advanced Database Systems', 7, 'CSE'),
(66, 'BM6005', 'Bio Informatics', 7, 'CSE'),
(67, 'IT6801', 'Service Oriented Architecture', 7, 'CSE'),
(68, 'IT6005', 'Digital Image Processing', 7, 'CSE'),
(69, 'EC6703', 'Embedded and Real Time Systems', 7, 'CSE'),
(70, 'CS6006', 'Game Programming', 7, 'CSE'),
(71, 'CS6007', 'Information Retrieval', 7, 'CSE'),
(72, 'IT6006', 'Data Analytics', 7, 'CSE'),
(73, 'CS6801', 'Multi - Core Architectures and Programming', 8, 'CSE'),
(74, 'CS6008', 'Human Computer Interaction', 8, 'CSE'),
(75, 'CS6009', 'Nano Computing', 8, 'CSE'),
(76, 'IT6011', 'Knowledge Management', 8, 'CSE'),
(77, 'CS6010', 'Social Network Analysis', 8, 'CSE'),
(78, 'MG6088', 'Software Project Management', 8, 'CSE'),
(79, 'GE6075', 'Professional Ethics in Engineering', 8, 'CSE'),
(80, 'CS6011', 'Natural Language Processing', 8, 'CSE'),
(81, 'CS6012', 'Soft Computing', 8, 'CSE');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`Sno`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`SNo`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
