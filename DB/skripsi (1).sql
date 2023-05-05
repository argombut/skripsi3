-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 16, 2022 at 10:42 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `skripsi`
--

-- --------------------------------------------------------

--
-- Table structure for table `datainduk`
--

CREATE TABLE `datainduk` (
  `kd_induk` int(15) NOT NULL,
  `no_kk` varchar(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `nm_panggilan` varchar(20) NOT NULL,
  `status_hub_kk` varchar(20) NOT NULL,
  `tmp_lahir` varchar(20) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `j_kelamin` varchar(15) NOT NULL,
  `kd_agama` int(15) NOT NULL,
  `kd_pendidikan` int(15) NOT NULL,
  `kd_pekerjaan` int(15) NOT NULL,
  `status_kawin` varchar(20) NOT NULL,
  `status_mukim` varchar(20) NOT NULL,
  `keterangan_mukim` varchar(20) NOT NULL,
  `kd_level_ekonomi` int(15) NOT NULL,
  `gol_darah` varchar(3) NOT NULL,
  `is_kt` varchar(10) NOT NULL,
  `is_latin` varchar(10) NOT NULL,
  `is_hijaiyah` varchar(10) NOT NULL,
  `is_iqra` varchar(10) NOT NULL,
  `is_quran` varchar(10) NOT NULL,
  `is_5waktu` varchar(10) NOT NULL,
  `is_jamaah` varchar(10) NOT NULL,
  `is_zakat_fitrah` varchar(10) NOT NULL,
  `is_zakat_mal` varchar(10) NOT NULL,
  `is_qurban` varchar(5) NOT NULL,
  `is_haji` varchar(5) NOT NULL,
  `is_umrah` varchar(5) NOT NULL,
  `kd_rt` varchar(5) NOT NULL,
  `no_ktp` varchar(15) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `datainduk`
--

INSERT INTO `datainduk` (`kd_induk`, `no_kk`, `nama`, `nm_panggilan`, `status_hub_kk`, `tmp_lahir`, `tgl_lahir`, `j_kelamin`, `kd_agama`, `kd_pendidikan`, `kd_pekerjaan`, `status_kawin`, `status_mukim`, `keterangan_mukim`, `kd_level_ekonomi`, `gol_darah`, `is_kt`, `is_latin`, `is_hijaiyah`, `is_iqra`, `is_quran`, `is_5waktu`, `is_jamaah`, `is_zakat_fitrah`, `is_zakat_mal`, `is_qurban`, `is_haji`, `is_umrah`, `kd_rt`, `no_ktp`, `status`) VALUES
(11, '3404070502056649', 'Kismanto', 'Kismanto', 'Kepala Keluarga', 'Default', '1959-11-20', 'Laki-laki', 1, 6, 3, 'Kawin', 'Mukim', 'Mukim', 1, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '001', 'default1', 'Aktif'),
(12, '3404070502056649', 'Nurharini', 'Nurharini', 'Istri', 'Default', '1963-10-22', 'Perempuan', 1, 5, 6, 'Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '001', 'dedault2', 'Aktif'),
(13, '3404070502056649', 'Roy Hermanto', 'Roy', 'Anak', 'Default', '1991-09-05', 'Laki-laki', 1, 5, 8, 'Belum Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '001', 'default3', 'Aktif'),
(14, '3310040702042583', 'FX Suripto', 'Suripto', 'Kepala Keluarga', 'Default', '1958-07-01', 'Laki-laki', 3, 8, 15, 'Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '002', 'default4', 'Aktif'),
(15, '3310040702042583', 'N. Kusbandiyah', 'N. Kusbandiyah', 'Istri', 'Default', '1961-10-01', 'Perempuan', 3, 8, 6, 'Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '002', 'default5', 'Aktif'),
(16, '3310040702042583', 'A. Sri Lestari Murtiningsih', 'Sri', 'Anak', 'Default', '1983-04-26', 'Perempuan', 3, 2, 8, 'Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '002', 'default6', 'Aktif'),
(17, '3310040702042583', 'Bernadeta Septin Purnama Wati', 'Septin', 'Anak', 'Default', '1985-09-30', 'Perempuan', 3, 1, 8, 'Belum Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '002', 'default7', 'Aktif'),
(18, '3310040702042583', 'Sofyan Wahyudi Budi Santoso', 'Sofyan', 'Anak', 'Default', '1994-02-04', 'Laki-laki', 3, 1, 9, 'Belum Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '002', 'default8', 'Aktif'),
(19, '3404070802051475', 'Abda Yanuar Akhsan, S.T.', 'Abda', 'Kepala Keluarga', 'Default', '1983-01-09', 'Laki-laki', 1, 4, 8, 'Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '013', 'default8339', 'Aktif'),
(20, '3404070802051475', 'Berlian Dwi Medayati, S.Farm., Apt.', 'Dwi ', 'Istri', 'Default', '1987-05-02', 'Perempuan', 1, 4, 8, 'Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '013', 'default2351', 'Aktif'),
(21, '3404072106170003', 'Mustakim', 'Mustakim', 'Kepala Keluarga', 'Default', '1967-03-03', 'Laki-laki', 1, 5, 8, 'Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '013', 'default823', 'Aktif'),
(22, '3404072106170003', 'Siti Hartati', 'Siti', 'Istri', 'Default', '1968-01-10', 'Perempuan', 1, 5, 6, 'Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '013', 'default384', 'Aktif'),
(23, '3404072106170003', 'Titian Wibisono ', 'Tian', 'Anak', 'Default', '1997-11-17', 'Laki-laki', 1, 2, 9, 'Belum Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '013', 'default387', 'Aktif'),
(24, '3404072910130016', 'Tri Paramita Susanto', 'Tri', 'Kepala Keluarga', 'Default', '1950-12-08', 'Laki-laki', 2, 4, 8, 'Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '013', 'default124', 'Aktif'),
(25, '3404072910130016', 'Niken Widawati ', 'Niken', 'Istri', 'Default', '1941-10-01', 'Perempuan', 2, 5, 8, 'Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '013', 'default546', 'Aktif'),
(26, '3404072910130016', 'Teja Prabawa', 'Teja ', 'Anak', 'Default', '1986-12-08', 'Laki-laki', 2, 5, 9, 'Belum Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '013', 'default987', 'Aktif'),
(27, '3404072910130016', 'Sri Esni', 'Sri', 'Orang Tua', 'Default', '1924-06-20', 'Perempuan', 1, 6, 10, 'Cerai Mati', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '013', 'default235', 'Aktif'),
(28, '3404100102100006', 'Rian Hermawan Pandu Prasetyo', 'Rian', 'Kepala Keluarga', 'Default', '1989-10-27', 'Laki-laki', 1, 6, 8, 'Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '001', 'default34', 'Aktif'),
(29, '3404100102100006', 'Nuryani', 'Nuryani', 'Istri', 'Default', '1985-07-12', 'Perempuan', 1, 5, 6, 'Belum Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '001', 'default767', 'Aktif'),
(30, '3404100102100006', 'Dewi Resti Pratistasari ', 'Dewi ', 'Anak', 'Default', '2010-01-15', 'Perempuan', 1, 3, 9, 'Belum Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '001', 'default325', 'Aktif'),
(31, '3404100102100006', 'Putra Noval Prasetyo', 'Putra', 'Anak', 'Default', '2013-11-18', 'Laki-laki', 1, 9, 2, 'Belum Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '001', 'default345', 'Aktif'),
(32, '3404100102100006', 'Salsabila Ayu Hanifa ', 'Salsa', 'Anak', 'Default', '2016-01-31', 'Perempuan', 1, 9, 2, 'Belum Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '001', 'default624', ''),
(33, '3404100103060010', 'Gunawan Bakti Auriyanto', 'Gunawan', 'Kepala Keluarga', 'Default', '1972-07-28', 'Laki-laki', 1, 5, 8, 'Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '013', 'default98', 'Aktif'),
(34, '3404100103060010', 'Siti Khotimah ', 'Siti', 'Istri', 'Default ', '1973-08-13', 'Perempuan', 1, 5, 6, 'Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '013', 'default87', 'Aktif'),
(35, '3404100103060010', 'Galang Pradipta', 'Galang', 'Anak ', 'Default', '2002-05-12', 'Laki-laki', 1, 9, 2, 'Belum Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '013', 'default899', 'Aktif'),
(37, '3404100103060010', 'Alifia Aurelia Meidina', 'Alifia', 'Anak', 'Default', '2003-05-29', 'Perempuan', 1, 9, 2, 'Belum Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '013', 'default989', 'Aktif'),
(38, '3404100103120007', 'Erik Wahyudi', 'Erik', 'Kepala Keluarga', 'Default ', '1966-09-07', 'Laki-laki', 1, 3, 11, 'Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '001', 'default456', 'Aktif'),
(40, '3404100103120007', 'Idah', 'Idah', 'Istri', 'Default', '1972-06-04', 'Perempuan', 1, 3, 6, 'Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '001', 'default576', 'Aktif'),
(41, '3404100103120007', 'Kholidi', 'Kholidi', 'Anak', 'Default', '1997-02-10', 'Laki-laki', 1, 5, 17, 'Belum Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '001', 'default399', 'Aktif'),
(42, '3404100107100010', 'Juwari', 'Juwari', 'Kepala Keluarga', 'Default', '1964-01-31', 'Laki-laki', 1, 5, 15, 'Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '002', 'default76', 'Aktif'),
(43, '3404100107100010', 'Sri Kartini', 'Sri', 'Istri', 'Default', '1967-02-09', 'Perempuan', 1, 5, 6, 'Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '002', 'default861', 'Aktif'),
(44, '3404100107100010', 'Dina Dwi Permata Sari', 'Dina', 'Anak', 'Default', '1999-02-02', 'Perempuan', 1, 5, 9, 'Belum Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '002', 'default054', 'Aktif'),
(45, '3404100107190005', 'Nuryani', 'Nuryani', 'Kepala Keluarga', 'Default', '1988-07-12', 'Perempuan', 1, 8, 6, 'Cerai Hidup', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '001', 'default099', 'Aktif'),
(46, '3404100107190005', 'Muhammad Rizky Handika', 'Rizky', 'Anak', 'Default', '2009-01-20', 'Laki-laki', 1, 3, 2, 'Belum Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '001', 'default411', 'Aktif'),
(47, '3404100107190005', 'Ardelia Ratna Deviyanti', 'Ardelia', 'Anak ', 'Default', '2011-04-14', 'Perempuan', 1, 3, 2, 'Belum Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '001', 'default655', 'Aktif'),
(48, '3404100109140006', 'Mimbar Ambita Wisnu ', 'Mimbar', 'Kepala Keluarga', 'Default', '1975-12-12', 'Laki-laki', 1, 4, 8, 'Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '001', 'default112', 'Aktif'),
(49, '3404100109140006', 'Rita Yeni Utami', 'Rita', 'Istri', 'Default', '1976-01-12', 'Perempuan', 1, 2, 6, 'Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '001', 'default113', 'Aktif'),
(50, '3404100109140006', 'Astrid Apriliana', 'Astrid ', 'Anak', 'Default', '1999-04-22', 'Perempuan', 1, 5, 9, 'Belum Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '001', 'default666', 'Aktif'),
(51, '3404100109140006', 'Dimas Dhanyia Pranadhi', 'Dimas', 'Anak', 'Default', '2013-02-21', 'Laki-laki', 1, 9, 2, 'Belum Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '001', 'default890', 'Aktif'),
(52, '3404100110070006', 'Joko Haryono', 'Joko', 'Kepala Keluarga', 'Default', '1978-08-11', 'Laki-laki', 1, 5, 11, 'Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '001', 'default777', 'Aktif'),
(53, '3404100110070006', 'Khotimah', 'Khotimah', 'Istri', 'Default', '1982-09-01', 'Perempuan', 1, 5, 11, 'Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '001', 'default555', 'Aktif'),
(54, '3404100110070006', 'Rio Johan Santoto', 'Rio', 'Anak ', 'Default', '2004-03-04', 'Laki-laki', 1, 6, 9, 'Belum Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '001', 'default768', 'Aktif'),
(55, '3404100110070006', 'Kurnia Julia Wati', 'Kurnia ', 'Anak', 'Default', '2010-07-12', 'Perempuan', 1, 3, 9, 'Belum Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '001', 'default986', 'Aktif'),
(56, '3404100110070006', 'Tri Yoga Sari', 'Tri', 'Anak', 'Default', '2014-10-14', 'Perempuan', 1, 9, 2, 'Belum Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '001', 'default155', 'Aktif'),
(57, '3404100111070002', 'Sriyana', 'Sriyana', 'Kepala Keluarga', 'Default', '1970-04-23', 'Laki-laki', 1, 5, 8, 'Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '001', 'default665', 'Aktif'),
(61, '3404100111070002', 'Asih Suprapti', 'Asih', 'Istri', 'Default', '1973-05-26', 'Perempuan', 1, 5, 8, 'Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '001', 'default3457', 'Aktif'),
(62, '3404100111070002', 'Jesicha Febriana Asri', 'Jesicha', 'Anak', 'Default', '2001-02-07', 'Perempuan', 1, 5, 9, 'Belum Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '001', 'default1492', 'Aktif'),
(63, '3404100111070002', 'Aprizal Reyhan Sava', 'Aprizal', 'Anak', 'Default', '2003-09-03', 'Laki-laki', 1, 6, 9, 'Belum Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '001', 'default9786', 'Aktif'),
(64, '3404100302070009', 'Agus Subeno', 'Agus', 'Kepala Keluarga', 'Default', '1965-12-29', 'Laki-laki', 1, 5, 13, 'Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '002', 'default8124', 'Aktif'),
(65, '3404100302070009', 'Muzakiyah', 'Muzakiyah', 'Istri', 'Default', '1968-04-10', 'Perempuan', 1, 5, 12, 'Belum Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '002', 'default7134', 'Aktif'),
(66, '3404100302070009', 'Dita Raga Trilatama', 'Dita', 'Anak', 'Default', '1991-08-11', 'Laki-laki', 1, 5, 9, 'Belum Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '002', 'default8723', 'Aktif'),
(67, '3404100302070009', 'Diki Brahmantara ', 'Diki', 'Anak', 'Default', '1992-08-17', 'Laki-laki', 1, 5, 9, 'Belum Kawin', 'Mukim', 'Mukiim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '002', 'default1249', 'Aktif'),
(68, '3404100302070009', 'Cakra Ageng Pamungkas ', 'Cakra ', 'Anak', 'Default', '2008-04-08', 'Laki-laki', 1, 9, 2, 'Belum Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '002', 'default2350', 'Aktif'),
(69, '3404100308100001', 'Felix Yuni Feriyanto', 'Felix', 'Kepala Keluarga', 'Default', '1974-06-23', 'Laki-laki', 3, 5, 17, 'Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '013', 'default9325', 'Aktif'),
(70, '3404100308100001', 'Siti Qosidah', 'Siti', 'Istri', 'Default', '1984-11-22', 'Perempuan', 1, 6, 6, 'Kawin', 'Mukim', 'Mukiim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '013', 'default3508', 'Aktif'),
(71, '3404100308100001', 'Anggun Frida Avitasari', 'Anggun', 'Anak', 'Default', '2009-05-05', 'Perempuan', 1, 3, 2, 'Belum Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '013', 'default2581', 'Aktif'),
(72, '3404100311100004', 'Eko Cahyono', 'Eko', 'Kepala Keluarga', 'Default', '1982-10-20', 'Laki-laki', 1, 5, 17, 'Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '002', 'default2735', 'Aktif'),
(73, '3404100311100004', 'Septi Indarini', 'Septi', 'Istri', 'Default', '1983-09-06', 'Perempuan', 1, 5, 6, 'Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '002', 'default9821', 'Aktif'),
(74, '3404100311100004', 'Muhammad Rizky Pradithya', 'Rizky', 'Anak', 'Default', '2005-11-24', 'Laki-laki', 1, 6, 9, 'Belum Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '002', 'default1358', 'Aktif'),
(75, '3404100311100004', 'Anindhyta Putri Khairunnisa', 'Anindhyta', 'Anak', 'Default', '2011-01-17', 'Perempuan', 1, 8, 9, 'Belum Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '002', 'default0264', 'Aktif'),
(76, '3404100402190009', 'Catur Dis Nugroho', 'Catur ', 'Kepala Keluarga', 'Default', '1993-12-03', 'Laki-laki', 1, 5, 8, 'Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '002', 'default1357', 'Aktif'),
(77, '3404100402190009', 'Esti Wulandari', 'Esti', 'Istri', 'Default', '1992-09-04', 'Perempuan', 1, 5, 8, 'Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '002', 'default4680', 'Aktif'),
(78, '3404100405070004', 'Suratman Wisnu Rendrawan', 'Suratman', 'Kepala Keluarga', 'Default', '1965-09-25', 'Laki-laki', 2, 5, 3, 'Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '001', 'default8721', 'Aktif'),
(79, '3404100405070004', 'Retno Rayung Sari', 'Retno', 'Istri', 'Default', '1967-04-27', 'Perempuan', 2, 5, 6, 'Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '013', 'default2531', 'Aktif'),
(80, '3404100405070004', 'Pandhu Suryo Purwono', 'Pandhu', 'Anak', 'Default', '1990-04-23', 'Laki-laki', 2, 5, 8, 'Belum Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '013', 'default0837', 'Aktif'),
(81, '3404100405070004', 'Krishna Ayu Govinda', 'Krishna', 'Anak', 'Default', '1996-08-21', 'Perempuan', 2, 5, 8, 'Belum Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '013', 'default8761', 'Aktif'),
(82, '3404100405070004', 'Ganjar Wiku Ananta', 'Ganjar', 'Anak', 'Default', '2005-03-01', 'Laki-laki', 2, 3, 9, 'Belum Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '013', 'default9873', 'Aktif'),
(83, '3404100409080002', 'Teguh Haryono', 'Teguh', 'Kepala Keluarga', 'Default', '1981-03-14', 'Laki-laki', 1, 5, 8, 'Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '001', 'defaut3487', ''),
(84, '3404100409080002', 'Inawati', 'Inawati', 'Istri', 'Default', '1977-08-27', 'Perempuan', 1, 5, 8, 'Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '001', 'deafault1241', 'Aktif'),
(85, '3404100409080002', 'Ridwan Nur Ahmad', 'Ridwan', 'Anak', 'Default', '2006-09-21', 'Laki-laki', 1, 6, 9, 'Belum Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '001', 'default4301', 'Aktif'),
(86, '3404100409080002', 'Rizqi Ahmad Febrianugraha', 'Rizqi', 'Anak', 'Default', '2011-02-06', 'Laki-laki', 1, 3, 9, 'Belum Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '001', 'defautl2457', 'Aktif'),
(87, '3404100502090007', 'Sarno Sungatno', 'Sarno', 'Kepala Keluarga', 'Default', '1976-04-12', 'Laki-laki', 1, 6, 3, 'Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '001', 'default9874', 'Aktif'),
(88, '3404100502090007', 'Mardiyati', 'Mardiyati', 'Istri', 'Default', '1978-08-10', 'Perempuan', 1, 6, 6, 'Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '001', 'default3469', 'Aktif'),
(89, '3404100502090007', 'Refika Dewi Carneli', 'Refika ', 'Anak', 'Default', '2003-01-17', 'Perempuan', 1, 5, 9, 'Belum Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '001', 'default3489', 'Aktif'),
(90, '3404100502090007', 'Diana Dewi Lestari', 'Diana ', 'Anak', 'Default', '2012-09-19', 'Perempuan', 1, 3, 9, 'Belum Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '001', 'default9093', 'Aktif'),
(91, '3404100504110004', 'Marsalam', 'Marsalam', 'Kepala Keluarga', 'Default', '1978-02-01', 'Laki-laki', 1, 5, 8, 'Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '013', 'default8732', 'Aktif'),
(92, '3404100504110004', 'Esti Budi Utami', 'Esti', 'Istri', 'Default', '1980-02-16', 'Perempuan', 1, 5, 6, 'Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '013', 'default9834', 'Aktif'),
(93, '3404100504110004', 'Almariska Alesia Putri', 'Almariska', 'Anak', 'Default', '2002-12-14', 'Perempuan', 1, 3, 9, 'Belum Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '013', 'default9237', 'Aktif'),
(94, '3404100504110004', 'Muhammad Akbar Rizky Bayu Saputra', 'Akbar', 'Anak', 'Default', '2011-03-22', 'Laki-laki', 1, 8, 9, 'Belum Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '013', 'default0343', 'Aktif'),
(99, '3404100603140011', 'Iwan Setiyoko ', 'Iwan', 'Kepala Keluarga', 'Default', '1984-11-22', 'Laki-laki', 1, 5, 3, 'Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '001', 'default9342', 'Aktif'),
(100, '3404100603140011', 'Sutini', 'Sutini', 'Istri', 'Default', '1983-07-15', 'Perempuan', 1, 5, 6, 'Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '001', 'default9823', 'Aktif'),
(101, '3404100603140011', 'Lintang Ayu Pramudhyasari', 'Lintang', 'Anak', 'Default', '2011-03-01', 'Perempuan', 1, 9, 2, 'Belum Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '001', 'default2358', 'Aktif'),
(102, '3404100603140011', 'Lavanya Ataya Qiyamma', 'Lavanya', 'Anak', 'Default', '2019-03-21', 'Perempuan', 1, 9, 2, 'Belum Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '001', 'default0923', 'Aktif'),
(108, '3404100604150007', 'Aris Mulya Budi Wirawan', 'Aris ', 'Kepala Keluarga', 'Default', '1970-06-23', 'Laki-laki', 1, 5, 8, 'Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '013', 'default9879', 'Aktif'),
(109, '3404100604150007', 'Ivony Yudith', 'Ivony', 'Istri', 'Default', '1972-05-10', 'Perempuan', 1, 5, 14, 'Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '013', 'default9870', 'Aktif'),
(110, '3404100604150007', 'Latifah Arlita Wirawan', 'Latifah', 'Anak', 'Default', '2004-06-04', 'Laki-laki', 1, 3, 9, 'Belum Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '013', 'default9824', 'Aktif'),
(111, '3404100604150007', 'Syaharanney Yudith Wirawan', 'Syaharanney', 'Anak', 'Default', '2005-06-11', 'Perempuan', 1, 3, 9, 'Belum Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '013', 'default6742', 'Aktif'),
(112, '3404100604150007', 'Yusuf Dayasyam Wirawan', 'Yusuf', 'Anak', 'Default', '2006-06-14', 'Laki-laki', 1, 3, 9, 'Belum Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '013', 'default9855', 'Aktif'),
(116, '3404100606170012', 'Arik Prasetyo', 'Arik', 'Kepala Keluarga', 'Default', '1988-06-12', 'Laki-laki', 1, 7, 11, 'Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '001', 'default7864', 'Aktif'),
(117, '3404100606170012', 'Dewi Ari Wijayanti', 'Dewi', 'Istri', 'Default', '1988-10-18', 'Perempuan', 1, 5, 6, 'Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '001', 'default2732', 'Aktif'),
(118, '3404100606170012', 'Karlesha Amabel Putri Prasetyo', 'Karlesha', 'Anak', 'Default', '2017-11-19', 'Perempuan', 1, 9, 2, 'Belum Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '001', 'default9398', 'Aktif'),
(129, '3404100610080006', 'Daryanto', 'Daryanto', 'Kepala Keluarga', 'Default', '1963-07-16', 'Laki-laki', 1, 5, 3, 'Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '001', 'default8348', 'Aktif'),
(130, '3404100610080006', 'Supartini', 'Supartini', 'Istri', 'Default', '1971-04-06', 'Perempuan', 1, 5, 6, 'Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '001', 'default8239', 'Aktif'),
(131, '3404100610080006', 'Guntur Sarana Putra', 'Guntur ', 'Anak', 'Default', '1992-10-31', 'Laki-laki', 1, 5, 8, 'Belum Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '001', 'default2322', 'Aktif'),
(132, '3404100610080006', 'Janin Indra Putra', 'Janin', 'Anak', 'Default', '1995-08-08', 'Laki-laki', 1, 5, 8, 'Belum Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '001', 'default0340', 'Aktif'),
(133, '3404100610080006', 'Refas Aryanto', 'Refas ', 'Anak', 'Default', '1999-08-27', 'Laki-laki', 1, 5, 2, 'Belum Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '001', 'default9233', 'Aktif'),
(134, '3404100703070004', 'E. Sigit Wisnu Joedono', 'Sigit', 'Kepala Keluarga', 'Default', '1974-04-04', 'Laki-laki', 3, 4, 8, 'Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '002', 'default9845', 'Aktif'),
(135, '3404100703070004', 'Antika Maharani', 'Antika', 'Istri', 'Default', '1975-06-01', 'Perempuan', 3, 4, 6, 'Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '002', 'default3463', 'Aktif'),
(136, '3404100703070004', 'C. Andika Wisan Dewangga', 'Andika', 'Anak', 'Default', '2001-10-19', 'Laki-laki', 3, 5, 9, 'Belum Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '002', 'default909', 'Aktif'),
(137, '3404100703070004', 'Bonaventura Reynhard Maharsi', 'Reynhard', 'Anak', 'Default', '2003-11-15', 'Laki-laki', 3, 6, 9, 'Belum Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '002', 'defaultq348', 'Aktif'),
(138, '3404100710170002', 'Andi Prasetyo', 'Andi', 'Kepala Keluarga', 'Default', '1979-05-10', 'Laki-laki', 1, 5, 11, 'Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '013', 'default7239', 'Aktif'),
(139, '3404100710170002', 'Happy Kistya Nuryatini', 'Happy', 'Istri', 'Default', '1981-04-19', 'Perempuan', 1, 5, 6, 'Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '013', 'default2302', 'Aktif'),
(140, '3404100710170002', 'Daffa Anas Mahardia', 'Daffa', 'Anak', 'Default', '2005-07-09', 'Laki-laki', 1, 3, 9, 'Belum Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '013', 'default9829', 'Aktif'),
(141, '3404100710170002', 'Galvin Putra Ramadha', 'Galvin', 'Anak', 'Default', '2009-09-14', 'Laki-laki', 1, 3, 9, 'Belum Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '013', 'default7877', 'Aktif'),
(142, '3404100710170002', 'Hari Kinasih', 'Hari', 'Orang Tua', 'Default', '1960-07-21', 'Perempuan', 1, 8, 6, 'Cerai Mati', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '013', 'default0998', 'Aktif'),
(143, '3404100710170002', 'Abdul Ngalim', 'Abdul', 'Kepala Keluarga', 'Default', '1947-04-03', 'Laki-laki', 1, 6, 10, 'Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '013', 'default23523', 'Aktif'),
(144, '3404100710170002', 'Tukinah', 'Tukinah', 'Istri', 'Default', '1953-04-03', 'Perempuan', 1, 6, 6, 'Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '013', 'default34569', 'Aktif'),
(145, '3404100802110005', 'Widodo', 'Widodo', 'Kepala Keluarga', 'Default', '1982-03-20', 'Laki-laki', 1, 4, 8, 'Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '002', 'default3495', 'Aktif'),
(146, '3404100802110005', 'Sri Ngastuti Hartasih', 'Sri', 'Istri', 'Default', '1984-10-28', 'Perempuan', 1, 4, 8, 'Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '002', 'deafault23', 'Aktif'),
(147, '3404100802110005', 'Dimas Putra Wicaksono', 'Dimas', 'Anak', 'Default', '2009-03-17', 'Laki-laki', 1, 9, 2, 'Belum Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '002', 'default0023', 'Aktif'),
(148, '3404100802110005', 'Nadia Felisha Putri', 'Nadia', 'Anak', 'Default', '2011-01-14', 'Perempuan', 1, 9, 2, 'Belum Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '002', 'default23045', 'Aktif'),
(149, '3404101001120004', 'Untung Prayitno', 'Untung', 'Kepala Keluarga', 'Default', '1981-05-09', 'Laki-laki', 1, 8, 3, 'Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '001', 'default92392', 'Aktif'),
(150, '3404101001120004', 'Maryati', 'Maryati', 'Istri', 'Default', '1982-05-13', 'Perempuan', 1, 8, 3, 'Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '001', 'default23945', 'Aktif'),
(151, '3404101001120004', 'Muhammad Nur Wahid', 'Nur', 'Anak', 'Default', '2006-10-18', 'Laki-laki', 1, 3, 9, 'Belum Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '001', 'default2935', 'Aktif'),
(152, '3404101001120004', 'Muhammad Hafidz Maulana', 'Hafidz', 'Anak', 'Default', '2015-02-01', 'Laki-laki', 1, 9, 2, 'Belum Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '001', 'default02034', 'Aktif'),
(153, '3404101002050364', 'Sukardi', 'Sukardi', 'Kepala Keluarga', 'Default', '1951-12-31', 'Laki-laki', 1, 3, 4, 'Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '001', 'default29034', 'Aktif'),
(154, '3404101002050364', 'Suminah', 'Suminah', 'Istri', 'Default', '1951-12-31', 'Perempuan', 1, 9, 4, 'Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '001', 'default12345', 'Aktif'),
(155, '3404101002050364', 'Andri Wahyudi', 'Andri', 'Cucu', 'Default', '1999-11-08', 'Laki-laki', 1, 5, 8, 'Belum Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '001', 'default2359', 'Aktif'),
(156, '3404101002050366', 'Pujo Darmanto', 'Pujo', 'Kepala Keluarga', 'Default', '1956-11-20', 'Laki-laki', 1, 8, 3, 'Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '001', 'default29035', 'Aktif'),
(157, '3404101002050366', 'Mujiyati', 'Mujiyati', 'Istri', 'Default', '1961-04-07', 'Perempuan', 1, 8, 3, 'Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '001', 'default9231', 'Aktif'),
(158, '3404101002050366', 'Heriyanto', 'Heriyanto', 'Anak', 'Default', '1986-05-29', 'Laki-laki', 1, 8, 3, 'Belum Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '001', 'default98349', 'Aktif'),
(159, '3404101002050370', 'Harjono', 'Harjono', 'Kepala Keluarga', 'Default', '1970-12-13', 'Laki-laki', 1, 5, 8, 'Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '002', 'default88221', 'Aktif'),
(160, '3404101002050370', 'Keri Rahayu', 'Keri', 'Istri', 'Default', '1975-04-14', 'Perempuan', 1, 5, 6, 'Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '002', 'default9921', 'Aktif'),
(161, '3404101002050370', 'Rini Hartanto', 'Rini', 'Anak', 'Default', '1996-09-10', 'Perempuan', 1, 5, 8, 'Belum Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '002', 'default293549', 'AKTIF'),
(162, '3404101002050371', 'Darjo Wiyono', 'Darjo', 'Kepala Keluarga', 'Default', '1940-12-11', 'Laki-laki', 1, 3, 4, 'Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '002', 'default92345', 'Aktif'),
(163, '3404101002050371', 'Mudjirah', 'Mudjirah', 'Istri', 'Default', '1940-10-05', 'Perempuan', 1, 3, 6, 'Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '002', 'default93495', 'Aktif'),
(164, '3404101002050373', 'Tukiran S. B.', 'Tukiran', 'Kepala Keluarga', 'Default', '1941-06-05', 'Laki-laki', 1, 6, 10, 'Cerai Mati', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '002', 'default23023', 'Aktif'),
(165, '3404101002050373', 'Heru Samudra', 'Heru', 'Anak', 'Default', '1973-01-16', 'Laki-laki', 1, 5, 3, 'Belum Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '002', 'default1299', 'Aktif'),
(166, '3404101002050374', 'Sakri', 'Sakri', 'Kepala Keluarga', 'Default', '1971-05-10', 'Laki-laki', 1, 5, 4, 'Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '002', 'default9235', 'Aktif'),
(167, '3404101002050374', 'Ani Handayani', 'Ani', 'Istri', 'Default', '1970-08-18', 'Perempuan', 1, 8, 6, 'Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '002', 'default98342', 'Aktif'),
(168, '3404101002050374', 'Nuri Anjarwati', 'Nuri', 'Anak', 'Default', '2001-10-29', 'Perempuan', 1, 5, 9, 'Belum Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '002', 'default99349', 'Aktig]'),
(172, '3404101002050375', 'Sutimin', 'Sutimin', 'Kepala Keluarga', 'Default', '1961-12-31', 'Laki-laki', 1, 8, 4, 'Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '002', 'default99399', 'Aktif'),
(173, '3404101002050375', 'Juwar', 'Juwar', 'Istri', 'Default', '1960-05-06', 'Perempuan', 1, 8, 4, 'Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '002', 'default93490', 'Aktif'),
(174, '3404101002050375', 'Tri Rahayu', 'Tri', 'Anak', 'Default', '1993-12-23', 'Perempuan', 1, 8, 11, 'Cerai Hidup', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '002', 'default38458', 'Aktif'),
(175, '3404101002050376', 'Jemakir', 'Jemakir', 'Kepala Keluarga', 'Default', '1946-08-04', 'Laki-laki', 1, 8, 10, 'Cerai Mati', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '002', 'default99934', 'Aktif'),
(176, '3404101002050378', 'Suratin', 'Suratin', 'Kepala Keluarga', 'Default', '1971-03-10', 'Laki-laki', 1, 5, 3, 'Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '001', 'default99342', 'Aktif'),
(177, '3404101002050378', 'Sugiyatmi', 'Sugiyatmi', 'Istri', 'Default', '1975-01-23', 'Perempuan', 1, 6, 3, 'Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '001', 'default99880', 'Aktif'),
(178, '3404101002050378', 'Ika Indaryati', 'Ika ', 'Anak', 'default', '1995-04-18', 'Perempuan', 1, 5, 8, 'Belum Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '001', 'default77723', 'Aktif'),
(179, '3404101002050378', 'Riska Saraswati', 'Riska', 'Anak', 'Default', '2001-09-17', 'Perempuan', 1, 5, 9, 'Belum Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '001', 'default88345', 'Aktif'),
(180, '3404101002050378', 'Livika Linda Fara', 'Livika', 'Anak', 'Default', '2010-08-05', 'Perempuan', 1, 3, 9, 'Belum Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '001', 'default66666', 'Aktif'),
(181, '3404101002050378', 'Azka Al Gifari', 'Azka', 'Anak', 'Default', '2014-10-06', 'Perempuan', 1, 9, 2, 'Belum Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '001', 'default1111', 'Aktif'),
(182, '3404101002050379', 'Lasinem', 'Lasinem', 'Kepala Keluarga', 'Default', '1940-01-19', 'Perempuan', 1, 9, 4, 'Cerai Mati', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '001', 'default2222', 'Aktif'),
(183, '3404101002050380', 'Suroto', 'Suroto', 'Kepala Keluarga', 'Default', '1971-03-10', 'Laki-laki', 1, 5, 4, 'Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '001', 'default333', 'Aktif'),
(184, '3404101002050380', 'Diah Indarwati', 'Diah', 'Istri', 'Default', '1975-10-14', 'Perempuan', 1, 5, 6, 'Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '001', 'default8299', 'AKTIF'),
(185, '3404101002050380', 'Dwi Maulana Junarto', 'Dwi', 'Anak', 'Default', '2000-06-18', 'Laki-laki', 1, 6, 9, 'Belum Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '001', 'default93452', 'Aktif'),
(186, '3404101002050380', 'Novita Nur Wahyuni', 'Novita', 'Anak', 'Default', '2003-09-29', 'Perempuan', 1, 6, 9, 'Belum Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '001', 'default82358', 'Aktif'),
(187, '3404101002050380', 'Andrea Dita Reviana', 'Andrea', 'Anak', 'Default', '2010-06-09', 'Perempuan', 1, 6, 9, 'Belum Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '001', 'default93949', 'Aktif'),
(188, '3404101002050380', 'Andara Dita Letizia', 'Andara', 'Anak', 'Default', '2015-02-03', 'Perempuan', 1, 9, 2, 'Belum Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '001', 'default8737', 'Aktif'),
(189, '3404101002050381', 'Asipin', 'Asipin', 'Kepala Keluarga', 'Default', '1964-03-08', 'Laki-laki', 1, 8, 3, 'Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '001', 'default88989', 'Aktif'),
(190, '3404101002050381', 'Suratmi', 'Suratmi', 'Istri', 'Default', '1966-03-08', 'Perempuan', 1, 8, 3, 'Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '001', 'default92829', 'Aktif'),
(191, '3404101002050381', 'Andhi Kristiyanto', 'Andhi', 'Anak', 'Default', '1996-03-19', 'Laki-laki', 1, 5, 9, 'Belum Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '001', 'Default278358', 'Aktif'),
(192, '3404101002050382', 'Jikan', 'Jikan', 'Kepala Keluarga', 'Default', '1952-08-01', 'Laki-laki', 1, 8, 3, 'Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '001', 'default6623', 'Aktif'),
(193, '3404101002050382', 'Suyati', 'Suyati', 'Istri', 'Default', '1955-07-01', 'Perempuan', 1, 8, 6, 'Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '001', 'default89345', 'Aktif'),
(195, '3404101002050383', 'Rubiyem', 'Rubiyem', 'Kepala Keluarga', 'Default', '1940-11-28', 'Laki-laki', 1, 3, 6, 'Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '001', 'default834895', 'Aktif'),
(196, '3404101002050384', 'Haryanto', 'Haryanto', 'Kepala Keluarga', 'Default', '1969-02-05', 'Laki-laki', 1, 5, 8, 'Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '001', 'default8823', 'Aktif'),
(197, '3404101002050384', 'Siti Handayani', 'Siti', 'Istri', 'Ddefault', '1970-10-14', 'Perempuan', 1, 6, 6, 'Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '001', 'default78723', 'Aktif'),
(198, '3404101002050384', 'Langgeng Nur Hartanto', 'Langgeng ', 'Anak', 'Default', '1996-08-26', 'Laki-laki', 1, 5, 8, 'Belum Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '001', 'default88388', 'Aktif'),
(199, '3404101002050384', 'Devi Amalia', 'Devi', 'Anak', 'Default', '2008-07-17', 'Perempuan', 1, 3, 9, 'Belum Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '001', 'default23412', 'Aktif'),
(207, '3404101002050385', 'Topo Haryono', 'Topo', 'Kepala Keluarga', 'Default', '1979-04-16', 'Laki-laki', 1, 5, 13, 'Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '001', 'default67374', 'Aktif'),
(208, '3404101002050385', 'Sulastri', 'Sulastri', 'Istri', 'Default', '1978-03-05', 'Perempuan', 1, 5, 6, 'Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '001', 'default8167', 'Aktif'),
(209, '3404101002050385', 'Adellina Kuncoro Wati', 'Adellina', 'Anak', 'Default', '2004-04-08', 'Perempuan', 1, 8, 9, 'Belum Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '001', 'default7723', 'Aktif'),
(210, '3404101002050385', 'Azalia Zahratul Maula', 'Azalia', 'Anak', 'Default', '2016-07-16', 'Perempuan', 1, 9, 2, 'Belum Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '001', 'default88934', 'Aktif'),
(211, '3404101002050387', 'Supriyadi', 'Supriyadi', 'Kepala Keluarga', 'Default', '1972-08-28', 'Laki-laki', 1, 6, 3, 'Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '001', 'default8993', 'Aktif'),
(212, '3404101002050387', 'Hartini', 'Hartini', 'Istri', 'Default', '1973-12-17', 'Perempuan', 1, 6, 6, 'Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '001', 'default656256', 'Aktif'),
(213, '3404101002050387', 'Fachri Nuryadi ', 'Fachri', 'Anak', 'Default', '2009-06-20', 'Laki-laki', 1, 3, 2, 'Belum Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '001', 'default782378', 'Aktif'),
(214, '3404101002050389', 'Rami', 'Rami', 'Kepala Keluarga', 'Default', '1942-09-14', 'Perempuan', 1, 9, 4, 'Cerai Mati', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '001', 'default5523', 'Aktif'),
(215, '3404101002050392', 'Giyono', 'Giyono', 'Kepala Keluarga', 'Default', '1948-04-16', 'Laki-laki', 1, 8, 3, 'Cerai Mati', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '001', 'default98893', 'Aktif'),
(216, '3404101002050392', 'Gimin', 'Gimin', 'Anak', 'default', '1971-04-08', 'Laki-laki', 1, 8, 3, 'Belum Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '001', 'defafult889421', 'Aktif'),
(217, '3404101002050396', 'Widi Sumarto', 'Widi', 'Kepala Keluarga', 'Default', '1966-12-13', 'Laki-laki', 1, 8, 4, 'Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '002', 'default93489', 'Aktif'),
(218, '3404101002050396', 'Wartinem', 'Wartinem', 'Istri', 'Default', '1957-05-13', 'Perempuan', 1, 8, 6, 'Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '002', 'default2341', 'Aktif'),
(219, '3404101002050397', 'Sukardi', 'Sukardi', 'Kepala Keluarga', 'Default', '1964-03-14', 'Laki-laki', 1, 8, 3, 'Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '002', 'default89892', 'Aktif'),
(220, '3404101002050397', 'Ari Marta Purnama ', 'Ari', 'Anak', 'Default ', '1992-03-25', 'Laki-laki', 1, 5, 8, 'Belum Kawin', 'Tidak Mukim', 'Tidak Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '002', 'default099034', 'Aktif'),
(221, '3404101002050397', 'Ayu Febriana ', 'Ayu', 'Anak', 'Default', '1994-02-02', 'Perempuan', 1, 6, 8, 'Kawin', 'Tidak Mukim', 'Tidak Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '002', 'default77232', 'Aktif'),
(222, '3404101002050397', 'Andika BAgus Mardianto', 'Andika', 'Anak', 'Default', '2000-03-06', 'Laki-laki', 1, 5, 8, 'Belum Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '002', 'default82835', 'Aktif'),
(223, '3404101002050397', 'Anindia Diah Puspita Dewi', 'Anindia', 'Anak', 'Default', '2000-03-06', 'Perempuan', 1, 6, 8, 'Belum Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '002', 'default78348', 'Aktif'),
(224, '3404101002050400', 'Sukrismanta', 'Sukrismanta', 'Kepala Keluarga', 'Default', '1973-05-31', 'Laki-laki', 2, 5, 3, 'Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '001', 'default23327', 'Aktif');
INSERT INTO `datainduk` (`kd_induk`, `no_kk`, `nama`, `nm_panggilan`, `status_hub_kk`, `tmp_lahir`, `tgl_lahir`, `j_kelamin`, `kd_agama`, `kd_pendidikan`, `kd_pekerjaan`, `status_kawin`, `status_mukim`, `keterangan_mukim`, `kd_level_ekonomi`, `gol_darah`, `is_kt`, `is_latin`, `is_hijaiyah`, `is_iqra`, `is_quran`, `is_5waktu`, `is_jamaah`, `is_zakat_fitrah`, `is_zakat_mal`, `is_qurban`, `is_haji`, `is_umrah`, `kd_rt`, `no_ktp`, `status`) VALUES
(225, '3404101002050400', 'Sumiyana', 'Sumiyana', 'Istri', 'Default', '1979-05-17', 'Perempuan', 2, 5, 3, 'Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '001', 'default883421', 'Aktif'),
(226, '3404101002050401', 'Yadi Winoto', 'Yadi', 'Kepala Keluarga', 'Default', '1942-09-02', 'Laki-laki', 1, 3, 4, 'Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '001', 'default89332', 'Aktif'),
(227, '3404101002050401', 'Painem', 'Painem', 'Istri', 'Default', '1948-04-18', 'Perempuan', 1, 3, 4, 'Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '001', 'default55759', 'Aktif'),
(228, '3404101002050403', 'Sugiman', 'Sugiman', 'Kepala Keluarga', 'Default', '1954-10-28', 'Laki-laki', 1, 6, 4, 'Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '002', 'default23478', 'Aktif'),
(229, '3404101002050403', 'Sutini', 'Sutini', 'Istri', 'Default', '1954-10-28', 'Perempuan', 1, 6, 4, 'Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '002', 'deafult83811', 'Aktif'),
(230, '3404101002050405', 'Santoso', 'Santoso', 'Kepala Keluarga', 'Default', '1973-11-25', 'Laki-laki', 1, 8, 3, 'Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '002', 'deafult23459', 'Aktif'),
(231, '3404101002050405', 'Supatmi', 'Supatmi', 'Istri', 'Default', '1975-04-30', 'Laki-laki', 1, 6, 6, 'Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '002', 'default9394', 'Aktif'),
(232, '3404101002050405', 'Andri Krisyanto', 'Andri', 'Anak', 'Default', '1997-01-04', 'Laki-laki', 1, 5, 8, 'Belum Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '002', 'default8349', 'Aktif'),
(233, '3404101002050405', 'Riski Dwi Prasetyo', 'Riski', 'Anak', 'Default', '2009-04-08', 'Laki-laki', 1, 3, 9, 'Belum Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '002', 'default0031', 'Aktif'),
(234, '3404101002050406', 'Bonasih', 'Bonasih', 'Kepala Keluarga', 'Default', '1943-03-25', 'Perempuan', 1, 3, 4, 'Cerai Mati', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '002', 'default9929', 'Aktif'),
(235, '3404101002050407', 'Darmo Wiyoto Painem', 'Darmo', 'Kepala Keluarga', 'Default', '1947-09-07', 'Perempuan', 1, 6, 4, 'Cerai Mati', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '002', 'default73489', 'Aktif'),
(236, '3404101002050408', 'Bambang Sugiyanto', 'Bambang', 'Kepala Keluarga', 'Default', '1967-11-20', 'Laki-laki', 1, 6, 3, 'Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '002', 'default8129', 'Aktif'),
(237, '3404101002050408', 'Slamet Rahayu', 'Rahayu', 'Istri', 'Default', '1975-03-25', 'Perempuan', 1, 6, 6, 'Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '002', 'default55178', 'Aktif'),
(238, '3404101002050408', 'Danang Kusworo', 'Danang', 'Anak', 'Default', '1996-03-25', 'Laki-laki', 1, 6, 16, 'Belum Kawin', 'Tidak Mukim', 'Tidak Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '002', 'default84500', 'Aktif'),
(239, '3404101002050408', 'David Kusworo', 'David ', 'Anak', 'Default', '2002-06-01', 'Laki-laki', 1, 6, 3, 'Belum Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '002', 'default0987', 'Aktif'),
(240, '3404101002050408', 'Dimas Kusworo', 'Dimas', 'Anak', 'Default', '2011-03-11', 'Laki-laki', 1, 3, 9, 'Belum Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '002', 'default23498', 'Aktif'),
(241, '3404101002050411', 'Mukiyem', 'Mukiyem', 'Kepala Keluarga', 'Default', '1945-05-04', 'Perempuan', 2, 8, 6, 'Cerai Mati', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '001', 'default9230', 'Aktif'),
(242, '3404101002050411', 'Slamet Riyadi', 'Slamet ', 'Anak', 'Default', '1963-05-08', 'Laki-laki', 2, 6, 8, 'Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '001', 'default23582', 'Aktif'),
(243, '3404101002054528', 'Nur Hartanto', 'Nur', 'Kepala Keluarga', 'Default', '1963-12-01', 'Laki-laki', 2, 4, 8, 'Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '013', 'deafult2238', 'Akti'),
(244, '3404101002054528', 'Dewi Utami Nugraheni', 'Dewi', 'Istri', 'Default', '1972-04-12', 'Perempuan', 2, 4, 17, 'Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '013', 'default029', 'Aktif'),
(245, '3404101002054528', 'Cherry Diva Nathania', 'Cherry', 'Anak', 'Default', '1997-11-23', 'Perempuan', 2, 5, 9, 'Belum Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '013', 'default78239', 'Aktif'),
(246, '3404101002054528', 'Mosse Ega Nathanael', 'Mosse ', 'Anak', 'Default', '2001-06-23', 'Laki-laki', 2, 8, 9, 'Belum Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '013', 'default127822', 'Aktif'),
(247, '3404101002056546', 'Sriyadi', 'Sriyadi', 'Kepala Keluarga', 'Default', '1967-02-07', 'Laki-laki', 1, 6, 15, 'Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '013', 'dearfautl9239', 'Aktif'),
(248, '3404101002056546', 'Sutinem', 'Sutinem', 'Istri', 'Default', '1971-11-09', 'Perempuan', 1, 8, 6, 'Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '013', 'defaulta7238', 'Aktif'),
(249, '3404101002056546', 'Eva Marlina', 'Eva', 'Anak', 'Default', '1993-07-17', 'Perempuan', 1, 6, 9, 'Belum Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '013', 'defaualt9239', 'Aktif'),
(250, '3404101002056546', 'Didit Bangun Septiadi', 'Didit', 'Anak', 'Default', '1996-09-30', 'Laki-laki', 1, 8, 9, 'Belum Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '013', 'default2390', 'Aktif'),
(251, '3404101002056546', 'Alvin Bangun Nugroho', 'Alvin', 'Anak', 'Default', '2006-07-18', 'Laki-laki', 1, 9, 2, 'Belum Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '013', 'dedault82385', 'Aktif'),
(252, '3404101002056683', 'Rajiman', 'Rajiman', 'Kepala Keluarga', 'Default', '1966-04-02', 'Laki-laki', 1, 9, 3, 'Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '002', 'default121212', 'Aktif'),
(253, '3404101002056683', 'Surip Marto Wiyono', 'Surip', 'Istri', 'Default', '1957-06-04', 'Perempuan', 1, 9, 3, 'Kawin', 'Mukim', 'Tidak Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '002', 'default77771', 'Aktif'),
(254, '3404101002056683', 'Faisal Hermawan', 'Faisal', 'Anak', 'Default', '2011-01-22', 'Laki-laki', 1, 9, 2, 'Belum Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '002', 'default93893', 'Aktif'),
(255, '3404101002056684', 'Wandiyo', 'Wandiyo', 'Kepala Keluarga', 'Default', '1926-05-10', 'Laki-laki', 1, 8, 4, 'Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '001', 'default222344', 'Aktif'),
(256, '3404101002056685', 'Haryadi', 'Haryadi', 'Kepala Keluarga', 'Default', '1962-03-09', 'Laki-laki', 1, 5, 3, 'Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '001', 'default82378', 'Aktif'),
(257, '3404101002056685', 'Partinah ', 'Partinah', 'Istri', 'Default', '1965-01-17', 'Perempuan', 1, 5, 6, 'Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '001', 'default89921', 'Aktif'),
(258, '3404101002056685', 'Tentrem Prihatin', 'Tentrem', 'Anak', 'Default', '1986-10-21', 'Perempuan', 1, 5, 8, 'Belum Kawin', 'Tidak Mukim', 'Tidak Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '001', 'defaukt8388', 'AKTIF'),
(259, '3404101002056685', 'Haryanti', 'Haryanti', 'Anak', 'Default', '2000-02-01', 'Perempuan', 1, 6, 8, 'Belum Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '001', 'default92398', 'Aktif'),
(260, '3404101002056685', 'Ahmadi', 'Ahmadi', 'Anak', 'Default', '2001-10-09', 'Laki-laki', 1, 5, 9, 'Belum Kawin', 'Belum Kawin', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '001', 'defaulta902345', 'Aktif'),
(261, '3404101002056688', 'Purwanta', 'Purwanta', 'Kepala Keluarga', 'Default', '1968-11-14', 'Laki-laki', 1, 5, 17, 'Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '001', 'defaulat8q235', 'Aktif'),
(262, '3404101002056688', 'Sri Lestari', 'Sri', 'Istri', 'Default', '1970-03-03', 'Perempuan', 1, 5, 6, 'Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '001', 'defaulat9023', 'Aktif'),
(263, '3404101002056688', 'Deni Parasetyo', 'Deni', 'Anak', 'Default', '1994-12-12', 'Laki-laki', 1, 6, 2, 'Belum Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '001', 'awoiefj', 'Aktif'),
(264, '3404101002056688', 'Siti Kholifatun', 'Siti', 'Anak', 'Default', '2002-12-21', 'Perempuan', 1, 5, 9, 'Belum Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '001', 'awefkkm', 'Aktif'),
(265, '3404101002056689', 'Syahrudin', 'Syahrudin', 'Kepala Keluarga', 'Default', '1963-06-16', 'Laki-laki', 1, 6, 3, 'Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '001', 'ljiklaserjnk', 'Aktif'),
(266, '3404101002056689', 'Wasiyem', 'Wasiyem', 'Istri', 'Default', '1957-11-15', 'Perempuan', 1, 6, 6, 'Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '001', 'jiklaserti', 'Aktif'),
(267, '3404101002056689', 'Siti Nurbaiti', 'Siti', 'Anak', 'Default', '1988-12-12', 'Perempuan', 1, 9, 2, 'Belum Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '001', 'jkawerjk', 'Aktif'),
(268, '3404101002056690', 'Sagino', 'Sagino', 'Kepala Keluarga', 'Default', '1963-12-31', 'Laki-laki', 1, 6, 3, 'Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '002', 'awerjnikgtf', 'Aktif'),
(269, '3404101002056690', 'Ngadiyem', 'Ngadiyem', 'Istri', 'Default', '1961-07-12', 'Perempuan', 1, 8, 3, 'Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '002', 'paeriof', 'Aktif'),
(270, '3404101002056690', 'Nurwiyanti', 'Nurwiyanti', 'Anak', 'Default', '1989-06-05', 'Perempuan', 1, 5, 8, 'Kawin', 'Tidak Mukim', 'Tidak Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '002', 'awoetfn', 'AKTIF'),
(271, '3404101002056690', 'Puri Priyatni', 'Puri', 'Anak ', 'Default', '1996-04-10', 'Perempuan', 1, 8, 8, 'Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '002', 'awefnopm', 'Aktif'),
(272, '3404101002056691', 'Harjomartono Jumbage', 'Harjomartono', 'Kepala Keluarga', 'Default', '1943-07-04', 'Laki-laki', 1, 8, 11, 'Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '001', 'awjkefnaw', 'Aktif'),
(273, '3404101002056691', 'Pairah Harjomartono', 'Pairah', 'Istri', 'Default', '1946-04-09', 'Perempuan', 1, 8, 6, 'Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '001', 'awerjifnawf', 'Aktif'),
(274, '3404101002056691', 'Sumarmi', 'Sumarmi', 'Anak', 'Default', '1973-03-29', 'Perempuan', 1, 5, 8, 'Kawin', '', '?', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '001', 'psoerjtg', 'Aktif'),
(275, '3404101002056692', 'Dasinem', 'Dasinem', 'Kepala Keluarga', 'Default', '1948-09-06', 'Perempuan', 1, 3, 4, 'Cerai Mati', 'Mukim', '?', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '001', 'jkasertgn', 'Aktif'),
(276, '3404101002056697', 'Jinab', 'Jinab', 'Kepala Keluarga', 'Default', '1955-12-31', 'Laki-laki', 1, 8, 4, 'Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '002', 'jkasrejgn', 'Aktif'),
(277, '3404101002056697', 'Partinem', 'Partinem', 'Istri', 'Default', '1959-04-05', 'Perempuan', 1, 8, 4, 'Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '002', 'jkawrjefgn', 'Aktif'),
(278, '3404101002056698', 'Didit Yulianto', 'Didit', 'Kepala Keluarga', 'Default', '1973-07-20', 'Laki-laki', 1, 5, 4, 'Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '001', 'awerfgkjn', 'Aktif'),
(279, '3404101002056698', 'Sartini', 'Sartini', 'Istri', 'Default', '1977-06-06', 'Perempuan', 1, 5, 4, 'Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '001', 'lknawf', 'Aktif'),
(280, '3404101002056698', 'Rahmat Hidayat', 'Rahmat ', 'Anak', 'Default', '2004-10-22', 'Laki-laki', 1, 6, 9, 'Belum Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '001', 'awefnjnl', 'Aktif'),
(281, '3404101002056698', 'Taufik Hidayat', 'Taufik', 'Anak', 'Default', '2010-04-25', 'Laki-laki', 1, 3, 9, 'Belum Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '001', 'regknar', 'Aktif'),
(282, '3404101002056702', 'Suryanto', 'Suryanto', 'Kepala Keluarga', 'Default', '1954-01-29', 'Laki-laki', 2, 5, 10, 'Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '013', 'ajkwefn', 'Akatif'),
(283, '3404101002056702', 'Eny Wijiati Rahayuningsih', 'Eny', 'Istri', 'Default', '1961-09-27', 'Perempuan', 1, 5, 8, 'Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '013', 'kwjneagfn', 'Aktif'),
(284, '3404101002056702', 'Novi Sekar Wahyuning Jati', 'Novi', 'Anak', 'Default', '1990-11-13', 'Perempuan', 1, 5, 9, 'Belum Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '013', 'sergserg', 'Aktif'),
(285, '3404101002056702', 'Kartiko Puji Utomo', 'Kartiko ', 'Anak', 'Default', '1994-02-06', 'Laki-laki', 1, 6, 9, 'Belum Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '013', 'aregngn', 'Aktif'),
(286, '3404101002057048', 'Sudarmin', 'Sudarmin', 'Kepala Keluarga', 'Default', '1959-02-05', 'Laki-laki', 1, 6, 8, 'Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '001', 'opsegrnm', 'Aktif'),
(287, '3404101002057048', 'Galuh Ajeng Panji Asmoro', 'Galuh', 'Anak', 'Default', '2002-01-22', 'Laki-laki', 1, 8, 9, 'Belum Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '001', 'njkasergn', 'Aktif'),
(288, '3404101002090007', 'Eko Utomo', 'Eko', 'Kepala Keluarga', 'Default', '1983-02-28', 'Laki-laki', 1, 5, 8, 'Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '001', 'jkanmwef', 'Aktif'),
(289, '3404101002090007', 'Marsiyati', 'Marsiyati', 'Istri', 'Default', '1975-05-03', 'Perempuan', 1, 5, 6, 'Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '001', 'jnafnhjap', 'Aktif'),
(290, '3404101002090007', 'Shifa Galih Rinawati', 'Shifa', 'Anak', 'Default', '2009-01-20', 'Perempuan', 1, 8, 9, 'Belum Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '001', 'kafawfer', 'Aktif'),
(291, '3404101002120006', 'Maryoto', 'Maryoto', 'Kepala Keluarga', 'Default', '1982-07-10', 'Laki-laki', 1, 5, 4, 'Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '002', 'klawjnfrje', 'Aktif'),
(292, '3404101002120006', 'Suharti', 'Suharti', 'Istri', 'Default', '1979-12-13', 'Perempuan', 1, 5, 8, 'Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '002', 'jkawnfre', 'Aktif'),
(293, '3404101002120006', 'Dava Eka Saputra', 'Deva', 'Anak', 'Default', '2012-03-01', 'Laki-laki', 1, 3, 9, 'Belum Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '002', 'kawjefrnaw', 'Aktif'),
(294, '3404101005120003', 'Wagiyem', 'Wagiyem', 'Kepala Keluarga', 'Default', '1937-08-03', 'Perempuan', 1, 8, 6, 'Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '002', 'awjkerfnaw', 'Aktif'),
(295, '3404101005120003', 'Suyati', 'Suyati', 'Anak', 'Default', '1954-12-31', 'Perempuan', 1, 8, 4, 'Cerai Hidup', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '002', 'asergli', 'Aktif'),
(296, '3404101005120003', 'Sumartini', 'Sumartini', 'Anak', 'Default', '1963-04-21', 'Perempuan', 1, 8, 4, 'Cerai Hidup', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '002', 'nklnklawhi', 'Aktif'),
(297, '3404101005120003', 'Sigit Atmojo', 'Sigit ', 'Cucu', 'Default', '1983-06-11', 'Perempuan', 1, 5, 4, 'Belum Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '002', 'jnajnkwefrgjnk', 'Aktig'),
(298, '3404101022050403', 'Agus Supriyadi', 'Agus', 'Kepala Keluarga', 'Default', '1986-08-24', 'Laki-laki', 1, 5, 8, 'Belum Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '002', 'jkrfgnsergn', 'Aktif'),
(299, '3404101022050411', 'Suyantinem', 'Suyantinem', 'Anak', 'Default', '1965-12-22', 'Perempuan', 2, 4, 5, 'Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '001', 'aklwerfgn', 'Aktif'),
(300, '3404101022050411', 'Sutiyuniati', 'Sutiyuniati', 'Anak', 'Default', '1968-07-19', 'Perempuan', 2, 5, 6, 'Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '001', 'klkmlawrg', 'Aktif'),
(301, '3404101022050411', 'Sekti Suwarni', 'Sekti', 'Anak', 'Default', '1971-02-01', 'Perempuan', 2, 4, 8, 'Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '001', 'lkawefm', 'Aktif'),
(302, '3404101022050411', 'Setya Surbayani', 'Setya', 'Anak', 'Default', '1976-02-22', 'Perempuan', 2, 2, 8, 'Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '001', 'kmlawerfgkl', 'Aktif'),
(303, '3404101022050411', 'Sumartiningsih', 'Sumartiningsih', 'Anak', 'Default', '1979-04-20', 'Perempuan', 2, 5, 8, 'Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '001', 'klawretgui', 'Aktif'),
(304, '3404101022050411', 'Sukyaindar Lustianti', 'Sukyaindar', 'Anak', 'Default', '1981-04-03', 'Perempuan', 2, 4, 2, 'Belum Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '001', 'pawetnp', 'Aktif'),
(305, '3404101101160013', 'Marinem', 'Marinem', 'Kepala Keluarga', 'Default', '1958-03-29', 'Perempuan', 1, 8, 6, 'Cerai Mati', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '001', 'uiawrethui', 'Aktif'),
(306, '3404101101160013', 'Susanti Ning Lestari', 'Susanti', 'Anak', 'Default', '1989-02-12', 'Perempuan', 1, 4, 2, 'Belum Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '001', 'ioawregn', 'Aktif'),
(307, '3404101106080002', 'Iskandar Mas Suto Adi', 'Iskandar ', 'Kepala Keluarga', 'Default', '1968-06-08', 'Laki-laki', 2, 2, 8, 'Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '013', 'awerthu', 'Aktif'),
(308, '3404101106080002', 'Anastasia Yuli Caturaning Ayu', 'Anastasia ', 'Istri', 'Default', '1972-07-20', 'Perempuan', 3, 2, 8, 'Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '013', 'aweaserghyk', 'Aktif'),
(309, '3404101106080002', 'Alexander Aryo Bimo', 'Alexander', 'Anak', 'Default', '1999-06-15', 'Laki-laki', 2, 3, 9, 'Belum Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '013', 'ioawer', 'Aktif'),
(310, '3404101108110008', 'Tony Sunggoro', 'Tony', 'Kepala Keluarga', 'Default', '1978-11-18', 'Laki-laki', 1, 5, 3, 'Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '002', 'aweikfjm', 'Aktif'),
(311, '3404101108110008', 'Andriyani', 'Andriyani', 'Istri', 'Default', '1985-03-29', 'Perempuan', 1, 6, 6, 'Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '002', 'ioawertio', 'Aktif'),
(312, '3404101108110008', 'Angling Kusuma', 'Angling', 'Anak', 'Default', '2010-10-04', 'Laki-laki', 1, 9, 2, 'Belum Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '002', 'ioioawef', 'Aktif'),
(313, '3404101210150007', 'Suradja', 'Suradja', 'Kepala Keluarga', 'Default ', '1959-09-06', 'Laki-laki', 1, 5, 10, 'Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '001', 'jioawerio', ' Aktif'),
(314, '3404101210150007', 'Rukmiati', 'Rukmiati', 'Istri', 'Default', '1971-09-17', 'Perempuan', 1, 6, 6, 'Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '001', 'aweoirf', 'Almarhumah'),
(315, '3404101210150007', 'Lina Kumala Dita ', 'Lina', 'Anak', 'Default', '1991-06-01', 'Perempuan', 1, 4, 9, 'Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '001', 'aiowert', 'Aktif'),
(316, '3404101210150007', 'Oksiana Susilawati', 'Oksiana', 'Anak', 'Default', '1993-10-25', 'Perempuan', 1, 4, 9, 'Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '001', 'ioawefio', 'Aktif'),
(317, '3404101210150007', 'Eltri Rizki Maulana', 'Eltri', 'Anak', 'Default', '1998-11-01', 'Perempuan', 1, 5, 9, 'Belum Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '001', 'aweiorjnkjnkl', 'Aktif'),
(318, '3404101408150001', 'Kholid Haryono', 'Kholid ', 'Kepala Keluarga', 'Default', '1977-10-09', 'Laki-laki', 1, 7, 5, 'Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '001', 'ioioawe', 'Aktif'),
(319, '3404101408150001', 'Tutik Sri Winarni', 'Tutik', 'Istri', 'Default', '1980-02-16', 'Perempuan', 1, 5, 8, 'Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '001', 'ojiawefoi', 'Aktif'),
(320, '3404101408150001', 'Muhammad Umar Kholid', 'Umar', 'Anak', 'Default', '2005-06-08', 'Laki-laki', 1, 6, 9, 'Belum Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '001', 'opiopawef', 'Aktif'),
(321, '3404101408150001', 'Madeeha Shamayla', 'Madeeha', 'Anak', 'Default', '2009-02-11', 'Perempuan', 1, 6, 9, 'Belum Kawin', 'Tidak Mukim', 'Tidak Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '001', 'ioaweiornmnm', 'Aktif'),
(322, '3404101408150001', 'Keysah Hanun', 'Keysah', 'Anak', 'Default', '2014-09-26', 'Perempuan', 1, 9, 2, 'Belum Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '001', 'jkawef', 'Aktif'),
(323, '3404101412100001', 'Tulus Jati Warsono', 'Tulus', 'Kepala Keluarga', 'Default', '1978-06-16', 'Laki-laki', 1, 5, 3, 'Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '001', 'jkjawe', 'Aktif'),
(324, '3404101412100001', 'Sunarni', 'Sunarni', 'Istri', 'Default', '1980-04-23', 'Perempuan', 1, 4, 6, 'Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '001', 'jmbnawe', 'Aktif'),
(325, '3404101412100001', 'Satria Bayu Manunggal ', 'Satria ', 'Anak', 'Default', '2008-10-12', 'Laki-laki', 1, 9, 2, 'Belum Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '001', 'uiawefjnk', 'Aktif'),
(326, '3404101412100001', 'Angelita Lucyani', 'Angelita', 'Anak', 'Default', '2012-04-25', 'Perempuan', 1, 9, 2, 'Belum Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '001', 'uiawerfgtjb', 'Aktif'),
(327, '3404101508070012', 'Gunarto', 'Gunarto', 'Kepala Keluarga', 'Default', '1976-11-04', 'Laki-laki', 1, 5, 13, 'Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '001', 'jabjkwwe', 'Aktif'),
(328, '3404101508070012', 'Hasmaini', 'Hasmaini', 'Istri', 'Default', '1978-06-10', 'Perempuan', 1, 4, 6, 'Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '001', 'yuyuawer', 'Aktif'),
(329, '3404101508070012', 'Rahma Putra Sara Fauza', 'Rahma ', 'Anak', 'Default', '2004-10-19', 'Laki-laki', 1, 8, 2, 'Belum Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '001', 'jikjnkawef', 'Aktif'),
(330, '3404101508070012', 'Hera Afina Putri', 'Hera ', 'Anak', 'Default', '2009-11-04', 'Perempuan', 1, 9, 2, 'Belum Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '001', 'hbjbnmawe', 'Aktif'),
(331, '3404101509150001', 'Mariyono', 'Mariyono', 'Kepala Keluarga', 'Default', '1978-08-31', 'Laki-laki', 1, 4, 8, 'Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '002', 'uiahjwef', 'Aktif'),
(332, '3404101509150001', 'Wahyuni Ningsih', 'Wahyuni', 'Istri', 'Default', '1980-10-16', 'Perempuan', 1, 5, 6, 'Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '002', 'mhnmawef', 'Aktif'),
(333, '3404101509150001', 'Afif Burhanudin Fattah', 'Arif', 'Anak', 'Default', '2001-04-14', 'Laki-laki', 1, 5, 9, 'Belum Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '002', 'jnknmawef', 'Aktif'),
(334, '3404101509150001', 'Muhammad Ridhwan Yuniar', 'Ridhwan', 'Anak', 'Default', '2005-12-10', 'Laki-laki', 1, 6, 9, 'Belum Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '002', 'nmnmawe', 'Aktif'),
(335, '3404101509150001', 'Azkya Huwaida Yuniar', 'Azkya', 'Anak', 'Default', '2013-05-15', 'Perempuan', 1, 9, 2, 'Belum Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '002', 'jnnmawef', 'Aktif'),
(341, '3404101602110001', 'Hamdan Eko Santoso', 'Hamdan', 'Kepala Keluarga', 'Default', '1986-01-03', 'Laki-laki', 1, 5, 17, 'Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '001', 'mnnmawe', 'Aktif'),
(342, '3404101602110001', 'Eka Yuli Listiawati', 'Eka', 'Istri', 'Default', '1989-07-13', 'Perempuan', 1, 5, 4, 'Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '001', 'ujiajwkef', 'Aktif'),
(343, '3404101602110001', 'Marfel Okky Pratama', 'Marfel', 'Anak', 'Default', '2011-03-01', 'Laki-laki', 1, 3, 9, 'Belum Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '001', 'mnnmawef', 'Aktif'),
(344, '3404101602110001', 'Arga Maulana Revaqi', 'Arga', 'Anak', 'Default', '2014-12-30', 'Laki-laki', 1, 9, 2, 'Belum Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '001', 'nmnmawef', 'Aktif'),
(345, '3404101602110001', 'Arka Nauval Santoso', 'Arka', 'Anak', 'Default', '2019-01-19', 'Laki-laki', 1, 9, 2, 'Belum Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '001', 'nawefj', 'Aktif'),
(346, '3404101612110002', 'Ngadinah', 'Ngadinah', 'Kepala Keluarga', 'Default', '1928-02-06', 'Perempuan', 1, 9, 2, 'Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '001', 'uahjwef', 'Aktif'),
(347, '3404101612110002', 'Youan Rakhmat', 'Youan', 'Cucu', 'Default', '1991-06-21', 'Laki-laki', 1, 5, 8, 'Belum Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '001', 'hjuiawer', 'Aktif'),
(348, '3404101612110002', 'Wahyu Hidayat', 'Wahyu', 'Cucu', 'Default', '1996-01-06', 'Laki-laki', 1, 5, 8, 'Belum Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '001', 'mnnmnmaweif', 'Aktif'),
(349, '3404101702110002', 'Haryadi', 'Haryadi', 'Kepala Keluarga', 'Defautl', '1976-06-28', 'Laki-laki', 1, 5, 8, 'Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '002', 'uiaweuir', 'Aktif'),
(350, '3404101702110002', 'Sumarni', 'Sumarni', 'Istri', 'Default', '1974-10-14', 'Perempuan', 1, 5, 6, 'Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '001', 'uiuiuiawejh', 'Aktif'),
(351, '3404101702110002', 'Hafidh Kurniawan', 'Hafidh', 'Anak', 'Default', '2005-05-25', 'Laki-laki', 1, 6, 9, 'Belum Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '002', 'uawefawefm', 'Aktif'),
(352, '3404101702110002', 'Farid Dwi Kurniawan', 'Farid ', 'Anak', 'Default', '2012-03-29', 'Laki-laki', 1, 3, 9, 'Belum Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '002', 'tyawtyer', 'Aktif'),
(380, '3404101703160002', 'Taugah Bidiyono', 'Taugah', 'Kepala Keluarga', 'Default', '1982-04-05', 'Laki-laki', 1, 5, 17, 'Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '002', 'jkajkwefjk', 'Aktif'),
(381, '3404101703160002', 'Asminarti', 'Asminart', 'Istri', 'Default', '1981-04-23', 'Perempuan', 1, 5, 17, 'Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '002', 'uuiuiuiuip', 'Aktif'),
(382, '3404101703160002', 'Aulia Annisa Rafiatun Darojah', 'Aulia', 'Anak', 'Default', '2005-09-20', 'Perempuan', 1, 3, 9, 'Belum Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '002', 'bnbnbn', 'Aktif'),
(383, '3404101703160002', 'Qolbiyatul Azizah', 'Azizah', 'Anak', 'Default', '2006-11-07', 'Perempuan', 1, 3, 9, 'Belum Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '002', 'bnabnwefbn', 'Aktif'),
(384, '3404101703160002', 'Tsabbit Qolbii Aladdien', 'Tsabbit ', 'Anak', 'Default', '2008-06-08', 'Laki-laki', 1, 3, 9, 'Belum Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '002', 'yuyuaweryu', 'Aktif'),
(385, '3404101703160002', 'Hafsoh Umdatudini', 'Hafsoh', 'Anak', 'Default', '2010-04-01', 'Perempuan', 1, 9, 2, 'Belum Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '002', 'jawehbjf', 'Aktif'),
(386, '3404101703160002', 'Saudah Muqiimatuddini', 'Saudah ', 'Anak', 'Default', '2011-08-29', 'Perempuan', 1, 9, 2, 'Belum Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '002', 'nbbnbnbn', 'Aktif'),
(387, '3404101703160002', 'Abu Musa Al Ikhlas', 'Musa', 'Anak', 'Default', '2013-03-21', 'Laki-laki', 1, 9, 2, 'Belum Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '002', 'tyaaewfgh', 'Aktif'),
(388, '3404101703160002', 'Hamzah Satria Jati ', 'Hamzah', 'Anak', 'Default', '2014-10-20', 'Laki-laki', 1, 9, 2, 'Belum Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '002', 'yytyawer', 'Aktif'),
(389, '3404101707080017', 'Nurul Syamsuhadi', 'Nurul', 'Kepala Keluarga', 'Default', '1984-06-27', 'Laki-laki', 1, 5, 17, 'Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '002', 'jnkjnkawe', 'Aktif'),
(390, '3404101707080017', 'Ana Kurniasih', 'Ana', 'Istri', 'Default', '1985-05-20', 'Perempuan', 1, 5, 6, 'Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '002', 'mmawefm', 'Aktif'),
(391, '3404101707080017', 'Aurellia Lysandra Meisya', 'Aurellia', 'Anak', 'Default', '2006-05-31', 'Perempuan', 1, 9, 2, 'Belum Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '002', 'uiuawefkaer', 'Aktif'),
(392, '3404101707080017', 'Naura Kyandra Zafaranisya', 'Naura', 'Anak', 'Default', '2013-06-21', 'Perempuan', 1, 9, 2, 'Belum Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '002', 'erererer', 'Aktif'),
(396, '3404101709130010', 'Nurnowoyanto', 'Nurno', 'Kepala Keluarga', 'Default', '1986-11-08', 'Laki-laki', 1, 5, 8, 'KAwin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '002', 'nmnmawec', 'Aktif'),
(397, '3404101709130010', 'Tiwi Listyaningsih', 'Tiwi', 'Istri', 'Default', '1991-08-24', 'Perempuan', 1, 5, 3, 'Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '002', 'yuuanmnma', 'Aktif'),
(398, '3404101709130010', 'Shelfia Nuristya Ramadhani', 'Shelfia', 'Anak', 'Default', '2013-07-09', 'Perempuan', 1, 9, 2, 'Belum Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '002', 'qqwqweef', 'Aktif'),
(399, '3404101802150005', 'Martinus Tri Winarno', 'Martinus', 'Kepala Keluarga', 'Default', '1989-03-27', 'Laki-laki', 3, 4, 8, 'Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '002', 'yuyuaioomer', 'Aktif'),
(400, '3404101802150005', 'Monica Kris Susanto', 'Monica', 'Istri', 'Default', '1988-03-06', 'Perempuan', 3, 4, 6, 'Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '002', 'nmarfghjkljjhh', 'Aktif'),
(401, '3404101804160006', 'Bayu Iwan Setyawan', 'Bayu', 'Kepala Keluarga', 'Default', '1991-04-21', 'Laki-laki', 1, 1, 8, 'Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '002', 'nmnmaweikpaw', 'Aktif'),
(402, '3404101804160006', 'Ervina Tri Aryani', 'Ervina', 'Istri', 'Default', '1991-05-17', 'Perempuan', 1, 4, 5, 'Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '002', 'anmmawefuj', 'Aktif'),
(403, '3404101804160006', 'Duta Luqman Setyawan', 'Duta', 'Belum Kawin', 'Default', '2016-06-15', 'Laki-laki', 1, 9, 2, 'Belum Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '002', 'yrtrtyryui', 'Aktif'),
(404, '3404101810160014', 'Agus Tri Suranto', 'Agus', 'Kepala Keluarga', 'Default', '1989-08-08', 'Laki-laki', 1, 5, 8, 'Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '002', 'jhjhjau', 'Akatif'),
(405, '3404101810160014', 'Endang Nurlaely', 'Endang', 'Istri', 'Default', '1989-03-17', 'Perempuan', 1, 5, 8, 'Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '002', 'xxccxczh', 'Aktif'),
(406, '3404101810160014', 'Muhammad Azka Putra', 'Azka', 'Anak', 'Default', '2016-12-21', 'Laki-laki', 0, 9, 2, 'Belum Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '002', 'uiikjafjkjjkn', 'Aktif'),
(407, '3404101810160014', 'Syakila Naura Adzkiya', 'Syakila', 'Anak', 'Default', '2018-09-16', 'Perempuan', 1, 9, 2, 'Belum Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '002', 'ghhikilnm', 'Aktif'),
(408, '3404101810180008', 'Mujiyanto', 'Mujiyanto', 'Kepala Keluarga', 'Default', '1962-10-03', 'Laki-laki', 1, 5, 8, 'Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '001', 'nbkoiio', 'Aktif'),
(409, '3404101810180008', 'Risnita', 'Risnita', 'Istri', 'Default', '1972-08-06', 'Perempuan', 1, 5, 6, 'Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '001', 'jjknnm', 'Aktif'),
(410, '3404101810180008', 'Alif Karim', 'Alif', 'Anak', 'Default', '2004-07-12', 'Laki-laki', 1, 8, 9, 'Belum Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '001', 'ewwewerb', 'Aktif'),
(411, '3404101810180008', 'Aura Latifa', 'Aura', 'Anak', 'Default', '2007-01-17', 'Perempuan', 0, 3, 9, 'Belum Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '001', 'tyuoaew', 'Aktif'),
(412, '3404101901180006', 'Bambang Dwiyatmoko', 'Bambang', 'Kepala Keluarga', 'Default', '1978-10-08', 'Laki-laki', 1, 5, 8, 'Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '013', 'ryrtwear', 'Aktif'),
(413, '3404101901180006', 'Catur Purnami', 'Catur', 'Istri', 'Default', '1984-07-15', 'Perempuan', 1, 5, 8, 'Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '013', 'vbbvbn', 'Aktif'),
(414, '3404101901180006', 'Gyda Yunikha Putri Firdaus', 'Gyda', 'Anak', 'Default', '2008-06-06', 'Perempuan', 1, 3, 9, 'Belum Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '013', 'nmvbvbawk', 'Aktif'),
(415, '3404101901180006', 'Fajar Rifky Al Firdaus', 'Fajar', 'Anak', 'Default', '2010-03-07', 'Laki-laki', 1, 3, 9, 'Belum Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '013', 'nbnolnmm,a', 'Aktif'),
(416, '3404101907130002', 'Suyoto', 'Suyoto', 'Kepala Keluarga', 'Default', '1957-04-10', 'Laki-laki', 1, 5, 10, 'Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '002', 'ttwaer', 'Aktif'),
(417, '3404101907130002', 'Sri Hartatiningsih', 'Sri', 'Istri', 'Default', '1973-10-20', 'Perempuan', 1, 5, 6, 'Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '002', 'aweyrbn,', 'Aktif'),
(418, '3404101907130002', 'Pratama Ari Putra', 'Ari', 'Anak', 'Default', '2000-06-15', 'Laki-laki', 1, 5, 9, 'Belum Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '002', 'qwebhj', 'Aktif'),
(419, '3404101907130002', 'Ikhsan Putra Pamungkas', 'Ikhsan', 'Anak', 'Default', '2001-10-19', 'Laki-laki', 1, 5, 9, 'Belum Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '002', 'vvbbnmmoe', 'Aktif'),
(420, '3404102001160006', 'Irfan Aji Son Aji', 'Irfan', 'Kepala Keluarga', 'Default', '1993-12-17', 'Laki-laki', 1, 5, 8, 'Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '001', 'hjhjawefnm', 'Aktif'),
(421, '3404102001160006', 'Tiwi Widyaningsih', 'Tiwi', 'Istri', 'Default', '1996-11-09', 'Perempuan', 1, 5, 6, 'Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '001', 'hjawefok', 'Aktif'),
(422, '3404102001160006', 'Ananda Rifky Saputra', 'Rifky', 'Anak', 'Default', '2015-10-19', 'Laki-laki', 1, 9, 2, 'Belum Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '001', 'hjghpawer', 'Aktif'),
(423, '3404102001160006', 'Intan Tivani Anggraini', 'Intan', 'Anak', 'Default', '2017-04-22', 'Perempuan', 1, 9, 2, 'Belum Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '001', 'hbnmjkawefop', 'Aktif'),
(424, '3404102003170005', 'Sudjilah', 'Sudjilah', 'Kepala Keluarga', 'Default', '1955-09-15', 'Perempuan', 1, 8, 11, 'Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '001', 'bbbbnnjh', 'Aktif'),
(425, '3404102003170005', 'Astuti Indarwati', 'Astuti', 'Anak', 'Default', '1987-05-30', 'Perempuan', 1, 5, 6, 'Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '001', 'ggghawer', 'Aktif'),
(426, '3404102003170005', 'Boby Hermawan', 'Boby', 'Menantu', 'Default', '1987-05-27', 'Laki-laki', 1, 6, 3, 'Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '001', 'yyyyuawer', 'Aktif'),
(427, '3404102103090003', 'Priyo Winoto Bingah ', 'Priyo', 'Kepala Keluarga', 'Default', '1947-09-08', 'Laki-laki', 1, 8, 4, 'Cerai Mati', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '002', 'ttttyawr', 'Aktif'),
(428, '3404102106120004', 'Ngatiyem', 'Ngatiyem', 'Kepala Keluarga', 'Default', '1944-04-14', 'Perempuan', 1, 3, 4, 'Cerai Mati', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '001', 'hhhjjawlef', 'Aktif]'),
(429, '3404102109070009', 'Siswanto', 'Siswanto', 'Kepala Keluarga', 'Default', '1977-06-04', 'Laki-laki', 1, 5, 8, 'Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '001', 'gghawef', 'Aktif'),
(430, '3404102109070009', 'Sugiyatini', 'Sugiyatini', 'Istri', 'Default', '1976-07-18', 'Perempuan', 1, 5, 8, 'Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '001', 'yyayuwertj', 'Aktif'),
(431, '3404102109070009', 'Suci Amaliah', 'Suci', 'Anak', 'Default', '2002-06-04', 'Perempuan', 1, 5, 9, 'Belum Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '001', 'hjjawemfmn', 'Aktif'),
(432, '3404102109070009', 'Arya Ilham Saputra', 'Arya', 'Anak', 'Default', '2009-10-13', 'Laki-laki', 1, 3, 9, 'Belum Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '001', 'bbvcxxga', 'Aktif'),
(433, '3404102205120002', 'Suyatno', 'Suyatno', 'Kepala Keluarga', 'Default', '1956-04-10', 'Laki-laki', 1, 2, 10, 'Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '001', 'aaaassssss', 'Aktif'),
(434, '3404102205120002', 'Suminten', 'Suminten', 'Istri', 'Default', '1962-10-10', 'Perempuan', 1, 5, 6, 'Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '001', 'yyyyuuuuuuu', 'Aktif'),
(435, '3404102208140007', 'Didi Kristiawan', 'Didi', 'Kepala Keluarga', 'Default', '1987-12-21', 'Laki-laki', 1, 4, 1, 'Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '002', 'hhnnmggg', 'Aktif'),
(436, '3404102208140007', 'Cholifah Budiarti', 'Cholifah', 'Istri', 'Default', '1987-11-19', 'Perempuan', 1, 4, 8, 'Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '002', 'gbnbna', 'Aktif');
INSERT INTO `datainduk` (`kd_induk`, `no_kk`, `nama`, `nm_panggilan`, `status_hub_kk`, `tmp_lahir`, `tgl_lahir`, `j_kelamin`, `kd_agama`, `kd_pendidikan`, `kd_pekerjaan`, `status_kawin`, `status_mukim`, `keterangan_mukim`, `kd_level_ekonomi`, `gol_darah`, `is_kt`, `is_latin`, `is_hijaiyah`, `is_iqra`, `is_quran`, `is_5waktu`, `is_jamaah`, `is_zakat_fitrah`, `is_zakat_mal`, `is_qurban`, `is_haji`, `is_umrah`, `kd_rt`, `no_ktp`, `status`) VALUES
(437, '3404102208140007', 'Fatian Dzakia Sava', 'Fatian', 'Anak', 'Default', '2014-07-23', 'Perempuan', 1, 9, 2, 'Belum Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '002', 'Aghawef', 'Aktif'),
(438, '3404102308160005', 'Aziz Mahmudi', 'Aziz', 'Kepala Keluarga', 'Default', '1985-11-18', 'Laki-laki', 1, 5, 12, 'Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '002', 'tttrrerer', 'Aktif'),
(439, '3404102308160005', 'Rahayu Indrawati', 'Rahayu', 'Istri', 'Default', '1984-04-15', 'Perempuan', 1, 2, 8, 'Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '002', 'lllololljj', 'Aktif'),
(440, '3404102308160005', 'Lihtuhayu Andamari Aziz', 'Lihtuhayu', 'Anak', 'Default', '2017-01-23', 'Perempuan', 1, 9, 2, 'Belum Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '002', 'rererere', 'Aktif'),
(441, '3404102311090005', 'Iswadi', 'Iswadi', 'Kepala Keluarga', 'Default', '1972-05-14', 'Laki-laki', 1, 5, 4, 'Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '002', 'jjjjuuer', 'Aktif'),
(442, '3404102311090005', 'Sri Hartini', 'Sri', 'Istri', 'Default', '1979-04-02', 'Perempuan', 1, 5, 6, 'Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '002', 'yyyyyyyyaweru', 'Aktif'),
(443, '3404102311090005', ' Yoga Angga Pratama', 'Yoga', 'Anak', 'Default', '2003-01-10', 'Laki-laki', 1, 6, 9, 'Belum Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '002', 'mnmnmmn', 'Aktif'),
(444, '3404102311090005', 'Irda Setiawan', 'Irda', 'Anak', 'Default', '2011-11-20', 'Laki-laki', 1, 3, 9, 'Belum Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '002', 'rererererere', 'Aktif'),
(445, '3404102311090006', 'Wasono', 'Wasono', 'Kepala Keluarga', 'Default', '1981-08-26', 'Laki-laki', 1, 6, 4, 'Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '002', 'nmnmbbnm', 'Aktif'),
(446, '3404102311090006', 'Winarti', 'Winarti', 'Istri', 'Default', '1979-06-04', 'Perempuan', 1, 5, 6, 'Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '002', 'jaakkawoie', 'Aktif'),
(447, '3404102311090006', 'Bagus Eka Prasetyo', 'Bagus', 'Anak', 'Default', '2004-08-23', 'Laki-laki', 1, 6, 9, 'Belum Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '002', 'yyyaweuijk', 'Aktif'),
(448, '3404102401090005', 'Sartono', 'Sartono', 'Kepala Keluarga', 'Default', '1974-12-25', 'Laki-laki', 1, 5, 3, 'Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '002', 'klkmmawef', 'Aktif'),
(449, '3404102401090005', 'Titik Widiyaningsih', 'Titik', 'Istri', 'Default', '1982-03-05', 'Perempuan', 1, 5, 6, 'Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '002', 'dfdashk', 'Aktif'),
(450, '3404102401090005', 'Dela Novitasari', 'Dela', 'Anak', 'Default', '2003-11-17', 'Perempuan', 1, 5, 9, 'Belum Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '002', 'qweqweqwe', 'Aktif'),
(451, '3404102403070005', 'Supardi', 'Supardi', 'Kepala Keluarga', 'Default', '1965-10-17', 'Laki-laki', 1, 5, 15, 'Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '001', 'qwqwqwqw', 'Aktif'),
(452, '3404102403070005', 'Rubiyati', 'Rubiyati', 'Istri', 'Default', '1969-12-20', 'Perempuan', 1, 5, 6, 'Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '001', 'qqqwqwqw', 'Aktif'),
(453, '3404102403070005', 'Ika Febriyati', 'Ika', 'Anak', 'Default', '1995-02-22', 'Perempuan', 1, 5, 8, 'Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '001', 'yyyyyyaweur', 'Aktif'),
(454, '3404102403070005', 'Fauzi Dwi Nugroho', 'Fauzi', 'Anak', 'Default', '1999-11-26', 'Laki-laki', 1, 5, 8, 'Belum Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '001', 'ghjkarwfgj', 'Aktif'),
(455, '3404102403070006', 'G. Sukimo', 'Sukimo', 'Kepala Keluarga', 'Default', '1967-09-22', 'Laki-laki', 1, 5, 3, 'Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '001', 'klllklklkllk', 'Aktif'),
(456, '3404102403070006', 'Tumiyati', 'Tumiyati', 'Istri', 'Default', '1969-10-05', 'Perempuan', 1, 5, 6, 'Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '001', 'fffgggffgf', 'Aktif'),
(457, '3404102403070006', 'Yuri Setiawan', 'Yuri', 'Anak', 'Default', '1993-09-07', 'Laki-laki', 1, 5, 9, 'Belum Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '001', 'rerereerer', 'Aktif'),
(458, '3404102403070006', 'Windi Indah Sundari', 'Windi', 'Anak', 'Default', '2000-05-09', 'Perempuan', 1, 5, 9, 'Belum Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '001', 'uuuuuaweri', 'Aktif'),
(459, '3404102406160009', 'Boediman Rachman', 'Boediman', 'Kepala Keluarga', 'Default', '1942-08-26', 'Laki-laki', 1, 5, 10, 'Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '013', 'iiooioppop', 'Aktif'),
(460, '3404102406160009', 'Tri Redjeki', 'Tri', 'Istri', 'Default', '1948-09-09', 'Perempuan', 1, 5, 6, 'Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '013', 'nnvnvnvnvn', 'Aktif'),
(461, '3404102406160009', 'Erliena Budi Kristianti', 'Erliena', 'Anak', 'Default', '1973-12-16', 'Perempuan', 1, 4, 8, 'Belum Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '013', 'fgfgfgfh', 'Aktif'),
(462, '3404102406160009', 'Henny Rosario Kartika Sari', 'Henny', 'Anak', 'Default', '1976-03-07', 'Perempuan', 1, 4, 8, 'Belum Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '013', 'rerrtwert', 'Aktif'),
(463, '3404102412140007', 'Lutvi Nurnuryadi', 'Lutvi', 'Kepala Keluarga', 'Default', '1996-02-27', 'Laki-laki', 1, 5, 8, 'Kawin', 'Tidak Mukim', 'Tidak Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '001', 'vcvvvcvcvcc', 'Aktif'),
(464, '3404102412140007', 'Sarasati Lala Buana', 'Sarasati', 'Istri', 'Default', '1995-12-10', 'Perempuan', 1, 5, 6, 'Kawin', 'Tidak Mukim', 'Tidak Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '001', 'jjkljklk', 'Aktif'),
(465, '3404102412140007', 'Kanaya Vira Kamaratih', 'Kanaya', 'Anak', 'Default', '2014-11-03', 'Perempuan', 1, 9, 2, 'Belum Kawin', 'Tidak Mukim', 'Tidak Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '001', 'ererererer', 'Aktif'),
(466, '3404102412140007', 'Inara Vira Larasati', 'Inara', 'Anak', 'Default', '2017-02-16', 'Perempuan', 1, 9, 2, 'Belum Kawin', 'Tidak Mukim', 'Tidak Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '001', 'mzsdfkl', 'Aktif'),
(467, '3404102503090003', 'Rusminarti', 'Rusminarti', 'Kepala Keluarga', 'Default', '1973-07-18', 'Perempuan', 1, 8, 3, 'Cerai Mati', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '001', 'kjawefmlk', 'Aktif'),
(468, '3404102509120005', 'Maryata', 'Maryata', 'Kepala Keluarga', 'Default', '1972-01-15', 'Laki-laki', 1, 2, 8, 'Kawin', 'Tidak Mukim', 'Tidak Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '001', 'njjnjnjnjnn', 'Aktif'),
(469, '3404102509120005', 'Youla Meriyoulinda Tenda', 'Youla', 'Istri', 'Default', '1975-07-08', 'Perempuan', 1, 5, 6, 'Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '001', 'dedqwed', 'Aktif'),
(470, '3404102509120005', 'Nurma Ayulestari', 'Nurma', 'Anak', 'Default', '1998-02-08', 'Perempuan', 1, 4, 9, 'Belum Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '001', 'qweeeghv', 'Aktif'),
(471, '3404102509120005', 'Tristania Putri Aprilia', 'Tristania', 'Anak', 'Default', '2005-04-02', 'Perempuan', 1, 5, 9, 'Belum Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '001', 'czxczxcb', 'Aktif'),
(472, '3404102604120014', 'Suprihatni', 'Suprihatni', 'Kepala Keluarga', 'Default', '1980-06-17', 'Laki-laki', 1, 6, 3, 'Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '002', 'iiioioi', 'Aktif'),
(473, '3404102604120014', 'Saliyem ', 'Saliyem', 'Istri', 'Default', '1980-09-19', 'Perempuan', 1, 5, 6, 'Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '002', 'ppoawer', 'Aktif'),
(474, '3404102604120014', 'Angga Jati Atmaja', 'Angga', 'Anak', 'Default', '2012-05-25', 'Laki-laki', 1, 9, 2, 'Belum Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '002', 'mnnmb', 'Aktif'),
(475, '3404102609110004', 'Wahyudianto', 'Wahyu', 'Kepala Keluarga', 'Default', '1993-08-21', 'Laki-laki', 1, 6, 8, 'Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '001', 'uiiu', 'Aktif'),
(476, '3404102609110004', 'Siti Anisa Atup', 'Siti', 'Istri', 'Default', '1990-09-08', 'Perempuan', 1, 6, 6, 'Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '001', 'taywer', 'Aktif'),
(477, '3404102609110004', 'Nur Kumala Sari', 'Nur', 'Anak', 'Default', '2011-08-22', 'Perempuan', 1, 3, 9, 'Belum Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '001', 'yawe', 'Aktif'),
(478, '3404102609110004', 'Fara Maheswari', 'Fara', 'Anak', 'Default', '2017-07-14', 'Perempuan', 1, 9, 2, 'Belum Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '001', 'jaawer', 'Aktif'),
(479, '3404102703090004', 'Gunanta ', 'Gunanta', 'Kepala Keluarga', 'Default', '1974-05-01', 'Laki-laki', 1, 5, 16, 'Kawin', 'Tidak Mukim', 'Tidak Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '002', 'yawerp', 'Aktif'),
(480, '3404102703090004', 'Nila Trisnawati', 'Nila', 'Istri', 'Default', '1986-03-03', 'Perempuan', 1, 5, 6, 'Kawin', 'Tidak Mukim', 'Tidak Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '002', 'kjkl', 'Aktif'),
(481, '3404102703090004', 'Natasya Dyah Anggaraini', 'Natasya', 'Anak', 'Default', '2005-06-08', 'Perempuan', 1, 3, 9, 'Belum Kawin', 'Tidak Mukim', 'Tidak Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '002', 'tyawe', 'Aktif'),
(482, '3404102703090004', 'Satria Ferdiansyah', 'Satria', 'Anak', 'Default', '2010-12-15', 'Laki-laki', 1, 9, 2, 'Belum Kawin', 'Tidak Mukim', 'Tidak Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '002', 'jkkjawe', 'Aktif'),
(483, '3404102703090004', 'Siti', 'Siti', 'Orangtua', 'Default', '1955-07-01', 'Perempuan', 1, 5, 4, 'Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '002', 'rtyw', 'Aktif'),
(484, '3404102704110003', 'Joko Mulyanto', 'Joko', 'Kepala Keluarga', 'Default', '1979-05-21', 'Laki-laki', 1, 5, 8, 'Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '013', 'uuuiu', 'Aktif'),
(485, '3404102704110003', 'Irma Sari Nurmiana', 'Irma', 'Istri', 'Default', '1979-05-20', 'Perempuan', 1, 5, 6, 'Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '013', 'cvbv', 'Aktif'),
(486, '3404102704110003', 'Miko Adib Pratama', 'Miko', 'Anak', 'Default', '2004-02-28', 'Laki-laki', 1, 3, 9, 'Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '013', 'fgha', 'Aktif'),
(487, '3404102704110003', 'Raafi Nur Syaddad', 'Raafi', 'Anak', 'Default', '2014-07-04', 'Laki-laki', 1, 9, 2, 'Belum Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '013', 'yte', 'Aktif'),
(488, '3404102704110012', 'Agung Heriyanto', 'Agung', 'Kepala Keluarga', 'Default', '1983-04-30', 'Laki-laki', 1, 6, 17, 'Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '002', 'mlawe', 'Aktif'),
(489, '3404102704110012', 'Sri Winarsih', 'Sri', 'Istri', 'Default', '1983-01-06', 'Perempuan', 1, 5, 6, 'Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '002', 'pawe', 'Aktif'),
(490, '3404102704110012', 'Bilqis Ufaria Bagaskoro', 'Bilqis', 'Anak', 'Default', '2015-03-05', 'Perempuan', 1, 9, 2, 'Belum Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '002', 'laew', 'Aktif'),
(491, '3404102704110012', 'Derby Anastasya Putri', 'Derby', 'Anak', 'Default', '2019-01-31', 'Perempuan', 1, 9, 2, 'Belum Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '002', 'uiawep', 'Aktif'),
(492, '3404102708070018', 'Tri Paryono', 'Tri', 'Kepala Keluarga', 'Default', '1979-01-08', 'Laki-laki', 1, 5, 11, 'Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '001', 'trt', 'Aktif'),
(493, '3404102708070018', 'Sri Lestari', 'Sri ', 'Istri', 'Default', '1980-08-01', 'Perempuan', 1, 5, 11, 'KAwin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '001', 'gtyu', 'Aktif'),
(494, '3404102708070018', 'Radhitya Eka Satria', 'Radhitya', 'Anak', 'Default', '2005-06-07', 'Laki-laki', 1, 3, 9, 'Belum Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '001', 'opawe', 'Aktif'),
(495, '3404102708070018', 'Zahwa Alikha Putri', 'Zahwa', 'Anak', 'Default', '2012-09-13', 'Perempuan', 1, 9, 2, 'Belum Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '001', 'ppowe', 'Aktif'),
(496, '3404102708070018', 'Putri Hasna Azzahra', 'Putri', 'Anak', 'Default', '2019-01-03', 'Perempuan', 1, 9, 2, 'Belum Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '001', 'ooawef', 'Aktif'),
(497, '3404102803130005', 'Ngadiman', 'Ngadiman', 'Kepala Keluarga', 'Default', '1979-07-03', 'Laki-laki', 1, 8, 3, 'Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '001', 'mnb', 'Aktif'),
(498, '3404102803130005', 'Tumiyem', 'Tumiyem', 'Istri', 'Default', '1977-12-31', 'Perempuan', 1, 8, 3, 'Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '001', 'bvcv', 'Aktif'),
(499, '3404102809060014', 'Sugeng Murdiharjo', 'Sugeng', 'Kepala Keluarga', 'Default', '1945-02-13', 'Laki-laki', 1, 8, 4, 'Cerai Mati', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '002', 'trv', 'Aktif'),
(500, '3404102809060014', 'Sumarsono', 'Sumarsono', 'Anak', 'Default', '1978-04-16', 'Laki-laki', 1, 5, 8, 'Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '002', 'poiie', 'Aktif'),
(501, '3404102810160008', 'Eko Nur Sardianto', 'Eko', 'Kepala Keluarga', 'Default', '1996-05-02', 'Laki-laki', 1, 5, 17, 'Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '001', 'rqw', 'Aktif'),
(502, '3404102810160008', 'Rikaningrum Rahayu', 'Ningrum', 'Istri', 'Default', '1994-09-07', 'Perempuan', 1, 6, 6, 'Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '001', 'piier', 'Aktif'),
(503, '3404102810160008', 'Aldiansyah Putra Nur Pratama', 'Aldi', 'Anak', 'Default', '2017-04-20', 'Laki-laki', 1, 9, 2, 'Belum Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '001', 'akja', 'Aktif'),
(504, '3404102812110009', 'Mardiwiyono Semi', 'Mardiwiyono', 'Kepala Keluarga', 'Default', '1947-01-01', 'Laki-laki', 1, 8, 17, 'Cerai Mati', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '002', 'pooy', 'Aktif'),
(505, '3404102903070009', 'Johan Komara', 'Johan', 'Kepala Keluarga', 'Default', '1952-08-10', 'Laki-laki', 1, 5, 8, 'Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '013', 'iuy', 'Aktif'),
(506, '3404102903070009', 'Niati', 'Niati', 'Istri', 'Default', '1972-03-12', 'Perempuan', 1, 5, 6, 'Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '013', 'terq', 'Aktif'),
(507, '3404102903070009', 'Yoeniar Suryo Soeseno', 'Suryo', 'Anak', 'Default', '1992-06-16', 'Laki-laki', 1, 4, 8, 'Belum Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '013', 'tuui', 'Aktif'),
(508, '3404102903070009', 'Sorya Hastuti', 'Sorya', 'Anak', 'Default', '1993-06-12', 'Perempuan', 1, 2, 6, 'Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '013', 'pkljj', 'Aktif'),
(509, '3404102903070009', 'Surya Budi Gunawan', 'Surya', 'Anak', 'Default', '1999-04-18', 'Laki-laki', 1, 5, 2, 'Belum Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '013', 'qtyu', 'Aktif'),
(510, '3404102906150002', 'Eko Guritno', 'Eko', 'Kepala Keluarga', 'Default', '1973-06-25', 'Laki-laki', 1, 4, 8, 'Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '001', 'iiuy', 'Aktif'),
(511, '3404102906150002', 'Luluk Khayati', 'Luluk', 'Istri', 'Default', '1974-12-25', 'Perempuan', 1, 4, 8, 'Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '001', 'lghj', 'Aktif'),
(512, '3404102907080004', 'Giman', 'Giman', 'Kepala Keluarga', 'Default', '1974-02-01', 'Laki-laki', 1, 8, 3, 'Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '001', 'lkm', 'Aktif'),
(513, '3404102907080004', 'Shofiyatun', 'Shofiyatun', 'Istri', 'Default', '1978-05-10', 'Perempuan', 1, 8, 3, 'Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '001', 'apjow\'eftg', 'Aktif'),
(514, '3404102912150003', 'Ryan Wibisono', 'Ryan', 'Kepala Keluarga', 'Default', '1987-07-22', 'Laki-laki', 1, 5, 8, 'Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '001', 'iow', 'Aktif'),
(515, '3404102912150003', 'Winarni Suprihatin', 'Winarni', 'Istri', 'Default', '1988-10-12', 'Perempuan', 1, 5, 6, 'Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '001', 'kkj', 'Aktif'),
(516, '3404102912150003', 'Alvaro Abid Morata Wibisono', 'Abid', 'Anak', 'Default', '2015-11-12', 'Laki-laki', 1, 9, 2, 'Belum Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '001', 'alvm', 'Aktif'),
(517, '3404103101120016', 'Sutarto', 'Sutarto', 'Kepala Keluarga', 'Default', '1954-09-05', 'Laki-laki', 1, 5, 10, 'Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '001', 'pool', 'Aktif'),
(518, '3404103101120016', 'Dwi Lestari ', 'Dwi', 'Istri', 'Default', '1968-05-09', 'Perempuan', 1, 5, 17, 'Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '001', 'dwls', 'Aktif'),
(519, '3404103101120016', 'Alief Fajar Nugroho', 'Alif', 'Anak', 'Default', '2012-03-12', 'Laki-laki', 1, 3, 9, 'Belum Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '001', 'Allllfn', 'Aktif'),
(520, '3404103107130007', 'Jumari', 'Jumari', 'Kepala Keluarga', 'Default', '1969-12-31', 'Laki-laki', 1, 6, 4, 'Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '002', 'jmr', 'Aktif'),
(521, '3404103107130007', 'Estri Widodo', 'Estri', 'Istri', 'Default', '1971-02-01', 'Perempuan', 1, 6, 8, 'Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '002', 'estrw', 'Aktif'),
(522, '3404103107130007', 'Desti Nurhayati', 'Desti', 'Anak', 'Default', '1997-12-01', 'Perempuan', 1, 2, 8, 'Belum Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '002', 'destnhy', 'Aktif'),
(523, '3404103107130007', 'Tri Lestari Wahyuni', 'Tri', 'Anak', 'Default', '2001-04-21', 'Perempuan', 1, 6, 9, 'Belum Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '002', 'trlst', 'Aktif'),
(524, '3404103112180008', 'Muslikhudin', 'Muslikhudin', 'Kepala Keluarga', 'Default', '1988-09-25', 'Laki-laki', 1, 8, 17, 'Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '001', 'mslkh', 'Aktif'),
(525, '3404103112180008', 'Lia Widiastuti', 'Lia', 'Istri', 'Default', '1985-04-10', 'Perempuan', 1, 4, 6, 'Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '001', 'lwds', 'Aktif'),
(526, '3404103112180008', 'Nayyara Putri Rahmani', 'Nayyara', 'Anak', 'Default', '2013-10-03', 'Perempuan', 1, 9, 2, 'Belum Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '001', 'nyyra', 'Aktif'),
(527, '3404103112180013', 'Tukiyem', 'Tukiyem', 'Kepala Keluarga', 'Default', '1965-04-25', 'Perempuan', 1, 6, 3, 'Cerai Mati', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '001', 'tkym', 'Aktif'),
(528, '3404103112180013', 'Lestari Nita Rahayu', 'Lestari', 'Anak', 'Default', '1992-01-02', 'Perempuan', 1, 5, 8, 'Belum Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '001', 'lstrint', 'Aktif'),
(529, '3404103112180013', 'Adip Nugroho', 'Adip', 'Anak', 'Default', '1999-02-21', 'Laki-laki', 1, 5, 8, 'Belum Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '001', 'adpng', 'Aktif'),
(530, '3404120204080044', 'Sunyoto', 'Sunyoto', 'Kepala Keluarga', 'Default', '1974-03-13', 'Laki-laki', 1, 5, 3, 'Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '001', 'snyt', 'Aktif'),
(531, '3404120204080044', 'Surip', 'Surip', 'Istri', 'Default', '1976-01-19', 'Perempuan', 1, 6, 6, 'Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '001', 'srp', 'Aktif'),
(532, '3404120204080044', 'Sulprisa Apriani', 'Sulprisa ', 'Anak', 'Default', '2002-04-22', 'Perempuan', 1, 5, 9, 'Belum Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '001', 'slprsa', 'Aktif'),
(533, '3404120204080044', 'Yudiawan Dwi Anggoro', 'Yudi', 'Anak', 'Default', '2011-05-26', 'Laki-laki', 1, 8, 9, 'Belum Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '001', 'ydawn', 'Aktif'),
(534, '3404120603170013', 'Didik Kurniadi Setyawan', 'Didik', 'Kepala Keluarga', 'Default', '1980-04-14', 'Laki-laki', 1, 4, 8, 'Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '002', 'ddk', 'Aktif'),
(535, '3404120603170013', 'Qoyum Anis Yuliana', 'Qoyum', 'Istri', 'Default', '1981-09-06', 'Perempuan', 1, 4, 17, 'Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '002', 'qym', 'Aktif'),
(536, '3404120603170013', 'Airlangga Cita Ayodya Setiawan', 'Cita', 'Anak', 'Default', '2010-02-16', 'Laki-laki', 1, 9, 2, 'Belum Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '002', 'arllnggg', 'Aktif'),
(537, '3404120603170013', 'Ardiono Deva Argananta Setiawan', 'Deva', 'Anak', 'Default', '2015-02-18', 'Laki-laki', 1, 9, 2, 'Belum Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '002', 'ardno', 'Aktif'),
(538, '3404121202052757', 'Suwardjo, S.H', 'Suwardjo', 'Kepala Keluarga', 'Default', '1955-07-10', 'Laki-laki', 1, 4, 10, 'Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '002', 'swdj', 'Aktif'),
(539, '3404121202052757', 'Dra. Mari Rahayu', 'Mari', 'Istri', 'Default', '1960-08-08', 'Perempuan', 1, 4, 8, 'Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '002', 'mrrhy', 'Aktif'),
(540, '3404121202052757', 'Yuliadi Tunjung Priambada, S.S', 'Yuliadi', 'Anak', 'Default', '1988-07-02', 'Laki-laki', 1, 4, 17, 'Belum Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '002', 'yldi', 'Aktif'),
(541, '3404121202052757', 'Ramadyan Endra Kurniawan', 'Endra', 'Anak', 'Default', '1994-08-03', 'Laki-laki', 1, 5, 9, 'Belum Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '002', 'ramdynendr', 'Aktif'),
(542, '3471030409982553', 'Idhil Fitri Usman', 'Usman', 'Kepala Keluarga', 'Default', '1960-04-01', 'Laki-laki', 1, 4, 17, 'Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '002', 'dhlftr', 'Aktif'),
(543, '3471030409982553', 'Sri Koestantini Mi\'radyah', 'Sri', 'Istri', 'Default', '1962-01-04', 'Perempuan', 1, 2, 17, 'Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '002', 'kstnt', 'Aktif'),
(544, '3471030409982553', 'Camella Sukma Dara', 'Camella ', 'Anak', 'Default', '1988-12-15', 'Perempuan', 1, 4, 7, 'Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '002', 'cmllskm', 'Aktif'),
(545, '3471030409982553', 'Dhienda Viola Deintha', 'Dinda', 'Anak', 'Default', '1991-08-15', 'Perempuan', 1, 4, 9, 'Belum Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '002', 'dhnda', 'Aktif'),
(546, '3471031502970797', 'Vincencius Mulyono', 'Mulyono', 'Kepala Keluarga', 'Default', '1942-08-18', 'Laki-laki', 3, 6, 3, 'Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '002', 'vncncs', 'Aktif'),
(547, '3471031502970797', 'Theresia Watiyem Mulyono', 'Theresia ', 'Istri', 'Default', '1954-05-05', 'Perempuan', 3, 6, 6, 'Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '001', 'thrsamlyn', 'Aktif'),
(548, '3471031502970797', 'Lukas Widya Nugroho', 'Lukas', 'Anak', 'Default', '1977-01-21', 'Laki-laki', 3, 5, 8, 'Belum Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '002', 'lksmlyn', 'Aktif'),
(549, '3471110409010087', 'Melani Yulianti', 'Melani', 'Kepala Keluarga', 'Default', '1963-08-29', 'Perempuan', 2, 5, 6, 'Cerai Mati', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '002', 'mlnylnt', 'Aktif'),
(550, '3471112912100002', 'Timothius Tunggu Etu', 'Timothius', 'Kepala Keluarga', 'Default', '1972-10-22', 'Laki-laki', 2, 5, 17, 'Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '002', 'tmthus', 'Aktif'),
(551, '3471112912100002', 'Evan Marliani', 'Evan', 'Istri', 'Default', '1984-11-29', 'Perempuan', 2, 5, 6, 'Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '002', 'evmrln', 'Aktif'),
(552, '3471112912100002', 'Aloysius Jason Putra T. E.', 'Jason', 'Anak', 'Default', '2004-04-10', 'Laki-laki', 2, 3, 9, 'Belum Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '002', 'alyss', 'Aktif'),
(553, '3471112912100002', 'Thedosius Joshua Putra T. E. ', 'Tedo', 'Anak', 'Default', '2006-05-15', 'Laki-laki', 2, 9, 2, 'Belum Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '002', 'tshss', 'Aktif'),
(554, '3471112912100002', 'Jeslyn Valerie Keit A.Lepir', 'Jeslyn', 'Anak', 'Defaullt', '2012-09-25', 'Perempuan', 2, 9, 2, 'Belum Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '002', 'jslyn', 'Aktif'),
(555, '3471121202140002', 'Matheo Raoldy Wicaksono', 'Matheo', 'Kepala Keluarga', 'Default', '1984-11-11', 'Laki-laki', 3, 2, 12, 'Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '002', 'mtheo', 'Aktif'),
(556, '3471121202140002', 'Maria Ivona Purwa Susanti', 'Maria', 'Istri', 'Default', '1990-05-19', 'Perempuan', 3, 4, 8, 'Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '002', 'mariaivn', 'Aktif'),
(557, '3471121202140002', 'Michael Alice Maria Wicaksono', 'Michael', 'Anak', 'Default', '2016-01-21', 'Laki-laki', 3, 9, 2, 'Belum Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '002', 'mchel', 'Aktif'),
(558, '7207162402080551', 'Saripudin', 'Saripudin', 'Kepala Keluarga', 'Default', '1969-06-12', 'Laki-laki', 1, 6, 17, 'Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '001', 'srpdn', 'Aktif'),
(559, '7207162402080551', 'Vonni', 'Vonni', 'Istri', 'Default', '1976-01-07', 'Perempuan', 1, 6, 17, 'Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '001', 'vnni', 'Aktif'),
(560, '7207162402080551', 'Srimukti Wulandari', 'Srimukti', 'Anak', 'Default', '1995-05-26', 'Perempuan', 1, 6, 9, 'Belum Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '001', 'srmkti', 'Aktif'),
(561, '7207162402080551', 'Rahma Mutia', 'Rahma ', 'Anak', 'Default', '1999-10-14', 'Perempuan', 1, 3, 9, 'Belum Kawin', 'Mukim', 'Mukim', 0, 'A', '', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '001', 'rhmalia', 'Aktif'),
(563, '123456', 'Farhan Mozart', 'Farhan', 'Kepala Keluarga', 'Papua', '1997-09-11', 'Laki-laki', 1, 5, 6, 'Belum Kawin', 'Kontrak', 'Rumah Dinas', 0, 'A', 'Ya', 'Ya', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', 'Tidak', '000', '98878', 'Aktif'),
(564, '12', 'Test', 'Tes', 'Kepala Keluarga', 'llklklk', '1998-09-01', 'Laki-laki', 0, 0, 0, 'Belum Kawin', 'Kontrak', 'Rumah Dinas', 0, 'A', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '000', '61616161', 'Aktif');

-- --------------------------------------------------------

--
-- Table structure for table `data_keahlian_warga`
--

CREATE TABLE `data_keahlian_warga` (
  `id` int(11) NOT NULL,
  `kd_induk` int(15) NOT NULL,
  `kd_keahlian` int(15) NOT NULL,
  `is_sertifikat` varchar(30) NOT NULL,
  `deskripsi_sertifikat` varchar(50) DEFAULT NULL,
  `level_sertifikat` varchar(20) DEFAULT NULL,
  `keterangan` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_keahlian_warga`
--

INSERT INTO `data_keahlian_warga` (`id`, `kd_induk`, `kd_keahlian`, `is_sertifikat`, `deskripsi_sertifikat`, `level_sertifikat`, `keterangan`) VALUES
(9, 12, 3, 'Ya', 'Juara 2', 'Nasional', 'Aktif');

-- --------------------------------------------------------

--
-- Table structure for table `data_kk`
--

CREATE TABLE `data_kk` (
  `no_kk` varchar(20) NOT NULL,
  `no_rt` varchar(5) NOT NULL,
  `no_rw` varchar(5) NOT NULL,
  `nm_kk` varchar(50) NOT NULL,
  `kd_rumah` varchar(10) DEFAULT NULL,
  `kd_level_ekonomi` int(3) NOT NULL,
  `keterangan` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_kk`
--

INSERT INTO `data_kk` (`no_kk`, `no_rt`, `no_rw`, `nm_kk`, `kd_rumah`, `kd_level_ekonomi`, `keterangan`) VALUES
('12', '001', '001', 'Tes', NULL, 0, NULL),
('123456', '000', '001', 'Farhan', NULL, 0, NULL),
('3310040702042583', '000', '001', 'FX Suripto', NULL, 0, NULL),
('3404070502056649', '000', '001', 'Kismanto', NULL, 1, NULL),
('3404070802051475', '000', '002', 'Abda Yanuar Akhsan S.T', NULL, 0, NULL),
('3404072106170003', '013', '001', 'Mustakim', NULL, 0, ''),
('3404072910130016', '013', '001', 'Tri Paramita Susanto', NULL, 0, ''),
('3404100102100006', '001', '001', 'Rian Hermawan Pandu Prasetyo', NULL, 0, ''),
('3404100103060010', '013', '001', 'Gunawan Bakti Auriyanto', NULL, 0, ''),
('3404100103120007', '001', '001', 'Erik Wahyudi', NULL, 0, ''),
('3404100107100010', '002', '001', 'Juwari', NULL, 0, ''),
('3404100107190005', '001', '001', 'Nuryani', NULL, 0, ''),
('3404100109140006', '001', '001', 'Mimbar Ambita Wisnu', NULL, 0, ''),
('3404100110070006', '001', '001', 'Joko Haryono', NULL, 0, ''),
('3404100111070002', '001', '001', 'Sriyana', NULL, 0, ''),
('3404100302070009', '002', '001', 'Agus Subeno', NULL, 0, ''),
('3404100308100001', '013', '001', 'Felix Yuni Feriyanto ', NULL, 0, ''),
('3404100311100004', '002', '001', 'Eko Cahyono', NULL, 0, ''),
('3404100402190009', '002', '001', 'Catur Dis Nugroho', NULL, 0, ''),
('3404100405070004', '013', '001', 'Suratman Wisnu Rendrawan', NULL, 0, ''),
('3404100409080002', '001', '001', 'Teguh Haryono', NULL, 0, ''),
('3404100502090007', '001', '001', 'Sarno Sungatno', NULL, 0, ''),
('3404100504110004', '013', '001', 'Marsalam', NULL, 0, ''),
('3404100603140011', '001', '001', 'Iwan Setiyoko', NULL, 0, ''),
('3404100604150007', '013', '001', 'Aris Mulya Budi Wirawan', NULL, 0, ''),
('3404100606170012', '001', '001', 'Arik Prasetyo', NULL, 0, ''),
('3404100610080006', '001', '001', 'Daryanto', NULL, 0, ''),
('3404100703070004', '002', '001', 'E. Sigit Wisnu Joedono', NULL, 0, ''),
('3404100710170002', '013', '001', 'Andi Prasetyo ', NULL, 0, ''),
('3404100712090003', '013', '001', 'Abdul Ngalim', NULL, 0, ''),
('3404100802110005', '002', '001', 'Widodo', NULL, 0, ''),
('3404101001120004', '001', '001', 'Untung Prayitno', NULL, 0, ''),
('3404101002050364', '001', '001', 'Sukardi', NULL, 0, ''),
('3404101002050366', '001', '001', 'Pujo Darmanto', NULL, 0, ''),
('3404101002050370', '002', '001', 'Harjono', NULL, 0, ''),
('3404101002050371', '002', '001', 'Darjo Wiyono', NULL, 0, ''),
('3404101002050373', '002', '001', 'Tukiran S. B.', NULL, 0, ''),
('3404101002050374', '002', '001', 'Sakri', NULL, 0, ''),
('3404101002050375', '002', '001', 'Sutimin', NULL, 0, ''),
('3404101002050376', '002', '001', 'Jemakir', NULL, 0, ''),
('3404101002050378', '001', '001', 'Suratin', NULL, 0, ''),
('3404101002050379', '001', '001', 'Lasinem', NULL, 0, ''),
('3404101002050380', '001', '001', 'Suroto', NULL, 0, ''),
('3404101002050381', '001', '001', 'Asipin', NULL, 0, ''),
('3404101002050382', '001', '001', 'Jikan', NULL, 0, ''),
('3404101002050383', '001', '001', 'Rubiyem', NULL, 0, 'Aktif'),
('3404101002050384', '001', '001', 'Haryanto', NULL, 0, ''),
('3404101002050385', '001', '001', 'Topo Haryono', NULL, 0, ''),
('3404101002050387', '001', '001', 'Supriyadi', NULL, 0, ''),
('3404101002050389', '001', '001', 'Rami', NULL, 0, ''),
('3404101002050392', '001', '001', 'Giyono', NULL, 0, ''),
('3404101002050396', '002', '001', 'Widi Sumarto', NULL, 0, ''),
('3404101002050397', '002', '001', 'Sukardi', NULL, 0, ''),
('3404101002050400', '001', '001', 'Sukrismanta', NULL, 0, ''),
('3404101002050401', '001', '001', 'Yadi Wiyoto', NULL, 0, ''),
('3404101002050403', '002', '001', 'Sugiman', NULL, 0, ''),
('3404101002050405', '002', '001', 'Santoso', NULL, 0, ''),
('3404101002050406', '002', '001', 'Bonasih', NULL, 0, ''),
('3404101002050407', '002', '001', 'Darmo Wiyoto Painem', NULL, 0, ''),
('3404101002050408', '002', '001', 'Bambang Sugiyanto', NULL, 0, ''),
('3404101002050411', '001', '001', 'Mukiyem', NULL, 0, ''),
('3404101002054528', '013', '001', 'Nur Hartanto', NULL, 0, ''),
('3404101002056546', '013', '001', 'Sriyadi', NULL, 0, ''),
('3404101002056683', '002', '001', 'Rajiman', NULL, 0, ''),
('3404101002056684', '001', '001', 'Wandiyo', NULL, 0, ''),
('3404101002056685', '001', '001', 'Haryadi', NULL, 0, ''),
('3404101002056688', '001', '001', 'Purwanta', NULL, 0, ''),
('3404101002056689', '001', '001', 'Syahrudin', NULL, 0, ''),
('3404101002056690', '002', '001', 'Sagino', NULL, 0, ''),
('3404101002056691', '001', '001', 'Harjomartono Jumbage', NULL, 0, ''),
('3404101002056692', '001', '001', 'Dasinem', NULL, 0, ''),
('3404101002056697', '002', '001', 'Jinab', NULL, 0, ''),
('3404101002056698', '001', '001', 'Didit Yulianto', NULL, 0, ''),
('3404101002056702', '013', '001', 'Suryanto', NULL, 0, ''),
('3404101002057048', '001', '001', 'Sudarmin', NULL, 0, ''),
('3404101002090007', '001', '001', 'Eko Utomo', NULL, 0, ''),
('3404101002120006', '002', '001', 'Maryoto', NULL, 0, ''),
('3404101005120003', '002', '001', 'Wagiyem', NULL, 0, ''),
('3404101022050403', '002', '001', 'Agus Supriyadi', NULL, 0, 'Aktif'),
('3404101022050411', '001', '001', 'Suyantinem', NULL, 0, 'Aktif'),
('3404101101160013', '001', '001', 'Marinem', NULL, 0, ''),
('3404101106080002', '013', '001', 'Iskandar Mas Suto Adi', NULL, 0, ''),
('3404101108110008', '002', '001', 'Tony Sunggoro', NULL, 0, ''),
('3404101210150007', '001', '001', 'Suradja', NULL, 0, ''),
('3404101408150001', '001', '001', 'Kholid Haryono', NULL, 0, ''),
('3404101412100001', '001', '001', 'Tulus Jati Warsono', NULL, 0, ''),
('3404101508070012', '001', '001', 'Gunarto', NULL, 0, ''),
('3404101509150001', '002', '001', 'Mariyono', NULL, 0, ''),
('3404101602110001', '001', '001', 'Hamdan Eko Santoso', NULL, 0, ''),
('3404101612110002', '001', '001', 'Ngadinah', NULL, 0, ''),
('3404101702110002', '002', '001', 'Haryadi', NULL, 0, ''),
('3404101703160002', '002', '001', 'Taugah Bidiyono', NULL, 0, ''),
('3404101707080017', '002', '001', 'Nurul Syamsuhadi', NULL, 0, ''),
('3404101709130010', '002', '001', 'Nurnowiyanto', NULL, 0, ''),
('3404101802150005', '002', '001', 'Martinus Tri Winarno', NULL, 0, ''),
('3404101804160006', '002', '001', 'Bayu iwan Setyawan', NULL, 0, ''),
('3404101810160014', '002', '001', 'Agus tri Suranto', NULL, 0, ''),
('3404101810180008', '001', '001', 'Mujiyanto', NULL, 0, ''),
('3404101901180006', '013', '001', 'Bambang Dwiyatmoko', NULL, 0, ''),
('3404101907130002', '002', '001', 'Suyoto', NULL, 0, ''),
('3404102001160006', '001', '001', 'Irfan Aji Son Aji', NULL, 0, ''),
('3404102003170005', '001', '001', 'Sudjilah', NULL, 0, ''),
('3404102103090003', '002', '001', 'Priyo Winoto Bingah', NULL, 0, ''),
('3404102106120004', '001', '001', 'Ngatiyem', NULL, 0, ''),
('3404102109070009', '001', '001', 'Siswanto', NULL, 0, ''),
('3404102205120002', '001', '001', 'Suyatno', NULL, 0, ''),
('3404102208140007', '002', '001', 'Didi Kristiawan', NULL, 0, ''),
('3404102308160005', '002', '001', 'Aziz Mahmudi', NULL, 0, ''),
('3404102311090005', '002', '001', 'Iswadi', NULL, 0, ''),
('3404102311090006', '002', '001', 'Wasono', NULL, 0, ''),
('3404102401090005', '002', '001', 'Sartono', NULL, 0, ''),
('3404102403070005', '001', '001', 'Supardi', NULL, 0, ''),
('3404102403070006', '001', '001', 'G. Sukimo', NULL, 0, ''),
('3404102406160009', '013', '001', 'Boediman Rachman', NULL, 0, ''),
('3404102412140007', '001', '001', 'Lutvi Nurnuryadi', NULL, 0, ''),
('3404102503090003', '001', '001', 'Rusminarti', NULL, 0, ''),
('3404102509120005', '001', '001', 'Maryata', NULL, 0, ''),
('3404102604120014', '002', '001', 'Suprihatni', NULL, 0, ''),
('3404102609110004', '001', '001', 'Wahyudianto', NULL, 0, ''),
('3404102703090004', '002', '001', 'Gunanta', NULL, 0, ''),
('3404102704110003', '013', '001', 'Joko Mulyanto', NULL, 0, ''),
('3404102704110012', '002', '001', 'Agung Heriyanto', NULL, 0, ''),
('3404102708070018', '001', '001', 'Tri Paryono', NULL, 0, ''),
('3404102803130005', '001', '001', 'Ngadiman', NULL, 0, ''),
('3404102809060014', '002', '001', 'Sugeng Murdiharjo', NULL, 0, ''),
('3404102810160008', '001', '001', 'Eko Nur Sardianto', NULL, 0, ''),
('3404102812110009', '002', '001', 'Mardiwiyono Semi', NULL, 0, ''),
('3404102903070009', '013', '001', 'Johan Komara', NULL, 0, ''),
('3404102906150002', '001', '001', 'Eko Guritno', NULL, 0, ''),
('3404102907080004', '001', '001', 'Giman', NULL, 0, ''),
('3404102912150003', '001', '001', 'Ryan Wibisono', NULL, 0, ''),
('3404103101120016', '001', '001', 'Sutarto', NULL, 0, ''),
('3404103107130007', '002', '001', 'Jumari', NULL, 0, ''),
('3404103112180008', '001', '001', 'Muslikhudin', NULL, 0, ''),
('3404103112180013', '001', '001', 'Tukiyem', NULL, 0, ''),
('3404120204080044', '001', '001', 'Sunyoto', NULL, 0, ''),
('3404120603170013', '002', '001', 'Didik Kurniadi Setyawan', NULL, 0, ''),
('3404121202052757', '002', '001', 'Suwardjo, S.H', NULL, 0, ''),
('3471030409982553', '002', '001', 'Idhil Fitri Usman', NULL, 0, ''),
('3471031502970797', '002', '001', 'Vincencius Mulyono', NULL, 0, ''),
('3471110409010087', '002', '001', 'Melani Yulianti', NULL, 0, ''),
('3471112912100002', '002', '001', 'Timothius Tunggu Etu', NULL, 0, ''),
('3471121202140002', '002', '001', 'Matheo Raoldy Wicaksono', NULL, 0, ''),
('7207162402080551', '001', '001', 'Saripudin', NULL, 0, ''),
('null', '013', '001', 'Adinta Toro Saputra', NULL, 0, ''),
('null1', '013', '001', 'Lilik Faudin', NULL, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `md_agama`
--

CREATE TABLE `md_agama` (
  `kd_agama` int(15) NOT NULL,
  `nama_agama` varchar(15) NOT NULL,
  `keterangan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `md_agama`
--

INSERT INTO `md_agama` (`kd_agama`, `nama_agama`, `keterangan`) VALUES
(0, 'Default', 'Default'),
(1, 'Islam', 'Islam'),
(2, 'Protestan', 'Kristen Protestan'),
(3, 'Katolik', 'Kristen Katolik'),
(4, 'Hindu', 'Hindu'),
(5, 'Budha', 'Budha'),
(6, 'Konghucu', 'Konghucu');

-- --------------------------------------------------------

--
-- Table structure for table `md_keahlian`
--

CREATE TABLE `md_keahlian` (
  `kd_keahlian` int(15) NOT NULL,
  `nama_keahlian` varchar(20) NOT NULL,
  `deskripsi` varchar(50) NOT NULL,
  `keterangan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `md_keahlian`
--

INSERT INTO `md_keahlian` (`kd_keahlian`, `nama_keahlian`, `deskripsi`, `keterangan`) VALUES
(0, 'Default', 'Default', 'Default'),
(1, 'Musik', 'Musik', 'Musik'),
(2, 'Tari', 'Tari', 'Menari'),
(3, 'Seni Rupa', 'Gambar', 'Menggambar'),
(4, 'Sepak Bola', 'Olahraga', 'Sepak Bola'),
(5, 'Bulu Tangkis', 'Olahraga', 'Olahraga');

-- --------------------------------------------------------

--
-- Table structure for table `md_level_ekonomi`
--

CREATE TABLE `md_level_ekonomi` (
  `kd_level_ekonomi` int(15) NOT NULL,
  `nama_level` varchar(20) NOT NULL,
  `keterangan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `md_level_ekonomi`
--

INSERT INTO `md_level_ekonomi` (`kd_level_ekonomi`, `nama_level`, `keterangan`) VALUES
(0, 'Default', 'Default'),
(1, 'Menengah', 'Menengah'),
(2, 'Menengah Keatas', 'Menengah Keatas'),
(3, 'Menengah Kebawah', 'Menengah Kebawah');

-- --------------------------------------------------------

--
-- Table structure for table `md_pekerjaan`
--

CREATE TABLE `md_pekerjaan` (
  `kd_pekerjaan` int(15) NOT NULL,
  `nama_pekerjaan` varchar(25) NOT NULL,
  `keterangan` varchar(50) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `md_pekerjaan`
--

INSERT INTO `md_pekerjaan` (`kd_pekerjaan`, `nama_pekerjaan`, `keterangan`, `status`) VALUES
(0, 'Default', 'Default', ''),
(1, 'Arsitek', 'Arsitek', ''),
(2, 'Belum/Tidak Bekerja', 'Belum/Tidak Bekerja', ''),
(3, 'Buruh Harian Lepas', 'Buruh Harian Lepas', ''),
(4, 'Buruh Tani/Perkebunan', 'Buruh Tani/Perkebunan', ''),
(5, 'Guru/Dosen', 'Guru/Dosen', ''),
(6, 'IRT', 'IRT', ''),
(7, 'Karyawan BUMN', 'Karyawan BUMN', ''),
(8, 'Karyawan Swasta', 'Karyawan Swasta', ''),
(9, 'Pelajar/Mahasiswa', 'Pelajar/Mahasiswa', ''),
(10, 'Pensiunan', 'Pensiunan', ''),
(11, 'Perdagangan', 'Perdagangan', ''),
(12, 'Pegawai Negeri Sipil', 'PNS', ''),
(13, 'POLRI', 'POLRI', ''),
(14, 'Seniman', 'Seniman', ''),
(15, 'Sopir', 'Sopir', ''),
(16, 'TNI', 'TNI', ''),
(17, 'Wiraswasta', 'Wiraswasta', '');

-- --------------------------------------------------------

--
-- Table structure for table `md_pendidikan`
--

CREATE TABLE `md_pendidikan` (
  `kd_pendidikan` int(15) NOT NULL,
  `nama_jenjang` varchar(50) NOT NULL,
  `keterangan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `md_pendidikan`
--

INSERT INTO `md_pendidikan` (`kd_pendidikan`, `nama_jenjang`, `keterangan`) VALUES
(0, 'Default', ''),
(1, 'Akademi/Diploma II/Sarjana Muda', ''),
(2, 'Akademi/ Diploma III/Sarjana Muda', ''),
(3, 'Belum Tamat SD/Sederajat', ''),
(4, 'Diploma IV/Sarjana', ''),
(5, 'SLTA/Sederajat', ''),
(6, 'SLTP/Sederajat', ''),
(7, 'Strata II', ''),
(8, 'Tamat SD/Sederajat', ''),
(9, 'Tidak/Belum Sekolah', '');

-- --------------------------------------------------------

--
-- Table structure for table `md_rt`
--

CREATE TABLE `md_rt` (
  `kd_rt` varchar(5) NOT NULL,
  `no_rt` varchar(5) NOT NULL,
  `no_rw` varchar(5) NOT NULL,
  `nm_pejabat` varchar(20) NOT NULL,
  `nm_bu_pejabat` varchar(20) NOT NULL,
  `keterangan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `md_rt`
--

INSERT INTO `md_rt` (`kd_rt`, `no_rt`, `no_rw`, `nm_pejabat`, `nm_bu_pejabat`, `keterangan`) VALUES
('000', '000', '001', 'Default', 'Default', 'Default'),
('001', '001', '001', 'Default', 'Default', 'Default'),
('002', '002', '001', 'Default', 'Default', 'Default'),
('013', '013', '001', 'Default', 'Default', 'Default');

-- --------------------------------------------------------

--
-- Table structure for table `md_rumah`
--

CREATE TABLE `md_rumah` (
  `kd_rumah` varchar(10) NOT NULL,
  `no_rumah` varchar(5) NOT NULL,
  `no_kk` varchar(20) DEFAULT NULL,
  `kd_rt` varchar(5) NOT NULL,
  `jml_kk` int(3) DEFAULT NULL,
  `jml_penghuni` int(3) DEFAULT NULL,
  `nm_kk` varchar(50) DEFAULT NULL,
  `keterangan` varchar(50) DEFAULT NULL,
  `is_kontrakan` varchar(20) DEFAULT NULL,
  `status` varchar(20) DEFAULT NULL,
  `latitude` varchar(15) DEFAULT NULL,
  `longitude` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `md_rumah`
--

INSERT INTO `md_rumah` (`kd_rumah`, `no_rumah`, `no_kk`, `kd_rt`, `jml_kk`, `jml_penghuni`, `nm_kk`, `keterangan`, `is_kontrakan`, `status`, `latitude`, `longitude`) VALUES
('001', '001', NULL, '002', 0, 0, NULL, NULL, NULL, NULL, NULL, NULL),
('002', '002', NULL, '002', 0, 0, NULL, NULL, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `md_rw`
--

CREATE TABLE `md_rw` (
  `no_rw` varchar(5) NOT NULL,
  `nm_pejabat` varchar(20) NOT NULL,
  `nm_bu_pejabat` varchar(20) NOT NULL,
  `keterangan` varchar(50) NOT NULL,
  `nm_dusun` varchar(20) NOT NULL,
  `nm_desa` varchar(20) NOT NULL,
  `nm_kecamatan` varchar(20) NOT NULL,
  `nm_kabupaten` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `md_rw`
--

INSERT INTO `md_rw` (`no_rw`, `nm_pejabat`, `nm_bu_pejabat`, `keterangan`, `nm_dusun`, `nm_desa`, `nm_kecamatan`, `nm_kabupaten`) VALUES
('001', 'Default', 'Default', 'Default', 'Default', 'Default', 'Default', 'Default'),
('002', 'Default', 'Default', 'Default', 'Default', 'Default', 'Default', 'Default');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(32, '2014_10_12_000000_create_users_table', 1),
(33, '2014_10_12_100000_create_password_resets_table', 1),
(34, '2021_03_31_165511_add_google_to_users_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sementara`
--

CREATE TABLE `sementara` (
  `no_kk` varchar(20) NOT NULL,
  `no_rt` varchar(5) NOT NULL,
  `no_rw` varchar(5) NOT NULL,
  `nm_kk` varchar(50) NOT NULL,
  `kd_rumah` int(5) NOT NULL,
  `kd_level_ekonomi` int(3) NOT NULL,
  `keterangan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sementara`
--

INSERT INTO `sementara` (`no_kk`, `no_rt`, `no_rw`, `nm_kk`, `kd_rumah`, `kd_level_ekonomi`, `keterangan`) VALUES
('3310040702042583', '002', '001', 'FX Suripto', 0, 0, ''),
('3404070502056649', '001', '001', 'Kismanto', 0, 1, ''),
('3404070802051475', '013', '001', 'Abda Yanuar Akhsan S.T', 0, 0, ''),
('3404072106170003', '013', '001', 'Mustakim', 0, 0, ''),
('3404072910130016', '013', '001', 'Tri Paramita Susanto', 0, 0, ''),
('3404100102100006', '001', '001', 'Rian Hermawan Pandu Prasetyo', 0, 0, ''),
('3404100103060010', '013', '001', 'Gunawan Bakti Auriyanto', 0, 0, ''),
('3404100103120007', '001', '001', 'Erik Wahyudi', 0, 0, ''),
('3404100107100010', '002', '001', 'Juwari', 0, 0, ''),
('3404100107190005', '001', '001', 'Nuryani', 0, 0, ''),
('3404100109140006', '001', '001', 'Mimbar Ambita Wisnu', 0, 0, ''),
('3404100110070006', '001', '001', 'Joko Haryono', 0, 0, ''),
('3404100111070002', '001', '001', 'Sriyana', 0, 0, ''),
('3404100302070009', '002', '001', 'Agus Subeno', 0, 0, ''),
('3404100308100001', '013', '001', 'Felix Yuni Feriyanto ', 0, 0, ''),
('3404100311100004', '002', '001', 'Eko Cahyono', 0, 0, ''),
('3404100402190009', '002', '001', 'Catur Dis Nugroho', 0, 0, ''),
('3404100405070004', '013', '001', 'Suratman Wisnu Rendrawan', 0, 0, ''),
('3404100409080002', '001', '001', 'Teguh Haryono', 0, 0, ''),
('3404100502090007', '001', '001', 'Sarno Sungatno', 0, 0, ''),
('3404100504110004', '013', '001', 'Marsalam', 0, 0, ''),
('3404100603140011', '001', '001', 'Iwan Setiyoko', 0, 0, ''),
('3404100604150007', '013', '001', 'Aris Mulya Budi Wirawan', 0, 0, ''),
('3404100606170012', '001', '001', 'Arik Prasetyo', 0, 0, ''),
('3404100610080006', '001', '001', 'Daryanto', 0, 0, ''),
('3404100703070004', '002', '001', 'E. Sigit Wisnu Joedono', 0, 0, ''),
('3404100710170002', '013', '001', 'Andi Prasetyo ', 0, 0, ''),
('3404100712090003', '013', '001', 'Abdul Ngalim', 0, 0, ''),
('3404100802110005', '002', '001', 'Widodo', 0, 0, ''),
('3404101001120004', '001', '001', 'Untung Prayitno', 0, 0, ''),
('3404101002050364', '001', '001', 'Sukardi', 0, 0, ''),
('3404101002050366', '001', '001', 'Pujo Darmanto', 0, 0, ''),
('3404101002050370', '002', '001', 'Harjono', 0, 0, ''),
('3404101002050371', '002', '001', 'Darjo Wiyono', 0, 0, ''),
('3404101002050373', '002', '001', 'Tukiran S. B.', 0, 0, ''),
('3404101002050374', '002', '001', 'Sakri', 0, 0, ''),
('3404101002050375', '002', '001', 'Sutimin', 0, 0, ''),
('3404101002050376', '002', '001', 'Jemakir', 0, 0, ''),
('3404101002050378', '001', '001', 'Suratin', 0, 0, ''),
('3404101002050379', '001', '001', 'Lasinem', 0, 0, ''),
('3404101002050380', '001', '001', 'Suroto', 0, 0, ''),
('3404101002050381', '001', '001', 'Asipin', 0, 0, ''),
('3404101002050382', '001', '001', 'Jikan', 0, 0, ''),
('3404101002050383', '001', '001', 'Rubiyem', 0, 0, 'Aktif'),
('3404101002050384', '001', '001', 'Haryanto', 0, 0, ''),
('3404101002050385', '001', '001', 'Topo Haryono', 0, 0, ''),
('3404101002050387', '001', '001', 'Supriyadi', 0, 0, ''),
('3404101002050389', '001', '001', 'Rami', 0, 0, ''),
('3404101002050392', '001', '001', 'Giyono', 0, 0, ''),
('3404101002050396', '002', '001', 'Widi Sumarto', 0, 0, ''),
('3404101002050397', '002', '001', 'Sukardi', 0, 0, ''),
('3404101002050400', '001', '001', 'Sukrismanta', 0, 0, ''),
('3404101002050401', '001', '001', 'Yadi Wiyoto', 0, 0, ''),
('3404101002050403', '002', '001', 'Sugiman', 0, 0, ''),
('3404101002050405', '002', '001', 'Santoso', 0, 0, ''),
('3404101002050406', '002', '001', 'Bonasih', 0, 0, ''),
('3404101002050407', '002', '001', 'Darmo Wiyoto Painem', 0, 0, ''),
('3404101002050408', '002', '001', 'Bambang Sugiyanto', 0, 0, ''),
('3404101002050411', '001', '001', 'Mukiyem', 0, 0, ''),
('3404101002054528', '013', '001', 'Nur Hartanto', 0, 0, ''),
('3404101002056546', '013', '001', 'Sriyadi', 0, 0, ''),
('3404101002056683', '002', '001', 'Rajiman', 0, 0, ''),
('3404101002056684', '001', '001', 'Wandiyo', 0, 0, ''),
('3404101002056685', '001', '001', 'Haryadi', 0, 0, ''),
('3404101002056688', '001', '001', 'Purwanta', 0, 0, ''),
('3404101002056689', '001', '001', 'Syahrudin', 0, 0, ''),
('3404101002056690', '002', '001', 'Sagino', 0, 0, ''),
('3404101002056691', '001', '001', 'Harjomartono Jumbage', 0, 0, ''),
('3404101002056692', '001', '001', 'Dasinem', 0, 0, ''),
('3404101002056697', '002', '001', 'Jinab', 0, 0, ''),
('3404101002056698', '001', '001', 'Didit Yulianto', 0, 0, ''),
('3404101002056702', '013', '001', 'Suryanto', 0, 0, ''),
('3404101002057048', '001', '001', 'Sudarmin', 0, 0, ''),
('3404101002090007', '001', '001', 'Eko Utomo', 0, 0, ''),
('3404101002120006', '002', '001', 'Maryoto', 0, 0, ''),
('3404101005120003', '002', '001', 'Wagiyem', 0, 0, ''),
('3404101022050403', '002', '001', 'Agus Supriyadi', 0, 0, 'Aktif'),
('3404101022050411', '001', '001', 'Suyantinem', 0, 0, 'Aktif'),
('3404101101160013', '001', '001', 'Marinem', 0, 0, ''),
('3404101106080002', '013', '001', 'Iskandar Mas Suto Adi', 0, 0, ''),
('3404101108110008', '002', '001', 'Tony Sunggoro', 0, 0, ''),
('3404101210150007', '001', '001', 'Suradja', 0, 0, ''),
('3404101408150001', '001', '001', 'Kholid Haryono', 0, 0, ''),
('3404101412100001', '001', '001', 'Tulus Jati Warsono', 0, 0, ''),
('3404101508070012', '001', '001', 'Gunarto', 0, 0, ''),
('3404101509150001', '002', '001', 'Mariyono', 0, 0, ''),
('3404101602110001', '001', '001', 'Hamdan Eko Santoso', 0, 0, ''),
('3404101612110002', '001', '001', 'Ngadinah', 0, 0, ''),
('3404101702110002', '002', '001', 'Haryadi', 0, 0, ''),
('3404101703160002', '002', '001', 'Taugah Bidiyono', 0, 0, ''),
('3404101707080017', '002', '001', 'Nurul Syamsuhadi', 0, 0, ''),
('3404101709130010', '002', '001', 'Nurnowiyanto', 0, 0, ''),
('3404101802150005', '002', '001', 'Martinus Tri Winarno', 0, 0, ''),
('3404101804160006', '002', '001', 'Bayu iwan Setyawan', 0, 0, ''),
('3404101810160014', '002', '001', 'Agus tri Suranto', 0, 0, ''),
('3404101810180008', '001', '001', 'Mujiyanto', 0, 0, ''),
('3404101901180006', '013', '001', 'Bambang Dwiyatmoko', 0, 0, ''),
('3404101907130002', '002', '001', 'Suyoto', 0, 0, ''),
('3404102001160006', '001', '001', 'Irfan Aji Son Aji', 0, 0, ''),
('3404102003170005', '001', '001', 'Sudjilah', 0, 0, ''),
('3404102103090003', '002', '001', 'Priyo Winoto Bingah', 0, 0, ''),
('3404102106120004', '001', '001', 'Ngatiyem', 0, 0, ''),
('3404102109070009', '001', '001', 'Siswanto', 0, 0, ''),
('3404102205120002', '001', '001', 'Suyatno', 0, 0, ''),
('3404102208140007', '002', '001', 'Didi Kristiawan', 0, 0, ''),
('3404102308160005', '002', '001', 'Aziz Mahmudi', 0, 0, ''),
('3404102311090005', '002', '001', 'Iswadi', 0, 0, ''),
('3404102311090006', '002', '001', 'Wasono', 0, 0, ''),
('3404102401090005', '002', '001', 'Sartono', 0, 0, ''),
('3404102403070005', '001', '001', 'Supardi', 0, 0, ''),
('3404102403070006', '001', '001', 'G. Sukimo', 0, 0, ''),
('3404102406160009', '013', '001', 'Boediman Rachman', 0, 0, ''),
('3404102412140007', '001', '001', 'Lutvi Nurnuryadi', 0, 0, ''),
('3404102503090003', '001', '001', 'Rusminarti', 0, 0, ''),
('3404102509120005', '001', '001', 'Maryata', 0, 0, ''),
('3404102604120014', '002', '001', 'Suprihatni', 0, 0, ''),
('3404102609110004', '001', '001', 'Wahyudianto', 0, 0, ''),
('3404102703090004', '002', '001', 'Gunanta', 0, 0, ''),
('3404102704110003', '013', '001', 'Joko Mulyanto', 0, 0, ''),
('3404102704110012', '002', '001', 'Agung Heriyanto', 0, 0, ''),
('3404102708070018', '001', '001', 'Tri Paryono', 0, 0, ''),
('3404102803130005', '001', '001', 'Ngadiman', 0, 0, ''),
('3404102809060014', '002', '001', 'Sugeng Murdiharjo', 0, 0, ''),
('3404102810160008', '001', '001', 'Eko Nur Sardianto', 0, 0, ''),
('3404102812110009', '002', '001', 'Mardiwiyono Semi', 0, 0, ''),
('3404102903070009', '013', '001', 'Johan Komara', 0, 0, ''),
('3404102906150002', '001', '001', 'Eko Guritno', 0, 0, ''),
('3404102907080004', '001', '001', 'Giman', 0, 0, ''),
('3404102912150003', '001', '001', 'Ryan Wibisono', 0, 0, ''),
('3404103101120016', '001', '001', 'Sutarto', 0, 0, ''),
('3404103107130007', '002', '001', 'Jumari', 0, 0, ''),
('3404103112180008', '001', '001', 'Muslikhudin', 0, 0, ''),
('3404103112180013', '001', '001', 'Tukiyem', 0, 0, ''),
('3404120204080044', '001', '001', 'Sunyoto', 0, 0, ''),
('3404120603170013', '002', '001', 'Didik Kurniadi Setyawan', 0, 0, ''),
('3404121202052757', '002', '001', 'Suwardjo, S.H', 0, 0, ''),
('3471030409982553', '002', '001', 'Idhil Fitri Usman', 0, 0, ''),
('3471031502970797', '002', '001', 'Vincencius Mulyono', 0, 0, ''),
('3471110409010087', '002', '001', 'Melani Yulianti', 0, 0, ''),
('3471112912100002', '002', '001', 'Timothius Tunggu Etu', 0, 0, ''),
('3471121202140002', '002', '001', 'Matheo Raoldy Wicaksono', 0, 0, ''),
('7207162402080551', '001', '001', 'Saripudin', 0, 0, ''),
('null', '013', '001', 'Adinta Toro Saputra', 0, 0, ''),
('null1', '013', '001', 'Lilik Faudin', 0, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `sementara_datainduk`
--

CREATE TABLE `sementara_datainduk` (
  `kd_induk` int(15) NOT NULL,
  `no_kk` varchar(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `nm_panggilan` varchar(20) NOT NULL,
  `status_hub_kk` varchar(20) NOT NULL,
  `tmp_lahir` varchar(20) NOT NULL,
  `tgl_lahir` date NOT NULL,
  `j_kelamin` varchar(15) NOT NULL,
  `kd_agama` int(15) NOT NULL,
  `kd_pendidikan` int(15) NOT NULL,
  `kd_pekerjaan` int(15) NOT NULL,
  `status_kawin` varchar(20) NOT NULL,
  `status_mukim` varchar(20) NOT NULL,
  `keterangan_mukim` varchar(20) NOT NULL,
  `kd_level_ekonomi` int(15) NOT NULL,
  `gol_darah` varchar(3) NOT NULL,
  `is_latin` varchar(10) NOT NULL,
  `is_hijaiyah` varchar(10) NOT NULL,
  `is_iqra` varchar(10) NOT NULL,
  `is_quran` varchar(10) NOT NULL,
  `is_5waktu` varchar(10) NOT NULL,
  `is_jamaah` varchar(10) NOT NULL,
  `is_zakat_fitrah` varchar(10) NOT NULL,
  `is_zakat_mal` varchar(10) NOT NULL,
  `is_qurban` varchar(5) NOT NULL,
  `is_haji` varchar(5) NOT NULL,
  `is_umrah` varchar(5) NOT NULL,
  `kd_rt` varchar(5) NOT NULL,
  `no_ktp` varchar(15) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sementara_datainduk`
--

INSERT INTO `sementara_datainduk` (`kd_induk`, `no_kk`, `nama`, `nm_panggilan`, `status_hub_kk`, `tmp_lahir`, `tgl_lahir`, `j_kelamin`, `kd_agama`, `kd_pendidikan`, `kd_pekerjaan`, `status_kawin`, `status_mukim`, `keterangan_mukim`, `kd_level_ekonomi`, `gol_darah`, `is_latin`, `is_hijaiyah`, `is_iqra`, `is_quran`, `is_5waktu`, `is_jamaah`, `is_zakat_fitrah`, `is_zakat_mal`, `is_qurban`, `is_haji`, `is_umrah`, `kd_rt`, `no_ktp`, `status`) VALUES
(11, '3404070502056649', 'Kismanto', 'Kismanto', 'Kepala Keluarga', 'Default', '1959-11-20', 'Laki-laki', 1, 6, 3, 'Kawin', 'Mukim', 'Mukim', 1, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '001', 'default1', 'Aktif'),
(12, '3404070502056649', 'Nurharini', 'Nurharini', 'Istri', 'Default', '1963-10-22', 'Perempuan', 1, 5, 6, 'Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '001', 'dedault2', 'Aktif'),
(13, '3404070502056649', 'Roy Hermanto', 'Roy', 'Anak', 'Default', '1991-09-05', 'Laki-laki', 1, 5, 8, 'Belum Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '001', 'default3', 'Aktif'),
(14, '3310040702042583', 'FX Suripto', 'Suripto', 'Kepala Keluarga', 'Default', '1958-07-01', 'Laki-laki', 3, 8, 15, 'Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '002', 'default4', 'Aktif'),
(15, '3310040702042583', 'N. Kusbandiyah', 'N. Kusbandiyah', 'Istri', 'Default', '1961-10-01', 'Perempuan', 3, 8, 6, 'Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '002', 'default5', 'Aktif'),
(16, '3310040702042583', 'A. Sri Lestari Murtiningsih', 'Sri', 'Anak', 'Default', '1983-04-26', 'Perempuan', 3, 2, 8, 'Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '002', 'default6', 'Aktif'),
(17, '3310040702042583', 'Bernadeta Septin Purnama Wati', 'Septin', 'Anak', 'Default', '1985-09-30', 'Perempuan', 3, 1, 8, 'Belum Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '002', 'default7', 'Aktif'),
(18, '3310040702042583', 'Sofyan Wahyudi Budi Santoso', 'Sofyan', 'Anak', 'Default', '1994-02-04', 'Laki-laki', 3, 1, 9, 'Belum Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '002', 'default8', 'Aktif'),
(19, '3404070802051475', 'Abda Yanuar Akhsan, S.T.', 'Abda', 'Kepala Keluarga', 'Default', '1983-01-09', 'Laki-laki', 1, 4, 8, 'Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '013', 'default8339', 'Aktif'),
(20, '3404070802051475', 'Berlian Dwi Medayati, S.Farm., Apt.', 'Dwi ', 'Istri', 'Default', '1987-05-02', 'Perempuan', 1, 4, 8, 'Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '013', 'default2351', 'Aktif'),
(21, '3404072106170003', 'Mustakim', 'Mustakim', 'Kepala Keluarga', 'Default', '1967-03-03', 'Laki-laki', 1, 5, 8, 'Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '013', 'default823', 'Aktif'),
(22, '3404072106170003', 'Siti Hartati', 'Siti', 'Istri', 'Default', '1968-01-10', 'Perempuan', 1, 5, 6, 'Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '013', 'default384', 'Aktif'),
(23, '3404072106170003', 'Titian Wibisono ', 'Tian', 'Anak', 'Default', '1997-11-17', 'Laki-laki', 1, 2, 9, 'Belum Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '013', 'default387', 'Aktif'),
(24, '3404072910130016', 'Tri Paramita Susanto', 'Tri', 'Kepala Keluarga', 'Default', '1950-12-08', 'Laki-laki', 2, 4, 8, 'Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '013', 'default124', 'Aktif'),
(25, '3404072910130016', 'Niken Widawati ', 'Niken', 'Istri', 'Default', '1941-10-01', 'Perempuan', 2, 5, 8, 'Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '013', 'default546', 'Aktif'),
(26, '3404072910130016', 'Teja Prabawa', 'Teja ', 'Anak', 'Default', '1986-12-08', 'Laki-laki', 2, 5, 9, 'Belum Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '013', 'default987', 'Aktif'),
(27, '3404072910130016', 'Sri Esni', 'Sri', 'Orang Tua', 'Default', '1924-06-20', 'Perempuan', 1, 6, 10, 'Cerai Mati', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '013', 'default235', 'Aktif'),
(28, '3404100102100006', 'Rian Hermawan Pandu Prasetyo', 'Rian', 'Kepala Keluarga', 'Default', '1989-10-27', 'Laki-laki', 1, 6, 8, 'Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '001', 'default34', 'Aktif'),
(29, '3404100102100006', 'Nuryani', 'Nuryani', 'Istri', 'Default', '1985-07-12', 'Perempuan', 1, 5, 6, 'Belum Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '001', 'default767', 'Aktif'),
(30, '3404100102100006', 'Dewi Resti Pratistasari ', 'Dewi ', 'Anak', 'Default', '2010-01-15', 'Perempuan', 1, 3, 9, 'Belum Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '001', 'default325', 'Aktif'),
(31, '3404100102100006', 'Putra Noval Prasetyo', 'Putra', 'Anak', 'Default', '2013-11-18', 'Laki-laki', 1, 9, 2, 'Belum Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '001', 'default345', 'Aktif'),
(32, '3404100102100006', 'Salsabila Ayu Hanifa ', 'Salsa', 'Anak', 'Default', '2016-01-31', 'Perempuan', 1, 9, 2, 'Belum Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '001', 'default624', ''),
(33, '3404100103060010', 'Gunawan Bakti Auriyanto', 'Gunawan', 'Kepala Keluarga', 'Default', '1972-07-28', 'Laki-laki', 1, 5, 8, 'Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '013', 'default98', 'Aktif'),
(34, '3404100103060010', 'Siti Khotimah ', 'Siti', 'Istri', 'Default ', '1973-08-13', 'Perempuan', 1, 5, 6, 'Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '013', 'default87', 'Aktif'),
(35, '3404100103060010', 'Galang Pradipta', 'Galang', 'Anak ', 'Default', '2002-05-12', 'Laki-laki', 1, 9, 2, 'Belum Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '013', 'default899', 'Aktif'),
(37, '3404100103060010', 'Alifia Aurelia Meidina', 'Alifia', 'Anak', 'Default', '2003-05-29', 'Perempuan', 1, 9, 2, 'Belum Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '013', 'default989', 'Aktif'),
(38, '3404100103120007', 'Erik Wahyudi', 'Erik', 'Kepala Keluarga', 'Default ', '1966-09-07', 'Laki-laki', 1, 3, 11, 'Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '001', 'default456', 'Aktif'),
(40, '3404100103120007', 'Idah', 'Idah', 'Istri', 'Default', '1972-06-04', 'Perempuan', 1, 3, 6, 'Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '001', 'default576', 'Aktif'),
(41, '3404100103120007', 'Kholidi', 'Kholidi', 'Anak', 'Default', '1997-02-10', 'Laki-laki', 1, 5, 17, 'Belum Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '001', 'default399', 'Aktif'),
(42, '3404100107100010', 'Juwari', 'Juwari', 'Kepala Keluarga', 'Default', '1964-01-31', 'Laki-laki', 1, 5, 15, 'Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '002', 'default76', 'Aktif'),
(43, '3404100107100010', 'Sri Kartini', 'Sri', 'Istri', 'Default', '1967-02-09', 'Perempuan', 1, 5, 6, 'Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '002', 'default861', 'Aktif'),
(44, '3404100107100010', 'Dina Dwi Permata Sari', 'Dina', 'Anak', 'Default', '1999-02-02', 'Perempuan', 1, 5, 9, 'Belum Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '002', 'default054', 'Aktif'),
(45, '3404100107190005', 'Nuryani', 'Nuryani', 'Kepala Keluarga', 'Default', '1988-07-12', 'Perempuan', 1, 8, 6, 'Cerai Hidup', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '001', 'default099', 'Aktif'),
(46, '3404100107190005', 'Muhammad Rizky Handika', 'Rizky', 'Anak', 'Default', '2009-01-20', 'Laki-laki', 1, 3, 2, 'Belum Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '001', 'default411', 'Aktif'),
(47, '3404100107190005', 'Ardelia Ratna Deviyanti', 'Ardelia', 'Anak ', 'Default', '2011-04-14', 'Perempuan', 1, 3, 2, 'Belum Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '001', 'default655', 'Aktif'),
(48, '3404100109140006', 'Mimbar Ambita Wisnu ', 'Mimbar', 'Kepala Keluarga', 'Default', '1975-12-12', 'Laki-laki', 1, 4, 8, 'Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '001', 'default112', 'Aktif'),
(49, '3404100109140006', 'Rita Yeni Utami', 'Rita', 'Istri', 'Default', '1976-01-12', 'Perempuan', 1, 2, 6, 'Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '001', 'default113', 'Aktif'),
(50, '3404100109140006', 'Astrid Apriliana', 'Astrid ', 'Anak', 'Default', '1999-04-22', 'Perempuan', 1, 5, 9, 'Belum Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '001', 'default666', 'Aktif'),
(51, '3404100109140006', 'Dimas Dhanyia Pranadhi', 'Dimas', 'Anak', 'Default', '2013-02-21', 'Laki-laki', 1, 9, 2, 'Belum Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '001', 'default890', 'Aktif'),
(52, '3404100110070006', 'Joko Haryono', 'Joko', 'Kepala Keluarga', 'Default', '1978-08-11', 'Laki-laki', 1, 5, 11, 'Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '001', 'default777', 'Aktif'),
(53, '3404100110070006', 'Khotimah', 'Khotimah', 'Istri', 'Default', '1982-09-01', 'Perempuan', 1, 5, 11, 'Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '001', 'default555', 'Aktif'),
(54, '3404100110070006', 'Rio Johan Santoto', 'Rio', 'Anak ', 'Default', '2004-03-04', 'Laki-laki', 1, 6, 9, 'Belum Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '001', 'default768', 'Aktif'),
(55, '3404100110070006', 'Kurnia Julia Wati', 'Kurnia ', 'Anak', 'Default', '2010-07-12', 'Perempuan', 1, 3, 9, 'Belum Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '001', 'default986', 'Aktif'),
(56, '3404100110070006', 'Tri Yoga Sari', 'Tri', 'Anak', 'Default', '2014-10-14', 'Perempuan', 1, 9, 2, 'Belum Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '001', 'default155', 'Aktif'),
(57, '3404100111070002', 'Sriyana', 'Sriyana', 'Kepala Keluarga', 'Default', '1970-04-23', 'Laki-laki', 1, 5, 8, 'Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '001', 'default665', 'Aktif'),
(61, '3404100111070002', 'Asih Suprapti', 'Asih', 'Istri', 'Default', '1973-05-26', 'Perempuan', 1, 5, 8, 'Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '001', 'default3457', 'Aktif'),
(62, '3404100111070002', 'Jesicha Febriana Asri', 'Jesicha', 'Anak', 'Default', '2001-02-07', 'Perempuan', 1, 5, 9, 'Belum Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '001', 'default1492', 'Aktif'),
(63, '3404100111070002', 'Aprizal Reyhan Sava', 'Aprizal', 'Anak', 'Default', '2003-09-03', 'Laki-laki', 1, 6, 9, 'Belum Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '001', 'default9786', 'Aktif'),
(64, '3404100302070009', 'Agus Subeno', 'Agus', 'Kepala Keluarga', 'Default', '1965-12-29', 'Laki-laki', 1, 5, 13, 'Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '002', 'default8124', 'Aktif'),
(65, '3404100302070009', 'Muzakiyah', 'Muzakiyah', 'Istri', 'Default', '1968-04-10', 'Perempuan', 1, 5, 12, 'Belum Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '002', 'default7134', 'Aktif'),
(66, '3404100302070009', 'Dita Raga Trilatama', 'Dita', 'Anak', 'Default', '1991-08-11', 'Laki-laki', 1, 5, 9, 'Belum Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '002', 'default8723', 'Aktif'),
(67, '3404100302070009', 'Diki Brahmantara ', 'Diki', 'Anak', 'Default', '1992-08-17', 'Laki-laki', 1, 5, 9, 'Belum Kawin', 'Mukim', 'Mukiim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '002', 'default1249', 'Aktif'),
(68, '3404100302070009', 'Cakra Ageng Pamungkas ', 'Cakra ', 'Anak', 'Default', '2008-04-08', 'Laki-laki', 1, 9, 2, 'Belum Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '002', 'default2350', 'Aktif'),
(69, '3404100308100001', 'Felix Yuni Feriyanto', 'Felix', 'Kepala Keluarga', 'Default', '1974-06-23', 'Laki-laki', 3, 5, 17, 'Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '013', 'default9325', 'Aktif'),
(70, '3404100308100001', 'Siti Qosidah', 'Siti', 'Istri', 'Default', '1984-11-22', 'Perempuan', 1, 6, 6, 'Kawin', 'Mukim', 'Mukiim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '013', 'default3508', 'Aktif'),
(71, '3404100308100001', 'Anggun Frida Avitasari', 'Anggun', 'Anak', 'Default', '2009-05-05', 'Perempuan', 1, 3, 2, 'Belum Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '013', 'default2581', 'Aktif'),
(72, '3404100311100004', 'Eko Cahyono', 'Eko', 'Kepala Keluarga', 'Default', '1982-10-20', 'Laki-laki', 1, 5, 17, 'Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '002', 'default2735', 'Aktif'),
(73, '3404100311100004', 'Septi Indarini', 'Septi', 'Istri', 'Default', '1983-09-06', 'Perempuan', 1, 5, 6, 'Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '002', 'default9821', 'Aktif'),
(74, '3404100311100004', 'Muhammad Rizky Pradithya', 'Rizky', 'Anak', 'Default', '2005-11-24', 'Laki-laki', 1, 6, 9, 'Belum Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '002', 'default1358', 'Aktif'),
(75, '3404100311100004', 'Anindhyta Putri Khairunnisa', 'Anindhyta', 'Anak', 'Default', '2011-01-17', 'Perempuan', 1, 8, 9, 'Belum Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '002', 'default0264', 'Aktif'),
(76, '3404100402190009', 'Catur Dis Nugroho', 'Catur ', 'Kepala Keluarga', 'Default', '1993-12-03', 'Laki-laki', 1, 5, 8, 'Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '002', 'default1357', 'Aktif'),
(77, '3404100402190009', 'Esti Wulandari', 'Esti', 'Istri', 'Default', '1992-09-04', 'Perempuan', 1, 5, 8, 'Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '002', 'default4680', 'Aktif'),
(78, '3404100405070004', 'Suratman Wisnu Rendrawan', 'Suratman', 'Kepala Keluarga', 'Default', '1965-09-25', 'Laki-laki', 2, 5, 3, 'Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '001', 'default8721', 'Aktif'),
(79, '3404100405070004', 'Retno Rayung Sari', 'Retno', 'Istri', 'Default', '1967-04-27', 'Perempuan', 2, 5, 6, 'Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '013', 'default2531', 'Aktif'),
(80, '3404100405070004', 'Pandhu Suryo Purwono', 'Pandhu', 'Anak', 'Default', '1990-04-23', 'Laki-laki', 2, 5, 8, 'Belum Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '013', 'default0837', 'Aktif'),
(81, '3404100405070004', 'Krishna Ayu Govinda', 'Krishna', 'Anak', 'Default', '1996-08-21', 'Perempuan', 2, 5, 8, 'Belum Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '013', 'default8761', 'Aktif'),
(82, '3404100405070004', 'Ganjar Wiku Ananta', 'Ganjar', 'Anak', 'Default', '2005-03-01', 'Laki-laki', 2, 3, 9, 'Belum Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '013', 'default9873', 'Aktif'),
(83, '3404100409080002', 'Teguh Haryono', 'Teguh', 'Kepala Keluarga', 'Default', '1981-03-14', 'Laki-laki', 1, 5, 8, 'Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '001', 'defaut3487', ''),
(84, '3404100409080002', 'Inawati', 'Inawati', 'Istri', 'Default', '1977-08-27', 'Perempuan', 1, 5, 8, 'Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '001', 'deafault1241', 'Aktif'),
(85, '3404100409080002', 'Ridwan Nur Ahmad', 'Ridwan', 'Anak', 'Default', '2006-09-21', 'Laki-laki', 1, 6, 9, 'Belum Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '001', 'default4301', 'Aktif'),
(86, '3404100409080002', 'Rizqi Ahmad Febrianugraha', 'Rizqi', 'Anak', 'Default', '2011-02-06', 'Laki-laki', 1, 3, 9, 'Belum Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '001', 'defautl2457', 'Aktif'),
(87, '3404100502090007', 'Sarno Sungatno', 'Sarno', 'Kepala Keluarga', 'Default', '1976-04-12', 'Laki-laki', 1, 6, 3, 'Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '001', 'default9874', 'Aktif'),
(88, '3404100502090007', 'Mardiyati', 'Mardiyati', 'Istri', 'Default', '1978-08-10', 'Perempuan', 1, 6, 6, 'Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '001', 'default3469', 'Aktif'),
(89, '3404100502090007', 'Refika Dewi Carneli', 'Refika ', 'Anak', 'Default', '2003-01-17', 'Perempuan', 1, 5, 9, 'Belum Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '001', 'default3489', 'Aktif'),
(90, '3404100502090007', 'Diana Dewi Lestari', 'Diana ', 'Anak', 'Default', '2012-09-19', 'Perempuan', 1, 3, 9, 'Belum Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '001', 'default9093', 'Aktif'),
(91, '3404100504110004', 'Marsalam', 'Marsalam', 'Kepala Keluarga', 'Default', '1978-02-01', 'Laki-laki', 1, 5, 8, 'Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '013', 'default8732', 'Aktif'),
(92, '3404100504110004', 'Esti Budi Utami', 'Esti', 'Istri', 'Default', '1980-02-16', 'Perempuan', 1, 5, 6, 'Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '013', 'default9834', 'Aktif'),
(93, '3404100504110004', 'Almariska Alesia Putri', 'Almariska', 'Anak', 'Default', '2002-12-14', 'Perempuan', 1, 3, 9, 'Belum Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '013', 'default9237', 'Aktif'),
(94, '3404100504110004', 'Muhammad Akbar Rizky Bayu Saputra', 'Akbar', 'Anak', 'Default', '2011-03-22', 'Laki-laki', 1, 8, 9, 'Belum Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '013', 'default0343', 'Aktif'),
(99, '3404100603140011', 'Iwan Setiyoko ', 'Iwan', 'Kepala Keluarga', 'Default', '1984-11-22', 'Laki-laki', 1, 5, 3, 'Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '001', 'default9342', 'Aktif'),
(100, '3404100603140011', 'Sutini', 'Sutini', 'Istri', 'Default', '1983-07-15', 'Perempuan', 1, 5, 6, 'Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '001', 'default9823', 'Aktif'),
(101, '3404100603140011', 'Lintang Ayu Pramudhyasari', 'Lintang', 'Anak', 'Default', '2011-03-01', 'Perempuan', 1, 9, 2, 'Belum Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '001', 'default2358', 'Aktif'),
(102, '3404100603140011', 'Lavanya Ataya Qiyamma', 'Lavanya', 'Anak', 'Default', '2019-03-21', 'Perempuan', 1, 9, 2, 'Belum Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '001', 'default0923', 'Aktif'),
(108, '3404100604150007', 'Aris Mulya Budi Wirawan', 'Aris ', 'Kepala Keluarga', 'Default', '1970-06-23', 'Laki-laki', 1, 5, 8, 'Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '013', 'default9879', 'Aktif'),
(109, '3404100604150007', 'Ivony Yudith', 'Ivony', 'Istri', 'Default', '1972-05-10', 'Perempuan', 1, 5, 14, 'Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '013', 'default9870', 'Aktif'),
(110, '3404100604150007', 'Latifah Arlita Wirawan', 'Latifah', 'Anak', 'Default', '2004-06-04', 'Laki-laki', 1, 3, 9, 'Belum Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '013', 'default9824', 'Aktif'),
(111, '3404100604150007', 'Syaharanney Yudith Wirawan', 'Syaharanney', 'Anak', 'Default', '2005-06-11', 'Perempuan', 1, 3, 9, 'Belum Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '013', 'default6742', 'Aktif'),
(112, '3404100604150007', 'Yusuf Dayasyam Wirawan', 'Yusuf', 'Anak', 'Default', '2006-06-14', 'Laki-laki', 1, 3, 9, 'Belum Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '013', 'default9855', 'Aktif'),
(116, '3404100606170012', 'Arik Prasetyo', 'Arik', 'Kepala Keluarga', 'Default', '1988-06-12', 'Laki-laki', 1, 7, 11, 'Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '001', 'default7864', 'Aktif'),
(117, '3404100606170012', 'Dewi Ari Wijayanti', 'Dewi', 'Istri', 'Default', '1988-10-18', 'Perempuan', 1, 5, 6, 'Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '001', 'default2732', 'Aktif'),
(118, '3404100606170012', 'Karlesha Amabel Putri Prasetyo', 'Karlesha', 'Anak', 'Default', '2017-11-19', 'Perempuan', 1, 9, 2, 'Belum Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '001', 'default9398', 'Aktif'),
(129, '3404100610080006', 'Daryanto', 'Daryanto', 'Kepala Keluarga', 'Default', '1963-07-16', 'Laki-laki', 1, 5, 3, 'Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '001', 'default8348', 'Aktif'),
(130, '3404100610080006', 'Supartini', 'Supartini', 'Istri', 'Default', '1971-04-06', 'Perempuan', 1, 5, 6, 'Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '001', 'default8239', 'Aktif'),
(131, '3404100610080006', 'Guntur Sarana Putra', 'Guntur ', 'Anak', 'Default', '1992-10-31', 'Laki-laki', 1, 5, 8, 'Belum Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '001', 'default2322', 'Aktif'),
(132, '3404100610080006', 'Janin Indra Putra', 'Janin', 'Anak', 'Default', '1995-08-08', 'Laki-laki', 1, 5, 8, 'Belum Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '001', 'default0340', 'Aktif'),
(133, '3404100610080006', 'Refas Aryanto', 'Refas ', 'Anak', 'Default', '1999-08-27', 'Laki-laki', 1, 5, 2, 'Belum Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '001', 'default9233', 'Aktif'),
(134, '3404100703070004', 'E. Sigit Wisnu Joedono', 'Sigit', 'Kepala Keluarga', 'Default', '1974-04-04', 'Laki-laki', 3, 4, 8, 'Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '002', 'default9845', 'Aktif'),
(135, '3404100703070004', 'Antika Maharani', 'Antika', 'Istri', 'Default', '1975-06-01', 'Perempuan', 3, 4, 6, 'Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '002', 'default3463', 'Aktif'),
(136, '3404100703070004', 'C. Andika Wisan Dewangga', 'Andika', 'Anak', 'Default', '2001-10-19', 'Laki-laki', 3, 5, 9, 'Belum Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '002', 'default909', 'Aktif'),
(137, '3404100703070004', 'Bonaventura Reynhard Maharsi', 'Reynhard', 'Anak', 'Default', '2003-11-15', 'Laki-laki', 3, 6, 9, 'Belum Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '002', 'defaultq348', 'Aktif'),
(138, '3404100710170002', 'Andi Prasetyo', 'Andi', 'Kepala Keluarga', 'Default', '1979-05-10', 'Laki-laki', 1, 5, 11, 'Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '013', 'default7239', 'Aktif'),
(139, '3404100710170002', 'Happy Kistya Nuryatini', 'Happy', 'Istri', 'Default', '1981-04-19', 'Perempuan', 1, 5, 6, 'Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '013', 'default2302', 'Aktif'),
(140, '3404100710170002', 'Daffa Anas Mahardia', 'Daffa', 'Anak', 'Default', '2005-07-09', 'Laki-laki', 1, 3, 9, 'Belum Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '013', 'default9829', 'Aktif'),
(141, '3404100710170002', 'Galvin Putra Ramadha', 'Galvin', 'Anak', 'Default', '2009-09-14', 'Laki-laki', 1, 3, 9, 'Belum Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '013', 'default7877', 'Aktif'),
(142, '3404100710170002', 'Hari Kinasih', 'Hari', 'Orang Tua', 'Default', '1960-07-21', 'Perempuan', 1, 8, 6, 'Cerai Mati', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '013', 'default0998', 'Aktif'),
(143, '3404100710170002', 'Abdul Ngalim', 'Abdul', 'Kepala Keluarga', 'Default', '1947-04-03', 'Laki-laki', 1, 6, 10, 'Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '013', 'default23523', 'Aktif'),
(144, '3404100710170002', 'Tukinah', 'Tukinah', 'Istri', 'Default', '1953-04-03', 'Perempuan', 1, 6, 6, 'Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '013', 'default34569', 'Aktif'),
(145, '3404100802110005', 'Widodo', 'Widodo', 'Kepala Keluarga', 'Default', '1982-03-20', 'Laki-laki', 1, 4, 8, 'Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '002', 'default3495', 'Aktif'),
(146, '3404100802110005', 'Sri Ngastuti Hartasih', 'Sri', 'Istri', 'Default', '1984-10-28', 'Perempuan', 1, 4, 8, 'Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '002', 'deafault23', 'Aktif'),
(147, '3404100802110005', 'Dimas Putra Wicaksono', 'Dimas', 'Anak', 'Default', '2009-03-17', 'Laki-laki', 1, 9, 2, 'Belum Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '002', 'default0023', 'Aktif'),
(148, '3404100802110005', 'Nadia Felisha Putri', 'Nadia', 'Anak', 'Default', '2011-01-14', 'Perempuan', 1, 9, 2, 'Belum Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '002', 'default23045', 'Aktif'),
(149, '3404101001120004', 'Untung Prayitno', 'Untung', 'Kepala Keluarga', 'Default', '1981-05-09', 'Laki-laki', 1, 8, 3, 'Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '001', 'default92392', 'Aktif'),
(150, '3404101001120004', 'Maryati', 'Maryati', 'Istri', 'Default', '1982-05-13', 'Perempuan', 1, 8, 3, 'Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '001', 'default23945', 'Aktif'),
(151, '3404101001120004', 'Muhammad Nur Wahid', 'Nur', 'Anak', 'Default', '2006-10-18', 'Laki-laki', 1, 3, 9, 'Belum Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '001', 'default2935', 'Aktif'),
(152, '3404101001120004', 'Muhammad Hafidz Maulana', 'Hafidz', 'Anak', 'Default', '2015-02-01', 'Laki-laki', 1, 9, 2, 'Belum Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '001', 'default02034', 'Aktif'),
(153, '3404101002050364', 'Sukardi', 'Sukardi', 'Kepala Keluarga', 'Default', '1951-12-31', 'Laki-laki', 1, 3, 4, 'Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '001', 'default29034', 'Aktif'),
(154, '3404101002050364', 'Suminah', 'Suminah', 'Istri', 'Default', '1951-12-31', 'Perempuan', 1, 9, 4, 'Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '001', 'default12345', 'Aktif'),
(155, '3404101002050364', 'Andri Wahyudi', 'Andri', 'Cucu', 'Default', '1999-11-08', 'Laki-laki', 1, 5, 8, 'Belum Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '001', 'default2359', 'Aktif'),
(156, '3404101002050366', 'Pujo Darmanto', 'Pujo', 'Kepala Keluarga', 'Default', '1956-11-20', 'Laki-laki', 1, 8, 3, 'Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '001', 'default29035', 'Aktif'),
(157, '3404101002050366', 'Mujiyati', 'Mujiyati', 'Istri', 'Default', '1961-04-07', 'Perempuan', 1, 8, 3, 'Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '001', 'default9231', 'Aktif'),
(158, '3404101002050366', 'Heriyanto', 'Heriyanto', 'Anak', 'Default', '1986-05-29', 'Laki-laki', 1, 8, 3, 'Belum Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '001', 'default98349', 'Aktif'),
(159, '3404101002050370', 'Harjono', 'Harjono', 'Kepala Keluarga', 'Default', '1970-12-13', 'Laki-laki', 1, 5, 8, 'Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '002', 'default88221', 'Aktif'),
(160, '3404101002050370', 'Keri Rahayu', 'Keri', 'Istri', 'Default', '1975-04-14', 'Perempuan', 1, 5, 6, 'Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '002', 'default9921', 'Aktif'),
(161, '3404101002050370', 'Rini Hartanto', 'Rini', 'Anak', 'Default', '1996-09-10', 'Perempuan', 1, 5, 8, 'Belum Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '002', 'default293549', 'AKTIF'),
(162, '3404101002050371', 'Darjo Wiyono', 'Darjo', 'Kepala Keluarga', 'Default', '1940-12-11', 'Laki-laki', 1, 3, 4, 'Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '002', 'default92345', 'Aktif'),
(163, '3404101002050371', 'Mudjirah', 'Mudjirah', 'Istri', 'Default', '1940-10-05', 'Perempuan', 1, 3, 6, 'Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '002', 'default93495', 'Aktif'),
(164, '3404101002050373', 'Tukiran S. B.', 'Tukiran', 'Kepala Keluarga', 'Default', '1941-06-05', 'Laki-laki', 1, 6, 10, 'Cerai Mati', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '002', 'default23023', 'Aktif'),
(165, '3404101002050373', 'Heru Samudra', 'Heru', 'Anak', 'Default', '1973-01-16', 'Laki-laki', 1, 5, 3, 'Belum Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '002', 'default1299', 'Aktif'),
(166, '3404101002050374', 'Sakri', 'Sakri', 'Kepala Keluarga', 'Default', '1971-05-10', 'Laki-laki', 1, 5, 4, 'Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '002', 'default9235', 'Aktif'),
(167, '3404101002050374', 'Ani Handayani', 'Ani', 'Istri', 'Default', '1970-08-18', 'Perempuan', 1, 8, 6, 'Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '002', 'default98342', 'Aktif'),
(168, '3404101002050374', 'Nuri Anjarwati', 'Nuri', 'Anak', 'Default', '2001-10-29', 'Perempuan', 1, 5, 9, 'Belum Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '002', 'default99349', 'Aktig]'),
(172, '3404101002050375', 'Sutimin', 'Sutimin', 'Kepala Keluarga', 'Default', '1961-12-31', 'Laki-laki', 1, 8, 4, 'Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '002', 'default99399', 'Aktif'),
(173, '3404101002050375', 'Juwar', 'Juwar', 'Istri', 'Default', '1960-05-06', 'Perempuan', 1, 8, 4, 'Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '002', 'default93490', 'Aktif'),
(174, '3404101002050375', 'Tri Rahayu', 'Tri', 'Anak', 'Default', '1993-12-23', 'Perempuan', 1, 8, 11, 'Cerai Hidup', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '002', 'default38458', 'Aktif'),
(175, '3404101002050376', 'Jemakir', 'Jemakir', 'Kepala Keluarga', 'Default', '1946-08-04', 'Laki-laki', 1, 8, 10, 'Cerai Mati', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '002', 'default99934', 'Aktif'),
(176, '3404101002050378', 'Suratin', 'Suratin', 'Kepala Keluarga', 'Default', '1971-03-10', 'Laki-laki', 1, 5, 3, 'Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '001', 'default99342', 'Aktif'),
(177, '3404101002050378', 'Sugiyatmi', 'Sugiyatmi', 'Istri', 'Default', '1975-01-23', 'Perempuan', 1, 6, 3, 'Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '001', 'default99880', 'Aktif'),
(178, '3404101002050378', 'Ika Indaryati', 'Ika ', 'Anak', 'default', '1995-04-18', 'Perempuan', 1, 5, 8, 'Belum Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '001', 'default77723', 'Aktif'),
(179, '3404101002050378', 'Riska Saraswati', 'Riska', 'Anak', 'Default', '2001-09-17', 'Perempuan', 1, 5, 9, 'Belum Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '001', 'default88345', 'Aktif'),
(180, '3404101002050378', 'Livika Linda Fara', 'Livika', 'Anak', 'Default', '2010-08-05', 'Perempuan', 1, 3, 9, 'Belum Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '001', 'default66666', 'Aktif'),
(181, '3404101002050378', 'Azka Al Gifari', 'Azka', 'Anak', 'Default', '2014-10-06', 'Perempuan', 1, 9, 2, 'Belum Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '001', 'default1111', 'Aktif'),
(182, '3404101002050379', 'Lasinem', 'Lasinem', 'Kepala Keluarga', 'Default', '1940-01-19', 'Perempuan', 1, 9, 4, 'Cerai Mati', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '001', 'default2222', 'Aktif'),
(183, '3404101002050380', 'Suroto', 'Suroto', 'Kepala Keluarga', 'Default', '1971-03-10', 'Laki-laki', 1, 5, 4, 'Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '001', 'default333', 'Aktif'),
(184, '3404101002050380', 'Diah Indarwati', 'Diah', 'Istri', 'Default', '1975-10-14', 'Perempuan', 1, 5, 6, 'Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '001', 'default8299', 'AKTIF'),
(185, '3404101002050380', 'Dwi Maulana Junarto', 'Dwi', 'Anak', 'Default', '2000-06-18', 'Laki-laki', 1, 6, 9, 'Belum Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '001', 'default93452', 'Aktif'),
(186, '3404101002050380', 'Novita Nur Wahyuni', 'Novita', 'Anak', 'Default', '2003-09-29', 'Perempuan', 1, 6, 9, 'Belum Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '001', 'default82358', 'Aktif'),
(187, '3404101002050380', 'Andrea Dita Reviana', 'Andrea', 'Anak', 'Default', '2010-06-09', 'Perempuan', 1, 6, 9, 'Belum Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '001', 'default93949', 'Aktif'),
(188, '3404101002050380', 'Andara Dita Letizia', 'Andara', 'Anak', 'Default', '2015-02-03', 'Perempuan', 1, 9, 2, 'Belum Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '001', 'default8737', 'Aktif'),
(189, '3404101002050381', 'Asipin', 'Asipin', 'Kepala Keluarga', 'Default', '1964-03-08', 'Laki-laki', 1, 8, 3, 'Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '001', 'default88989', 'Aktif'),
(190, '3404101002050381', 'Suratmi', 'Suratmi', 'Istri', 'Default', '1966-03-08', 'Perempuan', 1, 8, 3, 'Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '001', 'default92829', 'Aktif'),
(191, '3404101002050381', 'Andhi Kristiyanto', 'Andhi', 'Anak', 'Default', '1996-03-19', 'Laki-laki', 1, 5, 9, 'Belum Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '001', 'Default278358', 'Aktif'),
(192, '3404101002050382', 'Jikan', 'Jikan', 'Kepala Keluarga', 'Default', '1952-08-01', 'Laki-laki', 1, 8, 3, 'Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '001', 'default6623', 'Aktif'),
(193, '3404101002050382', 'Suyati', 'Suyati', 'Istri', 'Default', '1955-07-01', 'Perempuan', 1, 8, 6, 'Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '001', 'default89345', 'Aktif'),
(195, '3404101002050383', 'Rubiyem', 'Rubiyem', 'Kepala Keluarga', 'Default', '1940-11-28', 'Laki-laki', 1, 3, 6, 'Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '001', 'default834895', 'Aktif'),
(196, '3404101002050384', 'Haryanto', 'Haryanto', 'Kepala Keluarga', 'Default', '1969-02-05', 'Laki-laki', 1, 5, 8, 'Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '001', 'default8823', 'Aktif'),
(197, '3404101002050384', 'Siti Handayani', 'Siti', 'Istri', 'Ddefault', '1970-10-14', 'Perempuan', 1, 6, 6, 'Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '', '-', '-', '-', '001', 'default78723', 'Aktif'),
(198, '3404101002050384', 'Langgeng Nur Hartanto', 'Langgeng ', 'Anak', 'Default', '1996-08-26', 'Laki-laki', 1, 5, 8, 'Belum Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '001', 'default88388', 'Aktif'),
(199, '3404101002050384', 'Devi Amalia', 'Devi', 'Anak', 'Default', '2008-07-17', 'Perempuan', 1, 3, 9, 'Belum Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '001', 'default23412', 'Aktif'),
(207, '3404101002050385', 'Topo Haryono', 'Topo', 'Kepala Keluarga', 'Default', '1979-04-16', 'Laki-laki', 1, 5, 13, 'Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '001', 'default67374', 'Aktif'),
(208, '3404101002050385', 'Sulastri', 'Sulastri', 'Istri', 'Default', '1978-03-05', 'Perempuan', 1, 5, 6, 'Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '001', 'default8167', 'Aktif'),
(209, '3404101002050385', 'Adellina Kuncoro Wati', 'Adellina', 'Anak', 'Default', '2004-04-08', 'Perempuan', 1, 8, 9, 'Belum Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '', '-', '-', '-', '-', '-', '001', 'default7723', 'Aktif'),
(210, '3404101002050385', 'Azalia Zahratul Maula', 'Azalia', 'Anak', 'Default', '2016-07-16', 'Perempuan', 1, 9, 2, 'Belum Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '001', 'default88934', 'Aktif'),
(211, '3404101002050387', 'Supriyadi', 'Supriyadi', 'Kepala Keluarga', 'Default', '1972-08-28', 'Laki-laki', 1, 6, 3, 'Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '001', 'default8993', 'Aktif'),
(212, '3404101002050387', 'Hartini', 'Hartini', 'Istri', 'Default', '1973-12-17', 'Perempuan', 1, 6, 6, 'Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '001', 'default656256', 'Aktif'),
(213, '3404101002050387', 'Fachri Nuryadi ', 'Fachri', 'Anak', 'Default', '2009-06-20', 'Laki-laki', 1, 3, 2, 'Belum Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '001', 'default782378', 'Aktif'),
(214, '3404101002050389', 'Rami', 'Rami', 'Kepala Keluarga', 'Default', '1942-09-14', 'Perempuan', 1, 9, 4, 'Cerai Mati', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '001', 'default5523', 'Aktif'),
(215, '3404101002050392', 'Giyono', 'Giyono', 'Kepala Keluarga', 'Default', '1948-04-16', 'Laki-laki', 1, 8, 3, 'Cerai Mati', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '001', 'default98893', 'Aktif'),
(216, '3404101002050392', 'Gimin', 'Gimin', 'Anak', 'default', '1971-04-08', 'Laki-laki', 1, 8, 3, 'Belum Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '001', 'defafult889421', 'Aktif'),
(217, '3404101002050396', 'Widi Sumarto', 'Widi', 'Kepala Keluarga', 'Default', '1966-12-13', 'Laki-laki', 1, 8, 4, 'Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '002', 'default93489', 'Aktif'),
(218, '3404101002050396', 'Wartinem', 'Wartinem', 'Istri', 'Default', '1957-05-13', 'Perempuan', 1, 8, 6, 'Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '002', 'default2341', 'Aktif'),
(219, '3404101002050397', 'Sukardi', 'Sukardi', 'Kepala Keluarga', 'Default', '1964-03-14', 'Laki-laki', 1, 8, 3, 'Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '002', 'default89892', 'Aktif'),
(220, '3404101002050397', 'Ari Marta Purnama ', 'Ari', 'Anak', 'Default ', '1992-03-25', 'Laki-laki', 1, 5, 8, 'Belum Kawin', 'Tidak Mukim', 'Tidak Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '002', 'default099034', 'Aktif'),
(221, '3404101002050397', 'Ayu Febriana ', 'Ayu', 'Anak', 'Default', '1994-02-02', 'Perempuan', 1, 6, 8, 'Kawin', 'Tidak Mukim', 'Tidak Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '002', 'default77232', 'Aktif'),
(222, '3404101002050397', 'Andika BAgus Mardianto', 'Andika', 'Anak', 'Default', '2000-03-06', 'Laki-laki', 1, 5, 8, 'Belum Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '002', 'default82835', 'Aktif'),
(223, '3404101002050397', 'Anindia Diah Puspita Dewi', 'Anindia', 'Anak', 'Default', '2000-03-06', 'Perempuan', 1, 6, 8, 'Belum Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '002', 'default78348', 'Aktif'),
(224, '3404101002050400', 'Sukrismanta', 'Sukrismanta', 'Kepala Keluarga', 'Default', '1973-05-31', 'Laki-laki', 2, 5, 3, 'Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '', '-', '-', '-', '001', 'default23327', 'Aktif'),
(225, '3404101002050400', 'Sumiyana', 'Sumiyana', 'Istri', 'Default', '1979-05-17', 'Perempuan', 2, 5, 3, 'Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '001', 'default883421', 'Aktif'),
(226, '3404101002050401', 'Yadi Winoto', 'Yadi', 'Kepala Keluarga', 'Default', '1942-09-02', 'Laki-laki', 1, 3, 4, 'Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '001', 'default89332', 'Aktif'),
(227, '3404101002050401', 'Painem', 'Painem', 'Istri', 'Default', '1948-04-18', 'Perempuan', 1, 3, 4, 'Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '001', 'default55759', 'Aktif'),
(228, '3404101002050403', 'Sugiman', 'Sugiman', 'Kepala Keluarga', 'Default', '1954-10-28', 'Laki-laki', 1, 6, 4, 'Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '002', 'default23478', 'Aktif'),
(229, '3404101002050403', 'Sutini', 'Sutini', 'Istri', 'Default', '1954-10-28', 'Perempuan', 1, 6, 4, 'Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '002', 'deafult83811', 'Aktif'),
(230, '3404101002050405', 'Santoso', 'Santoso', 'Kepala Keluarga', 'Default', '1973-11-25', 'Laki-laki', 1, 8, 3, 'Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '002', 'deafult23459', 'Aktif'),
(231, '3404101002050405', 'Supatmi', 'Supatmi', 'Istri', 'Default', '1975-04-30', 'Laki-laki', 1, 6, 6, 'Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '002', 'default9394', 'Aktif'),
(232, '3404101002050405', 'Andri Krisyanto', 'Andri', 'Anak', 'Default', '1997-01-04', 'Laki-laki', 1, 5, 8, 'Belum Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '002', 'default8349', 'Aktif'),
(233, '3404101002050405', 'Riski Dwi Prasetyo', 'Riski', 'Anak', 'Default', '2009-04-08', 'Laki-laki', 1, 3, 9, 'Belum Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '002', 'default0031', 'Aktif'),
(234, '3404101002050406', 'Bonasih', 'Bonasih', 'Kepala Keluarga', 'Default', '1943-03-25', 'Perempuan', 1, 3, 4, 'Cerai Mati', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '002', 'default9929', 'Aktif'),
(235, '3404101002050407', 'Darmo Wiyoto Painem', 'Darmo', 'Kepala Keluarga', 'Default', '1947-09-07', 'Perempuan', 1, 6, 4, 'Cerai Mati', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '002', 'default73489', 'Aktif'),
(236, '3404101002050408', 'Bambang Sugiyanto', 'Bambang', 'Kepala Keluarga', 'Default', '1967-11-20', 'Laki-laki', 1, 6, 3, 'Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '002', 'default8129', 'Aktif'),
(237, '3404101002050408', 'Slamet Rahayu', 'Rahayu', 'Istri', 'Default', '1975-03-25', 'Perempuan', 1, 6, 6, 'Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '002', 'default55178', 'Aktif'),
(238, '3404101002050408', 'Danang Kusworo', 'Danang', 'Anak', 'Default', '1996-03-25', 'Laki-laki', 1, 6, 16, 'Belum Kawin', 'Tidak Mukim', 'Tidak Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '002', 'default84500', 'Aktif'),
(239, '3404101002050408', 'David Kusworo', 'David ', 'Anak', 'Default', '2002-06-01', 'Laki-laki', 1, 6, 3, 'Belum Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '002', 'default0987', 'Aktif'),
(240, '3404101002050408', 'Dimas Kusworo', 'Dimas', 'Anak', 'Default', '2011-03-11', 'Laki-laki', 1, 3, 9, 'Belum Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '002', 'default23498', 'Aktif'),
(241, '3404101002050411', 'Mukiyem', 'Mukiyem', 'Kepala Keluarga', 'Default', '1945-05-04', 'Perempuan', 2, 8, 6, 'Cerai Mati', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '001', 'default9230', 'Aktif'),
(242, '3404101002050411', 'Slamet Riyadi', 'Slamet ', 'Anak', 'Default', '1963-05-08', 'Laki-laki', 2, 6, 8, 'Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '001', 'default23582', 'Aktif'),
(243, '3404101002054528', 'Nur Hartanto', 'Nur', 'Kepala Keluarga', 'Default', '1963-12-01', 'Laki-laki', 2, 4, 8, 'Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '013', 'deafult2238', 'Akti'),
(244, '3404101002054528', 'Dewi Utami Nugraheni', 'Dewi', 'Istri', 'Default', '1972-04-12', 'Perempuan', 2, 4, 17, 'Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '013', 'default029', 'Aktif'),
(245, '3404101002054528', 'Cherry Diva Nathania', 'Cherry', 'Anak', 'Default', '1997-11-23', 'Perempuan', 2, 5, 9, 'Belum Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '013', 'default78239', 'Aktif'),
(246, '3404101002054528', 'Mosse Ega Nathanael', 'Mosse ', 'Anak', 'Default', '2001-06-23', 'Laki-laki', 2, 8, 9, 'Belum Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '013', 'default127822', 'Aktif'),
(247, '3404101002056546', 'Sriyadi', 'Sriyadi', 'Kepala Keluarga', 'Default', '1967-02-07', 'Laki-laki', 1, 6, 15, 'Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '013', 'dearfautl9239', 'Aktif'),
(248, '3404101002056546', 'Sutinem', 'Sutinem', 'Istri', 'Default', '1971-11-09', 'Perempuan', 1, 8, 6, 'Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '013', 'defaulta7238', 'Aktif'),
(249, '3404101002056546', 'Eva Marlina', 'Eva', 'Anak', 'Default', '1993-07-17', 'Perempuan', 1, 6, 9, 'Belum Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '013', 'defaualt9239', 'Aktif'),
(250, '3404101002056546', 'Didit Bangun Septiadi', 'Didit', 'Anak', 'Default', '1996-09-30', 'Laki-laki', 1, 8, 9, 'Belum Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '013', 'default2390', 'Aktif'),
(251, '3404101002056546', 'Alvin Bangun Nugroho', 'Alvin', 'Anak', 'Default', '2006-07-18', 'Laki-laki', 1, 9, 2, 'Belum Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '013', 'dedault82385', 'Aktif'),
(252, '3404101002056683', 'Rajiman', 'Rajiman', 'Kepala Keluarga', 'Default', '1966-04-02', 'Laki-laki', 1, 9, 3, 'Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '002', 'default121212', 'Aktif'),
(253, '3404101002056683', 'Surip Marto Wiyono', 'Surip', 'Istri', 'Default', '1957-06-04', 'Perempuan', 1, 9, 3, 'Kawin', 'Mukim', 'Tidak Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '002', 'default77771', 'Aktif'),
(254, '3404101002056683', 'Faisal Hermawan', 'Faisal', 'Anak', 'Default', '2011-01-22', 'Laki-laki', 1, 9, 2, 'Belum Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '002', 'default93893', 'Aktif'),
(255, '3404101002056684', 'Wandiyo', 'Wandiyo', 'Kepala Keluarga', 'Default', '1926-05-10', 'Laki-laki', 1, 8, 4, 'Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '001', 'default222344', 'Aktif'),
(256, '3404101002056685', 'Haryadi', 'Haryadi', 'Kepala Keluarga', 'Default', '1962-03-09', 'Laki-laki', 1, 5, 3, 'Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '001', 'default82378', 'Aktif'),
(257, '3404101002056685', 'Partinah ', 'Partinah', 'Istri', 'Default', '1965-01-17', 'Perempuan', 1, 5, 6, 'Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '001', 'default89921', 'Aktif'),
(258, '3404101002056685', 'Tentrem Prihatin', 'Tentrem', 'Anak', 'Default', '1986-10-21', 'Perempuan', 1, 5, 8, 'Belum Kawin', 'Tidak Mukim', 'Tidak Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '001', 'defaukt8388', 'AKTIF');
INSERT INTO `sementara_datainduk` (`kd_induk`, `no_kk`, `nama`, `nm_panggilan`, `status_hub_kk`, `tmp_lahir`, `tgl_lahir`, `j_kelamin`, `kd_agama`, `kd_pendidikan`, `kd_pekerjaan`, `status_kawin`, `status_mukim`, `keterangan_mukim`, `kd_level_ekonomi`, `gol_darah`, `is_latin`, `is_hijaiyah`, `is_iqra`, `is_quran`, `is_5waktu`, `is_jamaah`, `is_zakat_fitrah`, `is_zakat_mal`, `is_qurban`, `is_haji`, `is_umrah`, `kd_rt`, `no_ktp`, `status`) VALUES
(259, '3404101002056685', 'Haryanti', 'Haryanti', 'Anak', 'Default', '2000-02-01', 'Perempuan', 1, 6, 8, 'Belum Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '001', 'default92398', 'Aktif'),
(260, '3404101002056685', 'Ahmadi', 'Ahmadi', 'Anak', 'Default', '2001-10-09', 'Laki-laki', 1, 5, 9, 'Belum Kawin', 'Belum Kawin', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '001', 'defaulta902345', 'Aktif'),
(261, '3404101002056688', 'Purwanta', 'Purwanta', 'Kepala Keluarga', 'Default', '1968-11-14', 'Laki-laki', 1, 5, 17, 'Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '001', 'defaulat8q235', 'Aktif'),
(262, '3404101002056688', 'Sri Lestari', 'Sri', 'Istri', 'Default', '1970-03-03', 'Perempuan', 1, 5, 6, 'Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '001', 'defaulat9023', 'Aktif'),
(263, '3404101002056688', 'Deni Parasetyo', 'Deni', 'Anak', 'Default', '1994-12-12', 'Laki-laki', 1, 6, 2, 'Belum Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '001', 'awoiefj', 'Aktif'),
(264, '3404101002056688', 'Siti Kholifatun', 'Siti', 'Anak', 'Default', '2002-12-21', 'Perempuan', 1, 5, 9, 'Belum Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '001', 'awefkkm', 'Aktif'),
(265, '3404101002056689', 'Syahrudin', 'Syahrudin', 'Kepala Keluarga', 'Default', '1963-06-16', 'Laki-laki', 1, 6, 3, 'Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '001', 'ljiklaserjnk', 'Aktif'),
(266, '3404101002056689', 'Wasiyem', 'Wasiyem', 'Istri', 'Default', '1957-11-15', 'Perempuan', 1, 6, 6, 'Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '001', 'jiklaserti', 'Aktif'),
(267, '3404101002056689', 'Siti Nurbaiti', 'Siti', 'Anak', 'Default', '1988-12-12', 'Perempuan', 1, 9, 2, 'Belum Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '001', 'jkawerjk', 'Aktif'),
(268, '3404101002056690', 'Sagino', 'Sagino', 'Kepala Keluarga', 'Default', '1963-12-31', 'Laki-laki', 1, 6, 3, 'Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '002', 'awerjnikgtf', 'Aktif'),
(269, '3404101002056690', 'Ngadiyem', 'Ngadiyem', 'Istri', 'Default', '1961-07-12', 'Perempuan', 1, 8, 3, 'Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '002', 'paeriof', 'Aktif'),
(270, '3404101002056690', 'Nurwiyanti', 'Nurwiyanti', 'Anak', 'Default', '1989-06-05', 'Perempuan', 1, 5, 8, 'Kawin', 'Tidak Mukim', 'Tidak Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '002', 'awoetfn', 'AKTIF'),
(271, '3404101002056690', 'Puri Priyatni', 'Puri', 'Anak ', 'Default', '1996-04-10', 'Perempuan', 1, 8, 8, 'Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '002', 'awefnopm', 'Aktif'),
(272, '3404101002056691', 'Harjomartono Jumbage', 'Harjomartono', 'Kepala Keluarga', 'Default', '1943-07-04', 'Laki-laki', 1, 8, 11, 'Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '001', 'awjkefnaw', 'Aktif'),
(273, '3404101002056691', 'Pairah Harjomartono', 'Pairah', 'Istri', 'Default', '1946-04-09', 'Perempuan', 1, 8, 6, 'Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '001', 'awerjifnawf', 'Aktif'),
(274, '3404101002056691', 'Sumarmi', 'Sumarmi', 'Anak', 'Default', '1973-03-29', 'Perempuan', 1, 5, 8, 'Kawin', '', '?', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '001', 'psoerjtg', 'Aktif'),
(275, '3404101002056692', 'Dasinem', 'Dasinem', 'Kepala Keluarga', 'Default', '1948-09-06', 'Perempuan', 1, 3, 4, 'Cerai Mati', 'Mukim', '?', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '001', 'jkasertgn', 'Aktif'),
(276, '3404101002056697', 'Jinab', 'Jinab', 'Kepala Keluarga', 'Default', '1955-12-31', 'Laki-laki', 1, 8, 4, 'Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '002', 'jkasrejgn', 'Aktif'),
(277, '3404101002056697', 'Partinem', 'Partinem', 'Istri', 'Default', '1959-04-05', 'Perempuan', 1, 8, 4, 'Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '002', 'jkawrjefgn', 'Aktif'),
(278, '3404101002056698', 'Didit Yulianto', 'Didit', 'Kepala Keluarga', 'Default', '1973-07-20', 'Laki-laki', 1, 5, 4, 'Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '001', 'awerfgkjn', 'Aktif'),
(279, '3404101002056698', 'Sartini', 'Sartini', 'Istri', 'Default', '1977-06-06', 'Perempuan', 1, 5, 4, 'Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '001', 'lknawf', 'Aktif'),
(280, '3404101002056698', 'Rahmat Hidayat', 'Rahmat ', 'Anak', 'Default', '2004-10-22', 'Laki-laki', 1, 6, 9, 'Belum Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '001', 'awefnjnl', 'Aktif'),
(281, '3404101002056698', 'Taufik Hidayat', 'Taufik', 'Anak', 'Default', '2010-04-25', 'Laki-laki', 1, 3, 9, 'Belum Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '001', 'regknar', 'Aktif'),
(282, '3404101002056702', 'Suryanto', 'Suryanto', 'Kepala Keluarga', 'Default', '1954-01-29', 'Laki-laki', 2, 5, 10, 'Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '013', 'ajkwefn', 'Akatif'),
(283, '3404101002056702', 'Eny Wijiati Rahayuningsih', 'Eny', 'Istri', 'Default', '1961-09-27', 'Perempuan', 1, 5, 8, 'Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '013', 'kwjneagfn', 'Aktif'),
(284, '3404101002056702', 'Novi Sekar Wahyuning Jati', 'Novi', 'Anak', 'Default', '1990-11-13', 'Perempuan', 1, 5, 9, 'Belum Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '013', 'sergserg', 'Aktif'),
(285, '3404101002056702', 'Kartiko Puji Utomo', 'Kartiko ', 'Anak', 'Default', '1994-02-06', 'Laki-laki', 1, 6, 9, 'Belum Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '013', 'aregngn', 'Aktif'),
(286, '3404101002057048', 'Sudarmin', 'Sudarmin', 'Kepala Keluarga', 'Default', '1959-02-05', 'Laki-laki', 1, 6, 8, 'Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '001', 'opsegrnm', 'Aktif'),
(287, '3404101002057048', 'Galuh Ajeng Panji Asmoro', 'Galuh', 'Anak', 'Default', '2002-01-22', 'Laki-laki', 1, 8, 9, 'Belum Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '001', 'njkasergn', 'Aktif'),
(288, '3404101002090007', 'Eko Utomo', 'Eko', 'Kepala Keluarga', 'Default', '1983-02-28', 'Laki-laki', 1, 5, 8, 'Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '001', 'jkanmwef', 'Aktif'),
(289, '3404101002090007', 'Marsiyati', 'Marsiyati', 'Istri', 'Default', '1975-05-03', 'Perempuan', 1, 5, 6, 'Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '001', 'jnafnhjap', 'Aktif'),
(290, '3404101002090007', 'Shifa Galih Rinawati', 'Shifa', 'Anak', 'Default', '2009-01-20', 'Perempuan', 1, 8, 9, 'Belum Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '001', 'kafawfer', 'Aktif'),
(291, '3404101002120006', 'Maryoto', 'Maryoto', 'Kepala Keluarga', 'Default', '1982-07-10', 'Laki-laki', 1, 5, 4, 'Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '002', 'klawjnfrje', 'Aktif'),
(292, '3404101002120006', 'Suharti', 'Suharti', 'Istri', 'Default', '1979-12-13', 'Perempuan', 1, 5, 8, 'Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '002', 'jkawnfre', 'Aktif'),
(293, '3404101002120006', 'Dava Eka Saputra', 'Deva', 'Anak', 'Default', '2012-03-01', 'Laki-laki', 1, 3, 9, 'Belum Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '002', 'kawjefrnaw', 'Aktif'),
(294, '3404101005120003', 'Wagiyem', 'Wagiyem', 'Kepala Keluarga', 'Default', '1937-08-03', 'Perempuan', 1, 8, 6, 'Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '002', 'awjkerfnaw', 'Aktif'),
(295, '3404101005120003', 'Suyati', 'Suyati', 'Anak', 'Default', '1954-12-31', 'Perempuan', 1, 8, 4, 'Cerai Hidup', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '002', 'asergli', 'Aktif'),
(296, '3404101005120003', 'Sumartini', 'Sumartini', 'Anak', 'Default', '1963-04-21', 'Perempuan', 1, 8, 4, 'Cerai Hidup', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '002', 'nklnklawhi', 'Aktif'),
(297, '3404101005120003', 'Sigit Atmojo', 'Sigit ', 'Cucu', 'Default', '1983-06-11', 'Perempuan', 1, 5, 4, 'Belum Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '002', 'jnajnkwefrgjnk', 'Aktig'),
(298, '3404101022050403', 'Agus Supriyadi', 'Agus', 'Kepala Keluarga', 'Default', '1986-08-24', 'Laki-laki', 1, 5, 8, 'Belum Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '002', 'jkrfgnsergn', 'Aktif'),
(299, '3404101022050411', 'Suyantinem', 'Suyantinem', 'Anak', 'Default', '1965-12-22', 'Perempuan', 2, 4, 5, 'Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '001', 'aklwerfgn', 'Aktif'),
(300, '3404101022050411', 'Sutiyuniati', 'Sutiyuniati', 'Anak', 'Default', '1968-07-19', 'Perempuan', 2, 5, 6, 'Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '001', 'klkmlawrg', 'Aktif'),
(301, '3404101022050411', 'Sekti Suwarni', 'Sekti', 'Anak', 'Default', '1971-02-01', 'Perempuan', 2, 4, 8, 'Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '001', 'lkawefm', 'Aktif'),
(302, '3404101022050411', 'Setya Surbayani', 'Setya', 'Anak', 'Default', '1976-02-22', 'Perempuan', 2, 2, 8, 'Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '001', 'kmlawerfgkl', 'Aktif'),
(303, '3404101022050411', 'Sumartiningsih', 'Sumartiningsih', 'Anak', 'Default', '1979-04-20', 'Perempuan', 2, 5, 8, 'Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '001', 'klawretgui', 'Aktif'),
(304, '3404101022050411', 'Sukyaindar Lustianti', 'Sukyaindar', 'Anak', 'Default', '1981-04-03', 'Perempuan', 2, 4, 2, 'Belum Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '001', 'pawetnp', 'Aktif'),
(305, '3404101101160013', 'Marinem', 'Marinem', 'Kepala Keluarga', 'Default', '1958-03-29', 'Perempuan', 1, 8, 6, 'Cerai Mati', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '001', 'uiawrethui', 'Aktif'),
(306, '3404101101160013', 'Susanti Ning Lestari', 'Susanti', 'Anak', 'Default', '1989-02-12', 'Perempuan', 1, 4, 2, 'Belum Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '001', 'ioawregn', 'Aktif'),
(307, '3404101106080002', 'Iskandar Mas Suto Adi', 'Iskandar ', 'Kepala Keluarga', 'Default', '1968-06-08', 'Laki-laki', 2, 2, 8, 'Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '013', 'awerthu', 'Aktif'),
(308, '3404101106080002', 'Anastasia Yuli Caturaning Ayu', 'Anastasia ', 'Istri', 'Default', '1972-07-20', 'Perempuan', 3, 2, 8, 'Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '013', 'aweaserghyk', 'Aktif'),
(309, '3404101106080002', 'Alexander Aryo Bimo', 'Alexander', 'Anak', 'Default', '1999-06-15', 'Laki-laki', 2, 3, 9, 'Belum Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '013', 'ioawer', 'Aktif'),
(310, '3404101108110008', 'Tony Sunggoro', 'Tony', 'Kepala Keluarga', 'Default', '1978-11-18', 'Laki-laki', 1, 5, 3, 'Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '002', 'aweikfjm', 'Aktif'),
(311, '3404101108110008', 'Andriyani', 'Andriyani', 'Istri', 'Default', '1985-03-29', 'Perempuan', 1, 6, 6, 'Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '002', 'ioawertio', 'Aktif'),
(312, '3404101108110008', 'Angling Kusuma', 'Angling', 'Anak', 'Default', '2010-10-04', 'Laki-laki', 1, 9, 2, 'Belum Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '002', 'ioioawef', 'Aktif'),
(313, '3404101210150007', 'Suradja', 'Suradja', 'Kepala Keluarga', 'Default ', '1959-09-06', 'Laki-laki', 1, 5, 10, 'Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '001', 'jioawerio', ' Aktif'),
(314, '3404101210150007', 'Rukmiati', 'Rukmiati', 'Istri', 'Default', '1971-09-17', 'Perempuan', 1, 6, 6, 'Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '001', 'aweoirf', 'Almarhumah'),
(315, '3404101210150007', 'Lina Kumala Dita ', 'Lina', 'Anak', 'Default', '1991-06-01', 'Perempuan', 1, 4, 9, 'Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '001', 'aiowert', 'Aktif'),
(316, '3404101210150007', 'Oksiana Susilawati', 'Oksiana', 'Anak', 'Default', '1993-10-25', 'Perempuan', 1, 4, 9, 'Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '001', 'ioawefio', 'Aktif'),
(317, '3404101210150007', 'Eltri Rizki Maulana', 'Eltri', 'Anak', 'Default', '1998-11-01', 'Perempuan', 1, 5, 9, 'Belum Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '001', 'aweiorjnkjnkl', 'Aktif'),
(318, '3404101408150001', 'Kholid Haryono', 'Kholid ', 'Kepala Keluarga', 'Default', '1977-10-09', 'Laki-laki', 1, 7, 5, 'Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '001', 'ioioawe', 'Aktif'),
(319, '3404101408150001', 'Tutik Sri Winarni', 'Tutik', 'Istri', 'Default', '1980-02-16', 'Perempuan', 1, 5, 8, 'Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '001', 'ojiawefoi', 'Aktif'),
(320, '3404101408150001', 'Muhammad Umar Kholid', 'Umar', 'Anak', 'Default', '2005-06-08', 'Laki-laki', 1, 6, 9, 'Belum Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '001', 'opiopawef', 'Aktif'),
(321, '3404101408150001', 'Madeeha Shamayla', 'Madeeha', 'Anak', 'Default', '2009-02-11', 'Perempuan', 1, 6, 9, 'Belum Kawin', 'Tidak Mukim', 'Tidak Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '001', 'ioaweiornmnm', 'Aktif'),
(322, '3404101408150001', 'Keysah Hanun', 'Keysah', 'Anak', 'Default', '2014-09-26', 'Perempuan', 1, 9, 2, 'Belum Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '001', 'jkawef', 'Aktif'),
(323, '3404101412100001', 'Tulus Jati Warsono', 'Tulus', 'Kepala Keluarga', 'Default', '1978-06-16', 'Laki-laki', 1, 5, 3, 'Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '001', 'jkjawe', 'Aktif'),
(324, '3404101412100001', 'Sunarni', 'Sunarni', 'Istri', 'Default', '1980-04-23', 'Perempuan', 1, 4, 6, 'Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '001', 'jmbnawe', 'Aktif'),
(325, '3404101412100001', 'Satria Bayu Manunggal ', 'Satria ', 'Anak', 'Default', '2008-10-12', 'Laki-laki', 1, 9, 2, 'Belum Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '001', 'uiawefjnk', 'Aktif'),
(326, '3404101412100001', 'Angelita Lucyani', 'Angelita', 'Anak', 'Default', '2012-04-25', 'Perempuan', 1, 9, 2, 'Belum Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '001', 'uiawerfgtjb', 'Aktif'),
(327, '3404101508070012', 'Gunarto', 'Gunarto', 'Kepala Keluarga', 'Default', '1976-11-04', 'Laki-laki', 1, 5, 13, 'Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '001', 'jabjkwwe', 'Aktif'),
(328, '3404101508070012', 'Hasmaini', 'Hasmaini', 'Istri', 'Default', '1978-06-10', 'Perempuan', 1, 4, 6, 'Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '001', 'yuyuawer', 'Aktif'),
(329, '3404101508070012', 'Rahma Putra Sara Fauza', 'Rahma ', 'Anak', 'Default', '2004-10-19', 'Laki-laki', 1, 8, 2, 'Belum Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '001', 'jikjnkawef', 'Aktif'),
(330, '3404101508070012', 'Hera Afina Putri', 'Hera ', 'Anak', 'Default', '2009-11-04', 'Perempuan', 1, 9, 2, 'Belum Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '001', 'hbjbnmawe', 'Aktif'),
(331, '3404101509150001', 'Mariyono', 'Mariyono', 'Kepala Keluarga', 'Default', '1978-08-31', 'Laki-laki', 1, 4, 8, 'Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '002', 'uiahjwef', 'Aktif'),
(332, '3404101509150001', 'Wahyuni Ningsih', 'Wahyuni', 'Istri', 'Default', '1980-10-16', 'Perempuan', 1, 5, 6, 'Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '002', 'mhnmawef', 'Aktif'),
(333, '3404101509150001', 'Afif Burhanudin Fattah', 'Arif', 'Anak', 'Default', '2001-04-14', 'Laki-laki', 1, 5, 9, 'Belum Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '002', 'jnknmawef', 'Aktif'),
(334, '3404101509150001', 'Muhammad Ridhwan Yuniar', 'Ridhwan', 'Anak', 'Default', '2005-12-10', 'Laki-laki', 1, 6, 9, 'Belum Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '002', 'nmnmawe', 'Aktif'),
(335, '3404101509150001', 'Azkya Huwaida Yuniar', 'Azkya', 'Anak', 'Default', '2013-05-15', 'Perempuan', 1, 9, 2, 'Belum Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '002', 'jnnmawef', 'Aktif'),
(341, '3404101602110001', 'Hamdan Eko Santoso', 'Hamdan', 'Kepala Keluarga', 'Default', '1986-01-03', 'Laki-laki', 1, 5, 17, 'Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '001', 'mnnmawe', 'Aktif'),
(342, '3404101602110001', 'Eka Yuli Listiawati', 'Eka', 'Istri', 'Default', '1989-07-13', 'Perempuan', 1, 5, 4, 'Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '001', 'ujiajwkef', 'Aktif'),
(343, '3404101602110001', 'Marfel Okky Pratama', 'Marfel', 'Anak', 'Default', '2011-03-01', 'Laki-laki', 1, 3, 9, 'Belum Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '001', 'mnnmawef', 'Aktif'),
(344, '3404101602110001', 'Arga Maulana Revaqi', 'Arga', 'Anak', 'Default', '2014-12-30', 'Laki-laki', 1, 9, 2, 'Belum Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '001', 'nmnmawef', 'Aktif'),
(345, '3404101602110001', 'Arka Nauval Santoso', 'Arka', 'Anak', 'Default', '2019-01-19', 'Laki-laki', 1, 9, 2, 'Belum Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '001', 'nawefj', 'Aktif'),
(346, '3404101612110002', 'Ngadinah', 'Ngadinah', 'Kepala Keluarga', 'Default', '1928-02-06', 'Perempuan', 1, 9, 2, 'Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '001', 'uahjwef', 'Aktif'),
(347, '3404101612110002', 'Youan Rakhmat', 'Youan', 'Cucu', 'Default', '1991-06-21', 'Laki-laki', 1, 5, 8, 'Belum Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '001', 'hjuiawer', 'Aktif'),
(348, '3404101612110002', 'Wahyu Hidayat', 'Wahyu', 'Cucu', 'Default', '1996-01-06', 'Laki-laki', 1, 5, 8, 'Belum Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '001', 'mnnmnmaweif', 'Aktif'),
(349, '3404101702110002', 'Haryadi', 'Haryadi', 'Kepala Keluarga', 'Defautl', '1976-06-28', 'Laki-laki', 1, 5, 8, 'Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '002', 'uiaweuir', 'Aktif'),
(350, '3404101702110002', 'Sumarni', 'Sumarni', 'Istri', 'Default', '1974-10-14', 'Perempuan', 1, 5, 6, 'Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '001', 'uiuiuiawejh', 'Aktif'),
(351, '3404101702110002', 'Hafidh Kurniawan', 'Hafidh', 'Anak', 'Default', '2005-05-25', 'Laki-laki', 1, 6, 9, 'Belum Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '002', 'uawefawefm', 'Aktif'),
(352, '3404101702110002', 'Farid Dwi Kurniawan', 'Farid ', 'Anak', 'Default', '2012-03-29', 'Laki-laki', 1, 3, 9, 'Belum Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '002', 'tyawtyer', 'Aktif'),
(380, '3404101703160002', 'Taugah Bidiyono', 'Taugah', 'Kepala Keluarga', 'Default', '1982-04-05', 'Laki-laki', 1, 5, 17, 'Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '002', 'jkajkwefjk', 'Aktif'),
(381, '3404101703160002', 'Asminarti', 'Asminart', 'Istri', 'Default', '1981-04-23', 'Perempuan', 1, 5, 17, 'Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '002', 'uuiuiuiuip', 'Aktif'),
(382, '3404101703160002', 'Aulia Annisa Rafiatun Darojah', 'Aulia', 'Anak', 'Default', '2005-09-20', 'Perempuan', 1, 3, 9, 'Belum Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '002', 'bnbnbn', 'Aktif'),
(383, '3404101703160002', 'Qolbiyatul Azizah', 'Azizah', 'Anak', 'Default', '2006-11-07', 'Perempuan', 1, 3, 9, 'Belum Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '002', 'bnabnwefbn', 'Aktif'),
(384, '3404101703160002', 'Tsabbit Qolbii Aladdien', 'Tsabbit ', 'Anak', 'Default', '2008-06-08', 'Laki-laki', 1, 3, 9, 'Belum Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '002', 'yuyuaweryu', 'Aktif'),
(385, '3404101703160002', 'Hafsoh Umdatudini', 'Hafsoh', 'Anak', 'Default', '2010-04-01', 'Perempuan', 1, 9, 2, 'Belum Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '002', 'jawehbjf', 'Aktif'),
(386, '3404101703160002', 'Saudah Muqiimatuddini', 'Saudah ', 'Anak', 'Default', '2011-08-29', 'Perempuan', 1, 9, 2, 'Belum Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '002', 'nbbnbnbn', 'Aktif'),
(387, '3404101703160002', 'Abu Musa Al Ikhlas', 'Musa', 'Anak', 'Default', '2013-03-21', 'Laki-laki', 1, 9, 2, 'Belum Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '002', 'tyaaewfgh', 'Aktif'),
(388, '3404101703160002', 'Hamzah Satria Jati ', 'Hamzah', 'Anak', 'Default', '2014-10-20', 'Laki-laki', 1, 9, 2, 'Belum Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '002', 'yytyawer', 'Aktif'),
(389, '3404101707080017', 'Nurul Syamsuhadi', 'Nurul', 'Kepala Keluarga', 'Default', '1984-06-27', 'Laki-laki', 1, 5, 17, 'Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '002', 'jnkjnkawe', 'Aktif'),
(390, '3404101707080017', 'Ana Kurniasih', 'Ana', 'Istri', 'Default', '1985-05-20', 'Perempuan', 1, 5, 6, 'Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '002', 'mmawefm', 'Aktif'),
(391, '3404101707080017', 'Aurellia Lysandra Meisya', 'Aurellia', 'Anak', 'Default', '2006-05-31', 'Perempuan', 1, 9, 2, 'Belum Kawin', 'Mukim', 'Mukim', 0, '', '', '', '', '', '', '', '', '', '', '', '', '002', 'uiuawefkaer', 'Aktif'),
(392, '3404101707080017', 'Naura Kyandra Zafaranisya', 'Naura', 'Anak', 'Default', '2013-06-21', 'Perempuan', 1, 9, 2, 'Belum Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '002', 'erererer', 'Aktif'),
(396, '3404101709130010', 'Nurnowoyanto', 'Nurno', 'Kepala Keluarga', 'Default', '1986-11-08', 'Laki-laki', 1, 5, 8, 'KAwin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '002', 'nmnmawec', 'Aktif'),
(397, '3404101709130010', 'Tiwi Listyaningsih', 'Tiwi', 'Istri', 'Default', '1991-08-24', 'Perempuan', 1, 5, 3, 'Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '002', 'yuuanmnma', 'Aktif'),
(398, '3404101709130010', 'Shelfia Nuristya Ramadhani', 'Shelfia', 'Anak', 'Default', '2013-07-09', 'Perempuan', 1, 9, 2, 'Belum Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '002', 'qqwqweef', 'Aktif'),
(399, '3404101802150005', 'Martinus Tri Winarno', 'Martinus', 'Kepala Keluarga', 'Default', '1989-03-27', 'Laki-laki', 3, 4, 8, 'Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '002', 'yuyuaioomer', 'Aktif'),
(400, '3404101802150005', 'Monica Kris Susanto', 'Monica', 'Istri', 'Default', '1988-03-06', 'Perempuan', 3, 4, 6, 'Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '002', 'nmarfghjkljjhh', 'Aktif'),
(401, '3404101804160006', 'Bayu Iwan Setyawan', 'Bayu', 'Kepala Keluarga', 'Default', '1991-04-21', 'Laki-laki', 1, 1, 8, 'Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '002', 'nmnmaweikpaw', 'Aktif'),
(402, '3404101804160006', 'Ervina Tri Aryani', 'Ervina', 'Istri', 'Default', '1991-05-17', 'Perempuan', 1, 4, 5, 'Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '002', 'anmmawefuj', 'Aktif'),
(403, '3404101804160006', 'Duta Luqman Setyawan', 'Duta', 'Belum Kawin', 'Default', '2016-06-15', 'Laki-laki', 1, 9, 2, 'Belum Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '002', 'yrtrtyryui', 'Aktif'),
(404, '3404101810160014', 'Agus Tri Suranto', 'Agus', 'Kepala Keluarga', 'Default', '1989-08-08', 'Laki-laki', 1, 5, 8, 'Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '002', 'jhjhjau', 'Akatif'),
(405, '3404101810160014', 'Endang Nurlaely', 'Endang', 'Istri', 'Default', '1989-03-17', 'Perempuan', 1, 5, 8, 'Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '002', 'xxccxczh', 'Aktif'),
(406, '3404101810160014', 'Muhammad Azka Putra', 'Azka', 'Anak', 'Default', '2016-12-21', 'Laki-laki', 0, 9, 2, 'Belum Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '002', 'uiikjafjkjjkn', 'Aktif'),
(407, '3404101810160014', 'Syakila Naura Adzkiya', 'Syakila', 'Anak', 'Default', '2018-09-16', 'Perempuan', 1, 9, 2, 'Belum Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '002', 'ghhikilnm', 'Aktif'),
(408, '3404101810180008', 'Mujiyanto', 'Mujiyanto', 'Kepala Keluarga', 'Default', '1962-10-03', 'Laki-laki', 1, 5, 8, 'Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '001', 'nbkoiio', 'Aktif'),
(409, '3404101810180008', 'Risnita', 'Risnita', 'Istri', 'Default', '1972-08-06', 'Perempuan', 1, 5, 6, 'Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '001', 'jjknnm', 'Aktif'),
(410, '3404101810180008', 'Alif Karim', 'Alif', 'Anak', 'Default', '2004-07-12', 'Laki-laki', 1, 8, 9, 'Belum Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '001', 'ewwewerb', 'Aktif'),
(411, '3404101810180008', 'Aura Latifa', 'Aura', 'Anak', 'Default', '2007-01-17', 'Perempuan', 0, 3, 9, 'Belum Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '001', 'tyuoaew', 'Aktif'),
(412, '3404101901180006', 'Bambang Dwiyatmoko', 'Bambang', 'Kepala Keluarga', 'Default', '1978-10-08', 'Laki-laki', 1, 5, 8, 'Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '013', 'ryrtwear', 'Aktif'),
(413, '3404101901180006', 'Catur Purnami', 'Catur', 'Istri', 'Default', '1984-07-15', 'Perempuan', 1, 5, 8, 'Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '013', 'vbbvbn', 'Aktif'),
(414, '3404101901180006', 'Gyda Yunikha Putri Firdaus', 'Gyda', 'Anak', 'Default', '2008-06-06', 'Perempuan', 1, 3, 9, 'Belum Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '013', 'nmvbvbawk', 'Aktif'),
(415, '3404101901180006', 'Fajar Rifky Al Firdaus', 'Fajar', 'Anak', 'Default', '2010-03-07', 'Laki-laki', 1, 3, 9, 'Belum Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '013', 'nbnolnmm,a', 'Aktif'),
(416, '3404101907130002', 'Suyoto', 'Suyoto', 'Kepala Keluarga', 'Default', '1957-04-10', 'Laki-laki', 1, 5, 10, 'Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '002', 'ttwaer', 'Aktif'),
(417, '3404101907130002', 'Sri Hartatiningsih', 'Sri', 'Istri', 'Default', '1973-10-20', 'Perempuan', 1, 5, 6, 'Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '002', 'aweyrbn,', 'Aktif'),
(418, '3404101907130002', 'Pratama Ari Putra', 'Ari', 'Anak', 'Default', '2000-06-15', 'Laki-laki', 1, 5, 9, 'Belum Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '002', 'qwebhj', 'Aktif'),
(419, '3404101907130002', 'Ikhsan Putra Pamungkas', 'Ikhsan', 'Anak', 'Default', '2001-10-19', 'Laki-laki', 1, 5, 9, 'Belum Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '002', 'vvbbnmmoe', 'Aktif'),
(420, '3404102001160006', 'Irfan Aji Son Aji', 'Irfan', 'Kepala Keluarga', 'Default', '1993-12-17', 'Laki-laki', 1, 5, 8, 'Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '001', 'hjhjawefnm', 'Aktif'),
(421, '3404102001160006', 'Tiwi Widyaningsih', 'Tiwi', 'Istri', 'Default', '1996-11-09', 'Perempuan', 1, 5, 6, 'Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '001', 'hjawefok', 'Aktif'),
(422, '3404102001160006', 'Ananda Rifky Saputra', 'Rifky', 'Anak', 'Default', '2015-10-19', 'Laki-laki', 1, 9, 2, 'Belum Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '001', 'hjghpawer', 'Aktif'),
(423, '3404102001160006', 'Intan Tivani Anggraini', 'Intan', 'Anak', 'Default', '2017-04-22', 'Perempuan', 1, 9, 2, 'Belum Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '001', 'hbnmjkawefop', 'Aktif'),
(424, '3404102003170005', 'Sudjilah', 'Sudjilah', 'Kepala Keluarga', 'Default', '1955-09-15', 'Perempuan', 1, 8, 11, 'Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '001', 'bbbbnnjh', 'Aktif'),
(425, '3404102003170005', 'Astuti Indarwati', 'Astuti', 'Anak', 'Default', '1987-05-30', 'Perempuan', 1, 5, 6, 'Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '001', 'ggghawer', 'Aktif'),
(426, '3404102003170005', 'Boby Hermawan', 'Boby', 'Menantu', 'Default', '1987-05-27', 'Laki-laki', 1, 6, 3, 'Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '001', 'yyyyuawer', 'Aktif'),
(427, '3404102103090003', 'Priyo Winoto Bingah ', 'Priyo', 'Kepala Keluarga', 'Default', '1947-09-08', 'Laki-laki', 1, 8, 4, 'Cerai Mati', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '002', 'ttttyawr', 'Aktif'),
(428, '3404102106120004', 'Ngatiyem', 'Ngatiyem', 'Kepala Keluarga', 'Default', '1944-04-14', 'Perempuan', 1, 3, 4, 'Cerai Mati', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '001', 'hhhjjawlef', 'Aktif]'),
(429, '3404102109070009', 'Siswanto', 'Siswanto', 'Kepala Keluarga', 'Default', '1977-06-04', 'Laki-laki', 1, 5, 8, 'Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '001', 'gghawef', 'Aktif'),
(430, '3404102109070009', 'Sugiyatini', 'Sugiyatini', 'Istri', 'Default', '1976-07-18', 'Perempuan', 1, 5, 8, 'Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '001', 'yyayuwertj', 'Aktif'),
(431, '3404102109070009', 'Suci Amaliah', 'Suci', 'Anak', 'Default', '2002-06-04', 'Perempuan', 1, 5, 9, 'Belum Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '001', 'hjjawemfmn', 'Aktif'),
(432, '3404102109070009', 'Arya Ilham Saputra', 'Arya', 'Anak', 'Default', '2009-10-13', 'Laki-laki', 1, 3, 9, 'Belum Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '001', 'bbvcxxga', 'Aktif'),
(433, '3404102205120002', 'Suyatno', 'Suyatno', 'Kepala Keluarga', 'Default', '1956-04-10', 'Laki-laki', 1, 2, 10, 'Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '001', 'aaaassssss', 'Aktif'),
(434, '3404102205120002', 'Suminten', 'Suminten', 'Istri', 'Default', '1962-10-10', 'Perempuan', 1, 5, 6, 'Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '001', 'yyyyuuuuuuu', 'Aktif'),
(435, '3404102208140007', 'Didi Kristiawan', 'Didi', 'Kepala Keluarga', 'Default', '1987-12-21', 'Laki-laki', 1, 4, 1, 'Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '002', 'hhnnmggg', 'Aktif'),
(436, '3404102208140007', 'Cholifah Budiarti', 'Cholifah', 'Istri', 'Default', '1987-11-19', 'Perempuan', 1, 4, 8, 'Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '002', 'gbnbna', 'Aktif'),
(437, '3404102208140007', 'Fatian Dzakia Sava', 'Fatian', 'Anak', 'Default', '2014-07-23', 'Perempuan', 1, 9, 2, 'Belum Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '002', 'Aghawef', 'Aktif'),
(438, '3404102308160005', 'Aziz Mahmudi', 'Aziz', 'Kepala Keluarga', 'Default', '1985-11-18', 'Laki-laki', 1, 5, 12, 'Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '002', 'tttrrerer', 'Aktif'),
(439, '3404102308160005', 'Rahayu Indrawati', 'Rahayu', 'Istri', 'Default', '1984-04-15', 'Perempuan', 1, 2, 8, 'Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '002', 'lllololljj', 'Aktif'),
(440, '3404102308160005', 'Lihtuhayu Andamari Aziz', 'Lihtuhayu', 'Anak', 'Default', '2017-01-23', 'Perempuan', 1, 9, 2, 'Belum Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '002', 'rererere', 'Aktif'),
(441, '3404102311090005', 'Iswadi', 'Iswadi', 'Kepala Keluarga', 'Default', '1972-05-14', 'Laki-laki', 1, 5, 4, 'Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '002', 'jjjjuuer', 'Aktif'),
(442, '3404102311090005', 'Sri Hartini', 'Sri', 'Istri', 'Default', '1979-04-02', 'Perempuan', 1, 5, 6, 'Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '002', 'yyyyyyyyaweru', 'Aktif'),
(443, '3404102311090005', ' Yoga Angga Pratama', 'Yoga', 'Anak', 'Default', '2003-01-10', 'Laki-laki', 1, 6, 9, 'Belum Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '002', 'mnmnmmn', 'Aktif'),
(444, '3404102311090005', 'Irda Setiawan', 'Irda', 'Anak', 'Default', '2011-11-20', 'Laki-laki', 1, 3, 9, 'Belum Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '002', 'rererererere', 'Aktif'),
(445, '3404102311090006', 'Wasono', 'Wasono', 'Kepala Keluarga', 'Default', '1981-08-26', 'Laki-laki', 1, 6, 4, 'Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '002', 'nmnmbbnm', 'Aktif'),
(446, '3404102311090006', 'Winarti', 'Winarti', 'Istri', 'Default', '1979-06-04', 'Perempuan', 1, 5, 6, 'Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '002', 'jaakkawoie', 'Aktif'),
(447, '3404102311090006', 'Bagus Eka Prasetyo', 'Bagus', 'Anak', 'Default', '2004-08-23', 'Laki-laki', 1, 6, 9, 'Belum Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '002', 'yyyaweuijk', 'Aktif'),
(448, '3404102401090005', 'Sartono', 'Sartono', 'Kepala Keluarga', 'Default', '1974-12-25', 'Laki-laki', 1, 5, 3, 'Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '002', 'klkmmawef', 'Aktif'),
(449, '3404102401090005', 'Titik Widiyaningsih', 'Titik', 'Istri', 'Default', '1982-03-05', 'Perempuan', 1, 5, 6, 'Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '002', 'dfdashk', 'Aktif'),
(450, '3404102401090005', 'Dela Novitasari', 'Dela', 'Anak', 'Default', '2003-11-17', 'Perempuan', 1, 5, 9, 'Belum Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '002', 'qweqweqwe', 'Aktif'),
(451, '3404102403070005', 'Supardi', 'Supardi', 'Kepala Keluarga', 'Default', '1965-10-17', 'Laki-laki', 1, 5, 15, 'Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '001', 'qwqwqwqw', 'Aktif'),
(452, '3404102403070005', 'Rubiyati', 'Rubiyati', 'Istri', 'Default', '1969-12-20', 'Perempuan', 1, 5, 6, 'Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '001', 'qqqwqwqw', 'Aktif'),
(453, '3404102403070005', 'Ika Febriyati', 'Ika', 'Anak', 'Default', '1995-02-22', 'Perempuan', 1, 5, 8, 'Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '001', 'yyyyyyaweur', 'Aktif'),
(454, '3404102403070005', 'Fauzi Dwi Nugroho', 'Fauzi', 'Anak', 'Default', '1999-11-26', 'Laki-laki', 1, 5, 8, 'Belum Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '001', 'ghjkarwfgj', 'Aktif'),
(455, '3404102403070006', 'G. Sukimo', 'Sukimo', 'Kepala Keluarga', 'Default', '1967-09-22', 'Laki-laki', 1, 5, 3, 'Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '001', 'klllklklkllk', 'Aktif'),
(456, '3404102403070006', 'Tumiyati', 'Tumiyati', 'Istri', 'Default', '1969-10-05', 'Perempuan', 1, 5, 6, 'Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '001', 'fffgggffgf', 'Aktif'),
(457, '3404102403070006', 'Yuri Setiawan', 'Yuri', 'Anak', 'Default', '1993-09-07', 'Laki-laki', 1, 5, 9, 'Belum Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '001', 'rerereerer', 'Aktif'),
(458, '3404102403070006', 'Windi Indah Sundari', 'Windi', 'Anak', 'Default', '2000-05-09', 'Perempuan', 1, 5, 9, 'Belum Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '001', 'uuuuuaweri', 'Aktif'),
(459, '3404102406160009', 'Boediman Rachman', 'Boediman', 'Kepala Keluarga', 'Default', '1942-08-26', 'Laki-laki', 1, 5, 10, 'Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '013', 'iiooioppop', 'Aktif'),
(460, '3404102406160009', 'Tri Redjeki', 'Tri', 'Istri', 'Default', '1948-09-09', 'Perempuan', 1, 5, 6, 'Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '013', 'nnvnvnvnvn', 'Aktif'),
(461, '3404102406160009', 'Erliena Budi Kristianti', 'Erliena', 'Anak', 'Default', '1973-12-16', 'Perempuan', 1, 4, 8, 'Belum Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '013', 'fgfgfgfh', 'Aktif'),
(462, '3404102406160009', 'Henny Rosario Kartika Sari', 'Henny', 'Anak', 'Default', '1976-03-07', 'Perempuan', 1, 4, 8, 'Belum Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '013', 'rerrtwert', 'Aktif'),
(463, '3404102412140007', 'Lutvi Nurnuryadi', 'Lutvi', 'Kepala Keluarga', 'Default', '1996-02-27', 'Laki-laki', 1, 5, 8, 'Kawin', 'Tidak Mukim', 'Tidak Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '001', 'vcvvvcvcvcc', 'Aktif'),
(464, '3404102412140007', 'Sarasati Lala Buana', 'Sarasati', 'Istri', 'Default', '1995-12-10', 'Perempuan', 1, 5, 6, 'Kawin', 'Tidak Mukim', 'Tidak Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '001', 'jjkljklk', 'Aktif'),
(465, '3404102412140007', 'Kanaya Vira Kamaratih', 'Kanaya', 'Anak', 'Default', '2014-11-03', 'Perempuan', 1, 9, 2, 'Belum Kawin', 'Tidak Mukim', 'Tidak Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '001', 'ererererer', 'Aktif'),
(466, '3404102412140007', 'Inara Vira Larasati', 'Inara', 'Anak', 'Default', '2017-02-16', 'Perempuan', 1, 9, 2, 'Belum Kawin', 'Tidak Mukim', 'Tidak Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '001', 'mzsdfkl', 'Aktif'),
(467, '3404102503090003', 'Rusminarti', 'Rusminarti', 'Kepala Keluarga', 'Default', '1973-07-18', 'Perempuan', 1, 8, 3, 'Cerai Mati', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '001', 'kjawefmlk', 'Aktif'),
(468, '3404102509120005', 'Maryata', 'Maryata', 'Kepala Keluarga', 'Default', '1972-01-15', 'Laki-laki', 1, 2, 8, 'Kawin', 'Tidak Mukim', 'Tidak Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '001', 'njjnjnjnjnn', 'Aktif'),
(469, '3404102509120005', 'Youla Meriyoulinda Tenda', 'Youla', 'Istri', 'Default', '1975-07-08', 'Perempuan', 1, 5, 6, 'Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '001', 'dedqwed', 'Aktif'),
(470, '3404102509120005', 'Nurma Ayulestari', 'Nurma', 'Anak', 'Default', '1998-02-08', 'Perempuan', 1, 4, 9, 'Belum Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '001', 'qweeeghv', 'Aktif'),
(471, '3404102509120005', 'Tristania Putri Aprilia', 'Tristania', 'Anak', 'Default', '2005-04-02', 'Perempuan', 1, 5, 9, 'Belum Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '001', 'czxczxcb', 'Aktif'),
(472, '3404102604120014', 'Suprihatni', 'Suprihatni', 'Kepala Keluarga', 'Default', '1980-06-17', 'Laki-laki', 1, 6, 3, 'Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '002', 'iiioioi', 'Aktif'),
(473, '3404102604120014', 'Saliyem ', 'Saliyem', 'Istri', 'Default', '1980-09-19', 'Perempuan', 1, 5, 6, 'Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '002', 'ppoawer', 'Aktif'),
(474, '3404102604120014', 'Angga Jati Atmaja', 'Angga', 'Anak', 'Default', '2012-05-25', 'Laki-laki', 1, 9, 2, 'Belum Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '002', 'mnnmb', 'Aktif'),
(475, '3404102609110004', 'Wahyudianto', 'Wahyu', 'Kepala Keluarga', 'Default', '1993-08-21', 'Laki-laki', 1, 6, 8, 'Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '001', 'uiiu', 'Aktif'),
(476, '3404102609110004', 'Siti Anisa Atup', 'Siti', 'Istri', 'Default', '1990-09-08', 'Perempuan', 1, 6, 6, 'Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '001', 'taywer', 'Aktif'),
(477, '3404102609110004', 'Nur Kumala Sari', 'Nur', 'Anak', 'Default', '2011-08-22', 'Perempuan', 1, 3, 9, 'Belum Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '', '-', '-', '-', '001', 'yawe', 'Aktif'),
(478, '3404102609110004', 'Fara Maheswari', 'Fara', 'Anak', 'Default', '2017-07-14', 'Perempuan', 1, 9, 2, 'Belum Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '001', 'jaawer', 'Aktif'),
(479, '3404102703090004', 'Gunanta ', 'Gunanta', 'Kepala Keluarga', 'Default', '1974-05-01', 'Laki-laki', 1, 5, 16, 'Kawin', 'Tidak Mukim', 'Tidak Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '002', 'yawerp', 'Aktif'),
(480, '3404102703090004', 'Nila Trisnawati', 'Nila', 'Istri', 'Default', '1986-03-03', 'Perempuan', 1, 5, 6, 'Kawin', 'Tidak Mukim', 'Tidak Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '002', 'kjkl', 'Aktif'),
(481, '3404102703090004', 'Natasya Dyah Anggaraini', 'Natasya', 'Anak', 'Default', '2005-06-08', 'Perempuan', 1, 3, 9, 'Belum Kawin', 'Tidak Mukim', 'Tidak Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '002', 'tyawe', 'Aktif'),
(482, '3404102703090004', 'Satria Ferdiansyah', 'Satria', 'Anak', 'Default', '2010-12-15', 'Laki-laki', 1, 9, 2, 'Belum Kawin', 'Tidak Mukim', 'Tidak Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '002', 'jkkjawe', 'Aktif'),
(483, '3404102703090004', 'Siti', 'Siti', 'Orangtua', 'Default', '1955-07-01', 'Perempuan', 1, 5, 4, 'Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '002', 'rtyw', 'Aktif'),
(484, '3404102704110003', 'Joko Mulyanto', 'Joko', 'Kepala Keluarga', 'Default', '1979-05-21', 'Laki-laki', 1, 5, 8, 'Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '013', 'uuuiu', 'Aktif'),
(485, '3404102704110003', 'Irma Sari Nurmiana', 'Irma', 'Istri', 'Default', '1979-05-20', 'Perempuan', 1, 5, 6, 'Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '', '-', '-', '-', '-', '-', '-', '013', 'cvbv', 'Aktif'),
(486, '3404102704110003', 'Miko Adib Pratama', 'Miko', 'Anak', 'Default', '2004-02-28', 'Laki-laki', 1, 3, 9, 'Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '013', 'fgha', 'Aktif'),
(487, '3404102704110003', 'Raafi Nur Syaddad', 'Raafi', 'Anak', 'Default', '2014-07-04', 'Laki-laki', 1, 9, 2, 'Belum Kawin', 'Mukim', 'Mukim', 0, '0', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '013', 'yte', 'Aktif'),
(488, '3404102704110012', 'Agung Heriyanto', 'Agung', 'Kepala Keluarga', 'Default', '1983-04-30', 'Laki-laki', 1, 6, 17, 'Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '002', 'mlawe', 'Aktif'),
(489, '3404102704110012', 'Sri Winarsih', 'Sri', 'Istri', 'Default', '1983-01-06', 'Perempuan', 1, 5, 6, 'Kawin', 'Mukim', 'Mukim', 0, '-', '0', '0', '-', '-', '-', '-', '-', '-', '-', '-', '-', '002', 'pawe', 'Aktif'),
(490, '3404102704110012', 'Bilqis Ufaria Bagaskoro', 'Bilqis', 'Anak', 'Default', '2015-03-05', 'Perempuan', 1, 9, 2, 'Belum Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '', '-', '-', '-', '-', '002', 'laew', 'Aktif'),
(491, '3404102704110012', 'Derby Anastasya Putri', 'Derby', 'Anak', 'Default', '2019-01-31', 'Perempuan', 1, 9, 2, 'Belum Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '002', 'uiawep', 'Aktif'),
(492, '3404102708070018', 'Tri Paryono', 'Tri', 'Kepala Keluarga', 'Default', '1979-01-08', 'Laki-laki', 1, 5, 11, 'Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '001', 'trt', 'Aktif'),
(493, '3404102708070018', 'Sri Lestari', 'Sri ', 'Istri', 'Default', '1980-08-01', 'Perempuan', 1, 5, 11, 'KAwin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '001', 'gtyu', 'Aktif'),
(494, '3404102708070018', 'Radhitya Eka Satria', 'Radhitya', 'Anak', 'Default', '2005-06-07', 'Laki-laki', 1, 3, 9, 'Belum Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '001', 'opawe', 'Aktif'),
(495, '3404102708070018', 'Zahwa Alikha Putri', 'Zahwa', 'Anak', 'Default', '2012-09-13', 'Perempuan', 1, 9, 2, 'Belum Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '001', 'ppowe', 'Aktif'),
(496, '3404102708070018', 'Putri Hasna Azzahra', 'Putri', 'Anak', 'Default', '2019-01-03', 'Perempuan', 1, 9, 2, 'Belum Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '001', 'ooawef', 'Aktif'),
(497, '3404102803130005', 'Ngadiman', 'Ngadiman', 'Kepala Keluarga', 'Default', '1979-07-03', 'Laki-laki', 1, 8, 3, 'Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '001', 'mnb', 'Aktif'),
(498, '3404102803130005', 'Tumiyem', 'Tumiyem', 'Istri', 'Default', '1977-12-31', 'Perempuan', 1, 8, 3, 'Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '001', 'bvcv', 'Aktif'),
(499, '3404102809060014', 'Sugeng Murdiharjo', 'Sugeng', 'Kepala Keluarga', 'Default', '1945-02-13', 'Laki-laki', 1, 8, 4, 'Cerai Mati', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '002', 'trv', 'Aktif'),
(500, '3404102809060014', 'Sumarsono', 'Sumarsono', 'Anak', 'Default', '1978-04-16', 'Laki-laki', 1, 5, 8, 'Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '002', 'poiie', 'Aktif'),
(501, '3404102810160008', 'Eko Nur Sardianto', 'Eko', 'Kepala Keluarga', 'Default', '1996-05-02', 'Laki-laki', 1, 5, 17, 'Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '001', 'rqw', 'Aktif'),
(502, '3404102810160008', 'Rikaningrum Rahayu', 'Ningrum', 'Istri', 'Default', '1994-09-07', 'Perempuan', 1, 6, 6, 'Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '001', 'piier', 'Aktif'),
(503, '3404102810160008', 'Aldiansyah Putra Nur Pratama', 'Aldi', 'Anak', 'Default', '2017-04-20', 'Laki-laki', 1, 9, 2, 'Belum Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '001', 'akja', 'Aktif'),
(504, '3404102812110009', 'Mardiwiyono Semi', 'Mardiwiyono', 'Kepala Keluarga', 'Default', '1947-01-01', 'Laki-laki', 1, 8, 17, 'Cerai Mati', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '', '002', 'pooy', 'Aktif'),
(505, '3404102903070009', 'Johan Komara', 'Johan', 'Kepala Keluarga', 'Default', '1952-08-10', 'Laki-laki', 1, 5, 8, 'Kawin', 'Mukim', 'Mukim', 0, '0', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '013', 'iuy', 'Aktif');
INSERT INTO `sementara_datainduk` (`kd_induk`, `no_kk`, `nama`, `nm_panggilan`, `status_hub_kk`, `tmp_lahir`, `tgl_lahir`, `j_kelamin`, `kd_agama`, `kd_pendidikan`, `kd_pekerjaan`, `status_kawin`, `status_mukim`, `keterangan_mukim`, `kd_level_ekonomi`, `gol_darah`, `is_latin`, `is_hijaiyah`, `is_iqra`, `is_quran`, `is_5waktu`, `is_jamaah`, `is_zakat_fitrah`, `is_zakat_mal`, `is_qurban`, `is_haji`, `is_umrah`, `kd_rt`, `no_ktp`, `status`) VALUES
(506, '3404102903070009', 'Niati', 'Niati', 'Istri', 'Default', '1972-03-12', 'Perempuan', 1, 5, 6, 'Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '013', 'terq', 'Aktif'),
(507, '3404102903070009', 'Yoeniar Suryo Soeseno', 'Suryo', 'Anak', 'Default', '1992-06-16', 'Laki-laki', 1, 4, 8, 'Belum Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '013', 'tuui', 'Aktif'),
(508, '3404102903070009', 'Sorya Hastuti', 'Sorya', 'Anak', 'Default', '1993-06-12', 'Perempuan', 1, 2, 6, 'Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '013', 'pkljj', 'Aktif'),
(509, '3404102903070009', 'Surya Budi Gunawan', 'Surya', 'Anak', 'Default', '1999-04-18', 'Laki-laki', 1, 5, 2, 'Belum Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '013', 'qtyu', 'Aktif'),
(510, '3404102906150002', 'Eko Guritno', 'Eko', 'Kepala Keluarga', 'Default', '1973-06-25', 'Laki-laki', 1, 4, 8, 'Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '001', 'iiuy', 'Aktif'),
(511, '3404102906150002', 'Luluk Khayati', 'Luluk', 'Istri', 'Default', '1974-12-25', 'Perempuan', 1, 4, 8, 'Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '001', 'lghj', 'Aktif'),
(512, '3404102907080004', 'Giman', 'Giman', 'Kepala Keluarga', 'Default', '1974-02-01', 'Laki-laki', 1, 8, 3, 'Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '001', 'lkm', 'Aktif'),
(513, '3404102907080004', 'Shofiyatun', 'Shofiyatun', 'Istri', 'Default', '1978-05-10', 'Perempuan', 1, 8, 3, 'Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '001', 'apjow\'eftg', 'Aktif'),
(514, '3404102912150003', 'Ryan Wibisono', 'Ryan', 'Kepala Keluarga', 'Default', '1987-07-22', 'Laki-laki', 1, 5, 8, 'Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '001', 'iow', 'Aktif'),
(515, '3404102912150003', 'Winarni Suprihatin', 'Winarni', 'Istri', 'Default', '1988-10-12', 'Perempuan', 1, 5, 6, 'Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '001', 'kkj', 'Aktif'),
(516, '3404102912150003', 'Alvaro Abid Morata Wibisono', 'Abid', 'Anak', 'Default', '2015-11-12', 'Laki-laki', 1, 9, 2, 'Belum Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '', '-', '-', '-', '-', '-', '001', 'alvm', 'Aktif'),
(517, '3404103101120016', 'Sutarto', 'Sutarto', 'Kepala Keluarga', 'Default', '1954-09-05', 'Laki-laki', 1, 5, 10, 'Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '001', 'pool', 'Aktif'),
(518, '3404103101120016', 'Dwi Lestari ', 'Dwi', 'Istri', 'Default', '1968-05-09', 'Perempuan', 1, 5, 17, 'Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '001', 'dwls', 'Aktif'),
(519, '3404103101120016', 'Alief Fajar Nugroho', 'Alif', 'Anak', 'Default', '2012-03-12', 'Laki-laki', 1, 3, 9, 'Belum Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '001', 'Allllfn', 'Aktif'),
(520, '3404103107130007', 'Jumari', 'Jumari', 'Kepala Keluarga', 'Default', '1969-12-31', 'Laki-laki', 1, 6, 4, 'Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '002', 'jmr', 'Aktif'),
(521, '3404103107130007', 'Estri Widodo', 'Estri', 'Istri', 'Default', '1971-02-01', 'Perempuan', 1, 6, 8, 'Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '002', 'estrw', 'Aktif'),
(522, '3404103107130007', 'Desti Nurhayati', 'Desti', 'Anak', 'Default', '1997-12-01', 'Perempuan', 1, 2, 8, 'Belum Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '002', 'destnhy', 'Aktif'),
(523, '3404103107130007', 'Tri Lestari Wahyuni', 'Tri', 'Anak', 'Default', '2001-04-21', 'Perempuan', 1, 6, 9, 'Belum Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '002', 'trlst', 'Aktif'),
(524, '3404103112180008', 'Muslikhudin', 'Muslikhudin', 'Kepala Keluarga', 'Default', '1988-09-25', 'Laki-laki', 1, 8, 17, 'Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '001', 'mslkh', 'Aktif'),
(525, '3404103112180008', 'Lia Widiastuti', 'Lia', 'Istri', 'Default', '1985-04-10', 'Perempuan', 1, 4, 6, 'Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '001', 'lwds', 'Aktif'),
(526, '3404103112180008', 'Nayyara Putri Rahmani', 'Nayyara', 'Anak', 'Default', '2013-10-03', 'Perempuan', 1, 9, 2, 'Belum Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '001', 'nyyra', 'Aktif'),
(527, '3404103112180013', 'Tukiyem', 'Tukiyem', 'Kepala Keluarga', 'Default', '1965-04-25', 'Perempuan', 1, 6, 3, 'Cerai Mati', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '001', 'tkym', 'Aktif'),
(528, '3404103112180013', 'Lestari Nita Rahayu', 'Lestari', 'Anak', 'Default', '1992-01-02', 'Perempuan', 1, 5, 8, 'Belum Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '001', 'lstrint', 'Aktif'),
(529, '3404103112180013', 'Adip Nugroho', 'Adip', 'Anak', 'Default', '1999-02-21', 'Laki-laki', 1, 5, 8, 'Belum Kawin', 'Mukim', 'Mukim', 0, '-', '0-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '001', 'adpng', 'Aktif'),
(530, '3404120204080044', 'Sunyoto', 'Sunyoto', 'Kepala Keluarga', 'Default', '1974-03-13', 'Laki-laki', 1, 5, 3, 'Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '001', 'snyt', 'Aktif'),
(531, '3404120204080044', 'Surip', 'Surip', 'Istri', 'Default', '1976-01-19', 'Perempuan', 1, 6, 6, 'Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '001', 'srp', 'Aktif'),
(532, '3404120204080044', 'Sulprisa Apriani', 'Sulprisa ', 'Anak', 'Default', '2002-04-22', 'Perempuan', 1, 5, 9, 'Belum Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '001', 'slprsa', 'Aktif'),
(533, '3404120204080044', 'Yudiawan Dwi Anggoro', 'Yudi', 'Anak', 'Default', '2011-05-26', 'Laki-laki', 1, 8, 9, 'Belum Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '001', 'ydawn', 'Aktif'),
(534, '3404120603170013', 'Didik Kurniadi Setyawan', 'Didik', 'Kepala Keluarga', 'Default', '1980-04-14', 'Laki-laki', 1, 4, 8, 'Kawin', 'Mukim', 'Mukim', 0, '0', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '002', 'ddk', 'Aktif'),
(535, '3404120603170013', 'Qoyum Anis Yuliana', 'Qoyum', 'Istri', 'Default', '1981-09-06', 'Perempuan', 1, 4, 17, 'Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '002', 'qym', 'Aktif'),
(536, '3404120603170013', 'Airlangga Cita Ayodya Setiawan', 'Cita', 'Anak', 'Default', '2010-02-16', 'Laki-laki', 1, 9, 2, 'Belum Kawin', 'Mukim', 'Mukim', 0, '--', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '002', 'arllnggg', 'Aktif'),
(537, '3404120603170013', 'Ardiono Deva Argananta Setiawan', 'Deva', 'Anak', 'Default', '2015-02-18', 'Laki-laki', 1, 9, 2, 'Belum Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '002', 'ardno', 'Aktif'),
(538, '3404121202052757', 'Suwardjo, S.H', 'Suwardjo', 'Kepala Keluarga', 'Default', '1955-07-10', 'Laki-laki', 1, 4, 10, 'Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '002', 'swdj', 'Aktif'),
(539, '3404121202052757', 'Dra. Mari Rahayu', 'Mari', 'Istri', 'Default', '1960-08-08', 'Perempuan', 1, 4, 8, 'Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '002', 'mrrhy', 'Aktif'),
(540, '3404121202052757', 'Yuliadi Tunjung Priambada, S.S', 'Yuliadi', 'Anak', 'Default', '1988-07-02', 'Laki-laki', 1, 4, 17, 'Belum Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '002', 'yldi', 'Aktif'),
(541, '3404121202052757', 'Ramadyan Endra Kurniawan', 'Endra', 'Anak', 'Default', '1994-08-03', 'Laki-laki', 1, 5, 9, 'Belum Kawin', 'Mukim', 'Mukim', 0, '0', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '002', 'ramdynendr', 'Aktif'),
(542, '3471030409982553', 'Idhil Fitri Usman', 'Usman', 'Kepala Keluarga', 'Default', '1960-04-01', 'Laki-laki', 1, 4, 17, 'Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '002', 'dhlftr', 'Aktif'),
(543, '3471030409982553', 'Sri Koestantini Mi\'radyah', 'Sri', 'Istri', 'Default', '1962-01-04', 'Perempuan', 1, 2, 17, 'Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '002', 'kstnt', 'Aktif'),
(544, '3471030409982553', 'Camella Sukma Dara', 'Camella ', 'Anak', 'Default', '1988-12-15', 'Perempuan', 1, 4, 7, 'Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '002', 'cmllskm', 'Aktif'),
(545, '3471030409982553', 'Dhienda Viola Deintha', 'Dinda', 'Anak', 'Default', '1991-08-15', 'Perempuan', 1, 4, 9, 'Belum Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '002', 'dhnda', 'Aktif'),
(546, '3471031502970797', 'Vincencius Mulyono', 'Mulyono', 'Kepala Keluarga', 'Default', '1942-08-18', 'Laki-laki', 3, 6, 3, 'Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '002', 'vncncs', 'Aktif'),
(547, '3471031502970797', 'Theresia Watiyem Mulyono', 'Theresia ', 'Istri', 'Default', '1954-05-05', 'Perempuan', 3, 6, 6, 'Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '001', 'thrsamlyn', 'Aktif'),
(548, '3471031502970797', 'Lukas Widya Nugroho', 'Lukas', 'Anak', 'Default', '1977-01-21', 'Laki-laki', 3, 5, 8, 'Belum Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '002', 'lksmlyn', 'Aktif'),
(549, '3471110409010087', 'Melani Yulianti', 'Melani', 'Kepala Keluarga', 'Default', '1963-08-29', 'Perempuan', 2, 5, 6, 'Cerai Mati', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '002', 'mlnylnt', 'Aktif'),
(550, '3471112912100002', 'Timothius Tunggu Etu', 'Timothius', 'Kepala Keluarga', 'Default', '1972-10-22', 'Laki-laki', 2, 5, 17, 'Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '002', 'tmthus', 'Aktif'),
(551, '3471112912100002', 'Evan Marliani', 'Evan', 'Istri', 'Default', '1984-11-29', 'Perempuan', 2, 5, 6, 'Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '002', 'evmrln', 'Aktif'),
(552, '3471112912100002', 'Aloysius Jason Putra T. E.', 'Jason', 'Anak', 'Default', '2004-04-10', 'Laki-laki', 2, 3, 9, 'Belum Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '002', 'alyss', 'Aktif'),
(553, '3471112912100002', 'Thedosius Joshua Putra T. E. ', 'Tedo', 'Anak', 'Default', '2006-05-15', 'Laki-laki', 2, 9, 2, 'Belum Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '002', 'tshss', 'Aktif'),
(554, '3471112912100002', 'Jeslyn Valerie Keit A.Lepir', 'Jeslyn', 'Anak', 'Defaullt', '2012-09-25', 'Perempuan', 2, 9, 2, 'Belum Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '002', 'jslyn', 'Aktif'),
(555, '3471121202140002', 'Matheo Raoldy Wicaksono', 'Matheo', 'Kepala Keluarga', 'Default', '1984-11-11', 'Laki-laki', 3, 2, 12, 'Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '002', 'mtheo', 'Aktif'),
(556, '3471121202140002', 'Maria Ivona Purwa Susanti', 'Maria', 'Istri', 'Default', '1990-05-19', 'Perempuan', 3, 4, 8, 'Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '002', 'mariaivn', 'Aktif'),
(557, '3471121202140002', 'Michael Alice Maria Wicaksono', 'Michael', 'Anak', 'Default', '2016-01-21', 'Laki-laki', 3, 9, 2, 'Belum Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '002', 'mchel', 'Aktif'),
(558, '7207162402080551', 'Saripudin', 'Saripudin', 'Kepala Keluarga', 'Default', '1969-06-12', 'Laki-laki', 1, 6, 17, 'Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '001', 'srpdn', 'Aktif'),
(559, '7207162402080551', 'Vonni', 'Vonni', 'Istri', 'Default', '1976-01-07', 'Perempuan', 1, 6, 17, 'Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '001', 'vnni', 'Aktif'),
(560, '7207162402080551', 'Srimukti Wulandari', 'Srimukti', 'Anak', 'Default', '1995-05-26', 'Perempuan', 1, 6, 9, 'Belum Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '001', 'srmkti', 'Aktif'),
(561, '7207162402080551', 'Rahma Mutia', 'Rahma ', 'Anak', 'Default', '1999-10-14', 'Perempuan', 1, 3, 9, 'Belum Kawin', 'Mukim', 'Mukim', 0, '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '-', '001', 'rhmalia', 'Aktif');

-- --------------------------------------------------------

--
-- Table structure for table `sementara_data_keahlian_warga`
--

CREATE TABLE `sementara_data_keahlian_warga` (
  `id` int(11) NOT NULL,
  `kd_induk` int(15) NOT NULL,
  `kd_keahlian` int(15) NOT NULL,
  `is_sertifikat` varchar(30) NOT NULL,
  `deskripsi_sertifikat` varchar(50) DEFAULT NULL,
  `level_sertifikat` varchar(20) DEFAULT NULL,
  `keterangan` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sementara_data_keahlian_warga`
--

INSERT INTO `sementara_data_keahlian_warga` (`id`, `kd_induk`, `kd_keahlian`, `is_sertifikat`, `deskripsi_sertifikat`, `level_sertifikat`, `keterangan`) VALUES
(9, 12, 3, 'Tidak', NULL, NULL, 'Aktif');

-- --------------------------------------------------------

--
-- Table structure for table `sementara_data_kk`
--

CREATE TABLE `sementara_data_kk` (
  `no_kk` varchar(20) NOT NULL,
  `no_rt` varchar(5) NOT NULL,
  `no_rw` varchar(5) NOT NULL,
  `nm_kk` varchar(50) NOT NULL,
  `kd_rumah` int(5) DEFAULT NULL,
  `kd_level_ekonomi` int(3) NOT NULL,
  `keterangan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sementara_data_kk`
--

INSERT INTO `sementara_data_kk` (`no_kk`, `no_rt`, `no_rw`, `nm_kk`, `kd_rumah`, `kd_level_ekonomi`, `keterangan`) VALUES
('3310040702042583', '002', '001', 'FX Suripto', NULL, 0, ''),
('3404070502056649', '001', '001', 'Kismanto', NULL, 1, ''),
('3404070802051475', '013', '001', 'Abda Yanuar Akhsan S.T', NULL, 0, ''),
('3404072106170003', '013', '001', 'Mustakim', NULL, 0, ''),
('3404072910130016', '013', '001', 'Tri Paramita Susanto', NULL, 0, ''),
('3404100102100006', '001', '001', 'Rian Hermawan Pandu Prasetyo', NULL, 0, ''),
('3404100103060010', '013', '001', 'Gunawan Bakti Auriyanto', NULL, 0, ''),
('3404100103120007', '001', '001', 'Erik Wahyudi', NULL, 0, ''),
('3404100107100010', '002', '001', 'Juwari', NULL, 0, ''),
('3404100107190005', '001', '001', 'Nuryani', NULL, 0, ''),
('3404100109140006', '001', '001', 'Mimbar Ambita Wisnu', NULL, 0, ''),
('3404100110070006', '001', '001', 'Joko Haryono', NULL, 0, ''),
('3404100111070002', '001', '001', 'Sriyana', NULL, 0, ''),
('3404100302070009', '002', '001', 'Agus Subeno', NULL, 0, ''),
('3404100308100001', '013', '001', 'Felix Yuni Feriyanto ', NULL, 0, ''),
('3404100311100004', '002', '001', 'Eko Cahyono', NULL, 0, ''),
('3404100402190009', '002', '001', 'Catur Dis Nugroho', NULL, 0, ''),
('3404100405070004', '013', '001', 'Suratman Wisnu Rendrawan', NULL, 0, ''),
('3404100409080002', '001', '001', 'Teguh Haryono', NULL, 0, ''),
('3404100502090007', '001', '001', 'Sarno Sungatno', NULL, 0, ''),
('3404100504110004', '013', '001', 'Marsalam', NULL, 0, ''),
('3404100603140011', '001', '001', 'Iwan Setiyoko', NULL, 0, ''),
('3404100604150007', '013', '001', 'Aris Mulya Budi Wirawan', NULL, 0, ''),
('3404100606170012', '001', '001', 'Arik Prasetyo', NULL, 0, ''),
('3404100610080006', '001', '001', 'Daryanto', NULL, 0, ''),
('3404100703070004', '002', '001', 'E. Sigit Wisnu Joedono', NULL, 0, ''),
('3404100710170002', '013', '001', 'Andi Prasetyo ', NULL, 0, ''),
('3404100712090003', '013', '001', 'Abdul Ngalim', NULL, 0, ''),
('3404100802110005', '002', '001', 'Widodo', NULL, 0, ''),
('3404101001120004', '001', '001', 'Untung Prayitno', NULL, 0, ''),
('3404101002050364', '001', '001', 'Sukardi', NULL, 0, ''),
('3404101002050366', '001', '001', 'Pujo Darmanto', NULL, 0, ''),
('3404101002050370', '002', '001', 'Harjono', NULL, 0, ''),
('3404101002050371', '002', '001', 'Darjo Wiyono', NULL, 0, ''),
('3404101002050373', '002', '001', 'Tukiran S. B.', NULL, 0, ''),
('3404101002050374', '002', '001', 'Sakri', NULL, 0, ''),
('3404101002050375', '002', '001', 'Sutimin', NULL, 0, ''),
('3404101002050376', '002', '001', 'Jemakir', NULL, 0, ''),
('3404101002050378', '001', '001', 'Suratin', NULL, 0, ''),
('3404101002050379', '001', '001', 'Lasinem', NULL, 0, ''),
('3404101002050380', '001', '001', 'Suroto', NULL, 0, ''),
('3404101002050381', '001', '001', 'Asipin', NULL, 0, ''),
('3404101002050382', '001', '001', 'Jikan', NULL, 0, ''),
('3404101002050383', '001', '001', 'Rubiyem', NULL, 0, 'Aktif'),
('3404101002050384', '001', '001', 'Haryanto', NULL, 0, ''),
('3404101002050385', '001', '001', 'Topo Haryono', NULL, 0, ''),
('3404101002050387', '001', '001', 'Supriyadi', NULL, 0, ''),
('3404101002050389', '001', '001', 'Rami', NULL, 0, ''),
('3404101002050392', '001', '001', 'Giyono', NULL, 0, ''),
('3404101002050396', '002', '001', 'Widi Sumarto', NULL, 0, ''),
('3404101002050397', '002', '001', 'Sukardi', NULL, 0, ''),
('3404101002050400', '001', '001', 'Sukrismanta', NULL, 0, ''),
('3404101002050401', '001', '001', 'Yadi Wiyoto', NULL, 0, ''),
('3404101002050403', '002', '001', 'Sugiman', NULL, 0, ''),
('3404101002050405', '002', '001', 'Santoso', NULL, 0, ''),
('3404101002050406', '002', '001', 'Bonasih', NULL, 0, ''),
('3404101002050407', '002', '001', 'Darmo Wiyoto Painem', NULL, 0, ''),
('3404101002050408', '002', '001', 'Bambang Sugiyanto', NULL, 0, ''),
('3404101002050411', '001', '001', 'Mukiyem', NULL, 0, ''),
('3404101002054528', '013', '001', 'Nur Hartanto', NULL, 0, ''),
('3404101002056546', '013', '001', 'Sriyadi', NULL, 0, ''),
('3404101002056683', '002', '001', 'Rajiman', NULL, 0, ''),
('3404101002056684', '001', '001', 'Wandiyo', NULL, 0, ''),
('3404101002056685', '001', '001', 'Haryadi', NULL, 0, ''),
('3404101002056688', '001', '001', 'Purwanta', NULL, 0, ''),
('3404101002056689', '001', '001', 'Syahrudin', NULL, 0, ''),
('3404101002056690', '002', '001', 'Sagino', NULL, 0, ''),
('3404101002056691', '001', '001', 'Harjomartono Jumbage', NULL, 0, ''),
('3404101002056692', '001', '001', 'Dasinem', NULL, 0, ''),
('3404101002056697', '002', '001', 'Jinab', NULL, 0, ''),
('3404101002056698', '001', '001', 'Didit Yulianto', NULL, 0, ''),
('3404101002056702', '013', '001', 'Suryanto', NULL, 0, ''),
('3404101002057048', '001', '001', 'Sudarmin', NULL, 0, ''),
('3404101002090007', '001', '001', 'Eko Utomo', NULL, 0, ''),
('3404101002120006', '002', '001', 'Maryoto', NULL, 0, ''),
('3404101005120003', '002', '001', 'Wagiyem', NULL, 0, ''),
('3404101022050403', '002', '001', 'Agus Supriyadi', NULL, 0, 'Aktif'),
('3404101022050411', '001', '001', 'Suyantinem', NULL, 0, 'Aktif'),
('3404101101160013', '001', '001', 'Marinem', NULL, 0, ''),
('3404101106080002', '013', '001', 'Iskandar Mas Suto Adi', NULL, 0, ''),
('3404101108110008', '002', '001', 'Tony Sunggoro', NULL, 0, ''),
('3404101210150007', '001', '001', 'Suradja', NULL, 0, ''),
('3404101408150001', '001', '001', 'Kholid Haryono', NULL, 0, ''),
('3404101412100001', '001', '001', 'Tulus Jati Warsono', NULL, 0, ''),
('3404101508070012', '001', '001', 'Gunarto', NULL, 0, ''),
('3404101509150001', '002', '001', 'Mariyono', NULL, 0, ''),
('3404101602110001', '001', '001', 'Hamdan Eko Santoso', NULL, 0, ''),
('3404101612110002', '001', '001', 'Ngadinah', NULL, 0, ''),
('3404101702110002', '002', '001', 'Haryadi', NULL, 0, ''),
('3404101703160002', '002', '001', 'Taugah Bidiyono', NULL, 0, ''),
('3404101707080017', '002', '001', 'Nurul Syamsuhadi', NULL, 0, ''),
('3404101709130010', '002', '001', 'Nurnowiyanto', NULL, 0, ''),
('3404101802150005', '002', '001', 'Martinus Tri Winarno', NULL, 0, ''),
('3404101804160006', '002', '001', 'Bayu iwan Setyawan', NULL, 0, ''),
('3404101810160014', '002', '001', 'Agus tri Suranto', NULL, 0, ''),
('3404101810180008', '001', '001', 'Mujiyanto', NULL, 0, ''),
('3404101901180006', '013', '001', 'Bambang Dwiyatmoko', NULL, 0, ''),
('3404101907130002', '002', '001', 'Suyoto', NULL, 0, ''),
('3404102001160006', '001', '001', 'Irfan Aji Son Aji', NULL, 0, ''),
('3404102003170005', '001', '001', 'Sudjilah', NULL, 0, ''),
('3404102103090003', '002', '001', 'Priyo Winoto Bingah', NULL, 0, ''),
('3404102106120004', '001', '001', 'Ngatiyem', NULL, 0, ''),
('3404102109070009', '001', '001', 'Siswanto', NULL, 0, ''),
('3404102205120002', '001', '001', 'Suyatno', NULL, 0, ''),
('3404102208140007', '002', '001', 'Didi Kristiawan', NULL, 0, ''),
('3404102308160005', '002', '001', 'Aziz Mahmudi', NULL, 0, ''),
('3404102311090005', '002', '001', 'Iswadi', NULL, 0, ''),
('3404102311090006', '002', '001', 'Wasono', NULL, 0, ''),
('3404102401090005', '002', '001', 'Sartono', NULL, 0, ''),
('3404102403070005', '001', '001', 'Supardi', NULL, 0, ''),
('3404102403070006', '001', '001', 'G. Sukimo', NULL, 0, ''),
('3404102406160009', '013', '001', 'Boediman Rachman', NULL, 0, ''),
('3404102412140007', '001', '001', 'Lutvi Nurnuryadi', NULL, 0, ''),
('3404102503090003', '001', '001', 'Rusminarti', NULL, 0, ''),
('3404102509120005', '001', '001', 'Maryata', NULL, 0, ''),
('3404102604120014', '002', '001', 'Suprihatni', NULL, 0, ''),
('3404102609110004', '001', '001', 'Wahyudianto', NULL, 0, ''),
('3404102703090004', '002', '001', 'Gunanta', NULL, 0, ''),
('3404102704110003', '013', '001', 'Joko Mulyanto', NULL, 0, ''),
('3404102704110012', '002', '001', 'Agung Heriyanto', NULL, 0, ''),
('3404102708070018', '001', '001', 'Tri Paryono', NULL, 0, ''),
('3404102803130005', '001', '001', 'Ngadiman', NULL, 0, ''),
('3404102809060014', '002', '001', 'Sugeng Murdiharjo', NULL, 0, ''),
('3404102810160008', '001', '001', 'Eko Nur Sardianto', NULL, 0, ''),
('3404102812110009', '002', '001', 'Mardiwiyono Semi', NULL, 0, ''),
('3404102903070009', '013', '001', 'Johan Komara', NULL, 0, ''),
('3404102906150002', '001', '001', 'Eko Guritno', NULL, 0, ''),
('3404102907080004', '001', '001', 'Giman', NULL, 0, ''),
('3404102912150003', '001', '001', 'Ryan Wibisono', NULL, 0, ''),
('3404103101120016', '001', '001', 'Sutarto', NULL, 0, ''),
('3404103107130007', '002', '001', 'Jumari', NULL, 0, ''),
('3404103112180008', '001', '001', 'Muslikhudin', NULL, 0, ''),
('3404103112180013', '001', '001', 'Tukiyem', NULL, 0, ''),
('3404120204080044', '001', '001', 'Sunyoto', NULL, 0, ''),
('3404120603170013', '002', '001', 'Didik Kurniadi Setyawan', NULL, 0, ''),
('3404121202052757', '002', '001', 'Suwardjo, S.H', NULL, 0, ''),
('3471030409982553', '002', '001', 'Idhil Fitri Usman', NULL, 0, ''),
('3471031502970797', '002', '001', 'Vincencius Mulyono', NULL, 0, ''),
('3471110409010087', '002', '001', 'Melani Yulianti', NULL, 0, ''),
('3471112912100002', '002', '001', 'Timothius Tunggu Etu', NULL, 0, ''),
('3471121202140002', '002', '001', 'Matheo Raoldy Wicaksono', NULL, 0, ''),
('7207162402080551', '001', '001', 'Saripudin', NULL, 0, ''),
('null', '013', '001', 'Adinta Toro Saputra', NULL, 0, ''),
('null1', '013', '001', 'Lilik Faudin', NULL, 0, '');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `google_id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `google_id`, `name`, `email`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, '111146074661636890180', 'Hidayatul Falah', 'masjidhidayatulfalah@gmail.com', '$2y$10$XDglJeK5Bae2d7fwivxTNuK52kdvKCrLVxvhDcxywtyPQ/nWP6mx6', '2', NULL, '2021-06-27 09:08:37', '2021-06-27 09:08:37'),
(3, '111136864486552762105', 'Rukun Warga', 'rwhidayatulfalah@gmail.com', '$2y$10$bssQqoGGhk.oTTlUrtTsn.tEB7Skq/Q54dDsf00nmPtiLq4tyjzli', '3', NULL, '2021-06-27 12:06:50', '2021-06-27 12:06:50'),
(4, '111602967450738481324', 'PKK KWT', 'pkkhidayatulfalah@gmail.com', '$2y$10$WYJudxRmDwCYQzqh14Pyb.Y8ShWvfzc9glN6EKr9VfplV3X.YRZUO', '5', NULL, '2021-06-27 13:46:16', '2021-06-27 13:46:16'),
(5, '118019443992754155797', 'Karang Taruna', 'kthidayatulfalah@gmail.com', '$2y$10$PaCOPDWvqXT/Ef2puLdE2Ov.Bu6eyxMH3tGcxnYAklJeO4chRgoLW', '4', NULL, '2021-06-27 13:47:39', '2021-06-27 13:47:39'),
(6, '106933490865772740218', 'Farhan Mozart', 'fmfachreza@gmail.com', '$2y$10$MC1C0edM.GeNooTFCcGTzOAych1vlmRMwJJQ16TjaqyOXV4vod3lW', '2', NULL, '2021-08-05 23:06:26', '2021-08-05 23:06:26'),
(7, '114658843128992403535', 'FARHAN MOZART ADITYA FAHREZA -', '15523087@students.uii.ac.id', '$2y$10$ROn4KG3ZSmssjQuhQlmGVuxDtCjHW5wIc1bVOwWT5RKept1JxAG/m', '2', NULL, '2021-08-21 06:36:58', '2021-08-21 06:36:58'),
(8, '106637250121800753613', 'LADY YUASSHASSA RAHARJO', '18523265@students.uii.ac.id', '$2y$10$OIKAMSACmVj.4FgAYKkwbe7jmWn/FiLddGUlCpWsLwfnrlvi5kb.y', '2', NULL, '2021-10-20 08:43:25', '2021-10-20 08:43:25'),
(9, '111485600787811475531', 'SnowWhite', 'ibnu.kresnawan48@gmail.com', '$2y$10$8G8YOnRVOsOQcFlxBayMues3jwAGLEhhh5jdeuOyvaZmqXS5C/PAm', '2', NULL, '2022-05-25 12:48:35', '2022-05-25 12:48:35');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `datainduk`
--
ALTER TABLE `datainduk`
  ADD PRIMARY KEY (`kd_induk`),
  ADD UNIQUE KEY `no_ktp` (`no_ktp`),
  ADD KEY `kd_agama` (`kd_agama`),
  ADD KEY `kd_pendidikan` (`kd_pendidikan`),
  ADD KEY `kd_pekerjaan` (`kd_pekerjaan`),
  ADD KEY `kd_level_ekonomi` (`kd_level_ekonomi`),
  ADD KEY `no_kk` (`no_kk`),
  ADD KEY `kd_rt` (`kd_rt`);

--
-- Indexes for table `data_keahlian_warga`
--
ALTER TABLE `data_keahlian_warga`
  ADD KEY `kd_induk` (`kd_induk`),
  ADD KEY `id` (`id`),
  ADD KEY `data_keahlian_warga_ibfk_2` (`kd_keahlian`);

--
-- Indexes for table `data_kk`
--
ALTER TABLE `data_kk`
  ADD PRIMARY KEY (`no_kk`),
  ADD KEY `kd_level_ekonomi` (`kd_level_ekonomi`),
  ADD KEY `no_rt` (`no_rt`),
  ADD KEY `no_rw` (`no_rw`),
  ADD KEY `kd_rumah` (`kd_rumah`);

--
-- Indexes for table `md_agama`
--
ALTER TABLE `md_agama`
  ADD PRIMARY KEY (`kd_agama`);

--
-- Indexes for table `md_keahlian`
--
ALTER TABLE `md_keahlian`
  ADD PRIMARY KEY (`kd_keahlian`);

--
-- Indexes for table `md_level_ekonomi`
--
ALTER TABLE `md_level_ekonomi`
  ADD PRIMARY KEY (`kd_level_ekonomi`);

--
-- Indexes for table `md_pekerjaan`
--
ALTER TABLE `md_pekerjaan`
  ADD PRIMARY KEY (`kd_pekerjaan`);

--
-- Indexes for table `md_pendidikan`
--
ALTER TABLE `md_pendidikan`
  ADD PRIMARY KEY (`kd_pendidikan`);

--
-- Indexes for table `md_rt`
--
ALTER TABLE `md_rt`
  ADD PRIMARY KEY (`kd_rt`),
  ADD KEY `no_rw` (`no_rw`);

--
-- Indexes for table `md_rumah`
--
ALTER TABLE `md_rumah`
  ADD PRIMARY KEY (`kd_rumah`),
  ADD KEY `kd_rt` (`kd_rt`),
  ADD KEY `no_kk` (`no_kk`);

--
-- Indexes for table `md_rw`
--
ALTER TABLE `md_rw`
  ADD PRIMARY KEY (`no_rw`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `sementara`
--
ALTER TABLE `sementara`
  ADD PRIMARY KEY (`no_kk`);

--
-- Indexes for table `sementara_data_keahlian_warga`
--
ALTER TABLE `sementara_data_keahlian_warga`
  ADD KEY `id` (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `datainduk`
--
ALTER TABLE `datainduk`
  MODIFY `kd_induk` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=565;

--
-- AUTO_INCREMENT for table `data_keahlian_warga`
--
ALTER TABLE `data_keahlian_warga`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;

--
-- AUTO_INCREMENT for table `sementara_data_keahlian_warga`
--
ALTER TABLE `sementara_data_keahlian_warga`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `datainduk`
--
ALTER TABLE `datainduk`
  ADD CONSTRAINT `datainduk_ibfk_1` FOREIGN KEY (`kd_agama`) REFERENCES `md_agama` (`kd_agama`),
  ADD CONSTRAINT `datainduk_ibfk_2` FOREIGN KEY (`kd_pendidikan`) REFERENCES `md_pendidikan` (`kd_pendidikan`),
  ADD CONSTRAINT `datainduk_ibfk_3` FOREIGN KEY (`kd_pekerjaan`) REFERENCES `md_pekerjaan` (`kd_pekerjaan`),
  ADD CONSTRAINT `datainduk_ibfk_4` FOREIGN KEY (`kd_level_ekonomi`) REFERENCES `md_level_ekonomi` (`kd_level_ekonomi`),
  ADD CONSTRAINT `datainduk_ibfk_5` FOREIGN KEY (`no_kk`) REFERENCES `data_kk` (`no_kk`),
  ADD CONSTRAINT `datainduk_ibfk_6` FOREIGN KEY (`kd_rt`) REFERENCES `md_rt` (`kd_rt`);

--
-- Constraints for table `data_keahlian_warga`
--
ALTER TABLE `data_keahlian_warga`
  ADD CONSTRAINT `data_keahlian_warga_ibfk_1` FOREIGN KEY (`kd_induk`) REFERENCES `datainduk` (`kd_induk`),
  ADD CONSTRAINT `data_keahlian_warga_ibfk_2` FOREIGN KEY (`kd_keahlian`) REFERENCES `md_keahlian` (`kd_keahlian`);

--
-- Constraints for table `data_kk`
--
ALTER TABLE `data_kk`
  ADD CONSTRAINT `data_kk_ibfk_4` FOREIGN KEY (`kd_level_ekonomi`) REFERENCES `md_level_ekonomi` (`kd_level_ekonomi`),
  ADD CONSTRAINT `data_kk_ibfk_5` FOREIGN KEY (`no_rt`) REFERENCES `md_rt` (`kd_rt`),
  ADD CONSTRAINT `data_kk_ibfk_6` FOREIGN KEY (`no_rw`) REFERENCES `md_rw` (`no_rw`),
  ADD CONSTRAINT `data_kk_ibfk_7` FOREIGN KEY (`kd_rumah`) REFERENCES `md_rumah` (`kd_rumah`);

--
-- Constraints for table `md_rt`
--
ALTER TABLE `md_rt`
  ADD CONSTRAINT `md_rt_ibfk_1` FOREIGN KEY (`no_rw`) REFERENCES `md_rw` (`no_rw`);

--
-- Constraints for table `md_rumah`
--
ALTER TABLE `md_rumah`
  ADD CONSTRAINT `md_rumah_ibfk_1` FOREIGN KEY (`kd_rt`) REFERENCES `md_rt` (`kd_rt`),
  ADD CONSTRAINT `md_rumah_ibfk_2` FOREIGN KEY (`no_kk`) REFERENCES `data_kk` (`no_kk`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
