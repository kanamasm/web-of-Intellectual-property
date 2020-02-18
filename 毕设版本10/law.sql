-- phpMyAdmin SQL Dump
-- version 3.4.10.1
-- http://www.phpmyadmin.net
--
-- 主机: localhost
-- 生成日期: 2016 年 03 月 21 日 15:05
-- 服务器版本: 5.5.20
-- PHP 版本: 5.3.10

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- 数据库: `law`
--

-- --------------------------------------------------------

--
-- 表的结构 `wl_comment`
--

CREATE TABLE IF NOT EXISTS `wl_comment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `substance` varchar(60) NOT NULL,
  `time` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `who` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=131 ;

--
-- 转存表中的数据 `wl_comment`
--

INSERT INTO `wl_comment` (`id`, `substance`, `time`, `username`, `who`) VALUES
(127, '11', 1458569468, '广州', '广州'),
(125, '66', 1458569281, '666', '666');

-- --------------------------------------------------------

--
-- 表的结构 `wl_manager`
--

CREATE TABLE IF NOT EXISTS `wl_manager` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL DEFAULT '',
  `password` varchar(32) NOT NULL DEFAULT '',
  `context` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=20 ;

--
-- 转存表中的数据 `wl_manager`
--

INSERT INTO `wl_manager` (`id`, `username`, `password`, `context`) VALUES
(1, '1234', '123', '技术人员'),
(2, '1233', '1111', '部门管理人员'),
(3, 'eee', '1234', '网站管理人员'),
(4, '上课看看', '123', '技术人员'),
(5, '我好饱', 'whbA', '网站管理人员'),
(6, '时候', '123', 'wde'),
(7, 'test1', '111', '第三方管理人员'),
(8, 'text2', '111', '技术人员'),
(9, 'text3', '111', '第三方管理人员'),
(10, 'text4', '111', '普通管理人员'),
(12, 'text6', '111', '普通管理人员'),
(19, '6667', '1234567', '技术人员'),
(14, 'text10', '111', '技术人员'),
(18, '1111', '1111', '1111'),
(17, '时间', '', '');

-- --------------------------------------------------------

--
-- 表的结构 `wl_message`
--

CREATE TABLE IF NOT EXISTS `wl_message` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(60) NOT NULL DEFAULT '',
  `username` varchar(30) NOT NULL,
  `linkman` varchar(30) NOT NULL,
  `phone` varchar(30) NOT NULL,
  `prize` int(11) NOT NULL,
  `type` int(11) NOT NULL DEFAULT '6',
  `content` text NOT NULL,
  `filename` varchar(60) NOT NULL DEFAULT '',
  `time` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=45 ;

--
-- 转存表中的数据 `wl_message`
--

INSERT INTO `wl_message` (`id`, `title`, `username`, `linkman`, `phone`, `prize`, `type`, `content`, `filename`, `time`) VALUES
(1, '二维码编辑技术', '666', '胡小姐', '13756733453', 3000, 1, '可以使用图片作为二维码的背景图案', '', 1458476666),
(2, '简易运动器材', '123', '李先生', '13267864368', 2000, 2, '简易的运动器材，在家也能自己动手制作，简单有趣', '', 1458478435),
(3, '手机二维码编辑技术', '广州', '王小姐', '13976467432', 2000, 1, '利用手机生成相信二维码的软件，可以轻松的得到自己想要的二维码', '', 1458478678),
(4, '青霉素和黄曲霉素的混合发酵使用', '666', '吴先生', '1363568008', 5000, 2, '本作者长期研究青霉素和黄曲霉素，对这两者之间的化学反应和这两者本身有独特的见解，从而发明的两者混合出新物质，能够使用在生活的很多方面', '', 1458234436),
(27, '真的很有用的专利', '广州', '吴女士', '556677790433', 200, 2, '', '', 1466678436),
(11, '222', '123', '11', '444444', 33, 3, '33', '', 1458478436),
(13, '333', '123', '333', '444444', 4444, 4, '33', '', 1458478488),
(14, '14567', '123', 'zss', '444444', 4444, 5, '33', '', 1458478777),
(15, '信息化时代', '时候', '李先生', '08516678935', 2340, 1, '33', '', 1458478456),
(16, '数据通信', '时候', '王先生', '222333444', 4, 5, '33', '', 1558478436),
(17, '数据通信1', '时候', '王先生', '222333444', 333, 4, '33', '', 1458998436),
(18, '三国杀', '广州', '123', '123', 0, 3, '', '', 1458478996),
(30, '我的专利1', '666', '123', '123', 1111, 3, '', '', 1458478436),
(29, '我的专利', '666', '123', '123', 1111, 3, '', '', 1458478436),
(28, '测试数据1', '666', '无限神', '12468895321', 6999, 4, '这只是一个测试数据', '', 1458478436),
(31, '123', '666', '212', '5786543567', 12333, 3, '', '', 1458478436),
(33, '测试数据2', '567', 'BEN', '020-4691566', 880, 1, '。。。。。。', '', 1458478436),
(35, '123333', '666', '123333', '1233', 123, 6, '22', '', 1458478436),
(36, '123', '123', '123', '12345688754', 123, 2, '123', '', 1458478436),
(37, '测试数据', '测试数据', '测试数据', '333', 555, 6, '测试数据', '', 1458478436),
(41, '123', '666', '123', '123', 123, 6, '123', '', 1458478436),
(40, '12', '666', '12', '12', 12, 6, '12', '', 1458478436),
(42, 'tet', '666', 'tet', '234', 234, 6, 'tet', '', 1458478436),
(43, 'tt', '666', 'tt', '4568', 34, 6, 'tt', '56eec8080fb6e.jpg', 1458478436);

-- --------------------------------------------------------

--
-- 表的结构 `wl_user`
--

CREATE TABLE IF NOT EXISTS `wl_user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL DEFAULT '',
  `password` char(32) NOT NULL DEFAULT '',
  `phone` varchar(30) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=utf8 AUTO_INCREMENT=37 ;

--
-- 转存表中的数据 `wl_user`
--

INSERT INTO `wl_user` (`id`, `username`, `password`, `phone`) VALUES
(3, '宿舍', '123', '1378645568'),
(4, '上课看看', '123', '12345688754'),
(5, '编辑', '1234', '12356788432'),
(6, '时候', '1234', '14621356789'),
(7, '广州', '1234', '13256892346'),
(14, 'text', '123', '1234785436'),
(36, '666', '666', '666'),
(35, '122222', '12345', '14679866533');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
