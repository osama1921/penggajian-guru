-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 04, 2018 at 02:22 AM
-- Server version: 10.1.16-MariaDB
-- PHP Version: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `guru`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(20) NOT NULL,
  `username` varchar(60) NOT NULL,
  `password` varchar(60) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'man jada wa jada');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_gaji`
--

CREATE TABLE `tbl_gaji` (
  `id_guru` varchar(30) NOT NULL,
  `jml_hadir` int(11) NOT NULL,
  `jml_sakit` int(20) NOT NULL,
  `jml_thadir` int(20) NOT NULL,
  `gaji_perjam` int(8) NOT NULL,
  `total_gaji` int(10) NOT NULL,
  `bank` varchar(50) NOT NULL,
  `no_rekening` varchar(50) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `tanggal` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_gaji`
--

INSERT INTO `tbl_gaji` (`id_guru`, `jml_hadir`, `jml_sakit`, `jml_thadir`, `gaji_perjam`, `total_gaji`, `bank`, `no_rekening`, `nama`, `tanggal`, `status`) VALUES
('1', 30, 5, 5, 80000, 3350000, 'BNI', '08829271', 'Teguh Sugiarto', '03-05-2018 ', 'Belum Transfer'),
('1', 30, 5, 5, 80000, 3350000, 'BNI', '21896348', 'Teguh Sugiarto', '03-05-2018 ', 'Belum Transfer');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_guru`
--

CREATE TABLE `tbl_guru` (
  `id_guru` int(20) NOT NULL,
  `nama` varchar(30) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `tempat_lahir` varchar(20) NOT NULL,
  `tgl_lahir` varchar(50) NOT NULL,
  `agama` varchar(20) NOT NULL,
  `no_telp` varchar(11) NOT NULL,
  `pendidikan_akhir` varchar(50) NOT NULL,
  `lulus_tahun` int(4) NOT NULL,
  `jabatan` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  `alamat` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_guru`
--

INSERT INTO `tbl_guru` (`id_guru`, `nama`, `jenis_kelamin`, `tempat_lahir`, `tgl_lahir`, `agama`, `no_telp`, `pendidikan_akhir`, `lulus_tahun`, `jabatan`, `password`, `alamat`) VALUES
(1, 'TEGUH SUGIARTO', 'Laki-Laki', 'Pandeglang', '1985-09-27', 'Islam', '08877096722', 'S1', 2005, 'GURU', '239342767', 'Cadasari'),
(2, 'Maesyaroh', 'Perempuan', 'Pandeglang', '1984-11-22', 'Islam', '08676767678', 'S!', 2007, 'Wali Kelas', '1293879598', 'K cass');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_jam`
--

CREATE TABLE `tbl_jam` (
  `id_guru` varchar(20) NOT NULL,
  `Nama` varchar(50) NOT NULL,
  `pelajaran` varchar(50) NOT NULL,
  `jumlah_jam` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_jam`
--

INSERT INTO `tbl_jam` (`id_guru`, `Nama`, `pelajaran`, `jumlah_jam`) VALUES
('1', 'TEGUH SUGIARTO', 'PWD', 10);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_kehadiran`
--

CREATE TABLE `tbl_kehadiran` (
  `id_guru` int(20) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jumlah_hadir` int(3) NOT NULL,
  `jml_thadir` int(20) NOT NULL,
  `jml_sakit` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_kehadiran`
--

INSERT INTO `tbl_kehadiran` (`id_guru`, `nama`, `jumlah_hadir`, `jml_thadir`, `jml_sakit`) VALUES
(1, 'TEGUH SUGIARTO', 30, 5, 5);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_tunjangan`
--

CREATE TABLE `tbl_tunjangan` (
  `id_guru` varchar(30) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jml_anak` varchar(6) NOT NULL,
  `jml_tunjangan` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_tunjangan`
--

INSERT INTO `tbl_tunjangan` (`id_guru`, `nama`, `jml_anak`, `jml_tunjangan`) VALUES
('1', 'TEGUH SUGIARTO', '3', 750000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_guru`
--
ALTER TABLE `tbl_guru`
  ADD PRIMARY KEY (`id_guru`);

--
-- Indexes for table `tbl_tunjangan`
--
ALTER TABLE `tbl_tunjangan`
  ADD PRIMARY KEY (`id_guru`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
