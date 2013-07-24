-- phpMyAdmin SQL Dump
-- version 2.10.3
-- http://www.phpmyadmin.net
-- 
-- 主機: localhost
-- 建立日期: Apr 09, 2013, 01:21 PM
-- 伺服器版本: 5.0.51
-- PHP 版本: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- 資料庫: `users`
-- 
CREATE DATABASE `users` DEFAULT CHARACTER SET utf8 COLLATE utf8_unicode_ci;
USE `users`;

-- --------------------------------------------------------

-- 
-- 資料表格式： `profile`
-- 

CREATE TABLE `profile` (
  `id` varchar(10) collate utf8_unicode_ci NOT NULL,
  `name` varchar(10) collate utf8_unicode_ci NOT NULL,
  `sex` int(1) NOT NULL,
  `school` int(11) NOT NULL,
  `address` varchar(50) collate utf8_unicode_ci NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `name` (`name`,`sex`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- 
-- 列出以下資料庫的數據： `profile`
-- 

INSERT INTO `profile` VALUES ('E123456789', '王小名', 1, 0, '台北市羅斯福路四段一號');
INSERT INTO `profile` VALUES ('E123456788', '馬英丸', 1, 0, '台北市中正區重慶南路一段122號');
INSERT INTO `profile` VALUES ('E123456787', '馬央丸', 1, 0, '台北市中正區重慶南路一段123號');
INSERT INTO `profile` VALUES ('A124087975', '王大明', 2, 0, '台北市大明路大明街');
INSERT INTO `profile` VALUES ('E12456777', '王曉華', 2, 0, '新北市新店區中正路');
INSERT INTO `profile` VALUES ('E124588664', '陳曉華', 2, 0, '新北市新店區中華路2段');
INSERT INTO `profile` VALUES ('E124567664', '陳曉華', 2, 0, '新北市新店區中華路');
INSERT INTO `profile` VALUES ('B12312566', '胖虎', 1, 0, '台北市羅斯福路一段2號');
INSERT INTO `profile` VALUES ('A12313c', '王建民', 2, 0, '羅斯福路三段五號');
INSERT INTO `profile` VALUES ('E11234814', '陳大名', 0, 0, '羅斯福路四段一號');
INSERT INTO `profile` VALUES ('E12345555', '陳大名', 1, 0, 'eee');
INSERT INTO `profile` VALUES ('E123123123', '王忠明', 1, 0, '基隆路');
INSERT INTO `profile` VALUES ('E12344885', '王大', 1, 1, '辛亥路');
INSERT INTO `profile` VALUES ('E1231255', '王中二', 1, 3, '新生南路');
INSERT INTO `profile` VALUES ('E1235778', '望二', 1, 17, '辛亥路');
INSERT INTO `profile` VALUES ('1123', '333', 1, 0, '23c23c');

-- --------------------------------------------------------

-- 
-- 資料表格式： `school`
-- 

CREATE TABLE `school` (
  `sid` int(11) NOT NULL auto_increment,
  `name` varchar(20) collate utf8_unicode_ci NOT NULL,
  PRIMARY KEY  (`sid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=21 ;

-- 
-- 列出以下資料庫的數據： `school`
-- 

INSERT INTO `school` VALUES (0, '交通大學');
INSERT INTO `school` VALUES (1, '清華大學');
INSERT INTO `school` VALUES (3, '台灣大學');
INSERT INTO `school` VALUES (13, '政治大學');
INSERT INTO `school` VALUES (14, '師範大學');
INSERT INTO `school` VALUES (15, '台灣科技大學');
INSERT INTO `school` VALUES (16, '台北大學');
INSERT INTO `school` VALUES (17, '成功大學');
INSERT INTO `school` VALUES (18, '中山大學');
INSERT INTO `school` VALUES (19, '高雄大學');
INSERT INTO `school` VALUES (20, '輔仁大學');
