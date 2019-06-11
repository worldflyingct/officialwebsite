-- --------------------------------------------------------
-- 主机:                           localhost
-- Server version:               5.1.73 - Source distribution
-- Server OS:                    unknown-linux-gnu
-- HeidiSQL 版本:                  10.1.0.5464
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping structure for table homepage.wf_config
CREATE TABLE IF NOT EXISTS `wf_config` (
  `configid` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `ckey` varchar(16) NOT NULL DEFAULT '',
  `cvalue` longtext NOT NULL,
  PRIMARY KEY (`configid`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=utf8;

-- Data exporting was unselected.
-- Dumping structure for table homepage.wf_group
CREATE TABLE IF NOT EXISTS `wf_group` (
  `groupid` bigint(20) NOT NULL AUTO_INCREMENT,
  `groupname` varchar(50) NOT NULL DEFAULT '',
  `groupdesc` text NOT NULL,
  `getnewslist` tinyint(1) NOT NULL DEFAULT '0',
  `editarticle` tinyint(1) NOT NULL DEFAULT '0',
  `getarticledesc` tinyint(1) NOT NULL DEFAULT '0',
  `getspiderlist` tinyint(1) NOT NULL DEFAULT '0',
  `pushbaidu` tinyint(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`groupid`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- Data exporting was unselected.
-- Dumping structure for table homepage.wf_news
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
) ENGINE=MyISAM AUTO_INCREMENT=228 DEFAULT CHARSET=utf8;

-- Data exporting was unselected.
-- Dumping structure for table homepage.wf_spiderlog
CREATE TABLE IF NOT EXISTS `wf_spiderlog` (
  `spiderlogId` bigint(20) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL DEFAULT '',
  `target` varchar(50) NOT NULL DEFAULT '',
  `IP` varchar(50) NOT NULL DEFAULT '',
  `time` datetime NOT NULL DEFAULT '1970-01-01 00:00:00',
  PRIMARY KEY (`spiderlogId`)
) ENGINE=MyISAM AUTO_INCREMENT=57 DEFAULT CHARSET=utf8;

-- Data exporting was unselected.
-- Dumping structure for table homepage.wf_user
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
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- Data exporting was unselected.
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
