-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 01, 2020 at 06:24 PM
-- Server version: 5.1.53
-- PHP Version: 5.3.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `srms`
--

-- --------------------------------------------------------

--
-- Table structure for table `semester`
--

CREATE TABLE IF NOT EXISTS `semester` (
  `sem_id` int(11) NOT NULL AUTO_INCREMENT,
  `sem` varchar(100) NOT NULL,
  PRIMARY KEY (`sem_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `semester`
--

INSERT INTO `semester` (`sem_id`, `sem`) VALUES
(1, 'Ist Semester'),
(2, 'IInd Semester'),
(3, 'IIIrd Semester'),
(4, 'IVth Semester'),
(5, 'Vth Semester'),
(6, 'VIth Semester'),
(7, 'VIIth Semester'),
(8, 'VIIIth Semester');

-- --------------------------------------------------------

--
-- Table structure for table `semester1`
--

CREATE TABLE IF NOT EXISTS `semester1` (
  `sno` int(11) NOT NULL AUTO_INCREMENT,
  `subject` varchar(100) NOT NULL,
  `teacher_id` int(10) NOT NULL,
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `semester1`
--

INSERT INTO `semester1` (`sno`, `subject`, `teacher_id`) VALUES
(1, 'maths', 120),
(2, 'c++', 122),
(3, 'c', 120);

-- --------------------------------------------------------

--
-- Table structure for table `semester1_marks`
--

CREATE TABLE IF NOT EXISTS `semester1_marks` (
  `sno` int(11) NOT NULL AUTO_INCREMENT,
  `subject` varchar(100) NOT NULL,
  `internal` int(10) NOT NULL,
  `external` int(10) NOT NULL,
  `student_id` int(11) NOT NULL,
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `semester1_marks`
--

INSERT INTO `semester1_marks` (`sno`, `subject`, `internal`, `external`, `student_id`) VALUES
(1, 'maths', 26, 55, 115),
(2, 'c', 29, 65, 115),
(3, 'maths', 16, 55, 150),
(4, 'c', 24, 55, 150);

-- --------------------------------------------------------

--
-- Table structure for table `semester2`
--

CREATE TABLE IF NOT EXISTS `semester2` (
  `sno` int(11) NOT NULL AUTO_INCREMENT,
  `subject` varchar(100) NOT NULL,
  `teacher_id` int(10) NOT NULL,
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `semester2`
--


-- --------------------------------------------------------

--
-- Table structure for table `semester2_marks`
--

CREATE TABLE IF NOT EXISTS `semester2_marks` (
  `sno` int(11) NOT NULL AUTO_INCREMENT,
  `subject` varchar(100) NOT NULL,
  `internal` int(10) NOT NULL,
  `external` int(10) NOT NULL,
  `student_id` int(10) NOT NULL,
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `semester2_marks`
--


-- --------------------------------------------------------

--
-- Table structure for table `semester3`
--

CREATE TABLE IF NOT EXISTS `semester3` (
  `sno` int(11) NOT NULL AUTO_INCREMENT,
  `subject` varchar(100) NOT NULL,
  `teacher_id` varchar(100) NOT NULL,
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `semester3`
--

INSERT INTO `semester3` (`sno`, `subject`, `teacher_id`) VALUES
(1, 'os', '124');

-- --------------------------------------------------------

--
-- Table structure for table `semester3_marks`
--

CREATE TABLE IF NOT EXISTS `semester3_marks` (
  `sno` int(11) NOT NULL AUTO_INCREMENT,
  `subject` varchar(100) NOT NULL,
  `internal` int(10) NOT NULL,
  `external` int(10) NOT NULL,
  `student_id` int(10) NOT NULL,
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `semester3_marks`
--


-- --------------------------------------------------------

--
-- Table structure for table `semester4`
--

CREATE TABLE IF NOT EXISTS `semester4` (
  `sno` int(11) NOT NULL AUTO_INCREMENT,
  `subject` varchar(100) NOT NULL,
  `teacher_id` varchar(100) NOT NULL,
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `semester4`
--

INSERT INTO `semester4` (`sno`, `subject`, `teacher_id`) VALUES
(1, 'system software', '125');

-- --------------------------------------------------------

--
-- Table structure for table `semester4_marks`
--

CREATE TABLE IF NOT EXISTS `semester4_marks` (
  `sno` int(11) NOT NULL AUTO_INCREMENT,
  `subject` varchar(100) NOT NULL,
  `internal` int(10) NOT NULL,
  `external` int(10) NOT NULL,
  `student_id` int(10) NOT NULL,
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `semester4_marks`
--


-- --------------------------------------------------------

--
-- Table structure for table `semester5`
--

CREATE TABLE IF NOT EXISTS `semester5` (
  `sno` int(11) NOT NULL AUTO_INCREMENT,
  `subject` varchar(100) NOT NULL,
  `teacher_id` varchar(100) NOT NULL,
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `semester5`
--


-- --------------------------------------------------------

--
-- Table structure for table `semester5_marks`
--

CREATE TABLE IF NOT EXISTS `semester5_marks` (
  `sno` int(11) NOT NULL AUTO_INCREMENT,
  `subject` varchar(100) NOT NULL,
  `internal` int(10) NOT NULL,
  `external` int(10) NOT NULL,
  `student_id` int(10) NOT NULL,
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `semester5_marks`
--


-- --------------------------------------------------------

--
-- Table structure for table `semester6`
--

CREATE TABLE IF NOT EXISTS `semester6` (
  `sno` int(11) NOT NULL AUTO_INCREMENT,
  `subject` varchar(100) NOT NULL,
  `teacher_id` varchar(100) NOT NULL,
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `semester6`
--


-- --------------------------------------------------------

--
-- Table structure for table `semester6_marks`
--

CREATE TABLE IF NOT EXISTS `semester6_marks` (
  `sno` int(11) NOT NULL AUTO_INCREMENT,
  `subject` varchar(100) NOT NULL,
  `internal` int(10) NOT NULL,
  `external` int(10) NOT NULL,
  `student_id` int(10) NOT NULL,
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `semester6_marks`
--


-- --------------------------------------------------------

--
-- Table structure for table `semester7`
--

CREATE TABLE IF NOT EXISTS `semester7` (
  `sno` int(11) NOT NULL AUTO_INCREMENT,
  `subject` varchar(100) NOT NULL,
  `teacher_id` varchar(100) NOT NULL,
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `semester7`
--


-- --------------------------------------------------------

--
-- Table structure for table `semester7_marks`
--

CREATE TABLE IF NOT EXISTS `semester7_marks` (
  `sno` int(11) NOT NULL AUTO_INCREMENT,
  `subject` varchar(100) NOT NULL,
  `internal` int(10) NOT NULL,
  `external` int(10) NOT NULL,
  `student_id` int(10) NOT NULL,
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `semester7_marks`
--


-- --------------------------------------------------------

--
-- Table structure for table `semester8`
--

CREATE TABLE IF NOT EXISTS `semester8` (
  `sno` int(11) NOT NULL AUTO_INCREMENT,
  `subject` varchar(100) NOT NULL,
  `teacher_id` varchar(100) NOT NULL,
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `semester8`
--


-- --------------------------------------------------------

--
-- Table structure for table `semester8_marks`
--

CREATE TABLE IF NOT EXISTS `semester8_marks` (
  `sno` int(11) NOT NULL AUTO_INCREMENT,
  `subject` varchar(100) NOT NULL,
  `internal` int(10) NOT NULL,
  `external` int(10) NOT NULL,
  `student_id` int(10) NOT NULL,
  PRIMARY KEY (`sno`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Dumping data for table `semester8_marks`
--


-- --------------------------------------------------------

--
-- Table structure for table `student_logindetails`
--

CREATE TABLE IF NOT EXISTS `student_logindetails` (
  `student_id` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(100) NOT NULL,
  `Id` int(11) NOT NULL,
  `Semester` varchar(100) NOT NULL,
  `Date_of_Birth` varchar(100) NOT NULL,
  `Gender` varchar(100) NOT NULL,
  `Password` varchar(100) NOT NULL,
  PRIMARY KEY (`student_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `student_logindetails`
--

INSERT INTO `student_logindetails` (`student_id`, `Name`, `Id`, `Semester`, `Date_of_Birth`, `Gender`, `Password`) VALUES
(1, 'nadeem', 115, 'Ist Semester', '1998-12-05', 'male', '81dc9bdb52d04dc20036dbd8313ed055'),
(4, 'abdul', 150, 'Ist Semester', '1998-05-15', 'male', '81dc9bdb52d04dc20036dbd8313ed055');

-- --------------------------------------------------------

--
-- Table structure for table `teacher_login`
--

CREATE TABLE IF NOT EXISTS `teacher_login` (
  `t_id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `teacher_id` int(100) NOT NULL,
  `gender` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`t_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `teacher_login`
--

INSERT INTO `teacher_login` (`t_id`, `name`, `teacher_id`, `gender`, `password`) VALUES
(1, 'Ihtiram raza', 120, 'male', '81dc9bdb52d04dc20036dbd8313ed055'),
(3, 'piyush kumar gupta', 121, 'male', '827ccb0eea8a706c4c34a16891f84e7b'),
(4, 'imran', 122, 'male', '827ccb0eea8a706c4c34a16891f84e7b'),
(5, 'gautami triphati', 123, 'female', 'e10adc3949ba59abbe56e057f20f883e'),
(6, 'nida', 124, 'female', '827ccb0eea8a706c4c34a16891f84e7b'),
(7, 'mohd. ahad', 125, 'male', '202cb962ac59075b964b07152d234b70');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`) VALUES
(1, 'saif ali', 'saifali130998@gmail.com', '81dc9bdb52d04dc20036dbd8313ed055');
