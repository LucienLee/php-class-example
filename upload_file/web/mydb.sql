-- phpMyAdmin SQL Dump
-- version 2.10.3
-- http://www.phpmyadmin.net
-- 
-- 主機: localhost
-- 建立日期: Apr 16, 2013, 12:10 PM
-- 伺服器版本: 5.0.51
-- PHP 版本: 5.2.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";

-- 
-- 資料庫: `mydb`
-- 
CREATE DATABASE `mydb` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `mydb`;

-- --------------------------------------------------------

-- 
-- 資料表格式： `files`
-- 

CREATE TABLE `files` (
  `fid` int(10) NOT NULL auto_increment,
  `name` varchar(50) NOT NULL,
  `path` varchar(50) NOT NULL,
  `size` int(10) NOT NULL,
  PRIMARY KEY  (`fid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- 
-- 列出以下資料庫的數據： `files`
-- 


-- --------------------------------------------------------

-- 
-- 資料表格式： `users`
-- 

CREATE TABLE `users` (
  `uid` int(10) NOT NULL auto_increment,
  `account` varchar(20) NOT NULL,
  `email` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  PRIMARY KEY  (`uid`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=3 ;

-- 
-- 列出以下資料庫的數據： `users`
-- 

INSERT INTO `users` VALUES (2, 'guest', 'guest@gmail.com', 'guest');
