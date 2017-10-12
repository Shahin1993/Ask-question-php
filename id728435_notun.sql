-- phpMyAdmin SQL Dump
-- version 4.1.12
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jul 05, 2017 at 03:03 AM
-- Server version: 5.6.16
-- PHP Version: 5.5.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `bitm_1`
--

-- --------------------------------------------------------

--
-- Table structure for table `answer_tbl`
--

CREATE TABLE IF NOT EXISTS `answer_tbl` (
  `id` int(21) NOT NULL AUTO_INCREMENT,
  `u_answer` varchar(255) NOT NULL,
  `q_id` int(25) NOT NULL,
  `u_id` int(23) NOT NULL,
  `a_date` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Dumping data for table `answer_tbl`
--

INSERT INTO `answer_tbl` (`id`, `u_answer`, `q_id`, `u_id`, `a_date`) VALUES
(1, '<p>mnbvvcxzfgfgnbgh<br></p>', 1, 26, '2017-06-14'),
(2, '<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; xcZXC<br></p>', 10, 25, '2017-06-18'),
(3, '<p>df<br></p>', 10, 27, '2017-06-19'),
(4, '<p>cgvhbndfgvhbj<br></p>', 1, 27, '2017-06-19'),
(5, '<p>à¦†à¦®à¦¾à¦° à¦¸à§‹à¦¨à¦¾à¦° à¦¬à¦¾à¦‚à¦²à¦¾<br></p>', 1, 27, '2017-06-19');

-- --------------------------------------------------------

--
-- Table structure for table `question_tbl`
--

CREATE TABLE IF NOT EXISTS `question_tbl` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(255) NOT NULL,
  `q_description` varchar(255) NOT NULL,
  `p_date` date NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `question_tbl`
--

INSERT INTO `question_tbl` (`id`, `title`, `q_description`, `p_date`, `username`, `email`) VALUES
(1, 'sdfghjjk', '<p><strong>Lorem Ipsum</strong> is simply dummy text of the printing and \r\ntypesetting industry. Lorem Ipsum has been the industry''s standard dummy\r\n text ever since the 1500s, when an unknown printer took a galley of \r\ntype and scrambled it to make a typ', '2017-06-13', '0', ''),
(2, 'asdsgds', '<p>vdsfdbbbb<br></p>', '2017-07-02', 'dhdhd', '');

-- --------------------------------------------------------

--
-- Table structure for table `user_tbl`
--

CREATE TABLE IF NOT EXISTS `user_tbl` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `is_admin` tinyint(4) NOT NULL,
  `password` varchar(255) NOT NULL,
  `create_at` datetime NOT NULL,
  `update_at` datetime NOT NULL,
  `delete_at` datetime NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=29 ;

--
-- Dumping data for table `user_tbl`
--

INSERT INTO `user_tbl` (`id`, `username`, `email`, `is_admin`, `password`, `create_at`, `update_at`, `delete_at`) VALUES
(2, 'shahin', 'hossen.shahin@ymail.com', 1, 'shahin', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(4, ' durjoy bb', ' shahin.chf@gmail.com', 0, '1234', '2017-04-19 07:04:13', '2017-04-20 09:04:23', '0000-00-00 00:00:00'),
(5, 'shahin-durjoy', ' hossen.shahin@ymail.com', 0, '1234', '2017-04-20 09:04:28', '2017-04-21 09:04:52', '0000-00-00 00:00:00'),
(6, ' admin', ' shahin.bhola@gmail.com', 0, 'shah', '2017-04-20 01:04:01', '2017-04-20 10:04:54', '0000-00-00 00:00:00'),
(12, 'Emtaiz', 'emtiaz@gmail.com', 0, '1234', '2017-04-20 10:04:10', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(13, ' likhon', ' likhon@gmail.com', 0, '1234', '2017-04-20 10:04:38', '2017-04-21 04:04:19', '0000-00-00 00:00:00'),
(18, 'dada', 'shahin.chf@gmail.com', 0, '123', '2017-04-20 11:04:01', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(19, ' shahin', ' shahin.chf@gmail.com', 0, '123', '2017-04-21 02:04:35', '2017-04-21 05:04:54', '0000-00-00 00:00:00'),
(20, 'admin', ' sabuj2@gmail.comdddd', 0, '121', '2017-04-21 05:04:58', '2017-04-22 01:04:29', '0000-00-00 00:00:00'),
(22, 'ami', ' amin@ymail.comas', 0, 'ami', '2017-04-22 06:04:12', '2017-04-22 06:04:39', '0000-00-00 00:00:00'),
(23, 'manik', 'manik@gmail.com', 0, 'manik', '2017-04-22 11:04:28', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(24, 'dhdh', ' shahin.chf@gmail.com', 0, '121', '2017-04-23 07:04:18', '2017-04-23 09:04:46', '0000-00-00 00:00:00'),
(25, 'shahin', ' sahin.mj@gmail.com', 0, '121', '2017-04-23 02:04:49', '2017-04-25 05:04:25', '0000-00-00 00:00:00'),
(27, 'dhdhd', 'shahin.chf@gmail.com', 0, '321', '2017-06-18 08:06:55', '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(28, 'durjoy', 'shahin.chf@gmail.com', 0, '121212', '2017-06-20 08:06:02', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
