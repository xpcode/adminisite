-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2014-03-02 04:15:19
-- 服务器版本: 5.6.14
-- PHP 版本: 5.5.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `adminisite`
--
CREATE DATABASE IF NOT EXISTS `adminisite` DEFAULT CHARACTER SET utf8 COLLATE utf8_general_ci;
USE `adminisite`;

-- --------------------------------------------------------

--
-- 表的结构 `adposition`
--

DROP TABLE IF EXISTS `adposition`;
CREATE TABLE IF NOT EXISTS `adposition` (
  `id` int(11) NOT NULL,
  `channel_id` int(11) NOT NULL,
  `adorder` int(11) NOT NULL,
  `title` varchar(64) NOT NULL,
  `filename` varchar(64) NOT NULL,
  `url` varchar(512) NOT NULL,
  `modify_datetime` datetime NOT NULL COMMENT '更新时间',
  PRIMARY KEY (`id`),
  KEY `channel_id` (`channel_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='广告位表';

--
-- 插入之前先把表清空（truncate） `adposition`
--

TRUNCATE TABLE `adposition`;
-- --------------------------------------------------------

--
-- 表的结构 `area`
--

DROP TABLE IF EXISTS `area`;
CREATE TABLE IF NOT EXISTS `area` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(64) NOT NULL,
  `url` varchar(512) NOT NULL,
  `tel` varchar(64) NOT NULL,
  `fax` varchar(64) NOT NULL,
  `addr` varchar(256) NOT NULL,
  `modify_datetime` datetime NOT NULL COMMENT '更新时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- 插入之前先把表清空（truncate） `area`
--

TRUNCATE TABLE `area`;
-- --------------------------------------------------------

--
-- 表的结构 `article`
--

DROP TABLE IF EXISTS `article`;
CREATE TABLE IF NOT EXISTS `article` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `channel_id` int(11) NOT NULL COMMENT '所属频道id',
  `title` varchar(128) NOT NULL,
  `img` varchar(64) NOT NULL COMMENT '文章附属图',
  `intro` varchar(512) NOT NULL COMMENT '简介文字',
  `content` varchar(2048) NOT NULL COMMENT '详细内容',
  `modify_datetime` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `channel_id` (`channel_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- 插入之前先把表清空（truncate） `article`
--

TRUNCATE TABLE `article`;
-- --------------------------------------------------------

--
-- 表的结构 `channel`
--

DROP TABLE IF EXISTS `channel`;
CREATE TABLE IF NOT EXISTS `channel` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pid` int(11) NOT NULL COMMENT '父级频道id',
  `name` varchar(64) NOT NULL COMMENT '频道名字',
  `chorder` int(11) NOT NULL COMMENT '排序',
  `modify_datetime` datetime NOT NULL COMMENT '更新时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=6 ;

--
-- 插入之前先把表清空（truncate） `channel`
--

TRUNCATE TABLE `channel`;
--
-- 转存表中的数据 `channel`
--

INSERT INTO `channel` (`id`, `pid`, `name`, `chorder`, `modify_datetime`) VALUES
(1, 0, '首页', 1, '2014-03-02 00:00:00'),
(2, 0, '产品服务', 2, '2014-03-02 00:00:00'),
(3, 0, '案例展示', 3, '2014-03-02 00:00:00'),
(4, 0, '营销动态', 4, '2014-03-02 00:00:00'),
(5, 0, '业务联系', 5, '2014-03-02 00:00:00');

-- --------------------------------------------------------

--
-- 表的结构 `contact`
--

DROP TABLE IF EXISTS `contact`;
CREATE TABLE IF NOT EXISTS `contact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `channel_id` int(11) NOT NULL,
  `name` varchar(32) NOT NULL,
  `tel` varchar(64) NOT NULL,
  `email` varchar(64) NOT NULL,
  `modify_datetime` datetime NOT NULL COMMENT '更新时间',
  PRIMARY KEY (`id`),
  KEY `channel_id` (`channel_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

--
-- 插入之前先把表清空（truncate） `contact`
--

TRUNCATE TABLE `contact`;
-- --------------------------------------------------------

--
-- 表的结构 `img`
--

DROP TABLE IF EXISTS `img`;
CREATE TABLE IF NOT EXISTS `img` (
  `id` int(11) NOT NULL,
  `channel_id` int(11) NOT NULL,
  `title` varchar(64) NOT NULL COMMENT '图片标题',
  `filename` varchar(64) NOT NULL COMMENT '图片相对路径',
  `filename_sub` varchar(64) NOT NULL,
  `url` varchar(512) NOT NULL COMMENT '链接地址',
  `modify_datetime` datetime NOT NULL COMMENT '更新时间',
  PRIMARY KEY (`id`),
  KEY `channel_id` (`channel_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 插入之前先把表清空（truncate） `img`
--

TRUNCATE TABLE `img`;
-- --------------------------------------------------------

--
-- 表的结构 `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `channel_id` int(11) NOT NULL,
  `type` int(11) NOT NULL COMMENT '用户类型：1:管理员; 2:业务联系;',
  `alias` varchar(64) NOT NULL,
  `username` varchar(16) NOT NULL COMMENT '系统登录名',
  `password` varchar(64) NOT NULL COMMENT '登录密码',
  `tel` varchar(64) NOT NULL,
  `email` varchar(64) NOT NULL,
  `dept` varchar(64) NOT NULL,
  `login_datetime` datetime NOT NULL COMMENT '登录时间',
  `modify_datetime` datetime NOT NULL COMMENT '更新时间',
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`),
  KEY `channel_id` (`channel_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=2 ;

--
-- 插入之前先把表清空（truncate） `user`
--

TRUNCATE TABLE `user`;
--
-- 转存表中的数据 `user`
--

INSERT INTO `user` (`id`, `channel_id`, `type`, `alias`, `username`, `password`, `tel`, `email`, `dept`, `login_datetime`, `modify_datetime`) VALUES
(1, 0, 0, '', 'admin', 'a66abb5684c45962d887564f08346e8d', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
