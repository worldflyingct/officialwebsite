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
  `ID` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `ckey` varchar(16) NOT NULL DEFAULT '',
  `cvalue` longtext NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;

-- Data exporting was unselected.
-- Dumping structure for table homepage.wf_news
CREATE TABLE IF NOT EXISTS `wf_news` (
  `ID` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(50) NOT NULL,
  `desc` varchar(100) NOT NULL,
  `context` text NOT NULL,
  `thumbnail` varchar(50) NOT NULL,
  `articletype` tinyint(4) NOT NULL,
  `author` bigint(20) NOT NULL,
  `createtime` datetime NOT NULL,
  `modifytime` datetime NOT NULL,
  `publishtime` datetime NOT NULL,
  `status` bit(1) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=MyISAM AUTO_INCREMENT=1 DEFAULT CHARSET=utf8;

-- Data exporting was unselected.
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
