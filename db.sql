-- --------------------------------------------------------
-- 主机:                           localhost
-- 服务器版本:                        5.1.73 - Source distribution
-- 服务器操作系统:                      unknown-linux-gnu
-- HeidiSQL 版本:                  10.3.0.5771
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- 导出  表 homepage.wf_config 结构
CREATE TABLE IF NOT EXISTS `wf_config` (
  `configid` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `ckey` varchar(32) NOT NULL DEFAULT '',
  `cvalue` tinytext NOT NULL,
  PRIMARY KEY (`configid`)
) ENGINE=InnoDB AUTO_INCREMENT=32 DEFAULT CHARSET=utf8;

-- 数据导出被取消选择。

-- 导出  表 homepage.wf_group 结构
CREATE TABLE IF NOT EXISTS `wf_group` (
  `groupid` bigint(20) NOT NULL AUTO_INCREMENT,
  `groupname` varchar(50) NOT NULL DEFAULT '',
  `groupdesc` text NOT NULL,
  `getnewslist` tinyint(1) NOT NULL DEFAULT '0',
  `editarticle` tinyint(1) NOT NULL DEFAULT '0',
  `getarticledesc` tinyint(1) NOT NULL DEFAULT '0',
  `getspiderlist` tinyint(1) NOT NULL DEFAULT '0',
  `pushbaidu` tinyint(1) NOT NULL DEFAULT '0',
  `getconfig` tinyint(1) NOT NULL DEFAULT '0',
  `setconfig` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`groupid`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- 数据导出被取消选择。

-- 导出  表 homepage.wf_news 结构
CREATE TABLE IF NOT EXISTS `wf_news` (
  `articleid` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL,
  `desc` varchar(100) NOT NULL,
  `content` text NOT NULL,
  `thumbnail` varchar(50) NOT NULL,
  `articletype` tinyint(4) NOT NULL,
  `userid` bigint(20) NOT NULL,
  `createtime` datetime NOT NULL,
  `modifytime` datetime NOT NULL,
  `publishtime` datetime NOT NULL,
  `articlestatus` tinyint(1) NOT NULL,
  PRIMARY KEY (`articleid`)
) ENGINE=InnoDB AUTO_INCREMENT=280 DEFAULT CHARSET=utf8;

-- 数据导出被取消选择。

-- 导出  表 homepage.wf_spiderlog 结构
CREATE TABLE IF NOT EXISTS `wf_spiderlog` (
  `spiderlogId` bigint(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL DEFAULT '',
  `target` varchar(50) NOT NULL DEFAULT '',
  `IP` varchar(50) NOT NULL DEFAULT '',
  `time` datetime NOT NULL DEFAULT '1970-01-01 00:00:00',
  PRIMARY KEY (`spiderlogId`)
) ENGINE=InnoDB AUTO_INCREMENT=25519 DEFAULT CHARSET=utf8;

-- 数据导出被取消选择。

-- 导出  表 homepage.wf_user 结构
CREATE TABLE IF NOT EXISTS `wf_user` (
  `userid` bigint(20) NOT NULL AUTO_INCREMENT,
  `user` varchar(50) DEFAULT '',
  `pass` varchar(50) DEFAULT '',
  `nickname` varchar(50) DEFAULT '',
  `groupid` bigint(20) DEFAULT '0',
  `token` varchar(50) DEFAULT '',
  `lastlogin` datetime DEFAULT '1970-01-01 00:00:00',
  `userstatus` tinyint(1) DEFAULT '0',
  PRIMARY KEY (`userid`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- 数据导出被取消选择。

-- 导出  表 homepage.wf_wxuser 结构
CREATE TABLE IF NOT EXISTS `wf_wxuser` (
  `wxuserid` bigint(20) NOT NULL AUTO_INCREMENT,
  `openid` varchar(50) NOT NULL DEFAULT '',
  `usermsg` text NOT NULL,
  PRIMARY KEY (`wxuserid`),
  UNIQUE KEY `openid` (`openid`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- 数据导出被取消选择。

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
