-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 28, 2023 at 02:46 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 7.4.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `techbird_ksrm`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin@techbirdsconsulting.com', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `careers`
--

CREATE TABLE `careers` (
  `job_id` int(11) NOT NULL,
  `job_name` varchar(255) NOT NULL,
  `job_location` varchar(255) NOT NULL,
  `job_package` varchar(255) NOT NULL,
  `job_details` longtext NOT NULL,
  `job_image` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `careers`
--

INSERT INTO `careers` (`job_id`, `job_name`, `job_location`, `job_package`, `job_details`, `job_image`) VALUES
(1, 'workshop', 'pg-block', '23/6/2023', '<p>Hands on Work Experience</p>\r\n', 'w.jpg'),
(2, 'guest lecture', 'sj block', '3/05/23', 'Hands on work', 'l.jpg'),
(3, 'seminar', 'mechanical block', '2/03/23', 'Hands on Work', 's.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`id`, `name`, `email`, `subject`, `message`) VALUES
(3, 'sai', 'sai@123', 'js', 'very good'),
(4, 'david', 'david@gmail.com', 'java', 'i need more info'),
(6, 'mickel jackson', 'mical@gmail.com', 'angular15', 'tq sir'),
(7, 'naga sahitya', 'nagasahitya@gmail.com', 'web technologies', 'please call back'),
(8, 'jack', 'jack@gmail.com', 'php', 'very interested'),
(9, 'naga ganesh', 'thambi@gmail.com', 'c language', 'when will course begin?'),
(10, 'saniya', 'saniya@gmail.com', 'hi', 'i need some more info please call back');

-- --------------------------------------------------------

--
-- Table structure for table `enquery`
--

CREATE TABLE `enquery` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `message` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(11) NOT NULL,
  `news_image` varchar(255) NOT NULL,
  `news_heading` varchar(255) NOT NULL,
  `news_para` varchar(255) NOT NULL,
  `news_by` varchar(255) NOT NULL,
  `news_date` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `news_image`, `news_heading`, `news_para`, `news_by`, `news_date`) VALUES
(2, 'n1.jpg', 'idea compitition', 'this team got second prize for android application for taxi services', 'By admin', '27/04/2022'),
(3, 'n2.jpg', 'workshop on dot net', 'workshop organized 3 days on .net technologies from 24 to 26 nov 2022', 'By Admin', '15/09/2022'),
(4, 'n3.jpg', 'mathematics day', 'conducted poster presentation a day before and many students actively participated', 'By Admin', '24/05/2021');

-- --------------------------------------------------------

--
-- Table structure for table `offers`
--

CREATE TABLE `offers` (
  `id` int(11) NOT NULL,
  `icon` varchar(255) NOT NULL,
  `offers_type` varchar(255) NOT NULL,
  `offers_detail` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `offers`
--

INSERT INTO `offers` (`id`, `icon`, `offers_type`, `offers_detail`) VALUES
(1, 'flaticon-money', 'Data Analytics', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Et velit,ullam distinctio hic possimus assumenda pariatur, ab non maxime officiis fugit! Numquam debitis odio odit quisquam maiores quidem magnam dicta.'),
(2, 'flaticon-research', 'Market Expansion', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Et velit,ullam distinctio hic possimus assumenda pariatur, ab non maxime officiis fugit! Numquam debitis odio odit quisquam maiores quidem magnam dicta.'),
(3, 'flaticon-optimization', 'Revenue Growth', 'Lorem ipsum dolor sit, amet consectetur adipisicing elit. Et velit,ullam distinctio hic possimus assumenda pariatur, ab non maxime officiis fugit! Numquam debitis odio odit quisquam maiores quidem magnam dicta.');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(11) NOT NULL,
  `icon` varchar(255) NOT NULL,
  `service_type` varchar(255) NOT NULL,
  `service_detail` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `icon`, `service_type`, `service_detail`) VALUES
(2, 'flaticon-flowchart', 'Seminar', 'A seminar is a form of academic instruction, either at an academic institution or offered by a commercial or professional organization. It has the function of bringing together small groups for recurring meetings, focusing each time on some particular sub'),
(7, 'flaticon-flowchart', 'Guest Lecture', 'Guest Lecture is a concept that helps the students in gaining additional knowledge. Universities and colleges make sure to arrange a guest lecture for students in order to enhance their knowledge.'),
(8, 'flaticon-flowchart', 'workshop', 'A workshop is a period of discussion or practical work on a particular subject in which a group of people share their knowledge or experience.'),
(9, 'flaticon-chess-pieces', 'Technical events', 'Theses are the events which are helpful to enhance student technical skills with competition like coding, designing, building etc...'),
(10, 'flaticon-chess-pieces', 'Non technical events', 'Events like poster presentation, treasure hunt, solving a puzzle, oral presentation etc.. are useful to develop the soft skills for students in this competitive world'),
(12, 'flaticon-flowchart', 'Cultural activities', 'Cultural activities are sports or activities which contribute to or enhance the historical or social development, appreciation of members of the public. It is training and refinement of the intellect, interest, tastes and skills of a person.');

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE `student` (
  `id` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `student`
--

INSERT INTO `student` (`id`, `fname`, `lname`, `phone`, `email`, `password`) VALUES
(8, 'siva', 'sankar', '1237848509', 'admin@gmail.com', '123'),
(11, 'naga', 'sahitya', '7863531234', 'sahitya@gmail.com', '456'),
(12, 'naga', 'ganesh', '9834567890', 'ganesh@gmail.com', '1289'),
(13, 'naga', 'raju', '9876123456', 'raju@gmail.com', 'hj87'),
(14, 'jack', 'mister', '875436809', 'jack@gmail.com', '614'),
(15, 'abdul', 'kalam', '967853421', 'kalam@gmail.com', '2980'),
(16, 'naga ', 'siri', '786512390', 'siri@gmail.com', 'siri123'),
(17, 'lavanya', 'raj', '1345689006', 'lavraj@gmail.com', '45678'),
(19, 'ass', 'frre', '1245678', 'dggu@jkk', '12'),
(20, 'aswitha', 'naru', '234555551223', 'aswi@gmail.com', '123');

-- --------------------------------------------------------

--
-- Table structure for table `team`
--

CREATE TABLE `team` (
  `id` int(11) NOT NULL,
  `team_image` varchar(255) NOT NULL,
  `team_name` varchar(255) NOT NULL,
  `team_designation` varchar(255) NOT NULL,
  `team_icon1` varchar(255) NOT NULL,
  `team_icon2` varchar(255) NOT NULL,
  `team_icon3` varchar(255) NOT NULL,
  `team_icon4` varchar(255) NOT NULL,
  `team_icon5` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `team`
--

INSERT INTO `team` (`id`, `team_image`, `team_name`, `team_designation`, `team_icon1`, `team_icon2`, `team_icon3`, `team_icon4`, `team_icon5`) VALUES
(1, '1.jpg', 'Prudvi raj', 'Designer sir', 'fab fa-facebook-f', 'fab fa-twitter', 'fab fa-linkedin-in', 'fab fa-google-plus-g', 'fab fa-behance'),
(2, '2.jpg', 'Raj', 'Art Designer', 'fab fa-facebook-f', 'fab fa-twitter', 'fab fa-linkedin-in', 'fab fa-google-plus-g', 'fab fa-behance'),
(3, '3.jpg', 'Ranjith', 'SEO', 'fab fa-facebook-f', 'fab fa-twitter', 'fab fa-linkedin-in', 'fab fa-google-plus-g', 'fab fa-behance'),
(5, '4.jpg', 'John', 'Developer', 'fab fa-facebook-f', 'fab fa-twitter', 'fab fa-linkedin-in', 'fab fa-google-plus-g', 'fab fa-behance');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `careers`
--
ALTER TABLE `careers`
  ADD PRIMARY KEY (`job_id`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `enquery`
--
ALTER TABLE `enquery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `offers`
--
ALTER TABLE `offers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `student`
--
ALTER TABLE `student`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `phone` (`phone`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `phone_2` (`phone`,`email`);

--
-- Indexes for table `team`
--
ALTER TABLE `team`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `careers`
--
ALTER TABLE `careers`
  MODIFY `job_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `enquery`
--
ALTER TABLE `enquery`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `offers`
--
ALTER TABLE `offers`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `student`
--
ALTER TABLE `student`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `team`
--
ALTER TABLE `team`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
