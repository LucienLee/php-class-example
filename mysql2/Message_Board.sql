-- phpMyAdmin SQL Dump
-- version 3.5.6
-- http://www.phpmyadmin.net
--
-- 主機: 127.0.0.1
-- 產生日期: 2013 年 07 月 08 日 00:29
-- 伺服器版本: 5.5.22
-- PHP 版本: 5.3.15

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 資料庫: `Message_Board`
--

-- --------------------------------------------------------

--
-- 表的結構 `message`
--

CREATE TABLE IF NOT EXISTS `message` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `text` text,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=4 ;

--
-- 轉存資料表中的資料 `message`
--

INSERT INTO `message` (`id`, `name`, `text`, `time`) VALUES
(1, 'Lucien', '為書感時樣外國機同時小種頭治年團龍過文、五自轉視腦，際比斯，愛死專親預料量政得制方事投到結個部在指自們院表國今觀進準們過代對市真爾難出老盡世發的之？說回全是邊能飛人、為三有人的視此題越，有清國好，最裡用無華外天的孩竟決呢建跑量年維白事取曾壓目關什福客標想非，沒文動就子中一賽者；生著正張轉管無導西要……病不地醫於發在大孩微一心參長護做重！自時們。\r\n\r\n神而放得當；開家像內木然。園開陽能不者研受加覺推長個，自一個率在陽謝自站實當車頭意他！血全聲成，時頭晚兒信力。\r\n', '2013-07-06 17:12:33'),
(2, 'qweqw', '病不地醫於發在大孩微一心參長護做重！自時們。 神而放得當；開家像內木然。園開陽能不者研受加覺推長個，自一個率在陽謝自站實當車頭意他！血全聲成，時頭晚兒信力。', '2013-07-07 10:20:28');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
