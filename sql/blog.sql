-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2017-10-10 10:51:09
-- 服务器版本： 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `blog`
--

-- --------------------------------------------------------

--
-- 表的结构 `bg_admin`
--

CREATE TABLE IF NOT EXISTS `bg_admin` (
  `admin_id` tinyint(3) unsigned NOT NULL AUTO_INCREMENT,
  `admin_name` varchar(20) CHARACTER SET latin1 NOT NULL,
  `admin_pass` char(32) CHARACTER SET latin1 NOT NULL,
  `login_ip` varchar(15) CHARACTER SET latin1 NOT NULL,
  `login_nums` int(10) unsigned NOT NULL DEFAULT '0',
  `login_time` int(10) unsigned NOT NULL,
  PRIMARY KEY (`admin_id`),
  UNIQUE KEY `admin_name` (`admin_name`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- 转存表中的数据 `bg_admin`
--

INSERT INTO `bg_admin` (`admin_id`, `admin_name`, `admin_pass`, `login_ip`, `login_nums`, `login_time`) VALUES
(1, 'poorpenguin', 'e10adc3949ba59abbe56e057f20f883e', '127.0.0.1', 0, 1507518260);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
