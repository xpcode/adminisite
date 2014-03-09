-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2014-03-09 13:45:22
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

--
-- 插入之前先把表清空（truncate） `adposition`
--

TRUNCATE TABLE `adposition`;
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

--
-- 插入之前先把表清空（truncate） `area`
--

TRUNCATE TABLE `area`;
-- --------------------------------------------------------

--
-- 表的结构 `article`
--
-- 创建时间: 2014-03-09 05:49:23
--

DROP TABLE IF EXISTS `article`;
CREATE TABLE IF NOT EXISTS `article` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `channel_id` int(11) NOT NULL COMMENT '所属频道id',
  `recommend` bit(1) NOT NULL DEFAULT b'0' COMMENT '推荐到首页',
  `title` varchar(128) NOT NULL,
  `img` varchar(256) NOT NULL COMMENT '文章附属图',
  `intro` text NOT NULL COMMENT '简介文字',
  `content` text NOT NULL COMMENT '详细内容',
  `modify_datetime` datetime NOT NULL,
  PRIMARY KEY (`id`),
  KEY `channel_id` (`channel_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=15 ;

--
-- 插入之前先把表清空（truncate） `article`
--

TRUNCATE TABLE `article`;
--
-- 转存表中的数据 `article`
--

INSERT INTO `article` (`id`, `channel_id`, `recommend`, `title`, `img`, `intro`, `content`, `modify_datetime`) VALUES
(1, 27, b'1', '雅昌最新广告开放体系推出橱窗推广', '/upload/2014/03/f83f5cb4ec9b1a28183787a7c331b549.gif', '<p>只要您有位置，我们就会根据点击率付费，让您轻轻松松坐享收益。为推广该策略，前1000名橱窗合作方案将得到双倍收益的豪华大礼包，还有更多惊喜不断。</p>\n', '<p>只要您有位置，我们就会根据点击率付费，让您轻轻松松坐享收益。为推广该策略，前1000名橱窗合作方案将得到双倍收益的豪华大礼包，还有更多惊喜不断。</p>\n', '2014-03-08 13:54:55'),
(2, 28, b'1', '雅昌邀您共建雅昌广告开放体系，切实解决用户需求。', '', '<p>雅昌邀您共建雅昌广告开放体系，切实解决用户需求。</p>\n', '<p>雅昌邀您共建雅昌广告开放体系，切实解决用户需求。</p>\n', '2014-03-08 14:13:22'),
(3, 28, b'1', '艺术家无线API商铺详情页调整', '', '<p>艺术家无线API商铺详情页调整</p>\n', '<p>艺术家无线API商铺详情页调整</p>\n', '2014-03-08 14:20:22'),
(4, 28, b'1', '雅昌广告开放体系【细则】，让您明白花钱，聪明省钱。', '', '<p>雅昌广告开放体系【细则】，让您明白花钱，聪明省钱。</p>\n', '<p>雅昌广告开放体系【细则】，让您明白花钱，聪明省钱。</p>\n', '2014-03-08 14:25:41'),
(5, 28, b'1', '雅昌新一季度广告计划表，首页新增7个广告位，预购从速！', '', '<p>雅昌新一季度广告计划表，首页新增7个广告位，预购从速！</p>\n', '<p>雅昌新一季度广告计划表，首页新增7个广告位，预购从速！</p>\n', '2014-03-08 14:26:22'),
(6, 28, b'1', '雅昌邀您共建雅昌广告开放体系', '', '<p>雅昌邀您共建雅昌广告开放体系</p>\n', '<p>雅昌邀您共建雅昌广告开放体系</p>\n', '2014-03-08 14:26:50'),
(7, 28, b'1', '雅昌广告开放体系【细则】，让您明白花钱，聪明省钱。', '', '<p>雅昌广告开放体系【细则】，让您明白花钱，聪明省钱。</p>\n', '<p>雅昌广告开放体系【细则】，让您明白花钱，聪明省钱。</p>\n', '2014-03-08 14:27:54'),
(8, 12, b'0', '数据产品（艺术家价值报告）', '', '<p>雅昌艺术网拍卖频道是国内最全面的拍卖类信息频道，每天浏览量达十几万，国内90%以上的艺术品拍卖公司都在拍卖频道做网络预展，借以宣传拍卖品，提升拍卖行会人气，吸引更多的卖家来参加拍卖会。全世界成千上万的艺术买家及藏家也通过拍卖频道预展来预先寻找心仪的艺术品及收藏品。</p>\n', '<p>雅昌艺术网拍卖频道是国内最全面的拍卖类信息频道，每天浏览量达十几万，国内90%以上的艺术品拍卖公司都在拍卖频道做网络预展，借以宣传拍卖品， 提升拍卖行会人气，吸引更多的卖家来参加拍卖会。全世界成千上万的艺术买家及藏家也通过拍卖频道预展来预先寻找心仪的艺术品及收藏品。</p>\n', '2014-03-09 03:23:22'),
(9, 33, b'0', '画廊黄页', '', '<p>雅昌艺术网</p>\n', '<p>雅昌艺术网</p>\n', '2014-03-09 04:27:38'),
(10, 34, b'0', '古玩黄页', '', '<p>雅昌艺术网</p>\n', '<p>雅昌艺术网</p>\n', '2014-03-09 04:30:11'),
(11, 33, b'0', 'OIO线下活动', '', '<p>OIO线下活动</p>\n', '<p>OIO线下活动</p>\n', '2014-03-09 04:35:31'),
(12, 34, b'0', '古玩商情DM', '', '<p>古玩商情DM</p>\n', '<p>古玩商情DM</p>\n', '2014-03-09 04:37:23'),
(13, 21, b'0', 'A计划会员优惠', '', '<p>A计划会员优惠</p>\n\n<p><img alt="" src="/upload//2014/03images/140309064404711379wiric.gif" style="height:216px; width:687px" /></p>\n\n<table align="left" border="0" cellpadding="0" cellspacing="0" style="width:500px">\n	<tbody>\n		<tr>\n			<td><img alt="" src="/upload//2014/03images/14030906460473031851tvi.gif" style="height:43px; width:88px" /></td>\n			<td><img alt="" src="/upload//2014/03images/14030906460473031851tvi.gif" style="height:43px; width:88px" /></td>\n			<td><img alt="" src="/upload//2014/03images/14030906460473031851tvi.gif" style="height:43px; width:88px" /></td>\n			<td><img alt="" src="/upload//2014/03images/14030906460473031851tvi.gif" style="height:43px; width:88px" /></td>\n			<td><img alt="" src="/upload//2014/03images/14030906460473031851tvi.gif" style="height:43px; width:88px" /></td>\n		</tr>\n		<tr>\n			<td><img alt="" src="/upload//2014/03images/14030906460473031851tvi.gif" style="height:43px; width:88px" /></td>\n			<td><img alt="" src="/upload//2014/03images/14030906460473031851tvi.gif" style="height:43px; width:88px" /></td>\n			<td><img alt="" src="/upload//2014/03images/14030906460473031851tvi.gif" style="height:43px; width:88px" /></td>\n			<td><img alt="" src="/upload//2014/03images/14030906460473031851tvi.gif" style="height:43px; width:88px" /></td>\n			<td><img alt="" src="/upload//2014/03images/14030906460473031851tvi.gif" style="height:43px; width:88px" /></td>\n		</tr>\n	</tbody>\n</table>\n\n<p>&nbsp;</p>\n\n<p>&nbsp;</p>\n\n<p>&nbsp;</p>\n', '<p>A计划会员优惠</p>\n\n<p><img alt="" src="/upload//2014/03images/140309064404711379wiric.gif" style="height:216px; width:687px" /></p>\n\n<table align="left" border="0" cellpadding="0" cellspacing="0" style="width:500px">\n	<tbody>\n		<tr>\n			<td><img alt="" src="/upload//2014/03images/14030906460473031851tvi.gif" style="height:43px; width:88px" /></td>\n			<td><img alt="" src="/upload//2014/03images/14030906460473031851tvi.gif" style="height:43px; width:88px" /></td>\n			<td><img alt="" src="/upload//2014/03images/14030906460473031851tvi.gif" style="height:43px; width:88px" /></td>\n			<td><img alt="" src="/upload//2014/03images/14030906460473031851tvi.gif" style="height:43px; width:88px" /></td>\n			<td><img alt="" src="/upload//2014/03images/14030906460473031851tvi.gif" style="height:43px; width:88px" /></td>\n		</tr>\n		<tr>\n			<td><img alt="" src="/upload//2014/03images/14030906460473031851tvi.gif" style="height:43px; width:88px" /></td>\n			<td><img alt="" src="/upload//2014/03images/14030906460473031851tvi.gif" style="height:43px; width:88px" /></td>\n			<td><img alt="" src="/upload//2014/03images/14030906460473031851tvi.gif" style="height:43px; width:88px" /></td>\n			<td><img alt="" src="/upload//2014/03images/14030906460473031851tvi.gif" style="height:43px; width:88px" /></td>\n			<td><img alt="" src="/upload//2014/03images/14030906460473031851tvi.gif" style="height:43px; width:88px" /></td>\n		</tr>\n	</tbody>\n</table>\n\n<p>&nbsp;</p>\n\n<p>&nbsp;</p>\n\n<p>&nbsp;</p>\n\n<p>&nbsp;</p>\n\n<p>内容区域</p>\n', '2014-03-09 06:49:53'),
(14, 21, b'0', '会员EDM邮件群发，短信群发', '', '<p>会员EDM邮件群发，短信群发</p>\n', '<p>会员EDM邮件群发，短信群发</p>\n', '2014-03-09 06:50:29');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=35 ;

--
-- 插入之前先把表清空（truncate） `channel`
--

TRUNCATE TABLE `channel`;
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
(29, 5, 3, '北京地区', '', '<div>网址：http://www.artron.net</div>\n<div>电话：010-80480080（总机）</div>\n<div>传真：010-80480080</div>\n<div>地址：北京市顺义区天竺空港工业区A区天纬四街7号雅昌大厦4层（101312）</div>', 1, '2014-03-08 04:10:35'),
(30, 5, 3, '华东地区', '', '<div>网址：http://www.artron.net</div>\n<div>电话：(021)68798999（总机）</div>\n<div>传真：(021)59929716</div>\n<div>上海地址：上海市嘉定地区嘉罗公路1022号（201899）</div>\n<div>杭州地址：浙江省杭州市西湖区转塘镇象山352号中国美术学院7号楼6层</div>', 2, '2014-03-08 04:14:41'),
(31, 5, 3, '华南地区', '', '<div>网址：http://guangdong.artron.net</div>\n<div>电话：(0755)83366138（总机）</div>\n<div>地址：深圳市南山区西丽龙井方大城A区（518055）</div>\n<div>广州市越秀区二沙岛烟雨路38号广东美术馆（510105）</div>', 3, '2014-03-08 04:17:16'),
(32, 5, 3, '海外地区', '', '<div>美国西岸联络人：吕振雄先生</div>\n<div>联系电话：001-626-679-3528（美国）</div>\n<div>15820400661（中国）</div>\n<div>联系地址：32.LosHigos.ST.Aihambra.CA.91801.USA</div>', 4, '2014-03-08 04:19:23'),
(33, 7, 1, '画廊导购', '', '0', 1, '2014-03-09 03:37:05'),
(34, 7, 1, '古玩导购', '', '0', 2, '2014-03-09 03:37:22');

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
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

--
-- 插入之前先把表清空（truncate） `contact`
--

TRUNCATE TABLE `contact`;
--
-- 转存表中的数据 `contact`
--

INSERT INTO `contact` (`id`, `channel_id`, `project`, `name`, `tel`, `tel_2`, `tel_service`, `email`, `modify_datetime`) VALUES
(1, 29, '商业项目', '改女士', '010-80480080-566', '', '', 'gn@artron.net', '2014-03-08 12:32:46'),
(2, 30, '华东区商业项目', '李女士', '021-67087969', '', '', 'lf@artron.net', '2014-03-08 12:56:44'),
(3, 31, '华南区产品代理及渠道', '夏先生', '0755-86083052', '13723488448', '', 'xialin@artron.net', '2014-03-08 12:57:39'),
(4, 29, '拍卖行业服务', '张先生', '010-80480080-590', '', '', 'zhangbo@artron.net', '2014-03-08 12:59:14'),
(5, 29, '画廊行业服务', '庄女士', '010-80480080-680', '', '', 'zhuangy@artron.net', '2014-03-08 13:00:01'),
(6, 29, '艺术家数字资产管理服务', '董女士、彭先生', '010-804800150', '010-80480998-8883', '', 'artist@artron.net', '2014-03-08 13:00:59'),
(7, 29, '艺术品复制业务', ' ', '010-80486788-822', '010-80486025', '', 'lihw@artron.net', '2014-03-08 13:02:11'),
(8, 6, '拍卖行业服务', '张先生', '010-80480080-590', '', '', 'zhangbo@artron.net', '2014-03-08 15:18:51'),
(9, 6, '画廊行业服务', '庄女士', '010-80480080-680', '', '', 'zhuangy@artron.net', '2014-03-08 15:21:15'),
(10, 6, '商业项目服务', '改女士', '010-80480080-566', '', '', 'gn@artron.net', '2014-03-08 15:21:45'),
(11, 12, '拍卖行业服务', '张先生', '010-80480080-590', '', '', 'zhangbo@artron.net', '2014-03-09 03:33:27'),
(12, 12, '画廊行业服务', '庄女士', '010-80480080-680', '', '', 'zhuangy@artron.net', '2014-03-09 03:34:04');

-- --------------------------------------------------------

--
-- 表的结构 `img`
--
-- 创建时间: 2014-03-09 04:25:15
--

DROP TABLE IF EXISTS `img`;
CREATE TABLE IF NOT EXISTS `img` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `channel_id` int(11) NOT NULL,
  `itype` int(11) NOT NULL COMMENT '1:普通图片；2:banner图',
  `recommend` bit(1) NOT NULL DEFAULT b'0' COMMENT '是否推荐到首页',
  `title` varchar(64) NOT NULL COMMENT '图片标题',
  `filename` varchar(512) NOT NULL COMMENT '图片相对路径',
  `filename_sub` varchar(512) NOT NULL,
  `filename_down` varchar(512) NOT NULL COMMENT '刊例价文件下载地址',
  `url` varchar(512) NOT NULL COMMENT '链接地址',
  `modify_datetime` datetime NOT NULL COMMENT '更新时间',
  PRIMARY KEY (`id`),
  KEY `channel_id` (`channel_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 AUTO_INCREMENT=13 ;

--
-- 插入之前先把表清空（truncate） `img`
--

TRUNCATE TABLE `img`;
--
-- 转存表中的数据 `img`
--

INSERT INTO `img` (`id`, `channel_id`, `itype`, `recommend`, `title`, `filename`, `filename_sub`, `filename_down`, `url`, `modify_datetime`) VALUES
(2, 2, 2, b'0', '', '/upload/2014/03/8a396c285d0a3899dfbc0be16ec18dd1.jpg', '', '', '0', '2014-03-08 06:03:14'),
(3, 3, 2, b'0', '', '/upload/2014/03/ba1971fdf70c8b772ccf18ace4577b27.gif', '', '', '0', '2014-03-08 06:03:25'),
(4, 4, 2, b'0', '', '/upload/2014/03/3cca3f4f886b3336c98b3eb9465ca4bb.gif', '', '', '0', '2014-03-08 06:03:38'),
(5, 5, 2, b'0', '', '/upload/2014/03/c868e86e172af642faddecab8d5e2ff9.gif', '', '', '0', '2014-03-08 06:03:47'),
(6, 1, 2, b'0', '', '/upload/2014/03/47d681804a3390bd13d9a56e7591c6b3.gif', '', '', '', '2014-03-08 06:35:18'),
(7, 1, 2, b'0', '', '/upload/2014/03/3881bbfae60a951c8e257e431c2e7fc6.gif', '', '', '', '2014-03-08 06:35:18'),
(8, 15, 1, b'0', '北京画院', '/upload/2014/03/0b2af3126decde743b0ffd3f4a7c0ba6.gif', '', '', 'http://www.bjaa.com.cn/my/index.htm', '2014-03-08 14:56:01'),
(9, 15, 1, b'0', '三星手机专题', '/upload/2014/03/8c45266c9037abd713b850dc2ab5dcb2.gif', '', '', 'http://www.baidu.com', '2014-03-08 15:14:54'),
(10, 6, 1, b'0', '艺术网首页', '/upload/2014/03/f3ed620a379e7411396a58479360faa4.gif', '', '/upload/2014/03/f3ed620a379e7411396a58479360faa4.gif', '', '2014-03-08 15:26:27'),
(11, 22, 1, b'1', '上海理工大学', '/upload/2014/03/48c99a860d39c1fbb7261baa4bab3ee2.gif', '', '', '', '2014-03-09 06:07:58'),
(12, 22, 1, b'1', '香奈尔', '/upload/2014/03/d23bfeaa8e59c71344cff5a58b6a80d5.gif', '', '', '', '2014-03-09 06:30:15');

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
-- 插入之前先把表清空（truncate） `user`
--

TRUNCATE TABLE `user`;
--
-- 转存表中的数据 `user`
--

INSERT INTO `user` (`id`, `channel_id`, `type`, `alias`, `username`, `password`, `tel`, `email`, `dept`, `login_datetime`, `modify_datetime`) VALUES
(1, 0, 0, '', 'admin', 'c4ca4238a0b923820dcc509a6f75849b', '', '', '', '0000-00-00 00:00:00', '0000-00-00 00:00:00');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
