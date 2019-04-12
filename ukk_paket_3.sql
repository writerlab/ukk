-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 12, 2019 at 11:12 AM
-- Server version: 5.7.21
-- PHP Version: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ukk_paket_3`
--

-- --------------------------------------------------------

--
-- Table structure for table `detil_pinjam`
--

CREATE TABLE `detil_pinjam` (
  `id_detil_pinjam` int(11) UNSIGNED NOT NULL,
  `id_inventaris` int(11) DEFAULT NULL,
  `jumlah` int(11) DEFAULT NULL,
  `id_peminjaman` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `detil_pinjam`
--

INSERT INTO `detil_pinjam` (`id_detil_pinjam`, `id_inventaris`, `jumlah`, `id_peminjaman`) VALUES
(1, 1, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `inventaris`
--

CREATE TABLE `inventaris` (
  `id_inventaris` int(11) UNSIGNED NOT NULL,
  `nama` varchar(30) DEFAULT NULL,
  `kondisi` varchar(5) DEFAULT NULL,
  `keterangan` text,
  `jumlah` int(11) DEFAULT NULL,
  `id_jenis` int(11) DEFAULT NULL,
  `tanggal_register` date DEFAULT NULL,
  `id_ruang` int(11) DEFAULT NULL,
  `kode_inventaris` varchar(20) DEFAULT NULL,
  `id_petugas` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `inventaris`
--

INSERT INTO `inventaris` (`id_inventaris`, `nama`, `kondisi`, `keterangan`, `jumlah`, `id_jenis`, `tanggal_register`, `id_ruang`, `kode_inventaris`, `id_petugas`) VALUES
(1, 'Terminal', 'Baik', 'Teriminal 5 port', 10, 1, '2019-01-16', 2, 'V001', 1),
(2, 'Komputer', 'baru', 'Komputer All in One. Merek: Lenovo. 15 inch.', 36, 2, '2019-02-26', 1, 'KOM01', 1);

-- --------------------------------------------------------

--
-- Table structure for table `jenis`
--

CREATE TABLE `jenis` (
  `id_jenis` int(11) UNSIGNED NOT NULL,
  `nama_jenis` varchar(30) DEFAULT NULL,
  `kode_jenis` varchar(20) DEFAULT NULL,
  `keterangan` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `jenis`
--

INSERT INTO `jenis` (`id_jenis`, `nama_jenis`, `kode_jenis`, `keterangan`) VALUES
(1, 'Perkakas', 'P111', 'Sabangsaning obeng, palu, ragaji, dll.'),
(2, 'Elektronik', 'E111', 'bor elektrik, terminal, dll'),
(3, 'ATK', 'A111', 'khusus untuk barang alat tulis kantor'),
(4, 'nama jenis', 'nj002', 'ini adalah jenis'),
(5, 'Lain-lain', 'L123', '.....');

-- --------------------------------------------------------

--
-- Table structure for table `level`
--

CREATE TABLE `level` (
  `id_level` int(11) UNSIGNED NOT NULL,
  `nama_level` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `level`
--

INSERT INTO `level` (`id_level`, `nama_level`) VALUES
(1, 'administrator'),
(2, 'operator'),
(3, 'peminjam');

-- --------------------------------------------------------

--
-- Table structure for table `pegawai`
--

CREATE TABLE `pegawai` (
  `id_pegawai` int(11) UNSIGNED NOT NULL,
  `nama_pegawai` varchar(30) DEFAULT NULL,
  `nip` int(15) DEFAULT NULL,
  `alamat` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pegawai`
--

INSERT INTO `pegawai` (`id_pegawai`, `nama_pegawai`, `nip`, `alamat`) VALUES
(1, 'Zul Hilmi', 11110045, 'Planet Bumi, Indonesia, Tasikmalaya'),
(2, 'Deni Ridwan', 11110003, 'Planet Bumi, Cikalang, Indonesia'),
(3, 'Jeon', 99112233, 'Babakan Cianjur, Taskmalaya');

-- --------------------------------------------------------

--
-- Table structure for table `peminjaman`
--

CREATE TABLE `peminjaman` (
  `id_peminjaman` int(11) UNSIGNED NOT NULL,
  `tanggal_pinjam` date DEFAULT NULL,
  `tanggal_kembali` date DEFAULT NULL,
  `status_peminjaman` varchar(20) DEFAULT NULL,
  `id_pegawai` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `peminjaman`
--

INSERT INTO `peminjaman` (`id_peminjaman`, `tanggal_pinjam`, `tanggal_kembali`, `status_peminjaman`, `id_pegawai`) VALUES
(1, '2019-01-17', NULL, 'sedang pinjam', 1);

-- --------------------------------------------------------

--
-- Table structure for table `petugas`
--

CREATE TABLE `petugas` (
  `id_petugas` int(11) UNSIGNED NOT NULL,
  `username` varchar(15) DEFAULT NULL,
  `password` varchar(80) DEFAULT NULL,
  `nama_petugas` varchar(30) DEFAULT NULL,
  `id_level` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `petugas`
--

INSERT INTO `petugas` (`id_petugas`, `username`, `password`, `nama_petugas`, `id_level`) VALUES
(1, 'admin', 'c4ca4238a0b923820dcc509a6f75849b', 'Zul Hilmi', 1);

-- --------------------------------------------------------

--
-- Table structure for table `ruang`
--

CREATE TABLE `ruang` (
  `id_ruang` int(11) UNSIGNED NOT NULL,
  `nama_ruang` varchar(20) DEFAULT NULL,
  `kode_ruang` varchar(20) DEFAULT NULL,
  `keterangan` text
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ruang`
--

INSERT INTO `ruang` (`id_ruang`, `nama_ruang`, `kode_ruang`, `keterangan`) VALUES
(1, 'Lab.1', 'L001', 'Laboratorium TKJ'),
(2, 'Lab.2', 'L002', 'Laboratorium RPL'),
(3, 'R.Teori 1', 'RT1', 'Ruangan Teori 1'),
(4, 'R.2', 'R2', 'Ruang Teori 2'),
(5, 'R.3', 'R3', 'Ruang Teori 3'),
(6, 'R.4', 'R4', 'Ruang Teori 4'),
(7, 'Technopark', 'TP1', 'gedung technopark');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `detil_pinjam`
--
ALTER TABLE `detil_pinjam`
  ADD PRIMARY KEY (`id_detil_pinjam`);

--
-- Indexes for table `inventaris`
--
ALTER TABLE `inventaris`
  ADD PRIMARY KEY (`id_inventaris`);

--
-- Indexes for table `jenis`
--
ALTER TABLE `jenis`
  ADD PRIMARY KEY (`id_jenis`);

--
-- Indexes for table `level`
--
ALTER TABLE `level`
  ADD PRIMARY KEY (`id_level`);

--
-- Indexes for table `pegawai`
--
ALTER TABLE `pegawai`
  ADD PRIMARY KEY (`id_pegawai`);

--
-- Indexes for table `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD PRIMARY KEY (`id_peminjaman`);

--
-- Indexes for table `petugas`
--
ALTER TABLE `petugas`
  ADD PRIMARY KEY (`id_petugas`);

--
-- Indexes for table `ruang`
--
ALTER TABLE `ruang`
  ADD PRIMARY KEY (`id_ruang`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `detil_pinjam`
--
ALTER TABLE `detil_pinjam`
  MODIFY `id_detil_pinjam` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `inventaris`
--
ALTER TABLE `inventaris`
  MODIFY `id_inventaris` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `jenis`
--
ALTER TABLE `jenis`
  MODIFY `id_jenis` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `level`
--
ALTER TABLE `level`
  MODIFY `id_level` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pegawai`
--
ALTER TABLE `pegawai`
  MODIFY `id_pegawai` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `peminjaman`
--
ALTER TABLE `peminjaman`
  MODIFY `id_peminjaman` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `petugas`
--
ALTER TABLE `petugas`
  MODIFY `id_petugas` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ruang`
--
ALTER TABLE `ruang`
  MODIFY `id_ruang` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
