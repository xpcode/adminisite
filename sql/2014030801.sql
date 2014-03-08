-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2014-03-08 04:20:03
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
-- 创建时间: 2014-03-05 11:57:08
--

DROP TABLE IF EXISTS `adposition`;
CREATE TABLE IF NOT EXISTS `adposition` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `channel_id` int(11) NOT NULL,
  `adorder` int(11) NOT NULL,
  `title` varchar(64) NOT NULL,
  `filename` varchar(64) NOT NULL,
  `url` varchar(512) NOT NULL,
  `modify_datetime` datetime NOT NULL COMMENT '更新时间',
  PRIMARY KEY (`id`),
  KEY `channel_id` (`channel_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COMMENT='广告位表' AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `area`
--
-- 创建时间: 2014-03-01 11:56:43
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

-- --------------------------------------------------------

--
-- 表的结构 `article`
--
-- 创建时间: 2014-03-06 13:34:37
--

DROP TABLE IF EXISTS `article`;
CREATE TABLE IF NOT EXISTS `article` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `channel_id` int(11) NOT NULL COMMENT '所属频道id',
  `recommend` bit(1) NOT NULL DEFAULT b'0' COMMENT '推荐到首页',
  `title` varchar(128) NOT NULL,
  `img` varchar(256) NOT NULL COMMENT '文章附属图',
  `intro` varchar(1024) NOT NULL COMMENT '简介文字',
  `content` text NOT NULL COMMENT '详细内容',
  `modify_datetime` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `channel_id` (`channel_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `channel`
--
-- 创建时间: 2014-03-08 03:11:06
--

DROP TABLE IF EXISTS `channel`;
CREATE TABLE IF NOT EXISTS `channel` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pid` int(11) NOT NULL COMMENT '父级频道id',
  `ctype` int(11) NOT NULL DEFAULT '1' COMMENT '1:图文形式(富文本); 2:图片形式(图片+链接+标题); 3:联系人;',
  `name` varchar(64) NOT NULL COMMENT '频道名字',
  `attachinfo` varchar(512) NOT NULL COMMENT '频道附属信息（json格式）',
  `attrs` varchar(512) NOT NULL COMMENT '其他信息（地址电话传真等）',
  `chorder` int(11) NOT NULL COMMENT '排序',
  `modify_datetime` datetime NOT NULL COMMENT '更新时间',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=33 ;

--
-- 转存表中的数据 `channel`
--

INSERT INTO `channel` (`id`, `pid`, `ctype`, `name`, `attachinfo`, `attrs`, `chorder`, `modify_datetime`) VALUES
(1, 0, 1, '首页', '', '', 1, '2014-03-02 00:00:00'),
(2, 0, 1, '产品服务', '', '', 2, '2014-03-02 00:00:00'),
(3, 0, 1, '案例展示', '', '', 3, '2014-03-02 00:00:00'),
(4, 0, 1, '营销动态', '', '', 4, '2014-03-02 00:00:00'),
(5, 0, 1, '业务联系', '', '', 5, '2014-03-02 00:00:00'),
(6, 2, 2, '广告宣传', '', '0', 1, '2014-03-08 03:58:12'),
(7, 2, 1, '艺术导购', '', '0', 2, '2014-03-08 03:58:44'),
(8, 2, 1, '拍卖预展', '', '0', 3, '2014-03-08 03:59:29'),
(9, 2, 1, '地方分站', '', '0', 4, '2014-03-08 04:00:03'),
(10, 2, 1, '艺术数据', '', '0', 5, '2014-03-08 04:00:26'),
(11, 2, 1, '电子商务', '', '0', 6, '2014-03-08 04:00:52'),
(12, 2, 1, '艺术宣传', '', '0', 7, '2014-03-08 04:01:16'),
(13, 2, 1, '数字资产', '', '0', 8, '2014-03-08 04:01:42'),
(14, 3, 2, '广告宣传', '', '0', 1, '2014-03-08 04:02:25'),
(15, 3, 2, '艺术机构', '', '0', 2, '2014-03-08 04:03:08'),
(16, 3, 2, '拍卖预展', '', '0', 3, '2014-03-08 04:03:30'),
(17, 3, 2, '艺术家官网', '', '0', 4, '2014-03-08 04:03:57'),
(18, 3, 2, '鉴定备案', '', '0', 5, '2014-03-08 04:04:20'),
(19, 3, 2, '商务建站', '', '0', 6, '2014-03-08 04:04:43'),
(20, 3, 2, '定制专题', '', '0', 7, '2014-03-08 04:05:05'),
(21, 3, 1, '会员营销', '', '0', 8, '2014-03-08 04:05:26'),
(22, 14, 2, '艺术机构', '', '0', 1, '2014-03-08 04:06:25'),
(23, 14, 2, '专业技术', '', '0', 2, '2014-03-08 04:06:37'),
(24, 14, 2, '教育研究单位', '', '0', 3, '2014-03-08 04:06:52'),
(25, 14, 2, '商业品牌', '', '0', 4, '2014-03-08 04:07:05'),
(26, 14, 2, '社会媒体', '', '0', 5, '2014-03-08 04:07:19'),
(27, 4, 1, '营销动态', '', '0', 1, '2014-03-08 04:08:31'),
(28, 4, 1, '答疑解惑', '', '0', 2, '2014-03-08 04:08:41'),
(29, 5, 3, '北京地区', '', '网址：http://www.artron.net\n电话：010-80480080（总机）\n传真：010-80480080\n地址：北京市顺义区天竺空港工业区A区天纬四街7号雅昌大厦4层（101312）', 1, '2014-03-08 04:10:35'),
(30, 5, 3, '华东地区', '', '网址：http://www.artron.net\n电话：(021)68798999（总机）\n传真：(021)59929716\n上海地址：上海市嘉定地区嘉罗公路1022号（201899）\n杭州地址：浙江省杭州市西湖区转塘镇象山352号中国美术学院7号楼6层', 2, '2014-03-08 04:14:41'),
(31, 5, 3, '华南地区', '', '网址：http://guangdong.artron.net\n电话：(0755)83366138（总机）\n地址：深圳市南山区西丽龙井方大城A区（518055）\n广州市越秀区二沙岛烟雨路38号广东美术馆（510105）', 3, '2014-03-08 04:17:16'),
(32, 5, 3, '海外地区', '', '美国西岸联络人：吕振雄先生\n联系电话：001-626-679-3528（美国）\n15820400661（中国）\n联系地址：32.LosHigos.ST.Aihambra.CA.91801.USA', 4, '2014-03-08 04:19:23');

-- --------------------------------------------------------

--
-- 表的结构 `contact`
--
-- 创建时间: 2014-03-02 13:17:28
--

DROP TABLE IF EXISTS `contact`;
CREATE TABLE IF NOT EXISTS `contact` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `channel_id` int(11) NOT NULL,
  `project` varchar(64) NOT NULL COMMENT '项目名称',
  `name` varchar(32) NOT NULL,
  `tel` varchar(32) NOT NULL,
  `tel_2` varchar(32) NOT NULL COMMENT '电话2',
  `tel_service` varchar(32) NOT NULL COMMENT '客服电话',
  `email` varchar(64) NOT NULL,
  `modify_datetime` datetime NOT NULL COMMENT '更新时间',
  PRIMARY KEY (`id`),
  KEY `channel_id` (`channel_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `img`
--
-- 创建时间: 2014-03-05 14:14:44
--

DROP TABLE IF EXISTS `img`;
CREATE TABLE IF NOT EXISTS `img` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `channel_id` int(11) NOT NULL,
  `itype` int(11) NOT NULL COMMENT '1:普通图片；2:banner图',
  `recommend` bit(1) NOT NULL DEFAULT b'0' COMMENT '是否推荐到首页',
  `title` varchar(64) NOT NULL COMMENT '图片标题',
  `filename` varchar(64) NOT NULL COMMENT '图片相对路径',
  `filename_sub` varchar(64) NOT NULL,
  `url` varchar(512) NOT NULL COMMENT '链接地址',
  `modify_datetime` datetime NOT NULL COMMENT '更新时间',
  PRIMARY KEY (`id`),
  KEY `channel_id` (`channel_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- 表的结构 `user`
--
-- 创建时间: 2014-03-01 12:55:16
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
-- 转存表中的数据 `user`
--

INSERT INTO `user` (`id`, `channel_id`, `type`, `alias`, `username`, `password`, `tel`, `email`, `dept`, `login_datetime`, `modify_datetime`) VALUES
(1, 0, 0, '', 'admin', 'c4ca4238a0b923820dcc509a6f75849b', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
