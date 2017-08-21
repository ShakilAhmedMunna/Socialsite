-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 15, 2015 at 07:13 PM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `friend_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

CREATE TABLE IF NOT EXISTS `comment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `post_id` int(15) NOT NULL,
  `comment` varchar(255) NOT NULL,
  `user_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=236 ;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id`, `post_id`, `comment`, `user_id`) VALUES
(198, 15, 'ggggg', 6),
(199, 15, 'dfd', 6),
(200, 15, 'dvxdvx', 6),
(201, 15, 'dd', 6),
(202, 15, 'hhhfd', 4),
(203, 15, ' dddfdf', 4),
(204, 15, ' ddf', 4),
(205, 15, 'fdfd', 4),
(206, 16, 'hi', 6),
(207, 17, 'hellow', 4),
(208, 17, 'helloq', 4),
(209, 15, 'hi', 4),
(210, 18, 'ff', 6),
(211, 18, ' sd', 6),
(212, 18, ' sdsds', 6),
(213, 19, 'hi dhlkdhlksdhkldh dfdfdsds dfdsfdsfdsfdfdsf dkfdjsflkds cjsdkfds  dsdhkdsh  ddskj dcj', 6),
(214, 16, 'hello', 6),
(215, 16, ' how are u', 6),
(216, 19, 'hi', 6),
(217, 19, ' dd', 6),
(218, 15, 'tooohhhhhhhhh....', 6),
(219, 15, 'del', 6),
(220, 15, ' asd', 6),
(221, 17, 'hellow', 6),
(222, 15, 'hee', 6),
(223, 15, ' kjk', 6),
(224, 15, 'ggg', 4),
(225, 21, 'hi', 6),
(226, 16, 'hg', 6),
(227, 20, 'what', 6),
(228, 22, 'hmmm', 6),
(229, 23, 'hello every one ', 8),
(230, 25, 'hellow', 9),
(231, 24, 'ok', 9),
(232, 25, 'ok ansar', 6),
(233, 25, 'hi', 6),
(234, 16, 'hi', 4),
(235, 16, ' fd', 4);

-- --------------------------------------------------------

--
-- Table structure for table `frnds`
--

CREATE TABLE IF NOT EXISTS `frnds` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_one` int(11) NOT NULL,
  `user_two` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `frnds`
--

INSERT INTO `frnds` (`id`, `user_one`, `user_two`) VALUES
(1, 2, 1),
(3, 4, 1),
(4, 2, 6),
(5, 4, 5),
(6, 8, 2),
(7, 9, 6),
(8, 4, 6);

-- --------------------------------------------------------

--
-- Table structure for table `frnd_reg`
--

CREATE TABLE IF NOT EXISTS `frnd_reg` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `from` int(11) NOT NULL,
  `to` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `frnd_reg`
--

INSERT INTO `frnd_reg` (`id`, `from`, `to`) VALUES
(3, 4, 2),
(6, 8, 3);

-- --------------------------------------------------------

--
-- Table structure for table `messages`
--

CREATE TABLE IF NOT EXISTS `messages` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `group_hash` int(15) NOT NULL,
  `from_id` int(11) NOT NULL,
  `messages` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=47 ;

--
-- Dumping data for table `messages`
--

INSERT INTO `messages` (`id`, `group_hash`, `from_id`, `messages`) VALUES
(34, 31048, 6, ''),
(35, 31048, 6, 'bdgdgdg'),
(36, 31048, 6, ''),
(37, 31048, 6, ''),
(38, 17377, 6, ''),
(39, 17377, 6, 'gsdgdgd'),
(40, 17377, 6, ''),
(41, 17377, 6, ''),
(42, 17377, 6, ''),
(43, 29198, 6, 'iyuiy'),
(44, 29198, 6, 'kkk'),
(45, 3055, 6, 'jguguyg'),
(46, 17377, 6, 'jhhh');

-- --------------------------------------------------------

--
-- Table structure for table `messagesbox`
--

CREATE TABLE IF NOT EXISTS `messagesbox` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `from` int(11) NOT NULL,
  `to` int(11) NOT NULL,
  `messages` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=87 ;

--
-- Dumping data for table `messagesbox`
--

INSERT INTO `messagesbox` (`id`, `from`, `to`, `messages`) VALUES
(30, 4, 5, 'ok gooooooooooooood bye'),
(31, 5, 4, 'hjjjjjjj'),
(32, 5, 4, 'hellow'),
(33, 4, 5, 'hellow'),
(34, 4, 5, 'wsw'),
(35, 4, 5, 'wsw'),
(36, 4, 5, 'wsw'),
(37, 4, 5, 'wsw'),
(38, 4, 5, 'wsw'),
(39, 4, 5, 'hi\r\n'),
(40, 4, 5, 'dddddddddddddddddddddddddddddddddddd'),
(41, 0, 5, 'goood bye roy '),
(42, 6, 2, 'good morning ...........'),
(43, 2, 6, 'ok'),
(44, 2, 6, 'ok'),
(45, 2, 6, 'ok'),
(46, 6, 2, 'd'),
(47, 6, 2, 'ddf'),
(48, 6, 2, 'hellow'),
(49, 2, 6, 'hi'),
(50, 2, 6, 'how are u'),
(51, 2, 6, 'how are u'),
(52, 2, 6, 'how are u'),
(53, 2, 6, 'how are u'),
(54, 2, 6, 'how are u'),
(55, 2, 6, 'how are u'),
(56, 2, 6, 'how are u'),
(57, 2, 6, 'how are u'),
(58, 2, 6, 'how are u'),
(59, 2, 6, 'how are u'),
(60, 2, 6, 'form test'),
(61, 2, 6, 'form test'),
(62, 2, 6, 'form test'),
(63, 2, 6, 'form test'),
(64, 2, 6, 'form test'),
(65, 2, 6, 'form test'),
(66, 2, 6, 'form test'),
(67, 2, 6, 'ok good test'),
(68, 2, 6, 'ok good test'),
(69, 2, 6, 'jjjjj'),
(70, 2, 6, 'jjjjj'),
(71, 2, 6, 'ghfghfghgf'),
(72, 2, 6, 'hfghgf'),
(73, 2, 6, 'ghghg'),
(74, 2, 6, 'ghgfh'),
(75, 2, 6, 'jjhj'),
(76, 2, 6, 'jjhj'),
(77, 2, 6, 'jjhj'),
(78, 6, 2, 'hi'),
(79, 6, 2, 'hi'),
(80, 6, 2, 'hellow'),
(81, 2, 6, 'ok'),
(82, 6, 2, 'hi fardu'),
(83, 6, 9, 'hi ansar'),
(84, 6, 2, 'hi'),
(85, 6, 4, 'hi topu'),
(86, 4, 6, 'hello');

-- --------------------------------------------------------

--
-- Table structure for table `message_group`
--

CREATE TABLE IF NOT EXISTS `message_group` (
  `user_one` int(11) NOT NULL,
  `user_two` int(11) NOT NULL,
  `hash` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `message_group`
--

INSERT INTO `message_group` (`user_one`, `user_two`, `hash`) VALUES
(6, 7, 31048),
(6, 4, 17377),
(6, 6, 29198),
(6, 2, 3055);

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE IF NOT EXISTS `post` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `post` longtext NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `user_id`, `post`, `date`, `time`) VALUES
(15, 4, 'my first stats ........ ', '2015-09-03', '11:29:19'),
(16, 6, 'shakil bhai mbbs ', '2015-09-06', '08:05:00'),
(17, 6, 'dksddsfsdjf<br />\r\n ', '2015-09-06', '20:28:37'),
(18, 6, 'csfsdf ', '2015-09-06', '21:01:39'),
(19, 6, 'hi baby ', '2015-09-06', '21:12:06'),
(20, 6, 'ghg ', '2015-09-08', '07:39:37'),
(21, 6, 'hellow ', '2015-09-08', '09:19:31'),
(22, 6, 'ok ..i done my work ... ', '2015-09-08', '21:22:43'),
(23, 8, 'Hi i am Shakil ', '2015-09-09', '06:29:09'),
(24, 9, 'hellow i am ansar uddin  ', '2015-09-09', '06:48:37'),
(25, 9, 'ok  ', '2015-09-09', '06:50:38');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `url`) VALUES
(2, 'fardayek', 'e10adc3949ba59abbe56e057f20f883e', '29981.jpg'),
(4, 'topu', '088b9ea122c922c8c8c1bed586f4824d', ''),
(5, 'roy', 'd4c285227493531d0577140a1ed03964', '14174.jpg'),
(6, 'Shakil', 'fbf832bc8d7e746434993cec0061a682', '24157.jpg'),
(7, 'go', '34d1f91fb2e514b8576fab1a75a89a6b', '24459.jpg'),
(8, 'shakil', '0efefbadb1c04a9a1cf4c222c8ace1ad', '29981.jpg'),
(9, 'ansar', '3fb3c4253fbc96c1f6c9647e9c5d0bd3', '22029.jpg');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
