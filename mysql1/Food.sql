-- phpMyAdmin SQL Dump
-- version 3.5.6
-- http://www.phpmyadmin.net
--
-- 主机: 127.0.0.1
-- 生成日期: 2013 年 08 月 11 日 02:53
-- 服务器版本: 5.5.22
-- PHP 版本: 5.3.15

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `restaurant`
--

-- --------------------------------------------------------

--
-- 表的结构 `Food`
--

CREATE TABLE IF NOT EXISTS `Food` (
  `FoodID` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(32) NOT NULL,
  `Price` int(11) NOT NULL,
  `Store` int(11) NOT NULL,
  PRIMARY KEY (`FoodID`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=17 ;

--
-- 转存表中的数据 `Food`
--

INSERT INTO `Food` (`FoodID`, `Name`, `Price`, `Store`) VALUES
(1, '摩卡咖啡', 100, 2),
(2, '豬肉漢堡', 40, 7),
(3, '紅燒牛肉麵', 130, 3),
(4, '排骨麵', 100, 3),
(5, '乾拌麵', 30, 4),
(6, '宮保雞丁', 100, 6),
(7, '菜脯蛋', 120, 6),
(8, '起司蛋糕', 90, 5),
(9, '餛飩麵', 50, 4),
(10, '黑白切', 80, 8),
(11, '滷雞腿飯', 95, 1),
(12, '蛋餅', 30, 7),
(13, '伯爵奶茶', 90, 2),
(14, '卡布奇諾', 130, 5),
(15, '番茄蛋花湯', 60, 1),
(16, '布丁', 234, 99);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
