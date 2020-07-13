-- --------------------------------------------------------
-- Host:                         localhost
-- Server version:               5.7.24 - MySQL Community Server (GPL)
-- Server OS:                    Win64
-- HeidiSQL Version:             10.2.0.5599
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;

-- Dumping structure for table adaide.tb_detail_pemesanan
CREATE TABLE IF NOT EXISTS `tb_detail_pemesanan` (
  `id_pemesanan` int(11) DEFAULT NULL,
  `harga_tiket` int(11) DEFAULT NULL,
  `jml_beli` int(11) DEFAULT NULL,
  `total_harga` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Data exporting was unselected.

-- Dumping structure for table adaide.tb_event
CREATE TABLE IF NOT EXISTS `tb_event` (
  `id_event` int(11) NOT NULL DEFAULT '0',
  `nama_event` int(11) DEFAULT NULL,
  `jenis_event` int(11) DEFAULT NULL,
  `tanggal_event` int(11) DEFAULT NULL,
  `stok_tiket` int(11) DEFAULT NULL,
  `status_event` int(11) DEFAULT NULL,
  `banner` varchar(50) DEFAULT NULL,
  `deskripsi` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`id_event`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Data exporting was unselected.

-- Dumping structure for table adaide.tb_konfirmasi
CREATE TABLE IF NOT EXISTS `tb_konfirmasi` (
  `id_konfirmasi` int(11) DEFAULT NULL,
  `tgl_konfirmasi` int(11) DEFAULT NULL,
  `id_pemesanan` int(11) DEFAULT NULL,
  `bukti_pembayaran` int(11) DEFAULT NULL,
  `status_pemesanan` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Data exporting was unselected.

-- Dumping structure for table adaide.tb_pemesanan
CREATE TABLE IF NOT EXISTS `tb_pemesanan` (
  `id_pemesanan` int(11) NOT NULL,
  `id_event` int(11) NOT NULL,
  `tgl_pesan` int(11) DEFAULT NULL,
  `total_harga` int(11) DEFAULT NULL,
  `stok_tiket` int(11) DEFAULT NULL,
  `jml_beli` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_pemesanan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Data exporting was unselected.

-- Dumping structure for table adaide.tb_stage
CREATE TABLE IF NOT EXISTS `tb_stage` (
  `id_stage` int(11) NOT NULL,
  `nama_stage` int(11) DEFAULT NULL,
  `alamat_stage` int(11) DEFAULT NULL,
  `kota_stage` int(11) DEFAULT NULL,
  `geocode` int(11) DEFAULT NULL,
  PRIMARY KEY (`id_stage`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Data exporting was unselected.

-- Dumping structure for table adaide.tb_tiket
CREATE TABLE IF NOT EXISTS `tb_tiket` (
  `id_tiket` int(11) DEFAULT NULL,
  `id_event` int(11) DEFAULT NULL,
  `harga_tiket` int(11) DEFAULT NULL,
  `stok_tiket` int(11) DEFAULT NULL,
  `kode_referensi` int(11) DEFAULT NULL,
  `jenis_tiket` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Data exporting was unselected.

-- Dumping structure for table adaide.tb_user
CREATE TABLE IF NOT EXISTS `tb_user` (
  `id_user` int(11) DEFAULT NULL,
  `nama_user` int(11) DEFAULT NULL,
  `email_user` int(11) DEFAULT NULL,
  `kontak` int(11) DEFAULT NULL,
  `alamat` int(11) DEFAULT NULL,
  `gerder_user` int(11) DEFAULT NULL,
  `password` int(11) DEFAULT NULL,
  `status_user` int(11) DEFAULT NULL,
  `role` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- Data exporting was unselected.

/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IF(@OLD_FOREIGN_KEY_CHECKS IS NULL, 1, @OLD_FOREIGN_KEY_CHECKS) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
