-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versi server:                 10.1.16-MariaDB - mariadb.org binary distribution
-- OS Server:                    Win32
-- HeidiSQL Versi:               10.1.0.5464
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- membuang struktur untuk table db_alvin.akun_manajemen
CREATE TABLE IF NOT EXISTS `akun_manajemen` (
  `id_manajemen` varchar(10) NOT NULL,
  `user_manajemen` varchar(35) NOT NULL,
  `pass_manajemen` varchar(35) NOT NULL,
  `nama_manajemen` varchar(100) NOT NULL,
  `jk_manajemen` enum('pria','wanita','','') NOT NULL,
  `no_hp_manajemen` varchar(30) NOT NULL,
  `email_manajemen` varchar(100) NOT NULL,
  `alamat_manajemen` varchar(200) NOT NULL,
  `level_manajemen` varchar(100) NOT NULL,
  `status_manajemen` enum('aktif','nonaktif') NOT NULL,
  `jabatan_manajemen` varchar(100) NOT NULL,
  `file_manajemen` varchar(500) NOT NULL,
  `last_login_manajemen` datetime NOT NULL,
  PRIMARY KEY (`id_manajemen`)
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- Membuang data untuk tabel db_alvin.akun_manajemen: 1 rows
/*!40000 ALTER TABLE `akun_manajemen` DISABLE KEYS */;
REPLACE INTO `akun_manajemen` (`id_manajemen`, `user_manajemen`, `pass_manajemen`, `nama_manajemen`, `jk_manajemen`, `no_hp_manajemen`, `email_manajemen`, `alamat_manajemen`, `level_manajemen`, `status_manajemen`, `jabatan_manajemen`, `file_manajemen`, `last_login_manajemen`) VALUES
	('id1', 'manajemen@alvinbhaktimandiri.com', 'TWpNNU9XRmpNVEk1', 'Administrator Web', 'pria', '087712813719', 'gunturmisbahsedjati@gmail.com', 'Bungur', 'superadmin', 'aktif', 'Direktur', 'no-photo.jpg', '0000-00-00 00:00:00');
/*!40000 ALTER TABLE `akun_manajemen` ENABLE KEYS */;

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
