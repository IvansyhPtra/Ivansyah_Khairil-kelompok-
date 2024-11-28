-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Server version:               8.0.30 - MySQL Community Server - GPL
-- Server OS:                    Win64
-- HeidiSQL Version:             12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


-- Dumping database structure for db_penjualan
CREATE DATABASE IF NOT EXISTS `db_penjualan` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `db_penjualan`;

-- Dumping structure for table db_penjualan.barang
CREATE TABLE IF NOT EXISTS `barang` (
  `id` int NOT NULL AUTO_INCREMENT,
  `nama_barang` varchar(50) DEFAULT NULL,
  `harga` int DEFAULT NULL,
  `stok` int DEFAULT NULL,
  `kategori` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table db_penjualan.barang: ~0 rows (approximately)
INSERT INTO `barang` (`id`, `nama_barang`, `harga`, `stok`, `kategori`) VALUES
	(1, 'jam tangan', 100000, 50, 'aksesoris'),
	(2, 'lemari', 2000000, 30, 'furnitur'),
	(3, 'sepatu jordan', 10000000, 5, 'fashion'),
	(4, 'ac', 4000000, 100, 'elektronik');

-- Dumping structure for table db_penjualan.penjualan
CREATE TABLE IF NOT EXISTS `penjualan` (
  `id` int NOT NULL AUTO_INCREMENT,
  `tgl_penjualan` date DEFAULT NULL,
  `nama_barang` varchar(50) DEFAULT NULL,
  `harga` int DEFAULT NULL,
  `jumlah_terjual` int DEFAULT NULL,
  `total_penjualan` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table db_penjualan.penjualan: ~0 rows (approximately)
INSERT INTO `penjualan` (`id`, `tgl_penjualan`, `nama_barang`, `harga`, `jumlah_terjual`, `total_penjualan`) VALUES
	(1, '2024-11-25', 'sepatu jordan', 10000000, 1, 10000000),
	(2, '2024-11-27', 'jam tangan', 100000, 5, 500000);

-- Dumping structure for table db_penjualan.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` int NOT NULL AUTO_INCREMENT,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

-- Dumping data for table db_penjualan.users: ~0 rows (approximately)
INSERT INTO `users` (`id`, `username`, `password`) VALUES
	(1, 'Ivansyah Putra', '$2y$10$00GVU4zrM9ZYV.FwdhuGieG15jAnghYFYah8/ltQ76OckmvStoPW6');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
