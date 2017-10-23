-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: 2017-10-22 15:51:17
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
(1, 'poorpenguin', 'e10adc3949ba59abbe56e057f20f883e', '::1', 10, 1508675501);

-- --------------------------------------------------------

--
-- 表的结构 `bg_category`
--

CREATE TABLE IF NOT EXISTS `bg_category` (
  `cate_id` smallint(5) unsigned NOT NULL AUTO_INCREMENT COMMENT '主键id',
  `cate_name` varchar(20) NOT NULL COMMENT '分类名称',
  `cate_pid` smallint(5) unsigned NOT NULL COMMENT '父分类的主键id',
  `cate_sort` smallint(5) unsigned NOT NULL COMMENT '分类排序',
  `cate_desc` varchar(255) DEFAULT NULL COMMENT '分类描述',
  PRIMARY KEY (`cate_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=11 ;

--
-- 转存表中的数据 `bg_category`
--

INSERT INTO `bg_category` (`cate_id`, `cate_name`, `cate_pid`, `cate_sort`, `cate_desc`) VALUES
(1, '慢生活', 0, 1, '记录生活琐事的主分类'),
(2, '网站开发学习笔记', 0, 2, '学习笔记的主分类'),
(4, '健身日志', 1, 2, '健身是一种生活方式，更是一种生活态度'),
(6, 'PHP学习笔记', 2, 2, '记录PHP的心得'),
(7, 'HTML+CSS笔记', 2, 1, '学习HTML+CSS的心得');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
