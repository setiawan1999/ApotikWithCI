-- phpMyAdmin SQL Dump
-- version 3.5.2.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 21, 2017 at 03:52 PM
-- Server version: 5.5.27
-- PHP Version: 5.4.7

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `db_nyobaapotik`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE IF NOT EXISTS `account` (
  `USERNAME` varchar(255) NOT NULL,
  `NIP_KARYAWAN` int(11) NOT NULL AUTO_INCREMENT,
  `PASSWORD` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`USERNAME`),
  KEY `FK_RELATIONSHIP_6` (`NIP_KARYAWAN`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=29 ;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`USERNAME`, `NIP_KARYAWAN`, `PASSWORD`) VALUES
('fauzan', 27, 'adzim'),
('kamandak', 28, 'desta'),
('superadmin', 1, 'superadmin');

-- --------------------------------------------------------

--
-- Table structure for table `data_transaksi`
--

CREATE TABLE IF NOT EXISTS `data_transaksi` (
  `ID_TRANSAKSI` int(11) NOT NULL,
  `TOTAL_HARGA` int(11) DEFAULT NULL,
  `TGL_BELI` varchar(255) DEFAULT NULL,
  `NAMA_PELANGGAN` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`ID_TRANSAKSI`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `detil_transaksi`
--

CREATE TABLE IF NOT EXISTS `detil_transaksi` (
  `ID_OBAT` int(11) DEFAULT NULL,
  `NIP_KARYAWAN` int(11) DEFAULT NULL,
  `ID_TRANSAKSI` int(11) DEFAULT NULL,
  `JUM_OBAT` int(11) DEFAULT NULL,
  `SUB_HARGA` int(11) DEFAULT NULL,
  `NAM_OBAT` text,
  KEY `FK_RELATIONSHIP_2` (`ID_TRANSAKSI`),
  KEY `FK_RELATIONSHIP_3` (`ID_OBAT`),
  KEY `FK_RELATIONSHIP_7` (`NIP_KARYAWAN`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `karyawan`
--

CREATE TABLE IF NOT EXISTS `karyawan` (
  `NIP_KARYAWAN` int(11) NOT NULL AUTO_INCREMENT,
  `ALAMAT_KARYAWAN` text,
  `NAMA_KARYAWAN` varchar(255) DEFAULT NULL,
  `ROLE_KARYAWAN` varchar(255) DEFAULT NULL,
  `TTL_KARYAWAN` varchar(255) DEFAULT NULL,
  `FOTO_KARYAWAN` text,
  `JK_KARYAWAN` varchar(255) NOT NULL,
  PRIMARY KEY (`NIP_KARYAWAN`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=29 ;

--
-- Dumping data for table `karyawan`
--

INSERT INTO `karyawan` (`NIP_KARYAWAN`, `ALAMAT_KARYAWAN`, `NAMA_KARYAWAN`, `ROLE_KARYAWAN`, `TTL_KARYAWAN`, `FOTO_KARYAWAN`, `JK_KARYAWAN`) VALUES
(1, 'Tanjung Sari Rt. 05 Rw. 02, Candi-Siodarjo', 'Setiawan Dwi Prasetiyo', 'superadmin', '1999-11-29', 'wawan.jpg', 'Laki-laki'),
(27, 'jkkjajdas', 'Muhammad Fauzan Adzim', 'superadmin', '2001-02-09', 'WIN_20170423_18_55_10_Pro1.jpg', 'Laki-laki'),
(28, 'Probolinggo', 'Desta Tamandaka', 'admin', '2000-05-25', 'WIN_20170425_19_56_41_Pro24.jpg', 'Laki-laki');

-- --------------------------------------------------------

--
-- Table structure for table `obat`
--

CREATE TABLE IF NOT EXISTS `obat` (
  `ID_OBAT` int(11) NOT NULL AUTO_INCREMENT,
  `NAMA_OBAT` text,
  `PRODUSEN` varchar(255) DEFAULT NULL,
  `HARGA` int(255) DEFAULT NULL,
  `ID_SUPLIER` int(11) NOT NULL,
  `FOTO_OBAT` text NOT NULL,
  `STOCK` int(255) NOT NULL,
  PRIMARY KEY (`ID_OBAT`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `obat`
--

INSERT INTO `obat` (`ID_OBAT`, `NAMA_OBAT`, `PRODUSEN`, `HARGA`, `ID_SUPLIER`, `FOTO_OBAT`, `STOCK`) VALUES
(1, 'Paramex', 'PT. Cahaya Indah', 1000, 3, 'WIN_20170425_19_56_41_Pro.jpg', 50);

-- --------------------------------------------------------

--
-- Table structure for table `suplier`
--

CREATE TABLE IF NOT EXISTS `suplier` (
  `ID_SUPLIER` int(11) NOT NULL AUTO_INCREMENT,
  `NAMA_SUPLIER` varchar(255) DEFAULT NULL,
  `ALAMAT_SUPLIER` text,
  `KOTA_SUPLIER` varchar(255) DEFAULT NULL,
  `TELP_SUPLIER` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`ID_SUPLIER`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `suplier`
--

INSERT INTO `suplier` (`ID_SUPLIER`, `NAMA_SUPLIER`, `ALAMAT_SUPLIER`, `KOTA_SUPLIER`, `TELP_SUPLIER`) VALUES
(3, 'Danang Prasetya Kalingga', 'Jl. Danau Ranau', 'Malang', '08967236723');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `account`
--
ALTER TABLE `account`
  ADD CONSTRAINT `FK_RELATIONSHIP_6` FOREIGN KEY (`NIP_KARYAWAN`) REFERENCES `karyawan` (`NIP_KARYAWAN`);

--
-- Constraints for table `detil_transaksi`
--
ALTER TABLE `detil_transaksi`
  ADD CONSTRAINT `FK_RELATIONSHIP_2` FOREIGN KEY (`ID_TRANSAKSI`) REFERENCES `data_transaksi` (`ID_TRANSAKSI`),
  ADD CONSTRAINT `FK_RELATIONSHIP_3` FOREIGN KEY (`ID_OBAT`) REFERENCES `obat` (`ID_OBAT`),
  ADD CONSTRAINT `FK_RELATIONSHIP_7` FOREIGN KEY (`NIP_KARYAWAN`) REFERENCES `karyawan` (`NIP_KARYAWAN`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
