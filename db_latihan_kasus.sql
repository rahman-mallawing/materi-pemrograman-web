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


-- Dumping database structure for db_latihan_kasus
CREATE DATABASE IF NOT EXISTS `db_latihan_kasus` /*!40100 DEFAULT CHARACTER SET latin1 */;
USE `db_latihan_kasus`;

-- Dumping structure for table db_latihan_kasus.tbuku
CREATE TABLE IF NOT EXISTS `tbuku` (
  `isbn` varchar(25) NOT NULL,
  `judul` varchar(100) NOT NULL,
  `deskripsi` varchar(300) NOT NULL,
  PRIMARY KEY (`isbn`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- Dumping data for table db_latihan_kasus.tbuku: 0 rows
/*!40000 ALTER TABLE `tbuku` DISABLE KEYS */;
REPLACE INTO `tbuku` (`isbn`, `judul`, `deskripsi`) VALUES
	('200-02-1998-1-0012', 'Matematika Diskrit II', 'Buku standar tentang matematika diskrit tingkat lanjut'),
	('200-03-2000-6-0042', 'Pemrograman Web Python dan PHP Modern', 'Buku belajar mandiri pemrograman web oleh Rahman');
/*!40000 ALTER TABLE `tbuku` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
