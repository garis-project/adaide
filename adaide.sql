-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 13, 2020 at 03:49 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `adaide`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_detail_pemesanan`
--

CREATE TABLE `tb_detail_pemesanan` (
  `id_pemesanan` int(11) DEFAULT NULL,
  `id_tiket` varchar(15) NOT NULL,
  `status_tiket` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_event`
--

CREATE TABLE `tb_event` (
  `id_event` varchar(11) NOT NULL,
  `nama_event` varchar(30) DEFAULT NULL,
  `jenis_event` int(11) DEFAULT NULL,
  `tanggal_mulai` datetime DEFAULT NULL,
  `tanggal_selesai` datetime NOT NULL,
  `stok_tiket` int(11) DEFAULT NULL,
  `status_event` varchar(15) DEFAULT NULL,
  `banner` text DEFAULT NULL,
  `deskripsi` text DEFAULT NULL,
  `id_stage` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_event`
--

INSERT INTO `tb_event` (`id_event`, `nama_event`, `jenis_event`, `tanggal_mulai`, `tanggal_selesai`, `stok_tiket`, `status_event`, `banner`, `deskripsi`, `id_stage`) VALUES
('', 'Tasik October Festival', NULL, '2020-07-01 08:00:00', '2020-07-14 08:00:00', NULL, 'Onprogress', '1594513309summer.jpg', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tb_jenis_tiket`
--

CREATE TABLE `tb_jenis_tiket` (
  `id_jenis_tiket` int(11) NOT NULL,
  `jenis_tiket` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_jenis_tiket`
--

INSERT INTO `tb_jenis_tiket` (`id_jenis_tiket`, `jenis_tiket`) VALUES
(1, 'EKONOMI'),
(2, 'VIP'),
(3, 'VVIP'),
(4, 'TENGAH'),
(5, 'KANAN'),
(6, 'KIRI'),
(7, 'DEPAN'),
(8, 'BELAKANG');

-- --------------------------------------------------------

--
-- Table structure for table `tb_pemesanan`
--

CREATE TABLE `tb_pemesanan` (
  `id_pemesanan` int(11) NOT NULL,
  `id_user` varchar(10) NOT NULL,
  `id_event` varchar(15) NOT NULL,
  `tanggal_pesan` date DEFAULT NULL,
  `diskon` int(11) NOT NULL,
  `total_harga` int(11) DEFAULT NULL,
  `jml_beli` int(11) DEFAULT NULL,
  `bukti_pembayaran` varchar(20) NOT NULL,
  `status_pemesanan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_role`
--

CREATE TABLE `tb_role` (
  `id_role` int(11) NOT NULL,
  `role` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_role`
--

INSERT INTO `tb_role` (`id_role`, `role`) VALUES
(1, 'admin'),
(2, 'user');

-- --------------------------------------------------------

--
-- Table structure for table `tb_stage`
--

CREATE TABLE `tb_stage` (
  `id_stage` int(11) NOT NULL,
  `nama_stage` varchar(30) DEFAULT NULL,
  `alamat_stage` text DEFAULT NULL,
  `kota_stage` varchar(30) DEFAULT NULL,
  `geocode` text DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_stage`
--

INSERT INTO `tb_stage` (`id_stage`, `nama_stage`, `alamat_stage`, `kota_stage`, `geocode`) VALUES
(2, 'DadahaVT7', 'Jln. Lingkar Dadaha', 'KOTA TASIKMALAYA', '23424234,343465');

-- --------------------------------------------------------

--
-- Table structure for table `tb_status`
--

CREATE TABLE `tb_status` (
  `id_status` int(11) NOT NULL,
  `status` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_status`
--

INSERT INTO `tb_status` (`id_status`, `status`) VALUES
(1, 'Nonaktif'),
(2, 'Offline'),
(3, 'Online'),
(4, 'Banned');

-- --------------------------------------------------------

--
-- Table structure for table `tb_tiket`
--

CREATE TABLE `tb_tiket` (
  `id_event` varchar(30) NOT NULL,
  `jenis_tiket` varchar(30) NOT NULL,
  `harga_tiket` int(11) NOT NULL,
  `stok_tiket` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tb_tmp_detail_event`
--

CREATE TABLE `tb_tmp_detail_event` (
  `id_event` varchar(15) DEFAULT NULL,
  `id_jenis_tiket` int(11) DEFAULT NULL,
  `harga_tiket` int(11) DEFAULT NULL,
  `stok_tiket` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_tmp_detail_event`
--

INSERT INTO `tb_tmp_detail_event` (`id_event`, `id_jenis_tiket`, `harga_tiket`, `stok_tiket`) VALUES
(NULL, 2, 5000, NULL),
(NULL, 1, 6000, NULL),
(NULL, 1, 6000, NULL),
(NULL, 2, 5000, NULL),
(NULL, 2, 60, NULL),
(NULL, 2, 60, NULL),
(NULL, 3, 50, NULL),
(NULL, 2, 60, 70),
(NULL, 1, 5000, 70),
(NULL, 1, 60000, -16700),
(NULL, 1, 23, 60),
(NULL, 1, 23, 60),
(NULL, 1, 23, 60),
(NULL, 1, 23, 60),
(NULL, 1, 23, 60),
(NULL, 1, 23, 60),
(NULL, 1, 23, 60),
(NULL, 1, 23, 60),
(NULL, 1, 23, 60),
(NULL, 1, 23, 60),
(NULL, 1, 50, 70),
(NULL, 1, 60, 70),
(NULL, 1, 50, 70),
(NULL, 1, 60, 70),
(NULL, 1, 60, 70),
(NULL, 1, 60, 70),
(NULL, 1, 60, 70),
(NULL, 1, 29, 78),
(NULL, 1, 5666, 89),
(NULL, 1, 50000, 70),
(NULL, 0, 50000, 70),
(NULL, 2, 60, 70),
(NULL, 1, 344, -1445),
(NULL, 1, 40, 50),
(NULL, 1, 40, 50),
(NULL, 1, 50, 70),
(NULL, 1, 5000, 70),
(NULL, 1, 5, 7),
(NULL, 1, 60, 70),
(NULL, 1, 60, 70),
(NULL, 1, 60, 70),
(NULL, 1, 50, 70),
(NULL, 1, 50, 70),
(NULL, 1, 50, 70),
(NULL, 1, 50, 70),
(NULL, 1, 50, 70),
(NULL, 1, 50, 70),
(NULL, 1, 50, 70),
(NULL, 1, 50, 70),
(NULL, 1, 50, 70),
(NULL, 1, 50, 70),
(NULL, 1, 50, 70),
(NULL, 1, 50, 70),
(NULL, 1, 50, 70),
(NULL, 1, 50, 70),
(NULL, 1, 50, 70),
(NULL, 1, 50, 70),
(NULL, 1, 5, 7),
(NULL, 1, 67, 21),
(NULL, 1, 67, 21),
(NULL, 1, 76, 0),
(NULL, 1, 70000, 70),
(NULL, 1, 70, 21),
(NULL, 1, 70, 21),
(NULL, 1, 20, 60),
(NULL, 1, 50, 70),
(NULL, 1, 50, 70),
(NULL, 2, 70, 80),
(NULL, 1, 7, 8),
(NULL, 2, 70, 0),
(NULL, 1, 70, 21),
(NULL, 1, 20, 21),
(NULL, 1, 20, 21),
(NULL, 1, 20, 31),
(NULL, 1, 20, 31),
(NULL, 1, 5000, 20);

-- --------------------------------------------------------

--
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` varchar(10) NOT NULL,
  `nama_user` varchar(30) DEFAULT NULL,
  `email_user` varchar(40) DEFAULT NULL,
  `kontak` varchar(13) DEFAULT NULL,
  `alamat` text DEFAULT NULL,
  `gender_user` varchar(1) NOT NULL,
  `password` varchar(30) DEFAULT NULL,
  `id_status` int(11) DEFAULT NULL,
  `id_role` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `nama_user`, `email_user`, `kontak`, `alamat`, `gender_user`, `password`, `id_status`, `id_role`) VALUES
('1593614026', 'Someone', 'someone@gmail.com', '085321317658', 'Ciamis', 'L', 'MTIzNA==', 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `wilayah`
--

CREATE TABLE `wilayah` (
  `kode` varchar(13) NOT NULL,
  `nama` varchar(25) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `wilayah`
--

INSERT INTO `wilayah` (`kode`, `nama`) VALUES
('11.01', 'KAB. ACEH SELATAN'),
('11.02', 'KAB. ACEH TENGGARA'),
('11.03', 'KAB. ACEH TIMUR'),
('11.04', 'KAB. ACEH TENGAH'),
('11.05', 'KAB. ACEH BARAT'),
('11.06', 'KAB. ACEH BESAR'),
('11.07', 'KAB. PIDIE'),
('11.08', 'KAB. ACEH UTARA'),
('11.09', 'KAB. SIMEULUE'),
('11.10', 'KAB. ACEH SINGKIL'),
('11.11', 'KAB. BIREUEN'),
('11.12', 'KAB. ACEH BARAT DAYA'),
('11.13', 'KAB. GAYO LUES'),
('11.14', 'KAB. ACEH JAYA'),
('11.15', 'KAB. NAGAN RAYA'),
('11.16', 'KAB. ACEH TAMIANG'),
('11.17', 'KAB. BENER MERIAH'),
('11.18', 'KAB. PIDIE JAYA'),
('11.71', 'KOTA BANDA ACEH'),
('11.72', 'KOTA SABANG'),
('11.73', 'KOTA LHOKSEUMAWE'),
('11.74', 'KOTA LANGSA'),
('11.75', 'KOTA SUBULUSSALAM'),
('12.01', 'KAB. TAPANULI TENGAH'),
('12.02', 'KAB. TAPANULI UTARA'),
('12.03', 'KAB. TAPANULI SELATAN'),
('12.04', 'KAB. NIAS'),
('12.05', 'KAB. LANGKAT'),
('12.06', 'KAB. KARO'),
('12.07', 'KAB. DELI SERDANG'),
('12.08', 'KAB. SIMALUNGUN'),
('12.09', 'KAB. ASAHAN'),
('12.10', 'KAB. LABUHANBATU'),
('12.11', 'KAB. DAIRI'),
('12.12', 'KAB. TOBA SAMOSIR'),
('12.13', 'KAB. MANDAILING NATAL'),
('12.14', 'KAB. NIAS SELATAN'),
('12.15', 'KAB. PAKPAK BHARAT'),
('12.16', 'KAB. HUMBANG HASUNDUTAN'),
('12.17', 'KAB. SAMOSIR'),
('12.18', 'KAB. SERDANG BEDAGAI'),
('12.19', 'KAB. BATU BARA'),
('12.20', 'KAB. PADANG LAWAS UTARA'),
('12.21', 'KAB. PADANG LAWAS'),
('12.22', 'KAB. LABUHANBATU SELATAN'),
('12.23', 'KAB. LABUHANBATU UTARA'),
('12.24', 'KAB. NIAS UTARA'),
('12.25', 'KAB. NIAS BARAT'),
('12.71', 'KOTA MEDAN'),
('12.72', 'KOTA PEMATANG SIANTAR'),
('12.73', 'KOTA SIBOLGA'),
('12.74', 'KOTA TANJUNG BALAI'),
('12.75', 'KOTA BINJAI'),
('12.76', 'KOTA TEBING TINGGI'),
('12.77', 'KOTA PADANGSIDIMPUAN'),
('12.78', 'KOTA GUNUNGSITOLI'),
('13.01', 'KAB. PESISIR SELATAN'),
('13.02', 'KAB. SOLOK'),
('13.03', 'KAB. SIJUNJUNG'),
('13.04', 'KAB. TANAH DATAR'),
('13.05', 'KAB. PADANG PARIAMAN'),
('13.06', 'KAB. AGAM'),
('13.07', 'KAB. LIMA PULUH KOTA'),
('13.08', 'KAB. PASAMAN'),
('13.09', 'KAB. KEPULAUAN MENTAWAI'),
('13.10', 'KAB. DHARMASRAYA'),
('13.11', 'KAB. SOLOK SELATAN'),
('13.12', 'KAB. PASAMAN BARAT'),
('13.71', 'KOTA PADANG'),
('13.72', 'KOTA SOLOK'),
('13.73', 'KOTA SAWAHLUNTO'),
('13.74', 'KOTA PADANG PANJANG'),
('13.75', 'KOTA BUKITTINGGI'),
('13.76', 'KOTA PAYAKUMBUH'),
('13.77', 'KOTA PARIAMAN'),
('14.01', 'KAB. KAMPAR'),
('14.02', 'KAB. INDRAGIRI HULU'),
('14.03', 'KAB. BENGKALIS'),
('14.04', 'KAB. INDRAGIRI HILIR'),
('14.05', 'KAB.  PELALAWAN'),
('14.06', 'KAB.  ROKAN HULU'),
('14.07', 'KAB.  ROKAN HILIR'),
('14.08', 'KAB.  SIAK'),
('14.09', 'KAB. KUANTAN SINGINGI'),
('14.10', 'KAB. KEPULAUAN MERANTI'),
('14.71', 'KOTA PEKANBARU'),
('14.72', 'KOTA DUMAI'),
('15.01', 'KAB.  KERINCI'),
('15.02', 'KAB.  MERANGIN'),
('15.03', 'KAB. SAROLANGUN'),
('15.04', 'KAB. BATANGHARI'),
('15.05', 'KAB.  MUARO JAMBI'),
('15.06', 'KAB. TANJUNG JABUNG BARAT'),
('15.07', 'KAB. TANJUNG JABUNG TIMUR'),
('15.08', 'KAB. BUNGO'),
('15.09', 'KAB. TEBO'),
('15.71', 'KOTA JAMBI'),
('15.72', 'KOTA SUNGAI PENUH'),
('16.01', 'KAB. OGAN KOMERING ULU'),
('16.02', 'KAB. OGAN KOMERING ILIR'),
('16.03', 'KAB. MUARA ENIM'),
('16.04', 'KAB. LAHAT'),
('16.05', 'KAB. MUSI RAWAS'),
('16.06', 'KAB. MUSI BANYUASIN'),
('16.07', 'KAB. BANYUASIN'),
('16.08', 'KAB. OGAN KOMERING ULU TI'),
('16.09', 'KAB. OGAN KOMERING ULU SE'),
('16.10', 'KAB. OGAN ILIR'),
('16.11', 'KAB. EMPAT LAWANG'),
('16.12', 'KAB. PENUKAL ABAB LEMATAN'),
('16.13', 'KAB. MUSI RAWAS UTARA'),
('16.71', 'KOTA PALEMBANG'),
('16.72', 'KOTA PAGAR ALAM'),
('16.73', 'KOTA LUBUK LINGGAU'),
('16.74', 'KOTA PRABUMULIH'),
('17.01', 'KAB. BENGKULU SELATAN'),
('17.02', 'KAB. REJANG LEBONG'),
('17.03', 'KAB. BENGKULU UTARA'),
('17.04', 'KAB. KAUR'),
('17.05', 'KAB. SELUMA'),
('17.06', 'KAB. MUKO MUKO'),
('17.07', 'KAB. LEBONG'),
('17.08', 'KAB. KEPAHIANG'),
('17.09', 'KAB. BENGKULU TENGAH'),
('17.71', 'KOTA BENGKULU'),
('18.01', 'KAB. LAMPUNG SELATAN'),
('18.02', 'KAB. LAMPUNG TENGAH'),
('18.03', 'KAB. LAMPUNG UTARA'),
('18.04', 'KAB. LAMPUNG BARAT'),
('18.05', 'KAB. TULANG BAWANG'),
('18.06', 'KAB. TANGGAMUS'),
('18.07', 'KAB. LAMPUNG TIMUR'),
('18.08', 'KAB. WAY KANAN'),
('18.09', 'KAB. PESAWARAN'),
('18.10', 'KAB. PRINGSEWU'),
('18.11', 'KAB. MESUJI'),
('18.12', 'KAB. TULANG BAWANG BARAT'),
('18.13', 'KAB. PESISIR BARAT'),
('18.71', 'KOTA BANDAR LAMPUNG'),
('18.72', 'KOTA METRO'),
('19.01', 'KAB. BANGKA'),
('19.02', 'KAB. BELITUNG'),
('19.03', 'KAB. BANGKA SELATAN'),
('19.04', 'KAB. BANGKA TENGAH'),
('19.05', 'KAB. BANGKA BARAT'),
('19.06', 'KAB. BELITUNG TIMUR'),
('19.71', 'KOTA PANGKAL PINANG'),
('21.01', 'KAB. BINTAN'),
('21.02', 'KAB. KARIMUN'),
('21.03', 'KAB. NATUNA'),
('21.04', 'KAB. LINGGA'),
('21.05', 'KAB. KEPULAUAN ANAMBAS'),
('21.71', 'KOTA BATAM'),
('21.72', 'KOTA TANJUNG PINANG'),
('31.01', 'KAB. ADM. KEP. SERIBU'),
('31.71', 'KOTA ADM. JAKARTA PUSAT'),
('31.72', 'KOTA ADM. JAKARTA UTARA'),
('31.73', 'KOTA ADM. JAKARTA BARAT'),
('31.74', 'KOTA ADM. JAKARTA SELATAN'),
('31.75', 'KOTA ADM. JAKARTA TIMUR'),
('32.01', 'KAB. BOGOR'),
('32.02', 'KAB. SUKABUMI'),
('32.03', 'KAB. CIANJUR'),
('32.04', 'KAB. BANDUNG'),
('32.05', 'KAB. GARUT'),
('32.06', 'KAB. TASIKMALAYA'),
('32.07', 'KAB. CIAMIS'),
('32.08', 'KAB. KUNINGAN'),
('32.09', 'KAB. CIREBON'),
('32.10', 'KAB. MAJALENGKA'),
('32.11', 'KAB. SUMEDANG'),
('32.12', 'KAB. INDRAMAYU'),
('32.13', 'KAB. SUBANG'),
('32.14', 'KAB. PURWAKARTA'),
('32.15', 'KAB. KARAWANG'),
('32.16', 'KAB. BEKASI'),
('32.17', 'KAB. BANDUNG BARAT'),
('32.18', 'KAB. PANGANDARAN'),
('32.71', 'KOTA BOGOR'),
('32.72', 'KOTA SUKABUMI'),
('32.73', 'KOTA BANDUNG'),
('32.74', 'KOTA CIREBON'),
('32.75', 'KOTA BEKASI'),
('32.76', 'KOTA DEPOK'),
('32.77', 'KOTA CIMAHI'),
('32.78', 'KOTA TASIKMALAYA'),
('32.79', 'KOTA BANJAR'),
('33.01', 'KAB. CILACAP'),
('33.02', 'KAB. BANYUMAS'),
('33.03', 'KAB. PURBALINGGA'),
('33.04', 'KAB. BANJARNEGARA'),
('33.05', 'KAB. KEBUMEN'),
('33.06', 'KAB. PURWOREJO'),
('33.07', 'KAB. WONOSOBO'),
('33.08', 'KAB. MAGELANG'),
('33.09', 'KAB. BOYOLALI'),
('33.10', 'KAB. KLATEN'),
('33.11', 'KAB. SUKOHARJO'),
('33.12', 'KAB. WONOGIRI'),
('33.13', 'KAB. KARANGANYAR'),
('33.14', 'KAB. SRAGEN'),
('33.15', 'KAB. GROBOGAN'),
('33.16', 'KAB. BLORA'),
('33.17', 'KAB. REMBANG'),
('33.18', 'KAB. PATI'),
('33.19', 'KAB. KUDUS'),
('33.20', 'KAB. JEPARA'),
('33.21', 'KAB. DEMAK'),
('33.22', 'KAB. SEMARANG'),
('33.23', 'KAB. TEMANGGUNG'),
('33.24', 'KAB. KENDAL'),
('33.25', 'KAB. BATANG'),
('33.26', 'KAB. PEKALONGAN'),
('33.27', 'KAB. PEMALANG'),
('33.28', 'KAB. TEGAL'),
('33.29', 'KAB. BREBES'),
('33.71', 'KOTA MAGELANG'),
('33.72', 'KOTA SURAKARTA'),
('33.73', 'KOTA SALATIGA'),
('33.74', 'KOTA SEMARANG'),
('33.75', 'KOTA PEKALONGAN'),
('33.76', 'KOTA TEGAL'),
('34.01', 'KAB. KULON PROGO'),
('34.02', 'KAB. BANTUL'),
('34.03', 'KAB. GUNUNGKIDUL'),
('34.04', 'KAB. SLEMAN'),
('34.71', 'KOTA YOGYAKARTA'),
('35.01', 'KAB. PACITAN'),
('35.02', 'KAB. PONOROGO'),
('35.03', 'KAB. TRENGGALEK'),
('35.04', 'KAB. TULUNGAGUNG'),
('35.05', 'KAB. BLITAR'),
('35.06', 'KAB. KEDIRI'),
('35.07', 'KAB. MALANG'),
('35.08', 'KAB. LUMAJANG'),
('35.09', 'KAB. JEMBER'),
('35.10', 'KAB. BANYUWANGI'),
('35.11', 'KAB. BONDOWOSO'),
('35.12', 'KAB. SITUBONDO'),
('35.13', 'KAB. PROBOLINGGO'),
('35.14', 'KAB. PASURUAN'),
('35.15', 'KAB. SIDOARJO'),
('35.16', 'KAB. MOJOKERTO'),
('35.17', 'KAB. JOMBANG'),
('35.18', 'KAB. NGANJUK'),
('35.19', 'KAB. MADIUN'),
('35.20', 'KAB. MAGETAN'),
('35.21', 'KAB. NGAWI'),
('35.22', 'KAB. BOJONEGORO'),
('35.23', 'KAB. TUBAN'),
('35.24', 'KAB. LAMONGAN'),
('35.25', 'KAB. GRESIK'),
('35.26', 'KAB. BANGKALAN'),
('35.27', 'KAB. SAMPANG'),
('35.28', 'KAB. PAMEKASAN'),
('35.29', 'KAB. SUMENEP'),
('35.71', 'KOTA KEDIRI'),
('35.72', 'KOTA BLITAR'),
('35.73', 'KOTA MALANG'),
('35.74', 'KOTA PROBOLINGGO'),
('35.75', 'KOTA PASURUAN'),
('35.76', 'KOTA MOJOKERTO'),
('35.77', 'KOTA MADIUN'),
('35.78', 'KOTA SURABAYA'),
('35.79', 'KOTA BATU'),
('36.01', 'KAB. PANDEGLANG'),
('36.02', 'KAB. LEBAK'),
('36.03', 'KAB. TANGERANG'),
('36.04', 'KAB. SERANG'),
('36.71', 'KOTA TANGERANG'),
('36.72', 'KOTA CILEGON'),
('36.73', 'KOTA SERANG'),
('36.74', 'KOTA TANGERANG SELATAN'),
('51.01', 'KAB. JEMBRANA'),
('51.02', 'KAB. TABANAN'),
('51.03', 'KAB. BADUNG'),
('51.04', 'KAB. GIANYAR'),
('51.05', 'KAB. KLUNGKUNG'),
('51.06', 'KAB. BANGLI'),
('51.07', 'KAB. KARANGASEM'),
('51.08', 'KAB. BULELENG'),
('51.71', 'KOTA DENPASAR'),
('52.01', 'KAB. LOMBOK BARAT'),
('52.02', 'KAB. LOMBOK TENGAH'),
('52.03', 'KAB. LOMBOK TIMUR'),
('52.04', 'KAB. SUMBAWA'),
('52.05', 'KAB. DOMPU'),
('52.06', 'KAB. BIMA'),
('52.07', 'KAB. SUMBAWA BARAT'),
('52.08', 'KAB. LOMBOK UTARA'),
('52.71', 'KOTA MATARAM'),
('52.72', 'KOTA BIMA'),
('53.01', 'KAB. KUPANG'),
('53.02', 'KAB TIMOR TENGAH SELATAN'),
('53.03', 'KAB. TIMOR TENGAH UTARA'),
('53.04', 'KAB. BELU'),
('53.05', 'KAB. ALOR'),
('53.06', 'KAB. FLORES TIMUR'),
('53.07', 'KAB. SIKKA'),
('53.08', 'KAB. ENDE'),
('53.09', 'KAB. NGADA'),
('53.10', 'KAB. MANGGARAI'),
('53.11', 'KAB. SUMBA TIMUR'),
('53.12', 'KAB. SUMBA BARAT'),
('53.13', 'KAB. LEMBATA'),
('53.14', 'KAB. ROTE NDAO'),
('53.15', 'KAB. MANGGARAI BARAT'),
('53.16', 'KAB. NAGEKEO'),
('53.17', 'KAB. SUMBA TENGAH'),
('53.18', 'KAB. SUMBA BARAT DAYA'),
('53.19', 'KAB. MANGGARAI TIMUR'),
('53.20', 'KAB. SABU RAIJUA'),
('53.21', 'KAB. MALAKA'),
('53.71', 'KOTA KUPANG'),
('61.01', 'KAB. SAMBAS'),
('61.02', 'KAB. MEMPAWAH'),
('61.03', 'KAB. SANGGAU'),
('61.04', 'KAB. KETAPANG'),
('61.05', 'KAB. SINTANG'),
('61.06', 'KAB. KAPUAS HULU'),
('61.07', 'KAB. BENGKAYANG'),
('61.08', 'KAB. LANDAK'),
('61.09', 'KAB. SEKADAU'),
('61.10', 'KAB. MELAWI'),
('61.11', 'KAB. KAYONG UTARA'),
('61.12', 'KAB. KUBU RAYA'),
('61.71', 'KOTA PONTIANAK'),
('61.72', 'KOTA SINGKAWANG'),
('62.01', 'KAB. KOTAWARINGIN BARAT'),
('62.02', 'KAB. KOTAWARINGIN TIMUR'),
('62.03', 'KAB. KAPUAS'),
('62.04', 'KAB. BARITO SELATAN'),
('62.05', 'KAB. BARITO UTARA'),
('62.06', 'KAB. KATINGAN'),
('62.07', 'KAB. SERUYAN'),
('62.08', 'KAB. SUKAMARA'),
('62.09', 'KAB. LAMANDAU'),
('62.10', 'KAB. GUNUNG MAS'),
('62.11', 'KAB. PULANG PISAU'),
('62.12', 'KAB. MURUNG RAYA'),
('62.13', 'KAB. BARITO TIMUR'),
('62.71', 'KOTA PALANGKARAYA'),
('63.01', 'KAB. TANAH LAUT'),
('63.02', 'KAB. KOTABARU'),
('63.03', 'KAB. BANJAR'),
('63.04', 'KAB. BARITO KUALA'),
('63.05', 'KAB. TAPIN'),
('63.06', 'KAB. HULU SUNGAI SELATAN'),
('63.07', 'KAB. HULU SUNGAI TENGAH'),
('63.08', 'KAB. HULU SUNGAI UTARA'),
('63.09', 'KAB. TABALONG'),
('63.10', 'KAB. TANAH BUMBU'),
('63.11', 'KAB. BALANGAN'),
('63.71', 'KOTA BANJARMASIN'),
('63.72', 'KOTA BANJARBARU'),
('64.01', 'KAB. PASER'),
('64.02', 'KAB. KUTAI KARTANEGARA'),
('64.03', 'KAB. BERAU'),
('64.07', 'KAB. KUTAI BARAT'),
('64.08', 'KAB. KUTAI TIMUR'),
('64.09', 'KAB. PENAJAM PASER UTARA'),
('64.11', 'KAB. MAHAKAM ULU'),
('64.71', 'KOTA BALIKPAPAN'),
('64.72', 'KOTA SAMARINDA'),
('64.74', 'KOTA BONTANG'),
('65.01', 'KAB. BULUNGAN'),
('65.02', 'KAB. MALINAU'),
('65.03', 'KAB. NUNUKAN'),
('65.04', 'KAB. TANA TIDUNG'),
('65.71', 'KOTA TARAKAN'),
('71.01', 'KAB. BOLAANG MONGONDOW'),
('71.02', 'KAB. MINAHASA'),
('71.03', 'KAB. KEPULAUAN SANGIHE'),
('71.04', 'KAB. KEPULAUAN TALAUD'),
('71.05', 'KAB. MINAHASA SELATAN'),
('71.06', 'KAB. MINAHASA UTARA'),
('71.07', 'KAB. MINAHASA TENGGARA'),
('71.08', 'KAB. BOLAANG MONGONDOW UT'),
('71.09', 'KAB. KEP. SIAU TAGULANDAN'),
('71.10', 'KAB. BOLAANG MONGONDOW TI'),
('71.11', 'KAB. BOLAANG MONGONDOW SE'),
('71.71', 'KOTA MANADO'),
('71.72', 'KOTA BITUNG'),
('71.73', 'KOTA TOMOHON'),
('71.74', 'KOTA KOTAMOBAGU'),
('72.01', 'KAB. BANGGAI'),
('72.02', 'KAB. POSO'),
('72.03', 'KAB. DONGGALA'),
('72.04', 'KAB. TOLI TOLI'),
('72.05', 'KAB. BUOL'),
('72.06', 'KAB. MOROWALI'),
('72.07', 'KAB. BANGGAI KEPULAUAN'),
('72.08', 'KAB. PARIGI MOUTONG'),
('72.09', 'KAB. TOJO UNA UNA'),
('72.10', 'KAB. SIGI'),
('72.11', 'KAB. BANGGAI LAUT'),
('72.12', 'KAB. MOROWALI UTARA'),
('72.71', 'KOTA PALU'),
('73.01', 'KAB. KEPULAUAN SELAYAR'),
('73.02', 'KAB. BULUKUMBA'),
('73.03', 'KAB. BANTAENG'),
('73.04', 'KAB. JENEPONTO'),
('73.05', 'KAB. TAKALAR'),
('73.06', 'KAB. GOWA'),
('73.07', 'KAB. SINJAI'),
('73.08', 'KAB. BONE'),
('73.09', 'KAB. MAROS'),
('73.10', 'KAB. PANGKAJENE KEPULAUAN'),
('73.11', 'KAB. BARRU'),
('73.12', 'KAB. SOPPENG'),
('73.13', 'KAB. WAJO'),
('73.14', 'KAB. SIDENRENG RAPPANG'),
('73.15', 'KAB. PINRANG'),
('73.16', 'KAB. ENREKANG'),
('73.17', 'KAB. LUWU'),
('73.18', 'KAB. TANA TORAJA'),
('73.22', 'KAB. LUWU UTARA'),
('73.24', 'KAB. LUWU TIMUR'),
('73.26', 'KAB. TORAJA UTARA'),
('73.71', 'KOTA MAKASSAR'),
('73.72', 'KOTA PARE PARE'),
('73.73', 'KOTA PALOPO'),
('74.01', 'KAB. KOLAKA'),
('74.02', 'KAB. KONAWE'),
('74.03', 'KAB. MUNA'),
('74.04', 'KAB. BUTON'),
('74.05', 'KAB. KONAWE SELATAN'),
('74.06', 'KAB. BOMBANA'),
('74.07', 'KAB. WAKATOBI'),
('74.08', 'KAB. KOLAKA UTARA'),
('74.09', 'KAB. KONAWE UTARA'),
('74.10', 'KAB. BUTON UTARA'),
('74.11', 'KAB. KOLAKA TIMUR'),
('74.12', 'KAB. KONAWE KEPULAUAN'),
('74.13', 'KAB. MUNA BARAT'),
('74.14', 'KAB. BUTON TENGAH'),
('74.15', 'KAB. BUTON SELATAN'),
('74.71', 'KOTA KENDARI'),
('74.72', 'KOTA BAU BAU'),
('75.01', 'KAB. GORONTALO'),
('75.02', 'KAB. BOALEMO'),
('75.03', 'KAB. BONE BOLANGO'),
('75.04', 'KAB. PAHUWATO'),
('75.05', 'KAB. GORONTALO UTARA'),
('75.71', 'KOTA GORONTALO'),
('76.01', 'KAB. MAMUJU UTARA'),
('76.02', 'KAB. MAMUJU'),
('76.03', 'KAB. MAMASA'),
('76.04', 'KAB. POLEWALI MANDAR'),
('76.05', 'KAB. MAJENE'),
('76.06', 'KAB. MAMUJU TENGAH'),
('81.01', 'KAB. MALUKU TENGAH'),
('81.02', 'KAB. MALUKU TENGGARA'),
('81.03', 'KAB MALUKU TENGGARA BARAT'),
('81.04', 'KAB. BURU'),
('81.05', 'KAB. SERAM BAGIAN TIMUR'),
('81.06', 'KAB. SERAM BAGIAN BARAT'),
('81.07', 'KAB. KEPULAUAN ARU'),
('81.08', 'KAB. MALUKU BARAT DAYA'),
('81.09', 'KAB. BURU SELATAN'),
('81.71', 'KOTA AMBON'),
('81.72', 'KOTA TUAL'),
('82.01', 'KAB. HALMAHERA BARAT'),
('82.02', 'KAB. HALMAHERA TENGAH'),
('82.03', 'KAB. HALMAHERA UTARA'),
('82.04', 'KAB. HALMAHERA SELATAN'),
('82.05', 'KAB. KEPULAUAN SULA'),
('82.06', 'KAB. HALMAHERA TIMUR'),
('82.07', 'KAB. PULAU MOROTAI'),
('82.08', 'KAB. PULAU TALIABU'),
('82.71', 'KOTA TERNATE'),
('82.72', 'KOTA TIDORE KEPULAUAN'),
('91.01', 'KAB. MERAUKE'),
('91.02', 'KAB. JAYAWIJAYA'),
('91.03', 'KAB. JAYAPURA'),
('91.04', 'KAB. NABIRE'),
('91.05', 'KAB. KEPULAUAN YAPEN'),
('91.06', 'KAB. BIAK NUMFOR'),
('91.07', 'KAB. PUNCAK JAYA'),
('91.08', 'KAB. PANIAI'),
('91.09', 'KAB. MIMIKA'),
('91.10', 'KAB. SARMI'),
('91.11', 'KAB. KEEROM'),
('91.12', 'KAB PEGUNUNGAN BINTANG'),
('91.13', 'KAB. YAHUKIMO'),
('91.14', 'KAB. TOLIKARA'),
('91.15', 'KAB. WAROPEN'),
('91.16', 'KAB. BOVEN DIGOEL'),
('91.17', 'KAB. MAPPI'),
('91.18', 'KAB. ASMAT'),
('91.19', 'KAB. SUPIORI'),
('91.20', 'KAB. MAMBERAMO RAYA'),
('91.21', 'KAB. MAMBERAMO TENGAH'),
('91.22', 'KAB. YALIMO'),
('91.23', 'KAB. LANNY JAYA'),
('91.24', 'KAB. NDUGA'),
('91.25', 'KAB. PUNCAK'),
('91.26', 'KAB. DOGIYAI'),
('91.27', 'KAB. INTAN JAYA'),
('91.28', 'KAB. DEIYAI'),
('91.71', 'KOTA JAYAPURA'),
('92.01', 'KAB. SORONG'),
('92.02', 'KAB. MANOKWARI'),
('92.03', 'KAB. FAK FAK'),
('92.04', 'KAB. SORONG SELATAN'),
('92.05', 'KAB. RAJA AMPAT'),
('92.06', 'KAB. TELUK BINTUNI'),
('92.07', 'KAB. TELUK WONDAMA'),
('92.08', 'KAB. KAIMANA'),
('92.09', 'KAB. TAMBRAUW'),
('92.10', 'KAB. MAYBRAT'),
('92.11', 'KAB. MANOKWARI SELATAN'),
('92.12', 'KAB. PEGUNUNGAN ARFAK'),
('92.71', 'KOTA SORONG');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_event`
--
ALTER TABLE `tb_event`
  ADD PRIMARY KEY (`id_event`);

--
-- Indexes for table `tb_jenis_tiket`
--
ALTER TABLE `tb_jenis_tiket`
  ADD PRIMARY KEY (`id_jenis_tiket`);

--
-- Indexes for table `tb_pemesanan`
--
ALTER TABLE `tb_pemesanan`
  ADD PRIMARY KEY (`id_pemesanan`);

--
-- Indexes for table `tb_role`
--
ALTER TABLE `tb_role`
  ADD PRIMARY KEY (`id_role`);

--
-- Indexes for table `tb_stage`
--
ALTER TABLE `tb_stage`
  ADD PRIMARY KEY (`id_stage`);

--
-- Indexes for table `tb_status`
--
ALTER TABLE `tb_status`
  ADD PRIMARY KEY (`id_status`);

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- Indexes for table `wilayah`
--
ALTER TABLE `wilayah`
  ADD PRIMARY KEY (`kode`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_jenis_tiket`
--
ALTER TABLE `tb_jenis_tiket`
  MODIFY `id_jenis_tiket` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `tb_stage`
--
ALTER TABLE `tb_stage`
  MODIFY `id_stage` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tb_status`
--
ALTER TABLE `tb_status`
  MODIFY `id_status` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
adaideadaideadaideadaideadaideadaideadaide