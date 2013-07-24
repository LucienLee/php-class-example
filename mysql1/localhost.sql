-- phpMyAdmin SQL Dump
-- version 2.10.3
-- http://www.phpmyadmin.net
-- 
-- 主機: localhost
-- 建立日期: Mar 26, 2013, 01:09 PM
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
  `address` varchar(50) collate utf8_unicode_ci NOT NULL,
  PRIMARY KEY  (`id`),
  KEY `name` (`name`,`sex`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- 
-- 列出以下資料庫的數據： `profile`
-- 

INSERT INTO `profile` VALUES ('E123456789', '王小名', 1, '台北市羅斯福路四段一號');
INSERT INTO `profile` VALUES ('E123456788', '馬英丸', 1, '台北市中正區重慶南路一段122號');
INSERT INTO `profile` VALUES ('E123456787', '馬央丸', 1, '台北市中正區重慶南路一段123號');
INSERT INTO `profile` VALUES ('A124087975', '王大明', 2, '台北市大明路大明街');
INSERT INTO `profile` VALUES ('E12456777', '王曉華', 2, '新北市新店區中正路');
INSERT INTO `profile` VALUES ('E124588664', '陳曉華', 2, '新北市新店區中華路2段');
INSERT INTO `profile` VALUES ('E124567664', '陳曉華', 2, '新北市新店區中華路');
INSERT INTO `profile` VALUES ('B12312566', '胖虎', 1, '台北市羅斯福路一段2號');
