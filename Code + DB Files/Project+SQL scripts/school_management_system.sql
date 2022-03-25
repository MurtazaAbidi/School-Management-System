-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 20, 2021 at 09:30 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `school management system`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `Username` text NOT NULL,
  `Password` text NOT NULL,
  `email_address` text NOT NULL,
  `phone_no` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `Username`, `Password`, `email_address`, `phone_no`) VALUES
(1, 'Admin', 'Admin', 'admin@gmail.com', '03451234567');

-- --------------------------------------------------------

--
-- Table structure for table `attendance`
--

CREATE TABLE `attendance` (
  `date` date NOT NULL,
  `student_id` int(11) NOT NULL,
  `status` varchar(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `attendance`
--

INSERT INTO `attendance` (`date`, `student_id`, `status`) VALUES
('2021-12-02', 11, 'P'),
('2021-12-02', 41, 'P'),
('2021-12-02', 44, 'A'),
('2021-12-02', 48, 'P'),
('2021-12-02', 50, 'P'),
('2021-12-02', 64, 'P'),
('2021-12-03', 11, 'P'),
('2021-12-03', 41, 'A'),
('2021-12-03', 44, 'P'),
('2021-12-03', 48, 'P'),
('2021-12-03', 50, 'P'),
('2021-12-03', 64, 'P'),
('2021-12-06', 11, 'A'),
('2021-12-06', 41, 'A'),
('2021-12-06', 44, 'P'),
('2021-12-06', 48, 'P'),
('2021-12-06', 50, 'P'),
('2021-12-06', 64, 'P'),
('2021-12-07', 9, 'P'),
('2021-12-07', 42, 'P'),
('2021-12-07', 66, 'P'),
('2021-12-07', 70, 'P'),
('2021-12-08', 9, 'A'),
('2021-12-08', 11, 'P'),
('2021-12-08', 19, 'P'),
('2021-12-08', 41, 'P'),
('2021-12-08', 42, 'P'),
('2021-12-08', 44, 'P'),
('2021-12-08', 48, 'P'),
('2021-12-08', 50, 'P'),
('2021-12-08', 61, 'P'),
('2021-12-08', 64, 'P'),
('2021-12-08', 66, 'P'),
('2021-12-08', 70, 'P'),
('2021-12-09', 9, 'P'),
('2021-12-09', 11, 'P'),
('2021-12-09', 12, 'P'),
('2021-12-09', 13, 'P'),
('2021-12-09', 14, 'P'),
('2021-12-09', 16, 'P'),
('2021-12-09', 17, 'P'),
('2021-12-09', 18, 'P'),
('2021-12-09', 19, 'P'),
('2021-12-09', 22, 'P'),
('2021-12-09', 37, 'P'),
('2021-12-09', 38, 'P'),
('2021-12-09', 39, 'P'),
('2021-12-09', 40, 'P'),
('2021-12-09', 41, 'P'),
('2021-12-09', 42, 'P'),
('2021-12-09', 43, 'P'),
('2021-12-09', 44, 'P'),
('2021-12-09', 48, 'P'),
('2021-12-09', 50, 'P'),
('2021-12-09', 53, 'P'),
('2021-12-09', 54, 'P'),
('2021-12-09', 55, 'P'),
('2021-12-09', 56, 'A'),
('2021-12-09', 57, 'P'),
('2021-12-09', 58, 'P'),
('2021-12-09', 59, 'P'),
('2021-12-09', 60, 'P'),
('2021-12-09', 61, 'P'),
('2021-12-09', 62, 'P'),
('2021-12-09', 63, 'P'),
('2021-12-09', 64, 'P'),
('2021-12-09', 65, 'P'),
('2021-12-09', 66, 'P'),
('2021-12-09', 67, 'P'),
('2021-12-09', 68, 'P'),
('2021-12-09', 69, 'P'),
('2021-12-09', 70, 'P'),
('2021-12-10', 9, 'P'),
('2021-12-10', 11, 'P'),
('2021-12-10', 17, 'P'),
('2021-12-10', 40, 'P'),
('2021-12-10', 42, 'A'),
('2021-12-10', 54, 'P'),
('2021-12-10', 62, 'P'),
('2021-12-10', 66, 'A'),
('2021-12-10', 70, 'A'),
('2021-12-11', 9, 'P'),
('2021-12-11', 11, 'P'),
('2021-12-11', 42, 'P'),
('2021-12-11', 66, 'P'),
('2021-12-11', 70, 'P'),
('2021-12-12', 9, 'P'),
('2021-12-12', 11, 'P'),
('2021-12-12', 18, 'P'),
('2021-12-12', 42, 'P'),
('2021-12-12', 58, 'A'),
('2021-12-12', 66, 'P'),
('2021-12-12', 70, 'P'),
('2021-12-13', 9, 'A'),
('2021-12-13', 11, 'P'),
('2021-12-13', 42, 'A'),
('2021-12-13', 66, 'A'),
('2021-12-13', 70, 'P'),
('2021-12-14', 9, 'P'),
('2021-12-14', 11, 'P'),
('2021-12-14', 12, 'A'),
('2021-12-14', 41, 'A'),
('2021-12-14', 42, 'P'),
('2021-12-14', 44, 'A'),
('2021-12-14', 48, 'P'),
('2021-12-14', 50, 'P'),
('2021-12-14', 53, 'A'),
('2021-12-14', 55, 'P'),
('2021-12-14', 57, 'P'),
('2021-12-14', 64, 'A'),
('2021-12-14', 66, 'A'),
('2021-12-14', 67, 'A'),
('2021-12-14', 70, 'P'),
('2021-12-15', 9, 'P'),
('2021-12-15', 11, 'P'),
('2021-12-15', 12, 'P'),
('2021-12-15', 41, 'A'),
('2021-12-15', 42, 'A'),
('2021-12-15', 44, 'P'),
('2021-12-15', 48, 'P'),
('2021-12-15', 50, 'A'),
('2021-12-15', 53, 'A'),
('2021-12-15', 64, 'A'),
('2021-12-15', 66, 'A'),
('2021-12-15', 67, 'A'),
('2021-12-15', 70, 'A'),
('2021-12-16', 9, 'P'),
('2021-12-16', 42, 'P'),
('2021-12-16', 66, 'A'),
('2021-12-16', 70, 'A'),
('2021-12-17', 9, 'P'),
('2021-12-17', 42, 'P'),
('2021-12-17', 66, 'P'),
('2021-12-17', 70, 'A'),
('2021-12-20', 9, 'P'),
('2021-12-20', 42, 'A'),
('2021-12-21', 13, 'A'),
('2021-12-21', 60, 'P'),
('2021-12-22', 9, 'P'),
('2021-12-22', 42, 'P'),
('2021-12-22', 66, 'A'),
('2021-12-22', 70, 'P'),
('2021-12-23', 22, 'P'),
('2021-12-23', 37, 'P'),
('2021-12-23', 56, 'A'),
('2021-12-23', 68, 'A'),
('2021-12-23', 69, 'P');

-- --------------------------------------------------------

--
-- Table structure for table `class_info`
--

CREATE TABLE `class_info` (
  `class_id` int(11) NOT NULL,
  `class_teacher` int(11) NOT NULL,
  `students` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `class_info`
--

INSERT INTO `class_info` (`class_id`, `class_teacher`, `students`) VALUES
(1, 14, 5),
(2, 12, 2),
(3, 15, 2),
(4, 17, 3),
(5, 13, 2),
(6, 1, 3),
(7, 16, 4),
(8, 11, 1),
(9, 18, 6),
(10, 19, 4),
(11, 10, 4),
(12, 20, 3);

-- --------------------------------------------------------

--
-- Table structure for table `class_subjects`
--

CREATE TABLE `class_subjects` (
  `class_id` int(11) NOT NULL,
  `subject_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `class_subjects`
--

INSERT INTO `class_subjects` (`class_id`, `subject_id`) VALUES
(1, 1),
(1, 7),
(1, 8),
(1, 12),
(1, 21),
(1, 23),
(2, 1),
(2, 8),
(2, 12),
(2, 13),
(2, 21),
(2, 23),
(3, 1),
(3, 7),
(3, 8),
(3, 12),
(3, 13),
(3, 21),
(3, 23),
(4, 1),
(4, 3),
(4, 4),
(4, 12),
(4, 13),
(4, 21),
(4, 25),
(5, 1),
(5, 8),
(5, 9),
(5, 12),
(5, 21),
(5, 22),
(5, 25),
(6, 1),
(6, 3),
(6, 4),
(6, 8),
(6, 9),
(6, 12),
(6, 25),
(7, 1),
(7, 3),
(7, 4),
(7, 8),
(7, 12),
(7, 22),
(8, 12),
(9, 12),
(10, 12),
(11, 1),
(11, 3),
(11, 4),
(11, 9),
(11, 12),
(11, 14),
(11, 16),
(11, 21),
(12, 1),
(12, 3),
(12, 4),
(12, 8),
(12, 12),
(12, 14),
(12, 16);

-- --------------------------------------------------------

--
-- Table structure for table `student_info`
--

CREATE TABLE `student_info` (
  `id` int(11) NOT NULL,
  `Name` text NOT NULL,
  `Father_Name` text NOT NULL,
  `phone_no` text NOT NULL,
  `email_address` text NOT NULL,
  `date_of_birth` date NOT NULL,
  `Class_id` int(11) NOT NULL
) ;

--
-- Dumping data for table `student_info`
--

INSERT INTO `student_info` (`id`, `Name`, `Father_Name`, `phone_no`, `email_address`, `date_of_birth`, `Class_id`) VALUES
(9, 'Bilal', 'Ahmed', '03341239877', 'bilal@gmail.com', '2001-06-13', 11),
(11, 'Shahzaib', 'Hussain', '03335144132', 'shahzaib@gmail.com', '2001-10-24', 9),
(12, 'Shahzaib', 'Hasan', '03335144132', 'shahzaib1@gmail.com', '2001-10-24', 12),
(13, 'Sajjad', 'Aziz', '03214591929', 'sajjad@gmail.com', '1999-06-24', 5),
(14, 'Amin', 'Sadiq', '0329761234', 'amin.sadiq@gmail.com', '1996-06-14', 10),
(16, 'Bilal', 'Ahmed ', '987765543', 'bilal1@gmail.com', '1997-11-29', 10),
(17, 'hello', 'Sadiq', '03335144132', 'helloworld@gmail.com', '1995-12-22', 7),
(18, 'Ahmed', 'Raza', 'abc', 'helloworld1@gmail.com', '2000-12-12', 3),
(19, 'abc', 'abc', 'abc', 'helloworld2@gmail.com', '2003-12-12', 6),
(22, 'ABX', 'XYZ', 'abc', 'helloworld3@gmail.com', '2012-12-12', 1),
(37, 'abc', 'abc', 'abc', 'helloworld5@gmail.com', '2012-12-12', 1),
(38, 'Ali', 'Ahmed', '03362436874', 'ali.ahmed@gmail.com', '1999-04-23', 4),
(39, 'Zulfiqar Ali Memon', 'Ali', '03126537246', 'zulfiqaralimemon@gmail.com', '1989-08-23', 10),
(40, 'Bilal', 'Ahmed', '03341239876', 'bilal4@gmail.com', '2001-06-13', 7),
(41, 'Arman', 'Nizar', '03331476283', 'arman@gmail.com', '2003-12-23', 9),
(42, 'test', 'test', '03331231232', 'test@gmail.com', '2001-01-01', 11),
(43, 'Zohaib', 'Ahmed', '0338173822', 'zohaib@gmail.com', '1999-02-03', 4),
(44, 'Muhammad', 'Abbas', '03327846182', 'Muhammad@gmail.com', '2000-02-09', 9),
(48, 'Ahmed', 'Ali', '03275927384', 'Ahmed@gmail.com', '1996-03-17', 9),
(50, 'Ali', 'Abbas', '03338374621', 'Ali@gmail.com', '2000-01-05', 9),
(53, 'shahzaib', 'shahzaib', '02131231231', 'shahzaib3@gmail.com', '2001-03-08', 12),
(54, 'Yousuf', 'Ahmed', '03314821942', 'yousuf.ahmed@gmail.com', '2005-02-05', 7),
(55, 'Sajjad', 'Aziz', '03327392738', 'sajjad.aziz@gmail.com', '2001-12-08', 2),
(56, 'Ali', 'Ahmed', '03274182731', 'ali1@gmail.com', '2008-01-01', 1),
(57, 'Aamir', 'Ali', '03248270362', 'ali2@gmail.com', '2007-01-01', 2),
(58, 'Abdul Baari', 'Abdul Ghafoor', '03428475027', 'ali3@gmail.com', '2006-01-01', 3),
(59, 'Faizan', 'Sadiq', '0324829752', 'ali4@gmail.com', '2005-01-01', 4),
(60, 'Hussain', 'Ibraheem', '03417408352', 'ali5@gmail.com', '2004-01-01', 5),
(61, 'Imran', 'Ahmed', '03257360571', 'ali6@gmail.com', '2003-01-01', 6),
(62, 'Jawad', 'Ali', '03472639183', 'ali7@gmail.com', '2002-01-01', 7),
(63, 'Kashif', 'Khaleel', '03518372947', 'ali8@gmail.com', '2001-01-01', 8),
(64, 'Luqmaan', 'Maaz', '03327591732', 'ali9@gmail.com', '2000-01-01', 9),
(65, 'Moosa', 'Ahmed', '03325729384', 'ali10@gmail.com', '1999-01-01', 10),
(66, 'Muslim', 'Noman', '0327591837', 'ali11@gmail.com', '1998-01-01', 11),
(67, 'Ali', 'Ahmed', '03327591375', 'ali12@gmail.com', '1997-01-01', 12),
(68, 'Shaheer', 'Adil', '03327581723', 'shaheer.adil@gmail.com', '2009-02-04', 1),
(69, 'Yousuf', 'Ali', '03483283852', 'yousuf.ali@gmail.com', '2000-01-01', 1),
(70, 'Murtaza', 'Haider', '03212175432', 'murtaza07@gmail.com', '2007-01-01', 11),
(71, 'abccc', 'xyzzz', '1234356', 'abccc@gmail.com', '2004-01-23', 6);

-- --------------------------------------------------------

--
-- Table structure for table `subject`
--

CREATE TABLE `subject` (
  `subject_id` int(11) NOT NULL,
  `subject_name` text NOT NULL,
  `type` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `subject`
--

INSERT INTO `subject` (`subject_id`, `subject_name`, `type`) VALUES
(1, 'Maths', 'Theory'),
(3, 'Computer Science', 'Theory'),
(4, 'Computer Science', 'Practical'),
(7, 'General Knowledge', 'Theory'),
(8, 'Islamiyat', 'Theory'),
(9, 'Pakistan Studies', 'Theory'),
(12, 'Urdu', 'Theory'),
(13, 'Social Studies', 'Theory'),
(14, 'Chemistry', 'Theory'),
(16, 'Chemistry', 'Practical'),
(17, 'Physics', 'Theory'),
(18, 'Physics', 'Practical'),
(19, 'Biology', 'Theory'),
(20, 'Biology', 'Practical'),
(21, 'English', 'Theory'),
(22, 'Sindhi', 'Theory'),
(23, 'Drawing', 'Theory'),
(24, 'Economics', 'Theory'),
(25, 'General Science', 'Theory');

-- --------------------------------------------------------

--
-- Table structure for table `teacher_info`
--

CREATE TABLE `teacher_info` (
  `teacher_id` int(11) NOT NULL,
  `Name` text NOT NULL,
  `email_address` text NOT NULL,
  `phone_no` text NOT NULL,
  `date_of_birth` date NOT NULL,
  `salary` text NOT NULL,
  `subject_id` int(11) NOT NULL,
  `password` text NOT NULL
) ;

--
-- Dumping data for table `teacher_info`
--

INSERT INTO `teacher_info` (`teacher_id`, `Name`, `email_address`, `phone_no`, `date_of_birth`, `salary`, `subject_id`, `password`) VALUES
(1, 'Amin Sadiq', 'amin.sadiq@gmail.com', '03321572325', '1995-05-09', '250000', 4, 'm7iRwnL2'),
(10, 'Abeer Gauher', 'abeer.gauher@gmail.com', '03357283917', '1996-06-01', '200000', 3, '123456'),
(11, 'Jamil Usmani', 'jamil.usmani@gmail.com', '03332100761', '1979-06-23', '250000', 1, 'USQTWjbc'),
(12, 'Hamza Ahmed', 'hamza.ahmed@gmail.com', '03238459375', '1995-05-08', '130000', 18, 'shfUeCwx'),
(13, 'Shoaib Rauf', 'shoaib.rauf@gmail.com', '03457298361', '1978-05-12', '195000', 12, 'IZHj2g7W'),
(14, 'Nouman Durrani', 'nouman.durrani@gmail.com', '03258319572', '1976-05-11', '210000', 8, 'hvjsY4a8'),
(15, 'Talha', 'talha@gmail.com', '03315443252', '1985-05-09', '95000', 7, 't0W8qSgR'),
(16, 'Sohail Afzal', 'sohail.afzal@gmail.com', '03257381653', '1994-03-08', '210000', 17, 'vwgUqzhe'),
(17, 'Khusro Mian', 'khusro.mian@gmail.com', '03258312321', '2001-04-21', '190000', 22, 'MWqmZoJf'),
(18, 'Murtaza Abidi', 'murtaza.abidi@gmail.com', '090078601', '2000-08-26', '150000', 1, 'murtaza'),
(19, 'Atif Tahir', 'atif.tahir@gmail.com', '0335273849', '1983-04-25', '260000', 24, '9hGzfPS2'),
(20, 'Zulfiqar Ali Memon', 'zulfiqar.ali@gmail.com', '03237295723', '1982-02-01', '240000', 19, 'jfbLwvCW'),
(24, 'Abdul Rehman', 'abc@gmail.com', 'abc', '1988-01-01', '423000', 1, 'mUlsbOX2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `attendance`
--
ALTER TABLE `attendance`
  ADD PRIMARY KEY (`date`,`student_id`),
  ADD KEY `student_id` (`student_id`);

--
-- Indexes for table `class_info`
--
ALTER TABLE `class_info`
  ADD PRIMARY KEY (`class_id`),
  ADD UNIQUE KEY `class_teacher` (`class_teacher`);

--
-- Indexes for table `class_subjects`
--
ALTER TABLE `class_subjects`
  ADD PRIMARY KEY (`class_id`,`subject_id`),
  ADD KEY `subject_id` (`subject_id`);

--
-- Indexes for table `student_info`
--
ALTER TABLE `student_info`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email_address` (`email_address`) USING HASH,
  ADD KEY `Class_id` (`Class_id`);

--
-- Indexes for table `subject`
--
ALTER TABLE `subject`
  ADD PRIMARY KEY (`subject_id`);

--
-- Indexes for table `teacher_info`
--
ALTER TABLE `teacher_info`
  ADD PRIMARY KEY (`teacher_id`),
  ADD UNIQUE KEY `uniq_teacher_email_const` (`email_address`) USING HASH,
  ADD KEY `subject_id` (`subject_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `student_info`
--
ALTER TABLE `student_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `subject`
--
ALTER TABLE `subject`
  MODIFY `subject_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `teacher_info`
--
ALTER TABLE `teacher_info`
  MODIFY `teacher_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `attendance`
--
ALTER TABLE `attendance`
  ADD CONSTRAINT `attendance_ibfk_1` FOREIGN KEY (`student_id`) REFERENCES `student_info` (`id`);

--
-- Constraints for table `class_info`
--
ALTER TABLE `class_info`
  ADD CONSTRAINT `class_info_ibfk_1` FOREIGN KEY (`class_teacher`) REFERENCES `teacher_info` (`teacher_id`);

--
-- Constraints for table `class_subjects`
--
ALTER TABLE `class_subjects`
  ADD CONSTRAINT `class_subjects_ibfk_1` FOREIGN KEY (`class_id`) REFERENCES `class_info` (`class_id`),
  ADD CONSTRAINT `class_subjects_ibfk_2` FOREIGN KEY (`subject_id`) REFERENCES `subject` (`subject_id`);

--
-- Constraints for table `student_info`
--
ALTER TABLE `student_info`
  ADD CONSTRAINT `student_info_ibfk_1` FOREIGN KEY (`Class_id`) REFERENCES `class_info` (`class_id`);

--
-- Constraints for table `teacher_info`
--
ALTER TABLE `teacher_info`
  ADD CONSTRAINT `teacher_info_ibfk_1` FOREIGN KEY (`subject_id`) REFERENCES `subject` (`subject_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
