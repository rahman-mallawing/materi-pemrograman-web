-- --------------------------------------------------------
-- Host:                         localhost
-- Server version:               5.1.72-community - MySQL Community Server (GPL)
-- Server OS:                    Win32
-- HeidiSQL Version:             9.4.0.5125
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;


-- Dumping database structure for latihan_db
CREATE DATABASE IF NOT EXISTS `latihan_db` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `latihan_db`;

-- Dumping structure for table latihan_db.tmahasiswa
CREATE TABLE IF NOT EXISTS `tmahasiswa` (
  `nim` varchar(20) DEFAULT NULL,
  `nama` varchar(50) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- Dumping data for table latihan_db.tmahasiswa: 2 rows
/*!40000 ALTER TABLE `tmahasiswa` DISABLE KEYS */;
REPLACE INTO `tmahasiswa` (`nim`, `nama`) VALUES
	('20010099', 'Arief Budiman'),
	('20010098', 'Hendra Saputra');
/*!40000 ALTER TABLE `tmahasiswa` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
